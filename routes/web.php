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

Route::get('/', 'PagesController@home')->name('home');

Route::get('/about', 'PagesController@about')->name('about');

Route::get('/contact', 'PagesController@contact')->name('contact');

Route::post('/contact', 'PagesController@store')->name('contact.store');

Route::get('/thanks/{name}', 'PagesController@thanks')->name('thanks');

Route::get('/signin', function () {
    return view('pages.signin');
});

Route::get('/signup', function () {
    return view('pages.signup');
});

Route::get('/logout', function () {
    return view('pages.logout');
});

Route::get('/viewmessage', function () {
    return view('pages.viewmessage');
});

