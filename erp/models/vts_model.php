<?php

class Vts_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
		Session::init();
	}
	
	public function insert_share_device($data)
	{
		$this->db->insert('our_user_devices', $data);
	}
	public function delete_share_device($userId)   
	{
		$this->db->delete('our_user_devices', "`userid` = {$userId}");
		//echo "delete $id";
	}
	public function getAllcustomer()
	{
		$y=Session::get('admin_id');
		if($y==''){
			$y=$_REQUEST['admin_id'];
		}
		return $this->db->select("SELECT * FROM `admin` where parent_id = ".$y." AND userType='customer'");
	}
	public function check_customer()
	{
		$username = $_REQUEST['username'];
		$email= $_REQUEST['email'];
		$result= $this->db->select("SELECT * FROM `admin` WHERE username='".$username."'OR email = '".$email."'");
		$count = count($result);
		return $count;	
	}
	public function update_customer($data1,$arg)
	{
		//print_r($data);
		//echo $arg;
		$this->db->update('admin', $data1,
				"`admin_id` = $arg");
	}
	
    public function delete_customer($admin_id)   
	{
		$this->db->delete('admin', "`admin_id` = {$admin_id}");
		//echo "delete $id";
	}
	
	public function getAllusers()
	{
		$y=Session::get('admin_id');
		if($y==''){
			$y=$_REQUEST['admin_id'];
		}
		return $this->db->select("SELECT * FROM `admin` where userType='user' AND (parent_id = ".$y." OR parent_id='55') ");
		
	}
	public function getcustomergeofence()
	{
		$y=Session::get('admin_id');
		return $this->db->select("SELECT traccarID FROM `admin` where userType='customer' AND parent_id = ".$y." ");
		
	}
	
	public function getAlluser()
	{
		$y=Session::get('admin_id');
		return $this->db->select("SELECT * FROM `admin` where parent_traccarID = ".$y." ");
		
	}
	public function submit_users($data)
	{
		$this->db->insert('admin', $data);
	}
	
	public function check_users(){
		$username = $_REQUEST['username'];
		$email= $_REQUEST['email'];
		$result= $this->db->select("SELECT * FROM `admin` WHERE username='".$username."'OR email = '".$email."'");
		$count = count($result);
		return $count;
		
		}
	public function edit_submit_users($data,$arg)
	{
		//print_r($data);
		//echo $arg;
		$this->db->update('admin', $data,
				"`admin_id` = $arg");
	}
	public function delete_users($admin_id)   
	{
		$this->db->delete('admin', "`admin_id` = {$admin_id}");
		//echo "delete $id";
	}
	/*
public function getAlldevices()
	{
		$x=Session::get('traccarID');
		return $this->db->select("SELECT a.*,b.`name` as groupname FROM `devices` a, `groups` b WHERE a.groupid = b.id AND a.id IN (SELECT deviceid FROM user_device WHERE userid=".$x.") ORDER BY a.name");
	}
	
	public function getAlldevicesF()
	{
		$x=Session::get('traccarID');
		return $this->db->select("SELECT * FROM `devices` WHERE id IN (SELECT deviceid FROM user_device WHERE userid=".$x.") and category='truck' ORDER BY name");
	}
	
	*/
	
	public function getAlldevices()
	{
		if(Session::get('userType')=="user"){
			$x=Session::get('admin_id');
			if($x==''){
				$x=$_REQUEST['admin_id'];
			}
			return $this->db->select("SELECT * FROM `devices` WHERE id IN (SELECT deviceid FROM our_user_devices WHERE userid=".$x.") ORDER BY name");
		}
		else{
		$x=Session::get('traccarID');
		if($x==''){
			$x=$_REQUEST['traccarID'];
		}
		return $this->db->select("SELECT * FROM `devices` WHERE id IN (SELECT deviceid FROM user_device WHERE userid=".$x.") ORDER BY name");
		}
	}
	
    public function getAlldevicegroups($x)
	{
		//return $this->db->select("SELECT * FROM `groups` WHERE id IN (SELECT groupid FROM devices WHERE id=".$x.") ORDER BY name");
        //SELECT * FROM `devices` WHERE groupid IN (SELECT id FROM groups WHERE id=".$x.") ORDER BY name
       
        //return $this->db->select("SELECT * FROM `devices`a , groups b WHERE a.groupid = ".$x." AND b.id=".$x." ORDER BY a.name");
            return $this->db->select("SELECT * FROM `devices` WHERE groupid=".$x." ORDER BY name");
        
	}
	public function getAllUserdevices($x)
	{
		return $this->db->select("SELECT * FROM `devices` WHERE id IN (SELECT deviceid FROM user_device WHERE userid=".$x.") ORDER BY name");
	}
	
	public function getAllOurUserdevices($x)
	{
		return $this->db->select("SELECT * FROM `devices` WHERE id IN (SELECT deviceid FROM our_user_devices WHERE userid=".$x.") ORDER BY name");
	}
	
	public function getAllUserdev()
	{
		return $this->db->select("SELECT * FROM `user_device` WHERE id IN (SELECT deviceid FROM user_device WHERE userid=".$x.") ORDER BY name");
	}
	
	public function getAlldevicesF()
	{
		$x=Session::get('traccarID');
		return $this->db->select("SELECT * FROM `devices` WHERE id IN (SELECT deviceid FROM user_device WHERE userid=".$x.") and category='truck' ORDER BY name");
	}
	
	public function getAlldevicesFall()
	{
		return $this->db->select("SELECT * FROM `devices` WHERE category='truck' ORDER BY name");
	}
	
	
	public function insert_customer($data1){
		$this->db->insert('admin', $data1);
	}
	public function getAllgroups()
	{
		$userid=Session::get('traccarID');
		return $this->db->select("SELECT * FROM `groups` WHERE id IN (SELECT groupid FROM user_group WHERE userid=".$userid.")  ORDER BY name");
	}
	
	public function getAllnotifications()
	{
		$userid=Session::get('traccarID');
		return $this->db->select("SELECT type FROM `notifications` WHERE userid=".$userid." ");
	}
	
	/*public function devicedaylog($date,$deviceid,$distance){
		return $this->db->select("SELECT deviceid,sum((substring(attributes,locate('"distance":',attributes)+11, locate('"totalDistance":',attributes)-locate('"distance":',attributes)-12))=".$distance.") FROM `positions` where speed>0 and DATE(SUBTIME( servertime, '05:30:00'))='".$date."' and id >=(SELECT min_id from indexposition WHERE date='".$date."') and id <=(SELECT max_id from indexposition WHERE date='".$date."') group by deviceid=".$deviceid."");
		}*/
		public function devicedaylog($date){
		return $this->db->select("SELECT deviceid,sum((substring(attributes,locate('\"distance\":',attributes)+11, locate('\"totalDistance\":',attributes)-locate('\"distance\":',attributes)-12))) as distance,MAX(speed) FROM `positions` where speed>0 and servertime='".$date."' and id >=(SELECT min_id from indexposition WHERE date='".$date."') and id <=(SELECT max_id from indexposition WHERE date='".$date."') group by deviceid");
		}
/*Select deviceid,sum((substring(attributes,locate('"distance":',attributes)+11, locate('"totalDistance":',attributes)-locate('"distance":',attributes)-12))) as totalDistance from positions where speed>0 and DATE(ADDTIME( servertime, '05:30:00'))='2017-07-19' and id >=(SELECT min_id from indexposition WHERE date='2017-07-19') and id <=(SELECT max_id from indexposition WHERE date='2017-07-19') group by deviceid


Select * from positions where deviceid=".$deviceid." and speed>0 and DATE(ADDTIME( servertime, '05:30:00'))='".$date."' order by id asc
*/

public function device_geofence(){
  return $this->db->select("SELECT * from device_geofence");
  }
  
public function deviceOnegeofence($deviceid,$geofenceid){
  return $this->db->select("SELECT * from device_geofence WHERE deviceid=".$deviceid." AND geofenceid=".$geofenceid);
  } 

public function deviceOneuser($userid,$deviceid,$event_type){
	
  return $this->db->select("SELECT * from notification WHERE deviceid=".$deviceid." AND userid=".$userid." AND event_type=".$event_type);
  }  
  
  
public function insert_geofence($deviceid,$geofenceid){
  $data = array(
  'deviceid' =>$deviceid,
  'geofenceid' => $geofenceid
  );
  $this->db->insert('device_geofence', $data);
  }
  public function insert_notification($deviceid,$userid){
  $data = array(
  'deviceid' =>$deviceid,
  'userid' => $userid
  );
  $this->db->insert('notification', $data);
  }
  
public function insert_smsAlerts($data){
  $this->db->insert('smsAlerts', $data);
  } 
  
public function fuelLog($deviceid,$from,$to){
    //echo "SELECT * from fuel_logs WHERE deviceid='".$deviceid."' AND (DATE(servertime) BETWEEN '".$from."' AND '".$to."')";
return $this->db->select("SELECT a.*,b.id,b.latitude,b.longitude FROM `fuel_logs` a, `positions` b where a.positionid=b.id and a.deviceid='".$deviceid."' AND DATE(a.servertime) BETWEEN '".$from."' AND '".$to."'");
 } 

public function checkfuelLogs($id){
 return $this->db->select("SELECT positionid from fuel_logs WHERE positionid=".$id);
  }   
  
public function insert_fuelLogs($data){
  $this->db->insert('fuel_logs', $data);
  }   
  
  public function delete_fuellogs($id,$date){
    $data="deviceid='".$id."' AND date(`servertime`) ='".$date."'";
    $this->db->delete('fuel_logs',$data,200000);
    }	
  
  public function lastSMS($deviceid,$notificationType){
	 // echo "SELECT * from smsAlerts WHERE deviceid=".$deviceid." AND type='".$notificationType."' AND servertime > NOW()- INTERVAL 5 MINUTE";
  return $this->db->select("SELECT * from smsAlerts WHERE deviceid=".$deviceid." AND type='".$notificationType."' AND servertime > DATE_SUB(NOW(),INTERVAL 5 MINUTE)");
  } 
  
  public function events_trip($date,$deviceid){
	  //echo "SELECT * FROM events WHERE DATE(ADDTIME(servertime, '5:30:00')) = ".$date." AND deviceid = ".$deviceid." ORDER BY id";
  return $this->db->select("SELECT * FROM events WHERE DATE(ADDTIME(servertime, '5:30:00')) = ".$date." AND deviceid = ".$deviceid." ORDER BY id");
  }

   public function StartDistance($id){
	   return $this->db->select("SELECT attributes from positions where id='".$id."'");
	   }
  
  public function TotalDistance($id){
	   return $this->db->select("SELECT attributes from positions where id='".$id."'");
	   }	   
	  
	public function indexpositions($date){
		//echo "SELECT * from indexpositions where date='".$date."'";
		return $this->db->select("SELECT * from indexpositions where date='".$date."'");
		}

	public function indexpositionsFuel($date){
			//echo "SELECT * from indexpositions where date='".$date."'";
			return $this->db->select("SELECT * from indexpositions where deviceid IN( select id from `devices`WHERE category='truck') AND date='".$date."'");
	}	

	public function insert_indexevents(){
		$date=date('Y-m-d');
		$datem = strtotime($date);
		$datem = strtotime("-1 day", $datem);
		$date2= date('Y-m-d', $datem);
		return $this->db->select("INSERT INTO indexevents (`date`, `max_id`, `min_id`)SELECT DATE(servertime), MAX(id), MIN(id) from events WHERE DATE(servertime)='$date' group by DATE(servertime)");

	}	


	public function insert_indexpositions(){
		$date=date('Y-m-d');
		$datem = strtotime($date);
		$datem = strtotime("-1 day", $datem);
		$date2= date('Y-m-d', $datem);
		return $this->db->select("INSERT INTO indexpositions (`date`, `max_id`, `min_id`, `deviceid`)SELECT DATE(servertime), MAX(id), MIN(id), deviceid from positions WHERE DATE(servertime)='$date' AND id > (SELECT MIN(min_id) from indexpositions WHERE date='$date2')  group by DATE(servertime), deviceid");
		}
		/*public function insert_customer(){
		return $this->db->select("INSERT INTO admin (`email`, `username`, `password`, `pass`, `userType`)SELECT email, name, hashedpassword, password, userType from users where userType='customer'");
		}*/

	public function delete_indexevents(){
		$date="date='".date('Y-m-d')."'";
		$this->db->delete('indexevents',$date,200000);
		}	
	public function delete_indexpositions(){
		$date="date='".date('Y-m-d')."'";
		$this->db->delete('indexpositions',$date,200000);
		}

	public function clear_old($id){
		//DELETE FROM `positions` WHERE id >= 1 and id <=38000000 limit 100000
		$cond="id<'".$id."'";
	  $this->db->delete('positions',$cond,50000);
	  return $this->db->select("SELECT id,DATE(servertime) from positions limit 1");

	}	
		
   public function update_indexpositions($id,$position){
	   $data = array(
		'max_id' =>$position
		);
	   $this->db->update('indexpositions', $data,
				"`id` = $id");
	   }
   public function update_indexfuel($id,$fuel){
	   $data = array(
		's_fuel' =>$fuel
		);
	   $this->db->update('indexpositions', $data,
				"`id` = $id");
	   }			   		
		

	   public function getChallanByDate($date='')
	   {
		   if($date==''){
			   $date=date("Y-m-d");
		   }
		   //echo "SELECT COUNT(*) from challan  WHERE DATE($event)='$date' AND status !='CANCEL'";
		   return $this->db->select("SELECT * from challan  inner join (select max(challanno) as Total from challan WHERE status!='CANCEL' group by deviceid) as max on max.Total = challan.challanno");
	   }	   
	//INSERT INTO indexposition (`date`, `max_id`, `min_id`, `deviceid`)
//SELECT DATE(servertime), MAX(id), MIN(id), deviceid from positions WHERE DATE(ADDTIME( servertime, '05:30:00'))='2017-07-10' group by DATE(servertime), deviceid
public function newLogs()

{
 //echo $userID;
 if(Session::get('userType')=="user"){
   $userID=Session::get('admin_id');
            return $this->db->select("SELECT a . * , b.`latitude` , b.`longitude` , b.`address` , b.`speed` , b.`course` , b.`servertime`,c.`VehicleNo`,c.`FitnessExpiryDate`,c.`InsuranceExpiryDate`,c.`PermitExpiry`,c.`RoadTaxExpiry`,c.`PollutionExpiry`,CAST(CAST(TRIM(TRAILING '}' FROM ((substring(b.attributes,locate('\"totalDistance\":',b.attributes)+16, locate(\"}\",b.attributes)))))AS DECIMAL(10)) AS CHAR)as totalDistance , IF(b.protocol = 'wialon',substring( b.attributes, locate( '\"volume\":', b.attributes ) +9, (
   locate( '\"temperature\"', b.attributes ) - locate( '\"volume\":', b.attributes ) -10 ) ), substring( b.attributes,locate('N=', b.attributes)+2,(locate('\\\\r\\\\n', b.attributes)-locate('N=', b.attributes)-2))) AS Fuel FROM devices a, `positions` b , `vehiclemaster` c WHERE a.id=c.SensorSerial AND a.positionid = b.id AND a.id IN (SELECT deviceid FROM our_user_devices WHERE userid=".$userID.") ORDER BY a.name");

  }else {
 $userID= Session::get('traccarID');
 if($userID == ""){
    $userID= $_REQUEST['traccarID'];
    //Session::set('traccarID')=$userID;
    }
 return $this->db->select("SELECT a . * , b.`latitude` , b.`longitude` , b.`address` , b.`speed` , b.`course` , b.`servertime`,b.`protocol`,c.`VehicleNo`,c.`FitnessExpiryDate`,c.`InsuranceExpiryDate`,c.`PermitExpiry`,c.`RoadTaxExpiry`,c.`PollutionExpiry`,CAST(CAST(TRIM(TRAILING '}' FROM ((substring(b.attributes,locate('\"totalDistance\":',b.attributes)+16, locate(\"}\",b.attributes)))))AS DECIMAL(10)) AS CHAR)as totalDistance , IF(b.protocol = 'wialon',substring( b.attributes, locate( '\"volume\":', b.attributes ) +9, (
   locate( '\"temperature\"', b.attributes ) - locate( '\"volume\":', b.attributes ) -10 ) ), substring( b.attributes,locate('N=', b.attributes)+2,(locate('\\\\r\\\\n', b.attributes)-locate('N=', b.attributes)-2))) AS Fuel FROM devices a, `positions` b , `vehiclemaster` c WHERE a.id=c.SensorSerial AND a.positionid = b.id AND a.id IN (SELECT deviceid FROM user_device WHERE userid=".$userID.") ORDER BY a.name");

}
}

public function ktcVehiclesAlerts($id){
	$userID= $id;
	return $this->db->select("SELECT a . * , b.`latitude` , b.`longitude` , b.`address` , b.`speed` , b.`course` , b.`servertime`,b.`protocol`,c.`FitnessExpiryDate`,c.`InsuranceExpiryDate`,c.`PermitExpiry`,c.`RoadTaxExpiry`,c.`PollutionExpiry`,CAST(CAST(TRIM(TRAILING '}' FROM ((substring(b.attributes,locate('\"totalDistance\":',b.attributes)+16, locate(\"}\",b.attributes)))))AS DECIMAL(10)) AS CHAR)as totalDistance , IF(b.protocol = 'wialon',substring( b.attributes, locate( '\"volume\":', b.attributes ) +9, (
		locate( '\"temperature\"', b.attributes ) - locate( '\"volume\":', b.attributes ) -10 ) ), substring( b.attributes,locate('N=', b.attributes)+2,(locate('\\\\r\\\\n', b.attributes)-locate('N=', b.attributes)-2))) AS Fuel FROM devices a, `positions` b , `vehiclemaster` c WHERE a.id=c.SensorSerial AND a.positionid = b.id AND a.id IN (SELECT deviceid FROM user_device WHERE userid=".$userID.") ORDER BY a.name");

}

 /*
public function newLogs()
 
 {
  //echo $userID;
  if(Session::get('userType')=="user"){
	$userID=Session::get('admin_id');
			 return $this->db->select("SELECT a . * , b.`latitude` , b.`longitude` , b.`address` , b.`speed` , b.`course` , b.`servertime`,c.`FitnessExpiryDate`,c.`InsuranceExpiryDate`,c.`PermitExpiry`,c.`RoadTaxExpiry`,c.`PollutionExpiry`,CAST(CAST(TRIM(TRAILING '}' FROM ((substring(b.attributes,locate('\"totalDistance\":',b.attributes)+16, locate(\"}\",b.attributes)))))AS DECIMAL(10)) AS CHAR)as totalDistance , substring( b.attributes, locate( '\"command\":F=', b.attributes ) +24, locate( \" T=\", b.attributes ) -24 ) AS Fuel FROM devices a, `positions` b , `vehiclemaster` c WHERE a.id=c.SensorSerial AND a.positionid = b.id AND a.id IN (SELECT deviceid FROM our_user_devices WHERE userid=".$userID.") ORDER BY a.name");
 
   }else {
  $userID= Session::get('traccarID');
  return $this->db->select("SELECT a . * , b.`latitude` , b.`longitude` , b.`address` , b.`speed` , b.`course` , b.`servertime`,c.`FitnessExpiryDate`,c.`InsuranceExpiryDate`,c.`PermitExpiry`,c.`RoadTaxExpiry`,c.`PollutionExpiry`,CAST(CAST(TRIM(TRAILING '}' FROM ((substring(b.attributes,locate('\"totalDistance\":',b.attributes)+16, locate(\"}\",b.attributes)))))AS DECIMAL(10)) AS CHAR)as totalDistance , substring( b.attributes, locate( '\"command\":F=', b.attributes ) +24, locate( \" T=\", b.attributes ) -24 ) AS Fuel FROM devices a, `positions` b , `vehiclemaster` c WHERE a.id=c.SensorSerial AND a.positionid = b.id AND a.id IN (SELECT deviceid FROM user_device WHERE userid=".$userID.") ORDER BY a.name");
 
 }
 }
 */
 
 public function newLogsAll()
 
 {
  //echo $userID;
  
  return $this->db->select("SELECT a . * , b.`latitude` , b.`longitude` , b.`address` , b.`speed` , b.`course` , b.`servertime`,CAST(CAST(TRIM(TRAILING '}' FROM ((substring(b.attributes,locate('\"totalDistance\":',b.attributes)+16, locate(\"}\",b.attributes)))))AS DECIMAL(10)) AS CHAR)as totalDistance , IF(b.protocol = 'wialon',substring( b.attributes, locate( '\"volume\":', b.attributes ) +9, (
    locate( '\"temperature\"', b.attributes ) - locate( '\"volume\":', b.attributes ) -10 ) ), substring( b.attributes,locate('N=', b.attributes)+2,(locate('\\\\r\\\\n', b.attributes)-locate('N=', b.attributes)-2))) AS Fuel  FROM devices a, `positions` b WHERE a.positionid = b.id ORDER BY a.name");
 }
	
	/*SELECT servertime, substring( attributes, locate( '"command":F=', attributes ) +24, locate( " T=", attributes ) -24 ) AS Fuel
FROM `positions`
WHERE `deviceid` =158
GROUP BY Fuel
ORDER BY servertime DESC
LIMIT 0 , 30
	*/
	
	/**/
	
	public function getMaxSpeed($date){
		//echo "Select deviceid,MAX(speed) as speed from positions where id >=(SELECT MIN(min_id) from indexpositions WHERE date='".$date."') and id <=(SELECT MAX(max_id) from indexpositions WHERE date='".$date."')group by deviceid";
		return $this->db->select("Select deviceid,MAX(speed) as speed from positions where DATE(servertime) = '".$date."' AND id >=(SELECT MIN(min_id) from indexpositions WHERE date='".$date."') and id <=(SELECT MAX(max_id) from indexpositions WHERE date='".$date."')group by deviceid");	
		//DATE(ADDTIME( servertime, '05:30:00'))='".$date."' and 
	}
	
	public function getMaxSpeedC($date){
		return $this->db->select("select count(*) as c, deviceid from positions where DATE(servertime) = '".$date."' AND speed*1.852 > 60 AND id >=(SELECT MIN(min_id) from indexpositions WHERE date='".$date."') and id <=(SELECT MAX(max_id) from indexpositions WHERE date='".$date."')group by deviceid");
	}
	
	public function getFuelMobile($date,$deviceid){
		// echo "Select id, IF(protocol = 'wialon',substring( attributes, locate( '\"volume\":', attributes ) +9, (
		// 	locate( '\"temperature\"', attributes ) - locate( '\"volume\":', attributes ) -10 ) ), substring( attributes,locate('N=', attributes)+2,(locate('\\\\r\\\\n', attributes)-locate('N=', attributes)-2)))  AS Fuel from positions WHERE id >=(SELECT min_id from indexpositions WHERE date='".$date."' and deviceid=".$deviceid.") and id <=(SELECT max_id from indexpositions WHERE date='".$date."' and deviceid=".$deviceid.") and deviceid=".$deviceid."  and DATE(devicetime)='".$date."' and IF(protocol = 'wialon',substring( attributes, locate( '\"volume\":', attributes ) +9, (
		// 		locate( '\"temperature\"', attributes ) - locate( '\"volume\":', attributes ) -10 ) ), substring( attributes,locate('N=', attributes)+2,(locate('\\\\r\\\\n', attributes)-locate('N=', attributes)-2)))  >0 order by devicetime DESC limit 1";
		$result= $this->db->select("Select id, IF(protocol = 'wialon',substring( attributes, locate( '\"volume\":', attributes ) +9, (
			locate( '\"temperature\"', attributes ) - locate( '\"volume\":', attributes ) -10 ) ), substring( attributes,locate('N=', attributes)+2,(locate('\\\\r\\\\n', attributes)-locate('N=', attributes)-2))/10)  AS Fuel from positions WHERE id <=(SELECT max_id from indexpositions WHERE date='".$date."' and deviceid=".$deviceid.") and deviceid=".$deviceid."  and DATE(servertime)='".$date."' and IF(protocol = 'wialon',substring( attributes, locate( '\"volume\":', attributes ) +9, (
				locate( '\"temperature\"', attributes ) - locate( '\"volume\":', attributes ) -10 ) ), substring( attributes,locate('N=', attributes)+2,(locate('\\\\r\\\\n', attributes)-locate('N=', attributes)-2)))  >0 order by id DESC limit 1");
		// print_r($result);
		return $result;	
	}

	public function getStartFuel($date,$deviceid){
	                   // echo "Select id,substring( attributes,locate('N=', attributes)+2,(locate('\\\\r\\\\n', attributes)-locate('N=', attributes)-2)) AS Fuel from positions WHERE id >=(SELECT min_id from indexpositions WHERE date='".$date."' and deviceid=".$deviceid.") and id <=(SELECT max_id from indexpositions WHERE date='".$date."' and deviceid=".$deviceid.") and deviceid=".$deviceid."  and DATE(devicetime)='".$date."' and substring( attributes,locate('N=', attributes)+2,(locate('\\\\r\\\\n', attributes)-locate('N=', attributes)-2)) !='' order by devicetime ASC limit 1";
		$result= $this->db->select("Select id,IF(protocol = 'wialon',substring( attributes, locate( '\"volume\":', attributes ) +9, (
			locate( '\"temperature\"', attributes ) - locate( '\"volume\":', attributes ) -10 ) ), substring( attributes,locate('N=', attributes)+2,(locate('\\\\r\\\\n', attributes)-locate('N=', attributes)-2))/10) AS Fuel from positions WHERE id >=(SELECT min_id from indexpositions WHERE date='".$date."' and deviceid=".$deviceid.") and id <=(SELECT max_id from indexpositions WHERE date='".$date."' and deviceid=".$deviceid.") and deviceid=".$deviceid."  and DATE(devicetime)='".$date."' and IF(protocol = 'wialon',substring( attributes, locate( '\"volume\":', attributes ) +9, (
                locate( '\"temperature\"', attributes ) - locate( '\"volume\":', attributes ) -10 ) ), substring( attributes,locate('N=', attributes)+2,(locate('\\\\r\\\\n', attributes)-locate('N=', attributes)-2))/10)  >0 order by devicetime ASC limit 1");
	   // print_r($result);
		return $result;	
	}
	public function getStartDistance($date){
  
  //echo "SELECT a.`id` as did,b.id,CAST(CAST(TRIM(TRAILING '}' FROM ((substring(b.attributes,locate('\"totalDistance\":',b.attributes)+16, locate(\"}\",b.attributes)))))AS DECIMAL(10)) AS CHAR)as startDistance FROM `devices` a, `positions` b, `indexpositions` c WHERE c.min_id = b.id AND a.id = b.deviceid AND c.date='".$date."'";
  return $this->db->select("SELECT a.`id` as did,b.id,CAST(CAST(TRIM(TRAILING '}' FROM ((substring(b.attributes,locate('\"totalDistance\":',b.attributes)+16, locate(\"}\",b.attributes)))))AS DECIMAL(10)) AS CHAR)as startDistance ,  IF(b.protocol = 'wialon',substring( b.attributes, locate( '\"volume\":', b.attributes ) +9, (
	locate( '\"temperature\"', b.attributes ) - locate( '\"volume\":', b.attributes ) -10 ) ), substring( b.attributes,locate('N=', b.attributes)+2,(locate('\\\\r\\\\n', b.attributes)-locate('N=', b.attributes)-2)))  AS Fuel FROM `devices` a, `positions` b, `indexpositions` c WHERE c.min_id = b.id AND a.id = b.deviceid AND c.date='".$date."'");
 }

	
	///////// bhayankar query ////////////////////
	/*
	
	SELECT trip_range.dt
     , trip_range.deviceid
     , substring( st.attributes, locate( '"command":F=', st.attributes ) +24, locate( " T=", st.attributes ) -24 ) as start_fuel_content
     , substring( en.attributes, locate( '"command":F=', en.attributes ) +24, locate( " T=", en.attributes ) -24 ) as  end_fuel_content
     , substring( en.attributes, locate( '"command":F=', en.attributes ) +24, locate( " T=", en.attributes ) -24 ) - substring( st.attributes, locate( '"command":F=', st.attributes ) +24, locate( " T=", st.attributes ) -24 ) as fuel_change
  FROM (
SELECT tp.deviceid, DATE(tp.servertime) dt
     , MIN(tp.servertime) start_time
     , MAX(tp.servertime) end_time
  FROM positions tp
 GROUP BY tp.deviceid, DATE(tp.servertime)
) as trip_range
  JOIN positions st
    ON st.deviceid = trip_range.deviceid
       AND st.servertime = trip_range.start_time
  JOIN positions en
    ON en.deviceid = trip_range.deviceid
       AND en.servertime = trip_range.end_time
 WHERE trip_range.dt = '2017-08-16'
	*/
	
	/* FUEL SUM
	SELECT deviceid,SUM(qty) FROM `fuel_logs` WHERE type='fill' GROUP BY deviceid 
	
	*/
	
	public function filledFuel($date){
		return $this->db->select("SELECT deviceid,SUM(qty) as sqty FROM `fuel_logs` WHERE type='fill' and DATE(`servertime`)='".$date."' GROUP BY deviceid");
		}
	public function stolenFuel($date){
		return $this->db->select("SELECT deviceid,SUM(qty) as sqty FROM `fuel_logs` WHERE type='stolen' and DATE(`servertime`)='".$date."' GROUP BY deviceid");
		}	
	
	public function getIdleTime($deviceID){
	
	return $this->db->select("Select * from idleTime WHERE deviceID=".$deviceID);
  
	}
	
	public function updateIdleTime($deviceID,$time)
	{
		//print_r($data);
		//echo $arg;
		$data = array(
		'idleTime' =>$time
		);
		$this->db->update('idleTime', $data,
				"`deviceID` = $deviceID");
	}
	
	public function insertIdleTime($deviceID,$time){
		
		$data = array(
		'deviceID'=>$deviceID,
		'idleTime' =>$time
		);
		
		$this->db->insert('idleTime', $data);
	}
	
	public function idleLogs($deviceid,$positionid)
	{
		return $this->db->select("Select id,servertime from positions where speed>=1 and  deviceid=".$deviceid." and id <= ".$positionid." order by id desc limit 1");
	}
	public function dailyLogs($deviceid,$date,$speed)
 {
	// echo "Select id,devicetime,servertime,latitude,longitude,speed,course,attributes,protocol from positions WHERE id >=(SELECT min_id from indexpositions WHERE date='".$date."' and deviceid=".$deviceid.") and id <=(SELECT max_id from indexpositions WHERE date='".$date."' and deviceid=".$deviceid.") and deviceid=".$deviceid."  and DATE(devicetime)='".$date."' AND speed = 0 group by HOUR(devicetime), MINUTE(devicetime)  order by id ASC";
  //echo "Select id,devicetime,latitude,longitude,speed,course,attributes from positions WHERE id >=(SELECT min_id from indexpositions WHERE date='".$date."' and deviceid=".$deviceid.") and id <=(SELECT max_id from indexpositions WHERE date='".$date."' and deviceid=".$deviceid.") and deviceid=".$deviceid." and DATE(devicetime)='".$date."' AND speed >= 0 AND speed <= '".$speed."' group by HOUR(devicetime), MINUTE(devicetime) order by devicetime desc";
  //UNIX_TIMESTAMP(devicetime) DIV 300
  return $this->db->select("Select id,devicetime,servertime,latitude,longitude,speed,course,attributes,protocol from positions WHERE id >=(SELECT min_id from indexpositions WHERE date='".$date."' and deviceid=".$deviceid.") and id <=(SELECT max_id from indexpositions WHERE date='".$date."' and deviceid=".$deviceid.") and deviceid=".$deviceid."  and DATE(devicetime)='".$date."' AND speed = 0  order by devicetime ASC");
 }
	
	
	public function dailyLogsFast($deviceid,$date)
	{
		//echo "Select id,servertime,latitude,longitude,speed,course,attributes from positions WHERE id >=(SELECT min_id from indexpositions WHERE date='".$date."' and deviceid=".$deviceid.") and id <=(SELECT max_id from indexpositions WHERE date='".$date."' and deviceid=".$deviceid.") and deviceid=".$deviceid."  and DATE(servertime)='".$date."' and servertime > NOW()- INTERVAL 5 MINUTE  group by HOUR(servertime), MINUTE(servertime) order by servertime ASC";
		return $this->db->select("Select id,servertime,latitude,longitude,speed,course,attributes from positions WHERE id >=(SELECT min_id from indexpositions WHERE date='".$date."' and deviceid=".$deviceid.") and id <=(SELECT max_id from indexpositions WHERE date='".$date."' and deviceid=".$deviceid.") and deviceid=".$deviceid."  and DATE(servertime)='".$date."' and servertime > NOW()- INTERVAL 5 MINUTE  group by HOUR(servertime), MINUTE(servertime) order by servertime ASC");
	}
	
	public function dailyLogsZero($deviceid,$date)
	{
		//echo "Select id,servertime,latitude,longitude,speed,course,attributes from positions WHERE id >=(SELECT min_id from indexpositions WHERE date='".$date."' and deviceid=".$deviceid.") and id <=(SELECT max_id from indexpositions WHERE date='".$date."' and deviceid=".$deviceid.") and deviceid=".$deviceid." and DATE(servertime)='".$date."' group by HOUR(servertime), MINUTE(servertime) order by servertime desc";
		return $this->db->select("Select id,servertime,latitude,longitude,speed,course,attributes from positions WHERE id >=(SELECT min_id from indexpositions WHERE date='".$date."' and deviceid=".$deviceid.") and id <=(SELECT max_id from indexpositions WHERE date='".$date."' and deviceid=".$deviceid.") and deviceid=".$deviceid."  and DATE(servertime)='".$date."' and speed=0 order by servertime ASC");
		
	}
	
	
	public function getAllevents()
	{
		return $this->db->select("SELECT * FROM `events`");
	}


  	
	public function getAllgeofences()
	{
		if(Session::get('userType') == "customer"){
	$useridP=Session::get('parent_traccarID');
	$userid=Session::get('traccarID');
	return $this->db->select("SELECT * FROM `geofences` WHERE id IN (SELECT geofenceid FROM user_geofence WHERE userid=".$userid." OR  userid=".$useridP." ) ORDER BY name");
	
		}
		else{
			
	$userid=Session::get('traccarID');
	return $this->db->select("SELECT * FROM `geofences` WHERE id IN (SELECT geofenceid FROM user_geofence WHERE userid=".$userid.") ORDER BY name");
	
	}
			}

			public function mgetAllgeofences($userType,$parent_traccarID,$traccarID)
			{
				if($userType == "customer"){
			$useridP=$parent_traccarID;
			$userid=$traccarID;
			return $this->db->select("SELECT * FROM `geofences` WHERE id IN (SELECT geofenceid FROM user_geofence WHERE userid=".$userid." OR  userid=".$useridP." )");
			
				}
				else{
					
			$userid=$traccarID;
			return $this->db->select("SELECT * FROM `geofences` WHERE id IN (SELECT geofenceid FROM user_geofence WHERE userid=".$userid.")");
			
			}
					}		

	public function getAssigndevice()
	{
		
		return $this->db->select("SELECT * FROM `devices` ORDER BY name");
	}
	public function getAssigngeofences()
	{
		
		return $this->db->select("SELECT * FROM `geofences` ");
	}

	public function getAllUsergeofence($deviceid)
	{
		$deviceid=$_POST['device'];
		return $this->db->select("SELECT * FROM `geofences` WHERE id IN (SELECT geofenceid FROM device_geofence WHERE deviceid=".$deviceid.") ORDER BY name");
	}
	/*public function getAllgeofencesC()
	{
	$userid=Session::get('parent_traccarID');
	echo $userid;
		return $this->db->select("SELECT * FROM `geofences` WHERE id IN (SELECT geofenceid FROM user_geofence WHERE userid=".$userid.")");
	}*/

    public function ct($date,$lat,$long,$rad){
       echo "SELECT *, 6372.8 * 2 * ASIN(SQRT( POWER(SIN((`latitude` - ".$lat.") *  pi()/180 / 2), 2) +COS(`latitude` * pi()/180) * COS(".$lat." * pi()/180) * POWER(SIN((`longitude` - ".$long.") * pi()/180 / 2), 2) )) as distance FROM `positions` WHERE id>=(select MIN(min_id)from indexpositions WHERE date='".$date."') and id <=(select MAX(max_id)from indexpositions WHERE date='".$date."') and 6372.8 * 2 * ASIN(SQRT( POWER(SIN((`latitude` - ".$lat.") *  pi()/180 / 2), 2) +COS(`latitude` * pi()/180) * COS(".$lat." * pi()/180) * POWER(SIN((`longitude` -".$long.") * pi()/180 / 2), 2) )) <= ".$rad." and speed >0 GROUP BY HOUR(servertime), MINUTE(servertime) , deviceid ORDER BY id,deviceid";
		return $this->db->select("SELECT *, 6372.8 * 2 * ASIN(SQRT( POWER(SIN((`latitude` - ".$lat.") *  pi()/180 / 2), 2) +COS(`latitude` * pi()/180) * COS(".$lat." * pi()/180) * POWER(SIN((`longitude` - ".$long.") * pi()/180 / 2), 2) )) as distance FROM `positions` WHERE id>=(select MIN(min_id)from indexpositions WHERE date='".$date."') and id <=(select MAX(max_id)from indexpositions WHERE date='".$date."') and 6372.8 * 2 * ASIN(SQRT( POWER(SIN((`latitude` - ".$lat.") *  pi()/180 / 2), 2) +COS(`latitude` * pi()/180) * COS(".$lat." * pi()/180) * POWER(SIN((`longitude` -".$long.") * pi()/180 / 2), 2) )) <= ".$rad." and speed >0 GROUP BY HOUR(servertime), MINUTE(servertime) , deviceid ORDER BY deviceid ASC,id ASC");
	}

	public function computeTrips($min,$max,$geofences){

       // SELECT a.* ,b.name ,b.id , c.id,c.latitude ,c.longitude,c.speed,c.course FROM `events` a , `geofences` b, `positions` c  WHERE `geofenceid` IN ($geofences) and DATE(a.servertime)='$date' and b.id= a.geofenceid and c.id=a.positionid Order by a.deviceid, a.servertime
		//	echo "SELECT a.* ,b.name ,c.latitude ,c.longitude,c.speed,c.course,d.name as vehicle FROM `events` a , `geofences` b, `positions` c ,`devices` d WHERE `geofenceid` IN ($geofences) and DATE(a.servertime) BETWEEN '$date1' AND '$date2' and b.id= a.geofenceid and c.id=a.positionid and a.deviceid=d.id Order by a.deviceid, a.servertime";
		return $this->db->select("SELECT a.* ,b.name ,c.latitude ,c.longitude,c.speed,c.course,d.name as vehicle FROM `events` a , `geofences` b, `positions` c ,`devices` d WHERE `geofenceid` IN ($geofences) and a.id >= '$min' AND a.id<='$max'  and a.type LIKE 'geofenceE%' and b.id= a.geofenceid and c.id=a.positionid and a.deviceid=d.id Order by d.name, a.servertime");
	}

	public function getIndexEvents($date){
		return $this->db->select("SELECT min_id,max_id FROM `indexevents` WHERE date='".$date."'");
	}
	public function getonedevice($id)
	{
		return $this->db->select("SELECT * FROM `devices` WHERE id='".$id."'");
	}
	
	public function getoneevents($id)
	{
		return $this->db->select("SELECT * FROM `events` WHERE id='".$id."'");
	}
	public function getonegeofences($id)
	{
		return $this->db->select("SELECT * FROM `geofences` WHERE id='".$id."'");
	}
	public function getonegroup($id)
	{
		return $this->db->select("SELECT * FROM `groups` WHERE id='".$id."'");
	}
	public function getonenotification($id)
	{
		return $this->db->select("SELECT * FROM `groups` WHERE id='".$id."'");
	}
	public function submit_devices($data)
	{
		//print_r($data);
		$this->db->insert('devices', $data);
	}
	
	public function submit_events($data)
	{
		//print_r($data);
		$this->db->insert('events', $data);
	}
	public function submit_geofences($data)
	{
		//print_r($data);
		$this->db->insert('geofences', $data);
	}
	public function edit_submit_events($data,$arg)
	{
		//print_r($data);
		//echo $arg;
		$this->db->update('events', $data,
				"`id` = $arg");
	}
	public function edit_submit_devices($data,$arg)
	{
		//print_r($data);
		//echo $arg;
		$this->db->update('devices', $data,
				"`id` = $arg");
	}
	public function edit_submit_geofences($data,$arg)
	{
		//print_r($data);
		//echo $arg;
		$this->db->update('geofences', $data,
				"`id` = $arg");
	}
	public function delete_devices($id)   
	{
		$this->db->delete('devices', "`id` = {$id}");
		//echo "delete $id";
	}
	
	public function delete_events($id)   
	{
		$this->db->delete('events', "`id` = {$id}");
		//echo "delete $id";
	}
	public function delete_geofences($id)   
	{
		$this->db->delete('geofences', "`id` = {$id}");
		//echo "delete $id";
	}
	public function index()
	{
		return $this->db->select("SELECT * FROM `tyreissuevoucher`");
	}
	public function getDevices()
	{
		return $this->db->select("SELECT * FROM `devices`");
	}

	
	public function getAllroutes()
	{
		$y=Session::get('admin_id');
		return $this->db->select("SELECT id, routename from routes where admin_id='".$y."'");
		
	}

	public function getAllSubroutes($subrouteid)
	{
		//$y=Session::get('admin_id');
		//echo "SELECT * from subroutes where routeid='".$subrouteid."'";
		return $this->db->select("SELECT * from subroutes where routeid='".$subrouteid."'");
		
	}

	public function submit_routes($data)
	{
		//print_r($data);
		$returnId=$this->db->insert('routes', $data);
		return $returnId;
	}
	
	public function submit_subroutes($data1)
	{
		//print_r($data);
		$this->db->insert('subroutes', $data1);
	}
	public function getOneroute($id)
	{
		return $this->db->select("SELECT * FROM `routes` WHERE id='".$id."' LIMIT 1");
	}
	public function edit_routes($data,$arg)
	{
		//print_r($data);
		//echo $arg;
		$this->db->update('routes', $data,
				"`id` = $arg");
	}
	public function edit_subroutes($data1,$arg)
	{
		//print_r($data);
		//echo $arg;
		$this->db->update('subroutes', $data1,
				"`id` = $arg");
	}
	public function delete_routes($id)   
	{
		$this->db->delete('routes', "`id` = {$id}");
		//echo "delete $id";
	}
	public function delete_subroutes($id)   
	{
		$this->db->delete('subroutes', "`routeid` = '{$id}'",100);
		//echo "delete $id";
	}
	/////////////////////////
	
	
	/*public function getallusers()
	{
		return $this->db->select("SELECT * FROM `users` ORDER BY id DESC");
	}*/
	public function getoneuser($admin_id)
	{
		return $this->db->select("SELECT * FROM `admin` WHERE admin_id='".$admin_id."' AND userType='user' LIMIT 1");
	}
	
	
	public function getonecustomer($admin_id)
	{
		return $this->db->select("SELECT * FROM `admin` WHERE admin_id='".$admin_id."' AND userType='customer' LIMIT 1");
	}
	public function suspend($admin_id)
	{
		return $this->db->select("Update `admin` SET otp_verified='no' WHERE admin_id='".$admin_id."'");
	}
	public function unsuspend($admin_id)
	{
		return $this->db->select("Update `admin` SET otp_verified='yes' WHERE admin_id='".$admin_id."'");
	}

/*public function submit_users($data)
	{
		$this->db->insert('users', $data);
	}*/
	
public function submit_users_devices($data1)
	{
		$this->db->insert('user_device', $data1);
	}
	public function submit_users_geofences($data2)
	{
		$this->db->insert('user_geofence', $data2);
	}
	public function submit_users_groups($data3)
	{
		$this->db->insert('user_group', $data3);
	}
	public function edit_submit_users_devices($data1,$arg)
	{
		//print_r($data);
		//echo $arg;
		$this->db->update('user_device', $data1,
				"`id` = $arg");
	}
	public function edit_submit_users_geofence($data2,$arg)
	{
		//print_r($data);
		//echo $arg;
		$this->db->update('user_geofence', $data2,
				"`id` = $arg");
	}
	public function edit_submit_users_groups($data3,$arg)
	{
		//print_r($data);
		//echo $arg;
		$this->db->update('user_group', $data3,
				"`id` = $arg");
	}
	public function error($msg)
	{
		return '<div id="error">'.$msg.'</div>';
	}
	public function changepassword($data,$arg)
	{
		 $this->db->update('admin', $data,
				"`admin_id` = $arg");
			//	echo 'successful update';
	}
	public function getAllactivity()
	{
		$admin_id=Session::get('admin_id');
		return $this->db->select("SELECT * FROM `activity` where admin_id='".$admin_id."'");
	}
	public function insert_activity($data)
	{
		
		$this->db->insert('activity', $data);
		//echo 'reached database';	
		
	}
	public function select_geofence()
	{
		
		return $this->db->select("SELECT a.userid,b.deviceid, b.type as event_type FROM `user_geofence` a,`events` b where a.geofenceid = b.geofenceid");
		//echo 'reached database';	
		
	}
	public function select_overspeed()
	{
		
		return $this->db->select("SELECT a.userid,b.deviceid, b.type as event_type FROM `user_device` a,`smsAlerts` b where a.deviceid = b.deviceid");
		//echo 'reached database';	
		
	}
public function insert_notify($userid,$deviceid,$event_type)
	{
		$data = array(
  'userid' =>$userid,
  'deviceid' => $deviceid,
  'event_type' => $event_type
  );
		
		$this->db->insert('notification', $data);
		//echo 'reached database';	
	}
	
public function notify()
{
	return $this->db->select("SELECT * FROM `notification`");
}

public function getsmsAlerts(){
	$date=date("Y-m-d");
	return $this->db->select("SELECT * FROM `smsAlerts` WHERE DATE(servertime)='".$date."' ORDER BY servertime DESC");
}

public function getAllemployee()
	{
		//$userID=Session::get('traccarID');
		return $this->db->select("SELECT * from employee ORDER BY name");
	}
	
}
?>