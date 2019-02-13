 <!-- <ul class="breadcrumb">
  <li><a href="#">Home</a></li>
  <li><a href="<?php// echo URL; ?>master/vehiclemaster">Vehiclemaster</a></li>
  <li class="pull-right"><a href="<?php// echo URL; ?>master/vehiclemaster">Back</a></li>
</ul> 
 <div class="content">
	            <div class="container-fluid">

<ul class="pager">
    <li><a href="<?php// echo URL; ?>master/view_vehiclemaster/?id=<?php// echo $this->PrevId; ?>">Previous</a></li>
    <li><a href="<?php// echo URL; ?>master/view_vehiclemaster/?id=<?php// echo $this->NextId; ?>">Next</a></li>
	
  </ul>
 -->
  <style>
  table.tdesign tr.odd { background-color:  whitesmoke; }
table.tdesign tr.even { background-color: white;  }	
 table.tdesign th {
        background: #d9edf7;
        color: #000;
        padding: 2px;
		border: 1px solid #ccc;
    }
  </style>
  <div class="container">
	            <div class="row">
                 <div class="col-md-12">
  <div class="account-box">
  <span style="font-size:18px;"><strong>View Vehicle Master</strong></span><div class="pull-right">&nbsp;&nbsp;&nbsp;</div><a href="<?php echo URL; ?>master/vehiclemaster"><button id="btnAdd" type="button" class="btn btn-info pull-right"><i class="fa fa-angle-left"></i> Back</button></a>
  <br clear="all" />
<div class="or-box">
 </div>
 <ul class="pager">
    <li><a href="<?php echo URL; ?>master/view_vehiclemaster/?id=<?php echo $this->PrevId; ?>">Previous</a></li>
    <li><a href="<?php echo URL; ?>master/view_vehiclemaster/?id=<?php echo $this->NextId; ?>">Next</a></li>
	
  </ul>
 <div class="table-responsive">  
<div class="col-md-12">

			<div class="panel panel-primary">
 <div class="panel-heading"></div>
	                    <div class="panel-body">  
	
	 <div class="col-xs-6 form-group">
      
      <div class="col-xs-6">
        
      </div>
    </div>
	
	
  
<div class="panel panel-primary">
<div class="panel-heading">RTO Details</div>
	                    <div class="panel-body">  
	
	<div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="id">id:</label>
      <div class="col-xs-6">
        <?php echo $this->content[0]['id']; ?>
      </div>
    </div>
	 <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="VehicleNo">Vehicle Number:</label>
      <div class="col-xs-6">
        <?php echo $this->content[0]['VehicleNo']; ?>
		      </div>
    </div>

	<div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="EngineNo">EngineNo:</label>
      <div class="col-xs-6">
        <?php echo $this->content[0]['EngineNo']; ?>
		      </div>
    </div>
	<div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="ChesisNo">ChasisNo:</label>
      <div class="col-xs-6">
        <?php echo $this->content[0]['ChesisNo']; ?>
		      </div>
    </div>
	
	<div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="ModelNo">Model No:</label>
      <div class="col-xs-6">
        <?php echo $this->content[0]['ModelNo']; ?>
      </div>
    </div>
	<div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="RCBookNo">RCBookNo:</label>
      <div class="col-xs-6">
        <?php echo $this->content[0]['RCBookNo']; ?>
		      </div>
    </div>
	<div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="RegDate">RegDate:</label>
      <div class="col-xs-6">
        <?php echo $this->content[0]['RegDate']; ?>
		      </div>
    </div>
	<div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="RegistrationNo">RegistrationNo:</label>
      <div class="col-xs-6">
        <?php echo $this->content[0]['RegistrationNo']; ?>
		      </div>
    </div>
	<div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="VehicleType">VehicleType:</label>
      <div class="col-xs-6">
        <?php echo $this->content[0]['VehicleType']; ?>
		      </div>
    </div>
	<div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="OwnerName">OwnerName:</label>
      <div class="col-xs-6">
        <?php echo $this->content[0]['OwnerName']; ?>
		      </div>
    </div>
	<div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="OwnerCode">OwnerCode:</label>
      <div class="col-xs-6">
        <?php echo $this->content[0]['OwnerCode']; ?>
		      </div>
    </div>
	<div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="OwnerTypeSO">OwnerTypeSO:</label>
      <div class="col-xs-6">
        <?php echo $this->content[0]['OwnerTypeSO']; ?>
		      </div>
    </div>
	<div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="ShortVehNo">ShortVehNo:</label>
      <div class="col-xs-6">
        <?php echo $this->content[0]['ShortVehNo']; ?>
		      </div>
    </div>
	
	
	
</div>
</div>
	
	 <div class="panel panel-primary">
 <div class="panel-heading">Vehicle Finance Details</div>
	                    <div class="panel-body">  
	
	 <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="FinancerName">FinancerName:</label>
      <div class="col-xs-6">
        <?php echo $this->content[0]['FinancerName']; ?>
      </div>
    </div>
	
	<div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="EMIDate">EMI Date:</label>
      <div class="col-xs-6">
        <?php echo $this->content[0]['EMIDate']; ?>
      </div>
    </div>
	
	<div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="EMIAmount">EMI Amount:</label>
      <div class="col-xs-6">
        <?php echo $this->content[0]['EMIAmount']; ?>
      </div>
    </div>
	
	<div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="FirstEMI">First EMI:</label>
      <div class="col-xs-6">
        <?php echo $this->content[0]['FirstEMI']; ?>
      </div>
    </div>
	
	<div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="LastEMI">Last EMI:</label>
      <div class="col-xs-6">
        <?php echo $this->content[0]['LastEMI']; ?>
      </div>
    </div>
	
	</div>
	</div>
	
	 <div class="panel panel-primary">
 <div class="panel-heading">Vehicle Compliances</div>
	                    <div class="panel-body">  
	
	 <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="InsuranceExpiryDate">Insurance Expiry:</label>
      <div class="col-xs-6">
        <?php echo $this->content[0]['InsuranceExpiryDate']; ?>
      </div>
    </div>
	
	<div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="PollutionExpiry">Pollution Expiry:</label>
      <div class="col-xs-6">
        <?php echo $this->content[0]['PollutionExpiry']; ?>
      </div>
    </div>
	
	<div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="FitnessExpiryDate">Fitness Expiry:</label>
      <div class="col-xs-6">
        <?php echo $this->content[0]['FitnessExpiryDate']; ?>
      </div>
    </div>
	
	<div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="RoadTaxExpiry">Road Tax Expiry:</label>
      <div class="col-xs-6">
        <?php echo $this->content[0]['RoadTaxExpiry']; ?>
      </div>
    </div>
	
	<div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="PermitExpiry">Permit Expiry:</label>
      <div class="col-xs-6">
        <?php echo $this->content[0]['PermitExpiry']; ?>
      </div>
    </div>
	
	
	</div>
	</div>
	
	
	<div class="panel panel-primary">
 <div class="panel-heading">Vehicle Tracking Details</div>
	                    <div class="panel-body">  
	
	 <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="DeviceIMIE">Device IMIE:</label>
      <div class="col-xs-6">
        <?php echo $this->content[0]['DeviceIMIE']; ?>
      </div>
    </div>
	
	<div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="SensorSerial">Sensor Serial:</label>
      <div class="col-xs-6">
        <?php echo $this->content[0]['SensorSerial']; ?>
      </div>
    </div>
	
	<div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="MobileNo">MobileNo:</label>
      <div class="col-xs-6">
        <?php echo $this->content[0]['MobileNo']; ?>
      </div>
    </div>
	<div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="ServiceInterval">Service Interval:</label>
      <div class="col-xs-6">
        <?php echo $this->content[0]['ServiceInterval']; ?>
      </div>
    </div>
	
	<div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="LastService">Last Service:</label>
      <div class="col-xs-6">
        <?php echo $this->content[0]['LastService']; ?>
      </div>
    </div>
	
	<div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="ServiceInterval">Service Interval:</label>
      <div class="col-xs-6">
        <?php echo $this->content[0]['ServiceInterval']; ?>
      </div>
    </div>
	
	<div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="CurrentOddometer">Current Oddometer:</label>
      <div class="col-xs-6">
        <?php echo $this->content[0]['CurrentOddometer']; ?>
      </div>
    </div>
	
	
	
	<div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="TypesVM">Types VM:</label>
      <div class="col-xs-6">
        <?php echo $this->content[0]['TypesVM']; ?>
      </div>
    </div>
	
	<div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="ShortVehNo">ShortVehNo:</label>
      <div class="col-xs-6">
        <?php echo $this->content[0]['ShortVehNo']; ?>
      </div>
    </div>
	
	<div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="DateofPurchase">DateofPurchase:</label>
      <div class="col-xs-6">
        <?php echo $this->content[0]['DateofPurchase']; ?>
      </div>
    </div>
	
	
	
	
	</div>
	</div>
	
	
  
</div>
</div>
</div>
</div>





