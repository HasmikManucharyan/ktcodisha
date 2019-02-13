
<p><a href="<?php echo URL; ?>master/">Master >></a><a href="<?php echo URL; ?>master/employee">Employee >></a>Edit Salary Master</p>
<a href="<?php echo URL; ?>master/employee" class="btn btn-info" role="button">Back</a>

<?php
 // $VehicleNO=$this->pick;
  ?>
  <?php
 $SalaryCode=$this->content[0]['SalaryCode'];
														$Date=$this->content[0]['Date'];
														$EmployeeName=$this->content[0]['EmployeeName'];
														$EmployeeCode=$this->content[0]['EmployeeCode'];
														$DateOfJoin=$this->content[0]['DateOfJoin'];
														$BasicSalary=$this->content[0]['BasicSalary'];
														$Housing=$this->content[0]['Housing'];
														$Food=$this->content[0]['Food'];
														$OtherAllowance=$this->content[0]['OtherAllowance'];
														$Total=$this->content[0]['Total'];
														$EffectFrom=$this->content[0]['EffectFrom'];
														$EffectTo=$this->content[0]['EffectTo'];
														
														
														?>
<center><h1>Customer</h1></center>
<div class="container">
    <div class="row clearfix">
        <div class="col-md-12 column">
  <form class="form-horizontal" action="<?php echo URL; ?>master/edit_submit_salarymaster" method="post">
 
 <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="salcode">Salary Code:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="SalaryCode" id="SalaryCode" placeholder="Enter Salary Code" value="<?php echo $this->content[0]['SalaryCode']; ?>">
      </div>
    </div>
   <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="date"> Date:</label>
      <div class="col-xs-6">          
        <input type="date" class="form-control" name="Date" id="Date" placeholder="Enter  Date" value="<?php echo $this->content[0]['Date']; ?>">
      </div>
    </div>
    <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="employeenm">Employee Name:</label>
      <div class="col-xs-6">
        <input type="text" class="form-control" name="EmployeeName" id="EmployeeName" placeholder="Enter Employee Name" value="<?php echo $this->content[0]['EmployeeName']; ?>">
      </div>
    </div>
     <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="employeecode">Employee Code:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="EmployeeCode" id="EmployeeCode" placeholder="Enter Employee Code" value="<?php echo $this->content[0]['EmployeeCode']; ?>">
      </div>
    </div>
    <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="datejoin"> Date Of Join:</label>
      <div class="col-xs-6">          
        <input type="date" class="form-control" name="DateOfJoin" id="DateOfJoin" placeholder="Enter  Date Of Join" value="<?php echo $this->content[0]['DateOfJoin']; ?>">
      </div>
    </div>
     <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="sal">Basic Salary:</label>
      <div class="col-xs-6">
        <input type="text" class="form-control" name="BasicSalary" id="BasicSalary" placeholder="Enter Basic Salary" value="<?php echo $this->content[0]['BasicSalary']; ?>">
      </div>
    </div>
     <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="housing">Housing:</label>
      <div class="col-xs-6">
        <input type="text" class="form-control" name="Housing" id="Housing" placeholder="Enter Housing" value="<?php echo $this->content[0]['Housing']; ?>">
      </div>
    </div>
     <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="food">Food:</label>
      <div class="col-xs-6">
        <input type="text" class="form-control" name="Food" id="Food" placeholder="Enter Food" value="<?php echo $this->content[0]['Food']; ?>">
      </div>
    </div>
     <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="otherallw">Other Allowance:</label>
      <div class="col-xs-6">
        <input type="text" class="form-control" name="OtherAllowance" id="OtherAllowance" placeholder="Enter Other Allowance" value="<?php echo $this->content[0]['OtherAllowance']; ?>">
      </div>
    </div>
      <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="total">Total:</label>
      <div class="col-xs-6">
        <input type="text" class="form-control" name="Total" id="Total" placeholder="Enter Total" value="<?php echo $this->content[0]['Total']; ?>">
      </div>
    </div>
     <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="effectfrm">Effect From:</label>
      <div class="col-xs-6">
        <input type="date" class="form-control" name="EffectFrom" id="EffectFrom" placeholder="Enter Effect From" value="<?php echo $this->content[0]['EffectFrom']; ?>">
      </div>
    </div>
     <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="effectto">Effect To:</label>
      <div class="col-xs-6">
        <input type="date" class="form-control" name="EffectTo" id="EffectTo" placeholder="Enter Effect To" value="<?php echo $this->content[0]['EffectTo']; ?>">
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
