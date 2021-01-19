<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA;

use Illuminate\Database\Eloquent\Model;
use SIGA\Sluggable\SlugOptions;

class Contact extends Model
{

    use TableTrait;

    public $incrementing = false;

    protected $keyType = "string";

    protected $table = "contacts";

    protected $fillable = ['tenant_id', 'user_id', 'slug', 'name', 'description', 'status', 'updated_at', 'created_at'];

    public function contactable()
    {

        return $this->morphTo();
    }


    public function getSlugOptions()
    {
        if (is_string($this->slugTo())) {
            if (in_array($this->slugTo(), $this->fillable)) {
                return SlugOptions::create()
                    ->generateSlugsFrom($this->slugFrom())
                    ->saveSlugsTo($this->slugTo());
            }
        }
    }
}
