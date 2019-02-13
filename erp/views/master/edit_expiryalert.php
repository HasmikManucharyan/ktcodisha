<br>
<br>
<br>
<p><a href="<?php echo URL; ?>master/">Master >> </a><a href="<?php echo URL; ?>master/expiryalert">Expiry Alert >> </a>Edit</p>
<a href="<?php echo URL; ?>master/expiryalert" class="btn btn-info" role="button">Back</a>
<?php print_r($this->content); ?>
<?php
 // $VehicleNO=$this->pick;
  ?>
  <?php
echo $AlertCode=$this->content[0]['AlertCode'];
														$NoOfInsuranceAlertDays=$this->content[0]['NoOfInsuranceAlertDays'];
														$NoOfFitnessAlertDays=$this->content[0]['NoOfFitnessAlertDays'];
														$NoOfPermitAlertDays=$this->content[0]['NoOfPermitAlertDays'];
														$NoOfRoadTaxAlertDays=$this->content[0]['NoOfRoadTaxAlertDays'];
														$NoOfPollutionAlertDays=$this->content[0]['NoOfPollutionAlertDays'];
														$EffectDateFrom=$this->content[0]['EffectDateFrom'];
														
														?>
														
<div class="container">
    <div class="row clearfix">
        <div class="col-md-12 column">
<center><h1>Expiry Alert</h1></center>

 
  <form class="form-horizontal" action="<?php echo URL; ?>master/edit_submit_expiryalert" method="post">
  <div class="form-group col-xs-6">
      <label class="control-label col-xs-6" for="AlertCode">Alert Code:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="AlertCode" id="AlertCode" placeholder="Enter Alter Code" value="<?php echo $this->content[0]['AlertCode']; ?>">
      </div>
    </div>
    <div class="form-group col-xs-6">
      <label class="control-label col-xs-6" for="NoOfInsuranceAlertDays">No Of Insurance Alert Days:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="NoOfInsuranceAlertDays" id="NoOfInsuranceAlertDays" placeholder="Enter No Of Insurance Alert Days" value="<?php echo $this->content[0]['NoOfInsuranceAlertDays']; ?>">
      </div>
    </div>
     <div class="form-group col-xs-6">
      <label class="control-label col-xs-6" for="NoOfFitnessAlertDays">No Of Fitness Alert Days:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="NoOfFitnessAlertDays" id="NoOfFitnessAlertDays" placeholder="Enter No Of Fitness Alert Days" value="<?php echo $this->content[0]['NoOfFitnessAlertDays']; ?>">
      </div>
    </div>
     <div class="form-group col-xs-6">
      <label class="control-label col-xs-6" for="NoOfPermitAlertDays">No Of Permit Alert Days:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="NoOfPermitAlertDays" id="NoOfPermitAlertDays" placeholder="Enter No Of Permit Alert Days" value="<?php echo $this->content[0]['NoOfPermitAlertDays']; ?>">
      </div>
    </div>
     <div class="form-group col-xs-6">
      <label class="control-label col-xs-6" for="NoOfRoadTaxAlertDays">No Of Road Tax Alert Days:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="NoOfRoadTaxAlertDays" id="NoOfRoadTaxAlertDays" placeholder="Enter No Of Road Tax Alert Days" value="<?php echo $this->content[0]['NoOfRoadTaxAlertDays']; ?>">
      </div>
    </div>
     <div class="form-group col-xs-6">
      <label class="control-label col-xs-6" for="NoOfPollutionAlertDays">No Of Pollution Alert Days:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control"name="NoOfPollutionAlertDays"  id="NoOfPollutionAlertDays" placeholder="Enter No Of Pollution Alert Days" value="<?php echo $this->content[0]['NoOfPollutionAlertDays']; ?>">
      </div>
    </div>
     <div class="form-group col-xs-6">
      <label class="control-label col-xs-6" for="EffectDateFrom">Effect Date From:</label>
      <div class="col-xs-6">          
        <input type="date" class="form-control" name="EffectDateFrom" id="EffectDateFrom" placeholder="Enter Effect Date From" value="<?php echo $this->content[0]['EffectDateFrom']; ?>">
      </div>
    </div>
     <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <?php
	 
	  if($this->pick==''){ ?>
        <button type="submit" class="btn btn-default" value="submit" name="submit">Submit</button>
	  <?php } else { ?>
	  <input type="hidden" value="<?php echo $this->content[0]['id']; ?>" name="id">
	  <button type="submit" class="btn btn-default" value="update" name="submit">Update</button>
	  <?php } ?>
      </div>
    </div>
  </form>
  </div>
  </div>
</div>