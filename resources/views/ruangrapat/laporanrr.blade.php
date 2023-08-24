@extends('layouts.master')
@section('title','Laporan Pinjam Ruang Dinas Kelautan dan Perikanan Provinsi Jawa Timur')
<link rel="shortcut icon" href="{{asset('AdminLTE-3.2.0')}}/dist/img/dinas.png" type="image/x-icon">

@section('content')
<center><h1>Laporan Pinjam Ruang</h1></center>
<br>
<div class="container ">
    @if(Session::has('sucess'))
    <div class="alert alert-sucess " role="alert">
        {{Session::get('sucess')}}</div>
        @endif


        

        <div class="car-body">
            

</div>
<br>
<br><br><br>
<center >
<a href="https://drive.google.com/drive/folders/1PivzEX_HnoEZZ1Zm6S0sQEPvIB350ub1?usp=sharing" class="btn btn-secondary pull-right" target="_blank" >Januari <i class="far fa-calendar-alt"></i></a>

<a href="https://drive.google.com/drive/folders/1PivzEX_HnoEZZ1Zm6S0sQEPvIB350ub1?usp=sharing" class="btn btn-success pull-right">Februari <i class="far fa-calendar-alt"></i></a>
<a href="https://drive.google.com/drive/folders/1PivzEX_HnoEZZ1Zm6S0sQEPvIB350ub1?usp=sharing" class="btn btn-secondary pull-right" target="_blank">Maret <i class="far fa-calendar-alt"></i></a>

<a href="https://drive.google.com/drive/folders/1PivzEX_HnoEZZ1Zm6S0sQEPvIB350ub1?usp=sharing" class="btn btn-success pull-right" target="_blank">April <i class="far fa-calendar-alt"></i></a>


<a href="https://drive.google.com/drive/folders/1PivzEX_HnoEZZ1Zm6S0sQEPvIB350ub1?usp=sharing" class="btn btn-secondary pull-right" target="_blank">Mei <i class="far fa-calendar-alt"></i></a>

<a href="https://drive.google.com/drive/folders/1PivzEX_HnoEZZ1Zm6S0sQEPvIB350ub1?usp=sharing" class="btn btn-success pull-right"  target="_blank">Juni <i class="far fa-calendar-alt"></i></a>

<br>
<br>
<a href="https://drive.google.com/drive/folders/1PivzEX_HnoEZZ1Zm6S0sQEPvIB350ub1?usp=sharing" class="btn btn-secondary pull-right" target="_blank">Juli <i class="far fa-calendar-alt"></i></a>

<a href="https://drive.google.com/drive/folders/1PivzEX_HnoEZZ1Zm6S0sQEPvIB350ub1?usp=sharing" class="btn btn-success pull-right"  target="_blank">Agustus <i class="far fa-calendar-alt"></i></a>
<a href="https://drive.google.com/drive/folders/1PivzEX_HnoEZZ1Zm6S0sQEPvIB350ub1?usp=sharing" class="btn btn-secondary pull-right" target="_blank">September <i class="far fa-calendar-alt"></i></a>
<a href="https://drive.google.com/drive/folders/1PivzEX_HnoEZZ1Zm6S0sQEPvIB350ub1?usp=sharing" class="btn btn-success pull-right"  target="_blank">Oktober <i class="far fa-calendar-alt"></i></a>
<a href="https://drive.google.com/drive/folders/1PivzEX_HnoEZZ1Zm6S0sQEPvIB350ub1?usp=sharing" class="btn btn-secondary pull-right" target="_blank">November <i class="far fa-calendar-alt"></i></a>
<a href="https://drive.google.com/drive/folders/1PivzEX_HnoEZZ1Zm6S0sQEPvIB350ub1?usp=sharing" class="btn btn-success pull-right"  target="_blank">Desember <i class="far fa-calendar-alt"></i></a>
</center>

        <div class="panel-heading " >
            </div>
                
            </div>
        </div>

    </div>
    @include('layouts.footer')  

    @stop

@push('scripts')

@endpush
