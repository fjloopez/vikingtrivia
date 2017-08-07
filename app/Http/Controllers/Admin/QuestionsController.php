<?php

namespace App\Http\Controllers\Admin;

use App\Answer;
use App\Http\Controllers\Controller;
use App\Question;

class QuestionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$questions = Question::with('category')->paginate(5);
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
    	$question->save();
    }

    public function showById($id)
    {
        $question = Question::find($id);
        $answers = Answer::where('question_id', $id)->get();
        return view('admin.questions.question', ["question" => $question, "answers" => $answers]);
    }

}
