<ul class="breadcrumb">
  <li><a href="#">Home</a></li>
  <li><a href="<?php echo URL; ?>master">Master</a></li>
  <li><a href="<?php echo URL; ?>master/vehicle">Vehicle</a></li>
  <li><a href="<?php echo URL; ?>master/vehicleinsuranceregistration">Vehicle Insurance</a></li>
  <li><a href="<?php echo URL; ?>">View</a></li>
  <li class="pull-right"><a href="<?php echo URL; ?>master/vehicleinsuranceregistration">Back</a></li>
</ul> 
<div class="col-md-12">
<div class="panel panel-primary">
 <div class="panel-heading">Vehicle Insurance</div>
	                    <div class="panel-body table-responsive">  
  
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
		<?php foreach($this->contentFiles1 AS $key=>$value){ ?>
		<a href="<?php echo URL; ?>public/attachment/insurance/<?php echo $value['attachments']; ?>" target="blank"><?php echo $value['attachments']."<br>"?></a>
		<?php } ?>
		</td>
		
		<th></th>
		<td></td>
		</tr>!-->
    </tbody>
  </table>
</div>
</div>
</div>