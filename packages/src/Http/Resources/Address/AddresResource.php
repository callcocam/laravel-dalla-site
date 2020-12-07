<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Http\Resources\Address;

use SIGA\Http\Resources\AbstractResource;
use SIGA\Http\Resources\Collumns\Fields\ID;
use SIGA\Http\Resources\Collumns\Fields\SELECT;
use SIGA\Http\Resources\Collumns\Fields\TEXT;

class AddresResource extends AbstractResource
{


    public function fields($resource)
    {

        return [
            ID::make('id'),
            TEXT::make('name'),
            TEXT::make('slug')->hidden_edit(),
            TEXT::make('zip'),
            TEXT::make('city'),
            TEXT::make('state'),
            TEXT::make('country')->hidden_edit(),
            TEXT::make('district'),
            TEXT::make('street'),
            TEXT::make('number'),
            TEXT::make('complement'),
            TEXT::make('status')->type('hidden')->value('published')->hidden_edit()
        ];
    }
}
