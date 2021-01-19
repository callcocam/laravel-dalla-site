<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Http\Filters\Defaults;

use Illuminate\Database\Eloquent\Builder;
use SIGA\Http\Filters\AbstractFilter;

class RangeFilter extends AbstractFilter
{

    public function filter(Builder $builder, $value)
    {


        if ($value === null) {
            return $builder;
        }

        $ranges = explode("_", $value);

        if (isset($ranges[0]) && isset($ranges[1])) {
            return $builder->whereBetween(sprintf("%s.%s",
             $this->getTable($builder),
             $this->getModel($builder)->getSearchDate()
            ), [
                date_carbom_format($ranges[0])->format('Y-m-d 00:00:00'),
                date_carbom_format($ranges[1])->format('Y-m-d 23:59:59')
            ])->orWhereNull(sprintf("%s.%s", $this->getTable($builder), $this->getModel($builder)->getSearchDate()));
        }
        return $builder;
    }
}
