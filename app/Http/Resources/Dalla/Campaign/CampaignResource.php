<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace App\Http\Resources\Dalla\Campaign;

use SIGA\Http\Resources\AbstractResource;
use SIGA\Http\Resources\Collumns\Fields\ID;
use SIGA\Http\Resources\Collumns\Fields\STATUS;
use SIGA\Http\Resources\Collumns\Fields\ACTION;
use SIGA\Http\Resources\Collumns\Fields\CKEDITOR;
use SIGA\Http\Resources\Collumns\Fields\COVER;
use SIGA\Http\Resources\Collumns\Fields\LANG;
use SIGA\Http\Resources\Collumns\Fields\MULTIPLEUPLOAD;
use SIGA\Http\Resources\Collumns\Fields\TEXT;
use SIGA\Http\Resources\Collumns\Fields\UPLOAD;

class CampaignResource extends AbstractResource
{


    public function fields($resource)
    {

        return [
            ID::make('id')->hidden_index(),
            COVER::make('cover')->route('campaigns'),
            UPLOAD::make('Imagem De Card','card_cover')->route('campaigns'),
            MULTIPLEUPLOAD::make('gallery')->route('campaigns'),
            TEXT::make('name'),
            CKEDITOR::make('description')->hidden_index(),
            LANG::make('language'),
            STATUS::make('status'),
            ACTION::make('actions')->hidden_edit()
        ];
    }
}
