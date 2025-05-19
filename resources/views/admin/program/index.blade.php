@extends('layouts.app')

@section('title', 'Manajemen Program')

@section('content')
<div class="container py-4">
    <h3 class="fw-bold mb-3">Manajemen Program Acara</h3>

    <div class="mb-3 text-end">
        <a href="{{ route('admin.program.create') }}" class="btn btn-primary">+ Tambah Program</a>
    </div>

    <div class="table-responsive shadow-sm">
        <table class="table table-bordered align-middle">
            <thead class="table-light">
                <tr>
                    <th>#</th>
                    <th>Hari</th>
                    <th>Jam</th>
                    <th>Nama Program</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($programs as $program)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $program->hari }}</td>
                        <td>{{ $program->jam_mulai }} - {{ $program->jam_selesai }}</td>
                        <td>{{ $program->nama_program }}</td>
                        <td>{{ Str::limit($program->deskripsi, 80) }}</td>
                        <td>
                            <a href="{{ route('admin.program.edit', $program->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('admin.program.destroy', $program->id) }}" method="POST" class="d-inline"
                                  onsubmit="return confirm('Hapus program ini?')">
                                @csrf @method('DELETE')
                                <button class="btn btn-sm btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="6" class="text-center">Belum ada program acara.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
