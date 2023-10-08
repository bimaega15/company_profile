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
        Route::get('/{id}', 'RolesController@show')->name('autentikasi.roles.show');
        Route::put('/{id}', 'RolesController@update')->name('autentikasi.roles.update');
        Route::delete('/{id}', 'RolesController@destroy')->name('autentikasi.roles.destroy');
    });

    Route::group(['prefix' => 'permissions'], function () {
        Route::get('/', 'PermissionsController@index')->name('autentikasi.permissions.index');
        Route::get('/create', 'PermissionsController@create')->name('autentikasi.permissions.create');
        Route::post('/', 'PermissionsController@store')->name('autentikasi.permissions.store');
        Route::get('/{id}/edit', 'PermissionsController@edit')->name('autentikasi.permissions.edit');
        Route::put('/{id}', 'PermissionsController@update')->name('autentikasi.permissions.update');
        Route::delete('/{id}', 'PermissionsController@destroy')->name('autentikasi.permissions.destroy');
    });

    Route::group(['prefix' => 'assignRoles'], function () {
        Route::get('/', 'AssignRolesController@index')->name('autentikasi.assignRoles.index');
        Route::get('/create', 'AssignRolesController@create')->name('autentikasi.assignRoles.create');
        Route::post('/', 'AssignRolesController@store')->name('autentikasi.assignRoles.store');
        Route::get('/{id}/edit', 'AssignRolesController@edit')->name('autentikasi.assignRoles.edit');
        Route::put('/{id}', 'AssignRolesController@update')->name('autentikasi.assignRoles.update');
        Route::delete('/{id}', 'AssignRolesController@destroy')->name('autentikasi.assignRoles.destroy');
    });
});
