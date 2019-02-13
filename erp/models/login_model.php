<?php

class Login_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
		Session::init();
	}

	public function run()
	{
		//echo "inside run";
		$username=$_POST['username'];
		//$email=$_POST['email'];
		$password=md5($_POST['password']);
		//$userType = $_POST['userType'];

		if($_POST["remember_me"]=='1' || $_POST["remember_me"]=='on')
                    {
                    $hour = time() + 3600 * 24 * 30;
                    setcookie('username', $login, $hour);
                    setcookie('password', $password, $hour);
					}
					//AND userType = '".$userType."'
	//	if($userType =='dealer'){
		//echo "SELECT * FROM `admin` WHERE username = '".$user."' AND password = '".$pass."'";
		$res= $this->db->select("SELECT * FROM `admin` WHERE (username = '".$username."' OR email= '".$username."') AND password = '".$password."' AND otp_verified='yes'");
	//	}
	//	else{
	//		$res= $this->db->select("SELECT * FROM `admin` WHERE (username = '".$username."' OR email= '".$username."') AND password = '".$password."' AND userType = '".$userType."'");
	//		}
		/*$sth = $this->db->prepare("SELECT * FROM admin WHERE 
				username = :username AND password = :password");
		$sth->execute(array(
			':username' => $_POST['username'],
			':password' => md5($_POST['password'])
		));
		
		$data = $sth->fetch();
		echo $count .'welcome';
		$count =  $sth->rowCount();
		*/
		$count = count($res);
		// echo '$count: '.$count; exit;
		// echo 'location: '.URL.'dashboard';
		// var_dump($res); exit;
		if ($count > 0) {
			// login
		//	Session::init();
			Session::set('role', "user");
			Session::set('loggedIn', true);
			Session::set('userType', $res[0]['userType']);
			Session::set('traccarID', $res[0]['traccarID']);
			Session::set('admin_id', $res[0]['admin_id']);
			Session::set('employeeID', $res[0]['employeeID']);
			Session::set('email', $res[0]['traccar_email']);
			Session::set('parent_traccarID', $res[0]['parent_traccarID']);
			Session::set('parent_id', $res[0]['parent_id']);
			Session::set('parent_userType', $res[0]['parent_userType']);
			//Session::set('email', $email);
			Session::set('password', $res[0]['pass']);
			Session::set('isVedanta', $res[0]['isVedanta']);
			Session::set('vedantaVendor', $res[0]['vedantaVendor']);
			Session::set('VedantaAuth', $res[0]['VedantaAuth']);
			Session::set('companyShortCode', $res[0]['companyShortCode']);
			Session::set('pass', $res[0]['password']);
			Session::set('username', $res[0]['username']);
            Session::set('product_type', $res[0]['product_type']);

			$data=array(
				'LastLogin'=>date('Y-m-d H:i:s'),
				'Platform' =>'Website'
				);	
			
				$this->db->update('admin',$data,"`username` ='$username'");	
			//Session::set('password', $password);
			header('location: '.URL.'dashboard?id='.$res[0]['admin_id']);
		} 
		   else {
			Session::set('loggedIn', false);
			header('location: '.URL.'ktcodisha/login');
		}
		/*if(Session::get('userType') == "dealer"){ 
		  header('location: '.URL.'vts/users');
		  }*/
		  
		
	}
	public function runMobile($username,$password)
	{


		//echo "SELECT * FROM `admin` WHERE username = '".$username."' AND password = '".$password."'";
		$res= $this->db->select("SELECT * FROM `admin` WHERE username = '".$username."' AND password = '".$password."'");

		
		$count = count($res);
		//echo $count;
		if ($count > 0) {
			$data=array(
				'LastLogin'=>date('Y-m-d H:i:s'),
				'Platform' =>'Mobile'
				);	
			
				$this->db->update('admin',$data,"`username` ='$username'");	
			return $res;
			//$json = array("status" => 1, "info" => $res);
	}else{
		//return $res;
		//$json = array("status" => 0, "msg" => "User ID not define");
		return false;
	}
			// login
			//return $res;
		//} 
		   //else {
			//return false;
		//}
		
	}	

	public function runMobileERP($username,$password,$getOneSignalID)
	{

$passwordnew=md5($password);

		//echo "SELECT * FROM `admin` WHERE username = '".$username."' AND password = '".$password."'";
		$res= $this->db->select("SELECT * FROM `admin` WHERE username = '".$username."' AND (password = '".$passwordnew."' OR password = '".$password."')");

		
		$count = count($res);
		//echo $count;
		if ($count > 0) {
			$data=array(
				'LastLogin'=>date('Y-m-d H:i:s'),
				'Platform' =>'Mobile',
				'getOneSignalID' => $getOneSignalID
				);	
			
				
				$this->db->update('admin',$data,"`username` ='$username'");	
				Onesignal::sendMessageAdmin("LOGIN ALERT","$username Logged in at ".date('H:i:s d/m/Y'));
			return $res;
			//$json = array("status" => 1, "info" => $res);
	}else{
		//return $res;
		//$json = array("status" => 0, "msg" => "User ID not define");
		return false;
	}
			// login
			//return $res;
		//} 
		   //else {
			//return false;
		//}
		
	}	
		

		
		
}
