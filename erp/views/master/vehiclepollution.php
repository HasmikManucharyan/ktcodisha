<p><a href="<?php echo URL; ?>master/">Master >></a><a href="<?php echo URL; ?>master/vehicle">Vehicle >></a><a href="<?php echo URL; ?>master/">Pollution Registration >> </a> View
<a href="<?php echo URL; ?>master/vehiclemaster" class="btn btn-info pull-right" role="button">Back</a></p>


<div class="container">
 <center><h1>Vehicle Pollution Registration</h1></center>
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
	  <th>VehicleType</th>
	  <td><?php echo $this->content[0]['VehicleType']; ?></td>
	  </tr>
	  
		<tr>
		<th>VehicleCode</th>
		<td><?php echo $this->content[0]['VehicleCode']; ?></td>
		<th>PollutionNo</th>
		<td><?php echo $this->content[0]['PollutionNo']; ?></td>
		</tr>
		
		<tr>
		<th>PollutionStart</th>
		<td><?php echo $this->content[0]['PollutionStart']; ?></td>
		<th>PollutionExpiry</th>
		<td><?php echo $this->content[0]['PollutionExpiry']; ?></td>
		</tr>
		
		<tr>
		<th>PollutionAmmount</th>
		<td><?php echo $this->content[0]['PollutionAmmount']; ?></td>
		<th>File Upload</th>
		<td><?php echo $this->content[0]['PollutionAmmount']; ?></td>
		</tr>
    </tbody>
  </table>
</div>
<center>
<div class="container">
<a href="<?php echo URL; ?>master/edit_pollutionregistration" class="btn btn-info" role="button">Add New</a>
<a href="<?php echo URL; ?>master/edit_pollutionregistration/?VehicleNo=<?php echo $this->content[0]['VehicleNo'];?>" class="btn btn-info" role="button">Edit</a>
</div>
</center>