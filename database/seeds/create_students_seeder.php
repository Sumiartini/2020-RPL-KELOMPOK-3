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
            'nis'          => '181910069', 
            'class'        => 'XII RPL2',
            'gender'       => 'male'
        ]);
    }
}
