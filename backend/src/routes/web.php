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

Route::get('/session', function() {
    session(['foo' => 'こんにちはこんにちは']);
    return session('foo');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => '/', 'user.', 'namespace' => 'User'], function () {
    Route::get('/post', 'PostController@index')->name('post.index');
    Route::get('/post/create', 'PostController@create')->name('post.create');
    Route::get('/post/{id}', 'PostController@show')->name('post.show');
    Route::get('/post/edit/{id}', 'PostController@edit')->name('post.edit');
    Route::post('/post', 'PostController@store')->name('post.store');
    Route::put('/post/{id}', 'PostController@update')->name('post.update');
});
