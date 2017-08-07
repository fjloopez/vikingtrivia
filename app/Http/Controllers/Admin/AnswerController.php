<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AnswerController extends Controller
{








    public function getAnswers ($id){

        return Answer::where('question_id', '=', $id);
    }
}
