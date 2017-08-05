<header>
	<nav class="nav_menu">
		<!-- mm = menu mobile -->
		<div class="container_mm">
			<a href="main.php"><img class="img_logo_mm" src="/images/logoV.png" alt="Logo del juego"></a>
		</div>

		<!-- marca del usuario -->
		@if(false)
			<div class="container_user">
				<a href="#"><img class="user_img" src="{{ asset("/images/avatars/defaultAvatar.png") }}" alt="Avatar del usuario"></a> <!-- profile.php -->
					<div class="showUsername">
						<label><h4 class="usernameText">USUARIO</h4></label>
					</div>
			</div>
		@endif

		<!-- mh = menu hamburguesa -->
		<div class="container_desplegable">

			@include("front.menu.hamburger-menu")
			@if(false)
				@include("front.menu.menu-log-user")
			@else
				@include("front.menu.menu-guest")
			@endif

		</div>
	</nav>

    <script type="text/javascript" src="/js/countUsers.js"></script>
</header>

