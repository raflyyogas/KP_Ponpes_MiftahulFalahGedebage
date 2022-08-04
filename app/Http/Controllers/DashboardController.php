<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\GalleryFoto;
use App\Models\GalleryVideo;
use App\Models\Santri;
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
        $mi = Santri::where('tipe', '=', 'santrimi')->first();
        $mts = Santri::where('tipe', '=', 'santrimts')->first();
        $ma = Santri::where('tipe', '=', 'santrima')->first();
        $prestasi = Santri::where('tipe', '=', 'prestasi')->first();
        return view('tampilan.home', compact('artikel', 'foto', 'video', 'mi', 'mts', 'ma', 'prestasi'));
    }

    public function updateinfo(Request $request)
    {
        $this->validate($request, [
            'jumlah' => 'required|digits_between:1,5',
            'tipe' => 'required'
        ]);

        if ($request->tipe == 'santrimi') {
            $santri = Santri::where('tipe', '=', 'santrimi');
            $santri->update(['total' => $request->jumlah], ['tipe' => $request->tipe]);

            return back()->with('success', 'Sukses menyimpan data informasi');
        } elseif ($request->tipe == 'santrimts') {
            $santri = Santri::where('tipe', '=', 'santrimts');
            $santri->update(['total' => $request->jumlah], ['tipe' => $request->tipe]);

            return back()->with('success', 'Sukses menyimpan data informasi');
        } elseif ($request->tipe == 'santrima') {
            $santri = Santri::where('tipe', '=', 'santrima');
            $santri->update(['total' => $request->jumlah], ['tipe' => $request->tipe]);

            return back()->with('success', 'Sukses menyimpan data informasi');
        } elseif ($request->tipe == 'prestasi') {
            $santri = Santri::where('tipe', '=', 'prestasi');
            $santri->update(['total' => $request->jumlah], ['tipe' => $request->tipe]);

            return back()->with('success', 'Sukses menyimpan data informasi');
        } else {
            return back()->with('error', 'Kamu melakukan kegaitan yang mencurigakan');
        }
    }

    //Area Konten
    public function artikel()
    {
        return view('tampilan.artikel', [
            'artikel' => Artikel::latest()->filter(request(['search']))->paginate(5)
        ]);
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
            'judul' => 'required|min:5',
            'kategori' => 'required',
            'pic' => 'required|image|mimes:jpeg,png,jpg|max:8500',
            'editordata' => 'min:20|required'
        ]);

        $Name = $request->pic->getClientOriginalName() . '-' . time()
            . '.' . $request->pic->extension();
        $request->pic->move(public_path('upload/thumbnail'), $Name);

        $content = $request->editordata;
        $dom = new \DomDocument();
        $dom->loadHtml($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $imageFile = $dom->getElementsByTagName('img');

        foreach ($imageFile as $item => $image) {
            $data = $image->getAttribute('src');
            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
            $imgeData = base64_decode($data);
            $image_name = "/upload/thumbnail/" . time() . $item . '.png';
            $path = public_path() . $image_name;
            file_put_contents($path, $imgeData);

            $image->removeAttribute('src');
            $image->setAttribute('src', $image_name);
        }

        $content = $dom->saveHTML();

        $data = new Artikel();
        $data->foto = $Name;
        $data->judul = $request->judul;
        $data->slug = $request->slug;
        $data->penulis = $request->admin;
        $data->kategori = $request->kategori;
        $data->deskripsi = $content;
        $data->save();
        //   $post = Artikel::create([
        //   ]);
        return redirect()->route('admartikel')->with('success', 'Artikel berhasil diposting');
    }

    public function delartikel($id)
    {
        $del = Artikel::find($id);
        $file_path = public_path('upload/thumbnail/' . $del->foto);

        if (File::exists($file_path)) {
            File::delete($file_path);
        }
        Storage::delete($del->foto);
        $del->delete();
        return redirect()->back()->with('success', 'Artikel berhasil dihapus');
    }

    public function editartikel($slug)
    {

        $artikel = Artikel::where('slug', '=', $slug)->first();
        return view('tampilan.editartikel', compact('artikel'));
    }

    public function updateartikel(Request $request, $id)
    {
        $this->validate($request, [

            'judul' => 'required|min:5',
            'kategori' => 'required',
            'editordata' => 'min:20|required'
        ]);


        $artikel = Artikel::find($id);
        $file_path = public_path('upload/thumbnail/' . $artikel->foto);

        if ($request->pic) {

            if (File::exists($file_path)) {
                File::delete($file_path);
                // unlink($file_path);
            }
            $Name = $request->pic->getClientOriginalName() . '-' . time()
                . '.' . $request->pic->extension();
            $request->pic->move(public_path('upload/thumbnail'), $Name);
            $artikel->foto = $Name;
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
            $image_name = "/upload/thumbnail/" . time() . $item . '.png';
            $path = public_path() . $image_name;
            file_put_contents($path, $imgeData);

            $image->removeAttribute('src');
            $image->setAttribute('src', $image_name);
        }

        $content = $dom->saveHTML();

        $artikel->judul = $request->judul;
        $artikel->slug = $request->slug;
        $artikel->kategori = $request->kategori;
        $artikel->penulis = $request->admin;
        $artikel->deskripsi = $content;
        $artikel->save();
        //   $post = Artikel::create([
        //   ]);
        return redirect()->route('admartikel')->with('success', 'Artikel berhasil diupdate');
    }

    //---------------------------------------------------

    public function notfound()
    {
        return view('errors.404');
    }


    public function foto()
    {
        return view('tampilan.foto', [
            'foto' => GalleryFoto::latest()->paginate(3)
        ]);
    }

    public function storefoto(Request $request)
    {
        $this->validate($request, [
            'judul' => 'min:5|required',
            'foto' => 'required|image|mimes:jpeg,png,jpg',
            'kategori' => 'required',
            'deskripsi' => 'min:5|required'
        ]);
        $Name = $request->foto->getClientOriginalName() . '-' . time()
            . '.' . $request->foto->extension();
        $request->foto->move(public_path('upload/gallery-foto'), $Name);

        $foto = new GalleryFoto();
        $foto->judul = $request->judul;
        $foto->kategori = $request->kategori;
        $foto->foto = $Name;
        $foto->deskripsi = $request->deskripsi;
        $foto->save();

        return redirect(route('editfoto'))->with('success', 'Foto berhasil disimpan');
    }

    public function updatefoto(Request $request, $id)
    {
        $foto = GalleryFoto::find($id);
        $file_path = public_path('upload/gallery-foto/' . $foto->foto);

        if ($request->foto) {

            if (File::exists($file_path)) {
                File::delete($file_path);
                // unlink($file_path);
            }
            $Name = $request->foto->getClientOriginalName() . '-' . time()
                . '.' . $request->foto->extension();
            $request->foto->move(public_path('upload/gallery-foto'), $Name);
            $foto->foto = $Name;
        }

        $foto->judul = $request->judul;
        $foto->kategori = $request->kategori;
        $foto->deskripsi = $request->deskripsi;
        $foto->save();
        return redirect(route('editfoto'))->with('success', 'Foto berhasil diupdate');
    }

    public function delfoto($id)
    {
        $del = GalleryFoto::find($id);
        $file_path = public_path('upload/gallery-foto/' . $del->foto);

        if (File::exists($file_path)) {
            File::delete($file_path);
            // unlink($file_path);
        }
        Storage::delete($del->foto);
        $del->delete();
        return redirect()->back()->with('success', 'Foto berhasil dihapus');
    }

    public function video()
    {
        return view('tampilan.video', [
            'video' => GalleryVideo::latest()->paginate(3)
        ]);
    }

    public function storevideo(Request $request)
    {
        $this->validate($request, [
            'judul' => 'min:5|required',
            'link' => 'min:10|required',
            'kategori' => 'required'
        ]);

        $video = new GalleryVideo();
        $video->judul = $request->judul;
        $video->link = $request->link;
        $video->kategori = $request->kategori;

        $video->save();
        return redirect(route('editvideo'))->with('success', 'Video berhasil disimpan');
    }

    public function updatevideo(Request $request, $id)
    {
        $this->validate($request, [
            'judul' => 'min:5|required',
            'link' => 'min:10|required',
            'kategori' => 'required'
        ]);

        $updatevid = GalleryVideo::find($id);
        $updatevid->judul = $request->judul;
        $updatevid->link = $request->link;
        $updatevid->kategori = $request->kategori;

        $updatevid->save();
        return redirect(route('editvideo'))->with('success', 'Videp berhasil diupdate');
    }

    public function delvideo($id)
    {
        $video = GalleryVideo::find($id);
        $video->delete();
        return redirect(route('editvideo'))->with('success', 'Videp berhasil dihapus');
    }
    public function contact()
    {
        $kontak = Contact::latest()->get();
        return view('tampilan.contact', compact('kontak'));
    }
    public function updatecontact(Request $request, $id)
    {
        $kontak = Contact::find($id);
        $kontak->status = $request->status;
        $kontak->save();
        return redirect()->back()->with('success', 'Kontak berhasil diupdate');
    }
    public function delcontact($id)
    {
        $del = Contact::find($id);
        $del->delete();
        return redirect()->back()->with('success', 'Kontak berhasil dihapus');
    }
}
