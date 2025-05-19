@extends('layouts.app')

@section('title', 'Berita')

@section('content')
<section class="py-5">
    <div class="container">
        <h2 class="fw-bold text-center mb-4">Berita Terbaru</h2>

        {{-- Pencarian dan Filter Kategori --}}
        <form method="GET" action="{{ url('/berita') }}" class="row mb-4">
            <div class="col-md-8">
                <input type="text" name="cari" class="form-control" placeholder="Cari berita..." value="{{ request('cari') }}">
            </div>
            <div class="col-md-4">
                <select name="kategori" class="form-select" onchange="this.form.submit()">
                    <option value="">Semua Kategori</option>
                    @foreach($kategori_list as $kategori)
                        <option value="{{ $kategori->slug }}" {{ request('kategori') == $kategori->slug ? 'selected' : '' }}>
                            {{ $kategori->nama }}
                        </option>
                    @endforeach
                </select>
            </div>
        </form>

        {{-- Daftar Berita --}}
        <div class="row">
            @forelse($berita as $item)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="{{ asset('storage/' . $item->gambar) }}" class="card-img-top" alt="{{ $item->judul }}">
                        <div class="card-body">
                            <small class="text-muted">{{ $item->created_at->translatedFormat('d F Y') }}</small>
                            <h5 class="card-title mt-2">{{ $item->judul }}</h5>
                            <p class="card-text">{{ Str::limit(strip_tags($item->isi), 100) }}</p>
                            <a href="{{ url('/berita/' . $item->slug) }}" class="btn btn-sm btn-outline-primary">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-center">Belum ada berita ditemukan.</p>
            @endforelse
        </div>

        {{-- Paginasi --}}
        <div class="d-flex justify-content-center mt-4">
            {{ $berita->links() }}
        </div>
    </div>
</section>
@endsection
