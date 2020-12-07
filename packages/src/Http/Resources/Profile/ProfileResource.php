<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Http\Resources\Profile;

use SIGA\Acl\Role;
use SIGA\Http\Resources\AbstractResource;
use SIGA\Http\Resources\Collumns\Fields\ACTION;
use SIGA\Http\Resources\Collumns\Fields\CHOICE;
use SIGA\Http\Resources\Collumns\Fields\COVER;
use SIGA\Http\Resources\Collumns\Fields\DATE;
use SIGA\Http\Resources\Collumns\Fields\ID;
use SIGA\Http\Resources\Collumns\Fields\MORPH;
use SIGA\Http\Resources\Collumns\Fields\RADIO;
use SIGA\Http\Resources\Collumns\Fields\SELECT;
use SIGA\Http\Resources\Collumns\Fields\TEXT;

class ProfileResource extends AbstractResource
{

    public function fields($resource)
    {

        return [
            ID::make('id'),
            COVER::make('Cover')->route('users')->component("Avatar"),
            TEXT::make('name'),
            TEXT::make('email'),
            TEXT::make('username'),
            TEXT::make('description'),
            DATE::make('date_birth'),
            RADIO::make('gender')->options(['male', 'famele']),
            TEXT::make('status')->type('hidden')->component("hidden"),
            MORPH::make('address')->value(
                [
                    ID::make('id')->hidden_edit(),
                    TEXT::make('name')->hidden_edit(),
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
            //TEXT::make('contacts'),
            //TEXT::make('documents'),
            //TEXT::make('social_links'),
            CHOICE::make('roles')->entity(Role::class)->disabled()->component('Roles'),
            //TEXT::make('notifications'),
            //TEXT::make('tenant'),
            ACTION::make('actions')->hidden_edit(),
        ];
    }
}
