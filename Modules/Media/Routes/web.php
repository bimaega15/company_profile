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

Route::prefix('media')->group(function () {
    Route::get('/', 'MediaController@index');

    Route::group(['prefix' => 'gallery'], function () {
        Route::get('/', 'GalleryController@index')->name('media.gallery.index');
        Route::get('/create', 'GalleryController@create')->name('media.gallery.create');
        Route::post('/', 'GalleryController@store')->name('media.gallery.store');
        Route::get('/{id}/edit', 'GalleryController@edit')->name('media.gallery.edit');
        Route::put('/{id}', 'GalleryController@update')->name('media.gallery.update');
        Route::delete('/{id}', 'GalleryController@destroy')->name('media.gallery.destroy');
    });
});
