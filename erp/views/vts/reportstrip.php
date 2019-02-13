 <title>(Trip Report)</title>
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
  <span style="font-size:18px;"><strong>Trip Report</strong></span>
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
<form action="<?php echo URL; ?>vts/reportstrip" method="POST">
    
	
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
       <input type="date" class="form-control" name="from" id="from" value="<?php echo $this->from; if($this->from==''){echo date('Y-m-d');}?>"/>
       
      </div>
    </div> 
 
	<div class="form-group col-xs-6">
      <label class="control-label col-xs-6" for="date">To Date:</label>
      <div class="col-xs-6">          
       <input type="date" class="form-control" name="to" id="to" value="<?php echo $this->to; if($this->to==''){echo date('Y-m-d');}?>"/>
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

function saveroute(id1,from1,to1) {
	 $('#myStatus').text("loading coordinates....");
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
	
	$('#myStatus').text("saving coordinates....");

	saveGeofence(myData);
	}	
});
 //return false; 
}



function saveGeofence(route) {
	 $('#myStatus').text("Please provide Route Name and Description");
	 var name = prompt("Please enter Name for Route");
	 var latLong ="LINESTRING (";
	 var count = route.length;
	 for(j =0; j < count; j=j+3 ) {
				//alert (route[j].latitude+' '+route[j].longitude);
				latLong += " "+route[j].latitude+" "+route[j].longitude+",";

	 }
	 latLong=latLong.substr(0,latLong.length-1);
	 latLong += ")";
	 $('#myStatus').text(latLong);
//alert("ok");
$.ajax({
url: "<?php echo URL; ?>vts/addGeofence",
type: "POST",
data: {
name : name,
description : name,
latLong : latLong
},
dataType: "json",
success: function(myData) {
	//myRoute =  JSON.stringify(myData);
	//alert(loaded);	
	
	$('#myStatus').text("Route Saved");
	}	
});
 //return false; 
}


</script>                       
		<table id="example" class="cell-border tdesign" width="100%" cellspacing="0">
        										<thead><tr>
                                               <th>Device Name</th>
                                               <th>Start Time</th>
                                               <th>Start Latitude</th>
                                               <th>Start <br />
                                                 Longitude</th>
                                               <th>Start Site</th>
                                               <th>End Time</th>
                                               <th>End Latitude</th>
                                               <th>End Longitude</th>
                                               <th>End Site</th>
                                               <th>Distance</th>
                                               <th>Average Speed</th>
                                               <th>Maximum Speed</th>
                                               <th>Duration</th>
                                               <th>Spent Fuel </th>
                                               <th>Driver</th>
											   <th>Save Route</th>
										     </tr>
                                             </thead>
			
				<?php foreach($this->reportstrip AS $key=>$value){ ?>
                <?php $time1=substr($value['startTime'],0,19);
				$time3=$time1.".000Z";
				//echo $time3;
				$starttime=str_replace('T',' ',$time1);
				$starttime= date('Y-m-d H:i:s',strtotime('+5 hour +30 minutes',strtotime($starttime)));
				//echo $starttime;
				$time2=substr($value['endTime'],0,19);
				$time4=$time2.".000Z";
				$endtime=str_replace('T',' ',$time2);
				$endtime= date('Y-m-d H:i:s',strtotime('+5 hour +30 minutes',strtotime($endtime)));
				?>
                      
											 <tr>
											  
											   <td><a href="javascript:void(0)" onClick="javascript:route(<?php echo $this->deviceId; ?>,'<?php echo $time3; ?>','<?php echo $time4; ?>');"><?php echo $value['deviceName']; ?></a></td>
											   <td><?php echo $starttime; ?></td>
											   <td><?php echo $value['startLat']; ?></td>
											   <td><?php echo $value['startLon']; ?></td>
											   <td><?php 
											GetNearestSite($value['startLat'],$value['startLon'],$latlng);	
												 ?></td>
												<td><?php echo $endtime; ?></td>
												<td><?php echo $value['endLat']; ?></td>
                                                <td><?php echo $value['endLon']; ?></td>
                                                <td><?php 
											GetNearestSite($value['endLat'],$value['endLon'],$latlng);	
												 ?></td>
												<td><?php echo round($value['distance']/1000,2); ?></td>
                                                <td><?php echo round($value['averageSpeed']*1.852,2); ?></td>
											   <td><?php echo round($value['maxSpeed']*1.852,2); ?></td>
												<td><?php echo round($value['duration']/3600000,2); ?></td>
                                                <td><?php echo $value['spentFuel']; ?></td>
												<td><?php echo $value['driverName']; ?></td>
												<td><a href="javascript:void(0)" onClick="javascript:saveroute(<?php echo $this->deviceId; ?>,'<?php echo $time3; ?>','<?php echo $time4; ?>');"><?php echo $value['deviceName']; ?></a></td>
											 
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
				var events = $('#details');
				$('#example').DataTable( {
				
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
 

<script>

	var allMarker=[],allPoly=[],marker,marker1;
	
	//var marker;
  var mapCanvas = document.getElementById('map');
  var mapOptions = {
    center: new google.maps.LatLng(21.8233, 84.007275), zoom: 8 ,gestureHandling: 'greedy'
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
			var iconTitle,color;
		 var bounds = new google.maps.LatLngBounds();
		 var r = Math.floor(Math.random() * 255);
             var g = Math.floor(Math.random() * 255);
             var b = Math.floor(Math.random() * 255);
             color= "rgb("+r+" ,"+g+","+ b+")"; 
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
          strokeColor: color,
          strokeOpacity: 1.0,
          strokeWeight: 2,
 });
		allPoly.push(marker1);
		marker1.setMap(map);
	
			  }
			  map.fitBounds(bounds);
			  }
  
  
			
												</script>
 
												
												
