@extends('root')

@section('content')
  <div class="container p-4">
    <div>
      <form action="{{ route('berita.publish', ['berita' => $berita]) }}" method="POST">
        @csrf
        @method('PUT')
        <button type="submit">dah oke? publish</button>
      </form>
    </div>
    <div class="mt-4">
      <h1 class="text-xl font-bold">{{ $berita->judul }}</h1>

      <h6>oleh {{ $berita->user->name }} pada tanggal {{ $berita->created_at->translatedFormat('d F Y') }}</h6>
      <div class="py-6">
        <img src="{{ asset($berita->gambar ? 'storage/' . $berita->gambar : 'images/perpus.jpg') }}" alt="{{ $berita->judul }}" class="h-40 w-72">
      </div>
      <p>{!! $berita->isi !!}</p>
    </div>
  </div>
@endsection
