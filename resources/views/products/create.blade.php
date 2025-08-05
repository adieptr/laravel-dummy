@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-white">Tambah Album</h1>

        <form action="{{ route('products.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="judul" class="form-label text-white">Judul Album</label>
                <input type="text" class="form-control bg-dark text-white" name="judul" value="{{ old('judul') }}" required>
            </div>

            <div class="mb-3">
                <label for="band" class="form-label text-white">Nama Band</label>
                <input type="text" class="form-control bg-dark text-white" name="band" value="{{ old('band') }}" required>
            </div>

            <div class="mb-3">
                <label for="tahun" class="form-label text-white">Tahun Rilis</label>
                <input type="number" class="form-control bg-dark text-white" name="tahun" value="{{ old('tahun') }}" required>
            </div>

            <div class="mb-3">
                <label for="genre" class="form-label text-white">Genre</label>
                <input type="text" class="form-control bg-dark text-white" name="genre" value="{{ old('genre') }}">
            </div>

            <div class="mb-3">
                <label for="harga" class="form-label text-white">Harga (Rp)</label>
                <input type="number" class="form-control bg-dark text-white" name="harga" step="0.01" value="{{ old('harga') }}"
                    required>
            </div>

            <button type="submit" class="btn btn-warning">Simpan</button>
            <a href="{{ route('products.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection
