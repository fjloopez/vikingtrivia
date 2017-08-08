@extends('front.app')

@section('title', "Jugar")


@section('content')
	<div>
		<div class="question"><h2>{{ $question->text }}</h2></div>

		<div class="question_container">
			<ul>
				@foreach($answers as $answer)
					<li><button><a href="front.game.result">{{ $answer->text }}</a></button></li>
				@endforeach
			</ul>
		<div>
	</div>
@endsection