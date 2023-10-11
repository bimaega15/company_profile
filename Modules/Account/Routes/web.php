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

Route::prefix('account')->group(function () {
    Route::get('/', 'AccountController@index');

    Route::group(['prefix' => 'profile'], function () {
        Route::get('/', 'ProfileController@index')->name('account.profile.index');
        Route::get('/create', 'ProfileController@create')->name('account.profile.create');
        Route::post('/', 'ProfileController@store')->name('account.profile.store');
        Route::get('/{id}/edit', 'ProfileController@edit')->name('account.profile.edit');
        Route::put('/{id}', 'ProfileController@update')->name('account.profile.update');
        Route::delete('/{id}', 'ProfileController@destroy')->name('account.profile.destroy');
    });
});
