<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Películas</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style type="text/css">
        body {
            padding: 30px
        }
    </style>
</head>
<body>
    <h1>Pregunta</h1>
    <h4>{{ $question->text }}</h4>
    {{--{{ dd($answers) }}--}}
    <ul>
        @foreach($answers as $answer)
            <li>{{ $answer->text }}</li>
        @endforeach
    </ul>
    <button class=""><a class="" href="/admin/pregunta/editar/{{ $question->id }}"> Editar </a></button>
</body>
</html>