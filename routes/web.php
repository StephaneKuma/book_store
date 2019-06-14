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

Route::get('/', 'BookController@index')->name('index');

Route::resource('book', 'BookController');

Route::get('book/{level}/{sub_level}', 'BookController@search_by_sub_level');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('user/{id}', 'ProfileController@index')->name('profile.index');

Route::get('user/{id}/books', 'ProfileController@show_books')->name('profile.show_books');

Route::get('user/{userId}/book/{bookId}', 'ProfileController@show_book')->name('profile.show_book');

Route::get('/confirm/{id}/{token}', 'Auth\RegisterController@confirm');
