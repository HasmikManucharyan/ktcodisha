<?php

class Vendor extends Model
{
public function getAllvendor()
 	{
	return $this->db->select("SELECT * FROM `vendor`");
 	}
}