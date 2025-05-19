@extends('layouts.app')

@section('title', '404 – Halaman Tidak Ditemukan')

@section('content')
<section class="d-flex flex-column align-items-center justify-content-center text-center" style="min-height:60vh">
    <div>
        <h1 class="display-1 fw-bold text-primary">404</h1>
        <h2 class="fw-semibold mb-3">Maaf, halaman yang Anda cari tidak ditemukan.</h2>
        <p class="mb-4">
            Mungkin tautan salah ketik atau kontennya sudah dipindahkan.<br>
            Silakan kembali ke beranda atau gunakan navigasi di atas.
        </p>
        <a href="{{ url('/') }}" class="btn btn-primary px-4">Kembali ke Beranda</a>
    </div>
    <style>
        /*Error style*/
        .error-404-bg {
            background: url('/images/404-tvri.svg') center/contain no-repeat;
        }
    </style>
</section>
@endsection
