<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace App\Http\Resources\Dalla\Event;

use SIGA\Http\Resources\AbstractCollection;

use App\Dalla\Event;

class EventCollection extends AbstractCollection
{
    public $collects = EventResource::class;

    public $model = Event::class;

}
