<?php

class Ledger_Model extends Model
{
	public function __construct()
	 {
		parent::__construct();
		Session::init();
	 }

	public function getAllLedger()
	{
		  
		  return $this->db->select("SELECT * FROM `ledger`");
		
	}
	
	public function getOneLedger($id_ledger)
	{
	
		return $this->db->select("SELECT * FROM `ledger` WHERE id_ledger='".$id_ledger."' LIMIT 1");
	}
	
	public function add_ledger($data)
	{
		  $this->db->insert('ledger', $data);
	}
	
	
	public function update_ledger($data,$arg)
	{
		//print_r($data);
		//echo $arg;
		$this->db->update('ledger', $data,
				"`id_ledger` = $arg");
	}
	
	public function delete_ledger($id_ledger)   
	{
		$this->db->delete('ledger', "`id_ledger` = {$id_ledger}");
		//echo "delete $id";
	}
		
}
