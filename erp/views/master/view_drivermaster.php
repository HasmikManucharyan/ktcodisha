<!--  <ul class="breadcrumb">
  <li><a href="#">Home</a></li>
  <li><a href="<?php echo URL; ?>master">Master</a></li>
  <li><a href="<?php echo URL; ?>master/vehicle">Driver</a></li>
  <li><a href="<?php echo URL; ?>master/drivermaster">Driver master</a></li>
  <li class="pull-right"><a href="<?php echo URL; ?>master/drivermaster">Back</a></li>
</ul> 
 <div class="content">
	            <div class="container-fluid">

<ul class="pager">
    <li><a href="<?php echo URL; ?>master/view_drivermaster/?id=<?php echo $this->PrevId; ?>">Previous</a></li>
    <li><a href="<?php echo URL; ?>master/view_drivermaster/?id=<?php echo $this->NextId; ?>">Next</a></li>
	
  </ul>
  -->
<div class="col-md-12">

 <style>
  table.tdesign tr.odd { background-color:  whitesmoke; }
table.tdesign tr.even { background-color: white;  }	
 table.tdesign th {
        background: #d9edf7;
        color: #000;
        padding: 2px;
		border: 1px solid #ccc;
    }
  </style>
  <div class="container">
	            <div class="row">
                 <div class="col-md-12">
  <div class="account-box">
  <span style="font-size:18px;"><strong>View Driver Master</strong></span><div class="pull-right">&nbsp;&nbsp;&nbsp;</div><a href="<?php echo URL; ?>master/drivermaster"><button id="btnAdd" type="button" class="btn btn-info pull-right"><i class="fa fa-angle-left"></i> Back</button></a>
  <br clear="all" />
<div class="or-box">
 </div>
<!-- <ul class="pager">
   <li><a href="<?php //echo URL; ?>master/view_drivermaster/?id=<?php //echo $this->PrevId; ?>">Previous</a></li>
    <li><a href="<?php //echo URL; ?>master/view_drivermaster/?id=<?php //echo $this->NextId; ?>">Next</a></li>
  </ul>!-->
 <div class="table-responsive">  
<div class="col-md-12">

			<div class="panel panel-primary">
 <div class="panel-heading"></div>
	                    <div class="panel-body table-responsive">  
  
  <table border="2" id="internalActivities" style="width:100%" class="table table-bordered">
    <tbody>
      <tr>
	  <th>Name</th>
	  <td><?php echo $this->content[0]['name']; ?></td>
      <th>Unique ID</th>
	  <td><?php echo $this->content[0]['uniqueid']; ?></td>
	  </tr>
	  <?php
  $obj=json_decode($this->content[0]['attributes']);?>
	  <tr>
	  <th>Father Name</th>
	  <td><?php echo $obj->{"fathername"}; ?></td>
	  <th>Address</th>
	  <td><?php echo $obj->{"address"}; ?></td>
	  </tr>
	  
	   <tr>
	  <th>City</th>
	  <td><?php echo $obj->{"city"}; ?></td>
	  <th>State</th>
	  <td><?php echo $obj->{"state"}; ?></td>
	  </tr>
	  <tr>
	  <th>Phone number</th>
	  <td><?php echo $obj->{"phoneno"}; ?></td>
	  <th>DOB</th>
	  <td><?php echo $obj->{"dob"}; ?></td>
	  </tr>	
	   <tr>
	  <th>Date of Joining</th>
	  <td><?php echo $obj->{"dateofjoining"}; ?></td>
	  <th>License number</th>
	  <td><?php echo $obj->{"licenseno"}; ?></td>
	  </tr>	
	  <tr>
	  <th>License type</th>
	  <td><?php echo $obj->{"licensetype"}; ?></td>
	  <th>Issue Date</th>
	  <td><?php echo $obj->{"issuedate"}; ?></td>
	  </tr>
	  <tr>
	  <th>Authority</th>
	  <td><?php echo $obj->{"authority"}; ?></td>
	  <th>Expiry date</th>
	  <td><?php echo $obj->{"expirydate"}; ?></td>
	  </tr>
	  <tr>
	  <th>Aadhaar number</th>
	  <td><?php echo $obj->{"aadhaarno"}; ?></td>
	  <th>Blood group</th>
	  <td><?php echo $obj->{"bloodgroup"}; ?></td>
	  </tr>
	  <tr>
	  <th>Vehicle number</th>
	  <td><?php echo $obj->{"vehicleno"}; ?></td>
	  <th>Salary</th>
	  <td><?php echo $obj->{"salary"}; ?></td>
	  </tr>
	  
    </tbody>
  </table>
</div>
</div>



<br>
</div>

</div>