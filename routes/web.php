<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DinasController;
use App\Http\Controllers\SuratKeluarController;
use App\Http\Controllers\NotaDinasController;
use App\Http\Controllers\SuratTugasController;
use App\Http\Controllers\LapSTugasController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SuratMasukController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\RuangRapatController;
use App\Http\Controllers\Bast1Controller;
use App\Http\Controllers\Bast2Controller;
use App\Http\Controllers\HomeController;
use Carbon\Carbon;
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
    return view('welcome');
});
Route::get('home', [DinasController::class, 'home']);
Route::get('home', [HomeController::class, 'home']);


//LAPORAN



//SURATKELUAR
Route::get('suratkeluar', [SuratKeluarController::class, 'index']);

Route::get('suratkeluar', function () {
    return view('suratkeluar.index');
});
Route::get('suratkeluar', function () {
    return view('suratkeluar.kop');
});
Route::get('suratkeluar', [SuratKeluarController::class, 'index'])->name('suratkeluar.index');
Route::get('/kopsuratkeluar', [SuratKeluarController::class, 'kop'])->name('suratkeluar.kop');

Route::get('/tambahsuratkeluar', [SuratKeluarController::class, 'create'])->name('suratkeluar.create');

Route::post('/suratkeluar', [SuratKeluarController::class, 'store'])->name('suratkeluar.store');
// CETAK
Route::get('/suratkeluar/cetak/{kode_skeluar}', [SuratkeluarController::class, 'kop'])->name('suratkeluar.kop');


//route edit nilai

Route::get('/suratkeluar/edit{kode_skeluar}', [SuratKeluarController::class, 'edit'])->name('suratkeluar.edit');

//route edit nilai

Route::post('/suratkeluar/edit{kode_skeluar}', [SuratKeluarController::class, 'update'])->name('suratkeluar.update');

//route delete nilai

Route::post('/suratkeluar/delete{kode_skeluar}', [SuratKeluarController::class, 'destroy'])->name('suratkeluar.destroy');

Route::get('cetak-data-sk-form', [SuratKeluarController::class, 'cetak-sk-form'])->name('cetak-sk-form');
Route::get('cetak-data-pertanggal/{tgl_surat_awal}/{tgl_surat_akhir}', [SuratKeluarController::class, 'cetakSKPertanggal'])->name('cetak-data-pertanggal');

Route::get('/laporankeluar', [SuratKeluarController::class, 'laporansk'])->name('suratkeluar.laporansk');


//SURATMASUK
Route::get('suratmasuk', [SuratMasukController::class, 'index']);

Route::get('datasmasuk', function () {
    return view('suratmasuk.index');
});
Route::get('suratmasuk', [SuratMasukController::class, 'index'])->name('suratmasuk.index');
Route::post('/msuratmasuk', [SuratMasukController::class, 'store'])->name('suratmasuk.store');
Route::get('/tambahsuratmasuk', [SuratMasukController::class, 'create'])->name('suratmasuk.create');
Route::get('/suratmasuk/edit{kode_smasuk}', [SuratMasukController::class, 'edit'])->name('suratmasuk.edit');
//route edit nilai
Route::post('/suratmasuk/edit{kode_smasuk}', [SuratMasukController::class, 'update'])->name('suratmasuk.update');
//route delete nilai
Route::post('/suratmasuk/delete{kode_smasuk}', [SuratMasukController::class, 'destroy'])->name('suratmasuk.destroy');

Route::get('cetak-data-sm-form', [SuratMasukController::class, 'cetak-sm-form'])->name('cetak-sm-form');
Route::get('cetak-data-pertanggal/{tgl_surat_awal}/{tgl_surat_akhir}', [SuratMasukController::class, 'cetakSMPertanggal'])->name('cetak-data-pertanggal');



//NOTADINAS
Route::get('notadinas', [NotaDinasController::class, 'index']);

Route::get('notadinas', function () {
    return view('notadinas.index');
});
Route::get('notadinas', [NotaDinasController::class, 'index'])->name('notadinas.index');


Route::get('/tambahnotadinas', [NotaDinasController::class, 'create'])->name('notadinas.create');

Route::post('/notadinas', [NotaDinasController::class, 'store'])->name('notadinas.store');

Route::get('/notadinas/edit{kode_stugas}', [NotaDinasController::class, 'edit'])->name('notadinas.edit');
//route edit nilai
Route::post('/notadinas/edit{kode_stugas}', [NotaDinasController::class, 'update'])->name('notadinas.update');
//route delete nilai
Route::post('/notadinas/delete{kode_stugas}', [NotaDinasController::class, 'destroy'])->name('notadinas.destroy');

Route::get('cetak-data-nd-form', [NotaDinasController::class, 'cetak-nd-form'])->name('cetak-nd-form');
Route::get('cetak-data-pertanggal/{tgl_surat_awal}/{tgl_surat_akhir}', [NotaDinasController::class, 'cetakNDPertanggal'])->name('cetak-data-pertanggal');

Route::get('/laporannota', [NotaDinasController::class, 'laporannt'])->name('notadinas.laporannt');

//SURATTUGAS
Route::get('surattugas', [SuratTugasController::class, 'index']);

Route::get('surattugas', function () {
    return view('surattugas.index');
});
Route::get('surattugas', [SuratTugasController::class, 'index'])->name('surattugas.index');

Route::get('/laporantugas', [SuratTugasController::class, 'laporanst'])->name('surattugas.laporanst');



Route::get('/tambahsurattugas', [SuratTugasController::class, 'create'])->name('surattugas.create');

Route::post('/surattugas', [SuratTugasController::class, 'store'])->name('surattugas.store');

Route::get('/surattugas/edit{kode_stugas}', [SuratTugasController::class, 'edit'])->name('surattugas.edit');
//route edit nilai
Route::post('/surattugas/edit{kode_stugas}', [SuratTugasController::class, 'update'])->name('surattugas.update');
//route delete nilai
Route::post('/surattugas/delete{kode_stugas}', [SuratTugasController::class, 'destroy'])->name('surattugas.destroy');

Route::get('cetak-data-st-form', [SuratTugasController::class, 'cetak-st-form'])->name('cetak-st-form');
Route::get('cetak-data-pertanggal/{tgl_surat_awal}/{tgl_surat_akhir}', [SuratTugasController::class, 'cetakSTPertanggal'])->name('cetak-data-pertanggal');
// CETAK
Route::get('/surattugas/cetak/{kode_stugas}', [SurattugasController::class, 'kop'])->name('surattugas.kop');


Route::get('/laporanstugas',[LapSTugasController::class, 'uploadpage'])->name('lapstugas.uploadpage');

Route::post('/laporantugas',[LapSTugasController::class, 'store'])->name('lapstugas.store');


Route::get('/surattugas/filter_index', [SuratTugasController::class, 'indexFilter'])->name('index.filter');

//RUANGRAPAT
Route::get('ruangrapat', [RuangRapatController::class, 'index']);

Route::get('ruangrapat', function () {
    return view('ruangrapat.index');
});
Route::get('ruangrapat', [RuangRapatController::class, 'index'])->name('ruangrapat.index');

Route::get('cetak-data-rr-form', [RuangRapatController::class, 'cetak-rr-form'])->name('cetak-rr-form');
Route::get('cetak-data-pertanggal/{tgl_surat_awal}/{tgl_surat_akhir}', [RuangRapatController::class, 'cetakRRPertanggal'])->name('cetak-data-pertanggal');

Route::get('/laporanruang', [RuangRapatController::class, 'laporanrr'])->name('ruangrapat.laporanrr');

Route::get('/tambahruangrapat', [RuangRapatController::class, 'create'])->name('ruangrapat.create');

Route::post('/ruangrapat', [RuangRapatController::class, 'store'])->name('ruangrapat.store');

Route::get('/ruangrapat/edit{kode_rrapat}', [RuangRapatController::class, 'edit'])->name('ruangrapat.edit');
//route edit nilai
Route::post('/ruangrapat/edit{kode_rrapat}', [RuangRapatController::class, 'update'])->name('ruangrapat.update');
//route delete nilai
Route::post('/ruangrapat/delete{kode_rrapat}', [RuangRapatController::class, 'destroy'])->name('ruangrapat.destroy');





//BAST1

Route::get('cetak-data-pertanggal/{tgl_surat_awal}/{tgl_surat_akhir}', [Bast1Controller::class, 'cetakLaporanPertanggal'])->name('cetak-data-pertanggal');


Route::get('bast1', [Bast1Controller::class, 'index']);

Route::get('bast1', function () {
    return view('bast1.index');
});
Route::get('bast1', [Bast1Controller::class, 'index'])->name('bast1.index');

Route::get('bast1', [Bast1Controller::class, 'index'])->name('bast1.index');

Route::get('/tambahbast1', [Bast1Controller::class, 'create'])->name('bast1.create');

Route::post('/bast1', [Bast1Controller::class, 'store'])->name('bast1.store');

//route edit nilai

Route::get('/bast1/edit{kode_bast1}', [Bast1Controller::class, 'edit'])->name('bast1.edit');

//route edit nilai

Route::post('/bast1/edit{kode_bast1}', [Bast1Controller::class, 'update'])->name('bast1.update');

//route delete nilai

Route::post('/bast1/delete{kode_bast1}', [Bast1Controller::class, 'destroy'])->name('bast1.destroy');

Route::get('/laporanbast1', [Bast1Controller::class, 'laporanbs1'])->name('bast1.laporanbs1');

Route::get('cetak-data-bs1-form', [Bast1Controller::class, 'cetak-bs1-form'])->name('cetak-bs1-form');
Route::get('cetak-data-pertanggal/{tgl_surat_awal}/{tgl_surat_akhir}', [Bast1Controller::class, 'cetakBS1Pertanggal'])->name('cetak-data-pertanggal');



// //LAPORAN
// Route::get('laporan', [LaporanController::class, 'index'])->name('laporan.index');
// Route::get('cetak-data-laporan-form', [LaporanController::class, 'cetak-laporan-form'])->name('cetak-laporan-form');
// Route::get('cetak-data-pertanggal/{tgl_surat_awal}/{tgl_surat_akhir}', [LaporanController::class, 'cetakLaporanPertanggal'])->name('cetak-data-pertanggal');




//BAST2
Route::get('bast2', [Bast2Controller::class, 'index']);

Route::get('bast2', function () {
    return view('bast2.index');
});
Route::get('bast2', [Bast2Controller::class, 'index'])->name('bast2.index');


Route::get('/tambahbast2', [Bast2Controller::class, 'create'])->name('bast2.create');

Route::post('/bast2', [Bast2Controller::class, 'store'])->name('bast2.store');

Route::get('/bast2/edit{kode_bast2}', [Bast2Controller::class, 'edit'])->name('bast2.edit');
//route edit nilai
Route::post('/bast2/edit{kode_bast2}', [Bast2Controller::class, 'update'])->name('bast2.update');
//route delete nilai
Route::post('/bast2/delete{kode_bast2}', [Bast2Controller::class, 'destroy'])->name('bast2.destroy');

//HOME
Route::get('home', function () {
    return view('layouts.home');
});
Route::get('layouts', function () {
    return view('layouts.home');
});
Route::get('layouts', [HomeController::class, 'home']);
Route::get('home', function () {
    return view('home.index');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');







//SURATTUGAS


Route::get('jenissurat', function () {
    return view('jenissurat.index');
});

Route::get('cetakPDFBast1', [Bast1Controller::class, 'pdfB1'])->name('pdfB1');
Route::get('cetakPDFBast2', [Bast2Controller::class, 'pdfB2'])->name('pdfB2');
Route::get('cetakPDFSK', [SuratKeluarController::class, 'pdfSK'])->name('pdfSK');
Route::get('cetakPDFKS', [SuratMasukController::class, 'pdfKS'])->name('pdfKS');
Route::get('cetakPDFLaporan', [LaporanController::class,  'pdfLaporan'])->name('pdfLaporan');


Route::get('cetakPDFST', [SuratTugasController::class, 'pdfST'])->name('pdfST');
Route::get('cetakPDFRapat', [RuangRapatController::class, 'pdfRapat'])->name('pdfRapat');
Route::get('cetakPDFNota', [NotaDinasController::class, 'pdfNota'])->name('pdfNota');






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



