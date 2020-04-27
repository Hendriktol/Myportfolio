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
Route::get('/', 'PageController@index');

Route::get('/about', 'PageController@about');

Route::get('/contact', 'PageController@contact');

Route::get('/portfolio', 'PageController@work');

Route::get('/cases/{path}', 'PageController@case');

Route::get('/privacy-policy', function() {
    return "I don't have this sorted yet, I'm not gathering data at all. <a href='/'>return to the website</a>";
});
