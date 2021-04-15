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

Route::get('/', '\App\Http\Controllers\VoteController@showAll');

Route::get('/vote/create/', function () {
    return view('create_vote');
});

Route::post('/vote/create/', '\App\Http\Controllers\VoteController@create');

Route::get('/vote/show/{id}', function () {
    return view('create_vote');
});
