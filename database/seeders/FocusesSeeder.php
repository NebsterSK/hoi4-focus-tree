<?php

namespace Database\Seeders;

use App\Enums\Focus;
use App\Models\Focus as FocusModel;
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
                'duration' => FocusModel::DURATION_70,
            ],
            [
                'id' => Focus::COLLECTIVIST_ETHOS,
                'name' => Focus::COLLECTIVIST_ETHOS->name(),
                'description' => '::description::',
                'duration' => FocusModel::DURATION_70,
            ],
            [
                'id' => Focus::LIBERTY_ETHOS,
                'name' => Focus::LIBERTY_ETHOS->name(),
                'description' => '::description::',
                'duration' => FocusModel::DURATION_70,
            ],
            [
                'id' => 4,
                'name' => 'Army Effort',
                'description' => '::description::',
                'duration' => FocusModel::DURATION_70,
            ],
            [
                'id' => 5,
                'name' => 'Aviation Effort',
                'description' => '::description::',
                'duration' => FocusModel::DURATION_70,
            ],
            [
                'id' => 6,
                'name' => 'Naval Effort',
                'description' => '::description::',
                'duration' => FocusModel::DURATION_70,
            ],
            [
                'id' => 7,
                'name' => 'Industrial Effort',
                'description' => '::description::',
                'duration' => FocusModel::DURATION_70,
            ],
        ];

        DB::table('focuses')->insert($entries);
    }
}
