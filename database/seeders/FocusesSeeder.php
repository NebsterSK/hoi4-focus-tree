<?php

namespace Database\Seeders;

use App\Enums\Focus;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FocusesSeeder extends Seeder
{
    public function run(): void
    {
        $entries = [
            [
                'id' => Focus::POLITICAL_EFFORT,
                'name' => Focus::POLITICAL_EFFORT->name(),
                'description' => '::description::',
                'duration' => 70,
            ],
            [
                'id' => Focus::COLLECTIVIST_ETHOS,
                'name' => Focus::COLLECTIVIST_ETHOS->name(),
                'description' => '::description::',
                'duration' => 70,
            ],
            [
                'id' => Focus::LIBERTY_ETHOS,
                'name' => Focus::LIBERTY_ETHOS->name(),
                'description' => '::description::',
                'duration' => 70,
            ],
        ];

        DB::table('focuses')->insert($entries);
    }
}
