    <div class="contact-heading" id="page1">
		   
		     <a href="<?php echo URL; ?>vts/devices"><button type="button" class="btn btn-primary">Devices</button></a>
			 <a href="<?php echo URL; ?>vts/events"><button type="button" class="btn btn-primary">Events</button></a>
			 <a href="<?php echo URL; ?>vts/geofences"><button type="button" class="btn btn-primary">Geofences</button></a>
			<a href="<?php echo URL; ?>vts/geofencetype"><button type="button" class="btn btn-primary">Geofence type</button></a>
			<div class="dropdown">
			<button type="button" class="btn btn-primary">Reports</button>
			<div class="dropdown-content">
				<a href="">Real Time Report</a>
				<a href="">summary</a>
				
			</div>
			</div> 
			
			 <a href="<?php echo URL; ?>vts/groups"><button type="button" class="btn btn-primary">Group</button></a>
		</div>
<br>
<br>
<p><a href="<?php echo URL; ?>vts/">vts >></a>View</p>
<a href="<?php echo URL; ?>vts" class="btn btn-info" role="button">Back</a>


<div class="container">
 <center><h1>events</h1></center>
  
  <table class="table table-striped" id="internalActivities">
    <tbody>
     
	  <tr>
	  <td>id</td>
	  <td><?php echo $this->content[0]['id']; ?></td>
	  </tr>
	   <tr>
	  <td>type</td>
	  <td><?php echo $this->content[0]['type']; ?></td>
	  </tr>
	   <tr>
	  <td>servertime</td>
	  <td><?php echo $this->content[0]['servertime']; ?></td>
	  </tr>
	   <tr>
	  <td>deviceid</td>
	  <td><?php echo $this->content[0]['deviceid']; ?></td>
	  </tr>
	   <tr>
	  <td>positionid</td>
	  <td><?php echo $this->content[0]['positionid']; ?></td>
	  </tr>
	   <tr>
	  <td>geofenceid</td>
	  <td><?php echo $this->content[0]['geofenceid']; ?></td>
	  </tr>
	  <tr>
	  <td>attributes</td>
	  <td><?php echo $this->content[0]['attributes']; ?></td>
	  </tr>
	   <tr>
	  <td>type_id</td>
	  <td><?php echo $this->content[0]['type_id']; ?></td>
	  </tr>
	  
	 
    </tbody>
  </table>
</div>
