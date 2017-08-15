<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Editar Pregunta y sus respuestas</title>
</head>
<body>
    @if(count($errors))
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif
    <div>
        <h1>Editar Pregunta y respuestas</h1>
        <form action="/admin/preguntas/actualizar" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
        <label for="pregunta">Pregunta</label>
        <input type="text" name="question" placeholder= "Pregunta" value="{{ $question->text }}" required id="pregunta">
        <select name="category_id">
            @foreach($categories as $category)
                <option value="{{ $category->id }}" @if($category->id === $question->category_id){{ "selected" }}@endif>{{ $category->description }}</option>
            @endforeach
        </select>
        <br>
        <label for="respuesta">Respuestas</label>
        @for($i=0, $l=count($answers); $i<$l; $i++)
            <input type="text" name="answer.{{ $i }}" value="{{ $answers[$i]->text }}" required>
            <input type="radio" name="correct" value="{{$i}}" @if($answers[$i]->correct === 1) {{ "checked" }} @endif>
        @endfor
        {{--<input type="text" name="answer1" value="{{ $answers["1"]->text }}" required>--}}
        {{--<input type="radio" name="correct" value="0">--}}
        {{--<input type="text" name="answer2" value="{{ $answers["2"]->text }}" required>--}}
        {{--<input type="radio" name="correct" value="0">--}}
        {{--<input type="text" name="answer3" value="{{ $answers["3"]->text }}" required>--}}
        @php
            session(["questionId" => $question->id]);
        @endphp
        <br>
        <button id="submit" class="buttonRegistro" align="center" type="submit">Aceptar</button>
    </form>
    <button class="buttonRegistro"><a href="/admin/pregunta/{{$question->id}}">Cancelar</a></button>

</div>

</body>
</html>