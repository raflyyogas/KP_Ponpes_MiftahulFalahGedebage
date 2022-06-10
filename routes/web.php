<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\galericontroller;
use App\Http\Controllers\DashboardController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/foto',[galericontroller::class,'foto'])->name('foto');
Route::get('/video',[galericontroller::class,'video'])->name('video');
Route::get('/contact',function () {
    return view('contact');
})->name('contact');

Route::get('/fasilitas',function () {
    return view('fasilitas');
})->name('fasilitas');

Route::get('/kegiatan',function () {
    return view('kegiatan');
})->name('kegiatan');

Route::get('/blog',function () {
    return view('blog');
})->name('blog');

Route::get('/blog/artikel',function () {
    return view('artikel');
})->name('artikel');

Route::get('/dashboard',[DashboardController::class,'index'])->name('ds');
Route::get('/dashboard/konten',[DashboardController::class,'konten'])->name('konten');