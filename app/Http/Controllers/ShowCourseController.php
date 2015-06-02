<?php namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Category;

class ShowCourseController extends Controller {

	public function getIndex($value)
	{ 
		// dd($value);
		// $courses = Course::all();
		$categories = Category::with('c_course')->where('name', $value )->get();
		//dd($categories);

		return view('layout.show-course-box',compact('categories','value'));
	}

}
