<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuratKeluar-{{ $data->kode_skeluar}}</title>
</head>
<body>
<table border="0" align="center">
    <td><img src="{{asset('assets1')}}/img/jatim.jpg" width="100" height="130"></td>
<td><center>
   <b> <font size="5">PEMERINTAH PROVINSI JAWA TIMUR</font><br>
    <font size="6">DINAS KELAUTAN DAN PERIKANAN</font><br></b>
    <font size="3">Jl. A. Yani 152 B Surabaya Telp : (031)8281672,8288564,8288112,8292326 Fax. 8288148</font><br>
    <font size="3">Website https://dkp.jatimprov.go.id e-mail : diskanla@jatimprov.go.id</font><br>
<b><font size="4">SURABAYA</font><br></b>
<br>
</table>
</center>
<table>
<center><b><font size="3">SURAT TUGAS</font><br></b>
<b><font size="3">NOMOR : {{ $data->no_surat}}VII/2022</font><br></b>
<br><font size="3">Dasar : </font>
</center>
<font size="3"> <ol><li>Peraturan Daerah Provinsi Jawa Timur Nomor : 5 Tahun 2021
tanggal 31 Desember 2021 tentang Anggaran Pendapatan dan
Belanja Daerah Provinsi Jawa Timur Tahun Anggaran 2022;</li><br>
<li>Peraturan Gubernur Jawa Timur Nomor : 27 Tahun 2022 Tanggal
25 Mei 2022 Tentang Perubahan Kedua Atas Peraturan Gubernur
Jawa Timur Nomor 116 Tahun 2021 tentang Penjabaran APBD
Provinsi Jawa Timur Tahun Anggaran 2022;</li><br>
<li>Dokumen Perubahan Pelaksanaan Anggaran ( DPPA ) APBD
Tahun Anggaran 2022 Dinas Kelautan dan Perikanan Provinsi Jawa
Timur Nomor DPPA/A.2/3.25.0.00.0.00.01.0000/001/2022 tanggal
27 Mei 2022;
</li>
<li>Undangan {{ $data->perihal}}</li>
</ol>
 </font>
 
 <center><b><font size="3">MEMERINTAHKAN</font><br></b></center>

 <table cellpadding="0" cellspacing="0" style="margin-right:9pt; margin-left:9pt; border-collapse:collapse; float:left;">
        <tbody>
            <tr>
                <td style="width:187.65pt; padding-right:5.4pt; padding-left:100.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:150%;">Kepada : Nama&ensp; &emsp; &ensp;  &emsp; &emsp; &ensp;:</p>
                </td>
                </tr>
                <tr><td style="width:187.65pt; padding-right:2pt; padding-left:132.2pt; vertical-align:top;">
        <p style="margin-top:0pt; margin-bottom:0pt; line-height:150%;">&emsp; NIP&ensp; &ensp;  &emsp; &emsp; &emsp; &ensp;&ensp; :</p>
                </td>
                </tr>
                <tr><td style="width:187.65pt; padding-right:2pt; padding-left:132.2pt; vertical-align:top;">
        <p style="margin-top:0pt; margin-bottom:0pt; line-height:150%;">&emsp; Pangkat/Gol&ensp;&emsp; &ensp;&ensp; :</p>
                </td>
                </tr>
                <tr><td style="width:187.65pt; padding-right:2pt; padding-left:132.2pt; vertical-align:top;">
        <p style="margin-top:0pt; margin-bottom:0pt; line-height:150%;">&emsp; Jabatan&ensp; &ensp;  &emsp; &emsp; &ensp;&ensp;:</p>
                </td>
                </tr>
                <tr>
                <td style="padding-left:100.4pt; vertical-align:justify;">
                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:150%;">Untuk : {{ $data->perihal}}&ensp; &emsp; &ensp;  &emsp; &emsp; &ensp;</p>
                </td>
                </tr>
                
</table>

<div style="margin-left: 50%">
        <span style="text-align: center;">
            <p style="margin-top:0pt; margin-bottom:0pt; text-align:left; line-height:150%;">&nbsp;</p>
            <p style="margin-top:0pt; margin-bottom:0pt; text-align:left; line-height:150%;">&nbsp;</p>
            <p style='margin:0cm; text-align:center;font-size:16px;font-family:"Arial",sans-serif;'>
            Ditetapkan Di : Surabaya, <br>
            Pada Tanggal &nbsp; : 
                <?php 
                $now = \Carbon\Carbon::now('Asia/Jakarta');
                echo $now->locale('id')->isoFormat('D MMMM Y');
                ?>
                <hr size="3px" width="80%" align="right">
            </p>
            
            <p style='margin:0cm; padding-right:2pt; padding-left:2pt;  text-align:center;font-size:15px;font-family:"Arial",sans-serif;'>a.n KEPALA DINAS KELAUTAN DAN PERIKANAN</p>
            <p style='margin:0cm; text-align:center;font-size:16px;font-family:"Arial",sans-serif;'>PROVINSI JAWA TIMUR</p>
            <p style='margin:0cm; text-align:center;font-size:16px;font-family:"Arial",sans-serif;'>Kepala Bidang Perikanan Budidaya</p>
            <p style='margin:0cm; text-align:center;font-size:16px;font-family:"Arial",sans-serif;'>&nbsp;</p>
            <p style='margin:0cm;text-align:center;font-size:16px;font-family:"Arial",sans-serif;'>&nbsp;</p>
            <p style='margin:0cm;text-align:center;font-size:16px;font-family:"Arial",sans-serif;'>&nbsp;</p>
            <p style='margin:0cm;text-align:center;font-size:16px;font-family:"Arial",sans-serif;'>&nbsp;</p>
            <p style='margin:0cm; text-align:center;font-size:16px;font-family:"Arial",sans-serif;'><strong><u>HARI PRANOTO, S.Pi, MM</u></strong></p>
            <p style="margin: 0cm; text-align: center; font-size: 16px; font-family: Arial, sans-serif;">Pembina</p>
            <p style="margin: 0cm; text-align: center; font-size: 16px; font-family: Arial, sans-serif;">NIP. 19671221 198903 1 005</p>
            <p style="margin-top:0pt; margin-bottom:0pt; text-align:left; line-height:150%;">&nbsp;</p>
        </span>
    </div>
</td>
</tbody>


<script type="text/javascript">
window.print();
</script>
        </body></html>