<?php

use Illuminate\Database\Seeder;

class EquipoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('equipos')->insert([
        		'nombre_equipo' => '*555 Corporativo Telefonico',
        		'created_at' => date('Y-m-d H:m:s'),
        		'updated_at' => date('Y-m-d H:m:s'),	
        	]);
    }
}
