<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

     class tolak extends CI_Controller{
		
		public function __construct() {
			parent::__construct();
			$this->load->model('tolak_model', '', TRUE);
			$this->load->model('dash_model', '', TRUE);
			$this->load->library('Datatables');
			$this->load->library('table');
			$this->load->database();
			
			
		}
		
		function index()
        {
			
			$data['dttolaks'] = $this->tolak_model->tampil();
			$data['main_view'] = 'tolak/grid';
			$data['jml_warning'] = $this->dash_model->datawarning();
			$data['warnings'] = $this->dash_model->datawarningall();
			$this->load->view('template',$data); 
			
        }
		
		
		
		function hapus($ID_TOLAK)
		{
			$this->tolak_model->delete($ID_TOLAK);
			//$this->session->set_flashdata('message', '1 data absen berhasil dihapus');
			redirect('tolak');
		}
	
		function edit() 
		{
			$data['form_action']	= site_url('tolak/update_process');
			$data['main_view'] = 'tolak/add';
			$data['is_update'] = '1';
			$data['is_app'] = '0';
			$data['jml_warning'] = $this->dash_model->datawarning();
			$data['warnings'] = $this->dash_model->datawarningall();
			$id =  $this->uri->segment(3);
			$data['single_data'] = $this->tolak_model->show_data($id);
			$this->load->view('template', $data);
		}
		
		function app() 
		{
			$data['form_action']	= site_url('tolak/app_process');
			$data['main_view'] = 'tolak/add';
			$data['is_update'] = '1';
			$data['is_app'] = '1';
			$data['jml_warning'] = $this->dash_model->datawarning();
			$data['warnings'] = $this->dash_model->datawarningall();
			$id =  $this->uri->segment(3);
			$data['single_data'] = $this->tolak_model->show_data($id);
			$this->load->view('template', $data);
		}
		
		function app_process()
		{
			
			$kode = $this->input->post('ID_TOLAK');
			//$approval = $this->input->post('approval');
			$datatolak = array('APPROVAL'		=> $this->input->post('approval'),
								'KET_APPROVAL'		=> $this->input->post('ket_approval')			
								);  
			$this->tolak_model->app($kode, $datatolak);
			redirect('tolak');
		}
		
		function update_process()
		{
			
			$kode = $this->input->post('ID_TOLAK');
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
								'WAKTU_TOLAK_TGL'	=> $tanggal,
								'WAKTU_TOLAK_JAM'	=> $this->input->post('waktu_terima_jam'),
								'WAKTU_TOLAK_HARI'	=> $this->input->post('waktu_terima_hari'),
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
			
			
			$this->tolak_model->update($kode, $datatolak);
			
			redirect('tolak');
		}
		
		function loadtabel()
		{
			$data['datatamps'] = $this->tolak_model->viewtabel();
			$this->load->view('tolak/tabel',$data);
		}
		
		function viewtabel()
		{
			$data = $this->tolak_model->viewtabel();
			//$data['main_view'] = 'tolak/load';
          //  $this->load->view($data); 
		  
		  $this->datatables->select("NM_BERKAS, JNS_GRAT,ID_SESSION")
		  ->where('JNS_GRAT','2')
		  ->where('ID_SESSION','A')
		  ->add_column('Actions', get_buttons('$1'),'ID_SESSION')
		  ->from('GRAT_TAMP_BERKAS');
		  //$this->datatables->$data; 
		
			echo $this->datatables->generate();
			
		}
		
		function simpantabel()
		{
			$dokumen_data = $this->input->post('dokumen_data');
			$this->tolak_model->add_tabel($dokumen_data);
			$data['datatamps'] = $this->tolak_model->viewtabel();
		}
		
		function hapustabel()
		{
			$dokumen_data = $this->input->post('kode');
			$this->tolak_model->hapus_tabel($dokumen_data);
			$data['datatamps'] = $this->tolak_model->viewtabel();
		}
		
		function add()
        {
			$data['form_action']	= site_url('tolak/add_process');
			$data['main_view'] = 'tolak/add';
			$data['is_update'] = '0';
			$data['is_app'] = '0';
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
								'WAKTU_TOLAK_TGL'	=> $tanggal,
								'WAKTU_TOLAK_JAM'	=> $this->input->post('waktu_terima_jam'),
								'WAKTU_TOLAK_HARI'	=> $this->input->post('waktu_terima_hari'),
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
			$this->tolak_model->add($datatolak);
			redirect('tolak');
		}
		
	
		
	
		
    } 
?>