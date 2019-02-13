<?php

class Controller {

	function __construct() {
		
		//echo 'Main controller<br />';
		Session::init();
		if(isset($_POST['queryDate'])){
				Session::set('queryDate',$_POST['queryDate']);					
				} 
			if(Session::get('queryDate')==NULL)
			 {	
					Session::set('queryDate',-365);
				}
		$this->view = new View();
	}
	
	public function loadModel($name) {
		
		$path = 'models/'.$name.'_model.php';
		
		if (file_exists($path)) {
			require 'models/'.$name.'_model.php';
			
			$modelName = $name . '_Model';
			$this->model = new $modelName();
		}		
	}

}