<?php

use Illuminate\Http\Request;
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


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::prefix('v1')->group(function ($router) {
    Route::namespace('Ep3\Api')->middleware('auth:sanctum')->group(function () {
        LoadRoute::make([
            "app_root" => "app",
            "app_theme" => "Ep3"
        ]);
    });
});

Route::prefix('v1')->group(function ($router) {
    Route::namespace('Dalla\Api')->middleware('auth:sanctum')->group(function () {
        LoadRoute::make([
            "app_root" => "app",
            "app_theme" => "Dalla"
        ]);
    });
});

Route::prefix('v1')->group(function ($router) {
    $router->namespace('Dalla')->group(function ($router) {
        $router->get('carrousel-3d/awards', 'HomeController@carrousel3d')->name('dalla.home.carrousel3d');
        $router->get('carrousel-3d/products', 'ProductController@carrousel3d')->name('dalla.home.carrousel3d.products');
        $router->get('carrousel-3d/{slus}/campaings', 'CampaignController@carrousel3d')->name('dalla.home.carrousel3d.campaings');
        $router->get('carrousel-3d/{id}/products/gallery', 'ProductController@carrousel3dProduct')->name('dalla.home.carrousel3d.products-gallery');
    });
});
