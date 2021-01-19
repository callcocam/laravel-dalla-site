<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Http\Resources\LanguageLine;

use Illuminate\Support\Facades\Route;
use SIGA\Http\Resources\AbstractResource;
use SIGA\Http\Resources\Collumns\Fields\ID;
use SIGA\Http\Resources\Collumns\Fields\STATUS;
use SIGA\Http\Resources\Collumns\Fields\ACTION;
use SIGA\Http\Resources\Collumns\Fields\ARRAYS;
use SIGA\Http\Resources\Collumns\Fields\TEXT;

class LanguageLineResource extends AbstractResource
{


    public function fields($resource)
    {

        //'group', 'key', 'text'
        return [
            ID::make('id')->hidden_index(),
            TEXT::make('group'),
            TEXT::make('key'),
            ARRAYS::make('Languages','text')->value([
                TEXT::make("Inglês",'en'),
                TEXT::make('Português Brazil','pt_BR'),
                TEXT::make('Espanhol','es'),
            ]),
            STATUS::make('status'),
            ACTION::make('actions')->hidden_edit()
        ];
    }
}
