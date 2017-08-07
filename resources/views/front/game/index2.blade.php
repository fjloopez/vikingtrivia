@extends('front.app')

@section('title','/vikingtrivia/juego')

@section('content')
	<div class="categoryImage">$categoryImage</div>

	<div class="question_container">$question</div>

	<div class="answers_container">
		<div class="answers">$answer1</div>
		<div class="answers">$answer2</div>
		<div class="answers">$answer3</div>
		<div class="answers">$answer4</div>
	<div>
@endsection