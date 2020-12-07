<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Http\Filters;


use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Arr;

abstract class AbstractFilter
{
    /**
     * Apply filter.
     *
     * @param  Builder $builder
     * @param  mixed  $value
     *
     * @return Builder
     */
    public abstract function filter(Builder $builder, $value);

    /**
     * Database value mappings.
     *
     * @return array
     */
    protected function mappings()
    {
        return [];
    }

    /**
     * Resolve the value used for filtering.
     *
     * @param  mixed $key
     * @return mixed
     */
    protected function resolveFilterValue($key)
    {
        return Arr::get($this->mappings(), $key);
    }

    /**
     * Resolve the order direction to be used.
     *
     * @param  string $direction
     * @return string
     */
    protected function resolveOrderDirection($direction)
    {
        return Arr::get([
            'desc' => 'desc',
            'asc' => 'asc'
        ], $direction, 'desc');
    }


    /**
     * Resolve the order direction to be used.
     *
     * @param  string $direction
     * @return string
     */
    protected function resolveOrderCollumn()
    {
        return request()->query('collumn', 'created_at');
    }

    protected function getTable($builder)
    {

        return $this->getModel($builder)->getTable();
    }

    protected function getModel($builder)
    {

        return $builder->getModel();
    }
}
