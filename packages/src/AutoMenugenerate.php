<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

class AutoMenuGenerate
{
    protected $menus = [];

    public function get()
    {
        return $this->menus;
    }


    public function set($name, $make=null)
    {
        if(Route::has(sprintf("admin.%s.index",$name))){
            if(!Gate::denies(sprintf("admin.%s.index",$name))) {
                $this->menus[] = [
                    "name" => sprintf("admin.%s.index", $name),
                    "path" => $name,
                    'component' => $make->index_component,
                    //'component'=>"AbstractList",
                    //'component' => sprintf('/* webpackChunkName: "admin.%s.index" */@views/admin/AbstractPage', $name),
                    'redirect' => sprintf('admin.%s.list', $name),
                    'children' => [
                        "list" => $this->lists($name, $make),
                        "create" => $this->create($name, $make),
                        "edit" => $this->edit($name, $make),
                        "destroy" => $this->destroy($name, $make),
                        "show" => $this->show($name, $make)
                    ],
                    "meta" => [
                        "authRequired" => true,
                        "api" => $this->hasRoute(sprintf('admin.%s.index', $name)),
                        "create" => $this->hasRoute(sprintf("admin.%s.create", $name)),
                        "pageTitle" => "Dashboard",
                        "breadcrumb" => [
                            ["title" => "Dashboard", "url" => ['name' => 'admin']],
                            ["title" => Str::title($name), "active" => true]
                        ],
                    ]
                ];
            }
        }
        return  $this;
    }

    protected function create($name, $make)
    {
        if(Route::has(sprintf("admin.%s.create",$name))) {
            if (!Gate::denies(sprintf("admin.%s.create", $name))) {
                return [
                    'name' => sprintf('admin.%s.create', $name),
                    'path' => sprintf('%s/create', $name),
                    'component' => $make->create_component,
                    //'component'=>"AbstractForm",
                    //'component' => sprintf('/* webpackChunkName: "admin.%s.create" */@views/admin/AbstractForm', $name),
                    "meta" => [
                        "authRequired" => true,
                        "parent" => sprintf("admin.%s.index", $name),
                        "api" => $this->hasRoute(sprintf("admin.%s.create", $name)),
                        "store" => $this->hasRoute(sprintf("admin.%s.store", $name)),
                        "pageTitle" => "Dashboard",
                        "breadcrumb" => [
                            ["title" => Str::title($name), "url" => ['name' => sprintf("admin.%s.index", $name)]],
                            ["title" => Str::title($name), "url" => ['name' => sprintf("admin.%s.index", $name)]],
                            ["title" => "Create", "active" => true]
                        ]
                    ]
                ];
            }
        }
        return null;
    }

    protected function edit($name, $make)
    {
        if(Route::has(sprintf("admin.%s.edit",$name))) {
            if (!Gate::denies(sprintf("admin.%s.edit", $name))) {
                return [
                    'name' => sprintf('admin.%s.edit', $name),
                    'path' => sprintf('%s/:id/edit', $name),
                    'component' => $make->edit_component,
                    //'component'=>"AbstractForm",
                    // 'component' => sprintf('/* webpackChunkName: "admin.%s.edit" */@views/admin/AbstractForm', $name),
                    "meta" => [
                        "authRequired" => true,
                        "parent" => sprintf("admin.%s.list", $name),
                        "api" => $this->hasRoute(sprintf("admin.%s.edit", $name), '_id_'),
                        "update" => $this->hasRoute(sprintf("admin.%s.update", $name), '_id_'),
                        "store" => $this->hasRoute(sprintf("admin.%s.store", $name)),
                        "pageTitle" => "Dashboard",
                        "breadcrumb" => [
                            ["title" => "Dashboard", "url" => ['name' => 'admin']],
                            ["title" => Str::title($name), "url" => ['name' => sprintf("admin.%s.index", $name)]],
                            ["title" => "Edit", "active" => true]
                        ]
                    ]
                ];
            }
        }
        return null;
    }


    protected function show($name, $make)
    {
        if(Route::has(sprintf("admin.%s.show",$name))) {
            if (!Gate::denies(sprintf("admin.%s.show", $name))) {
                return [
                    'name' => sprintf('admin.%s.show', $name),
                    'path' => sprintf('%s/:id/show', $name),
                    'component' => $make->show_component,
                    //'component'=>"AbstractShow",
                    //'component' => sprintf('/* webpackChunkName: "admin.%s.show" */@views/admin/AbstractShow', $name),
                    "meta" => [
                        "authRequired" => true,
                        "parent" => sprintf("admin.%s.list", $name),
                        "api" => $this->hasRoute(sprintf("admin.%s.show", $name), '_id_'),
                        "pageTitle" => "Dashboard",
                        "breadcrumb" => [
                            ["title" => "Dashboard", "url" => ['name' => 'admin']],
                            ["title" => Str::title($name), "url" => ['name' => sprintf("admin.%s.index", $name)]],
                            ["title" => "Show", "active" => true]
                        ],
                    ]
                ];
            }
        }
        return null;
    }



    protected function destroy($name, $make)
    {
        if(Route::has(sprintf("admin.%s.destroy",$name))) {
            if (!Gate::denies(sprintf("admin.%s.destroy", $name))) {
                return [
                    'name' => sprintf('admin.%s.destroy', $name),
                    'path' => sprintf('%s/:id/destroy', $name),
                    'component' => $make->destroy_component,
                    //'component'=>"AbstractDestroy",
                    //'component' => sprintf('/* webpackChunkName: "admin.%s.show" */@views/admin/AbstractShow', $name),
                    "meta" => [
                        "authRequired" => true,
                        "parent" => sprintf("admin.%s.index", $name),
                        "api" => $this->hasRoute(sprintf("admin.%s.destroy", $name), '_id_'),
                        "pageTitle" => "Dashboard",
                        "question" => [
                            "color" => 'success',
                            "title" => __("Confirm"),
                            "text" => sprintf(__("Destroy Of")." %s" , Str::title($name)),
                        ],
                        "breadcrumb" => [
                            ["title" => "Dashboard", "url" => ['name' => 'admin']],
                            ["title" => Str::title($name), "url" => ['name' => sprintf("admin.%s.index", $name)]],
                            ["title" => "Destroy", "active" => true]
                        ],
                    ]
                ];
            }
        }
        return null;
    }

    protected function lists($name, $make)
    {
        if(Route::has(sprintf("admin.%s.index",$name))) {
            if (!Gate::denies(sprintf("admin.%s.index", $name))) {
                return [
                    'name' => sprintf('admin.%s.list', $name),
                    'path' => sprintf('%s/list', $name),
                    'component' => $make->list_component,
                    //'component'=>"AbstractList",
                    //'component' => sprintf('/* webpackChunkName: "admin.%s.list" */@views/admin/AbstractList', $name),
                    "meta" => [
                        "authRequired" => true,
                        "api" => $this->hasRoute(sprintf('admin.%s.index', $name)),
                        "parent" => sprintf("admin.%s.index", $name),
                        "create" => sprintf("admin.%s.create", $name),
                        "pageTitle" => "Dashboard",
                        "breadcrumb" => [
                            ["title" => "Dashboard", "url" => ['name' => 'admin']],
                            ["title" => "List", "active" => true]
                        ],

                    ]
                ];
            }
        }
        return null;
    }

    private function hasRoute($route, $params = null){

        if(Route::has($route)){
            return route($route,$params);
        }

        return "";
    }
}
