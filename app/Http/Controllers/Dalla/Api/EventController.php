<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */
namespace App\Http\Controllers\Dalla\Api;

use App\Dalla\Event;
use App\Http\Requests\Dalla\EventRequest;
use App\Http\Resources\Dalla\Event\EventCollection;
use App\Http\Resources\Dalla\Event\EventResource;
use SIGA\Http\AbstractController;

class EventController extends AbstractController
{

    protected $model = Event::class;

    protected $withs = [];

    protected $collection = EventCollection::class;
    protected $resources = EventResource::class;

    /**
     * Store a newly created resource in storage.
     *
     * @param  EventRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventRequest $request)
    {

        return parent::save($request);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  EventRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EventRequest $request, $id)
    {
        return parent::save($request, $id);
    }
}
