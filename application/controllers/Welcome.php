<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
			parent::__construct();
		}
	public function index()
	{
		if(!isset($_SESSION['userid']))
		{
			 redirect('admin');
		}
		 else
		 {
		 if(isset($_SESSION['userid']) && $_SESSION['userid']=='admin')
		 {
	     $this->load->view('table_header');
		 $this->load->view('home');
	
		 }else
		 {
		 $this->load->view('table_header');
		 $this->load->view('memberpage');
		
		 }
		 }
	}
}
