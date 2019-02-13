<br>
<br>
<p><a href="<?php echo URL; ?>master/">Master >></a><a href="<?php echo URL; ?>master/vehicle">Vehicle >></a><a href="<?php echo URL; ?>master/vehicleinsuranceregistration">Vehicle Insurance Registration >> </a>View</p>
<a href="<?php echo URL; ?>master/vehicleinsuranceregistration" class="btn btn-info" role="button">Back</a>


<div class="container">
 <center><h1>Vehicle Insurance Registration</h1></center>
  <table class="table table-striped" id="internalActivities">
    <tbody>
      <tr>
	  <td>id</td>
	  <td><?php echo $this->contenti[0]['id']; ?></td>
	  </tr>
	  <tr>
	  <td>InsuranceCode</td>
	  <td><?php echo $this->contenti[0]['InsuranceCode']; ?></td>
	  </tr>
	  <tr>
	  <td>Dated</td>
	  <td><?php echo $this->contenti[0]['Dated']; ?></td>
	  </tr>
	  <tr>
        <td>VehicleCode</td>
		 <td><?php echo $this->content[0]['VehicleCode']; ?></td>
		</tr>
		<tr>
		<td>VehicleNo</td>
		<td><?php echo $this->content[0]['VehicleNo']; ?></td>
		</tr>
		<tr>
        <td>VehicleType</td>
		<td><?php echo $this->content[0]['VehicleType']; ?></td>
		</tr>
		<tr>
		<td>OwnerCode</td>
		<td><?php echo $this->content[0]['OwnerCode']; ?></td>
		</tr>
		<tr>
		<td>OwnerName</td>
		<td><?php echo $this->content[0]['OwnerName']; ?></td>
		</tr>
		<tr>
		<td>OwnerCode</td>
		<td><?php echo $this->content[0]['OwnerCode']; ?></td>
		</tr>
		<tr>
		<td>MadeByCmpy</td>
		<td><?php echo $this->content[0]['MadeByCmpy']; ?></td>
		</tr>
		<tr>
		<td>PartyCode</td>
		<td><?php echo $this->content[0]['PartyCode']; ?></td>
		</tr>
		<tr>
		<td>InsuranceNo</td>
		<td><?php echo $this->content[0]['InsuranceNo']; ?></td>
		</tr>
		<tr>
		<td>InsuranceValue</td>
		<td><?php echo $this->content[0]['InsuranceValue']; ?></td>
		</tr>
		<tr>
		<td>InsuranceFromDate</td>
		<td><?php echo $this->content[0]['InsuranceFromDate']; ?></td>
		</tr>
		<tr>
		<td>InsuranceExpiryDate</td>
		<td><?php echo $this->content[0]['InsuranceExpiryDate']; ?></td>
		</tr>
		<tr>
		<td>InsuranceAmt</td>
		<td><?php echo $this->content[0]['InsuranceAmt']; ?></td>
		</tr>
		<tr>
		<td>HypotheticationWith</td>
		<td><?php echo $this->content[0]['HypotheticationWith']; ?></td>
      </tr>
	  <tr>
		<td>File Upload</td>
		<td><?php //print_r($this->contentFiles); ?>
		<?php foreach($this->contentFiles AS $key=>$value){
						?>
		<a href="<?php echo URL; ?>public/attachment/?getAttachf=<?php echo $value['getAttachf']; ?>" target="blank"><?php	echo $value['attachments']."<br>"?></a>
			<?php } ?>
		</td>
		
      </tr>
    </tbody>
  </table>
</div>
