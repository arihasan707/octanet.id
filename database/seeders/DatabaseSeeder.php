<?php

namespace Database\Seeders;

use App\Models\Kategori;
use App\Models\Product;
use App\Models\User;
use Database\Factories\KategoriFactory;
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

        User::factory()->create([
            'name' => 'Agen 1',
            'email' => 'agen1@gmail.com',
            'roles' => 'agen'
        ]);

        User::factory()->create([
            'name' => 'Agen 2',
            'email' => 'agen2@gmail.com',
            'roles' => 'agen'
        ]);

        User::factory()->create([
            'name' => 'Agen 3',
            'email' => 'agen3@gmail.com',
            'roles' => 'agen'
        ]);

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'roles' => 'admin'
        ]);

        // Kategori::factory()->create();

        // Product::factory()->create();
    }
}
