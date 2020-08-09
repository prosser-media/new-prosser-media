<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', 'PageController@home')->name('pages.home');
Route::get('/services', 'PageController@services')->name('pages.services');
Route::get('/personal-projects', 'PageController@personalprojects')->name('pages.personalprojects');
Route::get('/portfolio', 'PageController@portfolio')->name('pages.portfolio');
Route::get('/portfolio/{slug}', 'PageController@portfolioShow')->name('pages.portfolioshow');
Route::get('/personal-projects/{slug}', 'PageController@personalShow')->name('pages.personalshow');

Route::get('/contact', 'PageController@contact')->name('pages.contact');
Route::post('/contact', 'ContactController@contact')->name('contact');

Route::get('/pages/{slug}', 'PageController@customPage')->name('pages.custom');

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout')->name('logout.user');
