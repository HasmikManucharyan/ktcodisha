<script src="<?php echo URL; ?>public/js/highcharts.js"></script>
	<script src="https://code.highcharts.com/highcharts-more.js"></script>
	<script src="https://code.highcharts.com/modules/exporting.js"></script>
	<link rel="stylesheet" href="http://github.hubspot.com/odometer/themes/odometer-theme-car.css" />
<script src="http://github.hubspot.com/odometer/odometer.js"></script>
<script src="<?php echo URL; ?>public/js/gmaps.js"></script>
	<div class="container">
  <div class="row">
    <div class="col-md-6">
	<div class="account-box">
  <span style="font-size:18px;"><strong>Historic Playback</strong></span>
  <br clear="all" />
<div class="or-box">
 </div>
 <?php $date=date('Y-m-d'); ?>
	 <form action="<?php echo URL; ?>reports/historicplayback" method="POST">

	 <div class="form-group col-xs-6">
      <label class="control-label col-xs-4" for="deviceid">Devices:</label>
      <div class="col-xs-6"> 
 <select class="form-control" name="deviceid">	
  <?php 
					foreach($this->Alldevices AS $key=>$value){
						?>
 <option value="<?php echo $value['id']; ?>" <?php if($this->deviceid==$value['id']){ $vehicle=$value['name'] ; echo "selected='selected' ";} ?>><?php echo $value['name']; ?></option>
					<?php } ?>
 </select>
      </div>
    
	</div>
	
	
	
	<div class="form-group col-md-6">
      <label class="control-label col-xs-4" for="date">Date:</label>
      <div class="col-xs-6">          
       <input type="date" class="form-control" name="date" value="<?php echo $this->mdate; if($this->mdate==''){echo date("Y-m-d");}?>"/>
      </div>
    </div>
<div class="form-group col-xs-6">       
      <div class="col-xs-6">
<button type="submit" class="btn btn-info pull-right" value="submit" name="submit" style="background-color:#008000">Submit</button>
    </div>
    </div>

	<!--<?php //} else { ?>
	  <input type="hidden" value="<?php //echo $this->devicedaylog['date']; ?>" name="id">
	  <?php// } ?>-->
	  <br clear="all"/>
	 </form>
	 </div>
	 <br>
	 <br>
<center> <div id="odometer" class="odometer">12345678
</div>
</center>

<br><br>
  
    <div class="col-md-6">
	
<div id="container" class="chart" style="min-width: 100px; max-width: 200px; height: 250px; margin: 0"></div> <!-- Container for Chart A -->

	</div>
  
    <div class="col-md-6">
	<div id="container1" class="chart" style="min-width: 100px; max-width: 200px; height: 250px; margin: 0"></div> <!-- Container for Chart B -->
	</div>

	
	</div>
	<script>
var positionslat=[],positionslon=[],Pspeed=[],Pcourse=[],Pfuel=[],Pdistance=[];
</script>
	
    <div class="col-md-6">
	
	<div id="myStatus"></div>
<div><a href="#" onClick="javascript:StopTimer();">stop</a> <a href="#" onClick="javascript:startTimer();">play</a> <a href="#" onClick="javascript:resetTimer();">reset</a></div>

<div id="myStatus"></div>
<div id="map" style="width:600px;height:475px;background:white"></div>
	
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&key=AIzaSyDvoRDqzE5AutQBzNBrYna6c0e3FyJPJ1g&country=IN"></script>

	
	</div>
  </div>
  </div>
  <?php
				
				 $exactfuel=0;
				 foreach($this->content AS $key=>$value){
					
					
				$obj = json_decode($value['attributes']); 
				$ignition=$obj->{'ignition'}; 	
				$distance = $obj->{'distance'}; 
				$tdistance = $obj->{'totalDistance'};
				//echo $tdistance;
				$temp = $obj->{'command'}; 
						$res = split("=",$temp);
						$diffF=0;
						$curF= trim($res[1],' T')/10;
						
						if ($curF>0){
							$exactfuel=$curF;
						}
						//echo $curF;
				
				if($ignition==1){
					$bgcolor = "palegreen";
					}else {
						$bgcolor = "white";
						}
				//if($distance==0 and $value['speed']==0)
					//if($distance<=$this->mdistance)
						
				{	
				$Cdistance+=$distance;
				$sn++;	
				//echo $Cdistance;
						?>
                      
											 
												
                                                
						<script>
						positionslat.push(<?php	echo $value['latitude'];?>);
						positionslon.push(<?php	echo $value['longitude'];?>);
						Pspeed.push(<?php	echo $value['speed'];?>);
						Pcourse.push(<?php	echo $value['course'];?>);
						Pfuel.push(<?php echo $exactfuel;?>);
						Pdistance.push(<?php echo round($tdistance,0);?>);
						//print_r ('Pfuel.push');
						</script>
											   		
											
											
											
					<?php
					
					
				}
					 } 
					 
					 ?>
					 
 

                   
	<script>
//function myMap() {
	
	var myMarker=[],marker=[];
	var path = [];
	//var marker;
  var mapCanvas = document.getElementById('map');
  var mapOptions = {
    center: new google.maps.LatLng(21.8233, 84.007275), zoom: 8
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
			  
			  var timer = null, 
    interval = 1000,
    value = 0;
	startTimer();
	var myTimer;
			  function startTimer(){
           myTimer = window.setInterval(function() {
            count++;
			if(count> positionslat.length){
				
				StopTimer();
			}
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
		var myIcon,myRotation,myodometer;
		var srtangle = parseInt(Pcourse[count]) * 1 + 11.25;
																
myRotation = parseInt(srtangle / 22.5);
           if(parseInt(Pspeed[count])>0){																			  
			myIcon ='<?php echo URL; ?>public/images/maps/green/'+myRotation+'.gif';
			 } else {
				 myIcon ='<?php echo URL; ?>public/images/maps/yellow/'+myRotation+'.gif';
			}
	
	if((Pdistance[count])>0){
		
		odometer.innerHTML =Pdistance[count];
	}
		
	
	var image = new google.maps.MarkerImage(myIcon,
                            new google.maps.Size(32, 32),
                            new google.maps.Point(0, 0),
                            new google.maps.Point(16, 14),
                            new google.maps.Size(32, 32)
                            );	 
		
			marker.setIcon(image);
		
		$('#myStatus').text(count+"/"+positionslat.length);
        }, 50);
		
			  }
		/*$("#start").click(function() {
  if (timer !== null) return;
  timer = setInterval(function () {
      value = value+1;
      $("#input").val(value);
  }, interval); 
});

$("#stop").click(function() {
  clearInterval(timer);
  timer = null
});*/
		/*function starttimer(){
			if (mytimer !== null) return;
			mytimer = setInterval(function starttimer() {
			value = value+1;
			$("#input").val(value);
			}, interval);
		}
		});*/
		
		function StopTimer(){
			
			clearInterval(myTimer);
			//mytimer = null
		}
		
		function resetTimer(){
			//marker1.setMap(null);
			clearInterval(myTimer);
			
			count=0;
			startTimer();
			
			//mytimer = null
		}
		
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
  
	//}
			
												</script>
									




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
Highcharts.chart('container', {

    chart: {
        type: 'gauge',
        plotBackgroundColor: null,
        plotBackgroundImage: null,
        plotBorderWidth: 0,
        plotShadow: false
    },
	exporting: {
         enabled: false
},

    title: {
        text: 'Speedometer'
    },
//Exporting = new Exporting { Enabled = false },
    pane: {
        startAngle: -150,
        endAngle: 150,
        background: [{
            backgroundColor: {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, '#FFF'],
                    [1, '#333']
                ]
            },
            borderWidth: 0,
            outerRadius: '10%'
        }, {
            backgroundColor: {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, '#333'],
                    [1, '#FFF']
                ]
            },
            borderWidth: 1,
            outerRadius: '10%'
        }, {
            // default background
        }, {
            backgroundColor: '#DDD',
            borderWidth: 0,
            outerRadius: '10%',
            innerRadius: '10%'
        }]
    },

    // the value axis
    yAxis: {
        min: 0,
        max: 200,

        minorTickInterval: 'auto',
        minorTickWidth: 1,
        minorTickLength: 10,
        minorTickPosition: 'inside',
        minorTickColor: '#666',

        tickPixelInterval: 30,
        tickWidth: 2,
        tickPosition: 'inside',
        tickLength: 10,
        tickColor: '#666',
        labels: {
            step: 2,
            rotation: 'auto'
        },
        title: {
            text: 'km/h'
        },
        plotBands: [{
            from: 0,
            to: 120,
            color: '#55BF3B' // green
        }, {
            from: 120,
            to: 160,
            color: '#DDDF0D' // yellow
        }, {
            from: 160,
            to: 200,
            color: '#DF5353' // red
        }]
    },

    series: [{
        name: 'Speed',
        data: [80],
        tooltip: {
            valueSuffix: ' km/h'
        }
    }]

},
// Add some life

function (chart) {
    if (!chart.renderer.forExport) {
       setInterval(function () {
            var point = chart.series[0].points[0];
		 point.update(Pspeed[count]);

        }, 25);
    }
});
		
				
		</script>   
		
		
		
		<script>
Highcharts.chart('container1', {

    chart: {
        type: 'gauge',
        plotBackgroundColor: null,
        plotBackgroundImage: null,
        plotBorderWidth: 0,
        plotShadow: false
    },

    title: {
        text: 'Fuel Meter'
    },
	
	exporting: {
         enabled: false
},

    pane: {
        startAngle: -150,
        endAngle: 150,
        background: [{
            backgroundColor: {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, '#EEE'],
                    [1, '#444']
                ]
            },
            borderWidth: 0,
            outerRadius: '10%'
        }, {
            backgroundColor: {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, '#444'],
                    [1, '#EEE']
                ]
            },
            borderWidth: 1,
            outerRadius: '10%'
        }, {
            // default background
        }, {
            backgroundColor: '#CCC',
            borderWidth: 0,
            outerRadius: '10%',
            innerRadius: '10%'
        }]
    },

    // the value axis
    yAxis: {
        min: 0,
        max: 400,

        minorTickInterval: 'auto',
        minorTickWidth: 1,
        minorTickLength: 10,
        minorTickPosition: 'inside',
        minorTickColor: '#666',

        tickPixelInterval: 30,
        tickWidth: 2,
        tickPosition: 'inside',
        tickLength: 10,
        tickColor: '#666',
        labels: {
            step: 2,
            rotation: 'auto'
        },
        title: {
            text: 'litres'
        },
        plotBands: [{
            from: 0,
            to: 100,
            color: '#55BF3B' // green
        }, {
            from: 100,
            to: 200,
            color: '#DDDF0D' // yellow
        }, {
            from: 200,
            to: 300,
            color: '#DF5353' // red
        }]
    },

    series: [{
        name: 'Fuel',
        data: [200],
        tooltip: {
            valueSuffix: ' litres'
        }
    }]

},
// Add some life

function (chart) {
    if (!chart.renderer.forExport) {
       setInterval(function () {
            var point = chart.series[0].points[0];
		 point.update(Pfuel[count]);

        }, 25);
    }
});
		
				
		</script>   

	<!--
	
	<script>
Highcharts.chart('container2', {

    chart: {
        type: 'gauge',
        plotBackgroundColor: null,
        plotBackgroundImage: null,
        plotBorderWidth: 0,
        plotShadow: false
    },

    title: {
        text: 'Oddometer'
    },
	
	exporting: {
         enabled: false
},

    pane: {
        startAngle: -150,
        endAngle: 150,
        background: [{
            backgroundColor: {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, '#EEE'],
                    [1, '#444']
                ]
            },
            borderWidth: 0,
            outerRadius: '10%'
        }, {
            backgroundColor: {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, '#444'],
                    [1, '#EEE']
                ]
            },
            borderWidth: 1,
            outerRadius: '10%'
        }, {
            // default background
        }, {
            backgroundColor: '#CCC',
            borderWidth: 0,
            outerRadius: '10%',
            innerRadius: '10%'
        }]
    },

    // the value axis
    yAxis: {
        min: 0,
        max: 10000,

        minorTickInterval: 'auto',
        minorTickWidth: 1,
        minorTickLength: 10,
        minorTickPosition: 'inside',
        minorTickColor: '#666',

        tickPixelInterval: 30,
        tickWidth: 2,
        tickPosition: 'inside',
        tickLength: 10,
        tickColor: '#666',
        labels: {
            step: 2,
            rotation: 'auto'
        },
        title: {
            text: 'kilometers'
        },
        plotBands: [{
            from: 0,
            to: 3000,
            color: '#55BF3B' // green
        }, {
            from: 3000,
            to: 6000,
            color: '#DDDF0D' // yellow
        }, {
            from: 6000,
            to: 10000,
            color: '#DF5353' // red
        }]
    },

    series: [{
        name: 'Oddometer',
        data: [5000],
        tooltip: {
            valueSuffix: ' kilometers'
        }
    }]

},
// Add some life

function (chart) {
    if (!chart.renderer.forExport) {
       setInterval(function () {
            var point = chart.series[0].points[0];
		 point.update(Pdistance[count]);

        }, 1);
    }
});
		
				
		</script>!-->
		
		<script>

		/*	
		setTimeout(function(){
			
    odometer.innerHTML = <?php echo $sdistance;?>;
}, 1000);
*/
		
					
		</script>
		
		
  


