@extends('root')

@section('content')
  <div class="login-container">
    <div class="login-card">
      <h2 class="login-title text-center">Login Admin</h2>
      <form method="POST" action="{{ route('login.post') }}">
        @csrf
        @if(session('failed'))
          <div class="alert alert-danger text-center">
            {{ session('failed') }}
          </div>
        @endif

        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input type="text" id="username" name="username" required class="form-control">
        </div>

        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" id="password" name="password" required class="form-control">
        </div>

        <div class="d-grid mb-3">
          <button type="submit" class="btn btn-primary">Login</button>
        </div>

        <div class="text-center">
          <small class="text-muted">© {{ date('Y') }} TVRI Kalimantan Barat</small>
        </div>
      </form>
    </div>
  </div>
@endsection
