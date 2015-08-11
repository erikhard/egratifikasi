<?php

class Login_model extends CI_Model {


		public function __construct() {
			parent::__construct();
			
		}
		
	
	var $table = 'GRAT_USER';
	
	function check_user($username, $password)
	{
		$this -> db -> select('USERNAME, PASSWORD, STATUS');
		$this -> db -> from('GRAT_USER');
		$this -> db -> where('USERNAME', $username);
		$this -> db -> where('PASSWORD', $password);
		
		$query = $this -> db -> get();
		if($query -> num_rows() > 0 )
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
}