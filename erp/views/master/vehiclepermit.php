
<p><a href="<?php echo URL; ?>master/">Master >></a><a href="<?php echo URL; ?>master/vehicle">Vehicle >></a><a href="<?php echo URL; ?>master/vehiclemaster">Vehicle Master >> </a><a href="<?php echo URL; ?>master/vehiclepermitregistration">Vehicle Permit Registration >> </a> View
<a href="<?php echo URL; ?>master/vehiclemaster" class="btn btn-info pull-right" role="button">Back</a></p>


<div class="container">
 <center><h1>Vehicle Permit Registration</h1></center>
  
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
<center>
<div class="container">
<a href="<?php echo URL; ?>master/edit_vehiclepermitregistration" class="btn btn-info" role="button">Add New</a>
<a href="<?php echo URL; ?>master/edit_vehiclepermitregistration/?VehicleNo=<?php echo $this->content[0]['VehicleNo'];?>" class="btn btn-info" role="button">Edit</a>
</div>
</center>