<?php

class jns_grat_model extends CI_Model {
	/**
	 * Constructor
	 */
	public function __construct() {
			parent::__construct();
			
		}
		
	
	var $table = 'GRAT_JENIS';

	/**
	 * Menghapus Data
	 */
	function delete($ID)
	{
		$this->db->where('ID', $ID);
		$this->db->delete($this->table);
	}
	
	
	/**
	 * Menampilkan data
	 */
	 
	function show_data($data)
	{  
		$this->db->select('*');
		$this->db->from('GRAT_JENIS');
		$this->db->where('ID', $data);
		//echo "$query";
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}
	 
	 
	 
	 /**
	 * Menambah Data
	 */
	function add($data)
	{
		$this->load->database();
		foreach ($data as $key => $value) {
			$value = "'".$value."'";
			$keys[]=$key;
			$values[]=$value;
		} 
		 
			$variableins = implode(', ', $keys);
			$valueins = implode(', ', $values); 
			
			$sql_add = "INSERT INTO GRAT_JENIS (".$variableins.") VALUES (".$valueins.")";
			$this->db->query($sql_add); 
		
	}
	
	
	
	/**
	 * Update data
	 */
	function update($ID, $data)
	{
		
		foreach ($data as $key => $value) {
			$value = "'".$value."'";
			$keys[]=$key;
			$vals[] = $key . "=" .$value;
		} 
		
			
			
		 $sql="UPDATE GRAT_JENIS SET ".implode(', ', $vals)." WHERE ID = '$ID'";
        $this->db->query($sql); 
       // $this->db->close();
        //return $status;
		
	}
	
	/**
	 * Cek apakah ada entry data yang sama pada tanggal tertentu untuk siswa dengan NIS tertentu pula
	 */
	/* function valid_entry($nis, $tanggal)
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
	} */	
}