<?php

namespace App\Http\Controllers\Admin;

use App\Answer;
use App\Category;
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
        $categories = Category::all();
    	return view('admin.questions.create', ["categories" => $categories]);
    }

    public function edit($id){
        $categories = Category::all();
        $question = Question::find($id);
        $answers = Answer::where('question_id', $id)->get();
        return view('admin.questions.edit', ["categories" => $categories, "question" => $question, "answers" => $answers]);
    }

    public function store()
    {
    	//crear la pregunta
    	$question = new Question;

    	$question->text = request("question");
    	$question->category_id = request("category_id");


    	//guardar la pregunta
        $question->save();

    	//crear las respuestas
    	$answer0 = new Answer;
    	$answer1 = new Answer;
    	$answer2 = new Answer;
    	$answer3 = new Answer;

        //asignar valores a la respuestas
        $answer0->text = request("answer0");
        $answer1->text = request("answer1");
        $answer2->text = request("answer2");
        $answer3->text = request("answer3");

        $answer0->question_id = $question->id;
        $answer1->question_id = $question->id;
        $answer2->question_id = $question->id;
        $answer3->question_id = $question->id;

        $correctAnswer = request("correct");
        if ($correctAnswer === 0){
            $answer0->correct = 1;
        } elseif ($correctAnswer ===1){
            $answer1->correct = 1;
        } elseif ($correctAnswer === 2){
            $answer2->correct = 1;
        } else{
            $answer3->correct = 1;
        }

        //guardar las respuestas
        $answer0->save();
        $answer1->save();
        $answer2->save();
        $answer3->save();

        return redirect("/admin/preguntas");
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
