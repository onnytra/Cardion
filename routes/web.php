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
use App\Http\Controllers\user\olimpiade\MainOlimpiadeController;
use App\Http\Controllers\user\olimpiade\PembayaranController;
use App\Http\Controllers\user\olimpiade\PengumpulanController;
use App\Http\Controllers\user\olimpiade\PengumumanController;
use App\Http\Controllers\user\olimpiade\RegistrasiController;
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

Route::get('/olimpiade/cetak-kartu', function () {
    return view('olimpiade/cetak-kartu', ['title' => 'Olimpiade | Cardion UIN Malang', 'slug' => 'cetak-kartu']);
});

Route::get('/olimpiade/sertifikat', function () {
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

Route::get('/olympiad/ujian/detail/finish', function () {
    return view('olimpiade/ujian/finish-ujian', ['title' => 'Olimpiade | Cardion UIN Malang', 'slug' => 'finish']);
});

Route::get('/olympiad/ujian/history', function () {
    return view('olimpiade/ujian/history-ujian', ['title' => 'Olimpiade | Cardion UIN Malang', 'slug' => 'history']);
});

Route::get('/olympiad/ujian/history/hasil', function () {
    return view('olimpiade/ujian/hasil-ujian', ['title' => 'Olimpiade | Cardion UIN Malang', 'slug' => 'hasil']);
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

Route::get('sendmail', [MailsController::class, 'index']);
// User Poster Side
Route::group(['as' => 'poster.', 'prefix' => '/poster', 'event' => 'poster'], function () {
    Route::get('/login', [AuthPesertaController::class, 'login_page'])->name('login');
    Route::post('/login', [AuthPesertaController::class, 'login_process'])->name('login.process');
    Route::get('/logout', [AuthPesertaController::class, 'logout'])->name('logout');
    Route::get('/register', [AuthPesertaController::class, 'register_page'])->name('register');
    Route::post('/register', [AuthPesertaController::class, 'register_process'])->name('register.process');
    
    Route::get('/account/{pesertas}', [AuthPesertaController::class, 'edit_profile'])->name('account');
    Route::put('/account/{pesertas}', [AuthPesertaController::class, 'update_profile'])->name('account.update');

    Route::get('forgotpassword', [AuthPesertaController::class, 'forgot_password'])->name('forgotpassword');
    Route::post('forgotpassword', [MailsController::class, 'forgot_password'])->name('forgotpassword.mail');
    Route::get('/resetpassword/{token}', [AuthPesertaController::class, 'reset_password_page'])->name('resetpassword.page');
    Route::put('/resetpassword', [AuthPesertaController::class, 'reset_password_process'])->name('resetpassword.process');

    Route::get('/pengumpulan-karya', [PengumpulanController::class, 'index'])->name('karya');
    Route::get('/pengumpulan-karya/add/{pengumpulan_karyas}', [PengumpulanController::class, 'create'])->name('add-karya');
    Route::post('/pengumpulan-karya/store', [PengumpulanController::class, 'store'])->name('store-karya');
    // Route::get('/pengumpulan-karya/edit', [PengumpulanController::class, 'edit'])->name('edit-karya');
    // Route::put('/pengumpulan-karya/update', [PengumpulanController::class, 'update'])->name('update-karya');

});

//User Olimpiade Side
Route::group(['as' => 'olimpiade.', 'prefix' => '/olimpiade', 'event' => 'olimpiade'], function () {
    Route::get('/login', [AuthPesertaController::class, 'login_page'])->name('login');
    Route::post('/login', [AuthPesertaController::class, 'login_process'])->name('login.process');
    Route::get('/logout', [AuthPesertaController::class, 'logout'])->name('logout');
    Route::get('/register', [AuthPesertaController::class, 'register_page'])->name('register');
    Route::post('/register', [AuthPesertaController::class, 'register_process'])->name('register.process');

    Route::get('/account/{pesertas}', [AuthPesertaController::class, 'edit_profile'])->name('account');
    Route::put('/account/{pesertas}', [AuthPesertaController::class, 'update_profile'])->name('account.update');

    Route::get('forgotpassword', [AuthPesertaController::class, 'forgot_password'])->name('forgotpassword');
    Route::post('forgotpassword', [MailsController::class, 'forgot_password'])->name('forgotpassword.mail');
    Route::get('/resetpassword/{token}', [AuthPesertaController::class, 'reset_password_page'])->name('resetpassword.page');
    Route::put('/resetpassword', [AuthPesertaController::class, 'reset_password_process'])->name('resetpassword.process');

    Route::get('/pengumuman', [PengumumanController::class, 'index'])->name('pengumuman');
    Route::get('/pengumuman/detail', [PengumumanController::class, 'detail'])->name('detail-pengumuman');

    Route::get('/ujian', [UjianController::class, 'index'])->name('ujian');
    Route::get('/ujian/detail/{ujians}', [UjianController::class, 'detail'])->name('detail-ujian');
    Route::get('/ujian/detail/start/{ujians}/{nosoal}', [UjianController::class, 'detail_start'])->name('start-ujian');
    Route::get('/ujian/detail/finish/{ujians}', [UjianController::class, 'detail_finish'])->name('finish-ujian');
    Route::get('/ujian/history', [UjianController::class, 'history'])->name('history-ujian');
});
// All User Side
Route::group(['as' => 'user.', 'prefix' => '/user', 'event' => 'olimpiade'], function () {
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

// Olimpiade Dashboard
Route::group(['as' => 'olimpiade.', 'prefix' => '/admin/olimpiade', 'event' => 'olimpiade'], function () {
    Route::get('/olimpiade', [MainDashboardController::class, 'dashboard_olimpiade'])->name('dashboard');

    Route::group(['as' => 'exportexcel.', 'prefix' => '/excel'], function () {
        Route::get('/peserta-lunas', [ExportController::class, 'pesertalunas'])->name('peserta-lunas');
        Route::get('/peserta-lunas/{cabangs}', [ExportController::class, 'pesertalunas_bycabang'])->name('peserta-lunas-cabang');
        Route::get('/peserta-belum-lunas', [ExportController::class, 'pesertabelumlunas'])->name('peserta-belum-lunas');
        Route::get('/ujian-peserta/{ujians}', [ExportController::class, 'ujianpeserta'])->name('ujian-peserta');
    });

    Route::group(['as' => 'importexcel.', 'prefix' => '/excel'], function () {
        Route::post('/import-peserta', [ImportController::class, 'importpeserta'])->name('import-peserta');
        Route::get('/format-excel', [ImportController::class, 'formatexcel'])->name('format-excel');
    });

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

        Route::get('/excel', [PesertasController::class, 'tambah_peserta_excel'])->name('create-excel');
        Route::get('/excel/check', [PesertasController::class, 'check_peserta_excel'])->name('check-peserta-excel');
        Route::post('/excel/store', [PesertasController::class, 'store_peserta_excel'])->name('store-excel');
    });

    Route::group(['as' => 'ujian.', 'prefix' => '/ujian'], function () {
        Route::get('/data', [UjiansController::class, 'index'])->name('index');
        Route::get('/add', [UjiansController::class, 'create'])->name('create');
        Route::post('/store', [UjiansController::class, 'store'])->name('store');
        Route::get('/edit/{ujians}', [UjiansController::class, 'edit'])->name('edit');
        Route::put('/update/{ujians}', [UjiansController::class, 'update'])->name('update');
        Route::delete('/delete/{ujians}', [UjiansController::class, 'destroy'])->name('delete');
    });

    Route::group(['as' => 'soal.', 'prefix' => '/soal'], function () {
        Route::get('/data/{ujians}', [SoalsController::class, 'index'])->name('index');
        Route::get('/add/{ujians}', [SoalsController::class, 'create'])->name('create');
        Route::post('/store/{ujians}', [SoalsController::class, 'store'])->name('store');
        Route::get('/edit/{soals}', [SoalsController::class, 'edit'])->name('edit');
        Route::put('/update/{soals}', [SoalsController::class, 'update'])->name('update');
        Route::delete('/delete/{soals}', [SoalsController::class, 'destroy'])->name('delete');
    });

    Route::group(['as' => 'subyek.', 'prefix' => '/subyek'], function () {
        Route::get('/data/{ujians}', [SubyeksController::class, 'index'])->name('index');
        Route::get('/add/{ujians}', [SubyeksController::class, 'create'])->name('create');
        Route::post('/store/{ujians}', [SubyeksController::class, 'store'])->name('store');
        Route::get('/edit/{subyeks}', [SubyeksController::class, 'edit'])->name('edit');
        Route::put('/update/{subyeks}', [SubyeksController::class, 'update'])->name('update');
        Route::delete('/delete/{subyeks}', [SubyeksController::class, 'destroy'])->name('delete');
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
        Route::get('/delete/{pembayarans}', [PembayaransController::class, 'destroy'])->name('delete');
        Route::get('/tolak/{pembayarans}', [PembayaransController::class, 'tolak'])->name('tolak');
        Route::get('/terima/{pembayarans}', [PembayaransController::class, 'terima'])->name('terima');
    });

    Route::group(['as' => 'assign_test.', 'prefix' => '/assigntest'], function () {
        Route::get('/data/tests', [AssignTestsController::class, 'show_tests'])->name('show_tests');
        Route::get('/data/{id}', [AssignTestsController::class, 'index'])->name('index');
        Route::get('/add/{id}', [AssignTestsController::class, 'create'])->name('create');
        Route::post('/store/{id}', [AssignTestsController::class, 'store'])->name('store');
        Route::delete('/delete/{assign_tests}', [AssignTestsController::class, 'destroy'])->name('delete');
    });

    Route::group(['as' => 'monitoring_ujian.', 'prefix' => '/monitoringujian'], function () {
        Route::get('/data/tests', [MonitoringUjianController::class, 'show_tests_monitoring'])->name('show_tests_monitoring');
        Route::get('/data/ujian/{id}', [MonitoringUjianController::class, 'monitoring_detail'])->name('detail_monitoring');
        Route::get('/data/peserta/{assign_tests}', [MonitoringUjianController::class, 'detail_peserta_monitoring'])->name('detail_peserta_monitoring');
    });

    Route::group(['as' => 'pengumuman.', 'prefix' => '/pengumuman'], function () {
        Route::get('/data', [PengumumansController::class, 'index'])->name('index');
        Route::get('/add', [PengumumansController::class, 'create'])->name('create');
        Route::post('/store', [PengumumansController::class, 'store'])->name('store');
        Route::get('/edit/{pengumumans}', [PengumumansController::class, 'edit'])->name('edit');
        Route::put('/update/{pengumumans}', [PengumumansController::class, 'update'])->name('update');
        Route::delete('/delete/{pengumumans}', [PengumumansController::class, 'destroy'])->name('delete');
    });
});

// Poster Dashboard
Route::group(['as' => 'poster.', 'prefix' => '/admin/poster', 'event' => 'poster'], function () {
    Route::get('/poster', [MainDashboardController::class, 'dashboard_poster'])->name('dashboard');

    Route::group(['as' => 'exportexcel.', 'prefix' => '/excel'], function () {
        Route::get('/peserta-lunas', [ExportController::class, 'pesertalunas'])->name('peserta-lunas');
        Route::get('/peserta-lunas/{cabangs}', [ExportController::class, 'pesertalunas_bycabang'])->name('peserta-lunas-cabang');
        Route::get('/peserta-belum-lunas', [ExportController::class, 'pesertabelumlunas'])->name('peserta-belum-lunas');
        Route::get('/ujian-peserta/{ujians}', [ExportController::class, 'ujianpeserta'])->name('ujian-peserta');
    });

    Route::group(['as' => 'importexcel.', 'prefix' => '/excel'], function () {
        Route::post('/import-peserta', [ImportController::class, 'importpeserta'])->name('import-peserta');
        Route::get('/format-excel', [ImportController::class, 'formatexcel'])->name('format-excel');
    });

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

        Route::get('/excel', [PesertasController::class, 'tambah_peserta_excel'])->name('create-excel');
        Route::get('/excel/check', [PesertasController::class, 'check_peserta_excel'])->name('check-peserta-excel');
        Route::post('/excel/store', [PesertasController::class, 'store_peserta_excel'])->name('store-excel');
    });

    Route::group(['as' => 'pengumpulan_karya.', 'prefix' => '/pengumpulan-karya'], function () {
        Route::get('/data', [PengumpulanKaryasController::class, 'index'])->name('index');
        Route::get('/add', [PengumpulanKaryasController::class, 'create'])->name('create');
        Route::post('/store', [PengumpulanKaryasController::class, 'store'])->name('store');
        Route::get('/edit/{pengumpulan_karyas}', [PengumpulanKaryasController::class, 'edit'])->name('edit');
        Route::put('/update/{pengumpulan_karyas}', [PengumpulanKaryasController::class, 'update'])->name('update');
        Route::delete('/delete/{pengumpulan_karyas}', [PengumpulanKaryasController::class, 'destroy'])->name('delete');
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
        Route::get('/delete/{pembayarans}', [PembayaransController::class, 'destroy'])->name('delete');
        Route::get('/tolak/{pembayarans}', [PembayaransController::class, 'tolak'])->name('tolak');
        Route::get('/terima/{pembayarans}', [PembayaransController::class, 'terima'])->name('terima');
    });

    Route::group(['as' => 'assign_test.', 'prefix' => '/assigntest'], function () {
        Route::get('/data/tests', [AssignTestsController::class, 'show_tests'])->name('show_tests');
        Route::get('/data/{id}', [AssignTestsController::class, 'index'])->name('index');
        Route::get('/add/{id}', [AssignTestsController::class, 'create'])->name('create');
        Route::post('/store/{id}', [AssignTestsController::class, 'store'])->name('store');
        Route::delete('/delete/{assign_tests}', [AssignTestsController::class, 'destroy'])->name('delete');
    });
  
    Route::group(['as' => 'penilaian.', 'prefix' => '/penilaian'], function () {
        Route::get('/pengumpulan-karya', [KaryasController::class, 'show_pengumpulan'])->name('pengumpulan_karya');
        Route::put('/update-nilai/{karyas}', [KaryasController::class, 'update_nilai'])->name('update_nilai');
        Route::get('/data/{id}', [KaryasController::class, 'index'])->name('index');
        Route::delete('/delete/{karyas}', [KaryasController::class, 'destroy'])->name('delete');
    });
});

Route::get('/get-rayons', [RayonsController::class, 'getRayons']);
Route::post('/upload-image', [CKEditorController::class, 'upload'])->name('ckeditor.upload');
