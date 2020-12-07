<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Http\Resources\MenuAttribute;

use SIGA\Helpers\LoadMenuHelper;
use SIGA\Http\Resources\AbstractResource;
use SIGA\Http\Resources\Collumns\Fields\ID;
use SIGA\Http\Resources\Collumns\Fields\SELECT;
use SIGA\Http\Resources\Collumns\Fields\TEXT;
use SIGA\Http\Resources\Collumns\Fields\TEXTAREA;

class MenuAttributeResource extends AbstractResource
{


    public function fields($resource)
    {

        return [
            ID::make('id'),
            TEXT::make('url'),
            TEXT::make('icon'),
            SELECT::make('target')->options(['_blank', '_self', '_parent', '_top']),
            TEXT::make('i18n'),
            TEXTAREA::make('description')
        ];
    }
}
