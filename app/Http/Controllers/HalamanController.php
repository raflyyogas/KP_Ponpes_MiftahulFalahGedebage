<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Artikel;

class HalamanController extends Controller
{
    public function index() {
        return view('index',[
            "blog" => Artikel::latest()->paginate(3)]);
    }

    public function blog(){

        return view('blog',[
            "acitve" => 'Artikel',
            "i" => 0,
            "latest" => Artikel::latest()->get(),
            "blog" => Artikel::latest()->filter(request(['search']))->paginate(3)
        ]);
    }

    public function slug($slug){
        $item = Artikel::where('slug','=',$slug)->first();
        $latest = Artikel::latest()->get();
        $i = 0;
        return view('artikel',compact('item','latest','i'));
    }
    
    public function kirimpesan(Request $request){
        $kontak = new Contact();
        $kontak->nama = $request->name;
        $kontak->nohp = $request->nohp;
        $kontak->subject = $request->subject;
        $kontak->message = $request->message;
        $kontak->save();
        return redirect()->back()->with('success','Pesan berhasil terkirim');
    }
}
