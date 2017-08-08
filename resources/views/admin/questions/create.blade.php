<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Crear Administrador</title>
</head>
<body>
	@if(count($errors))
			<div class="alert alert-danger">
				@foreach($errors->all() as $error)
					<p>{{ $error }}</p>
				@endforeach
			</div>
	@endif
	<h1>Crear pregunta y sus respuestas</h1>
    <div>
    <form action="/admin/preguntas/guardar" method="post" enctype="multipart/form-data">
    	{{ csrf_field() }}
    	<label for="pregunta">Pregunta</label>
		<input type="text" name="question" placeholder= "Pregunta" value="" required id="pregunta">
		<select name="category_id">
			@foreach($categories as $category)
				<option value="{{ $category->id }}">{{ $category->description }}</option>
			@endforeach
		</select>
		<br>
		<label for="respuesta">Respuestas</label>
		<input type="text" name="answer0" placeholder="Respuesta1" value="" required>
		<input type="radio" name="correct" value="0">
		<input type="text" name="answer1" placeholder="Respuesta2" value="" required>
		<input type="radio" name="correct" value="1">
		<input type="text" name="answer2" placeholder="Respuesta3" value="" required>
		<input type="radio" name="correct" value="2">
		<input type="text" name="answer3" placeholder="Respuesta4" value="" required>
		<input type="radio" name="correct" value="3">
		<br>
		<button id="submit" class="buttonRegistro" align="center" type="submit">Enviar</button>
		<button class="buttonRegistro" type="reset">Borrar</button>
				
    </form>
    	
    </div>

</body>
</html>