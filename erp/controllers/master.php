<?php

class Master extends Controller {

	function __construct() {
		parent::__construct();
		// intialisez the session
           Session::init();
		 // checks wether use is logged in or not  
		   
			
	}
	
	
	// This is the master view index page. currently we dont want to use this
	function index() {
		Auth::handleLogin();

		$this->view->render('master/index');
	}
    function getAllVehicleType(){
       $deviceid = $_REQUEST['deviceid']; 
       $this->view->AllVehicleType = $this->model->getAllVehicleType($deviceid); 
       // print_r($this->view->AllVehicleType);
       echo json_encode($this->view->AllVehicleType);
        
    }
	 function getEmployeeAttendancedate(){
       $to=$_REQUEST['to'];
       $from=$_REQUEST['from'];
		header('Content-type: application/json');
			$attendance=$this->model->getEmployeeAttendancedate($from,$to);
			echo json_encode($attendance);
       
   }
    function getemployee(){
		$this->view->Allemployee = $this->model->getAllemployee();
		echo json_encode($this->view->Allemployee);
	}
    
	//vehicle section
	function vehicle() {
		Auth::handleLogin();
	
		$this->view->render('master/vehicle');
	}
	function expenselog() {
		Auth::handleLogin();
		$this->view->allexpense = $this->model->getAllexpense();
	
		$this->view->render('master/expenselog');
	}
	function add_expenselog() {
		Auth::handleLogin();
		$this->view->content = $this->model->getAlldrivers();
		//print_r($this->view->allDrivers);
		//print_r($this->view->allDrivers[0]['attributes']);
		//json_decode($this->view->allDrivers['attributes']['salary']);
		$this->view->alldevices = $this->model->getAllDevices();
	
		$this->view->render('master/add_expenselog');
	}
	function expensereport(){
		Auth::handleLogin();
		$this->view->alldevices = $this->model->getAllDevices();
				$vehicleno=$_REQUEST['VehicleNo'];
				$category=$_REQUEST['category'];
				$date=$_REQUEST['date'];
		$this->view->expensereport = $this->model->getAllexpensereport($vehicleno,$category,$date);
		$this->view->render('master/expensereport');
	}
	
	function search() {
		Auth::handleLogin();
		//Auth::handleLogin();
		//$this->view->page = $page;
		$name=$_REQUEST['name'];
		$content = $this->model->getAlldrivers($name);
		foreach($content AS $key=>$value){
				$obj = json_decode($value['attributes']); 
					$dsal=$obj->{'salary'};
		$sal[] = array($value['name'],$dsal);
		
		//$dsal=$_REQUEST[$obj->{'salary'}];
		//print_r (dsal);
		//$rows= $this->model->getAlldrivers($name);
		//$this->view->content = $this->model->getAlldrivers($name);
		
	}
	header("Content-type:application/json"); 
        echo json_encode($sal);
	}
	function submit_expenselog(){
		Auth::handleLogin();
		//print_r($_POST);
		//Auth::handleLogin();
		$action=$_POST['submit']; 
		//echo '$action';
			//echo'$action';
		//$fileupload=$_FILES["fileupload"];
		if($_POST['category']=="regular")
		{
			$amount=$_POST['amount1'];
		}
		elseif($_POST['category']=="accidental")
		{
			$amount=$_POST['amount2'];
			echo $amount;
		}
		elseif($_POST['category']=="salary")
		{
			$amount=$_POST['driversalary'];
		}
		elseif($_POST['category']=="fuel")
		
		{
		$amount=$_POST['amount3'];
			//echo $amount;
			
		}
		else{
			
			echo 'hiii';
		}
		//echo $_POST['category'];
		
		$data = array(
		'VehicleNo'=>$_POST['VehicleNo'],
		'category'=>$_POST['category'],
		'date'=>$_POST['date'],
		'accounthead'=>$_POST['accounthead'],
		'service'=>$_POST['service'],
		'amount'=>$amount,
		'challanno'=>$_POST['challanno'],
		'remarks'=>$_POST['remarks'],
		'workshopname'=>$_POST['workshopname'],
		'drivername'=>$_POST['drivername'],
		'driversalary'=>$_POST['driversalary'],
		'fuelfill'=>$_POST['fuelfill'],
		'admin_id'=>Session::get('admin_id')
		);
		
		$this->model->submit_expenselog($data);
		 $data=array(
						'id' => null,
						'admin_id' => Session::get('admin_id'),
						'operations' => 'Expense Added for '." ".$_POST['VehicleNo'],
						'time' => date('Y-m-d H:i:s')
	);
	$this->model->insert_activity($data);
		//print_r($this->model->submit_expenselog($data));
		header('location: expenselog');
	}
	function view_expenselog() 
	{
		Auth::handleLogin();
	//Auth::handleLogin();
		$data = $_GET;
		if($data['id']=='')
		    {
				$this->view->pick='';
				$this->view->data=$data;
			} 
		else 
			{
				$this->view->pick=$data['id'];
				$this->view->content= $this->model->viewOneexpense($data['id']);
				//print_r($this->view->content);
}
$this->view->render('master/view_expenselog');
	}
	
	//////////////////////////////..........*********####****** DRIVER ******####*********........///////////////////////////
				
function driverPerfrormance(){
    //echo "test";
    $date = $_REQUEST['date'];
   // echo "select cast(`ktcchallan`.`datetime_out` as date) AS `DATE(datetime_out)`,`ktcchallan`.`vehicle_no` AS `vehicle_no`,`ktcchallan`.`driver_name` AS `driver_name`,count(0) AS `Trips`,(SUM(`ktcchallan`.`netweight`)/1000) from `ktcchallan` WHERE (date_format(cast(`ktcchallan`.`datetime_out` as date),'%Y-%m')) = ".$date."  group by `ktcchallan`.`driverid` ORDER BY `Trips`  DESC";

  $this->view->trips = $this->model->driverPerfrormance($date);
   //  $this->view->trips1 = $this->model->driverPerfrormanceVAL($date);
     //print_r($this->view->trips);
     //driverPerfrormanceVAL
       echo json_encode($this->view->trips);
   // echo json_encode(array_merge($this->view->trips,$this->view->trips1));
   
}
    
    function vehiclePerfrormance(){
    //echo "test";
    $date = $_REQUEST['date'];
    $month=substr($date,6,-1);
    $year = substr($date,1,-4);
   
//echo $year;
  $this->view->vehicletrips = $this->model->vehiclePerfrormance($date,$month,$year);
  echo json_encode($this->view->vehicletrips);
   
}
    
      //////////////////////// freight rate master Starts ///////////////////  
    
    function freightratemaster(){
        	
       
	$this->view->render("master/freightratemaster",true);
	
}

function getallfreightratemaster(){
 $this->view->allfreightratemaster = $this->model->freightratemaster();
	echo json_encode($this->view->allfreightratemaster);
}

function view_freightratemaster() 
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
			$this->view->content= $this->model->view_freightratemaster($data["id"]);
}
	echo json_encode($this->view->content);
}

function delete_freightratemaster(){
	$id=$_REQUEST["id"];
	$this->model->delete_freightratemaster($id);
	
}

function add_freightratemaster(){
	$data = array( 
				"id" => null, "routecode" => $_REQUEST["routecode"],"routename" => $_REQUEST["routename"],"month" => $_REQUEST["month"],"year" => $_REQUEST["year"],"rate" => $_REQUEST["rate"],"unit" => $_REQUEST["unit"]
			   );
	$this->model->add_freightratemaster($data);
	
}

function edit_freightratemaster(){
	$arg=$_REQUEST["id"];
	$data = array( "routecode" => $_REQUEST["routecode"],"routename" => $_REQUEST["routename"],"month" => $_REQUEST["month"],"year" => $_REQUEST["year"],"rate" => $_REQUEST["rate"],"unit" => $_REQUEST["unit"]
			   );
	$this->model->edit_freightratemaster($data,$arg);
}

    
    
    //////////////////////// freight rate master end ///////////////////
    
    
//    function driverPerfrormanceDateWise(){
//    
//    $from = $_REQUEST['from'];
//    $to = $_REQUEST['to'];
//    $this->view->trips = $this->model->driverPerfrormance($from,$to);
//    echo json_encode($this->view->trips);
//}
	function driver() {
		Auth::handleLogin();
	
		$this->view->render('master/driver');
	}
	function drivermaster() 
	{
		
	 Session::init();
		 Auth::handleLogin();
	 $email=Session::get('email');
	 $password=Session::get('password');
	 $t=Traccar::login($email,$password);
	 //$t=Traccar::login($email,$password);
	 if($t->responseCode=='200') 
	 {
	  $traccarCookie = Traccar::$cookie;
	  $getDriver= Traccar::getDriver($traccarCookie);
	   $this->view->getDriver=json_decode($getDriver->{'response'},true);
	 }
	 //$this->view->alldrivers = $this->model->getAlldrivers();
	 $this->view->render('master/drivermaster',true);
	}
    
    function drivermaster_details() {
        $this->view->allDriver = $this->model->getAlldriver();
        echo json_encode( $this->view->allDriver);
        
    }
    function drivermasterqr() 
	{
	 Session::init();
		 Auth::handleLogin();
	 $email=Session::get('email');
	 $password=Session::get('password');
	 $t=Traccar::login($email,$password);
	 //$t=Traccar::login($email,$password);
	 if($t->responseCode=='200') 
	 {
	  $traccarCookie = Traccar::$cookie;
	  $getDriver= Traccar::getDriver($traccarCookie);
	   $this->view->getDriver=json_decode($getDriver->{'response'},true);
	 }
	 //$this->view->alldrivers = $this->model->getAlldrivers();
	 $this->view->render('master/driverqr',true);
	}

 function drivermasterqrcode() 
	{
	 Session::init();
		// Auth::handleLogin();
	 $email=Session::get('email');
        
	 $password=Session::get('password');
	 $t=Traccar::login($email,$password);
	 //$t=Traccar::login($email,$password);
	 if($t->responseCode=='200') 
	 {
	  $traccarCookie = Traccar::$cookie;
	  $getDriver= Traccar::getDriver($traccarCookie);
	   $this->view->getDriver=json_decode($getDriver->{'response'},true);
	 }
	 //$this->view->alldrivers = $this->model->getAlldrivers();
	 $this->view->render('master/driverqr',true);
	}   
   function edit_drivermaster() 
	   {
		Auth::handleLogin();
		   $this->view->alldevices = $this->model->getAllDevices();
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
				   $this->view->content= $this->model->getOnedriver($_GET['id']);
				   //print_r($this->view->content);
			   }
		   
		   $this->view->render('master/edit_drivermaster');
		   //header('location: vehiclemaster');
	   }
   function edit_submit_drivermaster(){
	//Auth::handleLogin();
		   //Auth::handleLogin();
		   $this->view->name=$_REQUEST['name'];
		   $this->view->uniqueid=$_REQUEST['uniqueid'];
		   $this->view->fathername=$_REQUEST['fathername'];
		   $this->view->address=$_REQUEST['address'];
		   $this->view->city=$_REQUEST['city'];
		   $this->view->state=$_REQUEST['state'];
		   $this->view->phoneno=$_REQUEST['phoneno'];
		   $this->view->dob=$_REQUEST['dob'];
		   $this->view->dateofjoining=$_REQUEST['dateofjoining'];
		   $this->view->licenseno=$_REQUEST['licenseno'];
		   $this->view->licensetype=$_REQUEST['licensetype'];
		   $this->view->issuedate=$_REQUEST['issuedate'];
		   $this->view->expirydate=$_REQUEST['expirydate'];
		   $this->view->authority=$_REQUEST['authority'];
		   $this->view->aadhaarno=$_REQUEST['aadhaarno'];
		   $this->view->bloodgroup=$_REQUEST['bloodgroup'];
		   $this->view->vehicleno=$_REQUEST['vehicleno'];
		   $this->view->salary=$_REQUEST['salary'];
		   
		   $action=$_POST['submit']; 
		  // if($action=="submit"){
		   Session::init();
				  //Auth::handleLogin();
		   $email=Session::get('email');
       if($email == ""){
           $email=$_REQUEST['email'];
           
       }
		   $password=Session::get('password');
        if($password == ""){
           $password=$_REQUEST['password'];
           
       }
       echo $email;
		   $t=Traccar::login($email,$password);
		   //$t=Traccar::login($email,$password);
		   if($t->responseCode=='200') 
		   {
			   $traccarCookie = Traccar::$cookie;
			   $addDriver= Traccar::addDriver($this->view->name,$this->view->uniqueid,$this->view->fathername,$this->view->address,$this->view->city,$this->view->state,$this->view->phoneno,$this->view->dob,$this->view->dateofjoining,$this->view->licenseno,$this->view->licensetype,$this->view->issuedate,$this->view->expirydate,$this->view->authority,$this->view->aadhaarno,$this->view->bloodgroup,$this->view->vehicleno,$this->view->salary,$traccarCookie);
			   //$pos=Traccar::positions('','','',$traccarCookie);
			   //echo $pos->{'response'};
				$this->view->addDriver=json_decode($addDriver->{'response'},true);
                  }
//			   $data=array(
//						   'id' => null,
//						   'admin_id' => Session::get('admin_id'),
//						   'operations' => $_POST['name']." ".'Driver Added for '." ".$_POST['assignedvehicle'],
//						   'time' => date('Y-m-d H:i:s')
//	   );
//	   $this->model->insert_activity($data);
			   //print_r($this->view->reportsummary);
			   //$this->view->reportsummary=$reportsummary;
		
		   
		   //echo '$action';
		   /*if ($action=='submit')
		   {
			   //echo'$action';
		   $arg=$_POST['id'];
		   //$fileupload=$_FILES["fileupload"];
		   $data = array(
		   'id'=>null,
		   'name'=>$_POST['name'],
		   'fathername'=>$_POST['fathername'],
		   'bloodgroup'=>$_POST['bloodgroup'],
		   'DLno'=>$_POST['DLno'],
		   'issuingauthority'=>$_POST['issuingauthority'],
		   'expirydate'=>$_POST['expirydate'],
		   'DOB'=>$_POST['DOB'],
		   'salary'=>$_POST['salary'],
		   'admin_id'=>Session::get('admin_id')
			   
		   );
		   $this->model->submit_drivermaster($data);
		   */
		  // }
//		   else
//		   {
//			   $this->view->id=$_REQUEST['id'];
//			   Session::init();
//			   Auth::handleLogin();
//			   $email=Session::get('email');
//			   $password=Session::get('password');
//			   $t=Traccar::login($email,$password);
//			   //$t=Traccar::login($email,$password);
//			   if($t->responseCode=='200') 
//				   {
//					   $traccarCookie = Traccar::$cookie;
//					   $editDriver= Traccar::editDriver($this->view->id,$this->view->name,$this->view->uniqueid,$this->view->fathername,$this->view->address,$this->view->city,$this->view->state,$this->view->phoneno,$this->view->dob,$this->view->dateofjoining,$this->view->licenseno,$this->view->licensetype,$this->view->issuedate,$this->view->expirydate,$this->view->authority,$this->view->aadhaarno,$this->view->bloodgroup,$this->view->vehicleno,$this->view->salary,$traccarCookie);
//					   $this->view->editDriver=json_decode($editDriver->{'response'},true);
//					   $data=array(
//						   'id' => null,
//						   'admin_id' => Session::get('admin_id'),
//						   'operations' => $_POST['name']." ".'Driver Edited',
//						   'time' => date('Y-m-d H:i:s')
//	   );
//	   $this->model->insert_activity($data);
//					   
//				   }
//		   
//		   }
			   
		   header('location: drivermaster');
	   }
    
    
    function edit_update_drivermaster(){
	
           $this->view->id=$_REQUEST['id'];
		   $this->view->name=$_REQUEST['name'];
		   $this->view->uniqueid=$_REQUEST['uniqueid'];
		   $this->view->fathername=$_REQUEST['fathername'];
		   $this->view->address=$_REQUEST['address'];
		   $this->view->city=$_REQUEST['city'];
		   $this->view->state=$_REQUEST['state'];
		   $this->view->phoneno=$_REQUEST['phoneno'];
		   $this->view->dob=$_REQUEST['dob'];
		   $this->view->dateofjoining=$_REQUEST['dateofjoining'];
		   $this->view->licenseno=$_REQUEST['licenseno'];
		   $this->view->licensetype=$_REQUEST['licensetype'];
		   $this->view->issuedate=$_REQUEST['issuedate'];
		   $this->view->expirydate=$_REQUEST['expirydate'];
		   $this->view->authority=$_REQUEST['authority'];
		   $this->view->aadhaarno=$_REQUEST['aadhaarno'];
		   $this->view->bloodgroup=$_REQUEST['bloodgroup'];
		   $this->view->vehicleno=$_REQUEST['vehicleno'];
		   $this->view->salary=$_REQUEST['salary'];
		 
		   Session::init();
				  
		   $email=Session::get('email');
       if($email == ""){
           $email=$_REQUEST['email'];
           
       }
		   $password=Session::get('password');
        if($password == ""){
           $password=$_REQUEST['password'];
           
       }
       
		   $t=Traccar::login($email,$password);
		   if($t->responseCode=='200') 
		   {
			   $traccarCookie = Traccar::$cookie;
			  $editDriver= Traccar::editDriver($this->view->id,$this->view->name,$this->view->uniqueid,$this->view->fathername,$this->view->address,$this->view->city,$this->view->state,$this->view->phoneno,$this->view->dob,$this->view->dateofjoining,$this->view->licenseno,$this->view->licensetype,$this->view->issuedate,$this->view->expirydate,$this->view->authority,$this->view->aadhaarno,$this->view->bloodgroup,$this->view->vehicleno,$this->view->salary,$traccarCookie);
				   $this->view->editDriver=json_decode($editDriver->{'response'},true);
                  }
    }
	   function view_drivermaster() 
	   {
	   //Auth::handleLogin();
	   //Auth::handleLogin();
		   $data = $_REQUEST;
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
				   $this->view->content= $this->model->getOnedriver($_GET['id']);
				   //print_r($this->view->content);
               echo json_encode($this->view->content);
   }
   
  // $this->view->render('master/view_drivermaster');
	   }

function printIDCard(){
  // echo "ddd";
  Session::init();
  //Auth::handleLogin();
  $content= $this->model->getOneVehicle($_GET['id']);
  $id = $content[0]['SensorSerial'];
  $VehicleNo = substr_replace(str_replace(" ","",$content[0]['VehicleNo'])," ",5,0);
  $EngineNo = $content[0]['EngineNo'];
  $ChesisNo = $content[0]['ChesisNo'];
  $ModelNo = $content[0]['VehicleType'];
  $company= Session::get('companyShortCode');
    //print_r($this->view->content);
	header("Content-type:image/jpeg");
	header("Cache-Control: no-store, no-cache");  
	header('Content-Disposition: attachment; filename="'.$VehicleNo.'.jpg"');
			
	$image = imagecreatetruecolor(2480,3508);
	//$black = imagecolorallocate($image,0,0,0);

	$grey_shade = imagecolorallocate($image,240,240,240);
	$white = imagecolorallocate($image,255,255,255);
	imagefill($image, 0, 0, $white);
	
	$otherFont = 'public/print/arial.ttf';
	$font = 'public/print/arial.ttf';
	
	$white = imagecolorallocate($image, 255, 255, 255);
	$black = imagecolorallocate($image, 0, 0, 0);
	
	$filename = 'public/print/vehicle'.$company.'.png';
	$URL = "https://chart.googleapis.com/chart?chs=317x317&cht=qr&chl=VH:".urlencode($VehicleNo).":$id&choe=UTF-8%20align%20=%27center%27";
	$srcimage = imagecreatefrompng($filename);
	$imgContents = file_get_contents($URL);
	$srcQR = imagecreatefromstring($imgContents);
	//include('php-barcode.php');
	//$font     = 'arial.ttf';
	// - -
	
	$fontSize = 12;   // GD1 in px ; GD2 in point
	$marge    = 10;   // between barcode and hri in pixel
	$x        = 80;  // barcode center
	$y        = 297;  // barcode center
	$height   = 110;   // barcode height in 1D ; module size in 2D
	$width    = 3;    // barcode height in 1D ; not use in 2D
	$angle    =270;   // rotation in degrees : nb : non horizontable barcode might not be usable because of pixelisation
	
	$code     = $VehicleNo; // barcode, of course ;)
	$type     = 'code39';
	// -------------------------------------------------- //
	//            ALLOCATE GD RESSOURCE
	// -------------------------------------------------- //
	$im     = imagecreatetruecolor(162, 596);
	$black  = ImageColorAllocate($im,0x00,0x00,0x00);
	$white  = ImageColorAllocate($im,0xff,0xff,0xff);
	$red    = ImageColorAllocate($im,0xff,0x00,0x00);
	$blue   = ImageColorAllocate($im,0x00,0x00,0xff);
	imagefilledrectangle($im, 0, 0, 162, 596, $white);
	
	// -------------------------------------------------- //
	//                      BARCODE
	// -------------------------------------------------- //
	$data = Barcode::gd($im, $black, $x, $y, $angle, $type, array('code'=>$code), $width, $height);
	
	// -------------------------------------------------- //
	//                        HRI
	// -------------------------------------------------- //
	// if ( isset($font) ){
	//   $box = imagettfbbox($fontSize, 0, $font, $data['hri']);
	//   $len = $box[2] - $box[0];
	//   Barcode::rotate(-$len / 2, ($data['height'] / 2) + $fontSize + $marge, $angle, $xt, $yt);
	//   imagettftext($im, $fontSize, $angle, $x + $xt, $y + $yt, $black, $font, $data['hri']);
	// }
	
	$srcQR = imagerotate($srcQR, 270, $white);
	//$im = imagerotate($im, 270, $white);
	imagecopyresampled($image, $srcimage, 407, 835, 0, 0, 941, 638, 941, 638);
	//imagecopyresampled($image, $srcimage, 407, 107, 0, 0, 941, 638, 941, 638);
	imagecopyresampled($image, $srcQR, (407+261), (176+835), 0, 0, 317, 317, 317, 317);
	imagecopyresampled($image, $im, (70+407), (835+30), 0, 0, 160, 594, 160, 594);
	imagettftext_cr($image,72,270,(407+820),(835+54+90),$black,"public/print/impact.ttf",$VehicleNo);
	imagettftext_cr($image,20,270,(407+680),(835+170+15),$black,"public/print/ArialNarrowBold.ttf",$EngineNo);
	imagettftext_cr($image,20,270,(407+620),(835+170+15),$black,"public/print/ArialNarrowBold.ttf",$ChesisNo);
	//imagettftext_cr($image,18,0,(407+180),(835+364+22),$black,"public/print/ArialNarrowBold.ttf",$ModelNo);
	imagerectangle($image, 407, 835, (407+941), (835+638), $grey_shade);
	
	//imagerectangle($image, 407, 107, (407+941), (107+638), $grey_shade);

/*
	imagecopyresampled($image, $srcimage, 407, 835, 0, 0, 941, 638, 941, 638);
	//imagecopyresampled($image, $srcimage, 407, 107, 0, 0, 941, 638, 941, 638);
	imagecopyresampled($image, $srcQR, (536+407), (231+835), 0, 0, 371, 371, 371, 371);
	imagecopyresampled($image, $im, (26+407), (443+835), 0, 0, 476, 159, 476, 159);
	imagettftext_cr($image,80,0,(407+248),(835+25+90),$black,"public/print/impact.ttf",$VehicleNo);
	imagettftext_cr($image,18,0,(407+180),(835+247+22),$black,"public/print/ArialNarrowBold.ttf",$EngineNo);
	imagettftext_cr($image,18,0,(407+180),(835+304+22),$black,"public/print/ArialNarrowBold.ttf",$ChesisNo);
	imagettftext_cr($image,18,0,(407+180),(835+364+22),$black,"public/print/ArialNarrowBold.ttf",$ModelNo);
	imagerectangle($image, 407, 835, (407+941), (835+638), $grey_shade);

*/


	imagejpeg($image);
	

}

function printDRIDCard(){
	// echo "ddd";
	Session::init();
	Auth::handleLogin();
	$content= $this->model->getOnedriver($_GET['id']);
	$company= Session::get('companyShortCode');
	$id = $_GET['id'];
	$obj=json_decode($content[0]['attributes']);
  $name=strtoupper($content[0]['name']);
  $licenseno=$obj->{"licenseno"};
  $expirydate= date('d M Y',strtotime($obj->{"expirydate"}));
  $bloodgroup=$obj->{"bloodgroup"};
	  //print_r($this->view->content);
	  header("Content-type:image/jpeg");
	   header("Cache-Control: no-store, no-cache");  
	   header('Content-Disposition: attachment; filename="'.$name.'.jpg"');
			  
	  $image = imagecreatetruecolor(2480,3508);
	  //$black = imagecolorallocate($image,0,0,0);
  
	  $grey_shade = imagecolorallocate($image,240,240,240);
	  $white = imagecolorallocate($image,255,255,255);
	  imagefill($image, 0, 0, $white);
	  
	  $otherFont = 'public/print/arial.ttf';
	  $font = 'public/print/arial.ttf';
	  
	  $white = imagecolorallocate($image, 255, 255, 255);
	  $black = imagecolorallocate($image, 0, 0, 0);
	  
	  $filename = 'public/print/driver'.$company.'.png';
	  $URL = "https://chart.googleapis.com/chart?chs=371x371&cht=qr&chl=DR:".urlencode($name).":$id&choe=UTF-8%20align%20=%27center%27";
	  $srcimage = imagecreatefrompng($filename);
	  $imgContents = file_get_contents($URL);
	  $srcQR = imagecreatefromstring($imgContents);
	  //include('php-barcode.php');
	  //$font     = 'arial.ttf';
	  // - -
	 
	  $srcQR = imagerotate($srcQR, 270, $white);
	  //$im = imagerotate($im, 270, $white);
	  imagecopyresampled($image, $srcimage, 407, 835, 0, 0, 941, 638, 941, 638);
	  //imagecopyresampled($image, $srcimage, 407, 107, 0, 0, 941, 638, 941, 638);
	  imagecopyresampled($image, $srcQR, (407+75), (136+835), 0, 0, 371, 371, 371, 371);
	 // imagettftext_cr($image,80,270,(407+820),(835+54+90),$black,"public/print/impact.ttf",$VehicleNo);
	  imagettftext_cr($image,24,270,(407+680),(835+100+18),$black,"public/print/ArialNarrowBold.ttf",$name);
	  imagettftext_cr($image,24,270,(407+620),(835+170+25),$black,"public/print/ArialNarrowBold.ttf",$licenseno);
	  imagettftext_cr($image,24,270,(407+560),(835+170+35),$black,"public/print/ArialNarrowBold.ttf",$expirydate);
	  imagettftext_cr($image,24,270,(407+500),(835+170+48),$black,"public/print/ArialNarrowBold.ttf",$bloodgroup);
	  //imagettftext_cr($image,18,0,(407+180),(835+364+22),$black,"public/print/ArialNarrowBold.ttf",$ModelNo);
	  imagerectangle($image, 407, 835, (407+941), (835+638), $grey_shade);
	  
	  //imagerectangle($image, 407, 107, (407+941), (107+638), $grey_shade);
  
  /*
	  imagecopyresampled($image, $srcimage, 407, 835, 0, 0, 941, 638, 941, 638);
	  //imagecopyresampled($image, $srcimage, 407, 107, 0, 0, 941, 638, 941, 638);
	  imagecopyresampled($image, $srcQR, (536+407), (231+835), 0, 0, 371, 371, 371, 371);
	  imagecopyresampled($image, $im, (26+407), (443+835), 0, 0, 476, 159, 476, 159);
	  imagettftext_cr($image,80,0,(407+248),(835+25+90),$black,"public/print/impact.ttf",$VehicleNo);
	  imagettftext_cr($image,18,0,(407+180),(835+247+22),$black,"public/print/ArialNarrowBold.ttf",$EngineNo);
	  imagettftext_cr($image,18,0,(407+180),(835+304+22),$black,"public/print/ArialNarrowBold.ttf",$ChesisNo);
	  imagettftext_cr($image,18,0,(407+180),(835+364+22),$black,"public/print/ArialNarrowBold.ttf",$ModelNo);
	  imagerectangle($image, 407, 835, (407+941), (835+638), $grey_shade);
  
  */
  
  
	  imagejpeg($image);
	  
  
  }

   function delete_drivermaster($id) 
	   {
		//Auth::handleLogin();
		   Session::init();
				 // Auth::handleLogin();
		   $email=Session::get('email');
       if($email == ""){
           
        $email=$_REQUEST['email'];   
       }
		   $password=Session::get('password');
       if($password == ""){
           
        $password=$_REQUEST['password'];   
       }
		   $t=Traccar::login($email,$password);
		   //$t=Traccar::login($email,$password);
		   if($t->responseCode=='200') 
		   {
			   $traccarCookie = Traccar::$cookie;
			   $deleteDriver= Traccar::deleteDriver($_REQUEST['id'],$traccarCookie);
			   $data=array(
						   'id' => null,
						   'admin_id' => Session::get('admin_id'),
						   'operations' =>'Driver Deleted',
						   'time' => date('Y-m-d H:i:s')
	   );
	   $this->model->insert_activity($data);
				//$this->view->deleteDriver=json_decode($deleteDriver->{'response'},true);
			   
		   }
		 //  header('location: ../drivermaster');
	   }



	// Vehicle Master
	
	function vehiclemaster() 
	{
        
		//Auth::handleLogin();
		$this->view->allVehicles = $this->model->getAllVehicles();
		$this->view->render('master/vehiclemaster',true);
        //echo json_encode($this->view->allVehicles);
	}
    
    function vehiclemaster_details() 
	{
		//Auth::handleLogin();
		$this->view->allVehicles = $this->model->getAllVehicles();
		//$this->view->render('master/vehiclemaster');
        echo json_encode($this->view->allVehicles);
	}

	function vehiclemasterjson() 
	{
		
		$traccarID=$_REQUEST['traccarID'];
		$userType=$_REQUEST['userType'];
		$parent_id=$_REQUEST['parent_id'];
		$admin_id=$_REQUEST['admin_id'];
		//echo "test";
	//	if($x=''){$x=$_REQUEST['id'];}

		$allVehicles = $this->model->getAllVehiclesjson($userType,$parent_id,$admin_id,$traccarID);
		
			//$escapers = array("\\", "/", "\"", "\n", "\r", "\t", "\x08", "\x0c");
			//$replacements = array("\\\\", "\\/", "\\\"", "\\n", "\\r", "\\t", "\\f", "\\b");
		//	$allVehicles = str_replace($escapers, $replacements, $allVehicles);
		    header("Access-Control-Allow-Origin: *");
			header('Content-type: application/json');
		//echo json_encode($allVehicles);
	//	echo "<pre>";
	//	print_r($allVehicles);
		echo json_encode($allVehicles);
	}

	function vehiclemasterqr() 
	{
		Auth::handleLogin();
		$this->view->allVehicles = $this->model->getAllVehicles();
		$this->view->render('master/vehiclemasterqr',true);
	}

	function vehiclemasterqrcode() 
	{
		//Auth::handleLogin();
		$this->view->allVehicles = $this->model->getAllVehicles();
		$this->view->render('master/vehiclemasterqr',true);
	}
	
	
	function edit_vehiclemaster() 
	{
	//Auth::handleLogin();
		$data = $_GET;
		Auth::handleLogin();
		//echo "rrrr ".$_GET['id'];
	  $this->view->Alldevices=$this->model->getAllDevices();
        $this->view->AllGroups= $this->model->getAllgroups();
        
	 // printr($this->view->Alldevices);
		if($_GET['id']=='')
		    {
				$this->view->pick='';
				$this->view->data=$data;
			} 
		else 
			{
				$this->view->pick=$_GET['id'];
				$this->view->content= $this->model->getOneVehicle($_GET['id']);
			}
			$this->model->getAllimie();
		
		$this->view->render('master/edit_vehiclemaster');
		//header('location: vehiclemaster');
	}
    
    function add_vehiclemaster(){
        $this->view->name=$_REQUEST['name'];
	    $this->view->uniqueid=$_REQUEST['uniqueid'];
	   	$this->view->groupid=$_REQUEST['groupid'];
	   	$this->view->phone=$_REQUEST['phone'];
	   	$this->view->category=$_REQUEST['category'];
	   	$this->view->contact=$_REQUEST['contact'];
	   	$this->view->model=$_REQUEST['model'];
	   	$action=$_POST['submit']; 
	  // if($action=="submit"){
	   	Session::init();
			  //Auth::handleLogin();
	   	$email=Session::get('email');
	   	if($email == ""){
	       	$email=$_REQUEST['email'];
	   	}
	   	$password=Session::get('password');
	    if($password == ""){
	       	$password=$_REQUEST['password'];
	    }
	   	$t=Traccar::login($email,$password);
		if($t->responseCode=='200') {
		   	$traccarCookie = Traccar::$cookie;
			$add_submitdevice=Traccar::addDevice($this->view->name, $this->view->uniqueid, $this->view->groupid, $this->view->phone, $this->view->category, $this->view->contact, $this->view->model, $traccarCookie);
			$this->view->adddevices_details = json_decode($add_submitdevice->{'response'},true);
		}
        $data = array(
		'id' =>null,
		'VehicleNo' =>$_REQUEST['VehicleNo'],
		'EngineNo' =>$_REQUEST['EngineNo'],
		'ChesisNo' =>$_REQUEST['ChesisNo'],
		'ModelNo' => $_REQUEST['ModelNo'],
		'EMIDate' => $_REQUEST['EMIDate'],
		'EMIAmount' => $_REQUEST['EMIAmount'],
		'FirstEMI' => $_REQUEST['FirstEMI'],
		'LastEMI' => $_REQUEST['LastEMI'],
		'InsuranceExpiryDate' => $_REQUEST['InsuranceExpiryDate'],
		'PermitExpiry' => $_REQUEST['PermitExpiry'],
		'PollutionExpiry' => $_REQUEST['PollutionExpiry'],
		'RoadTaxExpiry' => $_REQUEST['RoadTaxExpiry'],
		'FitnessExpiryDate' => $_REQUEST['FitnessExpiryDate'],
		'VehicleCode' =>$_REQUEST['VehicleCode'],
		'RegDates' => $_REQUEST['RegDates'],
		'VehicleType' => $_REQUEST['VehicleType'],
		'VehicleCarrying' => $_REQUEST['VehicleCarrying'],
		'MadeByCmpy' => $_REQUEST['MadeByCmpy'],
		'DateofPurchase' => $_REQUEST['DateofPurchase'],
		'DeviceIMIE' => $_REQUEST['DeviceIMIE'],
		'MobileNo' => $_REQUEST['MobileNo'],
	    'SensorSerial' => $this->view->adddevices_details['id'],
		'ServiceInterval' => $_REQUEST['ServiceInterval'],
		'CurrentOddometer' => $_REQUEST['CurrentOddometer'],
		'LastService' => $_REQUEST['LastService'],
		'OwnerName' => $_REQUEST['OwnerName'],
		'OwnerAddress' => $_REQUEST['OwnerAddress'],
		'OwnerCode' => $_REQUEST['OwnerCode'],
		'OwnerType' => $_REQUEST['OwnerType'],
		'FinancerName' => $_REQUEST['FinancerName'],
		'types' => $_REQUEST['types'],
		'RegistrationNo' => $_REQUEST['RegistrationNo'],
		'RCYN' => $_REQUEST['RCYN'],
        'admin_id'=>Session::get('admin_id')	
		);
		var_dump($data);
		echo '<br />hello';
		echo $this->model->submit_vehiclemaster($data);
	}
    
    
	
	function edit_submit_vehiclemaster(){
		//Auth::handleLogin();
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
   
if($t->responseCode=='200') {
  
    $traccarCookie = Traccar::$cookie;
	
	$add_submitdev=Traccar::addDevice($_REQUEST['name'],$_REQUEST['uniqueid'],$_REQUEST['groupid'],$_REQUEST['phone'],$_REQUEST['category'],$_REQUEST['contact'],$_REQUEST['model'],$traccarCookie);
	$this->view->adddevices=json_decode($add_submitdev->{'response'},true);
  
}
        $data = array(
		'id' =>null,
		'VehicleNo' =>$_REQUEST['VehicleNo'],
		'EngineNo' =>$_REQUEST['EngineNo'],
		'ChesisNo' =>$_REQUEST['ChesisNo'],
		'ModelNo' => $_REQUEST['ModelNo'],
		'EMIDate' => $_REQUEST['EMIDate'],
		'EMIAmount' => $_REQUEST['EMIAmount'],
		'FirstEMI' => $_REQUEST['FirstEMI'],
		'LastEMI' => $_REQUEST['LastEMI'],
		'InsuranceExpiryDate' => $_REQUEST['InsuranceExpiryDate'],
		'PermitExpiry' => $_REQUEST['PermitExpiry'],
		'PollutionExpiry' => $_REQUEST['PollutionExpiry'],
		'RoadTaxExpiry' => $_REQUEST['RoadTaxExpiry'],
		'FitnessExpiryDate' => $_REQUEST['FitnessExpiryDate'],
		'VehicleCode' =>$_REQUEST['VehicleCode'],
		'RegDates' => $_REQUEST['RegDates'],
		'VehicleType' => $_REQUEST['VehicleType'],
		'VehicleCarrying' => $_REQUEST['VehicleCarrying'],
		'MadeByCmpy' => $_REQUEST['MadeByCmpy'],
		'DateofPurchase' => $_REQUEST['DateofPurchase'],
		'DeviceIMIE' => $_REQUEST['DeviceIMIE'],
		'MobileNo' => $_REQUEST['MobileNo'],
	    'SensorSerial' => $this->view->adddevices['id'],
		'ServiceInterval' => $_REQUEST['ServiceInterval'],
		'CurrentOddometer' => $_REQUEST['CurrentOddometer'],
		'LastService' => $_REQUEST['LastService'],
		'OwnerName' => $_REQUEST['OwnerName'],
		'OwnerAddress' => $_REQUEST['OwnerAddress'],
		'OwnerCode' => $_REQUEST['OwnerCode'],
		'OwnerType' => $_REQUEST['OwnerType'],
		'FinancerName' => $_REQUEST['FinancerName'],
		'types' => $_REQUEST['types'],
		'RegistrationNo' => $_REQUEST['RegistrationNo'],
		'RCYN' => $_REQUEST['RCYN'],
		'admin_id'=>$_REQUEST['admin_id']
			//'admin_id'=>Session::get('admin_id')	
		);
        $this->model->submit_vehiclemaster($data);
    
		//header('location: vehiclemaster');
	}
    
    function edit_update_vehiclemaster(){
        Session::init();
		   //	Auth::handleLogin();
		$email=Session::get('email');
	    if($email==""){
	        $email=$_REQUEST['email'];
	    }
		$password=Session::get('pass');
	    if($password==""){
	        $password=$_REQUEST['password'];  
	    } 
		$t=Traccar::login($email,$password);
		if($t->responseCode=='200') {
		    $traccarCookie = Traccar::$cookie;
		    $arg=$_REQUEST['id'];
		 	$edit_submitdev=Traccar::editDevice($_REQUEST['SensorSerial'],$_REQUEST['name'],$_REQUEST['uniqueid'],$_REQUEST['groupid'],$_REQUEST['phone'],$_REQUEST['category'],$_REQUEST['contact'],$_REQUEST['model'],$traccarCookie);
			$this->view->editdevices=json_decode($edit_submitdev->{'response'},true);
		}
       // $this->view->editdevices['id'];
		$data = array(
		'VehicleNo' =>$_REQUEST['VehicleNo'],
		'EngineNo' =>$_REQUEST['EngineNo'],
		'ChesisNo' =>$_REQUEST['ChesisNo'],
		'ModelNo' => $_REQUEST['ModelNo'],
		'EMIDate' => $_REQUEST['EMIDate'],
		'EMIAmount' => $_REQUEST['EMIAmount'],
		'FirstEMI' => $_REQUEST['FirstEMI'],
		'LastEMI' => $_REQUEST['LastEMI'],
		'InsuranceExpiryDate' => $_REQUEST['InsuranceExpiryDate'],
		'PermitExpiry' => $_REQUEST['PermitExpiry'],
		'PollutionExpiry' => $_REQUEST['PollutionExpiry'],
		'RoadTaxExpiry' => $_REQUEST['RoadTaxExpiry'],
		'FitnessExpiryDate' => $_REQUEST['FitnessExpiryDate'],
		'VehicleCode' =>$_REQUEST['VehicleCode'],
		'RegDates' => $_REQUEST['RegDates'],
		'VehicleType' => $_REQUEST['VehicleType'],
		'VehicleCarrying' => $_REQUEST['VehicleCarrying'],
		'MadeByCmpy' => $_REQUEST['MadeByCmpy'],
		'DateofPurchase' => $_REQUEST['DateofPurchase'],
		'DeviceIMIE' => $_REQUEST['DeviceIMIE'],
		'MobileNo' => $_REQUEST['MobileNo'],
		//'SensorSerial' => $_REQUEST['SensorSerial'],
		'ServiceInterval' => $_REQUEST['ServiceInterval'],
		'CurrentOddometer' => $_REQUEST['CurrentOddometer'],
		'LastService' => $_REQUEST['LastService'],
		'OwnerName' => $_REQUEST['OwnerName'],
		'OwnerAddress' => $_REQUEST['OwnerAddress'],
		'OwnerCode' => $_REQUEST['OwnerCode'],
		'OwnerType' => $_REQUEST['OwnerType'],
		'FinancerName' => $_REQUEST['FinancerName'],
		'types' => $_REQUEST['types'],
		'RegistrationNo' => $_REQUEST['RegistrationNo'],
		'RCYN' => $_REQUEST['RCYN']
		);
		$this->model->edit_submit_vehiclemaster($data,$arg);
    }

	function vehicle_tracking_details() 
	{
		Auth::handleLogin();
		$VehicleNo=$_GET['VehicleNo'];
		$imie=$this->model->getAllimie($VehicleNo);
		print_r( $imie);
	}
	
	function view_vehiclemaster() 
	{
	//Auth::handleLogin();
	//Auth::handleLogin();
		$data = $_REQUEST;
		if($data['id']=='')
		    {
				$this->view->pick='';
				$this->view->data=$data;
			} 
		else 
			{
				$this->view->pick=$data['id'];
				$this->view->content= $this->model->viewOneVehicle($data['id']);
				//echo "ggg= ".$this->view->content[0]['VehicleNo'];
				//$this->view->contentFiles1= $this->model->editVehicleInsuranceFiles($this->view->contenti[0]['id']);
//				$this->view->contenti= $this->model->getOneInsurance($this->view->content[0]['VehicleNo']);
//				$this->view->contentFiles1= $this->model->editVehicleInsuranceFiles($this->view->contenti[0]['id']);
//				$this->view->contentf= $this->model->getOneFitness($this->view->content[0]['VehicleNo']);
//				$this->view->contentp= $this->model->getOnePermit($this->view->content[0]['VehicleNo']);
//				$this->view->contentr= $this->model->getOneRoadTax($this->view->content[0]['VehicleNo']);
//				$this->view->contentpo= $this->model->getOnePollution($this->view->content[0]['VehicleNo']);
			}
$prevresult = $this->model->prevvehicle($data['id']);
$nextresult = $this->model->nextvehicle($data['id']);
//print_r($nextresult);	
	$this->view->NextId=$nextresult[0]['id'];
	$this->view->PrevId=$prevresult[0]['id'];
	echo json_encode($this->view->content);
	//$this->view->render('master/view_vehiclemaster');
	}
    ////////////////////////
    
    
        function prev_vehiclemaster() 
        {
          $data = $_REQUEST;

                    $prevresult = $this->model->prevvehicle($data['id']);
                    //$nextresult = $this->model->nextvehicle($data['id']);
            //$this->view->NextId=$nextresult[0]['id'];
	$this->view->PrevId=$prevresult[0]['id'];
             echo $this->view->PrevId;
        //echo json_encode($this->view->PrevId);
        }
    
     function next_vehiclemaster() 
        {
          $data = $_REQUEST;

                    //$prevresult = $this->model->prevvehicle($data['id']);
                    $nextresult = $this->model->nextvehicle($data['id']);
            $this->view->NextId=$nextresult[0]['id'];
	//$this->view->PrevId=$prevresult[0]['id'];
             echo $this->view->NextId;
        //echo json_encode($this->view->PrevId);
        }
    
    
    /////////////////////////////
        function delete_vehiclemaster($id) 
	{
         Session::init();
		   //	Auth::handleLogin();
	$email=Session::get('email');
		$password=Session::get('password');
		$t=Traccar::login($email,$password);
		if($t->responseCode=='200') 
			{
				$traccarCookie = Traccar::$cookie;
				$delete_dev=traccar::deleteDevice($_REQUEST['SensorSerial'],$_REQUEST['name'],$_REQUEST['uniqueid'],$traccarCookie);
        }
		//Auth::handleLogin();
		//Auth::handleLogin();
		$this->model->delete_vehiclemaster($id);
        echo 'successful';
		$data=array(
						'id' => null,
						'admin_id' => Session::get('admin_id'),
						'operations' => $_POST['VehicleNo']." ".'Vehicle Deleted',
						'time' => date('Y-m-d H:i:s')
	);
	$this->model->insert_activity($data);
		header('location: ../vehiclemaster');
	}

	function vehiclefitness() 
	{
		Auth::handleLogin();
	//Auth::handleLogin();
		$data = $_GET;
		if($data['VehicleNo']=='')
		    {
				$this->view->pick='';
				$this->view->data=$data;
			} 
		else 
			{
				$this->view->pick=$data['VehicleNo'];
				$this->view->content= $this->model->viewOneVehicleFitness($data['VehicleNo']);
			}
		
		$this->view->render('master/vehiclefitness');
		
	}
	
	function vehicleinsurance() 
	{
		Auth::handleLogin();
	//Auth::handleLogin();
		$data = $_GET;
		if($data['VehicleNo']=='')
		    {
				$this->view->pick='';
				$this->view->data=$data;
			} 
		else 
			{
				$this->view->pick=$data['VehicleNo'];
				$this->view->content= $this->model->viewOneVehicleInsurance($data['VehicleNo']);
				$this->view->contentFiles= $this->model->viewVehicleInsuranceFiles($data['id']);
				$this->view->contentFiles1= $this->model->editVehicleInsuranceFiles($this->view->content[0]['id']);
			}
	
		$this->view->render('master/vehicleinsurance');
	}
	
	function printmaster(){
		Auth::handleLogin();
		$this->view->vehicleno=($_REQUEST['vehicleno']);
		$this->view->txt=$_REQUEST['txt'];
	//	echo "test";
		$this->view->render('master/print_qr',true);
	}

	function printdr(){
		Auth::handleLogin();
		$this->view->id=$_REQUEST['id'];
		$this->view->txt=$_REQUEST['txt'];
	//	echo "test";
		$this->view->render('master/print_dr',true);
	}

	function vehiclepermit() 
	{
		Auth::handleLogin();
	//Auth::handleLogin();
		$data = $_GET;
		if($data['VehicleNo']=='')
		    {
				$this->view->pick='';
				$this->view->data=$data;
			} 
		else 
			{
				$this->view->pick=$data['VehicleNo'];
				$this->view->content= $this->model->viewOneVehiclePermit($data['VehicleNo']);
			}
		
		$this->view->render('master/vehiclepermit');
		
	}
	
	function vehicleroadtax() 
	{
		Auth::handleLogin();
	//Auth::handleLogin();
		$data = $_GET;
		if($data['VehicleNo']=='')
		    {
				$this->view->pick='';
				$this->view->data=$data;
			} 
		else 
			{
				$this->view->pick=$data['VehicleNo'];
				$this->view->content= $this->model->viewOneVehicleRoadTax($data['VehicleNo']);
			}
		
		$this->view->render('master/vehicleroadtax');
		
	}
	
	function vehiclepollution() 
	{
		Auth::handleLogin();
	//Auth::handleLogin();
		$data = $_GET;
		if($data['VehicleNo']=='')
		    {
				$this->view->pick='';
				$this->view->data=$data;
			} 
		else 
			{
				$this->view->pick=$data['VehicleNo'];
				$this->view->content= $this->model->viewOneVehiclePollution($data['VehicleNo']);
			}
		
		$this->view->render('master/vehiclepollution');
		
	}
    
//devices
     function groups() 
	{
    $this->view->AllGroups= $this->model->getAllgroups();
         foreach($this->view->AllGroups AS $key=>$value){ 
		// echo $value['id']."<br />";
		 $myGroups[$value['id']]=$value['name'];
		 }
          $this->view->myGroups=$myGroups;
          echo json_encode($this->view->AllGroups);
     }
    
    function devices() 
	{
		$this->view->Alldevices = $this->model->getAlldevices();
		$this->view->AllGroups= $this->model->getAllgroups();
		 foreach($this->view->AllGroups AS $key=>$value){ 
		// echo $value['id']."<br />";
		 $myGroups[$value['id']]=$value['name'];
		 }
		// print_r($this->view->AllGroups);
		 
		 $this->view->myGroups=$myGroups;
         echo json_encode($this->view->Alldevices);
		//$this->view->render('vts/devices');
	}

    function edit_submit_devices(){
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
if($t->responseCode=='200') {
    $traccarCookie = Traccar::$cookie;
//		$action=$_POST['submit']; 
//			if ($action=='submit')      //this is for insert data
//				{
		//echo "adding"; $phone,$category,$contact
	$add_submitdev=Traccar::addDevice($_REQUEST['name'],$_REQUEST['uniqueid'],$_REQUEST['groupid'],$_REQUEST['phone'],$_REQUEST['category'],$_REQUEST['contact'],$_REQUEST['model'],$traccarCookie);
	$this->view->adddevices=json_decode($add_submitdev->{'response'},true);
    echo json_encode($this->view->adddevices);
	//print_r($this->view->adddevices);
	//insert_activity();
	
		$data=array(
						'id' => null,
						'admin_id' => Session::get('admin_id'),
						'operations' => 'Device Added -'." ".$_POST['name'],
						'time' => date('Y-m-d H:i:s')
	);
	$this->model->insert_activity($data);
	//echo 'devices addition logged successfully';		/**/	
	
//				}
//				
//			else	//this is for update data
//				{
//				//echo "updating";
//		//$arg=$_PUT['id'];
//	$edit_submitdev=Traccar::editDevice($_POST['id'],$_POST['name'],$_POST['uniqueid'],$_POST['groupid'],$_POST['phone'],$_POST['category'],$_POST['contact'],$_POST['model'],$traccarCookie);
//	$this->view->editdevices=json_decode($edit_submitdev->{'response'},true);
//	
//	$data=array(
//						'id' => null,
//						'admin_id' => Session::get('admin_id'),
//						'operations' => 'Device Edited -'." ".$_POST['name'],
//						'time' => date('Y-m-d H:i:s')
//	);
//	$this->model->insert_activity($data);
//	//print_r ($editdevices);
//}
}
	
		//header('location: devices');
	}
    
    
    
    function edit_submit_ab_devices(){
		 Session::init();
		  // 	Auth::handleLogin();
			$email=Session::get('email');
		$password=Session::get('password');
		$t=Traccar::login($email,$password);
if($t->responseCode=='200') {
    $traccarCookie = Traccar::$cookie;
		//$action=$_POST['submit']; 
			
		//echo "adding"; $phone,$category,$contact
	$add_submitdev=Traccar::addDevice($_POST['name'],$_POST['uniqueid'],$_POST['groupid'],$_POST['phone'],$_POST['category'],$_POST['contact'],$_POST['model'],$traccarCookie);
	$this->view->adddevices=json_decode($add_submitdev->{'response'},true);
	//print_r($this->view->adddevices);
	//insert_activity();
	
		$data=array(
						'id' => null,
						'admin_id' => Session::get('admin_id'),
						'operations' => 'Device Added -'." ".$_POST['name'],
						'time' => date('Y-m-d H:i:s')
	);
	$this->model->insert_activity($data);
	//echo 'devices addition logged successfully';		/**/	
	
				}
				
//			else	//this is for update data
//				{
//				//echo "updating";
//		//$arg=$_PUT['id'];
//	$edit_submitdev=Traccar::editDevice($_POST['id'],$_POST['name'],$_POST['uniqueid'],$_POST['groupid'],$_POST['phone'],$_POST['category'],$_POST['contact'],$_POST['model'],$traccarCookie);
//	$this->view->editdevices=json_decode($edit_submitdev->{'response'},true);
//	
//	$data=array(
//						'id' => null,
//						'admin_id' => Session::get('admin_id'),
//						'operations' => 'Device Edited -'." ".$_POST['name'],
//						'time' => date('Y-m-d H:i:s')
//	);
//	$this->model->insert_activity($data);
//	//print_r ($editdevices);
//}
}
    
//Customer Master

function customermaster() 
	{
		Auth::handleLogin();
		$this->view->allcustomer = $this->model->getAllCustomer();
		$this->view->render('master/customermaster');
	}
    
    function customermaster_details() 
	{
		//Auth::handleLogin();
		$this->view->allcustomer = $this->model->getAllCustomer();
		 echo json_encode($this->view->allcustomer);
	}
function edit_customermaster() 
	{
		Auth::handleLogin();
	//Auth::handleLogin();
		$data = $_GET;
		if($_GET['id']=='')
		    {
				$this->view->pick='';
				$this->view->data=$data;
			} 
		else 
			{
				$this->view->pick=$_GET['id'];
				$this->view->content= $this->model->viewOneCustomer($_GET['id']);
			}
		
		$this->view->render('master/edit_customermaster');
		
	}

function view_customermaster() 
	{
		Auth::handleLogin();
	//Auth::handleLogin();
		$data = $_GET;
		if($data['id']=='')
		    {
				$this->view->pick='';
				$this->view->data=$data;
			} 
		else 
			{
				$this->view->pick=$data['id'];
				$this->view->content= $this->model->viewOneCustomer($data['id']);
}
$this->view->render('master/view_customermaster');
	}


function edit_submit_customermaster(){
	Auth::handleLogin();
		//Auth::handleLogin();
		
		$action=$_POST['submit']; 
		//echo '$action';
		if ($action=='submit')
		{
			//echo'$action';
		$arg=$_POST['id'];
		$data = array(
		'id' =>null,
		'name' =>$_POST['name'],
		'address' =>$_POST['address'],
		'contact' => $_POST['contact'],
		'workorderno' => $_POST['workorderamount'],
		'rate' => $_POST['rate'],
		'admin_id' => Session::get('admin_id')
		);
		$this->model->submit_customermaster($data);
		
		}
		else
		{
		$arg=$_POST['id'];
		$data = array(
		'name' =>$_POST['name'],
		'address' =>$_POST['address'],
		'contact' => $_POST['contact'],
		'workorderno' => $_POST['workorderamount'],
		'rate' => $_POST['rate']
			);
			
			$this->model->edit_submit_customermaster($data,$arg);
		}
			
		header('location: customermaster');
	}
function delete_customermaster($id) 
	{
		Auth::handleLogin();
		//Auth::handleLogin();
		$this->model->delete_customermaster($id);
		header('location: ../customermaster');
	}


	//Vehicle Insurance Registration
	
	function vehicleinsuranceregistration() 
	{
		Auth::handleLogin();
		$this->view->allInsuranceDetails = $this->model->getAllInsuranceDetails();
		$this->view->render('master/vehicleinsuranceregistration');
	}
	function edit_vehicleinsuranceregistration() 
	{
		Auth::handleLogin();
	//Auth::handleLogin();
		$data = $_GET;
		if($_GET['id']=='')
		{
			$this->view->pick='';
			$this->view->data=$data;
		} else {
			$this->view->pick=$_GET['id'];
			$this->view->content= $this->model->viewOneInsurance($data['id']);
			$this->view->contentFiles1= $this->model->editVehicleInsuranceFiles($this->view->content[0]['id']);
			
		}
		$this->view->render('master/edit_vehicleinsuranceregistration');
	}
	//for submit and update of vehicleinsurance
	
	function edit_submit_vehicleinsurance(){
		Auth::handleLogin();
		//$base_dir="public/attachment";
		$date_time=date('Y-m-d');
		//Auth::handleLogin();
		
		$action=$_POST['submit']; 
		//echo '$action';
		if ($action=='submit')
		{
			//echo'$action';
		//$arg=$_POST['id'];
		$data = array(
		'id' => null,
		'Dated' =>$_POST['Dated'],
		'VehicleNo' => $_POST['VehicleNo'],
		'VehicleType' => $_POST['VehicleType'],
		'VehicleCode' => $_POST['VehicleCode'],
		'InsuranceAmt' => $_POST['InsuranceAmt'],
		'InsuranceNo' => $_POST['InsuranceNo'],
		'InsuranceFromDate' => $_POST['InsuranceFromDate'],
		'InsuranceExpiryDate' => $_POST['InsuranceExpiryDate'],
		'InsuranceValue' => $_POST['InsuranceValue'],
		'HypotheticationWith' => $_POST['HypotheticationWith'],
		
			);
			 //move uploaded file inside a folder;
		$lastid=$this->model->submit_vehicleinsurance($data);
	   $target='public/attachment/insurance';	
	   foreach($_FILES["fileupload"]["error"] as $key => $error){
		if($error==UPLOAD_ERR_OK){
			$tmp_name = $_FILES["fileupload"]["tmp_name"][$key];
			$name = $date_time.$_FILES["fileupload"]["name"][$key];
			 move_uploaded_file($tmp_name, "$target/$name");
			
		$getAttach = array(
		'id' =>null,
		'insurance_id' => $lastid,
	   'attachments' => $name
			);
			//print_r($getAttach);
		$this->model->submit_vehicleinsuranceFiles($getAttach);
		 }
		  header("location: vehicleinsuranceregistration");
		}
	}
	
		else
		{
		$id=$_POST['id'];
		//echo "id= ".$id;
		$data = array(
		'Dated' =>$_POST['Dated'],
		'VehicleNo' => $_POST['VehicleNo'],
		'VehicleType' => $_POST['VehicleType'],
		'VehicleCode' => $_POST['VehicleCode'],
		'InsuranceAmt' => $_POST['InsuranceAmt'],
		'InsuranceNo' => $_POST['InsuranceNo'],
		'InsuranceFromDate' => $_POST['InsuranceFromDate'],
		'InsuranceExpiryDate' => $_POST['InsuranceExpiryDate'],
		'InsuranceValue' => $_POST['InsuranceValue'],
		'HypotheticationWith' => $_POST['HypotheticationWith']
			);
			
			$this->model->delete_vehicleinsurancefiles($id);
			$this->model->edit_submit_vehicleinsurance($data,$id);
			
		foreach($_POST["fileupload"] as $oldFiles){
			$getAttach1 = array(
		'id' =>null,
		'insurance_id' => $id,
	   'attachments' => $oldFiles
			);
			//print_f($getAttach1);
			 
			 		$this->model->submit_vehicleinsuranceFiles($getAttach1);
		}
			 $target='public/attachment/insurance';	
   // header("location: vehicleinsuranceregistration");
	   foreach($_FILES["fileupload"]["error"] as $key => $error){
		if($error==UPLOAD_ERR_OK){
			$tmp_name = $_FILES["fileupload"]["tmp_name"][$key];
			$name = $date_time.$_FILES["fileupload"]["name"][$key];
			 move_uploaded_file($tmp_name, "$target/$name");
			
		$getAttach = array(
		'id' =>null,
		'insurance_id' => $id,
	   'attachments' => $name
			);
			//print_r($getAttach);
		$this->model->submit_vehicleinsuranceFiles($getAttach);
		 }
		
		 $getAttach = array(
		'insurance_id' => $lastid,
	   'attachments' => $name
			);
	   //print_r($getAttach);
	   $this->model->edit_submit_vehicleinsuranceFiles($getAttach,$arg);
		}
		}
            header("location: vehicleinsuranceregistration");
		}
		
	function view_vehicleinsurance() 
	{
		Auth::handleLogin();
	//Auth::handleLogin();
		$data = $_GET;
		if($data['id']=='')
		    {
				$this->view->pick='';
				$this->view->data=$data;
			} 
		else 
			{
				$this->view->pick=$data['id'];
				$this->view->content= $this->model->viewOneInsurance($data['id']);
				//$this->view->contentFiles1= $this->model->viewVehicleInsuranceFiles($data['insurance_id']);
				$this->view->contentFiles1= $this->model->editVehicleInsuranceFiles($this->view->content[0]['id']);
			}
		
		$this->view->render('master/view_vehicleinsurance');
		
	}
	
	function delete_vehicleinsurance($id) 
	{
		Auth::handleLogin();
		//Auth::handleLogin();
		$this->model->delete_vehicleinsurance($id);
		header('location: ../vehicleinsuranceregistration');
	
	}	
	//Vehicle Fitness Registration
	
	function vehiclefitnessregistration() 
	{
		Auth::handleLogin();
		$this->view->allFitnessRegistration = $this->model->getAllFitnessRegistration();
		$this->view->render('master/vehiclefitnessregistration');
	}
	function edit_vehiclefitnessregistration() 
	{
		Auth::handleLogin();
	//Auth::handleLogin();
		$data = $_GET;
		if($_GET['id']==''){
			$this->view->pick='';
			$this->view->data=$data;
		} else {
			$this->view->pick=$_GET['id'];
			$this->view->content= $this->model->viewOneFitness($data['id']);
			$this->view->contentFiles1= $this->model->editVehicleFitnessFiles($this->view->content[0]['id']);
		}
		
		$this->view->render('master/edit_vehiclefitnessregistration');
	}
	function edit_submit_vehiclefitness(){
		Auth::handleLogin();
		
		//Auth::handleLogin();
		
		$action=$_POST['submit']; 
		//echo '$action';
		if ($action=='submit')
		{
			//echo'$action';
		//$arg=$_POST['id'];
		$data = array(
		'id' => null,
		'Dated' =>$_POST['Dated'],
		'VehicleNo' => $_POST['VehicleNo'],
		'VehicleType' => $_POST['VehicleType'],
		'VehicleCode' => $_POST['VehicleCode'],
		'FitnessNo' => $_POST['FitnessNo'],
		'FitnessFromDate' => $_POST['FitnessFromDate'],
		'FitnessExpiryDate' => $_POST['FitnessExpiryDate']
			);
		$lastid=$this->model->submit_vehiclefitness($data);
		$target1='public/attachment/fitness';	
	   foreach($_FILES["fileupload"]["error"] as $key => $error){
		if($error==UPLOAD_ERR_OK){
			$tmp_name = $_FILES["fileupload"]["tmp_name"][$key];
			$name = $date_time.$_FILES["fileupload"]["name"][$key];
			 move_uploaded_file($tmp_name, "$target1/$name");
			
		$getAttach = array(
		'id' =>null,
		'fitness_id' => $lastid,
	   'attachments' => $name
			);
			//print_r($getAttach);
		$this->model->submit_vehiclefitnessFiles($getAttach);
		 }
		  header("location: vehiclefitnessregistration");
		}
	}
	
		else
		{
		$id=$_POST['id'];
		$data = array(
		'Dated' =>$_POST['Dated'],
		'VehicleNo' => $_POST['VehicleNo'],
		'VehicleType' => $_POST['VehicleType'],
		'VehicleCode' => $_POST['VehicleCode'],
		'FitnessNo' => $_POST['FitnessNo'],
		'FitnessFromDate' => $_POST['FitnessFromDate'],
		'FitnessExpiryDate' => $_POST['FitnessExpiryDate']
			);
			$this->model->delete_vehiclefitnessfiles($id);
			$this->model->edit_submit_vehiclefitness($data,$id);
			
		foreach($_POST["fileupload"] as $oldFiles){
			$getAttach1 = array(
		'id' =>null,
		'fitness_id' => $id,
	   'attachments' => $oldFiles
			);
			//print_r($getAttach1);
			 
			 		$this->model->submit_vehiclefitnessFiles($getAttach1);
		}
			 $target1='public/attachment/fitness';	
   // header("location: vehicleinsuranceregistration");
	   foreach($_FILES["fileupload"]["error"] as $key => $error){
		if($error==UPLOAD_ERR_OK){
			$tmp_name = $_FILES["fileupload"]["tmp_name"][$key];
			$name = $date_time.$_FILES["fileupload"]["name"][$key];
			 move_uploaded_file($tmp_name, "$target1/$name");
			
		$getAttach = array(
		'id' =>null,
		'fitness_id' => $id,
	   'attachments' => $name
			);
			//print_r($getAttach);
		$this->model->submit_vehiclefitnessFiles($getAttach);
		 }
		
		 $getAttach = array(
		'fitness_id' => $lastid,
	   'attachments' => $name
			);
	   //print_r($getAttach);
	   $this->model->edit_submit_vehiclefitnessFiles($getAttach,$arg);
		}
		}
            header("location: vehiclefitnessregistration");
		}
	function view_vehiclefitness() 
	{
		Auth::handleLogin();
	//Auth::handleLogin();
		$data = $_GET;
		if($data['id']=='')
		    {
				$this->view->pick='';
				$this->view->data=$data;
			} 
		else 
			{
				$this->view->pick=$data['id'];
				$this->view->content= $this->model->viewOneFitness($data['id']);
				$this->view->contentFiles1= $this->model->editVehicleFitnessFiles($this->view->content[0]['id']);
				
			}
		
		$this->view->render('master/view_vehiclefitness');
		
	}

	function delete_vehiclefitness($id) 
	{
		Auth::handleLogin();
		//Auth::handleLogin();
		$this->model->delete_vehiclefitness($id);
		header('location: ../vehiclefitnessregistration');
	}	
	//Vehicle Permit Registration
	
	function vehiclepermitRegistration() 
	{
		Auth::handleLogin();
		$this->view->allPermitRegistration = $this->model->getAllpermitRegistration();
		$this->view->render('master/vehiclepermitregistration');
	}
	function edit_vehiclepermitregistration() {
		Auth::handleLogin();
		//Auth::handleLogin();
		$data = $_GET;
		if($data['id']==''){
			$this->view->pick='';
			$this->view->data=$data;
		} else {
			$this->view->pick=$data['id'];
			$this->view->content= $this->model->viewOnepermit($data['id']);
			$this->view->contentFiles1= $this->model->editVehiclePermitFiles($this->view->content[0]['id']);
		}
	
		$this->view->render('master/edit_vehiclepermitregistration');
		
	}
	
	function edit_submit_vehiclepermit(){
		Auth::handleLogin();
		//Auth::handleLogin();
		
		$action=$_POST['submit']; 
		//echo '$action';
		if ($action=='submit')
		{
			echo'$action';
		$arg=$_POST['id'];
		$data = array(
		'id' =>null,
		'EntryDate' =>$_POST['EntryDate'],
		'VehicleNo' =>$_POST['VehicleNo'],
		'vehicleType' => $_POST['vehicleType'],
		'VehicleCode' => $_POST['VehicleCode'],
		'PermitNo' => $_POST['PermitNo'],
		'PermitStart' => $_POST['PermitStart'],
		'PermitExpiry' => $_POST['PermitExpiry'],
		'PermitAmmount' => $_POST['PermitAmmount']
			);
		$lastid=$this->model->submit_vehiclepermit($data);
		$target='public/attachment/permit';	
	   foreach($_FILES["fileupload"]["error"] as $key => $error){
		if($error==UPLOAD_ERR_OK){
			$tmp_name = $_FILES["fileupload"]["tmp_name"][$key];
			$name = $date_time.$_FILES["fileupload"]["name"][$key];
			 move_uploaded_file($tmp_name, "$target/$name");
			
		$getAttach = array(
		'id' =>null,
		'permit_id' => $lastid,
	   'attachments' => $name
			);
			//print_r($getAttach);
		$this->model->submit_vehiclepermitFiles($getAttach);
		 }
		  header("location: vehiclepermitregistration");
		}
	}
		else
		{
			$id=$_POST['id'];
		$data = array(
		'EntryDate' =>$_POST['EntryDate'],
		'VehicleNo' =>$_POST['VehicleNo'],
		'vehicleType' => $_POST['vehicleType'],
		'VehicleCode' => $_POST['VehicleCode'],
		'PermitNo' => $_POST['PermitNo'],
		'PermitStart' => $_POST['PermitStart'],
		'PermitExpiry' => $_POST['PermitExpiry'],
		'PermitAmmount' => $_POST['PermitAmmount']
			);
			$this->model->delete_vehiclepermitfiles($id);
			$this->model->edit_submit_vehiclepermit($data,$id);
			
		foreach($_POST["fileupload"] as $oldFiles){
			$getAttach1 = array(
		'id' =>null,
		'permit_id' => $id,
	   'attachments' => $oldFiles
			);
			//print_r($getAttach1);
			 
			 		$this->model->submit_vehiclepermitFiles($getAttach1);
		}
			 $target='public/attachment/permit';	
   // header("location: vehicleinsuranceregistration");
	   foreach($_FILES["fileupload"]["error"] as $key => $error){
		if($error==UPLOAD_ERR_OK){
			$tmp_name = $_FILES["fileupload"]["tmp_name"][$key];
			$name = $date_time.$_FILES["fileupload"]["name"][$key];
			 move_uploaded_file($tmp_name, "$target/$name");
			
		$getAttach = array(
		'id' =>null,
		'permit_id' => $id,
	   'attachments' => $name
			);
			//print_r($getAttach);
		$this->model->submit_vehiclepermitFiles($getAttach);
		 }
		
		 $getAttach = array(
		'permit_id' => $lastid,
	   'attachments' => $name
			);
	   //print_r($getAttach);
	   $this->model->edit_submit_vehiclepermitFiles($getAttach,$arg);
		}
		}
            header("location: vehiclepermitregistration");
		}
		function view_vehiclepermit() 
	{
	//Auth::handleLogin();
		$data = $_GET;
		if($data['id']=='')
		    {
				$this->view->pick='';
				$this->view->data=$data;
			} 
		else 
			{
				$this->view->pick=$data['id'];
				$this->view->content= $this->model->viewOnepermit($data['id']);
			}
		
		$this->view->render('master/view_vehiclepermit');
		
	}
	function delete_vehiclepermit($id) 
	{
		Auth::handleLogin();
		//Auth::handleLogin();
		$this->model->delete_vehiclepermit($id);
		header('location: ../vehiclepermitregistration');
	}	
	//Road Tax Registration
	
	function roadtaxregistration() {
		Auth::handleLogin();
		$this->view->allRoadTax = $this->model->getAllRoadTax();
	
	//print_r($this->view->allRoadTax);
	
		$this->view->render('master/roadtaxregistration');
	}
	function edit_roadtaxregistration() {
		Auth::handleLogin();
		
	//Auth::handleLogin();
		$data = $_GET;
		if($_GET['id']==''){
			$this->view->pick='';
			$this->view->data=$data;
		} else {
			$this->view->pick=$_GET['id'];
			$this->view->content= $this->model->viewOneRoadTax($data['id']);
			$this->view->contentFiles1= $this->model->editVehicleRoadtaxFiles($this->view->content[0]['id']);
		}
		
		$this->view->render('master/edit_roadtaxregistration');
	}
	function view_roadtax() 
	{
		Auth::handleLogin();
	//Auth::handleLogin();
		$data = $_GET;
		if($data['id']=='')
		    {
				$this->view->pick='';
				$this->view->data=$data;
			} 
		else 
			{
				$this->view->pick=$data['id'];
				$this->view->content= $this->model->viewOneRoadTax($data['id']);
			}
		
		$this->view->render('master/view_roadtax');
		
	}
		function edit_submit_roadtax(){
				
			Auth::handleLogin();
		//Auth::handleLogin();
		
		$action=$_POST['submit']; 
		//echo '$action';
		if ($action=='submit')
		{
			echo'$action';
		$arg=$_POST['id'];
		$data = array(
		'id' =>null,
		'EntryDate' =>$_POST['EntryDate'],
		'VehicleNo' =>$_POST['VehicleNo'],
		'vehicleType' => $_POST['vehicleType'],
		'VehicleCode' => $_POST['VehicleCode'],
		'RoadTaxNo' => $_POST['RoadTaxNo'],
		'RoadTaxStart' => $_POST['RoadTaxStart'],
		'RoadTaxExpiry' => $_POST['RoadTaxExpiry'],
		'RoadTaxAmmount' => $_POST['RoadTaxAmmount']
			);
		$lastid=$this->model->submit_roadtax($data);
		$target='public/attachment/roadtax';	
	   foreach($_FILES["fileupload"]["error"] as $key => $error){
		if($error==UPLOAD_ERR_OK){
			$tmp_name = $_FILES["fileupload"]["tmp_name"][$key];
			$name = $date_time.$_FILES["fileupload"]["name"][$key];
			 move_uploaded_file($tmp_name, "$target/$name");
			
		$getAttach = array(
		'id' =>null,
		'roadtax_id' => $lastid,
	   'attachments' => $name
			);
			//print_r($getAttach);
		$this->model->submit_vehicleroadtaxFiles($getAttach);
		 }
		  header("location: roadtaxregistration");
		}
	}
		else
		{
		$id=$_POST['id'];
		$data = array(
		'EntryDate' =>$_POST['EntryDate'],
		'VehicleNo' =>$_POST['VehicleNo'],
		'vehicleType' => $_POST['vehicleType'],
		'VehicleCode' => $_POST['VehicleCode'],
		'RoadTaxNo' => $_POST['RoadTaxNo'],
		'RoadTaxStart' => $_POST['RoadTaxStart'],
		'RoadTaxExpiry' => $_POST['RoadTaxExpiry'],
		'RoadTaxAmmount' => $_POST['RoadTaxAmmount']
			);
			
			$this->model->delete_vehicleroadtaxfiles($id);
			$this->model->edit_submit_roadtax($data,$id);
			
		foreach($_POST["fileupload"] as $oldFiles){
			$getAttach1 = array(
		'id' =>null,
		'roadtax_id' => $id,
	   'attachments' => $oldFiles
			);
			//print_r($getAttach1);
			 
			 		$this->model->submit_vehicleroadtaxFiles($getAttach1);
		}
			 $target1='public/attachment/roadtax';	
   // header("location: vehicleinsuranceregistration");
	   foreach($_FILES["fileupload"]["error"] as $key => $error){
		if($error==UPLOAD_ERR_OK){
			$tmp_name = $_FILES["fileupload"]["tmp_name"][$key];
			$name = $date_time.$_FILES["fileupload"]["name"][$key];
			 move_uploaded_file($tmp_name, "$target1/$name");
			
		$getAttach = array(
		'id' =>null,
		'roadtax_id' => $id,
	   'attachments' => $name
			);
			//print_r($getAttach);
		$this->model->submit_vehicleroadtaxFiles($getAttach);
		 }
		
		 $getAttach = array(
		'roadtax_id' => $lastid,
	   'attachments' => $name
			);
	   //print_r($getAttach);
	   $this->model->edit_submit_vehicleroadtaxFiles($getAttach,$arg);
		}
		}
            header("location: roadtaxregistration");
		}
	function delete_roadtax($id) 
	{
		Auth::handleLogin();
		//Auth::handleLogin();
		$this->model->delete_roadtax($id);
		header('location: ../roadtaxregistration');
	}	
	//Pollution Registration
	
	function pollutionregistration() {
		Auth::handleLogin();
		$this->view->allPollutionRegistration = $this->model->getAllPollutionRegistration();
	    //print_r($this->view->allPollutionRegistration);
        $this->view->render('master/pollutionregistration');
	}
	function edit_pollutionregistration() {
		Auth::handleLogin();
		//Auth::handleLogin();
		$data = $_GET;
		if($data['id']==''){
			$this->view->pick='';
			$this->view->data=$data;
		} else {
			$this->view->pick=$data['id'];
			$this->view->content= $this->model->viewOnePollution($data['id']);
			$this->view->contentFiles1= $this->model->editVehiclePollutionFiles($this->view->content[0]['id']);
		}
	
		$this->view->render('master/edit_pollutionregistration');
	}
	function view_pollution() 
	{
		Auth::handleLogin();
	//Auth::handleLogin();
		$data = $_GET;
		if($data['id']=='')
		    {
				$this->view->pick='';
				$this->view->data=$data;
			} 
		else 
			{
				$this->view->pick=$data['id'];
				$this->view->content= $this->model->viewOnePollution($data['id']);
			}
		
		$this->view->render('master/view_pollution');
		
	}
	function edit_submit_pollution(){
				
		Auth::handleLogin();
		//Auth::handleLogin();
		
		$action=$_POST['submit']; 
		//echo '$action';
		if ($action=='submit')
		{
			echo'$action';
		$arg=$_POST['id'];
		$data = array(
		'id' =>null,
		'EntryDate' =>$_POST['EntryDate'],
		'VehicleNo' =>$_POST['VehicleNo'],
		'VehicleType' => $_POST['VehicleType'],
		'VehicleCode' => $_POST['VehicleCode'],
		'PollutionNo' => $_POST['PollutionNo'],
		'PollutionStart' => $_POST['PollutionStart'],
		'PollutionExpiry' => $_POST['PollutionExpiry'],
		'PollutionAmmount' => $_POST['PollutionAmmount']
			);
		$lastid=$this->model->submit_pollution($data);
		
		$target='public/attachment/pollution';	
	   foreach($_FILES["fileupload"]["error"] as $key => $error){
		if($error==UPLOAD_ERR_OK){
			$tmp_name = $_FILES["fileupload"]["tmp_name"][$key];
			$name = $date_time.$_FILES["fileupload"]["name"][$key];
			 move_uploaded_file($tmp_name, "$target/$name");
			
		$getAttach = array(
		'id' =>null,
		'pollution_id' => $lastid,
	   'attachments' => $name
			);
			//print_r($getAttach);
		$this->model->submit_vehiclepollutionFiles($getAttach);
		 }
		  header("location: pollutionregistration");
		}
	}
		else
		{
		$id=$_POST['id'];
		$data = array(
		'EntryDate' =>$_POST['EntryDate'],
		'VehicleNo' =>$_POST['VehicleNo'],
		'VehicleType' => $_POST['VehicleType'],
		'VehicleCode' => $_POST['VehicleCode'],
		'PollutionNo' => $_POST['PollutionNo'],
		'PollutionStart' => $_POST['PollutionStart'],
		'PollutionExpiry' => $_POST['PollutionExpiry'],
		'PollutionAmmount' => $_POST['PollutionAmmount']
			);
			$this->model->delete_vehiclepollutionfiles($id);
			$this->model->edit_submit_pollution($data,$id);
			
		foreach($_POST["fileupload"] as $oldFiles){
			$getAttach1 = array(
		'id' =>null,
		'pollution_id' => $id,
	   'attachments' => $oldFiles
			);
			//print_r($getAttach1);
			 
			 		$this->model->submit_vehiclepollutionFiles($getAttach1);
		}
			 $target1='public/attachment/pollution';	
   // header("location: vehicleinsuranceregistration");
	   foreach($_FILES["fileupload"]["error"] as $key => $error){
		if($error==UPLOAD_ERR_OK){
			$tmp_name = $_FILES["fileupload"]["tmp_name"][$key];
			$name = $date_time.$_FILES["fileupload"]["name"][$key];
			 move_uploaded_file($tmp_name, "$target1/$name");
			
		$getAttach = array(
		'id' =>null,
		'pollution_id' => $id,
	   'attachments' => $name
			);
			//print_r($getAttach);
		$this->model->submit_vehiclepollutionFiles($getAttach);
		 }
		
		 $getAttach = array(
		'pollution_id' => $lastid,
	   'attachments' => $name
			);
	   //print_r($getAttach);
	   $this->model->edit_submit_vehiclepollutionFiles($getAttach,$arg);
		}
		}
            header("location: pollutionregistration");
		}
	function delete_pollution($id) 
	{
		Auth::handleLogin();
		//Auth::handleLogin();
		$this->model->delete_pollution($id);
		header('location: ../pollutionregistration');
	}
	//customer section
	function customer() {
		Auth::handleLogin();
		$this->view->render('master/customer');
	}
	function partymaster() {
	$this->view->allPartyMaster = $this->model->getAllPartyMaster();
		$this->view->render('master/partymaster',true);
	}
//    function partymaster_details() {
//	$this->view->allPartyMaster = $this->model->getAllPartyMaster_Details();
//        echo json_encode($this->view->allPartyMaster);
//		//$this->view->render('master/partymaster');
//	}
//    
	function edit_partymaster() {
	//Auth::handleLogin();
	Auth::handleLogin();
		$data = $_GET;
		if($data['id']==''){
			$this->view->pick='';
			$this->view->data=$data;
		} else {
			$this->view->pick=$data['id'];
			$this->view->content= $this->model->getOneParty($data['id']);
		}
		
		$this->view->render('master/edit_partymaster');
	}
	function view_partymaster() 
	{
		//Auth::handleLogin();
	//Auth::handleLogin();
		$data = $_REQUEST;
		if($data['id']=='')
		    {
				$this->view->pick='';
				$this->view->data=$data;
			} 
		else 
			{
				$this->view->pick=$data['id'];
				$this->view->content= $this->model->viewOneParty($data['id']);
			}
		echo json_encode($this->view->content);
		//$this->view->render('master/view_partymaster');
		
	}
	function edit_submit_partymaster(){
														
		Auth::handleLogin();
		//Auth::handleLogin();
		
		$action=$_POST['submit']; 
		//echo '$action';
		if ($action=='submit')
		{
			//echo'$action';
		$arg=$_POST['id'];
		$data = array(
		'id' =>null,
		'PartyCode' =>$_POST['PartyCode'],
		'PartyName' =>$_POST['PartyName'],
		'FullAddress' => $_POST['FullAddress'],
		'CityName' => $_POST['CityName'],
		'StateName' => $_POST['StateName'],
		'ContactPerson' => $_POST['ContactPerson'],
		'PANNO' => $_POST['PANNO'],
		'MobileNo' => $_POST['MobileNo'],
		'FAX' => $_POST['FAX'],
		'SSTNO' => $_POST['SSTNO'],
		'CSTNO' => $_POST['CSTNO'],
		'EmailId' => $_POST['EmailId'],
		'BankName' => $_POST['BankName'],
		'BankAccNo' => $_POST['BankAccNo'],
		'IFCCode' => $_POST['IFCCode']
			);
		$this->model->submit_partymaster($data);
		}
		else
		{
		$arg=$_POST['id'];
		$data = array(
		'PartyCode' =>$_POST['PartyCode'],
		'PartyName' =>$_POST['PartyName'],
		'FullAddress' => $_POST['FullAddress'],
		'CityName' => $_POST['CityName'],
		'StateName' => $_POST['StateName'],
		'ContactPerson' => $_POST['ContactPerson'],
		'PANNO' => $_POST['PANNO'],
		'MobileNo' => $_POST['MobileNo'],
		'FAX' => $_POST['FAX'],
		'SSTNO' => $_POST['SSTNO'],
		'CSTNO' => $_POST['CSTNO'],
		'EmailId' => $_POST['EmailId'],
		'BankName' => $_POST['BankName'],
		'BankAccNo' => $_POST['BankAccNo'],
		'IFCCode' => $_POST['IFCCode']
			);
			
			$this->model->edit_submit_partymaster($data,$arg);
		}
			
		header('location: partymaster');
	}
 function partymaster_details(){
        
      $this->view->allPartyMaster = $this->model->getAllPartyMaster_Details();  
        echo json_encode($this->view->allPartyMaster);
        
    }
    
     function add_partymaster(){
         $admin_id=Session::get('admin_id');
        if($admin_id==""){
            $admin_id=$_REQUEST['admin_id'];
        }
        $data = array(
		'id' =>null,
		'PartyCode' =>$_REQUEST['PartyCode'],
		'PartyName' =>$_REQUEST['PartyName'],
        'PartyShortName' =>$_REQUEST['PartyShortName'],
		'FullAddress' => $_REQUEST['FullAddress'],
		'CityName' => $_REQUEST['CityName'],
		'StateName' => $_REQUEST['StateName'],
		'ContactPerson' => $_REQUEST['ContactPerson'],
		'PANNO' => $_REQUEST['PANNO'],
        'TINNO' => $_REQUEST['TINNO'],
		'MobileNo' => $_REQUEST['MobileNo'],
        'TelePhone' => $_REQUEST['TelePhone'],  
		'FAX' => $_REQUEST['FAX'],
		'SSTNO' => $_REQUEST['SSTNO'],
		'CSTNO' => $_REQUEST['CSTNO'],
		'EmailId' => $_REQUEST['EmailId'],
		'BankName' => $_REQUEST['BankName'],
		'BankAccNo' => $_REQUEST['BankAccNo'],
		'IFCCode' => $_REQUEST['IFCCode'],
        'TrType' => $_REQUEST['TrType'],
        'WorkingStatusYN' => $_REQUEST['WorkingStatusYN'],
        'admin_id'=>$admin_id	
		);
          
		$this->model->submit_partymaster($data);
    
	}
    function update_partymaster(){
        $arg=$_REQUEST['id'];
        $data = array(
		//'id' =>null,
		'PartyCode' =>$_REQUEST['PartyCode'],
		'PartyName' =>$_REQUEST['PartyName'],
        'PartyShortName' =>$_REQUEST['PartyShortName'],
		'FullAddress' => $_REQUEST['FullAddress'],
		'CityName' => $_REQUEST['CityName'],
		'StateName' => $_REQUEST['StateName'],
		'ContactPerson' => $_REQUEST['ContactPerson'],
		'PANNO' => $_REQUEST['PANNO'],
        'TINNO' => $_REQUEST['TINNO'],
		'MobileNo' => $_REQUEST['MobileNo'],
        'TelePhone' => $_REQUEST['TelePhone'],  
		'FAX' => $_REQUEST['FAX'],
		'SSTNO' => $_REQUEST['SSTNO'],
		'CSTNO' => $_REQUEST['CSTNO'],
		'EmailId' => $_REQUEST['EmailId'],
		'BankName' => $_REQUEST['BankName'],
		'BankAccNo' => $_REQUEST['BankAccNo'],
		'IFCCode' => $_REQUEST['IFCCode'],
        'TrType' => $_REQUEST['TrType'],
        'WorkingStatusYN' => $_REQUEST['WorkingStatusYN'],
       // 'admin_id'=>Session::get('admin_id')	
		);
          
		$this->model->edit_submit_partymaster($data,$arg);
    
	}	
   function delete_partymaster($id) 
	{
		Auth::handleLogin();
		//Auth::handleLogin();
		$this->model->delete_partymaster($id);
		//header('location: ../partymaster');
	}
	
	
	
	function vendor() {
		Auth::handleLogin();
		$this->view->allvendor = $this->model->getAllvendor();
		$this->view->render('master/vendor', 1);
	}

	function edit_vendor() {
	//Auth::handleLogin();
	Auth::handleLogin();
		$data = $_GET;
		if($data['id']==''){
			$this->view->pick='';
			$this->view->data=$data;
		} else {
			$this->view->pick=$data['id'];
			$this->view->content= $this->model->getOneVendor($data['id']);
		}
		
		$this->view->render('master/edit_vendor');
	}
	function view_vendor() 
	{
		Auth::handleLogin();
	//Auth::handleLogin();
		$data = $_GET;
		if($data['id']=='')
		    {
				$this->view->pick='';
				$this->view->data=$data;
			} 
		else 
			{
				$this->view->pick=$data['id'];
				$this->view->content= $this->model->getOneVendor($data['id']);
			}
		
		$this->view->render('master/view_vendor');
		
	}
	function edit_submit_vendor(){
														
		Auth::handleLogin();
		$action=$_POST['submit']; 
		//echo '$action';
		if ($action=='submit')
		{
			echo'$action';
		$arg=$_POST['id'];
		$data = array(
		'id' =>null,
		'VendorCode' =>$_POST['VendorCode'],
		'VendorName' =>$_POST['VendorName'],
		'VendorShortName' => $_POST['VendorShortName'],
		'FullAddress' => $_POST['FullAddress'],
		'CityName' => $_POST['CityName'],
		'StateName' => $_POST['StateName'],
		'ContactPerson' => $_POST['ContactPerson'],
		'PANNO' => $_POST['PANNO'],
		'TINNO' => $_POST['TINNO'],
		'MobileNo' => $_POST['MobileNo'],
		'Fax' => $_POST['Fax'],
		'EmailId' => $_POST['EmailId'],
		'SSTNO' => $_POST['SSTNO'],
		'CSTNO' => $_POST['CSTNO'],
		'BankName' => $_POST['BankName'],
		'BankAccNo' => $_POST['BankAccNo'],
		'IFCCode' => $_POST['IFCCode'],
		'TrType' => $_POST['TrType']
			);
		$this->model->submit_vendor($data);
		}
		else
		{
		$arg=$_POST['id'];
		$data = array(
		'VendorCode' =>$_POST['VendorCode'],
		'VendorName' =>$_POST['VendorName'],
		'VendorShortName' => $_POST['VendorShortName'],
		'FullAddress' => $_POST['FullAddress'],
		'CityName' => $_POST['CityName'],
		'StateName' => $_POST['StateName'],
		'ContactPerson' => $_POST['ContactPerson'],
		'PANNO' => $_POST['PANNO'],
		'TINNO' => $_POST['TINNO'],
		'MobileNo' => $_POST['MobileNo'],
		'Fax' => $_POST['Fax'],
		'EmailId' => $_POST['EmailId'],
		'SSTNO' => $_POST['SSTNO'],
		'CSTNO' => $_POST['CSTNO'],
		'BankName' => $_POST['BankName'],
		'BankAccNo' => $_POST['BankAccNo'],
		'IFCCode' => $_POST['IFCCode'],
		'TrType' => $_POST['TrType']
			);
			
			$this->model->edit_submit_vendor($data,$arg);
		}
			
		header('location: vendor');
	}
	function delete_vendor($id) 
	{
		Auth::handleLogin();
		//Auth::handleLogin();
		$this->model->delete_vendor($id);
		header('location: ../vendor');
	}
	
	//employee section
	
	function employee() {
		Auth::handleLogin();
	$this->view->allSalary = $this->model->getAllSalary();
	    //print_r($this->view->allSalary);
	
		$this->view->render('master/employee');
	}
	function salarymaster() {
		Auth::handleLogin();
		$this->view->allSalary = $this->model->getAllSalary();
	    //print_r($this->view->allSalary);
		$this->view->render('master/employee');
	}
	function edit_salarymaster() {
		//Auth::handleLogin();
		Auth::handleLogin();
		$data = $_GET;
		if($data['id']==''){
			$this->view->pick='';
			$this->view->data=$data;
		} else {
			$this->view->pick=$data['id'];
			$this->view->content= $this->model->getOneSalary($data['id']);
		}
	
		$this->view->render('master/edit_salarymaster');
	}
	function view_salarymaster() 
	{
		Auth::handleLogin();
	//Auth::handleLogin();
		$data = $_GET;
		if($data['id']=='')
		    {
				$this->view->pick='';
				$this->view->data=$data;
			} 
		else 
			{
				$this->view->pick=$data['id'];
				$this->view->content= $this->model->viewOneSalary($data['id']);
			}
		
		$this->view->render('master/view_salarymaster');
		
	}
	function edit_submit_salarymaster(){
		Auth::handleLogin();
		//Auth::handleLogin();
		
		$action=$_POST['submit']; 
		//echo '$action';
		if ($action=='submit')
		{
			echo'$action';
		$arg=$_POST['id'];
		$data = array(
		'id' =>null,
		'SalaryCode' =>$_POST['SalaryCode'],
		'Date' =>$_POST['Date'],
		'EmployeeName' => $_POST['EmployeeName'],
		'EmployeeCode' => $_POST['EmployeeCode'],
		'DateOfJoin' => $_POST['DateOfJoin'],
		'BasicSalary' => $_POST['BasicSalary'],
		'Housing' => $_POST['Housing'],
		'Food' => $_POST['Food'],
		'OtherAllowance' => $_POST['OtherAllowance'],
		'Total' => $_POST['Total'],
		'EffectFrom' => $_POST['EffectFrom'],
		'EffectTo' => $_POST['EffectTo']
		
			);
		$this->model->submit_salarymaster($data);
		}
		else
		{
		$arg=$_POST['id'];
		$data = array(
		'SalaryCode' =>$_POST['SalaryCode'],
		'Date' =>$_POST['Date'],
		'EmployeeName' => $_POST['EmployeeName'],
		'EmployeeCode' => $_POST['EmployeeCode'],
		'DateOfJoin' => $_POST['DateOfJoin'],
		'BasicSalary' => $_POST['BasicSalary'],
		'Housing' => $_POST['Housing'],
		'Food' => $_POST['Food'],
		'OtherAllowance' => $_POST['OtherAllowance'],
		'Total' => $_POST['Total'],
		'EffectFrom' => $_POST['EffectFrom'],
		'EffectTo' => $_POST['EffectTo']
			);
			
			$this->model->edit_submit_salarymaster($data,$arg);
		}
			
		header('location: employee');
	}
	
	function delete_salarymaster($id) 
	{
		Auth::handleLogin();
		//Auth::handleLogin();
		$this->model->delete_salarymaster($id);
		header('location: ../employee');
	}
	//workorder section
	function workorder() {
		Auth::handleLogin();
		$this->view->render('master/workorder');
	}
	function routmaster() {
		Auth::handleLogin();
		$this->view->allRoutMaster = $this->model->getAllRoutMaster();
	    //print_r($this->view->allRoutMaster);
		$this->view->render('master/routmaster');
	}
	function edit_routmaster() {
		Auth::handleLogin();
		//Auth::handleLogin();
		$data = $_GET;
		if($data['id']==''){
			$this->view->pick='';
			$this->view->data=$data;
		} else {
			$this->view->pick=$data['id'];
			$this->view->content= $this->model->getOneRoutMaster($data['id']);
		}
	
		$this->view->render('master/edit_routmaster');
	}
	function view_routmaster() 
	{
		Auth::handleLogin();
	//Auth::handleLogin();
		$data = $_GET;
		if($data['id']=='')
		    {
				$this->view->pick='';
				$this->view->data=$data;
			} 
		else 
			{
				$this->view->pick=$data['id'];
				$this->view->content= $this->model->viewOneRoutMaster($data['id']);
			}
		
		$this->view->render('master/view_routmaster');
		
	}
	function edit_submit_routmaster(){
				
		//Auth::handleLogin();
		Auth::handleLogin();
		
		$action=$_POST['submit']; 
		//echo '$action';
		if ($action=='submit')
		{
			echo'$action';
		$arg=$_POST['id'];
		$data = array(
		'id' =>null,
		'RoutCode' =>$_POST['RoutCode'],
		'RoutName' =>$_POST['RoutName'],
		'DoPoNo' => $_POST['DoPoNo'],
		'MaterialGrade' => $_POST['MaterialGrade'],
		'ShortageRate' => $_POST['ShortageRate'],
		'Deduct' => $_POST['Deduct'],
		'DriverTripComm' => $_POST['DriverTripComm']
		
			);
		$this->model->submit_routmaster($data);
		}
		else
		{
		$arg=$_POST['id'];
		$data = array(
		'RoutCode' =>$_POST['RoutCode'],
		'RoutName' =>$_POST['RoutName'],
		'DoPoNo' => $_POST['DoPoNo'],
		'MaterialGrade' => $_POST['MaterialGrade'],
		'ShortageRate' => $_POST['ShortageRate'],
		'Deduct' => $_POST['Deduct'],
		'DriverTripComm' => $_POST['DriverTripComm']
			);
			
			$this->model->edit_submit_routmaster($data,$arg);
		}
			
		header('location: routmaster');
	}
	
	function delete_routmaster($id) 
	{
		Auth::handleLogin();
		//Auth::handleLogin();
		$this->model->delete_routmaster($id);
		header('location: ../routmaster');
	}
	function billingratemaster() {
	$this->view->allBillingRate = $this->model->getAllBillingRate();
	    //print_r($this->view->allBillingRate);
		$this->view->render('master/billingratemaster');
	}
	function edit_billingratemaster() {
		//Auth::handleLogin();
		$data = $_GET;
		if($data['id']==''){
			$this->view->pick='';
			$this->view->data=$data;
		} else {
			$this->view->pick=$data['id'];
			$this->view->content= $this->model->getOneBillingRate($data['id']);
		}
	
		$this->view->render('master/edit_billingratemaster');
	}
	function view_billingrate() 
	{
	//Auth::handleLogin();
		$data = $_GET;
		if($data['id']=='')
		    {
				$this->view->pick='';
				$this->view->data=$data;
			} 
		else 
			{
				$this->view->pick=$data['id'];
				$this->view->content= $this->model->viewOneBillingRate($data['id']);
			}
		
		$this->view->render('master/view_billingrate');
		
	}
	function edit_submit_billingmaster(){
				
		//Auth::handleLogin();
		
		$action=$_POST['submit']; 
		//echo '$action';
		if ($action=='submit')
		{
			echo'$action';
		$arg=$_POST['id'];
		$data = array(
		'id' =>null,
		'DoId' =>$_POST['DoId'],
		'DoCode' =>$_POST['DoCode'],
		'PartyName' => $_POST['PartyName'],
		'RoutName' => $_POST['RoutName']
			);
		$this->model->submit_billingmaster($data);
		}
		else
		{
		$arg=$_POST['id'];
		$data = array(
		'DoId' =>$_POST['DoId'],
		'DoCode' =>$_POST['DoCode'],
		'PartyName' => $_POST['PartyName'],
		'RoutName' => $_POST['RoutName']
			);
			
			$this->model->edit_submit_billingmaster($data,$arg);
		}
			
		header('location: billingratemaster');
	}
	function delete_billingrate($id) 
	{
		//Auth::handleLogin();
		$this->model->delete_billingrate($id);
		header('location: ../billingratemaster');
	}
	function doregistration() {
	$this->view->allDoRegistration = $this->model->getAllDoRegistration();
	    //print_r($this->view->allDoRegistration);
		$this->view->render('master/doregistration');
	}
	function edit_doregistration() {
		//Auth::handleLogin();
		$data = $_GET;
		if($data['id']==''){
			$this->view->pick='';
			$this->view->data=$data;
		} else {
			$this->view->pick=$data['id'];
			$this->view->content= $this->model->getOneRegistration($data['id']);
		}
	
		$this->view->render('master/edit_doregistration');
	}
	function view_doregistration() 
	{
	//Auth::handleLogin();
		$data = $_GET;
		if($data['id']=='')
		    {
				$this->view->pick='';
				$this->view->data=$data;
			} 
		else 
			{
				$this->view->pick=$data['id'];
				$this->view->content= $this->model->viewOneRegistration($data['id']);
			}
		
		$this->view->render('master/view_doregistration');
		
	}
	function edit_submit_doregistration(){
				
		//Auth::handleLogin();
		
		$action=$_POST['submit']; 
		//echo '$action';
		if ($action=='submit')
		{
			echo'$action';
		$arg=$_POST['id'];
		$data = array(
		'id' =>null,
		'DoCode' =>$_POST['DoCode'],
		'DoNoParty' =>$_POST['DoNoParty'],
		'PONo' => $_POST['PONo'],
		'DateOfParty' => $_POST['DateOfParty'],
		'DoDate' =>$_POST['DoDate'],
		'ExpireDate' =>$_POST['ExpireDate'],
		'MinesName' => $_POST['MinesName'],
		'CoalGrade' => $_POST['CoalGrade'],
		'DoQty' => $_POST['DoQty'],
		'AllotmentQty' =>$_POST['AllotmentQty'],
		'BiltyCommission' =>$_POST['BiltyCommission']
		
			);
		$this->model->submit_doregistration($data);
		}
		else
		{
		$arg=$_POST['id'];
		$data = array(
		'DoCode' =>$_POST['DoCode'],
		'DoNoParty' =>$_POST['DoNoParty'],
		'PONo' => $_POST['PONo'],
		'DateOfParty' => $_POST['DateOfParty'],
		'DoDate' =>$_POST['DoDate'],
		'ExpireDate' =>$_POST['ExpireDate'],
		'MinesName' => $_POST['MinesName'],
		'CoalGrade' => $_POST['CoalGrade'],
		'DoQty' => $_POST['DoQty'],
		'AllotmentQty' =>$_POST['AllotmentQty'],
		'BiltyCommission' =>$_POST['BiltyCommission']
			);
			
			$this->model->edit_submit_doregistration($data,$arg);
		}
			
		header('location: doregistration');
	}
	function delete_doregistration($id) 
	{
		//Auth::handleLogin();
		$this->model->delete_doregistration($id);
		header('location: ../doregistration');
	}
	//hsd section
	function hsd() {
		$this->view->allHsd = $this->model->getAllHsd();
	
	//print_r($this->view->allHsd);
	
		$this->view->render('master/hsd');
	}
	function edit_hsd() {
		//Auth::handleLogin();
		$data = $_GET;
		if($data['id']==''){
			$this->view->pick='';
			$this->view->data=$data;
		} else {
			$this->view->pick=$data['id'];
			$this->view->content= $this->model->getOnehsd($data['id']);
		}
	
		$this->view->render('master/edit_hsd');
	}
	function view_hsd() 
	{
	//Auth::handleLogin();
		$data = $_GET;
		if($data['id']=='')
		    {
				$this->view->pick='';
				$this->view->data=$data;
			} 
		else 
			{
				$this->view->pick=$data['id'];
				$this->view->content= $this->model->viewOnehsd($data['id']);
			}
		
		$this->view->render('master/view_hsd');
		
	}
	function edit_submit_hsd(){
		//Auth::handleLogin();
		
		$action=$_POST['submit']; 
		//echo '$action';
		if ($action=='submit')
		{
			echo'$action';
		$arg=$_POST['id'];
		$data = array(
		'id' =>null,
		'diselratecode' =>$_POST['diselratecode'],
		'itemtype' =>$_POST['itemtype'],
		'itemname' => $_POST['itemname'],
		'fuelstation' => $_POST['fuelstation']
		);
		$this->model->submit_hsd($data);
		}
		else
		{
		$arg=$_POST['id'];
		$data = array(
		'diselratecode' =>$_POST['diselratecode'],
		'itemtype' =>$_POST['itemtype'],
		'itemname' => $_POST['itemname'],
		'fuelstation' => $_POST['fuelstation']
			);
			
			$this->model->edit_submit_hsd($data,$arg);
		}
			
		header('location: hsd');
	}
	function delete_hsd($id) 
	{
		//Auth::handleLogin();
		$this->model->delete_hsd($id);
		header('location: ../hsd');
	}
	function servicereminder() {
	$this->view->allService = $this->model->getAllService();
		$this->view->render('master/servicereminder');
	}
	//service reminder section
	function edit_servicereminder() 
	{
	//Auth::handleLogin();
		$data = $_GET;
		if($data['id']=='')
		    {
				$this->view->pick='';
				$this->view->data=$data;
			} 
		else 
			{
				$this->view->pick=$data['id'];
				$this->view->content= $this->model->getOneService($data['id']);
			}
		
		$this->view->render('master/edit_servicereminder');
	}
	function view_servicereminder() 
	{
	//Auth::handleLogin();
		$data = $_GET;
		if($data['id']=='')
		    {
				$this->view->pick='';
				$this->view->data=$data;
			} 
		else 
			{
				$this->view->pick=$data['id'];
				$this->view->content= $this->model->viewOneService($data['id']);
			}
		
		$this->view->render('master/view_servicereminder');
		
	}
	function edit_submit_servicereminder(){
		//Auth::handleLogin();
														
		$action=$_POST['submit']; 
		//echo '$action';
		if ($action=='submit')
		{
			echo'$action';
		$arg=$_POST['id'];
		$data = array(
		'id' =>null,
		'ServiceId' =>$_POST['ServiceId'],
		'VehicleNo' =>$_POST['VehicleNo'],
		'EngineOilServiceDue' => $_POST['EngineOilServiceDue'],
		'AxelOilServiceDue' => $_POST['AxelOilServiceDue'],
		'GearOilServiceDue' =>$_POST['GearOilServiceDue'],
		'HorseGreasingServiceDue' =>$_POST['HorseGreasingServiceDue'],
		'TraillerGreasingServiceDue' => $_POST['TraillerGreasingServiceDue'],
		'AlternatorServiceDue' => $_POST['AlternatorServiceDue'],
		'SelfStartServiceDue' =>$_POST['SelfStartServiceDue'],
		'RadiatorServiceDue' =>$_POST['RadiatorServiceDue'],
		'HydraulicOilDue' => $_POST['HydraulicOilDue'],
		'CrownOilDue' => $_POST['CrownOilDue']
		);
		$this->model->submit_servicereminder($data);
		}
		else
		{
		$arg=$_POST['id'];
		$data = array(
		'ServiceId' =>$_POST['ServiceId'],
		'VehicleNo' =>$_POST['VehicleNo'],
		'EngineOilServiceDue' => $_POST['EngineOilServiceDue'],
		'AxelOilServiceDue' => $_POST['AxelOilServiceDue'],
		'GearOilServiceDue' =>$_POST['GearOilServiceDue'],
		'HorseGreasingServiceDue' =>$_POST['HorseGreasingServiceDue'],
		'TraillerGreasingServiceDue' => $_POST['TraillerGreasingServiceDue'],
		'AlternatorServiceDue' => $_POST['AlternatorServiceDue'],
		'SelfStartServiceDue' =>$_POST['SelfStartServiceDue'],
		'RadiatorServiceDue' =>$_POST['RadiatorServiceDue'],
		'HydraulicOilDue' => $_POST['HydraulicOilDue'],
		'CrownOilDue' => $_POST['CrownOilDue']
			);
			
			$this->model->edit_submit_servicereminder($data,$arg);
		}
			
		header('location: servicereminder');
	}
	function delete_servicereminder($id) 
	{
		//Auth::handleLogin();
		$this->model->delete_servicereminder($id);
		header('location: ../servicereminder');
	}
	// user control section
	function usercontrol() {
	$this->view->allUserControl = $this->model->getAllUserControl();
		$this->view->render('master/usercontrol');
	}
	function edit_usercontrol()
	{
	//Auth::handleLogin();
		$data = $_GET;
		if($data['id']=='')
		    {
				$this->view->pick='';
				$this->view->data=$data;
			} 
		else 
			{
				$this->view->pick=$data['id'];
				$this->view->content= $this->model->getOneUser($data['id']);
			}
		
		$this->view->render('master/edit_usercontrol');
	}
	function view_usercontrol() 
	{
	//Auth::handleLogin();
		$data = $_GET;
		if($data['id']=='')
		    {
				$this->view->pick='';
				$this->view->data=$data;
			} 
		else 
			{
				$this->view->pick=$data['id'];
				$this->view->content= $this->model->viewOneUser($data['id']);
			}
		
		$this->view->render('master/view_usercontrol');
		
	}
	function edit_submit_usercontrol(){
		//Auth::handleLogin();
													
		$action=$_POST['submit']; 
		//echo '$action';
		if ($action=='submit')
		{
			echo'$action';
		$arg=$_POST['id'];
		$data = array(
		'id' =>null,
		'Branch' =>$_POST['Branch'],
		'FirstName' =>$_POST['FirstName'],
		'LastName' => $_POST['LastName'],
		'UserName' => $_POST['UserName'],
		'Password' =>$_POST['Password'],
		'ConfirmPassword' =>$_POST['ConfirmPassword'],
		'MobileNumber' => $_POST['MobileNumber'],
		'EmailId' => $_POST['EmailId']
		
		);
		$this->model->submit_usercontrol($data);
		}
		else
		{
		$arg=$_POST['id'];
		$data = array(
		'Branch' =>$_POST['Branch'],
		'FirstName' =>$_POST['FirstName'],
		'LastName' => $_POST['LastName'],
		'UserName' => $_POST['UserName'],
		'Password' =>$_POST['Password'],
		'ConfirmPassword' =>$_POST['ConfirmPassword'],
		'MobileNumber' => $_POST['MobileNumber'],
		'EmailId' => $_POST['EmailId']
			);
			
			$this->model->edit_submit_usercontrol($data,$arg);
		}
			
		header('location: usercontrol');
	}
	function delete_usercontrol($id) 
	{
		//Auth::handleLogin();
		$this->model->delete_usercontrol($id);
		header('location: ../usercontrol');
	}
	//item master section
	function itemmaster() {
		$this->view->allItem = $this->model->getAllItem();
		$this->view->render('master/itemmaster');
	}
	function edit_itemmaster() 
	{
	//Auth::handleLogin();
		$data = $_GET;
		if($data['id']=='')
		    {
				$this->view->pick='';
				$this->view->data=$data;
			} 
		else 
			{
				$this->view->pick=$data['id'];
				$this->view->content= $this->model->getOneItem($data['id']);
			}
		
		$this->view->render('master/edit_itemmaster');
	}
		function view_itemmaster() 
	{
	//Auth::handleLogin();
		$data = $_GET;
		if($data['id']=='')
		    {
				$this->view->pick='';
				$this->view->data=$data;
			} 
		else 
			{
				$this->view->pick=$data['id'];
				$this->view->content= $this->model->viewOneItem($data['id']);
			}
		
		$this->view->render('master/view_itemmaster');
		
	}
	function edit_submit_itemmaster(){
		//Auth::handleLogin();
																						
		$action=$_POST['submit']; 
		//echo '$action';
		if ($action=='submit')
		{
			echo'$action';
		//$arg=$_POST['id'];
		$data = array(
		'id' =>null,
		'ItemCode' =>$_POST['ItemCode'],
		'ItemType' =>$_POST['ItemType'],
		'ItemCompany' => $_POST['ItemCompany'],
		'CategoryName' => $_POST['CategoryName'],
		'ItemName' =>$_POST['ItemName'],
		'UnitName' =>$_POST['UnitName']
		);
		$this->model->submit_itemmaster($data);
		}
		else
		{
		$arg=$_POST['id'];
		$data = array(
		'ItemCode' =>$_POST['ItemCode'],
		'ItemType' =>$_POST['ItemType'],
		'ItemCompany' => $_POST['ItemCompany'],
		'CategoryName' => $_POST['CategoryName'],
		'ItemName' =>$_POST['ItemName'],
		'UnitName' =>$_POST['UnitName']
			);
			
			$this->model->edit_submit_itemmaster($data,$arg);
		}
			
		header('location: itemmaster');
	}
	function delete_itemmaster($id) 
	{
		//Auth::handleLogin();
		$this->model->delete_itemmaster($id);
		header('location: ../itemmaster');
	}
	//expiry alert section
	function expiryalert() {
	$this->view->allExpiryAlert = $this->model->getAllExpiryAlert();
		$this->view->render('master/expiryalert');
	}
	function edit_expiryalert() 
	{
	//Auth::handleLogin();
		$data = $_GET;
		if($data['id']=='')
		    {
				$this->view->pick='';
				$this->view->data=$data;
			} 
		else 
			{
				$this->view->pick=$data['id'];
				$this->view->content= $this->model->getOneAlert($data['id']);
			}
		
		$this->view->render('master/edit_expiryalert');
	}
	function view_expiryalert() 
	{
	//Auth::handleLogin();
		$data = $_GET;
		if($data['id']=='')
		    {
				$this->view->pick='';
				$this->view->data=$data;
			} 
		else 
			{
				$this->view->pick=$data['id'];
				$this->view->content= $this->model->viewOneAlert($data['id']);
			}
		
		$this->view->render('master/view_expiryalert');
		
	}
	function edit_submit_expiryalert(){
		//Auth::handleLogin();
														
		$action=$_POST['submit']; 
		//echo '$action';
		if ($action=='submit')
		{
			echo'$action';
		$arg=$_POST['id'];
		$data = array(
		'id' =>null,
		'AlertCode' =>$_POST['AlertCode'],
		'NoOfInsuranceAlertDays' =>$_POST['NoOfInsuranceAlertDays'],
		'NoOfFitnessAlertDays' => $_POST['NoOfFitnessAlertDays'],
		'NoOfPermitAlertDays' => $_POST['NoOfPermitAlertDays'],
		'NoOfRoadTaxAlertDays' =>$_POST['NoOfRoadTaxAlertDays'],
		'NoOfPollutionAlertDays' =>$_POST['NoOfPollutionAlertDays'],
		'EffectDateFrom' =>$_POST['EffectDateFrom']
		);
		$this->model->submit_expiryalert($data);
		}
		else
		{
		$arg=$_POST['id'];
		$data = array(
		'AlertCode' =>$_POST['AlertCode'],
		'NoOfInsuranceAlertDays' =>$_POST['NoOfInsuranceAlertDays'],
		'NoOfFitnessAlertDays' => $_POST['NoOfFitnessAlertDays'],
		'NoOfPermitAlertDays' => $_POST['NoOfPermitAlertDays'],
		'NoOfRoadTaxAlertDays' =>$_POST['NoOfRoadTaxAlertDays'],
		'NoOfPollutionAlertDays' =>$_POST['NoOfPollutionAlertDays'],
		'EffectDateFrom' =>$_POST['EffectDateFrom']
			);
			
			$this->model->edit_submit_expiryalert($data,$arg);
		}
			
		header('location: expiryalert');
	}
	function delete_expiryalert($id) 
	{
		//Auth::handleLogin();
		$this->model->delete_expiryalert($id);
		header('location: ../expiryalert');
	}

	function bankmaster(){
		$this->view->render('master/bankmaster',true);
	}
    
    
function getallBankMaster(){
 $this->view->allBankMaster = $this->model->BankMaster();
	echo json_encode($this->view->allBankMaster);
}

function view_BankMaster() 
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
			$this->view->content= $this->model->view_BankMaster($data["id"]);
}
	echo json_encode($this->view->content);
}

function delete_BankMaster(){
	$id=$_REQUEST["id"];
	$this->model->delete_BankMaster($id);
	
}

function add_BankMaster(){
	$data = array( 
				"id" => null, "BankCode" => $_REQUEST["BankCode"],"BankName" => $_REQUEST["BankName"],"ShortName" => $_REQUEST["ShortName"],"AccountNo" => $_REQUEST["AccountNo"],"AType" => $_REQUEST["AType"],"OpBalance" => $_REQUEST["OpBalance"],"CurBalance" => $_REQUEST["CurBalance"]
			   );
	$this->model->add_BankMaster($data);
	
}

function edit_BankMaster(){
	$arg=$_REQUEST["id"];
	$data = array( "BankCode" => $_REQUEST["BankCode"],"BankName" => $_REQUEST["BankName"],"ShortName" => $_REQUEST["ShortName"],"AccountNo" => $_REQUEST["AccountNo"],"AType" => $_REQUEST["AType"],"OpBalance" => $_REQUEST["OpBalance"],"CurBalance" => $_REQUEST["CurBalance"]
			   );
	$this->model->edit_BankMaster($data,$arg);
}

	function userpriviledges(){
		$this->view->employee= $_REQUEST['employee'];
		if($this->view->employee!='' AND $this->view->employee!=0){
			$this->view->userModules = $this->model->getAllUserModules($this->view->employee);	
		}
		$this->view->allModules = $this->model->getAllRootModules();
		$this->view->allSubModules = $this->model->getAllModules();

		//$this->view->allEmployees = $this->model->getAllEmployees();
		$this->view->allEmployees = $this->model->getAllusers();
		//print_r($this->view->allModules);
		$this->view->roles = $this->model->getAllRoles();
		$this->view->render('master/userpriviledges');
	}
    
    function mobile_userpriviledges(){
		$this->view->employee= $_REQUEST['employee'];
		if($this->view->employee!='' AND $this->view->employee!=0){
			$this->view->userModules = $this->model->getAllUserErpModules($this->view->employee);	
		}
		$this->view->allModules = $this->model->getAllRootModulesMob();
		//$this->view->allSubModules = $this->model->getAllModules();

		//$this->view->allEmployees = $this->model->getAllEmployees();
		$this->view->allEmployees = $this->model->getAllusers();
		//print_r($this->view->allModules);getAllusers
		$this->view->render('master/mobile_userpriviledges');
	}

	function shareModule(){
		
		$deviceAction = $_REQUEST['deviceAction'];
		echo $deviceAction;
		$employeeid = $_REQUEST['employeeid'];
		echo $employeeid;
		$moduleid = $_REQUEST['moduleid'];
		echo $moduleid;
		//$email=Session::get('email');
		//$password=Session::get('password');
		//$t=Traccar::login(TRACCAR_ADMIN_USER,TRACCAR_ADMIN_PASS);
		//$t=Traccar::login("webrains@gmail.com","admin");
		//if($t->responseCode=='200') {
   			// $traccarCookie = Traccar::$cookie;
		//echo $traccarCookie;
		if($deviceAction=="Added"){
			$data=array(
						'userId' => $_REQUEST['employeeid'],
						'moduleId' => $_REQUEST['moduleid'],
						'moduleAccess' => 1
						);
						// print_r($data);
			$add_submituser=$this->model->setUserModules($data);
			$data=array(
							'id' => null,
							'admin_id' => Session::get('admin_id'),
							'operations' => $_POST['moduleid']." ".'Shared with -'." ".$_POST['employeeid'],
							'time' => date('Y-m-d H:i:s')
			);
			$this->model->insert_activity($data);
		
		} else {
			$add_submituser=$this->model->DeleteUserModules($employeeid,$moduleid);
			$data=array(
							'id' => null,
							'admin_id' => Session::get('admin_id'),
							'operations' => $_POST['moduleid']." ".'Unshared with -'." ".$_POST['employeeid'],
							'time' => date('Y-m-d H:i:s')
			);
			$this->model->insert_activity($data);
		//deleteDevicePermissions($userId,$deviceId,$cookie)
		}
		
	} 
    
    function shareModuleMob(){
		
		$deviceAction = $_REQUEST['deviceAction'];
		echo $deviceAction;
		$employeeid = $_REQUEST['employeeid'];
		echo $employeeid;
		$moduleid = $_REQUEST['moduleid'];
		echo $moduleid;
		//$email=Session::get('email');
		//$password=Session::get('password');
		//$t=Traccar::login(TRACCAR_ADMIN_USER,TRACCAR_ADMIN_PASS);
		//$t=Traccar::login("webrains@gmail.com","admin");
		//if($t->responseCode=='200') {
   			// $traccarCookie = Traccar::$cookie;
		//echo $traccarCookie;
		if($deviceAction=="Added"){
			$data=array(
						'userId' => $_REQUEST['employeeid'],
						'moduleId' => $_REQUEST['moduleid'],
						'moduleAccess' => 1
						);
						print_r($data);
		$add_submituser=$this->model->setUserModulesMob($data);
		$data=array(
						'id' => null,
						'admin_id' => Session::get('admin_id'),
						'operations' => $_POST['moduleid']." ".'Shared with -'." ".$_POST['employeeid'],
						'time' => date('Y-m-d H:i:s')
	);
	$this->model->insert_activity($data);
		
		} else {
		$add_submituser=$this->model->DeleteUserModulesMob($employeeid,$moduleid);
		$data=array(
						'id' => null,
						'admin_id' => Session::get('admin_id'),
						'operations' => $_POST['moduleid']." ".'Unshared with -'." ".$_POST['employeeid'],
						'time' => date('Y-m-d H:i:s')
	);
	$this->model->insert_activity($data);
		//deleteDevicePermissions($userId,$deviceId,$cookie)
		}
		
		} 

//updateUserModuleAccess($data,$userId,$moduleId,$moduleAccess)
function shareModuleAccess(){
		
	$deviceAction = $_REQUEST['deviceAction'];
	echo $deviceAction;
	$employeeid = $_REQUEST['employeeid'];
	echo $employeeid;
	$moduleid = $_REQUEST['moduleid'];
	echo $moduleid;
	$moduleAccess = $_REQUEST['moduleAccess'];
	echo $moduleAccess;


		$data=array(
					'moduleAccess' => $moduleAccess
					);
	$add_submituser=$this->model->updateUserModuleAccessMob($data,$employeeid,$moduleid);
	$data=array(
					'id' => null,
					'admin_id' => Session::get('admin_id'),
					'operations' => $_POST['moduleid']." ".'Access changed for -'." ".$_POST['employeeid'],
					'time' => date('Y-m-d H:i:s')
);
$this->model->insert_activity($data);
}
    
    
    function tyresaxelmaster(){
        	
       
	$this->view->render("master/tyresaxelmaster",true);
	
}

function getalltyresaxelmaster(){
 $this->view->alltyresaxelmaster = $this->model->tyresaxelmaster();
	echo json_encode($this->view->alltyresaxelmaster);
}

function view_tyresaxelmaster() 
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
			$this->view->content= $this->model->view_tyresaxelmaster($data["id"]);
}
	echo json_encode($this->view->content);
}

function delete_tyresaxelmaster(){
	$id=$_REQUEST["id"];
	$this->model->delete_tyresaxelmaster($id);
	
}

function add_tyresaxelmaster(){
	$data = array( 
				"id" => null, "AxelCode" => $_REQUEST["AxelCode"],"AxelDescription" => $_REQUEST["AxelDescription"]
			   );
	$this->model->add_tyresaxelmaster($data);
	
}

function edit_tyresaxelmaster(){
	$arg=$_REQUEST["id"];
	$data = array( "AxelCode" => $_REQUEST["AxelCode"],"AxelDescription" => $_REQUEST["AxelDescription"]
			   );
	$this->model->edit_tyresaxelmaster($data,$arg);
}

function tyremodelmaster(){
        	
       
	$this->view->render("master/tyremodelmaster",true);
	
}

function getalltyremodelmaster(){
 $this->view->alltyremodelmaster = $this->model->tyremodelmaster();
	echo json_encode($this->view->alltyremodelmaster);
}

function view_tyremodelmaster() 
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
			$this->view->content= $this->model->view_tyremodelmaster($data["id"]);
}
	echo json_encode($this->view->content);
}

function delete_tyremodelmaster(){
	$id=$_REQUEST["id"];
	$this->model->delete_tyremodelmaster($id);
	
}

function add_tyremodelmaster(){
	$data = array( 
				"id" => null, "ModelCode" => $_REQUEST["ModelCode"],"TyreModel" => $_REQUEST["TyreModel"]
			   );
	$this->model->add_tyremodelmaster($data);
	
}

function edit_tyremodelmaster(){
	$arg=$_REQUEST["id"];
	$data = array( "ModelCode" => $_REQUEST["ModelCode"],"TyreModel" => $_REQUEST["TyreModel"]
			   );
	$this->model->edit_tyremodelmaster($data,$arg);
}
    
    function dieselratemaster(){
        	
       
	$this->view->render("master/dieselratemaster",true);
	
}

function getalldieselratemaster(){
 $this->view->alldieselratemaster = $this->model->dieselratemaster();
	echo json_encode($this->view->alldieselratemaster);
}

function view_dieselratemaster() 
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
			$this->view->content= $this->model->view_dieselratemaster($data["id"]);
}
	echo json_encode($this->view->content);
}

function delete_dieselratemaster(){
	$id=$_REQUEST["id"];
	$this->model->delete_dieselratemaster($id);
	
}

function add_dieselratemaster(){
	$data = array( 
				"id" => null, "DRMNO" => $_REQUEST["DRMNO"],"ProductCode" => $_REQUEST["ProductCode"],"ProductName" => $_REQUEST["ProductName"],"FuelParty" => $_REQUEST["FuelParty"],"FuelStation" => $_REQUEST["FuelStation"],"DieselRate" => $_REQUEST["DieselRate"]
			   );
	$this->model->add_dieselratemaster($data);
	
}

function edit_dieselratemaster(){
	$arg=$_REQUEST["id"];
	$data = array( "DRMNO" => $_REQUEST["DRMNO"],"ProductCode" => $_REQUEST["ProductCode"],"ProductName" => $_REQUEST["ProductName"],"FuelParty" => $_REQUEST["FuelParty"],"FuelStation" => $_REQUEST["FuelStation"],"DieselRate" => $_REQUEST["DieselRate"]
			   );
	$this->model->edit_dieselratemaster($data,$arg);
}


}
	
