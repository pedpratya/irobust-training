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

// Route::get('category','ShowCategoryController@index');
// Route::get('category2','ShowCategoryController@index2');
Route::get('category','ShowCategoryController@index2');

Route::get('detail-course/{value}','DetailCourseContorller@getIndex');
Route::get('show-course-box/{value}','ShowCourseController@getIndex');

// Test Database Faith
Route::get('testDBCategory', 'testDBController@testCategory');
Route::get('testDBCourse', 'testDBController@testCourse');
Route::get('testDBTopic', 'testDBController@testTopic');
Route::get('testDBSection', 'testDBController@testSection');
Route::get('testDBMember', 'testDBController@testMember');
// End Test

// Test Relation
Route::get('testRelation-CategoryToCourse', 'testDBController@testRelation_CategoryToCourse');
Route::get('testRelation-CourseToSection', 'testDBController@testRelation_CourseToSection');
Route::get('testRelation-SectionToTopic', 'testDBController@testRelation_SectionToTopic');
// End relation

// Login
Route::get('login','CheckLoginController@index');
Route::post('login', 'CheckLoginController@checkEmail');
// End Login
// Sign Up
Route::get('sign-up','SignUpController@index');
Route::post('sign-up','SignUpController@SignUp');
// End Sign Up

Route::get('search', 'testDBController@index');
Route::post('test', 'testDBController@searchData');

/**/

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
