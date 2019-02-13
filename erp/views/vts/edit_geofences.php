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
<a href="<?php echo URL; ?>vts/geofences" class="btn btn-info" role="button">Back</a>
 <?php
 $id=$this->content[0]['id'];
														$name=$this->content[0]['name'];
														$type_id=$this->content[0]['type_id']
														
														
														
														
														?>
<center><h1>geofences</h1></center>
  
  <form class="form-horizontal" action="<?php echo URL; ?>vts/edit_submit_geofences" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="id">id:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control"name="id"  id="id" placeholder="Enter id" value="<?php echo$id; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">name:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" value="<?php echo $name; ?>">
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="type_id">type_id:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" name="type_id" id="type_id" placeholder="Enter type_id" value="<?php echo $type_id; ?>">
      </div>
    </div>
	
	<!--<div class="form-group">
      <label class="control-label col-sm-2" for="description">description:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" name="description" id="description" placeholder="Enter description" value="<?php //echo $description; ?>">
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="area">area:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" name="area" id="area" placeholder="Enter area" value="<?php //echo $area; ?>">
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="attributes">attributes:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" name="attributes" id="attributes" placeholder="Enter attributes" value="<?php //echo $attributes; ?>">
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="calendarid">calendarid:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" name="calendarid" id="calendarid" placeholder="Enter calendarid" value="<?php //echo $calendarid; ?>">
      </div>
    </div>
	-->
	
	
	
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
  