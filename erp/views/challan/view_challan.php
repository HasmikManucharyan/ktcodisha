 <style>
.account-box
{
    border: 2px solid #000;
    z-index: 2;
	width: 60%;
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
<style>
.account-box #error
{
    color: #F36;
}
 
input[type=text] {
    width: 80%;
    
   	border: 2px red;
   	border-bottom: 1px solid black
   
}
</style>
</style>
 
                                                        <div class="container">
	            <div class="row">
                 <div class="col-md-12">
                 <center>
  <div class="account-box">
  <center><button type="button" class="btn btn-default">Loading Advice</button></center>
 <span style="font-size:18px;"><strong><img src="<?php echo URL;?>public/images/KTC_NEW.png" /></strong></span>
 <center><p>Transport Contractor and Commission Agent</p></center>
 <p>NEAR FORTILIZER GODOWN, GOUR PARA, SARBAHAL</p>
 <p>DIST.: JHARSUGUDA</p>
 <p>Mobile: 9937097272, 7735097272</p>
 <div>
 <span style="float:left">Sl No. : A - 24500</span>
 <span style="float:right">Date: <u><?php echo date('Y-m-d'); ?></u></span>
 </div><br />
 <div style="width:100%">
 <P align="left">To,<br />
 &nbsp;&nbsp;&nbsp;&nbsp;VEDANTA LIMITED, JHARSUGUDA<br /><br />
 We are sending lorry no : <u><?php echo $this->content[0]['deviceid']; ?></u> for loading of <u> ASH / BOTTOM ASH / SOLID WASTE </u><br />
 From : <input type="text"><br />
 To : <input type="text"><br />
 Qnty : <input type="text"><br />
 Owner's Name : <input type="text"><br />
 Driver's Name : <input type="text"><br />
 DL No : <input type="text"><br />

<span style="float:left">Note: &nbsp;</span><br />
 <br />
 <br />

<span style="float:right"><u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u></span><br />
<span style="float:right">For KALYANI TRANSCO</span><br />
 </strong>
 <br clear="all" />
 <div class="or-box">
 </div>
<p>Please check all the documents of the truck before loading</p>
</div>
</div>
</div>
<br />
<br />
<br />
<center><button class="btn btn-default" onclick="myFunction()">Print this Challan</button></center>
<script>
function myFunction() {
    window.print();
}
</script>
</center>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script>

  $.validate({
    //lang: 'english'
  });

</script>
