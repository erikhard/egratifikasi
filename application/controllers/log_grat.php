<?php

     class log_grat extends CI_Controller{
		
		public function __construct() {
			parent::__construct();
			$this->load->library('Datatables');
			$this->load->model('dash_model', '', TRUE);
			$this->load->library('table');
			$this->load->database();
		}
	   
	
		
		
        function index()
        {
			$data['jml_warning'] = $this->dash_model->datawarning();
			$data['warnings'] = $this->dash_model->datawarningall();
			$data['dttolaks'] = $this->tolak_model->tampil();
			/* $tmpl = array ( 'table_open'  => '<table id="log_table" class="table table-striped table-bordered bootstrap-datatable datatable">' );
			$this->table->set_template($tmpl); 
			$this->table->set_heading('KETERANGAN LOG','USER'); */
			$data['main_view'] = 'log/grid';
            $this->load->view('template',$data);
        }
		
		function datatable()
		{
			$this->datatables->select('KET_LOG, IS_USER')
			->from('GRAT_LOGTRANS');
		
			echo $this->datatables->generate();
		}
		
		
    } 
?>