<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

     class jns_grat extends CI_Controller{
		
		public function __construct() {
			parent::__construct();
			$this->load->model('jns_grat_model', '', TRUE);
			$this->load->library('Datatables');
			$this->load->library('table');
			$this->load->database();
		}
	   
	
	
        
		
		function index()
        {
			
			$tmpl = array ( 'table_open'  => '<table id="jns_table" class="table table-striped table-bordered bootstrap-datatable datatable">' );
			$this->table->set_template($tmpl); 
			$this->table->set_heading('JENIS', 'KETERANGAN','NO.','OPTION');
			$data['main_view'] = 'jns_grat/grid';
            $this->load->view('template',$data);
        }
		
		function datatable()
		{
			$this->datatables->select("JNS_GRAT, KET_GRAT")
			->unset_column('ID')
			->add_column('Actions', get_buttons('$1'),'ID')
			->from('GRAT_JENIS');
		
			echo $this->datatables->generate();
		}
		
		function hapus($ID)
		{
			$this->jns_grat_model->delete($ID);
			//$this->session->set_flashdata('message', '1 data absen berhasil dihapus');
			
			redirect('jns_grat');
		}
	
		function edit() 
		{
			$data['form_action']	= site_url('jns_grat/update_process');
			$data['main_view'] = 'jns_grat/add';
			$data['is_update'] = '1';
			$id =  $this->uri->segment(3);
			$data['single_data'] = $this->jns_grat_model->show_data($id);
			$this->load->view('template', $data);
		}
		
		function update_process()
		{
			
			$kode = $this->input->post('ID_JNS');
			$datajns = array('JNS_GRAT'		=> $this->input->post('jns_grat'),
								'KET_GRAT'		=> $this->input->post('ket_grat')
							);  
			$this->jns_grat_model->update($kode, $datajns);
			redirect('jns_grat');
		}
		
		function add()
        {
			$data['form_action']	= site_url('jns_grat/add_process');
			$data['main_view'] = 'jns_grat/add';
			$data['is_update'] = '0';
            $this->load->view('template',$data);
        }
		
		function add_process()
		{
			/*foreach ($data as $key => $value) {
				$value = "'".$value."'";
				$keys[]=$key;
				$values[]=$value;
			}
			$variableins = implode(',', $keys);
			$valueins = implode(',', $values); 
			$query= $this->db->query("INSERT INTO GRAT_USER(".$variableins.") VALUES (".$valueins.")");
			$this->db->query($query); 
			*/
			//waktu_terima_hari masih kosong
			
			$datajns = array('JNS_GRAT' => $this->input->post('jns_grat'),
								'KET_GRAT'=> $this->input->post('ket_grat')
							);  
			$this->jns_grat_model->add($datajns);
			redirect('jns_grat');
		}
		
	
		
	
		
    } 
?>