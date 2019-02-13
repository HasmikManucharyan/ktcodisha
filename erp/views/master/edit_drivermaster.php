<!-- <ul class="breadcrumb">
  <li><a href="#">Home</a></li>
  <li><a href="<?php// echo URL; ?>master/drivermaster">Driver Master</a></li>
  <li>Add/Edit</li>
  <li class="pull-right"><a href="<?php// echo URL; ?>master/drivermaster">Back</a></li>
</ul> -->
<style>
.error-msg {
    color: red;

}
</style>
  <?php
 // print_r($this->content);
  $obj=json_decode($this->content[0]['attributes']);
  $name=$this->content[0]['name'];
  $uniqueId=$this->content[0]['uniqueid'];
  $fathername=$obj->{"fathername"};
  $address=$obj->{"address"};
  $city=$obj->{"city"};
  $state=$obj->{"state"};
  $phoneno=$obj->{"phoneno"};
  $dob=$obj->{"dob"};
  $dateofjoining=$obj->{"dateofjoining"};
  $licenseno=$obj->{"licenseno"};
  $licensetype=$obj->{"licensetype"};
  $issuedate=$obj->{"issuedate"};
  $authority=$obj->{"authority"};
  $expirydate=$obj->{"expirydate"};
  $aadhaarno=$obj->{"aadhaarno"};
  $bloodgroup=$obj->{"bloodgroup"};
  $vehicleno=$obj->{"vehicleno"};
  $salary=$obj->{"salary"};
  
	if($this->pick==''){
	
			$expirydate=date('Y-m-d');
			$dob=date('Y-m-d');
			$dateofjoining=date('Y-m-d');
			$issuedate=date('Y-m-d');
	
	}
	?>
	<div class="container">
	            <div class="row">
                 <div class="col-md-12">
  <div class="account-box">
  
 <span style="font-size:18px;"><strong>Add /Edit Driver</strong></span><a href="<?php echo URL; ?>master/drivermaster"><button id="btnAdd" type="button" class="btn btn-info pull-right"><i class="fa fa-angle-left"></i> Back</button></a>
 <br clear="all" />
<div class="or-box">
 </div>									                            
<form  action="<?php echo URL; ?>master/edit_submit_drivermaster" method="post" enctype="multipart/form-data">

    <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="name">Name:</label>
      <div class="col-xs-6">
        <input data-validation="length" data-validation-length="min4" data-validation-error-msg="Name must be of 4 characters" class="form-control" name="name" id="name" placeholder="Enter name" value="<?php echo $name; ?>">

      </div>
    </div>
    <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="uniqueid">Unique Id:</label>
      <div class="col-xs-6">
        <input type="text" class="form-control" name="uniqueid" id="uniqueid" placeholder="Enter Unique Id" value="<?php echo $uniqueId; ?>">

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
        <input type="text" class="form-control" name="phoneno" id="phoneno" placeholder="Enter Phone No" value="<?php echo $phoneno; ?>">

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
      <label class="control-label col-xs-6" for="licenseno">License No:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" data-validation="length" data-validation-length="min4" data-validation-error-msg="License No must be of 4 characters" name="licenseno" id="licenseno" placeholder="Enter License No" value="<?php echo $licenseno; ?>" >
      </div>
	  </div>
      
      <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="licensetype">License Type:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="licensetype" id="licensetype" placeholder="Enter License Type" value="<?php echo $licensetype; ?>" >
      </div>
	  </div>
      
      <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="issuedate">Issue Date:</label>
      <div class="col-xs-6">          
        <input type="date" class="form-control" name="issuedate" id="issuedate" placeholder="Enter Issue Date" value="<?php echo $issuedate; ?>" >
      </div>
	  </div>
      
      <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="expirydate">Expiry Date:</label>
      <div class="col-xs-6">          
        <input type="date" class="form-control" name="expirydate" id="expirydate" placeholder="Enter expirydate" value="<?php echo $expirydate; ?>">
		
      </div>
	  </div>
      
      <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="authority"> Authority:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="authority" id="authority" placeholder="Enter authority" value="<?php echo $authority; ?>" >
      </div>
      </div>
      
      <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="aadhaarno">Aadhaar No:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="aadhaarno" id="aadhaarno" placeholder="Enter aadhaarno" value="<?php echo $aadhaarno; ?>">
		
      </div>
	  </div>
      
	<div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="bloodgroup">Blood Group:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="bloodgroup" id="bloodgroup" placeholder="Enter bloodgroup" value="<?php echo $bloodgroup;?>" >

      </div>
	  </div>
      
	  <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="vehicleno">Vehicle No:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="vehicleno" for="vehicleno" id="vehicle" placeholder="Enter Vehicle No" value="<?php echo $vehicleno; ?>" >
      </div>
    </div>
	  
	 <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="salary">salary:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="salary" id="salary" placeholder="Enter salary" value="<?php echo $salary; ?>" >
	
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
<script>
shortcut.add("Ctrl+Shift+X",function() {
	alert("Hi there!");
});
</script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script>

  $.validate({
    //lang: 'english'
  });

</script>
<!--<script>
    $(document).ready(function (){
    $('form > input').keyup(function() {

     var empty = false;
      $('form > input').each(function() {
        if ($(this).val() == '') {
            empty = true;
        }
     });

      if (empty) {
         $('#submit').attr('disabled', 'disabled');
      } else {
         $('#submit').removeAttr('disabled'); 
      }
   });
});        
</script>
<script>
$('input:submit').click(function(e)
{
 if(!$.validate())
  e.preventDefault();
});
</script>-->
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