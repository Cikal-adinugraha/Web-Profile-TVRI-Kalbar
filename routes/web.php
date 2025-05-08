<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view("index");
});

Route::middleware("guest")->group(function () {
    Route::get("/login", [AuthController::class, "index"])->name("login.get");
    Route::post("/login", [AuthController::class, "login"])->name("login.post");
});

Route::middleware("auth")->group(function () {
    Route::get("/dashboard", fn() => view("admin.dashboard"))->name("dashboard");

    Route::post("/logout", [AuthController::class, "logout"])->name("logout");
});
