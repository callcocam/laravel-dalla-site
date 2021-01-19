<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Providers;

use Illuminate\Support\ServiceProvider;
use SIGA\Acl\AclServiceProvider;
use SIGA\AutoRouteGenerate;
use SIGA\Console\Commands\SgFilterCommand;
use Illuminate\Routing\Router;
use SIGA\AutoMenuGenerate;
use SIGA\Console\Commands\DBDescribeTable;
use SIGA\Console\Commands\PermissionCommand;
use SIGA\Console\Commands\SgCollectionCommand;
use SIGA\Console\Commands\SgControllerCommand;
use SIGA\Console\Commands\SgFiltersCommand;
use SIGA\Console\Commands\SgModelCommand;
use SIGA\Console\Commands\SgRequestCommand;
use SIGA\Console\Commands\SgResourceCommand;
use SIGA\Console\Commands\SgSeederCommand;
use SIGA\Console\Commands\SgSiteControllerCommand;
use SIGA\Console\Commands\SgSiteViewCommand;
use SIGA\Helpers\LoadHomeRouterHelper;
use SIGA\Helpers\LoadRouterHelper;
use SIGA\Http\Resources\Collumns\FieldsServiceProvider;
use SIGA\Make;
use SIGA\Translations\TranslationServiceProvider;

class SigaServiceProvider extends ServiceProvider
{

    public function register()
    {
        if ($this->app->environment() !== 'production') {
            $this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
        }

        $this->mergeConfigFrom(
            __DIR__.'/../../config/siga.php', 'siga'
        );

        $this->app->bind(
            'loadRoute',
            function ($app) {
                return new LoadRouterHelper(app(Make::class));
            }
        );

        $this->app->bind(
            'LoadHomeRoute',
            function ($app) {
                return new LoadHomeRouterHelper(app(Make::class));
            }
        );
        $this->app->bind(
            'autoRoute',
            function ($app) {
                return new AutoRouteGenerate(app(Router::class));
            }
        );
        $this->app->bind(
            'autoMenu',
            function ($app) {
                return new AutoMenuGenerate();
            }
        );

        $this->app->register(TranslationServiceProvider::class);

        $this->app->register(MacroServiceProvider::class);

        $this->app->register(FieldsServiceProvider::class);

        $this->app->register(AclServiceProvider::class);

        $this->app->register(SigaRouteServiceProvider::class);

        $this->loadViewsFrom(siga_path('resources/views'), 'admin-siga');

        $this->commands(SgFiltersCommand::class);
        $this->commands(SgFilterCommand::class);
        $this->commands(SgControllerCommand::class);
        $this->commands(SgRequestCommand::class);
        $this->commands(SgResourceCommand::class);
        $this->commands(SgCollectionCommand::class);
        $this->commands(SgModelCommand::class);
        $this->commands(DBDescribeTable::class);
        $this->commands(SgSiteControllerCommand::class);
        $this->commands(SgSiteViewCommand::class);
        $this->commands(SgSeederCommand::class);
        $this->commands(PermissionCommand::class);
    }


    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishMigrations();
        $this->loadMigrations();
    }

    /**
     * Publish the migration files.
     *
     * @return void
     */
    protected function publishMigrations()
    {
        $this->publishes([
            __DIR__ . '/../../database/migrations/' => database_path('migrations'),
        ], 'siga-migrations');

        $this->publishes([
            __DIR__ . '/../../database/seeds/' => database_path('seeds'),
        ], 'siga-seeds');

        $this->publishes([
            __DIR__ . '/../../database/factories/' => database_path('factories'),
        ], 'siga-factories');
    }

    /**
     * Load our migration files.
     *
     * @return void
     */
    protected function loadMigrations()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');
        $this->loadFactoriesFrom(__DIR__ . '/../../database/factories');
    }
}
