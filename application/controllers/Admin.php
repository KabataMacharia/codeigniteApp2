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
			if(!isset($_SESSION['userid']))
			{
				 redirect('admin');
			}
			else
			{
		    $result=  $this->Admin_model->getUser();
			$data['fname'] = $result->fname;
			$data['lname'] = $result->lname;
			$data['email'] = $result->email;
			$data['address'] = $result->address;
			$data['phone'] = $result->phone;
		    $this->load->view('table_header');
		    $this->load->view('profile',$data);
			$this->load->view('table_footer');
			}
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
			
		      if($result!==false)
			    {
				$_SESSION['photo']=$result->photo;
				$_SESSION['username']=$result->username;
				$_SESSION['userid']=$result->userid;
				$_SESSION['userrole']=$result->userrole;
				$code=  $this->Admin_model->send_code();
				$_SESSION['code']=$code;
				echo '1';
				}
				else
				{
				echo "<font color='red' size='3px'>Your email or password is incorrect!!!</font>";
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
		public function retrieve()
		{
		
		$q=$this->Admin_model->retrieve();
		if($q!=null)
		{
		$data['token'] = $this->uri->segment('3');
		 $this->load->view('changepassword_view',$data);	

		}
		else
		{
	    echo "Please use the correct link";  
		}
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
		  public function recoverPassword()
		 {
			$this->Admin_model->recoverPassword(); 
		 }
}
?>