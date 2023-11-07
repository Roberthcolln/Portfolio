<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\KategoriEducationController;
use App\Http\Controllers\FormPertanyaanController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/kontak', [HomeController::class, 'kontak'])->name('kontak');
Route::get('/tentang', [HomeController::class, 'tentang'])->name('tentang');
Route::get('/beritas', [HomeController::class, 'beritas'])->name('beritas');
Route::get('/read/{slug}', [HomeController::class, 'read'])->name('read');
Route::get('/project-details/{slug}', [HomeController::class, 'detailproject']);
Route::get('/projects', [HomeController::class, 'lihatproject']);
Route::get('/layanans', [HomeController::class, 'layanan']);
Route::get('/read/{slug}', [HomeController::class, 'read'])->name('read');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard.index');
    })->name('dashboard.index');

    Route::post('image-upload', [GaleriController::class, 'storeImage'])->name('image.upload');
    Route::resource('setting', SettingController::class);
    Route::resource('team', TeamController::class);
    Route::resource('berita', BeritaController::class);
    Route::resource('home', HomeController::class);
    Route::resource('partner', PartnerController::class);
    Route::resource('project', ProjectController::class);
    Route::resource('layanan', LayananController::class);
    Route::resource('education', EducationController::class);
    Route::resource('work', WorkController::class);
    Route::resource('kategori_education', KategoriEducationController::class);
    Route::resource('form_pertanyaan', FormPertanyaanController::class);
});
