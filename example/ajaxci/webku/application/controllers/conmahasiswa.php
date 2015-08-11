<?php
class ConMahasiswa extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('modelmahasiswa');
    }
    
    function index(){
        $data['judul'] = 'Data Mahasiswa';
        $data['mahasiswa'] = $this->modelmahasiswa->getDataMahasiswa();
        $this->load->view('viewmahasiswa',$data);
    }
    
    function tambah(){
        if($_POST == NULL) {
            $data['judul'] = 'Input Data Mahasiswa';
            $this->load->view('inputmahasiswa');
        }
        else {
            $nim = $this->input->post('nim');
            $nama = $this->input->post('nama');
            $jurusan = $this->input->post('jurusan');
            $angkatan = $this->input->post('angkatan');
            $ipk = $this->input->post('ipk');            
            
            $data=array(
                'nim' => $nim,
                'nama'    => $nama,
                'jurusan'    => $jurusan,
                'angkatan'    => $angkatan,
                'ipk'    => $ipk            
            );
            
            $this->modelmahasiswa->insertDataMahasiswa($data);
        
        }
    }
}
?>
