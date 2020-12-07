<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace App\Http\Resources\Dalla\EventEdtion;

use SIGA\Http\Resources\AbstractCollection;

use App\Dalla\EventEdtion;

class EventEdtionCollection extends AbstractCollection
{
    public $collects = EventEdtionResource::class;

    public $model = EventEdtion::class;

}
