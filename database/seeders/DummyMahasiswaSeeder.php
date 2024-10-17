<?php

namespace Database\Seeders;

use App\Models\mahasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyMahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mahasiswaData = [
            [
                'id' => 1,
                'user_id' => 7,
                'kelas_id' => 1,
                'nim' => 215410,
                'name' => 'Aisyifa Putri',
                'tempat_lahir' => 'Malang',
                'tanggal_lahir' => '2003-12-16',
                'edit' => 0,
            ],

            [
                'id' => 2,
                'user_id' => 8,
                'kelas_id' => 1,
                'nim' => 215411,
                'name' => 'Putri Wulan',
                'tempat_lahir' => 'Jogja',
                'tanggal_lahir' => '2002-02-21',
                'edit' => 0,
            ],

            [
                'id' => 3,
                'user_id' => 9,
                'kelas_id' => 1,
                'nim' => 215412,
                'name' => 'Nazwa Dwi',
                'tempat_lahir' => 'Sleman',
                'tanggal_lahir' => '2003-04-12',
                'edit' => 0,
            ],

            [
                'id' => 4,
                'user_id' => 10,
                'kelas_id' => 1,
                'nim' => 215413,
                'name' => 'Cahaya Indah',
                'tempat_lahir' => 'Surabaya',
                'tanggal_lahir' => '2004-11-03',
                'edit' => 0,
            ],

            [
                'id' => 5,
                'user_id' => 11,
                'kelas_id' => 1,
                'nim' => 215414,
                'name' => 'Vriska Nur',
                'tempat_lahir' => 'Boyolali',
                'tanggal_lahir' => '2002-08-04',
                'edit' => 0,
            ],

            [
                'id' => 6,
                'user_id' => 12,
                'kelas_id' => 1,
                'nim' => 215415,
                'name' => 'Dila Putri',
                'tempat_lahir' => 'Solo',
                'tanggal_lahir' => '2003-05-11',
                'edit' => 0,
            ],

            [
                'id' => 7,
                'user_id' => 13,
                'kelas_id' => 1,
                'nim' => 215416,
                'name' => 'Krisen Hidevano',
                'tempat_lahir' => 'Tulungagung',
                'tanggal_lahir' => '2003-04-21',
                'edit' => 0,
            ],

            [
                'id' => 8,
                'user_id' => 14,
                'kelas_id' => 1,
                'nim' => 215417,
                'name' => 'Angger Satria',
                'tempat_lahir' => 'Bantul',
                'tanggal_lahir' => '2003-06-17',
                'edit' => 0,
            ],

            [
                'id' => 9,
                'user_id' => 15,
                'kelas_id' => 1,
                'nim' => 215418,
                'name' => 'Winsten Firendra',
                'tempat_lahir' => 'Wonogiri',
                'tanggal_lahir' => '2003-12-04',
                'edit' => 0,
            ],

            [
                'id' => 10,
                'user_id' => 16,
                'kelas_id' => 1,
                'nim' => 215419,
                'name' => 'Aldo Silvester',
                'tempat_lahir' => 'Semarang',
                'tanggal_lahir' => '2004-09-25',
                'edit' => 0,
            ],

            [
                'id' => 11,
                'user_id' => 17,
                'kelas_id' => 2,
                'nim' => 215420,
                'name' => 'Deni Dian',
                'tempat_lahir' => 'Surabaya',
                'tanggal_lahir' => '2002-11-06',
                'edit' => 0,
            ],

            [
                'id' => 12,
                'user_id' => 18,
                'kelas_id' => 2,
                'nim' => 215421,
                'name' => 'Intan Sarina',
                'tempat_lahir' => 'Solo',
                'tanggal_lahir' => '2003-08-17',
                'edit' => 0,
            ],

            [
                'id' => 13,
                'user_id' => 19,
                'kelas_id' => 2,
                'nim' => 215422,
                'name' => 'Vanesa Firda',
                'tempat_lahir' => 'Gorontalo',
                'tanggal_lahir' => '2004-02-28',
                'edit' => 0,
            ],

            [
                'id' => 14,
                'user_id' => 20,
                'kelas_id' => 2,
                'nim' => 215423,
                'name' => 'Widiya Wati',
                'tempat_lahir' => 'Ponorogo',
                'tanggal_lahir' => '2004-07-24',
                'edit' => 0,
            ],

            [
                'id' => 15,
                'user_id' => 21,
                'kelas_id' => 2,
                'nim' => 215424,
                'name' => 'Rara Eko',
                'tempat_lahir' => 'Jakarta',
                'tanggal_lahir' => '2004-04-04',
                'edit' => 0,
            ],

            [
                'id' => 16,
                'user_id' => 22,
                'kelas_id' => 2,
                'nim' => 215425,
                'name' => 'Dwi Hayati',
                'tempat_lahir' => 'Sleman',
                'tanggal_lahir' => '2004-01-23',
                'edit' => 0,
            ],

            [
                'id' => 17,
                'user_id' => 23,
                'kelas_id' => 2,
                'nim' => 2154126,
                'name' => 'Galuh Sekar',
                'tempat_lahir' => 'Bandung',
                'tanggal_lahir' => '2003-03-07',
                'edit' => 0,
            ],

            [
                'id' => 18,
                'user_id' => 24,
                'kelas_id' => 2,
                'nim' => 215427,
                'name' => 'Ayu Wulandari',
                'tempat_lahir' => 'Makassar',
                'tanggal_lahir' => '2003-10-27',
                'edit' => 0,
            ],

            [
                'id' => 19,
                'user_id' => 25,
                'kelas_id' => 2,
                'nim' => 215428,
                'name' => 'Putra Dio',
                'tempat_lahir' => 'Pekanbaaru',
                'tanggal_lahir' => '2002-03-19',
                'edit' => 0,
            ],

            [
                'id' => 20,
                'user_id' => 26,
                'kelas_id' => 2,
                'nim' => 215429,
                'name' => 'Aldi Mulya',
                'tempat_lahir' => 'Semarang',
                'tanggal_lahir' => '2003-07-30',
                'edit' => 0,
            ],


        ];
        foreach($mahasiswaData as $key => $val){
            mahasiswa::create($val);
        }
    }
}
