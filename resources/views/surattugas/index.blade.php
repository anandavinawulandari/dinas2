@extends('layouts.master')
@section('title','Surat Tugas Dinas Kelautan dan Perikanan Provinsi Jawa Timur')
<link rel="shortcut icon" href="{{asset('AdminLTE-3.2.0')}}/dist/img/dinas.png" type="image/x-icon">
@section('content')

<div class="container">
    @if(Session::has('sucess'))
    <div class="alert alert-sucess " role="alert">
        {{Session::get('sucess')}}</div>
        @endif

        <div class="car-body">
        <h1>Kelola Data Surat Tugas</h1>
<br>            

<div class="input-group mb-3">
<label for="label">Tanggal Surat Awal &nbsp;&nbsp;</label>
<input type="date" name="tgl_surat_awal" id="tgl_surat_awal" class="form-control"/>
</div>

<div class="input-group mb-3">
<label for="label">Tanggal Surat Akhir &nbsp;</label>
<input type="date" name="tgl_surat_akhir" id="tgl_surat_akhir" class="form-control"/>
</div>
</div>

<div class="input-group mb-2">
<a href="" onclick="this.href='/cetak-data-pertanggal/'+document.getElementById('tgl_surat_awal').value + '/' + document.getElementById('tgl_surat_akhir').value " target="_blank" class="btn btn-primary" col-md-12>Cetak Data Pertanggal <i class="fa fa-print"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="{{route('surattugas.laporanst')}}" class="btn btn-warning" target="">Daftar Laporan <i class="fa fa-folder-open"></i></a>
</div>


<a href="{{route('pdfST')}}" class="btn btn-secondary pull-right" target="_blank">Cetak Data Keseluruhan <i class="fa fa-print"></i></a>&nbsp;&nbsp;

<a href="{{route('surattugas.laporanst')}}" class="btn btn-success pull-right">+Submit Surat</a>

        <div class="panel-heading " >
            </div>
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
     

                <div class="panel-body py-3">
                    <table class="table table-bordered table-striped" id="table-stugas">
                        <thead>
                            <tr>
                            <form method="POST">
                                <th style="width:5%">No</th>
                                <!-- <th style="width:12%">Kode Surat Tugas</th> -->
                              
                                <th style="width:12%">Status</th>
                                <th style="width:12%">No Agenda</th>
                                <th style="width:12%">No Surat</th>
                                <th style="width:5%">Tanggal Surat</th>
                                <th style="width:5%">Perihal</th>
                                <th style="width:5%">Kepada</th>
                                <th style="width:5%">Sumber</th>
                                <th style="width:12%">Bidang</th>
                                <th style="width:5%">Catatan</th>
                               
                                <th style="width:10%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dataStugas as $data)
                            <tr>
                            <td> {{ $loop->iteration }}</td>
                                <!-- <td> {{ $data->kode_stugas }}</td> -->
                          
                                 <td> {{ $data->status }}</td>
                                 <td> {{ $data->no_agenda }}</td>
                                 <td> {{ $data->no_surat }}</td>
                                 <td> {{ $data->tgl_surat }}</td>
                                 <td> {{ $data->perihal }}</td>
                                 <td> {{ $data->kepada }}</td>
                                 <td> {{ $data->sumber }}</td>
                                 <td> {{ $data->bidang->nama_bidang ?? ''  }}</td>
                                 <td> {{ $data->catatan }}</td>
                                                                     <td> 
                                <form action="{{ route('surattugas.destroy', $data->kode_stugas)}}" method="post">@csrf
                                
                                <button class="btn btn-danger" onClick="return confirm('Yakin Hapus Data?')">Delete</button>  
                                <a href="{{ route('surattugas.edit', $data->kode_stugas)}}" class="btn btn-warning">Edit</a>
                                <a href="{{ route('surattugas.kop', $data->kode_stugas)}}" class="btn btn-outline-success" target="__blank">Cetak</a>
    
                            </form> </td>
                                    </tr>
                            @endforeach
                        </tbody>
                        
                    </table>
                    @include('layouts.footer')  
                    </div>
            </div>
        </div>
                </div>
            </div>
        </div>
        

        
    </div>


    @stop

@push('scripts')
<script>
$(function() {
    $('#table-stugas').DataTable();
});
</script>

@endpush
