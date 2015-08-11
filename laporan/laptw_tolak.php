<?php
include "../config/koneksi.php";
include "../config/fungsi_indotgl.php";
//include "css_bootstrap.php"; 


$triwulan = $_POST['triwulan'];
$tahun = $_POST['tahun'];

if ( $triwulan == '1') {
	$periodawal = '01'.$tahun;
	$periodakhir = '03'.$tahun;
	
} else if ( $triwulan == '2') {
	$periodawal = '04'.$tahun;
	$periodakhir = '06'.$tahun;
	
} else if ( $triwulan == '3') {
	$periodawal = '07'.$tahun;
	$periodakhir = '09'.$tahun;
	
} else if ( $triwulan == '4') {
	$periodawal = '10'.$tahun;
	$periodakhir = '12'.$tahun;
	
}

echo "
<section class='content'>
<div class='row'>
<div class='col-md-12'>
<table border='0' width='100%'>
	<tr>
		<td width='40%'>
		
			<table>
				<tr>
					<td rowspan='4'>
						<img src='../img/logo_pp3.png' />
					</td>
					
				</tr>
				<tr>
					<td> <b> PT. PELABUHAN INDONESIA III (Persero) </b> </td>
				</tr>
				
				<tr>
					<td> Tanggal Cetak : $tanggal</td>
				</tr>
			</table>
		</td>
		<td width='60%' align='left'>
			<b> LAPORAN REKAPITULASI PENOLAKAN GRATIFIKASI</b>
			<br>
			TRIWULAN <b> $triwulan </b>
			
			TAHUN <b> $tahun </b>
		</td>
	</tr>
</table>
<br>
<table width='100%'>
	<tr>
		<td width='20%'> Nama Laporan </td>
		<td> : </td>
		<td> Laporan Penolakan Gratifikasi</td>
	</tr>
	<tr>
		<td> Triwulan / Tahun </td>
		<td> : </td>
		<td> $triwulan / $tahun</td>
	</tr>
	
</table>
<br> 
";
$SQL="SELECT A.*, TO_CHAR (A.WAKTU_TOLAK_TGL, 'dd/mm/yyyy') WAKTU_TOLAK_TGL_1,
                        TO_CHAR (A.TGL_INPUT, 'dd/mm/yyyy') TGL_INPUT_1
		FROM GRAT_TOLAK A
		WHERE TO_CHAR(A.WAKTU_TOLAK_TGL,'MMYYYY') BETWEEN '$periodawal' and '$periodakhir'
		ORDER BY WAKTU_TOLAK_TGL ASC";								
$STMT = oci_parse($conn, $SQL) or die("Query gagal");
oci_execute($STMT);
$NO = 1;
echo "
<div class='box'>
	
	<div class='box-body no-padding'>
		<table class='table table-hover' width='100%'>
		
			<tr style='background-color:#808080; color:#fff' align='center'>
				<th rowspan='2'>No.</th>
				<th  colspan='2'> Pelapor</th>
				<th  colspan='2'>Pemberi</th>
				<th  rowspan='2'>Tgl. Penerimaan</th>
				<th  rowspan='2'>Tgl. Pelaporan</th>
				<th  rowspan='2'>Jenis Penerimaan</th>
				<th  rowspan='2'>Nilai Eq Rp</th>
				
			</tr>
			<tr style='background-color:#808080; color:#fff' align='center'>
					<th>Nama</th>
					<th>Jabatan</th>
					<th>Nama</th>
					<th>Jabatan / Hubungan</th>
					
			</tr>
			";
			while($rs = oci_fetch_assoc($STMT))
			{
				echo "
				<tr>
					<td> $NO </td>
					<td> $rs[EMP_NAMA] </td>
					<td> $rs[EMP_JAB] </td>
					<td> $rs[PEM_NAMA] </td>
					<td> $rs[PEM_JAB] </td>
					<td> $rs[WAKTU_TOLAK_TGL_1] </td>
					<td> $rs[TGL_INPUT_1] </td>
					<td> $rs[JNS_GRAT] </td>
					<td> $rs[NILAI_GRAT] </td>
					
				</tr>
				
				";
			$NO++;
			}
echo "
			<tr style='background-color:#808080'>
				<th colspan='10'></th>
				
			</tr>
		</table>	
	</div>
</div>
</div>
</div>
</section>
";

?>
