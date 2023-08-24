@extends('layouts.master')
@section('title','Laporan Surat Tugas Dinas Kelautan dan Perikanan Provinsi Jawa Timur')
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
            <h4>Submit Data Surat Tugas</h4>
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

            <form action="{{route('surattugas.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Kode Surat Tugas <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="kode_stugas" id="kode_stugas"  />
    
                </div>
                <div class="form-group">
                    <label>Kode Bidang<span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="kode_bidang" id="kode_bidang"  />
    
                </div>
                <div class="form-group">
                    <label>Status <span class="text-danger">*</span></label>
                    <select class="form-control" type="options" name="status" id="status" />
                    <option value="Teragenda">Teragenda</option>
                                <option value="Belum Agenda">Belum Agenda</option>
                               </select>
                </div>
            <div class="form-group">
                    <label>Nomor Agenda <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="no_agenda" readonly id="no_agenda"  />
    
                </div>
                  <div class="form-group">
                    <label>Nomor Surat <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="no_surat" id="no_surat" >
                </div>
                    <div class="form-group">
                    <label>Tanggal Surat <span class="text-danger">*</span></label>
                    <input class="form-control" type="date" name="tgl_surat" id="tgl_surat" >
                </div>
                <div class="form-group">
                    <label>Perihal <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="perihal" id="perihal" />
                </div>
                <div class="form-group">
                    <label>Kepada <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="kepada" id="kepada" />
                </div>
                <div class="form-group">
                    <label>Sumber <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="sumber" id="sumber"/>
                </div>

                </div>
                <div class="form-group">
                    <label>Catatan <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="catatan" id="catatan" />
                </div>
                <br>
                <div><button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{route('surattugas.index')}}" class="btn btn-success">Kembali</a></div>
            </form>
        </div></div></div>
@endsection