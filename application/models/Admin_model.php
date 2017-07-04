<?php
use telesign\sdk\messaging\MessagingClient;
use function telesign\sdk\util\randomWithNDigits;
class Admin_model extends CI_Model {

function __construct(){
	
}

	
			public function verify_user($email, $password){
				$this->db->where('email',$email);
				$this->db->where('deleted','N');
				$this->db->where('password',sha1($password));
				$query = $this->db->get('login');
				if($query->num_rows()>0)
				{
				return $query->row();
				}
				else
				{
				 return false;
				}       
			   }
		public function send_code(){
			$customer_id = "60F9F943-9922-4DAB-BAF9-E99EA60588B7";
			$api_key = "gnA2lqz91z+XLo7DnVUEjg6EtLUeT1VP1fBfG9z1FiK8kwqdQaCLeAaHqqkqSzIebxaJEMqWz27/0ObqKeFL1A==";
			$phone_number = "254707963603";
			$message_type = "OTP";
			$verify_code = randomWithNDigits(5);
			$message = $verify_code;
			//$message = "Your code is $verify_code";
			$messaging = new MessagingClient($customer_id, $api_key);
			$response = $messaging->message($phone_number, $message, $message_type);

			return $verify_code;


				}

	public function saveMember()
		{
				$data=$this->uploadProfilePic();
				if($data=='')
				{
					$file='';
				}
				else
				{
			   $file=$data['file_name'];
				}
				$data = array(
				'fname' =>trim($this->input->post('fname')),
			    'lname' =>trim($this->input->post('lname')),
				'email' =>trim($this->input->post('email')),
				'password' => sha1(trim($this->input->post('cpassword'))),
				'deleted' =>'N',
				'photo'=>$file
				);	
				$this->db->insert('login', $data);
				if($this->db->affected_rows() > 0)
				{
			   echo "<font color='blue' size='5'>You have registered successfully.Click Login!!</font>";		
				}
				else
				{
				echo "<font color='red' size='5'>You are not registered.</font>";					
				}					
		}	
		 public function checkEmail()
		 {
			$username = trim($this->input->post('email'));
			$this->db->where('email',$username);
			$this->db->where('deleted','N');			
			$query = $this->db->get('login');
			if($query->num_rows()==0)
			{
			$this->saveMember();
			}else{
		    echo "<font color='red' size='5'>This Email Exists!! Please use another email</font>";
			}	
			
		   } 
		   public function updateMember()
		   {
				$id = $_SESSION['userid'];
				$this->db->where('id',$id);
			 	$data = array(
				'fname' =>trim($this->input->post('fname')),
			    'lname' =>trim($this->input->post('lname')),
				'email' =>trim($this->input->post('email'))
				);	
				$this->db->update('login', $data);
				
				if($this->db->affected_rows() > 0)
				{
			   echo "<font color='blue' size='5'>Profile successfully edited</font>";		
				}
				else
				{
				echo "<font color='red' size='5'>Profile not edited</font>";					
				}  
		   }
		   	 public function deleteMember()
		   {
				$id = $_SESSION['userid'];
				$this->db->where('id',$id);
			 	$data = array(
				'deleted' =>'Y'
				);	
				$this->db->update('login', $data);
				
				if($this->db->affected_rows() > 0)
				{
			   echo "<font color='blue' size='5'>Profile successfully deleted</font>";		
				}
				else
				{
				echo "<font color='red'>Profile not deleted</font>";					
				}  
		   }
          public function forgotPassword()
		 {	
			$username = $this->input->post('email');	
			$password = sha1($this->input->post('password'));	
			$confirmpassword = sha1($this->input->post('confirm'));
			$this->db->where('email',$username);					
			$query = $this->db->get('login');	
			if($query->num_rows()>0){
				$data = array(
				'password' =>$confirmpassword
				);	
				$this->db->where('email',$username);
				$this->db->update('login', $data);		
				if($this->db->affected_rows() > 0)
				{
			    echo "<font color='blue' size='5'>Your Password has Changed. You can login</font>";	
				}else{
				echo "<font color='red' size='5'>Your Password has not Changed</font>";		
				}
			}else{
			  echo "<font color='red' size='5'>The email is not registered in our system</font>";
			}	
		 }		
         public function getUser()
		 {
			 $id = $_SESSION['userid'];
			 $this->db->where('id',$id);
			 $this->db->where('deleted','N');
			 $query = $this->db->get('login');
			if($query->num_rows()>0)
			{
			return $query->row();
					
			}else
			{
			return false;
			} 
		 }		
      public function uploadProfilePic()
	  {
		  //if((isset($_SESSION['userid'])))
		//  {
			if(!isset($_FILES['file']))
			{
				return $data='';
			}
			else
			{
				$config['upload_path'] = realpath(APPPATH.'../images');
			    $config['allowed_types']        = 'jpg|png|jpeg|JPEG|PNG|gif';
                $config['max_size']             = 10000000000;
                $config['max_width']            = 100000000024;
                $config['max_height']           = 70000000068;

                $this->load->library('upload', $config);
                if ( ! $this->upload->do_upload('file'))
                {
                      $error = array('error' => $this->upload->display_errors());

                     print_r($error);
                }
                else
                {
                        return $data = $this->upload->data();
                }
			}  
		  //}
	  }	  
}
?>
