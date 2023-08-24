<?php

namespace App\Http\Controllers;
use App\Models\Lapstugas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class LapSTugasController extends Controller
{

    public function uploadpage(){
        return view('lapstugas.surattugaslap');
    }
    public function store(Request $request){

        $data=new lapstugas();
        $file=$request->file;
        return $request->file;

        $filename=time().'.'.$file->getClientOriginalExtension();

        $request->file->move('assets',$filename);
        $data->file->$filename;

        $data->name = $request->name;
        $data->description = $request->description;
        $data->save();
        return redirect('/laporantugas')->with('sucess','Data Berhasil Tersimpan');
    }



}
