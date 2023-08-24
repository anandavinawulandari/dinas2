<?php

namespace App\Http\Controllers;
use App\Models\Suratkeluar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class SuratKeluarController extends Controller
{

    public function index(){
        $data = Suratkeluar::all();
        return view('suratkeluar.index', ['dataSkeluar' => $data]);
    }
    public function laporansk()
    {
        return view('suratkeluar.laporansk');
    }
    public function pdfSK(){
        $data= Suratkeluar::all();
        return view('suratkeluar.pdfSK', ['dataSkeluar' => $data]);
    }
    public function kop($kode_skeluar){
        $data['data'] = Suratkeluar::find($kode_skeluar)->get()->first();
        return view('suratkeluar.kop')->with($data);
    }

    public function create(){
        return view('suratkeluar.create');
    }


    public function store(Request $request){
       
        $data = new Suratkeluar;       
        $data->kode_skeluar = $request->kode_skeluar;
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
        return redirect('/suratkeluar')->with('sucess','Data Berhasil Tersimpan');
    }
    public function edit($kode_skeluar)
    {
        $data = Suratkeluar::find($kode_skeluar);
        return view('suratkeluar.edit', compact('data'));
    }
    public function update(Request $request, $kode_skeluar){

        $data= Suratkeluar::find($kode_skeluar);
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
        return redirect('/suratkeluar');
    }
    public function destroy($kode_skeluar)
    {
        $data = Suratkeluar::find($kode_skeluar);
        $data->delete();
        return redirect('/suratkeluar')->with('sucess','Data Berhasil Dihapus');    
    }
    public function cetakFormSK(){
        return view('suratkeluar.Cetak-sk-form');
    }
    public function cetakSKPertanggal($tgl_surat_awal, $tgl_surat_akhir){
            // dd(["Tanggal Awal : ".$tgl_surat_awal, "Tanggal Akhir :".$tgl_surat_akhir]);

            $cetakPertanggal = Suratkeluar::with('bidang')->whereBetween('tgl_surat',[$tgl_surat_awal, $tgl_surat_akhir])->get();
    
        return view('suratkeluar.Cetak-sk-pertanggal', ['cetakPertanggal' => $cetakPertanggal]);
       
    }
}

