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

// http://laravel.test/


Route::get('/', 'PagesController@home');
Route::get('/home', 'PagesController@home');
Route::get('/kontakti', 'PagesController@kontakti');
Route::post('/kontakti', 'PagesController@postkontakti');
Route::get('/tikitaka', 'PagesController@tikitaka');



Route::get('/setup', function () {
    return view('welcome');
});

// http://laravel.test/todo

//Route::get('/todo', function () {
//    return view('todo'),
//[
//    isDone=>"is-done"
//]
//});
