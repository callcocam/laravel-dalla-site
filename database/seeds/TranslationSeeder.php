<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */
use Illuminate\Database\Seeder;
use Illuminate\Filesystem\Filesystem;
use SIGA\Make;

class TranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $languages = $this->language(new Filesystem());

        foreach (json_decode($languages, true) as $key => $language) {

            if(!\SIGA\Translation::query()->where('name',$key)->first()){
                factory(\SIGA\Translation::class)->create([
                    'name'=>$key,
                    'language'=>app()->getLocale(),
                    'description' =>$language
                ]);
            }

        }

        /* $Event = $this->make(
             [
                 "name" => "Tradução",
                 "path" => "translations",
                 "app_table" => "translations",
                 "app_controller" => "Translation",
                 "app_model" => "Translation",
                 "app_route" => "translations",
             ]
         );

         $this->menu_attribute($Event->menu()->create([
             "name" => "Tradução",
             "ordering" => "1",
         ]), [
             "url" => "/admin/translations",
             "icon" => "CircleIcon",
             "i18n" => "Translations"
         ]);*/
    }

    public function language(Filesystem $filesystem)
    {
        return $filesystem->get(resource_path(sprintf("lang/%s.json", app()->getLocale())), true);

    }
    protected function menu_attribute($menu, $data)
    {
        $menu->menu_attribute()->create($data);
    }
    protected function make($data = [])
    {
        return factory(Make::class)->create(
            array_merge([
                "name" => null,
                "path" => null,
                "app_path" => "App",
                "app_theme" => null,
                "app_root" => "app",
                "app_table" => null,
                "app_controller" => null,
                "app_model" => null,
                "app_route" => null,
                "app_method" => "crud",
            ], $data)
        );
    }
}
