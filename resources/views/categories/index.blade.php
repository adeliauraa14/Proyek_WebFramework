@extends('layouts.app')

@section('title', 'Daftar Kategori')

@section('content')
<div class="card">
    <div style="display:flex; justify-content:space-between; align-items:center; gap:15px;">
        <div>
            <h1 style="margin:0 0 5px;">Daftar Kategori</h1>
            <p style="margin:0; color:#6b7280;">Kelola kategori barang pada sistem penyewaan.</p>
        </div>

        <a href="{{ route('categories.create') }}" class="btn">
            + Tambah Kategori
        </a>
    </div>
</div>

<div class="card">
    @if ($categories->isEmpty())
        <p>Belum ada kategori.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->description ?: '-' }}</td>
                        <td>
                            <a href="{{ route('categories.show', $category) }}" class="btn btn-secondary">Detail</a>
                            <a href="{{ route('categories.edit', $category) }}" class="btn">Ubah</a>

                            <form action="{{ route('categories.destroy', $category) }}"
                                  method="POST"
                                  style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
