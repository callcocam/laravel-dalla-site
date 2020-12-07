<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Helpers;

use SIGA\Facades\AutoRoute;
use SIGA\Make;

class LoadHomeRouterHelper
{

    protected $make;

    public function __construct(Make $make)
    {

        $this->make = $make;
    }

    protected function tableDontExist($table)
    {
        return \Illuminate\Support\Facades\Schema::hasTable($table);
    }

    public function make($app = ['app_root' => "app"], $prefix="home")
    {

        if ($this->tableDontExist("makes")) {
            $makes =  $this->make->where($app)->get();
            if ($makes) {
                foreach ($makes as $make) {
                    if ($make->app_route) {
                        AutoRoute::get(strtolower($make->path), sprintf('%sController', $make->app_controller), "index", sprintf("%s.%s.index", $prefix, $make->app_route));
                        AutoRoute::post(strtolower($make->path), sprintf('%sController', $make->app_controller), "store", sprintf("%s.%s.store", $prefix, $make->app_route));
                        AutoRoute::get(sprintf("%s/{slug}", $make->path), sprintf('%sController', $make->app_controller), "show", sprintf("%s.%s.show", $prefix, $make->app_route));
                    }
                }
            }
        }
    }
}
