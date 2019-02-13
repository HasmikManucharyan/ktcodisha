
<p><a href="<?php echo URL; ?>master/">Master >></a><a href="<?php echo URL; ?>master/workorder">Work order >></a><a href="<?php echo URL; ?>master/doregistration">Do Registration >> </a>Edit</p>
<a href="<?php echo URL; ?>master/doregistration" class="btn btn-info" role="button">Back</a>

<?php
 // $VehicleNO=$this->pick;
  ?>
  <?php
 $DoCode=$this->content[0]['DoCode'];
														$DoNoParty=$this->content[0]['DoNoParty'];
														$PONo=$this->content[0]['PONo'];
														$DateOfParty=$this->content[0]['DateOfParty'];
														$DoDate=$this->content[0]['DoDate'];
														$ExpireDate=$this->content[0]['ExpireDate'];
														$MinesName=$this->content[0]['MinesName'];
														$CoalGrade=$this->content[0]['CoalGrade'];
														$DoQty=$this->content[0]['DoQty'];
														$AllotmentQty=$this->content[0]['AllotmentQty']; 
														$BiltyCommission=$this->content[0]['BiltyCommission'];
														if($this->pick==''){
	
	$DateOfParty=date('Y-m-d');
	$DoDate=date('Y-m-d');
	$ExpireDate=date('Y-m-d');
	
}
														
														?>
<div class="container">
    <div class="row clearfix">
        <div class="col-md-12 column">
<center><h1>Do Registration</h1></center>
  <form class="form-horizontal" action="<?php echo URL; ?>master/edit_submit_doregistration" method="post">
   <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="DoCode">Do Code:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="DoCode" id="DoCode" placeholder="Enter Do Code" value="<?php echo $this->content[0]['DoCode']; ?>">
      </div>
    </div>
     <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="DoNoParty">Do No/Party:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="DoNoParty" id="DoNoParty" placeholder="Enter Do No/Party" value="<?php echo $this->content[0]['DoNoParty']; ?>">
      </div>
    </div>
     <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="PONo">P.O No:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="PONo" id="PONo" placeholder="Enter P.O No" value="<?php echo $this->content[0]['PONo']; ?>">
      </div>
    </div>
    <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="doparty">Date Of Party:</label>
      <div class="col-xs-6">   
  <input type="date" class="form-control" name="DateOfParty" value="<?php echo $DateOfParty; ?>">	

      </div>
    </div>
     <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="DoDate">Do Date:</label>
      <div class="col-xs-6">          
        <input type="date" class="form-control" name="DoDate" id="DoDate" placeholder="Enter Do Date" value="<?php echo $DoDate; ?>">
      </div>
    </div>
     <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="ExpireDate">Expire Date:</label>
      <div class="col-xs-6">          
        <input type="date" class="form-control" name="ExpireDate" id="ExpireDate" placeholder="Enter Expire Date" value="<?php echo $ExpireDate; ?>">
      </div>
    </div>
     <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="MinesName">Mines Name:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="MinesName" id="MinesName" placeholder="Enter Mines Name" value="<?php echo $this->content[0]['MinesName'];?>">
      </div>
    </div>
     <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="CoalGrade">Coal Grade:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="CoalGrade" id="CoalGrade" placeholder="Enter Coal Grade" value="<?php echo $this->content[0]['CoalGrade']; ?>">
      </div>
    </div>
      <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="DoQty">Do Qty:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="DoQty" id="DoQty" placeholder="Enter Do Qty" value="<?php echo $this->content[0]['DoQty']; ?>">
      </div>
    </div>
      <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="AllotmentQty">Allotment Qty:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="AllotmentQty" id="AllotmentQty" placeholder="Enter Allotment Qty" value="<?php echo $this->content[0]['AllotmentQty']; ?>">
      </div>
    </div>
      <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="BiltyCommission">Bilty Commission:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="BiltyCommission" id="BiltyCommission" placeholder="Enter Bilty Commission" value="<?php echo $this->content[0]['BiltyCommission']; ?>">
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