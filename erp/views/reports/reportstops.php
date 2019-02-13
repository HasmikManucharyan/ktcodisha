 <title>(Stop Report)</title>
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
 <script src="<?php echo URL; ?>public/js/dataTables.keyTable.min.js"></script>
  <div class="container-fluid" style="padding: 0px; margin-bottom: 20px;">
  <div class="tab-content">
     <div id="home" class="tab-pane fade in active">
        <div class="white_div" style="">
           <div class="title_div">
             <span class="title_pra" style="font-size:18px;"><strong>Stop Reports</strong></span>
<!--             <input type="button" id="btnAdd"  class="btn btn-info pull-right" style="width:110px; font-size:10px; margin-top:10px; margin-bottom:10px" onclick="addDriverMaster()" value="Add New Driver"> -->
            </div>
            <br>
                    <center>
                       
                        <button type="button" class="btn btn-primary" name="today" id="today">Today</button>
                        <button type="button" class="btn btn-primary" name="yesterday" id="yesterday">Yesterday</button>
                        <button type="button" class="btn btn-primary" name="week" id="week">Week</button>
                        <button type="button" class="btn btn-primary" name="month" id="month">Month</button>
                        <button type="button" class="btn btn-primary" name="lifetime" id="lifetime">Life Time(3 Months)</button>
                    </center>
  <form action="<?php echo URL; ?>vts/reportstops" method="POST">
    
	
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
	    <br clear="all"/>
	 </form>
     <div id="myStatus"></div>
	 <div id="map" style="width:100%;height:475px;background:white"></div>
	
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&key=AIzaSyDvoRDqzE5AutQBzNBrYna6c0e3FyJPJ1g&country=IN"></script>

<br><br>
	
	<div><a href="javascript:void(0)" onClick="javascript:ClearMap();">ClearMap</a></div>
     <br>
     <br>
     <br>
	 <div id="details"></div>
 <div class="table-responsive">  
	                            <div class="table-responsive">
								
	                             
		<table id="example" class="cell-border tdesign" width="100%" cellspacing="0">
        										<thead><tr>
                                               <th>Device Name</th>
                                                <th>Start Time</th>
                                                <th>Latitude</th>
												<th>longitude</th>
												<th>Nearest Site</th>
                                                <th>End Time</th>
                                                <th>Duration</th>
                                                <th>Engine Hours</th>
                                                <th>Spent Fuel </th>
                                                </tr>
                                             </thead>
			
				<?php foreach($this->reportstops AS $key=>$value){ ?>
                      
											 <tr>
                                             <?php $time1=substr($value['startTime'],0,19);
                          $startTime=str_replace('T',' ',$time1);
                          $startTime= date('Y-m-d H:i:s',strtotime('+5 hour +30 minutes',strtotime($startTime)));
													$time2=substr($value['endTime'],0,19);
                          $endTime=str_replace('T',' ',$time2);
                          $endTime= date('Y-m-d H:i:s',strtotime('+5 hour +30 minutes',strtotime($endTime)));
												?> 
											  
											   <td><a href="javascript:void(0)" onClick="javascript:placeMarker(<?php echo $value['latitude']; ?>,<?php echo $value['longitude']; ?>);"><?php echo $value['deviceName']; ?></a></td>
											   <td><?php echo $startTime; ?></td>
											   <td><?php echo $value['latitude']; ?></td>
											   <td><?php echo $value['longitude']; ?></td>
											   <td><?php 
											GetNearestSite($value['latitude'],$value['longitude'],$latlng);	
												 ?></td>
												<td><?php echo $endTime; ?></td>
                                                <td><?php echo round($value['duration']/3600000,2); ?></td>
												<td><?php echo round($value['engineHours']/3600000,2); ?></td>
                                                <td><?php echo $value['spentFuel']; ?></td>
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
            events.html( '<div> '+ rowData[2] +'  '+rowData[3]+'</div>' );
        } )
        .on( 'key-blur', function ( e, datatable, cell ) {
         //   events.prepend( '<div>Cell blur: <i>'+cell.data()+'</i></div>' );
        } );
				
			} );
		//$.fn.dataTable.ext.errMode = 'throw';
</script>
	<script>	
			

		
		
        
        
        
        
			// var rowData = datatable.row( cell.index().row ).data();
	
</script>

<script>

	//function myMap() {
	
	var myMarker=[];
	
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
var myMarker =  google.maps.LatLng(21.8233, 84.007275);
 var marker = new google.maps.Marker({
          position:  myMarker,
          map: map,
          title: 'Hello World!'
        });
	map.panTo(myMarker);
	

 
function placeMarker(pLat,pLong)	{
	
		
    var  myMarker = new google.maps.LatLng(pLat,pLong);
		marker.setPosition(myMarker);
		
		/*var	marker1 = new google.maps.Polyline({
          path: path,

          strokeColor: '#FF0000',
          strokeOpacity: 1.0,
          strokeWeight: 2,
          
		  map: map
 });*/
 map.panTo(myMarker);
		//alert(pLat+" "+pLong);
	return false;
		
		
		
 }	
												</script>
      
