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
             'name' => 'Tegar',
             'email' => '1819.10.072',
             'password' => Hash::make('1819.10.072'),
    

         ]);  

         DB::table('users')->insert([
             'role_id' => 2,
             'name' => 'Rinaldi',
             'email' => '1819.10.069',
             'password' => Hash::make('1819.10.069'),
    

         ]);  

        DB::table('users')->insert([
            'role_id' => 2,
            'name' => 'Aul',
            'email' => '1819.10.070',
            'password' => Hash::make('1819.10.070'),
    

        ]);  
        
          
    }
}
