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
    return view('home');
});

Route::resource('admin/posts', 'Admin\\PostsController');
Route::resource('admin/projects', 'Admin\\ProjectsController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/send/email', 'ContactController@send')->name('mail');
