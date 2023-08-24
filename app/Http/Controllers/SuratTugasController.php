<?php

namespace App\Http\Controllers;
use App\Models\Surattugas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class SuratTugasController extends Controller
{

    public function index(){
        $data = Surattugas::all();
        return view('surattugas.index', ['dataStugas' => $data]);
    }
    public function laporanst()
    {
        return view('surattugas.laporanst');
    }
    public function edit($kode_stugas)
    {
        $data = Surattugas::find($kode_stugas);
        return view('surattugas.edit', compact('data'));
    }
    public function create()
    {
        return view('surattugas.create');
    }
    public function store(Request $request)
    {
        $data = new Surattugas;
        $data->kode_stugas = $request->kode_stugas;
        $data->kode_bidang = $request->kode_bidang;
        $data->status = $request->status;
        $data->no_agenda = $request->no_agenda;
        $data->no_surat = $request->no_surat;
        $data->tgl_surat = $request->tgl_surat;
        $data->perihal = $request->perihal;
        $data->kepada = $request->kepada;
        $data->sumber = $request->sumber;
        $data->catatan = $request->catatan;
        $data->save();
        return redirect('/surattugas')->with('sucess','Data Berhasil Tersimpan');
    }

    public function update(Request $request,$kode_stugas)
    {
        $data = Surattugas::find($kode_stugas);
        $data->kode_bidang = $request->kode_bidang;
        $data->status = $request->status;
        $data->no_agenda = $request->no_agenda;
        $data->no_surat = $request->no_surat;
        $data->tgl_surat = $request->tgl_surat;
        $data->perihal = $request->perihal;
        $data->kepada = $request->kepada;
        $data->sumber = $request->sumber;
        $data->catatan = $request->catatan;
        $data->update();
        return redirect('/surattugas');
    }
    public function destroy($kode_stugas)
    {
        $data = Surattugas::find($kode_stugas);
        $data->delete();
        return redirect('/surattugas');
    }
    public function pdfST(){
        $data= Surattugas::all();
        return view('surattugas.pdfST', ['dataStugas' => $data]);
    }
    public function kop($kode_stugas){
        $data['data'] = Surattugas::find($kode_stugas)->get()->first();
        return view('surattugas.kop')->with($data);
    }

    public function cetakFormST(){
        return view('surattugas.Cetak-st-form');
    }
    public function cetakSTPertanggal($tgl_surat_awal, $tgl_surat_akhir){
            // dd(["Tanggal Awal : ".$tgl_surat_awal, "Tanggal Akhir :".$tgl_surat_akhir]);

            $cetakPertanggal = Surattugas::with('bidang')->whereBetween('tgl_surat',[$tgl_surat_awal, $tgl_surat_akhir])->get();
    
        return view('surattugas.Cetak-st-pertanggal', ['cetakPertanggal' => $cetakPertanggal]);
       
    }

    public function surattugasFilter(Request $request){
        $month = $request->get('month');
       
        $surattugass = Surattugas::whereMonth('created_at', '=', $month)->get();
            
            
            return view('arsip.surattugas', ['surattugass' => $surattugass]);
        }

        public function uploadpage(){
            return view('surattugas.surattugaslap');
        }
        public function storestugas(Request $request){
            return $request;
        }
        public function bidang(){
            return $this->belongsTo(Bidang::class, 'kode_bidang');
        }

}
