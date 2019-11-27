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

Route::get('/', 'HomeController@getHome');

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/logout', function () {
    return view('logout');
});

Route::get('/catalog', 'CatalogController@getIndex')-> middleware('auth');

#return redirect()->action('CatalogController@getIndex');

Route::get('/catalog/show/{id}', 'CatalogController@getShow')-> middleware('auth');
    

Route::get('/catalog/create', 'CatalogController@getCreate')-> middleware('auth');

Route::get('/catalog/edit/{id}', 'CatalogController@getEdit')-> middleware('auth');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')-> middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')-> middleware('auth');
