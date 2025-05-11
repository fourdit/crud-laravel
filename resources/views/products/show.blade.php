@extends('layouts.app')

@section('title', 'Detail Produk')

@section('content')
<div class="card">
    <div class="card-header">
        <h5>Detail Produk</h5>
    </div>
    <div class="card-body">
        <div class="mb-3">
            <label class="form-label">Nama Produk</label>
            <p class="form-control-static">{{ $product->name }}</p>
        </div>
        <div class="mb-3">
            <label class="form-label">Deskripsi</label>
            <p class="form-control-static">{{ $product->description ?? '-' }}</p>
        </div>
        <div class="mb-3">
            <label class="form-label">Harga</label>
            <p class="form-control-static">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
        </div>
        <div class="mb-3">
            <label class="form-label">Stok</label>
            <p class="form-control-static">{{ $product->stock }}</p>
        </div>
        <div class="mb-3">
            <label class="form-label">Dibuat Pada</label>
            <p class="form-control-static">{{ $product->created_at->format('d M Y H:i') }}</p>
        </div>
        <div class="mb-3">
            <label class="form-label">Diperbarui Pada</label>
            <p class="form-control-static">{{ $product->updated_at->format('d M Y H:i') }}</p>
        </div>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
</div>
@endsection