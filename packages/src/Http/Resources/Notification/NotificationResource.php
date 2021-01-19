<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Http\Resources\Notification;

use SIGA\Http\Resources\AbstractResource;
use SIGA\Http\Resources\Collumns\Fields\ID;
use SIGA\Http\Resources\Collumns\Fields\SELECT;
use SIGA\Http\Resources\Collumns\Fields\TEXT;

class NotificationResource extends AbstractResource
{

    public function fields($resource)
    {

        return [
            ID::make('id'),
            TEXT::make('name'),
            TEXT::make('slug'),
            TEXT::make('type'),
            TEXT::make('inscriptions'),
            TEXT::make('description'),
            TEXT::make('user'),
            SELECT::make('status')
        ];
    }
}
