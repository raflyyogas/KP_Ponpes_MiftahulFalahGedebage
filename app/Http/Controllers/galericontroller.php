<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class galericontroller extends Controller
{
    public function foto(){
        return view('foto');
    }
    public function video(){
        return view('video');
    }
}
