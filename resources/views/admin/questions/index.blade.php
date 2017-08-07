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
    @foreach($questions as $question)
        <tr>
            <td>{{ $question->description}}</td>
            <td><a href="/admin/questions/{{$question->id}}/edit">Editar</a></td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>