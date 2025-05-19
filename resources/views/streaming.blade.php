@extends('layouts.app')

@section('title', 'Live Streaming')

@section('content')
<section class="py-5">
    <div class="container text-center">
        <h2 class="fw-bold mb-4">Live Streaming TVRI Kalimantan Barat</h2>
        <p class="mb-4">Tonton siaran langsung kami di mana pun Anda berada. Dapatkan informasi dan hiburan terbaik dari TVRI Kalbar.</p>

        <!-- Embed YouTube/Stream -->
        <div class="ratio ratio-16x9 shadow-sm rounded mb-4">
            <iframe src="https://www.youtube.com/embed/live_stream?channel=UCpKK_m89tNO5cBoAXkId0TQ" 
                    title="TVRI Kalbar Live Streaming"
                    allowfullscreen></iframe>
        </div>

        <p class="text-muted">*Jika siaran tidak muncul, pastikan koneksi internet stabil atau coba buka langsung di channel resmi kami di YouTube.</p>

        <a href="https://www.youtube.com/@TVRIKalbar" target="_blank" class="btn btn-danger">
            Kunjungi Channel YouTube TVRI Kalbar
        </a>
    </div>
</section>
@endsection
