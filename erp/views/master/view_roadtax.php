<ul class="breadcrumb">
<li><a href="<?php echo URL; ?>master/">Master</a></li>
<li><a href="<?php echo URL; ?>master/vehicle">Vehicle</a></li>
<li><a href="<?php echo URL; ?>master/roadtaxregistration">Road Tax Registration</a></li>
<li>View</li>
<li class="pull-right"><a href="<?php echo URL; ?>master/roadtaxregistration">Back</a></li>
</ul>
<div class="col-md-12">
<div class="panel panel-primary">
<div class="panel-heading">Vehicle RoadTax Registration
</div>
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
		<!--<th>File Upload</th>
		<td><?php echo $this->content[0]['RoadTaxAmmount']; ?></td>!-->
		</tr>
    </tbody>
  </table>
</div>
