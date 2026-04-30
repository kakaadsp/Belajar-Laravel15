<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Mengisi tabel_produk dengan data dummy untuk demo MVC
     */
    public function run(): void
    {
        $products = [
            [
                'nama_produk' => 'Laptop ASUS VivoBook',
                'stok'        => 15,
                'harga'       => 8500000,
            ],
            [
                'nama_produk' => 'Laptop Lenovo ThinkPad',
                'stok'        => 10,
                'harga'       => 12000000,
            ],
            [
                'nama_produk' => 'Laptop HP Pavilion',
                'stok'        => 20,
                'harga'       => 9000000,
            ],
            [
                'nama_produk' => 'Laptop Acer Aspire',
                'stok'        => 8,
                'harga'       => 7500000,
            ],
            [
                'nama_produk' => 'Laptop MacBook Air M2',
                'stok'        => 5,
                'harga'       => 18000000,
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
