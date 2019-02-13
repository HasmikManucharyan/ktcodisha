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
  <?php
 $PartyCode=$this->content[0]['PartyCode'];
														$PartyName=$this->content[0]['PartyName'];
														$FullAddress=$this->content[0]['FullAddress'];
														$CityName=$this->content[0]['CityName'];
														$StateName=$this->content[0]['StateName'];
														$ContactPerson=$this->content[0]['ContactPerson'];
														$PANNo=$this->content[0]['PANNo'];
														$MobileNo=$this->content[0]['MobileNo'];
														$FAX=$this->content[0]['FAX'];
														$SSTNO=$this->content[0]['SSTNO'];
														$CSTNO=$this->content[0]['CSTNO'];
														$EmailId=$this->content[0]['EmailId'];
														$BankName=$this->content[0]['BankName'];
														$BankAccNo=$this->content[0]['BankAccNo'];
														$IFCCode=$this->content[0]['IFCCode'];
														
														
														?>
<div class="container">
    <div class="row">
         <div class="col-md-12">
              <div class="account-box">
 <span style="font-size:18px;"><strong>Add /Edit party</strong></span><a href="<?php echo URL; ?>master/partymaster"><button id="btnAdd" type="button" class="btn btn-info pull-right"><i class="fa fa-angle-left"></i> Back</button></a>
 <br clear="all" />
<div class="or-box">
 </div>			
  <form class="form-horizontal" action="<?php echo URL; ?>master/edit_submit_partymaster" method="post">
  	<div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="partycode">Party Code:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="PartyCode" id="PartyCode" placeholder="Enter Party Code" value="<?php echo $this->content[0]['PartyCode']; ?>">
      </div>
    </div>
    <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="partyname">Party Name:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="PartyName" id="PartyName" placeholder="Enter Party Name" value="<?php echo $this->content[0]['PartyName']; ?>">
      </div>
    </div>
    <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6"for="address">Address:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="FullAddress" id="FullAddress" placeholder="Enter Address" value="<?php echo $this->content[0]['FullAddress']; ?>">
      </div>
    </div>
    <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="cityplace">City/Place:</label>
	  <div class="col-xs-6">          
        <input type="text" class="form-control" name="CityName" id="CityName" placeholder="Enter City Name" value="<?php echo $this->content[0]['CityName']; ?>">
      </div>
    </div>
    <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="statename">State Name:</label>
	  <div class="col-xs-6">          
        <input type="text" class="form-control" name="StateName" id="StateName" placeholder="Enter State Name" value="<?php echo $this->content[0]['StateName']; ?>">
      </div>
    </div>
     <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="contactperson">Contact Person:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="ContactPerson" id="contactperson" placeholder="Enter Contact Person" value="<?php echo $this->content[0]['ContactPerson']; ?>">
      </div>
    </div>
     <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="panno">PAN No:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="PANNO" id="PANNO" placeholder="Enter PAN No" value="<?php echo $this->content[0]['PANNO']; ?>">
      </div>
    </div>
     <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="mobno">MOB. No:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="MobileNo" id="MobileNo" placeholder="Enter MOB. No" value="<?php echo $this->content[0]['MobileNo']; ?>">
      </div>
    </div>
     <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="faxno">Fax No:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="FAX" id="FAX" placeholder="Enter Fax No" value="<?php echo $this->content[0]['FAX']; ?>">
      </div>
    </div>
     <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="sstno">SST No:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="SSTNO" id="SSTNO" placeholder="Enter SST No" value="<?php echo $this->content[0]['SSTNO']; ?>">
      </div>
    </div>
     <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="emailid">Email Id:</label>
      <div class="col-xs-6">          
        <input type="email" class="form-control" name="EmailId" id="EmailId" placeholder="Enter Email Id" value="<?php echo $this->content[0]['EmailId']; ?>">
      </div>
    </div>
     <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="cstno">CST No:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="CSTNO" id="CSTNO" placeholder="Enter CST No" value="<?php echo $this->content[0]['CSTNO']; ?>">
      </div>
    </div>
     <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="bankname">Bank Name:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="BankName" id="BankName" placeholder="Enter Bank Name" value="<?php echo $this->content[0]['BankName']; ?>">
      </div>
    </div>
     <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="bankaccno">Bank Account No:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="BankAccNo" id="BankAccNo" placeholder="Enter Bank Account No" value="<?php echo $this->content[0]['BankAccNo']; ?>">
      </div>
    </div>
     <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="ifsccd">IFSC Code:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="IFCCode" id="IFCCode" placeholder="Enter IFSC code" value="<?php echo $this->content[0]['IFCCode']; ?>">
      </div>
    </div>
    <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="ledgertype">Ledger Type:</label>
	  <div class="col-xs-6">          
        <input type="text" class="form-control" name="TrType" id="TrType" placeholder="Enter IFSC code" value="<?php echo $this->content[0]['TrType']; ?>">
      </div>
    </div>
    <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="wrknstat">Working Status</label>
      <div class="col-xs-6">  
<div class="radio" name="WorkingStatusYN" value="<?php echo $this->content[0]['WorkingStatusYN']; ?>">
          <label><input type="radio" name="book"> Yes</label>
		  <label><input type="radio" name="book"> No</label>
		  
        </div>	  
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