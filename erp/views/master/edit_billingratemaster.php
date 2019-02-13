<p><a href="<?php echo URL; ?>master/">Master >></a><a href="<?php echo URL; ?>master/workorder">Work order >></a><a href="<?php echo URL; ?>master/billingratemaster">Billing Rate Master >> </a>Edit</p>
<a href="<?php echo URL; ?>master/billingratemaster" class="btn btn-info" role="button">Back</a>

<?php
 // $VehicleNO=$this->pick;
  ?>
  <?php
 $DoId=$this->content[0]['DoId'];
														$DoCode=$this->content[0]['DoCode'];
														$PartyName=$this->content[0]['PartyName'];
														$RoutName=$this->content[0]['RoutName'];
														?>
<div class="container">
    <div class="row clearfix">
        <div class="col-md-12 column">
<center><h1>Billing Rate Master</h1></center>

  <form class="form-horizontal" action="<?php echo URL; ?>master/edit_submit_billingmaster" method="post" enctype="multipart/form-data">
   <div class="form-group col-xs-6">
      <label class="control-label col-xs-6" for="DoId">Do Id:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="DoId" id="DoId" placeholder="Enter Do Id" value="<?php echo $this->content[0]['DoId']; ?>">
      </div>
    </div>
     <div class="form-group col-xs-6">
      <label class="control-label col-xs-6" for="DoCode">Do Code:</label>
	  <div class="col-xs-6">          
        <input type="text" class="form-control" name="DoCode" id="DoCode" placeholder="Enter Do Code" value="<?php echo $this->content[0]['DoCode']; ?>">
      </div>
    </div>
    <div class="form-group col-xs-6">
      <label class="control-label col-xs-6" for="PartyName">Party Name:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="PartyName" id="PartyName" placeholder="Enter Party Name" value="<?php echo $this->content[0]['PartyName']; ?>">
      </div>
    </div>
     <div class="form-group col-xs-6">
      <label class="control-label col-xs-6" for="RoutName">Rout Name:</label>
	  <div class="col-xs-6">          
        <input type="text" class="form-control" name="RoutName" id="RoutName" placeholder="Enter Rout Name" value="<?php echo $this->content[0]['RoutName']; ?>">
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
