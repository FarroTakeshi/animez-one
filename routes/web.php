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
    Route::get('/seasons/create', 'SeasonController@create')->name('season.create');
    Route::post('/seasons/create', 'SeasonController@store')->name('season.store');
    Route::get('/seasons/{season}/edit', 'SeasonController@edit')->name('season.edit');
    Route::post('/seasons/{season}/edit', 'SeasonController@update')->name('season.update');
});