<header>
	<nav class="nav_menu">
		<!-- mm = menu mobile -->
		<div class="container_mm">
			<a href="/vikingtrivia"><img class="img_logo_mm" src="/images/logoV.png" alt="Logo del juego"></a>
		</div>

		<!-- marca del usuario -->
		@if(!Auth::guest())
			<div class="container_user">
				<a href="#"><img class="user_img" src="{{ asset('/images/avatars/defaultAvatar.png') }}" alt="Avatar del usuario"></a> <!-- profile.php -->
					<div class="showUsername">
						<label><h4 class="usernameText">{{ Auth::user()->username }}</h4></label>
					</div>
			</div>
		@endif

		<!-- mh = menu hamburguesa -->
		<div class="container_desplegable">

			@include("front.menu.hamburger-menu")
			@if(Auth::guest())
				@include("front.menu.menu-guest")
			@else
				@include("front.menu.menu-log-user")
			@endif

		</div>
	</nav>

    <script type="text/javascript" src="/js/countUsers.js"></script>
</header>

