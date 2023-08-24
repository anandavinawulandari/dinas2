@extends('layouts.master')
@section('title','Laporan Surat Tugas Dinas Kelautan dan Perikanan Provinsi Jawa Timur')
<link rel="shortcut icon" href="{{asset('AdminLTE-3.2.0')}}/dist/img/dinas.png" type="image/x-icon">

@section('content')
<center><h1>Laporan Surat Tugas</h1></center>
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
<a href="https://drive.google.com/drive/folders/1rPMmm4OnKd8obUbXJb7YAVabug5mcn9x?usp=sharing" class="btn btn-secondary pull-right" target="_blank" >Januari <i class="far fa-calendar-alt"></i></a>

<a href="https://drive.google.com/drive/folders/1MfD-jT-EBhJDJ9W26Qn5Rkgh4G9IDrYJ?usp=sharing" class="btn btn-success pull-right">Februari <i class="far fa-calendar-alt"></i></a>
<a href="https://drive.google.com/drive/folders/15jEsl0-RgsEyes90bSh7rcQRPtytXCv0?usp=sharing" class="btn btn-secondary pull-right" target="_blank">Maret <i class="far fa-calendar-alt"></i></a>

<a href="https://drive.google.com/drive/folders/1fYleezVrY7QrVFeFhedcff6oJUT-MmRT?usp=sharing" class="btn btn-success pull-right" target="_blank">April <i class="far fa-calendar-alt"></i></a>


<a href="https://drive.google.com/drive/folders/1UaYq0JvZ_Mlz3DZSP0VSSKYlOif41bhh?usp=sharing" class="btn btn-secondary pull-right" target="_blank">Mei <i class="far fa-calendar-alt"></i></a>

<a href="https://drive.google.com/drive/folders/17gC0fe5tlO0k0pkES7pk_tFy9RNx_Jqy?usp=sharing" class="btn btn-success pull-right"  target="_blank">Juni <i class="far fa-calendar-alt"></i></a>

<br>
<br>
<a href="https://drive.google.com/drive/folders/1tXTeh6CshfVJwSya9dxppjfFECtf0zIp?usp=sharing" class="btn btn-secondary pull-right" target="_blank">Juli <i class="far fa-calendar-alt"></i></a>

<a href="https://drive.google.com/drive/folders/1HHTeOGfGRyd5IgjIHkvPI8UiGzWiU00N?usp=sharing" class="btn btn-success pull-right"  target="_blank">Agustus <i class="far fa-calendar-alt"></i></a>
<a href="https://drive.google.com/drive/folders/1QKf611IIEVYOu1QVSFQJEiTwpW9wUeK4?usp=sharing" class="btn btn-secondary pull-right" target="_blank">September <i class="far fa-calendar-alt"></i></a>
<a href="https://drive.google.com/drive/folders/1HqQ-wqQ4GeMwL8h9o3eUqdPtmx051L8a?usp=sharing" class="btn btn-success pull-right"  target="_blank">Oktober <i class="far fa-calendar-alt"></i></a>
<a href="https://drive.google.com/drive/folders/19J9568uErerpgSNm5wGEnEey_qK0JFZF?usp=sharing" class="btn btn-secondary pull-right" target="_blank">November <i class="far fa-calendar-alt"></i></a>
<a href="https://drive.google.com/drive/folders/1st0qyFQMqUMnKSJwVO16DSc0fwySQr31?usp=sharing" class="btn btn-success pull-right"  target="_blank">Desember <i class="far fa-calendar-alt"></i></a>
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
