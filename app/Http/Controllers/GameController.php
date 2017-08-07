<?php

namespace App\Http\Controllers;

use App\Question;

class GameController extends Controller
{
    private $totalLifes = 3;

    public function show(){


        //Inicializo las variables de session en caso que no lo estén
        if ( !$this->session()->has("playing") ) {
            $status = [
                "errors" => 0,
                "corrects" => 0
            ];
            session(["palying" => $status]);
        }

        //Checkear gameover - en caso de gameover redirigir a la vista correspondiente
        if (session('playing.errors') > $this->totalLifes) return redirect('/vikingttrivia/game-over');


        //Recupero de session las preguntas ya hechas, si todavía no se hizo ninguna devuelvo un array vacío
        $preguntasPrevias = (session()->has('preguntasPrevias')) ? session('preguntasPrevias') : [];


        //Traigo una pregunta aleatorea de la base. La consulta elige una pregunta aleatorea que no esté dentro del array de $preguntasPrevias (es decir, elige una pregunta que aun no se hizo)
        $question = Question::getQuestion($preguntasPrevias);

        // Para que no rompa por no tener cargadas muchas preguntas en la BD
        if (!$question) return "No hay más preguntas";


        //Guardo el id de la pregunta en la variable de session 'preguntasPrevias' para no repetirla en el futuro
        session()->push('preguntasPrevias', $question->id);


        //Devuelvo la vista con la pregunta elegida
        return view("front.game.index", compact('question'));

//        $scenario = Question::getQuestion();
//        return view("front.game.index", [
//            "question" => $scenario["question"],
//            "answer" => $scenario["answer"],
//            "categoryImage" => $scenario["categoryImage"]
//        ]);
//
//     (session(playing)->status['errors'] < $totalLifes)
//        $scenario = Question::getQuestion();
//        return view("front.game.index", [
//            "question" => $scenario["question"],
//            "answer" => $scenario["answer"],
//            "categoryImage" => $scenario["categoryImage"]
//        ]);
//
//        return view("front.game.game-over");
    }
}
