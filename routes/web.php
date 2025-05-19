<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ProgramController;
use App\Models\Berita;

Route::get('/', function () {
return view('index', [
'berita_terbaru' => Berita::published()->latest()->take(6)->get()
]);
})->name('index');

// Route::get('/', function () {
//     return view('index', [
//         'news' => Berita::published()->latest()->get()
//     ]);
// })->name('index');

// Halaman Statis Publik
Route::view('/sejarah', 'sejarah')->name('sejarah');
// Route::view('/program-acara', 'program')->name('program');
Route::get('/program-acara', [BeritaController::class, 'programAcara'])->name('program');
Route::view('/live-streaming', 'streaming')->name('streaming');

// Halaman Daftar Berita Publik
Route::get('/berita', [BeritaController::class, 'publicIndex'])->name('berita.index');

// Halaman Detail Berita Publik
Route::get('/berita/{berita}', [BeritaController::class, 'show'])->name('berita.show');

// Autentikasi (Guest Only)
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'index'])->name('login.get');
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');
});

// ✅ Dashboard & Admin (Hanya untuk Authenticated)
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [BeritaController::class, 'index'])->name('dashboard');

    // Tambah Berita
    Route::get('/berita/tambah', [BeritaController::class, 'create'])->name('berita.create');
    Route::post('/berita/tambah', [BeritaController::class, 'store'])->name('berita.store');

    // Preview Berita
    Route::get('/berita/preview/{berita}', [BeritaController::class, 'preview'])->name('berita.preview');

    // Edit Berita
    Route::get('/berita/edit/{berita}', [BeritaController::class, 'edit'])->name('berita.edit');
    Route::put('/berita/edit/{berita}', [BeritaController::class, 'update'])->name('berita.update');

    // Publish/Unpublish
    Route::put('/berita/publish/{berita}', [BeritaController::class, 'publish'])->name('berita.publish');
    Route::put('/berita/unpublish/{berita}', [BeritaController::class, 'unpublish'])->name('berita.unpublish');

    // Hapus Berita
    Route::delete('/berita/{berita}', [BeritaController::class, 'destroy'])->name('berita.destroy');

    // Logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
