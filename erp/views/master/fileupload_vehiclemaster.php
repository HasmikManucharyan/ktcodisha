
<br>
<br>
<br><p>
<a href="<?php echo URL; ?>master/vehicle">Master >></a><a href="<?php echo URL; ?>master/vehicle">Vehicle >></a><a href="<?php echo URL; ?>master/vehiclemaster">Vehiclemaster >></a>Edit</p>

<a href="<?php echo URL; ?>master/vehiclemaster" class="btn btn-info" role="button">Back</a>
<?php print_r($this->content); ?>
<?php
 // $VehicleNO=$this->pick;
  ?>
  <?php
echo $parent_id=$this->content[0]['parent_id'];
														$attachments=$this->content[0]['attachments'];
														
														
														?>
<div class="container">
    <div class="row clearfix">
        <div class="col-md-12 column">
<center><h1>Vehicle Master</h1></center>
 
  <form class="form-horizontal" action="<?php echo URL; ?>fileupload_vehiclemaster" method="post" enctype="multipart/form-data">
	<div class="form-group">
      <label class="control-label col-sm-2" for="attachments">Attachments:</label>
      <div class="col-sm-10">
       <input type="file" class="form-control" name="attachments" multiple="multiple" id="attachments" value="<?php echo $this->content[0]['attachments']; ?>">
      </div>
    </div>
	<!-- <input name="attachment_f[]" type="hidden" value="
	<?php //echo $attach['attachment']; ?>"><a href="<?php //echo URL.$base_dir."/".$attach['attachment']; ?>" class="SmallLnk" target="_blank"> 
									  
									  <?php 
									//echo $attach['attachment'];  
									  ?></a>
								 <?php //} ?>
                                 <input name="attachment[]" type="file" id="image" size="55">
                                	<div id="moreUploads"></div>
									<div id="moreUploadsLink" style="display:block;"><a href="javascript:addFileInput();" class="SmallLnk" style="color: #FF6600">Add More Files</a></div>-->
    
	 <input type="hidden" value="<?php echo $this->content[0]['id']; ?>" name="id">
        <button type="submit" class="btn btn-default" value="submit" name="submit">Submit</button>
	  
		
      </div>
    </div>
  </form>
  </div>
  </div>
</div>
