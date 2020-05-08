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
Route::get('/show/users/{role}','viewuserscontroller@index')->name('users');


// Profile Routes
Route::get('/changepassword','viewuserscontroller@ChangeForm')->name('profile.change.form');
Route::put('/ChangePassword','viewuserscontroller@ChangePassword')->name('password.change');

//Complain Routes
Route::get('/complain/create','ComplainController@create')->name('complain.create');
Route::post('/complain/store','ComplainController@store')->name('complain.store');