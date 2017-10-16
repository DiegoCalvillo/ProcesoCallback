<?php

use Illuminate\Database\Seeder;

class PuestoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('puestos')->insert([
        		'puesto' => 'Administrador',

        	]);
    }
}
