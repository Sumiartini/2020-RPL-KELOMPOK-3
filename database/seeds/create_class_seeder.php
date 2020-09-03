<?php

use Illuminate\Database\Seeder;

class create_class_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('class')->insert([
        	'name_class' => 'XII RPL 1',   
        ]);

        DB::table('class')->insert([
            'name_class' => 'XII RPL2',
        ]);
        
        DB::table('class')->insert([
            'name_class' => 'XII MM',
        ]);
        
    }
}
