<?php namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;


class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$categories = Category::all();
		$i = 0;

		$courses = Course::all();

		//return view('layout.master',compact('categories','i','courses'));
		return view('home',compact('categories','i','courses'));
	}

}
