<?php

use Illuminate\Database\Seeder;

class CampanasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('campanas')->insert([
        		'nombre_campana' => '*555 Corporativo Telefonico',
        		'created_at' => date('Y-m-d H:m:s'),
        		'updated_at' => date('Y-m-d H:m:s'),
        	]);
    }
}
