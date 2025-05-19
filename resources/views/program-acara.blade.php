@extends('layouts.app')

@section('title', 'Program Acara')

@section('content')
<section class="py-5">
    <div class="container">
        <h2 class="fw-bold text-center mb-4">Jadwal Program Acara</h2>

        <div class="row justify-content-center mb-4">
            <div class="col-md-6">
                <form method="GET" action="{{ url('/program-acara') }}">
                    <select name="hari" class="form-select" onchange="this.form.submit()">
                        <option value="">Pilih Hari</option>
                        @foreach(['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'] as $hari)
                            <option value="{{ $hari }}" {{ request('hari') == $hari ? 'selected' : '' }}>
                                {{ $hari }}
                            </option>
                        @endforeach
                    </select>
                </form>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-hover shadow-sm">
                <thead class="table-primary">
                    <tr>
                        <th>Hari</th>
                        <th>Waktu</th>
                        <th>Nama Program</th>
                        <th>Deskripsi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($programs as $program)
                        <tr>
                            <td>{{ $program->hari }}</td>
                            <td>{{ $program->jam_mulai }} - {{ $program->jam_selesai }}</td>
                            <td><strong>{{ $program->nama_program }}</strong></td>
                            <td>{{ $program->deskripsi }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center">Belum ada jadwal untuk hari ini.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    
</section>
@endsection
