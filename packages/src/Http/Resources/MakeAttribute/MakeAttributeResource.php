<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Http\Resources\MakeAttribute;

use SIGA\Http\Resources\AbstractResource;
use SIGA\Http\Resources\Collumns\Fields\ID;
use SIGA\Http\Resources\Collumns\Fields\TEXT;
use SIGA\Http\Resources\Collumns\Fields\TEXTAREA;

class MakeAttributeResource extends AbstractResource
{


    public function fields($resource)
    {

        return [
            ID::make('id'),
            TEXT::make('app'),
            TEXT::make('model'),
            TEXT::make('controller'),
            TEXTAREA::make('description')
        ];
    }
}
