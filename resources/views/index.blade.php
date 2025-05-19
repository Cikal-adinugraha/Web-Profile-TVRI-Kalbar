@extends('layouts.app')

@section('title', 'Beranda')

@section('content')

<!-- Hero Section -->
<section class="bg-primary text-white text-center py-5">
    <div class="container">
        <h1 class="display-4 fw-bold">Selamat Datang di TVRI Kalimantan Barat</h1>
        <p class="lead">Media Publik yang Menyajikan Informasi, Edukasi, dan Hiburan Berkualitas</p>
        <a href="{{ url('/live-streaming') }}" class="btn btn-light btn-lg mt-3">Tonton Live Streaming</a>
    </div>
</section>

<!-- Tentang TVRI -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="{{ asset('images/tvri.png') }}" class="img-fluid rounded shadow" alt="TVRI Kalbar">
            </div>
            <div class="col-md-6">
                <h2 class="fw-bold">Tentang Kami</h2>
                <p>TVRI Kalimantan Barat adalah stasiun televisi publik regional yang menyampaikan berbagai informasi penting dan hiburan lokal berkualitas tinggi. Sebagai bagian dari TVRI Nasional, kami memiliki tanggung jawab untuk mencerdaskan kehidupan bangsa melalui siaran yang inspiratif.</p>
                <a href="{{ url('/sejarah') }}" class="btn btn-primary mt-3">Baca Selengkapnya</a>
            </div>
        </div>
    </div>
</section>

<!-- Program Unggulan -->
<section class="py-5">
    <div class="container text-center">
        <h2 class="fw-bold mb-4">Program Unggulan</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card shadow h-100">
                    <div class="card-body">
                        <h5 class="card-title">Berita Kalbar</h5>
                        <p class="card-text">Laporan langsung dan terkini dari berbagai daerah di Kalimantan Barat.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card shadow h-100">
                    <div class="card-body">
                        <h5 class="card-title">Kalbar Budaya</h5>
                        <p class="card-text">Program yang mengangkat budaya lokal, tradisi, dan kearifan lokal masyarakat Kalbar.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card shadow h-100">
                    <div class="card-body">
                        <h5 class="card-title">Dialog Publik</h5>
                        <p class="card-text">Forum dialog dengan tokoh masyarakat, pemerintah, dan komunitas lokal.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Berita Terbaru -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="fw-bold text-center mb-4">Berita Terbaru</h2>
        <div class="row">
            @foreach($berita_terbaru as $berita)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow">
                        <img src="{{ asset('storage/' . $berita->gambar) }}" class="card-img-top" alt="{{ $berita->judul }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $berita->judul }}</h5>
                            <p class="card-text">{{ Str::limit(strip_tags($berita->isi), 100) }}</p>
                            <a href="{{ url('/berita/' . $berita->slug) }}" class="btn btn-sm btn-primary">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
