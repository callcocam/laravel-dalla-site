<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */
namespace SIGA\Http\Filters\Defaults;

use Illuminate\Database\Eloquent\Builder;
use SIGA\Http\Filters\AbstractFilter;

class SearchFilter extends AbstractFilter
{



    public function filter(Builder $builder, $value)
    {

        if ($value === null) {
            return $builder;
        }

        $keyword = strtolower($value);

        return $builder->where(function ($query) use ($keyword, $builder) {

            foreach ($this->getModel($builder)->getSearchFields() as $field) {

                $query->orWhere(sprintf("%s.%s",$this->getTable($builder), $field), 'LIKE', "%$keyword%");
            }

        });
    }
}
