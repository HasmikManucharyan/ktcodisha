<div class="container">
	            <div class="row">
   <div class="col-md-12">
  <div class="account-box">
  <span style="font-size:18px;"><strong>View Employee Details</strong></span><a href="<?php echo URL; ?>employee/index"><button id="btnAdd" type="button" class="btn btn-info pull-right"><i class="fa fa-angle-left"></i> Back</button></a>
 <br clear="all" />
<div class="or-box">
 </div>

	
	                            <div class="card-content table-responsive">
  
  <table border="2" id="internalActivities" style="width:100%" class="table table-bordered">
    <tbody>
      <tr>
      
	  
	  <th>Name</th>
	  <td><?php echo $this->content[0]['name']; ?></td>
      <th>Fathers Name</th>
	  <td><?php echo $this->content[0]['fathername']; ?></td>
	  </tr>
	   
	   <tr>
	  <th>Address</th>
	  <td><?php echo $this->content[0]['address']; ?></td>
	  <th>City</th>
	  <td><?php echo $this->content[0]['city']; ?></td>
	  </tr>
	   
	   <tr>
	  <th>State</th>
	  <td><?php echo $this->content[0]['state']; ?></td>
	  <th>Phone no</th>
	  <td><?php echo $this->content[0]['phoneno']; ?></td>
	  </tr>
	   
	   <tr>
	  <th>DOB</th>
	  <td><?php echo $this->content[0]['dob']; ?></td>
	  <th>Date Of Joining</th>
	  <td><?php echo $this->content[0]['dateofjoining']; ?></td>
	  </tr>
	   
	  <tr>
	  <th>PAN No</th>
	  <td><?php echo $this->content[0]['panno']; ?></td>
      <th>Designation</th>
	  <td><?php echo $this->content[0]['designation']; ?></td>
      </tr>
      
      <tr>
	  <th>Aadhaar No</th>
      <td><?php echo $this->content[0]['aadhaarno']; ?></td>
      <th>Blood Group</th>
	  <td><?php echo $this->content[0]['bloodgroup']; ?></td>
	  </tr>
      
       <tr>
	  <th>Salary</th>
      <td><?php echo $this->content[0]['salary']; ?></td>
      <th></th>
	  </td></td>
	  </tr>
	 
    </tbody>
  </table>
</div>
</div>
</div>
</div>
</div>