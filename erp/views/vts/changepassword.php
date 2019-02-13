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
                                                        <div class="container">
	            <div class="row">
                 <div class="col-md-12">
  <div class="account-box">
  
 <span style="font-size:18px;"><strong>Change Password</strong></span><a href="<?php echo URL; ?>vts/settings"><button id="btnAdd" type="button" class="btn btn-info pull-right"><i class="fa fa-angle-left"></i> Back</button></a>
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
                <form action="<?php echo URL; ?>vts/submit_changepassword" method="post">
                <div class="form-group col-xs-6">
                <label class="control-label col-xs-6" for="oldpassword">Old Password</label>
      <div class="col-xs-6">          
        <input data-validation="length" data-validation-length="min4" type="text" class="form-control" name="oldpassword" id="oldpassword" placeholder="Enter Your Old Password" value="<?php echo $oldpassword; ?>">
      </div>
    </div>
    <div class="form-group col-xs-6">
                <label class="control-label col-xs-6" for="newpassword">New Password:</label>
      <div class="col-xs-6">          
        <input data-validation="length" data-validation-length="min6" type="text" class="form-control" data-validation-error-msg="Password must be of 6 characters" name="newpassword" id="newpassword" placeholder="Enter Your New Password" value="<?php echo $newpassword; ?>">
      </div>
    </div>
                <div class="form-group col-xs-6">
                <label class="control-label col-xs-6" for="confirmpassword">Confirm Password:</label>
      <div class="col-xs-6">          
        <input data-validation="length" data-validation-length="min6" type="text" class="form-control" name="confirmpassword" id="confirmpassword" placeholder="Enter Confirm Password" value="<?php echo $confirmpassword; ?>">
      </div>
    </div>
    <span id='message'></span>
   
     <div class="col-xs-16 form-group">        
      <div class="col-sm-offset-2 col-xs-8">  
            
	  <input type="hidden" value="<?php echo Session::get('admin_id'); ?>" name="id">
	   <button type="submit" class="btn btn-info form-control" value="submit" name="submit" style="background-color:#008000">Submit</button>
	 
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
$('#newpassword, #confirmpassword').on('keyup', function () {
  if ($('#newpassword').val() == $('#confirmpassword').val()) {
    $('#message').html('Matching').css('color', 'green');
  } else 
    $('#message').html('Not Matching').css('color', 'red');
});
</script>