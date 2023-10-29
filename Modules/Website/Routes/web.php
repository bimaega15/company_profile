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

Route::group(['middleware' => ['track-visit'], 'prefix' => 'website'], function () {
    Route::get('/', 'WebsiteController@index')->name('website.index');

    Route::prefix('aboutUs')->group(function () {
        Route::get('/', 'AboutUsController@index')->name('website.aboutUs.index');
    });

    Route::prefix('pricing')->group(function () {
        Route::get('/', 'PricingController@index')->name('website.pricing.index');
    });

    Route::prefix('testimoni')->group(function () {
        Route::get('/', 'TestimoniController@index')->name('website.testimoni.index');
    });

    Route::prefix('team')->group(function () {
        Route::get('/', 'TeamController@index')->name('website.team.index');
    });

    Route::prefix('faq')->group(function () {
        Route::get('/', 'FaqController@index')->name('website.faq.index');
    });

    Route::prefix('privacyPolicy')->group(function () {
        Route::get('/', 'PrivacyPolicyController@index')->name('website.privacyPolicy.index');
    });

    Route::prefix('terms')->group(function () {
        Route::get('/', 'TermsController@index')->name('website.terms.index');
    });

    Route::prefix('product')->group(function () {
        Route::get('/', 'ProductController@index')->name('website.product.index');
        Route::get('/{id}/detail', 'ProductController@show')->name('website.product.show');
    });

    Route::prefix('service')->group(function () {
        Route::get('/', 'ServiceController@index')->name('website.service.index');
        Route::get('/{id}/detail', 'ServiceController@show')->name('website.service.show');
    });

    Route::prefix('blogs')->group(function () {
        Route::get('/', 'BlogsController@index')->name('website.blogs.index');
        Route::get('/{id}/edit', 'BlogsController@edit')->name('website.blogs.edit');
        Route::get('/renderBlogs', 'BlogsController@renderBlogs')->name('website.blogs.renderBlogs');
        Route::get('/{id}/detail', 'BlogsController@show')->name('website.blogs.show');
    });

    Route::prefix('company')->group(function () {
        Route::get('/', 'CompanyController@index')->name('website.company.index');
        Route::get('/{id}/detail', 'CompanyController@show')->name('website.company.show');
    });

    Route::prefix('project')->group(function () {
        Route::get('/', 'ProjectController@index')->name('website.project.index');
        Route::get('/{id}/detail', 'ProjectController@show')->name('website.project.show');
    });

    Route::prefix('contactUs')->group(function () {
        Route::get('/', 'ContactUsController@index')->name('website.contactUs.index');
        Route::get('/{id}/detail', 'ContactUsController@show')->name('website.contactUs.show');
        Route::post('/store', 'ContactUsController@store')->name('website.contactUs.store');
    });

    Route::prefix('getAQuote')->group(function () {
        Route::get('/', 'GetAQuoteController@index')->name('website.getAQuote.index');
    });
});
