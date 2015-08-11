<?php
	class M_portalslide extends CI_Model
	{
		
		function get_data()
		{
			/*$this->db->select()->from('GRAT_USER');
			$query=$this->db->get();
			return $query->result_array();*/
			$query="SELECT * FROM GRAT_SLIDER";
			$result=$this->db->query($query)->result_array();
			return $result;
		}

		function get_posts_count($user)
		{
			/*$this->db->select('idacc')->from('accecoris');
			$query=$this->db->get();
			return $query->num_rows();*/
			
		}

		function get_postid($id)
		{
			$query="SELECT * FROM GRAT_SLIDE WHERE ID_SLIDE='".$id."'";
			$result=$this->db->query($query)->result_array();
			return $result;
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
			$sqlquery="INSERT INTO GRAT_SLIDER(".$variableins.") VALUES (".$valueins.")";
			$this->db->query($sqlquery); 
			
		}

		function update_data($user,$data)
		{
			foreach ($data as $key => $value) {
				$value = "'".$value."'";
				$keys[]=$key;			
				$vals[] = $key . "=" .$value;
			} 
			
			$sql="UPDATE GRAT_USER SET ".implode(', ', $vals)." WHERE USERNAME = '$user'";
        	$this->db->query($sql); 
		}

		function delete_accecoris($idacc,$data)
		{
			$this->db->where('idacc',$idacc);
			$this->db->delete('accecoris');
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