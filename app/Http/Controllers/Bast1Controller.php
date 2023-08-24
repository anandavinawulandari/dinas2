<?php

namespace App\Http\Controllers;
use App\Models\Bast1;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class Bast1Controller extends Controller
{

    public function index(){
        $data = Bast1::all();
        return view('bast1.index', ['dataBast1' => $data]);
        
    }
    public function cetakLaporanPertanggal($tgl_surat_awal, $tgl_surat_akhir){
        // dd(["Tanggal Awal : ".$tgl_surat_awal, "Tanggal Akhir :".$tgl_surat_akhir]);

        $data = Bast1::with('laporan')->whereBetween('tgl_surat',[$tgl_surat_awal, $tgl_surat_akhir])->get();

    return view('bast1.Cetak-laporan-pertanggal', ['cetakPertanggal' => $data]);
   
}
    public function laporanbs1()
    {
        return view('bast1.laporanbs1');
    }
    public function pdfB1(){
        $data= Bast1::all();
        return view('bast1.pdfB1', ['dataBast1' => $data]);
    }
    public function cetakFormBS1(){
        return view('bast1.Cetak-bs1-form');
    }
    public function cetakBS1Pertanggal($tgl_surat_awal, $tgl_surat_akhir){
            // dd(["Tanggal Awal : ".$tgl_surat_awal, "Tanggal Akhir :".$tgl_surat_akhir]);

            $cetakPertanggal = Bast1::with('bidang')->whereBetween('tgl_surat',[$tgl_surat_awal, $tgl_surat_akhir])->get();
    
        return view('bast1.Cetak-bs1-pertanggal', ['cetakPertanggal' => $cetakPertanggal]);
       
    }

    public function create(){
        return view('bast1.create');
    }
    public function store(Request $request){
       
        $data = new Bast1;       
        $data->kode_bast1 = $request->kode_bast1;
        $data->status = $request->status;
        $data->no_agenda = $request->no_agenda;
        $data->no_surat = $request->no_surat;
        $data->tgl_surat = $request->tgl_surat;
        $data->perihal = $request->perihal;
        $data->kepada = $request->kepada;
        $data->sumber = $request->sumber;
        $data->kode_bidang = $request->kode_bidang;
        $data->catatan = $request->catatan;
        $data->save();
        return redirect('/bast1')->with('sucess','Data Berhasil Tersimpan');
    }
    public function edit($kode_bast1)
    {
        $data = Bast1::find($kode_bast1);
        return view('bast1.edit', compact('data'));
    }
    public function update(Request $request, $kode_bast1){

        $data= Bast1::find($kode_bast1);
        $data->status = $request->status;
        $data->no_agenda = $request->no_agenda;
        $data->no_surat = $request->no_surat;
        $data->tgl_surat = $request->tgl_surat;
        $data->perihal = $request->perihal;
        $data->kepada = $request->kepada;
        $data->sumber = $request->sumber;
        $data->kode_bidang = $request->kode_bidang;
        $data->catatan = $request->catatan;
        $data->update();
        return redirect('/bast1');
    }

    public function destroy($kode_bast1)
    {
        $data = Bast1::find($kode_bast1);
        $data->delete();
        return redirect('/bast1');
    }

}
