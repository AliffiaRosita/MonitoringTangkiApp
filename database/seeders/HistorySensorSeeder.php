<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class HistorySensorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            [
                'tinggi'=> 3,
                'volume'=>235.62,
                'id_tangki'=> 1,
                'id_sensor'=>2
            ],
            [
                'tinggi'=> 6,
                'volume'=>471.24,
                'id_tangki'=> 1,
                'id_sensor'=>1
            ],
            [
                'tinggi'=> 5,
                'volume'=>392.7,
                'id_tangki'=> 1,
                'id_sensor'=>2
            ],
            [
                'tinggi'=> 12,
                'volume'=>942.48,
                'id_tangki'=> 1,
                'id_sensor'=>1
            ],
            [
                'tinggi'=> 2,
                'volume'=>157.08,
                'id_tangki'=> 2,
                'id_sensor'=>2
            ],
            [
                'tinggi'=> 7,
                'volume'=>549.78,
                'id_tangki'=> 2,
                'id_sensor'=>1
            ],
        ];

        DB::table('history_sensor')->insert($data);
    }
}
