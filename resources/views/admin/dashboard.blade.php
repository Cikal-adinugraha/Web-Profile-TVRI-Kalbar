@extends('root')

@section('content')
  <div class="container p-4">
    <h1>ini halaman dashboard atmin</h1>
    <form method="POST" action="{{ route('logout') }}">
      @csrf
      <button type="submit" class="border border-black px-4 py-2">Logout</button>
    </form>
    <div class="mt-4">
      <a href="{{ route('berita.tambah') }}">Berita Baru</a>
      <table>
        <thead>
          <tr>
            <th>No</th>
            <th>Gambar</th>
            <th>Judul</th>
            <th>Tanggal</th>
            <th>Status</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($news as $berita)
            <tr>
              <td class="px-6">{{ $loop->iteration }}</td>
              <th class="px-6">
                <img src="{{ asset($berita->gambar ? 'storage/' . $berita->gambar : 'images/perpus.jpg') }}" alt="Gambar" class="h-40 w-56 object-cover">
              </th>
              <th class="px-6">{{ $berita->judul }}</th>
              <th class="px-6">{{ $berita->created_at->addHours(7)->translatedFormat('d F Y h:i:s') }}</th>
              <th class="px-6">{{ $berita->is_published ? 'Sudah Dipublish' : 'Belum Dipublish' }}</th>
              <th class="px-6">
                <div>
                  @if ($berita->is_published)
                    <form action="{{ route('berita.unpublish', ['berita' => $berita]) }}" method="POST">
                      @csrf
                      @method('PUT')
                      <button type="submit">batalkan publish</button>
                    </form>
                  @else
                    <a href="{{ route('berita.preview', ['berita' => $berita]) }}">preview</a>
                  @endif
                </div>
                <div>
                  edit
                </div>
                <div>
                  hapus
                </div>
              </th>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection
