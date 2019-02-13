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
<a href="<?php echo URL; ?>vts/events" class="btn btn-info" role="button">Back</a>
 <?php
 $id=$this->content[0]['id'];
														
														$type=$this->content[0]['type'];
														$servertime=$this->content[0]['servertime'];
														$deviceid=$this->content[0]['deviceid'];
														$positionid=$this->content[0]['positionid'];
														$geofenceid=$this->content[0]['geofenceid'];
														$attributes=$this->content[0]['attributes'];
														$type_id=$this->content[0]['type_id'];
														
														
														
														
														?>
<center><h1>events</h1></center>
  
  <form class="form-horizontal" action="<?php echo URL; ?>vts/edit_submit_events" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="id">id:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control"name="id"  id="id" placeholder="Enter id" value="<?php echo$id; ?>">
      </div>
    </div>
   
	
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="type">type:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" name="type" id="type" placeholder="Enter type" value="<?php echo $type; ?>">
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="servertime">servertime:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" name="servertime" id="servertime" placeholder="Enter servertime" value="<?php echo $servertime; ?>">
      </div>
    </div>-->
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="deviceid">deviceid:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" name="deviceid" id="deviceid" placeholder="Enter deviceid" value="<?php echo $deviceid; ?>">
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="positionid">positionid:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" name="positionid" id="positionid" placeholder="Enter positionid" value="<?php echo $positionid; ?>">
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="attributes">attributes:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" name="attributes" id="attributes" placeholder="Enter attributes" value="<?php echo $attributes; ?>">
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="geofenceid">geofenceid:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" name="geofenceid" id="geofenceid" placeholder="Enter geofenceid" value="<?php echo $geofenceid; ?>">
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="attributes">attributes:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" name="attributes" id="attributes" placeholder="Enter attributes" value="<?php echo $attributes; ?>">
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="type_id">type_id:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" name="type_id" id="type_id" placeholder="Enter type_id" value="<?php echo $type_id; ?>">
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
  