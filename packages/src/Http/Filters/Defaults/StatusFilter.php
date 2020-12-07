<?php

namespace SIGA\Http\Filters\Defaults;

use Illuminate\Database\Eloquent\Builder;
use SIGA\Http\Filters\AbstractFilter;

class StatusFilter extends AbstractFilter
{

    /**
     * Mappings for database values.
     *
     * @return array
     */
    public function mappings()
    {
        return [
            'deleted' => 'deleted',
            'draft' => 'draft',
            'published' => 'published'
        ];
    }

    public function filter(Builder $builder, $value)
    {
        $value = $this->resolveFilterValue($value);

        if ($value === null) {
            return $builder;
        }

        return $builder->where('status', $value);
    }
}
