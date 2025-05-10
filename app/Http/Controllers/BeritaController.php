<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\ImageFile;

class BeritaController extends Controller
{
    public function index()
    {
        return view("admin.dashboard", [
            "news" => Berita::latest()->get(),
        ]);
    }

    public function create()
    {
        return view("admin.berita.tambah");
    }

    public function store(Request $request)
    {
        $data = collect($request->validate([
            "judul" => "required|string",
            "isi" => "required|string",
            "gambar" => ImageFile::image()->max("3mb")->extensions(["jpg", "jpeg", "png"])->rules(["nullable"]),
        ]));

        if ($request->hasFile("gambar")) {
            $data->put("gambar", $request->file("gambar")->store("images/berita"));
        }

        Berita::create([
            ...$data->toArray(),
            "user_id" => Auth::user()->id,
        ]);

        return redirect()->route("dashboard");
    }

    public function show(Berita $berita)
    {
        return view("berita", [
            "berita" => $berita,
        ]);
    }

    public function preview(Berita $berita)
    {
        return view("admin.berita.preview", [
            "berita" => $berita,
        ]);
    }

    public function publish(Berita $berita)
    {
        $berita->update(["is_published" => true]);

        return redirect()->route("dashboard");
    }

    public function unpublish(Berita $berita)
    {
        $berita->update(["is_published" => false]);

        return redirect()->route("dashboard");
    }

    public function destroy(Berita $berita)
    {
        $berita->delete();

        return redirect()->route("dashboard");
    }
}
