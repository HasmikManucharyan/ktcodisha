
<p><a href="<?php echo URL; ?>master/">Master >> </a><a href="<?php echo URL; ?>master/itemmaster">Item Master >> </a>Edit</p>
<a href="<?php echo URL; ?>master/itemmaster" class="btn btn-info" role="button">Back</a>

<?php
 // $VehicleNO=$this->pick;
  ?>
  <?php
 $ItemCode=$this->content[0]['ItemCode'];
														$ItemType=$this->content[0]['ItemType'];
														$ItemCompany=$this->content[0]['ItemCompany'];
														$CategoryName=$this->content[0]['CategoryName'];
														$ItemName=$this->content[0]['ItemName'];
														$UnitName=$this->content[0]['UnitName'];
														
														?>
<div class="container">
    <div class="row clearfix">
        <div class="col-md-12 column">
<center><h1>Item Master</h1></center>
<form class="form-horizontal" action="<?php echo URL; ?>master/edit_submit_itemmaster" method="post">
  <div class="form-group col-xs-6">
      <label class="control-label col-xs-6" for="ItemCode">Item Code:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="ItemCode" id="ItemCode" placeholder="Enter Item Code" value="<?php echo $this->content[0]['ItemCode']; ?>">
      </div>
    </div>
    <div class="form-group col-xs-6">
      <label class="control-label col-xs-6" for="ItemType">Item Type:</label>
	<div class="col-xs-6">          
        <input type="text" class="form-control" name="ItemType" id="ItemType" placeholder="Enter Item Code" value="<?php echo $this->content[0]['ItemType']; ?>">
      </div>     
    </div>
     <div class="form-group col-xs-6">
      <label class="control-label col-xs-6" for="ItemCompany">Item Company:</label>
	  <div class="col-xs-6">          
        <input type="text" class="form-control" name="ItemCompany" id="ItemCompany" placeholder="Enter Item Code" value="<?php echo $this->content[0]['ItemCompany']; ?>">
      </div>   
    </div>
     <div class="form-group col-xs-6">
      <label class="control-label col-xs-6" for="value="<?php echo $this->content[0]['CategoryName']; ?>"">Catagory Name:</label>
	  <div class="col-xs-6">          
        <input type="text" class="form-control" name="CategoryName" id="CategoryName" placeholder="Enter Item Code" value="<?php echo $this->content[0]['CategoryName']; ?>">
      </div> 
    </div>
    <div class="form-group col-xs-6">
      <label class="control-label col-xs-6" for="ItemName">Item Name:</label>
	  <div class="col-xs-6">          
        <input type="text" class="form-control" name="ItemName" id="ItemName" placeholder="Enter Item Code" value="<?php echo $this->content[0]['ItemName']; ?>">
      </div>
    </div>
     <div class="form-group col-xs-6">
      <label class="control-label col-xs-6" for="UnitName">Unit Name:</label>
	  <div class="col-xs-6">          
        <input type="text" class="form-control" name="UnitName" id="UnitName" placeholder="Enter Item Code" value="<?php echo $this->content[0]['UnitName']; ?>">
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
