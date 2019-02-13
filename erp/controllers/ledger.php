<?php

class Ledger extends Controller {

	function __construct() {
		parent::__construct();
		  Session::init();
	}
	function index() {

	$this->view->render('ledger/index');
	}
	
	function add_ledger() 
	{
		$data = array( 
					'id_ledger' => null,
					'title' => $_REQUEST['title']
					);
		$this->model->add_ledger($data);
	}
	
	function update_ledger()
    {
		$arg=$_REQUEST['id_ledger'];
		$data = array(
					'title' => $_REQUEST['title']
			         );
		$this->model->update_ledger($data,$arg);
	}
	
	function getOneLedger() 
	{
		  $data = $_REQUEST;
		  if($_REQUEST['id_ledger']=='')
			   {
				   $this->view->pick='';
				   $this->view->data=$data;
			   } 
		   else 
			   {
				   $this->view->pick=$_REQUEST['id_ledger'];
				   $this->view->content= $this->model->getOneLedger($_REQUEST['id_ledger']);
               }
    echo json_encode($this->view->content);
    }
	   
	function delete_ledger($id_ledger) 
	{
        $id_ledger = $_REQUEST['id_ledger'];
		$this->model->delete_ledger($id_ledger);
		
	}
    
	// Home page view only
	function getAllLedger() 
    {
		header('Content-type: application/json');
	   $this->view->getLedger = $this->model->getAllLedger();
	   echo json_encode($this->view->getLedger);
	}
	
	
		
}
