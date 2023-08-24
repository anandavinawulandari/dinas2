@extends('layouts.master')
@section('title','Laporan Bast Dinas Kelautan dan Perikanan Provinsi Jawa Timur')

@section('content')
<h1>Kelola Data Bast</h1>
<br>
<div class="container ">
    @if(Session::has('sucess'))
    <div class="alert alert-sucess " role="alert">
        {{Session::get('sucess')}}</div>
        @endif
      <div class="row ">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading " >
                    <h4>Halaman Laporan Data Bast</h4>
                    <a href="{{route('bast2.create')}}" class="btn btn-success pull-right">+Submit Data</a>
                <a href="{{route('pdfB2')}}" class="btn btn-secondary pull-right" target="_blank">Cetak Data Keseluruhan <i class="fa fa-print"></i></a>
                <div class="panel-body py-3">
                    <table class="table table-bordered table-striped" id="table-bast2">
                        <thead>
                            <tr>
                            <form method="POST">
                                <th style="width:5%">No</th>
                                <th style="width:12%">Kode Bast</th>
                                <th style="width:12%">Status</th>
                                <th style="width:12%">No Agenda</th>
                                <th style="width:12%">No Surat</th>
                                <th style="width:5%">Tanggal Surat</th>
                                <th style="width:5%">Perihal</th>
                                <th style="width:5%">Kepada</th>
                                <th style="width:5%">Sumber</th>
                                <th style="width:5%">UPT</th>
                                <th style="width:5%">Catatan</th>
                               
                                <th style="width:10%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dataBast2 as $data)
                            <tr>
                                <td> {{ $loop->iteration }}</td>
                                <td> {{ $data->kode_bast2 }}</td>
                                 <td> {{ $data->status }}</td>
                                 <td> {{ $data->no_agenda }}</td>
                                 <td> {{ $data->no_surat }}</td>
                                 <td> {{ $data->tgl_surat }}</td>
                                 <td> {{ $data->perihal }}</td>
                                 <td> {{ $data->kepada }}</td>
                                 <td> {{ $data->sumber }}</td>
                                 <td> {{ $data->bidang }}</td>
                                 <td> {{ $data->catatan }}</td>
                                                                   <td> 
                                <form action="{{ route('bast2.destroy', $data->kode_bast2)}}" method="post">@csrf
                                
                                <button class="btn btn-danger" onClick="return confirm('Yakin Hapus Data?')">Delete</button>  
                                <a href="{{ route('bast2.edit', $data->kode_bast2)}}" class="btn btn-warning">Edit</a>
    
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


    @stop

@push('scripts')
<script>
$(function() {
    $('#table-bast2').DataTable();
});
</script>
@endpush
