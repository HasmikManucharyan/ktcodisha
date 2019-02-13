<ul class="breadcrumb">
<li><a href="<?php echo URL; ?>master/">Master</a></li>
<li><a href="<?php echo URL; ?>master/vehicle">Vehicle</a></li>
<li><a href="<?php echo URL; ?>master/">Pollution Registration</a></li>
<li>View</li>
<li class="pull-right"><a href="<?php echo URL; ?>master/pollutionregistration">Back</a></li>
</ul>
<div class="col-md-12">
<div class="panel panel-primary">
<div class="panel-heading">Vehicle Pollution Registration</div>
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
		<!--<th>File Upload</th>
		<td><?php echo $this->content[0]['PollutionAmmount']; ?></td>!-->
		</tr>
    </tbody>
  </table>
</div>
</div>
</div>
