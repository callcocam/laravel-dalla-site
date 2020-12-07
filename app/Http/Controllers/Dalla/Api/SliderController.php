<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */
namespace App\Http\Controllers\Dalla\Api;

use App\Dalla\Slider;
use App\Http\Requests\Dalla\SliderRequest;
use App\Http\Resources\Dalla\Slider\SliderCollection;
use App\Http\Resources\Dalla\Slider\SliderResource;
use SIGA\Http\AbstractController;

class SliderController extends AbstractController
{

    protected $model = Slider::class;

    protected $withs = [];

    protected $collection = SliderCollection::class;
    protected $resources = SliderResource::class;

    /**
     * Store a newly created resource in storage.
     *
     * @param  SliderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SliderRequest $request)
    {

        return parent::save($request);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  SliderRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SliderRequest $request, $id)
    {
        return parent::save($request, $id);
    }
}
