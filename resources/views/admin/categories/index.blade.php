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
<h1>Preguntas</h1>
<table class="table table-bordered table-striped">
    <thead>
    <tr>
        <th>Preguntas</th>
    </tr>
    </thead>
    <tbody>
    @foreach($categories as $category)
        <tr>
            <td><a href="/admin/pregunta/{{$category->id}}">{{ $category->description}}</a></td>
        </tr>
    @endforeach
    </tbody>
</table>
<button class="btn btn-primary"><a href="/admin/preguntas/crear">Crear pregunta y sus respuestas</a></button>
</body>
</html>