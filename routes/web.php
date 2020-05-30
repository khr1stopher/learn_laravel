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

Route::get('/welcome', function () {
    return 'welcome route';
});

Route::get('/welcome/khris', function () {
    return 'welcome route khris';
});

Route::get('/welcome/khris/pineda', function () {
    return 'welcome route khris pineda';
});
