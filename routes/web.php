<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CabangsController;
use App\Http\Controllers\RayonsController;
use App\Http\Controllers\PesertasController;

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
    return view('index', ['title' => 'Cardion - Universitas Islam Negeri Maulana Malik ibrahim Malang', 'slug' => '/']);
});

Route::get('/olympiad', function () {
    return view('olimpiade', ['title' => 'Science & Primary Medical Olimpiad - Cardion UIN Malang', 'slug' => 'olympiad']);
});

Route::get('/olympiad/login', function () {
    return view('olimpiade/login', ['title' => 'Olimpiade | Cardion UIN Malang', 'slug' => 'login']);
});

Route::get('/olympiad/logout', function () {
    return view('olimpiade/login', ['title' => 'Olimpiade | Cardion UIN Malang', 'slug' => 'login']);
});

Route::get('/olympiad/register', function () {
    return view('olimpiade/register', ['title' => 'Olimpiade | Cardion UIN Malang', 'slug' => 'register']);
});

Route::get('/olympiad/account', function () {
    return view('olimpiade/account', ['title' => 'Olimpiade | Cardion UIN Malang', 'slug' => 'account']);
});

Route::get('/olympiad/dashboard', function () {
    return view('olimpiade/dashboard', ['title' => 'Olimpiade | Cardion UIN Malang', 'slug' => 'dashboard']);
});

Route::get('/olympiad/pembayaran', function () {
    return view('olimpiade/pembayaran/pembayaran', ['title' => 'Olimpiade | Cardion UIN Malang', 'slug' => 'pembayaran']);
});

Route::get('/olympiad/pembayaran/add', function () {
    return view('olimpiade/pembayaran/add-pembayaran', ['title' => 'Olimpiade | Cardion UIN Malang', 'slug' => 'add']);
});

Route::get('/olympiad/pembayaran/edit', function () {
    return view('olimpiade/pembayaran/edit-pembayaran', ['title' => 'Olimpiade | Cardion UIN Malang', 'slug' => 'edit']);
});

Route::get('/olympiad/registrasi', function () {
    return view('olimpiade/registrasi', ['title' => 'Olimpiade | Cardion UIN Malang', 'slug' => 'registrasi']);
});

Route::get('/olympiad/cetak-kartu', function () {
    return view('olimpiade/cetak-kartu', ['title' => 'Olimpiade | Cardion UIN Malang', 'slug' => 'cetak-kartu']);
});

Route::get('/olympiad/sertifikat', function () {
    return view('olimpiade/sertifikat', ['title' => 'Olimpiade | Cardion UIN Malang', 'slug' => 'sertifikat']);
});

Route::get('/olympiad/ujian', function () {
    return view('olimpiade/ujian/ujian', ['title' => 'Olimpiade | Cardion UIN Malang', 'slug' => 'ujian']);
});

Route::get('/olympiad/ujian/detail', function () {
    return view('olimpiade/ujian/detail-ujian', ['title' => 'Olimpiade | Cardion UIN Malang', 'slug' => 'detail']);
});

Route::get('/olympiad/ujian/detail/start', function () {
    return view('olimpiade/ujian/start-ujian', ['title' => 'Olimpiade | Cardion UIN Malang', 'slug' => 'start']);
});

Route::get('/olympiad/ujian/history', function () {
    return view('olimpiade/ujian/history-ujian', ['title' => 'Olimpiade | Cardion UIN Malang', 'slug' => 'history']);
});

Route::get('/olympiad/ujian/history/hasil', function () {
    return view('olimpiade/ujian/hasil-ujian', ['title' => 'Olimpiade | Cardion UIN Malang', 'slug' => 'hasil']);
});

Route::get('/olympiad/pengumuman', function () {
    return view('olimpiade/pengumuman/pengumuman', ['title' => 'Olimpiade | Cardion UIN Malang', 'slug' => 'pengumuman']);
});

Route::get('/olympiad/pengumuman/detail', function () {
    return view('olimpiade/pengumuman/detail-pengumuman', ['title' => 'Olimpiade | Cardion UIN Malang', 'slug' => 'detail']);
});

Route::get('/public-poster', function () {
    return view('public-poster', ['title' => 'Public Poster - Cardion UIN Malang', 'slug' => 'public-poster']);
});

Route::get('/public-poster/login', function () {
    return view('publicposter/login', ['title' => 'Public Poster | Cardion UIN Malang', 'slug' => 'login']);
});

Route::get('/public-poster/logout', function () {
    return view('publicposter/login', ['title' => 'Public Poster | Cardion UIN Malang', 'slug' => 'login']);
});

Route::get('/public-poster/register', function () {
    return view('publicposter/register', ['title' => 'Public Poster | Cardion UIN Malang', 'slug' => 'register']);
});

Route::get('/public-poster/account', function () {
    return view('publicposter/account', ['title' => 'Public Poster | Cardion UIN Malang', 'slug' => 'account']);
});

Route::get('/public-poster/dashboard', function () {
    return view('publicposter/dashboard', ['title' => 'Public Poster | Cardion UIN Malang', 'slug' => 'dashboard']);
});

Route::get('/public-poster/pembayaran', function () {
    return view('publicposter/pembayaran/pembayaran', ['title' => 'Olimpiade | Cardion UIN Malang', 'slug' => 'pembayaran']);
});

Route::get('/public-poster/pembayaran/add', function () {
    return view('publicposter/pembayaran/add-pembayaran', ['title' => 'Olimpiade | Cardion UIN Malang', 'slug' => 'add']);
});

Route::get('/public-poster/pembayaran/edit', function () {
    return view('publicposter/pembayaran/edit-pembayaran', ['title' => 'Olimpiade | Cardion UIN Malang', 'slug' => 'edit']);
});

Route::get('/public-poster/registrasi', function () {
    return view('publicposter/registrasi', ['title' => 'Olimpiade | Cardion UIN Malang', 'slug' => 'registrasi']);
});

Route::get('/public-poster/cetak-kartu', function () {
    return view('publicposter/cetak-kartu', ['title' => 'Public Poster | Cardion UIN Malang', 'slug' => 'cetak-kartu']);
});

Route::get('/public-poster/sertifikat', function () {
    return view('publicposter/sertifikat', ['title' => 'Public Poster | Cardion UIN Malang', 'slug' => 'sertifikat']);
});

Route::get('/public-poster/pengumpulan-karya', function () {
    return view('publicposter/pengumpulan-karya/pengumpulan-karya', ['title' => 'Public Poster | Cardion UIN Malang', 'slug' => 'pengumpulan-karya']);
});

Route::get('/public-poster/pengumpulan-karya/add', function () {
    return view('publicposter/pengumpulan-karya/add-pengumpulan-karya', ['title' => 'Public Poster | Cardion UIN Malang', 'slug' => 'add']);
});

Route::get('/public-poster/pengumpulan-karya/edit', function () {
    return view('publicposter/pengumpulan-karya/edit-pengumpulan-karya', ['title' => 'Public Poster | Cardion UIN Malang', 'slug' => 'edit']);
});

// Admin Site
Route::get('/admin/login', function () {
    return view('admin/login', ['title' => 'Login', 'slug' => 'login']);
});

Route::get('/admin/logout', function () {
    return view('admin/login', ['title' => 'Login', 'slug' => 'logout']);
});

Route::get('/admin/register', function () {
    return view('admin/register', ['title' => 'Register', 'slug' => 'register']);
});

Route::get('/admin/account', function () {
    return view('admin/account', ['title' => 'Akun Saya', 'slug' => 'account']);
});

// Admin Dashboard
Route::get('/admin', function () {
    return view('admin/main/dashboard', ['title' => 'Main Dashboard', 'slug' => 'admin']);
});

Route::get('/admin/main/user', function () {
    return view('admin/main/user/user', ['title' => 'User', 'slug' => 'user']);
});

Route::get('/admin/main/user/add', function () {
    return view('admin/main/user/add-user', ['title' => 'Tambah User', 'slug' => 'add']);
});

Route::get('/admin/main/user/edit', function () {
    return view('admin/main/user/edit-user', ['title' => 'Edit User', 'slug' => 'edit']);
});

Route::get('/admin/main/user-type', function () {
    return view('admin/main/user-type/user-type', ['title' => 'User Type', 'slug' => 'user-type']);
});

Route::get('/admin/main/user-type/add', function () {
    return view('admin/main/user-type/add-user-type', ['title' => 'Tambah User Type', 'slug' => 'add']);
});

Route::get('/admin/main/user-type/edit', function () {
    return view('admin/main/user-type/edit-user-type', ['title' => 'Edit User Type', 'slug' => 'edit']);
});

Route::get('/admin/main/sertifikat', function () {
    return view('admin/main/sertifikat', ['title' => 'Sertifikat', 'slug' => 'sertifikat']);
});

Route::get('/admin/main/settings', function () {
    return view('admin/main/settings', ['title' => 'Settings', 'slug' => 'settings']);
});

// Olimpiade
Route::group(['as' => 'olimpiade.', 'prefix' => '/admin/olimpiade', 'event' => 'olimpiade'], function () {
    Route::group(['as' => 'cabang.', 'prefix' => '/cabang'], function () {
        Route::get('/data', [CabangsController::class, 'index'])->name('index');
        Route::get('/add', [CabangsController::class, 'create'])->name('create');
        Route::post('/store', [CabangsController::class, 'store'])->name('store');
        Route::get('/edit/{cabangs}', [CabangsController::class, 'edit'])->name('edit');
        Route::put('/update/{cabangs}', [CabangsController::class, 'update'])->name('update');
        Route::delete('/delete/{cabangs}', [CabangsController::class, 'destroy'])->name('delete');
    });

    Route::group(['as' => 'rayon.', 'prefix' => '/rayon'], function () {
        Route::get('/data/{cabangs}', [RayonsController::class, 'index'])->name('index');
        Route::get('/add/{cabangs}', [RayonsController::class, 'create'])->name('create');
        Route::post('/store/{cabangs}', [RayonsController::class, 'store'])->name('store');
        Route::get('/edit/{rayons}', [RayonsController::class, 'edit'])->name('edit');
        Route::put('/update/{rayons}', [RayonsController::class, 'update'])->name('update');
        Route::delete('/delete/{rayons}', [RayonsController::class, 'destroy'])->name('delete');
    });

    Route::group(['as' => 'peserta.', 'prefix' => '/peserta'], function () {
        Route::get('/data', [PesertasController::class, 'index'])->name('index');
        Route::get('/add', [PesertasController::class, 'create'])->name('create');
        Route::post('/store', [PesertasController::class, 'store'])->name('store');
        Route::get('/edit/{pesertas}', [PesertasController::class, 'edit'])->name('edit');
        Route::put('/update/{pesertas}', [PesertasController::class, 'update'])->name('update');
        Route::delete('/delete/{pesertas}', [PesertasController::class, 'destroy'])->name('delete');
    });
});

Route::get('/get-rayons', [RayonsController::class, 'getRayons']);

Route::get('/admin/olimpiade', function () {
    return view('admin/olimpiade/dashboard', ['title' => 'Dashboard Olimpiade', 'slug' => 'olimpiade']);
});

Route::get('/admin/olimpiade/peserta', function () {
    return view('admin/olimpiade/peserta/peserta', ['title' => 'Peserta', 'slug' => 'peserta']);
});

Route::get('/admin/olimpiade/tambah-peserta-offline', function () {
    return view('admin/olimpiade/peserta/tambah-peserta-offline', ['title' => 'Tambah Peserta Offline', 'slug' => 'tambah-peserta-offline']);
});

Route::get('/admin/olimpiade/edit', function () {
    return view('admin/olimpiade/peserta/edit-peserta-offline', ['title' => 'Edit Peserta Offline', 'slug' => 'edit']);
});

Route::get('/admin/olimpiade/tambah-peserta-panitia', function () {
    return view('admin/olimpiade/peserta/tambah-peserta-panitia', ['title' => 'Tambah Peserta Panitia', 'slug' => 'tambah-peserta-panitia']);
});

Route::get('/admin/olimpiade/ujian', function () {
    return view('admin/olimpiade/ujian/ujian', ['title' => 'Ujian', 'slug' => 'ujian']);
});

Route::get('/admin/olimpiade/ujian/add', function () {
    return view('admin/olimpiade/ujian/add-ujian', ['title' => 'Tambah Ujian', 'slug' => 'add']);
});

Route::get('/admin/olimpiade/ujian/edit', function () {
    return view('admin/olimpiade/ujian/edit-ujian', ['title' => 'Edit Ujian', 'slug' => 'edit']);
});

Route::get('/admin/olimpiade/ujian/soal', function () {
    return view('admin/olimpiade/ujian/soal/soal-ujian', ['title' => 'Daftar Soal', 'slug' => 'soal']);
});

Route::get('/admin/olimpiade/ujian/soal/add', function () {
    return view('admin/olimpiade/ujian/soal/add-soal', ['title' => 'Tambah Soal', 'slug' => 'tambah']);
});

Route::get('/admin/olimpiade/ujian/soal/edit', function () {
    return view('admin/olimpiade/ujian/soal/edit-soal', ['title' => 'Edit Soal', 'slug' => 'edit']);
});

Route::get('/admin/olimpiade/ujian/soal/preview', function () {
    return view('admin/olimpiade/ujian/soal/preview-soal', ['title' => 'Preview Soal', 'slug' => 'preview']);
});

Route::get('/admin/olimpiade/ujian/soal/subyek', function () {
    return view('admin/olimpiade/ujian/subyek/subyek-ujian', ['title' => 'Daftar Subyek', 'slug' => 'subyek']);
});

Route::get('/admin/olimpiade/ujian/soal/subyek/add', function () {
    return view('admin/olimpiade/ujian/subyek/add-subyek', ['title' => 'Tambah Subyek', 'slug' => 'tambah']);
});

Route::get('/admin/olimpiade/ujian/soal/subyek/edit', function () {
    return view('admin/olimpiade/ujian/subyek/edit-subyek', ['title' => 'Edit Subyek', 'slug' => 'edit']);
});

Route::get('/admin/olimpiade/monitoring-ujian', function () {
    return view('admin/olimpiade/monitoring/monitoring-ujian', ['title' => 'Monitoring Ujian', 'slug' => 'monitoring-ujian']);
});

Route::get('/admin/olimpiade/monitoring-ujian/detail', function () {
    return view('admin/olimpiade/monitoring/detail-monitoring', ['title' => 'Detail Monitoring Ujian', 'slug' => 'detail']);
});

Route::get('/admin/olimpiade/monitoring-ujian/detail/detail-peserta', function () {
    return view('admin/olimpiade/monitoring/detail-peserta', ['title' => 'Detail Peserta Monitoring Ujian', 'slug' => 'detail-peserta']);
});

Route::get('/admin/olimpiade/pengumuman', function () {
    return view('admin/olimpiade/pengumuman/pengumuman', ['title' => 'Pengumuman', 'slug' => 'pengumuman']);
});

Route::get('/admin/olimpiade/pengumuman/add', function () {
    return view('admin/olimpiade/pengumuman/add-pengumuman', ['title' => 'Tambah Pengumuman', 'slug' => 'add']);
});

Route::get('/admin/olimpiade/pengumuman/edit', function () {
    return view('admin/olimpiade/pengumuman/edit-pengumuman', ['title' => 'Edit Pengumuman', 'slug' => 'edit']);
});

Route::get('/admin/olimpiade/assign-test', function () {
    return view('admin/olimpiade/assign-test/assign-test', ['title' => 'Assign Test', 'slug' => 'assign-test']);
});

Route::get('/admin/olimpiade/assign-test/detail', function () {
    return view('admin/olimpiade/assign-test/detail-assign-test', ['title' => 'Assign Test', 'slug' => 'detail']);
});

Route::get('/admin/olimpiade/sesi', function () {
    return view('admin/olimpiade/sesi/sesi', ['title' => 'Sesi', 'slug' => 'sesi']);
});

Route::get('/admin/olimpiade/pembayaran', function () {
    return view('admin/olimpiade/pembayaran', ['title' => 'Pembayaran', 'slug' => 'pembayaran']);
});

Route::get('/admin/olimpiade/gelombang-pembayaran', function () {
    return view('admin/olimpiade/gelombang-pembayaran/gelombang-pembayaran', ['title' => 'Gelombang Pembayaran', 'slug' => 'gelombang-pembayaran']);
});

Route::get('/admin/olimpiade/gelombang-pembayaran/add', function () {
    return view('admin/olimpiade/gelombang-pembayaran/add-gelombang', ['title' => 'Tambah Gelombang Pembayaran', 'slug' => 'add']);
});

Route::get('/admin/olimpiade/gelombang-pembayaran/edit', function () {
    return view('admin/olimpiade/gelombang-pembayaran/edit-gelombang', ['title' => 'Edit Gelombang Pembayaran', 'slug' => 'edit']);
});

// Public Poster
Route::get('/admin/public-poster', function () {
    return view('admin/public-poster/dashboard', ['title' => 'Dashboard Public Poster', 'slug' => 'public-poster']);
});

Route::get('/admin/public-poster/cabang', function () {
    return view('admin/public-poster/cabang/cabang', ['title' => 'Cabang', 'slug' => 'cabang']);
});

Route::get('/admin/public-poster/cabang/add', function () {
    return view('admin/public-poster/cabang/add-cabang', ['title' => 'Tambah Cabang', 'slug' => 'add']);
});

Route::get('/admin/public-poster/cabang/edit', function () {
    return view('admin/public-poster/cabang/edit-cabang', ['title' => 'Edit Cabang', 'slug' => 'edit']);
});

Route::get('/admin/public-poster/cabang/rayon', function () {
    return view('admin/public-poster/cabang/rayon', ['title' => 'Rayon', 'slug' => 'rayon']);
});

Route::get('/admin/public-poster/cabang/rayon/add', function () {
    return view('admin/public-poster/cabang/add-rayon', ['title' => 'Tambah Rayon', 'slug' => 'add']);
});

Route::get('/admin/public-poster/cabang/rayon/edit', function () {
    return view('admin/public-poster/cabang/edit-rayon', ['title' => 'Edit Rayon', 'slug' => 'edit']);
});

Route::get('/admin/public-poster/peserta', function () {
    return view('admin/public-poster/peserta/peserta', ['title' => 'Peserta', 'slug' => 'peserta']);
});

Route::get('/admin/public-poster/tambah-peserta-offline', function () {
    return view('admin/public-poster/peserta/tambah-peserta-offline', ['title' => 'Tambah Peserta Offline', 'slug' => 'tambah-peserta-offline']);
});

Route::get('/admin/public-poster/edit', function () {
    return view('admin/public-poster/peserta/edit-peserta-offline', ['title' => 'Edit Peserta Offline', 'slug' => 'edit']);
});

Route::get('/admin/public-poster/tambah-peserta-panitia', function () {
    return view('admin/public-poster/peserta/tambah-peserta-panitia', ['title' => 'Tambah Peserta Panitia', 'slug' => 'tambah-peserta-panitia']);
});

Route::get('/admin/public-poster/pengumpulan-karya', function () {
    return view('admin/public-poster/pengumpulan/pengumpulan-karya', ['title' => 'Pengumpulan Karya', 'slug' => 'pengumpulan-karya']);
});

Route::get('/admin/public-poster/pengumpulan-karya/add', function () {
    return view('admin/public-poster/pengumpulan/add-pengumpulan-karya', ['title' => 'Tambah Pengumpulan Karya', 'slug' => 'add']);
});

Route::get('/admin/public-poster/pengumpulan-karya/edit', function () {
    return view('admin/public-poster/pengumpulan/edit-pengumpulan-karya', ['title' => 'Edit Pengumpulan Karya', 'slug' => 'edit']);
});

Route::get('/admin/public-poster/penilaian', function () {
    return view('admin/public-poster/penilaian', ['title' => 'Penilaian', 'slug' => 'penilaian']);
});

Route::get('/admin/public-poster/assign-test', function () {
    return view('admin/public-poster/assign-test/assign-test', ['title' => 'Assign Test', 'slug' => 'assign-test']);
});

Route::get('/admin/public-poster/assign-test/detail', function () {
    return view('admin/public-poster/assign-test/detail-assign-test', ['title' => 'Detail Assign Test', 'slug' => 'detail']);
});

Route::get('/admin/public-poster/sesi', function () {
    return view('admin/public-poster/sesi/sesi', ['title' => 'Sesi', 'slug' => 'sesi']);
});

Route::get('/admin/public-poster/pembayaran', function () {
    return view('admin/public-poster/pembayaran', ['title' => 'Pembayaran', 'slug' => 'pembayaran']);
});

Route::get('/admin/public-poster/gelombang-pembayaran', function () {
    return view('admin/public-poster/gelombang-pembayaran/gelombang-pembayaran', ['title' => 'Gelombang Pembayaran', 'slug' => 'gelombang-pembayaran']);
});

Route::get('/admin/public-poster/gelombang-pembayaran/add', function () {
    return view('admin/public-poster/gelombang-pembayaran/add-gelombang', ['title' => 'Tambah Gelombang Pembayaran', 'slug' => 'add']);
});

Route::get('/admin/public-poster/gelombang-pembayaran/edit', function () {
    return view('admin/public-poster/gelombang-pembayaran/edit-gelombang', ['title' => 'Edit Gelombang Pembayaran', 'slug' => 'edit']);
});
