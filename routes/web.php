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

Route::group(['middleware' => ['dezoitomais']],
    function (){


        Route::get('/language/{lang}', 'HomeController@language')->name('language');
        \Route::view("tenant/404", get_theme("errors.tenant-404"))->middleware(['not-tenant'])->name('tenant.404');
        \Route::view("tenant/401", get_theme("errors.denies-401"))->name('access.denies.401');

        LoadHomeRoute::make();

        include "dalla.php";
    }
);

//Route::get( '/', function (){
//    return view('construcao');
//});

Route::get( '/confirme', function (){
    return view('dezoitomais');
})->name('dezoitomais');
Route::get( '/setcookie', function (){
    setcookie("dezoitomaisdalla", 'dezoitomaisdalla', time()+604800);  /* expira em 1 hora */
return  redirect(url('/'));

})->name('dezoitomais.setcookie');