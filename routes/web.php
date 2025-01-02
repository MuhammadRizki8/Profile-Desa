<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MonografiController;
use App\Http\Controllers\DataPersebaranPendudukController;
use App\Http\Controllers\PopulationDataController;
use App\Http\Controllers\DataKependudukanAgamaController;
use App\Http\Controllers\PendidikanTerakhirController;
use App\Http\Controllers\DataPekerjaanController;
use App\Http\Controllers\DataKelompokUmurController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VillageInstrumentController;
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



Route::get('/', [HomeController::class, 'index']);

Route::get('/agenda', function () {
    return view('agenda');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/demografi', function () {
    return view('demografi');
});

Route::get('/kades', [VillageInstrumentController::class, 'showKades']);
Route::get('/profile', [VillageInstrumentController::class, 'showStrukturDesa']);
Route::get('/perangkat_desa', [VillageInstrumentController::class, 'showPerangkatDesa']);

Route::get('/layanan', function () {
    return view('layanan');
});

Route::get('/lembaga_detail', function () {
    return view('lembaga_detail');
});

Route::get('/lembaga', function () {
    return view('lembaga');
});


Route::get('/monografi_dashboard', function () {
    return view('monografi_dashboard');
});

Route::get('/monografi', [MonografiController::class, 'show'])->name('monografi');


Route::get('/pemerintahan', function () {
    return view('pemerintahan');
});



Route::get('/produkhukum', function () {
    return view('produkhukum');
});



Route::get('/berita', function () {
    return view('berita');
});
Route::get('/transparansi', function () {
    return view('transparansi');
});
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/admin/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard')
    ->middleware('auth');

Route::view('/admin/pemerintahan', 'admin.pemerintahan')->name('pemerintahan');
Route::view('/admin/agenda', 'admin.agenda')->name('agenda');
Route::view('/admin/produk-hukum', 'admin.produk-hukum')->name('produk-hukum');
Route::view('/admin/transparansi', 'admin.transparansi')->name('transparansi');


Route::get('/admin/monografi', [MonografiController::class, 'index'])->name('admin.monografi');
Route::post('/data-persebaran', [DataPersebaranPendudukController::class, 'store'])->name('data-persebaran.store');
Route::get('/data-persebaran/{id}/edit', [DataPersebaranPendudukController::class, 'edit'])->name('data-persebaran.edit');
Route::put('/data-persebaran/{id}', [DataPersebaranPendudukController::class, 'update'])->name('data-persebaran.update');
Route::delete('/data-persebaran/{id}', [DataPersebaranPendudukController::class, 'destroy'])->name('data-persebaran.destroy');


Route::get('/data-populasi', [PopulationDataController::class, 'index'])->name('population.index');
Route::post('/data-populasi', [PopulationDataController::class, 'store'])->name('population.store');
Route::get('/data-populasi/{id}/edit', [PopulationDataController::class, 'edit'])->name('population.edit');
Route::put('/data-populasi/{id}', [PopulationDataController::class, 'update'])->name('population.update');
Route::delete('/data-populasi/{id}', [PopulationDataController::class, 'destroy'])->name('population.destroy');


Route::get('/data-agama', [DataKependudukanAgamaController::class, 'index'])->name('agama.index');
Route::post('/data-agama', [DataKependudukanAgamaController::class, 'store'])->name('agama.store'); 
Route::get('/data-agama/{id}/edit', [DataKependudukanAgamaController::class, 'edit'])->name('agama.edit'); 
Route::put('/data-agama/{id}', [DataKependudukanAgamaController::class, 'update'])->name('agama.update'); 
Route::delete('/data-agama/{id}', [DataKependudukanAgamaController::class, 'destroy'])->name('agama.destroy'); 

Route::get('/data-pendidikan', [PendidikanTerakhirController::class, 'index'])->name('pendidikan_terakhir.index');
Route::post('/data-pendidikan', [PendidikanTerakhirController::class, 'store'])->name('pendidikan_terakhir.store');
Route::get('/data-pendidikan/{id}/edit', [PendidikanTerakhirController::class, 'edit'])->name('pendidikan_terakhir.edit');
Route::put('/data-pendidikan/{id}', [PendidikanTerakhirController::class, 'update'])->name('pendidikan_terakhir.update');
Route::delete('/data-pendidikan/{id}', [PendidikanTerakhirController::class, 'destroy'])->name('pendidikan_terakhir.destroy');

Route::get('/data-pekerjaan', [DataPekerjaanController::class, 'index'])->name('data_pekerjaan.index');
Route::post('/data-pekerjaan', [DataPekerjaanController::class, 'store'])->name('data_pekerjaan.store');
Route::get('/data-pekerjaan/{id}/edit', [DataPekerjaanController::class, 'edit'])->name('data_pekerjaan.edit');
Route::put('/data-pekerjaan/{id}', [DataPekerjaanController::class, 'update'])->name('data_pekerjaan.update');
Route::delete('/data-pekerjaan/{id}', [DataPekerjaanController::class, 'destroy'])->name('data_pekerjaan.destroy');

Route::get('/data-kelompok-umur', [DataKelompokUmurController::class, 'index'])->name('data_kelompok_umur.index');
Route::post('/data-kelompok-umur', [DataKelompokUmurController::class, 'store'])->name('data_kelompok_umur.store');
Route::get('/data-kelompok-umur/{id}/edit', [DataKelompokUmurController::class, 'edit'])->name('data_kelompok_umur.edit');
Route::put('/data-kelompok-umur/{id}', [DataKelompokUmurController::class, 'update'])->name('data_kelompok_umur.update');
Route::delete('/data-kelompok-umur/{id}', [DataKelompokUmurController::class, 'destroy'])->name('data_kelompok_umur.destroy');



Route::prefix('berita')->group(function () {
    Route::get('/', [NewsController::class, 'index'])->name('news.index'); // Menampilkan daftar berita
    Route::get('/create', [NewsController::class, 'create'])->name('news.create'); // Form tambah berita
    Route::post('/', [NewsController::class, 'store'])->name('news.store'); // Simpan berita baru
    Route::get('/{news}', [NewsController::class, 'show'])->name('news.show'); // Menampilkan detail berita
    Route::get('/{news}/edit', [NewsController::class, 'edit'])->name('news.edit'); // Form edit berita
    Route::put('/{news}', [NewsController::class, 'update'])->name('news.update'); // Update berita
    Route::delete('/{news}', [NewsController::class, 'destroy'])->name('news.destroy'); // Hapus berita

});

Route::prefix('gallery')->group(function () {
    Route::get('/', [GalleryController::class, 'index'])->name('gallery.index');
    Route::get('/create', [GalleryController::class, 'create'])->name('gallery.create');
    Route::post('/', [GalleryController::class, 'store'])->name('gallery.store');
    Route::get('/{gallery}/edit', [GalleryController::class, 'edit'])->name('gallery.edit');
    Route::put('/{gallery}', [GalleryController::class, 'update'])->name('gallery.update');
    Route::delete('/{gallery}', [GalleryController::class, 'destroy'])->name('gallery.destroy');
});

Route::prefix('village-instruments')->group(function () {
    Route::get('/', [VillageInstrumentController::class, 'index'])->name('village-instruments.index'); 
    Route::get('/create', [VillageInstrumentController::class, 'create'])->name('village-instruments.create'); 
    Route::post('/', [VillageInstrumentController::class, 'store'])->name('village-instruments.store'); 
    Route::get('/{villageInstrument}', [VillageInstrumentController::class, 'show'])->name('village-instruments.show'); 
    Route::get('/{villageInstrument}/edit', [VillageInstrumentController::class, 'edit'])->name('village-instruments.edit'); 
    Route::put('/{villageInstrument}', [VillageInstrumentController::class, 'update'])->name('village-instruments.update'); 
    Route::delete('/{villageInstrument}', [VillageInstrumentController::class, 'destroy'])->name('village-instruments.destroy'); 
});
Route::get('/admin/kades', [VillageInstrumentController::class, 'getKades'])->name('getkades');
Route::get('/admin/perangkat-desa', [VillageInstrumentController::class, 'getPerangkatDesa'])->name('perangkat-desa');
Route::get('/admin/struktur', [VillageInstrumentController::class, 'getStrukturDesa'])->name('getStrukturDesa');
