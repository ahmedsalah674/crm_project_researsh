<?php

use Illuminate\Support\Facades\Route;

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
Auth::routes();
//home route
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', function () {
    return redirect(route('home'));
});

// "User(admin,employee,customer)" Routes
Route::get('/show/user/{id}','ViewusersController@show')->name('user.data');
Route::get('/user/create','viewuserscontroller@create')->name('user.create');
Route::post('/user/create','viewuserscontroller@store')->name('user.store');

