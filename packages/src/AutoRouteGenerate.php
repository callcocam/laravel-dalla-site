<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA;

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

class AutoRouteGenerate
{
    protected $middleware;

    protected $pattern;
    /**
     * @var \Illuminate\Routing\Route
     */
    private $route;

    /**
     * AutoRouteDbService constructor.
     * @param \Illuminate\Routing\Router $route
     */

    public function __construct(Router $route)
    {
        $this->route = $route;
    }


    /**
     * @param $middleware
     * @return AutoRouteService
     */
    public function setMiddleware($middleware)
    {

        $this->middleware = $middleware;

        return $this;
    }

    /**
     * @param $pattern
     * @return AutoRouteService
     */
    public function setPattern($pattern)
    {
        $this->pattern = $pattern;

        return $this;
    }

    protected function register($router, $route)
    {
        if (!empty($route)) {
            $router->name($route);
        }
        if ($this->middleware) {
            $router->middleware($this->middleware);
        }
        return $router;
    }



    public function resources($path, $resource, $route)
    {
        if (!Route::has(sprintf('admin.%s.index', $route)) && !Route::has($route)) {
            $this->route->resource($this->pattern($path), $resource)->names([
                'index' => sprintf('admin.%s.index', $route),
                'create' => sprintf('admin.%s.create', $route),
                'store' => sprintf('admin.%s.store', $route),
                'show' => sprintf('admin.%s.show', $route),
                'edit' => sprintf('admin.%s.edit', $route),
                'update' => sprintf('admin.%s.update', $route),
                'destroy' => sprintf('admin.%s.destroy', $route),
            ])->parameters([
                $route => 'id'
            ]);

            if ($this->middleware) {
                $this->route->middleware($this->middleware);
            }


            $this->deleteAll($path, $resource, $route);
            $this->upload($path, $resource, $route);
            $this->multiple_upload($path, $resource, $route);
            $this->remove_file($path, $resource, $route);
            $this->middleware = null;
        }
    }

    /**
     * @param $path /posts
     * @param $controller PostController
     * @param string $method index
     * @param string $route post
     * @return mixed
     */
    public function get($path, $controller, $method = 'index', $route = '')
    {
        $router = $this->route->get($this->pattern($path), sprintf("%s@%s", $controller, $method));
        return $this->register($router, $route);
    }

    /**
     * @param $path /posts
     * @param $controller PostController
     * @param string $method store
     * @param string $route post
     * @return mixed
     */
    public function post($path, $controller, $method = 'store', $route = '')
    {
        $router = $this->route->post($this->pattern($path), sprintf("%s@%s", $controller, $method));
        return $this->register($router, $route);
    }

    /**
     * @param $path /posts
     * @param $controller PostController
     * @param string $method update
     * @param string $route post
     * @return mixed
     */
    public function put($path, $controller, $method = 'update', $route = '')
    {
        $router = $this->route->put($this->pattern($path), sprintf("%s@%s", $controller, $method));
        return $this->register($router, $route);
    }

    /**
     * @param $path /posts
     * @param $controller PostController
     * @param string $method delete
     * @param string $route post
     * @return mixed
     */
    public function delete($path, $controller, $method = 'delete', $route = '')
    {
        $router = $this->route->delete($this->pattern($path), sprintf("%s@%s", $controller, $method));
        return $this->register($router, $route);
    }

    /**
     * @param $path /posts
     * @param $controller PostController
     * @param string $method get, post, put, delete
     * @param string $route post
     * @return mixed
     */
    public function any($path, $controller, $method, $route = '')
    {
        $router = $this->route->any($this->pattern($path), sprintf("%s@%s", $controller, $method));
        return $this->register($router, $route);
    }



    private function deleteAll($path, $controller, $route)
    {
        $this->route->post(sprintf("%s/destroy/all", $path), sprintf("%s@%s", $controller, "destroyAll"))
            ->name(sprintf('admin.%s.destroy.all', $route));
        if ($this->middleware) {
            $this->route->middleware($this->middleware);
        }
    }

    private function upload($path, $controller, $route)
    {
        $this->route->post(sprintf("%s/upload/up", $path), sprintf("%s@%s", $controller, "upload"))
            ->name(sprintf('admin.%s.upload.up', $route));
        if ($this->middleware) {
            $this->route->middleware($this->middleware);
        }
    }

    private function remove_file($path, $controller, $route)
    {
        $this->route->post(sprintf("%s/upload/down", $path), sprintf("%s@%s", $controller, "remove_file"))
            ->name(sprintf('admin.%s.upload.down', $route));
        if ($this->middleware) {
            $this->route->middleware($this->middleware);
        }
    }

    private function multiple_upload($path, $controller, $route)
    {
        $this->route->post(sprintf("%s/multiple/upload/up", $path), sprintf("%s@%s", $controller, "multiple_upload"))
            ->name(sprintf('admin.%s.multiple.upload.up', $route));

        $this->route->get(sprintf("%s/multiple/upload/{id}/load", $path), sprintf("%s@%s", $controller, "multiple_upload_load"))
            ->name(sprintf('admin.%s.multiple.upload.load', $route));

        if ($this->middleware) {
            $this->route->middleware($this->middleware);
        }
    }


    private function pattern($resource)
    {

        if (!empty($this->pattern)) {
            return sprintf("%s/%s", $resource, $this->pattern);
        }

        return $resource;
    }
}
