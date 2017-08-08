@extends('front.app')

@section('title', "FAQ")


@section('content')
	<div class="container_faq"> <!-- abre container faq -->

	<a href="#container_answer_one">
		<h3 class="question_one">¿Qué es Viking Trivia?</h3>
	</a>

	<div class="container_answer_one" id="container_answer_one"> <!-- Abre Respuesta uno -->
		<p class="answer_one">
			Viking Trivia es un juego de preguntas y respuestas, un clásico juego de trivia, donde vas a poder llegar a un puntaje en base a tu conocimiento sobre la vida y logros de los vikingos.
		</p>
	</div> <!-- Cierra Respuesta uno -->


	<a href="#container_answer_two">
		<h3 class="question_two">¿Cómo se juega?</h3>
	</a>

	<div class="container_answer_two" id="container_answer_two"> <!-- Abre Respuesta dos -->
		<p class="answer_two">
			Al apretar el botón de "Jugar" se inicia una serie de preguntas, cada una va a tener 4 opciones dentro de las cuales sólo una va a ser la correcta. Éstas respuestas se pueden elegir con los botones que aparecen al fondo de la pantalla, al estilo "multiple choice", y la idea es llegar a la mayor cantidad de aciertos posible.
		</p>
	</div> <!-- Cierra Respuesta dos -->

	<a href="#container_answer_three">
		<h3 class="question_three">¿Puedo jugar con amigos?</h3>
	</a>

	<div class="container_answer_three" id="container_answer_three"> <!-- Abre Respuesta tres -->
		<p class="answer_three">
			Sí, a medida que se van adquiriendo puntos con las respuestas acertadas, se van sumando a un puntaje de la cuenta (si la cuenta está logueada) para poder competir con tus amigos. Tratá de ver quién puede llegar al puntaje más alto.
		</p>
	</div> <!-- Cierra Respuesta tres -->

	<a href="#container_answer_four">
		<h3 class="question_four">¿Hay más de un tema?</h3>
	</a>

	 <div class="container_answer_four" id="container_answer_four"> <!-- Abre Respuesta cuatro -->
		<p class="answer_four">
			Sí, el juego se divide en tres categorías: "Armas y Guerreros", "Viajes y Conquistas", y "Cultura y Costumbres".
		</p>
	</div> <!-- Cierra Respuesta cuatro -->

	<a href="#container_answer_five">
		<h3 class="question_four">¿Necesito bajarme algún archivo para jugar?</h3>
	</a>

	 <div class="container_answer_five" id="container_answer_five"> <!-- Abre Respuesta cinco -->
		<p class="answer_four">
			No, el juego es 100% online. No hace falta bajar ningún archivo ya que se juega desde el navegador.
		</p>
	</div> <!-- Cierra Respuesta cinco -->

	</div><!-- cierra container faq -->
@endsection