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
    <form action="" method="post" enctype="multipart/form-data">
    	{{ csrf_field() }}
    	<label for="pregunta">Pregunta</label>
		<input type="text" name="question" placeholder= "Pregunta" value="" required id="pregunta">
		<br>
		<label for="respuesta">Respuestas</label>
		<input type="text" name="answer" placeholder="Respuesta1" value="" required>
		<input type="text" name="answer" placeholder="Respuesta2" value="" required>
		<input type="text" name="answer" placeholder="Respuesta3" value="" required>
		<input type="text" name="answer" placeholder="Respuesta4" value="" required>
		
		<button id="submit" class="buttonRegistro" align="center" type="submit">Enviar</button>
		<button class="buttonRegistro" type="reset">Borrar</button>
				
    </form>
    	
    </div>

</body>
</html>