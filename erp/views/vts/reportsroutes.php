<title>(Routes Report)</title>
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

  <script src="<?php echo URL; ?>public/js/dataTables.keyTable.min.js"></script>
  <div class="container">
	            <div class="row">
                 <div class="col-md-12">
  <div class="account-box">
  <span style="font-size:18px;"><strong>Route Report</strong></span>
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
  <form action="<?php echo URL; ?>vts/reportsroutes" method="POST">
    
	
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
      <div class="col-sm-offset-2 col-xs-8">
      <button type="submit" class="btn btn-primary" value="submit" name="submit" style="background-color:#008000">Submit</button>
      </div>
    </div>
	
	<script>
var positionslat=[],positionslon=[],Pspeed=[],Pcourse=[],Pfuel=[],Pdistance=[];
</script>
	
    <div class="col-md-6">
	
	<div id="myStatus"></div>


<div id="myStatus"></div>
<div id="map" style="width:1060px;height:475px;background:white"></div>
	
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&key=AIzaSyDvoRDqzE5AutQBzNBrYna6c0e3FyJPJ1g&country=IN"></script>
<script src="<?php echo URL; ?>public/js/markerwithlabel.js"></script>
	
	</div>
	    <br clear="all"/>
	 </form>
     
     <br>
     <br>
     <br>
<div id="details">test</div>
	                            <div class="table-responsive">
                               
		<table id="example" class="cell-border tdesign" width="100%" cellspacing="0">
        										<thead><tr>
                                               <!--<th>Device Name</th>-->
                                                <th>Valid</th>
                                                <th>Time</th>
                                                <th>Latitude</th>
                                                <th>Longitude</th>
                                                <th>Nearest Site</th>
                                                <th>Direction</th>
                                                <th>Altitude</th>
                                                <th>Speed</th>
                                                <th>Address</th>
                                                </tr>
                                             </thead>
			
				<?php foreach($this->reportsroute AS $key=>$value){ ?>
                      
											 <tr>
											 <?php $time1=substr($value['serverTime'],0,19);
        $serverTime=str_replace('T',' ',$time1);
        $serverTime= date('Y-m-d H:i:s',strtotime('+5 hour +30 minutes',strtotime($serverTime)));
        
				?> 
											   
											  <td><a href="javascript:void(0)" onClick="javascript:placeMarker(<?php echo $value['latitude']; ?>,<?php echo $value['longitude']; ?>,<?php echo round($value['speed']*1.852,2); ?>,<?php	echo $value['course'];?>);"> <?php echo $value['valid']; ?></a></td>
											   <td><?php echo $serverTime; ?></td>
												<td><?php echo $value['latitude']; ?></td>
                                                <td><?php echo $value['longitude']; ?></td>
                                                <td><?php 
											GetNearestSite($value['latitude'],$value['longitude'],$latlng);	
                         ?></td>
                          <td><?php echo $value['course']; 
											   
										     ?></td>
												<td><?php echo $value['altitude']; ?></td>
                                                <td><?php echo round($value['speed']*1.852,2); ?></td>
												<td><?php echo $value['address']; ?></td>
                                               </tr>
<script>
						positionslat.push(<?php echo $value['latitude'];?>);
						//print_r ('positionslat.push');
						positionslon.push(<?php echo $value['longitude'];?>);
						//Pspeed.push(<?php	echo $value['speed'];?>);
						//Pcourse.push(<?php	echo $value['course'];?>);
						//Pfuel.push(<?php echo $exactfuel;?>);
						//Pdistance.push(<?php echo round($tdistance,0);?>);
						//print_r ('Pfuel.push');
						</script>

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
			var table =	$('#example').DataTable( {
					"keys": true,
					"iDisplayLength": 5,
    "aLengthMenu": [
      [5,10, 25, 50, -1],
      [5,10, 25, 50, "all"]
    ]
	} );


		
		table
        .on( 'key', function ( e, datatable, key, cell, originalEvent ) {
          //  events.prepend( '<div>Key press: '+key+' for cell <i>'+cell.data()+'</i></div>' );
        } )
        .on( 'key-focus', function ( e, datatable, cell ) {
			 var rowData = datatable.row( cell.index().row ).data();
			 placeMarker(rowData[2],rowData[3]);
            events.html( '<div>Lat '+ rowData[2] +' Long '+rowData[3]+'</div>' );
        } )
        .on( 'key-blur', function ( e, datatable, cell ) {
         //   events.prepend( '<div>Cell blur: <i>'+cell.data()+'</i></div>' );
        } );
			// var rowData = datatable.row( cell.index().row ).data();
		} );		
</script>

<script>
//function myMap() {
	
	var myMarker=[],allMarker=[],allPoly=[],marker,marker1;
	
	var path = [];
	//var path = [];
	//var marker;
  var mapCanvas = document.getElementById('map');
  var mapOptions = {
    center: new google.maps.LatLng(21.8233, 84.007275), zoom: 8 ,gestureHandling: 'greedy'
  };
  var map = new google.maps.Map(mapCanvas, mapOptions);

  //alert(positionslat.length+"  "+positionslon[1]);
  //homeLatLng.forEach(function(homeLatLng)
 
 //for(j =0; j < positionslat.length; j++ ) 
	var j=0;
var count = positionslat.length;
for(j =0; j < count; j++ ) {
	//alert (routeslat[j]+' '+routeslon[j]);
var myMarker = new google.maps.LatLng(positionslat[j],positionslon[j]);
//var myMarker =  google.maps.LatLng(21.8233, 84.007275);
 if(j==0){
  
   var myIcon ='<?php echo URL; ?>public/images/maps/green/0.gif';
      
      var image;
      image = new google.maps.MarkerImage(myIcon,
                         new google.maps.Size(32, 32),
                         new google.maps.Point(0, 0),
                         new google.maps.Point(16, 14),
                         new google.maps.Size(32, 32)
                         );
      
                      var   marker = new google.maps.Marker({
                          position:  myMarker,
                          map: map,
                          title: 'Hello World!'
                        });
   marker.setIcon(image);
 }
	map.panTo(myMarker);
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
//}
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
	 
function placeMarker(pLat,pLong,speed,newCourse)	{
	
		
		//var count = 0;
          //window.setInterval(function() {
            //count++;
    var myIcon, myRotation;        
    var  myMarker = new google.maps.LatLng(pLat,pLong);

    var srtangle = parseInt(newCourse) * 1 + 11.25;
    myRotation = parseInt(srtangle / 22.5);
    //if(parseInt(Pspeed[i])>0){
      if(speed>0){
           //myLabelColor="labelsGreen";
           myIcon ='<?php echo URL; ?>public/images/maps/green/'+myRotation+'.gif';
      }
      if(speed==0){
             myIcon ='<?php echo URL; ?>public/images/maps/yellow/'+myRotation+'.gif';
             // myLabelColor="labelsYellow";
             }

	//var myMarker = new google.maps.LatLng(routeslat[count],routeslon[count]);
  var image;
				 image = new google.maps.MarkerImage(myIcon,
                            new google.maps.Size(32, 32),
                            new google.maps.Point(0, 0),
                            new google.maps.Point(16, 14),
                            new google.maps.Size(32, 32)
                            );

			marker.setIcon(image);


		marker.setPosition(myMarker);
		//path.push(myMarker);
		/*var	marker1 = new google.maps.Polyline({
          path: path,

          strokeColor: '#FF0000',
          strokeOpacity: 1.0,
          strokeWeight: 2,
          
		  map: map
 });*/
 //marker.setMap(map);
 map.panTo(myMarker);
		//alert(pLat+" "+pLong);
	return false;
		
	
 //}, 50);
}
			  
 
												</script>
