<?php

use Illuminate\Database\Seeder;

class MotivoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('motivos')->insert([
        		'nombre_motivo' => 'Cliente',
        		'created_at' => date('Y-m-d H:m:s'),
        		'updated_at' => date('Y-m-d H:m:s'),
        	]);
    }
}
