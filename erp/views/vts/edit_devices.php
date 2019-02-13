 <?php
 														$id=$this->content[0]['id'];
														$name=$this->content[0]['name'];
														$uniqueid=$this->content[0]['uniqueid'];
														$groupid=$this->content[0]['groupid'];
														$phone=$this->content[0]['phone'];
														$model=$this->content[0]['model'];
														$contact=$this->content[0]['contact'];
														$category=$this->content[0]['category'];
														
														?>
<div class="container">
	            <div class="row">
	<!--	<ul class="breadcrumb">
  <li><a href="#">Home</a></li>
  <li><a href="<?php echo URL; ?>vts">VTS</a></li>
   <li><a href="<?php echo URL; ?>vts/devices">Devices</a></li>

</ul> -->
		

   <div class="col-md-12">
  <div class="account-box">
  
 <span style="font-size:18px;"><strong>Add /Edit Devices</strong></span><a href="<?php echo URL; ?>vts/devices"><button id="btnAdd" type="button" class="btn btn-info pull-right"><i class="fa fa-angle-left"></i> Back</button></a>
 <br clear="all" />
<div class="or-box">
 </div>


  <form action="<?php echo URL; ?>vts/edit_submit_devices" method="post">
  <?php if(Session::get('userType')=="dealer"){ ?>
  
    <div class="form-group col-xs-6">
      <label class="control-label col-xs-6" for="name">Name:</label>
      <div class="col-xs-6">          
        <input data-validation="length alphanumeric" data-validation-length="min4" class="form-control" name="name" id="name" placeholder="Enter name" value="<?php echo $name; ?>" data-validation-error-msg="Name must be of 4 characters">
      </div>
    </div>
	
	
	<div class="form-group col-xs-6">
      <label class="control-label col-xs-6" for="uniqueid">IMIE / Unique Identifier:</label>
      <div class="col-xs-6">          
        <input data-validation="length numeric" data-validation-length="min4" type="text" class="form-control" name="uniqueid" id="uniqueid" placeholder="Enter uniqueid" value="<?php echo $uniqueid; ?>" data-validation-error-msg="Enter a valid unique id">
      </div>
    </div>

	<div class="form-group col-xs-6">
      <label class="control-label col-xs-6" for="groupid">Group:</label>
	   <div class="col-xs-6"> 
	 
 <select selected="selected" class="form-control" name="groupid" value="<?php echo $groupid; ?>">
   <?php foreach($this->Allgroups AS $key=>$value){
						?>
 
   <option value="<?php echo $value['id']; ?>" <?php if($value['id']==$groupid){ echo "selected=selected"; }?>><?php echo $value['name']; ?></option>
        <?php } ?>
		
		 </select>
		
      </div>
    </div>

	
	<div class="form-group col-xs-6">
      <label class="control-label col-xs-6" for="phone">Phone:</label>
      <div class="col-xs-6">          
        <input data-validation="length numeric" data-validation-length="min10" class="form-control" name="phone" id="phone" placeholder="Enter phone" value="<?php echo $phone; ?>" data-validation-error-msg="phone no must be of 10 digit">
      </div>
    </div>
	
	<div class="form-group col-xs-6">
      <label class="control-label col-xs-6" for="model">Device Model:</label>
      <div class="col-xs-6">          
        <input data-validation="length numeric" data-validation-length="min4" class="form-control" name="model" id="model" placeholder="Enter model" value="<?php echo $model; ?>" data-validation-error-msg="Please enter device model">
      </div>
    </div>
	
	<div class="form-group col-xs-6">
      <label class="control-label col-xs-6" for="contact">Contact:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="contact" id="contact" placeholder="Enter contact" value="<?php echo $contact; ?>">
      </div>
    </div>
	
	<div class="form-group col-xs-6">
      <label class="control-label col-xs-6" for="category">Sensor:</label>
      <div class="col-xs-6">
      <select selected="selected" class="form-control" name="category" value="<?php echo $category; ?>">
		<option value="default" <?php if($category=="" or $category=="default"){ echo "selected=selected"; } ?>>Without Fuel Sensor</option>
        <option value="truck" <?php if($category=="truck"){ echo "selected=selected"; } ?>>With Fuel Sensor</option>
        </select>
      </div>
    </div>
	    <?php } ?>
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
</form>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script>
  $.validate({
    //lang: 'english'
  });
</script>
  
