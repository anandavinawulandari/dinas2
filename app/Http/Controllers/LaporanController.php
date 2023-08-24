<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;    
use App\Models\Laporan;
use DataTables;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index(){
        $data = Laporan::all();
        return view('laporan.index', ['dataLaporan' => $data]);        
    }
    public function jenissurat(){
    	return $this->belongsTo(Jenissurat::class, 'no_surat');
    }
    public function surattugas(){
    	return $this->belongsTo(Surattugas::class, 'kode_stugas');
    }
    public function pdfLaporan(){
        $data = Laporan::all();
        return view('laporan.pdfLaporan', ['dataLaporan' => $data]);
    }
    public function cetakForm(){
        return view('laporan.Cetak-laporan-form');
    }
    public function cetakLaporanPertanggal($tgl_surat_awal, $tgl_surat_akhir){
            // dd(["Tanggal Awal : ".$tgl_surat_awal, "Tanggal Akhir :".$tgl_surat_akhir]);

            $cetakPertanggal1 = Laporan::with('laporan')->whereBetween('tgl_surat',[$tgl_surat_awal, $tgl_surat_akhir])->get();
    
        return view('laporan.Cetak-laporan-pertanggal', ['cetakPertanggal1' => $cetakPertanggal1]);
       
    }
}

