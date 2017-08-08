<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Categoria</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style type="text/css">
        body {
            padding: 30px
        }
    </style>
</head>
<body>
<h1>Categoria</h1>
<h4>{{ $category->description }}</h4>
{{--{{ dd($answers) }}--}}
<ul>
    @foreach($questions as $question)
        <li><a href="/admin/pregunta/{{ $question->id }}">{{ $question->text }}</a></li>
    @endforeach
</ul>
<button class=""><a class="" href="#"> Editar </a></button>
<button class=""><a class="" href="/admin/categorias"> Atras </a></button>
</body>
</html>