<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
<<<<<<< HEAD
use App\Models\User;
=======
>>>>>>> 13631e53cc77e502521656cb681b8d0d87f456ef

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
<<<<<<< HEAD
                'nama' => 'Angger',
                'alamat' => 'pml',
                'no_hp' => "0897654345",
                'role' => 'dokter',
                'email' => 'angger@gmail.com',
                'password' => 'password'
            ],

            
            [
                'nama' => 'Fabio',
                'alamat' => 'tgl',
                'no_hp' => "08974554345",
                'role' => 'dokter',
                'email' => 'fabio@gmail.com',
                'password' => 'password'
            ],

            
            [
                'nama' => 'ger',
                'alamat' => 'pml',
                'no_hp' => "089733654345",
                'role' => 'pasien',
                'email' => 'ger@gmail.com',
                'password' => 'password'
            ],

            
            [
                'nama' => 'Angger',
                'alamat' => 'pml',
                'no_hp' => "089763454345",
                'role' => 'pasien',
                'email' => 'ayam@gmail.com',
                'password' => 'password'
            ]
            ];
            foreach($data as $d){
                User::create([
                    'nama' => $d['nama'],
                    'email' => $d['email'],
                    'password' => $d['password'],
                    'alamat' => $d['alamat'],
                    'no_hp' => $d['no_hp'],
                    'role' => $d['role'],

                ]);
            }
=======
                'nama' => 'Novriansyah Afqi',
                'alamat' => 'Jl. Bulustalan',
                'no_hp' => '085312121212',
                'role' => 'dokter',
                'email' => 'afqi@gmail.com',
                'password' => 'password',
            ],
            [
                'nama' => 'Arya',
                'alamat' => 'Jl. Pamularsih',
                'no_hp' => '085312133334',
                'role' => 'pasien',
                'email' => 'arya@gmail.com',
                'password' => 'password',
            ],
            [
                'nama' => 'Akhmadi',
                'alamat' => 'Jl. Pamularsih',
                'no_hp' => '08531646464',
                'role' => 'pasien',
                'email' => 'akhmadi@gmail.com',
                'password' => 'password',
            ],
            [
                'nama' => 'Dimas',
                'alamat' => 'Jl. Pamularsih',
                'no_hp' => '08531121212',
                'role' => 'dokter',
                'email' => 'dimas@gmail.com',
                'password' => 'password',
            ],
        ];

        foreach($data as $d){
            User::create([
                'nama' => $d['nama'],
                'email' => $d['email'],
                'password' => $d['password'],
                'alamat' => $d['alamat'],
                'no_hp' => $d['no_hp'],
                'role' => $d['role'],
            ]);
        }
>>>>>>> 13631e53cc77e502521656cb681b8d0d87f456ef
    }
}
