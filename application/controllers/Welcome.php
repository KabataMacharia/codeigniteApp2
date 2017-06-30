<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
			parent::__construct();
		 if(!isset($_SESSION['username'])){
			 redirect('admin');
		 }
		}
	public function index()
	{
		$this->load->view('welcome_message');
	}
}
