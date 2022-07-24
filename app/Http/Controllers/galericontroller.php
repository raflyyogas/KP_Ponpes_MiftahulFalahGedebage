<?php



namespace App\Http\Controllers;



use App\Models\GalleryFoto;

use App\Models\GalleryVideo;

use Illuminate\Http\Request;



class galericontroller extends Controller

{

    public function foto()
    {
        return view('foto', [
            'foto' => GalleryFoto::latest()->get()
        ]);
    }

    public function video()
    {

        $video = GalleryVideo::latest()->get();

        return view('video', compact('video'));
    }
}
