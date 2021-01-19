<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/make', function () {
    \Illuminate\Support\Facades\Artisan::call(request()->get('command'));
});

Route::get('/make/seed', function () {
    \Illuminate\Support\Facades\Artisan::call(sprintf("db:seed --class=%s", request()->get('class')));
});

Route::get('/symlink', function () {
    symlink(storage_path("app/public"), public_path("storage"));
});


$router->get('makes', 'HomeController@makes')->name('makes.home');

