<?php
/**
 * 
 */
class Roles
{
	public static function handleRole($page)
	
	{
		session_start();
		// echo $page;		
		$userType = $_SESSION['userType'];
		$parent_userType = $_SESSION['parent_userType'];
		
		$selectUser = $userType;
		if($userType=="user"){
			if($parent_userType=="dealer"){
				$selectUser ="dealer_user";
				}
			if($parent_userType=="customer"){
			$selectUser ="customer_user";
			}	
		}	
		
			switch ($selectUser) {
				case "dealer":
					$selectUserIndex= 0;
					break;
				case "dealer_user":
					$selectUserIndex= 1;
					break;
				case "customer":
					$selectUserIndex= 2;
					break;
				case "customer_user":
					$selectUserIndex= 3;
					break;			
			}
			
			$realtimetracking=	array("1","1","1","1");
			$master=			array("1","1","1","0");
			$m_vehicle=			array("1","1","1","0");
			$m_driver=			array("3","1","1","0");
			$m_device=			array("3","2","1","0");
			$m_shareDevice=		array("3","2","0","0");
			$m_group=			array("3","0","1","0");
			$m_customer=		array("3","2","0","0");
			$m_user=			array("3","0","1","0");
			$employee=			array("3","0","0","0");
			$m_geofence=		array("3","0","0","0");
			$m_expense=			array("0","0","0","0");
			$reports=			array("1","1","1","1");
			$r_historicPlayback=array("1","1","1","1");
			$r_fuel=			array("1","1","0","0");
			$r_trip=			array("1","1","1","1");
			$r_stop=			array("1","1","1","1");
			$r_summary=			array("1","1","1","1");
			$r_route=			array("1","1","1","1");
			$r_expense=			array("1","0","0","0");
			$r_events=			array("1","1","1","1");
			$notifications=		array("1","1","1","1");
			$settings=			array("3","2","0","0");
			$activity=			array("3","0","0","0");
			$challan=			array("3","0","0","0");
		
			switch ($page) {
				case "vts":
					$temp= $realtimetracking;
					break;
				case "master":
					$temp=$master;
					break;	
				case "master/vehicle":
					$temp=$m_vehicle;
					break;
				case "master/driver":
					 $temp=$m_driver;
					break;
				case "master/device":
					 $temp=$m_device;
					break;
				case "master/shareDevice":
					 $temp=$m_shareDevice;
					break;
				case "master/group":
					 $temp=$m_group;
					break;
				case "master/customer":
					 $temp=$m_customer;
					break;
				case "master/user":
					 $temp=$m_user;
					break;
				case "employee":
					$temp=$employee;
					break;	
				case "master/geofence":
					 $temp=$m_geofence;
					break;
				case "master/expense":
					 $temp=$m_expense;
					break;
				case "reports":
					$temp=$reports;
					break;		
				case "reports/historicPlayback":
					 $temp=$r_historicPlayback;
					break;
				case "reports/fuel":
					 $temp=$r_fuel;
					break;
				case "reports/trip":
					 $temp=$r_trip;
					break;
				case "reports/stop":
					 $temp=$r_stop;
					break;
				case "reports/summary":
					 $temp=$r_summary;
					break;
				case "reports/route":
					 $temp=$r_route;
					break;
				case "reports/expense":
					 $temp=$r_expense;
					break;
				case "reports/events":
					 $temp=$r_events;
					break;
				case "notifications":
					 $temp=$notifications;
					break;
				case "settings":
					 $temp=$settings;
					break;		
				case "activity":
					 $temp=$activity;
					break;
				case "challan":
					$temp=$challan;
					break;				
			}
			//print_r($temp);
			//echo $selectUser." ".$selectUserIndex;
		return $temp[$selectUserIndex];
	} 
	
	
	
}
