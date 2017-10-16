<?php

use Illuminate\Database\Seeder;

class AsesorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('asesores')->insert([
        	'sare' => 100990,
        	'nombre_asesor' => 'LAURA MIREYA GARZA AYALA',
        	'equipo_id' => 1,
        	'campana_id' => 1,
        	'supervisor_id' => 1,
        	'created_at' => date('Y-m-d H:m:s'),
        	'updated_at' => date('Y-m-d H:m:s'),
        ]);
    }
}
