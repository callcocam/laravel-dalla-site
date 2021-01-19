<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace App\Http\Resources\Dalla\Reseller;

use SIGA\Http\Resources\AbstractResource;
use SIGA\Http\Resources\Collumns\Fields\ID;
use SIGA\Http\Resources\Collumns\Fields\STATUS;
use SIGA\Http\Resources\Collumns\Fields\ACTION;
use SIGA\Http\Resources\Collumns\Fields\TEXT;
use SIGA\Http\Resources\Collumns\Fields\TEXTAREA;

class ResellerResource extends AbstractResource
{


    public function fields($resource)
    {

        return [
            ID::make('id')->hidden_index(),
            TEXT::make('name'),
            TEXT::make('subject'),
            TEXT::make('email'),
            TEXT::make('phone'),
            TEXTAREA::make('description')->hidden_index(),
            // COVER::make('cover')->route('users, products etc...'),
            //
            STATUS::make('status'),
            ACTION::make('actions')->hidden_edit()
        ];
    }
}
