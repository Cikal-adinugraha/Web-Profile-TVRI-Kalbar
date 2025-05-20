@extends('root')

@section('title', 'Preview Berita')
@section('content')
  <div class="container p-4">
    <div class="card shadow-sm p-4 rounded">
      <h1 class="text-2xl font-semibold mb-3 text-primary">{{ $berita->judul }}</h1>

      @if ($berita->gambar)
        <div class="mb-4">
          <img src="{{ asset('storage/' . $berita->gambar) }}" class="img-fluid rounded" alt="Gambar Berita" style="max-width: 100%; height: auto;">
        </div>
      @endif

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
          <button type="submit" class="btn btn-primary">Udah yakin? Publish</button>
        </form>
      </div>
    </div>
  </div>
@endsection
