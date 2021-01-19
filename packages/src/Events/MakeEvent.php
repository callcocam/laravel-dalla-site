<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use SIGA\Make;

class MakeEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $event;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Make $make)
    {
        $this->event = $make;
    }
}
