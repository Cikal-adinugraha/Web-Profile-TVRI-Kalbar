<footer class="mt-5 bg-primary text-white">
    <div class="container py-4">
        <div class="row">
            <div class="col-md-6 mb-3">
                <h5 class="fw-bold">TVRI Kalimantan Barat</h5>
                <p>Jl. Ahmad Yani No. 60, Kota Pontianak, Kalimantan Barat</p>
                <p>Email: tvri.kalbar@tvri.go.id</p>
                <p>Telepon: (0561) 5704740</p>
            </div>
            <div class="col-md-3 mb-3">
                <h6>Navigasi</h6>
                <ul class="list-unstyled">
                    <li><a href="{{ url('/') }}" class="text-white text-decoration-none">Beranda</a></li>
                    <li><a href="{{ url('/sejarah') }}" class="text-white text-decoration-none">Profil</a></li>
                    <li><a href="{{ url('/berita') }}" class="text-white text-decoration-none">Berita</a></li>
                    <li><a href="{{ url('/program-acara') }}" class="text-white text-decoration-none">Program</a></li>
                </ul>
            </div>
            <div class="col-md-3 mb-3">
                <h6>Ikuti Kami</h6>
                <ul class="list-unstyled">
                <li><a href="#" class="text-white me-3 text-decoration-none">Facebook<i class="bi bi-facebook"></i></a></li>
                <li><a href="#" class="text-white me-3 text-decoration-none">X (Twitter)<i class="bi bi-twitter"></i></a></li>
                <li><a href="#" class="text-white me-3 text-decoration-none">YouTube<i class="bi bi-youtube"></i></a></li>
                <li><a href="#" class="text-white text-decoration-none">Instagram<i class="bi bi-instagram"></i></a></li>
                </ul>
            </div>
        </div>
        <hr class="border-light">
        <p class="text-center mb-0">&copy; {{ date('Y') }} TVRI Kalimantan Barat. All rights reserved.</p>
    </div>
</footer>
