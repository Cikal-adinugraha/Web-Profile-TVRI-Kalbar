@extends('root')

@section('content')
<div class="container py-5">
  <div class="d-flex justify-content-end mb-4">
    @guest
      <a href="{{ route('login.get') }}" class="btn btn-outline-primary">Login</a>
    @else
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="btn btn-danger">Logout</button>
      </form>
    @endguest
  </div>

  <h1 class="mb-4 text-primary">Berita Terbaru</h1>

  @empty($news->toArray())
    <p class="text-muted">Tidak ada berita terbaru saat ini.</p>
  @else
    <div class="row g-4">
      @foreach ($news as $berita)
        <div class="col-md-6 col-lg-4">
          <div class="card h-100 shadow-sm border-0">
            <img src="{{ asset($berita->gambar ? 'storage/' . $berita->gambar : 'images/perpus.jpg') }}"
                 alt="{{ $berita->judul }}"
                 class="card-img-top object-fit-cover" style="height: 180px;">

            <div class="card-body d-flex flex-column">
              <h5 class="card-title text-primary">{{ $berita->judul }}</h5>
              <h6 class="card-subtitle mb-2 text-muted">
                oleh {{ $berita->user->name }} &mdash;
                {{ $berita->created_at->translatedFormat('d F Y') }}
              </h6>
              <p class="card-text">{!! Str::limit($berita->isi, 100) !!}</p>
              <a href="{{ route('berita.show', ['berita' => $berita]) }}" class="mt-auto btn btn-outline-primary btn-sm">
                Baca Selengkapnya
              </a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  @endempty
</div>
@endsection
