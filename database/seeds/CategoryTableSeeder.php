<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('categories')->insert([
        	[
	        	'description' => 'Armas y Guerreros',
	        	'category_img' => 'vikingtrivia\public\images\axe.png',
	        ],
	        [
	        	'description' => 'Viajes y Conquistas',
	        	'category_img' => 'vikingtrivia\public\images\boat.png',
        	],
        	[
	        	'description' => 'Cultura y Costumbres',
	        	'category_img' => 'vikingtrivia\public\images\mug.png',
        	]
        ]);
    }
}
