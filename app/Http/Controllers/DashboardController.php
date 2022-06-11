<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use App\Models\Artikel;

class DashboardController extends Controller
{
    public function index(){
        return view('tampilan.home');
    }

    //Area Konten
    public function artikel(){
        $artikel = Artikel::all();
        $mamang = "<p><b>Testing</b></p>";
        return view('tampilan.artikel',compact('artikel','mamang'));
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
    
    //---------------------------------------------------

    public function notfound(){
        return view('errors.404');
    }
    public function foto(){
        return view('tampilan.foto');
    }
    public function video(){
        return view('tampilan.video');
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
