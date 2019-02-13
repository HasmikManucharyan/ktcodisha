<?php

class Fuel_Model extends Model
{
	public function __construct()
	 {
		parent::__construct();
		Session::init();
	 }

	public function getDieselDetails()
	{
		  $admin_id=Session::get('admin_id');
		  return $this->db->select("SELECT * FROM `diesel_purchase` WHERE admin_id='".$admin_id."'");
		
	}
	public function getLastUpdateDiesel($deviceid)
	{
	return $this->db->select("SELECT * FROM `diesel_purchase` where deviceid='".$deviceid."'ORDER BY id DESC LIMIT 1");
	}
	public function getOnediesel($id)
	{
		$admin_id=Session::get('admin_id');
		return $this->db->select("SELECT * FROM `diesel_purchase` WHERE id='".$id."' AND admin_id='".$admin_id."' LIMIT 1");
	}
	
	public function insertDieselDetails($data)
	{
		  $this->db->insert('diesel_purchase', $data);
	}
	
	public function lastPosition($deviceid)
	{
		return $this->db->select("SELECT id FROM `positions` where deviceid=".$deviceid." ORDER BY id DESC LIMIT 1");
	}
	public function getAlldriver()
	{
		//$userID=Session::get('traccarID');
		return $this->db->select("SELECT * from drivers ORDER BY name");
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
	public function submit_diesel($data)
	{
		$this->db->insert('diesel_purchase', $data);
	}
	public function edit_submit_diesel($data,$arg)
	{
		//print_r($data);
		//echo $arg;
		$this->db->update('diesel_purchase', $data,
				"`id` = $arg");
	}
	
	public function delete_diesel($id)   
	{
		$this->db->delete('diesel_purchase', "`id` = {$id}");
		//echo "delete $id";
	}
		
}
