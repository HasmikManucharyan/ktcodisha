<ul class="breadcrumb">
  <li><a href="#">Home</a></li>
  <li><a href="<?php echo URL; ?>master">Master</a></li>
  <li><a href="<?php echo URL; ?>master/vehicle">Vehicle</a></li>
  <li><a href="<?php echo URL; ?>master/vehiclefitnessregistration">Vehicle Fitness</a></li>
  <li>View</li>
  <li class="pull-right"><a href="<?php echo URL; ?>master/vehiclefitness" class="btn btn-info pull-right" role="button">Back</a></li>
</ul>
<div class="col-md-12">
<div class="panel panel-primary">
 <div class="panel-heading">Vehicle Fitness</div>
	                    <div class="panel-body table-responsive">  
  
  
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
		<td><?php foreach($this->contentFiles1 AS $key=>$value){ ?>
		<a href="<?php echo URL; ?>public/attachment/fitness/<?php echo $value['attachments']; ?>" target="blank"><?php echo $value['attachments']."<br>"?></a>
		<?php } ?></td>
		<th></th>
		<td></td>
		</tr>!-->
    </tbody>
  </table>
  </div>
  </div>
  </div>
  