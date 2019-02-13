
  <?php
  echo "<pre>";

//print_r($this->content);
echo "</pre>";
  $VehicleNo=$this->content[0]['VehicleNo'];
  $EngineNo=$this->content[0]['EngineNo'];
  $ChesisNo=$this->content[0]['ChesisNo'];
  $ModelNo=$this->content[0]['ModelNo'];
  $EMIDate=$this->content[0]['EMIDate'];
  $EMIAmount=$this->content[0]['EMIAmount'];
  $FirstEMI=$this->content[0]['FirstEMI'];
  $LastEMI=$this->content[0]['LastEMI'];
  $InsuranceExpiryDate=$this->content[0]['InsuranceExpiryDate'];
  $PermitExpiry=$this->content[0]['PermitExpiry'];
  $PollutionExpiry=$this->content[0]['PollutionExpiry'];
  $RoadTaxExpiry=$this->content[0]['RoadTaxExpiry'];
  $FitnessExpiryDate=$this->content[0]['FitnessExpiryDate'];
  $OwnerCode=$this->content[0]['OwnerCode'];
  
$VehicleCode=$this->content[0]['VehicleCode'];
														$RegDates=$this->content[0]['RegDates'];
														$VehicleType=$this->content[0]['VehicleType'];
														$MadeByCmpy=$this->content[0]['MadeByCmpy'];
														$DateofPurchase=$this->content[0]['DateofPurchase'];
														$DeviceIMIE=$this->content[0]['DeviceIMIE'];
														$MobileNo=$this->content[0]['MobileNo'];
														$SensorSerial=$this->content[0]['SensorSerial'];
														$ServiceInterval=$this->content[0]['ServiceInterval'];
														$CurrentOddometer=$this->content[0]['CurrentOddometer'];
														$LastService=$this->content[0]['LastService'];
														$OwnerName=$this->content[0]['OwnerName'];
														$OwnerType=$this->content[0]['OwnerType'];
														$FinancerName=$this->content[0]['FinancerName'];
														$types=$this->content[0]['types'];
														$RegistrationNo=$this->content[0]['RegistrationNo'];
														$RCYN=$this->content[0]['RCYN'];
														
														
													if($this->pick==''){
	
	$RegDates=date('Y-m-d');
	$FitnessExpiryDate=date('Y-m-d');
	$InsuranceExpiryDate=date('Y-m-d');
	$PermitExpiry=date('Y-m-d');
	$RoadTaxExpiry=date('Y-m-d');
	$PollutionExpiry=date('Y-m-d');
	$DateofPurchase=date('Y-m-d');
	
	
}
?>
<div class="container">

	            <div class="row">
                 <div class="col-md-12">
                  
  <div class="account-box">
 <span style="font-size:18px;"><strong>Add /Edit Vehicle</strong></span><a href="<?php echo URL; ?>master/vehiclemaster"><button id="btnAdd" type="button" class="btn btn-info pull-right"><i class="fa fa-angle-left"></i> Back</button></a>
 <br clear="all" />
<div class="or-box">
 </div>												
														
														
						

														
<!--<div class="container-fluid">
 


			<div class="panel panel-primary">
 <div class="panel-heading"></div>
	                    <div class="panel-body"> -->
	
	<form action="<?php echo URL; ?>master/edit_submit_vehiclemaster" method="post" enctype="multipart/form-data" onclick="<?php echo URL; ?>master/vehicle_tracking_details">
	
	 <div class="col-xs-6 form-group">
      
      <div class="col-xs-6">
        
      </div>
    </div>
	
	
  
<div class="panel panel-primary" style="background:#f2f2f2">
<div class="panel-heading">RTO Details</div>
	                    <div class="panel-body">  
	
	
	 <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="VehicleNo">Vehicle Number:</label>
      <div class="col-xs-6">
        <input data-validation="length" data-validation-length="min4" data-validation-error-msg="Enter a valid vehicle no" class="form-control" name="VehicleNo" id="VehicleNo" placeholder="Enter vehicle number" value="<?php echo $VehicleNo; ?>" autocomplete="VehicleNo">
      </div>
    </div>
	
	<div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="EngineNo">EngineNo:</label>
      <div class="col-xs-6">
        <input data-validation="length" data-validation-length="min6" data-validation-error-msg="Engine No must be of 6 characters" class="form-control" name="EngineNo" id="EngineNo" placeholder="Enter EngineNo" value="<?php echo $EngineNo; ?>" autocomplete="EngineNo">
		
		      </div>
    </div>
	<div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="ChesisNo">ChasisNo:</label>
      <div class="col-xs-6">
	  <input class="form-control" name="ChesisNo" id="ChesisNo" placeholder="Enter ChesisNo" value="<?php echo $ChesisNo; ?>">
        
		      </div>
    </div>
	
	<div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="ModelNo">Model Number:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="ModelNo" id="ModelNo" placeholder="Enter Model Number" value="<?php echo $ModelNo; ?>">
      </div>
    </div>
	<div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="r/cbook">R/C Book(Y/N)</label>
      <div class="col-xs-6">  

          <label><input type="radio"  name="RCYN" <?php if($RCYN=="YES"){ echo "checked=checked";} ?> value="YES"  /> Yes</label>
		  <label><input type="radio"  name="RCYN"<?php if($RCYN=="NO"){ echo "checked=checked";} ?>  value="NO"  /> No</label>
		  
        	  
      </div>
   </div>
	
	<div class="form-group col-xs-6">
      <label class="control-label col-xs-6" for="RegDates">Registration Date:</label>
      <div class="col-xs-6">          
        <input type="date" class="form-control" name="RegDates" id="RegDates" placeholder="Enter Registration Date" value="<?php echo $RegDates; ?>">
      </div>
    </div>
	
	<div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="RegistrationNo">Registration Number:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="RegistrationNo" id="RegistrationNo" placeholder="Enter Registration Number" value="<?php echo $RegistrationNo; ?>">
      </div>
    </div>
	
	<div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="VehicleType">vehicle Type:</label>
      <div class="col-xs-6"> 
 <select class="form-control" name="VehicleType" value="<?php echo $VehicleType; ?>">
 <option <?php if($VehicleType=="2 Wheeler"){ echo "selected=selected";} ?> value="2 Wheeler">2 Wheeler</option>
 <option <?php if($VehicleType=="3 Wheeler"){ echo "selected=selected";} ?> value="3 Wheeler">3 Wheeler</option>	
<option <?php if($VehicleType=="4 Wheeler"){ echo "selected=selected";} ?> value="4 Wheeler">4 Wheeler</option>
<option <?php if($VehicleType=="6 Wheeler"){ echo "selected=selected";} ?> value="6 Wheeler">6 Wheeler</option>
<option <?php if($VehicleType=="10 Wheeler"){ echo "selected=selected";} ?> value="10 Wheeler">10 Wheeler</option>
<option <?php if($VehicleType=="12 Wheeler"){ echo "selected=selected";} ?> value="16 Wheeler">12 Wheeler</option>
<option <?php if($VehicleType=="14 Wheeler"){ echo "selected=selected";} ?> value="16 Wheeler">14 Wheeler</option> 
<option <?php if($VehicleType=="16 Wheeler"){ echo "selected=selected";} ?> value="16 Wheeler">16 Wheeler</option>
<option <?php if($VehicleType=="18 Wheeler"){ echo "selected=selected";} ?> value="16 Wheeler">18 Wheeler</option> 
<option <?php if($VehicleType=="20 Wheeler"){ echo "selected=selected";} ?> value="16 Wheeler">20 Wheeler</option> 
<option <?php if($VehicleType=="22 Wheeler"){ echo "selected=selected";} ?> value="16 Wheeler">22 Wheeler</option> 
        </select>
      </div>
    </div>

  <div class="col-xs-6 form-group">
    <label class="control-label col-xs-6" for="VehicleCarrying">Vehicle Carrying Capacity:</label>
    <div class="col-xs-6">          
      <input type="text" class="form-control" name="VehicleCarrying" id="VehicleCarrying" placeholder="Enter Carrying Capactity" value="<?php echo $VehicleCarrying; ?>">
    </div>
  </div>

	<div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="OwnerName">Owner Name:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="OwnerName" id="OwnerName" placeholder="Enter Owner Name" value="<?php echo $OwnerName; ?>">
      </div>
    </div>

    <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="OwnerAddress">Owner Address:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="OwnerAddress" id="OwnerAddress" placeholder="Enter Owner Address" value="<?php echo $OwnerAddress; ?>">
      </div>
    </div> 
	
	<div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="OwnerCode">OwnerCode:</label>
      <div class="col-xs-6">
       <input type="text" class="form-control" name="OwnerCode" id="OwnerCode" placeholder="Enter OwnerCode" value="<?php echo $OwnerCode; ?>">
		      </div>
    </div>
	<div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="OwnerType">owner Type</label>
      <div class="col-xs-6">  

          <label><input type="radio" name="OwnerType" <?php if($OwnerType=="Byself"){ echo "checked=checked";} ?> value="Byself"> Byself</label>
		  <label><input type="radio" name="OwnerType" <?php if($OwnerType=="Hired"){ echo "checked=checked";} ?> value="Hired"> Hired</label>
		  	  
      </div>
   </div>
	<div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="DateofPurchase">Date of Purchase:</label>
      <div class="col-xs-6">          
        <input type="date" class="form-control" name="DateofPurchase" id="DateofPurchase" placeholder="Enter DateofPurchase" value="<?php echo $DateofPurchase; ?>">
      </div>
    </div>
	
	
	
</div>
</div>
	
	 <div class="panel panel-primary" style="background:#f2f2f2">
 <div class="panel-heading">Vehicle Finance Details</div>
	                    <div class="panel-body">  
	
	 
	<div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="FinancerName">Financer Name:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="FinancerName" id="FinancerName" placeholder="Enter FinancerName" value="<?php echo $FinancerName; ?>">
      </div>
    </div>
	<div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="EMIDate">EMI Date:</label>
      <div class="col-xs-6">          
        <input type="date" class="form-control" name="EMIDate" id="EMIDate" placeholder="Enter EMI Date" value="<?php echo $EMIDate; ?>">
      </div>
	  </div>
	
	<div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="EMI Amount">EMI Amount:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="EMIAmount" id="EMIAmount" placeholder="Enter EMI Amount" value="<?php echo $EMIAmount; ?>">
      </div>
	  </div>
	
	 <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="FirstEMI">First EMI:</label>
      <div class="col-xs-6">          
        <input type="date" class="form-control" name="FirstEMI" id="FirstEMI" placeholder="Enter First EMI" value="<?php echo $FirstEMI; ?>">
      </div>
	  </div>
	  <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="LastEMI">Last EMI:</label>
      <div class="col-xs-6">          
        <input type="date" class="form-control" name="LastEMI" id="LastEMI" placeholder="Enter Last EMI" value="<?php echo $LastEMI; ?>">
      </div>
	  </div>
	
	</div>
	</div>
	
	 <div class="panel panel-primary" style="background:#f2f2f2">
 <div class="panel-heading">Vehicle Compliances</div>
	                    <div class="panel-body">  
	
	 <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="InsuranceExpiryDate">Insurance Expiry:</label>
      <div class="col-xs-6">          
        <input type="date" class="form-control" name="InsuranceExpiryDate" id="InsuranceExpiryDate" placeholder="Enter Insurance Expiry" value="<?php echo $InsuranceExpiryDate; ?>">
      </div>
    </div>
	
	<div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="PollutionExpiry">Pollution Expiry:</label>
      <div class="col-xs-6">          
        <input type="date" class="form-control" name="PollutionExpiry" id="PollutionExpiry" placeholder="Enter RoadTax Expiry" value="<?php echo $PollutionExpiry; ?>">
      </div>
    </div>
	
	<div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="FitnessExpiryDate">Fitness Expiry:</label>
      <div class="col-xs-6">          
        <input type="date" class="form-control" name="FitnessExpiryDate" id="FitnessExpiryDate" placeholder="Enter Fitness Expiry" value="<?php echo $FitnessExpiryDate; ?>">
      </div>
    </div>
	
	<div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="RoadTaxExpiry">RoadTax Expiry:</label>
      <div class="col-xs-6">          
        <input type="date" class="form-control" name="RoadTaxExpiry" id="RoadTaxExpiry" placeholder="Enter RoadTax Expiry" value="<?php echo $RoadTaxExpiry; ?>">
      </div>
    </div>
	
	<div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="PermitExpiry">Permit Expiry:</label>
      <div class="col-xs-6">          
        <input type="date" class="form-control" name="PermitExpiry" id="PermitExpiry" placeholder="Enter Permit Expiry" value="<?php echo $PermitExpiry; ?>">
      </div>
    </div>
	
	
	</div>
	</div>
	
	
	<div class="panel panel-primary" style="background:#f2f2f2">
 <div class="panel-heading">Vehicle Tracking Details</div>
	                    <div class="panel-body">  
	
	 
	
	<div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="SensorSerial">Select Tracking Device:</label>
      <div class="col-xs-6">   
      <select class="form-control" name="SensorSerial">	 
      <option value="0">Select Tracking/No Tracking</option>      
         <?php foreach($this->Alldevices AS $key=>$value){ ?>
 						<option value="<?php echo $value['id']; ?>" <?php if($SensorSerial==$value['id']){ $vehicle=$value['name'] ; echo "selected='selected' ";} ?>><?php echo $value['name']; ?></option>
					 <?php } ?>
           </select>
      </div>
	  </div>
		
	<div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="types">Types VM</label>
      <div class="col-xs-6">  
<div class="radio" name="types" value="<?php echo $types; ?>">
          <label><input type="radio" name="types"> Vehicle</label>
		  <label><input type="radio" name="types"> Machine</label>
		  
        </div>	  
      </div>
	  </div>
	
	
	
	</div>
	</div>
	
	<div class="col-xs-16 form-group">        
      <div class="col-sm-offset-2 col-xs-8">  
	  <?php
	 
	  if($this->pick==''){ ?>
       <button type="submit" class="btn btn-info form-control" value="submit" name="submit" style="background-color:#008000">Submit</button>
	  <?php } else { ?>
	  <input type="hidden" value="<?php echo $this->content[0]['id']; ?>" name="id" >
	  <button type="submit" class="btn btn-info form-control" value="update" name="submit" style="background-color:#008000">Update</button>
	  <?php } ?>
		</div>
      </div>
       <br clear="all"/>
       </form>
	
  
              </div>
  </div>
  </div>
</div>										
														

<script>
shortcut.add("Ctrl+Shift+X",function() {
	alert("Hi there!");
});
</script>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script>

  $.validate({
    //lang: 'english'
  });

</script>
<script>
/*function handleClick() {
	 var VehicleNo = document.getElementById("VehicleNo").value;
  //alert("Clicked, new value = " + cb.checked +" "+cb.value+" customer= "+customer);
  if (VehicleNo !=0){
  $.ajax({
url: "<?php echo URL; ?>master/vehicle_tracking_details",
type: "GET",
data: {
DeviceIMIE : $_GET['uniqueid'],
MobNo : $_GET['phone']
},
dataType: "html",
success: function(myData) {
//$.notify("Device"+deviceAction, notifyMe);
		//alert("Device "+deviceAction +"  "+myData);
	  	
	}	
	
	
});
  }
}*/
</script>
<!-- <script>
 $('.form-control').keydown(function (e) {
	 //alert("inside form control!");
         if (e.which === 13) {
			// alert("Hello!");
             var index = $('.form-control').index(this) + 1;
			// alert("I am an alert box!");
             $('.form-control').eq(index).focus();
			// alert("alert box!");
			//alert(this.type);
			if(this.type!="submit"){
			 e.preventDefault();
			}
         }
     });
	 </script>
	<script>
  $(function () {
    $('.form-control').on('keydown', 'input', function (event) {
      if (event.which == 13) {
        $(this).next('input').focus();
        event.preventDefault();
      }
    });
  });
</script>-->