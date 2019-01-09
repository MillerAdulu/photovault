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

Route::get('/', 'PageController@welcome');

Auth::routes();

Route::prefix('login/facebook')->group(function() {
    Route::get('/', 'FacebookController@redirectToProvider');
    Route::get('/callback', 'FacebookController@handleProviderCallback');
});

Route::prefix('photos')->group(function() {
    Route::get('facebook', 'PhotoController@facebookPhotos');
});

Route::prefix('blog')->group(function() {
    Route::get('/', 'PageController@blog');
});

Route::get('/contact', 'PageController@contact');

Route::get('/about', 'PageController@about');

Route::prefix('album')->group(function() {
    Route::post('/', 'AlbumController@store');
    Route::get('/{album}', 'AlbumController@album');
});

Route::prefix('my')->group(function() {
    Route::get('/albums', 'AlbumController@albums');
    Route::delete('/image/{image}', 'ImageController@remove');
});

Route::prefix('image')->group(function() {
    Route::post('/', 'ImageController@store');
    Route::delete('/{image}', 'ImageController@destroy');
});
