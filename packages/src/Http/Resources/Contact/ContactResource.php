<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Http\Resources\Contact;

use SIGA\Http\Resources\AbstractResource;
use SIGA\Http\Resources\Collumns\Fields\ID;
use SIGA\Http\Resources\Collumns\Fields\SELECT;
use SIGA\Http\Resources\Collumns\Fields\TEXT;

class ContactResource extends AbstractResource
{

    public function fields($resource)
    {

        return [
            ID::make('id'),
            TEXT::make('name'),
            TEXT::make('slug')->hidden_edit(),
            TEXT::make('description'),
            TEXT::make('user')->hidden_edit(),
            TEXT::make('status')->type('hidden')->value('published')->hidden_edit()
        ];
    }

}
