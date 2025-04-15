<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        \App\Models\Book::factory(20)->create();
        \App\Models\Author::factory(15)->create();
        \App\Models\Publisher::factory(10)->create();
    }
}