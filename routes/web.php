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

Route::get('/pendidikan',function () {
    return view('pendidikan');
})->name('didik');

Route::get('/hidroponik',function () {
    return view('shopping');
})->name('hidroponik');

Route::get('/blog',function () {
    return view('blog');
})->name('blog');

Route::get('/blog/artikel',function () {
    return view('artikel');
})->name('artikel');

//Admin area
// lOGIN AREA AND REGIST AREA
Route::get('/admin',function (){
    return view('tampilan.login');
})->name('login');
Route::get('/admin/register',function (){
    return view('tampilan.register');
})->name('register');


Route::get('/dashboard',[DashboardController::class,'notfound']); // Antisipasi jika ada user yang coba coba masuk url ini
Route::get('/dashboard/home',[DashboardController::class,'index'])->name('ds');
Route::get('/dashboard/konten',[DashboardController::class,'konten'])->name('konten');
Route::get('/dashboard/foto',[DashboardController::class,'foto'])->name('editfoto');
Route::get('/dashboard/video',[DashboardController::class,'video'])->name('editvideo');