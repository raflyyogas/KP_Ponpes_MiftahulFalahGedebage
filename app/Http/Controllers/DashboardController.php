<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('tampilan.home');
    }
    public function konten(){
        return view('tampilan.konten');
    }
    public function notfound(){
        return view('errors.404');
    }
    public function foto(){
        return view('tampilan.foto');
    }public function video(){
        return view('tampilan.video');
    }
}
