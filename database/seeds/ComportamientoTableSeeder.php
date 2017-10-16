<?php

use Illuminate\Database\Seeder;

class ComportamientoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comportamientos')->insert([
        		'id_sub_categorias' => 43,
        		'nombre_comportamiento'=> 'Otros',
        	]);
    }
}
