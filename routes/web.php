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
    return view('index');
});

Route::get('/register', function(){
    return view('register');
});

Route::get('/becomeatutor', function(){
    return view('becomeatutor');
});

Route::get('/login', function(){
    return view('login');
});

Route::get('/contact', function(){
    return view('contact');
});

Route::get('/index-2', function(){
    return view('index-2');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
