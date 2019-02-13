<?php

class Hsd_Model extends Model
{
	public function __construct()
	 {
		parent::__construct();
		Session::init();
	 }

	
    public function getOneVehicle($vehicleno)
	{
		return $this->db->select("SELECT * FROM `vehiclemaster` WHERE VehicleNo='".$vehicleno."' LIMIT 1");
	}
    
    public function getOneDealerCode($productname)
	{
		return $this->db->select("SELECT * FROM `dieselratemaster` WHERE ProductName='".$productname."' LIMIT 1");
	}
	
	
	public function getAlldevices()
	{
		if(Session::get('userType')=="user"){
			$x=Session::get('admin_id');
			return $this->db->select("SELECT * FROM `devices` WHERE id IN (SELECT deviceid FROM our_user_devices WHERE userid=".$x.") ORDER BY name");
		}
		else{
			$x=Session::get('traccarID');
			return $this->db->select("SELECT * FROM `devices` WHERE id IN (SELECT deviceid FROM user_device WHERE userid=".$x.") ORDER BY name");
		}
	}
	
	
   public function dieseldetails()
    {
        // echo '5453';
       return $this->db->select("SELECT * FROM dieselratemaster");
        
       
    }
    
    public function getalldieselissue()
    {
        // echo '5453';
       return $this->db->select("SELECT * FROM vehicle_diesel ORDER BY id DESC");
        
       
	}

	public function getalldieselpurchaseMobile($date)
	{
      //$VehicleNo=$_REQUEST['VehicleNo'];
      
	return $this->db->select("SELECT * FROM `vehicle_purchase` WHERE DATE(DieselDates)='".$date."' ORDER BY id DESC");
	}

	public function getalldieselissueMobile($date)
	{
      //$VehicleNo=$_REQUEST['VehicleNo'];
      
	return $this->db->select("SELECT * FROM `vehicle_diesel` WHERE DATE(DieselDates)='".$date."' ORDER BY id DESC");
	}


	
	
    
     public function view_dieselissue($id)
    {
        // echo '5453';
       return $this->db->select("SELECT * FROM vehicle_diesel WHERE id='".$id."' ");
        
       
    }
    
    public function view_dieselpurchase($id)
    {
        // echo '5453';
       return $this->db->select("SELECT * FROM vehicle_purchase WHERE id='".$id."' ");
        
       
    }
    
     public function getalldieselpurchase(){
        
         return $this->db->select("SELECT * FROM vehicle_purchase");
    }
    
    public function vehiclemaster_details(){
        
         return $this->db->select("SELECT * FROM vehiclemaster ");
    }
    public function itemdetails()
    {
        // echo '5453';
       return $this->db->select("SELECT * FROM productheader WHERE CategoryName='LUB & OIL' ");
       
    }
    /////////// code generator ///////////////
    
    
    public function dieselratedetails()
    {
        // echo '5453';
       return $this->db->select("SELECT * FROM dieselratedetails ");
        
       
    }
    public function view_dieselratedetails($id){
        
        return $this->db->select("SELECT * FROM dieselratedetails WHERE id=".$id." LIMIT 1");
    }
    
    public function delete_dieselratedetails($id)   
	{
		$this->db->delete('dieselratedetails', "`id` = {$id}");
		//echo "delete $id";
	}
   
    public function add_dieselratedetails($data){
        
        $this->db->insert('dieselratedetails', $data);
    }
    
    public function edit_dieselratedetails($data,$arg){
        $this->db->update('dieselratedetails', $data,
				"`id` = $arg");
        
    }
    
    /////////////////end code generator ////////////////////
    
    
    

public function categorymaster()
{

   return $this->db->select("SELECT * FROM categorymaster ");
	
   
}
public function view_categorymaster($id){
	
	return $this->db->select("SELECT * FROM categorymaster WHERE id=".$id." LIMIT 1");
}

public function delete_categorymaster($id)   
{
	$this->db->delete('categorymaster', "`id` = {$id}");
	//echo "delete $id";
}

public function add_categorymaster($data){
	
	$this->db->insert('categorymaster', $data);
}

public function edit_categorymaster($data,$arg){
	$this->db->update('categorymaster', $data,
			"`id` = $arg");
	
}


///////////////////////freightinvoice/////////////
    

public function freightinvoiceheader()
{

   return $this->db->select("SELECT * FROM freightinvoiceheader ");
	
   
}
public function view_freightinvoiceheader($id){
	
	return $this->db->select("SELECT * FROM freightinvoiceheader WHERE id=".$id." LIMIT 1");
}

public function delete_freightinvoiceheader($id)   
{
	$this->db->delete('freightinvoiceheader', "`id` = {$id}");
	//echo "delete $id";
}

public function add_freightinvoiceheader($data){
	
	$this->db->insert('freightinvoiceheader', $data);
}

public function edit_freightinvoiceheader($data,$arg){
	$this->db->update('freightinvoiceheader', $data,
			"`id` = $arg");
	
}

///////////////////////////////////////////////////    
    
    

public function DailyChallanEntry()
{

   return $this->db->select("SELECT * FROM DailyChallanEntry LIMIT 10");
	
   
}
public function view_DailyChallanEntry($id){
	
	return $this->db->select("SELECT * FROM DailyChallanEntry WHERE id=".$id." LIMIT 1");
}

public function delete_DailyChallanEntry($id)   
{
	$this->db->delete('DailyChallanEntry', "`id` = {$id}");
	//echo "delete $id";
}

public function add_DailyChallanEntry($data){
	
	$this->db->insert('DailyChallanEntry', $data);
}

public function edit_DailyChallanEntry($data,$arg){
	$this->db->update('DailyChallanEntry', $data,
			"`id` = $arg");
	
}


    //////////////////////////////////////////////////
    
    
 
public function AlertDaysSettingMaster()
{

   return $this->db->select("SELECT * FROM AlertDaysSettingMaster ");
	
   
}
public function view_AlertDaysSettingMaster($id){
	
	return $this->db->select("SELECT * FROM AlertDaysSettingMaster WHERE id=".$id." LIMIT 1");
}

public function delete_AlertDaysSettingMaster($id)   
{
	$this->db->delete('AlertDaysSettingMaster', "`id` = {$id}");
	//echo "delete $id";
}

public function add_AlertDaysSettingMaster($data){
	
	$this->db->insert('AlertDaysSettingMaster', $data);
}

public function edit_AlertDaysSettingMaster($data,$arg){
	$this->db->update('AlertDaysSettingMaster', $data,
			"`id` = $arg");
	
}


    
    ///////////////////////////////////////////////////////////
    
    
    
    
public function BankMaster()
{

   return $this->db->select("SELECT * FROM BankMaster ");
	
   
}
public function view_BankMaster($id){
	
	return $this->db->select("SELECT * FROM BankMaster WHERE id=".$id." LIMIT 1");
}

public function delete_BankMaster($id)   
{
	$this->db->delete('BankMaster', "`id` = {$id}");
	//echo "delete $id";
}

public function add_BankMaster($data){
	
	$this->db->insert('BankMaster', $data);
}

public function edit_BankMaster($data,$arg){
	$this->db->update('BankMaster', $data,
			"`id` = $arg");
	
}


    //////////////////////////////////////////////////////
    
    
public function billingratedetails()
{

   return $this->db->select("SELECT * FROM billingratedetails ");
	
   
}
public function view_billingratedetails($id){
	
	return $this->db->select("SELECT * FROM billingratedetails WHERE id=".$id." LIMIT 1");
}

public function delete_billingratedetails($id)   
{
	$this->db->delete('billingratedetails', "`id` = {$id}");
	//echo "delete $id";
}

public function add_billingratedetails($data){
	
	$this->db->insert('billingratedetails', $data);
}

public function edit_billingratedetails($data,$arg){
	$this->db->update('billingratedetails', $data,
			"`id` = $arg");
	
}

/////////////////////////////////////////////
    
    
    
    
public function CityMaster()
{

   return $this->db->select("SELECT * FROM CityMaster ");
	
   
}
public function view_CityMaster($id){
	
	return $this->db->select("SELECT * FROM CityMaster WHERE id=".$id." LIMIT 1");
}

public function delete_CityMaster($id)   
{
	$this->db->delete('CityMaster', "`id` = {$id}");
	//echo "delete $id";
}

public function add_CityMaster($data){
	
	$this->db->insert('CityMaster', $data);
}

public function edit_CityMaster($data,$arg){
	$this->db->update('CityMaster', $data,
			"`id` = $arg");
	
}


///////////////////////////////////////
    
 
public function CompanyMaster()
{

   return $this->db->select("SELECT * FROM CompanyMaster ");
	
   
}
public function view_CompanyMaster($id){
	
	return $this->db->select("SELECT * FROM CompanyMaster WHERE id=".$id." LIMIT 1");
}

public function delete_CompanyMaster($id)   
{
	$this->db->delete('CompanyMaster', "`id` = {$id}");
	//echo "delete $id";
}

public function add_CompanyMaster($data){
	
	$this->db->insert('CompanyMaster', $data);
}

public function edit_CompanyMaster($data,$arg){
	$this->db->update('CompanyMaster', $data,
			"`id` = $arg");
	
}

//////////////////////////////////////////////////////////////////   
    
public function payrollheader()
{

   return $this->db->select("SELECT * FROM payrollheader ");
	
   
}
public function view_payrollheader($id){
	
	return $this->db->select("SELECT * FROM payrollheader WHERE id=".$id." LIMIT 1");
}

public function delete_payrollheader($id)   
{
	$this->db->delete('payrollheader', "`id` = {$id}");
	//echo "delete $id";
}

public function add_payrollheader($data){
	
	$this->db->insert('payrollheader', $data);
}

public function edit_payrollheader($data,$arg){
	$this->db->update('payrollheader', $data,
			"`id` = $arg");
	
}


    ////////////////////////////////////////
    
    
public function doregistration()
{

   return $this->db->select("SELECT * FROM doregistration ");
	
   
}
public function view_doregistration($id){
	
	return $this->db->select("SELECT * FROM doregistration WHERE id=".$id." LIMIT 1");
}

public function delete_doregistration($id)   
{
	$this->db->delete('doregistration', "`id` = {$id}");
	//echo "delete $id";
}

public function add_doregistration($data){
	
	$this->db->insert('doregistration', $data);
}

public function edit_doregistration($data,$arg){
	$this->db->update('doregistration', $data,
			"`id` = $arg");
	
}

//////////////////////////////////////////////////
    
 
public function fpmtdetails()
{

   return $this->db->select("SELECT * FROM fpmtdetails LIMIT 10");
	
   
}
public function view_fpmtdetails($id){
	
	return $this->db->select("SELECT * FROM fpmtdetails WHERE id=".$id." LIMIT 1");
}

public function delete_fpmtdetails($id)   
{
	$this->db->delete('fpmtdetails', "`id` = {$id}");
	//echo "delete $id";
}

public function add_fpmtdetails($data){
	
	$this->db->insert('fpmtdetails', $data);
}

public function edit_fpmtdetails($data,$arg){
	$this->db->update('fpmtdetails', $data,
			"`id` = $arg");
	
}

///////////////////////////////////////////////   
    
    
public function freightinvoicedetails()
{

   return $this->db->select("SELECT * FROM freightinvoicedetails");
	
   
}
public function view_freightinvoicedetails($id){
	
	return $this->db->select("SELECT * FROM freightinvoicedetails WHERE id=".$id." LIMIT 1");
}

public function delete_freightinvoicedetails($id)   
{
	$this->db->delete('freightinvoicedetails', "`id` = {$id}");
	//echo "delete $id";
}

public function add_freightinvoicedetails($data){
	
	$this->db->insert('freightinvoicedetails', $data);
}

public function edit_freightinvoicedetails($data,$arg){
	$this->db->update('freightinvoicedetails', $data,
			"`id` = $arg");
	
}


    ///////////////////////////////////////////////////////
    
    

public function givdetails()
{

   return $this->db->select("SELECT * FROM givdetails ");
	
   
}
public function view_givdetails($id){
	
	return $this->db->select("SELECT * FROM givdetails WHERE id=".$id." LIMIT 1");
}

public function delete_givdetails($id)   
{
	$this->db->delete('givdetails', "`id` = {$id}");
	//echo "delete $id";
}

public function add_givdetails($data){
	
	$this->db->insert('givdetails', $data);
}

public function edit_givdetails($data,$arg){
	$this->db->update('givdetails', $data,
			"`id` = $arg");
	
}

///////////////////////////////////////////////////////////////
    
    
public function BillingRateHeader()
{

   return $this->db->select("SELECT * FROM BillingRateHeader ");
	
   
}
public function view_BillingRateHeader($id){
	
	return $this->db->select("SELECT * FROM BillingRateHeader WHERE id=".$id." LIMIT 1");
}

public function delete_BillingRateHeader($id)   
{
	$this->db->delete('BillingRateHeader', "`id` = {$id}");
	//echo "delete $id";
}

public function add_BillingRateHeader($data){
	
	$this->db->insert('BillingRateHeader', $data);
}

public function edit_BillingRateHeader($data,$arg){
	$this->db->update('BillingRateHeader', $data,
			"`id` = $arg");
	
}

    ////////////////////////////////////////////////////////
    
    
    
public function dieselratemaster()
{

   return $this->db->select("SELECT * FROM dieselratemaster ");
	
   
}
public function view_dieselratemaster($id){
	
	return $this->db->select("SELECT * FROM dieselratemaster WHERE id=".$id." LIMIT 1");
}

public function delete_dieselratemaster($id)   
{
	$this->db->delete('dieselratemaster', "`id` = {$id}");
	//echo "delete $id";
}

public function add_dieselratemaster($data){
	
	$this->db->insert('dieselratemaster', $data);
}

public function edit_dieselratemaster($data,$arg){
	$this->db->update('dieselratemaster', $data,
			"`id` = $arg");
	
}


/////////////////////////////////////////////////////////////////
    
 
public function grademaster()
{

   return $this->db->select("SELECT * FROM grademaster ");
	
   
}
public function view_grademaster($id){
	
	return $this->db->select("SELECT * FROM grademaster WHERE id=".$id." LIMIT 1");
}

public function delete_grademaster($id)   
{
	$this->db->delete('grademaster', "`id` = {$id}");
	//echo "delete $id";
}

public function add_grademaster($data){
	
	$this->db->insert('grademaster', $data);
}

public function edit_grademaster($data,$arg){
	$this->db->update('grademaster', $data,
			"`id` = $arg");
	
}


    //////////////////////////////////////////////////////////////
    
    
public function locationmaster()
{

   return $this->db->select("SELECT * FROM locationmaster ");
	
   
}
public function view_locationmaster($id){
	
	return $this->db->select("SELECT * FROM locationmaster WHERE id=".$id." LIMIT 1");
}

public function delete_locationmaster($id)   
{
	$this->db->delete('locationmaster', "`id` = {$id}");
	//echo "delete $id";
}

public function add_locationmaster($data){
	
	$this->db->insert('locationmaster', $data);
}

public function edit_locationmaster($data,$arg){
	$this->db->update('locationmaster', $data,
			"`id` = $arg");
	
}

//////////////////////////////////////////////////////////////////////
    
    
    
public function minesmaster()
{

   return $this->db->select("SELECT * FROM minesmaster ");
	
   
}
public function view_minesmaster($id){
	
	return $this->db->select("SELECT * FROM minesmaster WHERE id=".$id." LIMIT 1");
}

public function delete_minesmaster($id)   
{
	$this->db->delete('minesmaster', "`id` = {$id}");
	//echo "delete $id";
}

public function add_minesmaster($data){
	
	$this->db->insert('minesmaster', $data);
}

public function edit_minesmaster($data,$arg){
	$this->db->update('minesmaster', $data,
			"`id` = $arg");
	
}

////////////////////////////////////////////////////////////////////////////////
    
    
public function productheader()
{

   return $this->db->select("SELECT * FROM productheader ");
	
   
}
public function view_productheader($id){
	
	return $this->db->select("SELECT * FROM productheader WHERE id=".$id." LIMIT 1");
}

public function delete_productheader($id)   
{
	$this->db->delete('productheader', "`id` = {$id}");
	//echo "delete $id";
}

public function add_productheader($data){
	
	$this->db->insert('productheader', $data);
}

public function edit_productheader($data,$arg){
	$this->db->update('productheader', $data,
			"`id` = $arg");
	
}

///////////////////////////////////////////////////////////////////////////////////////
    
    

public function routmasters()
{

   return $this->db->select("SELECT * FROM routmasters ");
	
   
}
public function view_routmasters($id){
	
	return $this->db->select("SELECT * FROM routmasters WHERE id=".$id." LIMIT 1");
}

public function delete_routmasters($id)   
{
	$this->db->delete('routmasters', "`id` = {$id}");
	//echo "delete $id";
}

public function add_routmasters($data){
	
	$this->db->insert('routmasters', $data);
}

public function edit_routmasters($data,$arg){
	$this->db->update('routmasters', $data,
			"`id` = $arg");
	
}


    ///////////////////////////////////////////////////////////////////////////////
    
    
    
public function sessionmaster()
{

   return $this->db->select("SELECT * FROM sessionmaster ");
	
   
}
public function view_sessionmaster($id){
	
	return $this->db->select("SELECT * FROM sessionmaster WHERE id=".$id." LIMIT 1");
}

public function delete_sessionmaster($id)   
{
	$this->db->delete('sessionmaster', "`id` = {$id}");
	//echo "delete $id";
}

public function add_sessionmaster($data){
	
	$this->db->insert('sessionmaster', $data);
}

public function edit_sessionmaster($data,$arg){
	$this->db->update('sessionmaster', $data,
			"`id` = $arg");
	
}

///////////////////////////////////////////////////////////////////////////
    
    
public function tyresaxelmaster()
{

   return $this->db->select("SELECT * FROM tyresaxelmaster ");
	
   
}
public function view_tyresaxelmaster($id){
	
	return $this->db->select("SELECT * FROM tyresaxelmaster WHERE id=".$id." LIMIT 1");
}

public function delete_tyresaxelmaster($id)   
{
	$this->db->delete('tyresaxelmaster', "`id` = {$id}");
	//echo "delete $id";
}

public function add_tyresaxelmaster($data){
	
	$this->db->insert('tyresaxelmaster', $data);
}

public function edit_tyresaxelmaster($data,$arg){
	$this->db->update('tyresaxelmaster', $data,
			"`id` = $arg");
	
}

///////////////////////////////////////////////////////////////////////////
    
    
    
public function tyremodelmaster()
{

   return $this->db->select("SELECT * FROM tyremodelmaster ");
	
   
}
public function view_tyremodelmaster($id){
	
	return $this->db->select("SELECT * FROM tyremodelmaster WHERE id=".$id." LIMIT 1");
}

public function delete_tyremodelmaster($id)   
{
	$this->db->delete('tyremodelmaster', "`id` = {$id}");
	//echo "delete $id";
}

public function add_tyremodelmaster($data){
	
	$this->db->insert('tyremodelmaster', $data);
}

public function edit_tyremodelmaster($data,$arg){
	$this->db->update('tyremodelmaster', $data,
			"`id` = $arg");
	
}

///////////////////////////////////////////////////////////////////////////
    
    
    
public function unitmaster()
{

   return $this->db->select("SELECT * FROM unitmaster ");
	
   
}
public function view_unitmaster($id){
	
	return $this->db->select("SELECT * FROM unitmaster WHERE id=".$id." LIMIT 1");
}

public function delete_unitmaster($id)   
{
	$this->db->delete('unitmaster', "`id` = {$id}");
	//echo "delete $id";
}

public function add_unitmaster($data){
	
	$this->db->insert('unitmaster', $data);
}

public function edit_unitmaster($data,$arg){
	$this->db->update('unitmaster', $data,
			"`id` = $arg");
	
}

/////////////////////////////////////////////////////////////////////////////////
    
    
public function vouchertypesmaster()
{

   return $this->db->select("SELECT * FROM vouchertypesmaster ");
	
   
}
public function view_vouchertypesmaster($id){
	
	return $this->db->select("SELECT * FROM vouchertypesmaster WHERE id=".$id." LIMIT 1");
}

public function delete_vouchertypesmaster($id)   
{
	$this->db->delete('vouchertypesmaster', "`id` = {$id}");
	//echo "delete $id";
}

public function add_vouchertypesmaster($data){
	
	$this->db->insert('vouchertypesmaster', $data);
}

public function edit_vouchertypesmaster($data,$arg){
	$this->db->update('vouchertypesmaster', $data,
			"`id` = $arg");
	
}

////////////////////////////////////////////////////////////////////////////////////////////
    
    
public function poheader()
{

   return $this->db->select("SELECT * FROM poheader ");
	
   
}
public function view_poheader($id){
	
	return $this->db->select("SELECT * FROM poheader WHERE id=".$id." LIMIT 1");
}

public function delete_poheader($id)   
{
	$this->db->delete('poheader', "`id` = {$id}");
	//echo "delete $id";
}

public function add_poheader($data){
	
	$this->db->insert('poheader', $data);
}

public function edit_poheader($data,$arg){
	$this->db->update('poheader', $data,
			"`id` = $arg");
	
}

/////////////////////////////////////////////////////////////////////////////////////////////////
    
         public function adddieselpurchase($data)
	{
		echo $this->db->insert('vehicle_purchase', $data);
        
	}
    
    public function updatedieselpurchase($data1,$arg)
	{
		//print_r($data);
		//echo $arg;
		$this->db->update('vehicle_purchase', $data1,
				"`id` = $arg");
	}
    
        public function adddieselissue($data)
	{
		$this->db->insert('vehicle_diesel', $data);
            //echo "inside database";
	} 
    
     public function gettanker()
	{
      
	return $this->db->select("SELECT * FROM `vehiclemaster` WHERE types='TANKER' ");
	}
    
    public function getdieselpurchasetoday()
	{
      
	return $this->db->select("SELECT * FROM vehicle_purchase WHERE DATE(DieselDates) = DATE(Now())");
	}
    
     public function getdieselissuetoday()
	{
      
	return $this->db->select("SELECT * FROM vehicle_diesel WHERE DATE(DieselDates) BETWEEN DATE(Now()-1) AND DATE(Now())");
	}
    
    public function getLastDieselissue($deviceid)
	{
      
	return $this->db->select("SELECT MAX(CurrentReading) As CurrentReading FROM `vehicle_diesel` where deviceid='".$deviceid."' ");
	}
    //AND DieselDates=(SELECT MAX(DieselDates) FROM vehicle_diesel)
    public function getLastDieselpurchase($deviceid)
	{
      //$VehicleNo=$_REQUEST['VehicleNo'];
      
	return $this->db->select("SELECT * FROM `vehicle_purchase` WHERE deviceid='".$deviceid."' AND DieselDates=(SELECT MAX(DieselDates) FROM vehicle_purchase) ORDER BY id DESC LIMIT 1");
	}
    //AND DieselDates=(SELECT MAX(DieselDates) FROM vehicle_purchase)
    public function getLastpurchasesrno()
	{
      //$VehicleNo=$_REQUEST['VehicleNo'];
      
	return $this->db->select("SELECT * FROM `vehicle_purchase` ORDER BY id DESC LIMIT 1");
	}
     public function getLastissuesrno()
	{
      //$VehicleNo=$_REQUEST['VehicleNo'];
      
	return $this->db->select("SELECT * FROM `vehicle_diesel` ORDER BY id DESC LIMIT 1");
	}
    
    public function delete_dieselissue($id)   
	{
		$this->db->delete('vehicle_diesel', "`id` = {$id}");
		//echo "delete $id";
	}
    
     public function delete_dieselpurchase($id)   
	{
		$this->db->delete('vehicle_purchase', "`id` = {$id}");
		//echo "delete $id";
	}

	public function insert_smsAlerts($data){
		$this->db->insert('smsAlerts', $data);
		} 
   
}
