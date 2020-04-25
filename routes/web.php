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

Route::get('/{any}', 'RoutesController@index');
Route::get('/', function () {
    return view('coming-soon');
});

Auth::routes(['verify' => true]);

Route::get('/dashboard', 'HomeController@index')->name('home')->middleware('verified');


Route::resource('/categories','ProductController');
Route::resource('/products','ProductController');