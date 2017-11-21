<?php

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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');

Route::resource('clientes', 'ClienteController');

Route::post('clientes/transacao/{id}', 'ClienteController@transacao')->name('clientes.transacao');

/**
 * Suas rotas vão colocada daqui para baixo
 */

Route::resource('users', 'UserController');


