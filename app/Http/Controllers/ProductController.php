<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // ← Import Model (M dalam MVC)

class ProductController extends Controller
{
    /**
     * ALUR MVC:
     * Route → Controller (C) → Model (M) → Database → View (V)
     */
    public function get_product()
    {
        // Informasi toko (bisa dipindah ke tabel tersendiri nantinya)
        $data_toko = [
            'nama_toko' => 'Kaka Dimas',
            'alamat'    => 'Sidokare Indah',
            'type'      => 'Toko Laptop'
        ];

        // [M] — Controller memanggil Model untuk ambil data dari database
        $products = Product::all();

        // [C→V] — Kirim data ke View
        return view('pages.product', compact('data_toko', 'products'));
    }

    public function tambahProduct()
    {
        return view('pages.add_product');
    }
}