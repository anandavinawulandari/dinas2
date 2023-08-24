@extends('layouts.master')
@section('title','Laporan Surat Keluar Dinas Kelautan dan Perikanan Provinsi Jawa Timur')
<link rel="shortcut icon" href="{{asset('AdminLTE-3.2.0')}}/dist/img/dinas.png" type="image/x-icon">

@section('content')
<center><h1>Laporan Surat Keluar</h1></center>
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
<a href="https://drive.google.com/drive/folders/1Qi1SSQtNCemLVBC54DGye_Plv-rOWYmH?usp=sharing" class="btn btn-secondary pull-right" target="_blank" >Januari <i class="far fa-calendar-alt"></i></a>

<a href="https://drive.google.com/drive/folders/1zL8l2I_RDEFd553fVXL98xUWLhUQCAZI?usp=sharing" class="btn btn-success pull-right">Februari <i class="far fa-calendar-alt"></i></a>
<a href="https://drive.google.com/drive/folders/1b0A_aivp_hBNMmEH3_rlBGBRUJqR0LGg?usp=sharing" class="btn btn-secondary pull-right" target="_blank">Maret <i class="far fa-calendar-alt"></i></a>

<a href="https://drive.google.com/drive/folders/1dTVN3JAnv4a0csJOkTUWFsowhlE75XZG?usp=sharing" class="btn btn-success pull-right" target="_blank">April <i class="far fa-calendar-alt"></i></a>


<a href="https://drive.google.com/drive/folders/1Fc2uZ4bTR_gx_FOkhyc6XVRGRHz_6UJX?usp=sharing" class="btn btn-secondary pull-right" target="_blank">Mei <i class="far fa-calendar-alt"></i></a>

<a href="https://drive.google.com/drive/folders/17XRBKgGem8LzhcL7vK4veHquc2RyGSuE?usp=sharing" class="btn btn-success pull-right"  target="_blank">Juni <i class="far fa-calendar-alt"></i></a>

<br>
<br>
<a href="https://drive.google.com/drive/folders/1u-or3rb4rHdaS4kLCFgtwDhOS5iT63Ql?usp=sharing" class="btn btn-secondary pull-right" target="_blank">Juli <i class="far fa-calendar-alt"></i></a>

<a href="https://drive.google.com/drive/folders/1S6pW5x8kW6ujlb351LYsFB_-o2c36ePf?usp=sharing" class="btn btn-success pull-right"  target="_blank">Agustus <i class="far fa-calendar-alt"></i></a>
<a href="https://drive.google.com/drive/folders/1HYSQR-eB5fCJCqOOC9hWGzVvkNUHd2Mf?usp=sharing" class="btn btn-secondary pull-right" target="_blank">September <i class="far fa-calendar-alt"></i></a>
<a href="https://drive.google.com/drive/folders/1BusgF9U9ioQJLM_bixg5ydcpwKZBp6J7?usp=sharing" class="btn btn-success pull-right"  target="_blank">Oktober <i class="far fa-calendar-alt"></i></a>
<a href="https://drive.google.com/drive/folders/1DCV9-Ira7P3C_3Lgg0T-H2w9Siv68MEH?usp=sharing" class="btn btn-secondary pull-right" target="_blank">November <i class="far fa-calendar-alt"></i></a>
<a href="https://drive.google.com/drive/folders/1VQauxawMP2Wb-fGGxGtzX7UaYvoTM2rl?usp=sharing" class="btn btn-success pull-right"  target="_blank">Desember <i class="far fa-calendar-alt"></i></a>
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
