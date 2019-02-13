<?php

class Employee_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
		Session::init();
	}
	
	
	public function getAllemployee()
	{
		//$userID=Session::get('traccarID');
		return $this->db->select("SELECT * from employee ORDER BY name");
	}
	public function getOneEmployee($id)
	{
		return $this->db->select("SELECT * FROM `employee` WHERE id='".$id."' LIMIT 1");
	}
	public function submit_employee($data)
	{
		$lastid=$this->db->insert('employee', $data);
		return $lastid;
		//echo 'insert';
	}
	public function getEmployeeAttendancedate($from,$to){
        
        return $this->db->select("SELECT * FROM `employee_attendance` where DATE(datetime) BETWEEN '".$from."' AND '".$to."'");
    }

	public function getEmployeeAttendance($date)
	{
		return $this->db->select("SELECT * FROM `employee_attendance` WHERE DATE(datetime)='".$date."' GROUP BY employeeID ORDER BY datetime DESC");
	}
    
    public function CheckEmployeeAttendance($date,$employeeID)
	{
		return $this->db->select("SELECT * FROM `employee_attendance` WHERE DATE(datetime)='".$date."' AND employeeID='".$employeeID."' ");
	}

	public function submit_employee_attendance($data)
	{
		$lastid=$this->db->insert('employee_attendance', $data);
		return $lastid;
		//echo 'insert';
	}
	public function update_employee($data,$arg)
	{
		
		$this->db->update('employee', $data,
				"`id` = $arg");
				
	}
	public function delete_employee($id)   
	{
		$this->db->delete('employee', "`id` = {$id}");
		
	}
	public function submit_uploadfiles($getAttach1,$arg)
	{
		$this->db->update('employee', $getAttach1,
				"`id` = $arg");
	}
	public function insert_smsAlerts($data){
		$this->db->insert('smsAlerts', $data);
		} 
	
	}
?>
