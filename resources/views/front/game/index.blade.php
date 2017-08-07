@extends('front.app')

@section('title','/vikingtrivia/juego')

@section('content')
	<div class="categoryImage">$categoryImage</div>

	<div class="question">$question</div>

	<div class="question_container">
		<div class="answers"><a href="front.game.result"></a>$answer1</div>
		<div class="answers"><a href="front.game.result"></a>$answer2</div>
		<div class="answers"><a href="front.game.result"></a>$answer3</div>
		<div class="answers"><a href="front.game.result"></a>$answer4</div>
	<div>
@endsection