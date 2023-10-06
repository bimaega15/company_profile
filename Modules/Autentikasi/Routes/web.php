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

Route::prefix('autentikasi')->group(function () {
    Route::get('/', 'AutentikasiController@index');

    Route::group(['prefix' => 'roles'], function () {
        Route::get('/', 'RolesController@index')->name('autentikasi.roles.index');
        Route::get('/create', 'RolesController@create')->name('autentikasi.roles.create');
        Route::post('/', 'RolesController@store')->name('autentikasi.roles.store');
        Route::get('/{id}/edit', 'RolesController@edit')->name('autentikasi.roles.edit');
        Route::put('/{id}', 'RolesController@update')->name('autentikasi.roles.update');
        Route::delete('/{id}', 'RolesController@delete')->name('autentikasi.roles.delete');
    });
});
