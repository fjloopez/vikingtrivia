<?php

use Illuminate\Database\Seeder;

class QuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('questions')->insert([
         	//preguntas de Armas y Guerreros
        	[
	        	'text' => 'Los vikingos, en combate portaban armas según su economía pero... ¿Qué arma tenían en común todos los guerreros?',
	        	'category_id' => 1
	        ],
	        [
	        	'text' => '¿Por qué solían luchar?',
	        	'category_id' => 1
        	], 
        	[
	        	'text' => '¿Cuál es el sitio conocido como "Valhalla"?',
	        	'category_id' => 1
	        ],
	        [
	        	'text' => '¿Los guerreros con menor poder económico usaban equipo de defensa?',
	        	'category_id' => 1
	        ],
	        [
	        	'text' => '¿Es cierto que los guerreros usaban cascos con cuernos?',
	        	'category_id' => 1
	        ],
	        [
	        	'text' => '¿Siempre buscaban el enfrentamiento?',
	        	'category_id' => 1
	        ],
	        [
	        	'text' => '¿Quién fue el primer rey vikingo en reinar en toda Inglaterra?',
	        	'category_id' => 1
	        ],
	        [
	        	'text' => '¿Qué nombre recibían las mujeres guerreras?',
	        	'category_id' => 1
	        ],
	        [
	        	'text' => '¿Qué eran los berserker?',
	        	'category_id' => 1
	        ],
	        [
	        	'text' => '¿Qué elemento era el más caro de fabricar?',
	        	'category_id' => 1
	        ],
	        [
	        	'text' => '¿Dónde fue el primer ataque vikingo?',
	        	'category_id' => 1
	        ],
	        [
	        	'text' => '¿En las expediciones, eran numerosos los grupos de guerreros?',
	        	'category_id' => 1
	        ],
	        [
	        	'text' => '¿Cómo se distinguía el barco del rey en una guerra?',
	        	'category_id' => 1
	        ],
	        [
	        	'text' => '¿A qué se llamaba "Ragnarok"?',
	        	'category_id' => 1
	        ],
	        [
	        	'text' => '¿Cómo se llamó la última batalla que unificó Noruega?',
	        	'category_id' => 1
	        ], 
	        //preguntas de Viajes y Conquistas
	        [
	        	'text' => '¿Dónde fue la primera invasión vikinga?',
	        	'category_id' => 2
	        ],
	        [
	        	'text' => '¿Qué es un Drakkar?',
	        	'category_id' => 2
	        ], 
	        [
	        	'text' => 'Bjarni fue el primer vikingo en llegar a:',
	        	'category_id' => 2
	        ], 
	        [
	        	'text' => '¿Cómo llegó Gunnbjorn a Groenlandia?',
	        	'category_id' => 2
	        ], 
	        [
	        	'text' => '¿Quién fundó Vinlandia, el primer establecimiento vikingo en América?',
	        	'category_id' => 2
	        ], 
	        [
	        	'text' => '¿Qué función cumplía el bote "Karv"?',
	        	'category_id' => 2
	        ], 
	        [
	        	'text' => '¿Cómo hacían los vikingos para transportar los barcos por tierra?',
	        	'category_id' => 2
	        ], 
	        [
	        	'text' => '¿Dónde dormían los vikingos cuando viajaban en barco?',
	        	'category_id' => 2
	        ], 
	        [
	        	'text' => '¿Qué rey vikingo fue convertido a la cristiandad y mandado a cristianizar el país?',
	        	'category_id' => 2
	        ], 
	        [
	        	'text' => '¿Por qué quería Erik el Rojo que los demás vikingos vayan a Groenlandia?',
	        	'category_id' => 2
	        ], 
	        [
	        	'text' => '¿Quién fue el primer rey en unir toda Dinamarca?',
	        	'category_id' => 2
	        ], 
	        [
	        	'text' => '¿Cuál era el medio de transporte más utilizado por los vikingos?',
	        	'category_id' => 2
	        ], 
	        [
	        	'text' => '¿Cuál era el nombre del vikingo que conquistó distintas partes de Francia?',
	        	'category_id' => 2
	        ], 
	        [
	        	'text' => '¿En qué año se fundaron los primeros asentamientos vikingos en Groenlandia?',
	        	'category_id' => 2
	        ], 
	        [
	        	'text' => '¿En qué año sucedió el primer ataque a Irlanda?',
	        	'category_id' => 2
	        ], 
	        //preguntas de Cultura y Costumbres
	        [
	        	'text' => '¿Cómo se llama el árbol de la vida?',
	        	'category_id' => 3
	        ],
	        [
	        	'text' => '¿Los nórdicos guerreros creían en Dios?',
	        	'category_id' => 3
	        ],
	        [
	        	'text' => '¿Cuál de los siguientes NO era un dios vikingo?',
	        	'category_id' => 3
	        ],
	        [
	        	'text' => '¿Qué denota el apellido de un vikingo?',
	        	'category_id' => 3
	        ],
	        [
	        	'text' => '¿Qué tipo de funeral realizaban los vikingos?',
	        	'category_id' => 3
	        ],
	        [
	        	'text' => '¿Quién era Thor?',
	        	'category_id' => 3
	        ],
	        [
	        	'text' => '¿Quién era Loki?',
	        	'category_id' => 3
	        ],
	        [
	        	'text' => '¿Quién quedaba a cargo de su casa cuando un vikingo se iba a pelear?',
	        	'category_id' => 3
	        ],
	        [
	        	'text' => '¿De dónde vienen los vikingos?',
	        	'category_id' => 3
	        ],
	        [
	        	'text' => '¿De qué material eran las casas de los vikingos?',
	        	'category_id' => 3
	        ],
	        [
	        	'text' => '¿Qué significaba "Skald"?',
	        	'category_id' => 3
	        ],
	        [
	        	'text' => '¿Qué era el "Futhark"?',
	        	'category_id' => 3
	        ],
	        [
	        	'text' => '¿Qué era el "Hnefatafl"?',
	        	'category_id' => 3
	        ],
	        [
	        	'text' => 'Los vikingos usaban colgantes con ciertas formas porque creían que les traía suerte. ¿Cuál era el más común?',
	        	'category_id' => 3
	        ],
	        [
	        	'text' => '¿Qué animal estaba considerado como el más peligroso por los vikingos?',
	        	'category_id' => 3
	        ]  
        ]);
    }
}
