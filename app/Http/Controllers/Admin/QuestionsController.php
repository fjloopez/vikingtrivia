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

    public function edit($id){
        $question = Question::find($id);
        $answers = Answer::where('question_id', $id)->get();
        return view('admin.questions.edit', ["question" => $question, "answers" => $answers]);
    }

    public function store()
    {
    	//crear la pregunta
    	$question = Question::create(request()->all());

    	$answer = Answer::create(request()->all());
        $answer->save();
    	//guardar la pregunta
    	$question->save();
    }


    public function update(){

        $question = Question::find(session("questionId"));
        $question->text = session("question");

        $answers = Answer::where("question_id", session("questionId"))->get();


        $answers[0]->text = session("answer0");
        $answers[1]->text = session("answer1");
        $answers[2]->text = session("answer2");
        $answers[3]->text = session("answer3");

        $question->save();
        foreach ($answers as $answer){
            $answer->save();
        }

        redirect("admin.questions.index");
    }

    public function showById($id)
    {
        $question = Question::find($id);
        $answers = Answer::where('question_id', $id)->get();
        return view('admin.questions.question', ["question" => $question, "answers" => $answers]);
    }

}
