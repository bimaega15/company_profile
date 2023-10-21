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

Route::prefix('website')->group(function () {
    Route::get('/', 'WebsiteController@index');

    Route::prefix('aboutUs')->group(function () {
        Route::get('/', 'AboutUsController@index');
    });

    Route::prefix('pricing')->group(function () {
        Route::get('/', 'PricingController@index');
    });

    Route::prefix('testimoni')->group(function () {
        Route::get('/', 'TestimoniController@index');
    });

    Route::prefix('team')->group(function () {
        Route::get('/', 'TeamController@index');
    });

    Route::prefix('faq')->group(function () {
        Route::get('/', 'FaqController@index');
    });

    Route::prefix('privacyPolicy')->group(function () {
        Route::get('/', 'PrivacyPolicyController@index');
    });

    Route::prefix('terms')->group(function () {
        Route::get('/', 'TermsController@index');
    });

    Route::prefix('service')->group(function () {
        Route::get('/', 'ServiceController@index');
        Route::get('/{id}/detail', 'ServiceController@show');
    });

    Route::prefix('blogs')->group(function () {
        Route::get('/', 'BlogsController@index')->name('website.blogs.index');
        Route::get('/{id}/edit', 'BlogsController@edit')->name('website.blogs.edit');
        Route::get('/renderBlogs', 'BlogsController@renderBlogs')->name('website.blogs.renderBlogs');
        Route::get('/{id}/detail', 'BlogsController@show')->name('website.blogs.show');
    });

    Route::prefix('company')->group(function () {
        Route::get('/', 'CompanyController@index');
        Route::get('/{id}/detail', 'CompanyController@show');
    });

    Route::prefix('contactUs')->group(function () {
        Route::get('/', 'ContactUsController@index');
        Route::get('/{id}/detail', 'ContactUsController@show');
    });

    Route::prefix('getAQuote')->group(function () {
        Route::get('/', 'GetAQuoteController@index');
    });
});
