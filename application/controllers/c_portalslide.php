<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class C_portalslide extends CI_Controller {

	function __construct()
		{
			$gallery_path;
			$gallery_path_url;

			parent::__construct();
 			$this->load->model('m_portalslide');
 			$this->load->model('m_berita');
 			$this->gallery_path=realpath(APPPATH.'../../assets_bs/images/slider/');
 			$this->gallery_path_url=base_url().'assets_bs/images/slider/';
 			/*if(!$this->session->userdata('username'))
        	{
            	redirect('login');
        	}*/
        	$this->load->helper(array('url','html','form'));
 		}
 

	public function index(){
		 $data['news']=$this->m_berita->get_data();
		 $data['berita']=$this->m_portalslide->get_data();
		 $this->load->view('portal',$data);
		//$this->load->view('tampilhome');
	}

	public function tampilpop($ID_BERITA){
		 $data['popnews']=$this->m_berita->get_dataid($ID_BERITA);
		 //$data['berita']=$this->m_portalslide->get_data();
		 $this->load->view('popupberita',$data);
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

			$nama_gambar = $_FILES['upload']['name'];
			$jenis_gambar = $_FILES['upload']['type'];
			$ukuran_gambar = $_FILES['upload']['size'];
			if(empty($nama_gambar)) {
				$data['result'] = "<div class='failed'>Pilih gambar</div>";
			 } elseif($jenis_gambar != "image/jpg" && $jenis_gambar != "image/gif" && $jenis_gambar != "image/jpeg" && $jenis_gambar  != "image/png" && $jenis_gambar  != "image/pjpeg" && $jenis_gambar  != "image/bmp") {
			 	$data['result'] = "<div class='failed'>File harus berupa gambar</div>";
			 } elseif($ukuran_gambar>100000000) {
			 	$data['result'] = "<div class='failed'>Ukuran gambar tidak boleh melebihi 1 MB</div>";
			 } else {
				
			 		$tmp_gambar = $_FILES["upload"]["tmp_name"];
			 	$nama_gambar = "SLID".date("YmdHis").".png";
			 	move_uploaded_file($tmp_gambar, "assets_bs/images/slider/$nama_gambar");
			 	$tgl=date("d/m/Y");
			 	$data=array(
			 		'ID_SLIDE'=>$this->input->post('id_slide'),
			 		'NAMA'=>$this->input->post('nama'),
			 		'GAMBAR'=>$nama_gambar,
			 		'TGL'=>$this->input->post('tgl'),
			 		'KET'=>$this->input->post('ket')
			 		
			 	);
			 	$result = $this->m_portalslide->tambah_data($data);
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
			$this->load->view('uploadslide');
		}
	}
	public function insert_berita(){
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
			 	move_uploaded_file($tmp_gambar, "assets_bs/images/team/$nama_gambar");
			 	$tgl=date("d/m/Y");
			 	$data=array(
			 		'ID_BERITA'=>$this->input->post('id_berita'),
			 		'JUDUL'=>$this->input->post('judul'),
			 		'BERITA'=>$this->input->post('berita'),
			 		'PIC'=>$nama_gambar,
			 		'TGL'=>$this->input->post('tgl'),
			 		'KET'=>$this->input->post('ket')
			 		
			 	);
			 	$result = $this->m_berita->tambah_data($data);
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
			$this->load->view('insert_berita');
		}
	}

	public function update($user){
		$data['success']=0;
			if($_POST)
			{
				$data=array(
					'USERNAME'=>$_POST['user'], 
					'PASSWORD'=>$_POST['pass'], 
					'STATUS'=>$_POST['status']
				);
				$this->m_crud->update_data($user,$data);
				$data['success']=1;
				redirect(base_url().'index.php/c_crud/');
				//$this->load->view('edit_crud',$data);

			}
			$data['user']=$this->m_crud->get_postid($user);
			$this->load->view('edit_crud',$data);

	}

}
