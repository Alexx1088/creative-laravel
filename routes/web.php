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

Route::get('/posts', 'PostController@index')->name('post.index');

Route::get('/posts/create', 'PostController@create')
    ->name('post.create');

Route::post('/posts', 'PostController@store')->name('post.store');

Route::get('/posts/{post}', 'PostController@show')->name
('post.show');

Route::get('/posts/{post}/edit', 'PostController@edit')
    ->name
('post.edit');

Route::patch('/posts/{post}', 'PostController@update')
    ->name
('post.update');

Route::delete('/posts/{post}', 'PostController@destroy')
    ->name
('post.delete');






Route::get('/posts/update', 'PostController@update');

Route::get('/posts/delete', 'PostController@delete');

Route::get('/posts/first_or_create', 'PostController@first_or_create');

Route::get('/posts/update_or_create', 'PostController@updateOrCreate');

Route::get('/main', 'MainController@index')->name('main.index');
Route::get('/contacts', 'ContactController@index')->name('contact.index');
Route::get('/about', 'AboutController@index')->name('about.index');

Route::get('/provka', 'ProvkaController@index')->name('provka.index');



Route::get('/postic', 'PostikController@index')->name('postic.index');
Route::get('/postic/create', 'PostikController@create')->name('postic.create');
Route::post('/postic', 'PostikController@store')->name('postic.store');
Route::get('/postic/{post}', 'PostikController@show')->name('postic.show');
Route::get('/postic/{postic}/edit', 'PostikController@edit')->name('postic.edit');
Route::patch('/postic/{postic}', 'PostikController@update')->name('postic.update');
Route::delete('/postic/{post}', 'PostikController@destroy')->name('postic.delete');



Route::get('/propka', 'FirstController@ueban');
















