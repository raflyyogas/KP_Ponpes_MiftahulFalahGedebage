<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\GalleryFoto;
use App\Models\GalleryVideo;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function otentikasi(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns|exists:users',
            'password' => 'required|min:6'
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/admin/dashboard');
        }
        return back()->with('loginError', 'Login failed!');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/admin');
    }

    public function index()
    {
        $artikel = Artikel::all()->count();
        $foto = GalleryFoto::all()->count();
        $video = GalleryVideo::all()->count();
        return view('tampilan.home', compact('artikel', 'foto', 'video'));
    }

    //Area Konten
    public function artikel()
    {
        $artikel = Artikel::all();
        return view('tampilan.artikel', compact('artikel'));
    }
    public function addartikel()
    {
        return view('tampilan.addartikel');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Artikel::class, 'slug', $request->judul);
        return response()->json(['slug' => $slug]);
    }
    public function storearitkel(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'pic' => 'required|image|mimes:jpeg,png,jpg|max:10000',
            'editordata' => 'required'
        ]);


        $content = $request->editordata;
        $dom = new \DomDocument();
        $dom->loadHtml($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $imageFile = $dom->getElementsByTagName('img');

        foreach ($imageFile as $item => $image) {
            $data = $image->getAttribute('src');
            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
            $imgeData = base64_decode($data);
            $image_name = "/upload/" . time() . $item . '.png';
            $path = public_path() . $image_name;
            file_put_contents($path, $imgeData);

            $image->removeAttribute('src');
            $image->setAttribute('src', $image_name);
        }

        $content = $dom->saveHTML();

        $data = new Artikel();
        $data->foto = $request->file('pic')->store('upload/thumbnail');
        $data->judul = $request->judul;
        $data->slug = $request->slug;
        $data->penulis = $request->admin;
        $data->deskripsi = $content;
        $data->save();
        //   $post = Artikel::create([
        //   ]);
        return redirect()->route('admartikel')->with('success', 'Artikel berhasil diposting');
    }

    public function delartikel($id)
    {
        $del = Artikel::find($id);
        Storage::delete($del->foto);
        $del->delete();
        return redirect()->back()->with('success', 'Artikel berhasil dihapus');
    }

    public function editartikel($id)
    {
        $artikel = Artikel::find($id);
        return view('tampilan.editartikel', compact('artikel'));
    }

    public function updateartikel(Request $request, $id)
    {
        $this->validate($request, [
            'judul' => 'required',
            // 'pic' => 'required|image|mimes:jpeg,png,jpg|max:10000',
            'editordata' => 'required'
        ]);

        $artikel = Artikel::find($id);
        if ($request->pic) {
            Storage::delete($artikel->foto);

            $artikel->foto = $request->file('pic')->store('upload/thumbnail');
        }

        $content = $request->editordata;
        $dom = new \DomDocument();
        $dom->loadHtml($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $imageFile = $dom->getElementsByTagName('img');

        foreach ($imageFile as $item => $image) {
            $data = $image->getAttribute('src');
            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
            $imgeData = base64_decode($data);
            $image_name = "/upload/" . time() . $item . '.png';
            $path = public_path() . $image_name;
            file_put_contents($path, $imgeData);

            $image->removeAttribute('src');
            $image->setAttribute('src', $image_name);
        }
        
        

        $content = $dom->saveHTML();

        $artikel->judul = $request->judul;
        $artikel->slug = $request->slug;
        $artikel->penulis = $request->admin;
        $artikel->deskripsi = $content;
        $artikel->save();
        //   $post = Artikel::create([
        //   ]);
        return redirect()->route('admartikel')->with('success', 'Artikel berhasil diposting');
    }

    //---------------------------------------------------

    public function notfound()
    {
        return view('errors.404');
    }


    public function foto()
    {
        $foto = GalleryFoto::all();
        return view('tampilan.foto', compact('foto'));
    }

    public function storefoto(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg',
            'deskripsi' => 'required'
        ]);



        $foto = new GalleryFoto();
        $foto->judul = $request->judul;
        $foto->foto = $request->file('foto')->store('upload/gallery-foto');
        $foto->deskripsi = $request->deskripsi;
        $foto->save();

        return redirect(route('editfoto'));
    }

    public function delfoto($id)
    {
        $del = GalleryFoto::find($id);
        Storage::delete($del->foto);
        $del->delete();
        return redirect()->back()->with('success', 'Foto berhasil dihapus');
    }

    public function video()
    {
        $video = GalleryVideo::all();
        return view('tampilan.video', compact('video'));
    }

    public function storevideo(Request $request)
    {
        $video = new GalleryVideo();

        $video->judul = $request->judul;
        $video->link = $request->link;
        $video->deskripsi = $request->deskripsi;

        $video->save();
        return redirect(route('editvideo'));
    }

    public function delvideo($id)
    {
        $video = GalleryVideo::find($id);
        $video->delete();
        return redirect(route('editvideo'));
    }
    public function contact()
    {
        $kontak = Contact::all();
        return view('tampilan.contact', compact('kontak'));
    }
    public function delcontact($id)
    {
        $del = Contact::find($id);
        $del->delete();
        return redirect()->back()->with('success', 'Informasi berhasil dihapus');
    }
}
