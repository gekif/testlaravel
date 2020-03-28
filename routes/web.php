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
    return view('welcome');
});

Route::get('about', function () {
    return view('about');
})->middleware(['auth', 'checkUser:dzulfikar.maulana@gmail.com']);

Route::get('contact', function () {
    return view('contact');
})->middleware(['auth', 'checkUser:f.pujihastuti@gmail.com']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
