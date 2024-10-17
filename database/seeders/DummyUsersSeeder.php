<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'id' => 1,
                'username' => 'lutfi01',
                'email' => 'lutfi@gmail.com',
                'role' => 'kaprodi',
                'password' => bcrypt('123456')
            ],

            [
                'id' => 2,
                'username' => 'ahmad',
                'email' => 'ahmad@gmail.com',
                'role' => 'dosen_wali',
                'password' => bcrypt('123456')
            ],

            [
                'id' => 3,
                'username' => 'rendra',
                'email' => 'rendra@gmail.com',
                'role' => 'dosen_wali',
                'password' => bcrypt('123456')
            ],

            [
                'id' => 4,
                'username' => 'anam',
                'email' => 'anam@gmail.com',
                'role' => 'dosen_wali',
                'password' => bcrypt('123456')
            ],

            [
                'id' => 5,
                'username' => 'tasia',
                'email' => 'tasia@gmail.com',
                'role' => 'dosen_wali',
                'password' => bcrypt('123456')
            ],

            [
                'id' => 6,
                'username' => 'yuli',
                'email' => 'yuli@gmail.com',
                'role' => 'dosen_wali',
                'password' => bcrypt('123456')
            ],

            [
                'id' => 7,
                'username' => 'aisyifa',
                'email' => 'aisyifa@gmail.com',
                'role' => 'mahasiswa',
                'password' => bcrypt('123456')
            ],

            [
                'id' => 8,
                'username' => 'putri',
                'email' => 'putri@gmail.com',
                'role' => 'mahasiswa',
                'password' => bcrypt('123456')
            ],

            [
                'id' => 9,
                'username' => 'nazwa',
                'email' => 'nazwa@gmail.com',
                'role' => 'mahasiswa',
                'password' => bcrypt('123456')
            ],

            [
                'id' => 10,
                'username' => 'cahaya',
                'email' => 'cahaya@gmail.com',
                'role' => 'mahasiswa',
                'password' => bcrypt('123456')
            ],

            [
                'id' => 11,
                'username' => 'vriska',
                'email' => 'vriska@gmail.com',
                'role' => 'mahasiswa',
                'password' => bcrypt('123456')
            ],

            [
                'id' => 12,
                'username' => 'dila',
                'email' => 'dila@gmail.com',
                'role' => 'mahasiswa',
                'password' => bcrypt('123456')
            ],

            [
                'id' => 13,
                'username' => 'krisen',
                'email' => 'krisen@gmail.com',
                'role' => 'mahasiswa',
                'password' => bcrypt('123456')
            ],

            [
                'id' => 14,
                'username' => 'angger',
                'email' => 'angger@gmail.com',
                'role' => 'mahasiswa',
                'password' => bcrypt('123456')
            ],

            [
                'id' => 15,
                'username' => 'winsten',
                'email' => 'winsten@gmail.com',
                'role' => 'mahasiswa',
                'password' => bcrypt('123456')
            ],

            [
                'id' => 16,
                'username' => 'aldo',
                'email' => 'aldo@gmail.com',
                'role' => 'mahasiswa',
                'password' => bcrypt('123456')
            ],

            [
                'id' => 17,
                'username' => 'deni',
                'email' => 'deni@gmail.com',
                'role' => 'mahasiswa',
                'password' => bcrypt('123456')
            ],

            [
                'id' => 18,
                'username' => 'intan',
                'email' => 'intan@gmail.com',
                'role' => 'mahasiswa',
                'password' => bcrypt('123456')
            ],

            [
                'id' => 19,
                'username' => 'vanes',
                'email' => 'vanes@gmail.com',
                'role' => 'mahasiswa',
                'password' => bcrypt('123456')
            ],

            [
                'id' => 20,
                'username' => 'widi',
                'email' => 'widi@gmail.com',
                'role' => 'mahasiswa',
                'password' => bcrypt('123456')
            ],

            [
                'id' => 21,
                'username' => 'rara',
                'email' => 'rara@gmail.com',
                'role' => 'mahasiswa',
                'password' => bcrypt('123456')
            ],

            [
                'id' => 22,
                'username' => 'dwi',
                'email' => 'dwi@gmail.com',
                'role' => 'mahasiswa',
                'password' => bcrypt('123456')
            ],

            [
                'id' => 23,
                'username' => 'galuh',
                'email' => 'galuh@gmail.com',
                'role' => 'mahasiswa',
                'password' => bcrypt('123456')
            ],

            [
                'id' => 24,
                'username' => 'ayu',
                'email' => 'ayu@gmail.com',
                'role' => 'mahasiswa',
                'password' => bcrypt('123456')
            ],

            [
                'id' => 25,
                'username' => 'putra',
                'email' => 'putra@gmail.com',
                'role' => 'mahasiswa',
                'password' => bcrypt('123456')
            ],

            [
                'id' => 26,
                'username' => 'aldi',
                'email' => 'aldi0@gmail.com',
                'role' => 'mahasiswa',
                'password' => bcrypt('123456')
            ],
        ];

        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
