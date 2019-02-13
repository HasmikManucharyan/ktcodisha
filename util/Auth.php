<?php
/**
 * 
 */
class Auth
{
	
	public static function handleLogin()
	{
		session_start();
		$logged = $_SESSION['loggedIn'];
		if ($logged == false) {
			session_destroy();
			header('location:'.URL.'index');
			exit;
		}
	} 
	
	public static function userhandleLogin()
	{
		session_start();
		
		$logged = $_SESSION['userloggedIn'];
		if ($logged == false) {
			session_destroy();
			header('location:'.URL.'index');
			exit;
		}
	} 
	
}