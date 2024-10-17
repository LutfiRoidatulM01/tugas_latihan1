<?php

namespace Database\Seeders;

use App\Models\kelas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyKelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelasData=[
            [
                'id'=> 1,
                'name' => 'informatika 1',
                'jumlah' => 10,
            ],

            [
                'id'=> 2,
                'name' => 'informatika 2',
                'jumlah' => 10,
            ],
        ];

        foreach($kelasData as $key => $val){
            kelas::create($val);
        }
    }
}
