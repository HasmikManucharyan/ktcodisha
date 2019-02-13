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
  
    array_push($latlng, array($id,$name,$desc,$y,$x));
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

return  $latlng[key($distances)][0]; //.' '.round($distances[key($distances)],1).' km' ;

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


<div id="map" style="width:1060px;height:475px;background:white"></div>
	
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&key=AIzaSyDvoRDqzE5AutQBzNBrYna6c0e3FyJPJ1g&country=IN"></script>

<br></br>
	<div id="myStatus"></div>
	<div><a href="javascript:void(0)" onClick="javascript:clearMyMap();" class="btn btn-info">ClearMap</a></div>
	</div>
	
	    <br clear="all"/>
	 </form>
     
     <br>
     <br>
     <br>

	                            <div class="table-responsive">
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
if($minAngle<$maxAngle){

if($course >=$minAngle and $course <=$maxAngle){
	return "New Trip";
	
}else{
	return "Trip In Transit";
	
}
}else {
	if($course >=$minAngle or $course <=$maxAngle){
		return "New Trip";
		
	}else{
		return "Trip In Transit";
		
	}

}

  }
  echo "<pre>";
 // print_r($this->alldeviceTrips);
  echo "</pre>";
?>
<div class="form-group col-xs-6">
      <label class="control-label col-xs-6" for="date">Min</label>
      <div class="col-xs-6">          
       <input type="text" class="form-control" name="Min" id="Min" value=""/>
      </div>
	</div> 
	
	<div class="form-group col-xs-6">
      <label class="control-label col-xs-6" for="date">Max</label>
      <div class="col-xs-6">          
       <input type="text" class="form-control" name="Max" id="Max" value=""/>
      </div>
    </div> 
		<table id="example" class="cell-border tdesign" width="100%" cellspacing="0">
        										<thead><tr>
                                               <th>Device Name</th>
											   <th>Event ID</th>
                                               <th>Time</th>
											   <th>Site</th>
											   <th>Geofence</th>
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
				
				foreach($this->alldeviceTrips AS $key=>$value){ 
             ?>

			 <?php
			 if($currentVehicle != $value['deviceid'] and $currentVehicle>0) {

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
											  
											   <td><?php echo $value['deviceid']; 
											  
											 ?></td>
											 <td><?php echo $value['id']; 
											  
											 ?></td>
											   <td><?php echo $value['servertime']; ?></td>
											   <td><?php // GetNearestSite($value['latitude'],$value['longitude'],$latlng);	
											   $myGeofence=GetNearestSite($value['latitude'],$value['longitude'],$latlng);
											   ?></td>
											   <td><?php echo $myGeofence;
											   
										     ?></td>
											   <td><?php echo $value['course']; 
											   
										     ?></td>
											   <td><?php echo $value['id']; ?></td>
									
												<td><?php echo $value['type']; ?></td>
												<td><?php  
												$result = check_direction($value['course'],$this->Angle);
												/*
												if($currentVehicle == $value['vehicle'] and $prevResult==$result ){
													$showResult=false;
													$prevResult="";
												 }

												 */
												
												 if($currentVehicle != $value['deviceid']) {
													$prevResult="";
												 }
												//if(($value['type']=="geofenceExit" or $value['type']=="geofenceEnter")  and ($value['geofenceid']== $this->GeoFence)){
													//or $value['geofenceid']==278
														if($myGeofence== $this->GeoFence){
													$result = check_direction($value['course'],$this->Angle);

													$Time = $value['servertime'];
													if($result=="New Trip"){
														$timeVar = "IN";
														$prevTime = $Time;
													//	$tripCounterIn+=1;
													} else {
														$timeVar = "OUT"; 
													//	$tripCounterOut+=1;
													}
													//and $currentVehicle<> $value['vehicle']  and $prevGooFence!="283"
													
													if($prevResult!=$result){
														$timeDiff = round(abs(strtotime($Time)-strtotime($prevTime)) / 60,2);
														
														
														
														echo $result."<br/>".$timeVar.":".date("H:i:s",strtotime($Time));
														$loadingTime  = date("H:i:s",strtotime("1980-01-01 00:00:00") +(strtotime($Time)-strtotime($prevTime)));
														if($timeVar=="OUT" and $prevTime!=0){
															if($timeDiff>60){
															//($time2 - $time1) / 3600
														//	$loadingTime  = date("H:i:s",strtotime("1980-01-01 00:00:00") +(strtotime($Time)-strtotime($prevTime)));
															echo "<br/>Load:".$loadingTime;
															
															//echo "<br/>Trip No :".$tripCounterIn;
															$prevTime=0;
														}
														
														}
														if($result=="New Trip"){
															$tripCounterIn+=1;
														} else {
															$tripCounterOut+=1;
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
												// $prevGooFence = $value['geofenceid'];
												// if($prevResult!="")
												 
												 
												$currentVehicle = $value['deviceid'];
												
												
												
												?></td>
                    
												
												</tr>


					<?php
			 		
				} ?>
                     </table>
                     </div>
</div>

</div>
</div>
</div>
                                               <script>
$.fn.dataTable.ext.search.push(
    function( settings, data, dataIndex ) {
        var min = parseInt( $('#Min').val(), 10 );
        var max = parseInt( $('#Max').val(), 10 );
        var age = parseFloat( data[4] ) || 0; // use data for the age column
 
        if ( ( isNaN( min ) && isNaN( max ) ) ||
             ( isNaN( min ) && age <= max ) ||
             ( min <= age   && isNaN( max ) ) ||
             ( min <= age   && age <= max ) )
        {
            return true;
        }
        return false;
    }
);

			$(document).ready(function() {


				var events = $('#details');
			var oTable=$('#example').DataTable( {
				
					"iDisplayLength": -1,
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
	  $('#Min').keyup( function() { oTable.draw(); } );
      $('#Max').keyup( function() { oTable.draw(); } );	
			} );
	
		$.fn.dataTable.ext.errMode = 'throw';
</script>
 

<script>

	var allMarker=[],allPoly=[],marker,marker1;
	
	//var marker;
  var mapCanvas = document.getElementById('map');
  var mapOptions = {
    center: new google.maps.LatLng(21.8233, 84.007275), zoom: 8
  };
  var map = new google.maps.Map(mapCanvas, mapOptions);
 

  function clearMyMap(){
	  var noOfCoordinates = allMarker.length;
	  for(var i = 0; i < noOfCoordinates; i++){

   allMarker[i].setMap(null);

}
    var noOfPoly = allPoly.length;
	
	 for(var i = 0; i < noOfPoly; i++){

   allPoly[i].setMap(null);

		}
  }
			  function startTimer(route){
				  var path = [];
            var count = route.length;
			var iconTitle;
		 var bounds = new google.maps.LatLngBounds();
			for(j =0; j < count; j++ ) {
				//alert (route[j].latitude+' '+route[j].longitude);
				var myMarker = new google.maps.LatLng(route[j].latitude,route[j].longitude);
				bounds.extend(myMarker);
			if(j==0 || j==(count-1))
			{
				if(j==0){
			    iconTitle="Start";
					
				}else{
					iconTitle="End";
				}
		  marker = new google.maps.Marker({
          position:  myMarker,
          title: iconTitle
        });
		allMarker.push(marker);
		marker.setMap(map);
			}
		path.push(myMarker);
		var lineSymbol = {
          path: google.maps.SymbolPath.FORWARD_CLOSED_ARROW
        };

		marker1 = new google.maps.Polyline({
          path: path,
          icons: [{
            icon: lineSymbol,
            offset: '100%'
          }],
          strokeColor: '#FF0000',
          strokeOpacity: 1.0,
          strokeWeight: 2,
 });
		allPoly.push(marker1);
		marker1.setMap(map);
	
			  }
			  map.fitBounds(bounds);
			  }
  
  
			
												</script>
 
												
												
