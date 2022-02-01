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
                'jenis' =>'Air',
            ],
            [
                'jenis' =>'Minyak',
            ],
          ];
        DB::table('sensor')->insert($data);
    }
}
