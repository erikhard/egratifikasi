<?php

class terima_model extends CI_Model {
	/**
	 * Constructor
	 */
	public function __construct() {
			parent::__construct();
			
		}
		
	
	var $table = 'GRAT_TERIMA';

	/**
	 * Menghapus Data
	 */
	function delete($ID_GRAT)
	{
		$this->db->where('ID_GRAT', $ID_GRAT);
		$this->db->delete($this->table);
	}
	
	
	/**
	 * Menampilkan data
	 */
	function tampil()
	{ 
			$sql = "SELECT A.*, TO_CHAR (A.WAKTU_TERIMA_TGL, 'dd/mm/yyyy HH12:MI:SS') WAKTU_TERIMA_TGL_1,
                        TO_CHAR (A.TGL_INPUT, 'dd/mm/yyyy HH12:MI:SS') TGL_INPUT_1,
                        TO_CHAR (A.TGL_APPROVAL, 'dd/mm/yyyy HH12:MI:SS') TGL_APPROVAL_1,
                        TO_CHAR (A.UPDATE_DATE, 'dd/mm/yyyy HH12:MI:SS') UPDATE_DATE_1                        
                        FROM GRAT_TERIMA A ORDER BY A.ID_GRAT DESC";
			$this->load->database();
			$result = $this->db->query($sql)->result_array();
			return $result;
			
	}
	
	/*  function show_data($data)
	{  
		$this->db->select('*');
		$this->db->from('GRAT_TERIMA');
		$this->db->where('ID_GRAT', $data);
		//echo "$query";
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}  */
	 
	 
	 
	
	function add($datatolak)
	{
		$this->load->database();
		foreach ($datatolak as $key => $value) {
			$value = "'".$value."'";
			$keys[]=$key;
		
			 if ( $key == "WAKTU_TERIMA_TGL" ) 
				{ $values[]= "to_date(".$value.", 'mm/dd/yyyy HH24:MI:SS')";}
			else { $values[]=$value;	} 
		} 
		 
			$variableins = implode(', ', $keys);
			$valueins = implode(', ', $values); 
			
			$sql_add = "INSERT INTO GRAT_TERIMA (".$variableins.", TGL_INPUT,UPDATE_DATE  ) 
						VALUES (".$valueins.", to_date(SYSDATE, 'dd/mm/yyyy HH24:MI:SS'), to_date(SYSDATE, 'dd/mm/yyyy HH24:MI:SS') )";
		
			$this->db->query($sql_add); 
		
	}
	
	function app($id_grat, $datatolak)
	{
		foreach ($datatolak as $key => $value) {
			$value = "'".$value."'";
			$keys[]=$key;
			$vals[] = $key . "=" .$value;
		}
		 $sql="UPDATE GRAT_TERIMA SET ".implode(', ', $vals).", TGL_APPROVAL = to_date(SYSDATE, 'dd/mm/yyyy HH24:MI:SS')
				WHERE ID_GRAT = '$id_grat'";
	
        $this->db->query($sql); 
	}
	
	
	function update($id_grat, $datatolak)
	{
		
		foreach ($datatolak as $key => $value) {
			$value = "'".$value."'";
			$keys[]=$key;
			 if ( $key == "WAKTU_TOLAK_TGL" ) 
				{ $value =  "to_date(".$value.", 'dd/mm/yyyy HH24:MI:SS')";}
			
			
			$vals[] = $key . "=" .$value;
		} 
		
		$sql="UPDATE GRAT_TERIMA SET ".implode(', ', $vals).", UPDATE_DATE = to_date(SYSDATE, 'dd/mm/yyyy HH24:MI:SS')
				WHERE ID_GRAT = '$id_grat'";
        $this->db->query($sql); 
      
	}
	
	
}