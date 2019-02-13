<?php
class Quotation extends Controller{
	function quotation(){
		// $this->view->render("hsd/quotation");
		
	}

	function getallquotation(){
	 $this->view->allquotation = $this->model->quotation();
		echo json_encode($this->view->allquotation);
	}

	function view_quotation() 
	{
		$data = $_REQUEST;
		if($data["id"]=="")
		{
			$this->view->pick="";
			$this->view->data=$data;
		} 
		else 
		{
			$this->view->pick=$data["id"];
			$this->view->content= $this->model->view_quotation($data["id"]);
		}
		echo json_encode($this->view->content);
	}

	function delete_quotation(){
		$id=$_REQUEST["id"];
		$this->model->delete_quotation($id);
		
	}

	function add_quotation(){

		$data = array(
			"QuotationNumber" => $_REQUEST["QuotationNumber"],
			"VendorName" => $_REQUEST["VendorName"],
			"VendoreAddress" => $_REQUEST["VendorAddress"],
			"date" => $_REQUEST["data"],
			"dueDate" => $_REQUEST["dueData"],
			"itemName" => $_REQUEST["itemName"],
			"partsNo" => $_REQUEST["partsNo"]
		   );
		// var_dump($data);
		$this->model->add_quotation($data);
	}

	function edit_quotation(){
		$arg=$_REQUEST["id"];
		$data = array(
			"QuotationNumber" => $_REQUEST["QuotationNumber"],
			"VendorName" => $_REQUEST["VendorName"],
			"VendoreAddress" => $_REQUEST["VendorAddress"],
			"date" => $_REQUEST["data"],
			"dueDate" => $_REQUEST["dueData"],
			"itemName" => $_REQUEST["itemName"],
			"partsNo" => $_REQUEST["partsNo"]
		   );
		$this->model->edit_quotation($data,$arg);
	}
}
?>