<style>
#container {
    display: block; 
    position:relative
} 
.ui-autocomplete {
    position: absolute;
}
.ui-menu .ui-menu-item a{
	display:inline-block;
    color: #96f226;
    border-radius: 0px;
    border: 1px solid #454545;
}
</style>
<script type="text/javascript">
$(document).ready(function(){
    $("#category").change(function(){
        $(this).find("option:selected").each(function(){
            var optionValue = $(this).attr("value");
            if(optionValue){
                $(".box").not("." + optionValue).hide();
                $("." + optionValue).show();
            } else{
                $(".box").hide();
            }
        });
    }).change();
});


</script>
<div class="container">
	            <div class="row">
                 <div class="col-md-12">
  <div class="account-box">
  
 <span style="font-size:18px;"><strong>Add /Edit Expense Log</strong></span><a href="<?php echo URL; ?>master/expenselog"><button id="btnAdd" type="button" class="btn btn-info pull-right"><i class="fa fa-angle-left"></i> Back</button></a>
 <br clear="all" />
<div class="or-box">
 </div>
<center><?php echo $this->msg; ?></center>
<!--<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="account-box">-->
                <form action="<?php echo URL; ?>master/submit_expenselog" method="post">
                <div class="panel-heading"></div>
	                    <div class="panel-body">  
                        <div class="form-group col-xs-6">
                <label class="control-label col-xs-6" for="VehicleNo">Vehicle Number:</label>
      <div class="col-xs-6">          
        <select selected="selected" class="form-control" name="VehicleNo" id="VehicleNo" value="<?php echo $groupid; ?>">
   			<?php foreach($this->alldevices AS $key=>$value){ ?>
                     <option value="<?php echo $value['name']; ?>" selected="selected"><?php echo $value['name']; ?></option>
        	<?php } ?>
		
		 </select>
      </div>
    </div>
    
            
                <div class="form-group col-xs-6">
                <label class="control-label col-xs-6" for="category">Expense Category:</label>
      <div class="col-xs-6">          
       <select selected="selected" class="form-control" name="category" id="category" value="<?php echo $category; ?>">
     <option selected="selected" value="category">Choose Category</option>
   <option value="regular" >Regular</option>
   <option value="accidental">Accidental</option>
   <option value="salary">Salary</option> 
   <option value="fuel">Fuel</option> 
		
		 </select>
      </div>
   </div>
  <?php $date=date('Y-m-d'); ?>
   <div class="form-group col-xs-6">
       <label class="control-label col-xs-6" for="date">Date:</label>
          <div class="col-xs-6">          
             <input type="date" class="form-control" name="date" id="date" placeholder="Enter Date" value="<?php echo $date; ?>">
          </div>
   </div>
   
   <div class="form-group col-xs-6">
                <label class="control-label col-xs-6" for="accounthead">Sub Account Head:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="accounthead" id="accounthead" placeholder="Enter Account Head" value="<?php echo $accounthead; ?>">
      </div>
    </div>
    
     
     <div class="form-group col-xs-6">
                <label class="control-label col-xs-6" for="challanno">Bill/Challan No:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="challanno" id="challanno" placeholder="Enter Bill/Challan No" value="<?php echo $challanno; ?>">
      </div>
    </div>
    </div>
	<div class="regular box">
    <div class="panel panel-primary" style="background:#f2f2f2" id="show_div">
<div class="panel-heading">Regular Maintainance</div>
	                    <div class="panel-body">  

   <div class="form-group col-xs-6">
                <label class="control-label col-xs-6" for="amount1">Amount:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="amount1" id="amount1" placeholder="Enter Amount" value="<?php echo $amount1; ?>">
      </div>
    </div>
                
    <div class="form-group col-xs-6">
                <label class="control-label col-xs-6" for="service">Service:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="service" id="service" placeholder="Enter service" value="<?php echo $service; ?>">
      </div>
    </div>
     
  <div class="form-group col-xs-6">
                <label class="control-label col-xs-6" for="remarks">Remarks:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="remarks" id="remarks" placeholder="Enter Remark" value="<?php echo $remarks; ?>">
      </div>
    </div>
	
    </div>
    </div>
    </div>
    
    <div class="accidental box">
    <div class="panel panel-primary" style="background:#f2f2f2" id="hidden_div">
<div class="panel-heading">Accidental Maintainances</div>
	                    <div class="panel-body">  
	
   <div class="form-group col-xs-6">
                <label class="control-label col-xs-6" for="amount2">Amount:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="amount2" id="amount2" placeholder="Enter Amount" value="<?php echo $amount2; ?>">
      </div>
    </div>
     <div class="form-group col-xs-6">
                <label class="control-label col-xs-6" for="workshopname">Workshop Name:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="workshopname" id="workshopname" placeholder="Enter workshop name" value="<?php echo $workshopname; ?>">
      </div>
    </div>
     
     
    </div>
    </div>
    </div>
    
    <div class="salary box">
    <div class="panel panel-primary" style="background:#f2f2f2">
 <div class="panel-heading">Salary</div>
	                    <div class="panel-body"> 
  
  <?php 
  	//foreach($this->content AS $key=>$value){
				//$obj = json_decode($value['attributes']); 
					//$dsal=$obj->{'driversalary'}; 	
					
  ?>
    <div class="form-group col-xs-6">
                <label class="control-label col-xs-6" for="drivername">Driver Name:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control productSearch" name="drivername" id="drivername" placeholder="Enter Driver Name" value="<?php echo $value['drivername']; ?>"><div id="container">
</div>
		
      </div>
    </div>
    <div class="form-group col-xs-6">
                <label class="control-label col-xs-6" for="driversalary">Driver Salary:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="driversalary" id="driversalary" placeholder="Enter Driver Salary" value="<?php echo $dsal; ?>">
      </div>
    </div>
	
	<?php
	
		//}
	?>
	
	
    </div>
    </div>
    </div>
    
    <div class="fuel box">
    <div class="panel panel-primary" style="background:#f2f2f2">
 <div class="panel-heading">Fuel</div>
	                    <div class="panel-body"> 
  
  <div class="form-group col-xs-6">
                <label class="control-label col-xs-6" for="amount3">Amount:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="amount3" id="amount3" placeholder="Enter Amount" value="<?php echo $amount3; ?>">
      </div>
    </div>
    <div class="form-group col-xs-6">
                <label class="control-label col-xs-6" for="fuelfill">Fuel Fill:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="fuelfill" id="fuelfill" placeholder="Enter Fuel fill" value="<?php echo $driver; ?>">
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
	  <input type="hidden" value="<?php echo $this->content[0]['id']; ?>" name="id">
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
function addAutocomplete(selector){
	//alert("called");
	
	$(selector).autocomplete({
    source: function ( request, response ) {
        $.ajax({
            url: "<?php echo URL; ?>master/search",
            dataType: "json",
            data: {
                        name: request.term      
                    },
            success: function (data) {
                response( $.map( data, function ( item ) {
                    return {
                        label: item[0],
                        value: item[1]
                    };
                }));
            }
        });
    },
    minLength: 2,
	appendTo: "#container",
    focus: function (event, ui) {
        $(event.target).val(ui.item.label);
        return false;
    },
    select: function (event, ui) {
        $(event.target).val(ui.item.label);
       // window.location = ui.item.value;
	   //alert(ui.item.value);
	 $('#driversalary').val(ui.item.value);
	// GetTotal();
        return false;
    
	}
});
	}
		addAutocomplete("#drivername");
	$("#drivername").on('click',function(){
return false;
});

</script>
