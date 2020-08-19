<?php

use Illuminate\Database\Seeder;

class create_users_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'role_id' => 1,
        	'name' => 'Sumi',
        	'email' => 'sumi@gmail.com',
        	'password' => Hash::make('password'),
    

        ]);    

        DB::table('users')->insert([
            'role_id' => 2,
            'name' => 'Rinaldi',
            'email' => 'rin@gmail.com',
            'password' => Hash::make('password'),
    

        ]);    
    }
}
