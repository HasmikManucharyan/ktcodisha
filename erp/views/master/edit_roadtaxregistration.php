<ul class="breadcrumb">
  <li><a href="#">Home</a></li>
  <li><a href="<?php echo URL; ?>master/vehicle">Master</a></li>
  <li><a href="<?php echo URL; ?>master/vehicle">Vehicle</a></li>
  <li><a href="<?php echo URL; ?>master/roadtaxregistration">Road Tax Registration</a></li>
  <li>Add/Edit</li>
  <li class="pull-right"><a href="<?php echo URL; ?>master/roadtaxregistration">Back</a></li>
</ul>
<?php
 $EntryDate=$this->content[0]['EntryDate'];
														$VehicleNo=$this->content[0]['VehicleNo'];
														$vehicleType=$this->content[0]['vehicleType'];
														$VehicleCode=$this->content[0]['VehicleCode'];
														$RoadTaxNo=$this->content[0]['RoadTaxNo'];
														$RoadTaxStart=$this->content[0]['RoadTaxStart'];
														$RoadTaxExpiry=$this->content[0]['RoadTaxExpiry'];
														$RoadTaxAmmount=$this->content[0]['RoadTaxAmmount'];
														if($this->pick==''){
	
	$EntryDate=date('Y-m-d');
	$RoadTaxStart=date('Y-m-d');
	$RoadTaxExpiry=date('Y-m-d');
	
}
?>
 <div class="col-md-12 column">
 <div class="panel panel-primary">
 <div class="panel-heading">Road Tax Registration</div>
 <div class="panel-body">  	
  <form class="form-horizontal" action="<?php echo URL; ?>master/edit_submit_roadtax" method="post">
   <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="entrydate">Entry Date:</label>
      <div class="col-xs-6">          
        <input type="date" class="form-control" name="EntryDate" id="EntryDate" placeholder="Enter Entry Date" value="<?php echo $EntryDate; ?>">
      </div>
    </div>
    <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="VehicleNo">Vehicle Number:</label>
      <div class="col-xs-6">
        <input type="text" class="form-control" name="VehicleNo" id="VehicleNo" placeholder="Enter vehicle number" value="<?php echo $this->content[0]['VehicleNo']; ?>">
      </div>
    </div>
	<div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="vehicletype">vehicle Type:</label>
      <div class="col-xs-6"> 
 <select class="form-control" name="vehicleType" value="<?php echo $this->content[0]['vehicleType']; ?>">	
<option>16 Wheeler</option>
<option>18 Wheeler</option> 

        </select>
      </div>
    </div>
	<div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="vehiclecode">Vehicle Code:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="VehicleCode" id="VehicleCode" placeholder="Enter Vehicle Code" value="<?php echo $this->content[0]['VehicleCode']; ?>">
      </div>
    </div>
	
     
    <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="roadtaxno">Road Tax No:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="RoadTaxNo" id="RoadTaxNo" placeholder="Enter Road Tax No" value="<?php echo $this->content[0]['RoadTaxNo']; ?>" >
      </div>
    </div>
   
    <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="roadtaxstart">Road Tax Start :</label>
      <div class="col-xs-6">          
        <input type="date" class="form-control" name="RoadTaxStart" id="RoadTaxStart" placeholder="Enter Road Tax Start From" value="<?php echo $RoadTaxStart; ?>">
      </div>
    </div>
    <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="roadtaxexpiry">Road Tax Expiry:</label>
      <div class="col-xs-6">          
        <input type="date" class="form-control" name="RoadTaxExpiry" id="RoadTaxExpiry" placeholder="Enter Road Tax Expiry" value="<?php echo $RoadTaxExpiry; ?>">
      </div>
    </div>
     <div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="roadtaxammount">Road Tax Ammount:</label>
      <div class="col-xs-6">          
        <input type="text" class="form-control" name="RoadTaxAmmount" id="RoadTaxAmmount" placeholder="Enter Road Tax Ammount" value="<?php echo $this->content[0]['RoadTaxAmmount']; ?>">
      </div>
    </div>
    <!--<div class="col-xs-6 form-group">
      <label class="control-label col-xs-6" for="fileupload">Upload Files:</label>
      <div class="col-xs-6" id="oldFiles">          
		<input type="file" name="fileupload[]" multiple="multiple" id="fileupload" value="upload">
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
	  <input type="hidden" value="<?php echo $this->content[0]['id']; ?>" name="id">
	  <button type="submit" class="btn btn-info form-controlt" value="update" name="submit">Update</button>
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