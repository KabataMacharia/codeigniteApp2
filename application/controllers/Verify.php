<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Verify extends CI_Controller {
		function __construct(){
			parent::__construct();
		    $this->load->model('Admin_model');
		}

	public function index(){
	//$data['code']=$_SESSION['code'];
	$data['title'] = 'Verification';
    $this->load->view('verification',$data);
	}
		 
	public function verifycode()
	{
     
	if($this->input->post('ajax') == '1') {
	$this->form_validation->set_rules("code", "Code", "required");
	    if ($this->form_validation->run() !==FALSE)
              {
			$code=$_SESSION['code'];
			$user_entered_verify_code=$this->input->post('code');
			if ($code == $user_entered_verify_code) {
			 echo '1';
			}
			else {
			 echo '0';
			}	
              }ELSE{?>
				  	  <h4 style='color:red'><?php echo validation_errors();?></h4>
					  <?PHP
			  }

			
		
	}else{
		$this->load->view('verification');
	}
	
	}
		public function logout(){
		session_destroy();
	    redirect('admin');
		exit;
		echo 'You are logout';
		
	}

}
?>