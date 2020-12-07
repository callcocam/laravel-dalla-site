<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Http\Filters\Defaults;

use Illuminate\Database\Eloquent\Builder;
use SIGA\Http\Filters\AbstractFilter;

class StartFilter extends AbstractFilter
{

    public function filter(Builder $builder, $value)
    {


        if ($value === null) {
            return $builder;
        }

        return $builder->whereBetween(sprintf(
            "%s.%s",
            $this->getTable($builder),
            $this->getModel($builder)->getSearchDate()
        ), [
            date_carbom_format($value)->format('Y-m-d 00:00:00'),
            today()->format('Y-m-d 23:59:59')
        ])->orWhereNull(sprintf("%s.%s", $this->getTable($builder), $this->getModel($builder)->getSearchDate()));
    }
}
