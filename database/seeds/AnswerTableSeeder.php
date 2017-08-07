<?php

use Illuminate\Database\Seeder;

class AnswerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('answers')->insert([
        	//Respuestas Armas y Guerreros
        	[
	        	'text' => 'Espada',
	        	'correct' => 0,
	        	'question_id' => 1
	        ],
	        [
	        	'text' => 'Lanza',
	        	'correct' => 0,
	        	'question_id' => 1
	        ],
	        [
	        	'text' => 'Hacha',
	        	'correct' => 1,
	        	'question_id' => 1
	        ],
	        [
	        	'text' => 'Martillo',
	        	'correct' => 0,
	        	'question_id' => 1
	        ],
	        [
	        	'text' => 'Defender su territorio',
	        	'correct' => 0,
	        	'question_id' => 2
	        ],
	        [
	        	'text' => 'Recursos naturales',
	        	'correct' => 0,
	        	'question_id' => 2
	        ],
	        [
	        	'text' => 'Saquear recursos y riquezas',
	        	'correct' => 1,
	        	'question_id' => 2
	        ],
	        [
	        	'text' => 'Por simple placer',
	        	'correct' => 0,
	        	'question_id' => 2
	        ],
	        [
	        	'text' => 'Los bares',
	        	'correct' => 0,
	        	'question_id' => 3
	        ],
	        [
	        	'text' => 'Su tierra/región',
	        	'correct' => 0,
	        	'question_id' => 3
	        ],
	        [
	        	'text' => 'La funeraria',
	        	'correct' => 0,
	        	'question_id' => 3
	        ],
	        [
	        	'text' => 'El "paraíso en el cielo"',
	        	'correct' => 1,
	        	'question_id' => 3
	        ],
	        [
	        	'text' => 'Sólo el torso',
	        	'correct' => 0,
	        	'question_id' => 4
	        ],
	        [
	        	'text' => 'Sólo casco',
	        	'correct' => 0,
	        	'question_id' => 4
	        ],
	        [
	        	'text' => 'Sólo escudo',
	        	'correct' => 1,
	        	'question_id' => 4
	        ],
	        [
	        	'text' => 'No usaban más que su arma',
	        	'correct' => 0,
	        	'question_id' => 4
	        ],
	        [
	        	'text' => 'Sí, sólo aquellos con mayor poder económico',
	        	'correct' => 0,
	        	'question_id' => 5
	        ],
	        [
	        	'text' => 'No',
	        	'correct' => 1,
	        	'question_id' => 5
	        ],
	        [
	        	'text' => 'Sí, lo sacaban de los animales que cazaban',
	        	'correct' => 0,
	        	'question_id' => 5
	        ],
	        [
	        	'text' => 'Lo usaban los más pobres sólo para intimidar',
	        	'correct' => 0,
	        	'question_id' => 5
	        ],
	        [
	        	'text' => '¡Sí, pelea!',
	        	'correct' => 0,
	        	'question_id' => 6
	        ],
	        [
	        	'text' => 'No, si podían, aceptaban dinero u objetos',
	        	'correct' => 1,
	        	'question_id' => 6
	        ],
	        [
	        	'text' => 'Aceptaban que los inviten a comer',
	        	'correct' => 0,
	        	'question_id' => 6
	        ],
	        [
	        	'text' => 'AU! AU! AU!',
	        	'correct' => 0,
	        	'question_id' => 6
	        ],
	        [
	        	'text' => 'Olaf el Viejo',
	        	'correct' => 0,
	        	'question_id' => 7
	        ],
	        [
	        	'text' => 'Canuto el Grande',
	        	'correct' => 1,
	        	'question_id' => 7
	        ],
	        [
	        	'text' => 'Erik Hacha Sangrienta',
	        	'correct' => 0,
	        	'question_id' => 7
	        ],
	        [
	        	'text' => 'Los vikingos no conquistaron Inglaterra entera',
	        	'correct' => 0,
	        	'question_id' => 7
	        ],
	        [
	        	'text' => 'Valquiria',
	        	'correct' => 0,
	        	'question_id' => 8
	        ],
	        [
	        	'text' => 'Shugoki',
	        	'correct' => 0,
	        	'question_id' => 8
	        ],
	        [
	        	'text' => 'Defensoras de la paz',
	        	'correct' => 0,
	        	'question_id' => 8
	        ],
	        [
	        	'text' => 'Ninguno de los anteriores',
	        	'correct' => 1,
	        	'question_id' => 8
	        ],
	        [
	        	'text' => 'Aquellos quienes no iban a luchar',
	        	'correct' => 0,
	        	'question_id' => 9
	        ],
	        [
	        	'text' => 'Los campesinos',
	        	'correct' => 0,
	        	'question_id' => 9
	        ],
	        [
	        	'text' => 'Guerreros que luchaban semidesnudos',
	        	'correct' => 1,
	        	'question_id' => 9
	        ],
	        [
	        	'text' => 'Quienes se encargaban de fabricar los barcos',
	        	'correct' => 0,
	        	'question_id' => 9
	        ],
	        [
	        	'text' => 'Cotas de malla (pecheras)',
	        	'correct' => 0,
	        	'question_id' => 10
	        ],
	        [
	        	'text' => 'Yelmos de metal',
	        	'correct' => 1,
	        	'question_id' => 10
	        ],
	        [
	        	'text' => 'Espadas',
	        	'correct' => 0,
	        	'question_id' => 10
	        ],
	        [
	        	'text' => 'Escudos',
	        	'correct' => 0,
	        	'question_id' => 10
	        ],
	        [
	        	'text' => 'A una familia de nobles',
	        	'correct' => 0,
	        	'question_id' => 11
	        ],
	        [
	        	'text' => 'A un monasterio/iglesia',
	        	'correct' => 1,
	        	'question_id' => 11
	        ],
	        [
	        	'text' => 'Una granja cercana',
	        	'correct' => 0,
	        	'question_id' => 11
	        ],
	        [
	        	'text' => 'A un barco enemigo',
	        	'correct' => 0,
	        	'question_id' => 11
	        ],
	        [
	        	'text' => 'Sí, se unían todos los pueblos',
	        	'correct' => 0,
	        	'question_id' => 12
	        ],
	        [
	        	'text' => 'Nunca',
	        	'correct' => 0,
	        	'question_id' => 12
	        ],
	        [
	        	'text' => 'Por supuesto, para eso se entrenaban soldados',
	        	'correct' => 0,
	        	'question_id' => 12
	        ],
	        [
	        	'text' => 'Dependiendo de cuánto se les pagaba',
	        	'correct' => 1,
	        	'question_id' => 12
	        ],
	        [
	        	'text' => 'Por los colores de sus velas',
	        	'correct' => 1,
	        	'question_id' => 13
	        ],
	        [
	        	'text' => 'Por ir atrás de los demás',
	        	'correct' => 0,
	        	'question_id' => 13
	        ],
	        [
	        	'text' => 'Por tener los bordes metálicos',
	        	'correct' => 0,
	        	'question_id' => 13
	        ],
	        [
	        	'text' => 'No había distinción, todos los barcos eran iguales',
	        	'correct' => 0,
	        	'question_id' => 13
	        ],
	        [
	        	'text' => 'El enemigo de sus dioses',
	        	'correct' => 0,
	        	'question_id' => 14
	        ],
	        [
	        	'text' => 'La batalla del fin del mundo',
	        	'correct' => 1,
	        	'question_id' => 14
	        ],
	        [
	        	'text' => 'Al paso de los guerreros a la inmortalidad',
	        	'correct' => 0,
	        	'question_id' => 14
	        ],
	        [
	        	'text' => 'A los traidores',
	        	'correct' => 0,
	        	'question_id' => 14
	        ],
	        [
	        	'text' => 'Torrensfjord',
	        	'correct' => 0,
	        	'question_id' => 15
	        ],
	        [
	        	'text' => 'Hafrsfjord',
	        	'correct' => 1,
	        	'question_id' => 15
	        ],
	        [
	        	'text' => 'Leifensfjord',
	        	'correct' => 0,
	        	'question_id' => 15
	        ],
	        [
	        	'text' => 'Vikesfjord',
	        	'correct' => 0,
	        	'question_id' => 15
	        ],
	        //Respuestas Viajes y Conquistas
	        [
	        	'text' => 'Bruselas',
	        	'correct' => 0,
	        	'question_id' => 16
	        ],
	        [
	        	'text' => 'Amsterdam',
	        	'correct' => 0,
	        	'question_id' => 16
	        ],
	        [
	        	'text' => 'Northumbria',
	        	'correct' => 1,
	        	'question_id' => 16
	        ],
	        [
	        	'text' => 'Osnabruck',
	        	'correct' => 0,
	        	'question_id' => 16
	        ],
	        [
	        	'text' => 'Un tipo de barco',
	        	'correct' => 1,
	        	'question_id' => 17
	        ],
	        [
	        	'text' => 'Un animal',
	        	'correct' => 0,
	        	'question_id' => 17
	        ],
	        [
	        	'text' => 'El nombre de un vikingo importante',
	        	'correct' => 0,
	        	'question_id' => 17
	        ],
	        [
	        	'text' => 'Ninguno de los anteriores',
	        	'correct' => 0,
	        	'question_id' => 17
	        ],
	        [
	        	'text' => 'Asia',
	        	'correct' => 0,
	        	'question_id' => 18
	        ],
	        [
	        	'text' => 'Oceanía',
	        	'correct' => 0,
	        	'question_id' => 18
	        ],
	        [
	        	'text' => 'África',
	        	'correct' => 0,
	        	'question_id' => 18
	        ],
	        [
	        	'text' => 'América',
	        	'correct' => 1,
	        	'question_id' => 18
	        ],
	        [
	        	'text' => 'Persiguiendo enemigos',
	        	'correct' => 0,
	        	'question_id' => 19
	        ],
	        [
	        	'text' => 'Extraviado después de una tormenta',
	        	'correct' => 1,
	        	'question_id' => 19
	        ],
	        [
	        	'text' => 'Siguiendo una profecía',
	        	'correct' => 0,
	        	'question_id' => 19
	        ],
	        [
	        	'text' => 'Guiado por las visiones de Odín',
	        	'correct' => 0,
	        	'question_id' => 19
	        ],
	        [
	        	'text' => 'Leif Erikssen',
	        	'correct' => 1,
	        	'question_id' => 20
	        ],
	        [
	        	'text' => 'Ragnar Lothbrok',
	        	'correct' => 0,
	        	'question_id' => 20
	        ],
	        [
	        	'text' => 'Harald Bronfjold',
	        	'correct' => 0,
	        	'question_id' => 20
	        ],
	        [
	        	'text' => 'Altom Östri',
	        	'correct' => 0,
	        	'question_id' => 20
	        ],
	        [
	        	'text' => 'Transporte privado',
	        	'correct' => 1,
	        	'question_id' => 21
	        ],
	        [
	        	'text' => 'Transporte de esclavos',
	        	'correct' => 0,
	        	'question_id' => 21
	        ],
	        [
	        	'text' => 'Transporte de pieles',
	        	'correct' => 0,
	        	'question_id' => 21
	        ],
	        [
	        	'text' => 'Transporte de mujeres guerreras',
	        	'correct' => 0,
	        	'question_id' => 21
	        ],
	        [
	        	'text' => 'Con sistemas de poleas',
	        	'correct' => 0,
	        	'question_id' => 22
	        ],
	        [
	        	'text' => 'Levantándolos entre muchos',
	        	'correct' => 0,
	        	'question_id' => 22
	        ],
	        [
	        	'text' => 'Tirando agua en la tierra para que patinen',
	        	'correct' => 0,
	        	'question_id' => 22
	        ],
	        [
	        	'text' => 'Poniéndolos sobre troncos que hacían rodar',
	        	'correct' => 1,
	        	'question_id' => 22
	        ],
	        [
	        	'text' => 'Cada uno en su cuarto',
	        	'correct' => 0,
	        	'question_id' => 23
	        ],
	        [
	        	'text' => 'Sobre la cubierta',
	        	'correct' => 1,
	        	'question_id' => 23
	        ],
	        [
	        	'text' => 'En hamacas colgando de los mástiles',
	        	'correct' => 0,
	        	'question_id' => 23
	        ],
	        [
	        	'text' => 'En la bodega',
	        	'correct' => 0,
	        	'question_id' => 23
	        ],
	        [
	        	'text' => 'Harald I',
	        	'correct' => 0,
	        	'question_id' => 24
	        ],
	        [
	        	'text' => 'Bjorn I',
	        	'correct' => 0,
	        	'question_id' => 24
	        ],
	        [
	        	'text' => 'Olaf I',
	        	'correct' => 0,
	        	'question_id' => 24
	        ],
	        [
	        	'text' => 'Asmund I',
	        	'correct' => 0,
	        	'question_id' => 24
	        ],
	        [
	        	'text' => 'Por su posicionamiento estratégico',
	        	'correct' => 0,
	        	'question_id' => 25
	        ],
	        [
	        	'text' => 'Por los animales de la zona, y el valor de sus pieles',
	        	'correct' => 0,
	        	'question_id' => 25
	        ],
	        [
	        	'text' => 'Por sus tierras verdes',
	        	'correct' => 1,
	        	'question_id' => 25
	        ],
	        [
	        	'text' => 'Por castigo, mandaba allá a los traidores',
	        	'correct' => 0,
	        	'question_id' => 25
	        ],
	        [
	        	'text' => 'Gorm el Viejo',
	        	'correct' => 1,
	        	'question_id' => 26
	        ],
	        [
	        	'text' => 'Dagfinn el Sabio',
	        	'correct' => 0,
	        	'question_id' => 26
	        ],
	        [
	        	'text' => 'Erlend el Extraño',
	        	'correct' => 0,
	        	'question_id' => 26
	        ],
	        [
	        	'text' => 'Torsten el Duro',
	        	'correct' => 0,
	        	'question_id' => 26
	        ],
	        [
	        	'text' => 'El caballo',
	        	'correct' => 0,
	        	'question_id' => 27
	        ],
	        [
	        	'text' => 'El barco',
	        	'correct' => 1,
	        	'question_id' => 27
	        ],
	        [
	        	'text' => 'El oso',
	        	'correct' => 0,
	        	'question_id' => 27
	        ],
	        [
	        	'text' => 'Ninguno, iban a pie',
	        	'correct' => 0,
	        	'question_id' => 27
	        ],
	        [
	        	'text' => 'Torvald',
	        	'correct' => 0,
	        	'question_id' => 28
	        ],
	        [
	        	'text' => 'Uffe',
	        	'correct' => 0,
	        	'question_id' => 28
	        ],
	        [
	        	'text' => 'Hrolf',
	        	'correct' => 1,
	        	'question_id' => 28
	        ],
	        [
	        	'text' => 'Vali',
	        	'correct' => 0,
	        	'question_id' => 28
	        ],
	        [
	        	'text' => '982 D.C.',
	        	'correct' => 1,
	        	'question_id' => 29
	        ],
	        [
	        	'text' => '940 D.C.',
	        	'correct' => 0,
	        	'question_id' => 29
	        ],
	        [
	        	'text' => '840 D.C.',
	        	'correct' => 0,
	        	'question_id' => 29
	        ],
	        [
	        	'text' => '892 D.C.',
	        	'correct' => 0,
	        	'question_id' => 29
	        ],
	        [
	        	'text' => '759 D.C.',
	        	'correct' => 0,
	        	'question_id' => 30
	        ],
	        [
	        	'text' => '795 D.C.',
	        	'correct' => 1,
	        	'question_id' => 30
	        ],
	        [
	        	'text' => '975 D.C.',
	        	'correct' => 0,
	        	'question_id' => 30
	        ],
	        [
	        	'text' => '957 D.C.',
	        	'correct' => 0,
	        	'question_id' => 30
	        ],
	        //Preguntas de Cultura y Costumbres
	        [
	        	'text' => 'Vidrr',
	        	'correct' => 0,
	        	'question_id' => 31
	        ],
	        [
	        	'text' => 'Yggdrasil',
	        	'correct' => 1,
	        	'question_id' => 31
	        ],
	        [
	        	'text' => 'Midgard',
	        	'correct' => 0,
	        	'question_id' => 31
	        ],
	        [
	        	'text' => 'Ninguno de los anteriores',
	        	'correct' => 0,
	        	'question_id' => 31
	        ],
	        [
	        	'text' => 'No, sólo creían en ellos mismos',
	        	'correct' => 0,
	        	'question_id' => 32
	        ],
	        [
	        	'text' => 'Sí, su dios principal era Odin',
	        	'correct' => 1,
	        	'question_id' => 32
	        ],
	        [
	        	'text' => 'Sí, eran Cristianos',
	        	'correct' => 0,
	        	'question_id' => 32
	        ],
	        [
	        	'text' => 'Sí, su dios principal era Kratos',
	        	'correct' => 0,
	        	'question_id' => 32
	        ],
	        [
	        	'text' => 'Loki',
	        	'correct' => 0,
	        	'question_id' => 33
	        ],
	        [
	        	'text' => 'Freyr',
	        	'correct' => 0,
	        	'question_id' => 33
	        ],
	        [
	        	'text' => 'Gwyn',
	        	'correct' => 1,
	        	'question_id' => 33
	        ],
	        [
	        	'text' => 'Skirnir',
	        	'correct' => 0,
	        	'question_id' => 33
	        ],
	        [
	        	'text' => '"Proveniente de"',
	        	'correct' => 0,
	        	'question_id' => 34
	        ],
	        [
	        	'text' => '"Hijo de"',
	        	'correct' => 0,
	        	'question_id' => 34
	        ],
	        [
	        	'text' => 'Ambas respuestas anteriores',
	        	'correct' => 1,
	        	'question_id' => 34
	        ],
	        [
	        	'text' => 'Ninguna de las anteriores',
	        	'correct' => 0,
	        	'question_id' => 34
	        ],
	        [
	        	'text' => 'Cremación',
	        	'correct' => 0,
	        	'question_id' => 35
	        ],
	        [
	        	'text' => 'Entierro',
	        	'correct' => 0,
	        	'question_id' => 35
	        ],
	        [
	        	'text' => 'Ambas respuestas anteriores',
	        	'correct' => 1,
	        	'question_id' => 35
	        ],
	        [
	        	'text' => 'Ninguna de las anteriores',
	        	'correct' => 0,
	        	'question_id' => 35
	        ],
	        [
	        	'text' => 'Un rey vikingo',
	        	'correct' => 0,
	        	'question_id' => 36
	        ],
	        [
	        	'text' => 'El dios del trueno',
	        	'correct' => 1,
	        	'question_id' => 36
	        ],
	        [
	        	'text' => 'Un Avenger',
	        	'correct' => 0,
	        	'question_id' => 36
	        ],
	        [
	        	'text' => 'Ninguna de las anteriores',
	        	'correct' => 0,
	        	'question_id' => 36
	        ],
	        [
	        	'text' => 'El dios del amor',
	        	'correct' => 0,
	        	'question_id' => 37
	        ],
	        [
	        	'text' => 'El padre de Floki, el carpintero',
	        	'correct' => 0,
	        	'question_id' => 37
	        ],
	        [
	        	'text' => 'Un héroe vikingo',
	        	'correct' => 0,
	        	'question_id' => 37
	        ],
	        [
	        	'text' => 'Ninguna de las anteriores',
	        	'correct' => 1,
	        	'question_id' => 37
	        ],
	        [
	        	'text' => 'Su hijo mayor',
	        	'correct' => 0,
	        	'question_id' => 38
	        ],
	        [
	        	'text' => 'Su esposa',
	        	'correct' => 1,
	        	'question_id' => 38
	        ],
	        [
	        	'text' => 'Su esclavo',
	        	'correct' => 0,
	        	'question_id' => 38
	        ],
	        [
	        	'text' => 'Nadie',
	        	'correct' => 0,
	        	'question_id' => 38
	        ],
	        [
	        	'text' => 'Noruega',
	        	'correct' => 0,
	        	'question_id' => 39
	        ],
	        [
	        	'text' => 'Suecia',
	        	'correct' => 0,
	        	'question_id' => 39
	        ],
	        [
	        	'text' => 'Dinamarca',
	        	'correct' => 0,
	        	'question_id' => 39
	        ],
	        [
	        	'text' => 'Todas las anteriores',
	        	'correct' => 1,
	        	'question_id' => 39
	        ],
	        [
	        	'text' => 'Barro',
	        	'correct' => 0,
	        	'question_id' => 40
	        ],
	        [
	        	'text' => 'Madera',
	        	'correct' => 1,
	        	'question_id' => 40
	        ],
	        [
	        	'text' => 'Huesos',
	        	'correct' => 0,
	        	'question_id' => 40
	        ],
	        [
	        	'text' => 'Cemento',
	        	'correct' => 0,
	        	'question_id' => 40
	        ],
	        [
	        	'text' => 'Era un grito de guerra',
	        	'correct' => 0,
	        	'question_id' => 41
	        ],
	        [
	        	'text' => 'La palabra que usaban para brindar',
	        	'correct' => 0,
	        	'question_id' => 41
	        ],
	        [
	        	'text' => 'Como le decían a los poetas',
	        	'correct' => 1,
	        	'question_id' => 41
	        ],
	        [
	        	'text' => 'Un animal cuya piel era muy valiosa',
	        	'correct' => 0,
	        	'question_id' => 41
	        ],
	        [
	        	'text' => 'El vikingo que abandonaba la aldea',
	        	'correct' => 0,
	        	'question_id' => 42
	        ],
	        [
	        	'text' => 'El mayor barco vikingo',
	        	'correct' => 0,
	        	'question_id' => 42
	        ],
	        [
	        	'text' => 'Un dios vikingo',
	        	'correct' => 0,
	        	'question_id' => 42
	        ],
	        [
	        	'text' => 'El abecedario vikingo',
	        	'correct' => 1,
	        	'question_id' => 42
	        ],
	        [
	        	'text' => 'Una comida típica',
	        	'correct' => 0,
	        	'question_id' => 43
	        ],
	        [
	        	'text' => 'Un juego de mesa',
	        	'correct' => 1,
	        	'question_id' => 43
	        ],
	        [
	        	'text' => 'Una oración',
	        	'correct' => 0,
	        	'question_id' => 43
	        ],
	        [
	        	'text' => 'Una runa',
	        	'correct' => 0,
	        	'question_id' => 43
	        ],
	        [
	        	'text' => 'Un martillo dado vuelta',
	        	'correct' => 1,
	        	'question_id' => 44
	        ],
	        [
	        	'text' => 'Una herradura',
	        	'correct' => 0,
	        	'question_id' => 44
	        ],
	        [
	        	'text' => 'Dos hachas cruzados',
	        	'correct' => 0,
	        	'question_id' => 44
	        ],
	        [
	        	'text' => 'Un barco',
	        	'correct' => 0,
	        	'question_id' => 44
	        ],
	        [
	        	'text' => 'El tigre',
	        	'correct' => 0,
	        	'question_id' => 45
	        ],
	        [
	        	'text' => 'El halcón',
	        	'correct' => 0,
	        	'question_id' => 45
	        ],
	        [
	        	'text' => 'El oso',
	        	'correct' => 1,
	        	'question_id' => 45
	        ],
	        [
	        	'text' => 'La víbora',
	        	'correct' => 0,
	        	'question_id' => 45
	        ]
        ]);
    }
}
