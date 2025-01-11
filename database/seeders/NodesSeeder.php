<?php

namespace Database\Seeders;

use App\Enums\Country;
use App\Enums\Focus;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NodesSeeder extends Seeder
{
    public function run(): void
    {
        $entries = [
            [
                'focus_id' => Focus::POLITICAL_EFFORT,
                'country_id' => Country::IRELAND,
                'position_x' => 1,
                'position_y' => 2,
            ],
            [
                'focus_id' => Focus::COLLECTIVIST_ETHOS,
                'country_id' => Country::IRELAND,
                'position_x' => 2,
                'position_y' => 1,
            ],
            [
                'focus_id' => Focus::LIBERTY_ETHOS,
                'country_id' => Country::IRELAND,
                'position_x' => 2,
                'position_y' => 3,
            ],
        ];

        DB::table('nodes')->insert($entries);
    }
}
