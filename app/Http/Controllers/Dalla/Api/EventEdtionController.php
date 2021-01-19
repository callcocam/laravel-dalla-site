<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */
namespace App\Http\Controllers\Dalla\Api;

use App\Dalla\EventEdtion;
use App\Http\Requests\Dalla\EventEdtionRequest;
use App\Http\Resources\Dalla\EventEdtion\EventEdtionCollection;
use App\Http\Resources\Dalla\EventEdtion\EventEdtionResource;
use SIGA\Http\AbstractController;

class EventEdtionController extends AbstractController
{

    protected $model = EventEdtion::class;

    protected $withs = [];

    protected $collection = EventEdtionCollection::class;
    protected $resources = EventEdtionResource::class;

    /**
     * Store a newly created resource in storage.
     *
     * @param  EventEdtionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventEdtionRequest $request)
    {

        return parent::save($request);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  EventEdtionRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EventEdtionRequest $request, $id)
    {
        return parent::save($request, $id);
    }
}
