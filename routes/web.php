<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\galericontroller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HalamanController;

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

Route::get('/', [HalamanController::class, 'index'])->name('home');
Route::get('/foto', [galericontroller::class, 'foto'])->name('foto');
Route::get('/video', [galericontroller::class, 'video'])->name('video');

//Route untuk mengirimkan Contact
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/mi', function () {
    return view('mi');
})->name('mi');
Route::get('/mts', function () {
    return view('mts');
})->name('mts');
Route::get('/ma', function () {
    return view('ma');
})->name('ma');

Route::post('/pesan', [HalamanController::class, 'kirimpesan'])->name('pesan');
Route::get('/fasilitas', function () {
    return view('fasilitas');
})->name('fasilitas');
Route::get('/kegiatan', function () {
    return view('kegiatan');
})->name('kegiatan');

Route::get('/pendidikan', function () {
    return view('pendidikan');
})->name('didik');

Route::get('/hidroponik', function () {
    return view('shopping');
})->name('hidroponik');

Route::get('/blog', [HalamanController::class, 'blog'])->name('blog');
Route::get('/blog/artikel/{slug}', [HalamanController::class, 'slug'])->name('slug');
Route::get('/blog/artikel/kategori/{kategori}', [HalamanController::class, 'kategori'])->name('ktgri');

//Admin area
// lOGIN AREA AND REGIST AREA
Route::get('/admin', function () {
    return view('tampilan.login');
})->name('login')->middleware('guest');
Route::post('/admin/login', [DashboardController::class, 'otentikasi'])->name('oten');

Route::group(['middleware' => 'auth'], function () {
    Route::post('/admin/dashboard/logout', [DashboardController::class, 'logout'])->name('logout');
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('ds');

    //Area artikel
    Route::get('/admin/dashboard/artikel', [DashboardController::class, 'artikel'])->name('admartikel');
    Route::get('/admin/dashboard/addartikel', [DashboardController::class, 'addartikel'])->name('addartikel');
    Route::get('/admin/dashboard/addartikel/checkSlug', [DashboardController::class, 'checkSlug']);
    Route::post('/admin/dashboard/addartikel', [DashboardController::class, 'storearitkel'])->name('store');
    Route::get('/admin/dashboard/hapusartikel/{id}', [DashboardController::class, 'delartikel'])->name('delartikel');
    Route::get('/admin/dashboard/editartikel/{slug}', [DashboardController::class, 'editartikel'])->name('editartikel');
    Route::post('/admin/dashboard/editartikel/{id}', [DashboardController::class, 'updateartikel'])->name('updateartikel');

    //Area Foto
    Route::get('/admin/dashboard/foto', [DashboardController::class, 'foto'])->name('editfoto');
    Route::post('/admin/dashboard/foto', [DashboardController::class, 'storefoto'])->name('tambahfoto');
    Route::get('/admin/dashboard/hapusfoto/{id}', [DashboardController::class, 'delfoto'])->name('deletefoto');
    Route::post('/admin/dashboard/editfoto/{id}', [DashboardController::class, 'updatefoto'])->name('updatefoto');

    //Area Video
    Route::get('/admin/dashboard/video', [DashboardController::class, 'video'])->name('editvideo');
    Route::post('/admin/dashboard/video', [DashboardController::class, 'storevideo'])->name('tambahvideo');
    Route::get('/admin/dashboard/video/{id}', [DashboardController::class, 'delvideo'])->name('delvid');
    Route::post('/admin/dashboard/editvideo/{id}', [DashboardController::class, 'updatevideo'])->name('editvid');

    //Kontak Kami Area
    Route::get('/admin/dashboard/contact', [DashboardController::class, 'contact'])->name('contacts');
    Route::post('/admin/dashboard/contact/{id}', [DashboardController::class, 'updatecontact'])->name('simpanpesan');
    Route::get('/admin/dashboard/delete/{id}', [DashboardController::class, 'delcontact'])->name('delkon');

    //Data Santri
    Route::post('/admin/dashboard/updatesantri/', [DashboardController::class, 'updateinfo'])->name('santri');
});
