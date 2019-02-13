<p><a href="<?php echo URL; ?>master/">Master >></a><a href="<?php echo URL; ?>master/vehicle">Vehicle >></a><a href="<?php echo URL; ?>master/vehiclemaster">Vehicle Master >> </a><a href="<?php echo URL; ?>master/vehicleinsuranceregistration">Vehicle Insurance Registration >> </a>View
<a href="<?php echo URL; ?>master/vehiclemaster" class="btn btn-info pull-right" role="button">Back</a></p>
<div class="container">
 <center><h1>Vehicle Insurance Registration</h1></center>
   <table border="2" id="internalActivities" style="width:100%" class="table table-bordered">
    <tbody>
      <tr>
	  <th>id</th>
	  <td><?php echo $this->content[0]['id']; ?></td>
	  <th>InsuranceCode</th>
	  <td><?php echo $this->content[0]['InsuranceCode']; ?></td>
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
		<th>OwnerName</th>
		<td><?php echo $this->content[0]['OwnerName']; ?></td>
		</tr>
		
		<tr>
		<th>MadeByCmpy</th>
		<td><?php echo $this->content[0]['MadeByCmpy']; ?></td>
		<th>PartyCode</th>
		<td><?php echo $this->content[0]['PartyCode']; ?></td>
		</tr>
		
		<tr>
		<th>InsuranceNo</th>
		<td><?php echo $this->content[0]['InsuranceNo']; ?></td>
		<th>InsuranceValue</th>
		<td><?php echo $this->content[0]['InsuranceValue']; ?></td>
		</tr>
		
		<tr>
		<th>InsuranceFromDate</th>
		<td><?php echo $this->content[0]['InsuranceFromDate']; ?></td>
		<th>InsuranceExpiryDate</th>
		<td><?php echo $this->content[0]['InsuranceExpiryDate']; ?></td>
		</tr>
		
		<tr>
		<th>InsuranceAmt</th>
		<td><?php echo $this->content[0]['InsuranceAmt']; ?></td>
		<th>HypotheticationWith</th>
		<td><?php echo $this->content[0]['HypotheticationWith']; ?></td>
		</tr>
		
	  <!--<tr>
		<th>File Upload</th>
		<td>
		<?php foreach($this->contentFiles1 AS $key=>$value){
						?>
		<?php	echo $value['attachments']."<br>"?>
			<?php } ?>
		</td>
		<th></th>
		<td></td>
		</tr>!-->
    </tbody>
  </table>
</div>

<!--<a href="<?php echo URL; ?>master/edit_vehicleinsuranceregistration/?VehicleNo=<?php echo $value['VehicleNo']; ?>" class="btn btn-info" role="button">Edit</a>-->
<center>
<div class="container">
<a href="<?php echo URL; ?>master/edit_vehicleinsuranceregistration" class="btn btn-info" role="button">Add New</a>
<a href="<?php echo URL; ?>master/edit_vehicleinsuranceregistration/?VehicleNo=<?php echo $this->content[0]['VehicleNo']; ?>" class="btn btn-info" role="button">Edit</a>
</div>
</center>