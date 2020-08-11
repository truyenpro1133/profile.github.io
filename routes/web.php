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

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/', ['as'=>'trangchu','uses'=>'HomeController@getIndex']);
Route::get('lang/{lang}','HomeController@changeLang')->name('lang');
Route::get('mail', ['as'=>'mail','uses'=>'HomeController@addFeedback']);