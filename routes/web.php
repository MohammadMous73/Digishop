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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home','App\Http\Controllers\App\HomeController@index')->name('app.pages.home');
Route::get('/post/show/{slug}','App\Http\Controllers\App\PostController@show')->name('app.post.show');

Route::get('admin/dashboard','App\Http\Controllers\Admin\HomeController@dashboard')->name('admin.dashboard');

Route::any('admin/post/list','App\Http\Controllers\Admin\PostController@index')->name('admin.post.list');


Route::get('admin/post/add','App\Http\Controllers\Admin\PostController@create')->name('admin.post.add');
Route::post('admin/post/store','App\Http\Controllers\Admin\PostController@store')->name('admin.post.store');


Route::get('admin/post/edit/{post}','App\Http\Controllers\Admin\PostController@edit')->name('admin.post.edit');
Route::put('admin/post/update/{post}','App\Http\Controllers\Admin\PostController@update')->name('admin.post.update');

