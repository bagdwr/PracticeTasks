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

Route::get('/', 'App\Http\Controllers\UserController@movieUser')->name('movieUser');
Route::get('/movieUser','App\Http\Controllers\UserController@movieUser')->name('movieUser');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function(){

    Route::group(['middleware'=>'is_admin','namespace'=>'App\Http\Controllers','prefix'=>'admin'],function (){
        Route::get('/',function (){
            return view('adminPage/admin');
        })->name("admin_main");
        Route::get('/genresList','AdminController@showGenresList')->name('genresList');
        Route::get('/createGenreForm','AdminController@showCreateGenre')->name('createGenreForm');
        Route::post('/createGenre','AdminController@createGenre')->name('createGenre');
        Route::post('/saveGenre','AdminController@saveGenre')->name('saveGenre');
        Route::get('/editGenreForm/{genre}','AdminController@showEditGenreForm')->name('editGenreForm');
        Route::get('/deleteGenre/{genre}','AdminController@deleteGenre')->name('deleteGenre');
        Route::get('/movies','AdminController@showMovies')->name('movies');
        Route::get('/createMovieForm','AdminController@showCreateMovieForm')->name('createMovieForm');
        Route::post('/createMovie','AdminController@createMovie')->name('createMovie');
        Route::get('/showEditMovieForm/{movie}','AdminController@editMovieForm')->name('showEditMovieForm');
        Route::get('/deleteMovie/{movie}','AdminController@deleteMovie')->name('deleteMovie');
        Route::post('/editMovie','AdminController@editMovie')->name('editMovie');
        Route::post('/editMovieImage','PhotoController@editMovieImage')->name('editMovieImage');
    });


//    Route::middleware('is_admin')->prefix('/admin')->namespace('App\Http\Controllers')->group(function (){
//          Route::get('/',function (){
//              return view('adminPage/admin');
//          })->name("admin_main");
//    });
});
