<?php
class Employee extends Controller {
	function __construct() {
		parent::__construct();
		Session::init();
	}
	
	function index(){
		$this->view->Allemployee = $this->model->getAllemployee();
		$this->view->render('employee/index');
	}
	function getemployee(){
		$this->view->Allemployee = $this->model->getAllemployee();
		echo json_encode($this->view->Allemployee);
	}
    
    
    function submit_employee(){
		
		$date_time=date('YmdHis');
        $admin_id=Session::get('admin_id');
        if($admin_id==""){
            
            $admin_id=$_REQUEST['admin_id'];
        }
		//$arg=$_REQUEST['id'];
		$data = array(
						'id' =>null,
						'name' =>$_REQUEST['name'],
						'fathername' =>$_REQUEST['fathername'],
						'address' =>$_REQUEST['address'],
						'city' =>$_REQUEST['city'],
						'state' =>$_REQUEST['state'],
                        'panno' =>$_REQUEST['panno'],
                        'aadhaarno' =>$_REQUEST['aadhaarno'],
						//'aadhaarno' => $result2,
						//'photo' => $result3,
						'phoneno' =>$_REQUEST['phoneno'],
						'dob' =>$_REQUEST['dob'],
						'dateofjoining' =>$_REQUEST['dateofjoining'],
						'posting' => $_REQUEST['posting'],
						'designation' => $_REQUEST['designation'],
						'bloodgroup' => $_REQUEST['bloodgroup'],
						'salary' => $_REQUEST['salary'],
						'admin_id' => $admin_id
					);
		//print_r($data);
		$lastid=$this->model->submit_employee($data);
		$arg=$lastid;
	
	$target3='public/images/employee/photo';	
	 // array of valid extensions
    $validExtensions = array('.jpg', '.jpeg', '.gif', '.png');
    // get extension of the uploaded file
    $fileExtension = strrchr($_FILES['photo']['name'], ".");
    // check if file Extension is on the list of allowed ones
    if (in_array($fileExtension, $validExtensions)) {
		$tmp_name = $_FILES["photo"]["tmp_name"];
 		$name = $date_time.$_FILES["photo"]["name"];
			move_uploaded_file($tmp_name, "$target3/$name");
			$result3=$name;
			$getAttach1 = array(
				'photo' => $result3
			);
			//print_r($getAttach1);
			$this->model->submit_uploadfiles($getAttach1,$arg);
	}
		
		}
    
    
    function update_employee(){
    $arg=$_REQUEST['id'];
		$data = array(
						'name' =>$_REQUEST['name'],
						'fathername' =>$_REQUEST['fathername'],
						'address' =>$_REQUEST['address'],
						'city' =>$_REQUEST['city'],
						'state' =>$_REQUEST['state'],
                        'panno' =>$_REQUEST['panno'],
                        'aadhaarno' =>$_REQUEST['aadhaarno'],
						'phoneno' =>$_REQUEST['phoneno'],
						'dob' =>$_REQUEST['dob'],
						'dateofjoining' =>$_REQUEST['dateofjoining'],
						'posting' => $_REQUEST['posting'],
						'designation' => $_REQUEST['designation'],
						'bloodgroup' => $_REQUEST['bloodgroup'],
						'salary' => $_REQUEST['salary']
						//'admin_id' => Session::get('admin_id')
			);
			
			$this->model->update_employee($data,$arg);
		  echo "info updated";
			$target3='public/images/employee/photo';	
	 // array of valid extensions
    $validExtensions = array('.jpg', '.jpeg', '.gif', '.png');
	// get extension of the uploaded file
	//print_r($_POST);
    $fileExtension = strrchr($_FILES['photo']['name'], ".");
	// check if file Extension is on the list of allowed ones
	//echo $fileExtension;

    if (in_array($fileExtension, $validExtensions)) {
		$tmp_name = $_FILES["photo"]["tmp_name"];
		 $name = $date_time.$_FILES["photo"]["name"];
		 echo $name;
			move_uploaded_file($tmp_name, "$target3/$name");
			$result3=$name;
			$getAttach1 = array(
				'photo' => $result3
			);
		//	print_r($getAttach1);
			$this->model->submit_uploadfiles($getAttach1,$arg);
	      }
		}
			
		//header('location: index');
	function view_employee_details(){
        $data = $_REQUEST;
		if($data['id']=='')
		    {
				$this->view->pick='';
				$this->view->data=$data;
			} 
		else 
			{
				$this->view->pick=$data['id'];
				$this->view->content= $this->model->getOneEmployee($data['id']);
				//print_r($this->view->content);
			}
        echo json_encode($this->view->content);
    }
    
    function delete_employee_details($id) 
		{
		//Auth::handleLogin();
			$this->model->delete_employee($id);
			//header('location: ../index');
		}
    
    
	function edit_employee() 
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
				$this->view->content= $this->model->getOneEmployee($data['id']);
				//print_r($this->view->content);
			}
	$this->view->render('employee/edit_employee');
	}
	
	function view_employee() 
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
				$this->view->content= $this->model->getOneEmployee($data['id']);
				//print_r($this->view->content);
			}
	$this->view->render('employee/view_employee');
	}
	
	function edit_submit_employee(){
		$action=$_POST['submit']; 
		//echo '$action';
		$date_time=date('YmdHis');
		if ($action=='submit')
		{
			
		$arg=$_POST['id'];
		$data = array(
						'id' =>null,
						'name' =>$_POST['name'],
						'fathername' =>$_POST['fathername'],
						'address' =>$_POST['address'],
						'city' =>$_POST['city'],
						'state' =>$_POST['state'],
						//'aadhaarno' => $result2,
						//'photo' => $result3,
						'phoneno' =>$_POST['phoneno'],
						'dob' =>$_POST['dob'],
						'dateofjoining' =>$_POST['dateofjoining'],
						'posting' => $_POST['posting'],
						'designation' => $_POST['designation'],
						'bloodgroup' => $_POST['bloodgroup'],
						'salary' => $_POST['salary'],
						'admin_id' => Session::get('admin_id')
					);
		//print_r($data);
		$lastid=$this->model->submit_employee($data);
		$arg=$lastid;
	//	echo $arg;
		// $target1='public/images/employee/pan';	
	 	// // array of valid extensions
    	// $validExtensions = array('.jpg', '.jpeg', '.gif', '.png');
    	// // get extension of the uploaded file
    	// $fileExtension = strrchr($_FILES['panno']['name'], ".");
    	// // check if file Extension is on the list of allowed ones
    	// if (in_array($fileExtension, $validExtensions)) {
		// $tmp_name = $_FILES["panno"]["tmp_name"];
 		// $name = $date_time.$_FILES["panno"]["name"];
		// 	move_uploaded_file($tmp_name, "$target1/$name");
		// 	$result=$target1.$name;
		// 	//echo $result;
		// 	$arg=$lastid;
		// 	$getAttach1 = array(
		// 					'panno' => $result
		// 				  );
		// 	//print_r($getAttach1);
		// 	$this->model->submit_uploadfiles($getAttach1,$arg);
		// }
	
	/*$target2='public/images/employee/aadhaar';	
	 // array of valid extensions
    $validExtensions = array('.jpg', '.jpeg', '.gif', '.png');
    // get extension of the uploaded file
    $fileExtension = strrchr($_FILES['aadhaarno']['name'], ".");
    // check if file Extension is on the list of allowed ones
    if (in_array($fileExtension, $validExtensions)) {
		$tmp_name = $_FILES["aadhaarno"]["tmp_name"];
 		$name = $date_time.$_FILES["aadhaarno"]["name"];
			move_uploaded_file($tmp_name, "$target2/$name");
			$result2=$target1.$name;
			$getAttach1 = array(
				'aadhaarno' => $result2
			);
			print_r($getAttach1);
			$this->model->submit_uploadfiles($getAttach1,$arg);
	}
	*/
	$target3='public/images/employee/photo';	
	 // array of valid extensions
    $validExtensions = array('.jpg', '.jpeg', '.gif', '.png');
    // get extension of the uploaded file
    $fileExtension = strrchr($_FILES['photo']['name'], ".");
    // check if file Extension is on the list of allowed ones
    if (in_array($fileExtension, $validExtensions)) {
		$tmp_name = $_FILES["photo"]["tmp_name"];
 		$name = $date_time.$_FILES["photo"]["name"];
			move_uploaded_file($tmp_name, "$target3/$name");
			$result3=$name;
			$getAttach1 = array(
				'photo' => $result3
			);
			//print_r($getAttach1);
			$this->model->submit_uploadfiles($getAttach1,$arg);
	}
		
		}
		else
		{
		$arg=$_POST['id'];
		$data = array(
						'name' =>$_POST['name'],
						'fathername' =>$_POST['fathername'],
						'address' =>$_POST['address'],
						'city' =>$_POST['city'],
						'state' =>$_POST['state'],
						'phoneno' =>$_POST['phoneno'],
						'dob' =>$_POST['dob'],
						'dateofjoining' =>$_POST['dateofjoining'],
						'panno' => $_POST['panno'],
						'designation' => $_POST['designation'],
						'posting' => $_POST['posting'],
						'aadhaarno' => $_POST['aadhaarno'],
						'bloodgroup' => $_POST['bloodgroup'],
						'salary' => $_POST['salary'],
						'admin_id' => Session::get('admin_id')
			);
			
			$this->model->update_employee($data,$arg);
		  echo "info updated";
			$target3='public/images/employee/photo';	
	 // array of valid extensions
    $validExtensions = array('.jpg', '.jpeg', '.gif', '.png');
	// get extension of the uploaded file
	//print_r($_POST);
    $fileExtension = strrchr($_FILES['photo']['name'], ".");
	// check if file Extension is on the list of allowed ones
	//echo $fileExtension;

    if (in_array($fileExtension, $validExtensions)) {
		$tmp_name = $_FILES["photo"]["tmp_name"];
		 $name = $date_time.$_FILES["photo"]["name"];
		 echo $name;
			move_uploaded_file($tmp_name, "$target3/$name");
			$result3=$name;
			$getAttach1 = array(
				'photo' => $result3
			);
		//	print_r($getAttach1);
			$this->model->submit_uploadfiles($getAttach1,$arg);
	      }
		}
			
		header('location: index');
	}
	
	function delete_employee($id) 
		{
		//Auth::handleLogin();
			$this->model->delete_employee($id);
			header('location: ../index');
		}
		function printem(){
			$this->view->id=$_REQUEST['id'];
			$this->view->txt=$_REQUEST['txt'];
		//	echo "test";
			$this->view->render('employee/print_em',true);
		}
		function employeeqr() 
		{

		 $this->view->getEmployee = $this->model->getAllemployee();
		 $this->view->render('employee/employeeqr',true);
		}

		function getEmployeeAttendance(){
			$date=$_REQUEST['datetime'];
				header('Content-type: application/json');
			$attendance=$this->model->getEmployeeAttendance($date);
			echo json_encode($attendance);
			
		}
   function getEmployeeAttendancedate{
       $to=$_REQUEST['to'];
       $from=$_REQUEST['from'];
		header('Content-type: application/json');
			$attendance=$this->model->getEmployeeAttendancedate($from,$to);
			echo json_encode($attendance);
       
   }
		function getEmployeeAttendanceToday(){
			$date=date('Y-m-d');
				header('Content-type: application/json');
			$attendance=$this->model->getEmployeeAttendance($date);
			echo json_encode($attendance);
			
		}
		function getEmployeeAttendanceYesterday(){
			
			$date=date('Y-m-d');
				$datem = strtotime($date);
				$datem = strtotime("-1 day", $datem);
				$datey= date('Y-m-d', $datem);
				header('Content-type: application/json');
			$attendance=$this->model->getEmployeeAttendance($datey);
			echo json_encode($attendance);
			
		}
		function CheckEmployeeAttendance(){
			header('Content-type: application/json');
			$date = date('Y-m-d');
			$employeeID = $_REQUEST['employeeID'];
			$ChkEmployee = $this->model->CheckEmployeeAttendance($date,$employeeID);
		   echo json_encode($ChkEmployee);
		}
		function submit_employee_attendance(){
			
	
			$data = array(
							'id' =>null,
							'employeeID' =>$_REQUEST['employeeID'],
							'datetime' =>date("Y-m-d H:i:s"),
							'location' =>$_REQUEST['location'],
							'userID' =>$_REQUEST['userID']	
							
						);
						

			//print_r($data);
			$this->model->submit_employee_attendance($data);
			$emp= $this->model->getOneEmployee($data['id']);
			$title =  "ATTENDANCE ALERT";
				$time = date("H:i:s d/m/Y");
				$message= "Employee ".$emp[0]['VehicleNo']. " Loaded from ".$LL. " to ".$UL." with Driver : ".$driver_name." at Time : ".$challandate." ".date("H:i:s");
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
			echo "Success";
		}
		

		function printIDCard(){
			// echo "ddd";
			Session::init();
			Auth::handleLogin();
			$content= $this->model->getOneEmployee($_GET['id']);
			$company= Session::get('companyShortCode');
			$id = $_GET['id'];
			$obj=json_decode($content[0]['attributes']);
		  $name=strtoupper($content[0]['name']);
		  $designation=strtoupper($content[0]['designation']);
		  $phoneno= strtoupper($content[0]['phoneno']);
		  $bloodgroup=strtoupper($content[0]['bloodgroup']);
		  $photo = $content[0]['photo'];
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
			  
			  $filename = 'public/print/employee'.$company.'.png';
			  $URL = "https://chart.googleapis.com/chart?chs=100x100&cht=qr&chl=EM:".urlencode($name).":$id&choe=UTF-8%20align%20=%27center%27";
			  $srcimage = imagecreatefrompng($filename);
			  $imgContents = file_get_contents($URL);
			  $srcQR = imagecreatefromstring($imgContents);

			  $empPh = 'public/images/employee/photo/'.$photo;
			  $EMimage = imagecreatefromjpeg($empPh);
			  list($width, $height) = getimagesize($empPh);
			  //include('php-barcode.php');
			  //$font     = 'arial.ttf';
			  // - -
			  $EMimage = imagerotate($EMimage, 270, $white);
			  $srcQR = imagerotate($srcQR, 270, $white);
			  //$im = imagerotate($im, 270, $white);
			  imagecopyresampled($image, $srcimage, 407, 835, 0, 0, 941, 638, 941, 638);
			  //imagecopyresampled($image, $srcimage, 407, 107, 0, 0, 941, 638, 941, 638);
			  imagecopyresampled($image, $EMimage, (407+352), (136+840), 0, 0, 371, 371, $width, $height);

			  imagecopyresampled($image, $srcQR, (407+102), (136+1113), 0, 0, 100, 100, 100, 100);


			 // imagettftext_cr($image,80,270,(407+820),(835+54+90),$black,"public/print/impact.ttf",$VehicleNo);
			  imagettftext_cr($image,24,270,(407+292),(835+100+28),$black,"public/print/ArialNarrowBold.ttf",$name);
			  imagettftext_cr($image,24,270,(407+232),(835+170+40),$black,"public/print/ArialNarrowBold.ttf",$designation);
			  imagettftext_cr($image,24,270,(407+172),(835+100+45),$black,"public/print/ArialNarrowBold.ttf",$phoneno);
			  imagettftext_cr($image,24,270,(407+112),(835+170+58),$black,"public/print/ArialNarrowBold.ttf",$bloodgroup);
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


	}
