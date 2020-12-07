<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Http\Filters\Permissions;

use SIGA\Http\Filters\AbstractFilters;
use SIGA\Http\Filters\Defaults\{

    RangeFilter,
    SearchFilter,
    StatusFilter
};
use SIGA\Http\Filters\Defaults\Ordering\DefaultOrder;

class PermissionFilters extends AbstractFilters
{
    /**
     * Default course filters.
     *
     * @var array
     */
    protected $filters = [
        'order' => DefaultOrder::class,
        'status' => StatusFilter::class,
        'search' => SearchFilter::class,
        'range' => RangeFilter::class
    ];

    public static function mappings()
    {
        $map = [
            'status' => [
                'deleted' => 'deleted',
                'draft' => 'draft',
                'published' => 'published'
            ]
        ];

        return $map;
    }
}
