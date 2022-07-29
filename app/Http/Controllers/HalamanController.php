<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Artikel;
use App\Models\Santri;

class HalamanController extends Controller
{
    public function index()
    {
        return view('index', [
            "blog" => Artikel::latest()->paginate(3),
            "mi" => Santri::where('tipe', '=', 'santrimi')->first(),
            "mts" => Santri::where('tipe', '=', 'santrimts')->first(),
            "ma" => Santri::where('tipe', '=', 'santrima')->first(),
            "prestasi" => Santri::where('tipe', '=', 'prestasi')->first(),
        ]);
    }

    public function blog()
    {

        return view('blog', [
            "i" => 0,
            "latest" => Artikel::latest()->get(),
            "blog" => Artikel::latest()->filter(request(['search']))->paginate(3)
        ]);
    }

    public function kategori($kategori)
    {
        $i = 0;
        $latest = Artikel::latest()->get();
        $count = Artikel::where('kategori', $kategori)->count();
        $blog = Artikel::latest()->where('kategori', $kategori)->paginate(3);
        return view('kategori', compact('blog', 'count', 'latest', 'i'));
    }

    public function slug($slug)
    {
        $count = Artikel::where('slug', '=', $slug)->count();
        $item = Artikel::where('slug', '=', $slug)->first();
        $latest = Artikel::latest()->get();
        $i = 0;
        return view('artikel', compact('count', 'item', 'latest', 'i'));
    }

    public function kirimpesan(Request $request)
    {
        $status = 'Belum diproses';
        $kontak = new Contact();
        $kontak->nama = $request->name;
        $kontak->nohp = $request->nohp;
        $kontak->subject = $request->subject;
        $kontak->message = $request->message;
        $kontak->status = $status;
        $kontak->save();
        return redirect()->back()->with('success', 'Pesan berhasil terkirim');
    }
}
