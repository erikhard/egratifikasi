<?php

     class gratifikasi extends CI_Controller{
		
		public function __construct() {
			parent::__construct();
			
		}
		
	
        function index()
        {
			
			$data['main_view'] = 'dash';
			$this->load->view('template',$data);
			
        }
    } 
?>