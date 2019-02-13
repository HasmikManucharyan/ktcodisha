
<p><a href="<?php echo URL; ?>master/">Master >></a><a href="<?php echo URL; ?>master/servicereminder">Service Reminder >> </a>Edit</p>
<a href="<?php echo URL; ?>master/servicereminder" class="btn btn-info" role="button">Back</a>

<?php
 // $VehicleNO=$this->pick;
  ?>
  <?php
echo $ServiceId=$this->content[0]['ServiceId'];
														$VehicleNo=$this->content[0]['VehicleNo'];
														$EngineOilServiceDue=$this->content[0]['EngineOilServiceDue'];
														$AxelOilServiceDue=$this->content[0]['AxelOilServiceDue'];
														$GearOilServiceDue=$this->content[0]['GearOilServiceDue'];
														$HorseGreasingServiceDue=$this->content[0]['HorseGreasingServiceDue'];
														$TraillerGreasingServiceDue=$this->content[0]['TraillerGreasingServiceDue'];
														$AlternatorServiceDue=$this->content[0]['AlternatorServiceDue'];
														$SelfStartServiceDue=$this->content[0]['SelfStartServiceDue'];
														$RadiatorServiceDue=$this->content[0]['RadiatorServiceDue'];
														$HydraulicOilDue=$this->content[0]['HydraulicOilDue'];
														$CrownOilDue=$this->content[0]['CrownOilDue'];
														
														
														?>
<div class="container">
    <div class="row clearfix">
        <div class="col-md-12 column">
<center><h1>Service Reminder</h1></center>

  <form class="form-horizontal" action="<?php echo URL; ?>master/edit_submit_servicereminder" method="post">
   <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="serviceid">Service Id:</label>
      <div class="col-xs-6">          
        <input type="text" name="ServiceId" class="form-control" id="ServiceId" placeholder="Enter Service Id" value="<?php echo $this->content[0]['ServiceId']; ?>">
      </div>
    </div>
    <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="VehicleNo">vehicle No:</label>
	  <div class="col-xs-6">          
        <input type="text" name="VehicleNo" class="form-control" id="ServiceId" placeholder="Enter VehicleNo" value="<?php echo $this->content[0]['VehicleNo']; ?>">
      </div>
    </div>
     <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="EngineOilServiceDue">Engine Oil Service Due:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="EngineOilServiceDue" id="EngineOilServiceDue" placeholder="Enter Engine Oil Service Due" value="<?php echo $this->content[0]['EngineOilServiceDue']; ?>">km
      </div>
    </div>
     <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="AxelOilServiceDue">Axel Oil Service Due:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="AxelOilServiceDue" id="AxelOilServiceDue" placeholder="Enter Axel Oil Service Due" value="<?php echo $this->content[0]['AxelOilServiceDue']; ?>">km
      </div>
    </div>
     <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="GearOilServiceDue">Gear Oil Service Due:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="GearOilServiceDue" id="GearOilServiceDue" placeholder="Enter Gear Oil Service Due" value="<?php echo $this->content[0]['GearOilServiceDue']; ?>">km
      </div>
    </div>
     <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="HorseGreasingServiceDue">Horse Greasing Service Due:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="HorseGreasingServiceDue" id="HorseGreasingServiceDue" placeholder="Enter Horse Greasing Service Due" value="<?php echo $this->content[0]['HorseGreasingServiceDue']; ?>">km
      </div>
    </div>
     <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="TraillerGreasingServiceDue">Trailler Greasing Service Due:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="TraillerGreasingServiceDue" id="TraillerGreasingServiceDue" placeholder="Enter Trailler Greasing Service Due" value="<?php echo $this->content[0]['TraillerGreasingServiceDue']; ?>">km
      </div>
    </div>
     <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="AlternatorServiceDue">Alternator Service Due:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="AlternatorServiceDue" id="AlternatorServiceDue" placeholder="Enter Alternator Service Due" value="<?php echo $this->content[0]['AlternatorServiceDue']; ?>">km
      </div>
    </div>
     <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="SelfStartServiceDue">Self Start Service Due:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="SelfStartServiceDue" id="SelfStartServiceDue" placeholder="Enter Self Start Service Due" value="<?php echo $this->content[0]['SelfStartServiceDue']; ?>">km
      </div>
    </div>
     <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="RadiatorServiceDue">Radiator Service Due:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="RadiatorServiceDue" id="RadiatorServiceDue" placeholder="Enter Radiator Service Due" value="<?php echo $this->content[0]['RadiatorServiceDue']; ?>">km
      </div>
    </div>
     <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="HydraulicilDue">Hydraulic Oil Due:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="HydraulicilDue" id="HydraulicilDue" placeholder="Enter Hydraulic Oil Due" value="<?php echo $this->content[0]['HydraulicilDue']; ?>">km
      </div>
    </div>
     <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="CrownOilDue">Crown Oil  Due:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="CrownOilDue" id="CrownOilDue" placeholder="Enter Crown Oil  Due" value="<?php echo $this->content[0]['CrownOilDue']; ?>">km
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