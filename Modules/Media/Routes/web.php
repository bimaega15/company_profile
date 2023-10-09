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

    Route::group(['prefix' => 'kategoriPortfolio'], function () {
        Route::get('/', 'KategoriPortfolioController@index')->name('media.kategoriPortfolio.index');
        Route::get('/create', 'KategoriPortfolioController@create')->name('media.kategoriPortfolio.create');
        Route::post('/', 'KategoriPortfolioController@store')->name('media.kategoriPortfolio.store');
        Route::get('/{id}/edit', 'KategoriPortfolioController@edit')->name('media.kategoriPortfolio.edit');
        Route::put('/{id}', 'KategoriPortfolioController@update')->name('media.kategoriPortfolio.update');
        Route::delete('/{id}', 'KategoriPortfolioController@destroy')->name('media.kategoriPortfolio.destroy');
    });

    Route::group(['prefix' => 'portfolio'], function () {
        Route::get('/', 'PortfolioController@index')->name('media.portfolio.index');
        Route::get('/create', 'PortfolioController@create')->name('media.portfolio.create');
        Route::post('/', 'PortfolioController@store')->name('media.portfolio.store');
        Route::get('/{id}/edit', 'PortfolioController@edit')->name('media.portfolio.edit');
        Route::put('/{id}', 'PortfolioController@update')->name('media.portfolio.update');
        Route::delete('/{id}', 'PortfolioController@destroy')->name('media.portfolio.destroy');
    });
    
    Route::group(['prefix' => 'clients'], function () {
        Route::get('/', 'ClientsController@index')->name('media.clients.index');
        Route::get('/create', 'ClientsController@create')->name('media.clients.create');
        Route::post('/', 'ClientsController@store')->name('media.clients.store');
        Route::get('/{id}/edit', 'ClientsController@edit')->name('media.clients.edit');
        Route::put('/{id}', 'ClientsController@update')->name('media.clients.update');
        Route::delete('/{id}', 'ClientsController@destroy')->name('media.clients.destroy');
    });

    Route::group(['prefix' => 'testimoni'], function () {
        Route::get('/', 'TestimoniController@index')->name('media.testimoni.index');
        Route::get('/create', 'TestimoniController@create')->name('media.testimoni.create');
        Route::post('/', 'TestimoniController@store')->name('media.testimoni.store');
        Route::get('/{id}/edit', 'TestimoniController@edit')->name('media.testimoni.edit');
        Route::put('/{id}', 'TestimoniController@update')->name('media.testimoni.update');
        Route::delete('/{id}', 'TestimoniController@destroy')->name('media.testimoni.destroy');
    });
});
