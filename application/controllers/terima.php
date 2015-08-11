<?php

     class terima extends CI_Controller{
		
		public function __construct() {
			parent::__construct();
			$this->load->model('terima_model', '', TRUE);
			$this->load->model('dash_model', '', TRUE);
			$this->load->library('Datatables');
			$this->load->library('table');
			$this->load->database();
			
		}
	
		function add()
        {
			$data['form_action']	= site_url('terima/add_process');
			$data['main_view'] = 'terima/add';
			$data['is_update'] = '0';
			$data['is_app'] = '0';
			$data['jml_warning'] = $this->dash_model->datawarning();
			$data['warnings'] = $this->dash_model->datawarningall();
			$this->load->view('template',$data);
			
        }
		
        function index()
        {
			
			/* $tmpl = array ( 'table_open'  => '<table id="terima_table" class="table table-striped table-bordered bootstrap-datatable datatable">' );
			$this->table->set_template($tmpl); 
			
			$this->table->set_heading('NIP','NAMA','TANGGAL TERIMA','JENIS GRATIFIKASI','NO.','OPTION'); */
			
			$data['dttolaks'] = $this->terima_model->tampil();
			$data['main_view'] = 'terima/grid';
			$data['jml_warning'] = $this->dash_model->datawarning();
			$data['warnings'] = $this->dash_model->datawarningall();
            $this->load->view('template',$data);
        }
		
		function add_process()
		{
			//waktu_terima_hari masih kosong
			$tanggal = $this->input->post('waktu_terima_tgl');
			$datatolak = array('EMP_NIP'		=> $this->input->post('emp_nip'),
								'EMP_NAMA'		=> $this->input->post('emp_nama'),
								'EMP_CABANG'	=> $this->input->post('emp_cabang'),
								'EMP_JAB'		=> $this->input->post('emp_jab'),
								'EMP_TELP'		=> $this->input->post('emp_telp'),
								'EMP_EMAIL'		=> $this->input->post('emp_email'),
								'PEM_NAMA'		=> $this->input->post('pem_nama'),
								'PEM_JAB'		=> $this->input->post('pem_jab'),
								'PEM_ALAMAT'	=> $this->input->post('pem_alamat'),
								'PEM_TELP'		=> $this->input->post('pem_telp'),
								'PEM_EMAIL'		=> $this->input->post('pem_email'),
								'HUB_PELINDO'	=> $this->input->post('hub_pelindo'),
								'ISI_HUB_PELINDO'	=> $this->input->post('isi_hub_pelindo'),
								'TMPT_TERIMA'	=> $this->input->post('tmpt_terima'),
								'WAKTU_TERIMA_TGL'	=> $tanggal,
								'WAKTU_TERIMA_JAM'	=> $this->input->post('waktu_terima_jam'),
								'WAKTU_TERIMA_HARI'	=> $this->input->post('waktu_terima_hari'),
								'RANGKA_KEG'	=> $this->input->post('rangka_keg'),
								'ISI_RANGKA_KEG'	=> $this->input->post('isi_rangka_ket'),
								'URAIAN_KEG'	=> $this->input->post('uraian_keg'),
								'JNS_GRAT'		=> $this->input->post('jns_grat'),
								'BENTUK_GRAT'	=> $this->input->post('bentuk_grat'),
								'JML_GRAT'		=> $this->input->post('jml_grat'),
								'NILAI_GRAT'	=> $this->input->post('nilai_grat'),
								'IS_AKOM_PELINDO'	=> $this->input->post('is_akom_pelindo'),
								'KET_AKOM'		=> $this->input->post('ket_akom'),
								'ISI_KET_AKOM'		=> $this->input->post('isi_ket_akom'),
								'TMPT_TERIMA_ALAMAT'	=> $this->input->post('tmpt_terima_alamat'),
								'TMPT_TERIMA_KOTA'		=> $this->input->post('tmpt_terima_kota'),
								'PEM_CORP'		=> $this->input->post('pem_corp')
							);   
			
			
			$this->terima_model->add($datatolak);
			redirect('terima');
		}
		
		
		function update_process()
		{
			
			$kode = $this->input->post('ID_GRAT');
			$tanggal = $this->input->post('waktu_terima_tgl');
			$datatolak = array('EMP_NIP'		=> $this->input->post('emp_nip'),
								'EMP_NAMA'		=> $this->input->post('emp_nama'),
								'EMP_CABANG'	=> $this->input->post('emp_cabang'),
								'EMP_JAB'		=> $this->input->post('emp_jab'),
								'EMP_TELP'		=> $this->input->post('emp_telp'),
								'EMP_EMAIL'		=> $this->input->post('emp_email'),
								'PEM_NAMA'		=> $this->input->post('pem_nama'),
								'PEM_JAB'		=> $this->input->post('pem_jab'),
								'PEM_ALAMAT'	=> $this->input->post('pem_alamat'),
								'PEM_TELP'		=> $this->input->post('pem_telp'),
								'PEM_EMAIL'		=> $this->input->post('pem_email'),
								'HUB_PELINDO'	=> $this->input->post('hub_pelindo'),
								'TMPT_TERIMA'	=> $this->input->post('tmpt_terima'),
								'WAKTU_TERIMA_TGL'	=> $tanggal,
								'WAKTU_TERIMA_JAM'	=> $this->input->post('waktu_terima_jam'),
								'WAKTU_TERIMA_HARI'	=> $this->input->post('waktu_terima_hari'),
								'RANGKA_KEG'	=> $this->input->post('rangka_keg'),
								'URAIAN_KEG'	=> $this->input->post('uraian_keg'),
								'JNS_GRAT'		=> $this->input->post('jns_grat'),
								'BENTUK_GRAT'	=> $this->input->post('bentuk_grat'),
								'JML_GRAT'		=> $this->input->post('jml_grat'),
								'NILAI_GRAT'	=> $this->input->post('nilai_grat'),
								'IS_AKOM_PELINDO'	=> $this->input->post('is_akom_pelindo'),
								'KET_AKOM'		=> $this->input->post('ket_akom'),
								'TMPT_TERIMA_ALAMAT'	=> $this->input->post('tmpt_terima_alamat'),
								'TMPT_TERIMA_KOTA'		=> $this->input->post('tmpt_terima_kota'),
								'PEM_CORP'		=> $this->input->post('pem_corp')
							);  
			
			
			$this->terima_model->update($kode, $datatolak);
			
			redirect('terima');
		}
		
		function app_process()
		{
			
			$kode = $this->input->post('ID_GRAT');
			$datatolak = array('APPROVAL'		=> $this->input->post('approval'),
								'KET_APPROVAL'		=> $this->input->post('ket_approval')			
								);  
			$this->terima_model->app($kode, $datatolak);
			redirect('terima');
		}
		
		function app() 
		{
			$data['form_action']	= site_url('terima/app_process');
			$data['main_view'] = 'terima/add';
			$data['is_update'] = '1';
			$data['is_app'] = '1';
			$data['jml_warning'] = $this->dash_model->datawarning();
			$data['warnings'] = $this->dash_model->datawarningall();
			$id =  $this->uri->segment(3);
			$data['single_data'] = $this->terima_model->show_data($id);
			$this->load->view('template', $data);
		}
		
		function hapus($ID_GRAT)
		{
			$this->terima_model->delete($ID_GRAT);
			
			redirect('terima');
		}
	
		function edit() 
		{
			$data['form_action']	= site_url('terima/update_process');
			$data['main_view'] = 'terima/add';
			$data['is_update'] = '1';
			$data['is_app'] = '0';
			$data['jml_warning'] = $this->dash_model->datawarning();
			$data['warnings'] = $this->dash_model->datawarningall();
			$id =  $this->uri->segment(3);
			$data['single_data'] = $this->terima_model->show_data($id);
			$this->load->view('template', $data);
		}
		
		
		
		
    } 
?>