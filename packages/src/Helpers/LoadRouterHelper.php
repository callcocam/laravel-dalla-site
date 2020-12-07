<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Helpers;

use SIGA\Facades\AutoRoute;
use SIGA\Make;

class LoadRouterHelper
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

    public function make($app = ['app_root' => "packages/src"])
    {

        if ($this->tableDontExist("makes")) {
            $makes =  $this->make->where($app)->get();

            if ($makes) {

                foreach ($makes as $make) {
                    if ($make->app_route) {
                        switch ($make->app_method):
                            case 'crud':
                                AutoRoute::resources(strtolower($make->path), sprintf('%sController', $make->app_controller), $make->app_route);
                                break;
                            case 'post':
                                AutoRoute::post(strtolower($make->path), sprintf('%sController', $make->app_controller),$make->app_action, sprintf("admin.%s.%s",$make->app_route,$make->app_action));
                                break;
                            case 'put':
                                AutoRoute::put(strtolower($make->path), sprintf('%sController', $make->app_controller), $make->app_action, sprintf("admin.%s.%s",$make->app_route,$make->app_action));
                                break;
                            case 'delete':
                                AutoRoute::delete(strtolower($make->path), sprintf('%sController', $make->app_controller),$make->app_action, sprintf("admin.%s.%s",$make->app_route,$make->app_action));
                                break;
                            default:
                                AutoRoute::get(strtolower($make->path), sprintf('%sController', $make->app_controller), $make->app_action, sprintf("admin.%s.%s",$make->app_route,$make->app_action));
                                break;
                        endswitch;
                    }
                }
            }
        }
    }
}
