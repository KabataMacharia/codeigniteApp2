<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Verify extends CI_Controller {
		function __construct(){
			parent::__construct();
		    $this->load->model('Admin_model');
		}

	public function index(){
	$data['title'] = 'Verification';
    $this->load->view('table_header');
    $this->load->view('verification',$data);
	}
		 
	public function verifycode()
	{
			$code=$_SESSION['code'];
			$user_entered_verify_code=$this->input->post('code');
			if ($code == $user_entered_verify_code) 
			{
				echo '1';
				redirect('welcome');
			 
			}
			else 
			{
			echo "<font color='red'>Please enter the correct code.</font>";
			}
		$this->load->view('verification');
	}
		public function logout(){
		session_destroy();
	    redirect('admin');
		exit;
		echo 'You are logout';
		
	}

}
?>