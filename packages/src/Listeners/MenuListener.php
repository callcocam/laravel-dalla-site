<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Listeners;

use SIGA\Http\Requests\MenuRequest;

class MenuListener
{

    protected $menuRequest;
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(MenuRequest $menuRequest)
    {
        $this->menuRequest = $menuRequest;
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $menu = $event->event;

        $make = $this->menuRequest->input('menu_attribute');

        unset($make['busy'], $make['successful'], $make['errors'], $make['originalData']);

        if (isset($make['id'])) {
            $menu->menu_attribute()->getRelated()->updateBy($make, $make['id']);
        } else {
            $menu->menu_attribute()->create([
                "url" => null,
                "i18n" => $menu->name,
                "icon" => "CircleIcon"
            ]);
        }
    }
}
