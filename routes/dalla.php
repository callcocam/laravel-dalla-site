<?php

use Illuminate\Support\Facades\Route;
use SIGA\Facades\LoadHomeRoute;
use SIGA\Menu;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::namespace('Dalla')->group(function ($router) {
    Route::get('', 'HomeController@index')->name('home');
    Route::get('', 'HomeController@index')->name('dalla.home');
    LoadHomeRoute::make([
        'app_root' => "app",
        'app_theme' => "Dalla"
    ], 'dalla');
});
