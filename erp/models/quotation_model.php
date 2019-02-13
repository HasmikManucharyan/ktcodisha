<?php
class Quotation_Model extends Model{
	public function quotation()
	{
	   return $this->db->select("SELECT * FROM quotation ");
	}
	public function view_quotation($id){
		return $this->db->select("SELECT * FROM quotation WHERE id=".$id." LIMIT 1");
	}

	public function delete_quotation($id)   
	{
		$this->db->delete('quotation', "`id` = {$id}");
		//echo "delete $id";
	}

	public function add_quotation($data)
	{
		$this->db->insert('quotation', $data);
	}
	public function edit_quotation($data,$arg){
		$this->db->update('quotation', $data,
				"`id` = $arg");
	}
}
?>