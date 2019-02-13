<?php

class Fuel extends Controller {

	function __construct() {
		parent::__construct();
		  Session::init();
	}
	function index() {
		$this->view->Alldevices = $this->model->getAlldevices();
		 	foreach($this->view->Alldevices AS $key=>$value){ 
				$mydevice[$value['id']]=$value['name'];
		 	}
		 $this->view->mydevice=$mydevice;
	   	$this->view->Alldrivers = $this->model->getAlldriver();
	   //print_r($this->view->Alldrivers);
		 	foreach($this->view->Alldrivers AS $key=>$value){ 
				$mydriver[$value['id']]=$value['name'];
				 $obj = json_decode($value['attributes']);
				$mydlno[$value['id']]=$obj->{'licenseno'};
		 	}
		 $this->view->mydriver=$mydriver;
		 $this->view->mydlno=$mydlno;
	$this->view->getDieselDetails = $this->model->getDieselDetails();
	//echo json_encode($this->view->getDiesel);
	$this->view->render('fuel/index');
	}
	
	function add_diesel() 
	{
		$this->view->Alldevices = $this->model->getAlldevices();
		$this->view->Alldrivers = $this->model->getAlldriver();
	//Auth::handleLogin();
		$data = $_GET;
		//echo "rrrr ".$_GET['id'];
		if($_GET['id']=='')
		    {
				$this->view->pick='';
				$this->view->data=$data;
			} 
		else 
			{
				$this->view->pick=$_GET['id'];
				$this->view->content= $this->model->getOnediesel($_GET['id']);
				//print_r($this->view->content);
			}
		
		$this->view->render('fuel/add_diesel');
		//header('location: vehiclemaster');
	}
	
	function edit_submit_diesel(){
		$deviceid=$_REQUEST['deviceid'];
		$lastposition=$this->model->lastPosition($deviceid);
		$action=$_POST['submit']; 
		//echo '$action';
		if ($action=='submit')
		{
		$data = array( 
					'id' => null,
					'admin_id' => Session::get('admin_id'),
					'deviceid' => $_REQUEST['deviceid'],
					'challanno' => $_REQUEST['challanno'],
					'datetime' => $_REQUEST['datetime'],
					'qty' => $_REQUEST['qty'],
					'fillissue' => $_REQUEST['fillissue'],
					'OpenOddo' => $_REQUEST['OpenOddo'],
					'CloseOddo' => $_REQUEST['CloseOddo'],
					'OpenMeter' => $_REQUEST['OpenMeter'],
					'CloseMeter' => $_REQUEST['CloseMeter'],
					'driverid' => $_REQUEST['driverid'],
					'employeeid' => $_REQUEST['employeeid'],
					'positionid' => $lastposition[0]['id']

					);
		$this->model->submit_diesel($data);
		}
		else
		{
		$arg=$_POST['id'];
		$data = array(
					'admin_id' => Session::get('admin_id'),
					'deviceid' => $_REQUEST['deviceid'],
					'challanno' => $_REQUEST['challanno'],
					'datetime' => $_REQUEST['datetime'],
					'qty' => $_REQUEST['qty'],
					'fillissue' => $_REQUEST['fillissue'],
					'OpenOddo' => $_REQUEST['OpenOddo'],
					'CloseOddo' => $_REQUEST['CloseOddo'],
					'OpenMeter' => $_REQUEST['OpenMeter'],
					'CloseMeter' => $_REQUEST['CloseMeter'],
					'driverid' => $_REQUEST['driverid'],
					'employeeid' => $_REQUEST['employeeid'],
					'positionid' => $lastposition[0]['id']
			);
			
			$this->model->edit_submit_diesel($data,$arg);
			
		}
			
		header('location: index');
	}
	
	function view_diesel() 
	   {
		   $this->view->Alldevices = $this->model->getAlldevices();
		 	foreach($this->view->Alldevices AS $key=>$value){ 
				$mydevice[$value['id']]=$value['name'];
		 	}
		 $this->view->mydevice=$mydevice;
	   	$this->view->Alldrivers = $this->model->getAlldriver();
	   //print_r($this->view->Alldrivers);
		 	foreach($this->view->Alldrivers AS $key=>$value){ 
				$mydriver[$value['id']]=$value['name'];
				 $obj = json_decode($value['attributes']);
				$mydlno[$value['id']]=$obj->{'licenseno'};
		 	}
		 $this->view->mydriver=$mydriver;
		 $this->view->mydlno=$mydlno;
	   //Auth::handleLogin();
		   $data = $_GET;
		   //if($data['id']=='')
			   if($_GET['id']=='')
			   {
				   $this->view->pick='';
				   $this->view->data=$data;
			   } 
		   else 
			   {
				   //$this->view->pick=$data['id'];
				   $this->view->pick=$_GET['id'];
				   $this->view->content= $this->model->getOnediesel($_GET['id']);
				   //print_r($this->view->content);
   }
   $this->view->render('fuel/view_diesel');
	   }
	   
	   function delete_diesel($id) 
		{
		//Auth::handleLogin();
			$this->model->delete_diesel($id);
			header('location: ../index');
		}
	// Home page view only
	function getDieselDetails() {
		header('Content-type: application/json');
	$this->view->getDiesel = $this->model->getDieselDetails();
	echo json_encode($this->view->getDiesel);
	}
	
	function insertDieselDetails() {
		$deviceid=$_REQUEST['deviceid'];
		$driverid=$_REQUEST['driverid'];
		$challanno=$_REQUEST['challanno'];
		$datetime=$_REQUEST['datetime'];
		$qty=$_REQUEST['qty'];
		$fillissue=$_REQUEST['fillissue'];
		$OpenOddo=$_REQUEST['OpenOddo'];
		$CloseOddo=$_REQUEST['CloseOddo'];
		$OpenMeter=$_REQUEST['OpenMeter'];
		$CloseMeter=$_REQUEST['CloseMeter'];
		$employeeid=$_REQUEST['employeeid'];
		//echo $deviceid;
		$lastposition=$this->model->lastPosition($deviceid);
		header('Content-type: application/json');
		$data = array(
		'id'=>null,
		'admin_id' => Session::get('admin_id'),
		'deviceid'=>$deviceid,
		'driverid'=>$driverid,
		'challanno'=>$challanno,
		'datetime'=>$datetime,
		'qty'=>$qty,
		'fillissue'=>$fillissue,
		'OpenOddo'=>$OpenOddo,
		'CloseOddo'=>$CloseOddo,
		'OpenMeter'=>$OpenMeter,
		'CloseMeter'=>$CloseMeter,
		'employeeid'=>$employeeid,
		'positionid'=>$lastposition[0]['id']
		);
		//print_r($data);
	$insertDieselDetails=$this->model->insertDieselDetails($data);	
		echo 'success';
		
		}
		function getLastUpdateDiesel()
		{
			$deviceid=$_REQUEST['deviceid'];
			$this->view->lastDiesel=$this->model->getLastUpdateDiesel($deviceid);
			echo json_encode($this->view->lastDiesel);
			
		}
		
}
