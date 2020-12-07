<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Http\Resources;

use Exception;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Support\Str;
use SIGA\Http\Resources\Traits\TraitMethods;

class AbstractCollection extends ResourceCollection
{

    use TraitMethods;

    public $collects;

    public $model;

    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {

        $resource = null;
        $data = $this->collection;
        $resource =   app($this->collects, ['resource'=>$request]);
        return [
            'data' => $data,
            'navigations' => $this->navigations($request),
            'headers' => $resource ? $this->headers($resource->fields($request)) : [],
            'filters' => $this->laod_filters($this->filters($request)),
            'options' => $this->options($request),
            'actions' => $this->laod_actions($this->actions($request)),

        ];
    }

    public function getTable()
    {
        $model = $this->getModel();
        return $model->getTable();
    }

    public function getEndpoint()
    {
        $model = $this->getModel();
        return $model->getEndpoint();
    }

    /**
     * Get the resource that this resource collects.
     *
     * @return Builder
     */
    protected function getModel()
    {

        if ($this->model) {
            return app($this->model);
        }
        $class = Str::replaceLast('Resource', '', $this->collects);

        $modelArray = explode("\\", $this->collects);

        $model_namespace = reset($modelArray);

        $model_name = last($modelArray);

        $model = sprintf("%s\\%s", $model_namespace, $model_name);

        $class = Str::replaceLast('Resource', '', $model);

        if (class_exists($class)) {
            return app($class);
        }

        throw new Exception("Error model {$class}, not exists", 1);
    }
}
