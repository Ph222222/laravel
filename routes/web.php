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

 

Route::get('ID/{id?}', function ($id=33) {
    echo 'IDx ' . $id; 
});


Route::get('MID/id', function () {
    echo 'mIDx ' ; 
});

Route::get('role',[
    'middleware' => 'Role:editor',
    'uses' => 'TestController@index',
 ]);
 Route::get('profile', [
    'middleware' => 'auth',
    'uses' => 'UserController@showProfile'
 ]);

