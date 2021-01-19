<?php

use Illuminate\Support\Facades\Route;
use SIGA\Facades\AutoRoute;

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


Route::get('/users-tests', 'AdminController@user');
Route::group(['prefix'=>'/admin'], function ($router){

    $router->get('/{vue_capture?}',"AdminController@index")->middleware(['tenant','auth:sanctum'])->where('vue_capture', '[\/\w\.\,\-]*')->name("admin");

});

//Route::get('menus', "MenuTestController@load");
