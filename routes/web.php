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

Route::get('/', 'PagesController@home')->name('home');

Route::get('/about', 'PagesController@about')->name('about');

Route::get('/contact','PagesController@contact')->name('contact');

Route::post('/contact', function () {
    echo 'Hello I worked';
});
Route::get('/register','PagesController@contact')->name('register');

Route::get('/login','PagesController@contact')->name('login');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
