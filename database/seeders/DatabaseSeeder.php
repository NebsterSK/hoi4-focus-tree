<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(FocusesSeeder::class);
        $this->call(CountriesSeeder::class);
        $this->call(NodesSeeder::class);
    }
}
