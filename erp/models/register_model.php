<?php

class Register_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
		
	}

	public function run()
	{
		$email = $_POST['email'];
		$mobno = $_POST['mobno'];
		$username =$_POST['username'];
		$result= $this->db->select("SELECT * FROM `admin` WHERE (username = '".$username."' OR email = '".$email."' OR mobno = '".$mobno."')");
		$count = count($result);
		return $count;
				
	}
	public function run1($data1)
	{
		$returnId=$this->db->insert('admin', $data1);
		return $returnId;
		
	}
	public function otp_verified($data,$arg)
	{
		//print_r($data);
		//echo $arg;
		$this->db->update('admin', $data,
				"`admin_id` = $arg");
	}
	public function otp_not_verified($data,$arg)
	{
		//print_r($data);
		//echo $arg;
		$this->db->update('admin', $data,
				"`admin_id` = $arg");
	}
	//UPDATE `admin` SET `status` = 'verified' WHERE `mobno` = $mobno;
	public function checkuser($data)
	{
		$email=$_POST['email'];
		//echo $email;
		//$sth = $this->db->select("SELECT * FROM `users` WHERE email='$email'");
		//$sth = $this->db->prepare("SELECT * FROM admin WHERE email = :email");
		$res= $this->db->select("SELECT * FROM `admin` WHERE email = '".$email."' ");
		//print_r($res);
		$count = count($res);
		if ($count > 0) {
		$fname=$res['fname'];
		$reset=md5($email);
		$subject="Password Reset Request liveratrack.com!";
	    $message="Hello $fname,<br />
  
You recently requested to reset your password. To complete your request, please click the following link<br /><br />

<a href='".URL."register/resetpassword/$reset'>CLICK HERE TO RESET</a><br /><br />
 
If you hadn't made this request you can ignore this message<br />

Regards<br />
 
liveratrack.com  Customer Service Staff<br />
 
For comments, questions, or suggestions you can email us at:
info@Wliveratrack.com";

		$email = new Email();
		$email->bcc(EMAIL);
		//$email->send($data['email'],EMAIL,$subject,$message);
		
		//header('location: request');
		} else {
		$str = '<div id="error">The email provided is not registered with us !</div>';
		throw new Exception($str);
			
			}
	}
	public function randomPassword() {
    $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
    $pass = array(); //remember to declare $pass as an array
		for ($i = 0; $i < 8; $i++) {
			$n = rand(0, strlen($alphabet)-1); //use strlen instead of count
			$pass[$i] = $alphabet[$n];
		}
		//echo implode($pass);
    return implode($pass); //turn the array into a string
	}
	public function resetpassword($arg) {
       $password=$this->randomPassword();
		$newdata = array('password' => md5($password));
		$this->db->update('admin', $newdata,
				"md5(email) = '$arg'");
		
		$data = $this->db->select("SELECT * FROM `admin` WHERE md5(email)='$arg'");
		//print_r($data);
		$fname = $data[0]['fname'];
		$email = $data[0]['email'];
		
		$subject="Your New Password at liveratrack.com!";
		$message="Hello $fname,<br />
  
Your new login details are :<br /><br />

Username : $email <br />
Password : $password<br /><br />

Regards<br />
 
liveratrack.com  Customer Service Staff<br />
 
For comments, questions, or suggestions you can email us at:
info@liveratrack.com";
		$email = new Email();
		$email->bcc(EMAIL);
		$email->send($emailnew,EMAIL,$subject,$message);
		//echo "$emailnew,".EMAIL.",$subject,$message";
	}
	public function error($msg)
	{
		return '<div id="error">'.$msg.'</div>';
	}
	
	
		
}