<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

########PAGES ROUTES
Route::get('contact', 'WelcomeController@contact');
Route::get('about', 'WelcomeController@about');
########END PAGES ROUTES

########ADMIN
Route::get('admin', 'AdminController@index');
########END ADMIN

########Blog
Route::get('blog/create', 'BlogController@create');

Route::get('blog/edit/{id}', 'BlogController@edit');
Route::post('blog/edit/{id}', 'BlogController@update');

Route::get('blog/{slug}', 'BlogController@show');

Route::get('blog', 'BlogController@index');
Route::post('blog', 'BlogController@save');

########END Blog


########Events
Route::resource('events', 'EventsController');

//Route::get('events', 'EventsController@index');
//Route::get('events/create', 'EventsController@create');
//Route::get('events/{slug}', 'EventsController@show');
//Route::post('events', 'EventsController@store');
//Route::get('events/{slug}/edit', 'EventsController@edit');

########END Events

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
