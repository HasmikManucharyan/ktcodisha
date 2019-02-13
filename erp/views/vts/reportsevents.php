<title>(Event Report)</title>
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
  <script>
$(document).ready(function() {
$("#today").click(function(){
//alert("success");
var from = "<?php echo date('Y-m-d'); ?>";
var to = "<?php echo date('Y-m-d'); ?>";
var divobj1 = document.getElementById('from');
divobj1.value = from;
var divobj2 = document.getElementById('to');
divobj2.value = to;
});
$("#yesterday").click(function(){
//alert("success");
var to = "<?php echo date('Y-m-d'); ?>";
var from = "<?php echo date('Y-m-d', strtotime('-1 day')); ?>";
var divobj1 = document.getElementById('from');
divobj1.value = from;
var divobj2 = document.getElementById('to');
divobj2.value = to;
});
$("#week").click(function(){
//alert("success");
var to = "<?php echo date('Y-m-d'); ?>";
var from = "<?php echo date('Y-m-d', strtotime('-7 day')); ?>";
var divobj1 = document.getElementById('from');
divobj1.value = from;
var divobj2 = document.getElementById('to');
divobj2.value = to;
});
$("#month").click(function(){
//alert("success");
var to = "<?php echo date('Y-m-d'); ?>";
var from = "<?php echo date('Y-m-d', strtotime('-30 day')); ?>";
var divobj1 = document.getElementById('from');
divobj1.value = from;
var divobj2 = document.getElementById('to');
divobj2.value = to;
});
$("#lifetime").click(function(){
//alert("success");
var to = "<?php echo date('Y-m-d'); ?>";
var from = "<?php echo date('Y-m-d', strtotime('-90 day')); ?>";
var divobj1 = document.getElementById('from');
divobj1.value = from;
var divobj2 = document.getElementById('to');
divobj2.value = to;
});
});
</script>

 <div class="container">
	            <div class="row">
                 <div class="col-md-12">
  <div class="account-box">
  <span style="font-size:18px;"><strong>Event Report</strong></span>
  <br clear="all" />
<div class="or-box">
 </div>
<!-- From: <input type="date" name="from" id="from" value="<?php echo date('Y-m-d'); ?>" style="color:#000" readonly/>
                         To: <input type="date" name="to" id="to" value="<?php echo date('Y-m-d'); ?>" style="color:#000" readonly/>-->
			
		<center>
                       
                        <button type="button" class="btn btn-primary" name="today" id="today">Today</button>
                        <button type="button" class="btn btn-primary" name="yesterday" id="yesterday">Yesterday</button>
                        <button type="button" class="btn btn-primary" name="week" id="week">Week</button>
                        <button type="button" class="btn btn-primary" name="month" id="month">Month</button>
                        <button type="button" class="btn btn-primary" name="lifetime" id="lifetime">Life Time(3 Months)</button>
        </center>
  <form action="<?php echo URL; ?>vts/reportsevents" method="POST">
    
	
	<div class="form-group col-xs-6">
      <label class="control-label col-xs-6" for="deviceid">Devices:</label>
      <div class="col-xs-6"> 
 <select class="form-control" name="deviceId">	
  <?php 
					foreach($this->Alldevices AS $key=>$value){
						?>
 <option value="<?php echo $value['id']; ?>" <?php if($value['id']==$this->deviceId){ echo "selected=selected"; }?>><?php echo $value['name']; ?></option>
					<?php } ?>
 </select>
      </div>
    </div>
	<div class="form-group col-xs-6">
      <label class="control-label col-xs-6" for="date">From Date:</label>
      <div class="col-xs-6">          
       <input type="date" class="form-control" name="from" id="from" value="<?php echo $this->from; if($this->from==''){echo date('Y-m-d');} ?>"/>
      </div>
    </div> 
 
	<div class="form-group col-xs-6">
      <label class="control-label col-xs-6" for="date">To Date:</label>
      <div class="col-xs-6">          
       <input type="date" class="form-control" name="to" id="to" value="<?php echo $this->to; if($this->to==''){echo date('Y-m-d');} ?>"/>
      </div>
    </div> 

	<div class="col-xs-16 form-group">        
      <div class="col-sm-offset-2 col-xs-8">
      <button type="submit" class="btn btn-primary" value="submit" name="submit" style="background-color:#008000">Submit</button>
      </div>
    </div>
	    <br clear="all"/>
	 </form>
     
     <br>
     <br>
     <br>

	                            <div class="table-responsive">
                               
		<table id="example" class="cell-border tdesign" width="100%" cellspacing="0">
        										<thead><tr>
                                                <th>Time</th>
                                                <th>Type</th>
                                               	<th>geofence</th>
                                                </tr>
                                             </thead>
			
				<?php foreach($this->reportsevents AS $key=>$value){ ?>
                      
											 <tr>
											 <?php $time1=substr($value['serverTime'],0,19);
        $serverTime=str_replace('T',' ',$time1);
        $serverTime= date('Y-m-d H:i:s',strtotime('+5 hour +30 minutes',strtotime($serverTime)));
				?> 
											  	<td><?php echo $serverTime; ?></td>
												<td><?php echo $value['type']; ?></td>
												<td><?php echo $value['geofenceId']; ?></td>
                                              </tr>


					<?php } ?>
                     </table>
                     </div>
</div>

</div>
</div>
</div>
<script>

			$(document).ready(function() {
				$('#example').dataTable( {
					"iDisplayLength": 5,
    "aLengthMenu": [
      [5,10, 25, 50, -1],
      [5,10, 25, 50, "all"]
    ],
	responsive: true,
					"processing": true,
//"sAjaxSource":"data.php",
"pageLength": 5,
"dom": 'lBfrtip',
"buttons": [
{
extend: 'collection',
text: 'Export',
buttons: [
'copy',
'excel',
'csv',
'pdf',
'print'
]
}
]


				} );
			} );
		$.fn.dataTable.ext.errMode = 'throw';
</script>
