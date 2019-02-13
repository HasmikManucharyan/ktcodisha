<p><a href="<?php echo URL; ?>master/">Master >></a><a href="<?php echo URL; ?>master/vehicle">Vehicle >></a><a href="<?php echo URL; ?>master/vehiclemaster">Vehicle Master >> </a><a href="<?php echo URL; ?>master/vehiclefitnessregistration">Vehicle Fitness Registration >> </a>View
<a href="<?php echo URL; ?>master/vehiclemaster" class="btn btn-info pull-right" role="button">Back</a></p>


<div class="container">
 <center><h1>Vehicle Fitness Registration</h1></center>
  
  <table border="2" id="internalActivities" style="width:100%" class="table table-bordered">
    <tbody>
      <tr>
	  <th>id</th>
	  <td><?php echo $this->content[0]['id']; ?></td>
	  <th>FitnessCode</th>
	  <td><?php echo $this->content[0]['FitnessCode']; ?></td>
	  </tr>
	  
	  <tr>
	  <th>Dated</th>
	  <td><?php echo $this->content[0]['Dated']; ?></td>
	  <th>VehicleCode</th>
	  <td><?php echo $this->content[0]['VehicleCode']; ?></td>
	  </tr>
	  
		<tr>
		<th>VehicleNo</th>
		<td><?php echo $this->content[0]['VehicleNo']; ?></td>
		<th>VehicleType</th>
		<td><?php echo $this->content[0]['VehicleType']; ?></td>
		</tr>
		
		<tr>
		<th>OwnerCode</th>
		<td><?php echo $this->content[0]['OwnerCode']; ?></td>
		<th>MadeByCmpy</th>
		<td><?php echo $this->content[0]['MadeByCmpy']; ?></td>
		</tr>
		
		<tr>
		<th>FitnessNo</th>
		<td><?php echo $this->content[0]['FitnessNo']; ?></td>
		<th>FitnessFromDate</th>
		<td><?php echo $this->content[0]['FitnessFromDate']; ?></td>
		</tr>
		
		<tr>
		<th>FitnessExpiryDate</th>
		<td><span class="label label-danger"><?php echo $this->content[0]['FitnessExpiryDate']; ?></span></td>
		<th>FitnessAmt</th>
		<td><span class="label label-warning" id="blinker"><blink><?php echo $this->content[0]['FitnessAmt']; ?></blink>&nbsp;&nbsp;&nbsp;To be Paid</span></td>
		</tr>
		
		<!--<tr>
		<th>File Upload</th>
		<td><?php echo $this->content[0]['FitnessNo']; ?></td>
		<th></th>
		<td></td>
		</tr>!-->
    </tbody>
  </table>
  </div>
  <center>
<div class="container">
<a href="<?php echo URL; ?>master/edit_vehiclefitnessregistration" class="btn btn-info" role="button">Add New</a>
<a href="<?php echo URL; ?>master/edit_vehiclefitnessregistration/?VehicleNo=<?php echo $this->content[0]['VehicleNo'];?>" class="btn btn-info" role="button">Edit</a>
</div>
</center>