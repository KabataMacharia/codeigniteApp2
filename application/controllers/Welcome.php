<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
			parent::__construct();
			 $this->load->model('Admin_model');
		}
	public function index()
	{
		if(!isset($_SESSION['userid']))
		{
			 redirect('admin');
		}
		 else
		 {
		 $result=  $this->Admin_model->getUser();
		 $data['photo'] = $result->photo;
		 if(isset($_SESSION['userid']) && $_SESSION['userrole']=='admin')
		 {
	     $this->load->view('table_header',$data);
		 $this->load->view('home',$data);
	     $this->load->view('table_footer');
		 }else
		 {
		 $this->load->view('member_header',$data);
		 $this->load->view('memberpage');
		
		 }
		 }
	}
}
