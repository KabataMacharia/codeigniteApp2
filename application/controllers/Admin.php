<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
		function __construct(){
			parent::__construct();
		    $this->load->model('Admin_model');
		}
	 	  public function index()
		{
			$data['title'] = 'Login App';
		    $this->load->view('login_view',$data);
		}
		public function registration()
		{
			$data['title'] = 'Register';
		    $this->load->view('registration_view',$data);
		}
		public function password()
		{
			$data['title'] = 'Forgot Password';
		    $this->load->view('forgotpassword_view',$data);
		}
		public function login(){
			$email= $this->input->post('email_address');
		    $password= $this->input->post('password');
             $result=  $this->Admin_model->verify_user($email, $password);
		      if($result!==false){
				 
				$_SESSION['username']=$result->fname;
				$code=  $this->Admin_model->send_code();
				$_SESSION['code']=$code;
				echo '1';
				}
			
		}
		public function registermember(){
	    $result=  $this->Admin_model->checkEmail();
		}
		public function forgotPassword()
		{
		$this->Admin_model->forgotPassword();
		
		}
		public function logout(){
		session_destroy();
	    redirect('admin');
		exit;
		echo 'You are logout';
	     }

}
?>