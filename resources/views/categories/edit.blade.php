@extends('layouts.app')

@section('title', 'Ubah Kategori')

@section('content')
<div class="card">
    <h1>Ubah Kategori</h1>
    <p style="color:#6b7280;">Perbarui data kategori.</p>

    <form action="{{ route('categories.update', $category) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Nama Kategori</label>
            <input type="text"
                   id="name"
                   name="name"
                   value="{{ old('name', $category->name) }}"
                   required>
            @error('name')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="description">Deskripsi</label>
            <textarea id="description"
                      name="description"
                      rows="5">{{ old('description', $category->description) }}</textarea>
            @error('description')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn">Simpan Perubahan</button>
        <a href="{{ route('categories.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
