<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run t
     *
     * @return void
     */
    public function run()
    {
        $this->call(PostTableSeeder::class);
    }
}
