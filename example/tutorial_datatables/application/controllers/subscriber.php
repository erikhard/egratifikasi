<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Subscriber extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('Datatables');
        $this->load->library('table');
		$this->load->helper('datatables_helper');
        $this->load->database();
    }
    function index()
    {

       
        $tmpl = array ( 'table_open'  => '<table id="big_table" border="1" cellpadding="2" cellspacing="1" class="mytable">' );
        $this->table->set_template($tmpl); 
        
      //  $this->table->set_heading('First Name','Last Name','Email');
		$this->table->set_heading('First Name','Last Name','Email','Avatar','Actions');
  
        $this->load->view('subscriber_view');
    }
    //function to handle callbacks
    function datatable()
    {
		/* $this->load->model('Helloworld_model');
		$data['result'] = $this->Helloworld_model->getData(); */
		
		//$this->load->model('model_dt');
		//$this->datatables->model_dt->getData(); 
		 /*
		 $this->datatables->select('ID,FIRST,LAST,EMAIL')
        ->unset_column('ID')
        ->from('SUBSCRIBER'); 
		*/
		
	/* 	$this->datatables->select('ID,AVATAR,FIRST,LAST,EMAIL')
        ->unset_column('ID')
        ->unset_column('AVATAR')
        ->add_column('Avatar', '<img src="$1"/>','AVATAR')
        ->add_column('Actions', get_buttons('$1'),'ID')
        //->add_column('Actions', 'Klik here','ID')
        ->from('SUBSCRIBER'); */
        
     $this->datatables->select('ID,AVATAR,FIRST,LAST,EMAIL')
        ->unset_column('ID')
        ->unset_column('AVATAR')
       // ->add_column('avatar', '<img src="$1"/>','AVATAR')
        ->add_column('Actions', get_buttons('$1'),'ID')
        ->from('SUBSCRIBER');
        
        echo $this->datatables->generate();
		
		
     //    $this->datatables->select('ID,FIRST,LAST,EMAIL')->unset_column('ID')->from('SUBSCRIBER'); 
        
    //    echo $this->datatables->generate();
    }
	 function edit($id)
    {
        //load some edit form
        redirect('subscriber');
    }
    function delete($id)
    {
        //add some delete code
        redirect('subscriber');
    }
	
}