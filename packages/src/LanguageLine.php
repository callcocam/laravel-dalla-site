<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace  SIGA;

use Arr;
use Cache;
use SIGA\TableTrait;
use Illuminate\Database\Eloquent\Model;

class LanguageLine extends Model
{
    use TableTrait;

    protected $keyType = "string";

    public $incrementing = false;

    protected $fillable = ['tenant_id', 'user_id', 'group', 'key', 'text', 'status'];

     /** @var array */
     public $translatable = ['text'];

     /** @var array */
     public $guarded = ['id'];

     /** @var array */
     protected $casts = ['text' => 'array'];

     public static function boot()
     {
         parent::boot();

         $flushGroupCache = function (self $languageLine) {
             $languageLine->flushGroupCache();
         };

         static::saved($flushGroupCache);
         static::deleted($flushGroupCache);
     }

     public static function getTranslationsForGroup(string $locale, string $group): array
     {

         return Cache::rememberForever(static::getCacheKey($group, $locale), function () use ($group, $locale) {
             return static::query()
                 ->where('group', $group)
                 ->get()
                 ->reduce(function ($lines, self $languageLine) use ($locale) {
                     $translation = $languageLine->getTranslation($locale);
                     if ($translation !== null) {
                         Arr::set($lines, $languageLine->key, $translation);
                     }

                     return $lines;
                 }) ?? [];
         });
     }

     public static function getCacheKey(string $group, string $locale): string
     {
         return "spatie.translation-loader.{$group}.{$locale}";
     }

     /**
      * @param string $locale
      *
      * @return string
      */
     public function getTranslation(string $locale): ?string
     {
         if (!isset($this->text[$locale])) {
             $fallback = config('app.fallback_locale');

             return $this->text[$fallback] ?? null;
         }

         return $this->text[$locale];
     }

     /**
      * @param string $locale
      * @param string $value
      *
      * @return $this
      */
     public function setTranslation(string $locale, string $value)
     {
         $this->text = array_merge($this->text ?? [], [$locale => $value]);

         return $this;
     }

     public function flushGroupCache()
     {
         foreach ($this->getTranslatedLocales() as $locale) {
             Cache::forget(static::getCacheKey($this->group, $locale));
         }
     }

     protected function getTranslatedLocales(): array
     {
         return array_keys($this->text);
     }

    public function getEndpoint()
    {

        return "language-lines";
    }


    protected function isShow(){

        return false;
    }
}
