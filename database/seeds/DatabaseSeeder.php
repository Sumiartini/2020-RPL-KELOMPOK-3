<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(create_roles_seeder::class);
        $this->call(create_users_seeder::class);
        $this->call(create_class_seeder::class);
        $this->call(create_students_seeder::class);
        
        
        
    }
}
