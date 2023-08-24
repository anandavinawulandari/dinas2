<html>
    <head>
        <title>Cetak Laporan PDF</title>
    </head>
    <body>
        <style type="text/css">
            .table1{
                font-family: sans-serif;
                color:#232323;
                border-collapse: collapse;
            }
            .table1, th, td{
                border: 1px  solid #999;
                padding: 20px 20px;
            }
        </style>

        <h4 align="center">PEMERINTAH PROVINSI JAWA TIMUR
DINAS KELAUTAN DAN PERIKANAN
DAFTAR KENDALI SURAT KELUAR</h4>
<table class="table1">
<thead>
    <tr>
    <th style="width:5%">No</th>
                                <th style="width:12%">Kode Surat Masuk</th>
                                <th style="width:12%">Jenis Surat</th>
                                <th style="width:12%">Perihal</th>
                                <th style="width:12%">Dari</th>
                                <th style="width:12%">Kode Nota</th>
                                <th style="width:5%">Tanggal Surat</th>
                                <th style="width:5%">Tanggal Baca</th>
                                <th style="width:5%">Unit</th>
                               
    </tr>
</thead>
<tbody>
@foreach ($cetakPertanggal as $data)
<tr>
                                <td> {{ $loop->iteration }}</td>
                                <td> {{ $data->kode_smasuk }}</td>
                                 <td> {{ $data->baca }}</td>
                                 <td> {{ $data->jenis_surat }}</td>
                                 <td> {{ $data->notadinas->perihal ?? '' }}</td>
                                 <td> {{ $data->dari }}</td>
                                 <td> {{ $data->kode_nota }}</td>
                                 <td> {{ $data->notadinas->tgl_surat ?? ''}}</td>

                                 <td> {{ $data->tgl_baca }}</td>
                                 <td> {{ $data->notadinas->unit ?? '' }}</td>             <td> 
                           @endforeach
                
</tbody>
</table>
<script type="text/javascript">
window.print();
</script>
        </body></html>