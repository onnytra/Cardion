<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/olympiad/cetak-kartu', function () {
    return view('olimpiade/cetak-kartu', ['title' => 'Olimpiade | Cardion UIN Malang', 'slug' => 'cetak-kartu']);
});

Route::get('/olympiad/sertifikat', function () {
    return view('olimpiade/sertifikat', ['title' => 'Olimpiade | Cardion UIN Malang', 'slug' => 'sertifikat']);
});

Route::get('/olympiad/ujian', function () {
    return view('olimpiade/ujian', ['title' => 'Olimpiade | Cardion UIN Malang', 'slug' => 'ujian']);
});

Route::get('/olympiad/ujian/detail', function () {
    return view('olimpiade/detail-ujian', ['title' => 'Olimpiade | Cardion UIN Malang', 'slug' => 'detail']);
});

Route::get('/olympiad/ujian/history', function () {
    return view('olimpiade/history-ujian', ['title' => 'Olimpiade | Cardion UIN Malang', 'slug' => 'history']);
});

Route::get('/olympiad/pengumuman', function () {
    return view('olimpiade/pengumuman', ['title' => 'Olimpiade | Cardion UIN Malang', 'slug' => 'pengumuman']);
});

Route::get('/olympiad/pengumuman/detail', function () {
    return view('olimpiade/detail-pengumuman', ['title' => 'Olimpiade | Cardion UIN Malang', 'slug' => 'detail']);
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

Route::get('/public-poster/cetak-kartu', function () {
    return view('publicposter/cetak-kartu', ['title' => 'Public Poster | Cardion UIN Malang', 'slug' => 'cetak-kartu']);
});

Route::get('/public-poster/sertifikat', function () {
    return view('publicposter/sertifikat', ['title' => 'Public Poster | Cardion UIN Malang', 'slug' => 'sertifikat']);
});

Route::get('/public-poster/ujian', function () {
    return view('publicposter/ujian', ['title' => 'Public Poster | Cardion UIN Malang', 'slug' => 'ujian']);
});

Route::get('/public-poster/ujian/detail', function () {
    return view('publicposter/detail-ujian', ['title' => 'Public Poster | Cardion UIN Malang', 'slug' => 'detail']);
});

Route::get('/public-poster/ujian/history', function () {
    return view('publicposter/history-ujian', ['title' => 'Public Poster | Cardion UIN Malang', 'slug' => 'history']);
});

Route::get('/public-poster/pengumuman', function () {
    return view('publicposter/pengumuman', ['title' => 'Public Poster | Cardion UIN Malang', 'slug' => 'pengumuman']);
});

Route::get('/public-poster/pengumuman/detail', function () {
    return view('publicposter/detail-pengumuman', ['title' => 'Public Poster | Cardion UIN Malang', 'slug' => 'detail']);
});

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
Route::get('/admin/olimpiade', function () {
    return view('admin/olimpiade/dashboard', ['title' => 'Dashboard Olimpiade', 'slug' => 'olimpiade']);
});

Route::get('/admin/olimpiade/cabang', function () {
    return view('admin/olimpiade/cabang/cabang', ['title' => 'Cabang', 'slug' => 'cabang']);
});

Route::get('/admin/olimpiade/cabang/add', function () {
    return view('admin/olimpiade/cabang/add-cabang', ['title' => 'Tambah Cabang', 'slug' => 'add']);
});

Route::get('/admin/olimpiade/cabang/edit', function () {
    return view('admin/olimpiade/cabang/edit-cabang', ['title' => 'Edit Cabang', 'slug' => 'edit']);
});

Route::get('/admin/olimpiade/cabang/rayon', function () {
    return view('admin/olimpiade/cabang/rayon', ['title' => 'Rayon', 'slug' => 'rayon']);
});

Route::get('/admin/olimpiade/cabang/rayon/add', function () {
    return view('admin/olimpiade/cabang/add-rayon', ['title' => 'Tambah Rayon', 'slug' => 'add']);
});

Route::get('/admin/olimpiade/cabang/rayon/edit', function () {
    return view('admin/olimpiade/cabang/edit-rayon', ['title' => 'Edit Rayon', 'slug' => 'edit']);
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
