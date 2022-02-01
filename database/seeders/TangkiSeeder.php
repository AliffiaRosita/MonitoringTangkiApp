<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TangkiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'nama'=>'Tangki A',
                'tinggi'=> 20,
                'volume'=>1570.8,
                'suhu'=> 36
            ],
            [
                'nama'=>'Tangki B',
                'tinggi'=> 5,
                'volume'=>15.71,
                'suhu'=> 45
            ],
            [
                'nama'=>'Tangki C',
                'tinggi'=> 10,
                'volume'=>196.35,
                'suhu'=> 50
            ],
            [
                'nama'=>'Tangki D',
                'tinggi'=> 1.5,
                'volume'=>1.18,
                'suhu'=> 36
            ],

            ];

        DB::table('tangki')->insert($data);
    }
}
