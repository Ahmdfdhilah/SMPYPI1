<?php

use App\Http\Controllers\AuthController;

use App\Http\Controllers\Client\ClientGaleriController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AchievementController;
use App\Http\Controllers\Admin\ExtracurricularController;
use App\Http\Controllers\Admin\FacilityController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\ScholarshipController;
use App\Http\Controllers\Client\ClientAchievementController;
use App\Http\Controllers\Client\ClientExtracurricularController;
use App\Http\Controllers\Client\ClientFacilityController;
use App\Http\Controllers\Client\ClientNewsController;
use App\Http\Controllers\Client\ClientEmployeeController;
use App\Http\Controllers\Client\ClientScholarshipController;
use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\DashboardController;

// // Home
Route::get('/', HomeController::class)->name('home');

// //tentang kami
Route::get('/fasilitas', ClientFacilityController::class)->name('fasilitas');
Route::get('/gurustaff', ClientEmployeeController::class)->name('gurustaff');
Route::get('/visimisi', function(){
    return view('client.tentang_kami.visi_misi.index');
})->name('visimisi');
Route::get('/sejarah', function(){
    return view('client.tentang_kami.sejarah.index');
})->name('sejarah');


// //kesiswaan
Route::get('/prestasi', ClientAchievementController::class)->name('prestasi');
Route::get('/beasiswa', ClientScholarshipController::class)->name('beasiswa');
Route::get('/beasiswa/{id}/deskripsi', [ClientScholarshipController::class, 'deskripsi']);
Route::get('/beasiswa/{id}/syarat', [ClientScholarshipController::class, 'syarat']);
Route::get('/eskul', ClientExtracurricularController::class)->name('eskul');


// //dokumentasi
Route::get('/galeri', ClientGaleriController::class)->name('galeri');
Route::get('/berita', [ClientNewsController::class, '__invoke'])->name('berita');
Route::get('/berita/{id}', [ClientNewsController::class, 'show']);

//saran
Route::get('/saran', function(){
    return view('saran');
})->name('saran');


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
    Route::resource('scholarships', ScholarshipController::class);
    Route::resource('students', StudentController::class);
    Route::resource('employees', EmployeeController::class);
});

