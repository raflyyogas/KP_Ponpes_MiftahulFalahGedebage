<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\GalleryFoto;
use App\Models\GalleryVideo;
use Illuminate\Support\Facades\File;

class DashboardController extends Controller
{
    public function index(){
        return view('tampilan.home');
    }

    //Area Konten
    public function artikel(){
        $artikel = Artikel::all();
        return view('tampilan.artikel',compact('artikel'));
    }
    public function addartikel(){
        return view('tampilan.addartikel');
    }
    
    public function checkSlug(Request $request){
        $slug = SlugService::createSlug(Artikel::class, 'slug', $request->judul);
        return response()->json(['slug' => $slug]);
    }
    public function storearitkel(Request $request) {
        $this->validate($request, [
            'judul' => 'required',
            'pic' => 'required|image|mimes:jpeg,png,jpg|max:10000',
            'editordata' => 'required'
       ]);

       $Name = $request->pic->getClientOriginalName() . '-' . time()
       . '.' . $request->pic->extension();
       $request->pic->move(public_path('upload/thumbnail'),$Name);

      $content = $request->editordata;
      $dom = new \DomDocument();
      $dom->loadHtml($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
      $imageFile = $dom->getElementsByTagName('img');

      foreach($imageFile as $item => $image){
          $data = $image->getAttribute('src');
          list($type, $data) = explode(';', $data);
          list(, $data)      = explode(',', $data);
          $imgeData = base64_decode($data);
          $image_name= "/upload/" . time().$item.'.png';
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
      $data->deskripsi = $content;
      $data->save();
    //   $post = Artikel::create([
    //   ]);
      return redirect()->route('admartikel')->with('success','Artikel berhasil diposting');
    }

    public function delartikel($id){
        $del = Artikel::find($id);
        $file_path = public_path('upload/thumbnail/'.$del->foto);

        if (File::exists($file_path)) {
            //File::delete($image_path);
            unlink($file_path);
        }
        $del->delete();
        return redirect()->back()->with('success','Artikel berhasil dihapus');
    }
    
    //---------------------------------------------------

    public function notfound(){
        return view('errors.404');
    }
    public function foto(){
        $foto = GalleryFoto::all();
        return view('tampilan.foto', compact('foto'));
    }

    public function storefoto(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:10000',
            'deskripsi' => 'required'
       ]);

       $Name = $request->foto->getClientOriginalName() . '-' . time()
       . '.' . $request->foto->extension();
       $request->foto->move(public_path('upload/gallery-foto'),$Name);

       $foto = new GalleryFoto();
       $foto->judul = $request->judul;
       $foto->foto = $Name;
       $foto->deskripsi = $request->deskripsi;
       $foto->save();

       return redirect(route('editfoto'));


    }

    public function delfoto($id){
        $del = GalleryFoto::find($id);
        $file_path = public_path('upload/gallery-foto/'.$del->foto);

        if (File::exists($file_path)) {
            //File::delete($image_path);
            unlink($file_path);
        }
        $del->delete();
        return redirect()->back()->with('success','Foto berhasil dihapus');
    }

    public function video(){
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
    public function contact(){
        $kontak = Contact::all();
        return view('tampilan.contact',compact('kontak'));
    }
    public function delcontact($id){
        $del = Contact::find($id);
        $del->delete();
        return redirect()->back()->with('success','Informasi berhasil dihapus');
    }
}
