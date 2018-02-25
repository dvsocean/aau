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
    if(Auth::check()) {
        return view('onboarding.index');
    } else {
        return redirect('welcome');
    }
})->name('onboarding');

//Route to idea page
Route::get('/your_ideas', function(){
    if(Auth::check()) {
        return view('idea_page.index');
    } else {
        return redirect('welcome');
    }
})->name('your_ideas');

//Route to idea controller
Route::post('idea_storage', 'IdeaController@newIdea')->name('idea_storage');

//Stats page
Route::get('/statistics', function(){
    if(Auth::check()) {
        return view('statistics.index');
    } else {
        return redirect('welcome');
    }
})->name('statistics');

//Register new user
Route::get('/new_grad', function(){
    return view('auth.register');
});