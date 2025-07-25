<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Product;
use App\Models\Kategori;
use App\Models\Province;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Database\Factories\KategoriFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // DB::unprepared(
        //     file_get_contents(__DIR__ . '/province.sql')
        // );

        // User::factory()->create([
        //     'name' => 'Admin',
        //     'email' => 'admin@gmail.com',
        //     'telp' => '085894020453',
        //     'roles' => 'admin'
        // ]);

        User::factory()->create([
            'name' => 'Agen',
            'email' => 'agen@gmail.com',
            'telp' => '089513270523',
            'roles' => 'agen'
        ]);

        // Kategori::factory()->create();

        // Product::factory()->create();
    }
}
