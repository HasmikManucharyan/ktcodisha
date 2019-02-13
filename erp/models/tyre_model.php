<?php

class Tyre_Model extends Model
{
	public function __construct()
	 {
		parent::__construct();
		Session::init();
	 }

	public function getAllTyreAxelDescription()
	{
		  return $this->db->select("SELECT * FROM `tyresaxelmaster`");
		
	}
//	public function getAllTyreModel()
//	{
//		return $this->db->select("SELECT * from tyremodelmaster ORDER BY id");
//	}
	public function getAllTyreNo(){
        
        return $this->db->select("SELECT * from tyrestockmaster");
    }
	public function getVehicleTypePosition($deviceid)
	{
		return $this->db->select("SELECT * FROM `tyremaster` where deviceid=".$deviceid." ORDER BY id");
	}
	
	public function submit_VehicleTyrePosition($data)
	{
		$this->db->insert('tyremaster', $data);
	}
    
    public function update_VehicleTyrePosition($data,$arg)
	{
		$this->db->update('tyremaster', $data,
			"`id` = $arg");
	}
    
    public function submit_tyrestock($data)
	{
		$this->db->insert('tyrestockmaster', $data);
	}
    
    public function update_tyrestock($data,$arg)
	{
		$this->db->update('tyrestockmaster', $data,
			"`TyresNo` = $arg");
	}
    public function tyrereport($date)
	{
    return $this->db->select("select * from `tyremaster` where ((date_format(cast(`date` as date),'%Y-%m') = ".$date.")) ORDER BY id DESC");
    }
    
		
}
