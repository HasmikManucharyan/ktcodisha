
<p><a href="<?php echo URL; ?>master/">Master >></a><a href="<?php echo URL; ?>master/workorder">Work order >></a><a href="<?php echo URL; ?>master/routmaster">Rout Master >> </a>Edit</p>
<a href="<?php echo URL; ?>master/routmaster" class="btn btn-info" role="button">Back</a>

<?php
 // $VehicleNO=$this->pick;
  ?>
  <?php
 $RoutCode=$this->content[0]['RoutCode'];
														$RoutName=$this->content[0]['RoutName'];
														$DoPoNo=$this->content[0]['DoPoNo'];
														$MaterialGrade=$this->content[0]['MaterialGrade'];
														$ShortageRate=$this->content[0]['ShortageRate'];
														$Deduct=$this->content[0]['Deduct'];
														$SpecialDisc=$this->content[0]['SpecialDisc'];
														$DriverTripComm=$this->content[0]['DriverTripComm'];
											
														
														
														?>
<div class="container">
    <div class="row clearfix">
        <div class="col-md-12 column">
<center><h1>Rout Master</h1></center>

  <form class="form-horizontal" action="<?php echo URL; ?>master/edit_submit_routmaster" method="post">
  <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="routcode">Rout Code:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="RoutCode" id="RoutCode" placeholder="Enter Rout Code" value="<?php echo $this->content[0]['RoutCode']; ?>">
      </div>
    </div>
    <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="routnm">Rout Name:</label>
      <div class="col-xs-6">
        <input type="text" class="form-control" name="RoutName" id="RoutName" placeholder="Enter Rout Name" value="<?php echo $this->content[0]['RoutName']; ?>">
      </div>
    </div>
    <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="dopono">Do/Po No:</label>
      <div class="col-xs-6">
        <input type="text" class="form-control" name="DoPoNo" id="DoPoNo" placeholder="Enter Do/Po No" value="<?php echo $this->content[0]['DoPoNo']; ?>">
      </div>
    </div>
    <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="matgrd">Material/Grade:</label>
      <div class="col-xs-6"> 
 <select class="form-control col-xs-6" name="MaterialGrade" value="<?php echo $this->content[0]['MaterialGrade']; ?>">	
<option>A</option>
<option>B</option> 
<option>C</option> 
<option>D</option> 
<option>E</option> 
        </select>
      </div>
    </div>
     <div class="form-group col-xs-6">
      <label class="control-label col-xs-6" for="shortagert">Shortage Rate:</label>
      <div class="col-xs-6">
        <input type="text" class="form-control" name="ShortageRate" id="ShortageRate" placeholder="Enter Shortage Rate" value="<?php echo $this->content[0]['ShortageRate']; ?>">
      </div>
    </div>
    <div class="form-group col-xs-6">        
      <div class="col-sm-offset-2 col-xs-6">
        <div class="checkbox col-xs-6">
          <label><input type="checkbox">Deduct of %(>)<input type="text" name="Deduct" id="Deduct" placeholder=" " value="<?php echo $this->content[0]['Deduct']; ?>"></label>
        </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-xs-6">
        <div class="checkbox col-xs-6" name="SpecialDisc">
          <label><input type="checkbox">Special Disc<input type="text" name="SpecialDisc" id="SpecialDisc" placeholder=" " value="<?php echo $this->content[0]['SpecialDisc']; ?>"></label>
        </div>
      </div>
    </div>
    
    <div class="form-group col-xs-6">
      <label class="control-label col-xs-6" for="drvtrpcomm">Driver Trip Comm:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="DriverTripComm" id="DriverTripComm" placeholder="EnterDriver Trip Comm" value="<?php echo $this->content[0]['DriverTripComm']; ?>">
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
