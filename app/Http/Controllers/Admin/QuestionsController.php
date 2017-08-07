<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\AnswerController;
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
        $quesition = Question::find($id);
        return view('admin.questions.show', compact('question'));
    }


    public function getQuestion(){

        return $this->getQuestionById(null);
    }


    public function getQuestionById ($id){

        if ($id === null){
            $id = rand(1,5);
            $question = Question::find($id);
        } else {
            $question = Question::where('freeze_timer IS NOT NULL')->limit(1);
        }
        $answer = getAnswers($question->id);

        $categoryImage = getCategoryImage($question->category_id);

        $scenario = [
            'question' => $question,
            'answer' => $answer,
            'categoryImage' => $categoryImage
        ];
        return $scenario;
    }

}
