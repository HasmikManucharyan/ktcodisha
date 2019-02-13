<?php

class Finance extends Controller {

	function __construct() {
		parent::__construct();
		Session::init();
	}
	
	function index() {

	}

	function po() {
		$this->view->vendors =  $this->model->getAllvendor();
		$this->view->pos =  $this->model->getAllpo();
		$this->view->quotations =  $this->model->getAllQuotation();
		$this->view->render('finance/po_list',true);
	}
	function quotation() {
		$this->view->vendors = $this->model->getAllvendor();
		$this->view->items = $this->model->getAllItemMaster();
		$this->view->parts_no = $this->model->getAllSpareStockMaster();
		$this->view->quotations = $this->model->getAllQuotation();
		$this->view->render('finance/quotation',true);
	}

}
?>

