<?php

function cari_tgl_pengangkatan($nid) {

	$sql= "SELECT  HIRE_DATE
			FROM ".$USERPAYROLL.".EMP_DETAIL 
			WHERE NID = '$nid'
			";
	$stmt= oci_parse($conn, $sql) or die("Query gagal");
	oci_execute($stmt);
	$row = oci_fetch_assoc($stmt);
	$tgl = $row['HIRE_DATE'];	

return $tgl;

}

function tambah_satutahun($tgl) {

	if ( empty($tgl) )
	{
		 return $tgl;
	}
	
	$pecah1 = explode("-", $tgl);
	$date1 = $pecah1[0];
	$month1 = $pecah1[1];
	$year1 = $pecah1[2];
	
	$year1 = $year1 + 1;
	//$year1 = date('Y');
	$tgl = "$date1-$month1-$year1";

return $tgl;

}

function berhak_cuti($tgl) {

	if ( empty($tgl) )
	{
		 return $tgl;
	}
	
	$pecah1 = explode("-", $tgl);
	$date1 = $pecah1[0];
	$month1 = $pecah1[1];
	$year1 = $pecah1[2];
	
	$year1 = $year1 + 1;
	$tgl = "$date1-$month1-$year1";
	
	$tglsekarang = date("d-m-Y");
	
	$dapat = "TIDAK";
	if ( $tgl >= $tglsekarang )
	{
	$dapat = "YA";
	}

return $dapat;

}

?>