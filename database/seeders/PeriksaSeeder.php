<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
<<<<<<< HEAD
use App\Models\Periksa;
=======
>>>>>>> 13631e53cc77e502521656cb681b8d0d87f456ef

class PeriksaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
<<<<<<< HEAD
   
     public function run(): void
     {
         $data = [
             [
                 'id_pasien' => 3,
                 'id_dokter' => 1,
                 'catatan' => "kanker",
                 'biaya_periksa' => 1000000
             ],
 
             
             [
                'id_pasien' => 4,
                'id_dokter' => 2,
                'catatan' => "hernia",
                'biaya_periksa' => 200000
            ],
 
             
             
             ];
             foreach($data as $d){
                 Periksa::create([
                     'id_pasien' => $d['id_pasien'],
                     'id_dokter' => $d['id_dokter'],
                     'catatan' => $d['catatan'],
                     'biaya_periksa' => $d['biaya_periksa'],
                     
 
                 ]);
             }
     }
 }
 
=======
    public function run(): void
    {
        $data = [
            [
                'id_pasien' => 3,
                'id_dokter' => 1,
                'catatan' => 'periksa pertama',
                'biaya_periksa' => 50000,
            ],
            [
                'id_pasien' => 4,
                'id_dokter' => 2,
                'catatan' => 'periksa pertama Lagi',
                'biaya_periksa' => 60000,
            ],
        ];

        foreach($data as $d){
            Periksa::create([
                'id_pasien' => $d['id_pasien'],
                'id_dokter' => $d['id_dokter'],
                'catatan' => $d['catatan'],
                'biaya_periksa' => $d['biaya_periksa'],
            ]);
        }
    }
}
>>>>>>> 13631e53cc77e502521656cb681b8d0d87f456ef
