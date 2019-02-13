   <div class="container">
	            <div class="row">
   <div class="col-md-12">
  <div class="account-box">
  
 <span style="font-size:18px;"><strong>Assign Geofence To Device</strong></span><a href="<?php echo URL; ?>vts/devices"><button id="btnAdd" type="button" class="btn btn-info pull-right"><i class="fa fa-angle-left"></i> Back</button></a>
  <br clear="all" />
  <?php
   $authorised= array();
 foreach($this->AllUsergeofence AS $key=>$value){ 
     array_push($authorised,$value['id']);
 }
  ?>
  <form action="" method="post" name="f1">
  <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="name">Select Device:</label>
      <div class="col-xs-6">
        <select selected="selected" class="form-control" name="device" id="device" onchange="javascript:document.f1.submit()">
        <option value="0">Select device</option>
   				<?php foreach($this->alldevices AS $key=>$value){ ?>
                  
 					<option value="<?php echo $value['id']; ?>" <?php if($this->device==$value['id']) echo "selected=selected"; ?>><?php echo $value['name']; ?></option>
        		<?php } ?>
         </select>
       </div>
   </div>
</form>
  <br clear="all" />
<div class="or-box">
 </div> 
 <?php 
 if($this->device !="" or $this->device !=0){

 //print_r($this->allUserdevices);
 ?>
   <form action="" method="post">
   <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="name">Check/Uncheck to Assign Geofence</label>
      <div class="col-xs-6"><?php foreach($this->Allgeofences AS $key=>$value){ ?>
 			<input type="checkbox" name="geofence[]" id =cb<?php echo $value['id']; ?> value="<?php echo $value['id']; ?>" onclick='handleClick(this);' <?php if(in_array($value['id'],$authorised)){ echo "checked=checked";} ?> />&nbsp;&nbsp;<?php echo $value['name']; ?><br />
        					<?php } ?>
      </div>
      </div>
      </form>
      <?php 
 }
	  //print_r($this->allUserdevices); ?>
      
<br clear="all" />
 </div>
 </div>
  </div>
</div>
 <script>
 function handleClick(cb) {
	 var device = document.getElementById("device").value;
  //alert("Clicked, new value = " + cb.checked +" "+cb.value+" customer= "+customer);
  var deviceAction;
  var notifyMe;
  if(cb.checked){
	  deviceAction="Added";
	  notifyMe ="success";
	  }else{
		  deviceAction="Removed"; 
		  notifyMe ="warn";
		  }
  if (device !=0){
  $.ajax({
url: "<?php echo URL; ?>vts/AssignuserGeofence",
type: "GET",
data: {
geofenceid : cb.value,
deviceid : device,
deviceAction : deviceAction
},
dataType: "html",
success: function(myData) {
$.notify("Device"+deviceAction, notifyMe);
		//alert("Device "+deviceAction +"  "+myData);
	  	
	}	
	
	
});
  }
}
</script>