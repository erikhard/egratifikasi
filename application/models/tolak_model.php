<?php

class tolak_model extends CI_Model {
	
	public function __construct() {
			parent::__construct();
			
		}
		
	
	var $table = 'GRAT_TOLAK';

	function delete($ID_TOLAK)
	{
		$this->db->where('ID_TOLAK', $ID_TOLAK);
		$this->db->delete($this->table);
	}
	
	
	function tampil()
	{ 
			$sql = "SELECT A.*, TO_CHAR (A.WAKTU_TOLAK_TGL, 'dd/mm/yyyy HH12:MI:SS') WAKTU_TOLAK_TGL_1,
                        TO_CHAR (A.TGL_INPUT, 'dd/mm/yyyy HH12:MI:SS') TGL_INPUT_1,
                        TO_CHAR (A.TGL_APPROVAL, 'dd/mm/yyyy HH12:MI:SS') TGL_APPROVAL_1,
                        TO_CHAR (A.UPDATE_DATE, 'dd/mm/yyyy HH12:MI:SS') UPDATE_DATE_1                        
                        FROM GRAT_TOLAK A ORDER BY A.ID_TOLAK DESC";
			$this->load->database();
			$result = $this->db->query($sql)->result_array();
			return $result;
	}
	
	 function show_data($data)
	{  
		$this->db->select('*');
		$this->db->from('GRAT_TOLAK');
		$this->db->where('ID_TOLAK', $data);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	} 
	 
	 
	function add_tabel($datatolak)
	{
		$sql_add = "INSERT INTO GRAT_TAMP_BERKAS (NM_BERKAS) VALUES ('$datatolak')";
		$this->db->query($sql_add); 
	}
	
	function hapus_tabel($datatolak)
	{
		$sql_add = "DELETE GRAT_TAMP_BERKAS WHERE NM_BERKAS = '$datatolak'";
		$this->db->query($sql_add); 
	}
	
	function viewtabel()
	{ 
			$this->load->database();
			$sql = "SELECT * FROM GRAT_TAMP_BERKAS";
			$result = $this->db->query($sql)->result_array();
			return $result;
	}
	
	function add($datatolak)
	{
		$this->load->database();
		foreach ($datatolak as $key => $value) {
			$value = "'".$value."'";
			$keys[]=$key;
		
			 if ( $key == "WAKTU_TOLAK_TGL" ) 
				{ $values[]= "to_date(".$value.", 'mm/dd/yyyy HH24:MI:SS')";}
			else { $values[]=$value;	} 
		} 
		 
			$variableins = implode(', ', $keys);
			$valueins = implode(', ', $values); 
			
			$sql_add = "INSERT INTO GRAT_TOLAK (".$variableins.", TGL_INPUT,UPDATE_DATE  ) 
						VALUES (".$valueins.", to_date(SYSDATE, 'dd/mm/yyyy HH24:MI:SS'), to_date(SYSDATE, 'dd/mm/yyyy HH24:MI:SS') )";
			$this->db->query($sql_add); 
		
	}
	
	function app($id_tolak, $datatolak)
	{
		foreach ($datatolak as $key => $value) {
			$value = "'".$value."'";
			$keys[]=$key;
			$vals[] = $key . "=" .$value;
		}
		 $sql="UPDATE GRAT_TOLAK SET ".implode(', ', $vals).", TGL_APPROVAL = to_date(SYSDATE, 'dd/mm/yyyy HH24:MI:SS')
				WHERE ID_TOLAK = '$id_tolak'";
		 
	
        $this->db->query($sql); 
       // $this->db->close();
        //return $status;
		
	}
	
	
	function update($id_tolak, $datatolak)
	{
		
		foreach ($datatolak as $key => $value) {
			$value = "'".$value."'";
			$keys[]=$key;
			 if ( $key == "WAKTU_TOLAK_TGL" ) 
				{ $value =  "to_date(".$value.", 'dd/mm/yyyy HH24:MI:SS')";}
			
			
			$vals[] = $key . "=" .$value;
		} 
		
		$sql="UPDATE GRAT_TOLAK SET ".implode(', ', $vals).", UPDATE_DATE = to_date(SYSDATE, 'dd/mm/yyyy HH24:MI:SS')
				WHERE ID_TOLAK = '$id_tolak'";
        $this->db->query($sql); 
      
	}
	
		
}