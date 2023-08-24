<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuratKeluar-{{ $data->kode_skeluar}}</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery-3.4.1.min.js"></script>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body>
<table border="0" align="center">
    <td><img src="{{asset('assets1')}}/img/jatim.jpg" width="100" height="130"></td>
<td><center>
   <b> <font size="5">PEMERINTAH PROVINSI JAWA TIMUR</font><br>
    <font size="6">DINAS KELAUTAN DAN PERIKANAN</font><br></b>
    <font size="3">Jl. A. Yani 152 B Surabaya Telp : (031)8281672,8288564,8288112,8292326 Fax. 8288148</font><br>
    <font size="3">Website https://dkp.jatimprov.go.id e-mail : diskanla@jatimprov.go.id</font><br>
<b><font size="4">SURABAYA</font>
</table>
</center>
<div style="margin-left: 50%">
        <span style="text-align: center;">
            <p style="margin-top:0pt; margin-bottom:0pt; text-align:left; line-height:50%;">&nbsp;</p>
            <p style="margin-top:0pt; margin-bottom:0pt; text-align:left; line-height:80%;">&nbsp;</p>
            <p style='margin:0cm; text-align:center;font-size:16px;font-family:"Arial",sans-serif;'>
            Surabaya, 
                <?php 
                $now = \Carbon\Carbon::now('Asia/Jakarta');
                echo $now->locale('kode_skeluar')->isoFormat('D MMMM Y');
                ?>
                <hr size="3px" width="80%" align="right">
            </p>
</div>

<div>
<table cellpadding="0" cellspacing="0" style="margin-right:9pt; margin-left:9pt; border-collapse:collapse; float:left;">
        <tbody>
        <tr><td style="width:187.65pt; padding-right:80pt; padding-left:282pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:150%;">Kepada&ensp; &ensp;&ensp;</p>
                </td>
                </tr>

            <tr><td style="width:150.65pt; padding-right:0pt; padding-left:100pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:150%;">Nomor&ensp; &ensp;&ensp;: {{ $data->no_surat}} &ensp; &ensp;&ensp;Yth. Bapak {{ $data->kepada}}</p>
                </td>
                </tr>
                <tr><td style="width:187.65pt; padding-right:2pt; padding-left:100pt; vertical-align:top;">
        <p style="margin-top:0pt; margin-bottom:0pt; line-height:150%;">Sifat&ensp; &ensp; &ensp; &ensp; : Segera &emsp; &emsp; &emsp; &emsp; &emsp; di -</p>
                </td>
                </tr>
                <tr><td style="width:187.65pt; padding-right:2pt; padding-left:100pt; vertical-align:top;">
        <p style="margin-top:0pt; margin-bottom:0pt; line-height:150%;">Lampiran&ensp;&ensp;: - &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; <b>SURABAYA</b></p>
                </td>
                </tr>
                <tr><td style="width:187.65pt; padding-right:2pt; padding-left:100pt; vertical-align:top;">
        <p style="margin-top:0pt; margin-bottom:0pt; line-height:150%;">Perihal&ensp; &ensp; &ensp;: Pengantar Surat Perintah Tugas
Kepala Dinas Kelautan dan <br>&ensp; &ensp; &ensp;&ensp; &ensp; &ensp;&ensp; Perikanan Prov. Jawa Timur </p>
<br>
                </td>
                </tr>

                <tr>
                <td style="padding-left:100.4pt; vertical-align:justify;">
                <p style="margin-top:0pt; margin-bottom:0pt; line-height:150%;"> &emsp; Dalam rangka {{ $data->perihal}}.&ensp; &emsp; &ensp;  &emsp; &emsp; &ensp;</p>
                </td>
                </tr>
                <tr>
                <td style="padding-left:100.4pt; vertical-align:justify;">
                <p style="margin-top:0pt; margin-bottom:0pt; line-height:150%;"> &emsp;Demikian kami sampaikan, mohon perkenan tanda tangan Bapak dan
atas perhatiannya diucapkan terima kasih.
                </td>
                </tr>
                
</table>

<table>


 <table cellpadding="0" cellspacing="0" style="margin-right:9pt; margin-left:9pt; border-collapse:collapse; float:left;">
        <tbody>
        <tr>
                <td style="padding-left:100.4pt; vertical-align:justify;">
                </td>
                </tr>
            <tr>
                <td style="width:187.65pt; padding-right:5.4pt; padding-left:100.4pt; vertical-align:top;">
                </td>
                </tr>
                
                
                
</table>


            
<div style="margin-left: 50%">
        <span style="text-align: center;">
            <p style="margin-top:0pt; margin-bottom:0pt; text-align:left; line-height:150%;">&nbsp;</p>
            <p style="margin-top:0pt; margin-bottom:0pt; text-align:left; line-height:150%;">&nbsp;</p>
            <p style='margin:0cm; text-align:center;font-size:16px;font-family:"Arial",sans-serif;'>

            
            <p style='margin:0cm; padding-right:2pt; padding-left:2pt;  text-align:center;font-size:15px;font-family:"Arial",sans-serif;'>KEPALA DINAS KELAUTAN DAN PERIKANAN</p>
            <p style='margin:0cm; text-align:center;font-size:16px;font-family:"Arial",sans-serif;'>PROVINSI JAWA TIMUR</p>
            <p style='margin:0cm; text-align:center;font-size:16px;font-family:"Arial",sans-serif;'>&nbsp;</p>
            <p style='margin:0cm;text-align:center;font-size:16px;font-family:"Arial",sans-serif;'>&nbsp;</p>
            <p style='margin:0cm;text-align:center;font-size:16px;font-family:"Arial",sans-serif;'>&nbsp;</p>
            <p style='margin:0cm;text-align:center;font-size:16px;font-family:"Arial",sans-serif;'>&nbsp;</p>
            <p style='margin:0cm; text-align:center;font-size:16px;font-family:"Arial",sans-serif;'><strong><u>Dr. Ir. DYAH WAHYU ERMAWATI, MA</u></strong></p>
            <p style="margin: 0cm; text-align: center; font-size: 16px; font-family: Arial, sans-serif;">Pembina Utama Muda</p>
            <p style="margin: 0cm; text-align: center; font-size: 16px; font-family: Arial, sans-serif;">NIP. 19680511 199403 2 009</p>
            <p style="margin-top:0pt; margin-bottom:0pt; text-align:left; line-height:150%;">&nbsp;</p>
        </span>
    </div>
</td>
</tbody>

<script type="text/javascript">
window.print();
</script>
 <script src="js/boostrap.min.js"></script>
        </body></html>