@extends('layouts.app')

@section('title', 'Dashboard Admin')

@section('content')
<section class="py-4">
    <div class="container">
        <h3 class="fw-bold mb-4">Dashboard Admin</h3>
        
        <div class="row">
            <div class="col-md-3 mb-3">
                <div class="card shadow-sm text-center border-0">
                    <div class="card-body">
                        <h5 class="card-title">Berita</h5>
                        <h2>{{ $totalBerita ?? 0 }}</h2>
                        <a href="{{ route('admin.berita.index') }}" class="btn btn-sm btn-outline-primary mt-2">Kelola</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card shadow-sm text-center border-0">
                    <div class="card-body">
                        <h5 class="card-title">Program</h5>
                        <h2>{{ $totalProgram ?? 0 }}</h2>
                        <a href="{{ route('admin.program.index') }}" class="btn btn-sm btn-outline-primary mt-2">Kelola</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card shadow-sm text-center border-0">
                    <div class="card-body">
                        <h5 class="card-title">Kategori</h5>
                        <h2>{{ $totalKategori ?? 0 }}</h2>
                        <a href="{{ route('admin.kategori.index') }}" class="btn btn-sm btn-outline-primary mt-2">Kelola</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card shadow-sm text-center border-0">
                    <div class="card-body">
                        <h5 class="card-title">User</h5>
                        <h2>{{ $totalUser ?? 0 }}</h2>
                        <a href="{{ route('admin.user.index') }}" class="btn btn-sm btn-outline-primary mt-2">Kelola</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection
