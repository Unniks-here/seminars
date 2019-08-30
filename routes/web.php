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

Auth::routes();

Route::get('auth/facebook', 'Auth\SocialiteController@redirectToFacebook')->name('auth-facebook');
Route::get('auth/facebook/callback', 'Auth\SocialiteController@handleFacebookCallback');
Route::get('auth/google', 'Auth\SocialiteController@redirectToGoogle')->name('auth-google');
Route::get('auth/google/callback', 'Auth\SocialiteController@handleGoogleCallback');

Route::get('/', function () {
    return view('pages.index');
});

//Route::get('/home', 'HomeController@index');

Route::get('/{page}',function($page){
    return view("pages.$page");
});