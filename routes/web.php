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

/*
Route::get('/', function () {
    return view('dashboard.index');
});
*/
Route::get('/', 'HomeController@index')->name('home');
Route::get('/login', 'UsuariosController@index')->name('home.usuario');

Route::prefix('dashboard')->group(function () {
    
    Route::get('/', 'DashboardController@index')->name('dashboard');

    Route::prefix('colaboradores')->group(function () {
        Route::get('/', 'ColaboradoresController@index')->name('dashboard.colaborador');
        Route::get('/registrar', 'ColaboradoresController@create')->name('dashboard.colaborador.registrar');
        Route::delete('/deleteall', 'ColaboradoresController@deleteAll')->name('dashboard.colaborador.deleteall');
    });
});