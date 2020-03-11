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

return  view('welcome');

});

Route::get("","CategorieController@index")->name("categorie");
Route::get("", "CategorieController@create")->name("addCategorie");
Route::post("", "CategorieController@store")->name("saveCategorie");
Route::get("/{id}", "CategorieController@edit")->name("editCategorie");
Route::post("/{id}", "CategorieController@update")->name("updateCategorie");
Route::get("/{id}", "CategorieController@destroy")->name("deleteCategorie");