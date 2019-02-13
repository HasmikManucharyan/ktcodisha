
<div class="container">
	            <div class="row">
   <div class="col-md-12">
  <div class="account-box">
 
 <span style="font-size:18px;"><strong>Edit Employee</strong></span><a href="<?php echo URL; ?>employee/index"><button id="btnAdd" type="button" class="btn btn-info pull-right"><i class="fa fa-angle-left"></i> Back</button></a>
 <br clear="all" />
<div class="or-box">
 </div>
 <?php
  $name=$this->content[0]['name'];
  $fathername=$this->content[0]['fathername'];
  $address=$this->content[0]['address'];
  $city=$this->content[0]['city'];
  $state=$this->content[0]['state'];
  $phoneno=$this->content[0]['phoneno'];
  $panno=$this->content[0]['panno'];
  $designation=$this->content[0]['designation'];
  $posting=$this->content[0]['posting'];
  $aadhaarno=$this->content[0]['aadhaarno'];
  $bloodgroup=$this->content[0]['bloodgroup'];
  $salary=$this->content[0]['salary'];
  
	if($this->pick==''){
			$dob=date('Y-m-d');
			$dateofjoining=date('Y-m-d');
	}
	?>
  <form action="<?php echo URL; ?>employee/edit_submit_employee" method="post" enctype="multipart/form-data">
  
   <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="name">Name:</label>
      <div class="col-xs-6">
        <input data-validation="length" data-validation-length="min4" data-validation-error-msg="Name must be of 4 characters" class="form-control" name="name" id="name" placeholder="Enter name" value="<?php echo $name; ?>">

      </div>
    </div>
    
	<div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="fathername">Father Name:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="fathername" id="fathername" placeholder="Enter fathername" value="<?php echo $fathername; ?>" >

      </div>
    </div>
    <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="address">Address:</label>
      <div class="col-xs-6">
        <input type="text" class="form-control" name="address" id="address" placeholder="Enter Address" value="<?php echo $address; ?>">

      </div>
    </div>
    <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="city">City:</label>
      <div class="col-xs-6">
        <input type="text" class="form-control" name="city" id="city" placeholder="Enter City" value="<?php echo $city; ?>">

      </div>
    </div>
    
    <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="state">State:</label>
      	<div class="col-xs-6">
        	<input type="text" class="form-control" name="state" id="state" placeholder="Enter State" value="<?php echo $state; ?>">
		</div>
    </div>
    
    <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="phoneno">Phone No:</label>
      	<div class="col-xs-6">
        	<input class="form-control" name="phoneno" id="phoneno" placeholder="Enter Phone No" value="<?php echo $phoneno; ?>">
		</div>
    </div>
    
    <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="dob">DOB:</label>
      	<div class="col-xs-6">          
        	<input type="date" class="form-control" name="dob" id="dob" placeholder="Enter DOB" value="<?php echo $dob; ?>" >
      	</div>
	 </div>
      
      <div class="col-xs-6 form-group">
      	<label class="control-label col-xs-6" for="dateofjoining">Date Of Joining:</label>
      		<div class="col-xs-6">          
        		<input type="date" class="form-control" name="dateofjoining" id="dateofjoining" placeholder="Enter Date Of Joining" value="<?php echo $dateofjoining; ?>" >
      		</div>
	  </div>

      <div class="col-xs-6 form-group">
      	<label class="control-label col-xs-6" for="designation">Designation:</label>
      		<div class="col-xs-6">          
        		<input type="text" class="form-control" name="designation" id="designation" placeholder="Enter designation" value="<?php echo $designation; ?>" >
      		</div>
    </div>
    
    <div class="col-xs-6 form-group">
      	<label class="control-label col-xs-6" for="posting">Posting Location:</label>
      		<div class="col-xs-6">          
        		<input type="text" class="form-control" name="posting" id="posting" placeholder="Enter posting" value="<?php echo $posting; ?>" >
      		</div>
	  </div>
      
      <div class="col-xs-6 form-group">
      	  <label class="control-label col-xs-6" for="bloodgroup">Blood Group:</label>
      			<div class="col-xs-6">          
        			<input type="text" class="form-control" name="bloodgroup" id="bloodgroup" placeholder="Enter bloodgroup" value="<?php echo $bloodgroup;?>" >
				</div>
	  </div>
      
	 <div class="col-xs-6 form-group">
      	<label class="control-label col-xs-6" for="salary">salary:</label>
      		<div class="col-xs-6">          
        		<input type="text" class="form-control" name="salary" id="salary" placeholder="Enter salary" value="<?php echo $salary; ?>" >
	  		</div>
	 </div>
      
   
   <div class="col-xs-6 form-group">
      	<label class="control-label col-xs-6" for="panno">PAN NO:</label>
      		<div class="col-xs-6">          
        		<input type="text" class="form-control" name="panno" id="salapannory" placeholder="Enter panno" value="<?php echo $panno; ?>" >
	  		</div>
   </div>
   
   <div class="col-xs-6 form-group">
      	<label class="control-label col-xs-6" for="aadhaarno">Aadhaar NO:</label>
      		<div class="col-xs-6">          
        		<input type="text" class="form-control" name="aadhaarno" id="aadhaarno" placeholder="Enter aadhaarno" value="<?php echo $aadhaarno; ?>" >
	  		</div>
	 </div>
      <!-- <div class="col-xs-6 form-group">
      	<label class="control-label col-xs-6" for="panno_attach">PAN No Attachment:</label>
      		<div class="col-xs-6">          
         		<input type="file" name="panno_attach" id="panno_attach" value="Upload">
      		</div>
	  </div> 
       
   
    <div class="col-xs-6 form-group">
      	<label class="control-label col-xs-6" for="aadhaarno_attach">Aadhaar No Attachment:</label>
      		<div class="col-xs-6">          
        			<input type="file" name="aadhaarno_attach" id="aadhaarno_attach" value="Upload">
	 		</div>
	</div> -->
      
      <div class="col-xs-6 form-group">
      	<label class="control-label col-xs-6" for="photo">Photo:</label>
      		<div class="col-xs-6">          
        			<input type="file" name="photo" id="photo" value="Upload">
			</div>
	  </div>
	
    <div class="col-xs-16 form-group">        
      <div class="col-sm-offset-2 col-xs-8">
      <?php
	 
	  if($this->pick==''){ ?>
        <button type="submit" class="btn btn-info form-control" id="submit" value="submit" name="submit" style="background-color:#008000">Submit</button>
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
</form>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script>
  $.validate({
    //lang: 'english'
  });
</script>
  
