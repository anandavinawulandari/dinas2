@extends('layouts.master')
@section('title','Laporan BAST Dinas Kelautan dan Perikanan Provinsi Jawa Timur')

@section('content')
<center><h1>Laporan BAST</h1></center>
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
<a href="https://drive.google.com/drive/folders/12iW6PpRG6dUi6NbsSVAFceBWgv8p8sje?usp=sharing" class="btn btn-secondary pull-right" target="_blank" >Januari <i class="far fa-calendar-alt"></i></a>

<a href="https://drive.google.com/drive/folders/1sCcOGKr_AWeRWZjkb2wqooV68GTicT1U?usp=sharing" class="btn btn-success pull-right">Februari <i class="far fa-calendar-alt"></i></a>
<a href="https://drive.google.com/drive/folders/1tmx1mYxGRkDk5Es1rkhCpDQojlH5wJLv?usp=sharing" class="btn btn-secondary pull-right" target="_blank">Maret <i class="far fa-calendar-alt"></i></a>

<a href="https://drive.google.com/drive/folders/16_BWG7k-GQ8X6qb90L_1pyHwHWs182LH?usp=sharing" class="btn btn-success pull-right" target="_blank">April <i class="far fa-calendar-alt"></i></a>


<a href="https://drive.google.com/drive/folders/19zyeCsgPiPQiH9cTuKxP2Wd7MTs4pH6p?usp=sharing" class="btn btn-secondary pull-right" target="_blank">Mei <i class="far fa-calendar-alt"></i></a>

<a href="https://drive.google.com/drive/folders/1aUuRUDqa4YM42arFTdBzBiwOPZsh3Gj7?usp=sharing" class="btn btn-success pull-right"  target="_blank">Juni <i class="far fa-calendar-alt"></i></a>

<br>
<br>
<a href="https://drive.google.com/drive/folders/1JtM6vLGTvffBX4w7ECbRuarNdiNF-sv9?usp=sharing" class="btn btn-secondary pull-right" target="_blank">Juli <i class="far fa-calendar-alt"></i></a>

<a href="https://drive.google.com/drive/folders/1S9_pt3i4S9fIBb6KM7TPhZP0m5rjn34P?usp=sharing" class="btn btn-success pull-right"  target="_blank">Agustus <i class="far fa-calendar-alt"></i></a>
<a href="https://drive.google.com/drive/folders/1IFU7_Y7Cd6QcsydQbzGiFDStWN4y4lhI?usp=sharing" class="btn btn-secondary pull-right" target="_blank">September <i class="far fa-calendar-alt"></i></a>
<a href="https://drive.google.com/drive/folders/1wJaMnzCD2kK4TQYs0QDkT_gtqkykeu9y?usp=sharing" class="btn btn-success pull-right"  target="_blank">Oktober <i class="far fa-calendar-alt"></i></a>
<a href="https://drive.google.com/drive/folders/1zXvsECHnpSjZ2f8bVe8-4aScjvxFjWKQ?usp=sharing" class="btn btn-secondary pull-right" target="_blank">November <i class="far fa-calendar-alt"></i></a>
<a href="https://drive.google.com/drive/folders/1tBTcDFkKaA9EwXWUkPHQ_UlRCGr62Yr2?usp=sharing" class="btn btn-success pull-right"  target="_blank">Desember <i class="far fa-calendar-alt"></i></a>
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
