<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kategori_id' => 1,
            'nama' => 'Home 10Mbps',
            'layanan' => 'Internet Only',
            'kecepatan' => '10Mbps',
            'data_quota' => 'UNLIMITED NO FUP',
            'akses_perangkat' => '5 Perangkat',
            'alat_wifi' => 'Dipinjamkan',
            'biaya_pasang' => 'gratis',
            'harga' => 175000,
        ];
    }
}