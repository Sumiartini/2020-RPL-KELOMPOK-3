<?php

use Illuminate\Database\Seeder;

class create_roles_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
        	'name' => 'teacher',

        ]);

        DB::table('roles')->insert([
        	'name' => 'student',

        ]);
    }
}
