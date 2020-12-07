<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use SIGA\Providers\SigaServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('path.public', function () {
            return base_path("public_html") ;
        });
        $this->app->register(ComposerServiceProvider::class);
        $this->app->register(SigaServiceProvider::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
