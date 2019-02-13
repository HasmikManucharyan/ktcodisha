<?php

class Tyre extends Controller {

	function __construct() {
		parent::__construct();
		  Session::init();
	}
	
	
	function getTyreModel() 
	{
		$this->view->AllTyreModel = $this->model->getAllTyreModel();
		echo json_encode($this->view->AllTyreModel);
	}
    
    function getTyresNo() 
	{
		$this->view->AllTyreNo = $this->model->getAllTyreNo();
		echo json_encode($this->view->AllTyreNo);
	}
	
	function getTyreAxelDescription(){
        $this->view->AllTyreAxelDesc = $this->model->getAllTyreAxelDescription();
		echo json_encode($this->view->AllTyreAxelDesc);
	}
	
	function getVehicleTypePosition() 
	   {
          $deviceid= $_REQUEST['deviceid'];
          $this->view->AllTyreposition = $this->model->getVehicleTypePosition($deviceid);
		  echo json_encode($this->view->AllTyreposition);
		  
	   }
    function submit_VehicleTyrePosition() {
		
		header('Content-type: application/json');
		$data = array(
		'id'=>null,
        'slno'=>$_REQUEST['slno'],   
        'axeldescription'=>$_REQUEST['axeldescription'],
        'itemname'=>$_REQUEST['itemname'],
        'tyreno'=>$_REQUEST['tyreno'],
        'tyremodel'=>$_REQUEST['tyremodel'],
        'previous'=>$_REQUEST['previous'],
        'current'=>$_REQUEST['current'],
        'status'=>$_REQUEST['status'],
        'deviceid'=>$_REQUEST['deviceid'],
		'vehicleno' => $_REQUEST['vehicleno'],
		'prevoddo'=>$_REQUEST['prevoddo'],
        'curroddo'=>$_REQUEST['curroddo'],
        'date'=>$_REQUEST['date']
		);
		$this->model->submit_VehicleTyrePosition($data);
		echo 'success';
		
		}
    
    function update_VehicleTyrePosition(){
        $arg=$_REQUEST['id'];
       header('Content-type: application/json');
		$data = array(
//		'slno'=>$_REQUEST['slno'],   
//        'axeldescription'=>$_REQUEST['axeldescription'],
//        'itemname'=>$_REQUEST['itemname'],
        'tyreno'=>$_REQUEST['tyreno'],
//        'tyremodel'=>$_REQUEST['tyremodel'],
        'previous'=>$_REQUEST['previous'],
        'current'=>$_REQUEST['current'],
//        'status'=>$_REQUEST['status'],
//        'deviceid'=>$_REQUEST['deviceid'],
//		'vehicleno' => $_REQUEST['vehicleno'],
		'prevoddo'=>$_REQUEST['prevoddo'],
        'curroddo'=>$_REQUEST['curroddo'],
        'date'=>$_REQUEST['date']
		);
		$this->model->update_VehicleTyrePosition($data,$arg);
		echo 'Updated'; 
        
    }
    
    
    function submit_tyrestock() {
		
		header('Content-type: application/json');
		$data = array(
		'id'=>null,
        'LocationName'=>$_REQUEST['LocationName'],   
        'ItemName'=>$_REQUEST['ItemName'],
        'TyresNo'=>$_REQUEST['TyresNo'],
        'NewTyreQty'=>$_REQUEST['NewTyreQty'],
        'OldTyreQty'=>$_REQUEST['OldTyreQty'],
        'ResoldQty'=>$_REQUEST['ResoldQty'],
        'ScrapTyreQty'=>$_REQUEST['ScrapTyreQty'],
        'oddometer'=>$_REQUEST['oddometer'],
        'partyname'=>$_REQUEST['partyname']
		);
		$this->model->submit_tyrestock($data);
		echo 'success';
		
		}
    
    function update_tyrestock(){
        $arg=$_REQUEST['TyresNo'];
       header('Content-type: application/json');
		$data = array(
		'NewTyreQty'=>$_REQUEST['NewTyreQty'],
        'OldTyreQty'=>$_REQUEST['OldTyreQty'],
        'ResoldQty'=>$_REQUEST['ResoldQty'],
        'ScrapTyreQty'=>$_REQUEST['ScrapTyreQty'],
        'oddometer'=>$_REQUEST['oddometer'],
        'partyname'=>$_REQUEST['partyname']
		);
		$this->model->update_tyrestock($data,$arg);
		echo 'Updated'; 
        
    }
    
   function tyrereport(){
       
       $date = $_REQUEST['date'];
       $this->view->tyrereport = $this->model->tyrereport($date);
       echo json_encode($this->view->tyrereport);
   }
		
}
