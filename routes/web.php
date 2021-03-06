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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', function(){
    echo "Hello Admin";
})->middleware('admin');

Route::get('/editor', function(){
    echo "Hello Editor";
})->middleware('editor');

Route::get('/user', function(){
    echo "Hello User";
})->middleware('user');
