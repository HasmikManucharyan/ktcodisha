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

</style>
<div class="container">
    <div class="row">
   
        <div class="col-md-4 col-md-offset-4">
            <div class="account-box">
           
                <form class="form-signin" action="<?php echo URL; ?>register/request" method="post">
                 <center> <h3>Forgot Password</h3></center>
                        
                    
                     <div class="or-box">
                    
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Email" name="email" id="email" required autofocus />
                </div>
                
               
                <input type="submit" class="btn btn-lg btn-block purple-bg" value="Submit" name="submit" id="submit">
                       </form>
                
               
                <div class="or-box row-block">
                    <div class="row">
                    <center>
                        <div class="col-md-12 row-block">
                            <a id="login-sign-up" href="<?php echo URL; ?>index/index">Sign in</a> 
                            
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




