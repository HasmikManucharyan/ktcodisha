<?php

class Challan_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
		Session::init();
	}
	
	
	public function getAlldriver()
	{
		//$userID=Session::get('traccarID');
		return $this->db->select("SELECT * from drivers ORDER BY name");
	}

	public function mbgetAlldriver($userID)
	{
		return $this->db->select("SELECT * FROM `drivers` WHERE id IN (SELECT driverid FROM user_driver WHERE userid=".$userID.") ORDER BY name");
	}

	public function getAlldriverparty($vendorCode)
	{
		//$userID=Session::get('traccarID');
		return $this->db->select("SELECT * from drivers ORDER BY name");
	}
	public function getAllPartyMaster()
	{
		return $this->db->select("SELECT * FROM `partymaster`");
	}
	public function getChallanAdmin($dateto,$datefrom)
	{
		$vendorCode=Session::get('vedantaVendor');
		//and IF(c.positionid!=NULL,c.positionid= b.id
		return $this->db->select("SELECT a.* from challan a  WHERE a.status !='CANCEL' AND (a.`challan_date` <='".$dateto."' AND a.`challan_date` >='".$datefrom."') AND vendorCode = ".$vendorCode." ORDER BY a.id DESC");
	}

	public function getChallan($dateto,$datefrom)
	{
		$vendorCode=Session::get('vedantaVendor');
        //echo "SELECT a.*,b.OwnerType,b.SensorSerial from challan a,vehiclemaster b  WHERE a.status !='CANCEL' AND ( DATE(a.datetime_out) <='".$dateto."' AND DATE(a.datetime_out) >='".$datefrom."') AND vendorCode = ".$vendorCode." AND a.deviceid=b.SensorSerial ORDER BY a.id DESC";
		//and IF(c.positionid!=NULL,c.positionid= b.id
		//echo "SELECT a.*,b.OwnerType,b.SensorSerial, from challan a,vehiclemaster b  WHERE a.status !='CANCEL' AND ( DATE(a.datetime_out) <='".$dateto."' AND DATE(a.datetime_out) >='".$datefrom."') AND vendorCode = ".$vendorCode." AND a.deviceid=b.SensorSerial ORDER BY a.id DESC";
		return $this->db->select("SELECT a.*,b.OwnerType,b.SensorSerial from challan a,vehiclemaster b  WHERE a.status !='CANCEL' AND ( DATE(a.datetime_out) <='".$dateto."' AND DATE(a.datetime_out) >='".$datefrom."') AND vendorCode = ".$vendorCode." AND a.deviceid=b.SensorSerial ORDER BY a.id DESC");
	}

	public function getChallanktc($dateto,$datefrom)
	{
		//$vendorCode=Session::get('vedantaVendor');
		//and IF(c.positionid!=NULL,c.positionid= b.id
	    //return $this->db->select("SELECT a.* from ktcchallan a  WHERE  ( DATE(a.datetime_in) <='".$dateto."' AND DATE(a.datetime_in) >='".$datefrom."') ORDER BY a.id DESC");
        //echo "SELECT a.*,b.OwnerType,b.SensorSerial from ktcchallan a,vehiclemaster b  WHERE a.status !='CANCEL' AND ( DATE(a.datetime_in) <='".$dateto."' AND DATE(a.datetime_in) >='".$datefrom."')  AND a.deviceid=b.SensorSerial ORDER BY a.id DESC";
		return $this->db->select("SELECT a.*,b.OwnerType,b.SensorSerial from ktcchallan a,vehiclemaster b  WHERE a.status !='CANCEL' AND ( DATE(a.datetime_in) <='".$dateto."' AND DATE(a.datetime_in) >='".$datefrom."')  AND a.deviceid=b.SensorSerial ORDER BY a.id DESC");

	}

	public function getChallanForUpdates($dateto,$datefrom)
	{
		//and IF(c.positionid!=NULL,c.positionid= b.id
		return $this->db->select("SELECT a.* from challan a  WHERE a.status !='CANCEL' AND (a.`challan_date` <='".$dateto."' AND a.`challan_date` >='".$datefrom."') ORDER BY a.id DESC");
	}

	public function getChallanByDate($date,$event)
	{
		//echo "SELECT COUNT(*) from challan  WHERE DATE($event)='$date' AND status !='CANCEL'";
		return $this->db->select("SELECT COUNT(*) from challan  WHERE DATE($event)='$date' AND status !='CANCEL'");
	}


	public function getChallanByDateBanjari($date,$vendorCode='')
	{
		//echo "SELECT COUNT(*) from challan  WHERE DATE($event)='$date' AND status !='CANCEL'";
		//echo "SELECT COUNT(*) from challan  WHERE status='ENTRY DONE' AND DATE(datetime_in)='$date' AND status !='CANCEL'";
		if($vendorCode==''){
		return $this->db->select("SELECT COUNT(*) as Total from challan  WHERE (status='Submitted' OR status='SUBMITTED') AND challan_date<='$date' AND vehicle_no IS NOT NULL AND status !='CANCEL'");
			} else {
		return $this->db->select("SELECT COUNT(*) as Total from challan  WHERE (status='Submitted' OR status='SUBMITTED') AND challan_date<='$date' AND vehicle_no IS NOT NULL AND status !='CANCEL' AND vendorCode='".$vendorCode."'");
		}
	}
	public function getAllChallanByDateBanjari($date,$vendorCode='')
	{
		//echo "SELECT COUNT(*) from challan  WHERE DATE($event)='$date' AND status !='CANCEL'";
		//echo "SELECT COUNT(*) from challan  WHERE status='ENTRY DONE' AND DATE(datetime_in)='$date' AND status !='CANCEL'";
		if($vendorCode==''){
			return $this->db->select("SELECT * from challan  WHERE (status='Submitted' OR status='SUBMITTED') AND challan_date<='$date' AND vehicle_no IS NOT NULL AND status !='CANCEL'");
		} else {
			return $this->db->select("SELECT * from challan  WHERE (status='Submitted' OR status='SUBMITTED') AND challan_date<='$date' AND vehicle_no IS NOT NULL AND status !='CANCEL' AND vendorCode='".$vendorCode."'");
		}
	}


	public function getAllChallanByDateEntry($date,$vendorCode='')
	{
		//echo "SELECT COUNT(*) from challan  WHERE DATE($event)='$date' AND status !='CANCEL'";
		//echo "SELECT COUNT(*) from challan  WHERE status='ENTRY DONE' AND DATE(datetime_in)='$date' AND status !='CANCEL'";
		if($vendorCode==''){
			return $this->db->select("SELECT COUNT(*) as Total from challan  WHERE  DATE(datetime_in)='$date' AND status !='CANCEL'");
		} else {
			return $this->db->select("SELECT COUNT(*) as Total from challan  WHERE  DATE(datetime_in)='$date' AND status !='CANCEL' AND vendorCode='".$vendorCode."'");
		}	
	}
    
    
    ///////////// web vendor vehicle entry report ////////////
    
    public function getAllChallanByDateEntryWeb($date,$vendorCode)
	{
		//echo "SELECT COUNT(*) from challan  WHERE DATE($event)='$date' AND status !='CANCEL'";
		//echo "SELECT COUNT(*) from challan  WHERE status='ENTRY DONE' AND DATE(datetime_in)='$date' AND status !='CANCEL'";
		
			return $this->db->select("SELECT * from challan  WHERE  DATE(datetime_in)='$date' AND status !='CANCEL' AND vendorCode='".$vendorCode."'");
		
	}
    
    

	public function getChallanByDateEntry($date,$vendorCode='')
	{
		//echo "SELECT COUNT(*) from challan  WHERE DATE($event)='$date' AND status !='CANCEL'";
		//echo "SELECT COUNT(*) from challan  WHERE status='ENTRY DONE' AND DATE(datetime_in)='$date' AND status !='CANCEL'";
		if($vendorCode==''){
		return $this->db->select("SELECT COUNT(*) as Total from challan  WHERE  DATE(datetime_in)='$date' AND (status='ENTRY DONE' or status='TARE WEIGHT DONE')  AND status !='CANCEL'");
	} else {
		return $this->db->select("SELECT COUNT(*) as Total from challan  WHERE  DATE(datetime_in)='$date' AND (status='ENTRY DONE' or status='TARE WEIGHT DONE')  AND status !='CANCEL' AND vendorCode='".$vendorCode."'");
	}	
	}

	public function getALLChallanByDateEntryList($date,$vendorCode='')
	{
		if($vendorCode==''){
		return $this->db->select("SELECT * from challan  WHERE  DATE(datetime_in)='$date' AND (status='ENTRY DONE' or status='TARE WEIGHT DONE') AND status !='CANCEL' ORDER BY datetime_in ASC");
	} else {
		return $this->db->select("SELECT * from challan  WHERE  DATE(datetime_in)='$date' AND (status='ENTRY DONE' or status='TARE WEIGHT DONE') AND status !='CANCEL'  AND vendorCode='".$vendorCode."' ORDER BY datetime_in ASC");
	}	
	}

	public function getChallanByDateExit($date,$vendorCode='')
	{
		if($vendorCode==''){
		return $this->db->select("SELECT COUNT(*) as Total from challan  WHERE DATE(datetime_out)='$date' AND status !='CANCEL'");
	} else {
		return $this->db->select("SELECT COUNT(*) as Total from challan  WHERE DATE(datetime_out)='$date' AND status !='CANCEL' AND vendorCode='".$vendorCode."'");
	}	
	}

	public function getAllChallanByDateUnload($date,$vendorCode='')
	{
		if($vendorCode==''){
			return $this->db->select("SELECT * from challan  WHERE DATE(unloadingtime)='$date' AND status !='CANCEL' ORDER BY datetime_out DESC");
		} else {
			return $this->db->select("SELECT * from challan  WHERE DATE(unloadingtime)='$date' AND status !='CANCEL'  AND vendorCode='".$vendorCode."' ORDER BY unloadingtime DESC");
		}	
	}

	public function getAllChallanByDateExit($date,$vendorCode='')
	{
		if($vendorCode==''){
		return $this->db->select("SELECT * from challan  WHERE DATE(datetime_out)='$date' AND status !='CANCEL' ORDER BY datetime_out DESC");
	} else {
		return $this->db->select("SELECT * from challan  WHERE DATE(datetime_out)='$date' AND status !='CANCEL'  AND vendorCode='".$vendorCode."' ORDER BY datetime_out DESC");
	}	
	}

	public function getVehicleWiseTripCounts($date,$vendorCode=''){
	
		if($vendorCode==''){
		return $this->db->select("SELECT count(deviceid) as Trips, deviceid from challan  WHERE DATE(datetime_out)='$date' AND status !='CANCEL' GROUP BY deviceid ORDER BY count(deviceid)  DESC");
	} else {
		return $this->db->select("SELECT count(deviceid) as Trips, deviceid from challan  WHERE DATE(datetime_out)='$date' AND status !='CANCEL' AND vendorCode='".$vendorCode."' GROUP BY deviceid ORDER BY count(deviceid)  DESC");
	}	
	}

	public function getVehicleWiseTrips($vendorCode=''){
		if($vendorCode==''){
				return $this->db->select("SELECT DISTINCT(`vehicle_no`) as Vehicle,MAX(`datetime_out`) as LastTrip,CONCAT(FLOOR(TIME_FORMAT(SEC_TO_TIME(TIMESTAMPDIFF(SECOND, MAX(`datetime_out`), NOW())), '%H') / 24), 'd ',MOD(TIME_FORMAT(SEC_TO_TIME(TIMESTAMPDIFF(SECOND, MAX(`datetime_out`), NOW())), '%H'), 24), ':',TIME_FORMAT(SEC_TO_TIME(TIMESTAMPDIFF(SECOND, MAX(`datetime_out`), NOW())), '%i:%s')) as TDiff , deviceid ,vendorCode from challan  WHERE status !='CANCEL' GROUP BY deviceid ORDER BY MAX(`datetime_out`)  ASC");
			} else {
				return $this->db->select("SELECT DISTINCT(`vehicle_no`) as Vehicle,MAX(`datetime_out`) as LastTrip,CONCAT(FLOOR(TIME_FORMAT(SEC_TO_TIME(TIMESTAMPDIFF(SECOND, MAX(`datetime_out`), NOW())), '%H') / 24), 'd ',MOD(TIME_FORMAT(SEC_TO_TIME(TIMESTAMPDIFF(SECOND, MAX(`datetime_out`), NOW())), '%H'), 24), ':',TIME_FORMAT(SEC_TO_TIME(TIMESTAMPDIFF(SECOND, MAX(`datetime_out`), NOW())), '%i:%s')) as TDiff , deviceid ,vendorCode from challan  WHERE status !='CANCEL'  AND vendorCode='".$vendorCode."' GROUP BY deviceid ORDER BY MAX(`datetime_out`) ASC");
			}		
	}


	public function getVehicleWiseMonthlyTrips($date=''){
		if($date==''){
				$date=date("Y-m");
		}
			//	echo "SELECT COUNT(*) as Trips ,vehicle_no,vendorCode ,deviceid,SUM(netweight)/1000 as TQty,round((SUM(netweight)/1000)/COUNT(*),2) as Avg , MAX(datetime_out) as LastOut ,MAX(challan_entry_time) as LastIn, if(MAX(`datetime_out`)<MAX(`challan_entry_time`), CONCAT(FLOOR(TIME_FORMAT(SEC_TO_TIME(TIMESTAMPDIFF(SECOND, MAX(`datetime_out`),  MAX(`challan_entry_time`))), '%H') / 24), 'd ',MOD(TIME_FORMAT(SEC_TO_TIME(TIMESTAMPDIFF(SECOND, MAX(`datetime_out`),  MAX(`challan_entry_time`))), '%H'), 24), ':',TIME_FORMAT(SEC_TO_TIME(TIMESTAMPDIFF(SECOND, MAX(`datetime_out`),  MAX(`challan_entry_time`))), '%i:%s')),CONCAT(FLOOR(TIME_FORMAT(SEC_TO_TIME(TIMESTAMPDIFF(SECOND, MAX(`challan_entry_time`), NOW())), '%H') / 24), 'd ',MOD(TIME_FORMAT(SEC_TO_TIME(TIMESTAMPDIFF(SECOND, MAX(`challan_entry_time`), NOW())), '%H'), 24), ':',TIME_FORMAT(SEC_TO_TIME(TIMESTAMPDIFF(SECOND, MAX(`challan_entry_time`), NOW())), '%i:%s'))) as Rentry FROM `challan` WHERE  (DATE_FORMAT(DATE(datetime_out),'%Y-%m') ='".$date."' or DATE_FORMAT(DATE(datetime_in),'%Y-%m') ='2018-03') AND vendorCode='206243' AND status!='CANCEL' GROUP BY vehicle_no ORDER BY MAX(datetime_out) ASC";

				return $this->db->select("SELECT vehicle_no,vendorCode ,deviceid , MAX(datetime_out) as LastOut ,MAX(challan_entry_time) as LastIn, if(MAX(`datetime_out`)<MAX(`challan_entry_time`), CONCAT(FLOOR(TIME_FORMAT(SEC_TO_TIME(TIMESTAMPDIFF(SECOND, MAX(`challan_entry_time`),  NOW())), '%H') / 24), 'd ',MOD(TIME_FORMAT(SEC_TO_TIME(TIMESTAMPDIFF(SECOND, MAX(`challan_entry_time`),  NOW())), '%H'), 24), ':',TIME_FORMAT(SEC_TO_TIME(TIMESTAMPDIFF(SECOND, MAX(`challan_entry_time`),  NOW())), '%i:%s')),CONCAT(FLOOR(TIME_FORMAT(SEC_TO_TIME(TIMESTAMPDIFF(SECOND, MAX(`datetime_out`), NOW())), '%H') / 24), 'd ',MOD(TIME_FORMAT(SEC_TO_TIME(TIMESTAMPDIFF(SECOND, MAX(`datetime_out`), NOW())), '%H'), 24), ':',TIME_FORMAT(SEC_TO_TIME(TIMESTAMPDIFF(SECOND, MAX(`datetime_out`), NOW())), '%i:%s'))) as Rentry FROM `challan` WHERE (DATE(datetime_out) >= DATE(NOW()- INTERVAL 1 DAY) OR DATE(challan_entry_time) >= DATE(NOW() - INTERVAL 1 DAY))AND vendorCode='206243' AND status!='CANCEL' GROUP BY vehicle_no ORDER BY MAX(datetime_out) ASC");
	}

	public function getVehicleWiseMonthlyTripsCount($date=''){
		if($date==''){
			$date=date("Y-m");
	}
		return $this->db->select("SELECT COUNT(*) as Trips,deviceid ,ROUND(SUM(netweight)/1000,2) as TQty FROM `challan` WHERE  DATE_FORMAT(DATE(datetime_out),'%Y-%m') ='".$date."' AND status!='CANCEL' GROUP BY vehicle_no ORDER BY MAX(datetime_out) ASC");
}



	public function getGrossWeight($date,$vendorCode='')
	{
		if($vendorCode==''){
		return $this->db->select("SELECT SUM(netweight) as Total from challan  WHERE DATE(datetime_out)='$date' AND status !='CANCEL'");
	} else {
		return $this->db->select("SELECT SUM(netweight) as Total from challan  WHERE DATE(datetime_out)='$date' AND status !='CANCEL'  AND vendorCode='".$vendorCode."'");
	}		
	}

	public function getChallanByDateLoadingIN($date,$vendorCode='')
	{
		if($vendorCode==''){
		return $this->db->select("SELECT COUNT(*) as Total from challan  WHERE status='LOADING IN' AND loading_timeOUT='0000-00-00 00:00:00'  AND grossweight IS NULL AND DATE(loading_timeIN)<='$date' AND status !='CANCEL'");
	} else {
		return $this->db->select("SELECT COUNT(*) as Total from challan  WHERE status='LOADING IN' AND loading_timeOUT='0000-00-00 00:00:00'  AND grossweight IS NULL AND DATE(loading_timeIN)<='$date' AND status !='CANCEL' AND vendorCode='".$vendorCode."'");
	}	
	}

	public function getAllChallanByDateLoadingIN($date,$vendorCode='')
	{
		if($vendorCode==''){
		return $this->db->select("SELECT * from challan  WHERE status='LOADING IN' AND loading_timeOUT='0000-00-00 00:00:00'  AND grossweight IS NULL AND DATE(loading_timeIN)<='$date' AND status !='CANCEL' ORDER BY loading_timeIN ASC");
	} else {
		return $this->db->select("SELECT * from challan  WHERE status='LOADING IN' AND loading_timeOUT='0000-00-00 00:00:00'  AND grossweight IS NULL AND DATE(loading_timeIN)<='$date' AND status !='CANCEL' AND vendorCode='".$vendorCode."' ORDER BY loading_timeIN ASC");
	}	
	}

	public function getChallanByDateLoadingOUT($date,$vendorCode='')
	{
		if($vendorCode==''){	
		return $this->db->select("SELECT COUNT(*) as Total from challan  WHERE (status='LOADING OUT' AND loading_timeIN!='0000-00-00 00:00:00')AND grossweight IS NULL AND (DATE(loading_timeOUT)<='$date' OR DATE(loading_timeIN)='$date') AND status !='CANCEL'");
	} else {
		return $this->db->select("SELECT COUNT(*) as Total from challan  WHERE (status='LOADING OUT' AND loading_timeIN!='0000-00-00 00:00:00')AND grossweight IS NULL AND (DATE(loading_timeOUT)<='$date' OR DATE(loading_timeIN)='$date') AND status !='CANCEL' AND vendorCode='".$vendorCode."'");
	}	
	}

	public function getAllChallanByDateLoadingOUT($date,$vendorCode='')
	{
		if($vendorCode==''){	
		return $this->db->select("SELECT * from challan  WHERE (status='LOADING OUT' AND loading_timeIN!='0000-00-00 00:00:00')AND grossweight IS NULL AND (DATE(loading_timeOUT)<='$date' OR DATE(loading_timeIN)='$date') AND status !='CANCEL' ORDER BY loading_timeOUT ASC");
	} else {
		return $this->db->select("SELECT * from challan  WHERE (status='LOADING OUT' AND loading_timeIN!='0000-00-00 00:00:00')AND grossweight IS NULL AND (DATE(loading_timeOUT)<='$date' OR DATE(loading_timeIN)='$date') AND status !='CANCEL' AND vendorCode='".$vendorCode."' ORDER BY loading_timeOUT ASC");
	}
	}

	public function getAllChallanByDateGross($date,$vendorCode='')
	{
		if($vendorCode==''){	
			return $this->db->select("SELECT * from challan  WHERE (status='GROSS WEIHT DONE' OR status='GROSS WEIGHT DONE') AND grossweight>0 AND datetime_out IS NOT NULL AND datetime_out='0000-00-00 00:00:00'  AND status !='CANCEL' ORDER BY gross_weight_time ASC");
		} else {
			return $this->db->select("SELECT * from challan  WHERE (status='GROSS WEIHT DONE' OR status='GROSS WEIGHT DONE') AND grossweight>0 AND datetime_out IS NOT NULL AND datetime_out='0000-00-00 00:00:00'  AND status !='CANCEL'  AND vendorCode='".$vendorCode."' ORDER BY gross_weight_time ASC");
		}
		}
	public function getChallanByDateGross($date,$vendorCode='')
	{
		if($vendorCode==''){
		return $this->db->select("SELECT COUNT(*) as Total from challan  WHERE (status='GROSS WEIHT DONE' OR status='GROSS WEIGHT DONE') AND grossweight>0 AND datetime_out IS NOT NULL AND datetime_out='0000-00-00 00:00:00'  AND status !='CANCEL'");
	} else {
		return $this->db->select("SELECT COUNT(*) as Total from challan  WHERE (status='GROSS WEIHT DONE' OR status='GROSS WEIGHT DONE') AND grossweight>0 AND datetime_out IS NOT NULL AND datetime_out='0000-00-00 00:00:00'  AND status !='CANCEL' AND vendorCode='".$vendorCode."'");
		}
	}


    public function tripssummary($vendorCode){
		//OR DATE(datetime_in)=DATE(now()
		return $this->db->select("SELECT * from challan  WHERE (DATE(datetime_out) BETWEEN DATE(now() - INTERVAL 1 DAY) AND DATE(now())  OR DATE(datetime_in) BETWEEN DATE(now() - INTERVAL 1 DAY) AND DATE(now()) )AND status !='CANCEL'  AND vendorCode='".$vendorCode."'  ORDER BY challan_entry_time ASC");
	}

	public function getAllChallan($code)
	{
		//$userID=Session::get('traccarID');
		return $this->db->select("SELECT * from challan WHERE vendorCode='".$code."' ORDER BY id DESC LIMIT 1");
	}

	public function getChallanByDateMAX($date='')
	   {
		   if($date==''){
			   $date=date("Y-m-d");
		   }
		   //echo "SELECT COUNT(*) from challan  WHERE DATE($event)='$date' AND status !='CANCEL'";
		   return $this->db->select("SELECT * from challan  inner join (select max(challanno) as Total from challan WHERE status!='CANCEL' group by deviceid) as max on max.Total = challan.challanno");
	   }

	public function getMAXChallan()
	{
		//$userID=Session::get('traccarID');
		return $this->db->select("SELECT MAX(challanno) AS MC from challan");
	}
	
	public function KTCgetChallanByDateMAX()
	   {

		   //echo "SELECT COUNT(*) from challan  WHERE DATE($event)='$date' AND status !='CANCEL'";
		   return $this->db->select("SELECT MAX(challanno) as Total from ktcchallan");
	   }
	public function lastPosition($deviceid)
	{
		return $this->db->select("SELECT * FROM `positions` where deviceid=".$deviceid." ORDER BY id DESC LIMIT 1");
	}

	public function logevents($data){
		$mydata = array(
			'data' => $data
		);
		$returnId=$this->db->insert('logevents', $mydata);
		return $returnId;
	}

	public function logToll($mydata){
		$returnId=$this->db->insert('logToll', $mydata);
		return $returnId;
	}
	public function submit_challan($data)
	{
		$returnId=$this->db->insert('challan', $data);
		return $returnId;
	}

	public function submit_challanKTC($data)
	{
		$returnId=$this->db->insert('ktcchallan', $data);
		return $returnId;
	}
	public function getAllPendingchallan($deviceid)
	{
		$pending_challan=$this->db->select("SELECT * FROM `challan` where deviceid=".$deviceid." AND (datetime_out IS NULL OR datetime_out ='0000-00-00 00:00:00')  AND status !='CANCEL' ORDER BY id DESC LIMIT 1");
		
		//echo "SELECT * FROM `challan` where deviceid=".$deviceid." AND datetime_out IS NULL OR datetime_in IS NULL";  OR unloadingtime IS NULL OR unloadingpoint IS NULL
		return $pending_challan;
		
	}

	public function getAllPendingchallanKTC($deviceid)
	{
		$pending_challan=$this->db->select("SELECT * FROM `ktcchallan` where deviceid=".$deviceid." AND (datetime_out IS NULL OR datetime_out ='0000-00-00 00:00:00')  AND status !='CANCEL' ORDER BY id DESC LIMIT 1");
		//echo "SELECT * FROM `challan` where deviceid=".$deviceid." AND datetime_out IS NULL OR datetime_in IS NULL";  OR unloadingtime IS NULL OR unloadingpoint IS NULL
		return $pending_challan;
	}
    
    

	public function getAllOutchallan($deviceid)
	{
		return $this->db->select("SELECT * FROM `challan` where deviceid=".$deviceid." AND datetime_out IS NULL ORDER BY id DESC LIMIT 1");
	
		//echo "SELECT * FROM `challan` where deviceid=".$deviceid." AND datetime_out IS NULL OR datetime_in IS NULL";
		//return $out_challan;
		
	}
	public function getAllunloadchallan($deviceid)
	{
		return $this->db->select("SELECT * FROM `challan` where deviceid=".$deviceid." AND datetime_in IS NOT NULL AND datetime_out IS NOT NULL AND unloadingtime IS NULL ORDER BY id DESC LIMIT 1");
	
		//echo "SELECT * FROM `challan` where deviceid=".$deviceid." AND datetime_out IS NULL OR datetime_in IS NULL";
		//return $out_challan;
		
	}
	public function getAllCompletechallan()
	{
		return $this->db->select("SELECT * FROM `challan` where datetime_out IS NOT NULL AND datetime_in IS NOT NULL");
	}
	
	 public function getonechallan($id)
	{
		return $this->db->select("SELECT * FROM `challan` WHERE id='".$id."' LIMIT 1");
	}


	public function getonechallanKTC($id)
	{
		return $this->db->select("SELECT * FROM `ktcchallan` WHERE id='".$id."' LIMIT 1");
	}
	public function update_challan($data1,$arg)
	{
		
		$this->db->update('challan', $data1,
				"`id` = $arg");
				//echo 'data in database';
	}

	public function update_challanKTC($data1,$arg)
	{
		
		$this->db->update('ktcchallan', $data1,"`id` = $arg");
				//echo 'data in database';
	}
	public function update_challan_no($data1,$arg)
	{
		$this->db->update('challan', $data1,"`challanno` = $arg ");
				//echo 'data in database';
	}


	public function update_challan_vehicle($data1,$arg,$VEHICLE_NO)
	{
		//echo "`challanno` = $arg AND REPLACE(trim(UPPER(vehicle_no)),' ','') =REPLACE(trim(UPPER('$VEHICLE_NO')),' ','')";
		$string = "`challanno` = ".$arg." AND REPLACE(trim(UPPER(vehicle_no)),' ','') =REPLACE(trim(UPPER('".$VEHICLE_NO."')),' ','')";
		$this->db->update('challan', $data1,$string);
		// $myData = a
		// $this->db->insert('logchallan', serialize($data1));
				//echo 'data in database';
	}

	public function getAlldevices()
	{
		if(Session::get('userType')=="user"){
			$x=Session::get('admin_id');
			return $this->db->select("SELECT * FROM `devices` WHERE id IN (SELECT deviceid FROM our_user_devices WHERE userid=".$x.") ORDER BY name");
		}
		else{
			$x=Session::get('traccarID');
			return $this->db->select("SELECT * FROM `devices` WHERE id IN (SELECT deviceid FROM user_device WHERE userid=".$x.") ORDER BY name");
		}
	}

	public function getAllUserdevices($x)
	{
		return $this->db->select("SELECT * FROM `devices` WHERE id IN (SELECT deviceid FROM user_device WHERE userid=".$x.") ORDER BY name");
	}
	  
	public function getAllroutes($x='')
	{
		$y=Session::get('admin_id');
		if($y==''){
			$y=$x;
		}
		return $this->db->select("SELECT id, routename from routes where admin_id='".$y."'");
		
	}

	public function getAllSubroutes($subrouteid)
	{
		//$y=Session::get('admin_id');
		//echo "SELECT * from subroutes where routeid='".$subrouteid."'";
		return $this->db->select("SELECT * from subroutes where routeid='".$subrouteid."'");
		
	}

	public function getonegeofences($id)
	{
		return $this->db->select("SELECT * FROM `geofences` WHERE id='".$id."'");
	}


	public function KTCGetLoadingTrips($subroute,$date)
	{
		//$date=date("Y-m-d");

		//echo "SELECT * from ktcchallan  WHERE (from = '".$subroute."' AND DATE(datetime_in) ='".$date."')";
		return $this->db->select("SELECT * from ktcchallan  WHERE (`from` = '".$subroute."' AND DATE(datetime_in) ='".$date."') ORDER BY datetime_in DESC");
	}

	public function KTCGetAllLoadingTrips($date)
	{
		//$date=date("Y-m-d");

		//echo "SELECT * from ktcchallan  WHERE DATE(datetime_in) ='".$date."'";
		return $this->db->select("SELECT * from ktcchallan  WHERE DATE(datetime_in) ='".$date."' ORDER BY datetime_in DESC");
	}

	public function KTCGetAllLoadingTripsCount($date)
	{
		//$date=date("Y-m-d");

		//echo "SELECT * from ktcchallan  WHERE DATE(datetime_in) ='".$date."'";
		return $this->db->select("SELECT COUNT(*) As Total from ktcchallan  WHERE DATE(datetime_in) ='".$date."' ORDER BY datetime_in DESC");
	}
	public function KTCGetUnLoadingTrips($subroute)
	{
		$date=date("Y-m-d");
		//echo "SELECT * from ktcchallan  WHERE (from = '".$subroute."' AND DATE(datetime_in) ='".$date."')";
		return $this->db->select("SELECT * from ktcchallan  WHERE (`to` = '".$subroute."' AND DATE(datetime_out) ='".$date."') ORDER BY datetime_out DESC");
	}

	public function getOneVehicle($id)
	{
		return $this->db->select("SELECT * FROM `vehiclemaster` WHERE SensorSerial='".$id."' LIMIT 1");
	}

	public function getOnedriver($id)
	{
		return $this->db->select("SELECT * FROM `drivers` WHERE id='".$id."' LIMIT 1");
	}

	public function insert_smsAlerts($data){
		$this->db->insert('smsAlerts', $data);
		} 

	public function VL_ASH_PushVehicleDetails($data){
		$VEHICLE_NO = $data['VEHICLE_NO'];
		$VEHICLE_CARRYING_CAPACITY = $data['VEHICLE_CARRYING_CAPACITY'];
		$VEHICLE_TYPE = $data['VEHICLE_TYPE'];
		$VEHICLE_OWNER_NAME= $data['VEHICLE_OWNER_NAME'];
		$VEHICLE_OWNER_ADDRESS = $data['VEHICLE_OWNER_ADDRESS'];
		$VEHICLE_OWNER_MOBILE_NO = $data['VEHICLE_OWNER_MOBILE_NO'];
		$VEHICLE_ENGINE_NO = $data['VEHICLE_ENGINE_NO'];
		$VEHICLE_CHASSIS_NO = $data['VEHICLE_CHASSIS_NO'];
		$PUC_EXPIRY_DATE = $data['PUC_EXPIRY_DATE'];	
		$INSURANCE_EXPIRY_DATE = $data['INSURANCE_EXPIRY_DATE'];
		$FITNESS_EXPIRY_DATE = $data['FITNESS_EXPIRY_DATE'];
		$TAX_EXPIRY_DATE = $data['TAX_EXPIRY_DATE'];
		$PUC_EXPIRY_DOC = $data['PUC_EXPIRY_DOC'];
		$INSURANCE_EXPIRY_DOC = $data['INSURANCE_EXPIRY_DOC'];
		$FITNESS_EXPIRY_DOC = $data['FITNESS_EXPIRY_DOC'];
		$TAX_EXPIRY_DOC = $data['TAX_EXPIRY_DOC'];
		$VEHICLE_REGISTRATION_DOC = $data['VEHICLE_REGISTRATION_DOC'];
	
		// before soap

		$soapUrl = "https://vedantaconnect.com/VendorConnectWebService/WebService.asmx?wsdl"; // asmx URL of WSDL
		
				$xml_post_string = '<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
				<soap:Body>
				  <VL_ASH_PushVehicleDetails xmlns="http://tempuri.org/">
					<dtashinput><![CDATA[
					<table>
					<row>
					<vehicle_no>'.$VEHICLE_NO.'</vehicle_no>
					<vehicle_carrying_capacity>'.$VEHICLE_CARRYING_CAPACITY.'</vehicle_carrying_capacity>
					<vehicle_type>'.$VEHICLE_TYPE.'</vehicle_type>
					<vehicle_owner_name>'.$VEHICLE_OWNER_NAME.'</vehicle_owner_name>
					<vehicle_owner_address>'.$VEHICLE_OWNER_ADDRESS.'</vehicle_owner_address>
					<vehicle_owner_mobile_no>11'.$VEHICLE_OWNER_MOBILE_NO.'11</vehicle_owner_mobile_no>
					<vehicle_engine_no>'.$VEHICLE_ENGINE_NO.'</vehicle_engine_no>
					<vehicle_chassis_no>'.$VEHICLE_CHASSIS_NO.'</vehicle_chassis_no>
					<puc_expiry_date>'.$PUC_EXPIRY_DATE.'</puc_expiry_date>
					<insurance_expiry_date>'.$INSURANCE_EXPIRY_DATE.'</insurance_expiry_date>
					<fitness_expiry_date>'.$FITNESS_EXPIRY_DATE.'</fitness_expiry_date>
					<tax_expiry_date>'.$TAX_EXPIRY_DATE.'</tax_expiry_date>
					<puc_expiry_doc>'.$PUC_EXPIRY_DOC.'</puc_expiry_doc>
					<insurance_expiry_doc>'.$INSURANCE_EXPIRY_DOC.'</insurance_expiry_doc>
					<fitness_expiry_doc>'.$FITNESS_EXPIRY_DOC.'</fitness_expiry_doc>
					<tax_expiry_doc>'.$TAX_EXPIRY_DOC.'</tax_expiry_doc>
					<vehicle_registration_doc>'.$VEHICLE_REGISTRATION_DOC.'</vehicle_registration_doc>
					</row>
					 </table>
					 ]]>
					</dtashinput>
					<transportercode>206243</transportercode>
					<authorizationcode>XY6DLWOD72CNSHSG81737NGDGDHRDH21</authorizationcode>
				  </VL_ASH_PushVehicleDetails>
				</soap:Body>
			  </soap:Envelope>';   // data from the form, e.g. some ID number
		
				   $headers = array(
								"Content-type: text/xml;charset=\"utf-8\"",
								"Accept: text/xml",
								"Cache-Control: no-cache",
								"Pragma: no-cache",
								"Content-length: ".strlen($xml_post_string),
							); //SOAPAction: your op URL
		
					$url = $soapUrl;
		
					// PHP cURL  for https connection with auth
					$ch = curl_init();
					curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
					curl_setopt($ch, CURLOPT_URL, $url);
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				  //  curl_setopt($ch, CURLOPT_USERPWD, $soapUser.":".$soapPassword); // username and password - declared at the top of the doc
				   // curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
					curl_setopt($ch, CURLOPT_TIMEOUT, 10);
					curl_setopt($ch, CURLOPT_POST, true);
					curl_setopt($ch, CURLOPT_POSTFIELDS, $xml_post_string); // the SOAP request
					curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		
					// converting
					$response = curl_exec($ch); 
					curl_close($ch);
		
					$response1 = str_replace("<soap:body>","",$response);
					$response2 = str_replace("</soap:body>","",$response1);
		
					// convertingc to XML
					$parser = simplexml_load_string($response);
					$parser->xpath('row');
					$result= $parser->asXML(); 
					$json_string = json_encode($result); 
					$result_array = json_decode($json_string, TRUE);
		
				  $doc = new DOMDocument();
				  $doc->loadXML((string)$result);
				 // echo $length = count($doc->getElementsByTagName('row')->children.length());
				 // echo("Vehicle No:" .$doc->getElementsByTagName('vehicle_no')->item(0)->nodeValue);
				//  echo("Challan No:" .$doc->getElementsByTagName('challan_no')->item(0)->nodeValue);

				  $dataResult = array(
					'VEHICLE_NO' => $doc->getElementsByTagName('vehicle_no')->item(0)->nodeValue,
					'VEHICLE_CARRYING_CAPACITY' => $doc->getElementsByTagName('vehicle_carrying_capacity')->item(0)->nodeValue,
					'VEHICLE_TYPE' => $doc->getElementsByTagName('vehicle_type')->item(0)->nodeValue,
					'VEHICLE_OWNER_NAME' => $doc->getElementsByTagName('vehicle_owner_name')->item(0)->nodeValue,
					'VEHICLE_OWNER_ADDRESS' => $doc->getElementsByTagName('vehicle_owner_address')->item(0)->nodeValue,
					'VEHICLE_OWNER_MOBILE_NO' => $doc->getElementsByTagName('vehicle_owner_mobile_no')->item(0)->nodeValue,
					'VEHICLE_ENGINE_NO' => $doc->getElementsByTagName('vehicle_engine_no')->item(0)->nodeValue,
					'VEHICLE_CHASSIS_NO' => $doc->getElementsByTagName('vehicle_chassis_no')->item(0)->nodeValue,
					'PUC_EXPIRY_DATE' => $doc->getElementsByTagName('puc_expiry_date')->item(0)->nodeValue,
					'INSURANCE_EXPIRY_DATE' => $doc->getElementsByTagName('insurance_expiry_date')->item(0)->nodeValue,
					'FITNESS_EXPIRY_DATE' => $doc->getElementsByTagName('fitness_expiry_date')->item(0)->nodeValue,
					'TAX_EXPIRY_DATE' => $doc->getElementsByTagName('tax_expiry_date')->item(0)->nodeValue,
					'PUC_EXPIRY_DOC' => $doc->getElementsByTagName('puc_expiry_doc')->item(0)->nodeValue,
					'INSURANCE_EXPIRY_DOC' => $doc->getElementsByTagName('insurance_expiry_doc')->item(0)->nodeValue,
					'FITNESS_EXPIRY_DOC' => $doc->getElementsByTagName('fitness_expiry_doc')->item(0)->nodeValue,
					'TAX_EXPIRY_DOC' => $doc->getElementsByTagName('tax_expiry_doc')->item(0)->nodeValue,
					'ACKNOWLEDGEMENT_NO' => $doc->getElementsByTagName('acknowledgement_no')->item(0)->nodeValue,
					'VEHICLE_REGISTRATION_DOC' => $doc->getElementsByTagName('vehicle_registration_doc')->item(0)->nodeValue
				  );
		
				  print_r($dataResult);					
		// after soap
	}


	public function VL_ASH_PushVehicleChallanDetail($data){
		$VEHICLE_NO = $data['VEHICLE_NO'];
		$CHALLAN_NO = $data['CHALLAN_NO'];
		$CHALLAN_DATE = $data['CHALLAN_DATE'];
		$DRIVER_NAME = $data['DRIVER_NAME'];
		$LICENCE_NO = $data['LICENCE_NO'];
		$LICENCE_EXPIRY_DATE = $data['LICENCE_EXPIRY_DATE'];
		$VEHICLE_LABOUR = $data['VEHICLE_LABOUR'];
		$VEHICLE_ACCESSORIES = $data['VEHICLE_ACCESSORIES'];
		$LOADING_POINT = $data['LOADING_POINT'];
		$UNLOADING_POINT = $data['UNLOADING_POINT'];
		$TRANSPORTER_CODE = $data['TRANSPORTER_CODE'];
		$TRANSPORTER_AUTH = $data['TRANSPORTER_AUTH'];
	   

		// before soap
//$soapUrl_ = "https://vedantaconnect.com/VendorConnectWebService/WebService.asmx?wsdl";
		$soapUrl = "https://vedantaconnect.com/VendorConnectWebService/WebService.asmx?wsdl"; // asmx URL of WSDL
		
				$xml_post_string = '<?xml version="1.0" encoding="utf-8"?>
				<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
				  <soap:Body>
					<VL_ASH_PushVehicleChallanDetails xmlns="http://tempuri.org/">
					<dtashinput><![CDATA[
					<table>
					<row>
					<vehicle_no>'.$VEHICLE_NO.'</vehicle_no>
					<challan_no>'.$CHALLAN_NO.'</challan_no>
					<challan_date>'.$CHALLAN_DATE.'</challan_date>
					<driver_name>'.$DRIVER_NAME.'</driver_name>
					<licence_no>'.$LICENCE_NO.'</licence_no>
					<licence_expiry_date>'.$LICENCE_EXPIRY_DATE.'</licence_expiry_date>
					<vehicle_labour>'.$VEHICLE_LABOUR.'</vehicle_labour>
					<vehicle_accessories>'.$VEHICLE_ACCESSORIES.'</vehicle_accessories>
					<loading_point>'.$LOADING_POINT.'</loading_point>
					<unloading_point>'.$UNLOADING_POINT.'</unloading_point>
					</row>
					</table>
					 ]]>
					 </dtashinput>
					<transportercode>'.$TRANSPORTER_CODE.'</transportercode>
					<authorizationcode>'.$TRANSPORTER_AUTH.'</authorizationcode>
				  </VL_ASH_PushVehicleChallanDetails>
				</soap:Body>
			  </soap:Envelope>';   // data from the form, e.g. some ID number
		
			//  echo $xml_post_string;
				   $headers = array(
								"Content-type: text/xml;charset=\"utf-8\"",
								"Accept: text/xml",
								"Cache-Control: no-cache",
								"Pragma: no-cache",
								"Content-length: ".strlen($xml_post_string),
							); //SOAPAction: your op URL
		
					$url = $soapUrl;
		
					// PHP cURL  for https connection with auth
					$ch = curl_init();
					curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
					curl_setopt($ch, CURLOPT_URL, $url);
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				  //  curl_setopt($ch, CURLOPT_USERPWD, $soapUser.":".$soapPassword); // username and password - declared at the top of the doc
				   // curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
					curl_setopt($ch, CURLOPT_TIMEOUT, 10);
					curl_setopt($ch, CURLOPT_POST, true);
					curl_setopt($ch, CURLOPT_POSTFIELDS, $xml_post_string); // the SOAP request
					curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		
					// converting
					$response = curl_exec($ch); 
				//	$info = curl_getinfo($ch);
				//var_dump($info);
					curl_close($ch);
		
					$response1 = str_replace("<soap:body>","",$response);
					$response2 = str_replace("</soap:body>","",$response1);
		
					// convertingc to XML
					$parser = simplexml_load_string($response);
					$parser->xpath('row');
				    $result= $parser->asXML(); 
					$json_string = json_encode($result); 
					$result_array = json_decode($json_string, TRUE);
		           
				  $doc = new DOMDocument();
				  $doc->loadXML((string)$result);
				 // echo $length = count($doc->getElementsByTagName('row')->children.length());
				 // echo("Vehicle No:" .$doc->getElementsByTagName('vehicle_no')->item(0)->nodeValue);
				//  echo("Challan No:" .$doc->getElementsByTagName('challan_no')->item(0)->nodeValue);

				//print_r($result );

				  $dataResult = array(
					'VEHICLE_NO' => $doc->getElementsByTagName('vehicle_no')->item(0)->nodeValue,
					'CHALLAN_NO' => $doc->getElementsByTagName('challan_no')->item(0)->nodeValue,
					'CHALLAN_DATE' => $doc->getElementsByTagName('challan_date')->item(0)->nodeValue,
					'DRIVER_NAME' => $doc->getElementsByTagName('driver_name')->item(0)->nodeValue,
					'LICENCE_NO' => $doc->getElementsByTagName('licence_no')->item(0)->nodeValue,
					'LICENCE_EXPIRY_DATE' => $doc->getElementsByTagName('licence_expiry_date')->item(0)->nodeValue,
					'VEHICLE_LABOUR' => $doc->getElementsByTagName('vehicle_labour')->item(0)->nodeValue,
					'VEHICLE_ACCESSORIES' => $doc->getElementsByTagName('vehicle_accessories')->item(0)->nodeValue,
					'LOADING_POINT' => $doc->getElementsByTagName('loading_point')->item(0)->nodeValue,
					'UNLOADING_POINT' => $doc->getElementsByTagName('unloading_point')->item(0)->nodeValue,
					'ACKNOWLEDGEMENT_NO' => $doc->getElementsByTagName('ACKNOWLEDGEMENT_NO')->item(0)->nodeValue,
					'RESULT' => $doc->getElementsByTagName('RESULT')->item(0)->nodeValue
				  );
			return $dataResult;					
		// after soap
	}


	public function VL_ASH_PullVehicleDetailsNEW($data){
		$VEHICLE_NO = $data['VEHICLE_NO'];
		$CHALLAN_NO = $data['CHALLAN_NO'];
	 
//echo "before soap";
		// before soap

		$soapUrl = "https://vedantaconnect.com/VendorConnectWebService/WebService.asmx?wsdl"; // asmx URL of WSDL
		
				$xml_post_string = '<?xml version="1.0" encoding="utf-8"?>
				<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
				  <soap:Body>
					<VL_ASH_PullVehicleDetails xmlns="http://tempuri.org/">
					<dtashinput><![CDATA[
					<table>
					<row>
					<vehicle_no>'.$VEHICLE_NO.'</vehicle_no>
					<challan_no>'.$CHALLAN_NO.'</challan_no>
					</row>
					</table>
					 ]]>
					 </dtashinput>
					<transportercode>206243</transportercode>
					<authorizationcode>XY6DLWOD72CNSHSG81737NGDGDHRDH21</authorizationcode>
				  </VL_ASH_PullVehicleDetails>
				</soap:Body>
			  </soap:Envelope>';   // data from the form, e.g. some ID number
		
			//  echo $xml_post_string;
				   $headers = array(
								"Content-type: text/xml;charset=\"utf-8\"",
								"Accept: text/xml",
								"Cache-Control: no-cache",
								"Pragma: no-cache",
								"Content-length: ".strlen($xml_post_string),
							); //SOAPAction: your op URL
		
					$url = $soapUrl;
		
					// PHP cURL  for https connection with auth
					$ch = curl_init();
					curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
					curl_setopt($ch, CURLOPT_URL, $url);
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				  //  curl_setopt($ch, CURLOPT_USERPWD, $soapUser.":".$soapPassword); // username and password - declared at the top of the doc
				   // curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
					curl_setopt($ch, CURLOPT_TIMEOUT, 10);
					curl_setopt($ch, CURLOPT_POST, true);
					curl_setopt($ch, CURLOPT_POSTFIELDS, $xml_post_string); // the SOAP request
					curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		
					// converting
					$response = curl_exec($ch); 
				//	$info = curl_getinfo($ch);
					//var_dump($info);
					curl_close($ch);
		
					$response1 = str_replace("<soap:body>","",$response);
					$response2 = str_replace("</soap:body>","",$response1);
					//echo "<pre>";
					
					// convertingc to XML
					$parser = simplexml_load_string($response2);
					
					$parser->xpath('Table');
				    
				  $result= $parser->asXML(); 
				 
				  $json_string = json_encode($result); 
				 // echo $json_string;
				$result_array = json_decode($json_string, TRUE);
				$doc = new DOMDocument();
				$doc->loadXML((string)$result);
			//	foreach ($doc->getElementsByTagName('vehicle_no') as $element) {
			//		echo 'local name: ', $element->localName, ', prefix: ', print_r($element->nodeValue), "\n";
			//	}
		//	echo $doc->saveXML($doc->vehicle_no);
				//  echo $length = count($doc->getElementsByTagName('vehicle_no'));
				 //for($i=0;$i<10;$i++){
				//  echo("Vehicle No:" .$doc->getElementsByTagName('VEHICLE_NO')->item(0)->localName);
				// }
				//  echo("Challan No:" .$doc->getElementsByTagName('challan_no')->item(0)->nodeValue);
				
			    //	print_r($result);
				$outime=$doc->getElementsByTagName('LOADING_TIME_OUT')->item(0)->nodeValue;
				if($doc->getElementsByTagName('LOADING_TIME_OUT')->item(0)->nodeValue=="" and $doc->getElementsByTagName('GROSS_WEIGHT')->item(0)->nodeValue>0){
				
					$outime=$doc->getElementsByTagName('GROSS_WEIGHT_TIME')->item(0)->nodeValue;
				}
				  $dataResult = array(
					'VEHICLE_NO' => $doc->getElementsByTagName('VEHICLE_NO')->item(0)->nodeValue,
					'CHALLAN_NO' => $doc->getElementsByTagName('CHALLAN_NO')->item(0)->nodeValue,
					'GATEPASS_NO' => $doc->getElementsByTagName('GATEPASS_NO')->item(0)->nodeValue,
					'ENTRY_TIME' => $doc->getElementsByTagName('ENTRY_TIME')->item(0)->nodeValue,
					'ENTRY_ON' => $doc->getElementsByTagName('ENTRY_ON')->item(0)->nodeValue,
					'GROSS_WEIGHT' => $doc->getElementsByTagName('GROSS_WEIGHT')->item(0)->nodeValue,
					'GROSS_WEIGHT_TIME' => $doc->getElementsByTagName('GROSS_WEIGHT_TIME')->item(0)->nodeValue,
					'TARE_WEIGHT' => $doc->getElementsByTagName('TARE_WEIGHT')->item(0)->nodeValue,
					'TARE_WEIGHT_TIME' => $doc->getElementsByTagName('TARE_WEIGHT_TIME')->item(0)->nodeValue,
					'LOADING_TIME_IN' => $doc->getElementsByTagName('LOADING_TIME_IN')->item(0)->nodeValue,
					'LOADING_TIME_OUT' => $outime,
					'LOADING_LOCATION' => $doc->getElementsByTagName('LOADING_LOCATION')->item(0)->nodeValue,
					'EXIT_TIME' => $doc->getElementsByTagName('EXIT_TIME')->item(0)->nodeValue,
					'UNLOADING_POINT' => $doc->getElementsByTagName('UNLOADING_POINT')->item(0)->nodeValue,
					'UNLOADING_LOCATION' => $doc->getElementsByTagName('UNLOADING_LOCATION')->item(0)->nodeValue,
					'UNLOADING_TIME' => $doc->getElementsByTagName('UNLOADING_TIME')->item(0)->nodeValue,
					'STATUS' => $doc->getElementsByTagName('STATUS')->item(0)->nodeValue
				  );
			return $dataResult;					
		// after soap
	}


//VL_ASH_PushVehicleChallanCancelation
	public function VL_ASH_PushVehicleChallanCancelation($data){
		$VEHICLE_NO = $data['VEHICLE_NO'];
		$CHALLAN_NO = $data['CHALLAN_NO'];
	 
//echo "before soap";
		// before soap

		$soapUrl = "https://vedantaconnect.com/VendorConnectWebService/WebService.asmx?wsdl"; // asmx URL of WSDL
		
				$xml_post_string = '<?xml version="1.0" encoding="utf-8"?>
				<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
				  <soap:Body>
					<VL_ASH_PushVehicleChallanCancelation xmlns="http://tempuri.org/">
					<dtashinput><![CDATA[
					<table>
					<row>
					<vehicle_no>'.$VEHICLE_NO.'</vehicle_no>
					<challan_no>'.$CHALLAN_NO.'</challan_no>
					</row>
					</table>
					 ]]>
					 </dtashinput>
					<transportercode>206243</transportercode>
					<authorizationcode>XY6DLWOD72CNSHSG81737NGDGDHRDH21</authorizationcode>
				  </VL_ASH_PushVehicleChallanCancelation>
				</soap:Body>
			  </soap:Envelope>';   // data from the form, e.g. some ID number
		
			//  echo $xml_post_string;
				   $headers = array(
								"Content-type: text/xml;charset=\"utf-8\"",
								"Accept: text/xml",
								"Cache-Control: no-cache",
								"Pragma: no-cache",
								"Content-length: ".strlen($xml_post_string),
							); //SOAPAction: your op URL
		
					$url = $soapUrl;
		
					// PHP cURL  for https connection with auth
					$ch = curl_init();
					curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
					curl_setopt($ch, CURLOPT_URL, $url);
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				  //  curl_setopt($ch, CURLOPT_USERPWD, $soapUser.":".$soapPassword); // username and password - declared at the top of the doc
				   // curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
					curl_setopt($ch, CURLOPT_TIMEOUT, 10);
					curl_setopt($ch, CURLOPT_POST, true);
					curl_setopt($ch, CURLOPT_POSTFIELDS, $xml_post_string); // the SOAP request
					curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		
					// converting
					$response = curl_exec($ch); 
				//	$info = curl_getinfo($ch);
					//var_dump($info);
					curl_close($ch);
		
					$response1 = str_replace("<soap:body>","",$response);
					$response2 = str_replace("</soap:body>","",$response1);
					//echo "<pre>";
					
					// convertingc to XML
					$parser = simplexml_load_string($response2);
					
					$parser->xpath('Table');
				    
				  $result= $parser->asXML(); 
				 
				  $json_string = json_encode($result); 
				 // echo $json_string;
				  $result_array = json_decode($json_string, TRUE);
				  
				$doc = new DOMDocument();
				$doc->loadXML((string)$result);
			//	foreach ($doc->getElementsByTagName('vehicle_no') as $element) {
			//		echo 'local name: ', $element->localName, ', prefix: ', print_r($element->nodeValue), "\n";
			//	}
		//	echo $doc->saveXML($doc->vehicle_no);
				//  echo $length = count($doc->getElementsByTagName('vehicle_no'));
				 //for($i=0;$i<10;$i++){
				//  echo("Vehicle No:" .$doc->getElementsByTagName('VEHICLE_NO')->item(0)->localName);
				// }
				//  echo("Challan No:" .$doc->getElementsByTagName('challan_no')->item(0)->nodeValue);
				
			    //	print_r($result);
				
				  $dataResult = array(
					'VEHICLE_NO' => $doc->getElementsByTagName('vehicle_no')->item(0)->nodeValue,
					'CHALLAN_NO' => $doc->getElementsByTagName('challan_no')->item(0)->nodeValue,
					'ACKNOWLEDGEMENT_NO' => $doc->getElementsByTagName('ACKNOWLEDGEMENT_NO')->item(0)->nodeValue,
					'STATUS' => $doc->getElementsByTagName('STATUS')->item(0)->nodeValue
				  );
			return $dataResult;					
		// after soap
	}


	//VL_ASH_PushVehicleGeoFance
	public function VL_ASH_PushVehicleGeoFance($data){
		$VEHCILE_NO = $data['VEHCILE_NO'];
		$LONGITUDE = $data['LONGITUDE'];
		$LATITUDE = $data['LATITUDE'];
		$LOCATION_NAME = $data['LOCATION_NAME'];
	
		// before soap

		$soapUrl = "https://vedantaconnect.com/VendorConnectWebService/WebService.asmx?wsdl"; // asmx URL of WSDL
		
				$xml_post_string = '<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
				<soap:Body>
				  <VL_ASH_PushVehicleGeoFance xmlns="http://tempuri.org/">
					<dtashinput><![CDATA[
					<table>
					<row>
					<vehcile_no>'.$VEHCILE_NO.'</vehcile_no>
					<longitude>'.$LONGITUDE.'</longitude>
					<latitude>'.$LATITUDE.'</latitude>
					<location_name>'.$LOCATION_NAME.'</location_name>
					</row>
					 </table>
					 ]]>
					</dtashinput>
					<transportercode>206243</transportercode>
					<authorizationcode>XY6DLWOD72CNSHSG81737NGDGDHRDH21</authorizationcode>
				  </VL_ASH_PushVehicleGeoFance>
				</soap:Body>
			  </soap:Envelope>';   // data from the form, e.g. some ID number
		
				   $headers = array(
								"Content-type: text/xml;charset=\"utf-8\"",
								"Accept: text/xml",
								"Cache-Control: no-cache",
								"Pragma: no-cache",
								"Content-length: ".strlen($xml_post_string),
							); //SOAPAction: your op URL
		
					$url = $soapUrl;
		
					// PHP cURL  for https connection with auth
					$ch = curl_init();
					curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
					curl_setopt($ch, CURLOPT_URL, $url);
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				  //  curl_setopt($ch, CURLOPT_USERPWD, $soapUser.":".$soapPassword); // username and password - declared at the top of the doc
				   // curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
					curl_setopt($ch, CURLOPT_TIMEOUT, 10);
					curl_setopt($ch, CURLOPT_POST, true);
					curl_setopt($ch, CURLOPT_POSTFIELDS, $xml_post_string); // the SOAP request
					curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		
					// converting
					$response = curl_exec($ch); 
					curl_close($ch);
		
					$response1 = str_replace("<soap:body>","",$response);
					$response2 = str_replace("</soap:body>","",$response1);
		
					// convertingc to XML
					$parser = simplexml_load_string($response);
					$parser->xpath('row');
					$result= $parser->asXML(); 
					$json_string = json_encode($result); 
					$result_array = json_decode($json_string, TRUE);
		
				  $doc = new DOMDocument();
				  $doc->loadXML((string)$result);
				 // echo $length = count($doc->getElementsByTagName('row')->children.length());
				 // echo("Vehicle No:" .$doc->getElementsByTagName('vehicle_no')->item(0)->nodeValue);
				//  echo("Challan No:" .$doc->getElementsByTagName('challan_no')->item(0)->nodeValue);

				  $dataResult = array(
					'VEHCILE_NO' => $doc->getElementsByTagName('vehcile_no')->item(0)->nodeValue,
					'LONGITUDE' => $doc->getElementsByTagName('longitude')->item(0)->nodeValue,
					'LATITUDE' => $doc->getElementsByTagName('latitude')->item(0)->nodeValue,
					'LOCATION_NAME' => $doc->getElementsByTagName('location_name')->item(0)->nodeValue,
					'ACKNOWLEDGEMENT_NO' => $doc->getElementsByTagName('acknowledgement_no')->item(0)->nodeValue
				  );
		
				 return $dataResult;					
		// after soap
	}


	//VL_ASH_ApprovalStatus
	public function VL_ASH_ApprovalStatus($data){
		$VEHCILE_NO = $data['VEHCILE_NO'];
	
	
		// before soap

		$soapUrl = "https://vedantaconnect.com/VendorConnectWebService/WebService.asmx?wsdl"; // asmx URL of WSDL
		
				$xml_post_string = '<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
				<soap:Body>
				  <VL_ASH_PushVehicleGeoFance xmlns="http://tempuri.org/">
					<dtashinput><![CDATA[
					<table>
					<row>
					<vehcile_no>'.$VEHCILE_NO.'</vehcile_no>
					</row>
					 </table>
					 ]]>
					</dtashinput>
					<transportercode>206243</transportercode>
					<authorizationcode>XY6DLWOD72CNSHSG81737NGDGDHRDH21</authorizationcode>
				  </VL_ASH_PushVehicleGeoFance>
				</soap:Body>
			  </soap:Envelope>';   // data from the form, e.g. some ID number
		
				   $headers = array(
								"Content-type: text/xml;charset=\"utf-8\"",
								"Accept: text/xml",
								"Cache-Control: no-cache",
								"Pragma: no-cache",
								"Content-length: ".strlen($xml_post_string),
							); //SOAPAction: your op URL
		
					$url = $soapUrl;
		
					// PHP cURL  for https connection with auth
					$ch = curl_init();
					curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
					curl_setopt($ch, CURLOPT_URL, $url);
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				  //  curl_setopt($ch, CURLOPT_USERPWD, $soapUser.":".$soapPassword); // username and password - declared at the top of the doc
				   // curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
					curl_setopt($ch, CURLOPT_TIMEOUT, 10);
					curl_setopt($ch, CURLOPT_POST, true);
					curl_setopt($ch, CURLOPT_POSTFIELDS, $xml_post_string); // the SOAP request
					curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		
					// converting
					$response = curl_exec($ch); 
					curl_close($ch);
		
					$response1 = str_replace("<soap:body>","",$response);
					$response2 = str_replace("</soap:body>","",$response1);
		
					// convertingc to XML
					$parser = simplexml_load_string($response);
					$parser->xpath('row');
					$result= $parser->asXML(); 
					$json_string = json_encode($result); 
					$result_array = json_decode($json_string, TRUE);
		
				  $doc = new DOMDocument();
				  $doc->loadXML((string)$result);
				 // echo $length = count($doc->getElementsByTagName('row')->children.length());
				 // echo("Vehicle No:" .$doc->getElementsByTagName('vehicle_no')->item(0)->nodeValue);
				//  echo("Challan No:" .$doc->getElementsByTagName('challan_no')->item(0)->nodeValue);

				  $dataResult = array(
					'VEHCILE_NO' => $doc->getElementsByTagName('vehcile_no')->item(0)->nodeValue,
					'STATUS' => $doc->getElementsByTagName('status')->item(0)->nodeValue
				  );
		
				  return $dataResult;						
		// after soap
	}


	//VL_ASH_ApprovalStatus
	public function VL_ASH_Login($data){
		$USERNAME = $data['username'];
		$PASSWORD = $data['password'];
	
	
		// before soap

		$soapUrl = "https://vedantaconnect.com/VendorConnectWebService/WebService.asmx?wsdl"; // asmx URL of WSDL
		
				$xml_post_string = '<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
				<soap:Body>
				  <VL_ASH_Login xmlns="http://tempuri.org/">
					<dtashinput><![CDATA[
					<table>
					<row>
					<username>'.$USERNAME.'</username>
					<password>'.$PASSWORD.'</password>
					</row>
					 </table>
					 ]]>
					</dtashinput>
					<transportercode>206243</transportercode>
					<authorizationcode>XY6DLWOD72CNSHSG81737NGDGDHRDH21</authorizationcode>
				  </VL_ASH_Login>
				</soap:Body>
			  </soap:Envelope>';   // data from the form, e.g. some ID number
		
				   $headers = array(
								"Content-type: text/xml;charset=\"utf-8\"",
								"Accept: text/xml",
								"Cache-Control: no-cache",
								"Pragma: no-cache",
								"Content-length: ".strlen($xml_post_string),
							); //SOAPAction: your op URL
		
					$url = $soapUrl;
		
					// PHP cURL  for https connection with auth
					$ch = curl_init();
					curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
					curl_setopt($ch, CURLOPT_URL, $url);
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				  //  curl_setopt($ch, CURLOPT_USERPWD, $soapUser.":".$soapPassword); // username and password - declared at the top of the doc
				   // curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
					curl_setopt($ch, CURLOPT_TIMEOUT, 10);
					curl_setopt($ch, CURLOPT_POST, true);
					curl_setopt($ch, CURLOPT_POSTFIELDS, $xml_post_string); // the SOAP request
					curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		
					// converting
					$response = curl_exec($ch); 
					curl_close($ch);
		
					$response1 = str_replace("<soap:body>","",$response);
					$response2 = str_replace("</soap:body>","",$response1);
		
					// convertingc to XML
					$parser = simplexml_load_string($response);
					$parser->xpath('row');
					$result= $parser->asXML(); 
					$json_string = json_encode($result); 
					$result_array = json_decode($json_string, TRUE);
		
				  $doc = new DOMDocument();
				  $doc->loadXML((string)$result);
				 // echo $length = count($doc->getElementsByTagName('row')->children.length());
				 // echo("Vehicle No:" .$doc->getElementsByTagName('vehicle_no')->item(0)->nodeValue);
				//  echo("Challan No:" .$doc->getElementsByTagName('challan_no')->item(0)->nodeValue);

				  $dataResult = array(
					'ROLE' => $doc->getElementsByTagName('ROLE')->item(0)->nodeValue,
					'RESULT' => $doc->getElementsByTagName('RESULT')->item(0)->nodeValue
				  );
		
				  return $dataResult;					
		// after soap
	}
		

	//VL_ASH_Vehicle_Entry
	public function VL_ASH_Vehicle_Entry($data){
		$VEHICLE_NO = $data['VEHICLE_NO'];
		$CHALLAN_NO = $data['CHALLAN_NO'];
		// before soap
		$soapUrl = "https://vedantaconnect.com/VendorConnectWebService/WebService.asmx?wsdl"; // asmx URL of WSDL
		
				$xml_post_string = '<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
				<soap:Body>
				  <VL_ASH_Vehicle_Entry xmlns="http://tempuri.org/">
					<dtashinput><![CDATA[
					<table>
					<row>
					<vehicle_no>'.$VEHICLE_NO.'</vehicle_no>
					<challan_no>'.$CHALLAN_NO.'</challan_no>
					</row>
					 </table>
					 ]]>
					</dtashinput>
					<transportercode>206243</transportercode>
					<authorizationcode>XY6DLWOD72CNSHSG81737NGDGDHRDH21</authorizationcode>
				  </VL_ASH_Vehicle_Entry>
				</soap:Body>
			  </soap:Envelope>';   // data from the form, e.g. some ID number
		
				   $headers = array(
								"Content-type: text/xml;charset=\"utf-8\"",
								"Accept: text/xml",
								"Cache-Control: no-cache",
								"Pragma: no-cache",
								"Content-length: ".strlen($xml_post_string),
							); //SOAPAction: your op URL
		
					$url = $soapUrl;
		
					// PHP cURL  for https connection with auth
					$ch = curl_init();
					curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
					curl_setopt($ch, CURLOPT_URL, $url);
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				  //  curl_setopt($ch, CURLOPT_USERPWD, $soapUser.":".$soapPassword); // username and password - declared at the top of the doc
				   // curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
					curl_setopt($ch, CURLOPT_TIMEOUT, 10);
					curl_setopt($ch, CURLOPT_POST, true);
					curl_setopt($ch, CURLOPT_POSTFIELDS, $xml_post_string); // the SOAP request
					curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		
					// converting
					$response = curl_exec($ch); 
					curl_close($ch);
		
					$response1 = str_replace("<soap:body>","",$response);
					$response2 = str_replace("</soap:body>","",$response1);
		
					// convertingc to XML
					$parser = simplexml_load_string($response);
					$parser->xpath('row');
					$result= $parser->asXML(); 
					$json_string = json_encode($result); 
					$result_array = json_decode($json_string, TRUE);
		
				  $doc = new DOMDocument();
				  $doc->loadXML((string)$result);
				 // echo $length = count($doc->getElementsByTagName('row')->children.length());
				 // echo("Vehicle No:" .$doc->getElementsByTagName('vehicle_no')->item(0)->nodeValue);
				//  echo("Challan No:" .$doc->getElementsByTagName('challan_no')->item(0)->nodeValue);

				$dataResult = array(
					'VEHICLE_NO' => $doc->getElementsByTagName('VEHICLE_NO')->item(0)->nodeValue,
					'CHALLAN_NO' => $doc->getElementsByTagName('CHALLAN_NO')->item(0)->nodeValue,
					'GATEPASS_NO' => $doc->getElementsByTagName('GATEPASS_NO')->item(0)->nodeValue,
					'ENTRY_TIME' => $doc->getElementsByTagName('ENTRY_TIME')->item(0)->nodeValue,
					'RESULT' => $doc->getElementsByTagName('RESULT')->item(0)->nodeValue
				  );
			return $dataResult;								
		// after soap
	}
		
	//VL_ASH_Vehicle_Exit
	public function VL_ASH_Vehicle_Exit($data){
		$VEHICLE_NO = $data['VEHICLE_NO'];
		$CHALLAN_NO = $data['CHALLAN_NO'];
	
		// before soap

		$soapUrl = "https://vedantaconnect.com/VendorConnectWebService/WebService.asmx?wsdl"; // asmx URL of WSDL
		
				$xml_post_string = '<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
				<soap:Body>
				  <VL_ASH_Vehicle_Exit xmlns="http://tempuri.org/">
					<dtashinput><![CDATA[
					<table>
					<row>
					<vehicle_no>'.$VEHICLE_NO.'</vehicle_no>
					<challan_no>'.$CHALLAN_NO.'</challan_no>
					</row>
					 </table>
					 ]]>
					</dtashinput>
					<transportercode>206243</transportercode>
					<authorizationcode>XY6DLWOD72CNSHSG81737NGDGDHRDH21</authorizationcode>
				  </VL_ASH_Vehicle_Exit>
				</soap:Body>
			  </soap:Envelope>';   // data from the form, e.g. some ID number
		
				   $headers = array(
								"Content-type: text/xml;charset=\"utf-8\"",
								"Accept: text/xml",
								"Cache-Control: no-cache",
								"Pragma: no-cache",
								"Content-length: ".strlen($xml_post_string),
							); //SOAPAction: your op URL
		
					$url = $soapUrl;
		
					// PHP cURL  for https connection with auth
					$ch = curl_init();
					curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
					curl_setopt($ch, CURLOPT_URL, $url);
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				  //  curl_setopt($ch, CURLOPT_USERPWD, $soapUser.":".$soapPassword); // username and password - declared at the top of the doc
				   // curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
					curl_setopt($ch, CURLOPT_TIMEOUT, 10);
					curl_setopt($ch, CURLOPT_POST, true);
					curl_setopt($ch, CURLOPT_POSTFIELDS, $xml_post_string); // the SOAP request
					curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		
					// converting
					$response = curl_exec($ch); 
					curl_close($ch);
		
					$response1 = str_replace("<soap:body>","",$response);
					$response2 = str_replace("</soap:body>","",$response1);
		
					// convertingc to XML
					$parser = simplexml_load_string($response);
					$parser->xpath('row');
					$result= $parser->asXML(); 
					$json_string = json_encode($result); 
					$result_array = json_decode($json_string, TRUE);
		
				  $doc = new DOMDocument();
				  $doc->loadXML((string)$result);
				 // echo $length = count($doc->getElementsByTagName('row')->children.length());
				 // echo("Vehicle No:" .$doc->getElementsByTagName('vehicle_no')->item(0)->nodeValue);
				//  echo("Challan No:" .$doc->getElementsByTagName('challan_no')->item(0)->nodeValue);

				$dataResult = array(
					'VEHICLE_NO' => $doc->getElementsByTagName('VEHICLE_NO')->item(0)->nodeValue,
					'CHALLAN_NO' => $doc->getElementsByTagName('CHALLAN_NO')->item(0)->nodeValue,
					'GATEPASS_NO' => $doc->getElementsByTagName('GATEPASS_NO')->item(0)->nodeValue,
					'ENTRY_TIME' => $doc->getElementsByTagName('ENTRY_TIME')->item(0)->nodeValue,
					'GROSS_WEIGHT' => $doc->getElementsByTagName('GROSS_WEIGHT')->item(0)->nodeValue,
					'GROSS_WEIGHT_TIME' => $doc->getElementsByTagName('GROSS_WEIGHT_TIME')->item(0)->nodeValue,
					'TARE_WEIGHT' => $doc->getElementsByTagName('TARE_WEIGHT')->item(0)->nodeValue,
					'TARE_WEIGHT_TIME' => $doc->getElementsByTagName('TARE_WEIGHT_TIME')->item(0)->nodeValue,
					'LOADING_LOCATION' => $doc->getElementsByTagName('LOADING_LOCATION')->item(0)->nodeValue,
					'LOADING_TIME_IN' => $doc->getElementsByTagName('LOADING_TIME_IN')->item(0)->nodeValue,
					'LOADING_TIME_OUT' => $doc->getElementsByTagName('LOADING_TIME_OUT')->item(0)->nodeValue,
					'EXIT_TIME' => $doc->getElementsByTagName('EXIT_TIME')->item(0)->nodeValue,
					'RESULT' => $doc->getElementsByTagName('RESULT')->item(0)->nodeValue
				  );
			return $dataResult;								
		// after soap
	}

	//VL_ASH_vehicle_Loading_IN
	public function VL_ASH_vehicle_Loading_IN($data){
		$VEHICLE_NO = $data['VEHICLE_NO'];
		$CHALLAN_NO = $data['CHALLAN_NO'];
		$LOADING_LOCATION =  $data['LOADING_LOCATION'];
		// before soap
		$soapUrl = "https://vedantaconnect.com/VendorConnectWebService/WebService.asmx?wsdl"; // asmx URL of WSDL
		
				$xml_post_string = '<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
				<soap:Body>
				  <VL_ASH_vehicle_Loading_IN xmlns="http://tempuri.org/">
					<dtashinput><![CDATA[
					<table>
					<row>
					<vehicle_no>'.$VEHICLE_NO.'</vehicle_no>
					<challan_no>'.$CHALLAN_NO.'</challan_no>
					<location>'.$LOADING_LOCATION.'</location>
					</row>
					 </table>
					 ]]>
					</dtashinput>
					<transportercode>206243</transportercode>
					<authorizationcode>XY6DLWOD72CNSHSG81737NGDGDHRDH21</authorizationcode>
				  </VL_ASH_vehicle_Loading_IN>
				</soap:Body>
			  </soap:Envelope>';   // data from the form, e.g. some ID number
		
				   $headers = array(
								"Content-type: text/xml;charset=\"utf-8\"",
								"Accept: text/xml",
								"Cache-Control: no-cache",
								"Pragma: no-cache",
								"Content-length: ".strlen($xml_post_string),
							); //SOAPAction: your op URL
		
					$url = $soapUrl;
		
					// PHP cURL  for https connection with auth
					$ch = curl_init();
					curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
					curl_setopt($ch, CURLOPT_URL, $url);
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				  //  curl_setopt($ch, CURLOPT_USERPWD, $soapUser.":".$soapPassword); // username and password - declared at the top of the doc
				   // curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
					curl_setopt($ch, CURLOPT_TIMEOUT, 10);
					curl_setopt($ch, CURLOPT_POST, true);
					curl_setopt($ch, CURLOPT_POSTFIELDS, $xml_post_string); // the SOAP request
					curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		
					// converting
					$response = curl_exec($ch); 
					curl_close($ch);
		
					$response1 = str_replace("<soap:body>","",$response);
					$response2 = str_replace("</soap:body>","",$response1);
		
					// convertingc to XML
					$parser = simplexml_load_string($response);
					$parser->xpath('row');
					$result= $parser->asXML(); 
					$json_string = json_encode($result); 
					$result_array = json_decode($json_string, TRUE);
		
				  $doc = new DOMDocument();
				  $doc->loadXML((string)$result);
				 // echo $length = count($doc->getElementsByTagName('row')->children.length());
				 // echo("Vehicle No:" .$doc->getElementsByTagName('vehicle_no')->item(0)->nodeValue);
				//  echo("Challan No:" .$doc->getElementsByTagName('challan_no')->item(0)->nodeValue);

				$dataResult = array(
					'VEHICLE_NO' => $doc->getElementsByTagName('VEHICLE_NO')->item(0)->nodeValue,
					'CHALLAN_NO' => $doc->getElementsByTagName('CHALLAN_NO')->item(0)->nodeValue,
					'LOADING_LOCATION' => $doc->getElementsByTagName('LOADING_LOCATION')->item(0)->nodeValue,
					'LOADING_TIME_IN' => $doc->getElementsByTagName('LOADING_TIME_IN')->item(0)->nodeValue,
					'RESULT' => $doc->getElementsByTagName('RESULT')->item(0)->nodeValue
				  );
			return $dataResult;								
		// after soap
	}

	//VL_ASH_vehicle_Loading_IN
	public function VL_ASH_vehicle_Loading_OUT($data){
		$VEHICLE_NO = $data['VEHICLE_NO'];
		$CHALLAN_NO = $data['CHALLAN_NO'];
		$LOADING_LOCATION =  $data['LOADING_LOCATION'];
		// before soap
		$soapUrl = "https://vedantaconnect.com/VendorConnectWebService/WebService.asmx?wsdl"; // asmx URL of WSDL
		
				$xml_post_string = '<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
				<soap:Body>
				  <VL_ASH_vehicle_Loading_OUT xmlns="http://tempuri.org/">
					<dtashinput><![CDATA[
					<table>
					<row>
					<vehicle_no>'.$VEHICLE_NO.'</vehicle_no>
					<challan_no>'.$CHALLAN_NO.'</challan_no>
					<location>'.$LOADING_LOCATION.'</location>
					</row>
					 </table>
					 ]]>
					</dtashinput>
					<transportercode>206243</transportercode>
					<authorizationcode>XY6DLWOD72CNSHSG81737NGDGDHRDH21</authorizationcode>
				  </VL_ASH_vehicle_Loading_OUT>
				</soap:Body>
			  </soap:Envelope>';   // data from the form, e.g. some ID number
		
				   $headers = array(
								"Content-type: text/xml;charset=\"utf-8\"",
								"Accept: text/xml",
								"Cache-Control: no-cache",
								"Pragma: no-cache",
								"Content-length: ".strlen($xml_post_string),
							); //SOAPAction: your op URL
		
					$url = $soapUrl;
		
					// PHP cURL  for https connection with auth
					$ch = curl_init();
					curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
					curl_setopt($ch, CURLOPT_URL, $url);
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				  //  curl_setopt($ch, CURLOPT_USERPWD, $soapUser.":".$soapPassword); // username and password - declared at the top of the doc
				   // curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
					curl_setopt($ch, CURLOPT_TIMEOUT, 10);
					curl_setopt($ch, CURLOPT_POST, true);
					curl_setopt($ch, CURLOPT_POSTFIELDS, $xml_post_string); // the SOAP request
					curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		
					// converting
					$response = curl_exec($ch); 
					curl_close($ch);
		
					$response1 = str_replace("<soap:body>","",$response);
					$response2 = str_replace("</soap:body>","",$response1);
		
					// convertingc to XML
					$parser = simplexml_load_string($response);
					$parser->xpath('row');
					$result= $parser->asXML(); 
					$json_string = json_encode($result); 
					$result_array = json_decode($json_string, TRUE);
		
				  $doc = new DOMDocument();
				  $doc->loadXML((string)$result);
				 // echo $length = count($doc->getElementsByTagName('row')->children.length());
				 // echo("Vehicle No:" .$doc->getElementsByTagName('vehicle_no')->item(0)->nodeValue);
				//  echo("Challan No:" .$doc->getElementsByTagName('challan_no')->item(0)->nodeValue);

				$dataResult = array(
					'VEHICLE_NO' => $doc->getElementsByTagName('VEHICLE_NO')->item(0)->nodeValue,
					'CHALLAN_NO' => $doc->getElementsByTagName('CHALLAN_NO')->item(0)->nodeValue,
					'LOADING_LOCATION' => $doc->getElementsByTagName('LOADING_LOCATION')->item(0)->nodeValue,
					'LOADING_TIME_OUT' => $doc->getElementsByTagName('LOADING_TIME_OUT')->item(0)->nodeValue,
					'RESULT' => $doc->getElementsByTagName('RESULT')->item(0)->nodeValue
				  );
			return $dataResult;								
		// after soap
	}


	public function VL_ASH_Vehicle_Unloading($data){
		$VEHICLE_NO = $data['VEHICLE_NO'];
		$CHALLAN_NO = $data['CHALLAN_NO'];
		$LOADING_LOCATION =  $data['LOADING_LOCATION'];
		// before soap
		$soapUrl = "https://vedantaconnect.com/VendorConnectWebService/WebService.asmx?wsdl"; // asmx URL of WSDL
		
				$xml_post_string = '<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
				<soap:Body>
				  <VL_ASH_Vehicle_Unloading xmlns="http://tempuri.org/">
					<dtashinput><![CDATA[
					<table>
					<row>
					<vehicle_no>'.$VEHICLE_NO.'</vehicle_no>
					<challan_no>'.$CHALLAN_NO.'</challan_no>
					<location>'.$LOADING_LOCATION.'</location>
					</row>
					 </table>
					 ]]>
					</dtashinput>
					<transportercode>206243</transportercode>
					<authorizationcode>XY6DLWOD72CNSHSG81737NGDGDHRDH21</authorizationcode>
				  </VL_ASH_Vehicle_Unloading>
				</soap:Body>
			  </soap:Envelope>';   // data from the form, e.g. some ID number
		
				   $headers = array(
								"Content-type: text/xml;charset=\"utf-8\"",
								"Accept: text/xml",
								"Cache-Control: no-cache",
								"Pragma: no-cache",
								"Content-length: ".strlen($xml_post_string),
							); //SOAPAction: your op URL
		
					$url = $soapUrl;
		
					// PHP cURL  for https connection with auth
					$ch = curl_init();
					curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
					curl_setopt($ch, CURLOPT_URL, $url);
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				  //  curl_setopt($ch, CURLOPT_USERPWD, $soapUser.":".$soapPassword); // username and password - declared at the top of the doc
				   // curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
					curl_setopt($ch, CURLOPT_TIMEOUT, 10);
					curl_setopt($ch, CURLOPT_POST, true);
					curl_setopt($ch, CURLOPT_POSTFIELDS, $xml_post_string); // the SOAP request
					curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		
					// converting
					$response = curl_exec($ch); 
					curl_close($ch);
		
					$response1 = str_replace("<soap:body>","",$response);
					$response2 = str_replace("</soap:body>","",$response1);
		
					// convertingc to XML
					$parser = simplexml_load_string($response);
					$parser->xpath('row');
					$result= $parser->asXML(); 
					$json_string = json_encode($result); 
					$result_array = json_decode($json_string, TRUE);
		
				  $doc = new DOMDocument();
				  $doc->loadXML((string)$result);
				 // echo $length = count($doc->getElementsByTagName('row')->children.length());
				 // echo("Vehicle No:" .$doc->getElementsByTagName('vehicle_no')->item(0)->nodeValue);
				//  echo("Challan No:" .$doc->getElementsByTagName('challan_no')->item(0)->nodeValue);

				$dataResult = array(
					'VEHICLE_NO' => $doc->getElementsByTagName('VEHICLE_NO')->item(0)->nodeValue,
					'CHALLAN_NO' => $doc->getElementsByTagName('CHALLAN_NO')->item(0)->nodeValue,
					'UNLOADING_LOCATION' => $doc->getElementsByTagName('UNLOADING_LOCATION')->item(0)->nodeValue,
					'UNLOADING_TIME' => $doc->getElementsByTagName('UNLOADING_TIME')->item(0)->nodeValue,
					'RESULT' => $doc->getElementsByTagName('RESULT')->item(0)->nodeValue
				  );
			return $dataResult;								
		// after soap
	}

	//VL_ASH_Ash_vehicle_Loading
	public function VL_ASH_Vehicle_latest_Data($data){
		$VEHICLE_NO = $data['VEHICLE_NO'];
		$CHALLAN_NO = $data['CHALLAN_NO'];
	
		// before soap

		$soapUrl = "https://vedantaconnect.com/VendorConnectWebService/WebService.asmx?wsdl"; // asmx URL of WSDL
		
				$xml_post_string = '<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
				<soap:Body>
				  <VL_ASH_Vehicle_latest_Data xmlns="http://tempuri.org/">
					<dtashinput><![CDATA[
					<table>
					<row>
					<vehicle_no>'.$VEHICLE_NO.'</vehicle_no>
					<challan_no>'.$CHALLAN_NO.'</challan_no>
					</row>
					 </table>
					 ]]>
					</dtashinput>
					<transportercode>206243</transportercode>
					<authorizationcode>XY6DLWOD72CNSHSG81737NGDGDHRDH21</authorizationcode>
				  </VL_ASH_Vehicle_latest_Data>
				</soap:Body>
			  </soap:Envelope>';   // data from the form, e.g. some ID number
		
				   $headers = array(
								"Content-type: text/xml;charset=\"utf-8\"",
								"Accept: text/xml",
								"Cache-Control: no-cache",
								"Pragma: no-cache",
								"Content-length: ".strlen($xml_post_string),
							); //SOAPAction: your op URL
		
					$url = $soapUrl;
		
					// PHP cURL  for https connection with auth
					$ch = curl_init();
					curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
					curl_setopt($ch, CURLOPT_URL, $url);
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				  //  curl_setopt($ch, CURLOPT_USERPWD, $soapUser.":".$soapPassword); // username and password - declared at the top of the doc
				   // curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
					curl_setopt($ch, CURLOPT_TIMEOUT, 10);
					curl_setopt($ch, CURLOPT_POST, true);
					curl_setopt($ch, CURLOPT_POSTFIELDS, $xml_post_string); // the SOAP request
					curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		
					// converting
					$response = curl_exec($ch); 
					curl_close($ch);
		
					$response1 = str_replace("<soap:body>","",$response);
					$response2 = str_replace("</soap:body>","",$response1);
		
					// convertingc to XML
					$parser = simplexml_load_string($response);
					$parser->xpath('row');
					$result= $parser->asXML(); 
					$json_string = json_encode($result); 
					$result_array = json_decode($json_string, TRUE);
		
				  $doc = new DOMDocument();
				  $doc->loadXML((string)$result);
				 // echo $length = count($doc->getElementsByTagName('row')->children.length());
				 // echo("Vehicle No:" .$doc->getElementsByTagName('vehicle_no')->item(0)->nodeValue);
				//  echo("Challan No:" .$doc->getElementsByTagName('challan_no')->item(0)->nodeValue);
/*
<VEHICLE_NO>OD23G1672</VEHICLE_NO>
                            <CHALLAN_NO>9</CHALLAN_NO>
                            <CHALLAN_DATE>2018-02-08T00:00:00+05:30</CHALLAN_DATE>
                            <DRIVER_NAME>BHRAMAR BE</DRIVER_NAME>
                            <LICENCE_NO>OR 1520110139118</LICENCE_NO>
                            <LICENCE_EXPIRY_DATE>2019-09-22T00:00:00+05:30</LICENCE_EXPIRY_DATE>
                            <VEHICLE_LABOUR>NIL</VEHICLE_LABOUR>
                            <VEHICLE_ACCESSORIES>NIL</VEHICLE_ACCESSORIES>
                            <LOADING_POINT>IPP</LOADING_POINT>
                            <UNLOADING_POINT>L T</UNLOADING_POINT>
                            <ENTRY_ON>2018-02-08T21:55:40.05+05:30</ENTRY_ON>
                            <ENTRY_BY>System</ENTRY_BY>
                            <STATUS>SUBMITTED</STATUS>
<xs:element name="GATEPASS_NO" type="xs:string" minOccurs="0"/>
                                            <xs:element name="ENTRY_TIME" type="xs:dateTime" minOccurs="0"/>
                                            <xs:element name="GROSS_WEIGHT" type="xs:string" minOccurs="0"/>
                                            <xs:element name="GROSS_WEIGHT_TIME" type="xs:dateTime" minOccurs="0"/>
                                            <xs:element name="TARE_WEIGHT" type="xs:string" minOccurs="0"/>
                                            <xs:element name="TARE_WEIGHT_TIME" type="xs:dateTime" minOccurs="0"/>
                                            <xs:element name="EXIT_TIME" type="xs:dateTime" minOccurs="0"/>
                                            <xs:element name="LOADING_TIME" type="xs:dateTime" minOccurs="0"/>
                                            <xs:element name="LOADING_LOCATION" type="xs:string" minOccurs="0"/>

*/
$outime=$doc->getElementsByTagName('LOADING_TIME_OUT')->item(0)->nodeValue;
if($doc->getElementsByTagName('LOADING_TIME_OUT')->item(0)->nodeValue=="" and $doc->getElementsByTagName('GROSS_WEIGHT')->item(0)->nodeValue>0){

	$outime=$doc->getElementsByTagName('GROSS_WEIGHT_TIME')->item(0)->nodeValue;
}
				$dataResult = array(
					'VEHICLE_NO' => $doc->getElementsByTagName('VEHICLE_NO')->item(0)->nodeValue,
					'CHALLAN_NO' => $doc->getElementsByTagName('CHALLAN_NO')->item(0)->nodeValue,
					'DRIVER_NAME' => $doc->getElementsByTagName('DRIVER_NAME')->item(0)->nodeValue,
					'LICENCE_NO' => $doc->getElementsByTagName('LICENCE_NO')->item(0)->nodeValue,
					'LICENCE_EXPIRY_DATE' => $doc->getElementsByTagName('LICENCE_EXPIRY_DATE')->item(0)->nodeValue,
					'VEHICLE_LABOUR' => $doc->getElementsByTagName('VEHICLE_LABOUR')->item(0)->nodeValue,
					'VEHICLE_ACCESSORIES' => $doc->getElementsByTagName('VEHICLE_ACCESSORIES')->item(0)->nodeValue,
					'LOADING_POINT' => $doc->getElementsByTagName('LOADING_POINT')->item(0)->nodeValue,
					'UNLOADING_POINT' => $doc->getElementsByTagName('UNLOADING_POINT')->item(0)->nodeValue,
					'ENTRY_ON' => $doc->getElementsByTagName('ENTRY_ON')->item(0)->nodeValue,
					'ENTRY_BY' => $doc->getElementsByTagName('ENTRY_BY')->item(0)->nodeValue,
					'ENTRY_TIME' => $doc->getElementsByTagName('ENTRY_TIME')->item(0)->nodeValue,
					'GATEPASS_NO' => $doc->getElementsByTagName('GATEPASS_NO')->item(0)->nodeValue,
					'GROSS_WEIGHT' => $doc->getElementsByTagName('GROSS_WEIGHT')->item(0)->nodeValue,
					'GROSS_WEIGHT_TIME' => $doc->getElementsByTagName('GROSS_WEIGHT_TIME')->item(0)->nodeValue,
					'TARE_WEIGHT' => $doc->getElementsByTagName('TARE_WEIGHT')->item(0)->nodeValue,
					'TARE_WEIGHT_TIME' => $doc->getElementsByTagName('TARE_WEIGHT_TIME')->item(0)->nodeValue,
					'EXIT_TIME' => $doc->getElementsByTagName('EXIT_TIME')->item(0)->nodeValue,
					'LOADING_TIME_IN' => $doc->getElementsByTagName('LOADING_TIME_IN')->item(0)->nodeValue,
					'LOADING_TIME_OUT' => $outime,
					'LOADING_LOCATION' => $doc->getElementsByTagName('LOADING_LOCATION')->item(0)->nodeValue,
					'UNLOADING_TIME' => $doc->getElementsByTagName('UNLOADING_TIME')->item(0)->nodeValue,
					'UNLOADING_LOCATION' => $doc->getElementsByTagName('UNLOADING_LOCATION')->item(0)->nodeValue,
					'STATUS' => $doc->getElementsByTagName('STATUS')->item(0)->nodeValue
				  );
			return $dataResult;								
		// after soap
	}

	//VL_ASH_Ash_vehicle_Loading
	public function VL_ASH_Vehicle_Weight_Update($data){
		$VEHICLE_NO = $data['VEHICLE_NO'];
		$CHALLAN_NO = $data['CHALLAN_NO'];
		$TYPE = $data['TYPE'];
		$WEIGHT = $data['WEIGHT'];
	
		// before soap

		$soapUrl = "https://vedantaconnect.com/VendorConnectWebService/WebService.asmx?wsdl"; // asmx URL of WSDL
		
				$xml_post_string = '<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
				<soap:Body>
				  <VL_ASH_Vehicle_Weight_Update xmlns="http://tempuri.org/">
					<dtashinput><![CDATA[
					<table>
					<row>
					<vehicle_no>'.$VEHICLE_NO.'</vehicle_no>
					<challan_no>'.$CHALLAN_NO.'</challan_no>
					<type>'.$TYPE.'</type>
					<weight>'.$WEIGHT.'</weight>
					</row>
					 </table>
					 ]]>
					</dtashinput>
					<transportercode>206243</transportercode>
					<authorizationcode>XY6DLWOD72CNSHSG81737NGDGDHRDH21</authorizationcode>
				  </VL_ASH_Vehicle_Weight_Update>
				</soap:Body>
			  </soap:Envelope>';   // data from the form, e.g. some ID number
		
				   $headers = array(
								"Content-type: text/xml;charset=\"utf-8\"",
								"Accept: text/xml",
								"Cache-Control: no-cache",
								"Pragma: no-cache",
								"Content-length: ".strlen($xml_post_string),
							); //SOAPAction: your op URL
		
					$url = $soapUrl;
					// PHP cURL  for https connection with auth
					$ch = curl_init();
					curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
					curl_setopt($ch, CURLOPT_URL, $url);
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				  //  curl_setopt($ch, CURLOPT_USERPWD, $soapUser.":".$soapPassword); // username and password - declared at the top of the doc
				   // curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
					curl_setopt($ch, CURLOPT_TIMEOUT, 10);
					curl_setopt($ch, CURLOPT_POST, true);
					curl_setopt($ch, CURLOPT_POSTFIELDS, $xml_post_string); // the SOAP request
					curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		
					// converting
					$response = curl_exec($ch); 
					curl_close($ch);
		
					$response1 = str_replace("<soap:body>","",$response);
					$response2 = str_replace("</soap:body>","",$response1);
		
					// convertingc to XML
					$parser = simplexml_load_string($response);
					$parser->xpath('row');
					$result= $parser->asXML(); 
					$json_string = json_encode($result); 
					$result_array = json_decode($json_string, TRUE);
		
				  $doc = new DOMDocument();
				  $doc->loadXML((string)$result);
				 // echo $length = count($doc->getElementsByTagName('row')->children.length());
				 // echo("Vehicle No:" .$doc->getElementsByTagName('vehicle_no')->item(0)->nodeValue);
				//  echo("Challan No:" .$doc->getElementsByTagName('challan_no')->item(0)->nodeValue);

				$dataResult = array(
					'VEHICLE_NO' => $doc->getElementsByTagName('VEHICLE_NO')->item(0)->nodeValue,
					'CHALLAN_NO' => $doc->getElementsByTagName('CHALLAN_NO')->item(0)->nodeValue,
					'GATEPASS_NO' => $doc->getElementsByTagName('GATEPASS_NO')->item(0)->nodeValue,
					'GROSS_WEIGHT' => $doc->getElementsByTagName('GROSS_WEIGHT')->item(0)->nodeValue,
					'GROSS_WEIGHT_TIME' => $doc->getElementsByTagName('GROSS_WEIGHT_TIME')->item(0)->nodeValue,
					'TARE_WEIGHT' => $doc->getElementsByTagName('TARE_WEIGHT')->item(0)->nodeValue,
					'TARE_WEIGHT_TIME' => $doc->getElementsByTagName('TARE_WEIGHT_TIME')->item(0)->nodeValue,
					'RESULT' => $doc->getElementsByTagName('RESULT')->item(0)->nodeValue
				  );
			return $dataResult;								
		// after soap
	}


	/// ALL VEhicle Movement
	//VL_ASH_vehicle_Loading_IN
	public function VL_ALL_Vehicle_Scan_Time($data){
		$GATEPASS = $data['GATEPASS'];
		$USERID = $data['USERID'];
		$LATLONG =  $data['LATLONG'];
		// before soap
		$soapUrl = "https://vedantaconnect.com/VendorConnectWebService/WebService.asmx?wsdl"; // asmx URL of WSDL
		
				$xml_post_string = '<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
				<soap:Body>
				  <VL_ALL_Vehicle_Scan_Time xmlns="http://tempuri.org/">
					<Gatepass>'.$GATEPASS.'</Gatepass>
					<Userid>'.$USERID.'</Userid>
					<latlong>'.$LATLONG.'</latlong>
				  </VL_ALL_Vehicle_Scan_Time>
				</soap:Body>
			  </soap:Envelope>';   // data from the form, e.g. some ID number
		
				   $headers = array(
								"Content-type: text/xml;charset=\"utf-8\"",
								"Accept: text/xml",
								"Cache-Control: no-cache",
								"Pragma: no-cache",
								"Content-length: ".strlen($xml_post_string),
							); //SOAPAction: your op URL
		
					$url = $soapUrl;
		
					// PHP cURL  for https connection with auth
					$ch = curl_init();
					curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
					curl_setopt($ch, CURLOPT_URL, $url);
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				  //  curl_setopt($ch, CURLOPT_USERPWD, $soapUser.":".$soapPassword); // username and password - declared at the top of the doc
				   // curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
					curl_setopt($ch, CURLOPT_TIMEOUT, 10);
					curl_setopt($ch, CURLOPT_POST, true);
					curl_setopt($ch, CURLOPT_POSTFIELDS, $xml_post_string); // the SOAP request
					curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		
					// converting
					$response = curl_exec($ch); 
					curl_close($ch);
		
					$response1 = str_replace("<soap:body>","",$response);
					$response2 = str_replace("</soap:body>","",$response1);
		
					// convertingc to XML
					$parser = simplexml_load_string($response);
					$parser->xpath('VL_ALL_Vehicle_Scan_TimeResponse');
					$result= $parser->asXML(); 
					$json_string = json_encode($result); 
					$result_array = json_decode($json_string, TRUE);
		
				  $doc = new DOMDocument();
				  $doc->loadXML((string)$result);
				 // echo $length = count($doc->getElementsByTagName('row')->children.length());
				 // echo("Vehicle No:" .$doc->getElementsByTagName('vehicle_no')->item(0)->nodeValue);
				//  echo("Challan No:" .$doc->getElementsByTagName('challan_no')->item(0)->nodeValue);

				$dataResult = array(
					'RESULT' => $doc->getElementsByTagName('VL_ALL_Vehicle_Scan_TimeResult')->item(0)->nodeValue
				  );
			return $dataResult;								
		// after soap
	}
       
 ///////////////////////////////////////// COAL CHALLAN ////////////////////////////////////////////
  ///  ********************************************************************************************//
public function coalchallan()
{

   return $this->db->select("SELECT * FROM coalchallan");
	
   
}
public function view_coalchallan($id){
	
	return $this->db->select("SELECT * FROM coalchallan WHERE id=".$id." LIMIT 1");
}

public function delete_coalchallan($id)   
{
	$this->db->delete('coalchallan', "`id` = {$id}");
	//echo "delete $id";
}

public function add_coalchallan($data){
	
	$returnId = $this->db->insert('coalchallan', $data);
    return $returnId;
}

public function edit_coalchallan($data,$arg){
	$this->db->update('coalchallan', $data,
			"`id` = $arg");
	
}
    public function getAllPendingCoalchallan($VehNo)
	{
		$pendingCoal_challan=$this->db->select("SELECT * FROM `coalchallan` where VehNo=".$VehNo." AND Tare IS NULL AND status !='CANCEL'  ORDER BY id DESC LIMIT 1");
		//echo "SELECT * FROM `challan` where deviceid=".$deviceid." AND datetime_out IS NULL OR datetime_in IS NULL";  OR unloadingtime IS NULL OR unloadingpoint IS NULL
		return $pendingCoal_challan;
	}
    
    public function getAllCoalChallanDateWise($date)
	{
		return $this->db->select("SELECT * FROM `coalchallan` WHERE DATE(TPdate)='".$date."' ORDER BY TPdate DESC");
	}
    
     public function getLastCoalChallanSlNo()
	{
     
      return $this->db->select("SELECT * FROM `coalchallan` ORDER BY id DESC LIMIT 1");
	}
    
    public function CheckVehicleMovement($deviceid){
        
        $pending_vehicle = $this->db->select("SELECT * FROM `vehiclemovement` where deviceid=".$deviceid." AND in_time IS NOT NULL AND out_time IS NULL ORDER BY id DESC LIMIT 1");
        return $pending_vehicle;
    }
    
    public function add_vehiclemovement($data){
	
	$LastId = $this->db->insert('vehiclemovement', $data);
    return $LastId;
}
    
  public function getLastInsertedVehicle($LastId)
     {

        return $this->db->select("SELECT * FROM vehiclemovement Where id = ".$LastId."");
	
    }
  public function edit_vehiclemovement($data,$arg){
	 $this->db->update('vehiclemovement', $data,
			"`id` = $arg");
     
}
    
    public function getAllVehicleMovement($date)
	{
		return $this->db->select("SELECT * FROM `vehiclemovement` WHERE DATE(in_time)='".$date."' ORDER BY in_time DESC");
	}
      public function vendortripEntry($date,$vendorcode){
          //echo "SELECT datetime_in, gatepass_no, vehicle_no, status from challan  WHERE  DATE(datetime_in) = '".$date."' AND status !='CANCEL' AND vendorCode='".$vendorcode."'";
         return $this->db->select("SELECT datetime_in, vehicle_no, status from challan  WHERE  DATE(datetime_in) = '".$date."' AND status !='CANCEL' AND vendorCode='".$vendorcode."' UNION ALL SELECT datetime_out, vehicle_no, status from challan  WHERE  DATE(datetime_out) = '".$date."' AND status !='CANCEL' AND vendorCode='".$vendorcode."'"); 
         //echo "kjuhj";
      }

	
	}
?>
