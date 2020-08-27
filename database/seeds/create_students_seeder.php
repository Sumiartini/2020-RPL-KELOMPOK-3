<?php

use Illuminate\Database\Seeder;

class create_students_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('students')->insert([
             'user_id'	   => 2,
             'class_id'   => 1,
             'nis'          => '1819.10.072', 
             'gender'       => 'male'
         ]);

         DB::table('students')->insert([
             'user_id'      => 3,
             'class_id'     => 1,
             'nis'          => '1819.10.069', 
             'gender'       => 'male'
         ]);
        
        DB::table('students')->insert([
            'user_id'      => 4,
            'class_id'   => 2,
            'nis'          => '1819.10.070', 
            'gender'       => 'female'
        ]);
        

        

        
    }
}
