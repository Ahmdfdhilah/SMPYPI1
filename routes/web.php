<?php

use App\Http\Controllers\AuthController;
// use App\Http\Controllers\BeasiswaController;
// use App\Http\Controllers\BeritaController;
// use App\Http\Controllers\EmployeeController;
// use App\Http\Controllers\EskulController;
// use App\Http\Controllers\FasilitasController;
// use App\Http\Controllers\GaleriController;
// use App\Http\Controllers\HomeController;
use App\Http\Controllers\AchievementController;
use App\Http\Controllers\ExtracurricularController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\NewsController;

use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\DashboardController;

// // Home
// Route::get('/', HomeController::class)->name('home');

// //tentang kami
// Route::get('/fasilitas', FasilitasController::class)->name('fasilitas');
// Route::get('/gurustaff', EmployeeController::class)->name('gurustaff');
// Route::get('/visimisi', function(){
//     return view('tentang_kami.visi_misi.index');
// })->name('visimisi');
// Route::get('/sejarah', function(){
//     return view('tentang_kami.sejarah.index');
// })->name('sejarah');


// //kesiswaan
// Route::get('/prestasi', PrestasiController::class)->name('prestasi');
// Route::get('/beasiswa', BeasiswaController::class)->name('beasiswa');
// Route::get('/beasiswa/{id}/deskripsi', [BeasiswaController::class, 'deskripsi']);
// Route::get('/beasiswa/{id}/syarat', [BeasiswaController::class, 'syarat']);


// Route::get('/eskul', EskulController::class)->name('eskul');


// //dokumentasi
// Route::get('/galeri', GaleriController::class)->name('galeri');
// Route::get('/berita', [BeritaController::class, '__invoke'])->name('berita');
// Route::get('/berita/{id}', [BeritaController::class, 'show']);

// //saran
// Route::get('/saran', function(){
//     return view('saran');
// })->name('saran');


// Auth
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticated']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::prefix('/admin')->middleware('auth')->group(function() {

    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::resource('news', NewsController::class);
    Route::resource('achievements', AchievementController::class);
    Route::resource('extracurriculars', ExtracurricularController::class);
    Route::resource('facilities', FacilityController::class);

});

