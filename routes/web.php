<?php

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

Route::get('/blockchain', function(){
    return 'Blockchain';
});

Route::resource('/users', 'UserController');
Route::resource('/blockchain', 'BlockchainController');
Route::get('/blockchainStats', 'BlockchainController@blockchainStats');
Route::get('/graph', 'BlockchainController@graph');


