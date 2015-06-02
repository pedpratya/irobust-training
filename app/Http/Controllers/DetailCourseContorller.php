<?php namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Section;

class DetailCourseContorller extends Controller {

	public function index()
	{
		$categories = Category::all();
		$sections = Section::all();

		return view('layout.detail-course',compact('sections','categories'));
	}
}
