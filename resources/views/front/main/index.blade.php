@extends('front.app')

@section('title', "VikingTrivia")


@section('content')
    <div class="container_play"> <!-- abre container play -->

        <div class="container_img_main"> <!-- abre container imagen -->
            <img class="img_character" src="{{asset("/images/Personajes.png")}}" alt="Main character">

            <div class="container_play_button"> <!-- abre container del boton jugar -->
                <button type="button" class="play_button" > <a href="/vikingtrivia/play" class="play_button_link">Play!</a></button>
            </div> <!-- cierra container del boton jugar -->

        </div> <!-- cierra container imagen -->

    </div><!-- cierra container play -->


    @include("front.partials.slider")

@endsection