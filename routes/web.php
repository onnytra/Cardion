<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CabangsController;
use App\Http\Controllers\RayonsController;
use App\Http\Controllers\PesertasController;
use App\Http\Controllers\UjiansController;
use App\Http\Controllers\SesisController;
use App\Http\Controllers\GelombangPembayaransController;
use App\Http\Controllers\PembayaransController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserTypesController;
use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\MainDashboardController;
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

// Admin Dashboard
Route::get('/admin/main/sertifikat', function () {
    return view('admin/main/sertifikat', ['title' => 'Sertifikat', 'slug' => 'sertifikat']);
});

Route::get('/admin/main/settings', function () {
    return view('admin/main/settings', ['title' => 'Settings', 'slug' => 'settings']);
});
//Auth
Route::group(['as' => 'auth.', 'prefix' => '/auth'], function () {
    Route::group(['as' => 'admin.', 'prefix' => '/admin'], function () {
        Route::get('/login', [AuthController::class, 'admin_login_page'])->name('login');
        Route::post('/login', [AuthController::class, 'admin_login_process'])->name('login.process');
        Route::get('/logout', [AuthController::class, 'admin_logout'])->name('logout');
        Route::get('/edit-profile/{users}', [AuthController::class, 'edit_profile'])->name('edit-profile');
        Route::put('/update-profile/{users}', [AuthController::class, 'update_profile'])->name('update-profile');
    });
});
//Main Dashboard
Route::group(['as' => 'dashboard.', 'prefix' => '/admin/main'], function () {
    Route::get('/dashboard', [MainDashboardController::class, 'index'])->name('index');
    Route::get('/olimpiade', [MainDashboardController::class, 'dashboard_olimpiade'])->name('olimpiade');
    Route::get('/poster', [MainDashboardController::class, 'dashboard_poster'])->name('poster');
    
    Route::group(['as' => 'user.', 'prefix' => '/user'], function () {
        Route::get('/data', [UserController::class, 'index'])->name('index');
        Route::get('/add', [UserController::class, 'create'])->name('create');
        Route::post('/store', [UserController::class, 'store'])->name('store');
        Route::get('/edit/{users}', [UserController::class, 'edit'])->name('edit');
        Route::put('/update/{users}', [UserController::class, 'update'])->name('update');
        Route::delete('/delete/{users}', [UserController::class, 'destroy'])->name('delete');
    });

    Route::group(['as' => 'user-type.', 'prefix' => '/user-type'], function () {
        Route::get('/data', [UserTypesController::class, 'index'])->name('index');
        Route::get('/add', [UserTypesController::class, 'create'])->name('create');
        Route::post('/store', [UserTypesController::class, 'store'])->name('store');
        Route::get('/edit/{role}', [UserTypesController::class, 'edit'])->name('edit');
        Route::put('/update/{role}', [UserTypesController::class, 'update'])->name('update');
        Route::delete('/delete/{role}', [UserTypesController::class, 'destroy'])->name('delete');
    });
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

    Route::group(['as' => 'ujian.', 'prefix' => '/ujian'], function () {
        Route::get('/data', [UjiansController::class, 'index'])->name('index');
        Route::get('/add', [UjiansController::class, 'create'])->name('create');
        Route::post('/store', [UjiansController::class, 'store'])->name('store');
        Route::get('/edit/{ujians}', [UjiansController::class, 'edit'])->name('edit');
        Route::put('/update/{ujians}', [UjiansController::class, 'update'])->name('update');
        Route::delete('/delete/{ujians}', [UjiansController::class, 'destroy'])->name('delete');
    });

    Route::group(['as' => 'sesi.', 'prefix' => '/sesi'], function () {
        Route::get('/data/{ujians}', [SesisController::class, 'index'])->name('index');
        Route::get('/add/{ujians}', [SesisController::class, 'create'])->name('create');
        Route::post('/store/{ujians}', [SesisController::class, 'store'])->name('store');
        Route::get('/edit/{sesis}', [SesisController::class, 'edit'])->name('edit');
        Route::put('/update/{sesis}', [SesisController::class, 'update'])->name('update');
        Route::delete('/delete/{sesis}', [SesisController::class, 'destroy'])->name('delete');
    });

    Route::group(['as' => 'gelombang_pembayaran.', 'prefix' => '/gelombang-pembayaran'], function () {
        Route::get('/data', [GelombangPembayaransController::class, 'index'])->name('index');
        Route::get('/add', [GelombangPembayaransController::class, 'create'])->name('create');
        Route::post('/store', [GelombangPembayaransController::class, 'store'])->name('store');
        Route::get('/edit/{gelombang_pembayarans}', [GelombangPembayaransController::class, 'edit'])->name('edit');
        Route::put('/update/{gelombang_pembayarans}', [GelombangPembayaransController::class, 'update'])->name('update');
        Route::delete('/delete/{gelombang_pembayarans}', [GelombangPembayaransController::class, 'destroy'])->name('delete');
    });

    Route::group(['as' => 'pembayaran.', 'prefix' => '/pembayaran'], function () {
        Route::get('/data', [PembayaransController::class, 'index'])->name('index');
        Route::get('/add', [PembayaransController::class, 'create'])->name('create');
        Route::post('/store', [PembayaransController::class, 'store'])->name('store');
        Route::get('/edit/{pembayarans}', [PembayaransController::class, 'edit'])->name('edit');
        Route::put('/update/{pembayarans}', [PembayaransController::class, 'update'])->name('update');
        Route::delete('/delete/{pembayarans}', [PembayaransController::class, 'destroy'])->name('delete');
    });
});

Route::get('/get-rayons', [RayonsController::class, 'getRayons']);


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
