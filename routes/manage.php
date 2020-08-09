<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', 'DashboardController@dashboard')->name('dashboard');
Route::get('/', 'DashboardController@redirect')->name('redirect');

Route::prefix('/pages')->name('pages.')->group(function () {
    Route::get('/', 'PageController@index')->name('index');
    Route::get('/create', 'PageController@create')->name('create');
    Route::post('/create', 'PageController@store')->name('store');
    Route::get('/edit/{id}', 'PageController@edit')->name('edit');
    Route::post('/edit/{id}', 'PageController@update')->name('update');
    Route::delete('/delete/{id}', 'PageController@destroy')->name('destroy');
});

Route::prefix('/services')->name('services.')->group(function () {
    Route::get('/', 'ServiceController@index')->name('index');
    Route::get('/create', 'ServiceController@create')->name('create');
    Route::post('/create', 'ServiceController@store')->name('store');
    Route::get('/edit/{id}', 'ServiceController@edit')->name('edit');
    Route::post('/edit/{id}', 'ServiceController@update')->name('update');
    Route::delete('/delete/{id}', 'ServiceController@destroy')->name('destroy');
});

Route::prefix('/portfolio')->name('portfolios.')->group(function () {
    Route::get('/', 'PortfolioController@index')->name('index');
    Route::get('/create', 'PortfolioController@create')->name('create');
    Route::post('/create', 'PortfolioController@store')->name('store');
    Route::get('/edit/{id}', 'PortfolioController@edit')->name('edit');
    Route::post('/edit/{id}', 'PortfolioController@update')->name('update');
    Route::delete('/delete/{id}', 'PortfolioController@destroy')->name('destroy');
});

Route::prefix('/personal-projects')->name('personalprojects.')->group(function () {
    Route::get('/', 'PersonalProjectController@index')->name('index');
    Route::get('/create', 'PersonalProjectController@create')->name('create');
    Route::post('/create', 'PersonalProjectController@store')->name('store');
    Route::get('/edit/{id}', 'PersonalProjectController@edit')->name('edit');
    Route::post('/edit/{id}', 'PersonalProjectController@update')->name('update');
    Route::delete('/delete/{id}', 'PersonalProjectController@destroy')->name('destroy');
});

Route::prefix('/page-content')->name('pagecontent.')->group(function () {
    Route::get('/', 'PageContentController@index')->name('index');
    Route::get('/edit/{id}', 'PageContentController@edit')->name('edit');
    Route::post('/edit/{id}', 'PageContentController@update')->name('update');
});
