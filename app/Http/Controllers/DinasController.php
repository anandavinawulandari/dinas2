<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DinasController extends Controller
{
    public function home(){
        return view('home.index');
    }
    public function laporan(){
        return view('laporan.index');
    }
    public function suratkeluar(){
        return view('suratkeluar.index');
    }
    public function surattugas(){
        return view('surattugas.index');
    }
    public function notadinas(){
        return view('notadinas.index');
    }
    public function ruangrapat(){
        return view('ruangrapat.index');
    }
    public function bast1(){
        return view('bast1.index');
    }
    public function bast2(){
        return view('bast2.index');
    }
}
