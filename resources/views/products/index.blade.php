@extends('layouts.app')

@section('content')
    <div class="hero-section">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1>Album Musik Asik</h1>
        </div>
    </div>

    <div class="container">
        <h1 class="text-warning">Daftar Album Band</h1>
        <a href="{{ route('products.create') }}" class="btn btn-warning mb-3">Tambah Album</a>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-dark table-hover table-responsive">
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Band</th>
                    <th>Tahun</th>
                    <th>Genre</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->judul }}</td>
                        <td>{{ $product->band }}</td>
                        <td>{{ $product->tahun }}</td>
                        <td>{{ $product->genre }}</td>
                        <td>Rp{{ number_format($product->harga, 0, ',', '.') }}</td>
                        <td>
                            <a href="{{ route('products.edit', $product) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('products.destroy', $product) }}" method="POST"
                                style="display:inline-block">
                                @csrf @method('DELETE')
                                <button class="btn btn-danger btn-sm"
                                    onclick="return confirm('Kamu yakin ining hapus album ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
