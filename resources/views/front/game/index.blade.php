@extends('front.app')

@section('title', "Jugar")


@section('content')
	<div class="container_register">
		<div class="question"><h2>{{ $question->text }}</h2></div>

		<div class="question_container">
			<ul>
				@foreach($answers as $answer)
					<li class="play_li"><button><a id="{{ $answer->id }}" class="play_a_laravel" href="">{{ $answer->text }}</a></button></li>
				@endforeach
			</ul>
		</div>
	</div>
@endsection

@section('script')
	<script type="text/javascript" src="/js/game.js"></script>
@endsection