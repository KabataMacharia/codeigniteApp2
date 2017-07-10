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
			$userrole= $result->userrole;
			$data['fname'] = $result->fname;
			$data['lname'] = $result->lname;
			$data['email'] = $result->email;
			$data['address'] = $result->address;
			$data['phone'] = $result->phone;
			$data['photo'] = $result->photo;
			if($result=='admin')
			{
			 $this->load->view('table_header',$data);
		    $this->load->view('profile',$data);	
			}
			else
			{
			$this->load->view('member_header',$data);
		    $this->load->view('profile',$data);		
			}
		  
			}
		}
		public function registration()
		{
			
			$result=  $this->Admin_model->getCountries();
			$userrole=  $this->Admin_model->getUserrole();
			
			$data['title'] = 'Register';
			$data['result'] = $result;
			$data['userrole'] = $userrole;
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
		      if($result!==false && $result!="")
			    {
				$_SESSION['username']=$result->username;
				$_SESSION['userid']=$result->userid;
				$_SESSION['userrole']=$result->userrole;
				$code=  $this->Admin_model->send_code();
				$_SESSION['code']=$code;
				echo '1';
				}	
		}
		
		public function inactivemembers()
		{
		 $result=  $this->Admin_model->getUser();
		 $data['photo'] = $result->photo;
		 if(isset($_SESSION['userid']) && $_SESSION['userrole']=='admin')
		 {
		$members=  $this->Admin_model->getInactiveMembers();
		if($members!="")
		{
		$data['members'] = $members;
		}else{
		 $data['members'] = "";
		}
	    $this->load->view('table_header',$data);
		$this->load->view('inactivemembers_view',$data);
	    $this->load->view('table_footer');
		 }
		}

		public function userrole()
		{
			if(isset($_SESSION['userid']) && $_SESSION['userrole']=='admin')
		{
		$result=  $this->Admin_model->getUser();
		$data['photo'] = $result->photo;
		$userroles=  $this->Admin_model->getUserrole();
		if($userroles!="")
		{
		$data['userroles'] = $userroles;
		}else{
		 $data['userroles'] = "";
		}
		$this->load->view('table_header',$data);
		$this->load->view('userrole_view',$data);
	    $this->load->view('table_footer');	
		}
		}
				public function country()
		{
			if(isset($_SESSION['userid']) && $_SESSION['userrole']=='admin')
		 {
		$result=  $this->Admin_model->getUser();
		$data['photo'] = $result->photo;
		$countries=  $this->Admin_model->getCountries();
		if($countries!="")
		{
		$data['countries'] = $countries;
		}else{
		 $data['countries'] = "";
		}
		$this->load->view('table_header',$data);
		$this->load->view('country_view',$data);
	    $this->load->view('table_footer');	
		}
		}
		public function activemembers()
		{
		 $result=  $this->Admin_model->getUser();
		 $data['photo'] = $result->photo;
		 if(isset($_SESSION['userid']) && $_SESSION['userrole']=='admin')
		 {
		$members=  $this->Admin_model->getActiveMembers();
		if($members!="")
		{
		$data['members'] = $members;
		}else{
		 $data['members'] = "";
		}
	    $this->load->view('table_header',$data);
		$this->load->view('members_view',$data);
	    $this->load->view('table_footer');
		 }
		}
		public function registermember()
		{
	    $this->Admin_model->checkEmail();
		}
		public function addcountry()
		{
	    $this->Admin_model->addcountry();
		}
		public function adduserrole()
		{
	    $this->Admin_model->adduserrole();
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
		 public function activateMember()
		{
		$id = $this->input->post('id');
		$this->Admin_model->activateMember($id);
	
		}
	    public function deactivateMember()
		{
		$id = $this->input->post('no');
		$this->Admin_model->deactivateMember($id);
		}
	   public function deleteCountry()
		{
		$id = $this->input->post('id');
		$this->Admin_model->deleteCountry($id);
		}
		public function deleteUserrole()
		{
		$id = $this->input->post('id');
		$this->Admin_model->deleteUserrole($id);
		}
		public function editCountry(){

	    if(isset($_SESSION['userid']) && $_SESSION['userrole']=='admin')
		 {
	    $result=  $this->Admin_model->getUser();
		$data['photo'] = $result->photo;
		
		$country = $this->Admin_model->getCountryId();

	   if($country!="")
		{
		$data['country'] = $country;
		$this->load->view('table_header',$data);
		$this->load->view('country_editview',$data);
	    $this->load->view('table_footer');
		}
		else
		{
		 $data['country'] = "";
		 $data['error']="The country does not exist!";
		 $this->load->view('table_header',$data);
		 $this->load->view('country_editview', $data);
		 $this->load->view('table_footer');
		}
		
		 }
		}
		public function editUserrole(){

	    if(isset($_SESSION['userid']) && $_SESSION['userrole']=='admin')
		 {
	    $result=  $this->Admin_model->getUser();
		$data['photo'] = $result->photo;
		
		$userrole = $this->Admin_model->getUserroleId();

	   if($userrole!="")
		{
		$data['userrole'] = $userrole;
		$this->load->view('table_header',$data);
		$this->load->view('userole_editview',$data);
	    $this->load->view('table_footer');
		}
		else
		{
		 $data['userrole'] = "";
		 $data['error']="The userrole does not exist!";
		 $this->load->view('table_header',$data);
		 $this->load->view('userole_editview', $data);
		 $this->load->view('table_footer');
		}
		
		 }
		}
		   public function updateCountry()
		 {
			$this->Admin_model->updateCountry(); 
		 }
		   public function updateUserrole()
		 {
			$this->Admin_model->updateUserrole(); 
		 }
}
?>