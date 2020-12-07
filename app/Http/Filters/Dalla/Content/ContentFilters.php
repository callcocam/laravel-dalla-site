<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */
namespace App\Http\Filters\Dalla\Content;

use SIGA\Http\Filters\AbstractFilters;
use SIGA\Http\Filters\Defaults\Ordering\DefaultOrder;
use SIGA\Http\Filters\Defaults\RangeFilter;
use SIGA\Http\Filters\Defaults\SearchFilter;
use SIGA\Http\Filters\Defaults\StatusFilter;

class ContentFilters extends AbstractFilters
{
    /**
     * Default course filters.
     *
     * @var array
     */
    protected $filters = [
        'status' => StatusFilter::class,
        'q' => SearchFilter::class,
        'range' => RangeFilter::class,
        'order' => DefaultOrder::class,
    ];

    public static function mappings()
    {
        $map = [];

        return $map;
    }
}
