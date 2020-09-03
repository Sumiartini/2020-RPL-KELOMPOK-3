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
            'class_id'   => 1,
            'nis'          => '1819.10.070', 
            'gender'       => 'female'
        ]);
        
        DB::table('students')->insert([
            'user_id'      => 5,
            'class_id'   => 1,
            'nis'          => '1819.10.071', 
            'gender'       => 'female'
        ]);
        
        DB::table('students')->insert([
            'user_id'      => 6,
            'class_id'   => 2,
            'nis'          => '1819.10.073', 
            'gender'       => 'female'
        ]);
        
        DB::table('students')->insert([
            'user_id'      => 7,
            'class_id'   => 2,
            'nis'          => '1819.10.074', 
            'gender'       => 'female'
        ]);
        
        DB::table('students')->insert([
            'user_id'      => 8,
            'class_id'   => 2,
            'nis'          => '1819.10.075', 
            'gender'       => 'female'
        ]);
        
        DB::table('students')->insert([
            'user_id'      => 9,
            'class_id'   => 2,
            'nis'          => '1819.10.076', 
            'gender'       => 'female'
        ]);
        
        DB::table('students')->insert([
            'user_id'      => 10,
            'class_id'   => 2,
            'nis'          => '1819.10.077', 
            'gender'       => 'male'
        ]);
        
        DB::table('students')->insert([
            'user_id'      => 11,
            'class_id'   => 2,
            'nis'          => '1819.10.078', 
            'gender'       => 'female'
        ]);
        
        DB::table('students')->insert([
            'user_id'      => 12,
            'class_id'   => 3,
            'nis'          => '1819.10.079', 
            'gender'       => 'male'
        ]);
        
        DB::table('students')->insert([
            'user_id'      => 13,
            'class_id'   => 3,
            'nis'          => '1819.10.080', 
            'gender'       => 'female'
        ]);
        
        DB::table('students')->insert([
            'user_id'      => 14,
            'class_id'   => 3,
            'nis'          => '1819.10.081', 
            'gender'       => 'female'
        ]);
        
        DB::table('students')->insert([
            'user_id'      => 15,
            'class_id'   => 3,
            'nis'          => '1819.10.082', 
            'gender'       => 'female'
        ]);
        
        DB::table('students')->insert([
            'user_id'      => 16,
            'class_id'   => 3,
            'nis'          => '1819.10.083', 
            'gender'       => 'female'
        ]);
        

        

        
    }
}
