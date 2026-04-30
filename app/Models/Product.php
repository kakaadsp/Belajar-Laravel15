<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Konfigurasi Tabel — sesuai nama tabel di database
    protected $table = 'tabel_produk';

    // Primary key custom
    protected $primaryKey = 'id_produk';

    // Kolom yang boleh diisi massal (mass assignment)
    protected $fillable = ['nama_produk', 'stok', 'harga'];
}