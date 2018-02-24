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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Return home from login page named route
Route::get('/home', function(){
    return view('welcome');
})->name('homePage');

//This route starts at the header_nav menu
Route::get('/onboarding', function(){
    return view('onboarding.index');
})->name('onboarding');