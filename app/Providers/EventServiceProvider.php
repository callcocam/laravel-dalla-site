<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use SIGA\Events\MakeEvent;
use SIGA\Events\MenuEvent;
use SIGA\Events\SubMenuEvent;
use SIGA\Listeners\MakeListener;
use SIGA\Listeners\MenuListener;
use SIGA\Listeners\SubMenuListener;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        MenuEvent::class => [
            MenuListener::class
        ],
        SubMenuEvent::class => [
            SubMenuListener::class
        ],
        MakeEvent::class => [
            MakeListener::class
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
