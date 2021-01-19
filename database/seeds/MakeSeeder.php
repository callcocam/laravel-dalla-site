<?php

use Illuminate\Database\Seeder;
use SIGA\Make;

class MakeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Dashboard = factory(Make::class)->create([
            "name" => "Dashboard",
            "path" => "admin",
            "app_path" => "SIGA",
            "app_theme" => null,
            "app_root" => "packages/src",
            "app_table" => null,
            "app_controller" => "Admin",
            "app_model" => "Admin",
            "app_route" => "admin",
            "app_method" => "get",
        ]);

        $this->menu_attribute($Dashboard->menu()->create([
            "name" => "Dashboard",
            "ordering" => "1"
        ]), [
            "url" => "/admin",
            "icon" => "MonitorIcon",
            "i18n" => "Dashboard"
        ]);


        $settigns = factory(Make::class)->create([
            "name" => "Settigns"
        ]);

        $this->menu_attribute($settigns->menu()->create([
            "name" => "Settigns",
            "ordering" => "2",
        ]), [
            "url" => null,
            "icon" => "MonitorIcon",
            "i18n" => "Settigns"
        ]);

        $makes = factory(Make::class)->create(
            [
                "name" => "Makes",
                "path" => "makes",
                "app_path" => "SIGA",
                "app_theme" => null,
                "app_root" => "packages/src",
                "app_table" => "makes",
                "app_controller" => "Make",
                "app_model" => "Make",
                "app_route" => "makes",
                "app_method" => "crud",

            ]
        );

        $this->menu_attribute($makes->submenu()->create([
            "name" => "Makes",
            "ordering" => "1"
        ]), [
            "url" => "/admin/makes",
            "icon" => "CircleIcon",
            "i18n" => "Make"
        ]);

        $companies = factory(Make::class)->create(
            [
                "name" => "Company",
                "path" => "company",
                "app_path" => "SIGA",
                "app_theme" => null,
                "app_root" => "packages/src",
                "app_table" => "companies",
                "app_controller" => "Company",
                "app_model" => "Company",
                "app_route" => "company",
                "app_method" => "get",

            ]
        );

        $this->menu_attribute($companies->submenu()->create([
            "name" => "Company",
            "ordering" => "1"
        ]), [
            "url" => "/admin/companies",
            "icon" => "CircleIcon",
            "i18n" => "Company"
        ]);

        $users = factory(Make::class)->create(
            [
                "name" => "Users",
                "path" => "users",
                "app_path" => "SIGA",
                "app_theme" => null,
                "app_root" => "packages/src",
                "app_table" => "users",
                "app_controller" => "User",
                "app_model" => "User",
                "app_route" => "users",
                "app_method" => "crud",
            ]
        );


        $this->menu_attribute($users->submenu()->create([
            "name" => "User",
            "ordering" => "2"
        ]), [
            "url" => "/admin/users",
            "icon" => "CircleIcon",
            "i18n" => "User"
        ]);

        $roles = factory(Make::class)->create(
            [
                "name" => "Roles",
                "path" => "roles",
                "app_path" => "SIGA",
                "app_theme" => null,
                "app_root" => "packages/src",
                "app_table" => "roles",
                "app_controller" => "Role",
                "app_model" => "Role",
                "app_route" => "roles",
                "app_method" => "crud",
            ]
        );


        $this->menu_attribute($roles->submenu()->create([
            "name" => "Roles",
            "ordering" => "3"
        ]), [
            "url" => "/admin/roles",
            "icon" => "CircleIcon",
            "i18n" => "Roles"
        ]);


        $permissions = factory(Make::class)->create(
            [
                "name" => "Permissions",
                "path" => "permissions",
                "app_path" => "SIGA",
                "app_theme" => null,
                "app_root" => "packages/src",
                "app_table" => "permissions",
                "app_controller" => "Permission",
                "app_model" => "Permission",
                "app_route" => "permissions",
                "app_method" => "crud",
            ]
        );;

        $this->menu_attribute($permissions->submenu()->create([
            "name" => "Permissions",
            "ordering" => "4"
        ]), [
            "url" => "/admin/permissions",
            "icon" => "CircleIcon",
            "i18n" => "Permissions"
        ]);

        $menus = factory(Make::class)->create(
            [
                "name" => "Menus",
                "path" => "menus",
                "app_path" => "SIGA",
                "app_theme" => null,
                "app_root" => "packages/src",
                "app_table" => "menus",
                "app_controller" => "Menu",
                "app_model" => "Menu",
                "app_route" => "menus",
                "app_method" => "crud",
            ]
        );

        $this->menu_attribute($menus->submenu()->create([
            "name" => "Menus",
            "ordering" => "4"
        ]), [
            "url" => "/admin/menus",
            "icon" => "CircleIcon",
            "i18n" => "Menus"
        ]);

        $submenus = factory(Make::class)->create(
            [
                "name" => "Sub-menus",
                "path" => "sub-menus",
                "app_path" => "SIGA",
                "app_theme" => null,
                "app_root" => "packages/src",
                "app_table" => "sub_menus",
                "app_controller" => "SubMenu",
                "app_model" => "SubMenu",
                "app_route" => "sub-menus",
                "app_method" => "crud",
            ]

        );

        $this->menu_attribute($submenus->submenu()->create([
            "name" => "Sub-menus",
            "ordering" => "6"
        ]), [
            "url" => "/admin/sub-menus",
            "icon" => "CircleIcon",
            "i18n" => "SubMenus"
        ]);

        $profile = factory(Make::class)->create(
            [
                "name" => "Profile",
                "path" => "profile",
                "app_path" => "SIGA",
                "app_theme" => null,
                "app_root" => "packages/src",
                "app_table" => "users",
                "app_controller" => "Profile",
                "app_model" => "User",
                "app_route" => "profile",
                "app_method" => "get",
            ]
        );

        $this->menu_attribute($profile->menu()->create([
            "name" => "Profile",
            "ordering" => "1",
        ]), [
            "url" => "/admin/profile",
            "icon" => "CircleIcon",
            "i18n" => "Profile"
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
