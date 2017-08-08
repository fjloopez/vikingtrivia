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
            <button class="profile_button" type="button"> <a href="/vikingtrivia/addQuestion/{{ Auth::user()->id }}" class="play_button_link2">Crear pregunta y sus respuestas</a></button>
        </div>
    </div><!-- cierra container register -->

    <div class="container_img_login"> <!-- abre container imagen -->
        <article>
            <section>
                <img class="img_character" src="/images/Personajes.png" alt="Main character">
            </section>
        </article>
    </div><!-- cierra container imagen -->

@endsection