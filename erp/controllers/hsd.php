<?php

class Hsd extends Controller {

	function __construct() {
		parent::__construct();
		  Session::init();
	}
    
     function index(){
        $this->view->render('hsd/index');
        
    }
	
    function dieselpurchase(){
        $this->view->render('hsd/dieselpurchase',true);
        
    }
    function oddometer(){
        $this->view->render('hsd/oddometer');
        
    }
    
    function dieselissue(){
        $this->view->render('hsd/dieselissue',true);
        
    }
	function dieselDetails(){
        	
        $this->view->alldiesel = $this->model->dieseldetails();
        echo json_encode($this->view->alldiesel);
        
    }
    function dieselratedetails(){
        	
       
        $this->view->render('hsd/dieselratedetails');
        
    }
    
    function view_dieselratedetails() 
	{
		//Auth::handleLogin();
	//Auth::handleLogin();
		$data = $_REQUEST;
		if($data['id']=='')
		    {
				$this->view->pick='';
				$this->view->data=$data;
			} 
		else 
			{
				$this->view->pick=$data['id'];
				$this->view->content= $this->model->view_dieselratedetails($data['id']);
				//print_r($this->view->content);
}
        echo json_encode($this->view->content);
//$this->view->render('master/view_expenselog');
	}
    
    function delete_dieselratedetails(){
        $id=$_REQUEST['id'];
        $this->model->delete_dieselratedetails($id);
        
    }
    
    function add_dieselratedetails(){
        $data = array( 
                    'id' => null,
					'DRMNO' => $_REQUEST['DRMNO'],
                    'ProductCode' => $_REQUEST['ProductCode'],
                    'FuelParty' => $_REQUEST['FuelParty'],
                    'FuelStation' => $_REQUEST['FuelStation'],
                    'SrNo' => $_REQUEST['SrNo'],
                    'FromDates' => $_REQUEST['FromDates'],
                    'ExpiryDate' => $_REQUEST['ExpiryDate'],
                    'DieselRate' => $_REQUEST['DieselRate']
                   );
        $this->model->add_dieselratedetails($data);
        
    }
    
    function edit_dieselratedetails(){
        $arg=$_REQUEST['id'];
        $data = array( 
                   
					'DRMNO' => $_REQUEST['DRMNO'],
                    'ProductCode' => $_REQUEST['ProductCode'],
                    'FuelParty' => $_REQUEST['FuelParty'],
                    'FuelStation' => $_REQUEST['FuelStation'],
                    'SrNo' => $_REQUEST['SrNo'],
                    'FromDates' => $_REQUEST['FromDates'],
                    'ExpiryDate' => $_REQUEST['ExpiryDate'],
                    'DieselRate' => $_REQUEST['DieselRate']
                   );
        $this->model->edit_dieselratedetails($data,$arg);
    }
	
    function getalldieselratedetails(){
     $this->view->alldieselratedetails = $this->model->dieselratedetails();
        echo json_encode($this->view->alldieselratedetails);
    }
    
    
    
   ///////////////category master /////////////// 
    
    function categorymaster(){
        	
       
	$this->view->render("hsd/categorymaster");
	
}

function getallcategorymaster(){
 $this->view->allcategorymaster = $this->model->categorymaster();
	echo json_encode($this->view->allcategorymaster);
}

function view_categorymaster() 
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
			$this->view->content= $this->model->view_categorymaster($data["id"]);
}
	echo json_encode($this->view->content);
}

function delete_categorymaster(){
	$id=$_REQUEST["id"];
	$this->model->delete_categorymaster($id);
	
}

function add_categorymaster(){
	$data = array( 
				"id" => null, "CategoryCode" => $_REQUEST["CategoryCode"],"CategoryName" => $_REQUEST["CategoryName"]
			   );
	$this->model->add_categorymaster($data);
	
}

function edit_categorymaster(){
	$arg=$_REQUEST["id"];
	$data = array( 
        "CategoryCode" => $_REQUEST["CategoryCode"],
         "CategoryName" => $_REQUEST["CategoryName"]
			   );
	$this->model->edit_categorymaster($data,$arg);
}

    
 //////////////////////////////////////////
    
    
/////////////////////////freightinvoiceheader//////////////
    
    
    
  function freightinvoiceheader(){
        	
       
	$this->view->render("hsd/freightinvoiceheader");
	
}

function getallfreightinvoiceheader(){
 $this->view->allfreightinvoiceheader = $this->model->freightinvoiceheader();
	echo json_encode($this->view->allfreightinvoiceheader);
}

function view_freightinvoiceheader() 
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
			$this->view->content= $this->model->view_freightinvoiceheader($data["id"]);
}
	echo json_encode($this->view->content);
}

function delete_freightinvoiceheader(){
	$id=$_REQUEST["id"];
	$this->model->delete_freightinvoiceheader($id);
	
}

function add_freightinvoiceheader(){
	$data = array( 
				"id" => null, "InvCode" => $_REQUEST["InvCode"],"Inv_No" => $_REQUEST["Inv_No"],"Inv_Dates" => $_REQUEST["Inv_Dates"],"BillNo" => $_REQUEST["BillNo"],"BillingPartyCode" => $_REQUEST["BillingPartyCode"],"BillingPartyName" => $_REQUEST["BillingPartyName"],"BillingFrom" => $_REQUEST["BillingFrom"],"BillingTo" => $_REQUEST["BillingTo"],"BillingQty" => $_REQUEST["BillingQty"],"ActualFreight" => $_REQUEST["ActualFreight"],"ShortAmt" => $_REQUEST["ShortAmt"],"TDSAmt" => $_REQUEST["TDSAmt"],"NetFreight" => $_REQUEST["NetFreight"],"FuelAmt" => $_REQUEST["FuelAmt"],"CashAdv" => $_REQUEST["CashAdv"],"BiltyComis" => $_REQUEST["BiltyComis"],"TotalDeduct" => $_REQUEST["TotalDeduct"],"NetPayable" => $_REQUEST["NetPayable"],"RecdYN" => $_REQUEST["RecdYN"],"PreparedBy" => $_REQUEST["PreparedBy"],"Remarks" => $_REQUEST["Remarks"]
			   );
	$this->model->add_freightinvoiceheader($data);
	
}

function edit_freightinvoiceheader(){
	$arg=$_REQUEST["id"];
	$data = array( "InvCode" => $_REQUEST["InvCode"],"Inv_No" => $_REQUEST["Inv_No"],"Inv_Dates" => $_REQUEST["Inv_Dates"],"BillNo" => $_REQUEST["BillNo"],"BillingPartyCode" => $_REQUEST["BillingPartyCode"],"BillingPartyName" => $_REQUEST["BillingPartyName"],"BillingFrom" => $_REQUEST["BillingFrom"],"BillingTo" => $_REQUEST["BillingTo"],"BillingQty" => $_REQUEST["BillingQty"],"ActualFreight" => $_REQUEST["ActualFreight"],"ShortAmt" => $_REQUEST["ShortAmt"],"TDSAmt" => $_REQUEST["TDSAmt"],"NetFreight" => $_REQUEST["NetFreight"],"FuelAmt" => $_REQUEST["FuelAmt"],"CashAdv" => $_REQUEST["CashAdv"],"BiltyComis" => $_REQUEST["BiltyComis"],"TotalDeduct" => $_REQUEST["TotalDeduct"],"NetPayable" => $_REQUEST["NetPayable"],"RecdYN" => $_REQUEST["RecdYN"],"PreparedBy" => $_REQUEST["PreparedBy"],"Remarks" => $_REQUEST["Remarks"]
			   );
	$this->model->edit_freightinvoiceheader($data,$arg);
}
  
    
    
    
    
    
    
    ///////////////////////////////////////////
    
    
  function DailyChallanEntry(){
        	
       
	$this->view->render("hsd/DailyChallanEntry");
	
}

function getallDailyChallanEntry(){
 $this->view->allDailyChallanEntry = $this->model->DailyChallanEntry();
	echo json_encode($this->view->allDailyChallanEntry);
}

function view_DailyChallanEntry() 
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
			$this->view->content= $this->model->view_DailyChallanEntry($data["id"]);
}
	echo json_encode($this->view->content);
}

function delete_DailyChallanEntry(){
	$id=$_REQUEST["id"];
	$this->model->delete_DailyChallanEntry($id);
	
}

function add_DailyChallanEntry(){
	$data = array( 
				"id" => null, "TrSrNo" => $_REQUEST["TrSrNo"],"ChallanDates" => $_REQUEST["ChallanDates"],"MonthYear" => $_REQUEST["MonthYear"],"ReceiveDates" => $_REQUEST["ReceiveDates"],"ChallanNo" => $_REQUEST["ChallanNo"],"TPGPNO" => $_REQUEST["TPGPNO"],"ODTPNO" => $_REQUEST["ODTPNO"],"WayBillNo" => $_REQUEST["WayBillNo"],"InvoiceNo" => $_REQUEST["InvoiceNo"],"DispTypesDT" => $_REQUEST["DispTypesDT"],"VehicleNo" => $_REQUEST["VehicleNo"],"ShortVehNo" => $_REQUEST["ShortVehNo"],"OwnerCode" => $_REQUEST["OwnerCode"],"DOPartyCode" => $_REQUEST["DOPartyCode"],"DONPartyName" => $_REQUEST["DONPartyName"],"GradeCode" => $_REQUEST["GradeCode"],"GradeName" => $_REQUEST["GradeName"],"PartyCode" => $_REQUEST["PartyCode"],"ConsigneeName" => $_REQUEST["ConsigneeName"],"RoutCode" => $_REQUEST["RoutCode"],"RoutName" => $_REQUEST["RoutName"],"FreightRate" => $_REQUEST["FreightRate"],"FORRate" => $_REQUEST["FORRate"],"GrossWT" => $_REQUEST["GrossWT"],"TareWT" => $_REQUEST["TareWT"],"DesQty" => $_REQUEST["DesQty"],"RecQty" => $_REQUEST["RecQty"],"MinQty" => $_REQUEST["MinQty"],"ShortQty" => $_REQUEST["ShortQty"],"ShortRate" => $_REQUEST["ShortRate"],"ShortAmt" => $_REQUEST["ShortAmt"],"CashAdv" => $_REQUEST["CashAdv"],"BiltyComis" => $_REQUEST["BiltyComis"],"MinesExp" => $_REQUEST["MinesExp"],"FuelParty" => $_REQUEST["FuelParty"],"FuelStation" => $_REQUEST["FuelStation"],"FuelSlipNo" => $_REQUEST["FuelSlipNo"],"FuelQty" => $_REQUEST["FuelQty"],"FuelRate" => $_REQUEST["FuelRate"],"FuelAmt" => $_REQUEST["FuelAmt"],"FreightYN" => $_REQUEST["FreightYN"],"BillMadeYN" => $_REQUEST["BillMadeYN"],"LockedYN" => $_REQUEST["LockedYN"],"ImportDate" => $_REQUEST["ImportDate"],"DriverCode" => $_REQUEST["DriverCode"],"DriverName" => $_REQUEST["DriverName"]
			   );
	$this->model->add_DailyChallanEntry($data);
	
}

function edit_DailyChallanEntry(){
	$arg=$_REQUEST["id"];
	$data = array( "TrSrNo" => $_REQUEST["TrSrNo"],"ChallanDates" => $_REQUEST["ChallanDates"],"MonthYear" => $_REQUEST["MonthYear"],"ReceiveDates" => $_REQUEST["ReceiveDates"],"ChallanNo" => $_REQUEST["ChallanNo"],"TPGPNO" => $_REQUEST["TPGPNO"],"ODTPNO" => $_REQUEST["ODTPNO"],"WayBillNo" => $_REQUEST["WayBillNo"],"InvoiceNo" => $_REQUEST["InvoiceNo"],"DispTypesDT" => $_REQUEST["DispTypesDT"],"VehicleNo" => $_REQUEST["VehicleNo"],"ShortVehNo" => $_REQUEST["ShortVehNo"],"OwnerCode" => $_REQUEST["OwnerCode"],"DOPartyCode" => $_REQUEST["DOPartyCode"],"DONPartyName" => $_REQUEST["DONPartyName"],"GradeCode" => $_REQUEST["GradeCode"],"GradeName" => $_REQUEST["GradeName"],"PartyCode" => $_REQUEST["PartyCode"],"ConsigneeName" => $_REQUEST["ConsigneeName"],"RoutCode" => $_REQUEST["RoutCode"],"RoutName" => $_REQUEST["RoutName"],"FreightRate" => $_REQUEST["FreightRate"],"FORRate" => $_REQUEST["FORRate"],"GrossWT" => $_REQUEST["GrossWT"],"TareWT" => $_REQUEST["TareWT"],"DesQty" => $_REQUEST["DesQty"],"RecQty" => $_REQUEST["RecQty"],"MinQty" => $_REQUEST["MinQty"],"ShortQty" => $_REQUEST["ShortQty"],"ShortRate" => $_REQUEST["ShortRate"],"ShortAmt" => $_REQUEST["ShortAmt"],"CashAdv" => $_REQUEST["CashAdv"],"BiltyComis" => $_REQUEST["BiltyComis"],"MinesExp" => $_REQUEST["MinesExp"],"FuelParty" => $_REQUEST["FuelParty"],"FuelStation" => $_REQUEST["FuelStation"],"FuelSlipNo" => $_REQUEST["FuelSlipNo"],"FuelQty" => $_REQUEST["FuelQty"],"FuelRate" => $_REQUEST["FuelRate"],"FuelAmt" => $_REQUEST["FuelAmt"],"FreightYN" => $_REQUEST["FreightYN"],"BillMadeYN" => $_REQUEST["BillMadeYN"],"LockedYN" => $_REQUEST["LockedYN"],"ImportDate" => $_REQUEST["ImportDate"],"DriverCode" => $_REQUEST["DriverCode"],"DriverName" => $_REQUEST["DriverName"]
			   );
	$this->model->edit_DailyChallanEntry($data,$arg);
}

    
    
    ////////////////////////////////////
    
   function AlertDaysSettingMaster(){
        	
       
	$this->view->render("hsd/AlertDaysSettingMaster");
	
}

function getallAlertDaysSettingMaster(){
 $this->view->allAlertDaysSettingMaster = $this->model->AlertDaysSettingMaster();
	echo json_encode($this->view->allAlertDaysSettingMaster);
}

function view_AlertDaysSettingMaster() 
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
			$this->view->content= $this->model->view_AlertDaysSettingMaster($data["id"]);
}
	echo json_encode($this->view->content);
}

function delete_AlertDaysSettingMaster(){
	$id=$_REQUEST["id"];
	$this->model->delete_AlertDaysSettingMaster($id);
	
}

function add_AlertDaysSettingMaster(){
	$data = array( 
				"id" => null, "Code" => $_REQUEST["Code"],"InsuranceDays" => $_REQUEST["InsuranceDays"],"FitnessDays" => $_REQUEST["FitnessDays"],"PermitDays" => $_REQUEST["PermitDays"],"RoadTaxDays" => $_REQUEST["RoadTaxDays"],"PolutionDays" => $_REQUEST["PolutionDays"]
			   );
	$this->model->add_AlertDaysSettingMaster($data);
	
}

function edit_AlertDaysSettingMaster(){
	$arg=$_REQUEST["id"];
	$data = array( "Code" => $_REQUEST["Code"],"InsuranceDays" => $_REQUEST["InsuranceDays"],"FitnessDays" => $_REQUEST["FitnessDays"],"PermitDays" => $_REQUEST["PermitDays"],"RoadTaxDays" => $_REQUEST["RoadTaxDays"],"PolutionDays" => $_REQUEST["PolutionDays"]
			   );
	$this->model->edit_AlertDaysSettingMaster($data,$arg);
}

    //////////////////////////////////////////////////////
    
   function BankMaster(){
        	
       
	$this->view->render("hsd/BankMaster");
	
}

function getallBankMaster(){
 $this->view->allBankMaster = $this->model->BankMaster();
	echo json_encode($this->view->allBankMaster);
}

function view_BankMaster() 
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
			$this->view->content= $this->model->view_BankMaster($data["id"]);
}
	echo json_encode($this->view->content);
}

function delete_BankMaster(){
	$id=$_REQUEST["id"];
	$this->model->delete_BankMaster($id);
	
}

function add_BankMaster(){
	$data = array( 
				"id" => null, "BankCode" => $_REQUEST["BankCode"],"BankName" => $_REQUEST["BankName"],"ShortName" => $_REQUEST["ShortName"],"AccountNo" => $_REQUEST["AccountNo"],"AType" => $_REQUEST["AType"],"OpBalance" => $_REQUEST["OpBalance"],"CurBalance" => $_REQUEST["CurBalance"]
			   );
	$this->model->add_BankMaster($data);
	
}

function edit_BankMaster(){
	$arg=$_REQUEST["id"];
	$data = array( "BankCode" => $_REQUEST["BankCode"],"BankName" => $_REQUEST["BankName"],"ShortName" => $_REQUEST["ShortName"],"AccountNo" => $_REQUEST["AccountNo"],"AType" => $_REQUEST["AType"],"OpBalance" => $_REQUEST["OpBalance"],"CurBalance" => $_REQUEST["CurBalance"]
			   );
	$this->model->edit_BankMaster($data,$arg);
}

    
    ///////////////////////////////////////////////
    
    function billingratedetails(){
        	
       
	$this->view->render("hsd/billingratedetails");
	
}

function getallbillingratedetails(){
 $this->view->allbillingratedetails = $this->model->billingratedetails();
	echo json_encode($this->view->allbillingratedetails);
}

function view_billingratedetails() 
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
			$this->view->content= $this->model->view_billingratedetails($data["id"]);
}
	echo json_encode($this->view->content);
}

function delete_billingratedetails(){
	$id=$_REQUEST["id"];
	$this->model->delete_billingratedetails($id);
	
}

function add_billingratedetails(){
	$data = array( 
				"id" => null, "FORNO" => $_REQUEST["FORNO"],"PartyCode" => $_REQUEST["PartyCode"],"RoutCode" => $_REQUEST["RoutCode"],"SrNo" => $_REQUEST["SrNo"],"FromDates" => $_REQUEST["FromDates"],"ExpiryDate" => $_REQUEST["ExpiryDate"],"BillingRate" => $_REQUEST["BillingRate"]
			   );
	$this->model->add_billingratedetails($data);
	
}

function edit_billingratedetails(){
	$arg=$_REQUEST["id"];
	$data = array( "FORNO" => $_REQUEST["FORNO"],"PartyCode" => $_REQUEST["PartyCode"],"RoutCode" => $_REQUEST["RoutCode"],"SrNo" => $_REQUEST["SrNo"],"FromDates" => $_REQUEST["FromDates"],"ExpiryDate" => $_REQUEST["ExpiryDate"],"BillingRate" => $_REQUEST["BillingRate"]
			   );
	$this->model->edit_billingratedetails($data,$arg);
}

    /////////////////////////////////////////////////////////////////
    
    function CityMaster(){
        	
       
	$this->view->render("hsd/CityMaster");
	
}

function getallCityMaster(){
 $this->view->allCityMaster = $this->model->CityMaster();
	echo json_encode($this->view->allCityMaster);
}

function view_CityMaster() 
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
			$this->view->content= $this->model->view_CityMaster($data["id"]);
}
	echo json_encode($this->view->content);
}

function delete_CityMaster(){
	$id=$_REQUEST["id"];
	$this->model->delete_CityMaster($id);
	
}

function add_CityMaster(){
	$data = array( 
				"id" => null, "CityCode" => $_REQUEST["CityCode"],"CityName" => $_REQUEST["CityName"],"StateName" => $_REQUEST["StateName"]
			   );
	$this->model->add_CityMaster($data);
	
}

function edit_CityMaster(){
	$arg=$_REQUEST["id"];
	$data = array( "CityCode" => $_REQUEST["CityCode"],"CityName" => $_REQUEST["CityName"],"StateName" => $_REQUEST["StateName"]
			   );
	$this->model->edit_CityMaster($data,$arg);
}

    
    /////////////////////////////////////
    
  function payrollheader(){
        	
       
	$this->view->render("hsd/payrollheader");
	
}

function getallpayrollheader(){
 $this->view->allpayrollheader = $this->model->payrollheader();
	echo json_encode($this->view->allpayrollheader);
}

function view_payrollheader() 
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
			$this->view->content= $this->model->view_payrollheader($data["id"]);
}
	echo json_encode($this->view->content);
}

function delete_payrollheader(){
	$id=$_REQUEST["id"];
	$this->model->delete_payrollheader($id);
	
}

function add_payrollheader(){
	$data = array( 
				"id" => null, "PPSrNo" => $_REQUEST["PPSrNo"],"ProcessDates" => $_REQUEST["ProcessDates"],"LedgerType" => $_REQUEST["LedgerType"],"MonthofSalary" => $_REQUEST["MonthofSalary"],"MonthYear" => $_REQUEST["MonthYear"],"FYearCode" => $_REQUEST["FYearCode"],"DTSSrNo" => $_REQUEST["DTSSrNo"]
			   );
	$this->model->add_payrollheader($data);
	
}

function edit_payrollheader(){
	$arg=$_REQUEST["id"];
	$data = array( "PPSrNo" => $_REQUEST["PPSrNo"],"ProcessDates" => $_REQUEST["ProcessDates"],"LedgerType" => $_REQUEST["LedgerType"],"MonthofSalary" => $_REQUEST["MonthofSalary"],"MonthYear" => $_REQUEST["MonthYear"],"FYearCode" => $_REQUEST["FYearCode"],"DTSSrNo" => $_REQUEST["DTSSrNo"]
			   );
	$this->model->edit_payrollheader($data,$arg);
}

    //////////////////////////////////////////////////////////
    
    function CompanyMaster(){
        	
       
	$this->view->render("hsd/CompanyMaster");
	
}

function getallCompanyMaster(){
 $this->view->allCompanyMaster = $this->model->CompanyMaster();
	echo json_encode($this->view->allCompanyMaster);
}

function view_CompanyMaster() 
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
			$this->view->content= $this->model->view_CompanyMaster($data["id"]);
}
	echo json_encode($this->view->content);
}

function delete_CompanyMaster(){
	$id=$_REQUEST["id"];
	$this->model->delete_CompanyMaster($id);
	
}

function add_CompanyMaster(){
	$data = array( 
				"id" => null, "CmpyCode" => $_REQUEST["CmpyCode"],"CompanyName" => $_REQUEST["CompanyName"],"RegOffice" => $_REQUEST["RegOffice"],"FullAddress" => $_REQUEST["FullAddress"],"SSTNO" => $_REQUEST["SSTNO"],"CSTNO" => $_REQUEST["CSTNO"],"TINNO" => $_REQUEST["TINNO"],"PANNO" => $_REQUEST["PANNO"],"MobileNo" => $_REQUEST["MobileNo"],"TelePhone" => $_REQUEST["TelePhone"],"Fax" => $_REQUEST["Fax"],"BankName" => $_REQUEST["BankName"],"BankAccNo" => $_REQUEST["BankAccNo"],"IFCCode" => $_REQUEST["IFCCode"],"EmailId" => $_REQUEST["EmailId"],"CmpyLogo" => $_REQUEST["CmpyLogo"]
			   );
	$this->model->add_CompanyMaster($data);
	
}

function edit_CompanyMaster(){
	$arg=$_REQUEST["id"];
	$data = array( "CmpyCode" => $_REQUEST["CmpyCode"],"CompanyName" => $_REQUEST["CompanyName"],"RegOffice" => $_REQUEST["RegOffice"],"FullAddress" => $_REQUEST["FullAddress"],"SSTNO" => $_REQUEST["SSTNO"],"CSTNO" => $_REQUEST["CSTNO"],"TINNO" => $_REQUEST["TINNO"],"PANNO" => $_REQUEST["PANNO"],"MobileNo" => $_REQUEST["MobileNo"],"TelePhone" => $_REQUEST["TelePhone"],"Fax" => $_REQUEST["Fax"],"BankName" => $_REQUEST["BankName"],"BankAccNo" => $_REQUEST["BankAccNo"],"IFCCode" => $_REQUEST["IFCCode"],"EmailId" => $_REQUEST["EmailId"],"CmpyLogo" => $_REQUEST["CmpyLogo"]
			   );
	$this->model->edit_CompanyMaster($data,$arg);
}

    ////////////////////////////////////////////////////////////////
    
    function doregistration(){
        	
       
	$this->view->render("hsd/doregistration");
	
}

function getalldoregistration(){
 $this->view->alldoregistration = $this->model->doregistration();
	echo json_encode($this->view->alldoregistration);
}

function view_doregistration() 
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
			$this->view->content= $this->model->view_doregistration($data["id"]);
}
	echo json_encode($this->view->content);
}

function delete_doregistration(){
	$id=$_REQUEST["id"];
	$this->model->delete_doregistration($id);
	
}

function add_doregistration(){
	$data = array( 
				"id" => null, "DOCode" => $_REQUEST["DOCode"],"DONO" => $_REQUEST["DONO"],"PONO" => $_REQUEST["PONO"],"PartyCode" => $_REQUEST["PartyCode"],"DODate" => $_REQUEST["DODate"],"ExpiryDate" => $_REQUEST["ExpiryDate"],"MinesCode" => $_REQUEST["MinesCode"],"GradeCode" => $_REQUEST["GradeCode"],"DOQTY" => $_REQUEST["DOQTY"],"AllotDOQTY" => $_REQUEST["AllotDOQTY"],"FreightRate" => $_REQUEST["FreightRate"],"LapsDOQty" => $_REQUEST["LapsDOQty"],"BiltyComis" => $_REQUEST["BiltyComis"],"ShortageRate" => $_REQUEST["ShortageRate"],"StatusOC" => $_REQUEST["StatusOC"]
			   );
	$this->model->add_doregistration($data);
	
}

function edit_doregistration(){
	$arg=$_REQUEST["id"];
	$data = array( "DOCode" => $_REQUEST["DOCode"],"DONO" => $_REQUEST["DONO"],"PONO" => $_REQUEST["PONO"],"PartyCode" => $_REQUEST["PartyCode"],"DODate" => $_REQUEST["DODate"],"ExpiryDate" => $_REQUEST["ExpiryDate"],"MinesCode" => $_REQUEST["MinesCode"],"GradeCode" => $_REQUEST["GradeCode"],"DOQTY" => $_REQUEST["DOQTY"],"AllotDOQTY" => $_REQUEST["AllotDOQTY"],"FreightRate" => $_REQUEST["FreightRate"],"LapsDOQty" => $_REQUEST["LapsDOQty"],"BiltyComis" => $_REQUEST["BiltyComis"],"ShortageRate" => $_REQUEST["ShortageRate"],"StatusOC" => $_REQUEST["StatusOC"]
			   );
	$this->model->edit_doregistration($data,$arg);
}

    
/////////////////////////////////////////////////////
    
    function fpmtdetails(){
        	
       
	$this->view->render("hsd/fpmtdetails");
	
}

function getallfpmtdetails(){
 $this->view->allfpmtdetails = $this->model->fpmtdetails();
	echo json_encode($this->view->allfpmtdetails);
}

function view_fpmtdetails() 
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
			$this->view->content= $this->model->view_fpmtdetails($data["id"]);
}
	echo json_encode($this->view->content);
}

function delete_fpmtdetails(){
	$id=$_REQUEST["id"];
	$this->model->delete_fpmtdetails($id);
	
}

function add_fpmtdetails(){
	$data = array( 
				"id" => null, "FVNumber" => $_REQUEST["FVNumber"],"VoucherDates" => $_REQUEST["VoucherDates"],"FromDates" => $_REQUEST["FromDates"],"ToDates" => $_REQUEST["ToDates"],"OwnerCode" => $_REQUEST["OwnerCode"],"OwnerName" => $_REQUEST["OwnerName"],"AgentCode" => $_REQUEST["AgentCode"],"PayTypeBCP" => $_REQUEST["PayTypeBCP"],"BankCode" => $_REQUEST["BankCode"],"ChequeNo" => $_REQUEST["ChequeNo"],"ChequeDate" => $_REQUEST["ChequeDate"],"SrNo" => $_REQUEST["SrNo"],"ChallanNo" => $_REQUEST["ChallanNo"],"Code" => $_REQUEST["Code"],"ChallanDates" => $_REQUEST["ChallanDates"],"FYears" => $_REQUEST["FYears"],"TPGPNO" => $_REQUEST["TPGPNO"],"VehicleNo" => $_REQUEST["VehicleNo"],"ShortVehNo" => $_REQUEST["ShortVehNo"],"DOPartyCode" => $_REQUEST["DOPartyCode"],"DOPartyName" => $_REQUEST["DOPartyName"],"GradeCode" => $_REQUEST["GradeCode"],"GradeName" => $_REQUEST["GradeName"],"PartyCode" => $_REQUEST["PartyCode"],"PartyName" => $_REQUEST["PartyName"],"RoutCode" => $_REQUEST["RoutCode"],"RoutName" => $_REQUEST["RoutName"],"FreightRate" => $_REQUEST["FreightRate"],"DesQty" => $_REQUEST["DesQty"],"RecQty" => $_REQUEST["RecQty"],"MinQty" => $_REQUEST["MinQty"],"TotalFreight" => $_REQUEST["TotalFreight"],"ShortQty" => $_REQUEST["ShortQty"],"ShortRate" => $_REQUEST["ShortRate"],"ShortAmt" => $_REQUEST["ShortAmt"],"TDSP" => $_REQUEST["TDSP"],"TDSAmt" => $_REQUEST["TDSAmt"],"NetFreight" => $_REQUEST["NetFreight"],"FuelParty" => $_REQUEST["FuelParty"],"FuelStation" => $_REQUEST["FuelStation"],"FuelSlipNo" => $_REQUEST["FuelSlipNo"],"FuelQty" => $_REQUEST["FuelQty"],"FuelRate" => $_REQUEST["FuelRate"],"FuelAmt" => $_REQUEST["FuelAmt"],"CashAdv" => $_REQUEST["CashAdv"],"BiltyComis" => $_REQUEST["BiltyComis"],"OtherDeduct" => $_REQUEST["OtherDeduct"],"TotalDeduction" => $_REQUEST["TotalDeduction"],"NetPayable" => $_REQUEST["NetPayable"],"TransType" => $_REQUEST["TransType"],"BillMadeYN" => $_REQUEST["BillMadeYN"],"Selected" => $_REQUEST["Selected"]
			   );
	$this->model->add_fpmtdetails($data);
	
}

function edit_fpmtdetails(){
	$arg=$_REQUEST["id"];
	$data = array( "FVNumber" => $_REQUEST["FVNumber"],"VoucherDates" => $_REQUEST["VoucherDates"],"FromDates" => $_REQUEST["FromDates"],"ToDates" => $_REQUEST["ToDates"],"OwnerCode" => $_REQUEST["OwnerCode"],"OwnerName" => $_REQUEST["OwnerName"],"AgentCode" => $_REQUEST["AgentCode"],"PayTypeBCP" => $_REQUEST["PayTypeBCP"],"BankCode" => $_REQUEST["BankCode"],"ChequeNo" => $_REQUEST["ChequeNo"],"ChequeDate" => $_REQUEST["ChequeDate"],"SrNo" => $_REQUEST["SrNo"],"ChallanNo" => $_REQUEST["ChallanNo"],"Code" => $_REQUEST["Code"],"ChallanDates" => $_REQUEST["ChallanDates"],"FYears" => $_REQUEST["FYears"],"TPGPNO" => $_REQUEST["TPGPNO"],"VehicleNo" => $_REQUEST["VehicleNo"],"ShortVehNo" => $_REQUEST["ShortVehNo"],"DOPartyCode" => $_REQUEST["DOPartyCode"],"DOPartyName" => $_REQUEST["DOPartyName"],"GradeCode" => $_REQUEST["GradeCode"],"GradeName" => $_REQUEST["GradeName"],"PartyCode" => $_REQUEST["PartyCode"],"PartyName" => $_REQUEST["PartyName"],"RoutCode" => $_REQUEST["RoutCode"],"RoutName" => $_REQUEST["RoutName"],"FreightRate" => $_REQUEST["FreightRate"],"DesQty" => $_REQUEST["DesQty"],"RecQty" => $_REQUEST["RecQty"],"MinQty" => $_REQUEST["MinQty"],"TotalFreight" => $_REQUEST["TotalFreight"],"ShortQty" => $_REQUEST["ShortQty"],"ShortRate" => $_REQUEST["ShortRate"],"ShortAmt" => $_REQUEST["ShortAmt"],"TDSP" => $_REQUEST["TDSP"],"TDSAmt" => $_REQUEST["TDSAmt"],"NetFreight" => $_REQUEST["NetFreight"],"FuelParty" => $_REQUEST["FuelParty"],"FuelStation" => $_REQUEST["FuelStation"],"FuelSlipNo" => $_REQUEST["FuelSlipNo"],"FuelQty" => $_REQUEST["FuelQty"],"FuelRate" => $_REQUEST["FuelRate"],"FuelAmt" => $_REQUEST["FuelAmt"],"CashAdv" => $_REQUEST["CashAdv"],"BiltyComis" => $_REQUEST["BiltyComis"],"OtherDeduct" => $_REQUEST["OtherDeduct"],"TotalDeduction" => $_REQUEST["TotalDeduction"],"NetPayable" => $_REQUEST["NetPayable"],"TransType" => $_REQUEST["TransType"],"BillMadeYN" => $_REQUEST["BillMadeYN"],"Selected" => $_REQUEST["Selected"]
			   );
	$this->model->edit_fpmtdetails($data,$arg);
}

    
    ///////////////////////////////////////////////////////////
    
    function freightinvoicedetails(){
        	
       
	$this->view->render("hsd/freightinvoicedetails");
	
}

function getallfreightinvoicedetails(){
 $this->view->allfreightinvoicedetails = $this->model->freightinvoicedetails();
	echo json_encode($this->view->allfreightinvoicedetails);
}

function view_freightinvoicedetails() 
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
			$this->view->content= $this->model->view_freightinvoicedetails($data["id"]);
}
	echo json_encode($this->view->content);
}

function delete_freightinvoicedetails(){
	$id=$_REQUEST["id"];
	$this->model->delete_freightinvoicedetails($id);
	
}

function add_freightinvoicedetails(){
	$data = array( 
				"id" => null, "InvCode" => $_REQUEST["InvCode"],"Inv_No" => $_REQUEST["Inv_No"],"Inv_Dates" => $_REQUEST["Inv_Dates"],"BillNo" => $_REQUEST["BillNo"],"BillingPartyCode" => $_REQUEST["BillingPartyCode"],"BillingPartyName" => $_REQUEST["BillingPartyName"],"SrNo" => $_REQUEST["SrNo"],"ChallanNo" => $_REQUEST["ChallanNo"],"TranspSrNo" => $_REQUEST["TranspSrNo"],"MonthYear" => $_REQUEST["MonthYear"],"ChallanDates" => $_REQUEST["ChallanDates"],"VehicleNo" => $_REQUEST["VehicleNo"],"OwnerCode" => $_REQUEST["OwnerCode"],"GradeCode" => $_REQUEST["GradeCode"],"GradeName" => $_REQUEST["GradeName"],"PartyCode" => $_REQUEST["PartyCode"],"PartyName" => $_REQUEST["PartyName"],"RoutCode" => $_REQUEST["RoutCode"],"RoutName" => $_REQUEST["RoutName"],"FreightRate" => $_REQUEST["FreightRate"],"DesQty" => $_REQUEST["DesQty"],"RecQty" => $_REQUEST["RecQty"],"BillingQty" => $_REQUEST["BillingQty"],"ActualFreight" => $_REQUEST["ActualFreight"],"ShortQty" => $_REQUEST["ShortQty"],"ShortRate" => $_REQUEST["ShortRate"],"ShortAmt" => $_REQUEST["ShortAmt"],"NetFreight" => $_REQUEST["NetFreight"],"FuelQty" => $_REQUEST["FuelQty"],"FuelRate" => $_REQUEST["FuelRate"],"FuelAmt" => $_REQUEST["FuelAmt"],"CashAdv" => $_REQUEST["CashAdv"],"BiltyComis" => $_REQUEST["BiltyComis"],"TotalDeduct" => $_REQUEST["TotalDeduct"],"NetPayable" => $_REQUEST["NetPayable"]
			   );
	$this->model->add_freightinvoicedetails($data);
	
}

function edit_freightinvoicedetails(){
	$arg=$_REQUEST["id"];
	$data = array( "InvCode" => $_REQUEST["InvCode"],"Inv_No" => $_REQUEST["Inv_No"],"Inv_Dates" => $_REQUEST["Inv_Dates"],"BillNo" => $_REQUEST["BillNo"],"BillingPartyCode" => $_REQUEST["BillingPartyCode"],"BillingPartyName" => $_REQUEST["BillingPartyName"],"SrNo" => $_REQUEST["SrNo"],"ChallanNo" => $_REQUEST["ChallanNo"],"TranspSrNo" => $_REQUEST["TranspSrNo"],"MonthYear" => $_REQUEST["MonthYear"],"ChallanDates" => $_REQUEST["ChallanDates"],"VehicleNo" => $_REQUEST["VehicleNo"],"OwnerCode" => $_REQUEST["OwnerCode"],"GradeCode" => $_REQUEST["GradeCode"],"GradeName" => $_REQUEST["GradeName"],"PartyCode" => $_REQUEST["PartyCode"],"PartyName" => $_REQUEST["PartyName"],"RoutCode" => $_REQUEST["RoutCode"],"RoutName" => $_REQUEST["RoutName"],"FreightRate" => $_REQUEST["FreightRate"],"DesQty" => $_REQUEST["DesQty"],"RecQty" => $_REQUEST["RecQty"],"BillingQty" => $_REQUEST["BillingQty"],"ActualFreight" => $_REQUEST["ActualFreight"],"ShortQty" => $_REQUEST["ShortQty"],"ShortRate" => $_REQUEST["ShortRate"],"ShortAmt" => $_REQUEST["ShortAmt"],"NetFreight" => $_REQUEST["NetFreight"],"FuelQty" => $_REQUEST["FuelQty"],"FuelRate" => $_REQUEST["FuelRate"],"FuelAmt" => $_REQUEST["FuelAmt"],"CashAdv" => $_REQUEST["CashAdv"],"BiltyComis" => $_REQUEST["BiltyComis"],"TotalDeduct" => $_REQUEST["TotalDeduct"],"NetPayable" => $_REQUEST["NetPayable"]
			   );
	$this->model->edit_freightinvoicedetails($data,$arg);
}

    
    //////////////////////////////////////////////////////////////////
    
    
    
    function givdetails(){
        	
       
	$this->view->render("hsd/givdetails");
	
}

function getallgivdetails(){
 $this->view->allgivdetails = $this->model->givdetails();
	echo json_encode($this->view->allgivdetails);
}

function view_givdetails() 
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
			$this->view->content= $this->model->view_givdetails($data["id"]);
}
	echo json_encode($this->view->content);
}

function delete_givdetails(){
	$id=$_REQUEST["id"];
	$this->model->delete_givdetails($id);
	
}

function add_givdetails(){
	$data = array( 
				"id" => null, "GIVNumber" => $_REQUEST["GIVNumber"],"GIVDates" => $_REQUEST["GIVDates"],"IndNumber" => $_REQUEST["IndNumber"],"IndDates" => $_REQUEST["IndDates"],"FromLocCode" => $_REQUEST["FromLocCode"],"SrNo" => $_REQUEST["SrNo"],"VehicleCode" => $_REQUEST["VehicleCode"],"VehicleNo" => $_REQUEST["VehicleNo"],"OwnerCode" => $_REQUEST["OwnerCode"],"ProductCode" => $_REQUEST["ProductCode"],"ProductName" => $_REQUEST["ProductName"],"MadeByCmpy" => $_REQUEST["MadeByCmpy"],"PartsNo" => $_REQUEST["PartsNo"],"RackNo" => $_REQUEST["RackNo"],"Unit" => $_REQUEST["Unit"],"ClosingStock" => $_REQUEST["ClosingStock"],"QtyOrdered" => $_REQUEST["QtyOrdered"],"QtyIssued" => $_REQUEST["QtyIssued"],"UnitPrice" => $_REQUEST["UnitPrice"],"ItemTotal" => $_REQUEST["ItemTotal"]
			   );
	$this->model->add_givdetails($data);
	
}

function edit_givdetails(){
	$arg=$_REQUEST["id"];
	$data = array( "GIVNumber" => $_REQUEST["GIVNumber"],"GIVDates" => $_REQUEST["GIVDates"],"IndNumber" => $_REQUEST["IndNumber"],"IndDates" => $_REQUEST["IndDates"],"FromLocCode" => $_REQUEST["FromLocCode"],"SrNo" => $_REQUEST["SrNo"],"VehicleCode" => $_REQUEST["VehicleCode"],"VehicleNo" => $_REQUEST["VehicleNo"],"OwnerCode" => $_REQUEST["OwnerCode"],"ProductCode" => $_REQUEST["ProductCode"],"ProductName" => $_REQUEST["ProductName"],"MadeByCmpy" => $_REQUEST["MadeByCmpy"],"PartsNo" => $_REQUEST["PartsNo"],"RackNo" => $_REQUEST["RackNo"],"Unit" => $_REQUEST["Unit"],"ClosingStock" => $_REQUEST["ClosingStock"],"QtyOrdered" => $_REQUEST["QtyOrdered"],"QtyIssued" => $_REQUEST["QtyIssued"],"UnitPrice" => $_REQUEST["UnitPrice"],"ItemTotal" => $_REQUEST["ItemTotal"]
			   );
	$this->model->edit_givdetails($data,$arg);
}

    ////////////////////////////////////////////////
    
    
    function BillingRateHeader(){
        	
       
	$this->view->render("hsd/BillingRateHeader");
	
}

function getallBillingRateHeader(){
 $this->view->allBillingRateHeader = $this->model->BillingRateHeader();
	echo json_encode($this->view->allBillingRateHeader);
}

function view_BillingRateHeader() 
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
			$this->view->content= $this->model->view_BillingRateHeader($data["id"]);
}
	echo json_encode($this->view->content);
}

function delete_BillingRateHeader(){
	$id=$_REQUEST["id"];
	$this->model->delete_BillingRateHeader($id);
	
}

function add_BillingRateHeader(){
	$data = array( 
				"id" => null, "FORNO" => $_REQUEST["FORNO"],"PartyCode" => $_REQUEST["PartyCode"],"PartyName" => $_REQUEST["PartyName"],"RoutCode" => $_REQUEST["RoutCode"],"RoutName" => $_REQUEST["RoutName"],"BillingRate" => $_REQUEST["BillingRate"]
			   );
	$this->model->add_BillingRateHeader($data);
	
}

function edit_BillingRateHeader(){
	$arg=$_REQUEST["id"];
	$data = array( "FORNO" => $_REQUEST["FORNO"],"PartyCode" => $_REQUEST["PartyCode"],"PartyName" => $_REQUEST["PartyName"],"RoutCode" => $_REQUEST["RoutCode"],"RoutName" => $_REQUEST["RoutName"],"BillingRate" => $_REQUEST["BillingRate"]
			   );
	$this->model->edit_BillingRateHeader($data,$arg);
}

    
    
    
    //////////////////////////////////////////////////////////////
    
    
    function dieselratemaster(){
        	
       
	$this->view->render("hsd/dieselratemaster");
	
}

function getalldieselratemaster(){
 $this->view->alldieselratemaster = $this->model->dieselratemaster();
	echo json_encode($this->view->alldieselratemaster);
}

function view_dieselratemaster() 
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
			$this->view->content= $this->model->view_dieselratemaster($data["id"]);
}
	echo json_encode($this->view->content);
}

function delete_dieselratemaster(){
	$id=$_REQUEST["id"];
	$this->model->delete_dieselratemaster($id);
	
}

function add_dieselratemaster(){
	$data = array( 
				"id" => null, "DRMNO" => $_REQUEST["DRMNO"],"ProductCode" => $_REQUEST["ProductCode"],"ProductName" => $_REQUEST["ProductName"],"FuelParty" => $_REQUEST["FuelParty"],"FuelStation" => $_REQUEST["FuelStation"],"DieselRate" => $_REQUEST["DieselRate"]
			   );
	$this->model->add_dieselratemaster($data);
	
}

function edit_dieselratemaster(){
	$arg=$_REQUEST["id"];
	$data = array( "DRMNO" => $_REQUEST["DRMNO"],"ProductCode" => $_REQUEST["ProductCode"],"ProductName" => $_REQUEST["ProductName"],"FuelParty" => $_REQUEST["FuelParty"],"FuelStation" => $_REQUEST["FuelStation"],"DieselRate" => $_REQUEST["DieselRate"]
			   );
	$this->model->edit_dieselratemaster($data,$arg);
}

    
    
    //////////////////////////////////////////////////////////////////////
    
    
    function grademaster(){
        	
       
	$this->view->render("hsd/grademaster");
	
}

function getallgrademaster(){
 $this->view->allgrademaster = $this->model->grademaster();
	echo json_encode($this->view->allgrademaster);
}

function view_grademaster() 
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
			$this->view->content= $this->model->view_grademaster($data["id"]);
}
	echo json_encode($this->view->content);
}

function delete_grademaster(){
	$id=$_REQUEST["id"];
	$this->model->delete_grademaster($id);
	
}

function add_grademaster(){
	$data = array( 
				"id" => null, "GradeCode" => $_REQUEST["GradeCode"],"GradeName" => $_REQUEST["GradeName"]
			   );
	$this->model->add_grademaster($data);
	
}

function edit_grademaster(){
	$arg=$_REQUEST["id"];
	$data = array( "GradeCode" => $_REQUEST["GradeCode"],"GradeName" => $_REQUEST["GradeName"]
			   );
	$this->model->edit_grademaster($data,$arg);
}

    //////////////////////////////////////////////////////////////////////
    
    function locationmaster(){
        	
       
	$this->view->render("hsd/locationmaster");
	
}

function getalllocationmaster(){
 $this->view->alllocationmaster = $this->model->locationmaster();
	echo json_encode($this->view->alllocationmaster);
}

function view_locationmaster() 
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
			$this->view->content= $this->model->view_locationmaster($data["id"]);
}
	echo json_encode($this->view->content);
}

function delete_locationmaster(){
	$id=$_REQUEST["id"];
	$this->model->delete_locationmaster($id);
	
}

function add_locationmaster(){
	$data = array( 
				"id" => null, "LocCode" => $_REQUEST["LocCode"],"LocName" => $_REQUEST["LocName"]
			   );
	$this->model->add_locationmaster($data);
	
}

function edit_locationmaster(){
	$arg=$_REQUEST["id"];
	$data = array( "LocCode" => $_REQUEST["LocCode"],"LocName" => $_REQUEST["LocName"]
			   );
	$this->model->edit_locationmaster($data,$arg);
}

    
    ///////////////////////////////////////////////////////////////////////////
    
    
    function minesmaster(){
        	
       
	$this->view->render("hsd/minesmaster");
	
}

function getallminesmaster(){
 $this->view->allminesmaster = $this->model->minesmaster();
	echo json_encode($this->view->allminesmaster);
}

function view_minesmaster() 
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
			$this->view->content= $this->model->view_minesmaster($data["id"]);
}
	echo json_encode($this->view->content);
}

function delete_minesmaster(){
	$id=$_REQUEST["id"];
	$this->model->delete_minesmaster($id);
	
}

function add_minesmaster(){
	$data = array( 
				"id" => null, "MinesCode" => $_REQUEST["MinesCode"],"MinesName" => $_REQUEST["MinesName"]
			   );
	$this->model->add_minesmaster($data);
	
}

function edit_minesmaster(){
	$arg=$_REQUEST["id"];
	$data = array( "MinesCode" => $_REQUEST["MinesCode"],"MinesName" => $_REQUEST["MinesName"]
			   );
	$this->model->edit_minesmaster($data,$arg);
}

    
    ///////////////////////////////////////////////////////////////////////////////
    
    
    function productheader(){
        	
       
	$this->view->render("hsd/productheader");
	
}

function getallproductheader(){
 $this->view->allproductheader = $this->model->productheader();
	echo json_encode($this->view->allproductheader);
}

function view_productheader() 
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
			$this->view->content= $this->model->view_productheader($data["id"]);
}
	echo json_encode($this->view->content);
}

function delete_productheader(){
	$id=$_REQUEST["id"];
	$this->model->delete_productheader($id);
	
}

function add_productheader(){
	$data = array( 
				"id" => null, "ProductCode" => $_REQUEST["ProductCode"],"ProductName" => $_REQUEST["ProductName"],"PartsNo" => $_REQUEST["PartsNo"],"BlockNo" => $_REQUEST["BlockNo"],"CategoryName" => $_REQUEST["CategoryName"],"Unit" => $_REQUEST["Unit"],"MadeByCmpy" => $_REQUEST["MadeByCmpy"],"LocCode" => $_REQUEST["LocCode"],"PurPrice" => $_REQUEST["PurPrice"],"SalesPrice" => $_REQUEST["SalesPrice"],"AvgCost" => $_REQUEST["AvgCost"]
			   );
	$this->model->add_productheader($data);
	
}

function edit_productheader(){
	$arg=$_REQUEST["id"];
	$data = array( "ProductCode" => $_REQUEST["ProductCode"],"ProductName" => $_REQUEST["ProductName"],"PartsNo" => $_REQUEST["PartsNo"],"BlockNo" => $_REQUEST["BlockNo"],"CategoryName" => $_REQUEST["CategoryName"],"Unit" => $_REQUEST["Unit"],"MadeByCmpy" => $_REQUEST["MadeByCmpy"],"LocCode" => $_REQUEST["LocCode"],"PurPrice" => $_REQUEST["PurPrice"],"SalesPrice" => $_REQUEST["SalesPrice"],"AvgCost" => $_REQUEST["AvgCost"]
			   );
	$this->model->edit_productheader($data,$arg);
}

    ////////////////////////////////////////////////////////////////////////////////////////////
    
    
   function routmasters(){
        	
       
	$this->view->render("hsd/routmasters");
	
}

function getallroutmasters(){
 $this->view->allroutmasters = $this->model->routmasters();
	echo json_encode($this->view->allroutmasters);
}

function view_routmasters() 
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
			$this->view->content= $this->model->view_routmasters($data["id"]);
}
	echo json_encode($this->view->content);
}

function delete_routmasters(){
	$id=$_REQUEST["id"];
	$this->model->delete_routmasters($id);
	
}

function add_routmasters(){
	$data = array( 
				"id" => null, "RoutCode" => $_REQUEST["RoutCode"],"RoutName" => $_REQUEST["RoutName"],"GradeCode" => $_REQUEST["GradeCode"],"GradeName" => $_REQUEST["GradeName"],"FreightRate" => $_REQUEST["FreightRate"],"ShortageRate" => $_REQUEST["ShortageRate"],"DeductPerc" => $_REQUEST["DeductPerc"],"DeductYN" => $_REQUEST["DeductYN"],"SPLDiscountYN" => $_REQUEST["SPLDiscountYN"],"PONO" => $_REQUEST["PONO"]
			   );
	$this->model->add_routmasters($data);
	
}

function edit_routmasters(){
	$arg=$_REQUEST["id"];
	$data = array( "RoutCode" => $_REQUEST["RoutCode"],"RoutName" => $_REQUEST["RoutName"],"GradeCode" => $_REQUEST["GradeCode"],"GradeName" => $_REQUEST["GradeName"],"FreightRate" => $_REQUEST["FreightRate"],"ShortageRate" => $_REQUEST["ShortageRate"],"DeductPerc" => $_REQUEST["DeductPerc"],"DeductYN" => $_REQUEST["DeductYN"],"SPLDiscountYN" => $_REQUEST["SPLDiscountYN"],"PONO" => $_REQUEST["PONO"]
			   );
	$this->model->edit_routmasters($data,$arg);
}

    //////////////////////////////////////////////////////////
    
    function sessionmaster(){
        	
       
	$this->view->render("hsd/sessionmaster");
	
}

function getallsessionmaster(){
 $this->view->allsessionmaster = $this->model->sessionmaster();
	echo json_encode($this->view->allsessionmaster);
}

function view_sessionmaster() 
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
			$this->view->content= $this->model->view_sessionmaster($data["id"]);
}
	echo json_encode($this->view->content);
}

function delete_sessionmaster(){
	$id=$_REQUEST["id"];
	$this->model->delete_sessionmaster($id);
	
}

function add_sessionmaster(){
	$data = array( 
				"id" => null, "Code" => $_REQUEST["Code"],"Description" => $_REQUEST["Description"]
			   );
	$this->model->add_sessionmaster($data);
	
}

function edit_sessionmaster(){
	$arg=$_REQUEST["id"];
	$data = array( "Code" => $_REQUEST["Code"],"Description" => $_REQUEST["Description"]
			   );
	$this->model->edit_sessionmaster($data,$arg);
}

    //////////////////////////////////////////////////////////////////////////////////
    
    function tyresaxelmaster(){
        	
       
	$this->view->render("hsd/tyresaxelmaster");
	
}

function getalltyresaxelmaster(){
 $this->view->alltyresaxelmaster = $this->model->tyresaxelmaster();
	echo json_encode($this->view->alltyresaxelmaster);
}

function view_tyresaxelmaster() 
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
			$this->view->content= $this->model->view_tyresaxelmaster($data["id"]);
}
	echo json_encode($this->view->content);
}

function delete_tyresaxelmaster(){
	$id=$_REQUEST["id"];
	$this->model->delete_tyresaxelmaster($id);
	
}

function add_tyresaxelmaster(){
	$data = array( 
				"id" => null, "AxelCode" => $_REQUEST["AxelCode"],"AxelDescription" => $_REQUEST["AxelDescription"]
			   );
	$this->model->add_tyresaxelmaster($data);
	
}

function edit_tyresaxelmaster(){
	$arg=$_REQUEST["id"];
	$data = array( "AxelCode" => $_REQUEST["AxelCode"],"AxelDescription" => $_REQUEST["AxelDescription"]
			   );
	$this->model->edit_tyresaxelmaster($data,$arg);
}

    //////////////////////////////////////////////////////////////////////////////
    
    
    function tyremodelmaster(){
        	
       
	$this->view->render("hsd/tyremodelmaster");
	
}

function getalltyremodelmaster(){
 $this->view->alltyremodelmaster = $this->model->tyremodelmaster();
	echo json_encode($this->view->alltyremodelmaster);
}

function view_tyremodelmaster() 
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
			$this->view->content= $this->model->view_tyremodelmaster($data["id"]);
}
	echo json_encode($this->view->content);
}

function delete_tyremodelmaster(){
	$id=$_REQUEST["id"];
	$this->model->delete_tyremodelmaster($id);
	
}

function add_tyremodelmaster(){
	$data = array( 
				"id" => null, "ModelCode" => $_REQUEST["ModelCode"],"TyreModel" => $_REQUEST["TyreModel"]
			   );
	$this->model->add_tyremodelmaster($data);
	
}

function edit_tyremodelmaster(){
	$arg=$_REQUEST["id"];
	$data = array( "ModelCode" => $_REQUEST["ModelCode"],"TyreModel" => $_REQUEST["TyreModel"]
			   );
	$this->model->edit_tyremodelmaster($data,$arg);
}

    /////////////////////////////////////////////////////////////////////////////////////////
    
    function unitmaster(){
        	
       
	$this->view->render("hsd/unitmaster");
	
}

function getallunitmaster(){
 $this->view->allunitmaster = $this->model->unitmaster();
	echo json_encode($this->view->allunitmaster);
}

function view_unitmaster() 
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
			$this->view->content= $this->model->view_unitmaster($data["id"]);
}
	echo json_encode($this->view->content);
}

function delete_unitmaster(){
	$id=$_REQUEST["id"];
	$this->model->delete_unitmaster($id);
	
}

function add_unitmaster(){
	$data = array( 
				"id" => null, "UnitCode" => $_REQUEST["UnitCode"],"UnitName" => $_REQUEST["UnitName"]
			   );
	$this->model->add_unitmaster($data);
	
}

function edit_unitmaster(){
	$arg=$_REQUEST["id"];
	$data = array( "UnitCode" => $_REQUEST["UnitCode"],"UnitName" => $_REQUEST["UnitName"]
			   );
	$this->model->edit_unitmaster($data,$arg);
}

    
    ////////////////////////////////////////////////////////////////////////////////////////////////////
    
    function vouchertypesmaster(){
        	
       
	$this->view->render("hsd/vouchertypesmaster");
	
}

function getallvouchertypesmaster(){
 $this->view->allvouchertypesmaster = $this->model->vouchertypesmaster();
	echo json_encode($this->view->allvouchertypesmaster);
}

function view_vouchertypesmaster() 
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
			$this->view->content= $this->model->view_vouchertypesmaster($data["id"]);
}
	echo json_encode($this->view->content);
}

function delete_vouchertypesmaster(){
	$id=$_REQUEST["id"];
	$this->model->delete_vouchertypesmaster($id);
	
}

function add_vouchertypesmaster(){
	$data = array( 
				"id" => null, "VoucherCode" => $_REQUEST["VoucherCode"],"VoucherTypes" => $_REQUEST["VoucherTypes"]
			   );
	$this->model->add_vouchertypesmaster($data);
	
}

function edit_vouchertypesmaster(){
	$arg=$_REQUEST["id"];
	$data = array( "VoucherCode" => $_REQUEST["VoucherCode"],"VoucherTypes" => $_REQUEST["VoucherTypes"]
			   );
	$this->model->edit_vouchertypesmaster($data,$arg);
}

    ///////////////////////////////////////////////////////////////////////////////////////////
    
    function itemDetails(){
        	
        $this->view->allitems = $this->model->itemdetails();
       echo json_encode($this->view->allitems);
        
    }
   function add_dieselpurchase(){
       //$productname=$_REQUEST['FuelPartyName'];
      $data = array( 
                    'id' => null,
					'SrNo' => $_REQUEST['SrNo'],
					'DieselDates' => $_REQUEST['DieselDates'],
				    'PaymentType' => $_REQUEST['PaymentType'],
					'FuelPartyName' => $_REQUEST['FuelPartyName'],
					'VehicleNo' => $_REQUEST['VehicleNo'],
					'ProductCode' => $_REQUEST['ProductCode'],
					'DieselLtr' => $_REQUEST['DieselLtr'],
                    'fuelrate' => $_REQUEST['fuelrate'],
					'DieselRate' => $_REQUEST['DieselRate'],
					'DieselAmt' => $_REQUEST['DieselAmt'],
					'deviceid' => $_REQUEST['deviceid'],
                    'ChallanNo'=> $_REQUEST['ChallanNo'],
                    'instock'=> $_REQUEST['instock'],
                    'AvgRate'=> $_REQUEST['AvgRate']
                   );

		$this->model->adddieselpurchase($data);
		$timea = date("H:i:s d/m/Y");
		$message = 'Vehicle '.$_REQUEST['VehicleNo'].' is filled with '.$_REQUEST['DieselLtr'].' Ltrs on '.$timea.' from '.$_REQUEST['FuelPartyName'];
		$title = "FUEL PURCHASE ALERT :";
		$users  = array("da96fed3-e3c7-4944-8f89-1af0bd9f6dc3","0e71dbf8-72ca-4fee-bc7c-ea0df1384299");
		Onesignal::sendMessageSpecific($title, $message,$users);
		$outtext = $title."<br/>".$message;
		$time = date("Y-m-d H:i:s");
		$data = array(
			'id' => NULL,
			'deviceid' =>$_REQUEST['deviceid'],
			'servertime' => $time,
			'msg'=> $outtext,
			'type'=> 'fuelpurchase'
		);
		$this->model->insert_smsAlerts($data);
 
    }
    function vehiclemaster_details(){
        header("Content-type:application/json");
        $vehiclemaster_details=$this->model->vehiclemaster_details();
        echo json_encode($vehiclemaster_details);
    }
    
    function getalldieselpurchase(){
       header("Content-type:application/json");
        $getalldieselpurchase=$this->model->getalldieselpurchase();
        echo json_encode($getalldieselpurchase);
	}
	
	function getalldieselpurchaseMobile(){
		$date=$_REQUEST['date'];
		header("Content-type:application/json");
		if($date=='today'){
			$date = date("Y-m-d");
		}
		if($date=='yesterday'){
			$date = date("Y-m-d");
			$datem = strtotime($date);
			$datem = strtotime("-1 day", $datem);
			$datefrom= date('Y-m-d', $datem);
			$date =  $datefrom;
		}
		$getalldieselpurchaseMobile=$this->model->getalldieselpurchaseMobile($date);
        echo json_encode($getalldieselpurchaseMobile);
	}
    
     function getalldieselissue(){
       header("Content-type:application/json");
        $getalldieselissue=$this->model->getalldieselissue();
        echo json_encode($getalldieselissue);
	}
	
	function getalldieselissueMobile(){
		$date=$_REQUEST['date'];
		header("Content-type:application/json");
		if($date=='today'){
			$date = date("Y-m-d");
		}
		if($date=='yesterday'){
			$date = date("Y-m-d");
			$datem = strtotime($date);
			$datem = strtotime("-1 day", $datem);
			$datefrom= date('Y-m-d', $datem);
			$date =  $datefrom;
		}
		//echo "$date";
		$getalldieselissueMobile=$this->model->getalldieselissueMobile($date);
        echo json_encode($getalldieselissueMobile);
	}

     function add_dieselissue(){
            $vehicleno=$_REQUEST['VehicleNo'];
                //$deviceid1=$_REQUEST['deviceid'];
         $deviceid = $_REQUEST['DieselSource'];
       $getonevehicle=$this->model->getOneVehicle($vehicleno);
       $productname=$_REQUEST['FuelPartyName'];
       $getdealercode=$this->model->getOneDealerCode($productname);
    $lastpurchase=$this->model->getLastDieselpurchase($deviceid);
         //print_r($lastpurchase) ;
        $data = array( 		
                    'id' => null,
					'SrNo' => $_REQUEST['SrNo'],
					'DieselDates' => $_REQUEST['DieselDates'],
                    'DieselSource' => $_REQUEST['DieselSource'],
				    'PaymentType' => $_REQUEST['PaymentType'],
					'FuelPartyName' => $_REQUEST['FuelPartyName'],
					'VehicleNo' => $_REQUEST['VehicleNo'],
					'ProductCode' => $_REQUEST['ProductCode'],
					'DieselLtr' => $_REQUEST['DieselLtr'],
                    'fuelrate' => $_REQUEST['fuelrate'],
					'DieselRate' => $_REQUEST['DieselRate'],
					'DieselAmt' => $_REQUEST['DieselAmt'],
					'deviceid' => $_REQUEST['deviceid'],
					'RunningKM' => $_REQUEST['RunningKM'],
					'LastReading' => $_REQUEST['LastReading'],
                    'CurrentReading' => $_REQUEST['CurrentReading'],
                    // 'OldHSDBalance' => $_REQUEST['OldHSDBalance'],
					// 'ClosedHSDBalance' => $_REQUEST['ClosedHSDBalance'],
					'HSDConsumption' => $_REQUEST['HSDConsumption'],
					'AvgKm' => $_REQUEST['AvgKm'],
                    'MonthYear'=> $_REQUEST['MonthYear'],
                    'ChallanNo'=> $_REQUEST['ChallanNo'],
                    'instock'=> $_REQUEST['instock'],
                    'VehicleCode'=> $getonevehicle[0]['VehicleCode'],
                    'ShortVehNo'=> $getonevehicle[0]['ShortVehNo'],
                    'OwnerCode'=> $getonevehicle[0]['OwnerCode'],
                    'OwnerTypeSO'=> $getonevehicle[0]['OwnerType'],
                    'TypesVM'=> $getonevehicle[0]['TypesVM'],
                    'DealerCode'=> $getdealercode[0]['FuelParty']
					);
					echo "<pre>";
       print_r($data);
        $this->model->adddieselissue($data);
		 $arg=$lastpurchase[0]['id'];
		 $data1 = array(      
			'instock'=> $_REQUEST['instock']
	 );
       $this->model->updatedieselpurchase($data1,$arg);	
      //	echo $_REQUEST['instock']." ".$arg;
		 $timea = date("H:i:s d/m/Y");
		 $message = 'Vehicle '.$_REQUEST['VehicleNo'].' is filled with '.$_REQUEST['DieselLtr'].' Ltrs on '.$timea.' and its last average is '.$_REQUEST['AvgKm'].' Km/L';
		 $title = "FUEL FILL ALERT :";
		 $users  = array("da96fed3-e3c7-4944-8f89-1af0bd9f6dc3","001de465-ff89-4776-8b79-a40b5e4a258f");
		 Onesignal::sendMessageSpecific($title, $message,$users);
		 $outtext = $title."<br/>".$message;
		 $time = date("Y-m-d H:i:s");
		 $data = array(
			 'id' => NULL,
			 'deviceid' =>$_REQUEST['deviceid'],
			 'servertime' => $time,
			 'msg'=> $outtext,
			 'type'=> 'fuelissue'
		 );
		 $this->model->insert_smsAlerts($data);
        	
         
 
    }
    
    function updatedieselpurchase(){
         $deviceid = $_REQUEST['DieselSource'];
         $lastpurchase=$this->model->getLastDieselpurchase($deviceid);
         $arg=$lastpurchase[0]['id'];
        $data1 = array( 
					
                    
					'instock'=> $_REQUEST['instock']
             );
         
		$this->model->updatedieselpurchase($data1,$arg);
    }

        function gettanker(){
         header("Content-type:application/json");
     
     $gettanker=$this->model->gettanker();
     echo json_encode($gettanker); 
    }
    
        function dieselpurchasetoday(){
         header("Content-type:application/json");
     
     $dieselpurchasetoday=$this->model->getdieselpurchasetoday();
     echo json_encode($dieselpurchasetoday); 
    }
    
    function dieselissuetoday(){
         header("Content-type:application/json");
     
     $dieselissuetoday=$this->model->getdieselissuetoday();
     echo json_encode($dieselissuetoday); 
    }
     function getlastdieselissue(){
         header("Content-type:application/json");
      $deviceid=$_REQUEST['deviceid'];
     $lastissue=$this->model->getLastDieselissue($deviceid);
     echo json_encode($lastissue); 
    }
    
    function getlastdieselpurchase(){
        header("Content-type:application/json");
      //$vehicleno=$_REQUEST['VehicleNo'];
        $deviceid=$_REQUEST['deviceid'];
     $lastpurchase=$this->model->getLastDieselpurchase($deviceid);
     echo json_encode($lastpurchase); 
    }
   function getLastpurchasesrno(){
        header("Content-type:application/json");
      //$vehicleno=$_REQUEST['VehicleNo'];
     $lastpurchasesrno=$this->model->getLastpurchasesrno();
     echo json_encode($lastpurchasesrno); 
       
   }
    
    function getLastissuesrno(){
        header("Content-type:application/json");
      //$vehicleno=$_REQUEST['VehicleNo'];
     $lastissuesrno=$this->model->getLastissuesrno();
     echo json_encode($lastissuesrno); 
       
   }
	function view_dieselissue(){
        
        $id=$_REQUEST['id'];
        $view_dieselissue=$this->model->view_dieselissue($id);
        echo json_encode($view_dieselissue);
    }
    
    function view_dieselpurchase(){
        
        $id=$_REQUEST['id'];
        $view_dieselpurchase=$this->model->view_dieselpurchase($id);
        echo json_encode($view_dieselpurchase);
    }
     function delete_dieselissue(){
        $id=$_REQUEST['id'];
        $getissue= $this->model->view_dieselissue($id);
         $getpurchase = $this->model->getLastDieselpurchase($getissue[0]['DieselSource']);
         $arg = $getpurchase[0]['id'];
        // echo $arg;
         $instock = $getpurchase[0]['instock'] + $getissue[0]['DieselLtr'];
		//
		 echo $instock;
          $data1 = array( 
					
                    'instock' => $instock
					);
         print_r($data);
         $this->model->updatedieselpurchase($data1,$arg);
        $this->model->delete_dieselissue($id);
        
    }
    
    function delete_dieselpurchase(){
        $id=$_REQUEST['id'];
        $this->model->delete_dieselpurchase($id);
        
    }
	
	
}
