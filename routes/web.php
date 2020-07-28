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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/article', 'ArticleController@index')->name('article');
Route::get('/category', 'CategoryController@index')->name('category');
Route::get('/contacts', 'ContactsController@index')->name('contacts');
Route::get('/review', 'ReviewController@index')->name('review');

