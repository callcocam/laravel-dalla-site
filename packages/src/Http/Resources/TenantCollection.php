<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class TenantCollection extends ResourceCollection
{

    protected $template = "CompanyComponent";

    public $collects = TenantResource::class;
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => $this->collection,
            'template'=> $this->template
        ];
    }
}
