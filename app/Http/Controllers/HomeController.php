<?php

namespace App\Http\Controllers;

use Arr;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Route;
use Request;
use Session;
use SIGA\Menu;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //     $conn = 'database.connections.' . config('database.default');
        //     Type::registerCustomPlatformTypes();
        //     $table['name'] ="products";
        //     $table['options']['collate'] = config($conn . '.collation', 'utf8mb4_unicode_ci');
        //     $table['options']['charset'] = config($conn . '.charset', 'utf8mb4');
        //    // $table = Table::make($table);
        //     dd(SchemaManager::listTableNames());
        return view('home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function language($lang)
    {
        Session::put('locale', $lang);
        return back();
    }


    protected $realNamesRoutes = ['admin', 'home'];

    public function makes(Request $request)
    {
        $menus = app(Menu::class)
            ->orderBy('ordering', 'ASC')->get();

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
