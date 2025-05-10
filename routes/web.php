<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Models\Berita;
use App\Http\Controllers\BeritaController;

Route::get('/', fn() => view("index", ["news" => Berita::published()->latest()->get()]));
Route::get("/berita/{berita}", [BeritaController::class, "show"])->name("berita.show");

Route::middleware("guest")->group(function () {
    Route::get("/login", [AuthController::class, "index"])->name("login.get");
    Route::post("/login", [AuthController::class, "login"])->name("login.post");
});

Route::middleware("auth")->group(function () {
    Route::get("/dashboard", [BeritaController::class, "index"])->name("dashboard");

    // * Tambah Berita
    Route::get("/berita/tambah", [BeritaController::class, "create"])->name("berita.tambah");
    Route::post("/berita/tambah", [BeritaController::class, "store"])->name("berita.store");

    // * Preview Berita
    Route::get("/berita/preview/{berita}", [BeritaController::class, "preview"])->name("berita.preview");

    // * Publish & Unpublish Berita
    Route::put("/berita/publish/{berita}", [BeritaController::class, "publish"])->name("berita.publish");
    Route::put("/berita/unpublish/{berita}", [BeritaController::class, "unpublish"])->name("berita.unpublish");

    // * Hapus Berita
    Route::delete("/berita/{berita}", [BeritaController::class, "destroy"])->name("berita.destroy");

    Route::post("/logout", [AuthController::class, "logout"])->name("logout");
});
