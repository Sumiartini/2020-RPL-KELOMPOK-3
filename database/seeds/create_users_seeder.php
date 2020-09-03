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
             'name' => 'Tegar Mujiatno Subagja',
             'email' => 'tegar@gmail.com',
             'password' => Hash::make('password'),
         ]);  

         DB::table('users')->insert([
             'role_id' => 2,
             'name' => 'Rinaldi Anugrah Permana',
             'email' => 'rinaldi@gmail.com',
             'password' => Hash::make('password'),
         ]);  

        DB::table('users')->insert([
            'role_id' => 2,
            'name' => 'Aulia Rahma Nursalam',
            'email' => 'aulia@gmail.com',
            'password' => Hash::make('password'),
        ]);  

        DB::table('users')->insert([
            'role_id' => 2,
            'name' => 'jayanti nurhabibah',
            'email' => 'jayanti@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'role_id' => 2,
            'name' => 'Elsa Susilawati',
            'email' => 'susilawati@gmail.com',
            'password' => Hash::make('password'),
        ]);  

        DB::table('users')->insert([
            'role_id' => 2,
            'name' => 'santi sintiawati',
            'email' => 'santi@gmail.com',
            'password' => Hash::make('password'),
        ]);  

        DB::table('users')->insert([
            'role_id' => 2,
            'name' => 'dede suminar',
            'email' => 'dede@gmail.com',
            'password' => Hash::make('password'),
        ]);  

        DB::table('users')->insert([
            'role_id' => 2,
            'name' => 'hania firianti mufidah',
            'email' => 'hania@gmail.com',
            'password' => Hash::make('password'),
        ]);  

        DB::table('users')->insert([
            'role_id' => 2,
            'name' => 'rendy joshua hutagaol',
            'email' => 'rendy@gmail.com',
            'password' => Hash::make('password'),
        ]);  

        DB::table('users')->insert([
            'role_id' => 2,
            'name' => 'Serli',
            'email' => 'serli@gmail.com',
            'password' => Hash::make('password'),
        ]);  

        DB::table('users')->insert([
            'role_id' => 2,
            'name' => 'hilal khoerudin',
            'email' => 'hilal@gmail.com',
            'password' => Hash::make('password'),
        ]);  

        DB::table('users')->insert([
            'role_id' => 2,
            'name' => 'tia anggraeni',
            'email' => 'tia@gmail.com',
            'password' => Hash::make('password'),
        ]);  

        DB::table('users')->insert([
            'role_id' => 2,
            'name' => 'lutfiah',
            'email' => 'lutfiah@gmail.com',
            'password' => Hash::make('password'),
        ]);  

        DB::table('users')->insert([
            'role_id' => 2,
            'name' => 'sari',
            'email' => 'sari@gmail.com',
            'password' => Hash::make('password'),
        ]);  

        DB::table('users')->insert([
            'role_id' => 2,
            'name' => 'fita',
            'email' => 'fita@gmail.com',
            'password' => Hash::make('password'),
        ]);  

        
          
    }
}
