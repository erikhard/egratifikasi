<?php

function format_rupiah($angka){

  $rupiah=number_format($angka,0,',','.');
  $uang = "Rp. $rupiah";

  return $uang;

}

?> 

