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

Route::prefix('web')->group(function () {
    Route::get('/', 'WebController@index');


    Route::group(['prefix' => 'tentangKami'], function () {
        Route::get('/', 'TentangKamiController@index')->name('web.tentangKami.index');
        Route::get('/create', 'TentangKamiController@create')->name('web.tentangKami.create');
        Route::post('/', 'TentangKamiController@store')->name('web.tentangKami.store');
        Route::get('/{id}/edit', 'TentangKamiController@edit')->name('web.tentangKami.edit');
        Route::put('/{id}', 'TentangKamiController@update')->name('web.tentangKami.update');
        Route::delete('/{id}', 'TentangKamiController@destroy')->name('web.tentangKami.destroy');
        Route::get('/checkData', 'TentangKamiController@checkData')->name('web.tentangKami.checkData');
    });

    Route::group(['prefix' => 'profileSingkat'], function () {
        Route::get('/', 'ProfileSingkatController@index')->name('web.profileSingkat.index');
        Route::get('/create', 'ProfileSingkatController@create')->name('web.profileSingkat.create');
        Route::post('/', 'ProfileSingkatController@store')->name('web.profileSingkat.store');
        Route::get('/{id}/edit', 'ProfileSingkatController@edit')->name('web.profileSingkat.edit');
        Route::put('/{id}', 'ProfileSingkatController@update')->name('web.profileSingkat.update');
        Route::delete('/{id}', 'ProfileSingkatController@destroy')->name('web.profileSingkat.destroy');
        Route::get('/datatable', 'ProfileSingkatController@datatable')->name('web.profileSingkat.datatable');
    });
});
