<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $products = [
            [
                'name' => 'Nasi Goreng Ayam',
                'description' => 'Nasi goreng dengan potongan ayam, telur, dan bumbu khas.',
                'image_path' => 'images/nasi_goreng_ayam.jpg',
                'price' => 20000,
            ],
            [
                'name' => 'Mie Goreng Spesial',
                'description' => 'Mie goreng lezat dengan telur, sayuran, dan bumbu rempah pilihan.',
                'image_path' => 'images/mie_goreng_spesial.jpg',
                'price' => 18000,
            ],
            [
                'name' => 'Ayam Bakar',
                'description' => 'Ayam bakar dengan sambal pedas dan lalapan.',
                'image_path' => 'images/ayam_bakar.jpg',
                'price' => 25000,
            ],
            [
                'name' => 'Sate Ayam',
                'description' => 'Sate ayam dengan bumbu kacang yang lezat dan nasi lontong.',
                'image_path' => 'images/sate_ayam.jpg',
                'price' => 15000,
            ],
            [
                'name' => 'Bakso Sapi',
                'description' => 'Bakso sapi dengan kuah kaldu gurih dan tambahan mi atau bihun.',
                'image_path' => 'images/bakso_sapi.jpg',
                'price' => 12000,
            ],
        ];

        foreach ($products as $product) {
            Product::create($product + ['created_at' => now(), 'updated_at' => now()]);
        }
    }
}