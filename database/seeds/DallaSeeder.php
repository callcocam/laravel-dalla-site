<?php

use Illuminate\Database\Seeder;
use SIGA\Make;

class DallaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Slider = $this->make(
            [
                "name" => "Sliders",
                "path" => "sliders",
                "app_table" => "sliders",
                "app_controller" => "Slider",
                "app_model" => "Slider",
                "app_route" => "sliders",
            ]
        );

        $this->menu_attribute($Slider->menu()->create([
            "name" => "Sliders",
            "ordering" => "5",
        ]), [
            "url" => "/admin/sliders",
            "icon" => "CircleIcon",
            "i18n" => "Sliders"
        ]);

        $Content = $this->make(
            [
                "name" => "Conteúdo",
                "path" => "contents",
                "app_table" => "contents",
                "app_controller" => "Content",
                "app_model" => "Content",
                "app_route" => "contents",
            ]
        );

        $this->menu_attribute($Content->menu()->create([
            "name" => "Conteúdo",
            "ordering" => "6",
        ]), [
            "url" => "/admin/contents",
            "icon" => "CircleIcon",
            "i18n" => "Contents"
        ]);

        $Event = $this->make(
            [
                "name" => "Eventos",
                "path" => "events",
                "app_table" => "events",
                "app_controller" => "Event",
                "app_model" => "Event",
                "app_route" => "events",
            ]
        );

        $this->menu_attribute($Event->menu()->create([
            "name" => "Eventos",
            "ordering" => "7",
        ]), [
            "url" => "/admin/events",
            "icon" => "CircleIcon",
            "i18n" => "Events"
        ]);

        $Product = $this->make(
            [
                "name" => "Produtos",
                "path" => "products",
                "app_table" => "products",
                "app_controller" => "Product",
                "app_model" => "Product",
                "app_route" => "products",
            ]
        );

        $this->menu_attribute($Product->menu()->create([
            "name" => "Produtos",
            "ordering" => "8",
        ]), [
            "url" => "/admin/products",
            "icon" => "CircleIcon",
            "i18n" => "Products"
        ]);


        $ProductStyle = $this->make(
            [
                "name" => "Estilos Produtos",
                "path" => "product-styles",
                "app_table" => "product_styles",
                "app_controller" => "ProductStyle",
                "app_model" => "ProductStyle",
                "app_route" => "product-styles",
            ]
        );

        $this->menu_attribute($ProductStyle->menu()->create([
            "name" => "Estilos Produtos",
            "ordering" => "9",
        ]), [
            "url" => "/admin/products-styles",
            "icon" => "CircleIcon",
            "i18n" => "EstilosProdutos"
        ]);

        $Award = $this->make(
            [
                "name" => "Prêmios",
                "path" => "awards",
                "app_table" => "awards",
                "app_controller" => "Award",
                "app_model" => "Award",
                "app_route" => "awards",
            ]
        );

        $this->menu_attribute($Award->menu()->create([
            "name" => "Prêmios",
            "ordering" => "10",
        ]), [
            "url" => "/admin/awards",
            "icon" => "CircleIcon",
            "i18n" => "Award"
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
                "name" => "Profile",
                "path" => null,
                "app_path" => "App",
                "app_theme" => "Dalla",
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
