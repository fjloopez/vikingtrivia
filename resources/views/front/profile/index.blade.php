@extends('front.app')

@section('title', "Perfil")


@section('content')
	<div class="container_register"> <!-- abre container register -->

		<h1 class="profile">Perfil</h1>
		<ul>
			<li>{{ Auth::user()->name }}</li>
			<li>{{ Auth::user()->surname }}</li>
			<li>{{ Auth::user()->username }}</li>
			<li>{{ Auth::user()->email }}</li>
			<li>{{ Auth::user()->birth_date }}</li>
			<li>{{ Auth::user()->gender }}</li>
		</ul>


		<div class="row">
			<button class="profile_button" type="button"> <a href="" class="play_button_link2">Editar</a></button>
		</div>


	</div><!-- cierra container register -->

	

	
@endsection
