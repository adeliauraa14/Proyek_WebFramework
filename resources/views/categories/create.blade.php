@extends('layouts.app')

@section('title', 'Tambah Kategori')

@section('content')
<div class="card">
    <h1>Tambah Kategori</h1>
    <p style="color:#6b7280;">Isi data kategori baru.</p>

    <form action="{{ route('categories.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Nama Kategori</label>
            <input type="text"
                   id="name"
                   name="name"
                   value="{{ old('name') }}"
                   placeholder="Contoh: Kamera"
                   required>
            @error('name')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="description">Deskripsi</label>
            <textarea id="description"
                      name="description"
                      rows="5"
                      placeholder="Masukkan deskripsi kategori">{{ old('description') }}</textarea>
            @error('description')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn">Simpan</button>
        <a href="{{ route('categories.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
