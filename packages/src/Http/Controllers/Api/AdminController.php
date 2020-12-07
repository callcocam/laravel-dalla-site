<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Http\Controllers\Api;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Route;
use SIGA\AutoMenuGenerate;
use SIGA\Http\AbstractController;
use SIGA\Http\Resources\Profile\ProfileCollection;
use SIGA\Http\Resources\Profile\ProfileResource;
use SIGA\Make;
use SIGA\User;

class AdminController extends AbstractController
{

    protected $resources = ProfileResource::class;

    protected $collection = ProfileCollection::class;

    protected $model = User::class;


    public function index(Request $request)
    {
        $menus = [];
        if ($this->tableDontExist("makes")) {
            $autoMenuGenerate = new AutoMenuGenerate;
            $makes = Make::query()->where('status', 'published')->get();
            if ($makes) {
                foreach ($makes as $item) {
                    if ($item->app_route) {
                        $autoMenuGenerate->set($item->app_route,$item);
                    }
                }
            }
            $menus =  $autoMenuGenerate->get();
        }
        return view(get_theme('layouts.app'), [
            'menus' => json_encode($menus)
        ]);
    }

    public function user(Request $request)
    {

        $model = app($this->model)
            ->latest()
            ->filter($request)
            ->paginate($this->perPage);
        //dd($test->name);
        return new $this->collection($model);
    }


}
