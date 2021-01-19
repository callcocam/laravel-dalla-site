<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Listeners;

use SIGA\Http\Requests\SubMenuRequest;

class SubMenuListener
{

    protected $subMenuRequest;
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(SubMenuRequest $subMenuRequest)
    {
        $this->subMenuRequest = $subMenuRequest;
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $subMenu = $event->event;

        $make = $this->subMenuRequest->input('menu_attribute');

        unset($make['busy'], $make['successful'], $make['errors'], $make['originalData']);

        if (isset($make['id'])) {
            $subMenu->menu_attribute()->getRelated()->updateBy($make, $make['id']);
        } else {
            $subMenu->menu_attribute()->create([
                "url" => null,
                "i18n" => $subMenu->name,
                "icon" => "CircleIcon"
            ]);
        }
    }
}
