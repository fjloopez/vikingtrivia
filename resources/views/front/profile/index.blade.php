@extends('front.app')

@section('title', "Perfil")


@section('content')
	<div class="container_register"> <!-- abre container register -->

		<h1 class="profile">Perfil</h1>

		<form action="controllers/register.controller.php" method="post">

			<label for="username"> Nombre de Usuario </label>
			<br>
			<input type="text" name="username" placeholder="Usuario" value="<?php echo $usernameValue; ?>" required id="username">
			<br>
			<label for="password"> Creá tu Contraseña </label>
			<br>
			<input type="password" name="password" placeholder="Contraseña" required id="password">
			<br>

			<label for="checkpassword"> Confirmá Contraseña </label>
			<br>

			<input type="password" name="checkpassword" placeholder="Confirmar Contraseña" required id="checkpassword">
			<br>

			<div class="containerAvatar">
				<label for="avatar">Avatar</label>
				<input type="file" name="avatar">
			</div>

			<button class="buttonRegistro" align="center" type="submit">Guardar</button>
			<button class="buttonRegistro" type="reset">Borrar</button>

		</form>

	</div><!-- cierra container register -->




	<div class="container_img_login"> <!-- abre container imagen -->
		<article>
			<section>
				<img class="img_character" src="..\img\Personajes.png" alt="Main character">
			</section>
		</article>
	</div><!-- cierra container imagen -->
@endsection
