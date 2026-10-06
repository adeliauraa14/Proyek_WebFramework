@extends('layouts.app')

@section('title', 'Detail Kategori')

@section('content')
<div class="card">
    <h1>Detail Kategori</h1>

    <div class="form-group">
        <label>Nama Kategori</label>
        <input type="text" value="{{ $category->name }}" readonly>
    </div>

    <div class="form-group">
        <label>Deskripsi</label>
        <textarea rows="5" readonly>{{ $category->description ?: '-' }}</textarea>
    </div>

    <div class="form-group">
        <label>Dibuat</label>
        <input type="text" value="{{ $category->created_at->format('d-m-Y H:i') }}" readonly>
    </div>

    <a href="{{ route('categories.edit', $category) }}" class="btn">Ubah</a>
    <a href="{{ route('categories.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
