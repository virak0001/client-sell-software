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
    return view('welcome');
});
$api_url = env('API_URL');
Route::get($api_url.'/users');
Route::post($api_url.'/users');
Route::put($api_url.'/users');
Route::delete($api_url.'/users');
Route::post($api_url.'/verify');
Route::get('login',function() {
    return view('signin');
});
Route::get('register',function() {
    return view('signup');
});
