<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::insert([
            [
                'judul' => 'Kisah Klasik Untuk Masa Depan',
                'band' => 'Sheila On 7',
                'tahun' => 2000,
                'genre' => 'Pop Rock',
                'harga' => 45000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Nevermind',
                'band' => 'Nirvana',
                'tahun' => 1991,
                'genre' => 'Grunge',
                'harga' => 50000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Something Else',
                'band' => 'The Cranberries',
                'tahun' => 2017,
                'genre' => 'Pop Rock',
                'harga' => 48000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Laskar Cinta',
                'band' => 'Dewa 19',
                'tahun' => 2004,
                'genre' => 'Rock',
                'harga' => 60000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Ombak Banyu Asmara',
                'band' => 'Panturas',
                'tahun' => 2021,
                'genre' => 'Surf Rock',
                'harga' => 47000,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
