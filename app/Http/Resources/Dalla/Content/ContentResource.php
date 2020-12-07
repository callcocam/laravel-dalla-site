<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace App\Http\Resources\Dalla\Content;

use SIGA\Http\Resources\AbstractResource;
use SIGA\Http\Resources\Collumns\Fields\ID;
use SIGA\Http\Resources\Collumns\Fields\STATUS;
use SIGA\Http\Resources\Collumns\Fields\ACTION;
use SIGA\Http\Resources\Collumns\Fields\CKEDITOR;
use SIGA\Http\Resources\Collumns\Fields\COVER;
use SIGA\Http\Resources\Collumns\Fields\LANG;
use SIGA\Http\Resources\Collumns\Fields\SELECT;
use SIGA\Http\Resources\Collumns\Fields\TEXT;
use SIGA\Http\Resources\Collumns\Fields\TEXTAREA;

class ContentResource extends AbstractResource
{


    public function fields($resource)
    {

        return [
            ID::make('id')->hidden_index(),
            COVER::make('cover')->route('contents'),
            SELECT::make('Position','asset')->options($this->mountOptions([
                'home-nossa-hitoria','home-production','content-events','compains-title','home-seja-um-revendedor'
            ])),
            TEXT::make('name'),
            CKEDITOR::make('description')->hidden_index(),
            LANG::make('language'),
            STATUS::make('status'),
            ACTION::make('actions')->hidden_edit()
        ];
    }
}
