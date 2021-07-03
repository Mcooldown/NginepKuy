<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ratings')->insert([
            [
                'star' => 5,
                'accomodation_id' => 1,
                'user_id' => 3,
                'comment' => 'very good',
            ],
            [
                'star' => 2,
                'accomodation_id' => 2,
                'user_id' => 3,
                'comment' => 'very bad',
            ],
            [
                'star' => 4,
                'accomodation_id' => 3,
                'user_id' => 3,
                'comment' => 'good hospitality',
            ]
        ]);
    }
}