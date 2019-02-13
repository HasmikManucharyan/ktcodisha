<br>
<br>
<br>
<p><a href="<?php echo URL; ?>master/">Master >></a><a href="<?php echo URL; ?>master/hsd">hsd >></a>Edit</p>
<a href="<?php echo URL; ?>master/hsd" class="btn btn-info" role="button">Back</a>

<?php
 // $VehicleNO=$this->pick;
  ?>
  <?php
 $diselratecode=$this->content[0]['diselratecode'];
														$itemtype=$this->content[0]['itemtype'];
														$itemname=$this->content[0]['itemname'];
														$fuelstation=$this->content[0]['fuelstation'];
														?>
<div class="container">
    <div class="row clearfix">
        <div class="col-md-12 column">
<center><h1>HSD</h1></center>
  <form class="form-horizontal" action="<?php echo URL; ?>master/edit_submit_hsd" method="post">
   <div class="form-group col-xs-6">
      <label class="control-label col-xs-6" for="diselratecode">Diesel Rate Code:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="diselratecode" id="diselratecode" placeholder="Enter Diesel Rate Code" value="<?php echo $this->content[0]['diselratecode']; ?>">
      </div>
    </div>
     <div class="form-group col-xs-6">
      <label class="control-label col-xs-6" for="itmtp">Item Type:</label>
	  <div class="col-xs-6">          
        <input type="text" class="form-control" name="itemtype" id="itemtype" placeholder="Enter Item Type" value="<?php echo $this->content[0]['itemtype']; ?>">
      </div>
    </div>
     <div class="form-group col-xs-6">
      <label class="control-label col-xs-6" for="itmnm">Item Name:</label>
	  <div class="col-xs-6">          
        <input type="text" class="form-control" name="itemname" id="itemname" placeholder="Enter Item Name" value="<?php echo $this->content[0]['itemname']; ?>">
      </div>
    </div>
     <div class="form-group col-xs-6">
      <label class="control-label col-xs-6" for="fuelst">Fuel Station:</label>
	   <div class="col-xs-6">          
        <input type="text" class="form-control" name="fuelstation" id="fuelstation" placeholder="Enter Fuel Station" value="<?php echo $this->content[0]['fuelstation']; ?>">
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
