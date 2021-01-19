<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use SIGA\Http\Resources\Traits\TraitMethods;

abstract class AbstractResource extends JsonResource
{

    use TraitMethods;

    protected $elements = [];

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return  $this->values($request);
    }

    protected function mountOptions($options)
    {

        $data = [];
        foreach ($options as $option) {
            $data[] = ['code' => $option, 'label' => $option];
        }
        return $data;
    }
}
