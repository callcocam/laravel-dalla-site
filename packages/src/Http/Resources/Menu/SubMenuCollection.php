<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Http\Resources\Menu;

use SIGA\SubMenu;
use SIGA\Http\Resources\AbstractCollection;
use SIGA\Http\Resources\Collumns\Fields\RANGE;
use SIGA\Http\Resources\Collumns\Fields\SEARCH;
use SIGA\Http\Resources\Collumns\Fields\STATUS;

class SubMenuCollection extends AbstractCollection
{

    public $collects = SubMenuResource::class;

    public $model = SubMenu::class;


    public function filters($resource)
    {
        return [
            STATUS::make('status')->options([
                ['label' => 'All', 'value' => 'all'],
                ['label' => 'draft', 'value' => 'draft'],
                ['label' => 'published', 'value' => 'published']
            ])->default('all'),
            SEARCH::make('search'),
            RANGE::make('range'),
        ];
    }

}
