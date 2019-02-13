<script src="<?php echo URL; ?>public/js/gmaps.js"></script>
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
  <div class="container">
	  <div class="row">
           <div class="col-md-12">
  				<div class="account-box">
  						<span style="font-size:18px;"><strong>Fuel Report</strong></span>
  						<br clear="all" />
				<div class="or-box">
 				</div>
	<form action="<?php echo URL; ?>vts/fuelreport" method="POST">
	<div class="form-group col-xs-6">
      <label class="control-label col-xs-6" for="deviceid">Devices:</label>
      	<div class="col-xs-6"> 
 			<select class="form-control" name="deviceid">	
 					 <?php foreach($this->Alldevices AS $key=>$value){ ?>
 						<option value="<?php echo $value['id']; ?>" <?php if($this->deviceid==$value['id']){ $vehicle=$value['name'] ; echo "selected='selected' ";} ?>><?php echo $value['name']; ?></option>
					 <?php } ?>
 			 </select>
         </div>
    </div>
    
	<div class="form-group col-xs-6">
      <label class="control-label col-xs-6" for="date">Date:</label>
      	<div class="col-xs-6">          
       		<input type="date" class="form-control" name="date" value="<?php echo $this->mdate; if($this->mdate==''){echo date("Y-m-d");}?>"/>
      	 </div>
     </div> 
     
     <div class="col-xs-16 form-group">        
      	<div class="col-sm-offset-2 col-xs-8">
			<button type="submit" class="btn btn-primary" value="submit" name="submit" style="background-color:#008000">Submit</button>
         </div>
	  </div>
	 </form>
     <br />
     <br />
     <br />
     <br />
     <br />
     <br />
</div>
</div>
</div>
</div>
<br />
<br />
<div class="container">
<div class="account-box">
  <h4 class="title">Vehicle Fuel Distance Chart <?php echo $vehicle; ?> Date : <?php echo $this->mdate; ?></h4>
  <br clear="all" />
<div class="or-box">
 </div>
<div class="card-content"> <div id="placeGraph" style="width:90%;height:500px; display:block; text-align:center;"></div>
</div>
 </div>
 </div>
 </div>
 <br />
 <br />
 <div class="container">
	          
  <div class="account-box">
  <h4 class="title">Vehicle Fuel Time Chart <?php echo $vehicle; ?> Date : <?php echo $this->mdate; ?></h4>
  <br clear="all" />
<div class="or-box">
 </div>
  <div class="card-content"> <div id="placeGraphss" style="width:90%;height:500px; display:block; text-align:center;"></div>

 </div>
 </div>
 </div>
 </div>
 <br />
 <br />
 <!--!-->
 <div class="container">
	
  <div class="account-box">
  <h4 class="title">Vehicle Fuel Speed Chart <?php echo $vehicle; ?> Date : <?php echo $this->mdate; ?></h4>
  <br clear="all" />
<div class="or-box">
 </div>
  <div class="card-content"> <div id="placeGraphs" style="width:90%;height:500px; display:block; text-align:center;"></div>

 </div>
 </div>
 </div>
 </div>
 <br />
 <br />
 <div class="container">
	          
  <div class="account-box">
  <h4 class="title">Vehicle Report</h4>
  <br clear="all" />
<div class="or-box">
 </div>
 
  <div class="table-responsive">
                          <p class="category">This is vehicle Report for <?php echo $vehicle; ?></p>     
		<table id="example" class="cell-border tdesign" width="100%" cellspacing="0">
 <!--<div class="row clearfix"></div>
			<div class="card">
		  <div class="card-header" data-background-color="green">
	                                <h4 class="title">Vehicle Reports</h4>
	                                <p class="category">This is vehicle Report for <?php echo $vehicle; ?></p>
	                            </div>
	                            <div class="card-content">
		<table id="example1"  class="tablesorter tdesign dataTable no-footer" style="border: solid #999999 1px;  border-collapse: collapse;" role="grid" cellspacing="0" cellpadding="1" bordercolor="lightgrey" border="1" >
		
                                             <thead><tr style="color: White; background-color: Black; font-weight: bold;max-height:18px" role="row">-->
                                             <thead><tr>
                                               <th>SN</th>
                                               <th>id</th>
                                               <th>Lat</th>
											   <th>Lon</th>
												<th>Server Time</th>
												<th>Device Time</th>
											   <th>Distance</th>
											   <th>Oddometer</th>
											   <th>Speed</th>
											   <th>Ignition</th>
                                                <th>Course</th>
                                                <th>Fuel</th>
                                                <th>Variation</th>
                                                <th>Initial</th>
                                                <th>Fill</th>
												<th>Stolen</th>
												<th>Current</th>
												<th>Consumed</th>
												<th>KMPL</th>
										     </tr>
                                             </thead>
				<?php
				$sn=0;
				$asn = 0;
				$as = 0;
				$a = 0;
				$Cdistance=0;
				$maxF=0;
				$minF=1000;
				$fsn=0;
				$startFuel = 0;
				$prev=0;
				foreach($this->content AS $key=>$value){
					$obj = json_decode($value['attributes']); 
					if($value['protocol']=='wialon'){
						$temp= $obj->{'volume'};
						$curF= $temp;

					}else {
					$temp= $obj->{'command'}; 
					$res = split("=",$temp);
					//$curF= trim($res[1],' T')/10;
					$curF= ($res[3])/10;
					}
					$diffF=0;
					$ignition=$obj->{'ignition'}; 	
					$distance = $obj->{'distance'}; 
					$tdistance = $obj->{'totalDistance'};
						if($ignition==1){
								$bgcolor = "palegreen";
						}else {
								$bgcolor = "white";
						}
				if($curF!=0)
				//$value['speed']==0 and 
					//if($distance<=$this->mdistance)
						
				{	
				if ($startFuel==0)$startFuel=$curF;
				$Cdistance+=$distance;
				$sn++;	
						?>
                      
				<tr bgcolor="<?php echo $bgcolor; ?>">
											   <td align="center"><?php echo $sn; ?></td>
											   <td align="center"><?php	echo $value['id'];?></td>
											   <td align="center"><?php	echo $value['latitude'];?></td>
											   <td align="center"><?php	echo $value['longitude'];?></td>
												<td align="center"><?php echo "S:".$value['servertime'];?></td>
												<td align="center"><?php echo $value['devicetime'];?></td>
												<td align="center"><?php	$obj = json_decode($value['attributes']); echo intval($obj->{'distance'}); ?>
												</td>
												<td align="center"><?php	$obj = json_decode($value['attributes']); 
												$prevOddo = $currOddo;
												
												$currOddo=round($obj->{'totalDistance'}/1000,2);
												if($startDistance==0)$startDistance = $currOddo;
				
												echo round($obj->{'totalDistance'}/1000,2); ?>					</td>
												<td align="center">
<?php echo round($value['speed']*(1.8),2); ?>
												</td>
												
												
												<td align="center"><?php	$obj = json_decode($value['attributes']); echo $obj->{'ignition'}; echo " ".$obj->{'command'}; ?></td>
												<td align="center"><?php echo $value['course']; ?>						</td>
												<td align="center"><?php	
												
						echo $curF."<br />";
						
						
						
						if($curF!=0 ){
							//$diffF = round(($prev-$curF),1);
							//and (intval($obj->{'distance'})==0)
							// $diffF = round(($prev-$curF),1);
							
							// echo "CD = ".$diffF."<br />"; 
						//	echo " ".$prevOddo; 
						//	echo " ".$currOddo;
						//	echo " ".$prev;

						if((round($currOddo)-round($prevOddo))==0){
							//$StartChange =  $prev;
							$diffF = round(($prev-$curF),1);
						//	if(($currOddo-$prevOddo)/3<$diffF){
						
							//$prev= $curF;
							} else {
								 
								//   $diffF = 0;   	
								 
							}
						   echo " P :".$prev."<br/>";
						   echo " C :".$curF."<br/>";
						   echo " D :".$diffF."<br/>";
							//if($currOddo==$prevOddo){
							//   $StartChange =  $prev;
							  // $Diff = 0;
							//  $diffF =  ($StartChange-$curF);
							//}else{
								
							//	$StartChange =  $curF;
								
						//	}
							
						
						//$diffF = round(($prev-$curF),1);
						$dates = explode(' ', $value['devicetime']);
						//print_r ($dates);
						$str_time = preg_replace("/^([\d]{1,2})\:([\d]{2})$/", "00:$1:$2", $dates[1]);

						sscanf($str_time, "%d:%d:%d", $hours, $minutes, $seconds);

						$time_seconds = $hours * 3600 + $minutes * 60 + $seconds; 

						//$mapdata[]=array($value['latitude'],$value['longitude']);
					//	if($fsn>0){
						if($prev!=$curF ){
						$graphdata[]=array($time_seconds*1000,$curF);
						$graphdistance[]=array($time_seconds*1000,round($tdistance/1000,1));
						
						$graphspeed[]=array($time_seconds*1000,$value['speed']*(1.852));
						//print_r ($graphspeed);
						$graphservertime=array($time_seconds*1000,$value['devicetime']);
						//print_r ($graphservertime);
						
						
						}
						
						}
					//	if($curF>0){
					//	if($curF>$maxF) $maxF= $curF;
					//	if($minF>$curF) $minF= $curF;	
					//	if($prev==0) $prev = $curF;
					//	if($Justprev==0) $Justprev = $curF;
					//	$Justprev=$curF;
					//	}
						//if($diffF>=$this->fuelfillfactor)
						if((round($currOddo)-round($prevOddo))==0){
						if($diffF>=5)
						{
					$bgcolorF = "red";
					$bigRise += ($diffF);
					echo "S";
					$prev= $curF;
					} else {
						$bgcolorF = "white";
						}
						//if($diffF<=(-1*$this->fuelstolenfactor))
						if($diffF<=(-7.6))
						{
							if($diffF<0)$tdiffF=$diffF*-1;
							$bigDrop += ($tdiffF);
							$bgcolorF = "palegreen";
							echo "F";
							$prev= $curF;
							}
						}else{	
							$prev= $curF;	
							}
							
						
												?></td>
												<td bgcolor="<?php echo $bgcolorF; ?>"><?php echo $diffF; 
												

												$consumed = round($startFuel + $bigDrop - $bigRise - $curF,1);
												$drvn=($currOddo-$startDistance);
												if($drvn>1){
												$kmpl =  round($drvn/$consumed,1);
												}
											//	echo " ".($diffF-($currOddo-$prevOddo)/3);
												 ?></td>
                                                <td><?php echo $startFuel; ?></td>
                                                <td><?php echo $bigDrop; ?></td>
												<td><?php echo $bigRise; ?></td>
												<td><?php echo $curF; ?></td>
												<td><?php echo $drvn; ?></td>
												<td><?php echo$kmpl; ?></td>
						<script>
						positionslat.push(<?php	echo $value['latitude'];?>);
						positionslon.push(<?php	echo $value['longitude'];?>);
						Pspeed.push(<?php	echo $value['speed'];?>);
						Pcourse.push(<?php	echo $value['course'];?>);
						</script>
											   </tr>
	
	
	
											
											
											
											
					<?php
					
					
				}
					 } 
					 $bigRise = round($bigRise,1);
					 $bigDrop = round($bigDrop,1);
					//  if( ($bigRise-$bigDrop)<=6 and ($bigRise-$bigDrop)>=-6){
					// 	$bigRise =0;
					// 	$bigDrop =0;
					//  }
					 ?>
                      <tr>
											   <td align="center">&nbsp;</td>
											   <td align="center">&nbsp;</td>
											   <td align="center">&nbsp;</td>
											   <td align="center">&nbsp;</td>
											   <td align="center">&nbsp;</td>
											   <td align="center"><?php echo $Cdistance; ?></td>
											   <td align="center"><?php echo "Filled :".$bigDrop; ?></td>
											   <td align="center"><?php echo "Stolen :".$bigRise; ?></td>
											   <td align="center"><?php// echo ($maxF-$minF); ?></td>
											   
										
											   
											  
											   <td align="center"><?php 
										

											  $c=$bigRise-$bigDrop;
											 // echo $bigRise-$bigDrop;
											 if(-1*$c>350)
												   {
												   $a=$c*0.05;
												   $b=$a+$c;
												   echo "".$b;
												   }
											elseif(-1*$c>300)
												   {
												   $a=$c*0.08;
												   $b=$a-$c;
												   echo "".$b;
												   }
											elseif(-1*$c>250)
												   {
												   $a=$c*0.05;
												   $b=$a-$c;
												   echo "".$b;
												   //$d=$c*0.05;//$e=$d-$c;//echo "".$e;
												   }
											elseif(-1*$c>200)
												   {
												   $a=$c*0.2;
												   $b=$a+$c;
												   echo "".$b;
												   //$d=$c*0.05;//$e=$d-$c;//echo "".$e;
												   }
											elseif(-1*$c>150)
												   {
												   $a=$c*0.08;
												   $b=$a-$c;
												   echo "".$b;
												   //$d=$c*0.05;//$e=$d-$c;//echo "".$e;
												   }
												   
											elseif(-1*$c<50)
												   {
												   $a=$c*0.3;
												   $b=$a+$c;
												   echo "".$b;
												   //$d=$c*0.05;//$e=$d-$c;//echo "".$e;
												   }
												   else{
												//	echo "Have a good night!";
													}
												   ?></td>
                                              <?php 
											  $drvn=$Cdistance-$startDistance/1000;
											  echo $drvn;
											   ?>
                                              
                                               <td align="center">km. driven:<?php echo ($Cdistance/1000); ?></td>
											   <td align="center">&nbsp;</td>
                                               <td align="center">&nbsp;</td>
											   <td></td>
                                                <td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
            </tr>
</table>
	</div>
    </div>
    </div>
    
	<script>
function myMap() {
	
	var myMarker=[],marker=[];
	var path = [];
	//var marker;
  var mapCanvas = document.getElementById('map');
  var mapOptions = {
    center: new google.maps.LatLng(21.8233, 84.007275), zoom: 10
  };
  var map = new google.maps.Map(mapCanvas, mapOptions);

  //alert(positionslat.length+"  "+positionslon[1]);
  //homeLatLng.forEach(function(homeLatLng)
 
 //for(j =0; j < positionslat.length; j++ ) 
 {
	 var j=0;
 var myMarker = new google.maps.LatLng(positionslat[j],positionslon[j]);
	
var marker = new google.maps.Marker({
          position:  myMarker,
          map: map,
          title: 'Hello World!'
        });
		
		      var count = 0;
          window.setInterval(function() {
            count++;
var myMarker = new google.maps.LatLng(positionslat[count],positionslon[count]);
		marker.setPosition(myMarker);
		path.push(myMarker);
		
		var	marker1 = new google.maps.Polyline({
          path: path,

          strokeColor: '#FF0000',
          strokeOpacity: 1.0,
          strokeWeight: 2,
          
		  map: map
 });
		var myIcon,myRotation;
		var srtangle = parseInt(Pcourse[count]) * 1 + 11.25;
myRotation = parseInt(srtangle / 22.5);
if(parseInt(Pspeed[count])>0){
			
			 myIcon ='<?php echo URL; ?>public/images/maps/green/'+myRotation+'.gif';
			 } else {
				 myIcon ='<?php echo URL; ?>public/images/maps/yellow/'+myRotation+'.gif';
				
				 }
	
		var image = new google.maps.MarkerImage(myIcon,
                            new google.maps.Size(32, 32),
                            new google.maps.Point(0, 0),
                            new google.maps.Point(16, 14),
                            new google.maps.Size(32, 32)
                            );	 
		
			marker.setIcon(image);
		
		$('#myStatus').text(count);
        }, 50);
		
		
		
		//path.push(myMarker);
	
	/*var flightPlanCoordinates = [
          {lat: 21.8233, lng: 84.007275},
          {lat: 21.768855, lng: 84.01438},
          {lat: 21.766185, lng: 84.01778}
          
        ];*/
}
	/*
var lineSymbol = {
          path: google.maps.SymbolPath.CIRCLE,
          scale: 8,
          strokeColor: '#393'
        };
		*/

/*	
var	marker = new google.maps.Polyline({
          path: path,
		  
		  icons: [{
            icon: lineSymbol,
            offset: '100%'
          }],

          strokeColor: '#FF0000',
          strokeOpacity: 1.0,
          strokeWeight: 2
          
		  //map: map
 });
 */
 //marker.setMap(map);
     //animateCircle(line);


  //marker.setMap(map);
  /*
  function animateCircle(line) {
          var count = 0;
          window.setInterval(function() {
            count = (count + 1) % 2000;

            var icons = line.get('icons');
            icons[0].offset = (count / 2) + '%';
            line.set('icons', icons);
        }, 200);
      }
*/
  
	}
			
												</script>
											
</div>

</div>
</div>

</div>
</div>
<div class="clear"></div>

<script type="text/javascript">
$(function() {
	
	});
	

</script>
<div id="footer"></div>
           <script>
function confirmDelete(delUrl) {
  if (confirm("Are you sure you want to delete")) {
    document.location = delUrl;
  }
}
</script>
<script>

			$(document).ready(function() {
				myMap();
				$('#example').dataTable( {
					"iDisplayLength": 5,
    "aLengthMenu": [
      [5,10, 25, 50, -1],
      [5,10, 25, 50, "all"]
    ],
	responsive: true
				} );
				
									
			} );
		</script>
        <script>
		 
        var dataset1 = <?php echo json_encode($graphdata); ?>;
		 var dataset2 = <?php echo json_encode($graphdistance); ?>;

   var plot =$.plot($("#placeGraph"), [{ label: "<?php echo $vehicle; ?> Fuel S:<?php  echo "".$bigRise; ?> F:<?php  echo "".$bigDrop; ?>",  data: dataset1 ,lines: { show: true, steps: true },
			points: { show: true}},{ label: "<?php echo $vehicle; ?> Distance",  data: dataset2 ,lines: { show: true, steps: true },
			points: { show: true}, yaxis: 2}]
						 , { xaxis: { mode: "time",
						     minTickSize: [1, "minute"]} }
						 , {		
        grid: {
            backgroundColor: { colors: ["#fff", "#eee"] },
			hoverable: true,
			clickable: true
        }
						 }
						 );
						 
	$("<div id='tooltip'></div>").css({
			position: "absolute",
			display: "none",
			border: "1px solid #fdd",
			padding: "2px",
			"background-color": "#fee",
			opacity: 0.80
		}).appendTo("body");				 
		$("#placeGraph").bind("plothover", function (event, pos, item) {
			if (item) {
					var x = item.datapoint[0].toFixed(2),
						y = item.datapoint[1].toFixed(2);

					$("#tooltip").html(item.series.label + " of " + x + " = " + y)
						.css({top: item.pageY+5, left: item.pageX+5})
						.fadeIn(200);
				} else {
					$("#tooltip").hide();
				}
		});				 
	 window.onresize = function(event) {
        $.plot($("#placeGraph"), [{ label: "<?php echo $vehicle; ?> Fuel",  data: dataset1 ,lines: { show: true, steps: true },
			points: { show: true}},{ label: "<?php echo $vehicle; ?> Distance",  data: dataset2 ,lines: { show: true, steps: true },
			points: { show: true}, yaxis: 2}]
						 , { xaxis: { mode: "time",
						     minTickSize: [1, "minute"]} }
						 , {		
        grid: {
            backgroundColor: { colors: ["#fff", "#eee"] },
			hoverable: true,
			clickable: true
        }
						 }
						 );
		
						 
    }
				
        </script>
		
		
		
    
		
		<script>
		 
        var dataset5 = <?php echo json_encode($graphdata); ?>;
		 var dataset6 = <?php echo json_encode($graphspeed); ?>;

   var plot =$.plot($("#placeGraphs"), [{ label: "<?php echo $vehicle; ?> Fuel",  data: dataset5 ,lines: { show: true, steps: true },
			points: { show: true}},{ label: "<?php echo $vehicle; ?> speed",  data: dataset6 ,lines: { show: true, steps: true },
			points: { show: true}, yaxis: 2}]
						 , { xaxis: { mode: "time",
						     minTickSize: [1, "minute"]} }
						 , {		
        grid: {
            backgroundColor: { colors: ["#fff", "#eee"] },
			hoverable: true,
			clickable: true
        }
						 }
						 );
						 
	$("<div id='tooltip'></div>").css({
			position: "absolute",
			display: "none",
			border: "1px solid #fdd",
			padding: "2px",
			"background-color": "#fee",
			opacity: 0.80
		}).appendTo("body");				 
		$("#placeGraphs").bind("plothover", function (event, pos, item) {
			if (item) {
					var x = item.datapoint[0].toFixed(2),
						y = item.datapoint[1].toFixed(2);

					$("#tooltip").html(item.series.label + " of " + x + " = " + y)
						.css({top: item.pageY+5, left: item.pageX+5})
						.fadeIn(200);
				} else {
					$("#tooltip").hide();
				}
		});				 
	 window.onresize = function(event) {
        $.plot($("#placeGraphs"), [{ label: "<?php echo $vehicle; ?> Fuel",  data: dataset5 ,lines: { show: true, steps: true },
			points: { show: true}},{ label: "<?php echo $vehicle; ?> speed",  data: dataset6 ,lines: { show: true, steps: true },
			points: { show: true}, yaxis: 2}]
						 , { xaxis: { mode: "time",
						     minTickSize: [1, "minute"]} }
						 , {		
        grid: {
            backgroundColor: { colors: ["#fff", "#eee"] },
			hoverable: true,
			clickable: true
        }
						 }
						 );
		
						 
    }
				
        </script>
		
		<script>
		 
        var dataset5 = <?php echo json_encode($graphdata); ?>;
		 var dataset7 = <?php echo json_encode($graphservertime); ?>;

   var plot =$.plot($("#placeGraphss"), [{ label: "<?php echo $vehicle; ?> Fuel",  data: dataset5 ,lines: { show: true, steps: true },
			points: { show: true}},{ label: "<?php echo $vehicle; ?> servertime",  data: dataset7 ,lines: { show: true, steps: true },
			points: { show: true}, yaxis: 2}]
						 , { xaxis: { mode: "time",
						     minTickSize: [1, "minute"]} }
						 , {		
        grid: {
            backgroundColor: { colors: ["#fff", "#eee"] },
			hoverable: true,
			clickable: true
        }
						 }
						 );
						 
	$("<div id='tooltip'></div>").css({
			position: "absolute",
			display: "none",
			border: "1px solid #fdd",
			padding: "2px",
			"background-color": "#fee",
			opacity: 0.80
		}).appendTo("body");				 
		$("#placeGraphss").bind("plothover", function (event, pos, item) {
			if (item) {
					var x = item.datapoint[0].toFixed(2),
						y = item.datapoint[1].toFixed(2);

					$("#tooltip").html(item.series.label + " of " + x + " = " + y)
						.css({top: item.pageY+5, left: item.pageX+5})
						.fadeIn(200);
				} else {
					$("#tooltip").hide();
				}
		});				 
	 window.onresize = function(event) {
        $.plot($("#placeGraphss"), [{ label: "<?php echo $vehicle; ?>  Fuel",  data: dataset5 ,lines: { show: true, steps: true },
			points: { show: true}},{ label: "<?php echo $vehicle; ?> servertime",  data: dataset7 ,lines: { show: true, steps: true },
			points: { show: true}, yaxis: 2}]
						 , { xaxis: { mode: "time",
						     minTickSize: [1, "minute"]} }
						 , {		
        grid: {
            backgroundColor: { colors: ["#fff", "#eee"] },
			hoverable: true,
			clickable: true
        }
						 }
						 );
		
						 
    }
				
        </script>
        <script>

			$(document).ready(function() {
				$('#example').dataTable( {
					"iDisplayLength": 5,
    "aLengthMenu": [
      [5,10, 25, 50, -1],
      [5,10, 25, 50, "all"]
    ],
	responsive: false
				} );
			} );
</script>
		