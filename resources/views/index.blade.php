@extends('root')

@section('content')
  <div class="container">
    <h1>Welcome to the Home Page</h1>
    <p>This is the main content of the home page.</p>
    @guest
      <a href="{{ route('login.get') }}" class="border border-black px-4 py-2">Loginkan</a>
    @else
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="border border-black px-4 py-2">Logout</button>
      </form>
    @endguest
  </div>
@endsection
