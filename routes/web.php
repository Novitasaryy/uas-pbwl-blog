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
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/category', 'CategoryController@index');
Route::get('/post', 'PostController@index');
Route::get('/photos', 'PhotosController@index');
Route::get('/album', 'AlbumController@index');

Route::get('/category/create', 'CategoryController@create');
Route::post('/category', 'CategoryController@store');

Route::get('/post/create', 'PostController@create');
Route::post('/post', 'PostController@store');

Route::get('/photos/create', 'PhotosController@create');
Route::post('/photos', 'PhotosController@store');

Route::get('/album/create', 'AlbumController@create');
Route::post('/album', 'AlbumController@store');

Route::get('category/{id}/edit', 'CategoryController@edit');
Route::patch('category/{id}', 'CategoryController@update');

Route::delete('category/{id}', 'CategoryController@destroy');

Route::get('post/{id}/edit', 'PostController@edit');
Route::patch('post/{id}', 'PostController@update');

Route::delete('post/{id}', 'PostController@destroy');

Route::get('photos/{id}/edit', 'PhotosController@edit');
Route::patch('photos/{id}', 'PhotosController@update');

Route::delete('photos/{id}', 'PhotosController@destroy');

Route::get('album/{id}/edit', 'AlbumController@edit');
Route::patch('album/{id}', 'AlbumController@update');

Route::delete('album/{id}', 'AlbumController@destroy');