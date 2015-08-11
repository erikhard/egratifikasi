<?php
/* if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); */

     class dash extends CI_Controller{
		
		public function __construct() {
			parent::__construct();
			$this->load->model('dash_model', '', TRUE);
			$this->load->library('table');
			$this->load->database();
			
		}
		
		
		
        function index()
        {
			
			if ($this->session->userdata('login') == TRUE)
			{
				//$data['username'] = $this->session->userdata('username'); //$session_data['username'];
				$data['jml_tolak'] = $this->dash_model->datatolak();
				$data['jml_terima'] = $this->dash_model->dataterima();
				$data['jml_warning'] = $this->dash_model->datawarning();
				$data['warnings'] = $this->dash_model->datawarningall();
				$data['main_view'] = 'dash';
				$this->load->view('template',$data);
				//redirect('absen');
			}
			else
			{
				$this->load->view('home');
			}
			
			
		   
        }
		
		
    } 
?>