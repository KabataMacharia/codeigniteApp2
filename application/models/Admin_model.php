<?php
use telesign\sdk\messaging\MessagingClient;
use function telesign\sdk\util\randomWithNDigits;
class Admin_model extends CI_Model {

function __construct(){
	
}	
public function verify_user($email, $password){
	$this->db->where('email',$email);
    $this->db->where('password',sha1($password));
	$query = $this->db->get('login');
	if($query->num_rows()==1){
		return $query->row();
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
print_r($response);

}
	 		
}
?>
