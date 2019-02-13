<ul class="breadcrumb">
<li><a href="<?php echo URL; ?>master/">Master</a></li>
<li><a href="<?php echo URL; ?>master/vehicle">Vehicle</a></li>
<li><a href="<?php echo URL; ?>master/vehiclepermitregistration">Vehicle Permit Registration</a></li>
<li>View</li>
<li class="pull-right"><a href="<?php echo URL; ?>master/vehiclepermitregistration">Back</a></li>
</ul>
<div class="col-md-12">
<div class="panel panel-primary">
 <div class="panel-heading">Vehicle Permit Registration</div>
	                    <div class="panel-body table-responsive">  
<table border="2" id="internalActivities" style="width:100%" class="table table-bordered">
<tbody>
      <tr>
	  <th>id</th>
	  <td><?php echo $this->content[0]['id']; ?></td>
	  <th>EntryDate</th>
	  <td><?php echo $this->content[0]['EntryDate']; ?></td>
	  </tr>
	 
	  <tr>
	  <th>VehicleNumber</th>
	  <td><?php echo $this->content[0]['VehicleNo']; ?></td>
	  <th>vehicleType</th>
	  <td><?php echo $this->content[0]['vehicleType']; ?></td>
	  </tr>
	  
		<tr>
		<th>VehicleCode</th>
		<td><?php echo $this->content[0]['VehicleCode']; ?></td>
		<th>PermitNo</th>
		<td><?php echo $this->content[0]['PermitNo']; ?></td>
		</tr>
		
		<tr>
		<th>PermitStart</th>
		<td><?php echo $this->content[0]['PermitStart']; ?></td>
		<th>PermitExpiry</th>
		<td><?php echo $this->content[0]['PermitExpiry']; ?></td>
		</tr>
		
		<tr>
		<th>PermitAmmount</th>
		<td><?php echo $this->content[0]['PermitAmmount']; ?></td>
		<!--<th>File Upload</th>
		<td><?php echo $this->content[0]['PermitAmmount']; ?></td>!-->
		</tr>
    </tbody>
  </table>
</div>
</div>
</div>
