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

Route::get('/resources/views/kpts/index', 'KptsController@index');

Route::resource('kpts', 'KptsController');
