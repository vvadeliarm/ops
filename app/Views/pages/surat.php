<!-- <!DOCTYPE html>
<html>
<head>
	<title>Surat Keterangan Mahasiswa</title>
	<style type="text/css">
		table {
			border-style: double;
			border-width: 3px;
			border-color: white;
		}
		table tr .text2 {
			text-align: right;
			font-size: 13px;
		}
		table tr .text {
			text-align: center;
			font-size: 13px;
		}
		table tr td {
			font-size: 13px;
		}

	</style>
</head>
<body>
	<center>
		<table>
			<tr>
			
				<center>
          <br>
          <font size="5"><b><u>SURAT KETERANGAN</u></b></font><br><br>
          <font size="4"><b>Nomor: B-000/02711/KM.01/00/0000 </b></font><br>
					
				</td>
			</tr>
			<tr>
				<td colspan="2"><hr></td>
			</tr>

		</table>

		<br>
		<table width="625">
			<tr>
		       <td>
			       <font size="2">Yang bertandatangan dibawah ini, menyatakan bahwa:</font>
		       </td>
		    </tr>
		</table>
		<br>
    		<table width="625">
			<tr class="text2">
				<td>Nama</td>
				<td width="541">      : Ahmad Subagyo
        </td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td width="525">      : 3SD2</td>
			</tr>
			<tr>
				<td>NIM</td>
				<td width="525">      : 222011777</td>
			</tr>
          <tr>
				<td>Tempat/Tanggal Lahir</td>
				<td width="525">      : Jakarta, 10 April 2002</td>
			</tr>
          <tr>
				<td>Status</td>
				<td width="525">      : Ikatan Dinas</td>
			</tr>
		</table>
		<table width="625">
			<tr>
		       <td>
			       <font size="2">adalah benar-benar mahasiswa Program Studi <b>Komputasi Statistik</b>  Program Diploma <b>D-IV</b>  Politeknik Statistika STIS  Jakarta Semester Ganjil Tahun Akademik <b>2022/2023</b>. Surat keterangan ini dibuat untuk kepentingan (TUJUAN PEMBUATAN SKM). Demikian  surat ini diberikan agar dapat digunakan sebagaimana mestinya.</font>
		       </td>
		    </tr>
		</table>
		<br>
		</table>
		
		<br>
	
		<br>
		<table width="625">
			<tr>
				<td width="390"><br><br><br><br></td>
				<td class="text" align="center">Jakarta, 11 Desember  2022<br><br>
          Politeknik Statistika STIS, 
          <br>
          Kepala Bagian Administrasi Akademik Kemahasiswaan,
          <br><br><br><br><br><br>Nurseto Wisnumurti</td>
			</tr>
      
	     </table>
	</center>
</body>
</html>
 -->
<!-- require_once("dompdf/autoload.inc.iphp"); -->
 <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Laporan</title>
  <link rel="stylesheet" href="">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <style>
    .line-title{
      border: 0;
      border-style: inset;
      border-top: 1px solid #000;
	  border-width: 2px;
    }
	
	
  </style>
</head>
<body>
	<?php
	$path = "images/1.jpg";
	$info = pathinfo($path, PATHINFO_EXTENSION);
	$data = file_get_contents($path);
	$base64 = 'data:image/' . $info . ';base64,' . base64_encode($data);
	?>
	  <img src="https://drive.google.com/file/d/1pqVqsE04evcb0ISRQPOGZ1_X_sFqCRhX/view?usp=sharing" style="position: absolute; width: 60px; height: auto;">
  <table style="width: 100%;">
    <tr>
      <td align="center">
	  <span  style="line-height: 1.6; font-weight: bold;"> <font size = "5">
          POLITEKNIK STATISTIKA STIS </span>
		  <span  style="line-height: 1.6; font-weight: bold;"> <font size = "3"> <br>Jl. Otto Iskandardinata NO.64C, Jakarta 13330
		  <br>Telp. (021) 8508812, 8191437, Fax. 8197577
		  <br>Website: www.stis.ac.id, Email: info@stis.ac.id
        </span>
      </td>
    </tr>
  </table>

  <hr class="line-title">
  <p align="center"> <font size="5"><b><u>SURAT KETERANGAN</u></b></font><br><br>
          <font size="4"><b>Nomor :B-<?= sprintf("%04d", $pengajuanDetail['idpengajuan']); ?>/02711/KM.<?= date('d/m/Y');?>  </b></font><br>
		  
  </p>
  <!-- <p align="center">
    SURAT KETERANGAN <br>
    <b>Angkatan 2018</b>
  </p> -->
  

  <br>
		<table width="625" style="font-family: Calibri, 'Trebuchet MS', sans-serif">
			<tr>
		       <td>
			       <font size="12ch">Yang bertandatangan dibawah ini, menyatakan bahwa:</font>
		       </td>
		    </tr>
		</table>
		<br>
    		<table width="680" style="font-family:Calibri, 'Trebuchet MS', sans-serif" >
			<tr class="text2" style="font-size :12ch" >
				<td>Nama</td>
				<td width="541">      		: <?= $pengajuanDetail['nama']?>
        </td>
			</tr>
			<tr style="font-size :12ch" >
				<td>Kelas</td>
				<td width="525">      		: <?= $pengajuanDetail['kelas']?></td>
			</tr>
			<tr style="font-size :12ch" >
				<td>NIM</td>
				<td width="525">      		: <?= $pengajuanDetail['nim']?></td>
			</tr>
          <tr style="font-size :12ch" >
				<td>Tempat/Tanggal Lahir</td>
				<td width="525">     		: <?= $pengajuanDetail['tempattanggallahir']?></td>
			</tr>
          <tr style="font-size :12ch" >
				<td>Status</td>
				<td width="525">      		: <?= $pengajuanDetail['status']?></td>
			</tr>
			<br>
		</table>
		<table width="100%" >
			<tr>
		       <td>
			       <font size="12ch">adalah benar-benar mahasiswa Program Studi <b><?= $pengajuanDetail['prodi']?></b>  Program Diploma <b><?= $pengajuanDetail['diploma']?></b>  Politeknik Statistika STIS  Jakarta Semester <?= $pengajuanDetail['semester']?> Tahun Akademik <b><?= $pengajuanDetail['tahunakademik']?></b>. Surat keterangan ini dibuat untuk kepentingan <?= $pengajuanDetail['kategori']?>. Demikian  surat ini diberikan agar dapat digunakan sebagaimana mestinya.</font>
		       </td>
		    </tr>
		</table>
		<br>
		</table>
		
		<br>
	
		<br>
		<?php					
			// Konversi tanggal ke bahasa indonesia
		// 	function format_indo($date){
		// 	$BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

		// 	$tahun = substr($date, 0, 4);               
		// 	$bulan = substr($date, 5, 2);
		// 	$tgl   = substr($date, 8, 2);
		// 	$result = $tgl . "-" . $BulanIndo[(int)$bulan-1]. "-". $tahun;
		// 	return($result);
		// }
		// 	while($c=mysqli_fetch_array($res)){
		// 		echo format_indo($c['tanngal']).'<br>';
		// 	}
		?>
		<table width="625">
			<tr>
				<td width="200"><br><br><br><br></td>
				<?php $M = "januari"; ?>
				<td class="text" align="center">Jakarta, <?= date('d M Y'); $pengajuanDetail['tanggalacckbaak']?><br><br>
          Politeknik Statistika STIS, 
          <br>
          Kepala Bagian Administrasi Akademik,
          <br><br><br><br><br><br>Nurseto Wisnumurti</td>
			</tr>
      
	     </table>
	<!-- </center>
	<p>
        <table width="100%">
            <tr>
                <td align="center">Dilaksanakan oleh<br><br><br><br><br><u>Nama Pelaksana</u><br>Tim Pelaksana</td>
                <td align="center">Diperiksa oleh<br><br><br><br><br><u>Nama Pemeriksa</u><br>Tim Pemeriksa</td>
                <td align="center">Diketahui oleh<br><br><br><br><br><u>Nama Diketahui</u><br>Manajer</td>
            </tr>    
        </table>
    </p> -->
</body>
</html>
