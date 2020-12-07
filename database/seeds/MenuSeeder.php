<?php

use Illuminate\Database\Seeder;
use SIGA\Menu;
use SIGA\SubMenu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Menu::class)->create([
            "name" => "Dashboard",
            "slug" => "dashboard",
            "ordering" => "1",
        ])->each(function ($dash) {
            $dash->menu_attribute()->create([
                "url" => "/admin",
                "icon" => "MonitorIcon",
                "app" => "SIGA",
                "route" => "admin",
                "model" => null,
                "controller" => "Admin",
                "i18n" => "Dashboard"
            ]);
        });

        $menu = factory(Menu::class)->create([
            "name" => "Settigns",
            "slug" => "settigns",
            "ordering" => "2",
        ]);

        $menu->menu_attribute()->create([
            "url" => null,
            "icon" => "MonitorIcon",
            "app" => null,
            "route" =>null,
            "model" => null,
            "controller" => null,
            "i18n" => "Settigns"
        ]);

        $companies = factory(SubMenu::class)->create(
            [
                "name" => "Company",
                "slug" => "settigns-companies",
                "ordering" => "1"

            ]
        );

        $menu->submenus()->sync($companies);

        $companies->menu_attribute()->create([
            "url" => "/admin/companies",
            "i18n" => "Company",
            "controller" => "Company",
            "route" => "admin.company.index",
            "model" => "Company",
            "app" => "SIGA",
            "icon" => "CircleIcon"
        ]);

        $profile = factory(SubMenu::class)->create(
            [
                "name" => "Profile",
                "slug" => "settigns-profile",
                "ordering" => "2"
            ]
        );

        $menu->submenus()->sync($profile);
        $profile->menu_attribute()->create([
            "url" => "/admin/profile",
            "i18n" => "Profile",
            "controller" => "Profile",
            "route" => "admin.profile.index",
            "model" => "User",
            "app" => "SIGA",
            "icon" => "CircleIcon"
        ]);

        $users = factory(SubMenu::class)->create(
            [
                "name" => "Users",
                "slug" => "settigns-users",
                "ordering" => "3"
            ]

        );
        $menu->submenus()->sync($users);
        $users->menu_attribute()->create([
            "url" => "/admin/users",
            "i18n" => "Users",
            "controller" => "User",
            "route" => "admin.users.index",
            "model" => "User",
            "app" => "SIGA",
            "icon" => "CircleIcon"
        ]);

        $roles = factory(SubMenu::class)->create(
            [
                "name" => "Roles",
                "slug" => "settigns-roles",
                "ordering" => "4"
            ]

        );

        $menu->submenus()->sync($roles);
        $roles->menu_attribute()->create([
            "url" => "/admin/roles",
            "i18n" => "Roles",
            "controller" => "Role",
            "route" => "admin.roles.index",
            "model" => "Role",
            "app" => "SIGA",
            "icon" => "CircleIcon"
        ]);

        $permissions = factory(SubMenu::class)->create(
            [
                "name" => "Permissions",
                "slug" => "settigns-permissions",
                "ordering" => "5"
            ]

        );

        $menu->submenus()->sync($permissions);
        $permissions->menu_attribute()->create([
            "url" => "/admin/permissions",
            "i18n" => "Permissions",
            "controller" => "Permission",
            "model" => "Permission",
            "route" => "admin.permissions.index",
            "app" => "SIGA",
            "icon" => "CircleIcon"
        ]);

        $menus = factory(SubMenu::class)->create(
            [
                "name" => "Menus",
                "slug" => "settigns-menus",
                "ordering" => "6"
            ]


        );

        $menu->submenus()->sync($menus);
        $menus->menu_attribute()->create([
            "url" => "/admin/menus",
            "controller" => "Menu",
            "model" => "Menu",
            "i18n" => "Menus",
            "route" => "admin.menus.index",
            "app" => "SIGA",
            "icon" => "CircleIcon"
        ]);

        $submenus = factory(SubMenu::class)->create(
            [
                "name" => "Sub-menus",
                "slug" => "settigns-submenus",
                "ordering" => "7"
            ]

        );

        $menu->submenus()->sync($submenus);
        $submenus->menu_attribute()->create([
            "url" => "/admin/submenus",
            "controller" => "SubMenu",
            "model" => "SubMenu",
            "i18n" => "Sub-menus",
            "route" => "admin.sub-menus.index",
            "app" => "SIGA",
            "icon" => "CircleIcon"
        ]);

        $home = factory(Menu::class)->create([
            "name" => "Home",
            "slug" => "home",
            "ordering" => "3",
        ]);

        $home->menu_attribute()->create([
            "url" => "/",
            "app" => "App",
            "model" => null,
            "controller" => "Home",
            "route" => "home",
            "target" => "_blank",
            "icon" => "GlobeIcon",
            "i18n" => "Home"
        ]);
    }
}
