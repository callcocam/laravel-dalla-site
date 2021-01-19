<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Http\Resources\Company;

use SIGA\Http\Resources\AbstractResource;
use SIGA\Http\Resources\Collumns\Fields\ACTION;
use SIGA\Http\Resources\Collumns\Fields\COVER;
use SIGA\Http\Resources\Collumns\Fields\ID;
use SIGA\Http\Resources\Collumns\Fields\MORPH;
use SIGA\Http\Resources\Collumns\Fields\STATUS;
use SIGA\Http\Resources\Collumns\Fields\TEXT;
use SIGA\Http\Resources\Collumns\Fields\TEXTAREA;
use SIGA\Http\Resources\Collumns\Fields\UPLOAD;

class CompanyResource extends AbstractResource
{


    public function fields($resource)
    {

        return [
            ID::make('id')->hidden_index(),
            COVER::make('Cover')->route('users')->component("Avatar"),
            TEXT::make('name'),
            TEXT::make('fantasy')->hidden_index(),
            TEXT::make('email'),
            TEXT::make('phone'),
            TEXT::make('document'),
            TEXTAREA::make('description'),
            MORPH::make('address')->value(
                [
                    ID::make('id')->hidden_edit(),
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
                ]
            ),
            STATUS::make('status'),
            //MORPH::make('contacts'),
            //MORPH::make('documents'),
            //MORPH::make('social_links'),
            ACTION::make('actions')
        ];
    }
}
