<?php

class Dashboard extends Controller {

	function __construct() {
		parent::__construct();
		  Session::init();

		   	
	}
	
	function index() {
		Auth::handleLogin();
		if($_REQUEST['id']==''){
			$id=0;
		} else {
			$id=$_REQUEST['id'];
		}

		$this->view->allModules = $this->model->getAllModules($id);
		// print_r($this->view->allModules);
		$this->view->render('dashboard/index',true);
	}
function vehicle_new() 
	{
        
		//Auth::handleLogin();
//		$this->view->allVehicles = $this->model->getAllVehicles();
		$this->view->render('dashboard/vehicle_new',true);
        //echo json_encode($this->view->allVehicles);
	}
 function getallmodules(){
	header('Access-Control-Allow-Origin: *'); 
		//$pid=$_REQUEST['pid'];
		$employeeID=Session::get('employeeID');
		if($employeeID==''){
			$employeeID=$_REQUEST['employeeID'];
		}
		$this->view->allModules = $this->model->getAllModules($employeeID);
	header('Content-type: application/json');
	
	echo json_encode($this->view->allModules);
 }
    function getallmodulesM(){
		header('Access-Control-Allow-Origin: *'); 
		//$pid=$_REQUEST['pid'];
		$employeeID=Session::get('employeeID');
		if($employeeID==''){
			$employeeID=$_REQUEST['employeeID'];
		}
		$this->view->allModules = $this->model->getAllModulesM($employeeID);
	header('Content-type: application/json');

	echo json_encode($this->view->allModules);
 }
    
    function getallmodulesErpM(){
		header('Access-Control-Allow-Origin: *'); 
		//$pid=$_REQUEST['pid'];
		$employeeID=Session::get('employeeID');
		if($employeeID==''){
			$employeeID=$_REQUEST['employeeID'];
		}
		$this->view->allModules = $this->model->getAllModulesErpM($employeeID);
	header('Content-type: application/json');
	
	echo json_encode($this->view->allModules);
 }
	
}