<?php

namespace App\Http\Controllers;
use App\Models\Notadinas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Datatables;
class NotaDinasController extends Controller
{

    public function index(){
        $data = Notadinas::all();
        return view('notadinas.index', ['dataNotadinas' => $data]);
    }
    public function laporannt()
    {
        return view('notadinas.laporannt');
    }
    public function pdfNota(){
        $data = Notadinas::all();
        return view('notadinas.pdfNota', ['dataNotadinas' => $data]);
    }
    public function edit($kode_nota)
    {
        $data = Notadinas::find($kode_nota);
        return view('notadinas.edit', compact('data'));
    }
    public function create()
    {
        return view('notadinas.create');
    }
    public function store(Request $request)
    {
        $data = new Notadinas;
        $data->kode_nota = $request->kode_nota;
        $data->status = $request->status;
        $data->no_agenda = $request->no_agenda;
        $data->no_surat = $request->no_surat;
        $data->tgl_surat = $request->tgl_surat;
        $data->perihal = $request->perihal;
        $data->kepada = $request->kepada;
        $data->kode_bidang = $request->kode_bidang;

        $data->catatan = $request->catatan;
        $data->save();
        return redirect('/notadinas')->with('sucess','Data Berhasil Tersimpan');
        
    }

    public function update(Request $request,$kode_nota)
    {
        $data = Notadinas::find($kode_nota);
        $data->status = $request->status;
        $data->no_agenda = $request->no_agenda;
        $data->no_surat = $request->no_surat;
        $data->tgl_surat = $request->tgl_surat;
        $data->perihal = $request->perihal;
        $data->kepada = $request->kepada;
        $data->kode_bidang = $request->kode_bidang;

        $data->catatan = $request->catatan;
        $data->update();
        return redirect('/notadinas');
    }
    public function destroy($kode_nota)
    {
        $data = Notadinas::find($kode_nota);
        $data->delete();
        return redirect('/notadinas');
    }

    public function cetakNDPertanggal($tgl_surat_awal, $tgl_surat_akhir){
        // dd(["Tanggal Awal : ".$tgl_surat_awal, "Tanggal Akhir :".$tgl_surat_akhir]);

        $cetakPertanggal = Notadinas::with('bidang')->whereBetween('tgl_surat',[$tgl_surat_awal, $tgl_surat_akhir])->get();

    return view('notadinas.Cetak-nd-pertanggal', ['cetakPertanggal' => $cetakPertanggal]);
   
}
}
