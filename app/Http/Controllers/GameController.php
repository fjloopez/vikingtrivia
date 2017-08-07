<?php

namespace App\Http\Controllers;

use App\Question;
use Session;

class GameController extends Controller
{
    public function show(){
        $totalLifes = 3;
        if ( !$this->session()->hasKey("playing") ){
            $status = [
                "errors" => 0,
                "corrects" => 0
            ];
            Session::set("palying", $status);

            $scenario = Question::getQuestion();
            return view("front.game.index", [
                "question" => $scenario["question"],
                "answer" => $scenario["answer"],
                "categoryImage" => $scenario["categoryImage"]
            ]);

        } elseif (session(playing)->status['errors'] < $totalLifes) {
            $scenario = Question::getQuestion();
            return view("front.game.index", [
                "question" => $scenario["question"],
                "answer" => $scenario["answer"],
                "categoryImage" => $scenario["categoryImage"]
            ]);
        } else{
            return view("front.game.over");

        }




    }
}
