<?php
$a = array(1, 2, 3, 17);

foreach ($a as $v) {
    echo "Current value of \$a: $v.\n";
	echo "<br>";
}

$a = array(
    "data1" => 1,
    "data2" => 2,
    "data3" => 3,
    "data4" => "to_date('12-12-2015', 'dd/mm/yyyy HH24:MI:SS')",
    "data5" => 17
);
//'WAKTU_TOLAK_TGL'	=> to_date(($this->input->post('waktu_terima_tgl')), 'dd/mm/yyyy HH24:MI:SS'), 

/* foreach ($a as $key => $value) {
	$keys[]=$key;
	$values[]=$value;
    echo "$value";
	echo "<br>";
	echo "$key";
	echo "<br>";
	$s++;

			
}
$ddt = implode(', ', $keys);
$ddv = implode(', ', $values);
echo $ddt;
echo "<br>";
echo $ddv;
echo "<br>"; */

 $datatolak = array('EMP_NIP'		=> 'asas1',
								'EMP_NAMA'		=> 2,
								'EMP_CABANG'	=> 3,
								'EMP_JAB'		=> 4,
								'EMP_TELP'		=> 5,
								'EMP_EMAIL'		=> 6,
								'PEM_NAMA'		=> 7,
								'PEM_JAB'		=> 8,
								'PEM_ALAMAT'	=> 9,
								'PEM_TELP'		=> 10,
								'PEM_EMAIL'		=> 1,
								'HUB_PELINDO'	=> 1,
								'TMPT_TERIMA'	=> 1,
								//'tanggal'		=> date('Y-m-d', strtotime($this->input->post('tanggal'))),
								//'WAKTU_TOLAK_TGL'	=> "to_date(($this->input->post('waktu_terima_tgl')), 'dd/mm/yyyy HH24:MI:SS')", 
								//'WAKTU_TOLAK_TGL'	=> "to_date('12/12/2015', 'dd/mm/yyyy HH24:MI:SS')", 
								'WAKTU_TOLAK_TGL'	=> "12/12/2015", 
								//'WAKTU_TOLAK_TGL'	=> $this->input->post('".to_date('$waktu_terima_tgl', 'dd/mm/yyyy HH24:MI:SS')."'),
								'WAKTU_TOLAK_JAM'	=> 1,
								'WAKTU_TOLAK_HARI'	=> 1,
								'RANGKA_KEG'	=> 1,
								'URAIAN_KEG'	=> 1,
								'JNS_GRAT'		=> 1,
								'BENTUK_GRAT'	=> 1,
								'JML_GRAT'		=> 1,
								'NILAI_GRAT'	=> 1,
								'IS_AKOM_PELINDO'	=> 1,
								'KET_AKOM'		=> 1,
								'TMPT_TERIMA_ALAMAT'	=> 1,
								'TMPT_TERIMA_KOTA'		=> 1,
								'PEM_CORP'		=> 1
							);  
foreach ($datatolak as $key => $value) {
	
	$keys[]=$key;
	if ( $key == "WAKTU_TOLAK_TGL" ) 
	{
		$values[]= "to_date('".$value."', 'dd/mm/yyyy HH24:MI:SS')";
		
	}
	else
	{
		$values[]=$value;
		
	}
	
	
	
	
   /*  echo "$value";
	echo "<br>";
	echo "$key";
	echo "<br>";
	$s++; */
	/* $keys[]=$key;
            $values[]=(in_array($key, $this->arr_noquote)) ? $value : "'$value'";
	 */		//echo $values;
			
}
$ddt = implode(', ', $keys);
$ddv = implode(', ', $values);
echo $ddt;
echo "<br>";
echo $ddv;
echo "<br>";
echo "INSERT INTO (".$ddt.") VALUES (".$ddv."); ";

?>