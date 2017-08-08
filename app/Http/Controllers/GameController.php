<?php

namespace App\Http\Controllers;

use App\Category;
use App\Question;
use App\Answer;

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
        if (!$question) return view ("/vikingtrivia");


        //Guardo el id de la pregunta en la variable de session 'preguntasPrevias' para no repetirla en el futuro
        session()->push('preguntasPrevias', $question->id);

        //Traigo las respuestas
        $answers = Answer::getAnswers($question->id);

        //Traigo la imagen de la categoria correspondiente
        $categoryImg = Category::getCategoryImage($question->category_id);


        //Devuelvo la vista con la pregunta elegida
        return view("front.game.index", ["question" => $question, "answers" => $answers, "categoryImg" => $categoryImg]);

    }
}
