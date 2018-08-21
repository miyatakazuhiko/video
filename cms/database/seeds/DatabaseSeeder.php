<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(CreatorsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
