
 <?php
			$id=$this->content[0]['id'];
			$name=$this->content[0]['name'];
			$id=$this->content[0]['id'];
			$description=$this->content[0]['description'];
			$area=$this->content[0]['area'];
 ?>
 <div class="container">
	            <div class="row">
                 <div class="col-md-12">
  <div class="account-box">
  
 <span style="font-size:18px;"><strong>Edit Geofences</strong></span><a href="<?php echo URL; ?>vts/geofences"><button id="btnAdd" type="button" class="btn btn-info pull-right"><i class="fa fa-angle-left"></i> Back</button></a>
 <br clear="all" />
<div class="or-box">
 </div>
  
  <form action="<?php echo URL; ?>vts/editPolygon" method="post">
    <div class="form-group col-xs-6">
      <label class="control-label col-xs-6" for="name">Name:</label>
      <div class="col-xs-6">          
        <input  data-validation="length" data-validation-length="min4" data-validation-error-msg="Name must be of 4 characters" class="form-control" name="name" id="name" placeholder="Enter name" value="<?php echo $name; ?>">
      </div>
    </div>
    
    <div class="form-group col-xs-6">
      <label class="control-label col-xs-6" for="description">Description:</label>
      <div class="col-xs-6">          
        <input  data-validation="length" data-validation-length="min4" data-validation-error-msg="Description must be of 4 characters" class="form-control" name="description" id="description" placeholder="Enter Description" value="<?php echo $description; ?>">
      </div>
    </div>
    
    <div class="form-group col-xs-6">
      <label class="control-label col-xs-6" for="area">Area:</label>
      <div class="col-xs-6">          
        <input  data-validation="length" data-validation-length="min4" data-validation-error-msg="Area must be of 4 characters" class="form-control" name="area" id="area" placeholder="Enter Description" value="<?php echo $area; ?>">
      </div>
    </div>
	
   <div class="col-xs-16 form-group">        
      <div class="col-sm-offset-2 col-xs-8">
      <input type="hidden" value="<?php echo $id; ?>" name="id">
	  <button type="submit" class="btn btn-info form-control" value="update" name="submit" style="background-color:#008000">Update</button>
	 
      </div>
    </div>
      <br clear="all"/>
  </form>
  </div>
  </div>
  </div>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script>

  $.validate({
    //lang: 'english'
  });

</script>