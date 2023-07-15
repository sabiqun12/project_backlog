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

// Route::get('/home', function () {
//     return view('home');
// });

// Route::get('/contact', function () {
//     return view('contact');
// });
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@index')->name('admin');

Route::get('admin/user', 'UserController@index')->name('');
Route::get('admin/user/add', 'UserController@add')->name('');
Route::get('admin/user/edit', 'UserController@edit')->name('');
Route::get('admin/user/view', 'UserController@view')->name('');
Route::post('admin/user/submit','UserController@insert')->name('');

Route::get('admin/adduser', 'AddUserController@index')->name('');
Route::get('admin/adduser/add', 'AddUserController@add')->name('');
Route::get('admin/adduser/edit', 'AddUserController@edit')->name('');
Route::get('admin/adduser/view', 'AddUserController@view')->name('');
Route::post('admin/adduser/submit','AddUserController@insert')->name('');

Route::get('admin/addtask', 'TodolistController@index')->name('index');
Route::post('/admin/addtask/store', 'TodolistController@store')->name('store');
Route::delete('/admin/admintask/{todolists->id}', 'TodolistController@destroy')->name('destroy');


