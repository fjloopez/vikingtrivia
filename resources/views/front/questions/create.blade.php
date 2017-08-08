@extends('front.app')

@section('title', "Agregar pregunta")

@section('content')
    <div class="container_register">
        @if(count($errors))
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
        <h1>Crear preguntas y sus respuestas</h1>
        <div>
            <form action="/vikingtrivia/pregunta/guardar" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <label for="pregunta">Pregunta</label>
                <br>
                <input type="text" name="question" placeholder= "Pregunta" value="" required id="pregunta">
                <p>Categoría</p>
                <select name="category_id">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->description }}</option>
                    @endforeach
                </select>
                <br>
                <label for="respuesta">Respuestas (marcar la correcta)</label>
                <br>
                <input type="text" name="answer0" placeholder="Respuesta1" value="" required>
                <input type="radio" name="correct" value="0">
                <input type="text" name="answer1" placeholder="Respuesta2" value="" required>
                <input type="radio" name="correct" value="1">
                <input type="text" name="answer2" placeholder="Respuesta3" value="" required>
                <input type="radio" name="correct" value="2">
                <input type="text" name="answer3" placeholder="Respuesta4" value="" required>
                <input type="radio" name="correct" value="3">
                <br>
                <br>
                <button id="submit" class="buttonRegistro" align="center" type="submit">Enviar</button>
                <button class="buttonRegistro" type="reset">Borrar</button>

            </form>

        </div>
    </div>
@endsection