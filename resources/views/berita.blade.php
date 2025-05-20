@extends('root')

@section('content')
<div class="container py-5">
  <a href="/" class="btn btn-outline-secondary mb-4">← Kembali ke Halaman Utama</a>

  <div class="card shadow-sm border-0">
    <div class="card-body">
      <h1 class="card-title text-primary mb-3">{{ $berita->judul }}</h1>
      <h6 class="card-subtitle text-muted mb-4">
        oleh {{ $berita->user->name ?? 'Admin' }} pada {{ $berita->created_at->translatedFormat('d F Y') }}
      </h6>

      <div class="text-center mb-4">
        <img src="{{ asset($berita->gambar ? 'storage/' . $berita->gambar : 'images/perpus.jpg') }}"
            alt="{{ $berita->judul }}"
            class="img-fluid rounded object-fit-cover"
            style="max-height: 300px;">
      </div>

      <div class="card-text">{!! $berita->isi !!}</div>
    </div>
  </div>
</div>
@endsection
