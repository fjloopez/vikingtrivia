<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
	public function show($id)
	{
		$category = Category::find($id);
        $questions = Question::find($id);
        return view('front.main.index', compact('questions', 'category'));
    }
};
