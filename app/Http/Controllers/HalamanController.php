<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
class HalamanController extends Controller
{
    
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
