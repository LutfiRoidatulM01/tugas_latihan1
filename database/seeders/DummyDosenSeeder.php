<?php

namespace Database\Seeders;

use App\Models\dosen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyDosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dosenData = [
            [
                'id' => 1,
                'user_id' => 2,
                'kelas_id' => 1,
                'kode_dosen' => 02,
                'nip' => 223344,
                'name' => 'Ahmad Rosidi',
            ],

            [
                'id' => 2,
                'user_id' => 3,
                'kelas_id' => 2,
                'kode_dosen' => 03,
                'nip' => 334455,
                'name' => 'Rendra Ahmad',
            ],

            [
                'id' => 3,
                'user_id' => 4,
                'kelas_id' => null,
                'kode_dosen' => 04,
                'nip' => 445566,
                'name' => 'Anam Makruf',
            ],

            [
                'id' => 4,
                'user_id' => 5,
                'kelas_id' => null,
                'kode_dosen' => 05,
                'nip' => 556677,
                'name' => 'Tasia Putri',
                
            ],

            [
                'id' => 5,
                'user_id' => 6,
                'kelas_id' => null,
                'kode_dosen' => 06,
                'nip' => 667788,
                'name' => 'Yuli Kurniawati',
            ],
        ];
        foreach($dosenData as $key => $val){
            dosen::create($val);
        }

    }
}
