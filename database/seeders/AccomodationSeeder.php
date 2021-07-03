<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccomodationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accomodations')->insert([
            [
                'name' => 'Villa ABC',
                'category_id' => 1,
                'photo' => 'villa_abc.jpg',
                'city_id' => 1,
                'address' => 'Jalan Sejahtera No.2',
                'health_protocol_fee' => 100000,
            ],
            [
                'name' => 'ABC Apartement',
                'category_id' => 2,
                'photo' => 'abc_apartement.jpg',
                'city_id' => 1,
                'address' => 'Jalan Sejahtera No.50',
                'health_protocol_fee' => 150000,
            ],
            [
                'name' => 'ABC Glamping',
                'category_id' => 3,
                'photo' => 'abc_glamping.jpg',
                'city_id' => 2,
                'address' => 'Jalan Raya Puncak Gunung No.2000',
                'health_protocol_fee' => 200000,
            ],
            [
                'name' => 'Medit Apartment',
                'category_id' => 2,
                'photo' => 'abc_glamping.jpg',
                'city_id' => 1,
                'address' => 'Jalan Tanjung Duran No.5',
                'health_protocol_fee' => 250000,
            ],
            [
                'name' => 'Villa tembakau',
                'category_id' => 1,
                'photo' => 'abc_glamping.jpg',
                'city_id' => 2,
                'address' => 'Jalan Taman Safari No.4',
                'health_protocol_fee' => 150000,
            ],
            [
                'name' => 'GG Glamping',
                'category_id' => 3,
                'photo' => 'abc_glamping.jpg',
                'city_id' => 2,
                'address' => 'Jl. pohon rimbun No.45',
                'health_protocol_fee' => 200000,
            ],
            [
                'name' => 'Condo Villa',
                'category_id' => 1,
                'photo' => 'abc_glamping.jpg',
                'city_id' => 3,
                'address' => 'Jl. Permai damai No.4',
                'health_protocol_fee' => 1500000,
            ]

            ,
            [
                'name' => 'zxc Glamping',
                'category_id' => 3,
                'photo' => 'abc_glamping.jpg',
                'city_id' => 4,
                'address' => 'Jalan Glamping raya',
                'health_protocol_fee' => 175000,
            ],
            [
                'name' => 'zxc Apartment',
                'category_id' => 2,
                'photo' => 'abc_glamping.jpg',
                'city_id' => 5,
                'address' => 'Jalan Tanjung Rambutan No.5',
                'health_protocol_fee' => 250000,
            ],
            [
                'name' => 'Villa Asri',
                'category_id' => 1,
                'photo' => 'abc_glamping.jpg',
                'city_id' => 6,
                'address' => 'Jalan Pelikan No.5',
                'health_protocol_fee' => 150000,
            ],
            [
                'name' => 'Ruban Glamping',
                'category_id' => 3,
                'photo' => 'abc_glamping.jpg',
                'city_id' => 7,
                'address' => 'Jl. pohon rotan No.45',
                'health_protocol_fee' => 200000,
            ],
            [
                'name' => 'Tomang Villa',
                'category_id' => 1,
                'photo' => 'abc_glamping.jpg',
                'city_id' => 4,
                'address' => 'Jl. Tomang Raya No.4',
                'health_protocol_fee' => 1700000,
            ]
        ]);
    }
}
