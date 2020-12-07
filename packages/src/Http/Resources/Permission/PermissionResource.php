<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Http\Resources\Permission;

use SIGA\Helpers\LoadMenuHelper;
use SIGA\Http\Resources\AbstractResource;
use SIGA\Http\Resources\Collumns\Fields\ACTION;
use SIGA\Http\Resources\Collumns\Fields\ID;
use SIGA\Http\Resources\Collumns\Fields\SELECT;
use SIGA\Http\Resources\Collumns\Fields\STATUS;
use SIGA\Http\Resources\Collumns\Fields\TEXT;
use SIGA\Http\Resources\Collumns\Fields\TEXTAREA;
use SIGA\Make;

class PermissionResource extends AbstractResource
{


    public function fields($resource)
    {

        return [
            ID::make('id')->hidden_index(),
            TEXT::make('name'),
            SELECT::make('slug')->options(LoadMenuHelper::make($this->getModelQuery(Make::class))),
            STATUS::make('status'),
            TEXTAREA::make('description'),
            ACTION::make('actions')->hidden_edit()
        ];
    }
}
