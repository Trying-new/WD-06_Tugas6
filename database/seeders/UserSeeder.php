<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
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
    }
}
