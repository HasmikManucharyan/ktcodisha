
<p><a href="<?php echo URL; ?>master/">Master >></a>Vendor >><a href="<?php echo URL; ?>master/partymaster">Party Master >> </a>Edit</p>
<a href="<?php echo URL; ?>master/vendor" class="btn btn-info" role="button">Back</a>
<?php
 // $VehicleNO=$this->pick;
  ?>
  <?php
 $VendorCode=$this->content[0]['VendorCode'];
														$VendorName=$this->content[0]['VendorName'];
														$VendorShortName=$this->content[0]['VendorShortName'];
														$FullAddress=$this->content[0]['FullAddress'];
														$CityName=$this->content[0]['CityName'];
														$StateName=$this->content[0]['StateName'];
														$ContactPerson=$this->content[0]['ContactPerson'];
														$PANNO=$this->content[0]['PANNO'];
														$MobileNo=$this->content[0]['MobileNo'];
														$Fax=$this->content[0]['Fax'];
														$SSTNO=$this->content[0]['SSTNO'];
														$CSTNO=$this->content[0]['CSTNO'];
														$EmailId=$this->content[0]['EmailId'];
														$BankName=$this->content[0]['BankName'];
														$BankAccNo=$this->content[0]['BankAccNo'];
														$IFCCode=$this->content[0]['IFCCode'];
														$TrType=$this->content[0]['TrType'];
														
														?>
<div class="container">
    <div class="row clearfix">
        <div class="col-md-12 column">
<center><h1>Vendor</h1></center>

  <form class="form-horizontal" action="<?php echo URL; ?>master/edit_submit_vendor" method="post" enctype="multipart/form-data">
  	<div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="VendorCode">Vendor Code:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="VendorCode" id="VendorCode" placeholder="Enter Party Code" value="<?php echo $VendorCode; ?>">
      </div>
    </div>
    <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="VendorName">Vendor Name:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="VendorName" id="VendorName" placeholder="Enter Party Name" value="<?php echo $VendorName; ?>">
      </div>
    </div>
    <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6"for="FullAddress">Address:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="FullAddress" id="FullAddress" placeholder="Enter Address" value="<?php echo $FullAddress; ?>">
      </div>
    </div>
    <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="CityName">City/Place:</label>
	  <div class="col-xs-6">          
        <input type="text" class="form-control" name="CityName" id="CityName" placeholder="Enter City Name" value="<?php echo $CityName; ?>">
      </div>
    </div>
    <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="StateName">State Name:</label>
	  <div class="col-xs-6">          
        <input type="text" class="form-control" name="StateName" id="StateName" placeholder="Enter State Name" value="<?php echo $StateName; ?>">
      </div>
    </div>
     <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="ContactPerson">Contact Person:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="ContactPerson" id="ContactPerson" placeholder="Enter Contact Person" value="<?php echo $ContactPerson; ?>">
      </div>
    </div>
     <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="PANNO">PAN No:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="PANNO" id="PANNO" placeholder="Enter PAN No" value="<?php echo $PANNO; ?>">
      </div>
    </div>
     <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="MobileNo">MOB. No:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="MobileNo" id="MobileNo" placeholder="Enter MOB. No" value="<?php echo $MobileNo; ?>">
      </div>
    </div>
     <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="Fax">Fax No:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="Fax" id="Fax" placeholder="Enter Fax No" value="<?php echo $Fax; ?>">
      </div>
    </div>
     <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="SSTNO">SST No:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="SSTNO" id="SSTNO" placeholder="Enter SST No" value="<?php echo $SSTNO; ?>">
      </div>
    </div>
     <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="EmailId">Email Id:</label>
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
    </div>
	 <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="fileupload">Upload Files:</label>
      <div class="col-xs-6" id="oldFiles">          
		<input type="file" name="fileupload[]" multiple="multiple" id="fileupload" value="uplpad">
			<?php 
			$j=0;
			foreach($this->contentFiles1 AS $key=>$value){
				//print_r($contentFiles);
				$j++;
						?>
					
			<div id="fileupload<?php echo $j; ?>" ><?php echo $value['attachments']."<br>"?> 
			<a href="javascript:removeHiddenInput('fileupload<?php echo $j?>')">Remove</a>
		<input type="hidden" name="fileupload[]" id="fileupload<?php echo $j; ?>" value="<?php echo $value['attachments']; ?>">	
		</div>
						<?php } ?>
		
      </div>
    </div> 
	<?php
	foreach($this->attachments as $key3=> $value3){
								$sl_no++;
								?>
		<div id="g<?php echo $sl_no; ?>">
		<input type="hidden" name="fileupload1[]" value="<?php echo $value3['attachments']; ?>">
		<a href="<?php echo "/ed/".$base_dir."/".$value3['attachments']; ?>" class="SmallLnk" target="_blank">
		<?php echo $value3['attachments']; ?></a>
		&nbsp;&nbsp;
		<a href="javascript:removeFileAttach('g<?php echo $sl_no; ?>');" class="SmallLnk" style="color: #FF6600">Remove</a></div>
		<?php } ?></div>
		
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

<script language="javascript">
var upload_number1 = <?php echo ($sl_no+1); ?>; function addFileAttach() { var d = document.createElement("div"); var l = document.createElement("a"); var file = document.createElement("input");file.setAttribute("type", "file"); file.setAttribute("size", "55"); file.setAttribute("name", "fileupload[]"); l.setAttribute("href", "javascript:removeFileAttach('g"+upload_number1+"');");l.setAttribute("class", "form-control");l.setAttribute("style", "color:#FF6600"); l.appendChild(document.createTextNode(" Remove")); d.setAttribute("id", "g"+upload_number1); d.appendChild(file); d.appendChild(l); document.getElementById("moreUploadsAttach").appendChild(d); upload_number1++; }

function removeFileAttach(i) { var elm = document.getElementById(i);document.getElementById("moreUploadsAttach").removeChild(elm); }
	var upload_number = 2; function addFileInput() { var d = document.createElement("div"); var l = document.createElement("a"); var file = document.createElement("input"); file.setAttribute("type", "file");file.setAttribute("class", "form-control"); file.setAttribute("name", "fileupload[]"); file.setAttribute("size", "55");l.setAttribute("href", "javascript:removeFileInput('f"+upload_number+"');");l.setAttribute("class", "SmallLnk");l.setAttribute("style", "color:#FF6600"); l.appendChild(document.createTextNode(" Remove")); d.setAttribute("id", "f"+upload_number); d.appendChild(file); d.appendChild(l); document.getElementById("moreUploads").appendChild(d); upload_number++; }
function removeFileInput(i) { var elm = document.getElementById(i); document.getElementById("moreUploads").removeChild(elm); }
function removeHiddenInput(i) { var elm = document.getElementById(i); document.getElementById("oldFiles").removeChild(elm); }
</script>
  <script>
function confirmDelete(delUrl) {
  if (confirm("Are you sure you want to delete")) {
    document.location = delUrl;
  }
}
</script>