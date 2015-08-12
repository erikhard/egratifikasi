<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class C_slide extends CI_Controller {

	function __construct()
		{
			$gallery_path;
			$gallery_path_url;

			parent::__construct();
 			$this->load->model('m_slide');
 			
 			/*if(!$this->session->userdata('username'))
        	{
            	redirect('login');
        	}*/
        	$this->load->helper(array('url','html','form'));
 		}
 

	public function index(){
		 $data['admsli']=$this->m_slide->get_data();
		 $this->load->view('admin/list_slide',$data);
		//$this->load->view('tampilhome');
	}

	public function tampil_berita($id_berita){
		 $data['detber']=$this->m_berita->get_dataid($id_berita);
		 $this->load->view('portal',$data);
		//$this->load->view('tampilhome');
	}


	public function insert_slide(){
		if($_POST){
			// $data=array(
			// 	'ID_SLIDE'=>$this->input->post('id_slide'), 
			// 	'NAMA'=>$this->input->post('nama'), 
			// 	'LINK'=>$this->input->post('upload'),
			// 	'KET'=>$this->input->post('ket'),
			// 	'TGL'=>$this->input->post('tgl')
			// );
			// $this->m_portalslide->tambah_data($data);
			// redirect(base_url().'index.php/c_portalslide');

			$nama_gambar = $_FILES['pic']['name'];
			$jenis_gambar = $_FILES['pic']['type'];
			$ukuran_gambar = $_FILES['pic']['size'];
			if(empty($nama_gambar)) {
				$data['result'] = "<div class='failed'>Pilih gambar</div>";
			 } elseif($jenis_gambar != "image/jpg" && $jenis_gambar != "image/gif" && $jenis_gambar != "image/jpeg" && $jenis_gambar  != "image/png" && $jenis_gambar  != "image/pjpeg" && $jenis_gambar  != "image/bmp") {
			 	$data['result'] = "<div class='failed'>File harus berupa gambar</div>";
			 } elseif($ukuran_gambar>100000000) {
			 	$data['result'] = "<div class='failed'>Ukuran gambar tidak boleh melebihi 1 MB</div>";
			 } else {
				
			 		$tmp_gambar = $_FILES["pic"]["tmp_name"];
			 	$nama_gambar = "BRT".date("YmdHis").".png";
			 	move_uploaded_file($tmp_gambar, "assets_bs/images/slider/$nama_gambar");
			 	$tgl=date("d/m/Y");
			 	$data=array(
			 		'ID_SLIDE'=>$this->input->post('id_slide'),
			 		'NAMA'=>$this->input->post('nama'),
			 		'GAMBAR'=>$nama_gambar,
			 		'KET'=>$this->input->post('ket'),
			 		'TGL'=>$this->input->post('tgl'),
			 		'IS_DELETED'=>'true'
			 		
			 	);
			 	$result = $this->m_slide->tambah_data($data);
				// if($result) {
				// 	$data['result']="<div class='success' style='width:300px'>Produk berhasil ditambahkan</div>";
				// } else {
				// 	$data['result']="<div class='failed' style='width:300px'>Gagal</div>";
				// }
			//}
			// $config= array(
			// 		'allowed_types' => 'jpg|jpeg|gif|png',
			// 		'upload_path' => $this->gallery_path,
			// 		'max_size' => 200000,
			// 		'file_name' => url_title($this->input->post('nama'))
			// 	);

			// 	$this->load->library('upload',$config);
			// 	$this->upload->do_upload();

			// 	$file=$this->upload->file_name;
				
				
			// 	$data=array(
			// 		'ID_SLIDE'=>$this->input->post('id_slide'),
			//  		'NAMA'=>$this->input->post('nama'),
			//  		'LINK'=>$file,
			//  		'KET'=>$this->input->post('ket'),
			//  		'TGL'=>$this->input->post('tgl')
			//  	);
			//  	$this->m_portalslide->tambah_data($data);
			}
		}else{
			$this->load->view('insert_slide');
		}
	}

	public function update($id){
		$data['success']=0;
			if($_POST)
			{
				$nama_gambar = $_FILES['pic']['name'];
			$jenis_gambar = $_FILES['pic']['type'];
			$ukuran_gambar = $_FILES['pic']['size'];
			if(empty($nama_gambar)) {
				$data['result'] = "<div class='failed'>Pilih gambar</div>";
			 } elseif($jenis_gambar != "image/jpg" && $jenis_gambar != "image/gif" && $jenis_gambar != "image/jpeg" && $jenis_gambar  != "image/png" && $jenis_gambar  != "image/pjpeg" && $jenis_gambar  != "image/bmp") {
			 	$data['result'] = "<div class='failed'>File harus berupa gambar</div>";
			 } elseif($ukuran_gambar>100000000) {
			 	$data['result'] = "<div class='failed'>Ukuran gambar tidak boleh melebihi 1 MB</div>";
			 } else {
				
			 		$tmp_gambar = $_FILES["pic"]["tmp_name"];
			 	$nama_gambar = "BRT".date("YmdHis").".png";
			 	move_uploaded_file($tmp_gambar, "assets_bs/images/slider/$nama_gambar");
			 	$tgl=date("d/m/Y");
			 	$data=array(
			 		'ID_SLIDE'=>$this->input->post('id_berita'),
			 		'NAMA'=>$this->input->post('judul'),
			 		'GAMBAR'=>$this->$nama_gambar,
			 		'TGL'=>$this->input->post('tgl'),
			 		'KET'=>$this->input->post('ket')
			 		
			 	);
			 }
			 	
				$this->m_berita->update_data($id,$data);
				$data['success']=1;
				redirect(base_url().'index.php/c_berita/');
			}else{
				$data['a']=$this->m_berita->get_dataid($id);
				$this->load->view('admin/update_berita',$data);
			}
	}

	public function delete($id){
		$data['success']=0;
			
				
			 	$data=array(
			 		'IS_DELETED'=>'false'
			 		
			 	);
			
			 	
				$this->m_slide->delete_data($id,$data);
				$data['success']=1;
				redirect(base_url().'index.php/C_slide/');
			
	}


}

