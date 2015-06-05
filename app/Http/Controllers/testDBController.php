<?php namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\Topic;
use App\Models\Section;

use Illuminate\Http\Request;

class testDBController extends Controller {
	

	public function testCategory()
	{


		// $categories = Category::all();
		// dd($categories);
		// return view('show',compact('categories'));
		$viewDatas = Category::all();
		return view('show',compact('viewDatas'));

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


	// Test Mapping Ralation on Model
	public function testRelation_CategoryToCourse()
    {
    	$viewDatas = Category::with('c_course')->get();
    		foreach ($viewDatas as $key)
    		{
    			echo $key->name ."<br>";
		    	foreach ( ($key->c_course()->get() ) as $ke) {
		    		echo $ke->name ."<br>";
		    	}
		    }
		dd($viewDatas->first()->c_course()->first()->name);
    }

    public function testRelation_CourseToSection()
    {
    	$viewDatas = Course::with('c_section')->get();
    		foreach ($viewDatas as $key)
    		{
    			echo $key->name ."<br>";
		    	foreach ( ($key->c_section()->get() ) as $ke) {
		    		echo $ke->name ."<br>";
		    	}
		    }
		dd($viewDatas->first()->c_section()->first()->name);
    }

    public function testRelation_SectionToTopic()
    {
    	$viewDatas = Section::with('s_topic')->get();
    		foreach ($viewDatas as $key)
    		{
    			echo $key->name ."<br>";
		    	foreach ( ($key->s_topic()->get() ) as $ke) {
		    		echo $ke->name ."<br>";
		    	}
		    }
		dd($viewDatas->first()->s_topic()->first()->name);
    }

}
