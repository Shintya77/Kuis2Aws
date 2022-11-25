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
        DB::table('mahasiswas')->insert([
            [
                'Nim' => '2041720088',
                'Nama' => 'Shintya Rahmawati',
                'Kelas' => 'TI 3E',
                'Jurusan' => 'D4 Teknik Informatika'

            ]
        ]);
    }
}
