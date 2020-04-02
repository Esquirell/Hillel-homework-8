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

Route::get('/page1', function () {
    return view('pageone');
});
Route::get('/page2', function () {
    return view('pagetwo');
});
Route::get('/page3', function () {
    return view('pagethree');
});
Route::get('/page4', function () {
    return view('pagefour');
});

Route::get('/random','RandomController@randomText');

