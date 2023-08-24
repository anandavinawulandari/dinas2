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
                                <th style="width:12%">Kode Ruang Rapat</th>
                                <th style="width:12%">Status</th>
                                <th style="width:12%">Nama Ruangan</th>
                                <th style="width:12%">Tanggal Acara</th>
                                <th style="width:5%">Jam</th>
                                <th style="width:5%">Acara</th>
                                <th style="width:5%">Unit</th>
                                <th style="width:5%">Tanggal Pesan</th>
                                <th style="width:5%">Bidang</th>
                                <th style="width:5%">Catatan Umum</th>
                               
    </tr>
</thead>
<tbody>
@foreach ($cetakPertanggal as $data)
                            <tr>
                            <td> {{ $loop->iteration }}</td>
                                <td> {{ $data->kode_rrapat }}</td>
                                 <td> {{ $data->status }}</td>
                                 <td> {{ $data->nama_ruang }}</td>
                                 <td> {{ $data->tgl_acara }}</td>
                                 <td> {{ $data->jam }}</td>
                                 <td> {{ $data->acara }}</td>
                                 <td> {{ $data->unit }}</td>
                                 <td> {{ $data->tgl_pesan }}</td>
                                 <td> {{ $data->bidang }}</td>
                                 <td> {{ $data->catatan }}</td>
                                                                   <td> 
                            
                                    </tr>
                            @endforeach
                
</tbody>
</table>
<script type="text/javascript">
window.print();
</script>
        </body></html>