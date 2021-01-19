<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Http\Resources\Menu;

use SIGA\Http\Resources\AbstractResource;
use SIGA\Http\Resources\Collumns\Fields\ACTION;
use SIGA\Http\Resources\Collumns\Fields\CHILD;
use SIGA\Http\Resources\Collumns\Fields\HIDDEN;
use SIGA\Http\Resources\Collumns\Fields\ID;
use SIGA\Http\Resources\Collumns\Fields\SELECT;
use SIGA\Http\Resources\Collumns\Fields\STATUS;
use SIGA\Http\Resources\Collumns\Fields\TEXT;
use SIGA\Http\Resources\MenuAttribute\MenuAttributeResource;
use SIGA\Make;

class SubMenuResource extends AbstractResource
{


    public function fields($resource)
    {

        return [
            ID::make('id')->hidden_index(),
            TEXT::make('name'),
            HIDDEN::make('slug')->hidden_index()->hidden_edit(),
            SELECT::make('make_id')->entity(Make::class)->hidden_index(),
            TEXT::make('ordering')->hidden_index(),
            CHILD::make('menu_attribute')->entity(MenuAttributeResource::class)->hidden_index(),
            STATUS::make('status'),
            ACTION::make('actions')->hidden_edit()
        ];
    }
}
