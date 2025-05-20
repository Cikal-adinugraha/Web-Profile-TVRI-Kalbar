@extends('root')

@section('content')
  <div class="container p-4">
    <h1 class="text-primary">Tambah Berita</h1>
    <div class="mt-4">
      <form action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
          <label for="judul" class="mb-2 block text-sm font-bold text-gray-700">Judul:</label>
          <input type="text" name="judul" id="judul" class="w-full rounded-md border border-gray-300 p-2">
        </div>
        <div class="mb-4">
          <label for="isi" class="mb-2 block text-sm font-bold text-gray-700">Isi:</label>
          <input type="hidden" name="isi" id="isi">
          <trix-editor input="isi"></trix-editor>
        </div>
        <div class="mb-4">
          <label for="gambar" class="mb-2 block text-sm font-bold text-gray-700">Gambar:</label>
          <input type="file" name="gambar" id="gambar" class="w-full rounded-md border border-gray-300 p-2">
          <div>
            <img src="#" alt="Preview Gambar" id="preview" class="hidden h-40 w-56 object-cover">
          </div>
        </div>
        <button type="submit" class="rounded bg-blue-500 px-4 py-2 font-bold text-white hover:bg-blue-700">Simpan</button>
      </form>
    </div>
  </div>
  <script>
    const fileInput = document.getElementById('gambar');
    const preview = document.getElementById('preview');

    fileInput.addEventListener('change', function() {
      const [file] = fileInput.files;
      if (file) {
        preview.src = URL.createObjectURL(file);
        preview.classList.remove('hidden');
      }
    });
  </script>
@endsection
