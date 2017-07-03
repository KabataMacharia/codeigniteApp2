<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
			parent::__construct();
		 if(!isset($_SESSION['userid'])){
			 redirect('admin');
		 }
		}
	public function index()
	{
	    $this->load->view('table_header');
		$this->load->view('home');
		$this->load->view('table_footer');
	}
}
