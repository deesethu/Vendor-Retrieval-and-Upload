<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
    {
            parent::__construct();
            $this->load->model('db_model');
            $this->load->database();


    }
	public function index()
	{
	    $this->load->library('table');
	   $this->load->helper(array('form', 'url'));
       $data=array();
	   $data['results']=$this->db_model->getdata();
	   //echo "data frm view<br/>";
	   //print_r($data);
	   $tmpl = array (
                    'table_open'          => '<table border="1" cellpadding="4" cellspacing="1">',

                    'heading_row_start'   => '<tr>',
                    'heading_row_end'     => '</tr>',
                    'heading_cell_start'  => '<th>',
                    'heading_cell_end'    => '</th>',

                    'row_start'           => '<tr>',
                    'row_end'             => '</tr>',
                    'cell_start'          => '<td>',
                    'cell_end'            => '</td>',

                    'row_alt_start'       => '<tr>',
                    'row_alt_end'         => '</tr>',
                    'cell_alt_start'      => '<td>',
                    'cell_alt_end'        => '</td>',

                    'table_close'         => '</table>'
              );
			  $this->table->set_heading('NAME', 'EMAIL', 'MOBILE');

$this->table->set_template($tmpl);

	   
	   $this->load->view('home', $data);

             
       
		
	}
	public function register()
	{
	   $this->db_model->register_data($_POST);
	   $this->load->helper('url');
		redirect('http://localhost/assign/', 'location');
	}
	public function addvendor()
	{
	    $this->load->helper(array('form', 'url'));
		$this->load->view('addVendor');
	
	}
	public function editvendor($sno)
	{
	    $this->load->helper(array('form', 'url'));
		$data=$this->db_model->editdata($sno);
	    $this->load->view('editForm',$data);
	}
	 public function update()
	 {
	    //$sno = $_POST['sno'];
		$vndata=array();
		$vndata['sno']=$_POST['sno'];
		$vndata['name']=$_POST['name'];
		$vndata['email']=$_POST['email'];
		$vndata['mobile']=$_POST['mobile'];
		$vndata['stn']=$_POST['stn'];
		$vndata['tper']=$_POST['tper'];
		$this->db_model->update_data($vndata);
		$this->load->helper('url');
		redirect('http://localhost/assign/', 'location');
	 }
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */