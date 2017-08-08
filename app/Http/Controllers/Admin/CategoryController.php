<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Question;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
	public function show()
	{
	    $categories = Category::all();
        return view('admin.categories.index', ["categories" => $categories]);
    }


    public function showById($id)
    {
        $category = Category::find($id);
        $questions = Question::where("category_id","$id")->get();
        return view('admin.categories.category', ["category" => $category, "questions" => $questions]);
    }


};
