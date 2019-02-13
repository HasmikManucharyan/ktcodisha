
<div class="container">
	            <div class="row">
   <div class="col-md-12">
  <div class="account-box">
 
 <span style="font-size:18px;"><strong>Edit Challan</strong></span><a href="<?php echo URL; ?>challan/list_challan"><button id="btnAdd" type="button" class="btn btn-info pull-right"><i class="fa fa-angle-left"></i> Back</button></a>
 <br clear="all" />
<div class="or-box">
 </div>
 <?php 
 $tareweight=$this->content[0]['tareweight'];
$grossweight=$this->content[0]['grossweight'];
?>

  <form action="<?php echo URL; ?>challan/edit_submit_challan" method="post">
 
	<div class="form-group col-xs-6">
      <label class="control-label col-xs-6" for="tareweight">Tare Weight:</label>
	   <div class="col-xs-6"> 
	 <input type="text" class="form-control" name="tareweight" id="tareweight" placeholder="Enter Tare Weight" value="<?php echo $tareweight; ?>">
  	</div>
   </div>
   
   <div class="form-group col-xs-6">
      <label class="control-label col-xs-6" for="grossweight">Gross Weight:</label>
	   <div class="col-xs-6"> 
	 <input type="text" class="form-control" name="grossweight" id="grossweight" placeholder="Enter Gross Weight" value="<?php echo $grossweight; ?>">
  	</div>
   </div>
	
    <div class="form-group col-xs-6">
     
      <div class="col-xs-6">          
        <input type="hidden" class="form-control" name="datetime_out" id="datetime_out" placeholder="Enter Date Time(Out)" value="<?php echo date('Y-m-d H:i:s'); ?>">
      </div>
    </div>
	
	
    <div class="col-xs-16 form-group">        
      <div class="col-sm-offset-2 col-xs-8">

	 	<input type="hidden" value="<?php echo $this->content[0]['id']; ?>" name="id">
		<button type="submit" class="btn btn-info form-control" value="submit" name="submit" style="background-color:#008000">Update</button>
      
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
  
