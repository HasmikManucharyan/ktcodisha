<?php
class Vts extends Controller {


	
	
	

	

	
	function device_geofence(){
		$devices=$this->model->getAssigndevice();
	   $geofences=$this->model->getAssigngeofences();
	  for($i=0;$i<count($devices);$i++){
		// for($i=0;$i<5;$i++){
		 echo 'inside 1st loop';
		   for($j=0;$j<count($geofences);$j++){
			 echo 'inside 2nd loop';
			 $checkGeofenceDevice = $this->model->deviceOnegeofence($devices[$i]['id'],$geofences[$j]['id']);
			 $email=Session::get('email');
$password=Session::get('password');
$t=Traccar::login(TRACCAR_ADMIN_USER,TRACCAR_ADMIN_PASS);

if($t->responseCode=='200') {
// echo 'inside traccar';
	 $traccarCookie = Traccar::$cookie;
//echo $traccarCookie;
if(count($checkGeofenceDevice)==0){
 //echo 'inside traccar if';
echo "Inserted ". $devices[$i]['id']." ". $geofences[$j]['id']."<br />";
$result=Traccar::addDevicegeofencePermissions($devices[$i]['id'],$geofences[$j]['id'],$traccarCookie);
echo $result->{'response'};
			 /*if(count($checkGeofenceDevice)==0){
				 echo "Inserted ". $devices[$i]['id']." ". $geofences[$j]['id']."<br />";
				  $this->model->insert_geofence($devices[$i]['id'],$geofences[$j]['id']);*/
//print_r ($this->model->insert_geofence($deviceid,$geofenceid));
			  }else {
				//  echo "Exists ". $devices[$i]['id']." ". $geofences[$j]['id']."<br />";

			  }
}
			}
	  }
	}

	function indexevents(){
		
		$this->model->delete_indexevents();
		echo 'records deleted';
		$this->model->insert_indexevents();
		echo 'new events inserted';
		}
	
		
	function delete_positions(){
	$result= $this->model->clear_old('85816714');
	echo " deleted positions<pre>";

	print_r($result);
	}	
	function computeTrips(){

		//$this->view->date='2017-12-18';
		//$this->view->route='278,283,464,371,296';
		$this->view->GeoFence=$_REQUEST['GeoFence'];
		$this->view->Angle=$_REQUEST['Angle'];
		$this->view->to=$_REQUEST['to'];
		$eventsIndex = $this->model->getIndexEvents($this->view->to);
		$to=$eventsIndex[0]['max_id'];
		$this->view->from=$_REQUEST['from'];
		$eventsIndex = $this->model->getIndexEvents($this->view->from);
		$from=$eventsIndex[0]['min_id'];
		$this->view->alldeviceTrips=$this->model->computeTrips($from,$to,$this->view->GeoFence);
		//$this->view->render('vts/computeTrips');
		$this->view->render('vts/computeTrips');
	}

	function ct(){
		
				//$this->view->date='2017-12-18';
				//$this->view->route='278,283,464,371,296';
				$this->view->Allgeofences = $this->model->getAllgeofences();	
				$this->view->GeoFence=$_REQUEST['GeoFence'];
				$geofence = $this->model->getonegeofences($this->view->GeoFence);

				$resulot=$geofence[0]['area'];
				print_r($geofence);
				//$resulot=substr("POLYGON((20.300238733055807 85.82374985280484, 20.300233701835168 85.82447404923886, 20.300233701835168 85.82449550691098, 20.300072702688468 85.82447941365689, 20.300072702688468 85.82377131047696, 20.300238733055807 85.82374985280484))",9);
					//$resulot=substr($resulot,0,-2);
					$resulot=substr($resulot,9);
					$resulot=substr($resulot,0,-2);
					$TempRes=split(',',$resulot);
					//print_r($TempRes);
					$num=count($TempRes);
				//$latlng = array();
				
				for ($i=0; $i < $num; $i++) {
				$finalRes=split(' ',$TempRes[$i]);
				//echo "<pre>";
				//print_r($finalRes);	
				if(count($finalRes)==2){
					  $y = floatval($finalRes[0]);
					$x = floatval($finalRes[1]);
					}else {
						$y = floatval($finalRes[1]);
					$x = floatval($finalRes[2]);
						}
				  $lat+=$y;
				  $long+=$x;
					//array_push($latlng, array($y,$x));
				}
				$lat=$lat/$num;
				$long=$long/$num;
                $rad=$_REQUEST['rad'];
				echo "lat :".$lat." Long :".$long;
				$this->view->Angle=$_REQUEST['Angle'];
				$this->view->to=$_REQUEST['to'];
				$this->view->from=$_REQUEST['from'];
				$this->view->alldeviceTrips=$this->model->ct($this->view->from,$lat,$long,$rad);
				//print_r($this->view->alldeviceTrips);
				//$this->view->render('vts/computeTrips');
				$this->view->render('vts/compTrips');
			}


		function computeTripsJson(){
		  if($this->view->to==""){
			$this->view->to=date("Y-m-d");
		  }
				//$this->view->date='2017-12-18';
				//$this->view->route='278,283,464,371,296';
				$this->view->route=$_REQUEST['route'];
				$this->view->direction=$_REQUEST['dir'];
				$this->view->group=$_REQUEST['dir'];
				if($this->view->direction==""){
					$this->view->direction='225';
				}
				if($this->view->route==""){
					$this->view->route='470';
				}
				
				$this->view->to=$_REQUEST['to'];
				if($this->view->to==""){
					$this->view->to=date("Y-m-d");
				  }
				$eventsIndex = $this->model->getIndexEvents($this->view->to);
				$to=$eventsIndex[0]['max_id'];
				$this->view->from=$_REQUEST['from'];
				if($this->view->from==""){
					$this->view->from=date("Y-m-d");
				  }
				$eventsIndex = $this->model->getIndexEvents($this->view->from);
				$from=$eventsIndex[0]['min_id'];
				$this->view->alldeviceTrips=$this->model->computeTrips($from,$to,$this->view->route);
				$this->view->render('vts/computeTripsjson',true);
			}
      
	
	function sharedDevice(){
		Session::init();
		//Auth::handleLogin();
		$deviceAction = $_REQUEST['deviceAction'];
		//echo $deviceAction;
		$userId = $_REQUEST['userid'];
		$deviceId = $_REQUEST['deviceid'];
		$email=Session::get('email');
        if($email == ""){
            $email=$_REQUEST['email'];
            
        }
		$password=Session::get('password');
         if($password == ""){
            $password=$_REQUEST['password'];
            
        }
		$t=Traccar::login(TRACCAR_ADMIN_USER,TRACCAR_ADMIN_PASS);
		//$t=Traccar::login("webrains@gmail.com","admin");
		if($t->responseCode=='200') {
   			 $traccarCookie = Traccar::$cookie;
		//echo $traccarCookie;
		if($deviceAction=="Added"){
		
		$add_submituser=Traccar::addDevicePermissions($userId,$deviceId,$traccarCookie);
            echo "success";
		$data=array(
						'id' => null,
						'admin_id' => Session::get('admin_id'),
						'operations' => $_POST['deviceid']." ".'Shared with -'." ".$_POST['userid'],
						'time' => date('Y-m-d H:i:s')
	);
	$this->model->insert_activity($data);
		
		} else {
		$add_submituser=Traccar::deleteDevicePermissions($userId,$deviceId,$traccarCookie);
		$data=array(
						'id' => null,
						'admin_id' => Session::get('admin_id'),
						'operations' => $_POST['deviceid']." ".'Unshared with -'." ".$_POST['userid'],
						'time' => date('Y-m-d H:i:s')
	);
	$this->model->insert_activity($data);
		//deleteDevicePermissions($userId,$deviceId,$cookie)
		}
		
		} else {
			
			
			}
			//echo $email."  ".$password."  ".$deviceAction ."  ".$userId ."  ".$deviceId  ;
			//$adduser=json_decode($add_submituser->{'response'},true);
			//print_r($add_submituser);
		}
		function share_device_users() {
		
	$this->view->alldevices = $this->model->getAlldevices();
	if($_POST['user']!="" or $_POST['user']!=0){
	$this->view->allUserdevices=$this->model->getAllOurUserdevices($_POST['user']);
	$this->view->user = $_POST['user'];
	}
	$this->view->allusers = $this->model->getAllusers();
    $this->view->render('vts/share_device_users');
	}

	function getAllOurUserdevices(){
		$this->view->allUserdevices=$this->model->getAllOurUserdevices($_REQUEST['user']);
		echo json_encode($this->view->allUserdevices);
	}

	function allusers(){
		$this->view->allusers = $this->model->getAllusers();
		echo json_encode($this->view->allusers);
	}


	function sharedDeviceuser(){
		
		$deviceAction = $_REQUEST['deviceAction'];
		echo $deviceAction;
		$userId = $_REQUEST['userid'];
		echo $userId;
		$deviceId = $_REQUEST['deviceid'];
		echo $deviceId;
		//$email=Session::get('email');
		//$password=Session::get('password');
		//$t=Traccar::login(TRACCAR_ADMIN_USER,TRACCAR_ADMIN_PASS);
		//$t=Traccar::login("webrains@gmail.com","admin");
		//if($t->responseCode=='200') {
   			// $traccarCookie = Traccar::$cookie;
		//echo $traccarCookie;
		if($deviceAction=="Added"){
			$data=array(
						'userid' => $_REQUEST['userid'],
						'deviceid' => $_REQUEST['deviceid']
						);
						print_r($data);
		$add_submituser=$this->model->insert_share_device($data);
		$data=array(
						'id' => null,
						'admin_id' => Session::get('admin_id'),
						'operations' => $_POST['deviceid']." ".'Shared with -'." ".$_POST['userid'],
						'time' => date('Y-m-d H:i:s')
	);
	$this->model->insert_activity($data);
		
		} else {
		$add_submituser=$this->model->delete_share_device($userId);
		$data=array(
						'id' => null,
						'admin_id' => Session::get('admin_id'),
						'operations' => $_POST['deviceid']." ".'Unshared with -'." ".$_POST['userid'],
						'time' => date('Y-m-d H:i:s')
	);
	$this->model->insert_activity($data);
		//deleteDevicePermissions($userId,$deviceId,$cookie)
		}
		
		} 
			//echo $email."  ".$password."  ".$deviceAction ."  ".$userId ."  ".$deviceId  ;
			//$adduser=json_decode($add_submituser->{'response'},true);
			//print_r($add_submituser);
	
	
	function assign_geofence() {
		
	$this->view->alldevices = $this->model->getAlldevices();
	if($_POST['device']!="" or $_POST['device']!=0){
	$this->view->AllUsergeofence=$this->model->getAllUsergeofence($_POST['device']);
	$this->view->device = $_POST['device'];
	}
	$this->view->Allgeofences = $this->model->getAllgeofences();
    $this->view->render('vts/assign_geofence');
	}
	function AssignuserGeofence(){
		
		Session::init();
		Auth::handleLogin();
		$deviceAction = $_REQUEST['deviceAction'];
		//echo $deviceAction;
		$geofenceId = $_REQUEST['geofenceid'];
		$deviceId = $_REQUEST['deviceid'];
		$email=Session::get('email');
		$password=Session::get('password');
		$t=Traccar::login(TRACCAR_ADMIN_USER,TRACCAR_ADMIN_PASS);
		//$t=Traccar::login("webrains@gmail.com","admin");
		if($t->responseCode=='200') {
   			 $traccarCookie = Traccar::$cookie;
		//echo $traccarCookie;
		if($deviceAction=="Added"){
		
		$add_devicegeofence=Traccar::addDevicegeofencePermissions($deviceId,$geofenceId,$traccarCookie);
		$data=array(
						'id' => null,
						'admin_id' => Session::get('admin_id'),
						'operations' => $_POST['deviceid']." ".'Shared with -'." ".$_POST['userid'],
						'time' => date('Y-m-d H:i:s')
	);
	$this->model->insert_activity($data);
		
		} else {
		$delete_devicegeofence=Traccar::deleteDevicegeofencePermissions($deviceId,$geofenceId,$traccarCookie);
		$data=array(
						'id' => null,
						'admin_id' => Session::get('admin_id'),
						'operations' => $_POST['deviceid']." ".'Unshared with -'." ".$_POST['userid'],
						'time' => date('Y-m-d H:i:s')
	);
	$this->model->insert_activity($data);
		//deleteDevicePermissions($userId,$deviceId,$cookie)
		}
		
		} else {
			
			
			}
			//echo $email."  ".$password."  ".$deviceAction ."  ".$userId ."  ".$deviceId  ;
			//$adduser=json_decode($add_submituser->{'response'},true);
			//print_r($add_submituser);
		}
	
	
	function users() {
	
		$this->view->allusers= $this->model->getAllusers();
		$this->view->render('vts/users');
	
	}
	function add_users() 
	{

	//Auth::handleLogin();
		$data = $_GET;
		//echo "rrrr ".$_GET['id'];
		if($_GET['admin_id']=='')
		    {
				$this->view->pick='';
				$this->view->data=$data;
			} 
		else 
			{
				$this->view->pick=$_GET['admin_id'];
				$this->view->content= $this->model->getoneuser($_GET['admin_id']);
			}
		
		$this->view->render('vts/add_users');
		//header('location: vehiclemaster');
	}
	function add_submit_users(){
		
		//Auth::handleLogin();
		
		$action=$_POST['submit']; 
		if($action=='submit'){
		$data = array(
		'admin_id'=>null,
		'fname'=>$_POST['fname'],
		'lname'=>$_POST['lname'],
		'username'=>$_POST['username'],
		'email'=>$_POST['email'],
		'password'=>md5($_POST['password']),
		'traccar_email'=>Session::get('email'),
		'pass' =>Session::get('password'),
		'userType' =>$_POST['userType'],
		'traccarID' =>Session::get('traccarID'),
		'parent_traccarID' =>Session::get('parent_traccarID'),
		'otp_verified' =>'yes',
		'parent_id' =>Session::get('admin_id'),
		'parent_userType' =>Session::get('userType')
		);
		$count=$this->model->check_users();
		//print_r($count);
		if($count > 0){
			//echo 'not database';
							$this->view->fname=$_POST['fname'];
							$this->view->lname=$_POST['lname'];
							$this->view->username=$_POST['username'];
							$this->view->email=$_POST['email'];
							
			$this->view->msg = $this->model->error("This Username and Email Already exist.");
			$this->view->render('vts/add_users');
		}
		else{
		$this->model->submit_users($data);
		$data=array(
						'id' => null,
						'admin_id' => Session::get('admin_id'),
						'operations' => 'User Added'." ".$_POST['username'],
						'time' => date('Y-m-d H:i:s')
	);
	$this->model->insert_activity($data);
		}
		}
		else{
			$arg=$_POST['id'];
			//echo $arg ;
			$data=array(
		'fname'=>$_POST['fname'],
		'lname'=>$_POST['lname'],
		'username'=>$_POST['username'],
		'email'=>$_POST['email'],
		'password'=>md5($_POST['password'])
		);
		//print_r($data);
		$this->model->edit_submit_users($data,$arg);
		$data=array(
						'id' => null,
						'admin_id' => Session::get('admin_id'),
						'operations' => 'User Edited'." ".$_POST['username'],
						'time' => date('Y-m-d H:i:s')
	);
	$this->model->insert_activity($data);
		}
		
		
	header('location: users');
	}
	function delete_users($admin_id) 
	{
		
		//Auth::handleLogin();
		$this->model->delete_users($_GET['admin_id']);
		$data=array(
						'id' => null,
						'admin_id' => Session::get('admin_id'),
						'operations' => 'User Deleted'." ".$_POST['username'],
						'time' => date('Y-m-d H:i:s')
	);
	$this->model->insert_activity($data);
		header('location: ../users');
	
	}
	
	function customer() {
	
		$this->view->allcustomer= $this->model->getAllcustomer();
		$this->view->render('vts/customer');
	
	}
	function edit_customer() 
	{
	//Auth::handleLogin();
		$data1 = $_GET;
		//echo "rrrr ".$_GET['id'];
		if($_GET['admin_id']=='')
		    {
				$this->view->pick='';
				$this->view->data=$data1;
			} 
		else 
			{
				$this->view->pick=$_GET['admin_id'];
				//print_r($this->view->pick);
				$this->view->content = $this->model->getonecustomer($_GET['admin_id']);
				//print_r($this->view->content);
				//print_r($this->view->content[0]['username']);
			}
		
		$this->view->render('vts/edit_customer');
		//header('location: vehiclemaster');
	}
function view_customer() 
	{
	//Auth::handleLogin();
		$data1 = $_REQUEST;
		//echo "rrrr ".$_GET['id'];
		if($_REQUEST['admin_id']=='')
		    {
				$this->view->pick='';
				$this->view->data=$data1;
			} 
		else 
			{
				$this->view->pick=$_REQUEST['admin_id'];
				//print_r($this->view->pick);
				$this->view->content = $this->model->getonecustomer($_REQUEST['admin_id']);
				//print_r($this->view->content);
				//print_r($this->view->content[0]['username']);
			}
		echo json_encode($this->view->content);
		//$this->view->render('vts/edit_customer');
		//header('location: vehiclemaster');
	}	
function edit_submit_customer(){
	Session::init();
	Auth::handleLogin();

	$action=$_POST['submit']; 
		//echo '$action';
		if ($action=='submit')
		{
		//$fileupload=$_FILES["fileupload"];
	
		$count=$this->model->check_customer();
		//print_r($count);
		if($count > 0){
			//echo 'not database';
							$this->view->username=$_POST['username'];
							$this->view->email=$_POST['email'];
							
			$this->view->msg = $this->model->error("This Username and Email Already exist.");
			$this->view->render('vts/edit_customer');
		}
		else{
				$email=Session::get('email');
		$password=Session::get('password');
		$t=Traccar::login($email,$password);
		//$t=Traccar::login("webrains@gmail.com","admin");
if($t->responseCode=='200') {
    $traccarCookie = Traccar::$cookie;
		$action=$_POST['submit']; 
			//if ($action=='submit')      //this is for insert data
				{
		
	$add_submituser=Traccar::addUser($_POST['username'],$_POST['email'],$_POST['password'],$traccarCookie);
	$adduser=json_decode($add_submituser->{'response'},true);
	
	$data=array(
						'id' => null,
						'admin_id' => Session::get('admin_id'),
						'operations' => 'Customer Added'." ".$_POST['username'],
						'time' => date('Y-m-d H:i:s')
	);
	$this->model->insert_activity($data);
	//print_r($adduser);
	//echo "added to traccar";
				}
		$add_calanderuser=Traccar::addCalendarPermissions($adduser['id'],5,$traccarCookie);
}
			$data1 = array(
		'admin_id'=>null,
		'fname'=>$_POST['name'],
		'username'=>$_POST['username'],
		'email'=>$_POST['email'],
		'password'=>md5($_POST['password']),
		'traccar_email'=>$_POST['email'],
		'pass'=>$_POST['password'],
		'userType'=>$_POST['userType'],
		'traccarID'=>$adduser['id'],
		'parent_traccarID'=>Session::get('traccarID'),
		'parent_id'=>Session::get('admin_id'),
		'otp_verified'=>'yes'
		);
		
		$this->model->insert_customer($data1);
		}
		}
		else{ 
		$arg=$_POST['id'];
		$data1 = array(
		'fname' =>$_POST['name'],
		'username' =>$_POST['username'],
		'email' =>$_POST['email'],
		'password' =>md5($_POST['password'])
		);
		$this->model->update_customer($data1,$arg);
		$data=array(
						'id' => null,
						'admin_id' => Session::get('admin_id'),
						'operations' => 'Customer Edited'." ".$_POST['username'],
						'time' => date('Y-m-d H:i:s')
	);
	$this->model->insert_activity($data);
			}
		header('location: customer');
		}
		
 
    
    function add_customer(){
	Session::init();
	$count=$this->model->check_customer();
		//print_r($count);
		if($count > 0){
			//echo 'not database';
							$this->view->username=REQUEST['username'];
							$this->view->email=$_REQUEST['email'];
							
			$this->view->msg = $this->model->error("This Username and Email Already exist.");
			//$this->view->render('vts/edit_customer');
		}
		else{
                $parent_traccarID=Session::get('traccarID');
            if($parent_traccarID==""){
                $parent_traccarID=$_REQUEST['traccarID'];
            }
            $parent_id=Session::get('admin_id');
            if($parent_id==""){
                $parent_id=$_REQUEST['admin_id'];
            }
				$email=Session::get('email');
            if($email==""){
                $email=$_REQUEST['email'];
            }
		$password=Session::get('password');
             if($password==""){
                $password=$_REQUEST['password'];
            }
		$t=Traccar::login($email,$password);
		//$t=Traccar::login("webrains@gmail.com","admin");
if($t->responseCode=='200') {
    $traccarCookie = Traccar::$cookie;
		
		
	$add_submituser=Traccar::addUser($_POST['username'],$_POST['email'],$_POST['password'],$traccarCookie);
	$adduser=json_decode($add_submituser->{'response'},true);
	$add_calanderuser=Traccar::addCalendarPermissions($adduser['id'],5,$traccarCookie);
}
			$data1 = array(
		'admin_id'=>null,
		'fname'=>$_REQUEST['name'],
		'username'=>$_REQUEST['username'],
		'email'=>$_REQUEST['email'],
		'password'=>md5($_REQUEST['password']),
		'traccar_email'=>$_REQUEST['email'],
		'pass'=>$_REQUEST['password'],
		'userType'=>$_REQUEST['userType'],
		'traccarID'=>$adduser['id'],
		'parent_traccarID'=>$parent_traccarID,
		'parent_id'=>$parent_id,
		'otp_verified'=>'yes'
		);
		
		$this->model->insert_customer($data1);
		}
		}
    
    
   function edit_customer_details(){ 
		$arg=$_REQUEST['id'];
		$data1 = array(
		'fname' =>$_REQUEST['name'],
		'username' =>$_REQUEST['username'],
		'email' =>$_REQUEST['email'],
		'password' =>md5($_REQUEST['password'])
		);
		$this->model->update_customer($data1,$arg);
		
			
		//header('location: customer');
		}
			function delete_customer($admin_id) 
	{
		Session::init();
		   	Auth::handleLogin();
		$email=Session::get('email');
		$password=Session::get('password');
		$t=Traccar::login($email,$password);
		//$t=Traccar::login("webrains@gmail.com","admin");
if($t->responseCode=='200') {
    $traccarCookie = Traccar::$cookie;
		
	$add_submituser=Traccar::deleteUser($_GET['id'],$traccarCookie);
				}
		$data=array(
						'id' => null,
						'admin_id' => Session::get('admin_id'),
						'operations' => 'Customer Deleted'." ".$_POST['username'],
						'time' => date('Y-m-d H:i:s')
	);
	$this->model->insert_activity($data);
		//Auth::handleLogin();
		$this->model->delete_customer($_GET['admin_id']);
		header('location: ../customer');
	
	}
	
	
	function delete_customer_details($admin_id) 
	{
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
		//$t=Traccar::login("webrains@gmail.com","admin");
if($t->responseCode=='200') {
    $traccarCookie = Traccar::$cookie;
		
	$add_submituser=Traccar::deleteUser($_REQUEST['id'],$traccarCookie);
				}
		

		$this->model->delete_customer($_REQUEST['admin_id']);
		//header('location: ../customer');
	
	}	
	
	////////////////////////////////////#####################################
	function customerlogin() {
	
		$this->view->render('vts/customerlogin',true);
	}
	/////////////////////############################    Notifications **************#############/////////////////
	
	
	function notifications(){
	/*	$userId=$_GET['userId'];
		 Session::init();
		   	Auth::handleLogin();
		
		$email=Session::get('email');
		$password=Session::get('password');
		$t=Traccar::login($email,$password);
if($t->responseCode=='200') {
    $traccarCookie = Traccar::$cookie;
	
	$notifications= Traccar::notifications($_POST['userId'],$traccarCookie);
	$this->view->usernotifications=json_decode($notifications->{'response'},true);
	//print_r($this->view->usernotifications);  
}*/ 
		   
   $geofence=$this->model->select_geofence();
   $overspeed=$this->model->select_overspeed();
   for($i=0;$i<count($geofence);$i++){
	 $checkuserDevice = $this->model->deviceOneuser($geofence[$i]['userid'],$geofence[$i]['deviceid'],$geofence[$i]['event_type']);
	 print_r();
	  if(count($checkuserDevice)==0){
     //echo "Inserted ". $geofence[$i]['userid']." ". $geofence[$i]['deviceid']."<br />";
     $this->model->insert_notify($geofence[$i]['userid'],$geofence[$i]['deviceid'],$geofence[$i]['event_type']);
    }
	else {
     //echo "Exists ". $geofence[$i]['userid']." ". $geofence[$i]['deviceid']."<br />";
     
    }	
	    }
		

 for($j=0;$j<count($overspeed);$j++){
		
      $checkuserDevice1 = $this->model->deviceOneuser($overspeed[$j]['userid'],$overspeed[$j]['deviceid'],$overspeed[$j]['event_type']);
    if(count($checkuserDevice1)==0){
     //echo "Inserted ". $overspeed[$j]['userid']." ". $overspeed[$j]['deviceid']."<br />";
     $this->model->insert_notify($overspeed[$i]['userid'],$overspeed[$i]['deviceid'],$overspeed[$i]['event_type']);
    }
	else {
    //echo "Exists ". $overspeed[$j]['userid']." ". $overspeed[$j]['deviceid']."<br />";
     }
	
	
   }
   $this->view->notes = $this->model->notify();
   //print_r ($note);
$this->view->render('vts/notifications',true);

	}
	function view_notifications(){
	/*$userId=$_GET['userId'];
		 Session::init();
		   	Auth::handleLogin();
		
		$email=Session::get('email');
		$password=Session::get('password');
		$t=Traccar::login($email,$password);
if($t->responseCode=='200') {
    $traccarCookie = Traccar::$cookie;
	//$groupId,$type,$from,$to,$cookie
	$notifications= Traccar::notifications($_POST['userId'],$traccarCookie);
	$this->view->usernotifications=json_decode($notifications->{'response'},true);
	//print_r($this->view->usernotifications);  
}*/
$this->view->notes = $this->model->notify();
//$this->view->Unread= count($this->view->usernotifications);
$this->view->Unread= count($this->view->notes);
$this->view->render('vts/view_notifications');

	}
	
	
		
		function devicedaylog(){
			$date=$_GET['date'];
			//$deviceid=$_GET['deviceid'];
			/*
			 $devices = $this->model->getAlldevices();
			for($j=0;$j<count($devices)-1;$j++){
				$deviceid=$devices[$j]['id'];
				$name=$devices[$j]['name'];*/
				
			$devicedaylog = $this->model->devicedaylog($date);
			//echo "<pre>";
			print_r($devicedaylog);
			$distance=0;
			/*
			for($i=0;$i<count($devicedaylog)-1;$i++){
				
    $distance+=distance($devicedaylog[$i]['latitude'],$devicedaylog[$i]['longitude'],$devicedaylog[$i+1]['latitude'],$devicedaylog[$i+1]['longitude'],"K");
	//echo $i."  ". $distance."<br />";
    }
			// $distance;
			echo "Vehicle :".$name. " = ". number_format($distance, 2, '.', '')."<br />";
			
			}
			*/
			}
			function indexpositions(){
			
			$this->model->delete_indexpositions();
			//echo 'records deleted';
			$this->model->insert_indexpositions();
			echo 'new records inserted';
			}
			
			
   function events_trip(){
   $date=$_REQUEST['date'];
   $deviceid=$_REQUEST['deviceid'];
   $devices=$this->model->events_trip($date,$deviceid);
 print_r($devices);
   }


    function updateDeviceGroup(){
	Session::init();
	//Auth::handleLogin();
	$deviceAction = $_REQUEST['deviceAction'];
		//echo $deviceAction;
		//$userId = $_REQUEST['userid'];
		$deviceid = $_REQUEST['id'];
	//$deviceid=$_GET['deviceid'];
	$groupid=$_REQUEST['groupid'];
	$content= $this->model->getOneDevice($deviceid);
	$name=$content[0]['name'];
	$uniqueid=$content[0]['uniqueid'];
	$phone=$content[0]['phone'];
	$model=$content[0]['model'];
	$contact=$content[0]['contact'];
	$category=$content[0]['category'];
	 

$email=Session::get('email');
       if($email==""){
           
           $email=$_REQUEST['email'];
       }
$password=Session::get('password');
       if($password==""){
           
           $password=$_REQUEST['password'];
       }
$t=Traccar::login($email,$password);
if($t->responseCode=='200') {
	$traccarCookie = Traccar::$cookie;
       
	 $devices= Traccar::editDevice($deviceid,$name,$uniqueid,$groupid,$phone,$category,$contact,$model,$traccarCookie) ;
	 echo $devices->{'response'};
echo json_encode($devices);
}
else echo 'Incorrect email address or password';
}
		
		function totaldistance(){
			
			$deviceid=$_GET['deviceid'];
			$totalDistance=$_GET['totalDistance']*1000;
			 Session::init();
		   	Auth::handleLogin();
		
		$email=Session::get('email');
		$password=Session::get('password');
		$t=Traccar::loginAdmin();
		if($t->responseCode=='200') {
    		$traccarCookie = Traccar::$cookie;
    /*
    ......
	*/
	//$pos=Traccar::positions('','','',$traccarCookie);
	 		$devices= Traccar::deviceDistance($deviceid,$totalDistance,$traccarCookie) ;
	 		echo $devices->{'response'};
	  
}
else echo 'Incorrect email address or password';
	}	
	
	
	    function dailySummary(){
			$date=$_GET['date'];
			$checkIndex = $this->model->indexpositions($date);
			$Alldevices = $this->model->getAlldevices();
			//print_r($Alldevices);
			for($j=0;$j<count($Alldevices);$j++){
				$devices[$Alldevices[$j]['id']]=$Alldevices[$j]['name'];
			}
			
			for($i=0;$i<count($checkIndex);$i++){
				
				
				//$getDailySummary[$checkIndex[$i]['deviceid']]=
				
				
				$StartDistance =  $this->model->StartDistance($checkIndex[$i]['min_id']);
				
				//echo $StartDistance[0]['attributes']. "  ".$checkIndex[$i]['min_id']."<br />";
					
				$obj = json_decode($StartDistance[0]['attributes']); 
				$SD=$obj->{'totalDistance'}; 	
				
				$TotalDistance =  $this->model->TotalDistance($checkIndex[$i]['max_id']);
					
				$obj = json_decode($TotalDistance[0]['attributes']); 
				$TD=$obj->{'totalDistance'}; 
				
				//echo $devices[$checkIndex[$i]['deviceid']]." ".round(($TD)/1000,1). " KM - ".round(($SD)/1000,1). " KM = ".round(($TD-$SD)/1000,1)." KM<br />";
			    $getDailySummary[$checkIndex[$i]['deviceid']]['SD']=$SD;
				$getDailySummary[$checkIndex[$i]['deviceid']]['TD']=$TD;
			  
			   
			}
			//echo "<pre>";
			//print_r($checkIndex);
			echo '<table class="tablesorter tdesign dataTable no-footer" style="border: solid #999999 1px; border-collapse: collapse;" role="grid" cellspacing="0" cellpadding="1" bordercolor="lightgrey" border="1" width="500px">
			<tr><td style="text-align:center">Vehicle</td><td style="text-align:center">End</td><td style="text-align:center">Start</td><td style="text-align:center">Total</td></tr>
			';
			$summary = 0;
			for($j=0;$j<count($Alldevices);$j++){
				$SD= $getDailySummary[$Alldevices[$j]['id']]['SD'];
				$TD= $getDailySummary[$Alldevices[$j]['id']]['TD'];
				if($SD>0) {
				$Travelled= ($TD-$SD);  
				} else { 
				$Travelled= 0;
				}
				$summary +=$Travelled;
				echo "<tr><td style='text-align:center'>".$Alldevices[$j]['name']."</td><td style='text-align:center'>". round($TD/1000,1)."</td><td style='text-align:center'>".round($SD/1000,1)."</td><td style='text-align:center'>".round($Travelled/1000,1)."</td></tr>";
			}
			echo '<tr><td style="text-align:center"></td><td style="text-align:center"></td><td style="text-align:center">Total</td><td style="text-align:center">'.round($summary/1000,1).'</td></tr>';
			echo "</table>";
			}
	
	    function checkIndex(){
			
			//$date=date("Y-m-d");
		$date = "2017-08-10";
		//echo $date;
		$checkIndex = $this->model->indexpositions($date);
		if(count($checkIndex)<=0){
			echo "zero";
		} else {
			echo count($checkIndex);
			}
			}
			
		function getFuelsingle(){
			$this->view->mdate=$_REQUEST['date'];
				$this->view->deviceid=$_REQUEST['deviceid'];
				
			
				//for($j=0;$j<1;$j++){	
				//echo $Alldevices[$j]['id'];
				$content= $this->model->dailyLogs($this->view->deviceid,$this->view->mdate);
				//print_r($content);
			    $sn=0;
				$Cdistance=0;
				$maxF=0;
				$minF=1000;
				 foreach($content AS $key=>$value){
				$obj = json_decode($value['attributes']); 
				$ignition=$obj->{'ignition'}; 	
				$distance = $obj->{'distance'}; 
				$tdistance = $obj->{'totalDistance'};	
				if($ignition==1){
					$bgcolor = "palegreen";
					}else {
						$bgcolor = "white";
						}
				if($distance>0 or $ignition==1 or  $value['speed']>0){	
				$Cdistance+=$distance;
				$sn++;	
				$obj = json_decode($value['attributes']); $temp= $obj->{'command'}; 
				$res = split("=",$temp);
				$diffF=0;
				//$curF= trim($res[1],' T')/10;
				$curF= ($res[3])/10;
						//echo $curF;
						
						
						$dates = explode(' ', $value['devicetime']);
						$str_time = preg_replace("/^([\d]{1,2})\:([\d]{2})$/", "00:$1:$2", $dates[1]);

sscanf($str_time, "%d:%d:%d", $hours, $minutes, $seconds);

$time_seconds = $hours * 3600 + $minutes * 60 + $seconds; 
						if($prev!=0 and $curF!=0){
						$diffF = round(($prev-$curF),1);
						

						//$graphdata[]=array($time_seconds*1000,$curF);
						//$graphdistance[]=array($time_seconds*1000,round($tdistance/1000,1));
						}
						if($curF>0){
						if($curF>$maxF) $maxF= $curF;
						if($minF>$curF) $minF= $curF;	
						$prev= $curF;	
						}
						if($diffF>6.5){
					$bgcolorF = "red";
					$bigRise += ($diffF);
					$graphFuel[]=array("Stolen",$value['devicetime'],$diffF);
					$countFLog = $this->model->checkfuelLogs($value['id']);
					//echo $value['id'];
					//print_r($graphFuel[]);
					if(count($countFLog)==0){
						echo "countis zero";
						$data = array(
							  'id' => NULL,
							  'deviceid' =>$this->view->deviceid,
							  'servertime' => $value['devicetime'],
							  'positionid'=> $value['id'],
							  'type'=> 'stolen',
							  'qty'=>$diffF,
							  'fuel_level'=>$curF
						   );
						  // print_r($data);
						   $this->model->insert_fuelLogs($data);
						}
					
					} else {
						$bgcolorF = "white";
						}
						if($diffF<-6.5){
							$graphFuel[]=array("Fill",$value['servertime'],(-1*$diffF));
							$bigDrop += (-1*$diffF);
							$bgcolorF = "palegreen";
					$countFLog = $this->model->checkfuelLogs($value['id']);
					//print_r($countFLog);
					if(count($countFLog)==0){
						$data = array(
							  'id' => NULL,
							  'deviceid' =>$this->view->deviceid,
							  'servertime' => $value['devicetime'],
							  'positionid'=> $value['id'],
							  'type'=> 'fill',
							  'qty'=>(-1*$diffF),
							  'fuel_level'=>$curF
						   );
						   $this->model->insert_fuelLogs($data);
						}
							
							}
						
					
				}
					 } 
					 
		
					 echo json_encode($graphFuel);
			
			}	
			
			function FuelSummary(){
				$date=$_REQUEST['date'];
				if(mdate=="") {
					$date =date("Y-m-d");
					}
				$filled = $this->model->filledFuel($date);
				for($i=0;$i<count($filled);$i++){
					$getFilled[$filled[$i]['deviceid']]=round($filled[$i]['sqty'],1);
				}
				$stolen = $this->model->stolenFuel($date);
				//print_r($getStolen);
				for($i=0;$i<count($stolen);$i++){
					$getStolen[$stolen[$i]['deviceid']]=round($stolen[$i]['sqty'],1);
				}
				//print_r($getStolen);
				
				$Alldevices = $this->model->getAlldevicesFall();
				//print_r($Alldevices);
				for($j=0;$j<count($Alldevices);$j++){
					echo $Alldevices[$j]['id']." ". $Alldevices[$j]['name']." ".$getFilled[$Alldevices[$j]['id']]." ".$getStolen[$Alldevices[$j]['id']]."<br />";				}
			}
 
			function TimeFuelSummary(){
				$month =$_REQUEST['month'];
				$year = $_REQUEST['year'];
				
				for($d=1; $d<=31; $d++)
				{
					$time=mktime(12, 0, 0, $month, $d, $year);          
					if (date('m', $time)==$month)       
						$list[]=date('Y-m-d', $time);
				}
				for($j=0; $j<count($list); $j++) {

				
				$filled = $this->model->filledFuel($list[$j]);
				for($i=0;$i<count($filled);$i++){
					$getFilled[$filled[$i]['deviceid']][$j]=round($filled[$i]['sqty'],1);
				}
				$stolen = $this->model->stolenFuel($list[$j]);
				for($i=0;$i<count($stolen);$i++){
					$getStolen[$stolen[$i]['deviceid']][$j]=round($stolen[$i]['sqty'],1);
				}
			}
				
				$Alldevices = $this->model->getAlldevicesFall();
				//print_r($Alldevices);
				echo "<table border='1'>";
				echo "<tr><td>DATE</td><td>ID</td>";
				for($k=0; $k<count($list); $k++) {
				echo "<td colspan=2>".$list[$k]."</td>";
				}
				echo "</tr>";

				for($j=0;$j<count($Alldevices);$j++){
					echo "<tr>";
					echo "<td>".$Alldevices[$j]['id']."</td><td>". $Alldevices[$j]['name']."</td>";
					for($k=0; $k<count($list); $k++) {
					echo "<td>".$getFilled[$Alldevices[$j]['id']][$k]."</td><td>".$getStolen[$Alldevices[$j]['id']][$k]."</td>";
					}
					echo "</tr>";

				}
				echo "</table>";
			}

function getSVG(){

	header('Content-type:image/png');
	readfile($fullpath);
}


			function getFuelSummary(){
				echo "<pre>";
				$mdate=$_REQUEST['date'];
					if($mdate=="") {
					$mdate =date("Y-m-d");
					}
				$Alldevices = $this->model->getAlldevicesFall();
				//print_r($Alldevices);
				for($j=0;$j<count($Alldevices);$j++){
					   $content= array();
					   $this->model->delete_fuellogs($Alldevices[$j]['id'],$mdate);
					$content= $this->model->dailyLogs($Alldevices[$j]['id'],$mdate);
					//print_r($content);
					$sn=0;
					$Cdistance=0;
					$maxF=0;
					$minF=1000;
					$prev=0;
					$curF=0;
					$prevOddo=0;
					$currOddo=0;
					$diffF=0;
					foreach($content AS $key=>$value){
					$obj = json_decode($value['attributes']); 
					if($value['protocol']=='wialon'){
						$temp= $obj->{'volume'};
						$curF= $temp;
					}else {
					$temp= $obj->{'command'}; 
					$res = split("=",$temp);
					//$curF= trim($res[1],' T')/10;
					$curF= ($res[3])/10;
					}
					//$curF= ($res[3])/10;
					$ignition=$obj->{'ignition'};    
					$distance = $obj->{'distance'}; 
					$tdistance = $obj->{'totalDistance'};
				 

					if($value['speed']==0 and $curF!=0)
					{    
						//$diffF = round(($prev-$curF),1);
						//echo "DEV :".$Alldevices[$j]['id']."curF=".$curF." Diff:".$diffF."<br />";
						$prevOddo = $currOddo;
						$currOddo=round($tdistance/1000,2);    
						$Cdistance+=$distance;
						$sn++;    
						$obj = json_decode($value['attributes']); 
						if($value['protocol']=='wialon'){
							$temp= $obj->{'volume'};
							$curF= $temp;
	
						}else {
						$temp= $obj->{'command'}; 
						$res = split("=",$temp);
						//$curF= trim($res[1],' T')/10;
						$curF= ($res[3])/10;
						}
						$diffF=0;
						//$diffF = round(($prev-$curF),1);
							
							if($prev!=0 and $curF!=0){
							// 	$diffF = round(($prev-$curF),1);
							// 	if(($currOddo-$prevOddo)>3){
									
							// 	$diffF = round(($prev-$curF),1);
							// //	if(($currOddo-$prevOddo)/3<$diffF){
							// 	if($diffF<0)$tdiffF=$diffF*-1;
							// 	if(($currOddo-$prevOddo)/$tdiffF<1){
							// 		// echo "Diff :".$tdiffF."<br />";
							// 		// echo "Curf :".$curF."<br />";
							// 		// echo "Prev :".$prev."<br />";
							// 		$diffF =0;
							// 	//$diffF = $tdiffF-(($currOddo-$prevOddo)/$tdiffF);
							// 	}else{
							// 		$diffF =0;
							// 	}
							// 	//$prev= $curF;
							// 	} else {
	
							// 		   $diffF = round(($prev-$curF),1);   	
	
							// 	}

							if((round($currOddo)-round($prevOddo))==0){
								//$StartChange =  $prev;
								$diffF = round(($prev-$curF),1);
							//	if(($currOddo-$prevOddo)/3<$diffF){
							
								//$prev= $curF;
								} else {
									 
									   $diffF = 0;   	
									   $prev= $curF;
								}
								
								// if($prev!=$curF ){
								// 	$prev= $curF;
								// 	}
							}
							if((round($currOddo)-round($prevOddo))>0){
								$diffF = round(($prev-$curF),1);
								if($diffF >4.6*(-1)){

								}else{
									$diffF = 0;   
								}
							}	
							/**/
							if($curF>0){
								if($curF>$maxF) $maxF= $curF;
								if($minF>$curF) $minF= $curF;	
								if($prev==0) $prev = $curF;
							//	if($Justprev==0) $Justprev = $curF;
								$Justprev=$curF;
								}
							if($diffF>=5){
								$bgcolorF = "red";
								$bigRise += ($diffF);
								$graphFuel[]=array($Alldevices[$j]['id'],"Stolen",$value['servertime'],$diffF);
						
								$countFLog = $this->model->checkfuelLogs($value['id']);
						//echo $value['id'];
						//print_r($countFLog);
						$data = array(
							'id' => NULL,
							'deviceid' =>$Alldevices[$j]['id'],
							'servertime' => $value['servertime'],
							'positionid'=> $value['id'],
							'type'=> 'stolen',
							'qty'=>$diffF,
							'fuel_level'=>$curF
						);
						 print_r($data);
						 
								if(count($countFLog)==0){
									echo "countis zero";
									$prev= $curF;
									$this->model->insert_fuelLogs($data);
								}
							} else {
								$bgcolorF = "white";
							}
							if($diffF<-7.66){
								$graphFuel[]=array($Alldevices[$j]['id'],"Fill",$value['servertime'],(-1*$diffF));
								$bigDrop += (-1*$diffF);
								$bgcolorF = "palegreen";
								
								$countFLog = $this->model->checkfuelLogs($value['id']);
						//print_r($countFLog);
						$data = array(
							'id' => NULL,
							'deviceid' =>$Alldevices[$j]['id'],
							'servertime' => $value['servertime'],
							'positionid'=> $value['id'],
								'type'=> 'fill',
							'qty'=>(-1*$diffF),
							'fuel_level'=>$curF
						);
						print_r($data);
								if(count($countFLog)==0){
									$prev= $curF;
									$this->model->insert_fuelLogs($data);
								}
							}
						}
						
				} // end individual fuel records FOR EACH           
		}  //end for devices FOR EACH
		
			
						echo "<pre>";
						
												  echo json_encode($graphFuel);
				
				} //end function 

			/*    OLD
			function getFuelSummary(){
				$mdate=$_REQUEST['date'];
					if($mdate=="") {
					$mdate =date("Y-m-d");
					}
				$Alldevices = $this->model->getAlldevicesFall();
				//print_r($Alldevices);
				for($j=0;$j<count($Alldevices);$j++){
				   	$content= array();
					$content= $this->model->dailyLogs($Alldevices[$j]['id'],$mdate);
					//print_r($content);
					$sn=0;
					$Cdistance=0;
					$maxF=0;
					$minF=1000;
					$prev=0;
					$curF=0;
					$prevOddo=0;
					$currOddo=0;
					$diffF=0;
						foreach($content AS $key=>$value){
					$obj = json_decode($value['attributes']); 
					$temp= $obj->{'command'}; 
					$res = split("=",$temp);
					$curF= trim($res[1],' T')/10;
					$ignition=$obj->{'ignition'};    
					$distance = $obj->{'distance'}; 
					$tdistance = $obj->{'totalDistance'};
				

					if($value['speed']==0 and $curF!=0)
					{    
						$prevOddo = $currOddo;
						$currOddo=round($tdistance/1000,2);    
						$Cdistance+=$distance;
						$sn++;    
						$obj = json_decode($value['attributes']); $temp= $obj->{'command'}; 
						$res = split("=",$temp);
						$diffF=0;
						$curF= trim($res[1],' T')/10;
	
							if($prev!=0 and $curF!=0){
	
								if(($currOddo-$prevOddo)>0.05){
									
								$diffF = round(($prev-$curF),1);
								//if(($currOddo-$prevOddo)/3<$diffF){
								//	$diffF = $diffF-($currOddo-$prevOddo)/3;
								//}
								$prev= $curF;
								} 
							
							}
							if($curF>0){
								if($curF>$maxF) $maxF= $curF;
								if($minF>$curF) $minF= $curF;    
								if($prev==0) $prev = $curF;   
							}
							if($diffF>=6){
								$bgcolorF = "red";
								$bigRise += ($diffF);
								$graphFuel[]=array($Alldevices[$j]['id'],"Stolen",$value['servertime'],$diffF);
						
								$countFLog = $this->model->checkfuelLogs($value['id']);
						//echo $value['id'];
						//print_r($countFLog);
								if(count($countFLog)==0){
									echo "countis zero";
									$data = array(
										'id' => NULL,
										'deviceid' =>$Alldevices[$j]['id'],
										'servertime' => $value['servertime'],
										'positionid'=> $value['id'],
										'type'=> 'stolen',
										'qty'=>$diffF,
										'fuel_level'=>$curF
									);
									// print_r($data);
									$this->model->insert_fuelLogs($data);
								}
							} else {
								$bgcolorF = "white";
							}
							if($diffF<-4.75){
								$graphFuel[]=array($Alldevices[$j]['id'],"Fill",$value['servertime'],(-1*$diffF));
								$bigDrop += (-1*$diffF);
								$bgcolorF = "palegreen";
								
								$countFLog = $this->model->checkfuelLogs($value['id']);
						//print_r($countFLog);
								if(count($countFLog)==0){
									$data = array(
										'id' => NULL,
										'deviceid' =>$Alldevices[$j]['id'],
										'servertime' => $value['servertime'],
										'positionid'=> $value['id'],
											'type'=> 'fill',
										'qty'=>(-1*$diffF),
										'fuel_level'=>$curF
									);
									$this->model->insert_fuelLogs($data);
								}
							}
						}
				} // end individual fuel records FOR EACH           
		}  //end for devices FOR EACH
		
			
						echo "<pre>";
						
												  echo json_encode($graphFuel);
				
				} //end function 
		*/

		function fuelview()
		{
		//$this->view->Allgeofences = $this->model->getAllgeofences();	
		$this->view->Alldevices = $this->model->getAlldevicesFall();
		$this->view->deviceid=$_REQUEST['deviceid'];
		$this->view->to=$_REQUEST['to'];
		$this->view->from=$_REQUEST['from'];
		//print_r ($to);
		//print_r ($this->view->Alldevices);
		$this->view->content= $this->model->fuelLog($this->view->deviceid,$this->view->from,$this->view->to);
		//print_r($this->view->content);
		
		$this->view->render('vts/fuelview');
		}
		function getStartFuel(){
			$date=$_REQUEST['date'];
			$deviceid=$_REQUEST['deviceid'];
			$result=$this->model->getStartFuel($date,$deviceid);
			print_r($result);
			echo $result[0]['Fuel'];
			}

		function getFuelMobile(){
			$date=date("Y-m-d");
			$deviceid=$_REQUEST['deviceid'];
			$result=$this->model->getFuelMobile($date,$deviceid);
			$final = json_encode($result);
			echo $final;
			//echo $result[0]['Fuel'];
			}	
		
		function indexStartFuel(){
			//$date=$_REQUEST['date'];
			$date=date("Y-m-d");
			//$date='2017-09-06';
			$checkIndex = $this->model->indexpositionsFuel($date);
			//print_r($checkIndex);
			for($i=0;$i<count($checkIndex);$i++){
				//if($checkIndex[$i]['deviceid']=='181'){
			//$this->model->delete_date_indexpositions($date);
			$getStartFuel = $this->model->getStartFuel($date,$checkIndex[$i]['deviceid']);
			$getFuel = $getStartFuel[0]['Fuel'];
			$this->model->update_indexfuel($checkIndex[$i]['id'],$getFuel);
			echo "Updated ".$checkIndex[$i]['deviceid']." ".$getFuel."<br />";
			//	}
			}
			}	
			
	function testMaxSpeed(){
			 
		$date=date("Y-m-d");
		$getMaxSpeed =  $this->model->getMaxSpeed($date);
		$getMaxSpeedC =  $this->model->getMaxSpeedC($date);
		
		echo "<pre>";
		print_r($getMaxSpeed);
		print_r($getMaxSpeedC);
			 }	
			 
		function overSpeedingAlerts(){
		$newLogs = $this->model->newLogsAll();
		//print_r($newLogs);
		echo "All devices : ".count($newLogs);
		for($i=0;$i<count($newLogs);$i++){
			 //echo "speed  for ".$newLogs[$i]['id']." = ".$newLogs[$i]['speed']." <br/";
		  // if($newLogs[$i]['speed']>=1){
		    $checkDevice = $this->model->getIdleTime($newLogs[$i]['id']);
		    print_r($checkDevice);
		    if(count($checkDevice)==0){
		    $tt = $this->model->idleLogs($newLogs[$i]['id'],$newLogs[$i]['positionid']);
		    $this->model->insertIdleTime($newLogs[$i]['id'],$tt[0]['servertime']);
		    echo "time Inserted for ".$newLogs[$i]['name']." ".$newLogs[$i]['id']." ".$tt[0]['servertime']." <br/";
		    } 
			else {
			 $tt = $this->model->idleLogs($newLogs[$i]['id'],$newLogs[$i]['positionid']);
			 $this->model->updateIdleTime($newLogs[$i]['id'],$tt[0]['servertime']);
			echo "time updated for ".$newLogs[$i]['name']." ".$newLogs[$i]['id']." ".$tt[0]['servertime']." <br/";
			}
			
		 //	}
			/*	
			 if($newLogs[$i]['speed']*1.852 >60){
				 $checkDevice = $this->model->lastSMS($newLogs[$i]['id'],'overspeeding');
				 if($count($checkDevice)==0){
			$outtext="overspeeding ".$newLogs[$i]['id']."  ".$newLogs[$i]['name']."  ".($newLogs[$i]['speed']*1.852)."  ".$newLogs[$i]['lastupdate']."  ".$newLogs[$i]['latitude']."  ".$newLogs[$i]['longitude']." <br />"; 
			echo $outtext;
	    $data = array(
		 'id' => NULL,
		  'deviceid' =>$newLogs[$i]['id'],
		  'servertime' => $newLogs[$i]['lastupdate'],
		  'msg'=> $outtext,
		  'type'=> 'overspeeding'
       );
   			$this->model->insert_smsAlerts($data);
			
			$apiKey = urlencode('jjumSi1I1Lk-MM4wGEcwmb1z3N1wKFtiAQS3jD9ZGx');
    	
    	// Message details
    	$numbers = array(919040292395,918018178337,919937352572);
    	$sender = urlencode('LIVERA');
		$veh_num = $newLogs[$i]['name'];
		$speed = (int)($newLogs[$i]['speed']*1.852);
		$time = date("d-m-Y H:i:s");
    	$message = rawurlencode('OVERSPEED ALERT : Vehicle ('.$veh_num.') is running at ('.$speed.') KM/H on ('.$time.')');
     
    	$numbers = implode(',', $numbers);
     
    	// Prepare data for POST request
    	$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
     
    	// Send the POST request with cURL
    	$ch = curl_init('https://api.textlocal.in/send/');
    	curl_setopt($ch, CURLOPT_POST, true);
    	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    	$response = curl_exec($ch);
    	curl_close($ch);
			
			
   					}
			 }
			 */
		}
		
		
		}	 
		
		function testingFuel(){
			$date=$_REQUEST['date'];
			if($date=="") {
			$date =date("Y-m-d");
			}

			//$date=date("Y-m-d");
			$filled = $this->model->filledFuel($date);
			print_r($filled);
			$stolen = $this->model->stolenFuel($date);
			print_r($stolen);
			}
		
		function idleLogs(){
			//Session::init();
	//	SELECT a . * , b.`latitude` , b.`longitude` , b.`address` , b.`speed` , b.`course` , b.`servertime` ,b.device FROM devices a, `positions` b WHERE a.positionid = b.id;
	     $userID= Session::get('traccarID');
		 if($userID == ""){
			 $userID= $_REQUEST['traccarID'];
			 //Session::set('traccarID')=$userID;
			 }
		 
		// echo "userID = ".$userID;
		$newLogs = $this->model->newLogs();
		$date=date("Y-m-d");
		//$date = "2017-07-20";
		//echo $date;
		$filled = $this->model->filledFuel($date);
		for($i=0;$i<count($filled);$i++){
			$getFilled[$filled[$i]['deviceid']]=$filled[$i]['sqty'];
		}
		$stolen = $this->model->stolenFuel($date);
		for($i=0;$i<count($stolen);$i++){
			$getStolen[$stolen[$i]['deviceid']]=$stolen[$i]['sqty'];
		}
		
		
		$checkIndex = $this->model->indexpositions($date);
		//if(count($checkIndex)<=0){
			//$this->model->delete_indexpositions();
			//echo 'records deleted';
			//$this->model->insert_indexpositions();
		//}else {
			for($i=0;$i<count($checkIndex);$i++){
				$updatePostions[$checkIndex[$i]['deviceid']]=$checkIndex[$i]['id'];
				$updateFuel[$checkIndex[$i]['deviceid']]=$checkIndex[$i]['s_fuel'];
			}
			
			for($i=0;$i<count($newLogs);$i++){
			//$this->model->delete_date_indexpositions($date);
			$this->model->update_indexpositions($updatePostions[$newLogs[$i]['id']],$newLogs[$i]['positionid']);
			}

			
		$getMaxSpeed =  $this->model->getMaxSpeed($date);
		$getMaxSpeedC =  $this->model->getMaxSpeedC($date);
		//print_r($getMaxSpeedC);
		$getStartDistance = $this->model->getStartDistance($date);
		//$getStartFuel = $this->model->getStartDistance($date);
		//echo "<pre>";
		for($i=0;$i<count($getStartDistance);$i++){
						
			$startDistance[$getStartDistance[$i]['did']] = $getStartDistance[$i]['startDistance']; 
			$startFuel[$getStartDistance[$i]['did']] = $getStartDistance[$i]['Fuel']; 
		//	if($startFuel[$getStartDistance[$i]['did']]==''){
				$startFuel[$getStartDistance[$i]['did']]=$updateFuel[$getStartDistance[$i]['did']];
			//	}
			}
		//print_r($getStartDistance);
		for($k=0;$k<count($getMaxSpeed);$k++){
						
			$maxSpeed[$getMaxSpeed[$k]['deviceid']] = $getMaxSpeed[$k]['speed'];
			//print_r($idleLogs[$i]);
			}
			
			for($j=0;$j<count($getMaxSpeedC);$j++){
						
		
			$maxSpeedC[$getMaxSpeedC[$j]['deviceid']] = $getMaxSpeedC[$j]['c']; 
			//print_r($idleLogs[$i]);
			}	
			//print_r($getMaxSpeed);
		//	print_r($maxSpeed);
		for($i=0;$i<count($newLogs);$i++){
		$idleLogs[$i] = $this->model->getIdleTime($newLogs[$i]['id']);
		
			//$idleLogs[$i] = $this->model->idleLogs($newLogs[$i]['id'],$newLogs[$i]['positionid']);
			
			//print_r($idleLogs[$i]);
			$newLogs[$i]['name']=substr_replace(str_replace(" ","",$newLogs[$i]['name'])," ",5,0);
			$newLogs[$i]['LastTime']=$idleLogs[$i][0]['idleTime'];
			$newlogs[$i]['Smax']=$maxSpeed[$newLogs[$i]['id']];
			$newLogs[$i]['maxSpeed']=$maxSpeed[$newLogs[$i]['id']];
			$newLogs[$i]['maxSpeedC']=$maxSpeedC[$newLogs[$i]['id']];
			$newLogs[$i]['startDistance']=$startDistance[$newLogs[$i]['id']];
			$newLogs[$i]['startFuel']=$startFuel[$newLogs[$i]['id']];
			$newLogs[$i]['sFilled']=number_format($getFilled[$newLogs[$i]['id']],1);
			$newLogs[$i]['sStolen']=number_format($getStolen[$newLogs[$i]['id']],1);
			if($newLogs[$i]['startFuel']=='' && $newLogs[$i]['Fuel']!=''){
				//$thisFuel=$this->model->getStartFuel($date,$newLogs[$i]['id']);
				//$newLogs[$i]['startFuel']=$thisFuel[0]['Fuel'];
				}
			}
		//echo "<pre>";
		//print_r($newLogs);
		
		
		echo json_encode($newLogs);
		
		//echo json_encode(getMaxSpeed);
		}
		
		function getStartDistance(){
			$date=date("Y-m-d");
			 $userID= Session::get('traccarID');
			//$sd=$this->model->getMaxSpeedC($date);
			//$sd=$this->model->filledFuel($date);
			$sd = $this->model->indexpositions($date);
			//$sd=$this->model->newLogs($userID);
			//print_r($sd);
			
			//$getMaxSpeed =  $this->model->getMaxSpeed($date);
			// print_r($getMaxSpeed);
		   //$getMaxSpeedC =  $this->model->getMaxSpeedC($date);
		  // print_r($getMaxSpeedC);
		    $getStartDistance = $this->model->getStartDistance($date);
			print_r($getStartDistance);
			/*
		    $newLogs = $this->model->newLogsAll();
		    print_r($newLogs);
		    for($i=0;$i<count($newLogs);$i++){
		    $checkDevice = $this->model->getIdleTime($newLogs[$i]['id']);
		    if(count($checkDevice)==0){
		    $tt = $this->model->idleLogs($newLogs[$i]['id'],$newLogs[$i]['positionid']);
		    $this->model->insertIdleTime($newLogs[$i]['id'],$tt[0]['servertime']);
		    print_r($tt);
		    } 
			
			
			}
			*/
			}
		
		function idleLogs1(){
			
	//	SELECT a . * , b.`latitude` , b.`longitude` , b.`address` , b.`speed` , b.`course` , b.`servertime` ,b.device FROM devices a, `positions` b WHERE a.positionid = b.id;
		$newLogs = $this->model->newLogs();
		$date=date("Y-m-d");
		//$date = "2017-07-20";
		//echo $date;
		$checkIndex = $this->model->indexpositions($date);
		if(count($checkIndex)<=0){
			$this->model->delete_indexpositions();
			//echo 'records deleted';
			$this->model->insert_indexpositions();
		}else {
			for($i=0;$i<count($checkIndex);$i++){
				$updatePostions[$checkIndex[$i]['deviceid']]=$checkIndex[$i]['id'];
				$updateFuel[$checkIndex[$i]['deviceid']]=$checkIndex[$i]['s_fuel'];
			}
			
			for($i=0;$i<count($newLogs);$i++){
			//$this->model->delete_date_indexpositions($date);
			$this->model->update_indexpositions($updatePostions[$newLogs[$i]['id']],$newLogs[$i]['positionid']);
			}

			}
		$getMaxSpeed =  $this->model->getMaxSpeed($date);
		$getMaxSpeedC =  $this->model->getMaxSpeedC($date);
		$getStartDistance = $this->model->getStartDistance($date);
		//$getStartFuel = $this->model->getStartDistance($date);
		//echo "<pre>";
		for($i=0;$i<count($getStartDistance);$i++){
						
			$startDistance[$getStartDistance[$i]['did']] = $getStartDistance[$i]['startDistance']; 
			$startFuel[$getStartDistance[$i]['did']] = $getStartDistance[$i]['Fuel']; 
			if($startFuel[$getStartDistance[$i]['did']]==''){
				$startFuel[$getStartDistance[$i]['did']]=$updateFuel[$getStartDistance[$i]['did']];
				}
			
			}
		//print_r($getStartDistance);
		for($k=0;$k<count($getMaxSpeed);$k++){
						
			$maxSpeed[$getMaxSpeed[$k]['deviceid']] = $getMaxSpeed[$k]['speed'];
			//print_r($idleLogs[$i]);
			}
			
			for($j=0;$j<count($getMaxSpeedC);$j++){
	
			$maxSpeedC[$getMaxSpeedC[$j]['deviceid']] = $getMaxSpeedC[$j]['c']; 
			//print_r($idleLogs[$i]);
			}	
			//print_r($getMaxSpeed);
			print_r($maxSpeed);
		for($i=0;$i<count($newLogs);$i++){
			$idleLogs[$i] = $this->model->idleLogs($newLogs[$i]['id'],$newLogs[$i]['positionid']);
			
			//print_r($idleLogs[$i]);
			$newLogs[$i]['LastTime']=$idleLogs[$i][0]['devicetime'];
			//$newlogs[$i]['Smax']=$maxSpeed[$newLogs[$i]['id']];
			$newLogs[$i]['maxSpeed']=$maxSpeed[$newLogs[$i]['id']];
			$newLogs[$i]['maxSpeedC']=$maxSpeedC[$newLogs[$i]['id']];
			$newLogs[$i]['startDistance']=$startDistance[$newLogs[$i]['id']];
			$newLogs[$i]['startFuel']=$startFuel[$newLogs[$i]['id']];
			
			//print_r($newLogs[$i]);
			if($newLogs[$i]['startFuel']=='' && $newLogs[$i]['Fuel']!=''){
				//$thisFuel=$this->model->getStartFuel($date,$newLogs[$i]['id']);
				//$newLogs[$i]['startFuel']=$thisFuel[0]['Fuel'];
				}
			}
		//echo "<pre>";
		print_r($maxSpeed);
		
		
		echo json_encode($newLogs);
		
		//echo json_encode($maxSpeed);
		}
	
	
	function getLoadingDevices(){
		
		 Session::init();
		   	Auth::handleLogin();
		$email=Session::get('email');
		$password=Session::get('password');
		$t=Traccar::login($email,$password);
if($t->responseCode=='200') {
    $traccarCookie = Traccar::$cookie;
    /*
    ......
	*/
	$pos=Traccar::positions($traccarCookie);
	 $devices= Traccar::Devices($traccarCookie);
	 $res=json_decode($devices->{'response'},true);
	// echo "<pre>";
	// print_r($res);
	 
	  //echo "</pre>";
	  $lCount=count($res);
	  $devLoadingCount=0;
	  for($i=0;$i<$lCount;$i++){
		  
		 // echo $i." ".$res[$i]['geofenceIds'][0]."<br />";
		  if($res[$i]['geofenceIds'][0]==8){
			  
			  $devLoadingCount++;
		  }
	  }
	  echo $devLoadingCount;
	  
}
else echo 'Incorrect email address or password';
	}
	
	function getCurrentDevices(){
		 Session::init();
		   	Auth::handleLogin();
		
		$email=Session::get('email');
		$password=Session::get('password');
		$t=Traccar::login($email,$password);
if($t->responseCode=='200') {
    $traccarCookie = Traccar::$cookie;
    /*
    ......
	*/
	//$pos=Traccar::positions('','','',$traccarCookie);
	 $devices= Traccar::devices($traccarCookie);
	 echo $devices->{'response'};
	  
}
else echo 'Incorrect email address or password';
	}	
	
	
	function getPositions(){
		 Session::init();
		   	Auth::handleLogin();
		$email=Session::get('email');
		$password=Session::get('password');
		$t=Traccar::login($email,$password);
if($t->responseCode=='200') {
    $traccarCookie = Traccar::$cookie;
	$pos=Traccar::positions('','','',$traccarCookie);
	 //$devices= Traccar::devices($traccarCookie);
	 echo $pos->{'response'};
	  
}
else echo 'Incorrect email address or password';
	}
function getEvents(){
		 Session::init();
		   	Auth::handleLogin();
		
		$email=Session::get('email');
		$password=Session::get('password');
		$t=Traccar::login($email,$password);
if($t->responseCode=='200') {
    $traccarCookie = Traccar::$cookie;
	//$groupId,$type,$from,$to,$cookie
	$events= Traccar::events('1','allEvents','2017-07-11T12:21:56.000Z','2017-07-18T12:21:56.000Z',$traccarCookie);
	//$events=Traccar::events('','','','',$traccarCookie);
	 //$devices= Traccar::devices($traccarCookie);
	 echo $events->{'response'};
	  
}
else echo 'Incorrect email address or password';
	}
	function getgroups() 
	{
		$getAllgroups = $this->model->getAllgroups();
		echo json_encode($getAllgroups);
		/*
		 Session::init();
		   	Auth::handleLogin();
		$email=Session::get('email');
		$password=Session::get('password');
		$t=Traccar::login($email,$password);
		if($t->responseCode=='200') 
			{
				$traccarCookie = Traccar::$cookie;
				$groups= Traccar::groups($traccarCookie);
				echo $groups->{'response'};
	
			}
			
			*/
		
	}
	function fuelreport(){
    //$devices=$this->model->getAlldevices();
    $this->view->allgroups = $this->model->getAllgroups();
    $this->view->Alldevices = $this->model->getAlldevicesF();
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
    $this->view->render('vts/fuelreport');
    }
	
	function loadpolygon() 
	{
		 Session::init();
		   	Auth::handleLogin();
	$email=Session::get('email');
		$password=Session::get('password');
		$t=Traccar::login($email,$password);
	if($t->responseCode=='200') {
    $traccarCookie = Traccar::$cookie;
		$geofences=Traccar::geofences($traccarCookie);
		// $allGeofences=json_decode($geofences->{'response'},true);
		 echo $geofences->{'response'};
			//echo "<pre>";
			//print_r($allGeofences);
			/* $lCount=count($allGeofences);
			$devLoadingCount=0;
			for($i=0;$i<$lCount;$i++)
			{
				$typ_string = ($typ == 1) ? 'Baugrundstück' : 'Gewerbegrundstück';
    echo '<div class="panel-element" data-id="'.$allGeofences[$i]['id'].'" data-mid="' . $allGeofences[$i]['area'] . '">';
    echo '<span class="poly-typ label label-info">' . $typ_string . '</span>';
    echo '<span class="poly-name">' . $allGeofences[$i]['name'] . '</span>';
    echo '<span class="poly-beschreibung sr-only">' . '' . '</span>';
    echo '<span class="poly-datetime">' . '' . ' ' . '' . ' Uhr</span>';
    echo '</div>';
			}*/
	}
	}
	function settings() {
		
		 $this->view->render('vts/settings');
		}
	function changepassword() {
		
		 $this->view->render('vts/changepassword');
		}
		function submit_changepassword() {
			//echo md5($_POST['confirmpassword']);
			if(md5($_POST['oldpassword'])==Session::get('pass')){
				$arg=$_POST['id'];
				//echo $arg;
				$data=array(
						'password'=>md5($_POST['confirmpassword'])
						);
		//print_r($data);
	
		 $this->model->changepassword($data,$arg);
		 $this->view->msg = $this->model->error("Your Password is updated Successfully.");
		 $data=array(
						'id' => null,
						'admin_id' => Session::get('admin_id'),
						'operations' => 'Password Changed',
						'time' => date('Y-m-d H:i:s')
	);
	$this->model->insert_activity($data);
		
		 }
		 else{
				$this->view->msg = $this->model->error("You Entered an Invalid Password.");
				
			}
			$this->view->render('vts/settings');
		}
	function suspend() {
		$admin_id=$_GET['admin_id'];
		$this->model->suspend($admin_id);
		$data=array(
						'id' => null,
						'admin_id' => Session::get('admin_id'),
						'operations' => 'Customer Suspended.',
						'time' => date('Y-m-d H:i:s')
	);
	$this->model->insert_activity($data);
		 //$this->view->render('vts/customer');
		}	
	function unsuspend() {
		$admin_id=$_GET['admin_id'];
		
		 $this->model->unsuspend($admin_id);
		 $data=array(
						'id' => null,
						'admin_id' => Session::get('admin_id'),
						'operations' => 'Customer Unsuspended',
						'time' => date('Y-m-d H:i:s')
	);
	$this->model->insert_activity($data);
		 //$this->view->render('vts/customer');
		}	
		
		
	/*function getevents() 
	{
		$t=Traccar::login($email,$password);
		if($t->responseCode=='200') 
			{
				$traccarCookie = Traccar::$cookie;
				$events= Traccar::events('1','allEvents','2017-07-06T12:21:56.000Z','2017-07-08T12:21:56.000Z',$traccarCookie);
				echo $events->{'response'};
				print_r($events);
				
			}
		
	}*/
	
	function activitylog() 
	{
		$this->view->allActivity = $this->model->getAllactivity();
		$this->view->render('vts/activitylog');
	}
	function insert_activity() {
		
	$data=array(
	'id' => null,
	'admin_id' => Session::get('admin_id'),
	'operations' => $_POST['operations'],
	'time' => date("Y-m-d H:i:s")
	//'time' => date(format('U = Y-m-d H:i:s'))
	);
	print_r($data);
		$this->model->insert_activity($data);
		echo 'Inserted successfully';
		//$this->view->render('activity/index');
	}

//	function deviceGroup() 
//	{
//
//		$this->view->Alldevices = $this->model->getAlldevices();
//		//print_r($this->view->Alldevices);
//		$this->view->AllGroups= $this->model->getAllgroups();
//		//print_r($this->view->AllGroups);
//		//$this->view->Allgeofences = $this->model->getAllgeofences();
//		$this->view->render('vts/deviceGroup');
//	}

		}
?>