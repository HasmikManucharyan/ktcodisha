<ul class="breadcrumb">
  <li><a href="#">Home</a></li>
  <li><a href="<?php echo URL; ?>master/vehicle">Master</a></li>
  <li><a href="<?php echo URL; ?>master/vehicle">Vehicle</a></li>
  <li><a href="<?php echo URL; ?>master/vehicleinsuranceregistration">Insurance Registration</a></li>
  <li>Add/Edit</li>
  <li class="pull-right"><a href="<?php echo URL; ?>master/vehicleinsuranceregistration">Back</a></li>
</ul> 
<p>
</p>
  <?php $Dated=$this->content[0]['Dated'];

														$VehicleNo=$this->content[0]['VehicleNo'];
														$VehicleType=$this->content[0]['VehicleType'];
														$VehicleCode=$this->content[0]['VehicleCode'];
														$InsuranceAmt=$this->content[0]['InsuranceAmt'];
														$InsuranceNo=$this->content[0]['InsuranceNo'];
														$InsuranceFromDate=$this->content[0]['InsuranceFromDate'];
														$InsuranceExpiryDate=$this->content[0]['InsuranceExpiryDate'];
														$InsuranceValue=$this->content[0]['InsuranceValue'];
														$HypotheticationWith=$this->content[0]['HypotheticationWith'];
														if($this->pick==''){
	
	$Dated=date('Y-m-d');
	$InsuranceFromDate=date('Y-m-d');
	$InsuranceExpiryDate=date('Y-m-d');
}
														
														?>
														
        <div class="col-md-12 column">
 <div class="panel panel-primary">
 <div class="panel-heading">Vehicle Insurance Registration
									
	                            </div>
	                            <div class="panel-body">  
  <form action="<?php echo URL; ?>master/edit_submit_vehicleinsurance" method="post" enctype="multipart/form-data" onsubmit="return confirm('Do you really want to submit the form?');">
   <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="Dated">Entry Date:</label>
      <div class="col-xs-6">          
        <input type="date" class="form-control" name="Dated" id="Dated" placeholder="Enter Entry Date" value="<?php echo $Dated; ?>">
      </div>
    </div>
    <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="VehicleNo">Vehicle Number:</label>
      <div class="col-xs-6">
        <input type="text" class="form-control" name="VehicleNo" id="VehicleNo" placeholder="Enter vehicle number" value="<?php echo $this->content[0]['VehicleNo']; ?>" readonly>
      </div>
    </div>
	<div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="VehicleType">vehicle Type:</label>
      <div class="col-xs-6"> 
 <select class="form-control" name="VehicleType" value="<?php echo $this->content[0]['VehicleType']; ?>">	
<option>16 Wheeler</option>
<option>18 Wheeler</option> 
        </select>
      </div>
    </div>
	<div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="VehicleCode">Vehicle Code:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="VehicleCode" id="VehicleCode" placeholder="Enter Vehicle Code" value="<?php echo $this->content[0]['VehicleCode']; ?>">
      </div>
</div>
     <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="InsuranceAmt">Insurance Ammount:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="InsuranceAmt" id="InsuranceAmt" placeholder="Enter Insurance Ammount" value="<?php echo $this->content[0]['InsuranceAmt']; ?>">
      </div>
    </div>
    <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="InsuranceNo">Insurance No:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="InsuranceNo" id="InsuranceNo" placeholder="Enter Insurance No" value="<?php echo $this->content[0]['InsuranceNo']; ?>">
     </div>
	 </div>
    <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="InsuranceFromDate">Insurance Start From:</label>
      <div class="col-xs-6">          
        <input type="date" class="form-control" name="InsuranceFromDate"  id="InsuranceFromDate" placeholder="Enter Insurance Start From" value="<?php echo $InsuranceFromDate; ?>">
      </div>
    </div>
    <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="InsuranceExpiryDate">Insurance Expiry:</label>
      <div class="col-xs-6">          
        <input type="date" class="form-control" name="InsuranceExpiryDate" id="InsuranceExpiryDate" placeholder="Enter Insurance Expiry" value="<?php echo $InsuranceExpiryDate; ?>">
      </div>
    </div>
    <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="InsuranceValue">Insurance To Value:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="InsuranceValue" id="InsuranceValue" placeholder="Enter Insurance To Value" value="<?php echo $InsuranceValue; ?>">
      </div>
    </div>
    <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="HypotheticationWith">Hypothetication:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="HypotheticationWith" id="HypotheticationWith" placeholder="Enter Hypothetication" value="<?php echo $this->content[0]['HypotheticationWith']; ?>">
      </div>
    </div>
	<!--<div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="fileupload">Upload Files:</label>
      <div class="col-xs-6" id="oldFiles">          
		<input type="file" class="form-control" name="fileupload[]" multiple="multiple" id="fileupload" value="upload">
			<?php 
			$i=0;
			foreach($this->contentFiles1 AS $key=>$value){
				//print_r($contentFiles);
				$i++;
						?>
					
			<div id="fileupload<?php echo $i; ?>" ><?php echo $value['attachments']."<br>"?> 
			<a href="javascript:removeHiddenInput('fileupload<?php echo $i?>')">Remove</a>
		<input type="hidden" name="fileupload[]" id="fileupload<?php echo $i; ?>" value="<?php echo $value['attachments']; ?>">	
		</div>
						<?php } ?>
		
      </div>
    </div> !-->
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
		<?php } ?>
		
       
          <div class="col-xs-16 form-group">        
      <div class="col-sm-offset-2 col-xs-8">
	  <?php
	 
	  if($this->pick==''){ ?>
        <button type="submit" class="btn btn-info form-control" value="submit" name="submit">Submit</button>
	  <?php } else { ?>
	  <input type="hidden" value="<?php echo $this->content[0]['id']; ?>" name="id" >
	  <button type="submit" class="btn btn-info form-control" value="update" name="submit">Update</button>
	  <?php } ?>
        </div>
    </div>
		</div>
	</form>
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
