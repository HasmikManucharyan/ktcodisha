
<div class="container">
	            <div class="row">
   <div class="col-md-12">
  <div class="account-box">
 
 <span style="font-size:18px;"><strong>Create Challan</strong></span><a href="<?php echo URL; ?>challan/list_challan"><button id="btnAdd" type="button" class="btn btn-info pull-right"><i class="fa fa-angle-left"></i> Back</button></a>
 <br clear="all" />
<div class="or-box">
 </div>


  <form action="<?php echo URL; ?>challan/submit_challan" method="post">
 
  
 <?php $challanno=$this->content[0]['challanno']; echo $challanno; ?>
	<div class="form-group col-xs-6">
     
	   <div class="col-xs-6"> 
	 <input type="hidden" class="form-control" name="challanno" id="challanno" placeholder="Enter Challan no" value="<?php echo $challanno++; ?>">
  	</div>
   </div>
	
    <div class="form-group col-xs-6">
      
      <div class="col-xs-6">          
        <input type="hidden" class="form-control" name="datetime_in" id="datetime_in" placeholder="Enter Date Time(In)" value="<?php echo date('Y-m-d H:i:s'); ?>">
      </div>
    </div>
	
	
	<div class="form-group col-xs-6">
      <label class="control-label col-xs-6" for="deviceid">Vehicle:</label>
      <div class="col-xs-6">          
        <select class="form-control" name="deviceid">	
  <?php 
					foreach($this->Alldevices AS $key=>$value){
						?>
 <option value="<?php echo $value['id']; ?>" <?php if($value['id']==$this->deviceid){ echo "selected=selected"; }?>><?php echo $value['name']; ?></option>
					<?php } ?>
 </select>
      </div>
    </div>
    <div class="form-group col-xs-6">
      <label class="control-label col-xs-6" for="material">Material:</label>
      <div class="col-xs-6">          
        <select class="form-control" name="material">	

 <option value="ash">ASH</option>
  <option value="botton ash">BOTTON ASH</option>
   <option value="solid waste">SOLID WASTE</option>
					
 </select>
      </div>
    </div>
	<div class="form-group col-xs-6">
      <label class="control-label col-xs-6" for="from">From:</label>
	   <div class="col-xs-6"> 
	 <input type="text" class="form-control" name="from" id="from" placeholder="Enter From" value="<?php echo $from; ?>">
  	</div>
   </div>
   <div class="form-group col-xs-6">
      <label class="control-label col-xs-6" for="to">To:</label>
	   <div class="col-xs-6"> 
	 <input type="text" class="form-control" name="to" id="to" placeholder="Enter To" value="<?php echo $to; ?>">
  	</div>
   </div>
   <div class="form-group col-xs-6">
      <label class="control-label col-xs-6" for="qnty">Quantity:</label>
	   <div class="col-xs-6"> 
	 <input type="text" class="form-control" name="qnty" id="qnty" placeholder="Enter Quantity" value="<?php echo $quantity; ?>">
  	</div>
   </div>
   <div class="form-group col-xs-6">
      <label class="control-label col-xs-6" for="ownername">Owner's Name:</label>
	   <div class="col-xs-6"> 
	 <input type="text" class="form-control" name="ownername" id="ownername" placeholder="Enter Owner Name" value="<?php echo $owner; ?>">
  	</div>
   </div>
	<div class="form-group col-xs-6">
      <label class="control-label col-xs-6" for="driverid">Driver:</label>
	   <div class="col-xs-6"> 
	 
<select class="form-control" name="driverid">	
  <?php 
					foreach($this->Alldrivers AS $key=>$value){
						?>
 <option value="<?php echo $value['id']; ?>" <?php if($value['id']==$this->driverid){ echo "selected=selected"; }?>><?php echo $value['name']; ?></option>
				<?php } ?>	
 </select>
		

		
      </div>
    </div>
	

	
    <div class="col-xs-16 form-group">        
      <div class="col-sm-offset-2 col-xs-8">

	  <?php
	 
	  if($this->pick==''){ ?>
        <button type="submit" class="btn btn-info form-control" value="submit" name="submit" style="background-color:#008000">Submit</button>
         <?php } else { ?>
	 	<input type="hidden" value="<?php echo $this->content[0]['challanno']; ?>" name="id">
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
  
