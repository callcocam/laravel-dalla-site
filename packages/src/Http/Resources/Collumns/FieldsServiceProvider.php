<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */
namespace  SIGA\Http\Resources\Collumns;

use Illuminate\Support\ServiceProvider;

class FieldsServiceProvider extends ServiceProvider
{

     /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('ID',function() {
            return new ID;
         });
         $this->app->bind('TEXT',function() {
            return new TEXT;
         });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

    }
}
