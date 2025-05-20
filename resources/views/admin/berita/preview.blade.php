@extends('root')

@section('title', 'Preview Berita')
@section('content')
  <div class="container p-4">
    <div class="card rounded p-4 shadow-sm">
      <h1 class="text-primary mb-3 text-2xl font-semibold">{{ $berita->judul }}</h1>

      <div class="mb-4 w-full">
        <img src="{{ asset($berita->gambar ? 'storage/' . $berita->gambar : 'images/perpus.jpg') }}" class="img-fluid object-fit-cover rounded" alt="Gambar Berita" style="max-height: 300px;">
      </div>

      <div class="text-muted mb-2">
        <small>Dibuat pada: {{ $berita->created_at->addHours(7)->translatedFormat('d F Y H:i') }}</small>
      </div>

      <div class="mb-4">
        {!! $berita->isi !!}
      </div>

      <div class="d-flex justify-content-end">
        <form action="{{ route('berita.publish', ['berita' => $berita]) }}" method="POST">
          @csrf
          @method('PUT')
          <button type="submit" class="btn btn-primary">Publikasikan Sekarang!</button>
        </form>
      </div>
    </div>
  </div>
@endsection
