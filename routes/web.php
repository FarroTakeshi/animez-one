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

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['namespace' => 'App'], function(){
    Route::get('/', 'AnimeController@index')->name('anime.index');
});

Route::group(['namespace' => 'Admin'], function(){
    //Season
    Route::get('/seasons/index', 'SeasonController@index')->name('season.index');
    Route::get('/seasons/create', 'SeasonController@create')->name('season.create');
    Route::post('/seasons/create', 'SeasonController@store')->name('season.store');
    Route::get('/seasons/{season}/edit', 'SeasonController@edit')->name('season.edit');
    Route::post('/seasons/{season}/edit', 'SeasonController@update')->name('season.update');
    Route::get('/seasons/{season}/delete', 'SeasonController@delete')->name('season.delete');

    //Anime Genre
    Route::get('/anime_genres/index', 'AnimeGenreController@index')->name('anime_genre.index');
    Route::get('/anime_genres/create', 'AnimeGenreController@create')->name('anime_genre.create');
    Route::post('/anime_genres/create', 'AnimeGenreController@store')->name('anime_genre.store');
    Route::get('/anime_genres/{anime_genre}/edit', 'AnimeGenreController@edit')->name('anime_genre.edit');
    Route::post('/anime_genres/{anime_genre}/edit', 'AnimeGenreController@update')->name('anime_genre.update');
    Route::get('/anime_genres/{anime_genre}/delete', 'AnimeGenreController@delete')->name('anime_genre.delete');

    //Anime
    Route::get('/animes/create', 'AnimeController@create')->name('anime.create');
    Route::post('/animes/create', 'AnimeController@store')->name('anime.store');
});

Auth::routes();
