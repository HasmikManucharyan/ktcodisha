 <ul class="breadcrumb">
  <li><a href="#">Home</a></li>
  <li><a href="<?php echo URL; ?>master/vehicle">Master</a></li>
  <li><a href="<?php echo URL; ?>master/customermaster">Customer master</a></li>
  <li>Add/Edit</li>
  <li class="pull-right"><a href="<?php echo URL; ?>master/customermaster">Back</a></li>
</ul> 

  <?php
  $name=$this->content[0]['name'];
$address=$this->content[0]['address'];
														$contact=$this->content[0]['contact'];
														$workorderno=$this->content[0]['workorderno'];
														$workorderamount=$this->content[0]['workorderamount'];
														$rate=$this->content[0]['rate'];			
?>
<div class="container">
<div class="col-md-12 column">
<div class="panel panel-primary">
<div class="panel-heading">Add New Customer</div>  
  <div class="panel-body">                                 
<form action="<?php echo URL; ?>master/edit_submit_customermaster" method="post" enctype="multipart/form-data" onsubmit="return confirm('Do you really want to submit the form?');">

    <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="name">Name:</label>
      <div class="col-xs-6">
        <input type="text" class="form-control" name="name" id="name" placeholder="Enter Customer Name" value="<?php echo $name; ?>">
      </div>
    </div>
	<div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="address">Address:</label>
      <div class="col-xs-6">
        <input type="text" class="form-control" name="address" id="address" placeholder="Enter Address" value="<?php echo $address; ?>">
      </div>
    </div>
    <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="contact">Contact:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="contact" id="contact" placeholder="Enter Contact No" value="<?php echo $contact; ?>">
      </div>
    </div>
	<div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="workorderno">Work Order No:</label>
<div class="col-xs-6">          
        <input type="text" class="form-control" name="workorderno" id="workorderno" placeholder="Enter Workorder No" value="<?php echo $workorderno; ?>">
      </div>
    </div>
	<div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="workorderamount">Work Order Amount:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="workorderamount" id="workorderamount" placeholder="Enter Work Order Amount" value="<?php echo $workorderamount; ?>">
      </div>
    </div>
	<div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="rate">Rate:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="rate" id="rate" placeholder="Enter Rate" value="<?php echo $rate; ?>">
      </div>
    </div>
	
    <div class="col-xs-16 form-group">        
      <div class="col-sm-offset-2 col-xs-8">
	  <?php
	 
	  if($this->pick==''){ ?>
        <button type="submit" class="btn btn-info form-control" value="submit" name="submit">Submit</button>
	  <?php } else { ?>
	  <input type="hidden" value="<?php echo $this->content[0]['id']; ?>" name="id" >
	  <button type="submit" class="btn btn-info form-control" value="update" name="submit">Update</button>
	  <?php } ?>
		
      </div>
    </div>
   
  </form>
  
  </div>
  

  </div>
  </div>
</div>
<script>
shortcut.add("Ctrl+Shift+X",function() {
	alert("Hi there!");
});
</script>
<!-- <script>
 $('.form-control').keydown(function (e) {
	 //alert("inside form control!");
         if (e.which === 13) {
			// alert("Hello!");
             var index = $('.form-control').index(this) + 1;
			// alert("I am an alert box!");
             $('.form-control').eq(index).focus();
			// alert("alert box!");
			//alert(this.type);
			if(this.type!="submit"){
			 e.preventDefault();
			}
         }
     });
	 </script>
	<script>
  $(function () {
    $('.form-control').on('keydown', 'input', function (event) {
      if (event.which == 13) {
        $(this).next('input').focus();
        event.preventDefault();
      }
    });
  });
</script>-->