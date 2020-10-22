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


Auth::routes();


Route::middleware('auth')->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
    
    Route::get('/', function () {
        return view('form');
    });

    Route::get('/task/index', 'TaskController@index');
    Route::get('/task/create', 'TaskController@create');
    Route::post('/task/create', 'TaskController@store');
});
