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

Route::get('/', function () {
    return view('pages.home');
});
Route::get('/features', function(){
    return view('pages.features');
});
Route::get('/contact', function(){
    return view('pages.contact');
});
Route::get('/FAQ', function(){
    return view('pages.FAQ');
});

Route::resource('players', 'PlayersController');
Auth::routes();

Route::get('/profile', 'HomeController@index')->name('home');
