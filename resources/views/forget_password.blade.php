<div class="container_forget_psw"> <!-- abre container olvide forget_psw -->

<?php if (isset($_SESSION['errors_forget_password'])): ?>	<!-- abre el chequeo de errores -->	
	<div class="alert">
		<p><?php echo $_SESSION['errors_forget_password']; ?></p>
	</div>
<?php endif; ?>		<!-- cierra el chequeo de errores -->

	<form class="form_forget_psw" action="controllers/forget_password.controller.php" method="post" enctype="multipart/form-data">
	  	<div class="container_form">
		    <label for="nameuser">Usuario</label><br>
		    <input type="text" placeholder="Nombre de usuario" name="username" required id="username">
	    	<button class="buttonSendMail" type="submit">Enviar</button><br>
	 	</div>
	</form>

  
	</div><!-- cierra container forget_psw -->