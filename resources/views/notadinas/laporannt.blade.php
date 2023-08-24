@extends('layouts.master')
@section('title','Laporan Nota Dinas di Dinas Kelautan dan Perikanan Provinsi Jawa Timur')
<link rel="shortcut icon" href="{{asset('AdminLTE-3.2.0')}}/dist/img/dinas.png" type="image/x-icon">

@section('content')
<center><h1>Laporan Nota Dinas</h1></center>
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
<a href="https://drive.google.com/drive/folders/1Ngl27207fw5I9D9MN_SQxD_Fc2EFCyMn?usp=sharing" class="btn btn-secondary pull-right" target="_blank" >Januari <i class="far fa-calendar-alt"></i></a>

<a href="https://drive.google.com/drive/folders/1RMxZkW3YD-XIqcE8GS_PC_xPof_f5ESW?usp=sharing" class="btn btn-success pull-right">Februari <i class="far fa-calendar-alt"></i></a>
<a href="https://drive.google.com/drive/folders/1OuI8qb7rzm02jJXM3ZbK_ejGi3Zp0Ecu?usp=sharing" class="btn btn-secondary pull-right" target="_blank">Maret <i class="far fa-calendar-alt"></i></a>

<a href="https://drive.google.com/drive/folders/1YVKw2H8CugSf5mWfL09TpUapw4uX7rD6?usp=sharing" class="btn btn-success pull-right" target="_blank">April <i class="far fa-calendar-alt"></i></a>


<a href="https://drive.google.com/drive/folders/1hjAi8b-yaYcWTemeCBjgLPo1UpXLvBLZ?usp=sharing" class="btn btn-secondary pull-right" target="_blank">Mei <i class="far fa-calendar-alt"></i></a>

<a href="https://drive.google.com/drive/folders/1n1tRgaHA4p7UR5GnPK06gQHoDc6VJhHr?usp=sharing" class="btn btn-success pull-right"  target="_blank">Juni <i class="far fa-calendar-alt"></i></a>

<br>
<br>
<a href="https://drive.google.com/drive/folders/1TLr2Q2ITCuGXu1xUgGkpD5HJanjm1W2U?usp=sharing" class="btn btn-secondary pull-right" target="_blank">Juli <i class="far fa-calendar-alt"></i></a>

<a href="https://drive.google.com/drive/folders/1yO1sev3UGF0WWbU-Vmo85psVG7hK6Eip?usp=sharing" class="btn btn-success pull-right"  target="_blank">Agustus <i class="far fa-calendar-alt"></i></a>
<a href="https://drive.google.com/drive/folders/1wX6OU_v1ctgRXT1xsquM8GVKYCanbr8m?usp=sharing" class="btn btn-secondary pull-right" target="_blank">September <i class="far fa-calendar-alt"></i></a>
<a href="https://drive.google.com/drive/folders/18Wpl5UscGvelTwtVKUc5dICTM_mgAV4I?usp=sharing" class="btn btn-success pull-right"  target="_blank">Oktober <i class="far fa-calendar-alt"></i></a>
<a href="https://drive.google.com/drive/folders/1SJxu_bvpfYtFE7yBo_YGLu9TwzqJY606?usp=sharing" class="btn btn-secondary pull-right" target="_blank">November <i class="far fa-calendar-alt"></i></a>
<a href="https://drive.google.com/drive/folders/1X80vRyTKlETggmuuSdeMZCjCmsCfEqH-?usp=sharing" class="btn btn-success pull-right"  target="_blank">Desember <i class="far fa-calendar-alt"></i></a>
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
