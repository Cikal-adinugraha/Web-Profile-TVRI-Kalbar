<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Program;
use App\Models\Kategori;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\ImageFile;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    public function programAcara(Request $request)
    {
        $query = Program::query();

        if ($request->filled('hari')) {
            $query->where('hari', $request->hari);
        }

        $programs = $query->orderBy('jam_mulai')->get();

        return view('program-acara', compact('programs'));
    }

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

    public function edit(Berita $berita)
    {
        return view("admin.berita.edit", [
            "berita" => $berita,
        ]);
    }

    public function update(Request $request, Berita $berita)
    {
        $data = collect($request->validate([
            "judul" => "required|string",
            "isi" => "required|string",
            "gambar" => ImageFile::image()->max("3mb")->extensions(["jpg", "jpeg", "png"])->rules(["nullable"]),
        ]));

        if ($request->hasFile("gambar")) {
            if ($berita->gambar) {
                Storage::delete($berita->gambar);
            }

            $data->put("gambar", $request->file("gambar")->store("images/berita"));
        }

        $berita->update([
            ...$data->toArray(),
            "user_id" => Auth::user()->id,
        ]);

        return redirect()->route("dashboard");
    }

    public function destroy(Berita $berita)
    {
        $berita->delete();

        return redirect()->route("dashboard");
    }

    public function publicIndex(Request $request)
{
    $query = Berita::query()->where('is_published', true);

    // Pencarian
    if ($request->filled('cari')) {
        $query->where('judul', 'like', '%' . $request->cari . '%');
    }

    // Filter berdasarkan kategori
    if ($request->filled('kategori')) {
        $query->whereHas('kategori', function ($q) use ($request) {
            $q->where('slug', $request->kategori);
        });
    }

    $berita = $query->latest()->paginate(6);
    $kategori_list = Kategori::all(); // pastikan model ini ada

    return view('berita', compact('berita', 'kategori_list'));
  }
}
