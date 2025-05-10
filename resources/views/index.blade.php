@extends('root')

@section('content')
  <div class="container p-4">
    @guest
      <a href="{{ route('login.get') }}" class="border border-black px-4 py-2">Loginkan</a>
    @else
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="border border-black px-4 py-2">Logout</button>
      </form>
    @endguest
    <div class="mt-4">
      <h1>berita terbaru</h1>
      <div class="mt-6 space-y-4">
        @empty($news->toArray())
          <p>Tidak ada berita terbaru</p>
        @else
          @foreach ($news as $berita)
            <div>
              <h2 class="text-xl font-bold">{{ $berita->judul }}</h2>
              <h6>oleh {{ $berita->user->name }} pada tanggal {{ $berita->created_at->translatedFormat('d F Y') }}</h6>
              <img src="{{ asset($berita->gambar ? 'storage/' . $berita->gambar : 'images/perpus.jpg') }}" alt="{{ $berita->judul }}" class="h-40 w-72">
              <p>{!! Str::limit($berita->isi, 100) !!}</p>
              <a href="{{ route('berita.show', ['berita' => $berita]) }}">Baca Selengkapnya</a>
            </div>
          @endforeach
        @endempty
      </div>
    </div>
  </div>
@endsection
