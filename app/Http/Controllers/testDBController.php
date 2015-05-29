<?php namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\Topic;
use App\Models\Section;

use Illuminate\Http\Request;

class testDBController extends Controller {

	// public function __construct()
	// {
	// 	$categories = Category::all();
	// 	$courses = Course::all();
	// 	$topics = Topic::all();
	// 	$sections = Section::all();
	// }
	

	public function testCategory()
	{


		// $categories = Category::all();
		// dd($categories);
		// return view('show',compact('categories'));
		$viewDatas = Category::all();
		return view('show',compact('viewDatas'));

		// @foreach ($categories as $category)
		// 				{!! $category->name !!} <br>
		// 			@endforeach
	}

	public function testRelation()
    {
    	$viewDatas = Category::with('c_course')->get();

		dd($viewDatas);
    }

	public function testCourse()
	{
		// $courses = Course::all();
		// dd($courses);
		$viewDatas = Course::all();
		return view('show',compact('viewDatas'));
	}

	public function testTopic()
	{
		// $topics = Topic::all();
		// dd($topics);
		$viewDatas = Topic::all();
		return view('show',compact('viewDatas'));
	}

	public function testSection()
	{
		// $sections = Section::all();
		// dd($sections);
		$viewDatas = Section::all();
		return view('show',compact('viewDatas'));
	}

	public function index()
	{
		return view('searchData');
	}

	public function searchData(Request $request)
	{
		$SC = $request->input('SCourse');

		$categories = Category::all();
		foreach ($categories as $category) {
			if( strtolower($category->name) == strtolower($SC) )
			{
				$show = $category->name;
				return view('test',compact('show'));
			}
		}
		echo '<script type="text/javascript">alert(" Not Found !!! ");</script>';
		return view('searchData');
	}

}