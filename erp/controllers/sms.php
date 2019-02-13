<?php

class Sms extends Controller {

	function __construct() {
		parent::__construct();
		  Session::init();
	}
	function getDeviceSms(){
        
        $this->view->getsms=$this->model->getDeviceSms();
        echo json_encode($this->view->getsms);
    }
    
    function getOneDeviceSms(){
        $command=$_REQUEST['command'];
        $this->view->getonesms=$this->model->getOneDeviceSms($command);
        echo json_encode($this->view->getonesms);
    }
}
