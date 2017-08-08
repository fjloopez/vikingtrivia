@extends('front.app')

@section('title', "Mis Preguntas")

@section('content')
    <div class="container_register"> <!-- abre container register -->

        <h1 class="profile">Mis preguntas</h1>
        <ul>
            @foreach($questions as $question)
                <li>{{ $question->text }}</li>
            @endforeach
        </ul>

        <div class="row">
            <button class="buttonRegistro" type="button"> <a href="/vikingtrivia/addQuestion/{{ Auth::user()->id }}" class="play_button_link2">Crear preguntas y sus respuestas</a></button>
        </div>
    </div><!-- cierra container register -->


@endsection