<?php
class model_dt extends CI_Model {
 
   
     
    function getData()
        {
            /* $query = $this->db->get('SYS_USERS');
         	
			if ($query->num_rows() > 0)
			{
				return $query->result();
			}else{
			
			}  */
			
			$sql = "SELECT * FROM SUBSCRIBER";
			
			//$query['total'] = $this->db->query($sql)->num_rows();
			//$query['rows'] = $this->db->query($sql)->result_array();
			
			return $sql;

        }
 
}
?>