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
                'position_y' => 16,
            ],
            [
                'focus_id' => Focus::COLLECTIVIST_ETHOS,
                'country_id' => Country::IRELAND,
                'position_x' => 2,
                'position_y' => 15,
            ],
            [
                'focus_id' => Focus::LIBERTY_ETHOS,
                'country_id' => Country::IRELAND,
                'position_x' => 2,
                'position_y' => 17,
            ],
            [
                'focus_id' => 4,
                'country_id' => Country::IRELAND,
                'position_x' => 1,
                'position_y' => 2,
            ],
            [
                'focus_id' => 5,
                'country_id' => Country::IRELAND,
                'position_x' => 1,
                'position_y' => 5,
            ],
            [
                'focus_id' => 6,
                'country_id' => Country::IRELAND,
                'position_x' => 1,
                'position_y' => 8,
            ],
            [
                'focus_id' => 7,
                'country_id' => Country::IRELAND,
                'position_x' => 1,
                'position_y' => 11,
            ],
        ];

        DB::table('nodes')->insert($entries);
    }
}
