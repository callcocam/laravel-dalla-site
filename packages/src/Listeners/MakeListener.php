<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Listeners;

use SIGA\Http\Requests\MakeRequest;

class MakeListener
{

    protected $makeRequest;
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(MakeRequest $makeRequest)
    {
        $this->makeRequest = $makeRequest;
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $make = $event->event;

        $attribute = $this->makeRequest->input('make_attribute');

        unset($attribute['busy'], $attribute['successful'], $attribute['errors'], $attribute['originalData']);

        if (isset($attribute['id'])) {
            $make->make_attribute()->getRelated()->updateBy($attribute, $attribute['id']);
        } else {
            $make->make_attribute()->create([
                "url" => null,
                "i18n" => $make->name,
                "icon" => "CircleIcon"
            ]);
        }
    }
}
