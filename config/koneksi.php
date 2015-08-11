<?php
// $db = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = localhost)(PORT = 1521)))(CONNECT_DATA=(SID=dblocal)))" ;
// $conn = OCIlogon("GRATIFIKASI","1qaz2wsx",$db) ;
$db = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = localhost)(PORT = 1522)))(CONNECT_DATA=(SID=orcl)))" ;
$conn = OCIlogon("localuser","qwerty",$db) ;

date_default_timezone_set('Asia/Jakarta');
$tanggal = date('d-m-Y');
$jam=date("H:i:s");
?>