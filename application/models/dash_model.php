<?php

class dash_model extends CI_Model {
	
	public function __construct() {
			parent::__construct();
			
		}
	
	
	function datatolak()
	{  
		$this->db->select('*');
		$this->db->from('GRAT_TOLAK');
		$result = $this->db->count_all_results();
		return $result;
	}
	 
	 
	function dataterima()
	{  
		$this->db->select('*');
		$this->db->from('GRAT_TERIMA');
		$result = $this->db->count_all_results();
		return $result;
	}
	
	function datawarning()
	{  
			$sql = "SELECT * FROM VW_NOTIFIKASI";
			$this->load->database();
			$row = $this->db->query($sql)->num_rows();
			return $row;
			
				//$result = $this->db->query($sql)->result_array();
		//$this->db->close();
			/* return array(
						'records' => $result,
						'count' => $row
					); */
			
	}
	
	function datawarningall()
	{  
			$sql = "SELECT * FROM VW_NOTIFIKASI";
			$this->load->database();
			$result = $this->db->query($sql)->result_array();
			return $result;
			//$this->db->close();
			
			
	}
	 
	 
	
}