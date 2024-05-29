<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Unit_KerjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('unit_kerjas')->insert([
            [
                'id' => '1',
                'nama' => 'Rumah Sakit Jakarta',
            ],
            [
                'id' => '2',
                'nama' => 'Rumah Sakit Surabaya',
            ],
            [
                'id' => '3',
                'nama' => 'Klinik Bandung',
            ],
            [
                'id' => '4',
                'nama' => 'Puskesmas Yogyakarta',
            ],
            [
                'id' => '5',
                'nama' => 'Rumah Sakit Semarang',
            ]
        ]);
    }
}
