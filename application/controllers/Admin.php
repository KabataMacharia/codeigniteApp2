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
		public function profile()
		{
		    $result=  $this->Admin_model->getUser();
			$data['fname'] = $result->fname;
			$data['lname'] = $result->lname;
			$data['email'] = $result->email;
		    $this->load->view('table_header');
		    $this->load->view('profile',$data);
			$this->load->view('table_footer');
		}
		public function registration()
		{
			$data['title'] = 'Register';
		    $this->load->view('registration_view',$data);
		}

		public function password()
		{
			$data['title'] = 'Forgot Password';
			$this->load->view('table_header');
		    $this->load->view('forgotpassword_view',$data);
		}
		public function login(){
			$email= $this->input->post('email_address');
		    $password= $this->input->post('password');
            $result=  $this->Admin_model->verify_user($email, $password);
		      if($result!==false)
			    {
				$_SESSION['photo']=$result->photo;
				$_SESSION['fname']=$result->fname;
				$_SESSION['lname']=$result->lname;
				$_SESSION['userid']=$result->id;
				$code=  $this->Admin_model->send_code();
				$_SESSION['code']=$code;
				echo '1';
				}
				else
				{
				echo "<font color='red' size='5'>Your email or password is incorrect!!!</font>";
				}
			
		}
		public function registermember()
		{
	    $this->Admin_model->checkEmail();
		}
		public function deleteMember()
		{
	    $this->Admin_model->deleteMember();
		}
		public function updateMember()
		{
	    $this->Admin_model->updateMember();
		}
		public function  updateMemberPic()
		{
	    $this->Admin_model-> updateMemberPic();
		}
		public function forgotPassword()
		{
		$this->Admin_model->forgotPassword();
		
		}
		public function changePassword()
		{
		$this->Admin_model->changePassword();
		
		}
		public function logout(){
		session_destroy();
	    redirect('admin');
		exit;
		echo 'You are logout';
	     }
         public function getUser()
		 {
			$this->Admin_model->getUser(); 
		 }
}
?>