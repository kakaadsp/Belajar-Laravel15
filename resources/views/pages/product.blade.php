@extends('layouts.master')

@section('content')
<div class="card">
    <div class="card-header">Daftar Produk</div>
    <div class="card-body">

        {{-- Informasi Toko (data dari Controller) --}}
        <div class="alert alert-primary">
            <strong>Nama Toko:</strong> {{ $data_toko['nama_toko'] }} <br>
            <strong>Alamat:</strong> {{ $data_toko['alamat'] }} <br>
            <strong>Tipe:</strong> {{ $data_toko['type'] }}
        </div>

        <hr>

        <a href="/product/tambah" class="btn btn-primary mb-3">Tambah Data</a>

        {{-- [V] — View menampilkan data yang dikirim dari Controller (yang diambil dari Model/DB) --}}
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Stok</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($products as $index => $product)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $product->nama_produk }}</td>
                    <td>{{ $product->stok }}</td>
                    <td>Rp {{ number_format($product->harga, 0, ',', '.') }}</td>
                    <td>
                        <button class="btn btn-warning btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center">Belum ada data produk.</td>
                </tr>
                @endforelse
            </tbody>
        </table>

    </div>
</div>
@endsection