 <title>(Computed Trip Reports)</title>
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

 <?php
 $latlng = array();
foreach($this->Allgeofences AS $key=>$value){
	$id = $value['id'];
    $name = $value['name'];
	$desc = $value['description'];
	$resulot=$value['area'];
	$resulot=substr($resulot,9);
	$resulot=substr($resulot,0,-2);
	$TempRes=split(',',$resulot);
	$num=count($TempRes);

for ($i=0; $i < $num; $i++) {
$finalRes=split(' ',$TempRes[$i]);
//echo "<pre>";
//print_r($finalRes);	
if(count($finalRes)==2){
	  $y = floatval($finalRes[0]);
    $x = floatval($finalRes[1]);
	}else {
		$y = floatval($finalRes[1]);
    $x = floatval($finalRes[2]);
		}
  
    array_push($latlng, array($name,$desc,$y,$x));
}

}

		
function GetNearestSite($lat,$long,$latlng){
	$ref = array($lat, $long);
  //  print_r($ref);
$distances = array_map(function($item) use($ref) {
    $a = array_slice($item, -2);
	
    return getDistance($a, $ref);
}, $latlng);

	
asort($distances);

echo  $latlng[key($distances)][0] .' '.round($distances[key($distances)],1).' km' ;

	}
 ?>
 <style>
  table.tdesign tr.odd { background-color:  whitesmoke; }
table.tdesign tr.even { background-color: white;  }	
 table.tdesign th {
        background: #d9edf7;
        color: #000;
        padding: 2px;
		border: 1px solid #ccc;
    }
	table.tdesign th.focus,table.tdesign td.focus{outline:3px solid #3366FF;outline-offset:-1px}
  </style>
  <div class="container">
	            <div class="row">
                 <div class="col-md-12">
  <div class="account-box">
  <span style="font-size:18px;"><strong>Computed Trip Report</strong></span>
  <br clear="all" />
<div class="or-box">
 </div>
 <center>
                       
                        <button type="button" class="btn btn-primary" name="today" id="today">Today</button>
                        <button type="button" class="btn btn-primary" name="yesterday" id="yesterday">Yesterday</button>
                        <button type="button" class="btn btn-primary" name="week" id="week">Week</button>
                        <button type="button" class="btn btn-primary" name="month" id="month">Month</button>
                        <button type="button" class="btn btn-primary" name="lifetime" id="lifetime">Life Time(3 Months)</button>
        </center>
<form action="<?php echo URL; ?>vts/computeTrips" method="POST">
    
	
	<div class="form-group col-xs-6">
      <label class="control-label col-xs-6" for="date">From Date:</label>
      <div class="col-xs-6">          
       <input type="date" class="form-control" name="from" id="from" value="<?php echo $this->from; if($this->from==''){echo date('Y-m-d');}?>"/>
       
      </div>
    </div> 
 
	<div class="form-group col-xs-6">
      <label class="control-label col-xs-6" for="date">To Date:</label>
      <div class="col-xs-6">          
       <input type="date" class="form-control" name="to" id="to" value="<?php echo $this->to; if($this->to==''){echo date('Y-m-d');}?>"/>
      </div>
    </div> 
	<div class="form-group col-xs-6">
      <label class="control-label col-xs-6" for="date">GeoFence</label>
      <div class="col-xs-6">          
       <input type="text" class="form-control" name="GeoFence" id="GeoFence" value="<?php echo $this->GeoFence; ?>"/>
      </div>
	</div> 
	
	<div class="form-group col-xs-6">
      <label class="control-label col-xs-6" for="date">Entry Angle</label>
      <div class="col-xs-6">          
       <input type="text" class="form-control" name="Angle" id="Angle" value="<?php echo $this->Angle; ?>"/>
      </div>
    </div> 
	<div class="col-xs-16 form-group">        
      <div class="col-xs-6">
      <button type="submit" class="btn btn-info" value="submit" name="submit" style="background-color:#008000">Submit</button>
      </div>
    </div>
	<br clear="all" />
	<script>
var pstartLat=[],pstartLon=[],pendLat=[],pendLon=[];
</script>
	
    <div class="col-md-6">
	
<!--<div><a href="#" onClick="javascript:StopTimer();">stop</a> <a href="#" onClick="javascript:startTimer();">play</a> <a href="#" onClick="javascript:resetTimer();">reset</a></div>
!-->




	<div id="myStatus"></div>
	
	</div>
	
	    <br clear="all"/>
	 </form>
     
     <br>
     <br>
     <br>

	                            <div>
        <script>
		var myRoute;
 function route(id1,from1,to1) {
	 $('#myStatus').text("loading....");
$.ajax({
url: "<?php echo URL; ?>vts/routeinfo",
type: "GET",
data: {
deviceId : id1,
from : from1,
to : to1
},
dataType: "json",
success: function(myData) {

	//myRoute =  JSON.stringify(myData);
	//alert(loaded);	
	startTimer(myData);
	$('#myStatus').text("loaded");
	}	
});
 //return false; 
}
</script>      
<?php
  function check_direction($course,$angle){
	$minAngle = $angle-90;
	if($minAngle<0){$minAngle=$minAngle+360;}
	$maxAngle = $angle+90;
	if($maxAngle>360){$maxAngle=$maxAngle-360;}

	//if($course >=140 and $course <=300){
if($course >=$minAngle and $course <=$maxAngle){
	return "New Trip";
	
}else{
	return "Trip In Transit";
	
}

  }
  echo "<pre>";
 // print_r($this->alldeviceTrips);
  echo "</pre>";
?>
		<table class="cell-border tdesign" width="100%" cellspacing="0" style="display:none;">
        										<thead><tr>
                                               <th>Device Name</th>
											   <th>Event ID</th>
                                               <th>Time</th>
                                               <th>Site</th>
											   <th>Direction</th>
                                               <th>PositionID</th>
                                               <th>Event</th>
											   <th>Debug</th>
										     </tr>
                                             </thead>
			
				<?php 
				$showResult=true;
				$prevResult="1";
				$currentVehicle=0;
				$tripCounterIn = 0;
				$tripCounterOut = 0;
				$resultTable="<table class='cell-border tdesign' id='example'>";
				$resultTable.="<thead><tr><th>Vehicle</th><th>ENTRY</th><th>IN TRIP</th><th>EXIT</th><th>OUT TRIP</th><th>LOADING TIME</th></tr></thead>";
				foreach($this->alldeviceTrips AS $key=>$value){ 
             ?>

			 <?php
			 if($currentVehicle != $value['vehicle'] and $currentVehicle>0) {
				if($prevTime!=0){
					$resultTable.="<tr><td>".$currentVehicle."</td><td>".$prevTime."</td><td>[".$tripCounterIn."]</td><td></td><td></td><td></td></tr>";
				}else{
					
				}
				?>
	<tr style="background-color:#cccccc;">
		<td><?php echo $currentVehicle; 
											  
											 ?></td>
		<td>IN</td>
		<td>OUT</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td><?php echo "Trip IN: ".$tripCounterIn;
			      echo "<br/>Trip OUT: ".$tripCounterOut;
		?></td>
	</tr>	
				<?php
				$prevTime=0;
			} // vehicle if
				?>
											 <tr>
											  
											   <td><?php echo $value['vehicle']; 
											  
											 ?></td>
											 <td><?php echo $value['id']; 
											  
											 ?></td>
											   <td><?php echo $value['servertime']; ?></td>
											   <td><?php echo $value['name']." [".$value['geofenceid']."]"; ?></td>
											   <td><?php echo $value['course']; 
											   
										     ?></td>
											   <td><?php echo $value['positionid']; ?></td>
									
												<td><?php echo $value['type']; ?></td>
												<td><?php  
												$result = check_direction($value['course'],$this->Angle);
												/*
												if($currentVehicle == $value['vehicle'] and $prevResult==$result ){
													$showResult=false;
													$prevResult="";
												 }

												 */
												 if($currentVehicle != $value['vehicle']) {
													$prevResult="";
												 }
												if(($value['type']=="geofenceExit" or $value['type']=="geofenceEntry") and ($value['geofenceid']==$this->GeoFence)){
													//or $value['geofenceid']==278
													$result = check_direction($value['course'],$this->Angle);

													$Time = $value['servertime'];
													if($result=="New Trip"){
														$timeVar = "IN";
														$prevTime = $Time;
														//$tripIN[$value['vehicle']]=
													//	$tripCounterIn+=1;
													} else {
														$timeVar = "OUT"; 
													//	$tripCounterOut+=1;
													}
													//and $currentVehicle<> $value['vehicle']  and $prevGooFence!="283"
													if($prevResult!=$result){
														if($result=="New Trip"){
															$Intrips[$value['deviceid']]+=1;
															$tripCounterIn+=1;
														} else {
															if($prevTime!=0){
															$tripCounterOut+=1;
															$Outtrips[$value['deviceid']]+=1;
															} else {
																//$tripCounterYesOut+=1;
															}
														}

														
														echo $result."<br/>".$timeVar.":".date("H:i:s",strtotime($Time));

														if($prevTime!=0){
															//echo "<td>".$value['vehicle']."</td>"."<td>";
														}else{
															$resultTable.="<tr><td>".$value['vehicle']."</td><td></td><td></td><td>".$Time."</td><td></td><td></td></tr>";
														}
														
														if($timeVar=="OUT" and $prevTime!=0){
															//($time2 - $time1) / 3600
															$loadingTime  = date("H:i:s",strtotime("1980-01-01 00:00:00") +(strtotime($Time)-strtotime($prevTime)));
															echo "<br/>".$loadingTime;
															
															echo "<br/>Trip No :".$tripCounterIn;
															
															$resultTable.="<tr><td>".$value['vehicle']."</td><td>".$prevTime."</td><td>[".$tripCounterIn."]</td><td>".$Time."</td><td>[".$tripCounterOut."]</td><td>".$loadingTime."</td></tr>";
															$prevTime=0;
														}

														$prevResult= $result;
														
													}
														
												}
												/*
												if($value['type']=="geofenceExit"  and  $value['geofenceid']==283  ){
													echo $result;
												 } 
												 */
												 //and $currentVehicle== $value['vehicle'] and $prevGooFence=="278"
												 // echo "<br/>".$prevResult." ".$currentVehicle." ".$result;
												 //if($result=)
												 $prevGooFence = $value['geofenceid'];
												// if($prevResult!="")
												 
												 
												$currentVehicle = $value['vehicle'];
												
												
												
												?></td>
                    
												
												</tr>


					<?php
			 		
				} ?>
                     </table>
					 <style>
.myTable table, th, td {
    border: 1px solid black;
	padding: 5px;
}
</style>
					 <?php $resultTable.="</table>";
					 echo $resultTable; 
					 
					// echo "<pre>";
					// print_r($Intrips);
					// print_r($Outtrips);
					 ?>
                     </div>
</div>

</div>
</div>
</div>
                                               <script>

			$(document).ready(function() {
				var events = $('#details');
				$('#example').DataTable( {
				
					"iDisplayLength": -1,
    "aLengthMenu": [
      [5,10, 25, 50, -1],
      [5,10, 25, 50, "all"]
    ],
	responsive: false,
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
 

 
												
												
