@extends('root')

@section('content')
<div class="container py-5">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="text-primary">Dashboard Admin</h1>
    <form method="POST" action="{{ route('logout') }}">
      @csrf
      <button type="submit" class="btn btn-danger">Logout</button>
    </form>
  </div>

  <div class="mb-3 text-end">
    <a href="{{ route('berita.tambah') }}" class="btn btn-primary">+ Berita Baru</a>
  </div>

  <div class="table-responsive">
    <table class="table table-bordered table-striped align-middle">
      <thead class="table-primary">
        <tr>
          <th>No</th>
          <th>Gambar</th>
          <th>Judul</th>
          <th>Tanggal</th>
          <th>Status</th>
          <th class="text-center">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($news as $berita)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>
            <img src="{{ asset($berita->gambar ? 'storage/' . $berita->gambar : 'images/perpus.jpg') }}"
                 alt="Gambar"
                 class="img-thumbnail"
                 style="height: 100px; width: 150px; object-fit: cover;">
          </td>
          <td>{{ $berita->judul }}</td>
          <td>{{ $berita->created_at->addHours(7)->translatedFormat('d F Y H:i:s') }}</td>
          <td>
            <span class="badge {{ $berita->is_published ? 'bg-success' : 'bg-warning text-dark' }}">
              {{ $berita->is_published ? 'Dipublikasikan' : 'Draft' }}
            </span>
          </td>
          <td>
            <div class="d-flex flex-column gap-1 text-center">
              @if ($berita->is_published)
                <form action="{{ route('berita.unpublish', $berita) }}" method="POST">
                  @csrf
                  @method('PUT')
                  <button type="submit" class="btn btn-sm btn-warning">Kembalikan ke draft</button>
                </form>
              @else
                <a href="{{ route('berita.preview', $berita) }}" class="btn btn-sm btn-info text-white">Publish</a>
              @endif

              <a href="{{ route('berita.edit', $berita) }}" class="btn btn-sm btn-secondary">Edit</a>

              <form action="{{ route('berita.destroy', $berita) }}" method="POST" onsubmit="return confirm('Yakin mau menghapus?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger">Hapus Postingan Ini</button>
              </form>
            </div>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
