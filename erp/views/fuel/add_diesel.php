
<div class="container">
	            <div class="row">
   <div class="col-md-12">
  <div class="account-box">
 
 <span style="font-size:18px;"><strong>Add/Edit Diesel</strong></span><a href="<?php echo URL; ?>fuel/index"><button id="btnAdd" type="button" class="btn btn-info pull-right"><i class="fa fa-angle-left"></i> Back</button></a>
 <br clear="all" />
<div class="or-box">
 </div>
 <?php
 
 $deviceid =$this->content[0]['deviceid'];
 $driverid=$this->content[0]['driverid'];
 $challanno=$this->content[0]['challanno'];
 $qty=$this->content[0]['qty'];
 $fillissue=$this->content[0]['fillissue'];
 $OpenOddo=$this->content[0]['OpenOddo'];
 $CloseOddo=$this->content[0]['CloseOddo'];
 $OpenMeter=$this->content[0]['OpenMeter'];
 $CloseMeter=$this->content[0]['CloseMeter'];
 $employeeid=$this->content[0]['employeeid'];
 if($this->pick==''){
	
	$datetime=date('Y-m-d');
	
}

?>

  <form action="<?php echo URL; ?>fuel/edit_submit_diesel" method="post">
 	
    
   
   <div class="form-group col-xs-6">
      <label class="control-label col-xs-6" for="datetime">Date:</label>
	   <div class="col-xs-6"> 
	 <input type="date" class="form-control" name="datetime" id="datetime" placeholder="Enter Date" value="<?php echo $datetime; ?>">
  	</div>
   </div>
   
   
   <div class="form-group col-xs-6">
      <label class="control-label col-xs-6" for="OpenOddo">Open Oddometer:</label>
	   <div class="col-xs-6"> 
	 <input type="text" class="form-control" name="OpenOddo" id="OpenOddo" placeholder="Enter Open Oddometer" value="<?php echo $OpenOddo; ?>">
  	</div>
   </div>
	
    <div class="form-group col-xs-6">
      <label class="control-label col-xs-6" for="CloseOddo">Close Oddometer:</label>
	   <div class="col-xs-6"> 
	 <input type="text" class="form-control" name="CloseOddo" id="CloseOddo" placeholder="Enter Close Oddometer" value="<?php echo $CloseOddo; ?>">
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
</form>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script>
  $.validate({
    //lang: 'english'
  });
</script>
  
