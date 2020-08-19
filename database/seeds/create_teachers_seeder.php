<?php

use Illuminate\Database\Seeder;

class create_teachers_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('teachers')->insert([
            'user_id'	   => 1,
            'nik'          => '0000322', 
            'gender'       => 'male'
        ]);
    }
}
