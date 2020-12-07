<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Http\Controllers;

use Arr;
use Gate;
use Illuminate\Http\Request;
use Route;
use SIGA\Events\MenuEvent;
use SIGA\Http\AbstractController;
use SIGA\Menu;
use SIGA\Http\Requests\MenuRequest;
use SIGA\Http\Resources\Menu\MenuCollection;
use SIGA\Http\Resources\Menu\MenuResource;

class MenuController extends AbstractController
{

    protected $event = MenuEvent::class;

    protected $model = Menu::class;

    protected $collection = MenuCollection::class;

    protected $resources = MenuResource::class;

    protected $realNamesRoutes = ['admin', 'home'];

    /**
     * Store a newly created resource in storage.
     *
     * @param  MenuRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MenuRequest $request)
    {

        return parent::save($request);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  MenuRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MenuRequest $request, $id)
    {
        return parent::save($request, $id);
    }

    public function load(Request $request)
    {
        $menus = app($this->model)
            ->orderBy('ordering', 'ASC')
            ->with('submenus')->get();

        $sidebar = [];

        if ($menus) {

            foreach ($menus as $menu) {
                $temp = null;

                $route = $this->makeRoute($menu->make);
                if (Route::has($route)) {
                    if (Gate::allows($route)) {
                        $temp = $this->addMenu($menu);
                    }
                } else {
                    $temp = $this->addMenu($menu);
                }
                $sidebar[] = $temp;
            }
        }
        return response()->json(array_filter($sidebar));
    }

    /**
     * Add menu
     *
     * @param  $menu
     * @return array
     */
    protected function addMenu($menu)
    {

        $submenus = null;
        if ($menu->submenus()->count()) {
            $submenus = $this->addSubMenu(Arr::get($menu, 'submenus'));
        }

        return array_filter([
            "name" => Arr::get($menu, 'name'),
            "slug" => Arr::get($menu, 'slug'),
            "url" => $this->addMake(Arr::get($menu, 'menu_attribute'), 'url'),
            "i18n" => $this->addMake(Arr::get($menu, 'menu_attribute'), 'i18n'),
            "icon" => $this->addMake(Arr::get($menu, 'menu_attribute'), 'icon'),
            "submenu" => $submenus,
        ]);
    }

    /**
     * add sub menus
     *
     * @param array $submenus
     * @return array
     */
    protected function addSubMenu($submenus)
    {
        $menu = [];

        if ($submenus) {
            foreach ($submenus as $submenu) {
                $route = $this->makeRoute($submenu);
                if (Route::has($route)) {
                    if (Gate::allows($route)) {
                        $menu[] = [
                            "name" => Arr::get($submenu, 'name'),
                            "slug" => Arr::get($submenu, 'slug'),
                            "url" => $this->addMake(Arr::get($submenu, 'menu_attribute'), 'url'),
                            "i18n" => $this->addMake(Arr::get($submenu, 'menu_attribute'), 'i18n'),
                            "icon" => $this->addMake(Arr::get($submenu, 'menu_attribute'), 'icon'),
                        ];
                    }
                }
            }
        }
        return $menu;
    }

    /**
     * add make, campos  adicionais da tabela makes
     *
     * @param array $make
     * @param string $key
     * @return string
     */
    protected function addMake($make, $key)
    {

        return Arr::get($make, $key);
    }

    protected function makeRoute($menu)
    {

        if (in_array($this->addMake(Arr::get($menu, 'make'), 'app_route'), $this->realNamesRoutes))
            return $this->addMake(Arr::get($menu, 'make'), 'app_route');
        if (empty($this->addMake(Arr::get($menu, 'make'), 'app_route')))
            return "";

        return sprintf("admin.%s.index", $this->addMake(Arr::get($menu, 'make'), 'app_route'));
    }
}
