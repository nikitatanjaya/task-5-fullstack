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


// Categories routes
// Route::get('/categorypage/{user_id}', 'App\Http\Controllers\CategoryController@showCategory');
Route::get('/categorypage', 'App\Http\Controllers\CategoryController@showCategory');
Route::post('/categorypage', 'App\Http\Controllers\CategoryController@showCategory')->name('category.index');
Route::get('/createCategory', 'App\Http\Controllers\CategoryController@createCategory')->name('category.create');
Route::post('/createCategory', 'App\Http\Controllers\CategoryController@storeCategory')->name('category.store');
Route::get('/updateCategory/{category}', 'App\Http\Controllers\CategoryController@editCategory')->name('category.edit');
Route::post('/updateCategory/{category}', 'App\Http\Controllers\CategoryController@updateCategory')->name('category.update');
Route::delete('/deleteCategory/{category}', 'App\Http\Controllers\CategoryController@deleteCategory')->name('category.delete');


// Posts routes
Route::get('/postpage', 'App\Http\Controllers\PostController@showPost');
Route::post('/postpage', 'App\Http\Controllers\PostController@showPost')->name('post.index');
Route::get('/createPost', 'App\Http\Controllers\PostController@createPost')->name('post.create');
Route::post('/createPost', 'App\Http\Controllers\PostController@storePost')->name('post.store');
Route::get('/updatePost/{post}', 'App\Http\Controllers\PostController@editPost')->name('post.edit');
Route::post('/updatePost/{post}', 'App\Http\Controllers\PostController@updatePost')->name('post.update');
Route::delete('/deletePost/{post}', 'App\Http\Controllers\PostController@deletePost')->name('post.delete');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
