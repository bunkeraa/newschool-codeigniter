<?php

class Evaluation extends CI_Controller {
	
public function __construct() 
 { 
            parent::__construct();
            $this->load->helper('url');	
            //會抓預設資料庫
            //也可以寫成$this->load->model('sfs3/sfs3_model')
            //$this->load->database();
            //底下這行就把所有database的指令含括進去
      //   $this->load->model('sfs3/sfs3_model', '', TRUE);
           
 }	
	
	
 
public function view()
{
			
	    
    $this->load->view('templates/header.php');
	$this->load->view('index.php');
	//$this->load->view('bootstrap/maps.html');
	$this->load->view('templates/footer.php');
}
 
public function a1()
{
			
	    
    $this->load->view('templates/header.php');
	$this->load->view('a1.php');
	//$this->load->view('bootstrap/maps.html');
	$this->load->view('templates/footer.php');
}

public function teaname()
{


//$this->db->select('*');
//$this->db->from('teacher_base');
$this->db->join('teacher_post', 'teacher_post.teacher_sn = teacher_base.teacher_sn');
$this->db->where('teach_condition', 0);
$post_kind2=array('1','2','4','6','7');
$this->db->where_in('post_kind',$post_kind2);
$this->db->order_by('post_kind', 'asc');       
$query = $this->db->get('teacher_base');
foreach ($query->result() as $row[])
{
        
$row2['all']=$row;

//        echo $row->name;
}			
$this->load->view('bootstrap/test/test.php',$row2);
}




}
