<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */
use Illuminate\Database\Seeder;
use SIGA\Make;

class EventEdtionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $Event = $this->make(
            [
                "name" => "Edições De Eventos",
                "path" => "event-edtions",
                "app_table" => "event_edtions",
                "app_controller" => "EventEdition",
                "app_model" => "EventEdtion",
                "app_route" => "event-edtions",
            ]
        );

        $this->menu_attribute($Event->menu()->create([
            "name" => "Edições De Eventos",
            "ordering" => "1",
        ]), [
            "url" => "/admin/event-edtions",
            "icon" => "CircleIcon",
            "i18n" => "EventEdtions"
        ]);
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
