<?php

class Val 
{
	public function __construct()
	{
		
	}
	
	public function minlength($data, $arg, $msg)
	{
		if (strlen($data) < $arg) {
			return "$msg can only be $arg long";
		}
	}
	
	public function maxlength($data, $arg, $msg)
	{
		if (strlen($data) > $arg) {
			return "$msg can only be $arg long";
		}
	}
	
	public function email($data, $msg)
	{
		if (preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^", $data)==false) {
			return "$msg must be valid";
		}
	}
	
	public function digit($data, $msg)
	{
		if (ctype_digit($data) == false) {
			return "$msg must be only digits";
		}
	}
	
	public function blank($data, $msg)
	{
		if (trim($data) == "") {
			return "$msg cannot be blank";
		}
	}
	
	public function compare($fieldOne, $fieldTwo, $msg)
	{
		if ($fieldOne != $fieldTwo) {
			return "$msg are not same";
		}
	}
	

	
	public function __call($name, $arguments) 
	{
		throw new Exception("$name does not exist inside of: " . __CLASS__);
	}
	
}