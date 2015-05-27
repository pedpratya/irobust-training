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

Route::get('category','ShowCategoryController@index');

// Test Database Faith

Route::get('testDBCategory', 'testDBController@testCategory');
Route::get('testDBCourse', 'testDBController@testCourse');
Route::get('testDBTopic', 'testDBController@testTopic');
Route::get('testDBSection', 'testDBController@testSection');

// End Test

Route::get('search', 'testDBController@index');
Route::post('test', 'testDBController@searchData');

/**/

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


