<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index')->name('home');
Route::get('/rastreamento', 'HomeController@rastreamento')->name('home.rastreamento');
Route::get('/login', 'UsuariosController@index')->name('home.usuario');

Route::prefix('dashboard')->group(function () {
    
    Route::get('/', 'DashboardController@index')->name('dashboard');

    Route::prefix('colaboradores')->group(function () {
        Route::get('/', 'ColaboradoresController@index')->name('dashboard.colaborador');
        Route::get('/registrar', 'ColaboradoresController@create')->name('dashboard.colaborador.registrar');
        Route::get('/delete/{id}', 'ColaboradoresController@delete')->name('dashboard.colaborador.delete');
        Route::delete('/deleteall', 'ColaboradoresController@deleteAll')->name('dashboard.colaborador.deleteall');
    });
});