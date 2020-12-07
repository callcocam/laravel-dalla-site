<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Http\Resources\Role;

use SIGA\Acl\Permission;
use SIGA\Http\Resources\AbstractResource;
use SIGA\Http\Resources\Collumns\Fields\ACTION;
use SIGA\Http\Resources\Collumns\Fields\CHOICE;
use SIGA\Http\Resources\Collumns\Fields\ID;
use SIGA\Http\Resources\Collumns\Fields\PERMISSION as FieldsPERMISSION;
use SIGA\Http\Resources\Collumns\Fields\STATUS;
use SIGA\Http\Resources\Collumns\Fields\TEXT;
use SIGA\Http\Resources\Collumns\Fields\TEXTAREA;

class RoleResource extends AbstractResource
{


    public function fields($resource)
    {

        return [
            ID::make('id')->hidden_index(),
            TEXT::make('name'),
            STATUS::make('status'),
            TEXTAREA::make('description'),
            FieldsPERMISSION::make('permissions')->entity(Permission::class),
            ACTION::make('actions')->hidden_edit()
        ];
    }
}
