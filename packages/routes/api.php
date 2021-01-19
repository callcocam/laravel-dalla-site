<?php

use Illuminate\Support\Facades\Route;
use SIGA\Facades\AutoRoute;
use SIGA\Facades\LoadRoute;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('v1')
    ->group(function ($router) {
        AutoRoute::get("languages", "TranslationController", "language", "admin.languages");
        Route::middleware('auth:sanctum')->group(function () {
            AutoRoute::get('load-menus', 'MenuController', 'load');
            AutoRoute::get('me', 'MeController', 'me');

            AutoRoute::resources('makes', 'MakeController', 'makes');
            AutoRoute::get("search-route", "MakeController", "search_route", "admin.search-route");
            AutoRoute::post('makes/generate/model', 'MakeController', 'generateModel');
            AutoRoute::post('makes/generate/seeder', 'MakeController', 'generateSeeder');
            AutoRoute::post('makes/generate/controller', 'MakeController', 'generateController');
            AutoRoute::post('makes/generate/site-controller', 'MakeController', 'generateSiteController');
            AutoRoute::post('makes/generate/request', 'MakeController', 'generateRequest');
            AutoRoute::post('makes/generate/filters', 'MakeController', 'generateFilters');
            AutoRoute::post('makes/generate/filter', 'MakeController', 'generateFilter');
            AutoRoute::post('makes/generate/resource', 'MakeController', 'generateResource');
            AutoRoute::post('makes/generate/collection', 'MakeController', 'generateColection');

            LoadRoute::make();

            // AutoRoute::resources('profile', 'ProfileController', 'profile');

            // AutoRoute::resources('company', 'CompanyController', 'company');
            //
            // AutoRoute::resources('menus', 'MenuController', 'menus');
            // AutoRoute::resources('sub-menus', 'SubMenuController', 'sub-menus');
            // AutoRoute::resources('users', 'UserController', 'users');
            // AutoRoute::resources('roles', 'RoleController', 'roles');
            // AutoRoute::resources('permissions', 'PermissionController', 'permissions');

        });
    });
