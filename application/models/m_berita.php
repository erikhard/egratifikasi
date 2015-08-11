<?php
	class M_berita extends CI_Model
	{
		
		function get_data()
		{
			/*$this->db->select()->from('GRAT_USER');
			$query=$this->db->get();
			return $query->result_array();*/
			$query="SELECT * FROM GRAT_BERITA where IS_DELETED='true'";
			$result=$this->db->query($query)->result_array();
			return $result;
		}

		function get_posts_count($user)
		{
			/*$this->db->select('idacc')->from('accecoris');
			$query=$this->db->get();
			return $query->num_rows();*/
			
		}

		function get_dataid($id)
		{
			// $query="SELECT * FROM GRAT_BERITA WHERE ID_BERITA='".$id."'";
			// $result=$this->db->query($query)->result_array();
			// return $result;
			$this->db->select()->from('GRAT_BERITA')->where(array('ID_BERITA'=>$id,'IS_DELETED'=>'true'));
			$query=$this->db->get();
			return $query->first_row('array');
		}

		function tambah_data($data){
			//$this->db->insert('GRAT_USER',$data);
			//return $this->db->insert_id();

			foreach ($data as $key => $value) {
				$value = "'".$value."'";
				$keys[]=$key;
				 if ( $key == "TGL" ) 
					{ $values[]= "to_date(".$value.", 'dd/mm/yyyy HH24:MI:SS')";}
					else { $values[]=$value;	} 
				
			}
			$variableins = implode(',', $keys);
			$valueins = implode(',', $values); 
			$sqlquery="INSERT INTO GRAT_BERITA(".$variableins.") VALUES (".$valueins.")";
			$this->db->query($sqlquery); 
			
		}

		function update_data($id,$data)
		{
			foreach ($data as $key => $value) {
				$value = "'".$value."'";
				$keys[]=$key;			
				$vals[] = $key . "=" .$value;
			} 
			
			$sql="UPDATE GRAT_BERITA SET ".implode(', ', $vals)." WHERE ID_BERITA = '$id'";
        	$this->db->query($sql); 
		}

		function delete_data($id,$data)
		{
			foreach ($data as $key => $value) {
				$value = "'".$value."'";
				$keys[]=$key;			
				$vals[] = $key . "=" .$value;
			} 
			
			$sql="UPDATE GRAT_BERITA SET ".implode(', ', $vals)." WHERE ID_BERITA = '$id'";
        	$this->db->query($sql); 
		}

		function nootomatis(){
        $today=date('Ymd');
        $query=mysql_query("select max(id_detail) as last from detail_barang where id_detail like '$today%'");
        $data=mysql_fetch_array($query);
        $lastNoFaktur=$data['last'];
        
        $lastNoUrut=substr($lastNoFaktur,8,3);
        
        $nextNoUrut=$lastNoUrut+1;
        
        $nextNoTransaksi=$today.sprintf('%03s',$nextNoUrut);
        
        return $nextNoTransaksi;
    }
	}
?>