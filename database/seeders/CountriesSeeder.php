<?php

namespace Database\Seeders;

use App\Enums\Country;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountriesSeeder extends Seeder
{
    public function run(): void
    {
        $entries = [
            [
                'id' => Country::IRELAND,
                'name' => 'Ireland',
            ],
        ];

        DB::table('countries')->insert($entries);
    }
}
