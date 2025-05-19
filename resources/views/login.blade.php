@extends('layouts.app')

@section('title', 'Login')

@section('content')
<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white text-center">
                        <h4 class="mb-0">Login</h4>
                    </div>
                    <div class="card-body">
                        @if(session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif
                        <form method="POST" action="{{ route('login.post') }}">
                            @csrf
                            <div class="mb-3">
                              <label for="username" class="form-label">Username</label>
                              <input type="text" name="username" class="form-control" required autofocus>
                          </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Kata Sandi</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Masuk</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-muted text-center small">
                        TVRI Kalimantan Barat &copy; {{ date('Y') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
