<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QuestionController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
        $this->middleware('MostriWare');
    }

    public function index()
    {
    	$questions = Question::paginate(5);								//----------seguir acá con las vistas en carpeta admin
    	return view('admin.questions.index', compact('questions'));
    }

    public function create()
    {
    	return view('admin.questions.create');
    }

    public function store()
    {
    	//crear la pregunta
    	$question = Question::create(request()->all());

    	//guardar la pregunta
    	$movie->save();
    }

    public function show($id)
    {
        $quesition = Question::find($id);
        return view('admin.questions.show', compact('question'));
    }
}
