@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-white">Edit Album: {{ $product->judul }}</h1>

        <form action="{{ route('products.update', $product) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="judul" class="form-label text-white">Judul Album</label>
                <input type="text" class="form-control bg-dark text-white" name="judul" value="{{ old('judul', $product->judul) }}" required>
            </div>

            <div class="mb-3">
                <label for="band" class="form-label text-white">Nama Band</label>
                <input type="text" class="form-control bg-dark text-white" name="band" value="{{ old('band', $product->band) }}"
                    required>
            </div>

            <div class="mb-3">
                <label for="tahun" class="form-label text-white">Tahun Rilis</label>
                <input type="number" class="form-control bg-dark text-white" name="tahun" value="{{ old('tahun', $product->tahun) }}"
                    required>
            </div>

            <div class="mb-3">
                <label for="genre" class="form-label text-white">Genre</label>
                <input type="text" class="form-control bg-dark text-white" name="genre" value="{{ old('genre', $product->genre) }}">
            </div>

            <div class="mb-3">
                <label for="harga" class="form-label text-white">Harga (Rp)</label>
                <input type="number" class="form-control bg-dark text-white" name="harga" step="0.01"
                    value="{{ old('harga', $product->harga) }}" required>
            </div>

            <button type="submit" class="btn btn-warning">Perbarui</button>
            <a href="{{ route('products.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection
