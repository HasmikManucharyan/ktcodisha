<?php
class Finance_model extends Model
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
 	public function getAllpo()
 	{
		return $this->db->select("SELECT * FROM `purchaseorder`");
 	}
 	public function getAllQuotation()
 	{
		return $this->db->select("SELECT * FROM `quotation`");
 	}
 	public function getAllItemMaster()
 	{
		return $this->db->select("SELECT * FROM `itemmaster`");
 	}
 	public function getAllSpareStockMaster()
 	{
		return $this->db->select("SELECT * FROM `sparestockmaster`");
 	}
}

?>