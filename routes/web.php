<?php

use App\Http\Controllers\AssignTestsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CabangsController;
use App\Http\Controllers\CKEditorController;
use App\Http\Controllers\RayonsController;
use App\Http\Controllers\PesertasController;
use App\Http\Controllers\UjiansController;
use App\Http\Controllers\SesisController;
use App\Http\Controllers\GelombangPembayaransController;
use App\Http\Controllers\PembayaransController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserTypesController;
use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\auth\AuthPesertaController;
use App\Http\Controllers\Export\ExportController;
use App\Http\Controllers\Import\ImportController;
use App\Http\Controllers\KaryasController;
use App\Http\Controllers\MainDashboardController;
use App\Http\Controllers\SoalsController;
use App\Http\Controllers\SubyeksController;
use App\Http\Controllers\mail\MailsController;
use App\Http\Controllers\MonitoringUjianController;
use App\Http\Controllers\PengumumansController;
use App\Http\Controllers\PengumpulanKaryasController;
use App\Http\Controllers\user\olimpiade\CetakKartuController;
use App\Http\Controllers\user\olimpiade\MainOlimpiadeController;
use App\Http\Controllers\user\olimpiade\PembayaranController;
use App\Http\Controllers\user\olimpiade\PengumpulanController;
use App\Http\Controllers\user\olimpiade\PengumumanController;
use App\Http\Controllers\user\olimpiade\RegistrasiController;
use App\Http\Controllers\user\olimpiade\SertifikatController;
use App\Http\Controllers\user\olimpiade\UjianController;

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

Route::get('/olimpiade', function () {
    return view('olimpiade', ['title' => 'Science & Primary Medical Olimpiad - Cardion UIN Malang', 'slug' => 'olympiade']);
});

Route::get('/public-poster', function () {
    return view('public-poster', ['title' => 'Science & Primary Medical Olimpiad - Cardion UIN Malang', 'slug' => 'Public Poster']);
});

// User Poster Side
Route::group(['as' => 'poster.', 'prefix' => '/poster', 'event' => 'poster'], function () {
    Route::middleware(['guest:peserta'])->group(function () {
        Route::get('/login', [AuthPesertaController::class, 'login_page'])->name('login');
        Route::post('/login', [AuthPesertaController::class, 'login_process'])->name('login.process');
        Route::get('/register', [AuthPesertaController::class, 'register_page'])->name('register');
        Route::post('/register', [AuthPesertaController::class, 'register_process'])->name('register.process');

        Route::get('forgotpassword', [AuthPesertaController::class, 'forgot_password'])->name('forgotpassword');
        Route::post('forgotpassword', [MailsController::class, 'forgot_password'])->name('forgotpassword.mail');
        Route::get('/resetpassword/{token}', [AuthPesertaController::class, 'reset_password_page'])->name('resetpassword.page');
        Route::put('/resetpassword', [AuthPesertaController::class, 'reset_password_process'])->name('resetpassword.process');
    });
    Route::middleware(['peserta'])->group(function () {
        Route::get('/logout', [AuthPesertaController::class, 'logout'])->name('logout');
        Route::get('/account/{pesertas}', [AuthPesertaController::class, 'edit_profile'])->name('account');
        Route::put('/account/{pesertas}', [AuthPesertaController::class, 'update_profile'])->name('account.update');

        Route::get('/pengumpulan-karya', [PengumpulanController::class, 'index'])->name('karya');
        Route::get('/pengumpulan-karya/add/{pengumpulan_karyas}', [PengumpulanController::class, 'create'])->name('add-karya');
        Route::post('/pengumpulan-karya/store', [PengumpulanController::class, 'store'])->name('store-karya');
        Route::get('/pengumpulan-karya/show/{pengumpulan_karyas}', [PengumpulanController::class, 'show'])->name('view-karya');
        // Route::get('/pengumpulan-karya/edit', [PengumpulanController::class, 'edit'])->name('edit-karya');
        // Route::put('/pengumpulan-karya/update', [PengumpulanController::class, 'update'])->name('update-karya');
    });
});

//User Olimpiade Side
Route::group(['as' => 'olimpiade.', 'prefix' => '/olimpiade', 'event' => 'olimpiade'], function () {

    Route::middleware(['guest:peserta'])->group(function () {
        Route::get('/login', [AuthPesertaController::class, 'login_page'])->name('login');
        Route::post('/login', [AuthPesertaController::class, 'login_process'])->name('login.process');
        Route::get('/register', [AuthPesertaController::class, 'register_page'])->name('register');
        Route::post('/register', [AuthPesertaController::class, 'register_process'])->name('register.process');
        Route::get('forgotpassword', [AuthPesertaController::class, 'forgot_password'])->name('forgotpassword');
        Route::post('forgotpassword', [MailsController::class, 'forgot_password'])->name('forgotpassword.mail');
        Route::get('/resetpassword/{token}', [AuthPesertaController::class, 'reset_password_page'])->name('resetpassword.page');
        Route::put('/resetpassword', [AuthPesertaController::class, 'reset_password_process'])->name('resetpassword.process');
    });

    Route::middleware(['peserta'])->group(function () {
        Route::get('/logout', [AuthPesertaController::class, 'logout'])->name('logout');
        Route::get('/account/{pesertas}', [AuthPesertaController::class, 'edit_profile'])->name('account');
        Route::put('/account/{pesertas}', [AuthPesertaController::class, 'update_profile'])->name('account.update');
        Route::get('/ujian', [UjianController::class, 'index'])->name('ujian');
        Route::get('/ujian/detail/{ujians}/{sesis}', [UjianController::class, 'detail'])->name('detail-ujian');
        Route::get('/ujian/detail/start/{ujians}/{sesis}/{soals}', [UjianController::class, 'detail_start'])->name('start-ujian');
        Route::post('/ujian/simpan_jawaban', [UjianController::class, 'simpan_jawaban'])->name('simpan_jawaban');
        Route::post('/ujian/hapus_jawaban', [UjianController::class, 'hapus_jawaban'])->name('hapus_jawaban');
        Route::post('/ujian/finish', [UjianController::class, 'finish_ujian'])->name('finish_ujian');
        Route::get('/ujian/history', [UjianController::class, 'history'])->name('history_ujian');
        Route::get('/ujian/history/{ujians}', [UjianController::class, 'hasil'])->name('hasil_ujian');
        Route::get('/ujian/assing-test/{ujians}', [UjianController::class, 'kumpulkan_ujian'])->name('kumpulkan_ujian');
    });
});
// All User Side
Route::group(['as' => 'user.', 'prefix' => '/user'], function () {
    Route::middleware(['peserta'])->group(function () {
        Route::get('/dashboard', [MainOlimpiadeController::class, 'index'])->name('dashboard');
        // Registrasi
        Route::get('/registrasi', [RegistrasiController::class, 'index'])->name('registrasi');
        Route::put('/registrasi/update', [RegistrasiController::class, 'update_data_peserta'])->name('registrasi-action');
        // Pembayaran
        Route::get('pembayaran', [PembayaranController::class, 'index'])->name('pembayaran');
        Route::get('pembayaran/add', [PembayaranController::class, 'create'])->name('add-pembayaran');
        Route::post('pembayaran', [PembayaranController::class, 'store'])->name('store-pembayaran');
        Route::get('pembayaran/edit', [PembayaranController::class, 'edit'])->name('edit-pembayaran');
        Route::post('pembayaran/update', [PembayaranController::class, 'update'])->name('update-pembayaran');
        Route::get('pembayaran/konfirmasi', [PembayaranController::class, 'konfirmasi_pembayaran_user'])->name('konfirmasi-pembayaran');
        // Pengumuman
        Route::get('/pengumuman', [PengumumanController::class, 'index'])->name('pengumuman');
        Route::get('/pengumuman/detail', [PengumumanController::class, 'detail'])->name('detail-pengumuman');
        // Cetak Kartu
        Route::get('/cetak-kartu', [CetakKartuController::class, 'index'])->name('cetak_kartu');
        Route::get('/cetak-kartu/cetak', [CetakKartuController::class, 'cetak'])->name('cetak_kartu_process');
        Route::get('/kartu/peserta/{pesertas}', [CetakKartuController::class, 'show_peserta'])->name('kartu_peserta');
        // Sertifikat
        Route::get('/sertifikat', [SertifikatController::class, 'index'])->name('sertifikat');
        Route::get('/sertifikat/cetak', [SertifikatController::class, 'cetak'])->name('sertifikat_cetak');
        Route::get('/sertifikat/peserta/{pesertas}', [SertifikatController::class, 'show_peserta'])->name('sertifikat_peserta');
    });
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
        Route::middleware(['guest:web'])->group(function () {
            Route::get('/login', [AuthController::class, 'admin_login_page'])->name('login');
            Route::post('/login', [AuthController::class, 'admin_login_process'])->name('login.process');
        });

        Route::middleware(['admin'])->group(function () {
            Route::get('/edit-profile/{users}', [AuthController::class, 'edit_profile'])->name('edit-profile');
            Route::put('/update-profile/{users}', [AuthController::class, 'update_profile'])->name('update-profile');
            Route::get('/logout', [AuthController::class, 'admin_logout'])->name('logout');
        });
    });
});

//Main Dashboard
Route::group(['as' => 'dashboard.', 'prefix' => '/admin/main'], function () {

    Route::middleware(['admin'])->group(function () {
        Route::get('/dashboard', [MainDashboardController::class, 'index'])->name('index');
    });

    Route::group(['as' => 'user.', 'prefix' => '/user'], function () {
        Route::get('/data', [UserController::class, 'index'])->name('index')->middleware('permission:mainuser_view');
        Route::get('/add', [UserController::class, 'create'])->name('create')->middleware('permission:mainuser_create_edit');
        Route::post('/store', [UserController::class, 'store'])->name('store')->middleware('permission:mainuser_create_edit');
        Route::get('/edit/{users}', [UserController::class, 'edit'])->name('edit')->middleware('permission:mainuser_create_edit');
        Route::put('/update/{users}', [UserController::class, 'update'])->name('update')->middleware('permission:mainuser_create_edit');
        Route::delete('/delete/{users}', [UserController::class, 'destroy'])->name('delete')->middleware('permission:mainuser_delete');
    });

    Route::group(['as' => 'user-type.', 'prefix' => '/user-type'], function () {
        Route::get('/data', [UserTypesController::class, 'index'])->name('index')->middleware('permission:mainusertype_view');
        Route::get('/add', [UserTypesController::class, 'create'])->name('create')->middleware('permission:mainusertype_create_edit');
        Route::post('/store', [UserTypesController::class, 'store'])->name('store')->middleware('permission:mainusertype_create_edit');
        Route::get('/edit/{role}', [UserTypesController::class, 'edit'])->name('edit')->middleware('permission:mainusertype_create_edit');
        Route::put('/update/{role}', [UserTypesController::class, 'update'])->name('update')->middleware('permission:mainusertype_create_edit');
        Route::delete('/delete/{role}', [UserTypesController::class, 'destroy'])->name('delete')->middleware('permission:mainusertype_delete');
    });
});

// Olimpiade Dashboard
Route::group(['as' => 'olimpiade.', 'prefix' => '/admin/olimpiade', 'event' => 'olimpiade'], function () {

    Route::middleware(['admin'])->group(function () {
        Route::get('/olimpiade', [MainDashboardController::class, 'dashboard_olimpiade'])->name('dashboard');
    });
    Route::group(['as' => 'exportexcel.', 'prefix' => '/excel'], function () {
        Route::get('/peserta-lunas', [ExportController::class, 'pesertalunas'])->name('peserta-lunas')->middleware('permission:olimpeserta_view');
        Route::get('/peserta-lunas/{cabangs}', [ExportController::class, 'pesertalunas_bycabang'])->name('peserta-lunas-cabang')->middleware('permission:olimpeserta_view');
        Route::get('/peserta-belum-lunas', [ExportController::class, 'pesertabelumlunas'])->name('peserta-belum-lunas')->middleware('permission:olimpeserta_view');
        Route::get('/ujian-peserta/{ujians}', [ExportController::class, 'ujianpeserta'])->name('ujian-peserta')->middleware('permission:olimujian_view');
    });

    Route::group(['as' => 'importexcel.', 'prefix' => '/excel'], function () {
        Route::post('/import-peserta', [ImportController::class, 'importpeserta'])->name('import-peserta')->middleware('permission:olimpeserta_create_edit');
        Route::get('/format-excel', [ImportController::class, 'formatexcel'])->name('format-excel')->middleware('permission:olimpeserta_create_edit');
    });

    Route::group(['as' => 'cabang.', 'prefix' => '/cabang'], function () {
        Route::get('/data', [CabangsController::class, 'index'])->name('index')->middleware('permission:olimcabang_view');
        Route::get('/add', [CabangsController::class, 'create'])->name('create')->middleware('permission:olimcabang_create_edit');
        Route::post('/store', [CabangsController::class, 'store'])->name('store')->middleware('permission:olimcabang_create_edit');
        Route::get('/edit/{cabangs}', [CabangsController::class, 'edit'])->name('edit')->middleware('permission:olimcabang_create_edit');
        Route::put('/update/{cabangs}', [CabangsController::class, 'update'])->name('update')->middleware('permission:olimcabang_create_edit');
        Route::delete('/delete/{cabangs}', [CabangsController::class, 'destroy'])->name('delete')->middleware('permission:olimcabang_delete');
    });

    Route::group(['as' => 'rayon.', 'prefix' => '/rayon'], function () {
        Route::get('/data/{cabangs}', [RayonsController::class, 'index'])->name('index')->middleware('permission:olimrayon_view');
        Route::get('/add/{cabangs}', [RayonsController::class, 'create'])->name('create')->middleware('permission:olimrayon_create_edit');
        Route::post('/store/{cabangs}', [RayonsController::class, 'store'])->name('store')->middleware('permission:olimrayon_create_edit');
        Route::get('/edit/{rayons}', [RayonsController::class, 'edit'])->name('edit')->middleware('permission:olimrayon_create_edit');
        Route::put('/update/{rayons}', [RayonsController::class, 'update'])->name('update')->middleware('permission:olimrayon_create_edit');
        Route::delete('/delete/{rayons}', [RayonsController::class, 'destroy'])->name('delete')->middleware('permission:olimrayon_delete');
    });

    Route::group(['as' => 'peserta.', 'prefix' => '/peserta'], function () {
        Route::get('/data', [PesertasController::class, 'index'])->name('index')->middleware('permission:olimpeserta_view');
        Route::get('/add', [PesertasController::class, 'create'])->name('create')->middleware('permission:olimpeserta_create_edit');
        Route::post('/store', [PesertasController::class, 'store'])->name('store')->middleware('permission:olimpeserta_create_edit');
        Route::get('/edit/{pesertas}', [PesertasController::class, 'edit'])->name('edit')->middleware('permission:olimpeserta_create_edit');
        Route::put('/update/{pesertas}', [PesertasController::class, 'update'])->name('update')->middleware('permission:olimpeserta_create_edit');
        Route::delete('/delete/{pesertas}', [PesertasController::class, 'destroy'])->name('delete')->middleware('permission:olimpeserta_delete');

        Route::get('/excel', [PesertasController::class, 'tambah_peserta_excel'])->name('create-excel')->middleware('permission:olimpeserta_create_edit');
        Route::get('/excel/check', [PesertasController::class, 'check_peserta_excel'])->name('check-peserta-excel')->middleware('permission:olimpeserta_create_edit');
        Route::post('/excel/store', [PesertasController::class, 'store_peserta_excel'])->name('store-excel')->middleware('permission:olimpeserta_create_edit');
    });

    Route::group(['as' => 'ujian.', 'prefix' => '/ujian'], function () {
        Route::get('/data', [UjiansController::class, 'index'])->name('index')->middleware('permission:olimujian_view');
        Route::get('/add', [UjiansController::class, 'create'])->name('create')->middleware('permission:olimujian_create_edit');
        Route::post('/store', [UjiansController::class, 'store'])->name('store')->middleware('permission:olimujian_create_edit');
        Route::get('/edit/{ujians}', [UjiansController::class, 'edit'])->name('edit')->middleware('permission:olimujian_create_edit');
        Route::put('/update/{ujians}', [UjiansController::class, 'update'])->name('update')->middleware('permission:olimujian_create_edit');
        Route::delete('/delete/{ujians}', [UjiansController::class, 'destroy'])->name('delete')->middleware('permission:olimujian_delete');
    });

    Route::group(['as' => 'soal.', 'prefix' => '/soal'], function () {
        Route::get('/data/{ujians}', [SoalsController::class, 'index'])->name('index')->middleware('permission:olimujiansoal_view');
        Route::get('/add/{ujians}', [SoalsController::class, 'create'])->name('create')->middleware('permission:olimujiansoal_create_edit');
        Route::post('/store/{ujians}', [SoalsController::class, 'store'])->name('store')->middleware('permission:olimujiansoal_create_edit');
        Route::get('/edit/{soals}', [SoalsController::class, 'edit'])->name('edit')->middleware('permission:olimujiansoal_create_edit');
        Route::put('/update/{soals}', [SoalsController::class, 'update'])->name('update')->middleware('permission:olimujiansoal_create_edit');
        Route::delete('/delete/{soals}', [SoalsController::class, 'destroy'])->name('delete')->middleware('permission:olimujiansoal_delete');
    });

    Route::group(['as' => 'subyek.', 'prefix' => '/subyek'], function () {
        Route::get('/data/{ujians}', [SubyeksController::class, 'index'])->name('index')->middleware('permission:olimujiansubyek_view');
        Route::get('/add/{ujians}', [SubyeksController::class, 'create'])->name('create')->middleware('permission:olimujiansubyek_create_edit');
        Route::post('/store/{ujians}', [SubyeksController::class, 'store'])->name('store')->middleware('permission:olimujiansubyek_create_edit');
        Route::get('/edit/{subyeks}', [SubyeksController::class, 'edit'])->name('edit')->middleware('permission:olimujiansubyek_create_edit');
        Route::put('/update/{subyeks}', [SubyeksController::class, 'update'])->name('update')->middleware('permission:olimujiansubyek_create_edit');
        Route::delete('/delete/{subyeks}', [SubyeksController::class, 'destroy'])->name('delete')->middleware('permission:olimujiansubyek_delete');
    });
    Route::group(['as' => 'sesi.', 'prefix' => '/sesi'], function () {
        Route::get('/data/{ujians}', [SesisController::class, 'index'])->name('index')->middleware('permission:olimujian_view');
        Route::get('/add/{ujians}', [SesisController::class, 'create'])->name('create')->middleware('permission:olimujian_create_edit');
        Route::post('/store/{ujians}', [SesisController::class, 'store'])->name('store')->middleware('permission:olimujian_create_edit');
        Route::get('/edit/{sesis}', [SesisController::class, 'edit'])->name('edit')->middleware('permission:olimujian_create_edit');
        Route::put('/update/{sesis}', [SesisController::class, 'update'])->name('update')->middleware('permission:olimujian_create_edit');
        Route::delete('/delete/{sesis}', [SesisController::class, 'destroy'])->name('delete')->middleware('permission:olimujian_delete');
    });

    Route::group(['as' => 'gelombang_pembayaran.', 'prefix' => '/gelombang-pembayaran'], function () {
        Route::get('/data', [GelombangPembayaransController::class, 'index'])->name('index')->middleware('permission:olimgelombang_view');
        Route::get('/add', [GelombangPembayaransController::class, 'create'])->name('create')->middleware('permission:olimgelombang_create_edit');
        Route::post('/store', [GelombangPembayaransController::class, 'store'])->name('store')->middleware('permission:olimgelombang_create_edit');
        Route::get('/edit/{gelombang_pembayarans}', [GelombangPembayaransController::class, 'edit'])->name('edit')->middleware('permission:olimgelombang_create_edit');
        Route::put('/update/{gelombang_pembayarans}', [GelombangPembayaransController::class, 'update'])->name('update')->middleware('permission:olimgelombang_create_edit');
        Route::delete('/delete/{gelombang_pembayarans}', [GelombangPembayaransController::class, 'destroy'])->name('delete')->middleware('permission:olimgelombang_delete');
    });

    Route::group(['as' => 'pembayaran.', 'prefix' => '/pembayaran'], function () {
        Route::get('/data', [PembayaransController::class, 'index'])->name('index')->middleware('permission:olimpembayaran_view');
        Route::get('/add', [PembayaransController::class, 'create'])->name('create')->middleware('permission:olimpembayaran_create_edit');
        Route::post('/store', [PembayaransController::class, 'store'])->name('store')->middleware('permission:olimpembayaran_create_edit');
        Route::get('/edit/{pembayarans}', [PembayaransController::class, 'edit'])->name('edit')->middleware('permission:olimpembayaran_create_edit');
        Route::put('/update/{pembayarans}', [PembayaransController::class, 'update'])->name('update')->middleware('permission:olimpembayaran_create_edit');
        Route::get('/delete/{pembayarans}', [PembayaransController::class, 'destroy'])->name('delete')->middleware('permission:olimpembayaran_delete');
        Route::get('/tolak/{pembayarans}', [PembayaransController::class, 'tolak'])->name('tolak')->middleware('permission:olimpembayaran_create_edit');
        Route::get('/terima/{pembayarans}', [PembayaransController::class, 'terima'])->name('terima')->middleware('permission:olimpembayaran_create_edit');
    });

    Route::group(['as' => 'assign_test.', 'prefix' => '/assigntest'], function () {
        Route::get('/data/tests', [AssignTestsController::class, 'show_tests'])->name('show_tests')->middleware('permission:olimtest_view');
        Route::get('/data/{id}', [AssignTestsController::class, 'index'])->name('index')->middleware('permission:olimtest_view');
        Route::get('/add/{id}', [AssignTestsController::class, 'create'])->name('create')->middleware('permission:olimtest_create_edit');
        Route::post('/store/{id}', [AssignTestsController::class, 'store'])->name('store')->middleware('permission:olimtest_create_edit');
        Route::delete('/delete/{assign_tests}', [AssignTestsController::class, 'destroy'])->name('delete')->middleware('permission:olimtest_delete');
    });

    Route::group(['as' => 'monitoring_ujian.', 'prefix' => '/monitoringujian'], function () {
        Route::get('/data/tests', [MonitoringUjianController::class, 'show_tests_monitoring'])->name('show_tests_monitoring')->middleware('permission:olimmonitor_view');
        Route::get('/data/ujian/{id}', [MonitoringUjianController::class, 'monitoring_detail'])->name('detail_monitoring')->middleware('permission:olimmonitor_view');
        Route::get('/data/peserta/{assign_tests}', [MonitoringUjianController::class, 'detail_peserta_monitoring'])->name('detail_peserta_monitoring')->middleware('permission:olimmonitor_view');
        Route::get('/reset/{assign_tests}', [MonitoringUjianController::class, 'reset'])->name('reset_peserta_monitoring')->middleware('permission:olimmonitor_create_edit');
    });

    Route::group(['as' => 'pengumuman.', 'prefix' => '/pengumuman'], function () {
        Route::get('/data', [PengumumansController::class, 'index'])->name('index')->middleware('permission:olimpengumuman_view');
        Route::get('/add', [PengumumansController::class, 'create'])->name('create')->middleware('permission:olimpengumuman_create_edit');
        Route::post('/store', [PengumumansController::class, 'store'])->name('store')->middleware('permission:olimpengumuman_create_edit');
        Route::get('/edit/{pengumumans}', [PengumumansController::class, 'edit'])->name('edit')->middleware('permission:olimpengumuman_create_edit');
        Route::put('/update/{pengumumans}', [PengumumansController::class, 'update'])->name('update')->middleware('permission:olimpengumuman_create_edit');
        Route::delete('/delete/{pengumumans}', [PengumumansController::class, 'destroy'])->name('delete')->middleware('permission:olimpengumuman_delete');
    });
});

// Poster Dashboard
Route::group(['as' => 'poster.', 'prefix' => '/admin/poster', 'event' => 'poster'], function () {

    Route::middleware(['admin'])->group(function () {
        Route::get('/poster', [MainDashboardController::class, 'dashboard_poster'])->name('dashboard');
    });
    Route::group(['as' => 'exportexcel.', 'prefix' => '/excel'], function () {
        Route::get('/peserta-lunas', [ExportController::class, 'pesertalunas'])->name('peserta-lunas')->middleware('permission:posterpeserta_view');
        Route::get('/peserta-lunas/{cabangs}', [ExportController::class, 'pesertalunas_bycabang'])->name('peserta-lunas-cabang')->middleware('permission:posterpeserta_view');
        Route::get('/peserta-belum-lunas', [ExportController::class, 'pesertabelumlunas'])->name('peserta-belum-lunas')->middleware('permission:posterpeserta_view');
    });

    Route::group(['as' => 'importexcel.', 'prefix' => '/excel'], function () {
        Route::post('/import-peserta', [ImportController::class, 'importpeserta'])->name('import-peserta')->middleware('permission:posterpeserta_create_edit');
        Route::get('/format-excel', [ImportController::class, 'formatexcel'])->name('format-excel')->middleware('permission:posterpeserta_create_edit');
    });

    Route::group(['as' => 'cabang.', 'prefix' => '/cabang'], function () {
        Route::get('/data', [CabangsController::class, 'index'])->name('index')->middleware('permission:postercabang_view');
        Route::get('/add', [CabangsController::class, 'create'])->name('create')->middleware('permission:postercabang_create_edit');
        Route::post('/store', [CabangsController::class, 'store'])->name('store')->middleware('permission:postercabang_create_edit');
        Route::get('/edit/{cabangs}', [CabangsController::class, 'edit'])->name('edit')->middleware('permission:postercabang_create_edit');
        Route::put('/update/{cabangs}', [CabangsController::class, 'update'])->name('update')->middleware('permission:postercabang_create_edit');
        Route::delete('/delete/{cabangs}', [CabangsController::class, 'destroy'])->name('delete')->middleware('permission:postercabang_delete');
    });

    Route::group(['as' => 'rayon.', 'prefix' => '/rayon'], function () {
        Route::get('/data/{cabangs}', [RayonsController::class, 'index'])->name('index')->middleware('permission:posterrayon_view');
        Route::get('/add/{cabangs}', [RayonsController::class, 'create'])->name('create')->middleware('permission:posterrayon_create_edit');
        Route::post('/store/{cabangs}', [RayonsController::class, 'store'])->name('store')->middleware('permission:posterrayon_create_edit');
        Route::get('/edit/{rayons}', [RayonsController::class, 'edit'])->name('edit')->middleware('permission:posterrayon_create_edit');
        Route::put('/update/{rayons}', [RayonsController::class, 'update'])->name('update')->middleware('permission:posterrayon_create_edit');
        Route::delete('/delete/{rayons}', [RayonsController::class, 'destroy'])->name('delete')->middleware('permission:posterrayon_delete');
    });

    Route::group(['as' => 'peserta.', 'prefix' => '/peserta'], function () {
        Route::get('/data', [PesertasController::class, 'index'])->name('index')->middleware('permission:posterpeserta_view');
        Route::get('/add', [PesertasController::class, 'create'])->name('create')->middleware('permission:posterpeserta_create_edit');
        Route::post('/store', [PesertasController::class, 'store'])->name('store')->middleware('permission:posterpeserta_create_edit');
        Route::get('/edit/{pesertas}', [PesertasController::class, 'edit'])->name('edit')->middleware('permission:posterpeserta_create_edit');
        Route::put('/update/{pesertas}', [PesertasController::class, 'update'])->name('update')->middleware('permission:posterpeserta_create_edit');
        Route::delete('/delete/{pesertas}', [PesertasController::class, 'destroy'])->name('delete')->middleware('permission:posterpeserta_delete');

        Route::get('/excel', [PesertasController::class, 'tambah_peserta_excel'])->name('create-excel')->middleware('permission:posterpeserta_create_edit');
        Route::get('/excel/check', [PesertasController::class, 'check_peserta_excel'])->name('check-peserta-excel')->middleware('permission:posterpeserta_create_edit');
        Route::post('/excel/store', [PesertasController::class, 'store_peserta_excel'])->name('store-excel')->middleware('permission:posterpeserta_create_edit');
    });

    Route::group(['as' => 'pengumpulan_karya.', 'prefix' => '/pengumpulan-karya'], function () {
        Route::get('/data', [PengumpulanKaryasController::class, 'index'])->name('index')->middleware('permission:posterpengumpulan_view');
        Route::get('/add', [PengumpulanKaryasController::class, 'create'])->name('create')->middleware('permission:posterpengumpulan_create_edit');
        Route::post('/store', [PengumpulanKaryasController::class, 'store'])->name('store')->middleware('permission:posterpengumpulan_create_edit');
        Route::get('/edit/{pengumpulan_karyas}', [PengumpulanKaryasController::class, 'edit'])->name('edit')->middleware('permission:posterpengumpulan_create_edit');
        Route::put('/update/{pengumpulan_karyas}', [PengumpulanKaryasController::class, 'update'])->name('update')->middleware('permission:posterpengumpulan_create_edit');
        Route::delete('/delete/{pengumpulan_karyas}', [PengumpulanKaryasController::class, 'destroy'])->name('delete')->middleware('permission:posterpengumpulan_delete');
    });
    Route::group(['as' => 'gelombang_pembayaran.', 'prefix' => '/gelombang-pembayaran'], function () {
        Route::get('/data', [GelombangPembayaransController::class, 'index'])->name('index')->middleware('permission:postergelombang_view');
        Route::get('/add', [GelombangPembayaransController::class, 'create'])->name('create')->middleware('permission:postergelombang_create_edit');
        Route::post('/store', [GelombangPembayaransController::class, 'store'])->name('store')->middleware('permission:postergelombang_create_edit');
        Route::get('/edit/{gelombang_pembayarans}', [GelombangPembayaransController::class, 'edit'])->name('edit')->middleware('permission:postergelombang_create_edit');
        Route::put('/update/{gelombang_pembayarans}', [GelombangPembayaransController::class, 'update'])->name('update')->middleware('permission:postergelombang_create_edit');
        Route::delete('/delete/{gelombang_pembayarans}', [GelombangPembayaransController::class, 'destroy'])->name('delete')->middleware('permission:postergelombang_delete');
    });

    Route::group(['as' => 'pembayaran.', 'prefix' => '/pembayaran'], function () {
        Route::get('/data', [PembayaransController::class, 'index'])->name('index')->middleware('permission:posterpembayaran_view');
        Route::get('/add', [PembayaransController::class, 'create'])->name('create')->middleware('permission:posterpembayaran_create_edit');
        Route::post('/store', [PembayaransController::class, 'store'])->name('store')->middleware('permission:posterpembayaran_create_edit');
        Route::get('/edit/{pembayarans}', [PembayaransController::class, 'edit'])->name('edit')->middleware('permission:posterpembayaran_create_edit');
        Route::put('/update/{pembayarans}', [PembayaransController::class, 'update'])->name('update')->middleware('permission:posterpembayaran_create_edit');
        Route::get('/delete/{pembayarans}', [PembayaransController::class, 'destroy'])->name('delete')->middleware('permission:posterpembayaran_delete');
        Route::get('/tolak/{pembayarans}', [PembayaransController::class, 'tolak'])->name('tolak')->middleware('permission:posterpembayaran_create_edit');
        Route::get('/terima/{pembayarans}', [PembayaransController::class, 'terima'])->name('terima')->middleware('permission:posterpembayaran_create_edit');
    });

    Route::group(['as' => 'assign_test.', 'prefix' => '/assigntest'], function () {
        Route::get('/data/tests', [AssignTestsController::class, 'show_tests'])->name('show_tests')->middleware('permission:postertest_view');
        Route::get('/data/{id}', [AssignTestsController::class, 'index'])->name('index')->middleware('permission:postertest_view');
        Route::get('/add/{id}', [AssignTestsController::class, 'create'])->name('create')->middleware('permission:postertest_create_edit');
        Route::post('/store/{id}', [AssignTestsController::class, 'store'])->name('store')->middleware('permission:postertest_create_edit');
        Route::delete('/delete/{assign_tests}', [AssignTestsController::class, 'destroy'])->name('delete')->middleware('permission:postertest_delete');
    });

    Route::group(['as' => 'penilaian.', 'prefix' => '/penilaian'], function () {
        Route::get('/pengumpulan-karya', [KaryasController::class, 'show_pengumpulan'])->name('pengumpulan_karya')->middleware('permission:posterpenilaian_view');
        Route::put('/update-nilai/{karyas}', [KaryasController::class, 'update_nilai'])->name('update_nilai')->middleware('permission:posterpenilaian_create_edit');
        Route::get('/data/{id}', [KaryasController::class, 'index'])->name('index')->middleware('permission:posterpenilaian_view');
        Route::delete('/delete/{karyas}', [KaryasController::class, 'destroy'])->name('delete')->middleware('permission:posterpenilaian_delete');
    });

    Route::group(['as' => 'pengumuman.', 'prefix' => '/pengumuman'], function () {
        Route::get('/data', [PengumumansController::class, 'index'])->name('index')->middleware('permission:posterpengumuman_view');
        Route::get('/add', [PengumumansController::class, 'create'])->name('create')->middleware('permission:posterpengumuman_create_edit');
        Route::post('/store', [PengumumansController::class, 'store'])->name('store')->middleware('permission:posterpengumuman_create_edit');
        Route::get('/edit/{pengumumans}', [PengumumansController::class, 'edit'])->name('edit')->middleware('permission:posterpengumuman_create_edit');
        Route::put('/update/{pengumumans}', [PengumumansController::class, 'update'])->name('update')->middleware('permission:posterpengumuman_create_edit');
        Route::delete('/delete/{pengumumans}', [PengumumansController::class, 'destroy'])->name('delete')->middleware('permission:posterpengumuman_delete');
    });
});

Route::get('/get-rayons', [RayonsController::class, 'getRayons']);
Route::post('/upload-image', [CKEditorController::class, 'upload'])->name('ckeditor.upload');
