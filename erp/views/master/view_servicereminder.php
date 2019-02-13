<br>
<br>
<p><a href="<?php echo URL; ?>master/">Master >></a><a href="<?php echo URL; ?>master/servicereminder">Service Reminder >> </a>View</p>
<a href="<?php echo URL; ?>master/servicereminder" class="btn btn-info" role="button">Back</a>
<div class="container">
 <center><h1>Service Reminder</h1></center>
  <table class="table table-bordered" id="internalActivities">
    <tbody>
      <tr>
	  <td>id</td>
	  <td><?php echo $this->content[0]['id']; ?></td>
	  </tr>
	  <tr>
	  <td>ServiceId</td>
	  <td><?php echo $this->content[0]['ServiceId']; ?></td>
	  </tr>
	  <tr>
	  <td>vehicleNo</td>
	  <td><?php echo $this->content[0]['vehicleNo']; ?></td>
	  </tr>
	  <tr>
        <td>EngineOilServiceDue</td>
		 <td><?php echo $this->content[0]['EngineOilServiceDue']; ?></td>
		</tr>
		<tr>
		<td>AxelOilServiceDue</td>
		<td><?php echo $this->content[0]['AxelOilServiceDue']; ?></td>
		</tr>
		<tr>
	  <td>GearOilServiceDue</td>
	  <td><?php echo $this->content[0]['GearOilServiceDue']; ?></td>
	  </tr>
	  <tr>
	  <td>HorseGreasingServiceDue</td>
	  <td><?php echo $this->content[0]['HorseGreasingServiceDue']; ?></td>
	  </tr>
	  <tr>
	  <td>TraillerGreasingServiceDue</td>
	  <td><?php echo $this->content[0]['TraillerGreasingServiceDue']; ?></td>
	  </tr>
	  <tr>
        <td>AlternatorServiceDue</td>
		 <td><?php echo $this->content[0]['AlternatorServiceDue']; ?></td>
		</tr>
		<tr>
		<td>SelfStartServiceDue</td>
		<td><?php echo $this->content[0]['SelfStartServiceDue']; ?></td>
		</tr>
		<tr>
	  <td>RadiatorServiceDue</td>
	  <td><?php echo $this->content[0]['RadiatorServiceDue']; ?></td>
	  </tr>
	  <tr>
	  <td>HydraulicOilDue</td>
	  <td><?php echo $this->content[0]['HydraulicOilDue']; ?></td>
	  </tr>
	  <tr>
	  <td>CrownOilDue</td>
	  <td><?php echo $this->content[0]['CrownOilDue']; ?></td>
	  </tr>
    </tbody>
  </table>
</div>