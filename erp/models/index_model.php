<?php

class Index_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function run()
	{
		$sth = $this->db->prepare("SELECT * FROM admin WHERE 
				username = :username AND password = :password AND userType = :userType");
		$sth->execute(array(
			':username' => $_POST['username'],
			':password' => md5($_POST['password']),
			':userType' => $_POST['userType']
		));
		
		$data = $sth->fetch();
		echo $count .'welcome';
		$count =  $sth->rowCount();
		
		if ($count == 0 & $userType == 'dealer') {
			// login
			Session::init();
			Session::set('role', "kalyani");
			Session::set('loggedIn', true);
			Session::set('user_id', $data['admin_id']);
			header('location: '.URL.'vts');
		} else {
			header('location: '.URL.'index');
		}
		
		
	}
		
		
	
	public function checkAppVersion($id){
		$res= $this->db->select("SELECT * FROM `app_version` WHERE id = '".$id."'");
	     return $res;
	}
		
		
}