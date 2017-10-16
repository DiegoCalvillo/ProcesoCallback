<?php

use Illuminate\Database\Seeder;

class SupervisoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('supervisores')->insert([
        		'nombre_supervisor' => 'RICARDO ROSALES PONCE',
        		'sare' => '100984',
        		'equipo_id' => 1,
        		'campana_id' => 1,
        		'created_at' => date('Y-m-d H:m:s'),
        		'updated_at' => date('Y-m-d H:m:s'),
        	]);
    }
}
