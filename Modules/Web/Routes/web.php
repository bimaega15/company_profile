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

    Route::group(['prefix' => 'produk'], function () {
        Route::get('/', 'ProdukController@index')->name('web.produk.index');
        Route::get('/create', 'ProdukController@create')->name('web.produk.create');
        Route::post('/', 'ProdukController@store')->name('web.produk.store');
        Route::get('/{id}/edit', 'ProdukController@edit')->name('web.produk.edit');
        Route::put('/{id}', 'ProdukController@update')->name('web.produk.update');
        Route::delete('/{id}', 'ProdukController@destroy')->name('web.produk.destroy');
    });

    Route::group(['prefix' => 'kategoriBerita'], function () {
        Route::get('/', 'KategoriBeritaController@index')->name('web.kategoriBerita.index');
        Route::get('/create', 'KategoriBeritaController@create')->name('web.kategoriBerita.create');
        Route::post('/', 'KategoriBeritaController@store')->name('web.kategoriBerita.store');
        Route::get('/{id}/edit', 'KategoriBeritaController@edit')->name('web.kategoriBerita.edit');
        Route::put('/{id}', 'KategoriBeritaController@update')->name('web.kategoriBerita.update');
        Route::delete('/{id}', 'KategoriBeritaController@destroy')->name('web.kategoriBerita.destroy');
    });

    Route::group(['prefix' => 'berita'], function () {
        Route::get('/', 'BeritaController@index')->name('web.berita.index');
        Route::get('/create', 'BeritaController@create')->name('web.berita.create');
        Route::post('/', 'BeritaController@store')->name('web.berita.store');
        Route::get('/{id}/edit', 'BeritaController@edit')->name('web.berita.edit');
        Route::put('/{id}', 'BeritaController@update')->name('web.berita.update');
        Route::delete('/{id}', 'BeritaController@destroy')->name('web.berita.destroy');
    });

    Route::group(['prefix' => 'faq'], function () {
        Route::get('/', 'FaqController@index')->name('web.faq.index');
        Route::get('/create', 'FaqController@create')->name('web.faq.create');
        Route::post('/', 'FaqController@store')->name('web.faq.store');
        Route::get('/{id}/edit', 'FaqController@edit')->name('web.faq.edit');
        Route::put('/{id}', 'FaqController@update')->name('web.faq.update');
        Route::delete('/{id}', 'FaqController@destroy')->name('web.faq.destroy');
    });
});
