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

Route::get('/', function () {
    return view('index');
});

Route::get('/settings', '\App\Http\Controllers\SettingsController@create');
Route::post('/settings', '\App\Http\Controllers\SettingsController@store');

Route::get('/sso', '\App\Http\Controllers\AuthController@create')->name('login');
Route::post('/sso', '\App\Http\Controllers\AuthController@store');
Route::get('/sso/callback', '\App\Http\Controllers\AuthController@callback');
Route::post('/logout', '\App\Http\Controllers\AuthController@logout')->name('logout');

// Authenticated routes
Route::get('/profile', '\App\Http\Controllers\ProfileController@show')->middleware(['auth']);