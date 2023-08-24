@extends('layouts.master')
@section('title','Pinjam Ruang Dinas Kelautan dan Perikanan Provinsi Jawa Timur')
<link rel="shortcut icon" href="{{asset('AdminLTE-3.2.0')}}/dist/img/dinas.png" type="image/x-icon">

@section('content')


<div class="container">

<div class="row"></div>
        <div class="col-md-6">

            <h4>Edit Data Ruang</h4>
            <br>
            <form action="{{route('ruangrapat.update', $data->kode_rrapat)}}" method="POST"> 
            @csrf
            <div class="form-group">
                    <label>Status <span class="text-danger">*</span></label>
                    <select class="form-control" type="options" name="status" id="status" />
                    <option value="Disetujui">Disetujui</option>
                                <option value="Diajukan">Diajukan</option>
                               </select>
                </div>
            <div class="form-group">
            <label>Nama Ruangan <span class="text-danger">*</span></label>
                    <input class="form-control" type="options" name="nama_ruang" id="nama_ruang" value = "{{$data->nama_ruang}}" />
    
                </div>
                <div class="form-group">
                    <label>Tanggal Acara <span class="text-danger">*</span></label>
                    <input class="form-control" type="date" name="tgl_acara" id="tgl_acara" value="{{$data->tgl_acara}}"/>
                </div>
               
                  <div class="form-group">
                  <label>Jam <span class="text-danger">*</span></label>
                    <input class="form-control" type="time" name="jam" id="jam" value="{{$data->jam}}">
                </div>
                    <div class="form-group">
                    <label>Acara <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="acara" id="acara" value="{{$data->acara}}"/>
                </div>
                <div class="form-group">
                    <label>Unit <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="kode_bidang" id="kode_bidang" value="{{$data->bidang->nama_bidang ?? ''}}"/>
                </div>
                <div class="form-group">
                    <label>Tanggal Pesan <span class="text-danger">*</span></label>
                    <input class="form-control" type="date" name="tgl_pesan" id="tgl_pesan" value="{{$data->tgl_pesan}}"/>
                </div>
               
                <div class="form-group">
                    <label>Catatan <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="catatan" id="catatan" value="{{$data->catatan}}"/>
                </div>
                <br>
                <div><button type="submit" class="btn btn-primary">Update</button>
                <a href="{{route('ruangrapat.index')}}" class="btn btn-success">Kembali</a></div>
            </form>
        </div></div></div>
@endsection