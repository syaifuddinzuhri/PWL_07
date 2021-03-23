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
                'nim' => '1941720011',
                'nama' => 'Abdulloh Aqil',
                'kelas' => 'TI-2C',
                'jurusan' => 'Teknik Informatika',
                'no_handphone' => '085648989999',
            ],
            [
                'nim' => '1941720226',
                'nama' => 'Auful Kirom',
                'kelas' => 'TI-2C',
                'jurusan' => 'Teknik Informatika',
                'no_handphone' => '085787893232',
            ],
            [
                'nim' => '1941720100',
                'nama' => 'Naily',
                'kelas' => 'TI-2C',
                'jurusan' => 'Teknik Informatika',
                'no_handphone' => '082654121236',
            ],
            [
                'nim' => '2041723111',
                'nama' => 'Tita Cahyani',
                'kelas' => 'TI-2D',
                'jurusan' => 'Teknik Informatika',
                'no_handphone' => '082654123123',
            ],
            [
                'nim' => '1941720064',
                'nama' => 'Shelyca',
                'kelas' => 'TI-2D',
                'jurusan' => 'Manajemen Informatika',
                'no_handphone' => '085888321123',
            ],
            [
                'nim' => '1941720234',
                'nama' => 'Rifkie Nurdian',
                'kelas' => 'TI-2C',
                'jurusan' => 'Manajemen Informatika',
                'no_handphone' => '085888123432',
            ],
        ];
        DB::table('mahasiswa')->insert($data);
    }
}