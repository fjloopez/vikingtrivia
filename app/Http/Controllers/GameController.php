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
        if ( !session()->has("playing") ) {
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
        if (!$question){
            session(["preguntasPrevias" => []]);
            return view ("front.main.index");
        }



        //Guardo el id de la pregunta en la variable de session 'preguntasPrevias' para no repetirla en el futuro
        session()->push('preguntasPrevias', $question->id);

        //Traigo las respuestas
        $answers = Answer::where('question_id', $question->id)->get();

        //Traigo la imagen de la categoria correspondiente
        $category = Category::where('id', $question->category_id)->get()->toArray();

        //Devuelvo la vista con la pregunta elegida
        return view("front.game.index", ["question" => $question, "answers" => $answers, "category" => $category]);
    }

    public function guess()
    {
        //Recupero el estado actual de la partida desde session
        $status = session('playing');

        //En función de lo que el usuario elegió, traigo la respuesta
        $answer = Answer::find(request('answer'));

        //Si la respuesta es correcta
        if ($answer->correct) {
            //Agrego un "punto" en las respuestas correctas del estado de juego actual
            $status['corrects']++;
            //Preparo el response para el ajax indicando que la pregunta fue bien contestada
            $response = ['success' => true, 'gameover' => false];
        } else { //Si la respuesta es incorrecta
            //Sumo un error al estado de juego actual
            $status['errors']++;
            //Preparo el response para el ajax indicando el error y además verificó si ya perdió todas sus vidas
            $response = [
                'success' => false,
                'gameover' => ($status['errors'] > $this->totalLifes)
            ];
        }

        //Guardo los resultados nuevamente en la session
        session([
            'playing' => [
                'errors' => $status['errors'],
                'corrects' => $status['corrects'],
            ]
        ]);

        //Devuelvo la respuesta, será el js, en función de lo que recibe como respuesta, el encargado de mostrar al usuario alguna de las siguientes posibilidades: 1 - La respuesta fue correcta, 2 - La respuesta fue incorrecta - 2a: Tenés N vidas para seguir jugando - 2b: gameover
        return $response;
    }
}
