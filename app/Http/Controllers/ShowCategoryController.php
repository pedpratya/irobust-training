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
		// $i = 0;
    	$categories = Category::with('c_course')->get();
  //   		foreach ($viewDatas as $key)
  //   		{
  //   			echo $key->name ."<br>";
		//     	foreach ( ($key->c_course()->get() ) as $ke) {
		//     		$i++;
		//     		echo $ke->name ."<br>";
		//     	}
		//     }
		//     echo $i;
		// dd($viewDatas->first()->c_course()->first()->name);

		return view('layout.category2',compact('categories'));
	}

}
