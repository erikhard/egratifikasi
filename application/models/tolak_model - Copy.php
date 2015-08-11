<?php

class tolak_model extends CI_Model {
	/**
	 * Constructor
	 */
	public function __construct() {
			parent::__construct();
			
		}
		
	
	var $table = 'GRAT_TOLAK';

	/**
	 * Menghapus sebuah DATA
	 */
	function delete($id_absen)
	{
		$this->db->where('ID_TOLAK', $id_absen);
		$this->db->delete($this->table);
	}
	
	/**
	 * Menambahkan sebuah data ke tabel absen
	 */
	 function add_bisa($datatolak)
	{
		/*  foreach ($datatolak as $key) {
			if ( $key == "WAKTU_TOLAK_TGL" ) 
				{ $key -> "to_date('".$key[]."', 'dd/mm/yyyy HH24:MI:SS')";}
			
		} */
		 
		 
		 $TGL = $datatolak['WAKTU_TOLAK_TGL'];
		 $EMP_NIP = $datatolak['EMP_NIP'];
		 $EMP_NAMA = $datatolak['EMP_NAMA'];
		 $EMP_CABANG = $datatolak['EMP_CABANG'];
		 $EMP_JAB = $datatolak['EMP_JAB'];
		 $EMP_TELP = $datatolak['EMP_TELP'];
		 $EMP_EMAIL = $datatolak['EMP_EMAIL'];
		 $PEM_NAMA = $datatolak['PEM_NAMA'];
		 $PEM_JAB = $datatolak['PEM_JAB'];
		 $PEM_ALAMAT = $datatolak['PEM_ALAMAT'];
		 $PEM_TELP = $datatolak['PEM_TELP'];
		 $PEM_EMAIL = $datatolak['PEM_EMAIL'];
		 $HUB_PELINDO = $datatolak['HUB_PELINDO'];
		 $TMPT_TERIMA = $datatolak['TMPT_TERIMA'];
		 $WAKTU_TOLAK_JAM = $datatolak['WAKTU_TOLAK_JAM'];
		 $WAKTU_TOLAK_HARI = $datatolak['WAKTU_TOLAK_HARI'];
		 $RANGKA_KEG = $datatolak['RANGKA_KEG'];
		 $URAIAN_KEG = $datatolak['URAIAN_KEG'];
		 $JNS_GRAT = $datatolak['JNS_GRAT'];
		 $BENTUK_GRAT = $datatolak['BENTUK_GRAT'];
		 $JML_GRAT = $datatolak['JML_GRAT'];
		 $NILAI_GRAT = $datatolak['NILAI_GRAT'];
		 $IS_AKOM_PELINDO = $datatolak['IS_AKOM_PELINDO'];
		 $KET_AKOM = $datatolak['KET_AKOM'];
		 $TMPT_TERIMA_ALAMAT = $datatolak['TMPT_TERIMA_ALAMAT'];
		 $TMPT_TERIMA_KOTA = $datatolak['TMPT_TERIMA_KOTA'];
		 $PEM_CORP = $datatolak['PEM_CORP'];
		 
		 $this->load->database();
		 $sql = "INSERT INTO GRAT_TOLAK (emp_nama, WAKTU_TOLAK_TGL) values ('EKO HADI', to_date('$TGL', 'dd/mm/yyyy HH24:MI:SS') )";
					//$return = $this->db->query($sql);
		$this->db->query($sql);
		//$this->db->insert($this->table, $datatolak);
	}
	
	function add($datatolak)
	{
		$this->load->database();
		
		/* $aa = array('EMP_NIP'		=> 'asas1',
								'EMP_NAMA'		=> 2) */
								
		 foreach ($datatolak as $key => $value) {
			 $value = "'".$value."'";
			$keys[]=$key;
			//$values[]=$value;
			 if ( $key == "WAKTU_TOLAK_TGL" ) 
				{ $values[]= "to_date(".$value.", 'dd/mm/yyyy HH24:MI:SS')";}
			else
			{ $values[]=$value;	} 
		} 
		 
			$variableins = implode(', ', $keys);
			$valueins = implode(', ', $values); 
			
			//echo "INSERT INTO (".$variableins.") VALUES (".$valueins."); ";

			$sql_add = "INSERT INTO GRAT_TOLAK (".$variableins.") VALUES (".$valueins.")";
			$this->db->query($sql_add); 
		
		//$this->db->insert($this->table, $datatolak);
	}
	
	
	
	/**
	 * Update data absensi
	 */
	function update($id_absen, $absen)
	{
		$this->db->where('ID_TOLAK', $id_absen);
		$this->db->update($this->table, $absen);
	}
	
	/**
	 * Cek apakah ada entry data yang sama pada tanggal tertentu untuk siswa dengan NIS tertentu pula
	 */
	function valid_entry($nis, $tanggal)
	{
		$this->db->where('nis', $nis);
		$this->db->where('tanggal', $tanggal);
		$query = $this->db->get($this->table)->num_rows();
						
		if($query > 0)
		{
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}	
}