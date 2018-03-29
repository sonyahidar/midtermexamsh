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


/*Route::get('/', function () {
    return view('welcome');
});
*/
Auth::routes();
Route::get('/', 'PagesController@home') -> name('home');
/*Route::get('/home', 'HomeController@index')->name('home');*/
Route::get('/contact', 'PagesController@contact') -> name('contact');
Route::get('/thanks', 'PagesController@thanks') -> name('thanks');
Route::post('/contact', 'PagesController@store') -> name('contact.store');