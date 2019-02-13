<?php
class Reports extends Controller {
	function __construct() {
		parent::__construct();
		   Session::init();
		   		//Auth::handleLogin();
	}
    
    function attendance(){
        
        $this->view->render('reports/attendance');
    }
    
    function getattendance(){
        
        $from=$_REQUEST['from'];
        $to=$_REQUEST['to'];
        $this->view->getattendance= $this->model->getattendance($from,$to);
        echo json_encode($this->view->getattendance);
    }
	function getAllemployee(){
        
       
        $this->view->getemployee= $this->model->getAllemployee();
        echo json_encode($this->view->getemployee);
    }
	function historicplayback(){
				//$devices=$this->model->getAlldevices();
				$this->view->allgroups = $this->model->getAllgroups();
				$this->view->Alldevices = $this->model->getAlldevices();
				$this->view->Allgeofences = $this->model->getAllgeofences();
				$this->view->mdate=$_REQUEST['date'];
				$this->view->deviceid=$_REQUEST['deviceid'];
				$this->view->mspeed=200;
				$this->view->mdistance=$_REQUEST['distance'];
				$this->view->fuelfillfactor=$_REQUEST['fuelfillfactor'];
				$this->view->fuelstolenfactor=$_REQUEST['fuelstolenfactor'];
				$trips=$this->model->events_trip($this->view->mdate,$this->view->deviceid);
				 //print_r($trips);
				if($_REQUEST['flag']==1){
					
					$this->view->content= $this->model->dailyLogsZero($this->view->deviceid,$this->view->mdate);
				}
				if($_REQUEST['flag']==2){
					
					$this->view->content= $this->model->dailyLogsFast($this->view->deviceid,$this->view->mdate);
					
				}
				
				if($_REQUEST['flag']==''){
				
				$this->view->content= $this->model->dailyLogs($this->view->deviceid,$this->view->mdate,$this->view->mspeed);
				
				}
				//$date='2017-08-18';
				$getStartDistance = $this->model->getStartDistance($date);
				//echo $getStartDistance;
				$newLogs = $this->model->newLogs();
				//echo "<pre>";
				//print_r($this->view->content);
				$this->view->render('reports/historicplayback');
				}
				
				
                function gethistoricplayback(){
				//$devices=$this->model->getAlldevices();
				//$this->view->allgroups = $this->model->getAllgroups();
				$this->view->Alldevices = $this->model->getAlldevices();
				//$this->view->Allgeofences = $this->model->getAllgeofences();
				$this->view->mdate=$_REQUEST['date'];
				$this->view->deviceid=$_REQUEST['deviceid'];
				//$this->view->mspeed=200;
				//$this->view->mdistance=$_REQUEST['distance'];
				//$this->view->fuelfillfactor=$_REQUEST['fuelfillfactor'];
				//$this->view->fuelstolenfactor=$_REQUEST['fuelstolenfactor'];
				$trips=$this->model->events_trip($this->view->mdate,$this->view->deviceid);
				 //print_r($trips);
				if($_REQUEST['flag']==1){
					
					$this->view->content= $this->model->dailyLogsZero($this->view->deviceid,$this->view->mdate);
				}
				if($_REQUEST['flag']==2){
					
					$this->view->content= $this->model->dailyLogsFast($this->view->deviceid,$this->view->mdate);
					
				}
				
				if($_REQUEST['flag']==''){
				
				$this->view->content= $this->model->dailyLogs($this->view->deviceid,$this->view->mdate,$this->view->mspeed);
				
				}
				//$date='2017-08-18';
				//$getStartDistance = $this->model->getStartDistance($date);
				//echo $getStartDistance;
				$newLogs = $this->model->newLogs();
                    echo json_encode($this->view->content);
				
				}
	/////////////////////*******************************/////////////////////////
								/*Reports*/
		
   /////////////////////*******************************/////////////////////////
	
	
	function reportssummary()
	{
		$this->view->deviceId=$_REQUEST['deviceId'];
		$to=$_REQUEST['to']."T".date("H:m:s");
		$from=$_REQUEST['from']."T00:00:00";
		$this->view->to=$_REQUEST['to'];
		$this->view->from=$_REQUEST['from'];
		$this->view->Alldevices = $this->model->getAlldevices();
		Session::init();
		   	Auth::handleLogin();
		$email=Session::get('email');
		$password=Session::get('password');
		$t=Traccar::login($email,$password);
		//$t=Traccar::login($email,$password);
		if($t->responseCode=='200') 
		{
			$traccarCookie = Traccar::$cookie;
			$reportsummary= Traccar::reportsummary($this->view->deviceId,$from,$to,$traccarCookie);
			//$pos=Traccar::positions('','','',$traccarCookie);
			//echo $pos->{'response'};
	 		$this->view->reportsummary=json_decode($reportsummary->{'response'},true);
			//print_r($this->view->reportsummary);
		    //$this->view->reportsummary=$reportsummary;
		}
		
		$this->view->render('reports/reportssummary');
		}
		 ///////////////////////////////20-07-2018(for mobile)//////////
    
		function getreportssummary()
	   {
		$this->view->deviceId=$_REQUEST['deviceId'];
		$to=$_REQUEST['to']."T".date("H:m:s");
		$from=$_REQUEST['from']."T00:00:00";
		$this->view->to=$_REQUEST['to'];
		$this->view->from=$_REQUEST['from'];
		$this->view->Alldevices = $this->model->getAlldevices();
		Session::init();
		  // 	Auth::handleLogin();
		$email=Session::get('email');
		 if($email==""){
                $email=$_REQUEST['email'];
            }
		$password=Session::get('password');
              if($password==""){
                $password=$_REQUEST['password'];
            }
		$t=Traccar::login($email,$password);
		//$t=Traccar::login($email,$password);
		if($t->responseCode=='200') 
		{
			$traccarCookie = Traccar::$cookie;
			$reportsummary= Traccar::reportsummary($this->view->deviceId,$from,$to,$traccarCookie);
			//$pos=Traccar::positions('','','',$traccarCookie);
			//echo $pos->{'response'};
	 		$this->view->reportsummary=json_decode($reportsummary->{'response'},true);
			//print_r($this->view->reportsummary);
		    //$this->view->reportsummary=$reportsummary;
		}
		
		echo json_encode($this->view->reportsummary);
		}
		
		function reportstrip()
		{
			$this->view->Allgeofences = $this->model->getAllgeofences();
		$this->view->deviceId=$_REQUEST['deviceId'];
		$to=$_REQUEST['to']."T".date("H:m:s");
		$from=$_REQUEST['from']."T00:00:00";
		$this->view->to=$_REQUEST['to'];
		$this->view->from=$_REQUEST['from'];
		$this->view->Alldevices = $this->model->getAlldevices();
		Session::init();
		   	//Auth::handleLogin();
		$email=Session::get('email');
            if($email==""){
                $email=$_REQUEST['email'];
            }
		$password=Session::get('password');
              if($password==""){
                $password=$_REQUEST['password'];
            }
		$t=Traccar::login($email,$password);
		//$t=Traccar::login($email,$password);
		//echo "out: ".$email." ".$password;
		//echo " 1".$email."1 ".$password."1";
		//print_r($t);
		if($t->responseCode=='200') 
		{
			$traccarCookie = Traccar::$cookie;
			//echo $traccarCookie." 1".$email."1 ".$password."1";
			$reportstrip= Traccar::reportstrip($this->view->deviceId,$from,$to,$traccarCookie);
			//$pos=Traccar::positions('','','',$traccarCookie);
			//echo $pos->{'response'};
	 		$this->view->reportstrip=json_decode($reportstrip->{'response'},true);
			//print_r($this->view->reportstrip);
		    //$this->view->reportsummary=$reportsummary;
		}
		//echo json_encode($this->view->reportstrip);
		$this->view->render('reports/reportstrip');
		}
    ///////////////////////////////20-07-2018 For Mobile ////////////////////////////////
    
    function getreportstrip()
		{
			$this->view->Allgeofences = $this->model->getAllgeofences();
        //echo json_encode($this->view->Allgeofences);
		$deviceId=$_REQUEST['deviceId'];
		$to=$_REQUEST['to']."T".date("H:m:s");
		$from=$_REQUEST['from']."T00:00:00";
//		$this->view->to=$_REQUEST['to'];
//		$this->view->from=$_REQUEST['from'];
		
        $this->view->Alldevices = $this->model->getAlldevices();
		Session::init();
		   	//Auth::handleLogin();
		$email=Session::get('email');
            if($email==""){
                $email=$_REQUEST['email'];
            }
		$password=Session::get('password');
              if($password==""){
                $password=$_REQUEST['password'];
            }
		$t=Traccar::login($email,$password);
		//$t=Traccar::login($email,$password);
		//echo "out: ".$email." ".$password;
		//echo " 1".$email."1 ".$password."1";
		//print_r($t);
        //echo $password;
		if($t->responseCode=='200') 
		{
			$traccarCookie = Traccar::$cookie;
			//echo $traccarCookie." 1".$email."1 ".$password."1";
			$reportstrip= Traccar::reportstrip($deviceId,$from,$to,$traccarCookie);
	 		$this->view->reportstrip=json_decode($reportstrip->{'response'},true);
            //print_r($this->view->reportstrip);
			
		}
		echo json_encode($this->view->reportstrip);
		
		}
    ///////////////////////////////20-07-2018(for mobile)//////////
    
     function getgeofence()
		{
    $Allgeofences = $this->model->getAllgeofences();
         echo json_encode($Allgeofences);
     }
    ////////////////////////////////////////
	function reportstops()
		{
			$this->view->Allgeofences = $this->model->getAllgeofences();
		$this->view->deviceId=$_REQUEST['deviceId'];
		$to=$_REQUEST['to']."T".date("H:m:s");
		$from=$_REQUEST['from']."T00:00:00";
		$this->view->to=$_REQUEST['to'];
		$this->view->from=$_REQUEST['from'];
		$this->view->Alldevices = $this->model->getAlldevices();
		Session::init();
		   	Auth::handleLogin();
		$email=Session::get('email');
		$password=Session::get('password');
		$t=Traccar::login($email,$password);
		//$t=Traccar::login($email,$password);
		if($t->responseCode=='200') 
		{
			$traccarCookie = Traccar::$cookie;
			$reportstops= Traccar::reportstops($this->view->deviceId,$from,$to,$traccarCookie);
			//$pos=Traccar::positions('','','',$traccarCookie);
			//echo $pos->{'response'};
	 		$this->view->reportstops=json_decode($reportstops->{'response'},true);
			//print_r($this->view->reportstops);
		    //$this->view->reportsummary=$reportsummary;
		}
		
		$this->view->render('reports/reportstops');
		}
    ///////////////////////////////20-07-2018(for mobile)//////////
    
    function getreportstops()
		{
			$this->view->Allgeofences = $this->model->getAllgeofences();
		$this->view->deviceId=$_REQUEST['deviceId'];
		$to=$_REQUEST['to']."T".date("H:m:s");
		$from=$_REQUEST['from']."T00:00:00";
		$this->view->to=$_REQUEST['to'];
		$this->view->from=$_REQUEST['from'];
		$this->view->Alldevices = $this->model->getAlldevices();
		Session::init();
		   //	Auth::handleLogin();
		$email=Session::get('email');
        if($email==""){
                $email=$_REQUEST['email'];
            }
		$password=Session::get('password');
              if($password==""){
                $password=$_REQUEST['password'];
            }
		$t=Traccar::login($email,$password);
		//$t=Traccar::login($email,$password);
		if($t->responseCode=='200') 
		{
			$traccarCookie = Traccar::$cookie;
			$reportstops= Traccar::reportstops($this->view->deviceId,$from,$to,$traccarCookie);
			//$pos=Traccar::positions('','','',$traccarCookie);
			//echo $pos->{'response'};
	 		$this->view->reportstops=json_decode($reportstops->{'response'},true);
			//print_r($this->view->reportstops);
		    //$this->view->reportsummary=$reportsummary;
		}
		
		echo json_encode($this->view->reportstops);
		}
    
     ///////////////////////////////20-07-2018(for mobile)//////////
    
		function routeinfo() {	
	 Session::init();
		   	//Auth::handleLogin();
	$deviceId=$_REQUEST['deviceId'];
	//$to=($_REQUEST['toTime']);
	$from=$_REQUEST['from'];
	//$from=($_REQUEST['fromTime']);
	$to=$_REQUEST['to'];
      
		$email=Session::get('email');
            if($email == ""){
               $email=$_REQUEST["email"]; 
                
            }
		$password=Session::get('password');
            if($password == ""){
               $password=$_REQUEST["password"]; 
                
            }
		$t=Traccar::login($email,$password);
		//echo $email." ".$password;
		//$t=Traccar::login($email,$password);
		if($t->responseCode=='200') 
		{
			$traccarCookie = Traccar::$cookie;
			$reportsroutes= Traccar::reportsroutes('',$deviceId,$from,$to,$traccarCookie);
	 		 //$temp= json_decode($reportsroutes->{'response'},true);
			 header('Content-Type: application/json');
			 echo $reportsroutes->{'response'};
			//echo $reportsroute;
		    
		}
        }
		function reportsroutes()
		{
		$this->view->Allgeofences = $this->model->getAllgeofences();	
		$this->view->deviceId=$_REQUEST['deviceId'];
		$to=$_REQUEST['to']."T".date("H:m:s");
		$from=$_REQUEST['from']."T00:00:00";
		$this->view->to=$_REQUEST['to'];
		$this->view->from=$_REQUEST['from'];
		$this->view->Alldevices = $this->model->getAlldevices();
		Session::init();
		   	Auth::handleLogin();
		$email=Session::get('email');
		$password=Session::get('password');
		$t=Traccar::login($email,$password);
		//$t=Traccar::login($email,$password);
		if($t->responseCode=='200') 
		{
			$traccarCookie = Traccar::$cookie;
			
			$reportsroutes= Traccar::reportsroutes('',$this->view->deviceId,$from,$to,$traccarCookie);
			//$reportsroutes=Traccar::reportsroutes(1509537063965,136,'2017-10-24','2017-10-25',$traccarCookie);
			//print_r($reportsroutes);
	 		$this->view->reportsroute=json_decode($reportsroutes->{'response'},true);
			//print_r($this->view->reportsroute[0]['latitude'] $this->view->reportsroute[0]['longitude']);
		    //$this->view->reportsummary=$reportsummary;
		}
		
		$this->view->render('reports/reportsroutes');
		}
		
		
		function reportsevents()
		{
		$this->view->deviceId=$_REQUEST['deviceId'];
		$this->view->Allgeofences = $this->model->getAllgeofences();
		$to=$_REQUEST['to']."T".date("H:m:s");
		$from=$_REQUEST['from']."T00:00:00";
		$this->view->to=$_REQUEST['to'];
		$this->view->from=$_REQUEST['from'];
		$this->view->Alldevices = $this->model->getAlldevices();
		Session::init();
		   	Auth::handleLogin();
		$email=Session::get('email');
		$password=Session::get('password');
		$t=Traccar::login($email,$password);
		//$t=Traccar::login($email,$password);
		if($t->responseCode=='200') 
		{
			$traccarCookie = Traccar::$cookie;
			
			$reportsevents= Traccar::reportsevents($this->view->deviceId,$from,$to,$traccarCookie);
			//$reportsroutes=Traccar::reportsroutes(1509537063965,136,'2017-10-24','2017-10-25',$traccarCookie);
			//print_r($reportsroutes);
	 		$this->view->reportsevents=json_decode($reportsevents->{'response'},true);
			//print_r($reportsevents->{'response'});
		    //$this->view->reportsummary=$reportsummary;
		}
		
		$this->view->render('reports/reportsevents');
		}
		///////////////////////////////20-07-2018(for mobile)//////////
    
		function getreportsevents()
		{
		$this->view->deviceId=$_REQUEST['deviceId'];
		$this->view->Allgeofences = $this->model->getAllgeofences();
		$to=$_REQUEST['to']."T".date("H:m:s");
		$from=$_REQUEST['from']."T00:00:00";
		$this->view->to=$_REQUEST['to'];
		$this->view->from=$_REQUEST['from'];
		$this->view->Alldevices = $this->model->getAlldevices();
		Session::init();
		   	//Auth::handleLogin();
		$email=Session::get('email');
		if($email == ""){
               $email=$_REQUEST["email"]; 
                
            }
		$password=Session::get('password');
            if($password == ""){
               $password=$_REQUEST["password"]; 
                
            }
		$t=Traccar::login($email,$password);
		//$t=Traccar::login($email,$password);
		if($t->responseCode=='200') 
		{
			$traccarCookie = Traccar::$cookie;
			
			$reportsevents= Traccar::reportsevents($this->view->deviceId,$from,$to,$traccarCookie);
			//$reportsroutes=Traccar::reportsroutes(1509537063965,136,'2017-10-24','2017-10-25',$traccarCookie);
			//print_r($reportsroutes);
	 		$this->view->reportsevents=json_decode($reportsevents->{'response'},true);
			//print_r($reportsevents->{'response'});
		    //$this->view->reportsummary=$reportsummary;
		}
		
		echo json_encode($this->view->reportsevents);
		}
				
}