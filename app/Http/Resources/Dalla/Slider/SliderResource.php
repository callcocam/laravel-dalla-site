<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace App\Http\Resources\Dalla\Slider;

use SIGA\Http\Resources\AbstractResource;
use SIGA\Http\Resources\Collumns\Fields\ID;
use SIGA\Http\Resources\Collumns\Fields\STATUS;
use SIGA\Http\Resources\Collumns\Fields\ACTION;
use SIGA\Http\Resources\Collumns\Fields\COVER;
use SIGA\Http\Resources\Collumns\Fields\LANG;
use SIGA\Http\Resources\Collumns\Fields\TEXT;
use SIGA\Http\Resources\Collumns\Fields\TEXTAREA;

class SliderResource extends AbstractResource
{


    public function fields($resource)
    {

        return [
            ID::make('id')->hidden_index(),
            COVER::make('Cover')->route('sliders'),
            TEXT::make('Name')->sortable(),
            TEXT::make('slug')->type('hidden')->hidden_index()->hidden_edit(),
            TEXTAREA::make('description')->hidden_index(),
            LANG::make('language')->value('pt_BR'),
            STATUS::make('Status')->sortable(),
            ACTION::make('actions')->hidden_edit()
        ];
    }
}
