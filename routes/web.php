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

    $comics = config('comics');

    $data = ['comicsSeries' => $comics];

    return view('home', $data);
})->name('homepage');

Route::get('/detail/{id}', function ($id) {

    $comics = config('comics');

    $data = ['comicsSerie' => $comics[$id]];

    return view('detail', $data);
})->name('detail-comic');

Route::get('/characters', 'StaticController@characters')->name('characters');

Route::get('/comics', 'StaticController@comics')->name('comics');

Route::get('/movies', 'StaticController@movies')->name('movies');

Route::get('/tv', 'StaticController@tv')->name('tv');

Route::get('/games', 'StaticController@games')->name('games');

Route::get('/collectibles', 'StaticController@collectibles')->name('collectibles');

Route::get('/videos', 'StaticController@videos')->name('videos');

Route::get('/fans', 'StaticController@fans')->name('fans');

Route::get('/news', 'StaticController@news')->name('news');

Route::get('/shop', 'StaticController@shop')->name('shop');