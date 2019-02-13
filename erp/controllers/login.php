<?php

class Login extends Controller {

	function __construct() {
		parent::__construct();
		  Session::init();
	}
	
	// Home page view only
	function index() {
	
		$this->view->render('index/index');
	}
	
	// calling the login action
	function run()
	{
		$this->model->run();
		//echo "successful";
	}
	
	function runMobile(){
		header('Content-type: application/json');
				 //echo "inside run";
			 $username=$_REQUEST['username'];
			 //$email=$_POST['email'];
			 $password=$_REQUEST['password'];
			//$response = $this->model->runMobile($username,$password);
			 echo json_encode($response);
		 }
	 function runMobileERP(){
		header('Content-type: application/json');
				 //echo "inside run";
		
		    $getOneSignalID = $_REQUEST['getOneSignalID'];	 
			 $username=$_REQUEST['username'];
			 //$email=$_POST['email'];
			 $password=$_REQUEST['password'];
			 $response = $this->model->runMobileERP($username,$password,$getOneSignalID);
			 echo json_encode($response);
		 }	 
	
	// logging out the user
	function logout()
	{
		Session::destroy();
		header('location: http://192.168.1.2/ktcodisha');
		exit;
	}
}
