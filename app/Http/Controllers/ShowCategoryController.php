<?php namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;

class ShowCategoryController extends Controller {

	public function index()
	{
		$categories = Category::all();
		$i = 0;

		$courses = Course::all();

		return view('layout.category',compact('categories','i','courses'));
	}

	public function index2()
	{
    	$categories = Category::with('c_course')->get();
    	$courses = Course::all();

		return view('layout.category2',compact('categories','courses'));
	}

}
