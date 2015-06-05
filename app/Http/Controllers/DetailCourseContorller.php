<?php namespace App\Http\Controllers;

use App\Models\Section;
use App\Models\Course;


class DetailCourseContorller extends Controller {

	public function getIndex($value)
	{
		$courses = Course::with('c_section')->where('id', $value )->get();

		return view('layout.detail-course',compact('courses'));
	}
}
