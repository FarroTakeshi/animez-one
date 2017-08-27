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

Route::get('home', [
    'as' => 'home',
    'uses' => 'HomeController@index'
]);

Route::group(['namespace' => 'App'], function(){
    Route::get('/', 'AnimeController@index')->name('anime.index');
});

Route::group(['namespace' => 'Admin'], function(){
    Route::get('/seasons/index', 'SeasonController@index')->name('season.index');
});