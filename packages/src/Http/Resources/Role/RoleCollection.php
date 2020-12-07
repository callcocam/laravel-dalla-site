<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Http\Resources\Role;

use SIGA\Acl\Role;
use SIGA\Http\Resources\AbstractCollection;
use SIGA\Http\Resources\Collumns\Fields\RANGE;
use SIGA\Http\Resources\Collumns\Fields\SEARCH;
use SIGA\Http\Resources\Collumns\Fields\STATUS;

class RoleCollection extends AbstractCollection
{

    public $collects = RoleResource::class;

    public $model = Role::class;


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
