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

Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/blog_details/{post}','HomeController@show')->name('blog_details');


Route::get('/sign-in/github', 'Auth\LoginController@github')->name('github');
Route::get('sign-in/github/redirect','Auth\LoginController@githubRedirect')->name('githubRedirect');


Route::resource('categories','CategoryController');


Route::prefix('dashboard')->group(function () {
    Route::get('/','Admin\AdminController@index')->name('dashboard');
    Route::resource('/posts','Admin\PostController');
});


// comment routes
Route::resource('comments','CommentController');
Route::get('commentes/delete/{comment}','CommentController@delete')->name('comments.delete');


