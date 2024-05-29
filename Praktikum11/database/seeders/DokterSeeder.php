<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('dokters')->insert([
            [
                'nama' => 'Dr. Andi Sucipto',
                'gender' => 'L',
                'tmp_lahir' => 'Jakarta',
                'tgl_lahir' => '1980-05-15',
                'kategori' => 'Umum',
                'telpon' => '081234567890',
                'alamat' => 'Jakarta',
                'unitkerja_id' => 1,
            ],
            [
                'nama' => 'Dr. Sri Rahayu',
                'gender' => 'P',
                'tmp_lahir' => 'Surabaya',
                'tgl_lahir' => '1975-10-20',
                'kategori' => 'Spesialis',
                'telpon' => '082345678901',
                'alamat' => 'Surabaya',
                'unitkerja_id' => 2,
            ],
            [
                'nama' => 'Dr. Abimana Pratama',
                'gender' => 'L',
                'tmp_lahir' => 'Bandung',
                'tgl_lahir' => '1982-03-25',
                'kategori' => 'Bidan',
                'telpon' => '083456789012',
                'alamat' => 'Bandung',
                'unitkerja_id' => 3,
            ],
            [
                'nama' => 'Dr. Ayu Lestari',
                'gender' => 'P',
                'tmp_lahir' => 'Yogyakarta',
                'tgl_lahir' => '1978-08-10',
                'kategori' => 'Dokter Gigi',
                'telpon' => '084567890123',
                'alamat' => 'Yogyakarta',
                'unitkerja_id' => 4,
            ],
            [
                'nama' => 'Dr. Rezwan Anggara',
                'gender' => 'L',
                'tmp_lahir' => 'Semarang',
                'tgl_lahir' => '1985-12-05',
                'kategori' => 'Anastesi',
                'telpon' => '085678901234',
                'alamat' => 'Semarang',
                'unitkerja_id' => 5,
            ],
        ]);
    }
}
