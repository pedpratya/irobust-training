<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

	//
	protected $table = 'category';

	public function c_course()
	{
		return $this->hasMany('App\Models\Course', 'category_id', 'id');
	}

}

