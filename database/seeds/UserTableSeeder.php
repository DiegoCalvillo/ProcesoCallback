<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        		'name' => 'Diego Calvillo',
        		'sare' => 147780,
        		'puesto_id' => 1,
        		'email' => 'diego.calvillo@mdycontact.center',
        		'password' => bcrypt('123456'),
        		'username' => 'dcalvillo',
        	]);
    }
}
