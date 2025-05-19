@extends('layouts.app')

@section('title', 'Manajemen Berita')

@section('content')
<div class="container py-4">
    <h3 class="fw-bold mb-3">Manajemen Berita</h3>

    <div class="mb-3 text-end">
        <a href="{{ route('admin.berita.create') }}" class="btn btn-primary">+ Tambah Berita</a>
    </div>

    <div class="table-responsive shadow-sm">
        <table class="table table-bordered align-middle">
            <thead class="table-light">
                <tr>
                    <th>#</th>
                    <th>Judul</th>
                    <th>Kategori</th>
                    <th>Tanggal</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($berita as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->judul }}</td>
                        <td>{{ $item->kategori->nama ?? '-' }}</td>
                        <td>{{ $item->created_at->format('d M Y') }}</td>
                        <td>
                            <img src="{{ asset('storage/' . $item->gambar) }}" width="80" class="rounded">
                        </td>
                        <td>
                            <a href="{{ route('admin.berita.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('admin.berita.destroy', $item->id) }}" method="POST" class="d-inline"
                                  onsubmit="return confirm('Yakin ingin menghapus berita ini?')">
                                @csrf @method('DELETE')
                                <button class="btn btn-sm btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="6" class="text-center">Tidak ada data berita.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
