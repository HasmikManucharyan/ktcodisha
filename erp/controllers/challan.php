<?php
class Challan extends Controller {

	function __construct() {
		parent::__construct();
		Session::init();
		//error_reporting(99999);
	}
	function index(){
		Auth::handleLogin();
		$dateto=$_REQUEST['to'];
		$datefrom=$_REQUEST['from'];
			if($dateto==""){
				$dateto=date('Y-m-d');
				
			}
			if($datefrom==""){
			$datem = strtotime($dateto);
			$datem = strtotime("-1 day", $datem);
			$datefrom= date('Y-m-d', $datem);
			}
		$this->view->allPartyMaster = $this->model->getAllPartyMaster();	
		$this->view->complete_challan=$this->model->getChallan($dateto,$datefrom);
		$this->view->page = "indexjson";
		//print_r($this->view->complete_challan);
		$this->view->render('challan/index');
		}
    
    
    function totaltrip(){
		Auth::handleLogin();
		$dateto=$_REQUEST['to'];
		$datefrom=$_REQUEST['from'];
			if($dateto==""){
				$dateto=date('Y-m-d');
				
			}
			if($datefrom==""){
			$datem = strtotime($dateto);
			$datem = strtotime("-1 day", $datem);
			$datefrom= date('Y-m-d', $datem);
			}
		$this->view->allPartyMaster = $this->model->getAllPartyMaster();	
		$this->view->complete_challan=$this->model->getChallan($dateto,$datefrom);
		$this->view->page = "indexjson";
		//print_r($this->view->complete_challan);
		$this->view->render('challan/totaltrip');
		}
    
    	function map(){
		Auth::handleLogin();
		$dateto=$_REQUEST['to'];
		$datefrom=$_REQUEST['from'];
			if($dateto==""){
				$dateto=date('Y-m-d');
				
			}
			if($datefrom==""){
			$datem = strtotime($dateto);
			$datem = strtotime("-1 day", $datem);
			$datefrom= date('Y-m-d', $datem);
			}
		$this->view->allPartyMaster = $this->model->getAllPartyMaster();	
		$this->view->complete_challan=$this->model->getChallan($dateto,$datefrom);
		$this->view->page = "indexjson";
		//print_r($this->view->complete_challan);
		$this->view->render('challan/map');
		}

		function indexktc(){
			Auth::handleLogin();
			$dateto=$_REQUEST['to'];
			$datefrom=$_REQUEST['from'];
				if($dateto==""){
					$dateto=date('Y-m-d');
		
				}
				if($datefrom==""){
				$datem = strtotime($dateto);
				$datem = strtotime("-1 day", $datem);
				$datefrom= date('Y-m-d', $datem);
				}
				$this->view->allPartyMaster = $this->model->getAllPartyMaster();
			$this->view->complete_challan=$this->model->getChallanktc($dateto,$datefrom);
			$this->view->page = "indexktcjson";
			//print_r($this->view->complete_challan);
			$this->view->render('challan/indexktc');
			}


			function indexktcjson(){
				$this->view->Alldevices = $this->model->getAlldevices();
					 foreach($this->view->Alldevices AS $key=>$value){ 
						$mydevice[$value['id']]=$value['name'];
					 }
				 // $this->view->mydevice=$mydevice;
				   $Alldrivers = $this->model->getAlldriver();
			   //print_r($this->view->Alldrivers);
					 foreach($Alldrivers AS $key=>$value){ 
						$mydriver[$value['id']]=$value['name'];
						 $obj = json_decode($value['attributes']);
						$mydlno[$value['id']]=$obj->{'licenseno'};
						$dlex[$value['id']]=$obj->{'expirydate'};
					 }
				// $this->view->mydriver=$mydriver;
				// $this->view->mydlno=$mydlno;
				// $this->view->dlex=$dlex;
				 //print_r($mydriver);
				 //print_r($mydlno);
				 $dateto=$_REQUEST['to'];
				 $datefrom=$_REQUEST['from'];
					 if($dateto==""){
						 $dateto=date('Y-m-d');
						 
					 }
					 if($datefrom==""){
					 $datem = strtotime($dateto);
					 $datem = strtotime("-2 day", $datem);
					 $datefrom= date('Y-m-d', $datem);
					 }
				$complete_challan=$this->model->getChallanktc($dateto,$datefrom);
				//$this->view->render('challan/index');
				//echo "<pre>";
				header('Content-type: application/json');
				echo json_encode($complete_challan);
			}	

		function vehiclewise(){
			Auth::handleLogin();
			$dateto=$_REQUEST['to'];
			$datefrom=$_REQUEST['from'];
				if($dateto==""){
					$dateto=date('Y-m-d');
					
				}
				if($datefrom==""){
				$datem = strtotime($dateto);
				$datem = strtotime("-1 day", $datem);
				$datefrom= date('Y-m-d', $datem);
				}
			$this->view->complete_challan=$this->model->getChallan($dateto,$datefrom);
			$this->view->page = "indexjson";
			//print_r($this->view->complete_challan);
			$this->view->render('challan/vehiclewise');
			}	


		function admin(){
			Auth::handleLogin();
			$dateto=$_REQUEST['to'];
			$datefrom=$_REQUEST['from'];
				if($dateto==""){
					$dateto=date('Y-m-d');
					
				}
				if($datefrom==""){
				$datem = strtotime($dateto);
				$datem = strtotime("-1 day", $datem);
				$datefrom= date('Y-m-d', $datem);
				}
			$this->view->complete_challan=$this->model->getChallanAdmin($dateto,$datefrom);
			//print_r($this->view->complete_challan);
			$this->view->page = "indexadminjson";
			$this->view->render('challan/index');
			
			}
		function all(){
			//Auth::handleLogin();
			$dateto=$_REQUEST['to'];
			$datefrom=$_REQUEST['from'];
				if($dateto==""){
					$dateto=date('Y-m-d');
					
				}
				if($datefrom==""){
				$datem = strtotime($dateto);
				$datem = strtotime("-1 day", $datem);
				$datefrom= date('Y-m-d', $datem);
				}
			$this->view->complete_challan=$this->model->getChallan($dateto,$datefrom);
			//print_r($this->view->complete_challan);
			$this->view->render('challan/ktcval');
		}	

		function mobileapp(){
			$vendorCode = $_REQUEST['vendorCode'];
			$date=$_REQUEST['date'];
			if($date==""){
				$date=date('Y-m-d');
			}
			$datem = strtotime($date);
			$datem = strtotime("-1 day", $datem);
			$datey= date('Y-m-d', $datem);
			$this->view->vendorCode = $vendorCode;
			$this->view->banjari=$this->model->getChallanByDateBanjari($date,$vendorCode);
			$this->view->banjari_list=$this->model->getAllChallanByDateBanjari($date,$vendorCode);
			$this->view->sepcoparking=$this->model->getChallanByDateEntry($date,$vendorCode);
			$this->view->sepcoparking_list=$this->model->getALLChallanByDateEntryList($date,$vendorCode);
			$this->view->ippparking=$this->model->getChallanByDateLoadingIN($date,$vendorCode);
			$this->view->ippparking_list=$this->model->getAllChallanByDateLoadingIN($date,$vendorCode);
			$this->view->weighbridge=$this->model->getChallanByDateLoadingOUT($date,$vendorCode);
			$this->view->weighbridge_list=$this->model->getAllChallanByDateLoadingOUT($date,$vendorCode);
			$this->view->exiting=$this->model->getChallanByDateGross($date,$vendorCode);
			$this->view->exiting_list=$this->model->getAllChallanByDateGross($date,$vendorCode);
			$this->view->exit=$this->model->getChallanByDateExit($date,$vendorCode);
			$this->view->exit_list=$this->model->getAllChallanByDateExit($date,$vendorCode);
			$this->view->exit_listy=$this->model->getAllChallanByDateExit($datey,$vendorCode);
			$this->view->enter= $this->model->getAllChallanByDateEntry($date,$vendorCode);
			$this->view->exity=$this->model->getChallanByDateExit($datey,$vendorCode);
			$this->view->entery= $this->model->getAllChallanByDateEntry($datey,$vendorCode);
			$this->view->net= $this->model->getGrossWeight($date,$vendorCode);
			$this->view->nety= $this->model->getGrossWeight($datey,$vendorCode);
			$this->view->trips= $this->model->getVehicleWiseTripCounts($date,$vendorCode);
			$this->view->tripsy= $this->model->getVehicleWiseTripCounts($datey,$vendorCode);
			if($vendorCode=='206243'){
				$this->view->mtrips= $this->model->getVehicleWiseMonthlyTrips();
				$this->view->ctrips = $this->model->getVehicleWiseMonthlyTripsCount();
				$this->view->unloaded=$this->model->getAllChallanByDateUnload($date,$vendorCode);
			}
			$this->view->allTrips= $this->model->getVehicleWiseTrips($vendorCode);
			$this->view->render('challan/mobile',true);
		}

		

		function mobileappjsonbanjari(){
			$vendorCode = $_REQUEST['vendorCode'];
			$date=$_REQUEST['date'];
			if($date==""){
				$date=date('Y-m-d');
			}
			$datem = strtotime($date);
			$datem = strtotime("-1 day", $datem);
			$datey= date('Y-m-d', $datem);
			header('Content-type: application/json');
			$this->view->banjari=$this->model->getChallanByDateBanjari($date,$vendorCode);
			echo json_encode($this->view->banjari);
			
		}
		function mobileappjsonbanjari_list(){
			$vendorCode = $_REQUEST['vendorCode'];
			$date=$_REQUEST['date'];
			if($date==""){
				$date=date('Y-m-d');
			}
			$datem = strtotime($date);
			$datem = strtotime("-1 day", $datem);
			$datey= date('Y-m-d', $datem);
			header('Content-type: application/json');
			$this->view->banjari_list=$this->model->getAllChallanByDateBanjari($date,$vendorCode);
			echo json_encode($this->view->banjari_list);
		}
		
		
		function mobileappjsonsepcoparking(){
			$vendorCode = $_REQUEST['vendorCode'];
			$date=$_REQUEST['date'];
			if($date==""){
				$date=date('Y-m-d');
			}
			$datem = strtotime($date);
			$datem = strtotime("-1 day", $datem);
			$datey= date('Y-m-d', $datem);
			header('Content-type: application/json');
			$this->view->sepcoparking=$this->model->getChallanByDateEntry($date,$vendorCode);
			echo json_encode($this->view->sepcoparking);
			
		}
		
		
		function mobileappjsonsepcoparking_list(){
			$vendorCode = $_REQUEST['vendorCode'];
			$date=$_REQUEST['date'];
			if($date==""){
				$date=date('Y-m-d');
			}
			$datem = strtotime($date);
			$datem = strtotime("-1 day", $datem);
			$datey= date('Y-m-d', $datem);
			header('Content-type: application/json');
			$this->view->sepcoparking_list=$this->model->getALLChallanByDateEntryList($date,$vendorCode);
			echo json_encode($this->view->sepcoparking_list);
			
		}

		function mobileappjsonippparking(){
			$vendorCode = $_REQUEST['vendorCode'];
			$date=$_REQUEST['date'];
			if($date==""){
				$date=date('Y-m-d');
			}
			$datem = strtotime($date);
			$datem = strtotime("-1 day", $datem);
			$datey= date('Y-m-d', $datem);
			header('Content-type: application/json');	
			$this->view->ippparking=$this->model->getChallanByDateLoadingIN($date,$vendorCode);
			echo json_encode($this->view->ippparking);
		}

		function mobileappjsonippparking_list(){
			$vendorCode = $_REQUEST['vendorCode'];
			$date=$_REQUEST['date'];
			if($date==""){
				$date=date('Y-m-d');
			}
			$datem = strtotime($date);
			$datem = strtotime("-1 day", $datem);
			$datey= date('Y-m-d', $datem);
			header('Content-type: application/json');	

			$this->view->ippparking_list=$this->model->getAllChallanByDateLoadingIN($date,$vendorCode);
			echo json_encode($this->view->ippparking_list);
		}

		function mobileappjsonweighbridge(){
			$vendorCode = $_REQUEST['vendorCode'];
			$date=$_REQUEST['date'];
			if($date==""){
				$date=date('Y-m-d');
			}
			$datem = strtotime($date);
			$datem = strtotime("-1 day", $datem);
			$datey= date('Y-m-d', $datem);
			header('Content-type: application/json');	
			$this->view->weighbridge=$this->model->getChallanByDateLoadingOUT($date,$vendorCode);
			echo json_encode($this->view->weighbridge);
			
		}

		function mobileappjsonweighbridge_list(){
			$vendorCode = $_REQUEST['vendorCode'];
			$date=$_REQUEST['date'];
			if($date==""){
				$date=date('Y-m-d');
			}
			$datem = strtotime($date);
			$datem = strtotime("-1 day", $datem);
			$datey= date('Y-m-d', $datem);
			header('Content-type: application/json');	
			$this->view->weighbridge_list=$this->model->getAllChallanByDateLoadingOUT($date,$vendorCode);
			echo json_encode($this->view->weighbridge_list);
		}

		function mobileappjsonexiting(){
			$vendorCode = $_REQUEST['vendorCode'];
			$date=$_REQUEST['date'];
			if($date==""){
				$date=date('Y-m-d');
			}
			$datem = strtotime($date);
			$datem = strtotime("-1 day", $datem);
			$datey= date('Y-m-d', $datem);
			header('Content-type: application/json');	
			$this->view->exiting=$this->model->getChallanByDateGross($date,$vendorCode);
			echo json_encode($this->view->exiting);
			
		}

		function mobileappjsonexiting_list(){
			$vendorCode = $_REQUEST['vendorCode'];
			$date=$_REQUEST['date'];
			if($date==""){
				$date=date('Y-m-d');
			}
			$datem = strtotime($date);
			$datem = strtotime("-1 day", $datem);
			$datey= date('Y-m-d', $datem);
			header('Content-type: application/json');	
			$this->view->exiting_list=$this->model->getAllChallanByDateGross($date,$vendorCode);
			echo json_encode($this->view->exiting_list);
		}

		function mobileappjsonexit(){
			$vendorCode = $_REQUEST['vendorCode'];
			$date=$_REQUEST['date'];
			if($date==""){
				$date=date('Y-m-d');
			}
			$datem = strtotime($date);
			$datem = strtotime("-1 day", $datem);
			$datey= date('Y-m-d', $datem);
			header('Content-type: application/json');	
			$this->view->exit=$this->model->getChallanByDateExit($date,$vendorCode);
			echo json_encode($this->view->exit);
		}

		function mobileappjsonexit_list(){
			$vendorCode = $_REQUEST['vendorCode'];
			$date=$_REQUEST['date'];
			if($date==""){
				$date=date('Y-m-d');
			}
			$datem = strtotime($date);
			$datem = strtotime("-1 day", $datem);
			$datey= date('Y-m-d', $datem);
			header('Content-type: application/json');	
			$this->view->exit_list=$this->model->getAllChallanByDateExit($date,$vendorCode);
			echo json_encode($this->view->exit_list);
		}

		function mobileappjsonexit_listy(){
			$vendorCode = $_REQUEST['vendorCode'];
			$date=$_REQUEST['date'];
			if($date==""){
				$date=date('Y-m-d');
			}
			$datem = strtotime($date);
			$datem = strtotime("-1 day", $datem);
			$datey= date('Y-m-d', $datem);
			header('Content-type: application/json');	
			$this->view->exit_listy=$this->model->getAllChallanByDateExit($datey,$vendorCode);
			echo json_encode($this->view->exit_listy);
		}

		function mobileappjsonenter(){
			$vendorCode = $_REQUEST['vendorCode'];
			$date=$_REQUEST['date'];
			if($date==""){
				$date=date('Y-m-d');
			}
			$datem = strtotime($date);
			$datem = strtotime("-1 day", $datem);
			$datey= date('Y-m-d', $datem);
			header('Content-type: application/json');	
			$this->view->enter= $this->model->getAllChallanByDateEntry($date,$vendorCode);
			echo json_encode($this->view->enter);
		}
    
    
    function getAllChallanByDateEntryWeb(){
        
        $vendorCode = $_REQUEST['vendorCode'];
        $date=$_REQUEST['date'];
        if($date==""){
				$date=date('Y-m-d');
			}
        header('Content-type: application/json');	
			$this->view->enter= $this->model->getAllChallanByDateEntryWeb($date,$vendorCode);
			echo json_encode($this->view->enter);
    }

		function mobileappjsonexity(){
			$vendorCode = $_REQUEST['vendorCode'];
			$date=$_REQUEST['date'];
			if($date==""){
				$date=date('Y-m-d');
			}
			$datem = strtotime($date);
			$datem = strtotime("-1 day", $datem);
			$datey= date('Y-m-d', $datem);
			header('Content-type: application/json');	
			$this->view->exity=$this->model->getChallanByDateExit($datey,$vendorCode);
			echo json_encode($this->view->exity);
		}

		function mobileappjsonentery(){
			$vendorCode = $_REQUEST['vendorCode'];
			$date=$_REQUEST['date'];
			if($date==""){
				$date=date('Y-m-d');
			}
			$datem = strtotime($date);
			$datem = strtotime("-1 day", $datem);
			$datey= date('Y-m-d', $datem);
			header('Content-type: application/json');	
			$this->view->entery= $this->model->getAllChallanByDateEntry($datey,$vendorCode);
			echo json_encode($this->view->entery);
		}

		function mobileappjsonnet(){
			$vendorCode = $_REQUEST['vendorCode'];
			$date=$_REQUEST['date'];
			if($date==""){
				$date=date('Y-m-d');
			}
			$datem = strtotime($date);
			$datem = strtotime("-1 day", $datem);
			$datey= date('Y-m-d', $datem);
			header('Content-type: application/json');	
			$this->view->net= $this->model->getGrossWeight($date,$vendorCode);
			echo json_encode($this->view->net);
		}

		function mobileappjsonnety(){
			$vendorCode = $_REQUEST['vendorCode'];
			$date=$_REQUEST['date'];
			if($date==""){
				$date=date('Y-m-d');
			}
			$datem = strtotime($date);
			$datem = strtotime("-1 day", $datem);
			$datey= date('Y-m-d', $datem);
			header('Content-type: application/json');	
			$this->view->nety= $this->model->getGrossWeight($datey,$vendorCode);
			echo json_encode($this->view->nety);
		}

		function mobileappjsontrips(){
			$vendorCode = $_REQUEST['vendorCode'];
			$date=$_REQUEST['date'];
			if($date==""){
				$date=date('Y-m-d');
			}
			$datem = strtotime($date);
			$datem = strtotime("-1 day", $datem);
			$datey= date('Y-m-d', $datem);
			header('Content-type: application/json');	
			$this->view->trips= $this->model->getVehicleWiseTripCounts($date,$vendorCode);
			echo json_encode($this->view->trips);
			
		}

		function mobileappjsontripsy(){
			$vendorCode = $_REQUEST['vendorCode'];
			$date=$_REQUEST['date'];
			if($date==""){
				$date=date('Y-m-d');
			}
			$datem = strtotime($date);
			$datem = strtotime("-1 day", $datem);
			$datey= date('Y-m-d', $datem);
			header('Content-type: application/json');	
			$this->view->tripsy= $this->model->getVehicleWiseTripCounts($datey,$vendorCode);
			echo json_encode($this->view->tripsy);

		}

		function mobileappjsonmtrips(){
			$vendorCode = $_REQUEST['vendorCode'];
			$date=$_REQUEST['date'];
			if($date==""){
				$date=date('Y-m-d');
			}
			$datem = strtotime($date);
			$datem = strtotime("-1 day", $datem);
			$datey= date('Y-m-d', $datem);
			header('Content-type: application/json');	
				$this->view->mtrips= $this->model->getVehicleWiseMonthlyTrips();
				echo json_encode($this->view->mtrips);
		}

		function mobileappjsonctrips(){
			$vendorCode = $_REQUEST['vendorCode'];
			$date=$_REQUEST['date'];
			if($date==""){
				$date=date('Y-m-d');
			}
			$datem = strtotime($date);
			$datem = strtotime("-1 day", $datem);
			$datey= date('Y-m-d', $datem);
			header('Content-type: application/json');	
			
		
				$this->view->ctrips = $this->model->getVehicleWiseMonthlyTripsCount();
				echo json_encode($this->view->ctrips);
				
		}

		function mobileappjsonunloaded(){
			$vendorCode = $_REQUEST['vendorCode'];
			$date=$_REQUEST['date'];
			if($date==""){
				$date=date('Y-m-d');
			}
			$datem = strtotime($date);
			$datem = strtotime("-1 day", $datem);
			$datey= date('Y-m-d', $datem);
			header('Content-type: application/json');	
				
				$this->view->unloaded=$this->model->getAllChallanByDateUnload($date,$vendorCode);
				echo json_encode($this->view->unloaded);
		}
		function mobileappjsonallTrips(){
			$vendorCode = $_REQUEST['vendorCode'];
			$date=$_REQUEST['date'];
			if($date==""){
				$date=date('Y-m-d');
			}
			$datem = strtotime($date);
			$datem = strtotime("-1 day", $datem);
			$datey= date('Y-m-d', $datem);
			header('Content-type: application/json');	
			$this->view->allTrips= $this->model->getVehicleWiseTrips($vendorCode);
			echo json_encode($this->view->allTrips);
		}

		function trips(){
			$vendorCode = $_REQUEST['vendorCode'];
			$date=$_REQUEST['date'];
			if($date==""){
				$date=date('Y-m-d');
			}
			$datem = strtotime($date);
			$datem = strtotime("-1 day", $datem);
			$datey= date('Y-m-d', $datem);
			$this->view->date = $date;
			$this->view->datey = $datey;
			$this->view->vendorCode = $vendorCode;
			$this->view->render('challan/trips',true);
		}

		function getAllTrips1(){
			$vendorCode = $_REQUEST['vendorCode'];
			$ALLCHALLANS=$this->model->tripssummary($vendorCode);
			echo json_encode($ALLCHALLANS);
			//print_r($ALLCHALLANS);
		}


		

		function getAllTrips(){
			//error_reporting(99999);
			 $ALLCHALLANS=$this->model->tripssummary('206243');
			 $resultArray = array();
			 //print_r($ALLCHALLANS);
					for($i=0;$i<sizeof($ALLCHALLANS); $i++){
						$getChallan[$ALLCHALLANS[$i]['deviceid']][$ALLCHALLANS[$i]['challanno']]=$ALLCHALLANS[$i];
						$getVehicleNo[$ALLCHALLANS[$i]['deviceid']]=$ALLCHALLANS[$i]['vehicle_no'];
					}
					//echo "<pre>";
				//	print_r($getChallan);
				//	print_r($getVehicleNo);
					foreach($getVehicleNo AS $key=>$value){ 
						//echo $key ."  ".$value." trips ".sizeof($getChallan[$key])."<br />";
						$prev="";
						$diff ="";
						foreach($getChallan[$key] AS $key1=>$value1){ 
							if($prev !=""){
								$to_time = strtotime($value1['challan_entry_time']);
								$from_time = strtotime($prev);
								$temp= round(abs($to_time - $from_time));
								$diff = gmdate('H:i:s',$temp);
							//	$diff = ChallanTimeDiff($prev,$value1['datetime_out']); challan_entry_time
							}
							$dateout=strtotime($value1['datetime_out']);
							$datein=strtotime($value1['datetime_in']);
							$dateentry = strtotime($value1['challan_entry_time']);
							if(date("Y-m-d",$dateout)==date("Y-m-d") or date("Y-m-d",$datein)<=date("Y-m-d") or date("Y-m-d",$dateentry)<=date("Y-m-d")){	
							//echo $value." ".$value1['challanno']." ".$value1['driver_name']." ".$value1['challan_entry_time']." ".$value1['datetime_out']."  ".$diff."<br />";
						//	$res=array($value,$value1['challanno'],$value1['driver_name'],$value1['challan_entry_time'],$value1['datetime_out'],$diff);
						$resultArray[]=array('vehicle_no'=>$value,'challanno'=>$value1['challanno'],'driver_name'=>$value1['driver_name'],'entry'=>$value1['challan_entry_time'],'out'=>$value1['datetime_out'],'time'=>$diff);
						
						}
							
						

							$prev = $value1['datetime_out'];
						}	
						if(date("Y-m-d",$dateout)<=date("Y-m-d")){
							if($prev !='0000-00-00 00:00:00'){
							$to_time = strtotime(date("Y-m-d H:i:s"));
							$from_time = strtotime($prev);
							$temp= round(abs($to_time - $from_time));
							$diff = gmdate('H:i:s',$temp);
							//echo $value." Unloading ".$value1['driver_name']." 0 0  ".$diff."<br />";
							//$res=array($value,"Unloading",$value1['driver_name'],"0","0",$diff);
							$resultArray[]=array('vehicle_no'=>$value,'challanno'=>"Unloading",'driver_name'=>$value1['driver_name'],'entry'=>"0",'out'=>"0",'time'=>$diff);
							}
						}
						


					//echo "<br />";
					}
					echo json_encode($resultArray);	
					
		}

		function getAllTripsgrid(){
		//	error_reporting(99999);
			 $ALLCHALLANS=$this->model->tripssummary('206243');
			 $resultArray = array();
			 $ctrips = $this->model->getVehicleWiseMonthlyTripsCount();

			 foreach($ctrips AS $key=>$value){
				$ctrips[$value['deviceid']]=$value['Trips'];
				$TQty[$value['deviceid']]=$value['TQty'];
			}
			 //print_r($ALLCHALLANS);
					for($i=0;$i<sizeof($ALLCHALLANS); $i++){
						$getChallan[$ALLCHALLANS[$i]['deviceid']][$ALLCHALLANS[$i]['challanno']]=$ALLCHALLANS[$i];
						$getVehicleNo[$ALLCHALLANS[$i]['deviceid']]=$ALLCHALLANS[$i]['vehicle_no'];
					}

					//echo "<pre>";
				//	print_r($getChallan);
				//	print_r($getVehicleNo);
					foreach($getVehicleNo AS $key=>$value){ 
						//echo $key ."  ".$value." trips ".sizeof($getChallan[$key])."<br />";
						$prev="";
						$diff ="";
						$tripCounter=1;
						$challanArray= array('vehicle_no'=>$value,'deviceid'=>$key,'TQ'=>$ctrips[$key]." / ".$TQty[$key]." MT");
						foreach($getChallan[$key] AS $key1=>$value1){ 
							
							$dateout=strtotime($value1['datetime_out']);
							$datein=strtotime($value1['datetime_in']);
							$dateentry = strtotime($value1['challan_entry_time']);
							if(date("Y-m-d",$dateout)==date("Y-m-d")){	
							//echo $value." ".$value1['challanno']." ".$value1['driver_name']." ".$value1['challan_entry_time']." ".$value1['datetime_out']."  ".$diff."<br />";
						//	$res=array($value,$value1['challanno'],$value1['driver_name'],$value1['challan_entry_time'],$value1['datetime_out'],$diff);
						if($tripCounter==1){
							$outCount = "First";
						}
						if($tripCounter==2){
							$outCount = "Second";
						}
						if($tripCounter==3){
							$outCount = "Third";
						}
						$challanArray[$outCount] = date("H:i:s",$dateout);
						//$resultArray[]=array('vehicle_no'=>$value,'challanno'=>$value1['challanno'],'driver_name'=>$value1['driver_name'],'entry'=>$value1['challan_entry_time'],'out'=>$value1['datetime_out'],'time'=>$diff);
						$tripCounter++;
						}
							
						//	$prev = $value1['datetime_out'];
							
						}	
	
						
						
						if($tripCounter<4){
							for($j=$tripCounter;$j<4;$j++){
								if($j==1){
									$outCount = "First";
								}
								if($j==2){
									$outCount = "Second";
								}
								if($j==3){
									$outCount = "Third";
								}
								$challanArray[$outCount] = "00:00:00";
							}
						}
						$resultArray[]= $challanArray;

					//echo "<br />";
					}
					echo json_encode($resultArray);	
					
		}

		function events(){
			$rest_json = file_get_contents("php://input");
			$_POST = json_decode($rest_json, true);
			//$text = "tt ".serialize($_POST) . " " . $_POST['event']['type'];
			if($_POST['event']['type']=="geofenceEnter" or $_POST['event']['type']=="geofenceEnter"){
		//	$this->model->logevents(json_encode($_POST) . " " . $_POST['event']['type']);
	//	$this->model->logevents($_POST['device']['name'] . " " .$_POST['event']['deviceID'] . " " .$_POST['geofence']['name'] . " " .$_POST['event']['geofenceId'] . " " . $_POST['event']['type']);
	$ALLCHALLANS=$this->model->getChallanByDateMAX();
					//print_r($ALLCHALLANS);
						   for($i=0;$i<sizeof($ALLCHALLANS); $i++){
							   $getChallan[$ALLCHALLANS[$i]['deviceid']]=$ALLCHALLANS[$i]['challanno'];
							   $getStatus[$ALLCHALLANS[$i]['deviceid']]=$ALLCHALLANS[$i]['status'];
							   $getVehicleNo[$ALLCHALLANS[$i]['deviceid']]=$ALLCHALLANS[$i]['vehicle_no'];
						   }

				if($_POST['event']['geofenceId'] =="470" or $_POST['event']['geofenceId'] =="483"){
					
					$deviceid= $_POST['event']['deviceId'];

						$data=array(
						'VEHICLE_NO'=>$getVehicleNo[$deviceid],
						'CHALLAN_NO'=>$getChallan[$deviceid],
						'LOADING_LOCATION'=>$_POST['position']['latitude'].",".$_POST['position']['longitude']
						);
						$this->model->logevents($_POST['device']['name'] . " UNLOADED  " .$_POST['geofence']['name'] . " at " . date("Y-m-d H:i:s")." ".$getChallan[$deviceid]." ".$_POST['position']['latitude'].",".$_POST['position']['longitude']);
					
					$this->model->VL_ASH_Vehicle_Unloading($data);
					$data_int=array(
						'unloadingpoint'=>$_POST['position']['latitude'].",".$_POST['position']['longitude'],
						'unloadingtime'=>date("Y-m-d H:i:s")
						);
					//print_r($data);
					$this->view->update_challan=$this->model->update_challan_vehicle($data_int,$getChallan[$deviceid],$getVehicleNo[$deviceid]);
				//	$this->model->logevents($_POST['device']['name'] . " " .$_POST['event']['deviceID'] . " " .$_POST['geofence']['name'] . " " .$_POST['event']['geofenceId'] . " " . $_POST['event']['type']);
	
		}
//346
if($_POST['event']['geofenceId'] =="469"){
					
	$deviceid= $_POST['event']['deviceId'];
	if($_POST['event']['type']=="geofenceEnter"){
		$loading = "ENTERED ";
	}else{
		$loading = "EXITED ";
	}
		$data=array(
		'VEHICLE_NO'=>$getVehicleNo[$deviceid],
		'CHALLAN_NO'=>$getChallan[$deviceid],
		'LOADING_LOCATION'=>'CPP'
		);
		$this->model->logevents($_POST['device']['name'] ." ". $loading. " " .$_POST['geofence']['name'] . " at " . date("Y-m-d H:i:s")." ".$getChallan[$deviceid]." ".$_POST['position']['latitude'].",".$_POST['position']['longitude']);
	
		if($loading == "ENTERED "){
	$this->model->VL_ASH_vehicle_Loading_IN($data);
		} else {
	$this->model->VL_ASH_vehicle_Loading_OUT($data);
		}
	
}


		if($_POST['event']['geofenceId'] =="471"){
			$deviceid= $_POST['event']['deviceId'];
			$this->model->logevents($_POST['device']['name'] . " CROSSED " .$_POST['geofence']['name'] . " at " . date("Y-m-d H:i:s")." ".$getChallan[$deviceid]." ".$_POST['position']['latitude'].",".$_POST['position']['longitude']);
			$datatoll=array(
				'vehicle_no'=>$getVehicleNo[$deviceid],
				'geofence_name'=>$_POST['geofence']['name'],
				'geofence_id'=>$_POST['event']['geofenceId'],
				'challanno'=>$getChallan[$deviceid],
				'deviceid'=>$deviceid,
				'amount' => '375',
				'datetime'=>date("Y-m-d H:i:s"),
				'status' => $getStatus[$deviceid]
				);
			$this->model->logToll($datatoll);
		//	$this->model->VL_ASH_Vehicle_Unloading($data);
		//	$this->model->logevents($_POST['device']['name'] . " " .$_POST['event']['deviceID'] . " " .$_POST['geofence']['name'] . " " .$_POST['event']['geofenceId'] . " " . $_POST['event']['type']);
}

if($_POST['event']['geofenceId'] =="468"){
	$deviceid= $_POST['event']['deviceId'];
	if($_POST['event']['type']=="geofenceEnter"){
		$loading = "ENTERED ";
	}else{
		$loading = "EXITED ";
	}
	
	$this->model->logevents($_POST['device']['name'] . " $loading " .$_POST['geofence']['name'] . " at " . date("Y-m-d H:i:s")." ".$getChallan[$deviceid]." ".$_POST['position']['latitude'].",".$_POST['position']['longitude']);
	
//	$this->model->VL_ASH_Vehicle_Unloading($data);
//	$this->model->logevents($_POST['device']['name'] . " " .$_POST['event']['deviceID'] . " " .$_POST['geofence']['name'] . " " .$_POST['event']['geofenceId'] . " " . $_POST['event']['type']);

}
		}
		}


		function alltrips(){
			$allmydevices=$this->model->getAllUserdevices('109');
			foreach($allmydevices AS $key2=>$value2){
				$devices[$value2['id']]=$value2['name'];
			 }
			 $Allroutes= $this->model->getAllroutes('55');
			 $this->view->Allroutes = $Allroutes;
			 foreach($Allroutes AS $key=>$value){
				$SUBROUTES=$this->model->getAllSubroutes($value['id']);
				$this->view->SUBROUTES[$value['id']]=$SUBROUTES;
				foreach($SUBROUTES AS $key1=>$value1){
					$geofence=$this->model->getonegeofences($value1['subrouteid']);
					//print_r($geofence);
					$this->view->SUBROUTESNAME[$value1['subrouteid']]=$geofence[0]['name'];
					$this->view->SUBROUTESTYPE[$value1['subrouteid']]=$value1['subroutetype'];
					if($value1['subroutetype']=='load'){
					$loadedTrip= $this->model->KTCGetLoadingTrips($this->view->SUBROUTESNAME[$value1['subrouteid']]);
					}else{
					//$loadedTrip= $this->model->KTCGetUnLoadingTrips($value1['subrouteid']);
					}
					//echo $value['routename']." ".$geofence[0]['name']." ".$value1['subroutetype']."  ".sizeof($loadedTrip)."<br />";
					//echo $value['id']." ".$value['routename']." ".$value1['subrouteid']."  ".$geofence[0]['name']." ".$value1['subroutetype']."  ".sizeof($loadedTrip)."<br />";
					
					//$this->view->myTrips[$value1['subrouteid']]=$loadedTrip;
					//$routesid[$value1['subrouteid']]=$value1['subroutetype'];
					//$sroutesname[$value1['subrouteid']]=$value['routename'];
				}
			 }
			// echo "<pre>";
			// print_r($this->view->myTrips);
			$this->view->render('challan/alltrips',true);
		}

		function alltripsajaxroutes(){
			header('Access-Control-Allow-Origin: *'); 
			header('Content-type: application/json');
			$Allroutes= $this->model->getAllroutes('55');
			foreach($Allroutes AS $key=>$value){
				$SUBROUTES=$this->model->getAllSubroutes($value['id']);
				foreach($SUBROUTES AS $key1=>$value1){
					$geofence=$this->model->getonegeofences($value1['subrouteid']);
				if($value1['subroutetype']=='load' and $value1['subrouteid']!='465'){
					//$SUBROUTESNAME[$value1['subrouteid']]=$geofence[0]['name'];
					$SUBROUTESNAME[$value1['subrouteid']]=$geofence[0]['name'];
				}
			}
		}
		echo json_encode($SUBROUTESNAME);	

		}
		function alltripsajaxTypes(){
			header('Access-Control-Allow-Origin: *'); 
			header('Content-type: application/json');
			$Allroutes= $this->model->getAllroutes('55');
			foreach($Allroutes AS $key=>$value){
				$SUBROUTES=$this->model->getAllSubroutes($value['id']);
				foreach($SUBROUTES AS $key1=>$value1){
					//$geofence=$this->model->getonegeofences($value1['subrouteid']);
				if($value1['subroutetype']=='load' and $value1['subrouteid']!='465'){
				//	$SUBROUTESNAME[$value1['subrouteid']]=$value1['subrouteSumType'];
					$SUBROUTESNAME[$value1['subrouteid']]=$value1['routename'];
				}
			}
		}
		echo json_encode($SUBROUTESNAME);	

		}

		function tripCountsAjax(){
			$date = date("Y-m-d");
			$total = $this->model->KTCGetAllLoadingTripsCount($date);
			//print_r($total);
			echo $total[0]['Total'];
		}

		function tripCountsVALAjax(){
			$date = date("Y-m-d");
			$vendorCode='206243';
			//$this->model->getChallanByDateExit($date,$vendorCode)
			$total = $this->model->getChallanByDateExit($date,$vendorCode);
			//print_r($total);
			echo $total[0]['Total'];
		}
		function alltripsajax(){
			header('Access-Control-Allow-Origin: *'); 
			header('Content-type: application/json');
			$date=$_REQUEST['date'];
			if($date=='today'){
				$date = date("Y-m-d");
			}
			if($date=='yesterday'){
				$date = date("Y-m-d");
				$datem = strtotime($date);
				$datem = strtotime("-1 day", $datem);
				$datefrom= date('Y-m-d', $datem);
				$date =  $datefrom;
			}
			 $Allroutes= $this->model->getAllroutes('55');
			 $loadedTrip= $this->model->KTCGetAllLoadingTrips($date);
			// echo "<pre>";
			// print_r($loadedTrip);
			// $this->view->Allroutes = $Allroutes;

			 foreach($Allroutes AS $key=>$value){
				$SUBROUTES=$this->model->getAllSubroutes($value['id']);
				//$this->view->SUBROUTES[$value['id']]=$SUBROUTES;
				foreach($SUBROUTES AS $key1=>$value1){
					$geofence=$this->model->getonegeofences($value1['subrouteid']);
					//print_r($geofence);
					//$this->view->SUBROUTESNAME[$value1['subrouteid']]=$geofence[0]['name'];
					if($value1['subroutetype']=='load'){
						$temp = array();
						for($i=0;$i<sizeof($loadedTrip);$i++){
							//print_r($loadedTrip[$i]);
						//	echo $loadedTrip[$i]['from']."  ".$geofence[0]['name']."<br/>";
							if($loadedTrip[$i]['from']==$geofence[0]['name']){
						//$myTrips[$value1['subrouteid']]=$loadedTrip[i];
					
						$temp[]=$loadedTrip[$i];
							}
						}
						$myTrips[$value1['subrouteid']] = $temp;

					}else{
					//	$loadedTrip= $this->model->KTCGetUnLoadingTrips($value1['subrouteid']);
					}
					
				}
			 }
			// print_r($myTrips);
			 echo json_encode($myTrips);	
		}


		function alltripsajax_old(){
			header('Content-type: application/json');
			$date=$_REQUEST['date'];
			 $Allroutes= $this->model->getAllroutes('55');
			// $this->view->Allroutes = $Allroutes;
			 foreach($Allroutes AS $key=>$value){
				$SUBROUTES=$this->model->getAllSubroutes($value['id']);
				//$this->view->SUBROUTES[$value['id']]=$SUBROUTES;
				foreach($SUBROUTES AS $key1=>$value1){
					$geofence=$this->model->getonegeofences($value1['subrouteid']);
					//print_r($geofence);
					//$this->view->SUBROUTESNAME[$value1['subrouteid']]=$geofence[0]['name'];
					if($value1['subroutetype']=='load'){
					    $loadedTrip= $this->model->KTCGetLoadingTrips($geofence[0]['name'],$date);
					}else{
					//	$loadedTrip= $this->model->KTCGetUnLoadingTrips($value1['subrouteid']);
					}
					$myTrips[$value1['subrouteid']]=$loadedTrip;
				}
			 }
			 echo json_encode($myTrips);	
		}


		function getKTCSubroutes(){
		//$_REQUEST['id'];
		$SUBROUTES=$this->model->getAllSubroutes($_REQUEST['id']);
		
		for($i=0;$i<sizeof($SUBROUTES);$i++){
			$geofence=$this->model->getonegeofences($SUBROUTES[$i]['subrouteid']);
			$SUBROUTES[$i]['name']=$geofence[0]['name'];
		}
		echo json_encode($SUBROUTES);	
		}

		function mobile(){
			$date=$_REQUEST['date'];
			if($date==""){
				$date=date('Y-m-d');
				
			}
			$datem = strtotime($date);
			$datem = strtotime("-1 day", $datem);
			$datey= date('Y-m-d', $datem);
			$this->view->banjari=$this->model->getChallanByDateBanjari($date);
			$this->view->banjari_list=$this->model->getAllChallanByDateBanjari($date);
			$this->view->sepcoparking=$this->model->getChallanByDateEntry($date);
			$this->view->sepcoparking_list=$this->model->getALLChallanByDateEntryList($date);
			$this->view->ippparking=$this->model->getChallanByDateLoadingIN($date);
			$this->view->ippparking_list=$this->model->getAllChallanByDateLoadingIN($date);
			$this->view->weighbridge=$this->model->getChallanByDateLoadingOUT($date);
			$this->view->weighbridge_list=$this->model->getAllChallanByDateLoadingOUT($date);
			$this->view->exiting=$this->model->getChallanByDateGross($date);
			$this->view->exiting_list=$this->model->getAllChallanByDateGross($date);
			$this->view->exit=$this->model->getChallanByDateExit($date);
			$this->view->exit_list=$this->model->getAllChallanByDateExit($date);
			//$this->view->exit_listy=$this->model->getAllChallanByDateExit($datey,$vendorCode);
			$this->view->enter= $this->model->getAllChallanByDateEntry($date);
			$this->view->exity=$this->model->getChallanByDateExit($datey);
			$this->view->entery= $this->model->getAllChallanByDateEntry($datey);
			$this->view->net= $this->model->getGrossWeight($date);
			$this->view->nety= $this->model->getGrossWeight($datey);
			$this->view->trips= $this->model->getVehicleWiseTripCounts($date);
			$this->view->allTrips= $this->model->getVehicleWiseTrips();


			//getGrossWeight getAllChallanByDateExit

			//echo "<pre>";
			// print_r($this->view->banjari);
			// print_r($this->view->enter);
			// print_r($this->view->sepcoparking);
			// print_r($this->view->ippparking);
			// print_r($this->view->weighbridge);
			// print_r($this->view->exiting);
			// print_r($this->view->exit);
			$this->view->render('challan/mobile',true);
		}	

		function mbDriverMaster(){
			$traccarID=$_REQUEST['TRACCARID'];
			header('Content-type: application/json');
			$this->view->getDriver = $this->model->mbgetAlldriver($traccarID);
			 echo json_encode($this->view->getDriver);
		}
		
		function updateChallan(){
			//Auth::handleLogin();
			$dateto=$_REQUEST['to'];
		$datefrom=$_REQUEST['from'];
			if($dateto==""){
				$dateto=date('Y-m-d');
				
			}
			if($datefrom==""){
			$datem = strtotime($dateto);
			$datem = strtotime("-2 day", $datem);
			$datefrom= date('Y-m-d', $datem);
			}
			$this->view->complete_challan=$this->model->getChallanForUpdates($dateto,$datefrom);
			//VL_ASH_PullVehicleDetailsNEW
			echo "<pre>";
			foreach($this->view->complete_challan AS $key=>$value){
				
				if(($value['datetime_out']=='0000-00-00 00:00:00' or $value['datetime_out']=='NULL' or $value['datetime_out']=='') && $value['status']!="CANCEL"){
			    //$vehicle= $this->model->getOneVehicle($id);
			
			
				$data = array(
					'VEHICLE_NO' => $value['vehicle_no'],
					'CHALLAN_NO' =>  $value['challanno']
				);
				//print_r($data);
				$challanid=$value['challanno'];
			
			  $this->view->content= $this->model->VL_ASH_PullVehicleDetailsNEW($data);
			
			if($this->view->content['STATUS']!="" and !empty($this->view->content['STATUS'])){
			  $data=array(
				'gatepass_no'=>$this->view->content['GATEPASS_NO'],
				'datetime_in'=>ConvertValDate($this->view->content['ENTRY_TIME']),
				'challan_entry_time'=>ConvertValDate($this->view->content['ENTRY_ON']),
				'grossweight'=>$this->view->content['GROSS_WEIGHT'],
				'gross_weight_time'=>ConvertValDate($this->view->content['GROSS_WEIGHT_TIME']),
				'tareweight'=>$this->view->content['TARE_WEIGHT'],
				'tare_weight_time'=>ConvertValDate($this->view->content['TARE_WEIGHT_TIME']),
				'loading_positionid'=>$this->view->content['LOADING_LOCATION'],
				'loading_timeIN'=>ConvertValDate($this->view->content['LOADING_TIME_IN']),
				'loading_timeOUT'=>ConvertValDate($this->view->content['LOADING_TIME_OUT']),
				'netweight'=>$this->view->content['GROSS_WEIGHT']-$this->view->content['TARE_WEIGHT'],
				'datetime_out'=>ConvertValDate($this->view->content['EXIT_TIME']),
				'unloadingpoint'=>$this->view->content['UNLOADING_LOCATION'],
				'unloadingtime'=>ConvertValDate($this->view->content['UNLOADING_TIME']),
				'status' =>  $this->view->content['STATUS']
				);
			//print_r($data);
			$this->view->update_challan=$this->model->update_challan_vehicle($data,$challanid,$value['vehicle_no']);
			}
			//print_r($this->view->update_challan);
			echo "Challan Updated".$value['vehicle_no']." ".$value['challanno']."<br/>";
			
			}
		}


			//print_r($this->view->complete_challan);
			//$this->view->render('challan/update_challan');
			}		

	    function driversktc(){
			$this->view->getDriver=$this->model->getAlldriver();
			$this->view->render('challan/challan');
		}

		function external(){
			$auth = $_REQUEST['auth'];
			$dateto=$_REQUEST['to'];
			$datefrom=$_REQUEST['from'];
				if($dateto==""){
					$dateto=date('Y-m-d');
					
				}
				if($datefrom==""){
				$datem = strtotime($dateto);
				$datem = strtotime("-2 day", $datem);
				$datefrom= date('Y-m-d', $datem);
				}
			if($auth=='f697f8165a28d132650a37c708ea1366'){
				//header('ALLOW-FROM https://vedantaconnect.com');
			$this->view->complete_challan=$this->model->getChallan($dateto,$datefrom);
			$this->view->render('challan/external',true);
			}
			}	

	//	f697f8165a28d132650a37c708ea1366

		function indexjson(){
			//$this->view->Alldevices = $this->model->getAlldevices();
				// foreach($this->view->Alldevices AS $key=>$value){ 
				//	$mydevice[$value['id']]=$value['name'];
				// }
			 // $this->view->mydevice=$mydevice;
			//   $Alldrivers = $this->model->getAlldriver();
		   //print_r($this->view->Alldrivers);
				//  foreach($Alldrivers AS $key=>$value){ 
				// 	$mydriver[$value['id']]=$value['name'];
				// 	 $obj = json_decode($value['attributes']);
				// 	$mydlno[$value['id']]=$obj->{'licenseno'};
				// 	$dlex[$value['id']]=$obj->{'expirydate'};
				//  }
			// $this->view->mydriver=$mydriver;
			// $this->view->mydlno=$mydlno;
			// $this->view->dlex=$dlex;
			 //print_r($mydriver);
			 //print_r($mydlno);
			 $dateto=$_REQUEST['to'];
			 $datefrom=$_REQUEST['from'];
				 if($dateto==""){
					 $dateto=date('Y-m-d');
					 
				 }
				 if($datefrom==""){
				 $datem = strtotime($dateto);
				 $datem = strtotime("-2 day", $datem);
				 $datefrom= date('Y-m-d', $datem);
				 }

			$complete_challan=$this->model->getChallan($dateto,$datefrom);
			//$this->view->render('challan/index');
			//echo "<pre>";
			foreach($complete_challan AS $key=>$value){ 

			}
			header('Content-type: application/json');
			echo json_encode($complete_challan);
		}	

		function indexadminjson(){
			$this->view->Alldevices = $this->model->getAlldevices();
				 foreach($this->view->Alldevices AS $key=>$value){ 
					$mydevice[$value['id']]=$value['name'];
				 }
			 // $this->view->mydevice=$mydevice;
			   $Alldrivers = $this->model->getAlldriver();
		   //print_r($this->view->Alldrivers);
				 foreach($Alldrivers AS $key=>$value){ 
					$mydriver[$value['id']]=$value['name'];
					 $obj = json_decode($value['attributes']);
					$mydlno[$value['id']]=$obj->{'licenseno'};
					$dlex[$value['id']]=$obj->{'expirydate'};
				 }
			// $this->view->mydriver=$mydriver;
			// $this->view->mydlno=$mydlno;
			// $this->view->dlex=$dlex;
			 //print_r($mydriver);
			 //print_r($mydlno);
			 $dateto=$_REQUEST['to'];
			 $datefrom=$_REQUEST['from'];
				 if($dateto==""){
					 $dateto=date('Y-m-d');
					 
				 }
				 if($datefrom==""){
				 $datem = strtotime($dateto);
				 $datem = strtotime("-2 day", $datem);
				 $datefrom= date('Y-m-d', $datem);
				 }
			$complete_challan=$this->model->getChallanAdmin($dateto,$datefrom);
			//$this->view->render('challan/index');
			//echo "<pre>";
			header('Content-type: application/json');
			echo json_encode($complete_challan);
		}	


	function challan() 
	{
		Auth::handleLogin();
		$maxchallan = $this->model->getMAXChallan();
		$this->view->challanno = $maxchallan[0]['MC'];
		echo "cno :".$this->view->challanno;
		$this->view->Alldevices = $this->model->getAlldevices();
		$this->view->Alldrivers = $this->model->getAlldriver();
		//$this->view->AllGroups= $this->model->getAllgroups();
		//$this->view->Allgeofences = $this->model->getAllgeofences();
		$this->view->render('challan/challan');
	}	
	
	function submit_challan(){
		$deviceid=$_POST['deviceid'];
		$driverid = $_POST['driverid'];
		$lastposition=$this->model->lastPosition($deviceid);
		$challanid =$_POST['challanno'];
		$vehicle= $this->model->getOneVehicle($deviceid);
		$driver = $this->model->getOnedriver($driverid);
		
		//print_r($vehicle);
		//print_r($driver);
		$obj=json_decode($driver[0]['attributes']);
		$licenseno=$obj->{"licenseno"};
		$driver_name = $driver[0]["name"];
	    $expirydate=$obj->{"expirydate"};

		$action=$_POST['submit']; 
		if($action=='submit'){
		
		$data = array(
					'VEHICLE_NO' => $vehicle[0]['VehicleNo'],
					'CHALLAN_NO' => $challanid,
					'CHALLAN_DATE' => date('Y-m-d'),
					'DRIVER_NAME' =>  $driver[0]['name'],
					'LICENCE_NO' => $licenseno,
					'LICENCE_EXPIRY_DATE' => $expirydate,
					'VEHICLE_LABOUR' => "NIL",
					'VEHICLE_ACCESSORIES' => "NIL",
					'LOADING_POINT' => $_POST['from'],
					'UNLOADING_POINT' => $_POST['to']
				);
	// print_r($data);
	 $this->view->content= $this->model->VL_ASH_PushVehicleChallanDetail($data);
	 
	// print_r($this->view->content);
if($this->view->content['ACKNOWLEDGEMENT_NO']=='Submitted'){
	//	header('location: index');
		echo 'Vedanta Challan Created Successfully';

		$data=array(
			'id'=>null,
			'challanno'=>$_POST['challanno'],
			'vehicle_no'=>$vehicle[0]['VehicleNo'],
			'challan_date'=>date('Y-m-d'),
			'deviceid'=>$_POST['deviceid'],
			'material' => $_POST['material'],
			'from'=>$_POST['from'],
			'to'=>$_POST['to'],
			'status' => 'Submitted',
			'qnty'=>$_POST['qnty'],
			'ownername'=>$_POST['ownername'],
			'driverid'=>$_POST['driverid'],
			'driver_name'=>$driver_name,
			'dlno'=>$licenseno,
			'expirydate'=> $expirydate,
			'in_positionid'=>$lastposition[0]['id']
	);
	$this->view->submit_challan=$this->model->submit_challan($data);
}else {
	echo 'Vedanta Challan Creation Failed';

}
		}
		
	}

  
	
	function edit_challan() 															//through DB
	{
		   	Auth::handleLogin();
	//Auth::handleLogin();
		$data = $_GET;
		if($_GET['id']==''){
			$this->view->pick='';
			$this->view->data=$data;
		} else {
			$this->view->pick=$_GET['id'];
			$this->view->content= $this->model->getonechallan($data['id']);
		}
		
		$this->view->render('challan/edit_challan');
	}
	function view_challan() 															//through DB
	{
		   	Auth::handleLogin();
	//Auth::handleLogin();
		$data = $_GET;
		if($_GET['id']==''){
			$this->view->pick='';
			$this->view->data=$data;
		} else {
			$this->view->pick=$_GET['id'];
			$this->view->content= $this->model->getonechallan($data['id']);
		}
		
		$this->view->render('challan/view_challan');
	}
	
	
	function edit_submit_challan(){
		
		$deviceid=$this->view->content[$_POST['id']]['deviceid'];
		//print_r($deviceid);
		$lastposition=$this->model->lastPosition($deviceid);
	//print_r($this->view->lastposition);
		$action=$_POST['submit']; 
		if($action=='submit'){
		
			$arg=$_POST['id'];
			$data=array(
				'datetime_out'=>$_POST['datetime_out'],
				'out_positionid'=>$lastposition[0]['id'],
				'tareweight'=>$_POST['tareweight'],
				'grossweight'=>$_POST['grossweight']
				);
		$this->view->update_challan=$this->model->update_challan($data,$arg);

		echo 'Challan Updated Successfully';
		}
		
	}
	
	function create_challan(){
		$deviceid=$_REQUEST['deviceid'];
		$action=$_REQUEST['action'];
	//	$lastposition=$this->model->lastPosition($deviceid);
		$pending_challan=$this->model->getAllPendingchallan($deviceid);
		
		header('Content-type: application/json');
		//and $timeDiff < 15
     	if(count($pending_challan)>0){
			echo json_encode($pending_challan);
			}
		else{
		    echo "no pending challan";
		}
		
		}

		function create_challanKTC(){
			$deviceid=$_REQUEST['deviceid'];
			$action=$_REQUEST['action'];
		//	$lastposition=$this->model->lastPosition($deviceid);
			$pending_challan=$this->model->getAllPendingchallanKTC($deviceid);
			
			header('Content-type: application/json');
			//and $timeDiff < 15
			 if(count($pending_challan)>0){
				echo json_encode($pending_challan);
				}
			else{
				echo "no pending challan";
			}
			
			}	


  function createVal(){
		$this->view->FunctionName = $_REQUEST['FunctionName'];
		$this->view->FunctionInputs = $_REQUEST['FunctionInputs'];
		$this->view->FunctionOutputs = $_REQUEST['FunctionOutputs'];
		$this->view->render('challan/createVal');
  }

  function createView(){
	$this->view->FunctionName = $_REQUEST['FunctionName'];
	$this->view->FunctionInputs = $_REQUEST['FunctionInputs'];
	$this->view->FunctionName =$_REQUEST['FunctionName'];
	$this->view->FunctionOutputs = $_REQUEST['FunctionOutputs'];
	$this->view->render('challan/createView', 1);
}

function VL_ASH_PushVehicleChallanCancelation(){
	$VEHICLE_NO = $_REQUEST['VEHICLE_NO'];
	$CHALLAN_NO = $_REQUEST['CHALLAN_NO'];
			
			$data=array(
				'VEHICLE_NO'=>$VEHICLE_NO,
				'CHALLAN_NO' => $CHALLAN_NO
				);	
			$getCancel=$this->model->VL_ASH_PushVehicleChallanCancelation($data);
			header('Content-type: application/json');
			echo json_encode($getCancel);
			$data=array(
				'STATUS'=>'CANCEL'
				);
			$this->view->update_challan=$this->model->update_challan_vehicle($data,$CHALLAN_NO,$VEHICLE_NO);
}

  function VL_ASH_PushVehicleDetails(){
  $id=$_GET['id'];
	$vehicle= $this->model->getOneVehicle($id);
	$data = array(
		'VEHICLE_NO' => $vehicle[0]['VehicleNo'],
		'VEHICLE_CARRYING_CAPACITY' => $vehicle[0]['VehicleCarrying'],
		'VEHICLE_TYPE' => $vehicle[0]['VehicleType'],
		'VEHICLE_OWNER_NAME' => $vehicle[0]['OwnerName'],
		'VEHICLE_OWNER_ADDRESS' => $vehicle[0]['OwnerAddress'],
		'VEHICLE_OWNER_MOBILE_NO' => $vehicle[0]['MobileNo'],
		'VEHICLE_ENGINE_NO' => $vehicle[0]['EngineNo'],
		'VEHICLE_CHASSIS_NO' => $vehicle[0]['ChesisNo'],
		'PUC_EXPIRY_DATE' => $vehicle[0]['PollutionExpiry'],
		'INSURANCE_EXPIRY_DATE' => $vehicle[0]['InsuranceExpiryDate'],
		'FITNESS_EXPIRY_DATE' => $vehicle[0]['FitnessExpiryDate'],
		'TAX_EXPIRY_DATE' => $vehicle[0]['RoadTaxExpiry'],
		'PUC_EXPIRY_DOC' => $vehicle[0]['PollutionExpiryDoc'],
		'INSURANCE_EXPIRY_DOC' => $vehicle[0]['InsuranceExpiryDoc'],
		'FITNESS_EXPIRY_DOC' => $vehicle[0]['FitnessExpiryDoc'],
		'TAX_EXPIRY_DOC' => $vehicle[0]['TaxExpiryDoc'],
		'VEHICLE_REGISTRATION_DOC' => $vehicle[0]['VehicleRegDoc']
	);
	echo "<pre>";
	//print_r($data)
	//print_r($vehicle);
	$this->view->content= $this->model->VL_ASH_PushVehicleDetails($data);
	//$this->view->render('challan/createVal',true);
  }

  function VL_ASH_PushVehicleChallanDetail(){
	$id=$_GET['id'];
	$driverid =$_GET['gid'];
	//$challanid = $this->model->getNextChallan();
	$challanid = "229931";
	$vehicle= $this->model->getOneVehicle($id);
	$driver = $this->model->getOnedriver($id);
	echo "<pre>";
	print_r($vehicle);
	print_r($driver);
	$obj=json_decode($driver[0]['attributes']);
	$licenseno=$obj->{"licenseno"};
$expirydate=$obj->{"expirydate"};

	$data = array(

		'VEHICLE_NO' => $vehicle[0]['VehicleNo'],
		'CHALLAN_NO' => $challanid,
		'CHALLAN_DATE' => date('Y-m-d'),
		'DRIVER_NAME' =>  $driver[0]['name'],
		'LICENCE_NO' => $licenseno,
		'LICENCE_EXPIRY_DATE' => $expirydate,
		'VEHICLE_LABOUR' => "NIL",
		'VEHICLE_ACCESSORIES' => "NIL"
	);
  print_r($data);
  $this->view->content= $this->model->VL_ASH_PushVehicleChallanDetail($data);
  }

  //VL_ASH_PullVehicleDetails($data)
  function VL_ASH_PullVehicleDetailsNEW(){
	$id=$_GET['id'];
	$challanid =$_GET['challan'];

	$vehicle= $this->model->getOneVehicle($id);


	$data = array(
		'VEHICLE_NO' => $vehicle[0]['VehicleNo'],
		'CHALLAN_NO' => $challanid
	);

  $this->view->content= $this->model->VL_ASH_PullVehicleDetailsNEW($data);

  if($this->view->content['STATUS']!="" and !empty($this->view->content['STATUS'])){
  $data=array(
	'gatepass_no'=>$this->view->content['GATEPASS_NO'],
	'datetime_in'=>ConvertValDate($this->view->content['ENTRY_TIME']),
	'grossweight'=>$this->view->content['GROSS_WEIGHT'],
	'challan_entry_time'=>ConvertValDate($this->view->content['ENTRY_ON']),
	'gross_weight_time'=>ConvertValDate($this->view->content['GROSS_WEIGHT_TIME']),
	'tareweight'=>$this->view->content['TARE_WEIGHT'],
	'tare_weight_time'=>ConvertValDate($this->view->content['TARE_WEIGHT_TIME']),
	'loading_positionid'=>$this->view->content['LOADING_LOCATION'],
	'loading_timeIN'=>ConvertValDate($this->view->content['LOADING_TIME_IN']),
	'loading_timeOUT'=>ConvertValDate($this->view->content['LOADING_TIME_OUT']),
	'netweight'=>$this->view->content['GROSS_WEIGHT']-$this->view->content['TARE_WEIGHT'],
	'datetime_out'=>ConvertValDate($this->view->content['EXIT_TIME']),
	'unloadingpoint'=>$this->view->content['UNLOADING_LOCATION'],
	'unloadingtime'=>ConvertValDate($this->view->content['UNLOADING_TIME']),
	'status' =>  $this->view->content['STATUS']
	);
print_r($data);
$this->view->update_challan=$this->model->update_challan_vehicle($data,$challanid,$vehicle[0]['VehicleNo']);
  }
//print_r($this->view->update_challan);
echo "Challan Updated";

  }

	function create_driver_old(){
		$deviceid=$_REQUEST['deviceid'];
		$driverid=$_REQUEST['driverid'];
		$action=$_REQUEST['action'];
		$creator=$_REQUEST['creator'];
		$lastposition=$this->model->lastPosition($deviceid);
		$pending_challan=$this->model->getAllPendingchallan($deviceid);
		$intime= $pending_challan[0]['datetime_in'];
		$date0=date("Y-m-d H:i:s");
		//$date1=date_create("2013-03-15");
		//$date2=date_create($val);
		//echo "test";
		$date1=strtotime($date0);
		$date2=strtotime($intime);
		//$diff=date_diff($date1,$date2);
		$diff= $date1-$date2;
		//echo $diff;
		$timeDiff = intval( ( $diff / 60 ) % 60 );
		//echo "td=".$timeDiff;
		header('Content-type: application/json');
		//and $timeDiff < 15
     	if(count($pending_challan)>0){
			echo json_encode($pending_challan);
			}
		else{

			if($deviceid!=0 and $driverid!=0){
		$challan=$this->model->getAllChallan('206243');
		$challanno=$challan[0]['challanno']+1;
		$vehicle= $this->model->getOneVehicle($deviceid);
		$driver = $this->model->getOnedriver($driverid);
		//print_r($vehicle);
		//print_r($driver);
		$obj=json_decode($driver[0]['attributes']);
		$licenseno=$obj->{"licenseno"};
		$driver_name = $driver[0]["name"];
		$expirydate=$obj->{"expirydate"};
		//##########

      

		$data = array(
			'VEHICLE_NO' => $vehicle[0]['VehicleNo'],
			'CHALLAN_NO' => $challanno,
			'CHALLAN_DATE' => date('Y-m-d'),
			'DRIVER_NAME' =>  $driver[0]['name'],
			'LICENCE_NO' => $licenseno,
			'LICENCE_EXPIRY_DATE' => $expirydate,
			'VEHICLE_LABOUR' => "NIL",
			'VEHICLE_ACCESSORIES' => "NIL",
			'LOADING_POINT' => 'IPP',
			'UNLOADING_POINT' => 'L T',
			'TRANSPORTER_CODE' => '206243',
			'TRANSPORTER_AUTH' =>'XY6DLWOD72CNSHSG81737NGDGDHRDH21'
		);

		if($vehicle[0]['VehicleNo']!="" and $driver[0]['name']!=""){

		
				// print_r($data);
				$this->view->content= $this->model->VL_ASH_PushVehicleChallanDetail($data);
				$error="";
			}else{
				if($vehicle[0]['VehicleNo']==""){
					$error="VEHICLE QR Has Problem, Contact Sumeet 9040292395";
				}
				if($driver[0]['name']==""){
					$error="DRIVER QR Has Problem, Contact Sumeet 9040292395";
				}
			}
				//print_r($this->view->content);
				if($this->view->content['ACKNOWLEDGEMENT_NO']=='Submitted'){
				//	header('location: index');
			//	echo 'Vedanta Challan Created Successfully';
				$sysmsg= $this->view->content['RESULT'];
				$data=array(
					'id'=>null,
					'challanno'=>$challanno,
					'vehicle_no'=>$vehicle[0]['VehicleNo'],
					'challan_date'=>date('Y-m-d'),
					'deviceid'=>$deviceid,
					'material' => 'FLY ASH',
					'from'=>'IPP',
					'to'=>'L T',
					'status' => 'Submitted',
					'qnty'=>'',
					'ownername'=>'KTC',
					'vendorCode' => '206243',
					'created_by' =>  $creator,
					'driverid'=>$driverid,
					'driver_name'=>$driver_name,
					'license_expiry'=> $expirydate,
					'dlno'=> $licenseno,
					'sysmsg'=> $sysmsg
				);
				//print_r($data);
				$this->view->submit_challan=$this->model->submit_challan($data);
				//echo "challan is:".$this->view->submit_challan;
				$pending_challan=$this->model->getonechallan($this->view->submit_challan);
				echo json_encode($pending_challan);
				}else {
					$pending_challan=$this->model->getonechallan($this->view->submit_challan);
				//	echo json_encode($pending_challan);
				echo 'Vedanta Challan Creation Failed';

				}
		}
		}
	}

	function REGEN(){
		$VEHICLE_NO = $_REQUEST['VEHICLE_NO'];
		$CHALLAN_NO = $_REQUEST['CHALLAN_NO'];
		$id = $_REQUEST['ID'];
		$data = $this->model->getonechallan($id);
		//print_r($data);
		// echo "<vehicle_no>".$data[0]['vehicle_no']."</vehicle_no>";
		// echo "<challan_no>".$data[0]['challanno']."</challan_no>";
		// echo "<challan_date>".$data[0]['challan_date']."</challan_date>";
		// echo "<driver_name>".$data[0]['driver_name']."</driver_name>";
		// echo "<licence_no>".$data[0]['license_expiry']."</licence_no>";
		// echo "<licence_expiry_date>".$data[0]['license_expiry']."</licence_expiry_date>";
		// echo "<vehicle_labour>NIL</vehicle_labour>";
		// echo "<vehicle_accessories>NIL</vehicle_accessories>";
		// echo "<loading_point>IPP</loading_point>";
		// echo "<unloading_point>L T</unloading_point>";

		$mydata = array(
			'VEHICLE_NO' => $data[0]['vehicle_no'],
			'CHALLAN_NO' => $data[0]['challanno'],
			'CHALLAN_DATE' => $data[0]['challan_date'],
			'DRIVER_NAME' =>  $data[0]['driver_name'],
			'LICENCE_NO' => $data[0]['dlno'],
			'LICENCE_EXPIRY_DATE' => $data[0]['license_expiry'],
			'VEHICLE_LABOUR' => "NIL",
			'VEHICLE_ACCESSORIES' => "NIL",
			'LOADING_POINT' => 'IPP',
			'UNLOADING_POINT' => 'L T',
			'TRANSPORTER_CODE' => $data[0]['vendorCode'],
			'TRANSPORTER_AUTH' =>'XY6DLWOD72CNSHSG81737NGDGDHRDH21'
		);
		$this->view->content= $this->model->VL_ASH_PushVehicleChallanDetail($mydata);
		print_r($this->view->content);

	}

	function create_driver_new(){
		$blocked_devices = array(145,288,293,289,291,290,296,295,294,297);
		
		$deviceid=$_REQUEST['deviceid'];
		if (!in_array($deviceid, $blocked_devices)) {
		$driverid=$_REQUEST['driverid'];
		$vendorCode=$_REQUEST['vendorCode'];
		$LP = "IPP";
		$UP = 'L T';
		if($vendorCode=='202521'){
			$LP = "CPP";
			$UP = "BOMALOI";
		}
		$user=$_REQUEST['user'];
		$site=$_REQUEST['site'];
		$lastposition=$this->model->lastPosition($deviceid);
		$pending_challan=$this->model->getAllPendingchallan($deviceid);
		$intime= $pending_challan[0]['datetime_in'];
		$date0=date("Y-m-d H:i:s");
		//$date1=date_create("2013-03-15");
		//$date2=date_create($val);
		//echo "test";
		$date1=strtotime($date0);
		$date2=strtotime($intime);
		//$diff=date_diff($date1,$date2);
		$diff= $date1-$date2;
		//echo $diff;
		$timeDiff = intval( ( $diff / 60 ) % 60 );
		//echo "td=".$timeDiff;
		header('Content-type: application/json');
		//and $timeDiff < 15
     	if(count($pending_challan)>0){
			echo json_encode($pending_challan);
			}
		else{
			$vehicle= $this->model->getOneVehicle($deviceid);
			if($deviceid!=0 and $driverid!=0 and $vehicle[0]['VehicleNo']!=""){
		$challan=$this->model->getAllChallan($vendorCode);
		$challanno=$challan[0]['challanno']+1;
		
		$driver = $this->model->getOnedriver($driverid);
		//print_r($vehicle);
		//print_r($driver);
		$obj=json_decode($driver[0]['attributes']);
		$licenseno=$obj->{"licenseno"};
		$driver_name = $driver[0]["name"];
		$expirydate=$obj->{"expirydate"};
		//##########
		$data = array(
			'VEHICLE_NO' => $vehicle[0]['VehicleNo'],
			'CHALLAN_NO' => $challanno,
			'CHALLAN_DATE' => date('Y-m-d'),
			'DRIVER_NAME' =>  $driver[0]['name'],
			'LICENCE_NO' => $licenseno,
			'LICENCE_EXPIRY_DATE' => $expirydate,
			'VEHICLE_LABOUR' => "NIL",
			'VEHICLE_ACCESSORIES' => "NIL",
			'LOADING_POINT' => $LP,
			'UNLOADING_POINT' => $UP,
			'TRANSPORTER_CODE' => $vendorCode,
			'TRANSPORTER_AUTH' =>'XY6DLWOD72CNSHSG81737NGDGDHRDH21'
		);

		if($vehicle[0]['VehicleNo']!="" and $driver[0]['name']!=""){

		
				// print_r($data);
				$this->view->content= $this->model->VL_ASH_PushVehicleChallanDetail($data);
				$error="";
			}else{
				if($vehicle[0]['VehicleNo']==""){
					$error="VEHICLE QR Has Problem, Contact Sumeet 9040292395";
				}
				if($driver[0]['name']==""){
					$error="DRIVER QR Has Problem, Contact Sumeet 9040292395";
				}
			}
				//print_r($this->view->content);
				if($this->view->content['ACKNOWLEDGEMENT_NO']=='Submitted'){
				//	header('location: index');
			//	echo 'Vedanta Challan Created Successfully';
				$sysmsg= $this->view->content['RESULT'];
				$data=array(
					'id'=>null,
					'challanno'=>$challanno,
					'vehicle_no'=>$vehicle[0]['VehicleNo'],
					'challan_date'=>date('Y-m-d'),
					'deviceid'=>$deviceid,
					'material' => 'FLY ASH',
					'from'=>$LP,
					'to'=>$UP,
					'status' => 'Submitted',
					'qnty'=>'',
					'ownername'=>'KTC',
					'created_by' =>  $user,
					'driverid'=>$driverid,
					'site_id'=>$site,
					'vendorCode' => $vendorCode,
					'driver_name'=>$driver_name,
					'license_expiry'=> $expirydate,
					'dlno'=> $licenseno,
					'sysmsg'=> $sysmsg
				);
				//print_r($data);
				$this->view->submit_challan=$this->model->submit_challan($data);
				$data = array(
					'VEHICLE_NO' => $vehicle[0]['VehicleNo'],
					'CHALLAN_NO' => $challanno);

				$challanid=$challanno;
			
				$this->view->content= $this->model->VL_ASH_PullVehicleDetailsNEW($data);
			  
			  if($this->view->content['STATUS']!=""){
				$data=array(
				  'challan_entry_time'=>ConvertValDate($this->view->content['ENTRY_ON']),
				  'status' =>  $this->view->content['STATUS']
				  );
			  //print_r($data);
			  $this->view->update_challan=$this->model->update_challan_vehicle($data,$challanid,$vehicle[0]['VehicleNo']);
			  }
				//echo "challan is:".$this->view->submit_challan;
				$pending_challan=$this->model->getonechallan($this->view->submit_challan);
				echo json_encode($pending_challan);
				}else {
					$pending_challan=$this->model->getonechallan($this->view->submit_challan);
				//	echo json_encode($pending_challan);
				echo 'Vedanta Challan Creation Failed';

				}
		}
		}

	} //blocked list check
	}

	function create_driver_ktc(){
		$challandate=$_REQUEST['challandate'];
		if($challandate==''){
			$challandate = date('Y-m-d');
		}
		$deviceid=$_REQUEST['deviceid'];
		$driver_name=$_REQUEST['drivername'];
		$licenseno=$_REQUEST['dlno'];
		$expirydate=$_REQUEST['expiry'];
		$user=$_REQUEST['user'];
		$LL=$_REQUEST['LL'];
		$UL=$_REQUEST['UL'];
		$NET=$_REQUEST['NET'];
		$gatepass_no = $_REQUEST['gatepass'];
		$lastposition=$this->model->lastPosition($deviceid);
		$pending_challan=$this->model->getAllPendingchallanKTC($deviceid);
		$intime= $pending_challan[0]['datetime_in'];
		$date0=date("Y-m-d H:i:s");
		//$date1=date_create("2013-03-15");
		//$date2=date_create($val);
		//echo "test";
		$date1=strtotime($date0);
		$date2=strtotime($intime);
		//$diff=date_diff($date1,$date2);
		$diff= $date1-$date2;
		//echo $diff;
		$timeDiff = intval( ( $diff / 60 ) % 60 );
		//echo "td=".$timeDiff;
		header('Content-type: application/json');
		//and $timeDiff < 15
     	if(count($pending_challan)>0){
			echo json_encode($pending_challan);
			}
		else{
		$vehicle= $this->model->getOneVehicle($deviceid);
		$challan=$this->model->KTCgetChallanByDateMAX();
		$challanno=$challan[0]['Total']+1;

				$data=array(
					'id'=>null,
					'challanno'=>$challanno,
					'vehicle_no'=>$vehicle[0]['VehicleNo'],
					'challan_date'=>$challandate,
					'deviceid'=>$deviceid,
					'gatepass_no'=>$gatepass_no,
					'material' => '',
					'from'=>$LL,
					'to'=>$UL,
					'datetime_in'=>$challandate." ".date("H:i:s"),
					'status' => 'VEHICLE_LOADED',
					'netweight'=>$NET,
					'ownername'=>$vehicle[0]['OwnerCode'],
					'created_by' =>  $user,
					'driverid'=>'0',
					'site_id'=>$site,
					'driver_name'=>$driver_name,
					'sysmsg'=> $sysmsg
				);
			//	print_r($data);
				$this->view->submit_challan=$this->model->submit_challanKTC($data);
				$title = $LL. " TRIP ALERT";
				$time = date("H:i:s d/m/Y");
				$message= "Vehicle ".$vehicle[0]['VehicleNo']. " Loaded from ".$LL. " to ".$UL." with Driver : ".$driver_name." at Time : ".$challandate." ".date("H:i:s");
				Onesignal::sendMessageAll($title, $message);
			
					$outtext = $title."<br>".$message;
					$time = date("Y-m-d H:i:s");
					$data = array(
						'id' => NULL,
						'deviceid' =>$deviceid,
						'servertime' => $time,
						'msg'=> $outtext,
						'type'=> 'tripalert'
					);
				$this->model->insert_smsAlerts($data);
			  
			  }
				//echo "challan is:".$this->view->submit_challan;
				$pending_challan=$this->model->getonechallanKTC($this->view->submit_challan);
				echo json_encode($pending_challan);
				
		}
		
		function out_challan(){
			$deviceid=$_REQUEST['deviceid'];
			$challan_new=$_REQUEST['challan_new'];
			$lastposition=$this->model->lastPosition($deviceid);
			$out_challan=$this->model->getAllPendingchallanKTC($deviceid);
			
			$arg= $out_challan[0]['id'];
			header('Content-type: application/json');
				$data=array(
					'challan_new' => $challan_new,
					'out_positionid'=>$lastposition[0]['id'],
					'status' => 'VEHICLE_UNLOADED',
					'datetime_out' => date('Y-m-d H:i:s')
					);
				//	print_r($data);
				//	echo "arg=".$arg;
			$this->model->update_challanKTC($data,$arg);
			$pending_challan=$this->model->getonechallanKTC($arg);
			echo json_encode($pending_challan);
			}
			

  function TestOne(){
	$title = "Kya Kar Rahe Ho Bro";
	$message = "Are you on the way to JSG ?";
	//HOnor
	$users  = array("001de465-ff89-4776-8b79-a40b5e4a258f");

	//Nokia
	//$users  = array("cb10645b-bbd4-4beb-872c-ce7ccc67d561");
	Onesignal::sendMessageSpecific($title, $message,$users);
  }

	function create_driver_text(){
		$blocked_devices = array(145,288,293,289,291,290,296,295,294,297);
		
		$deviceid=$_REQUEST['deviceid'];
		if (!in_array($deviceid, $blocked_devices)) {
		$driver_name=$_REQUEST['drivername'];
		$licenseno=$_REQUEST['dlno'];
		$expirydate=$_REQUEST['expiry'];
		$vendorCode=$_REQUEST['vendorCode'];
		$user=$_REQUEST['user'];
		$site=$_REQUEST['site'];
		$lastposition=$this->model->lastPosition($deviceid);
		$pending_challan=$this->model->getAllPendingchallan($deviceid);
		$intime= $pending_challan[0]['datetime_in'];
		$date0=date("Y-m-d H:i:s");
		//$date1=date_create("2013-03-15");
		//$date2=date_create($val);
		//echo "test";
		$date1=strtotime($date0);
		$date2=strtotime($intime);
		//$diff=date_diff($date1,$date2);
		$diff= $date1-$date2;
		//echo $diff;
		$timeDiff = intval( ( $diff / 60 ) % 60 );
		//echo "td=".$timeDiff;
		header('Content-type: application/json');
		//and $timeDiff < 15
     	if(count($pending_challan)>0){
			echo json_encode($pending_challan);
			}
		else{
			$vehicle= $this->model->getOneVehicle($deviceid);
			if($deviceid!=0 and $driver_name!="" and $vehicle[0]['VehicleNo']!=""){
		$challan=$this->model->getAllChallan($vendorCode);
		$challanno=$challan[0]['challanno']+1;
		
		// $driver = $this->model->getOnedriver($driverid);
		// //print_r($vehicle);
		// //print_r($driver);
		// $obj=json_decode($driver[0]['attributes']);
		// $licenseno=$obj->{"licenseno"};
		// $driver_name = $driver[0]["name"];
		// $expirydate=$obj->{"expirydate"};
		//##########
		$data = array(
			'VEHICLE_NO' => $vehicle[0]['VehicleNo'],
			'CHALLAN_NO' => $challanno,
			'CHALLAN_DATE' => date('Y-m-d'),
			'DRIVER_NAME' =>  $driver_name,
			'LICENCE_NO' => $licenseno,
			'LICENCE_EXPIRY_DATE' => $expirydate,
			'VEHICLE_LABOUR' => "NIL",
			'VEHICLE_ACCESSORIES' => "NIL",
			'LOADING_POINT' => 'IPP',
			'UNLOADING_POINT' => 'L T',
			'TRANSPORTER_CODE' => $vendorCode,
			'TRANSPORTER_AUTH' =>'XY6DLWOD72CNSHSG81737NGDGDHRDH21'
		);

		if($vehicle[0]['VehicleNo']!="" and $driver_name!=""){

		
				// print_r($data);
				$this->view->content= $this->model->VL_ASH_PushVehicleChallanDetail($data);
				$error="";
			}else{
				if($vehicle[0]['VehicleNo']==""){
					$error="VEHICLE QR Has Problem, Contact Sumeet 9040292395";
				}
				if($driver_name==""){
					$error="DRIVER Cannot be Blank, Contact Sumeet 9040292395";
				}
			}
				//print_r($this->view->content);
				if($this->view->content['ACKNOWLEDGEMENT_NO']=='Submitted'){
				//	header('location: index');
			//	echo 'Vedanta Challan Created Successfully';
				$sysmsg= $this->view->content['RESULT'];
				$data=array(
					'id'=>null,
					'challanno'=>$challanno,
					'vehicle_no'=>$vehicle[0]['VehicleNo'],
					'challan_date'=>date('Y-m-d'),
					'deviceid'=>$deviceid,
					'material' => 'FLY ASH',
					'from'=>'IPP',
					'to'=>'L T',
					'status' => 'Submitted',
					'qnty'=>'',
					'ownername'=>'KTC',
					'created_by' =>  $user,
					'driverid'=>'0',
					'site_id'=>$site,
					'vendorCode' => $vendorCode,
					'driver_name'=>$driver_name,
					'license_expiry'=> $expirydate,
					'dlno'=> $licenseno,
					'sysmsg'=> $sysmsg
				);
				//print_r($data);
				$this->view->submit_challan=$this->model->submit_challan($data);
				$data = array(
					'VEHICLE_NO' => $vehicle[0]['VehicleNo'],
					'CHALLAN_NO' => $challanno);

				$challanid=$challanno;
			
				$this->view->content= $this->model->VL_ASH_PullVehicleDetailsNEW($data);
			  
			  if($this->view->content['STATUS']!=""){
				$data=array(
				  'challan_entry_time'=>ConvertValDate($this->view->content['ENTRY_ON']),
				  'status' =>  $this->view->content['STATUS']
				  );
			  //print_r($data);
			  $this->view->update_challan=$this->model->update_challan_vehicle($data,$challanid,$vehicle[0]['VehicleNo']);
			  }
				//echo "challan is:".$this->view->submit_challan;
				$pending_challan=$this->model->getonechallan($this->view->submit_challan);
				echo json_encode($pending_challan);
				}else {
					$pending_challan=$this->model->getonechallan($this->view->submit_challan);
				//	echo json_encode($pending_challan);
				echo 'Vedanta Challan Creation Failed';

				}
		}
		}

	} //blocked list check
	}


		

		

    

		function load_challan(){
			$deviceid=$_REQUEST['deviceid'];
			$arg=$_REQUEST['id'];
			$loadingpoint=$this->model->lastPosition($deviceid);
			header('Content-type: application/json');
				$data=array(
					'loading_positionid'=>$loadingpoint[0]['id'],
					'loading_time' => date('Y-m-d H:i:s')
					);
					
			$this->view->update_challan=$this->model->update_challan($data,$arg);
			$pending_challan=$this->model->getonechallan($arg);
			echo json_encode($pending_challan);
			}

		function unload_challan(){
		$deviceid=$_REQUEST['deviceid'];
		$arg=$_REQUEST['id'];
		$unloadingpoint=$this->model->lastPosition($deviceid);
		header('Content-type: application/json');
			$data=array(
				'unloadingpoint'=>$unloadingpoint[0]['id'],
				'unloadingtime' => date('Y-m-d H:i:s')
				);		
		$this->view->update_challan=$this->model->update_challan($data,$arg);
		$pending_challan=$this->model->getonechallan($arg);
		echo json_encode($pending_challan);
		}


		function VL_ASH_Login(){
			$username = $_REQUEST['username'];
			$password = $_REQUEST['password'];
			header('Content-type: application/json');
			$data=array(
				'username'=>$username,
				'password' => $password
				);	
			$getlogin=$this->model->VL_ASH_Login($data);
			echo json_encode($getlogin);
		}

		function VL_ASH_Vehicle_Entry(){
			$VEHICLE_NO = $_REQUEST['VEHICLE_NO'];
			$CHALLAN_NO = $_REQUEST['CHALLAN_NO'];
			header('Content-type: application/json');
			$data=array(
				'VEHICLE_NO'=>$VEHICLE_NO,
				'CHALLAN_NO' => $CHALLAN_NO
				);	
			$getEntry=$this->model->VL_ASH_Vehicle_Entry($data);
			echo json_encode($getEntry);
			
			$this->view->content= $this->model->VL_ASH_PullVehicleDetailsNEW($data);
			
			if($this->view->content['STATUS']!="" and !empty($this->view->content['STATUS'])){
			  $data=array(
				'gatepass_no'=>$this->view->content['GATEPASS_NO'],
				'datetime_in'=>ConvertValDate($this->view->content['ENTRY_TIME']),
				'grossweight'=>$this->view->content['GROSS_WEIGHT'],
				'gross_weight_time'=>ConvertValDate($this->view->content['GROSS_WEIGHT_TIME']),
				'tareweight'=>$this->view->content['TARE_WEIGHT'],
				'tare_weight_time'=>ConvertValDate($this->view->content['TARE_WEIGHT_TIME']),
				'loading_positionid'=>$this->view->content['LOADING_LOCATION'],
				'loading_timeIN'=>ConvertValDate($this->view->content['LOADING_TIME_IN']),
				'loading_timeOUT'=>ConvertValDate($this->view->content['LOADING_TIME_OUT']),
				'netweight'=>$this->view->content['GROSS_WEIGHT']-$this->view->content['TARE_WEIGHT'],
				'datetime_out'=>ConvertValDate($this->view->content['EXIT_TIME']),
				'unloadingpoint'=>$this->view->content['UNLOADING_LOCATION'],
				'unloadingtime'=>ConvertValDate($this->view->content['UNLOADING_TIME']),
				'status' =>  $this->view->content['STATUS']
				);
			//print_r($data);
			$this->view->update_challan=$this->model->update_challan_vehicle($data,$CHALLAN_NO,$VEHICLE_NO);
			}
		}

		function VL_ASH_Vehicle_Exit(){
			$VEHICLE_NO = $_REQUEST['VEHICLE_NO'];
			$CHALLAN_NO = $_REQUEST['CHALLAN_NO'];
			header('Content-type: application/json');
			$data=array(
				'VEHICLE_NO'=>$VEHICLE_NO,
				'CHALLAN_NO' => $CHALLAN_NO
				);	
			$getExit=$this->model->VL_ASH_Vehicle_Exit($data);
			echo json_encode($getExit);
			$this->view->content= $this->model->VL_ASH_PullVehicleDetailsNEW($data);
			if($this->view->content['STATUS']!="" and !empty($this->view->content['STATUS'])){
			  $data=array(
				'gatepass_no'=>$this->view->content['GATEPASS_NO'],
				'datetime_in'=>ConvertValDate($this->view->content['ENTRY_TIME']),
				'grossweight'=>$this->view->content['GROSS_WEIGHT'],
				'gross_weight_time'=>ConvertValDate($this->view->content['GROSS_WEIGHT_TIME']),
				'tareweight'=>$this->view->content['TARE_WEIGHT'],
				'tare_weight_time'=>ConvertValDate($this->view->content['TARE_WEIGHT_TIME']),
				'loading_positionid'=>$this->view->content['LOADING_LOCATION'],
				'loading_timeIN'=>ConvertValDate($this->view->content['LOADING_TIME_IN']),
				'loading_timeOUT'=>ConvertValDate($this->view->content['LOADING_TIME_OUT']),
				'netweight'=>$this->view->content['GROSS_WEIGHT']-$this->view->content['TARE_WEIGHT'],
				'datetime_out'=>ConvertValDate($this->view->content['EXIT_TIME']),
				'unloadingpoint'=>$this->view->content['UNLOADING_LOCATION'],
				'unloadingtime'=>ConvertValDate($this->view->content['UNLOADING_TIME']),
				'status' =>  $this->view->content['STATUS']
				);
			//print_r($data);
			$this->view->update_challan=$this->model->update_challan_vehicle($data,$CHALLAN_NO,$VEHICLE_NO);
			}
		}

		//VL_ASH_Vehicle_latest_Data
		function VL_ASH_Vehicle_latest_Data(){
			$VEHICLE_NO = $_REQUEST['VEHICLE_NO'];
			header('Content-type: application/json');
			$data=array(
				'VEHICLE_NO'=>$VEHICLE_NO
				);	
			$getExit=$this->model->VL_ASH_Vehicle_latest_Data($data);
			if($getExit['VEHICLE_NO']!=null){
			echo json_encode($getExit);
			}else{
				echo "no pending challan";
			}
		}

function VL_ALL_Vehicle_Scan_Time(){
	$GATEPASS = $_REQUEST['GATEPASS'];
	$USERID = $_REQUEST['USERID'];
	$LATLONG =  $_REQUEST['LATLONG'];
	header('Content-type: application/json');
	$data=array(
		'GATEPASS'=>$GATEPASS,
		'USERID' => $USERID,
		'LATLONG' => $LATLONG
		);	
	$getScan=$this->model->VL_ALL_Vehicle_Scan_Time($data);
	echo json_encode($getScan);
}


		//VL_ASH_Ash_vehicle_Loading
		function VL_ASH_vehicle_Loading_IN(){
			$VEHICLE_NO = $_REQUEST['VEHICLE_NO'];
			$CHALLAN_NO = $_REQUEST['CHALLAN_NO'];
			$LOADING_LOCATION = $_REQUEST['LOADING_LOCATION'];		
			header('Content-type: application/json');
			$data=array(
				'VEHICLE_NO'=>$VEHICLE_NO,
				'CHALLAN_NO' => $CHALLAN_NO,
				'LOADING_LOCATION' => $LOADING_LOCATION
				);	
			$getExit=$this->model->VL_ASH_vehicle_Loading_IN($data);
			echo json_encode($getExit);
			$data=array(
				'VEHICLE_NO'=>$VEHICLE_NO,
				'CHALLAN_NO' => $CHALLAN_NO
				);	
			$this->view->content= $this->model->VL_ASH_PullVehicleDetailsNEW($data);
			if($this->view->content['STATUS']!="" and !empty($this->view->content['STATUS'])){
			
			  $data=array(
				'gatepass_no'=>$this->view->content['GATEPASS_NO'],
				'datetime_in'=>ConvertValDate($this->view->content['ENTRY_TIME']),
				'grossweight'=>$this->view->content['GROSS_WEIGHT'],
				'gross_weight_time'=>ConvertValDate($this->view->content['GROSS_WEIGHT_TIME']),
				'tareweight'=>$this->view->content['TARE_WEIGHT'],
				'tare_weight_time'=>ConvertValDate($this->view->content['TARE_WEIGHT_TIME']),
				'loading_positionid'=>$this->view->content['LOADING_LOCATION'],
				'loading_timeIN'=>ConvertValDate($this->view->content['LOADING_TIME_IN']),
				'loading_timeOUT'=>ConvertValDate($this->view->content['LOADING_TIME_OUT']),
				'netweight'=>$this->view->content['GROSS_WEIGHT']-$this->view->content['TARE_WEIGHT'],
				'datetime_out'=>ConvertValDate($this->view->content['EXIT_TIME']),
				'unloadingpoint'=>$this->view->content['UNLOADING_LOCATION'],
				'unloadingtime'=>ConvertValDate($this->view->content['UNLOADING_TIME']),
				'status' =>  $this->view->content['STATUS']
				);
			//print_r($data);
			$this->view->update_challan=$this->model->update_challan_vehicle($data,$CHALLAN_NO,$VEHICLE_NO);
			}
		}

		function VL_ASH_vehicle_Loading_OUT(){
			$VEHICLE_NO = $_REQUEST['VEHICLE_NO'];
			$CHALLAN_NO = $_REQUEST['CHALLAN_NO'];
			$LOADING_LOCATION = $_REQUEST['LOADING_LOCATION'];
			header('Content-type: application/json');
			$data=array(
				'VEHICLE_NO'=>$VEHICLE_NO,
				'CHALLAN_NO' => $CHALLAN_NO,
				'LOADING_LOCATION' => $LOADING_LOCATION
				);	
			$getExit=$this->model->VL_ASH_vehicle_Loading_OUT($data);
			echo json_encode($getExit);
			$data=array(
				'VEHICLE_NO'=>$VEHICLE_NO,
				'CHALLAN_NO' => $CHALLAN_NO
				);	
			$this->view->content= $this->model->VL_ASH_PullVehicleDetailsNEW($data);
			if($this->view->content['STATUS']!="" and !empty($this->view->content['STATUS'])){
			
			  $data=array(
				'gatepass_no'=>$this->view->content['GATEPASS_NO'],
				'datetime_in'=>ConvertValDate($this->view->content['ENTRY_TIME']),
				'grossweight'=>$this->view->content['GROSS_WEIGHT'],
				'gross_weight_time'=>ConvertValDate($this->view->content['GROSS_WEIGHT_TIME']),
				'tareweight'=>$this->view->content['TARE_WEIGHT'],
				'tare_weight_time'=>ConvertValDate($this->view->content['TARE_WEIGHT_TIME']),
				'loading_positionid'=>$this->view->content['LOADING_LOCATION'],
				'loading_timeIN'=>ConvertValDate($this->view->content['LOADING_TIME_IN']),
				'loading_timeOUT'=>ConvertValDate($this->view->content['LOADING_TIME_OUT']),
				'netweight'=>$this->view->content['GROSS_WEIGHT']-$this->view->content['TARE_WEIGHT'],
				'datetime_out'=>ConvertValDate($this->view->content['EXIT_TIME']),
				'unloadingpoint'=>$this->view->content['UNLOADING_LOCATION'],
				'unloadingtime'=>ConvertValDate($this->view->content['UNLOADING_TIME']),
				'status' =>  $this->view->content['STATUS']
				);
			//print_r($data);
			$this->view->update_challan=$this->model->update_challan_vehicle($data,$CHALLAN_NO,$VEHICLE_NO);
			}
		}

		function VL_ASH_Vehicle_Unloading(){
			$VEHICLE_NO = $_REQUEST['VEHICLE_NO'];
			$CHALLAN_NO = $_REQUEST['CHALLAN_NO'];
			$LOCATION = $_REQUEST['LOADING_LOCATION'];
			$unloadingpoint=$this->model->lastPosition($LOCATION);	
			$LOADING_LOCATION=$unloadingpoint[0]['latitude'].",".$unloadingpoint[0]['longitude'];
			header('Content-type: application/json');
			$data=array(
				'VEHICLE_NO'=>$VEHICLE_NO,
				'CHALLAN_NO' => $CHALLAN_NO,
				'LOADING_LOCATION' => $LOADING_LOCATION
				);
			//	print_r($data);	
			$getExit=$this->model->VL_ASH_Vehicle_Unloading($data);
			echo json_encode($getExit);
		}

		//VL_ASH_Vehicle_Weight_Update
		function VL_ASH_Vehicle_Weight_Update(){
			$VEHICLE_NO = $_REQUEST['VEHICLE_NO'];
			$CHALLAN_NO = $_REQUEST['CHALLAN_NO'];
			$TYPE = $_REQUEST['TYPE'];
			$WEIGHT = $_REQUEST['WEIGHT'];
			header('Content-type: application/json');
			$data=array(
				'VEHICLE_NO'=>$VEHICLE_NO,
				'CHALLAN_NO' => $CHALLAN_NO,
				'TYPE' => $TYPE,
				'WEIGHT' => $WEIGHT
				);
				//print_r($data);	
			$getExit=$this->model->VL_ASH_Vehicle_Weight_Update($data);
			echo json_encode($getExit);
		}
      
    ///////////////////////////////////////// COAL CHALLAN ////////////////////////////////////////////
  ///  ********************************************************************************************//
    
    
    function coalchallan(){
        	
       
	$this->view->render("challan/coalchallan");
	
}

function getallcoalchallan(){
 $this->view->allcoalchallan = $this->model->coalchallan();
	echo json_encode($this->view->allcoalchallan);
}

function view_coalchallan() 
{
	
	$data = $_REQUEST;
	if($data["id"]=="")
		{
			$this->view->pick="";
			$this->view->data=$data;
		} 
	else 
		{
			$this->view->pick=$data["id"];
			$this->view->content= $this->model->view_coalchallan($data["id"]);
}
	echo json_encode($this->view->content);
}

function delete_coalchallan(){
	$id=$_REQUEST["id"];
	$this->model->delete_coalchallan($id);
	
}
function add_coalchallan(){
    
    
	$data = array( 
		"id" => null,
        "Slno" => $_REQUEST["Slno"],
        "TPNo" => $_REQUEST["TPNo"],
        "TPdate" => $_REQUEST["TPdate"],
        "PassBookNo" => $_REQUEST["PassBookNo"],
        "AvibahanPassNo" => $_REQUEST["AvibahanPassNo"],
        "EINo" => $_REQUEST["EINo"],
        "EIDt" => $_REQUEST["EIDt"],
        "GCV" => $_REQUEST["GCV"],
        "SOURCE" => $_REQUEST["SOURCE"],
        "BasicPrice" => $_REQUEST["BasicPrice"],
        "IGST" => $_REQUEST["IGST"],
        "Partygrosswt" => $_REQUEST["Partygrosswt"],
        "Partytarewt" => $_REQUEST["Partytarewt"],
        "ChQty" => $_REQUEST["ChQty"],
        "VehNo" => $_REQUEST["VehNo"],
        "FrChNo" => $_REQUEST["FrChNo"],
        "FrChDt" => $_REQUEST["FrChDt"],
        "GENo" => $_REQUEST["GENo"],
        "GEDate" => $_REQUEST["GEDate"],
        "CYRecDt" => $_REQUEST["CYRecDt"],
        "Gross" => $_REQUEST["Gross"],
        "Tare" => $_REQUEST["Tare"],
        "Net" => $_REQUEST["Net"],
        "GRNQY" => $_REQUEST["GRNQY"],
        "TOLERANCE" => $_REQUEST["TOLERANCE"],
        "SHORTAGE" => $_REQUEST["SHORTAGE"],
        "TRPQTY" => $_REQUEST["TRPQTY"],
        "Transporter" => $_REQUEST["Transporter"],
         "partyname" => $_REQUEST["partyname"],
        "status" => 'LOADED'
			   );
    //print_r($data);
	$this->model->add_coalchallan($data);
 
    
	
}
    
    /////////////////////********************* mobile link for add coal challan *****************/////////////
    
function add_coalchallanMob(){
   header('Content-type: application/json');
	$data = array( 
		"id" => null,
        "Slno" => $_REQUEST["Slno"],
        "TPNo" => $_REQUEST["TPNo"],
        "TPdate" => date('Y-m-d H:i:s'),
        "PassBookNo" => $_REQUEST["PassBookNo"],
        "AvibahanPassNo" => $_REQUEST["AvibahanPassNo"],
        "EINo" => $_REQUEST["EINo"],
        "EIDt" => $_REQUEST["EIDt"],
        "GCV" => $_REQUEST["GCV"],
        "SOURCE" => $_REQUEST["SOURCE"],
        "BasicPrice" => $_REQUEST["BasicPrice"],
        "IGST" => $_REQUEST["IGST"],
        "Partygrosswt" => $_REQUEST["Partygrosswt"],
        "Partytarewt" => $_REQUEST["Partytarewt"],
        "ChQty" => $_REQUEST["ChQty"],
        "VehNo" => $_REQUEST["VehNo"],
        "FrChNo" => $_REQUEST["FrChNo"],
        "FrChDt" => $_REQUEST["FrChDt"],
        "GENo" => $_REQUEST["GENo"],
        "GEDate" => $_REQUEST["GEDate"],
        "CYRecDt" => $_REQUEST["CYRecDt"],
        "Gross" => $_REQUEST["Gross"],
        "Tare" => $_REQUEST["Tare"],
        "Net" => $_REQUEST["Net"],
        "GRNQY" => $_REQUEST["GRNQY"],
        "TOLERANCE" => $_REQUEST["TOLERANCE"],
        "SHORTAGE" => $_REQUEST["SHORTAGE"],
        "TRPQTY" => $_REQUEST["TRPQTY"],
        "Transporter" => $_REQUEST["Transporter"],
        "partyname" => $_REQUEST["partyname"],
        "status" => 'LOADED'
			   );
    //print_r($data);
	$returnId = $this->model->add_coalchallan($data);
   //echo $addcoalchallan;
     $addcoalchallan=$this->model->view_coalchallan($returnId);
    echo json_encode($addcoalchallan);
	
}
    
    function createcoal_challanMob(){
		$VehNo=$_REQUEST['VehNo'];
		//$action=$_REQUEST['action'];
	//	$lastposition=$this->model->lastPosition($deviceid);
		$pendingCoal_challan=$this->model->getAllPendingCoalchallan($VehNo);
		
		header('Content-type: application/json');
		//and $timeDiff < 15
     	if(count($pendingCoal_challan)>0){
			echo json_encode($pendingCoal_challan);
			}
		else{
		    echo "no pending challan";
		}
		
		}

function edit_coalchallan(){
	$arg=$_REQUEST["id"];
	$data = array(
        "Slno" => $_REQUEST["Slno"],
        "TPNo" => $_REQUEST["TPNo"],
        "TPdate" => $_REQUEST["TPdate"],
        "PassBookNo" => $_REQUEST["PassBookNo"],
        "AvibahanPassNo" => $_REQUEST["AvibahanPassNo"],
        "EINo" => $_REQUEST["EINo"],
        "EIDt" => $_REQUEST["EIDt"],
        "GCV" => $_REQUEST["GCV"],
        "SOURCE" => $_REQUEST["SOURCE"],
        "BasicPrice" => $_REQUEST["BasicPrice"],
        "IGST" => $_REQUEST["IGST"],
        "Partygrosswt" => $_REQUEST["Partygrosswt"],
        "Partytarewt" => $_REQUEST["Partytarewt"],
        "ChQty" => $_REQUEST["ChQty"],
        "VehNo" => $_REQUEST["VehNo"],
        "FrChNo" => $_REQUEST["FrChNo"],
        "FrChDt" => $_REQUEST["FrChDt"],
        "GENo" => $_REQUEST["GENo"],
        "GEDate" => date('Y-m-d H:i:s'),
        "CYRecDt" => $_REQUEST["CYRecDt"],
        "Gross" => $_REQUEST["Gross"],
        "Tare" => $_REQUEST["Tare"],
        "Net" => $_REQUEST["Net"],
        "GRNQY" => $_REQUEST["GRNQY"],
        "TOLERANCE" => $_REQUEST["TOLERANCE"],
        "SHORTAGE" => $_REQUEST["SHORTAGE"],
        "TRPQTY" => $_REQUEST["TRPQTY"],
        "partyname" => $_REQUEST["partyname"],
        "Transporter" => $_REQUEST["Transporter"],
       "status" => 'UNLOADED'
			   );
	$this->model->edit_coalchallan($data,$arg);
}
    
    function getCoalChallanToday(){
			$date=date('Y-m-d');
      
				header('Content-type: application/json');
			$CoalChallanToday=$this->model->getAllCoalChallanDateWise($date);
			echo json_encode($CoalChallanToday);
			
		}
		function getCoalChallanYesterday(){
			
			$date=date('Y-m-d');
				$datem = strtotime($date);
				$datem = strtotime("-1 day", $datem);
				$datey= date('Y-m-d', $datem);
         
				header('Content-type: application/json');
			$CoalChallanYest=$this->model->getAllCoalChallanDateWise($datey);
			echo json_encode($CoalChallanYest);
			
		}
    function getLastCoalChallanSlNo(){
			
				header('Content-type: application/json');
			$LastCoalChallanSlNo=$this->model->getLastCoalChallanSlNo();
			echo json_encode($LastCoalChallanSlNo);
			
		}
    
    
///////////////////////////////////// Vehicle Movement ///////////////////// 

    function CheckVehicleMovement(){
        
        $deviceid = $_REQUEST['deviceid'];
        $pending_vehicle = $this->model->CheckVehicleMovement($deviceid);
        //echo json_encode($pending_vehicle); 
        $chkVeh = count($pending_vehicle);
        if($chkVeh == ""){
            
            echo 'New Entry';
        }else{
            
           echo json_encode($pending_vehicle); 
            
        }
        
    }
    
    function add_vehiclemovement(){
        
	$data = array( 
				"id" => null, "deviceid" => $_REQUEST["deviceid"],"vehicleno" => $_REQUEST["vehicleno"],"in_time" => $_REQUEST["in_time"],"location" => $_REQUEST["location"],"employeeid" => $_REQUEST["employeeid"],"reason" => $_REQUEST["reason"],"admin_id" => $_REQUEST["admin_id"]
			   );
	$LastId = $this->model->add_vehiclemovement($data);
    $this->view->VehicleMov = $this->model->getLastInsertedVehicle($LastId);
        echo json_encode($this->view->VehicleMov);
       
}
    
    function edit_vehiclemovement(){
	$arg=$_REQUEST["id"];
	$data = array( "out_time" => $_REQUEST["out_time"]
			   );
	$this->model->edit_vehiclemovement($data,$arg);
        $this->view->UpdateVeh = $this->model->getLastInsertedVehicle($arg);
        echo json_encode($this->view->UpdateVeh);
}
    
    function getVehicleMovementToday(){
			$date=date('Y-m-d');
      
				header('Content-type: application/json');
			$VehMovement=$this->model->getAllVehicleMovement($date);
			echo json_encode($VehMovement);
			
		}
		function getVehicleMovementYesterday(){
			
			$date=date('Y-m-d');
				$datem = strtotime($date);
				$datem = strtotime("-1 day", $datem);
				$datey= date('Y-m-d', $datem);
         
				header('Content-type: application/json');
			$VehMovement=$this->model->getAllVehicleMovement($datey);
			echo json_encode($VehMovement);
			
		}
    
     function vendortrip(){
        
      $this->view->render('challan/vendortrip');
        
    }
    
 function vendortripEntry(){
     $date= $_REQUEST['date'];
     $vendorcode = $_REQUEST['vendorcode'];
       // echo "jkhjk1";
      $vendortripEntry = $this->model->vendortripEntry($date,$vendorcode);
    // echo "jkjk2";
          echo json_encode($vendortripEntry);
        
    }
    
	}