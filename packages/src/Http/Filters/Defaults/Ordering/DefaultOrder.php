<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Http\Filters\Defaults\Ordering;

use Illuminate\Database\Eloquent\Builder;
use SIGA\Http\Filters\AbstractFilter;

class DefaultOrder extends AbstractFilter
{
    /**
     * Order by views in descending
     *
     * @return Illuminate\Database\Eloquent\Builder
     */
    public function filter(Builder $builder, $direction)
    {

        return $builder->orderBy($this->resolveOrderCollumn(), $this->resolveOrderDirection($direction));
    }
}
