<!--<ul class="breadcrumb">
  <li><a href="#">Home</a></li>
  <li><a href="<?php// echo URL; ?>vts/index">VTS</a></li>
  <li><a href="<?php// echo URL; ?>vts/groups">Groups</a></li>
  <li>Add/Edit</li>
  <li class="pull-right"><a href="<?php// echo URL; ?>vts/groups">Back</a></li>
</ul> -->
 <?php
			$id=$this->content[0]['id'];
			$name=$this->content[0]['name'];
 ?>
 <div class="container">
	            <div class="row">
                 <div class="col-md-12">
  <div class="account-box">
  
 <span style="font-size:18px;"><strong>Add /Edit Groups</strong></span><a href="<?php echo URL; ?>vts/groups"><button id="btnAdd" type="button" class="btn btn-info pull-right"><i class="fa fa-angle-left"></i> Back</button></a>
 <br clear="all" />
<div class="or-box">
 </div>
 
<!--<div class="container">
<div class="col-md-12 column">
<div class="panel panel-primary">
<div class="panel-heading">Add/Edit New Group</div>  
  <div class="panel-body">-->
  
  <form action="<?php echo URL; ?>vts/edit_submit_groups" method="post">
    <div class="form-group col-xs-6">
      <label class="control-label col-xs-6" for="name">Group Name:</label>
      <div class="col-xs-6">          
        <input  data-validation="length alphanumeric" data-validation-length="min4" data-validation-error-msg="Name must be of 4 characters"class="form-control" name="name" id="name" placeholder="Enter name" value="<?php echo $name; ?>">
      </div>
    </div>
	
   <div class="col-xs-16 form-group">        
      <div class="col-sm-offset-2 col-xs-8">
         <?php
	  if($this->pick==''){ ?>
       <button type="submit" class="btn btn-info form-control" value="submit" name="submit" style="background-color:#008000">Submit</button>
	  <?php } else { ?>
	  <input type="hidden" value="<?php echo $id; ?>" name="id">
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
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script>

  $.validate({
    //lang: 'english'
  });

</script>