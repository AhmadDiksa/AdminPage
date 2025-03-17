@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detail Produk</h1>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $product->name }}</h5>
                <p class="card-text"><strong>SKU:</strong> {{ $product->sku }}</p>
                <p class="card-text"><strong>Harga:</strong> {{ number_format($product->price, 2) }}</p>
                <p class="card-text"><strong>Deskripsi:</strong> {{ $product->description ?? 'Tidak ada deskripsi' }}</p>

                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary">Edit</a>
                <a href="{{ route('products.index') }}" class="btn btn-secondary">Kembali ke Daftar</a>
            </div>
        </div>
    </div>
@endsection