<?php

class Master_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
		 Session::init();
		   //	Auth::handleLogin();
	}
// Vehicle masterdevices
	public function getAllexpensereport($vehicleno,$category,$date)
	{
		$admin_id=Session::get('admin_id');
		//echo "SELECT * FROM `expenselog` WHERE VehicleNo='".$vehicleno."' AND category='".$category."' AND date='".$date."' AND admin_id='".$admin_id."'";
		return $this->db->select("SELECT * FROM `expenselog` WHERE VehicleNo='".$vehicleno."' AND category='".$category."' AND date='".$date."' AND admin_id='".$admin_id."'");
	}
    
    public function getAllVehicleType($deviceid){
        
        return $this->db->select("SELECT VehicleType FROM `vehiclemaster` WHERE SensorSerial = '".$deviceid."'");
    }
    
    public function getAllemployee()
	{
		//$userID=Session::get('traccarID');
		return $this->db->select("SELECT * from employee ORDER BY name");
	}
    public function getEmployeeAttendancedate($from,$to){
        
        return $this->db->select("SELECT * FROM `employee_attendance` where DATE(datetime) BETWEEN '".$from."' AND '".$to."'");
    }

	public function getAllDevices()
	{
		$x=Session::get('traccarID');
        if($x==""){
            
            $x=$_REQUEST['traccarID'];
        }

		return $this->db->select("SELECT * FROM `devices` WHERE id IN (SELECT deviceid FROM user_device WHERE userid=".$x." OR userid=139) ORDER BY name");
	}
	
	public function getAllusers()
	{
		$y=Session::get('admin_id');
		if($y==''){
			$y=$_REQUEST['admin_id'];
		}
		return $this->db->select("SELECT * FROM `admin` where userType='user' AND (parent_id = ".$y." OR parent_id='55') ");
		
	}
//    public function getAllDevicesVehicle()
//	{
//		$x=Session::get('traccarID');
//        if($x==""){
//            
//            $x=$_REQUEST['traccarID'];
//        }
//
//		return $this->db->select("SELECT a.*, b.* FROM `vehiclemaster` a , devices b WHERE a.SensorSerial = b.id ORDER BY a.VehicleNo");
//	}
    public function getAllgroups()
	{
        
		$userid=Session::get('traccarID');
        if($userid==""){
            
            $userid=$_REQUEST['traccarID'];
        }
		return $this->db->select("SELECT * FROM `groups` WHERE id IN (SELECT groupid FROM user_group WHERE userid=".$userid.")  ORDER BY name");
	}
	public function getAllVehicles()
	{
		if(Session::get('userType') == "user"){
			$a=Session::get('parent_id');
		}
		else{
			$a=Session::get('admin_id');
		}
		$x=Session::get('traccarID');
        if($x == ""){
			 $x= $_REQUEST['traccarID'];
            $a= $_REQUEST['admin_id'];
          //  $a= $_REQUEST['admin_id'];
			 //Session::set('traccarID')=$userID;
			 }
	   // $x=$_REQUEST['traccarID'];
	   // AND admin_id = ".$a."
		return $this->db->select("SELECT a.* , b.name FROM `vehiclemaster` a , `devices` b  where (a.SensorSerial in(SELECT deviceid FROM user_device WHERE userid=".$x.")) AND a.SensorSerial=b.id");
		//return $this->db->select("SELECT * FROM `vehiclemaster`");
	}

	public function getAllVehiclesjson($userType,$parent_id,$admin_id,$traccarID)
	{
		if($userType == "user"){
			$a=$parent_id;
		}
		else{
			$a=$admin_id;
		}
		$x=$traccarID;
	//	echo "SELECT a.* , b.name FROM `vehiclemaster` a , `devices` b  where (a.SensorSerial in(SELECT deviceid FROM user_device WHERE userid=".$x.") OR admin_id = ".$a.") AND a.SensorSerial=b.id";
		return $this->db->select("SELECT a.* , b.name FROM `vehiclemaster` a , `devices` b  where (a.SensorSerial in(SELECT deviceid FROM user_device WHERE userid=".$x.") OR admin_id = ".$a.") AND a.SensorSerial=b.id");
		//return $this->db->select("SELECT * FROM `vehiclemaster`");
	}


	public function getAllVehiclesNew()
	{
		if(Session::get('userType') == "user"){
			$a=Session::get('parent_id');
		}
		else{
			$a=Session::get('admin_id');
		}
		$x=Session::get('traccarID');
		return $this->db->select("SELECT a.* , b.name FROM `vehiclemaster` a , `devices` b  where (a.SensorSerial in(SELECT deviceid FROM user_device WHERE userid=".$x.") OR admin_id = ".$a.") AND a.SensorSerial=b.id");
		//return $this->db->select("SELECT * FROM `vehiclemaster`");
	}

/*
public function getAllVehicles()
	{
		//$a=Session::get('parent_id');
		if(Session::get('userType') == "user"){
			$a=Session::get('parent_id');
		}
		else{
			$a=Session::get('admin_id');
		}
		
		return $this->db->select("SELECT * FROM `vehiclemaster` where admin_id = ".$a." ORDER BY id DESC");
		//return $this->db->select("SELECT * FROM `vehiclemaster`");
	}
 public function driverPerfrormance($date)
	{
		return $this->db->select("select cast(`ktcchallan`.`datetime_out` as date) AS `datetime_out`,'BPSL' AS `SITE`,`ktcchallan`.`vehicle_no` AS `vehicle_no`,`ktcchallan`.`driver_name` AS `driver_name`,count(0) AS `Trips`, (SUM(`ktcchallan`.`netweight`)/1000) AS 'TQTY' from `ktcchallan` where ((date_format(cast(`ktcchallan`.`datetime_out` as date),'%Y-%m') = ".$date.") and (`ktcchallan`.`status` <> 'CANCEL') ) group by `ktcchallan`.`driver_name` ORDER BY `Trips`  DESC");
	}
*/
    public function driverPerfrormance($date)
	{
	echo "select 'BPSL' AS `SITE`,`ktcchallan`.`vehicle_no` AS `vehicle_no`,UPPER(`ktcchallan`.`driver_name`) AS `driver_name`,count(`ktcchallan`.`driver_name`) AS `Trips`,COUNT(DISTINCT(cast(`ktcchallan`.`datetime_out` as date))) as Attendance ,ROUND((SUM(`ktcchallan`.`netweight`)),2) AS 'TQTY' from `ktcchallan` where ((date_format(cast(`ktcchallan`.`datetime_out` as date),'%Y-%m') = ".$date.") and (`ktcchallan`.`status` <> 'CANCEL') ) group by 3 UNION ALL select 'VAL' AS `SITE`,`challan`.`vehicle_no` AS `vehicle_no`,UPPER(`challan`.`driver_name`) AS `driver_name`,count(0) AS `Trips`,COUNT(DISTINCT(cast(`challan`.`datetime_out` as date))) as Attendance, ROUND((SUM(`challan`.`netweight`)/1000),2)  AS 'TQTY' from `challan` where ((date_format(cast(`challan`.`datetime_out` as date),'%Y-%m') = ".$date.") and (`challan`.`status` <> 'CANCEL') and (`challan`.`vendorCode` = '206243'))group by 3 ORDER BY 4  DESC";
	return $this->db->select("select 'BPSL' AS `SITE`,`ktcchallan`.`vehicle_no` AS `vehicle_no`,UPPER(`ktcchallan`.`driver_name`) AS `driver_name`,count(`ktcchallan`.`driver_name`) AS `Trips`,COUNT(DISTINCT(cast(`ktcchallan`.`datetime_out` as date))) as Attendance ,ROUND((SUM(`ktcchallan`.`netweight`)),2) AS 'TQTY' from `ktcchallan` where ((date_format(cast(`ktcchallan`.`datetime_out` as date),'%Y-%m') = ".$date.") and (`ktcchallan`.`status` <> 'CANCEL') ) group by 3 UNION ALL select 'VAL' AS `SITE`,`challan`.`vehicle_no` AS `vehicle_no`,UPPER(`challan`.`driver_name`) AS `driver_name`,count(0) AS `Trips`,COUNT(DISTINCT(cast(`challan`.`datetime_out` as date))) as Attendance, ROUND((SUM(`challan`.`netweight`)/1000),2)  AS 'TQTY' from `challan` where ((date_format(cast(`challan`.`datetime_out` as date),'%Y-%m') = ".$date.") and (`challan`.`status` <> 'CANCEL') and (`challan`.`vendorCode` = '206243'))group by 3 ORDER BY 4  DESC");
	}
    
     public function vehiclePerfrormance_old($date)
	{
	//echo "select 'BPSL' AS `SITE`,`ktcchallan`.`vehicle_no` AS `vehicle_no`,UPPER(`ktcchallan`.`driver_name`) AS `driver_name`,count(`ktcchallan`.`driver_name`) AS `Trips`,COUNT(DISTINCT(cast(`ktcchallan`.`datetime_out` as date))) as Attendance ,ROUND((SUM(`ktcchallan`.`netweight`)),2) AS 'TQTY' from `ktcchallan` where ((date_format(cast(`ktcchallan`.`datetime_out` as date),'%Y-%m') = ".$date.") and (`ktcchallan`.`status` <> 'CANCEL') ) group by 3 UNION ALL select 'VAL' AS `SITE`,`challan`.`vehicle_no` AS `vehicle_no`,UPPER(`challan`.`driver_name`) AS `driver_name`,count(0) AS `Trips`,COUNT(DISTINCT(cast(`challan`.`datetime_out` as date))) as Attendance, ROUND((SUM(`challan`.`netweight`)/1000),2)  AS 'TQTY' from `challan` where ((date_format(cast(`challan`.`datetime_out` as date),'%Y-%m') = ".$date.") and (`challan`.`status` <> 'CANCEL') and (`challan`.`vendorCode` = '206243'))group by 3 ORDER BY 4  DESC";
	return $this->db->select("select 'BPSL' AS `SITE`,`ktcchallan`.`deviceid` AS `deviceid`,`ktcchallan`.`vehicle_no` AS `vehicle_no`,count(`ktcchallan`.`vehicle_no`) AS `Trips` ,ROUND((SUM(`ktcchallan`.`netweight`)),2) AS 'TQTY' from `ktcchallan` where ((date_format(cast(`ktcchallan`.`datetime_out` as date),'%Y-%m') = ".$date.") and (`ktcchallan`.`status` <> 'CANCEL') ) group by 1 UNION ALL select 'VAL' AS `SITE`,`challan`.`deviceid` AS `deviceid`,`challan`.`vehicle_no` AS `vehicle_no`,count(0) AS `Trips`,ROUND((SUM(`challan`.`netweight`)/1000),2)  AS 'TQTY' from `challan` where ((date_format(cast(`challan`.`datetime_out` as date),'%Y-%m') = ".$date.") and (`challan`.`status` <> 'CANCEL') and (`challan`.`vendorCode` = '206243'))group by 2 ORDER BY 3  DESC");
	}
    
    public function vehiclePerfrormance($date,$month,$year)
	{
	echo "select 'BPSL' AS `SITE`,`a`.`deviceid` AS `deviceid`,`a`.`vehicle_no` AS `vehicle_no`,count(`a`.`vehicle_no`) AS `Trips` ,ROUND((SUM(`a`.`netweight`)),2) AS 'TQTY',`b`.`rate` AS `Rate`,(ROUND((SUM(`a`.`netweight`)) * `b`.`rate`,2)) AS `Income` from `ktcchallan` a ,`freightrate` b where ((date_format(cast(`a`.`datetime_out` as date),'%Y-%m') = ".$date.") and (`a`.`status` <> 'CANCEL') AND b.routename='BPSL' AND b.month=".$month." AND b.year = ".$year.") group by 2  UNION ALL select 'VAL' AS `SITE`,`a`.`deviceid` AS `deviceid`,`a`.`vehicle_no` AS `vehicle_no`,count(0) AS `Trips`,ROUND((SUM(`a`.`netweight`)/1000),2)  AS 'TQTY',`b`.`rate` AS `Rate`,(ROUND((SUM(`a`.`netweight`)/1000) * `b`.`rate`,2)) AS `Income` from `challan` a ,`freightrate` b where ((date_format(cast(`a`.`datetime_out` as date),'%Y-%m') = ".$date.") and (`a`.`status` <> 'CANCEL') and (`a`.`vendorCode` = '206243') AND b.routename='VAL' AND b.month=".$month." AND b.year = ".$year.") group by 2  ORDER BY `TQTY`  DESC";
	return $this->db->select("select 'BPSL' AS `SITE`,`a`.`deviceid` AS `deviceid`,`a`.`vehicle_no` AS `vehicle_no`,count(`a`.`vehicle_no`) AS `Trips` ,ROUND((SUM(`a`.`netweight`)),2) AS 'TQTY',`b`.`rate` AS `Rate`,(ROUND((SUM(`a`.`netweight`)) * `b`.`rate`,2)) AS `Income` from `ktcchallan` a ,`freightrate` b where ((date_format(cast(`a`.`datetime_out` as date),'%Y-%m') = ".$date.") and (`a`.`status` <> 'CANCEL') AND b.routename='BPSL' AND b.month=".$month." AND b.year = ".$year.") group by 2  UNION ALL select 'VAL' AS `SITE`,`a`.`deviceid` AS `deviceid`,`a`.`vehicle_no` AS `vehicle_no`,count(0) AS `Trips`,ROUND((SUM(`a`.`netweight`)/1000),2)  AS 'TQTY',`b`.`rate` AS `Rate`,(ROUND((SUM(`a`.`netweight`)/1000) * `b`.`rate`,2)) AS `Income` from `challan` a ,`freightrate` b where ((date_format(cast(`a`.`datetime_out` as date),'%Y-%m') = ".$date.") and (`a`.`status` <> 'CANCEL') and (`a`.`vendorCode` = '206243') AND b.routename='VAL' AND b.month=".$month." AND b.year = ".$year.") group by 2  ORDER BY `TQTY`  DESC");
	}
    
  //////////////////////////////////////// freight rate master model starts ///////////////////////////  
    
public function freightratemaster()
{

   return $this->db->select("SELECT * FROM freightrate ");
	
   
}
public function view_freightratemaster($id){
	
	return $this->db->select("SELECT * FROM freightrate WHERE id=".$id." LIMIT 1");
}

public function delete_freightratemaster($id)   
{
	$this->db->delete('freightrate', "`id` = {$id}");
	//echo "delete $id";
}

public function add_freightratemaster($data){
	
	$this->db->insert('freightrate', $data);
}

public function edit_freightratemaster($data,$arg){
	$this->db->update('freightrate', $data,
			"`id` = $arg");
	
}

//////////////////////////////////////// freight rate master model end ////////////////
    
     public function driverPerfrormance_old($date)
	{
	//echo "select cast(`ktcchallan`.`datetime_out` as date) AS `DATE(datetime_out)`,`ktcchallan`.`vehicle_no` AS `vehicle_no`,`ktcchallan`.`driver_name` AS `driver_name`,count(0) AS `Trips`,(SUM(`ktcchallan`.`netweight`)/1000) from `ktcchallan` WHERE (date_format(cast(`ktcchallan`.`datetime_out` as date),'%Y-%m')) = ".$date."  group by `ktcchallan`.`driver_name` ORDER BY `Trips`  DESC";
		return $this->db->select("select cast(`ktcchallan`.`datetime_out` as date) AS `DATE(datetime_out)`,`ktcchallan`.`vehicle_no` AS `vehicle_no`,`ktcchallan`.`driver_name` AS `driver_name`,count(0) AS `Trips`,(SUM(`ktcchallan`.`netweight`)/1000) from `ktcchallan` WHERE (date_format(cast(`ktcchallan`.`datetime_out` as date),'%Y-%m')) = ".$date."  group by `ktcchallan`.`driver_name` ORDER BY `Trips`  DESC");
	}
     public function driverPerfrormanceVAL($date)
	{
	echo "select cast(`challan`.`datetime_out` as date) AS `datetime_out`,'VAL' AS `SITE`,`challan`.`vehicle_no` AS `vehicle_no`,`challan`.`driver_name` AS `driver_name`,count(0) AS `Trips`, (SUM(`challan`.`netweight`)/1000)  AS 'TQTY' from `challan` where ((date_format(cast(`challan`.`datetime_out` as date),'%Y-%m') = ".$date.") and (`challan`.`status` <> 'CANCEL') and (`challan`.`vendorCode` = '206243')) group by `challan`.`driverid` ORDER BY `Trips`  DESC";
		return $this->db->select("select cast(`challan`.`datetime_out` as date) AS `datetime_out`,'VAL' AS `SITE`,`challan`.`vehicle_no` AS `vehicle_no`,`challan`.`driver_name` AS `driver_name`,count(0) AS `Trips`, (SUM(`challan`.`netweight`)/1000)  AS 'TQTY' from `challan` where ((date_format(cast(`challan`.`datetime_out` as date),'%Y-%m') = ".$date.") and (`challan`.`status` <> 'CANCEL') and (`challan`.`vendorCode` = '206243')) group by `challan`.`driverid` ORDER BY `Trips`  DESC");
	}

	public function getAllimie($VehicleNo)
	{
		return $this->db->select("SELECT a . uniqueid , a.`phone` FROM `devices` a, `vehiclemaster` b WHERE a.name=".$VehicleNo."");
	}
	//SELECT a . uniqueid , a.`latitude` FROM `devices` a, `vehiclemaster` b WHERE b.ShortVehNo = a.name


	
	/*public function getAllVehicles()
	{
		return $this->db->select("SELECT * FROM `vehiclemaster` WHERE id IN (SELECT id FROM users WHERE userid=Session::get('admin_id')) ORDER BY name");
	}*/
	 public function viewOneexpense($id)
	{
		return $this->db->select("SELECT * FROM `expenselog` WHERE id='".$id."' LIMIT 1");
	}
	
	public function getOneVehicle($id)
	{
		return $this->db->select("SELECT * FROM `vehiclemaster` WHERE id='".$id."' LIMIT 1");
	}
	public function viewOneVehicle($id)
	{
		return $this->db->select("SELECT a.*,b.* FROM `vehiclemaster` a, devices b WHERE a.id='".$id."' AND a.SensorSerial = b.id");
	}
	public function viewOneVehicleFitness($VehicleNo)
	{
		return $this->db->select("SELECT * FROM `vehiclefitness` WHERE VehicleNo='".$VehicleNo."'");
	}
	public function viewOneVehicleInsurance($VehicleNo)
	{
		return $this->db->select("SELECT * FROM `vehicleinsurance` WHERE VehicleNo='".$VehicleNo."'");
	}
	public function viewOneVehiclePermit($VehicleNo)
	{
		return $this->db->select("SELECT * FROM `vehiclepermit` WHERE VehicleNo='".$VehicleNo."'");
	}
	public function viewOneVehicleRoadTax($VehicleNo)
	{
		return $this->db->select("SELECT * FROM `roadtax` WHERE VehicleNo='".$VehicleNo."'");
	}
	public function viewOneVehiclePollution($VehicleNo)
	{
		return $this->db->select("SELECT * FROM `pollution` WHERE VehicleNo='".$VehicleNo."'");
	}
	public function submit_vehiclemaster($data)
	{
		return $this->db->insert('vehiclemaster', $data);
	}
   
   
	public function edit_submit_vehiclemaster($data, $arg)
	{
		// print_r($data);
		// echo $arg;
		$this->db->update('vehiclemaster', $data, "`id` = $arg");
	}
	public function delete_vehiclemaster($id)   
	{
		$this->db->delete('vehiclemaster', "`id` = {$id}");
		//echo "delete $id";
	}
	public function prevvehicle($currentid)
	{
		return $this->db->select("SELECT * FROM vehiclemaster WHERE id < ".$currentid." ORDER BY id DESC LIMIT 1");
	}
	public function nextvehicle($currentid)
	{
	//echo "SELECT * FROM vehiclemaster WHERE id > ".$currentid." ORDER BY id DESC LIMIT 1";
	
		return $this->db->select("SELECT * FROM vehiclemaster WHERE id > ".$currentid." ORDER BY id  LIMIT 1");
	}
// Driver Master

	public function getAlldrivers($name)
	{
		
		return $this->db->select("SELECT * FROM `drivers` WHERE name LIKE '%".$name."%' ORDER BY id DESC");
	}
    
    public function getAlldriver()
	{
        $userID=Session::get('traccarID');
        if($userID == ""){
           $userID=$_REQUEST['traccarID']; 
            
        }
		
		return $this->db->select("SELECT * FROM `drivers` WHERE id IN (SELECT driverid FROM user_driver WHERE userid=".$userID.") ORDER BY name");
	}
    
    
public function getOnedriver($id)
	{
		return $this->db->select("SELECT * FROM `drivers` WHERE id='".$id."' LIMIT 1");
	}
public function viewOnedriver($id)
	{
		return $this->db->select("SELECT * FROM `drivermaster` WHERE id='".$id."'");
	}
	
public function submit_drivermaster($data)
	{
		$this->db->insert('drivermaster', $data);
	}
public function edit_submit_drivermaster($data,$arg)
	{
		//print_r($data);
		//echo $arg;
		$this->db->update('drivermaster', $data,
				"`id` = $arg");
	}
	public function delete_drivermaster($id)   
	{
		$this->db->delete('drivermaster', "`id` = {$id}");
		//echo "delete $id";
	}

//Customer Master
public function getAllCustomer()
	{
    
		$c=Session::get('admin_id');
    if($c==""){
        $c=$_REQUEST['admin_id'];
        
    }
		return $this->db->select("SELECT * FROM `customermaster` where admin_id = ".$c." ORDER BY id DESC");
	}
	public function getOneCustomer($id)
	{
		return $this->db->select("SELECT * FROM `customermaster ` WHERE id='".$id."' LIMIT 1");
	}
	public function viewOneCustomer($id)
	{
		return $this->db->select("SELECT * FROM `customermaster` WHERE id='".$id."'");
	}
public function submit_customermaster($data)
	{
		$this->db->insert('customermaster', $data);
	}
	public function edit_submit_customermaster($data,$arg)
	{
		//print_r($data);
		//echo $arg;
		$this->db->update('customermaster', $data,
				"`id` = $arg");
	}
	public function delete_customermaster($id)   
	{
		$this->db->delete('customermaster', "`id` = {$id}");
		//echo "delete $id";
	}
	
	//Expense Log
public function getAllexpense()
	{
		$c=Session::get('admin_id');
		return $this->db->select("SELECT * FROM `expenselog` where admin_id = ".$c." ORDER BY id DESC");
	}
public function submit_expenselog($data)
	{
		$this->db->insert('expenselog', $data);
	}
/*public function edit_submit_expenselog($data,$arg)
	{
		//print_r($data);
		//echo $arg;
		$this->db->update('expenselog', $data,
				"`id` = $arg");
	}
	public function delete_expenselog($id)   
	{
		$this->db->delete('expenselog', "`id` = {$id}");
		//echo "delete $id";
	}*/
	//Vehicle Insurance Registration
	
	public function getAllInsuranceDetails()
	{
		return $this->db->select("SELECT * FROM `vehicleinsurance` ORDER BY id DESC");
	}
	public function getOneInsurance($VehicleNo)
	{
		return $this->db->select("SELECT * FROM `vehicleinsurance` WHERE VehicleNo='".$VehicleNo."' LIMIT 1");
	}
	public function viewOneInsurance($id)
	{
		return $this->db->select("SELECT * FROM `vehicleinsurance` WHERE id='".$id."' LIMIT 1");
	}
	public function submit_vehicleinsurance($data)
	{
		//print_r($data);
		return $this->db->insert('vehicleinsurance', $data);
	}
	
	
	//model for update of vehicle insurance
	public function edit_submit_vehicleinsurance($data,$arg)
	{
		//print_r($data);
		//echo $arg;
		$this->db->update('vehicleinsurance', $data,
				"`id` = $arg");
	}
	
	public function delete_vehicleinsurance($id)   
	{
		$this->db->delete('vehicleinsurance', "`id` = {$id}");
		//echo "delete $id";
	}
	//model for submit of file upload
	public function submit_vehicleinsuranceFiles($getAttach)
	{
		print_r($getAttach);
		 $this->db->insert('fileupload_vehicleinsurance', $getAttach);
	}
	
	//Update the uploaded files
	public function edit_submit_vehicleinsuranceFiles($getAttach,$arg)
	{
		//print_r($data);
		//echo $arg;
		$this->db->update('fileupload_vehicleinsurance', $getAttach,
				"`insurance_id` = $arg");
	}
	//Delete for old files
	
	public function delete_vehicleinsurancefiles($id)   
	{
		$this->db->delete('fileupload_vehicleinsurance', "`insurance_id` = ".$id,25);
		//echo "delete $id";
	}
	//view uploaded file
	public function viewVehicleInsuranceFiles($insurance_id)
	{
		return $this->db->select("SELECT * FROM `fileupload_vehicleinsurance` WHERE insurance_id='".$insurance_id."'");
	}
	public function editVehicleInsuranceFiles($getAttach)
	{
		return $this->db->select("SELECT * FROM `fileupload_vehicleinsurance` WHERE insurance_id='".$getAttach."'");
	}
	//Vehicle Fitness Registration
	
	public function getAllFitnessRegistration()
	{
		return $this->db->select("SELECT * FROM `vehiclefitness`");
	}
	public function getOneFitness($VehicleNo)
	{
		return $this->db->select("SELECT * FROM `vehiclefitness` WHERE VehicleNo='".$VehicleNo."'");
	}
	public function viewOneFitness($id)
	{
		return $this->db->select("SELECT * FROM `vehiclefitness` WHERE id='".$id."'");
	}
	public function submit_vehiclefitness($data)
	{
		//print_r($data);
		$this->db->insert('vehiclefitness', $data);
	}
	public function edit_submit_vehiclefitness($data,$arg)
	{
		//print_r($data);
		//echo $arg;
		$this->db->update('vehiclefitness', $data,
				"`id` = $arg");
	}
	public function delete_vehiclefitness($id)   
	{
		$this->db->delete('vehiclefitness', "`id` = {$id}");
		//echo "delete $id";
	}
	//model for submit of file upload
	public function submit_vehiclefitnessFiles($getAttach)
	{
		//print_r($getAttach);
		 $this->db->insert('fileupload_vehiclefitness', $getAttach);
	}
	
	//Update the uploaded files
	public function edit_submit_vehiclefitnessFiles($getAttach,$arg)
	{
		//print_r($data);
		//echo $arg;
		$this->db->update('fileupload_vehiclefitness', $getAttach,
				"`fitness_id` = $arg");
	}
	//Delete for old files
	
	public function delete_vehiclefitnessfiles($id)   
	{
		$this->db->delete('fileupload_vehiclefitness', "`fitness_id` = ".$id,25);
		//echo "delete $id";
	}
	//view uploaded file
	public function viewVehicleFitnessFiles($fitness_id)
	{
		return $this->db->select("SELECT * FROM `fileupload_vehiclefitness` WHERE fitness_id='".$fitness_id."'");
	}
	public function editVehicleFitnessFiles($getAttach)
	{
		return $this->db->select("SELECT * FROM `fileupload_vehiclefitness` WHERE fitness_id='".$getAttach."'");
	}
	//vehicle Permit Registration
	
	public function getAllpermitRegistration()
	{
		return $this->db->select("SELECT * FROM `vehiclepermit`");
	}
	public function getOnepermit($VehicleNo)
	{
		return $this->db->select("SELECT * FROM `vehiclepermit` WHERE VehicleNo='".$VehicleNo."'");
	}
	public function viewOnepermit($id)
	{
		return $this->db->select("SELECT * FROM `vehiclepermit` WHERE id='".$id."'");
	}
	public function submit_vehiclepermit($data)
	{
		//print_r($data);
		$this->db->insert('vehiclepermit', $data);
	}
	public function edit_submit_vehiclepermit($data,$arg)
	{
		//print_r($data);
		//echo $arg;
		$this->db->update('vehiclepermit', $data,
				"`id` = $arg");
	}
	public function delete_vehiclepermit($id)   
	{
		$this->db->delete('vehiclepermit', "`id` = {$id}");
		//echo "delete $id";
	}
	//model for submit of file upload
	public function submit_vehiclepermitFiles($getAttach)
	{
		// print_r($getAttach);
		 $this->db->insert('fileupload_vehiclepermit', $getAttach);
	}
	
	//Update the uploaded files
	public function edit_submit_vehiclepermitFiles($getAttach,$arg)
	{
		//print_r($data);
		//echo $arg;
		$this->db->update('fileupload_vehiclepermit', $getAttach,
				"`permit_id` = $arg");
	}
	//Delete for old files
	
	public function delete_vehiclepermitfiles($id)   
	{
		$this->db->delete('fileupload_vehiclepermit', "`permit_id` = ".$id,25);
		//echo "delete $id";
	}
	//view uploaded file
	public function viewVehiclePermitFiles($permit_id)
	{
		return $this->db->select("SELECT * FROM `fileupload_vehiclepermit` WHERE permit_id='".$permit_id."'");
	}
	public function editVehiclePermitFiles($getAttach)
	{
		return $this->db->select("SELECT * FROM `fileupload_vehiclepermit` WHERE permit_id='".$getAttach."'");
	}
	//roadtax
	public function getAllRoadTax()
	{
		return $this->db->select("SELECT * FROM `roadtax`");
	}
	public function getOneRoadTax($VehicleNo)
	{
		return $this->db->select("SELECT * FROM `roadtax` WHERE VehicleNo='".$VehicleNo."'");
	}
	public function viewOneRoadTax($id)
	{
		return $this->db->select("SELECT * FROM `roadtax` WHERE id='".$id."'");
	}
	public function submit_roadtax($data)
	{
		//print_r($data);
		$this->db->insert('roadtax', $data);
	}
	public function edit_submit_roadtax($data,$arg)
	{
		//print_r($data);
		//echo $arg;
		$this->db->update('roadtax', $data,
				"`id` = $arg");
	}
	public function delete_roadtax($id)   
	{
		$this->db->delete('roadtax', "`id` = {$id}");
		//echo "delete $id";
	}
	public function submit_vehicleroadtaxFiles($getAttach)
	{
		//print_r($getAttach);
		 $this->db->insert('fileupload_roadtax', $getAttach);
	}
	
	//Update the uploaded files
	public function edit_submit_vehicleroadtaxFiles($getAttach,$arg)
	{
		//print_r($data);
		//echo $arg;
		$this->db->update('fileupload_roadtax', $getAttach,
				"`roadtax_id` = $arg");
	}
	//Delete for old files
	
	public function delete_vehicleroadtaxfiles($id)   
	{
		$this->db->delete('fileupload_roadtax', "`roadtax_id` = ".$id,25);
		//echo "delete $id";
	}
	//view uploaded file
	public function viewVehicleRoadtaxFiles($roadtax_id)
	{
		return $this->db->select("SELECT * FROM `fileupload_roadtax` WHERE roadtax_id='".$roadtax_id."'");
	}
	public function editVehicleRoadtaxFiles($getAttach)
	{
		return $this->db->select("SELECT * FROM `fileupload_roadtax` WHERE roadtax_id='".$getAttach."'");
	}
	
	//Model for pollution registration.
	
	public function getAllpollutionRegistration()
	{
		return $this->db->select("SELECT * FROM `pollution`");
	}
	public function getOnePollution($VehicleNo)
	{
		return $this->db->select("SELECT * FROM `pollution` WHERE VehicleNo='".$VehicleNo."'");
	}
	public function viewOnePollution($id)
	{
		return $this->db->select("SELECT * FROM `pollution` WHERE id='".$id."'");
	}
	public function submit_pollution($data)
	{
		//print_r($data);
		$this->db->insert('pollution', $data);
	}
	public function edit_submit_pollution($data,$arg)
	{
		//print_r($data);
		//echo $arg;
		$this->db->update('pollution', $data,
				"`id` = $arg");
	}
	public function delete_pollution($id)   
	{
		$this->db->delete('pollution', "`id` = {$id}");
		//echo "delete $id";
	}
		public function submit_vehiclepollutionFiles($getAttach)
	{
		//print_r($getAttach);
		 $this->db->insert('fileupload_pollution', $getAttach);
	}
	
	//Update the uploaded files
	public function edit_submit_vehiclepollutionFiles($getAttach,$arg)
	{
		//print_r($data);
		//echo $arg;
		$this->db->update('fileupload_pollution', $getAttach,
				"`pollution_id` = $arg");
	}
	//Delete for old files
	
	public function delete_vehiclepollutionfiles($id)   
	{
		$this->db->delete('fileupload_pollution', "`pollution_id` = ".$id,25);
		//echo "delete $id";
	}
	//view uploaded file
	public function viewVehiclePollutionFiles($pollution_id)
	{
		return $this->db->select("SELECT * FROM `fileupload_pollution` WHERE pollution_id='".$pollution_id."'");
	}
	public function editVehiclePollutionFiles($getAttach)
	{
		return $this->db->select("SELECT * FROM `fileupload_pollution` WHERE pollution_id='".$getAttach."'");
	}
	
	public function getAllPartyMaster()
	{
		return $this->db->select("SELECT * FROM `partymaster`");
	}
    public function getAllPartyMaster_Details()
	{
        $a=Session::get('admin_id');
 if($a==""){
           
           $a=$_REQUEST['admin_id'];
	   }
	   //AND admin_id='".$a."'
			return $this->db->select("SELECT * FROM `partymaster` where TrType='O'  ORDER BY PartyShortName");
	}
	public function getOneParty($id)
	{
		return $this->db->select("SELECT * FROM `partymaster` WHERE id='".$id."'");
	}
	public function viewOneParty($id)
	{
		return $this->db->select("SELECT * FROM `partymaster` WHERE id='".$id."'");
	}
	public function submit_partymaster($data)
	{
		//print_r($data);
		$this->db->insert('partymaster', $data);
	}
	public function edit_submit_partymaster($data,$arg)
	{
		//print_r($data);
		//echo $arg;
		$this->db->update('partymaster', $data,
				"`id` = $arg");
	}
	public function delete_partymaster($id)   
	{
		$this->db->delete('partymaster', "`id` = {$id}");
		//echo "delete $id";
	}
	public function getAllSalary()
	{
		return $this->db->select("SELECT * FROM `salarymaster`");
	}
	public function getOneSalary($id)
	{
		return $this->db->select("SELECT * FROM `salarymaster` WHERE id='".$id."'");
	}
	public function viewOneSalary($id)
	{
		return $this->db->select("SELECT * FROM `salarymaster` WHERE id='".$id."'");
	}
	public function submit_salarymaster($data)
	{
		//print_r($data);
		$this->db->insert('salarymaster', $data);
	}
	public function edit_submit_salarymaster($data,$arg)
	{
		//print_r($data);
		//echo $arg;
		$this->db->update('salarymaster', $data,
				"`id` = $arg");
	}
	public function delete_salarymaster($id)   
	{
		$this->db->delete('salarymaster', "`id` = {$id}");
		//echo "delete $id";
	}
	public function getAllvendor()
	{
		return $this->db->select("SELECT * FROM `vendor`");
	}
	public function getOneVendor($id)
	{
		return $this->db->select("SELECT * FROM `vendor` WHERE id='".$id."'");
	}
	public function submit_vendor($data)
	{
		//print_r($data);
		$this->db->insert('vendor', $data);
	}
	public function edit_submit_vendor($data,$arg)
	{
		//print_r($data);
		//echo $arg;
		$this->db->update('vendor', $data,
				"`id` = $arg");
	}
	public function delete_vendor($id)   
	{
		$this->db->delete('vendor', "`id` = {$id}");
		//echo "delete $id";
	}
	
	public function getAllDoRegistration()
	{
		return $this->db->select("SELECT * FROM `doregistration`");
	}
	public function getOneRegistration($id)
	{
		return $this->db->select("SELECT * FROM `doregistration` WHERE id='".$id."'");
	}
	public function viewOneRegistration($id)
	{
		return $this->db->select("SELECT * FROM `doregistration` WHERE id='".$id."'");
	}
	public function submit_doregistration($data)
	{
		//print_r($data);
		$this->db->insert('doregistration', $data);
	}
	public function edit_submit_doregistration($data,$arg)
	{
		//print_r($data);
		//echo $arg;
		$this->db->update('doregistration', $data,
				"`id` = $arg");
	}
	public function delete_doregistration($id)   
	{
		$this->db->delete('doregistration', "`id` = {$id}");
		//echo "delete $id";
	}
	public function getAllRoutMaster()
	{
		return $this->db->select("SELECT * FROM `routmaster`");
	}
	public function getOneRoutMaster($id)
	{
		return $this->db->select("SELECT * FROM `routmaster` WHERE id='".$id."'");
	}
	public function viewOneRoutMaster($id)
	{
		return $this->db->select("SELECT * FROM `routmaster` WHERE id='".$id."'");
	}
	public function submit_routmaster($data)
	{
		//print_r($data);
		$this->db->insert('routmaster', $data);
	}
	public function edit_submit_routmaster($data,$arg)
	{
		//print_r($data);
		//echo $arg;
		$this->db->update('routmaster', $data,
				"`id` = $arg");
	}
	public function delete_routmaster($id)   
	{
		$this->db->delete('routmaster', "`id` = {$id}");
		//echo "delete $id";
	}
	public function getAllBillingRate()
	{
		return $this->db->select("SELECT * FROM `billingratemaster`");
	}
	public function getOneBillingRate($id)
	{
		return $this->db->select("SELECT * FROM `billingratemaster` WHERE id='".$id."'");
	}
	public function viewOneBillingRate($id)
	{
		return $this->db->select("SELECT * FROM `billingratemaster` WHERE id='".$id."'");
	}
	public function submit_billingmaster($data)
	{
		//print_r($data);
		$this->db->insert('billingratemaster', $data);
	}
	public function edit_submit_billingmaster($data,$arg)
	{
		//print_r($data);
		//echo $arg;
		$this->db->update('billingratemaster', $data,
				"`id` = $arg");
	}
	public function delete_billingrate($id)   
	{
		$this->db->delete('billingratemaster', "`id` = {$id}");
		//echo "delete $id";
	}
	public function getAllHsd()
	{
		return $this->db->select("SELECT * FROM `hsd`");
	}
	public function getOnehsd($id)
	{
		return $this->db->select("SELECT * FROM `hsd` WHERE id='".$id."'");
	}
	public function viewOnehsd($id)
	{
		return $this->db->select("SELECT * FROM `hsd` WHERE id='".$id."'");
	}
	public function submit_hsd($data)
	{
		//print_r($data);
		$this->db->insert('hsd', $data);
	}
	public function edit_submit_hsd($data,$arg)
	{
		//print_r($data);
		//echo $arg;
		$this->db->update('hsd', $data,
				"`id` = $arg");
	}
	public function delete_hsd($id)   
	{
		$this->db->delete('hsd', "`id` = {$id}");
		//echo "delete $id";
	}
	public function getAllService()
	{
		return $this->db->select("SELECT * FROM `servicereminder`");
	}
	public function getOneService($id)
	{
		return $this->db->select("SELECT * FROM `servicereminder` WHERE id='".$id."'");
	}
		public function viewOneService($id)
	{
		return $this->db->select("SELECT * FROM `servicereminder` WHERE id='".$id."'");
	}
	public function submit_servicereminder($data)
	{
		//print_r($data);
		$this->db->insert('servicereminder', $data);
	}
	public function edit_submit_servicereminder($data,$arg)
	{
		//print_r($data);
		//echo $arg;
		$this->db->update('servicereminder', $data,
				"`id` = $arg");
	}
	public function delete_servicereminder($id)   
	{
		$this->db->delete('servicereminder', "`id` = {$id}");
		//echo "delete $id";
	}
	public function getAllUserControl()
	{
		return $this->db->select("SELECT * FROM `usercontrol`");
	}
	public function getOneUser($id)
	{
		return $this->db->select("SELECT * FROM `usercontrol` WHERE id='".$id."'");
	}
	public function viewOneUser($id)
	{
		return $this->db->select("SELECT * FROM `usercontrol` WHERE id='".$id."'");
	}
	public function submit_usercontrol($data)
	{
		//print_r($data);
		$this->db->insert('usercontrol', $data);
	}
	public function edit_submit_usercontrol($data,$arg)
	{
		//print_r($data);
		//echo $arg;
		$this->db->update('usercontrol', $data,
				"`id` = $arg");
	}
	public function delete_usercontrol($id)   
	{
		$this->db->delete('usercontrol', "`id` = {$id}");
		//echo "delete $id";
	}
	public function getAllItem()
	{
		return $this->db->select("SELECT * FROM `itemmaster`");
	}
	public function getOneItem($id)
	{
		return $this->db->select("SELECT * FROM `itemmaster` WHERE id='".$id."'");
	}
		public function viewOneItem($id)
	{
		return $this->db->select("SELECT * FROM `itemmaster` WHERE id='".$id."'");
	}
	public function submit_itemmaster($data)
	{
		//print_r($data);
		$this->db->insert('itemmaster', $data);
	}
	public function edit_submit_itemmaster($data,$arg)
	{
		//print_r($data);
		//echo $arg;
		$this->db->update('itemmaster', $data,
				"`id` = $arg");
	}
	public function delete_itemmaster($id)   
	{
		$this->db->delete('itemmaster', "`id` = {$id}");
		//echo "delete $id";
	}
	public function getAllExpiryAlert()
	{
		return $this->db->select("SELECT * FROM `expiryalert`");
	}
	public function getOneAlert($id)
	{
		return $this->db->select("SELECT * FROM `expiryalert` WHERE id='".$id."'");
	}
	public function viewOneAlert($id)
	{
		return $this->db->select("SELECT * FROM `expiryalert` WHERE id='".$id."'");
	}
	public function submit_expiryalert($data)
	{
		//print_r($data);
		$this->db->insert('expiryalert', $data);
	}
	public function edit_submit_expiryalert($data,$arg)
	{
		//print_r($data);
		//echo $arg;
		$this->db->update('expiryalert', $data,
				"`id` = $arg");
	}
	public function delete_expiryalert($id)   
	{
		$this->db->delete('expiryalert', "`id` = {$id}");
		//echo "delete $id";
	}
	public function getAllHsdIssue()
	{
		return $this->db->select("SELECT * FROM `hsdissue`");
	}
	public function insert_activity($data)
	{
		
		return $this->db->insert('activity', $data);
	}

	public function getAllRootModules()
	{
		//echo "SELECT * FROM `admin` WHERE username = '".$username."' AND password = '".$password."'";
		$res= $this->db->select("SELECT * FROM `modules` WHERE pid='0' ORDER BY module_name ASC");
		return $res;
	}
    
    public function getAllRootModulesMob()
	{


		//echo "SELECT * FROM `admin` WHERE username = '".$username."' AND password = '".$password."'";
		$res= $this->db->select("SELECT * FROM `erp_modules` ORDER BY module_name ASC");

		return $res;
	
		
	}	
	public function getAllModules()
	{


		//echo "SELECT * FROM `admin` WHERE username = '".$username."' AND password = '".$password."'";
		$res= $this->db->select("SELECT * FROM `modules` ORDER BY module_name ASC");

		return $res;
	
		
	}	
	public function getAllSubModules($pid)
	{


		//echo "SELECT * FROM `admin` WHERE username = '".$username."' AND password = '".$password."'";
		$res= $this->db->select("SELECT * FROM `modules` WHERE pid='".$pid."' ORDER BY module_name ASC");

		return $res;
	
		
	}
	public function getAllUserModules($userId)
	{

		//echo "SELECT * FROM `admin` WHERE username = '".$username."' AND password = '".$password."'";
		$res= $this->db->select("SELECT * FROM `user_modules` WHERE userId='".$userId."'");

		return $res;
		
	}
    
    public function getAllUserErpModules($userId)
	{

		//echo "SELECT * FROM `admin` WHERE username = '".$username."' AND password = '".$password."'";
		$res= $this->db->select("SELECT * FROM `user_erp_modules` WHERE userId='".$userId."'");

		return $res;
		
	}
	public function setUserModules($data)
	{
		//echo "SELECT * FROM `admin` WHERE username = '".$username."' AND password = '".$password."'";
		$this->db->insert('user_modules', $data);
	}
    
    public function setUserModulesMob($data)
	{
		//echo "SELECT * FROM `admin` WHERE username = '".$username."' AND password = '".$password."'";
		$this->db->insert('user_erp_modules', $data);
	}
	public function updateUserModuleAccess($data,$userId,$moduleId)
	{
		//echo "SELECT * FROM `admin` WHERE username = '".$username."' AND password = '".$password."'";
		$this->db->update('user_modules', $data,
				"`userId` = $userId AND `moduleId` = $moduleId");
	}
    
    public function updateUserModuleAccessMob($data,$userId,$moduleId)
	{
		//echo "SELECT * FROM `admin` WHERE username = '".$username."' AND password = '".$password."'";
		$this->db->update('user_erp_modules', $data,
				"`userId` = $userId AND `moduleId` = $moduleId");
	}

	public function DeleteUserModules($userId,$moduleId)
	{
		//echo "SELECT * FROM `admin` WHERE username = '".$username."' AND password = '".$password."'";
		$this->db->delete('user_modules', "`userId` = {$userId} AND `moduleId` = {$moduleId}",500);
	}
    
    public function DeleteUserModulesMob($userId,$moduleId)
	{
		//echo "SELECT * FROM `admin` WHERE username = '".$username."' AND password = '".$password."'";
		$this->db->delete('user_erp_modules', "`userId` = {$userId} AND `moduleId` = {$moduleId}",500);
	}
	public function getAllEmployees()
	{
		//$userID=Session::get('traccarID');
		return $this->db->select("SELECT * from employee ORDER BY name");
	}	
    
    
public function tyresaxelmaster()
{

   return $this->db->select("SELECT * FROM tyresaxelmaster ");
	
   
}
public function view_tyresaxelmaster($id){
	
	return $this->db->select("SELECT * FROM tyresaxelmaster WHERE id=".$id." LIMIT 1");
}

public function delete_tyresaxelmaster($id)   
{
	$this->db->delete('tyresaxelmaster', "`id` = {$id}");
	//echo "delete $id";
}

public function add_tyresaxelmaster($data){
	
	$this->db->insert('tyresaxelmaster', $data);
}

public function edit_tyresaxelmaster($data,$arg){
	$this->db->update('tyresaxelmaster', $data,
			"`id` = $arg");
	
}
    
    
public function tyremodelmaster()
{

   return $this->db->select("SELECT * FROM tyremodelmaster ");
	
   
}
public function view_tyremodelmaster($id){
	
	return $this->db->select("SELECT * FROM tyremodelmaster WHERE id=".$id." LIMIT 1");
}

public function delete_tyremodelmaster($id)   
{
	$this->db->delete('tyremodelmaster', "`id` = {$id}");
	//echo "delete $id";
}

public function add_tyremodelmaster($data){
	
	$this->db->insert('tyremodelmaster', $data);
}

public function edit_tyremodelmaster($data,$arg){
	$this->db->update('tyremodelmaster', $data,
			"`id` = $arg");
	
}


public function dieselratemaster()
{

   return $this->db->select("SELECT * FROM dieselratemaster ");
	
   
}
public function view_dieselratemaster($id){
	
	return $this->db->select("SELECT * FROM dieselratemaster WHERE id=".$id." LIMIT 1");
}

public function delete_dieselratemaster($id)   
{
	$this->db->delete('dieselratemaster', "`id` = {$id}");
	//echo "delete $id";
}

public function add_dieselratemaster($data){
	
	$this->db->insert('dieselratemaster', $data);
}

public function edit_dieselratemaster($data,$arg){
	$this->db->update('dieselratemaster', $data,
			"`id` = $arg");
	
}



public function BankMaster()
{

   return $this->db->select("SELECT * FROM BankMaster");
	
   
}
public function view_BankMaster($id){
	
	return $this->db->select("SELECT * FROM BankMaster WHERE id=".$id." LIMIT 1");
}

public function delete_BankMaster($id)   
{
	$this->db->delete('BankMaster', "`id` = {$id}");
	//echo "delete $id";
}

public function add_BankMaster($data){
	
	$this->db->insert('BankMaster', $data);
}

public function edit_BankMaster($data,$arg){
	$this->db->update('BankMaster', $data,
			"`id` = $arg");
	
}

public function getAllRoles () {
	return $this->db->select("select * from erp_rol");
}

    
}
