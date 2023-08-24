@extends('layouts.master')
@section('title','Surat Keluar Dinas Kelautan dan Perikanan Provinsi Jawa Timur')
<link rel="shortcut icon" href="{{asset('AdminLTE-3.2.0')}}/dist/img/dinas.png" type="image/x-icon">

@section('content')
<br>
<div class="container">
    <div class="row"></div>
        <div class="col-md-6">
            <h4>Edit Surat Keluar</h4>
            <br>
            <form action="{{route('suratkeluar.update', $data->kode_skeluar)}}" method="POST"> 
            @csrf
           
                <div class="form-group">
                    <label>Kode Surat Keluar <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="kode_skeluar" id="kode_skeluar" readonly value="{{$data->kode_skeluar}}">
                </div>

                <div class="form-group">
                    <label>Status <span class="text-danger">*</span></label>
                    <select class="form-control" type="options" name="status" id="status" />
                    <option value="Teragenda">Teragenda</option>
                                <option value="Belum Agenda">Belum Agenda</option>
                               </select>
                </div>
                <div class="form-group">
                    <label>Kode Bidang <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="kode_bidang" id="kode_bidang" value = "{{$data->kode_bidang}}" />
                </div>
                <div class="form-group">
                    <label>No Agenda <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="no_agenda" id="no_agenda"  value="{{$data->no_agenda  }}">
                </div>
                <div class="form-group">
                    <label>No Surat <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="no_surat" id="no_surat" value="{{$data->no_surat  }}">
                </div>
                <div class="form-group">
                    <label>Tanggal Surat <span class="text-danger">*</span></label>
                    <input class="form-control" type="date" name="tgl_surat" id="tgl_surat" value="{{$data->tgl_surat  }}">
                </div>
                <div class="form-group">
                    <label>Perihal <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="perihal" id="perihal" value="{{$data->perihal  }}">
                </div>
                <div class="form-group">
                    <label>Kepada <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="kepada" id="kepada" value="{{$data->kepada }}">
                </div>
                <div class="form-group">
                    <label>Sumber <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="sumber" id="sumber" value="{{$data->sumber}}">
                </div>
 
                <div class="form-group">
                    <label>Catatan <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="catatan" id="catatan" value="{{$data->catatan }}">
                </div>
                <br>
                <div><button type="submit" class="btn btn-primary">Update</button>
                <a href="{{route('suratkeluar.index')}}" class="btn btn-success">Kembali</a></div>
            </form>
        </div></div></div>
@endsection