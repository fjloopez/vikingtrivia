<?php

namespace App\Http\Controllers\Admin;

use App\Answer;
use App\Http\Controllers\Controller;
use App\Question;

class QuestionsController extends Controller
{

    protected $redirectTo = '/admin/preguntas';

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

    public function store(Request $request)
    {
    	//crear la pregunta
    	$question = Question::create(request()->all());
    	$answer = Answer::create(request()->all());

    	//guardar la pregunta
    	$question->save();
        //guardar las respuestas
        $answer->save();
    }


    public function update(){

        $question = Question::find(session("questionId"));
//        dd(session());
        $question->text = request("question");

        $answers = Answer::where("question_id", session("questionId"))->get();

        $answers[0]->text = request("answer0");
        $answers[1]->text = request("answer1");
        $answers[2]->text = request("answer2");
        $answers[3]->text = request("answer3");

        $question->save();
        foreach ($answers as $answer){
            $answer->save();
        }

        return redirect("/admin/preguntas");
    }

    public function showById($id)
    {
        $question = Question::find($id);
        $answers = Answer::where('question_id', $id)->get();
        return view('admin.questions.question', ["question" => $question, "answers" => $answers]);
    }

}
