<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Http\Resources;

use SIGA\Http\Resources\Collumns\Fields\CHILD;
use SIGA\Http\Resources\Collumns\Fields\ID;
use SIGA\Http\Resources\Collumns\Fields\SELECT;
use SIGA\Http\Resources\Collumns\Fields\TEXT;
use SIGA\Http\Resources\Company\CompanyResource;

class TenantResource extends AbstractResource
{

    protected $template = "CompanyComponent";

    public function fields($resource){

        return [
            ID::make('id'),
            TEXT::make('name'),
            TEXT::make('domain'),
            SELECT::make('status'),
            CHILD::make('companies')->entity(CompanyResource::class),
        ];
    }
}
