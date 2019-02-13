<br>
<br>
<p><a href="<?php echo URL; ?>master/">Master >> </a><a href="<?php echo URL; ?>master/expiryalert">Expiry Alert >> </a>View</p>
<a href="<?php echo URL; ?>master/itemmaster" class="btn btn-info" role="button">Back</a>
<div class="container">
 <center><h1>Expiry Alert</h1></center>
  <table class="table table-bordered" id="internalActivities">
    <tbody>
	

      <tr>
	  <td>id</td>
	  <td><?php echo $this->content[0]['id']; ?></td>
	  </tr>
	  <tr>
	  <td>AlertCode</td>
	  <td><?php echo $this->content[0]['AlertCode']; ?></td>
	  </tr>
	  <tr>
	  <td>NoOfInsuranceAlertDays</td>
	  <td><?php echo $this->content[0]['NoOfInsuranceAlertDays']; ?></td>
	  </tr>
	  <tr>
        <td>NoOfFitnessAlertDays</td>
		 <td><?php echo $this->content[0]['NoOfFitnessAlertDays']; ?></td>
		</tr>
		<tr>
		<td>NoOfPermitAlertDays</td>
		<td><?php echo $this->content[0]['NoOfPermitAlertDays']; ?></td>
		</tr>
		<tr>
	  <td>NoOfRoadTaxAlertDays</td>
	  <td><?php echo $this->content[0]['NoOfRoadTaxAlertDays']; ?></td>
	  </tr>
	  <tr>
	  <td>NoOfPollutionAlertDays</td>
	  <td><?php echo $this->content[0]['NoOfPollutionAlertDays']; ?></td>
	  </tr>
	  <tr>
	  <td>EffectDateFrom</td>
	  <td><?php echo $this->content[0]['EffectDateFrom']; ?></td>
	  </tr>
	  
    </tbody>
  </table>
</div>
