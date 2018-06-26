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

Route::get('/resources/views/lessons/html', function () {
    return view('/lessons/html');
});

Route::get('/resources/views/lessons/css', function () {
    return view('/lessons/css');
});

Route::get('/resources/views/lessons/php', function () {
    return view('/lessons/php');
});

Route::get('/resources/views/lessons/mysql', function () {
    return view('/lessons/mysql');
});

Route::get('/resources/views/lessons/git', function () {
    return view('/lessons/git');
});

Route::get('/resources/views/lessons/laravel', function () {
    return view('/lessons/laravel');
});

Route::get('/resources/views/lessons/bootstrap', function () {
    return view('/lessons/bootstrap');
});

Route::get('/resources/views/lessons/heroku', function () {
    return view('/lessons/heroku');
});

Route::get('/resources/views/lessons/others', function () {
    return view('/lessons/others');
});

Route::get('/resources/views/kpts/index', 'KptsController@index');

Route::resource('kpts', 'KptsController');
