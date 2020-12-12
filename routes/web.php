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
//     return view('welcome');
// });

Route::get("/", function(){
    return view("home");
})->name("home");

Route::get("servie", function(){
    return view("term_of_service");
})->name("service");

Route::get('/auth/twitter', 'TwitterController@redirectToProvider');
Route::get('/auth/twitter/callback', 'TwitterController@handleProviderCallback');
Route::get("/auth/twitter/logout","TwitterController@logout");
// Route::get("/tweet", "TweetController@tweet");
// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
