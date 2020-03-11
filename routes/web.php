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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/admin/avatar','AvatarController@index')->name('avatar');
Route::get('/admin/addAvatar','AvatarController@create')->name('addAvatar');
Route::post('/admin/saveAvatar','AvatarController@store')->name('saveAvatar');
Route::get('/admin/editAvatar/{id}','AvatarController@edit')->name('editAvatar');
Route::post('/admin/updateAvatar/{id}','AvatarController@update')->name('updateAvatar');
Route::get('/admin/deleteAvatar/{id}','AvatarController@destroy')->name('deleteAvatar');