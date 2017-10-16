<?php

use Illuminate\Database\Seeder;

class EstatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estatus')->insert([
        		'id' => 0,
        		'nombre_estatus' => 'Activo',
        	]);
    }
}
