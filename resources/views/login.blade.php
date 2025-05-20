@extends('root')

@section('content')
  <div class="container">
    <h1>login atmin</h1>
    <div>
      <form method="POST" action="{{ route('login.post') }}">
        @csrf
        @session('failed')
          <p class="text-2xl text-red-500">
            {{ session('failed') }}
          </p>
        @endsession
        <div>
          <label for="username">Username:</label>
          <input type="text" id="username" name="username" required class="border border-black">
        </div>
        <div>
          <label for="password">Password:</label>
          <input type="password" id="password" name="password" required class="border border-black">
        </div>
        <div>
          <button type="submit" class="border border-black px-4 py-2">Login</button>
        </div>
      </form>
    </div>
  </div>
@endsection
