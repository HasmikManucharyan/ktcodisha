<?php
class Equipment_model extends Model
{
	public function __construct()
	{
		parent::__construct();
		Session::init();
	}
	public function getAllvendor()
	{
		return $this->db->select("SELECT * FROM `vendor`");
	}
	public function getAllSupervisor()
	{
		return $this->db->select("SELECT * FROM `employee`", ['designation' => 'Supervisor']);
	}
}