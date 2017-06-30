<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$data['title'] = 'Fortune Club';
		$this->load->view('login',$data);
	}
	public function ajax_check() {
	if($this->input->post('ajax') == '1') {
	$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', array('required' => 'You must provide a %s.'));
	$this->form_validation->set_rules('password', 'Password', 'trim|required', array('required' => 'You must provide a %s.'));
	if($this->form_validation->run() == FALSE) {?>
	
	  <h4 style='color:red'><?php echo validation_errors();?></h4>
	  <?php
	} else {
	$user = $this->db->get_where("login",array("email"=>$this->input->post('email'),"hashed_password"=>sha1($this->input->post('password'))));
	  
	   if($user->num_rows()==1) {
		foreach ($user->result() as $row);
			
        $username = $row->username;
		$usertype = $row->user_type;
		$userid = $row->user_id;
		$userno = $row->staff_no;
		$_SESSION['reports'] = $row->reports;
		$_SESSION['company_setup'] = $row->company_setup;
		$_SESSION['credit']= $row->credit;
		$_SESSION['payment']= $row->payment;
		$_SESSION['statement']= $row->statement;
	    $loggedin=true;
		$_SESSION['loggedin'] = true;
		$_SESSION['username'] = $username;
		$_SESSION['usertype'] = $usertype;
		$_SESSION['userid'] = $userid;
		$_SESSION['userno'] = $userno;
		$this->emailnotification();
		echo 1;
 	
		
	}else{?>
	<h4><?php echo 'Your username/password is incorrect; Please try again'; ?></h4>
	<?php
	}
		

	}
	}
	}
public function emailnotification(){
	

	 if($_SESSION['userno']=='administrator'){
		 
	 }else{
	
	 $user=$_SESSION['userno'];
   $e=$this->db->query("SELECT staff_email,reg_no FROM staff WHERE staff_no='{$user}' AND deleted='N'");
	foreach ($e->result() as $row);
        
   $FROM=$row->staff_email;
   $Toyy=$row->reg_no;
    $period=$this->db->query("SELECT reminder_period FROM company WHERE deleted='N'");
	foreach ($period->result() as $r);
        
   $reminderperiod=$r->reminder_period; 
	
	 date_default_timezone_set('Africa/Nairobi');
    $date = date_create(date("Y-m-d"));
   $query=$this->db->query("SELECT * FROM notification WHERE sent_from='{$FROM}' AND sent_status='N'");
   foreach ($query->result() as $row)
        {
	 $emaildate=date_create($row->email_date);
    $TOSTAFF=$row->sent_to;
	 $staffmsg=htmlspecialchars_decode($row->message);
	 "<a href='{$staffmsg}'>Click here</a>";
	 $staffSUB=$row->subject;
	 $diff=date_diff($date,$emaildate);
	 $difference=$diff->format('%a');
     date_sub($date,date_interval_create_from_date_string($difference." days"));
     $d=date_format($date,"Y-m-d");
	 if($difference>$reminderperiod){
	
   $FA=$this->db->query("SELECT staff_email FROM staff WHERE user_type='First Approver'");
	foreach ($FA->result() as $r);
        
    $FAemail=$r->staff_email; 
	$SA=$this->db->query("SELECT staff_email FROM staff WHERE user_type='Second Approver'");
	foreach ($SA->result() as $r);
        
    $SAemail=$r->staff_email; 	
	
    $AFA=$this->db->query("SELECT staff_email FROM staff WHERE user_type='Alternative First Approver'");
	foreach ($AFA->result() as $r);
        
    $AFAemail=$r->staff_email; 
	$ASA=$this->db->query("SELECT staff_email FROM staff WHERE user_type='Alternative Second Approver'");
	foreach ($ASA->result() as $r);
        
    $ASAemail=$r->staff_email; 
	
		if($TOSTAFF==$FAemail){	
		$config['mailtype'] = 'html';
		$config['protocol']='smtp';
		$config['smtp_host']='ssl://smtp.googlemail.com';
		$config['smtp_port']=465;
		$config['smtp_user']='khalifwab@gmail.com';
		$config['smtp_pass']='namulanda1973';
		$this->load->library('email',$config);
		$this->email->set_newline("\r\n");
		
	   $this->email->set_mailtype("html");
	   $this->email->from($FROM );
	   $this->email->to($AFAemail);
	   $this->email->subject($staffSUB);
	   $this->email->message($staffmsg);
	   $true= @$this->email->send();
	  
		if($true==true){
		$this->db->query("UPDATE notification SET sent_status='R',sent_to='{$AFAemail}' WHERE sent_from='{$FROM}'");
		$this->db->query("UPDATE receipt SET firstapproval='Y',firstapprovalredirect='R' WHERE reg_no='{$Toyy}' AND 
		transaction_date='{$d}' AND firstapproval='N' AND secondapproval='N'");
	   }else{
	   }	
	
	}else{
		$config['mailtype'] = 'html';
		$config['protocol']='smtp';
		$config['smtp_host']='ssl://smtp.googlemail.com';
		$config['smtp_port']=465;
		$config['smtp_user']='khalifwab@gmail.com';
		$config['smtp_pass']='namulanda1973';
		$this->load->library('email',$config);
		$this->email->set_newline("\r\n");
		
	   $this->email->set_mailtype("html");
	   $this->email->from($FROM );
	   $this->email->to($ASAemail);
	   $this->email->subject( $staffSUB);
	   $this->email->message($staffmsg);
	   $true= @$this->email->send();
		if($true==true){
		$this->db->query("UPDATE notification SET sent_status='R',sent_to='{$ASAemail}' WHERE sent_from='{$FROM}'");
		$this->db->query("UPDATE receipt SET secondapproval='Y',secondapprovalredirect='R' WHERE reg_no='{$Toyy}' 
		AND transaction_date='{$d}' AND firstapproval='N' AND secondapproval='N'");
	   }else{
	   }	
	
	}
	
	 }else{	
		$config['mailtype'] = 'html';
		$config['protocol']='smtp';
		$config['smtp_host']='ssl://smtp.googlemail.com';
		$config['smtp_port']=465;
		$config['smtp_user']='khalifwab@gmail.com';
		$config['smtp_pass']='namulanda1973';
		$this->load->library('email',$config);
		$this->email->set_newline("\r\n");
		
	   $this->email->set_mailtype("html");
	   $this->email->from($FROM );
	   $this->email->to($TOSTAFF);
	   $this->email->subject( $staffSUB);
	   $this->email->message($staffmsg);
	   $true= @$this->email->send();
		if($true==true){
		$this->db->query("UPDATE notification SET sent_status='Y' WHERE sent_from='{$FROM}' AND sent_to='{$TOSTAFF}'");
	   }else{
	   }	

	   
		}
		}
	
   }
}
	public function logout(){
		session_destroy();
	    redirect('login/index');
		exit;
		echo 'You are logout';
		
	}
}
?>