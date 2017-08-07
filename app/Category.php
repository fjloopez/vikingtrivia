<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $fillable = ['id', 'description', 'created_at', 'updated_at', 'category_img'];
    protected $dates = ['created_at', 'updated_at'];


    public function questions()
    {
        return $this->hasMany('App\Question');
    }

    public function getCategoryImage($id){

        $category = $this::find($id);
        return $category->category_img;
    }


}
