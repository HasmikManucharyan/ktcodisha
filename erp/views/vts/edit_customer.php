 <!--  <style>
.account-box
{
    border-top: 2px solid #27A2BD;
    z-index: 3;
    font-size: 12px !important;
    font-family: "Helvetica Neue" ,Helvetica,Arial,sans-serif;
    background-color: #ffffff;
    padding: 20px;
}
.form-control{
  background-color : #D3D3D3;
}

.forgotLnk
{
    margin-top: 10px;
    display: block;
}

.purple-bg
{
    background-color: #27A2BD;
    color: #000;
}
.or-box
{
    position: relative;
    border-top: 1px solid #dfdfdf;
    padding-top: 20px;
    margin-top:20px;
}
.or
{
    color: #666666;
    background-color: #ffffff;
    position: absolute;
    text-align: center;
    top: -8px;
    width: 50px;
    left: 120px;
}
.account-box .btn:hover
{
    color: #fff;
}

.btn-circle.btn-lg {
  width: 50px;
  height: 50px;
  padding: 10px 16px;
  font-size: 18px;
  line-height: 1.33;
  border-radius: 25px;
}

</style> <ul class="breadcrumb">
  <li><a href="#">Home</a></li>
  <li><a href="<?php// echo URL; ?>vts">VTS</a></li>
  <li><a href="<?php// echo URL; ?>vts/customer">Customer</a></li>
  <li>Add/Edit</li>
  <li class="pull-right"><a href="<?php// echo URL; ?>vts/customer">Back</a></li>
</ul> -->
<style>
.account-box #error
{
    color: #F36;
}
</style>
 <?php
 //$id=$this->content['id'];
														$name=$this->content[0]['fname'];
														$username=$this->content[0]['username'];
														$email=$this->content[0]['email'];
														$password=$this->content[0]['password'];
														?>
                                                        <div class="container">
	            <div class="row">
                 <div class="col-md-12">
  <div class="account-box">
  
 <span style="font-size:18px;"><strong>Add /Edit Customer</strong></span><a href="<?php echo URL; ?>vts/customer"><button id="btnAdd" type="button" class="btn btn-info pull-right"><i class="fa fa-angle-left"></i> Back</button></a>
 <br clear="all" />
<div class="or-box">
 </div>
 <div id="error">
 <strong><center><p class="msg" style="color:blue;"><?php echo $this->msg; ?></p></center></strong>
</div>


 

<!--<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="account-box">-->
                <form action="<?php echo URL; ?>vts/edit_submit_customer" method="post">
                <div class="form-group col-xs-6">
                <label class="control-label col-xs-6" for="name">Name:</label>
      <div class="col-xs-6">          
        <input data-validation="length" data-validation-length="min4" data-validation-error-msg="Name must be of 4 characters" type="text" class="form-control" name="name" id="name" placeholder="Enter name" value="<?php echo $name; ?>">
      </div>
    </div>
    <div class="form-group col-xs-6">
                <label class="control-label col-xs-6" for="name">Username:</label>
      <div class="col-xs-6">          
        <input data-validation="length alphanumeric" data-validation-length="min4" data-validation-error-msg="Username must be of 4 characters" type="text" class="form-control" name="username" id="username" placeholder="Enter Username" value="<?php echo $username; ?>">
      </div>
    </div>
   <div class="form-group col-xs-6">
                <label class="control-label col-xs-6" for="mobno">Mobile No:</label>
      <div class="col-xs-6">          
        <input data-validation="numbers" data-validation-length="min10" data-validation-error-msg="Please Enter a valid Mobile No" type="number" class="form-control" name="mobno" id="mobno" placeholder="Enter Mobile No" value="<?php echo $mobno; ?>">
      </div>
    </div>
    <div class="form-group col-xs-6">
                <label class="control-label col-xs-6" for="email">Email:</label>
      <div class="col-xs-6">          
        <input data-validation="email" data-validation-length="min4" data-validation-error-msg="Please enter a valid emailid" class="form-control" type="email" name="email" id="email" placeholder="Enter Email" value="<?php echo $email; ?>">
      </div>
    </div>
    <?php if($this->content[0]['admin_id']==""){ ?>
     <div class="form-group col-xs-6">
                <label class="control-label col-xs-6" for="hashedpassword">Password:</label>
      <div class="col-xs-6">          
        <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password" value="<?php echo $password; ?>">
      </div>
    </div>
    <div class="form-group col-xs-6">
                <label class="control-label col-xs-6" for="confirmpassword">Confirm Password:</label>
      <div class="col-xs-6">          
        <input type="password" class="form-control" name="confirmpassword" id="confirmpassword" placeholder="Enter Confirm Password" value="<?php echo $confirmpassword; ?>">
      </div>
    </div>
    <span id='message'></span>
    <?php } else {?>
    <?php } ?>
    <div class="form-group col-xs-6">
               
      <div class="col-xs-6">          
        <input type="hidden" class="form-control" name="userType" id="userType" placeholder="Enter userType" value="customer">
      </div>
    </div>
     <div class="col-xs-16 form-group">        
      <div class="col-sm-offset-2 col-xs-8">  
              <?php
	 
	  if($this->pick==''){ ?>
         <button type="submit" class="btn btn-info form-control" value="submit" name="submit" style="background-color:#008000">Submit</button>
	  <?php } else { ?>
	  <input type="hidden" value="<?php echo $this->content[0]['admin_id']; ?>" name="id">
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
<script>
$('#password, #confirmpassword').on('keyup', function () {
  if ($('#password').val() == $('#confirmpassword').val()) {
    $('#message').html('Matching').css('color', 'green');
  } else 
    $('#message').html('Not Matching').css('color', 'red');
});
</script>
