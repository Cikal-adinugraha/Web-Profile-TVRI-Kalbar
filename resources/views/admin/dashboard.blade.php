@extends('index')

@section('content')
  <h1>ini halaman dashboard atmin</h1>
  <h2>cuma bisa diakses kalo user dah login</h2>
  <form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit" class="border border-black px-4 py-2">Logout</button>
  </form>
@endsection
