<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Tenant;

use SIGA\Tenant\Facades\Tenant;
use Illuminate\Support\ServiceProvider;
use SIGA\Tenant as SIGATenant;

class TenantServiceProvider extends ServiceProvider
{

    private $company;
    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        if (function_exists('config_path')) {
            $this->publishes([

                realpath(__DIR__ . '/../../config/tenant.php') => config_path('tenant.php')

            ]);
        }
        try {

            $tenant = \DB::table('tenants')->where('domain', "dallacervejaria.com.br")->first();



            if ($tenant) {

                $company = SIGATenant::find($tenant->id);

                Tenant::addTenant("tenant_id", $tenant->id);

                if($company->companies){
                    view()->share('tenant',  $company->companies);
                }
                else{
                    view()->share('tenant',  $tenant);
                }

            }
        } catch (\PDOException $th) {
            //throw $th;
            dump("Falha no tenant");
        }
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(TenantManager::class, function () {
            return new TenantManager();
        });
    }
}
