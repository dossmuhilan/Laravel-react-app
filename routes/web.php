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
    return view('home');
});


Route::get('/news', function () {
    return view('list');
});
Route::get('/apinews', [App\Http\Controllers\listController::class, 'index'])->name('newsList');


Route::get('/post/{id?}', function () {
    return view('list');
});
Route::get('/apipost/{id?}', [App\Http\Controllers\listController::class, 'getArticleDetail'])->name('getArticleDetail');


Route::get('/news/{type?}', function () {
    return view('list');
});
Route::get('/apinews/{type?}', [App\Http\Controllers\listController::class, 'getNewsByType'])->name('getNewsByType');


/* get data */




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
