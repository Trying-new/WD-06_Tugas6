<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

<<<<<<< HEAD
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            // UserSeeder::class
            // PeriksaSeeder::class
            DetailPeriksaSeeder::class
            // ObatSeeder::class
=======
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
>>>>>>> 13631e53cc77e502521656cb681b8d0d87f456ef
        ]);
    }
}
