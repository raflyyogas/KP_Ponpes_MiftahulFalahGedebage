<?php

namespace App\Http\Controllers;

use App\Models\GalleryFoto;
use App\Models\GalleryVideo;
use Illuminate\Http\Request;

class galericontroller extends Controller
{
    public function foto(){
        $foto = GalleryFoto::all();
        return view('foto', compact('foto'));
    }
    public function video(){
        $video = GalleryVideo::all();
        return view('video', compact('video'));
    }
}
