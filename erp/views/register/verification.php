<div class="container be-detail-container">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <br>
            <img src="<?php echo URL; ?>public/images/varification.png" class="img-responsive" style="width:100px; height:100px;margin:0 auto;"><br>
            
            <h1 class="text-center">Verify your mobile number</h1><br>
            <p class="lead" style="align:center"></p><p> Thanks for giving your details. An OTP has been sent to your Mobile Number. Please enter the 4 digit OTP below for Successful Registration</p>  <p></p>
        <br>
       
            <form method="post" id="veryfyotp" action="<?php echo URL; ?>register/verification">
             
                <div class="row">                    
                <div class="form-group col-sm-8">
                	 <span style="color:red;"></span>  
                      <input type="hidden" value="<?php echo $this->returnId; ?>" name="admin_id">
                     <input type="hidden" value="<?php echo $this->content; ?>" name="code">
                
					 <input type="text" class="form-control" name="otp" placeholder="Enter your OTP number" required="">
                     
                </div>
                 <div class="col-sm-offset-2 col-xs-8">
	 
         <button type="submit" class="btn btn-primary  pull-right col-sm-3">Verify</button>
         
          
                </div>
                 
            </form>
        <br><br>
        </div>
    </div>        
</div>
<style>
.be-detail-header { border-bottom: 1px solid #edeff2; margin-bottom: 50px; }
</style>
