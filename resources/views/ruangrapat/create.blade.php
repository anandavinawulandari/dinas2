@extends('layouts.master')
@section('title','Laporan Pinjam Ruang Dinas Kelautan dan Perikanan Provinsi Jawa Timur')
<link rel="shortcut icon" href="{{asset('AdminLTE-3.2.0')}}/dist/img/dinas.png" type="image/x-icon">

@section('content')
<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
                    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>           
</head>
<br>
<div class="container">
    <div class="row"></div>
        <div class="col-md-6">
            <h4>Submit Data Ruang</h4>
            <br>
            @if ($errors->any())
            <div class="alert alert danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{route('ruangrapat.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Kode Pinjam Ruang <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="kode_rrapat" id="kode_rrapat"  />
    
                </div>
                <div class="form-group">
                    <label>Status <span class="text-danger">*</span></label>
                    <select class="form-control" type="options" name="status" id="status" />
                    <option value="Disetujui">Disetujui</option>
                                <option value="Diajukan">Diajukan</option>
                               </select>
                </div>
           
                  <div class="form-group">
                    <label>Nama Ruangan <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="nama_ruang" id="nama_ruang" >
                </div>
                    <div class="form-group">
                    <label>Tanggal Acara <span class="text-danger">*</span></label>
                    <input class="form-control" type="date" name="tgl_acara" id="tgl_acara" >
                </div>
                <div class="form-group">
                    <label>Jam <span class="text-danger">*</span></label>
                    <input class="form-control" type="time" name="jam" id="jam" />
                </div>
                <div class="form-group">
                    <label>Acara <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="acara" id="acara" />
                </div>
                <div class="form-group">
                    <label>Unit <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="kode_bidang" id="kode_bidang"/>
                </div>
                <div class="form-group">
                    <label>Tanggal Pesan <span class="text-danger">*</span></label>
                    <input class="form-control" type="date" name="tgl_pesan" id="tgl_pesan" >
                </div>
             
                <div class="form-group">
                    <label>Catatan <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="catatan" id="catatan" />
                </div>
                <br>
                <div><button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{route('ruangrapat.index')}}" class="btn btn-success">Kembali</a></div>
            </form>
        </div></div></div>
@endsection