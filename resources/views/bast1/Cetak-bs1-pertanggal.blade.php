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
DAFTAR KENDALI SURAT</h4>
<table class="table1">
<thead>
    <tr>
    <th style="width:5%">No</th>
                                <th style="width:12%">Kode </th>
                                <th style="width:12%">Status</th>
                                <th style="width:12%">No Agenda</th>
                                <th style="width:12%">No Surat</th>
                                <th style="width:5%">Tanggal Surat</th>
                                <th style="width:5%">Perihal</th>
                                <th style="width:5%">Kepada</th>
                                <th style="width:5%">Sumber</th>
                                <th style="width:5%">UPT</th>
                                <th style="width:5%">Catatan</th>
                               
    </tr>
</thead>
<tbody>
@foreach ($cetakPertanggal as $data)
                            <tr>
                            <td> {{ $loop->iteration }}</td>
                                <td> {{ $data->kode_bast1 }}</td>
                                 <td> {{ $data->status }}</td>
                                 <td> {{ $data->no_agenda }}</td>
                                 <td> {{ $data->no_surat }}</td>
                                 <td> {{ $data->tgl_surat }}</td>
                                 <td> {{ $data->perihal }}</td>
                                 <td> {{ $data->kepada }}</td>
                                 <td> {{ $data->sumber }}</td>
                                 <td> {{ $data->kode_bidang }}</td>
                                 <td> {{ $data->catatan }}</td>
                            
                                    </tr>
                            @endforeach
                
</tbody>
</table>
<script type="text/javascript">
window.print();
</script>
        </body></html>