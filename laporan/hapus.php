<?php
include "../config/koneksi.php";

$kode=$_POST['kode'];
$sql = "DELETE GRAT_TAMP_BERKAS WHERE NM_BERKAS = '$kode'";
$STMT = oci_parse($conn, $sql) or die("Query gagal");
oci_execute($STMT);
?>
