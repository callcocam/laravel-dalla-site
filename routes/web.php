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

Auth::routes();

include "dev.php";

//include "rpps.php";

Route::get('/language/{lang}', 'HomeController@language')->name('language');
\Route::view("tenant/404", get_theme("errors.tenant-404"))->middleware(['not-tenant'])->name('tenant.404');
\Route::view("tenant/401", get_theme("errors.denies-401"))->name('access.denies.401');

LoadHomeRoute::make();

include "dalla.php";
