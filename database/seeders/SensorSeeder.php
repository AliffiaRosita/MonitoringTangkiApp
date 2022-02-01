<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class SensorSeeder extends Seeder
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
                'jenis' =>'air',
            ],
            [
                'jenis' =>'minyak',
            ],
          ];
        DB::pable('sensor')->insert($data);
    }
}
