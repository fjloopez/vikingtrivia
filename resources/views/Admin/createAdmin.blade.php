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
    <div>
    <form action="" method="post" enctype="multipart/form-data">
    	{{ csrf_field() }}
    	<label for="nombreyapellido">Nombre y Apellido</label>
		<br>
		<input type="text" name="name" placeholder= "Nombre" value="" required id="nombreyapellido">
		<br>
		<input type="text" name="surname" placeholder="Apellido" value="" required>

		<label for="username"> Nombre de Usuario </label>
		<br>
		<input type="text" name="username" placeholder="Usuario" value="" required id="username">

		<label for="mail">Correo Electrónico </label>
		<br>
		<input type="email" name="email" placeholder="Correo Electrónico" value="" required id="mail">

		<label for="password"> Creá tu Contraseña </label>
		<br>
		<input type="password" name="password" placeholder="Contraseña" required id="password">

		<label for="checkpassword"> Confirmá Contraseña </label>
		<br>
		<input type="password" name="checkpassword" placeholder="Confirmar Contraseña" required id="checkpassword">

		<label for="birth_date">Fecha de Nacimiento </label>
		<br>
		<input type="date" name="birth_date" value="" required>

		<label> Género</label>
		<br>

		<label><input type="radio" name="gender" value="male"> Hombre</label><br>
		<label><input type="radio" name="gender" value="female"> Mujer</label><br>
		<label><input type="radio" name="gender" value="other"> Prefiero no decirlo</label><br>

		<button id="submit" class="buttonRegistro" align="center" type="submit">Enviar</button>
		<button class="buttonRegistro" type="reset">Borrar</button>
				
    </form>
    	
    </div>

</body>
</html>