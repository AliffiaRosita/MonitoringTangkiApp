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
                'tangki_id'=> 1,
                'sensor_id'=>2
            ],
            [
                'tinggi'=> 6,
                'volume'=>471.24,
                'tangki_id'=> 1,
                'sensor_id'=>1
            ],
            [
                'tinggi'=> 5,
                'volume'=>392.7,
                'tangki_id'=> 1,
                'sensor_id'=>2
            ],
            [
                'tinggi'=> 12,
                'volume'=>942.48,
                'tangki_id'=> 1,
                'sensor_id'=>1
            ],
            [
                'tinggi'=> 2,
                'volume'=>157.08,
                'tangki_id'=> 1,
                'sensor_id'=>2
            ],
            [
                'tinggi'=> 7,
                'volume'=>549.78,
                'tangki_id'=> 1,
                'sensor_id'=>1
            ],
            [
                'tinggi'=> 2.5,
                'volume'=>7.85,
                'tangki_id'=> 2,
                'sensor_id'=>2
            ],
            [
                'tinggi'=> 1,
                'volume'=>3.14,
                'tangki_id'=> 2,
                'sensor_id'=>1
            ],
            [
                'tinggi'=> 0.5,
                'volume'=>1.57,
                'tangki_id'=> 2,
                'sensor_id'=>2
            ],
            [
                'tinggi'=> 3.5,
                'volume'=>11,
                'tangki_id'=> 2,
                'sensor_id'=>1
            ],
            [
                'tinggi'=> 2.7,
                'volume'=>53.01,
                'tangki_id'=> 3,
                'sensor_id'=>2
            ],
            [
                'tinggi'=> 4.9,
                'volume'=>96.21,
                'tangki_id'=> 3,
                'sensor_id'=>1
            ],
            [
                'tinggi'=> 3,
                'volume'=>58.9,
                'tangki_id'=> 3,
                'sensor_id'=>2
            ],
            [
                'tinggi'=> 7,
                'volume'=>137.44,
                'tangki_id'=> 3,
                'sensor_id'=>1
            ],
            [
                'tinggi'=> 0.8,
                'volume'=>0.63,
                'tangki_id'=> 4,
                'sensor_id'=>2
            ],
            [
                'tinggi'=> 0.4,
                'volume'=>0.31,
                'tangki_id'=> 4,
                'sensor_id'=>1
            ],
            [
                'tinggi'=> 0.1,
                'volume'=>0.79,
                'tangki_id'=> 4,
                'sensor_id'=>2
            ],
            [
                'tinggi'=> 0.3,
                'volume'=>0.24,
                'tangki_id'=> 4,
                'sensor_id'=>1
            ],
        ];

        DB::table('history_sensor')->insert($data);
    }
}
