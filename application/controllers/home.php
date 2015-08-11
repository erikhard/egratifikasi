<?php
     class home extends CI_Controller{
		
		public function __construct() {
			parent::__construct();
			
			$this->load->model('Login_model', '', TRUE);
			$this->load->helper('url');
			$this->load->helper('form');
			$this->load->library('session');
			$this->load->library('form_validation');
			$this->load->library('nusoap_lib');	
			
			
		}
		
		
		
        function index()
        {
			//$this->load->helper(array('form'));
			$this->load->view('portal');
        }
		
	function login()
	{				
		
		
		$client = new nusoap_client('http://portalsi.pp3.co.id/wsouth.asmx?wsdl',true);
		
		$result = $client->call('valLoginAkun',array('xIDAPLIKASI'=>79,'xUsername'=>$this->input->post('username'),'xPassword'=>$this->input->post('password')));
		//print_r($result);
		
		
		if(($result['valLoginAkunResult']['responType'] == 'E-017')||($result['valLoginAkunResult']['responType'] == 'E-018')||($result['valLoginAkunResult']['responType'] == 'E-003'))
		{
			redirect($result['valLoginAkunResult']['URL_CP'], 'refresh');
		}
		elseif(substr($result['valLoginAkunResult']['responType'],0,1) == 'S')
		{
			$this->session->set_userdata('login', 'true');
			$this->session->set_userdata('username', $this->input->post('username'));
			$this->session->set_userdata('password', $this->input->post('password'));
			
			if ($result['valLoginAkunResult']['HAKAKSES']==803) //ADMIN
				$GroupAkses=01;
			elseif($result['valLoginAkunResult']['HAKAKSES']==802) //USER
				$GroupAkses=02;
			
			$this->session->set_userdata('level_user', $GroupAkses);
			$this->session->set_userdata('nama_group', $result['valLoginAkunResult']['HAKAKSES_DESC']);
			
			$this->session->set_userdata('nama_user', $result['valLoginAkunResult']['NAMA']);
			$this->session->set_userdata('cabang',$result['valLoginAkunResult']['NAMA_CABANG']);
			$this->session->set_userdata('id_cabang',$result['valLoginAkunResult']['KD_CABANG']);
			$this->session->set_userdata('IDUSER',$result['valLoginAkunResult']['IDUSER']);
			$this->session->set_userdata('HP',$result['valLoginAkunResult']['HP']);
			$this->session->set_userdata('EMAIL',$result['valLoginAkunResult']['EMAIL']);
			redirect('dash');
			
		}
		else
		{
			$this->index();
			
		}
		
	}
	
	
		function process_login()
		{
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			if ($this->form_validation->run() == TRUE)
			{
				$username = $this->input->post('username');
				$password = $this->input->post('password');
				
				if ($this->Login_model->check_user($username, $password) == TRUE)
				{
					$this->session->set_userdata('login', 'true');
					$this->session->set_userdata('username', $this->input->post('username'));
					$this->session->set_userdata('password', $this->input->post('password'));
					
					//$data = array('username' => $username, 'login' => TRUE);
					$this->session->set_userdata('level_user', '01');
					$this->session->set_userdata('nama_group', 'ADMIN');
					
					$this->session->set_userdata('nama_user', 'EKO HADI ASPUTRO');
					$this->session->set_userdata('cabang','KANTOR PUSAT');
					$this->session->set_userdata('id_cabang','01');
					$this->session->set_userdata('iduser','111011');
					$this->session->set_userdata('hp','085733691947');
					$this->session->set_userdata('email','eko.asputro@pp3.co.is'); 
					
					//$this->session->set_userdata($data);
					
					redirect('dash');
				}
				else
				{
					$this->session->set_flashdata('message', 'Maaf, username dan atau password Anda salah');
					redirect('home');
				}
			}
			else
			{
				/* $data['main_view'] = 'dash';
				$this->load->view('template',$data); */
			} 
			
			
			
		}
		
		/**
		 * Memproses logout
		 */
		function process_logout()
		{
			$this->session->sess_destroy();
			redirect('home', 'refresh');
		}
		
		
		
    } 
?>