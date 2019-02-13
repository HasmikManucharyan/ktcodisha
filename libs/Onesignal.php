<?php

class Onesignal
{
	public static function sendMessageAll($title, $message)
	{
		$content      = array(
			"en" => $message
		);
		$heading = array(
			"en" => $title
		 );
	   
		$fields = array(
			'app_id' => "bd44a5aa-580b-4bfa-8846-d972b9f30ce2",
			'included_segments' => array(
				'All'
			),
			'data' => array(
				"foo" => "bar"
			),
			'contents' => $content,
			'headings' => $heading
		);
		
		$fields = json_encode($fields);
		//print("\nJSON sent:\n");
		//print($fields);
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
			'Content-Type: application/json; charset=utf-8',
			'Authorization: Basic N2U1Mjk3MDYtMjZlYi00N2ZiLWJmNzktNDc2YWFlNjdmYjc0'
		));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_HEADER, FALSE);
		curl_setopt($ch, CURLOPT_POST, TRUE);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		
		$response = curl_exec($ch);
		curl_close($ch);
		
		return $response;
	}


	public  static function sendMessageSpecific($title, $message,$users){
		$content      = array(
			"en" => $message
		);
		$heading = array(
			"en" => $title
		);

		
		$fields = array(
			'app_id' => "bd44a5aa-580b-4bfa-8846-d972b9f30ce2",
			'include_player_ids' => $users,
			'data' => array("foo" => "bar"),
			'contents' => $content,
			'headings' => $heading
		);
		
		$fields = json_encode($fields);
    	//print("\nJSON sent:\n");
    	//print($fields);
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8',
												   'Authorization: Basic N2U1Mjk3MDYtMjZlYi00N2ZiLWJmNzktNDc2YWFlNjdmYjc0'));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_HEADER, FALSE);
		curl_setopt($ch, CURLOPT_POST, TRUE);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

		$response = curl_exec($ch);
		curl_close($ch);
		
		return $response;
	}

	public  static function sendMessageAdmin($title, $message){
		$content      = array(
			"en" => $message
		);
		$heading = array(
			"en" => $title
		);
  
		$users  = array("da96fed3-e3c7-4944-8f89-1af0bd9f6dc3");
		
		$fields = array(
			'app_id' => "bd44a5aa-580b-4bfa-8846-d972b9f30ce2",
			'include_player_ids' => $users,
			'data' => array("foo" => "bar"),
			'contents' => $content,
			'headings' => $heading
		);
		
		$fields = json_encode($fields);
    	//print("\nJSON sent:\n");
    	//print($fields);
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8',
												   'Authorization: Basic N2U1Mjk3MDYtMjZlYi00N2ZiLWJmNzktNDc2YWFlNjdmYjc0'));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_HEADER, FALSE);
		curl_setopt($ch, CURLOPT_POST, TRUE);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

		$response = curl_exec($ch);
		curl_close($ch);
		
		return $response;
	}

	
	
	
	
}