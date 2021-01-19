<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Http\Resources\User;

use SIGA\Acl\Role;
use SIGA\Http\Resources\AbstractResource;
use SIGA\Http\Resources\Address\AddresCollection;
use SIGA\Http\Resources\Address\AddresResource;
use SIGA\Http\Resources\Collumns\Fields\ACTION;
use SIGA\Http\Resources\Collumns\Fields\CHILD;
use SIGA\Http\Resources\Collumns\Fields\CHOICE;
use SIGA\Http\Resources\Collumns\Fields\COVER;
use SIGA\Http\Resources\Collumns\Fields\DATE;
use SIGA\Http\Resources\Collumns\Fields\ID;
use SIGA\Http\Resources\Collumns\Fields\MORPH;
use SIGA\Http\Resources\Collumns\Fields\PASSWORD;
use SIGA\Http\Resources\Collumns\Fields\QUILL;
use SIGA\Http\Resources\Collumns\Fields\STATUS;
use SIGA\Http\Resources\Collumns\Fields\TEXT;
use SIGA\Http\Resources\Company\CompanyResource;
use SIGA\Http\Resources\Contact\ContactResource;
use SIGA\Http\Resources\Document\DocumentResource;
use SIGA\Http\Resources\SocialLink\SocialLinkResource;
use SIGA\Http\Resources\TenantResource;

class UserResource extends AbstractResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields($resource)
    {
        return [
            ID::make('id')->hidden_index(),
            COVER::make('Cover')->route('users')->component("Avatar"),
            TEXT::make('Name')->sortable(),
            TEXT::make('Email')->sortable(),
            TEXT::make('username')->default(date("Ymdis"))->hidden_index()->hidden_edit()->hidden_create(),
            //DATE::make('date_birth')->hidden_index(),
            PASSWORD::make('password')->value('')->hidden_index(),
            CHOICE::make('Gender')->options([
                'male', 'femele'
            ])->hidden_index()->component('Radio'),
            //MORPH::make('address')->value(
            //    [
            //        ID::make('id')->hidden_edit(),
            //        TEXT::make('name')->hidden_edit(),
              //      TEXT::make('slug')->hidden_edit(),
            //        TEXT::make('zip'),
            //        TEXT::make('city'),
             //       TEXT::make('state'),
            //        TEXT::make('country')->hidden_edit(),
             //       TEXT::make('district'),
            //        TEXT::make('street'),
            //        TEXT::make('number'),
            //        TEXT::make('complement'),
            //    ]
            //),
            STATUS::make('status'),
            QUILL::make('Description')->hidden_index(),
            CHOICE::make('roles')->entity(Role::class)->component('Roles'),
            // $this->cards("contacts", CHILD::make('contacts'))->entity(ContactResource::class),
            // $this->cards("documents",CHILD::make('documents'))->entity(DocumentResource::class),
            //$this->cards("social_links",CHILD::make('social_links'))->entity(SocialLinkResource::class),
            //$this->cards("address", CHILD::make('address'))->entity(AddresResource::class),
            //$this->cards("notifications", CHILD::make('notifications')),
            //$this->cards("tenant", CHILD::make('tenant')->entity(CompanyResource::class)),
            ACTION::make('actions')->hidden_edit()
        ];
    }
}
