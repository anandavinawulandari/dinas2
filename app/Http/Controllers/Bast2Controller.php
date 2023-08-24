<?php

namespace App\Http\Controllers;
use App\Models\Bast2;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class Bast2Controller extends Controller
{

    public function index(){
        $data = Bast2::all();
        return view('bast2.index', ['dataBast2' => $data]);

        
    }
    public function pdfB2(){
        $data= Bast2::all();
        return view('bast2.pdfB2', ['dataBast2' => $data]);
    }
    public function edit($kode_bast2)
    {
        $data = Bast2::find($kode_bast2);
        return view('bast2.edit', compact('data'));
    }
    public function create()
    {
        return view('bast2.create');
    }
    public function store(Request $request)
    {
        $data = new Bast2;
        $data->kode_bast2 = $request->kode_bast2;
        $data->status = $request->status;
        $data->no_agenda = $request->no_agenda;
        $data->no_surat = $request->no_surat;
        $data->tgl_surat = $request->tgl_surat;
        $data->perihal = $request->perihal;
        $data->kepada = $request->kepada;
        $data->sumber = $request->sumber;
        $data->bidang = $request->bidang;
        $data->catatan = $request->catatan;
        $data->save();
        return redirect('/bast2')->with('sucess','Data Berhasil Tersimpan');
    }

    public function update(Request $request,$kode_bast2)
    {
        $data = Bast2::find($kode_bast2);
        $data->status = $request->status;
        $data->no_agenda = $request->no_agenda;
        $data->no_surat = $request->no_surat;
        $data->tgl_surat = $request->tgl_surat;
        $data->perihal = $request->perihal;
        $data->kepada = $request->kepada;
        $data->sumber = $request->sumber;
        $data->bidang = $request->bidang;
        $data->catatan = $request->catatan;
        $data->update();
        return redirect('/bast2');
    }
    public function destroy($kode_bast2)
    {
        $data = Bast2::find($kode_bast2);
        $data->delete();
        return redirect('/bast2');
    }
}
