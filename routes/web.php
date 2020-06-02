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

Route::get('/', 'PagesController@inicio')->name('inicio');

Route::get('/{id}', 'PagesController@detalle')->name('notas.detalle');

Route::get('/welcome',"PagesController@welcome"); 
Route::get('/blog', 'PagesController@blog')->name('noticias');

route::view('galeria','fotos', [ 'number' => 125])->name('foto');

Route::get('/welcome/{firstname?}', function ($firstname = 'Fulano') {
    return 'welcome route '.$firstname;
})->where('name', '[A-Za-z]+');

Route::get('/nosotros/{nombre?}','PagesController@Nosotros')->name('nosotros');

Route::get('/welcome/{firstname?}/{lastname?}', function ($firstname = 'Fulano',$lastname = 'sin appellido') {
    return 'welcome route '.$firstname.' '.$lastname;
})->where(['firstname' => '[a-z]+', 'lastname' => '[a-z]+']);

Route::get('/welcome/{firstname?}/{lastname?}/{yearsold?}', function ($firstname = 'Fulano',$lastname = 'sin appellido',$yearsold = 0) {
    return 'welcome route '.$firstname.' '.$lastname.' '.$yearsold;
})->where(['firstname' => '[a-z]+', 'lastname' => '[a-z]+','yearsold' => '[0-9]+']);