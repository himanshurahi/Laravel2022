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
    return "Home Page";
})->name('home.index');

Route::get("/posts/{id}", function ($id) {
    return "Post ID is: ".$id;
})->name('posts.index');

Route::get("/recent-posts/{days_ago?}", function ($days_ago = 10) {
    return "Days Ago: ".$days_ago;
})->name('recent.index');