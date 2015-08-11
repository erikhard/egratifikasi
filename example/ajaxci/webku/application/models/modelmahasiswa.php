<?php 
class ModelMahasiswa extends CI_Model{
    
    function getDataMahasiswa(){
        return $this->db->get('mahasiswa')->result();
    }
    
    function insertDataMahasiswa($data){
        $this->db->insert('mahasiswa',$data);    
    }
}
?>