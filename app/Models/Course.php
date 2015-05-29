<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model {

 //
 protected $table = 'course';

 public function category_c()
    {
        return $this->belongsTo('App\Models\Category', 'category_id', 'id');
    }

}
