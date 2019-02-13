<?php
class Strength extends Controller {

	function __construct() {
		parent::__construct();
		Session::init();
		
	}
	function index(){
		
		$this->view->render('strength/index');
		}
}
