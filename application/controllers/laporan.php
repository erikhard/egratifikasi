<?php

     class laporan extends CI_Controller{
		
		public function __construct() {
			parent::__construct();
			$this->load->model('dash_model', '', TRUE);
			$this->load->library('Datatables');
			$this->load->library('table');
			$this->load->database();
		}
	   
	
		
		
        function index()
        {
		
			$data['main_view'] = 'laporan/grid';
			$data['jml_warning'] = $this->dash_model->datawarning();
			$data['warnings'] = $this->dash_model->datawarningall();
            $this->load->view('template',$data);
        }
		
		function lap_terima()
        {
			$data['main_view'] = 'laporan/terima';
            $this->load->view('template',$data);
        }
		
		
    } 
?>