<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
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
.account-box #error
{
    color: #F36;
}
</style>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="account-box">
           <div id="error"><strong> <center><?php echo $this->msg; ?></center></strong></div>
                <form class="form-signin" action="<?php echo URL; ?>register/run" method="post">
                 <center> <h3>Register Here</h3></center>
                 <div class="or-box"> 
                </div>
                <div class="form-group">
                    <input data-validation="length" data-validation-length="min4" data-validation-error-msg="First Name must be of 4 characters" type="text" id="fname" name="fname" type="text" class="form-control" placeholder="* Enter First Name" value="<?php echo $this->fname; ?>">
                </div>
                <div class="form-group">
                    <input data-validation="length" data-validation-length="min4" data-validation-error-msg="Last Name must be of 4 characters" type="text" id="lname" name="lname" type="text" class="form-control" placeholder="* Enter Last Name" value="<?php echo $this->lname; ?>">
                </div>
                <div class="form-group">
                    <input data-validation="length alphanumeric" data-validation-length="min4" data-validation-error-msg="User Name must be of 4 characters and No space allowed" id="username" name="username" type="text" class="form-control" placeholder="* Enter User Name" value="<?php echo $this->username; ?>">
                </div>
                <div class="form-group">
                    <input data-validation="email" data-validation-length="min4" data-validation-error-msg="Please enter a valid emailid" id="email" name="email" type="text" class="form-control" placeholder="* Enter Email" value="<?php echo $this->email; ?>">
               
                </div>
                <div class="form-group">
                   <input id="password" name="password" type="password" class="form-control" placeholder="* Enter Password"data-type="password" value="<?php echo $this->password; ?>">
                </div>
                <div class="form-group">
                   <input id="confirm_password" name="confirm_password" type="password" class="form-control" placeholder="* Confirm Password"data-type="password">
                   <span id='message'></span>
                </div>
                
                 <div class="form-group">
               <input id="mobno" name="mobno" type="number" class="form-control" value="91" placeholder="* Enter MobileNo">
    
               <span id='msg'></span>
                </div>
                <div class="form-group">
              <input id="userType" type="hidden" name="userType" class="form-control" value="dealer">
                </div>
                <div class="form-group">
              <input id="parent_id" type="hidden" name="parent_id" class="form-control">
                </div>
                <input type="submit" class="btn btn-lg btn-block purple-bg" value="Signup">
                       </form>
                
               
                <div class="or-box row-block">
                    <div class="row">
                    <center>
                        <div class="col-md-12 row-block">
                            <a id="login-sign-up" href="<?php echo URL; ?>index/index">Sign In</a> 
                             
                        </div>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br />
<br />
<br />
<script>
$('#password, #confirm_password').on('keyup', function () {
  if ($('#password').val() == $('#confirm_password').val()) {
    $('#message').html('Matching').css('color', 'green');
  } else 
    $('#message').html('Not Matching').css('color', 'red');
});
$('#mobno').on('keyup', function () {
  if ($('#mobno').val() == '') {
    $('#msg').html('Enter a Valid Mobile No').css('color', 'red');
  } else 
    $('#msg').html('An verification OTP will be send to your No.').css('color', 'green');
});
</script>
<!--<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
<link rel="stylesheet" href="<?php// echo URL; ?>public/css/style-login.css">
<div class="login-wrap">
	<div class="login-html">
    <label for="fname" class="label" style="color:#F00"><?php// echo $this->msg; ?></label><br>
	<input id="tab-1" type="radio" name="tab" class="sign-in"><label for="tab-1" class="tab"></label>
    <input id="tab-2" type="radio" name="tab" class="sign-up" checked><label for="tab-2" class="tab">Sign up</label>
     
		<div class="login-form">
			<div class="sign-up-htm">
            <form action="<?php// echo URL; ?>register/run" method="post">
            	<div class="group">
					<label for="fname" class="label">First Name</label>
					<input id="fname" name="fname" type="text" class="input" value="<?php// echo $this->fname; ?>">
				</div>
                <div class="group">
					<label for="lname" class="label">Last Name</label>
					<input id="lname" name="lname" type="text" class="input" value="<?php// echo $this->lname; ?>">
				</div>
				<div class="group">
					<label for="username" class="label">Username</label> 
					<input id="username" name="username" type="text" class="input" value="<?php// echo $this->username; ?>">
				</div>
				<div class="group">
					<label for="password" class="label">Password</label>
					<input id="password" name="password" type="password" class="input" data-type="password" value="<?php// echo $this->password; ?>">
				</div>
				
				<div class="group">
					<label for="email" class="label">Email Address</label>
					<input id="email" name="email" type="text" class="input" value="<?php// echo $this->email; ?>">
				</div>
                <div class="group">
					<label for="mobno" class="label">Mobile No</label>
					<input id="mobno" name="mobno" type="text" class="input" value="91">
				</div>
                <div class="group">
                	<input id="userType" type="hidden" name="userType" class="input" value="dealer">
                </div>
				<div class="group">
					<input type="submit" class="button" value="Sign Up">
				</div>
                </form>
				<div class="hr"></div>
                <div class="foot-lnk">
				<a href="<?php// echo URL; ?>index/index" style="color:#F33">Login</a>
                </div>
			</div>
            </div>
            </div>
            </div>
            <br>
		  <br>
		  <br>
		  <br>
		  <br>
            <!-- Top content -->
               <!-- Top content 
			   <div style="background:lightblue" class="container">
        <div class="top-content">
            <div class="inner-bg">
                <div class="container"> 
               <div style="background-color:#F63;"><center><p style="text-height:font-size:18px;"<?php//echo $this->msg; ?></p></center></div>  
                      	
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                          <center> <h1>SIGNUP FORM(ADD DEALER)</h1></center>
                        </div>
                    </div>                    
                  
                        <div class="col-sm-6 col-sm-offset-3 text">
                        <div class="form-box">
                            <div class="form-top">
                                <div class="form-top-left">
                                    <h3>Sign up now</h3>
                                    <p>Enter the dealer details to get instant access:</p>
                                </div>
                                <div class="form-top-right">
                                    <i class="fa fa-pencil"></i>
                                </div>
                            </div>
                            <div class="form-bottom">
                            
                                <form role="form" action="<?php//echo URL; ?>register/run" method="post" class="registration-form" name="regform">
                               
                                    <div class="form-group">
                                        <label class="sr-only" for="form-first-name">First name</label>
                                        <input type="text" name="fname" placeholder="First name..." class="form-first-name form-control" id="fname" value="<?php//echo $this->fname; ?>" required="required">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="form-last-name">Last name</label>
                                        <input type="text" name="lname" placeholder="Last name..." class="form-last-name form-control" id="lname" value="<?php//echo $this->lname; ?>" required="required">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="form-email">Email</label>
                                        <input type="email" name="email" placeholder="Email..." class="form-email form-control" id="email" value="<?php//echo $this->email; ?>" required="required">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="form-mobile-no">Mobile No</label>
                                        <input type="text" name="mobno" placeholder="Mobile No..." class="bfh-phone form-mobno form-control" value="91" id="mobno" value="<?php//echo $this->mobno; ?>" required="required">
                                    </div>
                                        <div class="form-group">
                                        <label class="sr-only" for="form-username">user name</label>
                                        <input type="text" name="username" placeholder="user name..." class="form-username form-control" id="mobno" value="<?php//echo $this->username; ?>" required>
                                    </div>
                                        <div class="form-group">
                                        <label class="sr-only" for="form-password">Password</label>
                                        <input type="password" name="password" placeholder="Password..." class="form-password form-control" id="mobno" required="required">
                                    </div>
									
                                      <div class="form-group">
                                        <label class="sr-only" for="form-password">user Type</label>
                                        <input type="hidden" name="userType" placeholder="userType..." class="form-userType form-control" id="userType" value="dealer" required="required" readonly="readonly">
                                    </div>
						            <button type="submit" class="btn btn-success">Sign me up!</button>
                                    <br><br>
                                    <a class="btn btn-primary" href="<?php//echo URL; ?>index/index">Sign In</a>
                                    <a class="btn btn-primary" href="<?php//echo URL; ?>register/forgotpassword" style="float:right;">Forgot Password</a>
                                   
                                </form>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
        </div> 
	</div>-->
	
        
		  
