<?php

class Sms_Model extends Model
{
	public function __construct()
	 {
		parent::__construct();
		Session::init();
	 }

	public function getDeviceSms()
	{
		 
		  return $this->db->select("SELECT * FROM `sms_device` ");
		
	}
    
	public function getOneDeviceSms($command)
	{
		 
		  return $this->db->select("SELECT code FROM `sms_device` Where command= '".$command."'");
		
	}
}
