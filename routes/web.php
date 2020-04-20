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

Route::get('/', "TopicController@index");
// Events
Route::get('events', 'EventController@index');
Route::post('publish/{topic}', 'EventController@store');


// Topics
Route::post('subscribe/{topic}', 'TopicController@store');
Route::get('event', 'TopicController@show');



