<?php

namespace App\Http\Controllers;
use App\Models\Ruangrapat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class RuangRapatController extends Controller
{

    public function index(){
        $data = Ruangrapat::all();
        return view('ruangrapat.index', ['dataRapat' => $data]);
    }
    public function laporanrr()
    {
        return view('ruangrapat.laporanrr');
    }
    public function create()
    {
        return view('ruangrapat.create');
    }
    public function store(Request $request)
    {
        $data = new Ruangrapat;
        $data->kode_rrapat = $request->kode_rrapat;
        $data->status = $request->status;
        $data->nama_ruang = $request->nama_ruang;
        $data->tgl_acara = $request->tgl_acara;
        $data->jam = $request->jam;
        $data->acara = $request->acara;
        $data->kode_bidang = $request->kode_bidang;
                $data->tgl_pesan = $request->tgl_pesan;
        $data->catatan = $request->catatan;
        $data->save();
        return redirect('/ruangrapat')->with('sucess','Data Berhasil Tersimpan');
    }

    public function update(Request $request,$kode_rrapat)
    {
        $data = Ruangrapat::find($kode_rrapat);
        $data->status = $request->status;
        $data->nama_ruang = $request->nama_ruang;
        $data->tgl_acara = $request->tgl_acara;
        $data->jam = $request->jam;
        $data->acara = $request->acara;
        $data->kode_bidang = $request->kode_bidang;

        $data->tgl_pesan = $request->tgl_pesan;
        $data->catatan = $request->catatan;
        $data->update();
        return redirect('/ruangrapat');
    }
    public function destroy($kode_rrapat)
    {
        $data = Ruangrapat::find($kode_rrapat);
        $data->delete();
        return redirect('/ruangrapat');
    }
    public function edit($kode_rrapat)
    {
        $data = Ruangrapat::find($kode_rrapat);
        return view('ruangrapat.edit', compact('data'));
    }

    public function pdfRapat(){
        $data= Ruangrapat::all();
        return view('ruangrapat.pdfRapat', ['dataRapat' => $data]);
    }
    public function cetakRRPertanggal($tgl_surat_awal, $tgl_surat_akhir){
        // dd(["Tanggal Awal : ".$tgl_surat_awal, "Tanggal Akhir :".$tgl_surat_akhir]);

        $cetakPertanggal = Ruangrapat::with('bidang')->whereBetween('tgl_acara',[$tgl_surat_awal, $tgl_surat_akhir])->get();

    return view('ruangrapat.Cetak-rr-pertanggal', ['cetakPertanggal' => $cetakPertanggal]);
   
}
    
}
