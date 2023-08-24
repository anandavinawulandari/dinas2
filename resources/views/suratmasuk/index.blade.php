@extends('layouts.master')
@section('title','Laporan Kotak Surat Dinas Kelautan dan Perikanan Provinsi Jawa Timur')

@section('content')
<h1>Kelola Data Kotak Surat</h1>
<br>
<div class="container ">
    @if(Session::has('sucess'))
    <div class="alert alert-sucess " role="alert">
        {{Session::get('sucess')}}</div>
        @endif
        <div class="content">
    <div class="card card-info card-outline">
    


        </div>
<div class="car-body">
<div class="input-group mb-3">
<label for="label">Tanggal Surat Awal </label>
<input type="date" name="tgl_surat_awal" id="tgl_surat_awal" class="form-control"/>
</div>

<div class="input-group mb-3">
<label for="label">Tanggal Surat Akhir </label>
<input type="date" name="tgl_surat_akhir" id="tgl_surat_akhir" class="form-control"/>
</div>
</div>

<div class="input-group mb-2">
<a href="" onclick="this.href='/cetak-data-pertanggal/'+document.getElementById('tgl_surat_awal').value + '/' + document.getElementById('tgl_surat_akhir').value " target="_blank" class="btn btn-primary" col-md-12>Cetak Data Pertanggal <i class="fa fa-print"></i></a>

</div>
<a href="{{route('pdfKS')}}" class="btn btn-secondary pull-right" target="_blank">Cetak Data Keseluruhan <i class="fa fa-print"></i></a>

</div>

</div>

                <div class="panel-heading " >
                           </div>
                <div class="panel-body py-3">
                    <table class="table table-bordered table-striped" id="table-smasuk">
                        <thead>
                            <tr>
                            <form method="POST">
                                <th style="width:5%">No</th>
                                <th style="width:12%">Kode Surat Masuk</th>
                                <th style="width:12%">Baca</th>
                                <th style="width:12%">Jenis Surat</th>
                                <th style="width:12%">Perihal</th>
                                <th style="width:12%">Dari</th>
                                <th style="width:12%">Kode Nota</th>
                                <th style="width:5%">Tanggal Surat</th>
                                <th style="width:5%">Unit</th>
                             
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dataSmasuk as $data)
                            <tr>
                                <td> {{ $loop->iteration }}</td>
                                <td> {{ $data->kode_smasuk }}</td>
                                 <td> {{ $data->baca }}</td>
                                 <td> {{ $data->jenis_surat }}</td>
                                 <td> {{ $data->notadinas->perihal ?? '' }}</td>
                                 <td> {{ $data->dari }}</td>
                                 <td> {{ $data->kode_nota }}</td>
                                 <td> {{ $data->notadinas->tgl_surat ?? ''}}</td>
                                 <td> {{ $data->notadinas->unit ?? '' }}</td>              
                               
                               
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
    $('#table-smasuk').DataTable();
});
</script>
@endpush
