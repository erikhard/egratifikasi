
<?php
/* include "../../config/koneksi.php";
include "../../config/fungsi_indotgl.php";

include "css_bootstrap.php"; */


$bulan = $_POST['bulan'];
$tahun = $_POST['tahun'];

/* $namabulan = getBulan($bulan);

$kal = "CAL_GREGORIAN"; 
$jumlah_hari = cal_days_in_month(CAL_GREGORIAN, 12, 2014); */

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
						<img src='../../logo_pp3.png' />
					</td>
					
				</tr>
				<tr>
					<td> <b> PT. PELABUHAN INDONESIA III (Persero) </b> </td>
				</tr>
				<tr>
					<td> <b> Cabang Banjarmasin </b> </td>
				</tr>
				<tr>
					<td> Tanggal Cetak : $tanggal</td>
				</tr>
			</table>
		</td>
		<td width='60%' align='left'>
			<b> LAPORAN BERITA ACARA	</b>
			<br>
			Bulan <b> $namabulan </b>
			
			Tahun <b> $tahun </b>
		</td>
	</tr>
</table>
<br>
<table width='60%'>
	<tr>
		<td width='20%'> Nama Laporan </td>
		<td> : </td>
		<td> Laporan Pemeriksaan Alat Per Bulan </td>
	</tr>
	<tr>
		<td> Bulan / Tahun </td>
		<td> : </td>
		<td> $namabulan / $tahun</td>
	</tr>
	
</table>
<br> 

<div class='box'>
	
	<div class='box-body no-padding'>
		<table class='table table-hover'>
		
			<tr style='background-color:#808080; color:#fff' align='center'>
				<th>No.</th>
				<th>Kode Periksa</th>
				<th>Pihak 2</th>
				<th>Alat</th>
				<th>Status</th>
				<th>Shift</th>
				<th>Waktu Periksa</th>
				
			</tr>
			
		";

/* 		
$sql_lap="SELECT * FROM VW_PERIKSA
WHERE TO_CHAR(TO_DATE(TGL_INPUT,'DD-MM-YYYY HH24:MI:SS'),'MM')  = '$bulan'
AND
TO_CHAR(TO_DATE(TGL_INPUT,'DD-MM-YYYY HH24:MI:SS'),'YYYY')  = '$tahun'
ORDER BY TGL_INPUT ASC
";
$stmt_lap= oci_parse($conn, $sql_lap) or die("Query gagal");
oci_execute($stmt_lap,OCI_DEFAULT);
$no = 1;
while ( $rs_lap = oci_fetch_array($stmt_lap,OCI_BOTH) )
{
	$avab  = ( ($jumlah_hari - $rs_lap['SLS_D_JAM']) / $jumlah_hari ) * 100;
	$HASIL = ROUND($avab,2);
		echo "
		
			<tr>
				<td>
					$no
				</td>
				<td>
					$rs_lap[KODE_PERIKSA]
				</td>
				<td>
					$rs_lap[NAMA_PERUSAHAAN]
				</td>
				<td>
					$rs_lap[UNIT]
				</td>
				<td>
					$rs_lap[NAMA_STATUS_ALAT]
				</td>
				<td>
					$rs_lap[SHIFT]
				</td>
				<td>
					$rs_lap[TGL_INPUT]
				</td>
				
				
			</tr>
		";

$no++;
}
 */
echo "
			<tr style='background-color:#808080'>
				<th colspan='7'></th>
				
			</tr>
		</table>	
	</div>
</div>
</div>
</div>
</section>
";

?>
