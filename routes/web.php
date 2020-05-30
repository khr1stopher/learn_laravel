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

Route::get('/welcome/{firstname}', function ($firstname) {
    return 'welcome route '.$firstname;
});

Route::get('/welcome/{firstname}/{lastname}', function ($firstname,$lastname) {
    return 'welcome route '.$firstname.' '.$lastname;
});
