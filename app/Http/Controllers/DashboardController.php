<?php

namespace App\Http\Controllers;
use App\Models\Contact;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('tampilan.home');
    }

    //Area Konten
    public function artikel(){
        return view('tampilan.artikel');
    }
    public function addartikel(){
        return view('tampilan.addartikel');
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
