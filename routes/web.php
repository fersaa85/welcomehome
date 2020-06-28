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
Route::get('webmail', function () {
    return redirect('http://webmail.cpanel-box5520.bluehost.com/');
});
Route::get('contacto', ['as' => 'contact', 'uses'=>'ContactController@contact']);
Route::post('contact', ['as' => 'contact', 'uses'=>'ContactController@contact']);
