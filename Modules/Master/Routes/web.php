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

Route::prefix('master')->group(function () {
    Route::get('/', 'MasterController@index');

    Route::group(['prefix' => 'settings'], function () {
        Route::get('/', 'SettingsController@index')->name('master.settings.index');
        Route::get('/create', 'SettingsController@create')->name('master.settings.create');
        Route::post('/', 'SettingsController@store')->name('master.settings.store');
        Route::get('/{id}/edit', 'SettingsController@edit')->name('master.settings.edit');
        Route::put('/{id}', 'SettingsController@update')->name('master.settings.update');
        Route::delete('/{id}', 'SettingsController@destroy')->name('master.settings.destroy');
    });

    Route::group(['prefix' => 'dataStatis'], function () {
        Route::get('/', 'DataStatisController@index')->name('master.dataStatis.index');
        Route::get('/create', 'DataStatisController@create')->name('master.dataStatis.create');
        Route::post('/', 'DataStatisController@store')->name('master.dataStatis.store');
        Route::get('/{id}/edit', 'DataStatisController@edit')->name('master.dataStatis.edit');
        Route::put('/{id}', 'DataStatisController@update')->name('master.dataStatis.update');
        Route::delete('/{id}', 'DataStatisController@destroy')->name('master.dataStatis.destroy');
    });
});
