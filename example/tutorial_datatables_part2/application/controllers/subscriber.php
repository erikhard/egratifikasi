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

        //set table id in table open tag
        $tmpl = array ( 'table_open'  => '<table id="big_table" border="1" cellpadding="2" cellspacing="1" class="mytable">' );
        $this->table->set_template($tmpl); 
        
        $this->table->set_heading('First Name','Last Name','Email','Avatar','Actions');

        $this->load->view('subscriber_view');
    }
    //function to handle callbacks
    function datatable()
    {
        $this->datatables->select('id,avatar,first,last,email')
        ->unset_column('id')
        ->unset_column('avatar')
        ->add_column('avatar', '<img src="$1"/>','avatar')
        ->add_column('Actions', get_buttons('$1'),'id')
        ->from('subscriber');
        
        echo $this->datatables->generate();
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