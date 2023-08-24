<?php

namespace App\Http\Controllers;
use App\Models\Suratmasuk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class SuratMasukController extends Controller
{

    public function index(){
        $data = Suratmasuk::all();
        return view('suratmasuk.index', ['dataSmasuk' => $data]);

        
    }
    public function pdfKS(){
        $data= Suratmasuk::all();
        return view('suratmasuk.pdfKS', ['dataSmasuk' => $data]);
    }
    public function create()
    {
        return view('suratmasuk.create');
    }
    public function store(Request $request)
    {
        $data = new Suratmasuk;
        $data->kode_smasuk = $request->kode_smasuk;
        $data->baca = $request->baca;
        $data->jenis_surat = $request->jenis_surat;
        $data->dari = $request->dari;
        $data->kode_nota = $request->kode_nota;
        $data->tgl_surat = $request->tgl_surat;
        $data->save();
        return redirect('/suratmasuk')->with('sucess','Data Berhasil Tersimpan');
    }



    public function edit($kode_smasuk)
    {
        $data = Suratmasuk::find($kode_smasuk);
        return view('suratmasuk.edit', compact('data'));
    }
    public function update(Request $request, $kode_smasuk){

        $data= Suratmasuk::find($kode_smasuk);
        $data->baca = $request->baca;
        $data->jenis_surat = $request->jenis_surat;
        $data->dari = $request->dari;
        $data->kode_nota = $request->kode_nota;
        $data->tgl_surat = $request->tgl_surat;
        $data->update();
        return redirect('/suratmasuk')->with('sucess','Data Berhasil Diubah');
    }
    public function destroy($kode_smasuk)
    {
        $data = Suratmasuk::find($kode_smasuk);
        $data->delete();
        return redirect('/suratmasuk')->with('sucess','Data Berhasil Dihapus');    
    }
    public function cetakFormSM(){
        return view('suratmasuk.Cetak-sm-form');
    }
    public function cetakSMPertanggal($tgl_surat_awal, $tgl_surat_akhir){
            // dd(["Tanggal Awal : ".$tgl_surat_awal, "Tanggal Akhir :".$tgl_surat_akhir]);

            $cetakPertanggal = Suratmasuk::with('bidang')->whereBetween('tgl_surat',[$tgl_surat_awal, $tgl_surat_akhir])->get();
    
        return view('suratmasuk.Cetak-sm-pertanggal', ['cetakPertanggal' => $cetakPertanggal]);
       
    }
}

