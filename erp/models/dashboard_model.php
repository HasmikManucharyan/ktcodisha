<?php

class Dashboard_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
		Session::init();
	}

	
	public function getAllModules($employeeID)
	{
       // return $this->db->select("SELECT * FROM `modules` WHERE status='1' AND id IN (SELECT moduleId FROM user_modules WHERE userId=".$employeeID.") ORDER BY pid");
		// var_dump($employeeID);
		return $this->db->select("SELECT * FROM `modules` WHERE  id IN (SELECT moduleId FROM user_modules WHERE userId=".$employeeID.") ORDER BY pid");
	
	}	

	public function getOneModule($id)
	{

		$res= $this->db->select("SELECT * FROM `modules` WHERE id='".$id."'");
        return $res;

	}

	public function getAllModulesM($employeeID)
	{
        return $this->db->select("SELECT * FROM `modules` WHERE id IN (SELECT moduleId FROM user_modules WHERE userId='".$employeeID."') ORDER BY pid");

	}	
	public function getAllModulesErpM($employeeID)
	{
        return $this->db->select("SELECT * FROM `erp_modules` WHERE id IN (SELECT moduleId FROM user_erp_modules WHERE userId='".$employeeID."') ORDER BY id");
	
	}		
		
}
