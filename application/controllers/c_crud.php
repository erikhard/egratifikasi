<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class C_crud extends CI_Controller {

	function __construct()
		{
			parent::__construct();
 			$this->load->model('m_crud');
 			/*if(!$this->session->userdata('username'))
        	{
            	redirect('login');
        	}*/
 		}
 

	public function index(){
		$data['user']=$this->m_crud->get_data();
		$this->load->view('tampilcrud',$data);
		//$this->load->view('tampilhome');
	}

	public function insert(){
		if($_POST){
			$data=array(
				'USERNAME'=>$this->input->post('user'), 
				'PASSWORD'=>$this->input->post('pass'), 
				'STATUS'=>$this->input->post('status')
			);
			$this->m_crud->tambah_data($data);
			redirect(base_url().'index.php/c_crud');
		}else{
			$this->load->view('tampilhome');		
		}
	}

	public function update($user){
		//$data['success']=0;
			if($_POST)
			{
				$data=array(
					'USERNAME'=>$_POST['user'], 
					'PASSWORD'=>$_POST['pass'], 
					'STATUS'=>$_POST['status']
				);
				$this->m_crud->update_data($user,$data);
		//		$data['success']=1;
				redirect(base_url().'index.php/c_crud/');
			}
			$data['user']=$this->m_crud->get_postid($user);
			$this->load->view('edit_crud',$data);

	}

}
