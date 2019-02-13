<?php
class Index extends Controller {

	function __construct() {
		parent::__construct();
	}
	
	// Home Page of the Login webapp
	function index() {
		Session::init();
		if(Session::get('loggedIn')!='true'){
			$this->view->render('index/index');
		}else{
			header('location: '.URL.'dashboard');
	
		}
	}

	function checkAppVersion(){
		header('Content-type: application/json');
		//echo "inside run";
	$id=$_REQUEST['id'];
	$response = $this->model->checkAppVersion($id);
	echo json_encode($response);
	}

}
