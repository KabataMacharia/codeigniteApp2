<?php
use telesign\sdk\messaging\MessagingClient;
use function telesign\sdk\util\randomWithNDigits;
//include './telesign/api.class.php';
class Admin_model extends CI_Model {

		       function __construct()
			   {
						
			   }

				public function lastnumber(){
				$query=$this->db->get('plastnumbers');
				
				foreach ($query->result() as $row)
					{
				$member=$row->member_no;
					}
				$number_of_digits = strlen($member);
				switch($number_of_digits ){
				case "1":
				$memberno= "M-000000".$member;
				break;
				case "2":
				$memberno= "M-00000".$member;
				break;
				case "3":
				$memberno= "M-0000".$member;
				break;
				case "4":
				$memberno= "M-000".$member;
				break;
				case "5":
				$memberno= "M-00".$member;
				break;
				case "6":
				$memberno= "M-0".$member;
				break;
				case "7":
				$memberno= "M-".$member;
				break;
			
			}
			
			$no = $member +1;
			$this->db->set('member_no',$no);
			$this->db->update('plastnumbers');
			return $memberno;
			}

				public function verify_user($email,$password){
				$this->db->where('email',$email);
				$this->db->where('deleted','N');
				$this->db->where('active','Y');
				$this->db->where('password',sha1($password));
				$query = $this->db->get('login');
				if($query->num_rows()>0)
				{
				return $query->row();
				}
				else
				{
				$this->db->where('email',$email);
				$this->db->where('deleted','N');
				$this->db->where('active','N');
				$this->db->where('password',sha1($password));
				$query = $this->db->get('login');
				
				if($query->num_rows()>0)
				{
				echo "Sorry,your account is not activated!";
				}else
				{		
				echo "Your email or password is incorrect!!!";
				return false;
				}
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
	
		        $no = $this->lastnumber();
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
				'member_no'=>$no,
				'fname' =>trim($this->input->post('fname')),
			    'lname' =>trim($this->input->post('lname')),
				'email' =>trim($this->input->post('email')),
				'address' =>trim($this->input->post('address')),
				'phone' =>trim($this->input->post('code'))."".trim($this->input->post('phone')),
				'deleted' =>'N',
				'userrole' => 'member',
				'active' =>'N',
				'photo'=>$file
				);	
				$this->db->insert('member', $data);
				$logindata = array(
				'userid'=>$no,
				'email' =>trim($this->input->post('email')),
				'password' => sha1(trim($this->input->post('cpassword'))),
				'username' => trim($this->input->post('fname'))." ".trim($this->input->post('lname')),
				'userrole' => 'member',
				'photo'=>$file,
				'active' => 'N',
				'deleted' => 'N'
				);
				$this->db->insert('login', $logindata); 
				if($this->db->affected_rows() > 0)
				{
                echo '1';
		
				}
				else
				{
				echo "You are not registered.";					
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
		    echo "This Email Exists!! Please use another email";
			}	
			
		   } 
		   public function updateMember()
		   {
				$id = $_SESSION['userid'];
				
			 	$data = array(
				'fname' =>trim($this->input->post('fname')),
			    'lname' =>trim($this->input->post('lname')),
				'email' =>trim($this->input->post('email')),
				'phone' =>trim($this->input->post('phone')),
				'address' =>trim($this->input->post('address'))
				);	
				$logindata = array(
				'username' =>trim($this->input->post('fname'))." ". trim($this->input->post('lname')),
				'email' =>trim($this->input->post('email')),
				);
				$this->db->where('member_no',$id);
				$this->db->update('member', $data);
				
				$this->db->where('userid',$id);
				$this->db->update('login', $logindata);
				if($this->db->affected_rows() > 0)
				{
			   echo "1";		
				}
				else
				{
				echo "Profile not edited";					
				}  
		   }
		   		  public function updateMemberPic()
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
				$id = $_SESSION['userid'];
				
			 	$data = array(
				'photo' =>$file
				);	
				$this->db->where('member_no',$id);
				$this->db->update('member', $data);
				$this->db->where('userid',$id);
				$this->db->update('login', $data);
				
				if($this->db->affected_rows() > 0)
				{
			   echo "1"	;
				}
				else
				{
				echo "Profile Picture not edited";					
				}  
		   }
		   	 public function deleteMember()
		   {
				$id = $_SESSION['userid'];
				
			 	$data = array(
				'deleted' =>'Y'
				);	
				$this->db->where('member_no',$id);
				$this->db->update('member', $data);
				$this->db->where('userid',$id);
				$this->db->update('login', $data);
				
				if($this->db->affected_rows() > 0)
				{
			   echo "1";		
				}
				else
				{
				echo "Profile not deleted";					
				}  
		   }
          public function forgotPassword()
		 {	 
			$username = $this->input->post('email');	
			$this->db->where('email',$username);	
			$this->db->where('deleted','N');			
			$query = $this->db->get('login');	
			if($query->num_rows()>0)
			{
				
				$token=mt_rand(); 
				$base= base_url();
				$link=htmlspecialchars($base."index.php/admin/retrieve/$token");
				$data = array(
				'token'=>$token
				);	
				$this->db->update('login', $data);
				if($this->db->affected_rows() > 0)
				{
			    echo "<font color='blue' size='5'>Password Link is sent to your email";		
			   	$config['mailtype'] = 'html';
				$config['protocol']='smtp';
				$config['smtp_host']='ssl://smtp.googlemail.com';
				$config['smtp_port']=465;
				$config['smtp_user']='brendahtest@gmail.com';
				$config['smtp_pass']='mambo2017';
				$this->load->library('email',$config);
				$this->email->set_newline("\r\n");
				
			   $this->email->set_mailtype("html");
			   $this->email->from('brendahtest@gmail.com');
			   $this->email->to($username);
			   $this->email->subject('Password Link from Login Application');
			   $this->email->message('Please click on this link to retrieve your password '.$link);
				$true= @$this->email->send();			
			}
		
		 }
		 else
		{
		 echo "The email is not registered in our system";
		}
		 }		
		public function retrieve()
		{
		  if($this->uri->segment('3')!=null)
		  {
			$token=$this->uri->segment('3');
			$this->db->where('token',$token);	
			$this->db->where('deleted','N');			
			return $this->db->get('login');	
		    }

		}		 
         public function getUser()
		 {
			 $id = $_SESSION['userid'];
			 $this->db->where('member_no',$id);
			 $this->db->where('deleted','N');
			 $query = $this->db->get('member');
			if($query->num_rows()>0)
			{
			return $query->row();
					
			}else
			{
			return false;
			} 
		 }	
         public function getInactiveMembers()
		 {
			 
			 $this->db->where('userrole','member');
			 $this->db->where('deleted','N');
			 $this->db->where('active','N');
			 $query = $this->db->get('member');
			if($query->num_rows()>0)
			{
			return $query->result();
					
			}else
			{
			return false;
			} 
		 }	
		      public function getActiveMembers()
		 {
			 
			 $this->db->where('userrole','member');
			 $this->db->where('deleted','N');
			 $this->db->where('active','Y');
			 $query = $this->db->get('member');
			if($query->num_rows()>0)
			{
			return $query->result();
					
			}else
			{
			return false;
			} 
		 }
      public function getMembersNo()
		 {
			 
			 $this->db->where('userrole','member');
			 $this->db->where('deleted','N');
			 $this->db->where('active','Y');
			 $query = $this->db->get('member');
			 return $query->num_rows();
			 
		 }			 
      public function uploadProfilePic()
	  {
			if(!isset($_FILES['file']))
			{
				echo $_FILES['file'];
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
	  }	  
         public function changePassword()
		 {	
			 $id = $_SESSION['userid'];	
			$password = sha1(trim($this->input->post('oldpassword')));	
			$newpassword = sha1(trim($this->input->post('retypepassword')));
			$this->db->where('userid',$id);
			$this->db->where('password',$password);	
			$this->db->where('deleted','N');	
			$this->db->where('active','Y');			
			$query = $this->db->get('login');	
			if($query->num_rows()>0)
			{
				$data = array(
				'password' =>$newpassword
				);	
				$this->db->where('userid',$id);
				$this->db->update('login', $data);		
				if($this->db->affected_rows() > 0)
				{
			    echo "1";	
				}
				else
				{
				echo "Your Password has not Changed";		
				}
			}
			else
			{
			  echo "The old password is incorrect";
			}	
		 }	
		     public function recoverPassword()
		 {		
			$newpassword = sha1(trim($this->input->post('cpassword')));
	        $token=trim($this->input->post('token'));
			$this->db->where('token',$token);	
			$this->db->where('deleted','N');			
			$query = $this->db->get('login');	
			if($query->num_rows()>0)
			{
				$data = array(
				'password' =>$newpassword
				);	
			    $this->db->where('token',$token);	
				$this->db->update('login', $data);		
				if($this->db->affected_rows() > 0)
				{
			    echo "Your Password has Changed.";	
				}
				else
				{
				echo "Your Password has not Changed";		
				}
			}
	
		 }	
		 public function activateMember($memberno)
		 {
				$this->db->set('active', 'Y');
				$this->db->where('member_no',$memberno);
				$this->db->update('member');
				$this->db->set('active', 'Y');
				$this->db->where('userid',$memberno);
				$this->db->update('login');
				if($this->db->affected_rows() > 0)
				{
			   echo "1";		
				}
				else
				{
				echo "Member not activated";					
				} 
              
        }
			 public function deactivateMember($memberno)
		 {
				$this->db->set('active', 'N');
				$this->db->where('member_no',$memberno);
				$this->db->update('member');
				$this->db->set('active', 'N');
				$this->db->where('userid',$memberno);
				$this->db->update('login');
				if($this->db->affected_rows() > 0)
				{
				
			   echo "1";		
				}
				else
				{
				echo "Member not deactivated";					
				} 
              
        }
		/*public function smsVerification()
		{
			$customer_id = "customer_id";
			$secret_key = "secret_key";

			$verify = new Verify($customer_id, $secret_key);
			date_default_timezone_set('Africa/Nairobi'); 
			$phone_info = $verify->sms('phone_number');
			$user_entered_verifycode = "user_inputted_verification_code";
			$status_info = $verify->status($phone_info['reference_id'], $verify_code = $user_entered_verifycode);
			if(($status_info['verify']['code_state'] == "VALID"))
			{
				
			}
		}*/
}
?>
