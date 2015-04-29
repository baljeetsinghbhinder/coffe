<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('home');
});

Route::get('home',function(){
	return View::make('welcome');
});

Route::get('about',function(){
	return View::make('pages/about');
});

Route::get('contact',function(){
	return View::make('pages/contact');
});

Route::get('/fblogin', 'HomeController@loginWithFacebook');

Route::get('/exp',function(){
	return $_SERVER['HTTP_HOST'];
});

Route::get('/env','HomeController@getEnv');

Route::resource('NewScaffs', 'NewScaffsController');

HTML::macro('clever_link', function($route, $text) {	
	if( Request::path() == $route ) {
		$active = "class = 'active'";
	}
	else {
		$active = '';
	}
 
  return '<li ' . $active . '>' . link_to($route, $text) . '</li>';
});