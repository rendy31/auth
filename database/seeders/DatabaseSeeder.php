<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        
        // Membuat pengguna admin
        \App\Models\User::factory()->create([
            'name' => 'Admin Rendy',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345'), // Menggunakan bcrypt untuk mengenkripsi password
            'roles' => 'admin',
        ]);

        // Membuat pengguna biasa
        \App\Models\User::factory()->create([
            'name' => 'User Rendy',
            'email' => 'user@gmail.com',
            'password' => bcrypt('12345'), // Menggunakan bcrypt untuk mengenkripsi password
            'roles' => 'user',
        ]);
    }
}
