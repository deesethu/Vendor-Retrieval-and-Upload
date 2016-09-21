<?
class db_model extends CI_Model {
 var $name = '';
 var $pwd = '';
 var $email = '';
 var $mobile = '';
 var $stn = '';
 var $tper = '';
 
   function __construct()
    {
        parent::__construct();
    }
    function register_data($data)
	{
	   $this->name = $data['name'];
	   $this->pwd = $data['pwd'];
	   $this->email = $data['email'];
	   $this->mobile = $data['mobile'];
	   $this->stn = $data['stn'];
	   $this->tper = $data['tper'];
	   $this->db->insert('vendorinfo', $this);

	
	}
	function getdata()
	{
	    $query = $this->db->get('vendorinfo');
		$result[]=array();
	   if ($query->num_rows() > 0)
       {
           foreach ($query->result() as $row)
           {
                 $result[]=array(
                 'name'=> anchor('welcome/editvendor/'.$row->sno,$row->name),
                 'email'=>$row->email,
				 'mobile'=>$row->mobile
				 );

          }
       }
	   //print_r($result);
	   return $result;
	
	}
	function editdata($sno)
	{
	    $query = $this->db->get_where('vendorinfo',array('sno'=>$sno));
		$result=array();
	   if ($query->num_rows() > 0)
       {
           foreach ($query->result() as $row)
           {
                 $result=array('sno'=>$row->sno,
                 'name'=> $row->name,
				 'pwd'=>$row->pwd,
                 'email'=>$row->email,
				 'mobile'=>$row->mobile,
				 'stn'=>$row->stn,
				 'tper'=>$row->tper
				 );

          }
       }
	   return $result;
	
	}
	function update_data($data)
	{
	   
	   $this->db->update('vendorinfo',$data,array('sno'=>$data['sno']));

	
	}
	
 
 
 
 
 }