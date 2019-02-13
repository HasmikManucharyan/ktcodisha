<?php

class Equipment extends Controller {

	function __construct() {
		parent::__construct();
		  Session::init();
	}
	function index() { 
		$this->view->vendor = $this->model->getAllVendor();
		$this->view->supervisor = $this->model->getAllSupervisor();
		$this->view->render('equipment/index',true);
	}
	
	
	
		
}
