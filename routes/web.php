<?php

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
Route::get('/ok','AdminController@ok')->name('ok');
Route::get('/admin/login','AdminController@form_login')->name('admin');
Route::get('/admin/redirect', 'SocialController@redirectToProvider')->name('admin.redirect');
Route::get('/admin/callback', 'SocialController@handleProviderCallback');
