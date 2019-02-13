
<p><a href="<?php echo URL; ?>master/">Master >></a><a href="<?php echo URL; ?>master/usercontrol">User Control >> </a>Edit</p>
<a href="<?php echo URL; ?>master/usercontrol" class="btn btn-info" role="button">Back</a>

<?php
 // $VehicleNO=$this->pick;
  ?>
  <?php
echo $Branch=$this->content[0]['Branch'];
														$FirstName=$this->content[0]['FirstName'];
														$LastName=$this->content[0]['LastName'];
														$UserName=$this->content[0]['UserName'];
														$Password=$this->content[0]['Password'];
														$ConfirmPassword=$this->content[0]['ConfirmPassword'];
														$MobileNumber=$this->content[0]['MobileNumber'];
														$EmailId=$this->content[0]['EmailId'];
														
														?>
<div class="container">
    <div class="row clearfix">
        <div class="col-md-12 column">
<center><h1>User Control</h1></center>
  
  <form class="form-horizontal" action="<?php echo URL; ?>master/edit_submit_usercontrol" method="post">
  <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="branch">Branch:</label>
      <div class="col-xs-6"> 
 <select class="form-control" name="Branch" value="<?php echo $this->content[0]['Branch']; ?>">	
<option>43535</option>
<option>2676</option> 
<option>Vehicle Name</option> 
<option>Vehicle Name</option> 
<option>Vehicle Name</option> 
        </select>
      </div>
    </div>
    <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="FirstName">First Name:</label>
      <div class="col-xs-6">
        <input type="text" class="form-control" name="FirstName" id="FirstName" placeholder="Enter First Name" value="<?php echo $this->content[0]['FirstName']; ?>">
      </div>
    </div>
    <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="LastName">Last Name:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="LastName" id="LastName" placeholder="Enter Last Name" value="<?php echo $this->content[0]['LastName']; ?>">
      </div>
    </div><div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="UserName">User Name:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="UserName" id="UserName" placeholder="Enter User Name" value="<?php echo $this->content[0]['UserName']; ?>">
      </div>
    </div>
	<div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="Password">Password:</label>
      <div class="col-xs-6">          
        <input type="password" class="form-control" name="Password" id="Password" placeholder="Enter Password" value="<?php echo $this->content[0]['Password']; ?>">
      </div>
    </div>
	<div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="ConfirmPassword">Confirm Password:</label>
      <div class="col-xs-6">          
        <input type="password" class="form-control" name="ConfirmPassword" id="ConfirmPassword" placeholder="Enter Confirm Password" value="<?php echo $this->content[0]['ConfirmPassword']; ?>">
      </div>
    </div>
	<div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="MobileNumber">Mobile Number:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="MobileNumber" id="MobileNumber" placeholder="Enter Mobile Number" value="<?php echo $this->content[0]['MobileNumber']; ?>">
      </div>
    </div>
	<div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="EmailId">Email-Id:</label>
      <div class="col-xs-6">          
        <input type="email" class="form-control" name="EmailId" id="EmailId" placeholder="Enter Email Id" value="<?php echo $this->content[0]['EmailId']; ?>">
      </div>
    </div>
	
	<div class="form-group">        
      <div class="col-sm-offset-2 col-sm-12">
        <div class="checkbox">
          <label>Rules <input type="checkbox"></label>
        </div>
      </div>
	 <div class="w3-row">
  <div class="w3-container w3-third">
	  <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox"> Corporate</label>
        </div>
      </div>
	  <div class="col-sm-offset-3 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox">Super Admin</label><br>
		  <label><input type="checkbox">Branch Admin</label><br>
		  <label><input type="checkbox">WO Admin</label><br>
		  <label><input type="checkbox">Customer Admin</label>
        </div>
      </div>
	  <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox"> Employee</label>
        </div>
      </div>
	  <div class="col-sm-offset-3 col-sm-12">
        <div class="checkbox">
          <label><input type="checkbox">Employee Admin</label><br>
		  <label><input type="checkbox">Employee Payment Admin</label><br>
		  <label><input type="checkbox">Payroll Admin</label><br>
		  <label><input type="checkbox">Payroll Super Admin</label><br>
		  <label><input type="checkbox">Employee Super Admin</label><br>
		  <label><input type="checkbox">Attendance Super Admin</label>
		  
        </div>
      </div>
	  <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox"> Finance</label>
        </div>
      </div>
	  <div class="col-sm-offset-3 col-sm-12">
        <div class="checkbox">
          <label><input type="checkbox">Bill Generator Super Admin</label><br>
		  <label><input type="checkbox">Bill Generator Admin</label><br>
		  <label><input type="checkbox">Finance Due Admin</label><br>
		  <label><input type="checkbox">Voucher Payment Approver</label><br>
		  <label><input type="checkbox">Finance Admin</label><br>
		  <label><input type="checkbox">Bill Approver</label>
		  
        </div>
      </div>
	  <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox"> Fuel</label>
        </div>
      </div>
	  <div class="col-sm-offset-3 col-sm-12">
        <div class="checkbox">
          <label><input type="checkbox">Fuel Super Admin</label><br>
		  <label><input type="checkbox">Fuel Admin</label>
        </div>
      </div>
	  
   </div>


  <div class="w3-container w3-third">
  <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox"> Inventry</label>
        </div>
      </div>
	  <div class="col-sm-offset-3 col-sm-12">
        <div class="checkbox">
          <label><input type="checkbox">Inventory Admin</label><br>
		  <label><input type="checkbox">Store Admin</label><br>
		  <label><input type="checkbox">Catalog Master Admin</label>
        </div>
      </div>
	  <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox"> Job Card</label>
        </div>
      </div>
	  <div class="col-sm-offset-3 col-sm-12">
        <div class="checkbox">
          <label><input type="checkbox">Job Card Admin</label><br>
		  <label><input type="checkbox">Job Card Super Admin</label><br>
		  <label><input type="checkbox">Job Admin</label>
        </div>
      </div>
	  <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox">Operational</label>
        </div>
      </div>
	  <div class="col-sm-offset-3 col-sm-12">
        <div class="checkbox">
          <label><input type="checkbox">Operational Manager</label> 
        </div>
      </div>
	  <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox"> Sub Contract</label>
        </div>
      </div>
	  <div class="col-sm-offset-3 col-sm-12">
        <div class="checkbox">
          <label><input type="checkbox">Super Admin</label><br>
		  <label><input type="checkbox">Payment Admin</label><br>
		  <label><input type="checkbox">Sub Contract Admin</label>
        </div>
      </div>
	  <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox"> Trip Sheet</label>
        </div>
      </div>
	  <div class="col-sm-offset-3 col-sm-12">
        <div class="checkbox">
          <label><input type="checkbox">Trip Sheet Approval</label><br>
		  <label><input type="checkbox">Trip Sheet Admin</label>
		 
        </div>
      </div>
  </div>
  
 
  <div class="w3-container w3-third">
  <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox"> Tyre</label>
        </div>
      </div>
	  <div class="col-sm-offset-3 col-sm-12">
        <div class="checkbox">
          <label><input type="checkbox">Tyre Super Admin</label><br>
		  <label><input type="checkbox">Tyre Inspection</label><br>
		  <label><input type="checkbox">Tyre Admin</label>
        </div>
      </div>
	  <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox"> Vehicles</label>
        </div>
      </div>
	  <div class="col-sm-offset-3 col-sm-12">
        <div class="checkbox">
          <label><input type="checkbox">Document Admin</label><br>
		  <label><input type="checkbox">Finance Due Super Admin</label><br>
		  <label><input type="checkbox">Certificate Renewal Admin</label><br>
		  <label><input type="checkbox">Renewal Super Admin</label><br>
		  <label><input type="checkbox">GPS Admin</label><br>
		  <label><input type="checkbox">Renewal Payment Admin</label><br>
		  <label><input type="checkbox">Vehicle Admin</label>
        </div>
      </div>
	  <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox">Vendor</label>
        </div>
      </div>
	  <div class="col-sm-offset-3 col-sm-12">
        <div class="checkbox">
          <label><input type="checkbox">Vendor Due Admin</label> <br>
		  <label><input type="checkbox">Vendor Payment Admin</label> <br>
		  <label><input type="checkbox">Vendor Due Super Admin</label> <br>
		  <label><input type="checkbox">Vendor Super Admin</label> <br>
		  <label><input type="checkbox">Vendor Admin</label> 
        </div>
      </div>
	  
  </div>
  </div>
  </div>
  
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <?php
	 
	  if($this->pick==''){ ?>
        <button type="submit" class="btn btn-default" value="submit" name="submit">Submit</button>
	  <?php } else { ?>
	  <input type="hidden" value="<?php echo $this->content[0]['id']; ?>" name="id">
	  <button type="submit" class="btn btn-default" value="update" name="submit">Update</button>
	  <?php } ?>
		
      </div>
    </div>
  </form>
  </div>
 </div>
</div>

