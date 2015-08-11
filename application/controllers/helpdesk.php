<?php
class helpdesk extends Controller {
	 function helpdesk()
	 {
		parent::Controller();
	
		$this->load->model('helpdesk_model','helpdesk');
		$this->load->library('nusoap_lib');		
	 }
	/*function __construct() {
		parent::__construct();
		//if (!$this->kauth->getInstance()->hasIdentity()) redirect('auth');
		
		//$this->load->model('helpdesk_model');
		$this->load->library('nusoap_lib');
	}
*/
	function index()
	{
		if($this->session->userdata('bahasa')=='')
			$this->session->set_userdata('bahasa', 'ind');
			
		if($this->session->userdata('login')=='true')
		{
			if ($this->session->userdata('level_user')=='01'){
				redirect('GATE_KEEPER', 'refresh');
			}
			else if ($this->session->userdata('level_user')=='02'){
				redirect('ASM', 'refresh');
			}
			else if ($this->session->userdata('level_user')=='03'||($this->session->userdata('level_user')=='06')){
				redirect('GATE_KEEPER', 'refresh');
			}else if ($this->session->userdata('level_user')=='04'||($this->session->userdata('level_user')=='07')){
				redirect('TI', 'refresh');
			}else if (($this->session->userdata('level_user')=='05')){
				redirect('CABANG', 'refresh');
			}
		}
		else
		{
			if ($this->session->userdata('bahasa')=='eng')
				$this->load->view('login_eng');	
			else $this->load->view('login');
		}
	}
	
	function enkrip()
	{
		$client = new nusoap_client('http://portalsi.pp3.co.id/wsouth.asmx?wsdl',true);
		$result = $client->call('MigrasiPassword',array('xUsername'=>'841004560','xPassword'=>'841004560'));
		print_r($result);		
	}
	
	function login()
	{				
		
		
		$client = new nusoap_client('http://portalsi.pp3.co.id/wsouth.asmx?wsdl',true);
		
		$result = $client->call('valLoginAkun',array('xIDAPLIKASI'=>11,'xUsername'=>$this->input->post('username'),'xPassword'=>$this->input->post('password')));
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
			
			//$data = @$this->helpdesk->getUserGroupKode($_POST['user']);
			/* if ($result['valLoginAkunResult']['HAKAKSES']==17) //STAF SI KANPUS
				$GroupAkses=04;
			elseif($result['valLoginAkunResult']['HAKAKSES']==16) //CABANG
				$GroupAkses=05;
			elseif($result['valLoginAkunResult']['HAKAKSES']==15) //GATE KEEPER
				$GroupAkses=03;
			elseif($result['valLoginAkunResult']['HAKAKSES']==90) //ADMIN
				$GroupAkses=01;
			elseif($result['valLoginAkunResult']['HAKAKSES']==91) //ASM
				$GroupAkses=02;
			elseif($result['valLoginAkunResult']['HAKAKSES']==750) //GATE KEEPER CABANG
				$GroupAkses=06;
			elseif($result['valLoginAkunResult']['HAKAKSES']==751) //STAF SI CABANG
				$GroupAkses=07;	 */
			
			if ($result['valLoginAkunResult']['HAKAKSES']==803) //ADMIN
				$GroupAkses=01;
			elseif($result['valLoginAkunResult']['HAKAKSES']==802) //USER
				$GroupAkses=02;
				
			//kusus kode cabang 1 digit
			/* if (strlen(trim($result['valLoginAkunResult']['KD_CABANG']))==1)
				$cabang = '0'.trim($result['valLoginAkunResult']['KD_CABANG']);
			else $cabang = trim($result['valLoginAkunResult']['KD_CABANG']); */
			
			$this->session->set_userdata('level_user', $GroupAkses);
			$this->session->set_userdata('nama_group', $result['valLoginAkunResult']['HAKAKSES_DESC']);
			//$this->session->set_userdata('kategori_user', $data['Kategori']);
			$this->session->set_userdata('nama_user', $result['valLoginAkunResult']['NAMA']);
			$this->session->set_userdata('cabang',$result['valLoginAkunResult']['NAMA_CABANG']);
			$this->session->set_userdata('id_cabang',$cabang);
			//$this->session->set_userdata('GROUPUSER',$data['GROUPUSER']);
			//die();
			
			/*dummy*/
			/*$this->session->set_userdata('level_user', "06");
			$this->session->set_userdata('cabang',"Tanjung Perak");
			$this->session->set_userdata('id_cabang',"02");*/
			/*end dummy*/
			

			if ($this->session->userdata('level_user')=='01'){
				redirect('GATE_KEEPER', 'refresh');
			}
			else if ($this->session->userdata('level_user')=='02'){
				redirect('ASM', 'refresh');
			}
			else if ($this->session->userdata('level_user')=='03' || $this->session->userdata('level_user')=='06'){
				redirect('GATE_KEEPER', 'refresh');
			}else if ($this->session->userdata('level_user')=='04' || $this->session->userdata('level_user')=='07'){
				redirect('TI', 'refresh');
			}else if (($this->session->userdata('level_user')=='05')){
				redirect('CABANG', 'refresh');
			}
			//echo '--'.$this->session->userdata('level_user');
		}
		else
		{
			$this->index();
		}
		
	}
	
	function verifyPassword($sid='')
	{				
		if ($sid=='')
		{
			$this->index();
		}else{
			$client = new nusoap_client('http://ppkb.pp3.co.id/oservice/wsouth.asmx?wsdl',true);
			
			$result = $client->call('verifySESSION',array('keysid'=>$sid));
			//print_r($result);
			
			
			if($result['verifySESSIONResult']['responType'] == 'E-018')
			{
				redirect($result['verifySESSIONResult']['URL_CP'], 'refresh');
			}
			elseif(substr($result['verifySESSIONResult']['responType'],0,1) == 'S')
			{
				$this->session->set_userdata('login', 'true');
				$this->session->set_userdata('username', $result['verifySESSIONResult']['USERNAME']);
				//$this->session->set_userdata('password', $result['verifySESSIONResult']['HAKAKSES_DESC']);
				
				$data = @$this->helpdesk->getUserGroupKode($_POST['user']);
				if ($result['verifySESSIONResult']['HAKAKSES']==17)
					$GroupAkses=04;
				elseif($result['verifySESSIONResult']['HAKAKSES']==16)
					$GroupAkses=05;
				elseif($result['verifySESSIONResult']['HAKAKSES']==15)
					$GroupAkses=03;
				elseif($result['verifySESSIONResult']['HAKAKSES']==90)
					$GroupAkses=01;
				elseif($result['verifySESSIONResult']['HAKAKSES']==91)
					$GroupAkses=02;
				
				$this->session->set_userdata('level_user', $GroupAkses);
				$this->session->set_userdata('nama_group', $result['verifySESSIONResult']['HAKAKSES_DESC']);
				//$this->session->set_userdata('kategori_user', $data['Kategori']);
				$this->session->set_userdata('nama_user', $result['verifySESSIONResult']['NAMA']);
				$this->session->set_userdata('cabang',$result['verifySESSIONResult']['NAMA_CABANG']);
				$this->session->set_userdata('id_cabang',$result['verifySESSIONResult']['KD_CABANG']);
				//$this->session->set_userdata('GROUPUSER',$data['GROUPUSER']);
				//die();
						
				
				if ($this->session->userdata('level_user')=='01'){
					redirect('GATE_KEEPER', 'refresh');
				}
				else if ($this->session->userdata('level_user')=='02'){
					redirect('ASM', 'refresh');
				}
				else if ($this->session->userdata('level_user')=='03'){
					redirect('GATE_KEEPER', 'refresh');
				}else if ($this->session->userdata('level_user')=='04'){
					redirect('TI', 'refresh');
				}else if (($this->session->userdata('level_user')=='05')||($this->session->userdata('level_user')=='06')){
					redirect('CABANG', 'refresh');
				}
				//echo '--'.$this->session->userdata('level_user');
			}
			else
			{
				$this->index();
			}
	
		}
	}
	
	function main()
	{
		
		$data['session_id'] = $this->session->userdata('username');
		$data['nama_user'] = $this->session->userdata('nama_user');
		$data['nama_group'] = $this->session->userdata('nama_group');
		if ($this->session->userdata('nama_group')=='PETUGAS ISI AIR'){
			$this->load->view('main_air',$data);
		}else{
			$this->load->view('main',$data);
		}
	}
	
	function logout()
	{						
		$this->session->unset_userdata('username');	
		$this->session->unset_userdata('login');
		redirect('', 'refresh');
	}
	
	function cetak_keluahan($noref)
	{
		$data['DataProblem']=$this->helpdesk->getProblem($noref);
		$this->load->view('Problem_cetak_tpl',$data);
	}
	
	function ganti_bahasa($bahasa)
	{
		$this->session->set_userdata('bahasa',$bahasa);
		if ($bahasa=='ind')
		{
			echo "Terima kasih anda telah memilih bahasa Indonesia. <a href='".base_url()."'>Kembali</a>";
		}
		elseif ($bahasa=='eng')
		{
			echo "Thanks for choose English. <a href='".base_url()."'>Back</a>";
		}
	}

}
?>
