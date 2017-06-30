<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
		function __construct(){
			parent::__construct();
		    $this->load->model('Admin_model');
		}
	 
	public function index()
	{
	/*if(isset($_SESSION['username'])){
			 redirect('welcome');
		 }*/
	if($this->input->post('ajax') == '1') {
	$this->form_validation->set_rules("email_address", "Email Address:","required|valid_email");
	$this->form_validation->set_rules("password", "Password", "required");
	    if ($this->form_validation->run() !==FALSE)
              {

			 $result=  $this->Admin_model->verify_user($this->input->post('email_address'),$this->input->post('password'));
			 
		      if($result==true){
				$_SESSION['username']=$this->input->post('email_address');
				$code=  $this->Admin_model->send_code();
				$_SESSION['code']=$code;
				echo '1';
				}	
              }ELSE{?>
				  	  <h4 style='color:red'><?php echo validation_errors();?></h4>
					  <?PHP
			  }

			
		
	}else{
		$this->load->view('login_view');
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