<?php

use Illuminate\Database\Seeder;

class SubCategoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sub_categorias')->insert([
        		'id_categorias' => 5,
        		'nombre_sub_categorias' => 'Relativo al usuario',
        	]);
    }
}
