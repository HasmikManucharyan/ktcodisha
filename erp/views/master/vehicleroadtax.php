<p><a href="<?php echo URL; ?>master/">Master >></a><a href="<?php echo URL; ?>master/vehicle">Vehicle >></a><a href="<?php echo URL; ?>master/vehiclemaster">Vehicle Master >> </a><a href="<?php echo URL; ?>master/roadtaxregistration">Road Tax Registration >> </a> View
<a href="<?php echo URL; ?>master/vehiclemaster" class="btn btn-info pull-right" role="button">Back</a></p>
<div class="container">
 <center><h1>Vehicle Roadtax Registration</h1></center>
  
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
		<th>RoadTaxNo</th>
		<td><?php echo $this->content[0]['RoadTaxNo']; ?></td>
		</tr>
	
		<tr>
		<th>RoadTaxStart</th>
		<td><?php echo $this->content[0]['RoadTaxStart']; ?></td>
		<th>RoadTaxExpiry</th>
		<td><?php echo $this->content[0]['RoadTaxExpiry']; ?></td>
		</tr>
		
		<tr>
		<th>RoadTaxAmmount</th>
		<td><?php echo $this->content[0]['RoadTaxAmmount']; ?></td>
		<th>File Upload</th>
		<td><?php echo $this->content[0]['RoadTaxAmmount']; ?></td>
		</tr>
    </tbody>
  </table>
</div>
<center>
<div class="container">
<a href="<?php echo URL; ?>master/edit_roadtaxregistration" class="btn btn-info" role="button">Add New</a>
<a href="<?php echo URL; ?>master/edit_roadtaxregistration/?VehicleNo=<?php echo $this->content[0]['VehicleNo'];?>" class="btn btn-info" role="button">Edit</a>
</div>
</center>