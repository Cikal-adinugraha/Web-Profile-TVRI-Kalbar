@extends('layouts.app')

@section('title', 'Sejarah')

@section('content')
<section class="py-5">
    <div class="container">
        <h2 class="fw-bold text-center mb-4">Sejarah TVRI Kalimantan Barat</h2>
        <div class="row align-items-start">
            <div class="col-md-6 mb-4">
                <img src="{{ asset('images/tvri.png') }}" class="img-fluid rounded shadow-sm" alt="Sejarah TVRI Kalbar">
            </div>
            <div class="col-md-6">
                <p class="text-justify">
                    TVRI Kalimantan Barat didirikan sebagai bagian dari komitmen pemerintah untuk menyediakan akses informasi dan pendidikan kepada masyarakat di seluruh Indonesia, termasuk wilayah Kalimantan Barat. Stasiun ini mulai beroperasi pada tahun 1962 dan sejak itu telah menjadi sumber informasi yang dapat diandalkan bagi masyarakat lokal.
                </p>
                <p>
                    Seiring perkembangan zaman, TVRI Kalbar terus berinovasi dengan menghadirkan tayangan yang lebih modern, edukatif, dan mengangkat nilai-nilai budaya lokal yang khas. Kami juga aktif dalam menyajikan berita daerah dan nasional, serta menjadi jembatan komunikasi antara pemerintah dan masyarakat.
                </p>
            </div>
        </div>

        <div class="mt-5">
            <h4 class="fw-semibold">Visi</h4>
            <p>Menjadi media publik yang terpercaya, mencerdaskan, dan mempersatukan bangsa melalui siaran berkualitas.</p>

            <h4 class="fw-semibold mt-4">Misi</h4>
            <ul>
                <li>Menyajikan program informasi yang akurat, cepat, dan berimbang.</li>
                <li>Mengembangkan program edukatif untuk semua kalangan.</li>
                <li>Menampilkan tayangan budaya dan kearifan lokal Kalimantan Barat.</li>
                <li>Mendukung pembangunan daerah melalui media komunikasi publik.</li>
            </ul>
        </div>
    </div>
</section>
@endsection
