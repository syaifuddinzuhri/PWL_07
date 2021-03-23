<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
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
                'nim' => '1941720013',
                'nama' => 'Mochammad Syaifuddin Zuhri',
                'kelas' => 'TI-2C',
                'jurusan' => 'Teknik Informatika',
                'no_handphone' => '085648989767',
            ],
            [
                'nim' => '1941720206',
                'nama' => 'Dimas Ilham',
                'kelas' => 'TI-2C',
                'jurusan' => 'Teknik Informatika',
                'no_handphone' => '085787898121',
            ],
            [
                'nim' => '1941720108',
                'nama' => 'Ilham Ibrahim',
                'kelas' => 'TI-2C',
                'jurusan' => 'Teknik Informatika',
                'no_handphone' => '082654123434',
            ],
            [
                'nim' => '2041723126',
                'nama' => 'Farel Putra Hidayat',
                'kelas' => 'TI-2D',
                'jurusan' => 'Teknik Informatika',
                'no_handphone' => '082654123123',
            ],
            [
                'nim' => '1941720061',
                'nama' => 'Nadya Layra',
                'kelas' => 'TI-2D',
                'jurusan' => 'Teknik Informatika',
                'no_handphone' => '085888321787',
            ],
            [
                'nim' => '1941720234',
                'nama' => 'Risky Dwi Ramadhan',
                'kelas' => 'TI-2C',
                'jurusan' => 'Teknik Informatika',
                'no_handphone' => '085999123432',
            ],
        ];
        DB::table('mahasiswa')->insert($data);
    }
}