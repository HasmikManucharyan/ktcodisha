	<script type="text/javascript" src="<?php echo URL; ?>public/js/bootstrap.min.js"></script>
     <link href="<?php echo URL; ?>public/css/style1.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/theme.css">
	<style>
body {
background-color: #f6f6f6;
	}
.navbar-default .navbar-nav > li.dropdown:hover > a, 
.navbar-default .navbar-nav > li.dropdown:hover > a:hover,
.navbar-default .navbar-nav > li.dropdown:hover > a:focus {
    background-color: rgb(231, 231, 231);
    color: rgb(85, 85, 85);
}
li.dropdown:hover > .dropdown-menu {
    display: block;
}
</style>

		<!-- Top-Bar -->
		<div class="top-bar">
			<nav class="navbar navbar-default">
				<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div><div style="float:left; margin-top:5px;"><img src="<?php echo URL; ?>public/images/livera_trackweb.png"></div><!--<div style="float:left; margin-left:10px; margin-top:-15px; font:Verdana, Geneva, sans-serif;"> <h3><strong>Kalyani Transco</strong></h3></div><div style="float:left; margin-left:10px; margin-top:3px;"><h5 style="color:#eee;">ERP V1.0</h5></div>--></div>
					</div>
                    
					<div class="collapse navbar-collapse" id="myNavbar">
						<ul class="nav navbar-nav navbar-right">
						<?php  if(Session::get('loggedIn')==true) { ?> 
                            <li><a href="<?php echo URL; ?>vts">Home</a></li>
                            <li><a href="<?php echo URL; ?>vts">Tracking</a></li>
							<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Master<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo URL; ?>master/vehiclemaster">Vehicle</a></li>
                               <li><a href="<?php echo URL; ?>master/drivermaster">Driver</a></li>
                                <!--<li><a href="<?php echo URL; ?>master/customermaster">Customer</a></li>-->
                                <li><a href="<?php echo URL; ?>vts/devices">Device</a></li>
                                <li><a href="<?php echo URL; ?>master/customermaster">Expense</a></li>
                           
                              </ul>
                            </li>
                           <!-- <li><a href="<?php echo URL; ?>vts/devices">Devices</a></li>
                            <li><a href="<?php echo URL; ?>vts/geofences">Geofences</a></li>
                            <li><a href="<?php echo URL; ?>vts/groups">Groups</a></li>
                           <li><a href="<?php echo URL; ?>vts/users">Users</a></li> -->
                           <li><a href="<?php echo URL; ?>vts/reports">Reports</a></li>
                            
                            <li><a href="<?php echo URL; ?>vts/commercial">Commercial</a></li>
                            <li><a href="<?php echo URL; ?>vts/settings">Settings</a></li>
							<li><a href="<?php echo URL; ?>login/logout">LOGOUT</a></li>
							<?php  }  else { ?>
                            <li><a href="<?php echo URL; ?>">Home</a></li>
                            <?php } ?>
						</ul>
					</div>
				</div>
			</nav>
		</div>
        
<div class="container">
<a href="<?php echo URL; ?>vts/dailyreport"><button type="button" class="btn btn-info">Daily Report</button></a>
<a href="<?php echo URL; ?>vts/fuelgraph"><button type="button" class="btn btn-info">Fuel Graph</button></a>
<a href="<?php echo URL; ?>vts/totalengineoil"><button type="button" class="btn btn-info">trip report</button></a>
</div>
<div class="content">
 <div class="container-fluid">
  <p>
  <a href="<?php echo URL; ?>vts/index"><button id="btnAdd" type="button" class="btn btn-info pull-right">Back</button></a>
 </p>
<div class="col-md-12">
  <form action="<?php echo URL; ?>vts/reports" method="POST">
    <div class="form-group col-xs-6">
      <label class="control-label col-xs-6" for="name">Groups:</label>
	  <div class="col-xs-6"> 
 <select class="form-control" name="Groups" value="">	
  <?php 
					foreach($this->allgroups AS $key=>$value){
						?>
 <option value="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></option>
					<?php } ?>

 </select>
      </div>
    </div>
	
	
	<div class="form-group col-xs-6">
      <label class="control-label col-xs-6" for="deviceid">Devices:</label>
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
	
	<div class="form-group col-xs-6">
      <label class="control-label col-xs-6" for="lastUpdate">Trip:</label>
      <div class="col-xs-6">          
       <select class="form-control" name="trip" value="">	
 <option>1</option>
 <option>2</option>
 </select>
      </div>
    </div>
	<div class="form-group col-xs-6">
      <label class="control-label col-xs-6" for="lastUpdate">Sites:</label>
      <div class="col-xs-6">          
       <select class="form-control" name="sites" value="">
 <?php 
					foreach($this->Allgeofences AS $key=>$value){
						?>
 <option><?php echo $value['name']; ?></option>
					<?php } ?>	   
 
 </select>
      </div>
    </div>
	<div class="form-group col-xs-6">
      <label class="control-label col-xs-6" for="date">From Date:</label>
      <div class="col-xs-6">          
       <input type="date" class="form-control" name="date" value="<?php echo $this->mdate; ?>"/>
      </div>
    </div> 
	<div class="form-group col-xs-6">   
      <label class="control-label col-xs-6" for="todate">To Date:</label>
      <div class="col-xs-6">          
       <input type="datetime-local" class="form-control">
      </div>
    </div>
	<div class="form-group col-xs-6">
      <label class="control-label col-xs-6" for="todate">Fuel Fill:</label>
      <div class="col-xs-6">          
       <select class="form-control" name="fuelfill" value="">	
 <option>1</option>
 <option>2</option>
 </select>
      </div>
    </div>
	<div class="form-group col-xs-6">
      <label class="control-label col-xs-6" for="todate">Over Speed:</label>
      <div class="col-xs-6">          
       <select class="form-control" name="overspeed" value="">	
 <option>1</option>
 <option>2</option>
 </select>
      </div>
    </div>
	<center><button type="submit" class="btn btn-primary" value="submit" name="submit" style="background-color:#008000">Submit</button></center>
	
	<!--<?php //} else { ?>
	  <input type="hidden" value="<?php //echo $this->devicedaylog['date']; ?>" name="id">
	  <?php// } ?>-->
	  
	 </form>
</div>
<div class="col-md-12">
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
       <div id="chart_div" style="width: 100%; height: 500px;"></div>
       <script>
       google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Fuel(ltrs)', 'Distance', 'Speed'],
          ['5-10',  1000,      400],
          ['10-20',  1170,      460],
          ['20-30',  660,       1120],
          ['30-40',  1030,      540]
        ]);

        var options = {
          title: 'Vehicle Fuel Distance Chart',
          hAxis: {title: 'Oil(ltr)',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
	  </script>
      </div>
<div class="col-md-12">
	<div class="card">
		  <div class="card-header" data-background-color="green">
	                                <h4 class="title">Vehicle Fuel Distance Chart</h4>
	                           
	                            </div>
	                            <div class="card-content"> <div id="placeGraph" style="width:90%;height:500px; display:block; text-align:center;"></div>

 </div>
 </div>
 </div>

 <div class="row clearfix"></div>

<div class="col-md-12">

			<div class="card">
		  <div class="card-header" data-background-color="green">
	                                <h4 class="title">Vehicle Reports</h4>
	                                <p class="category">This is vehicle Report for <?php echo $vehicle; ?></p>
	                            </div>
	                            <div class="card-content">
		<table id="example1"  class="tablesorter tdesign dataTable no-footer table table-responsive" style="border: solid #999999 1px;  border-collapse: collapse;" role="grid" cellspacing="0" cellpadding="1" bordercolor="lightgrey" border="1" >
		
                                             <thead><tr style="color: White; background-color: Black; font-weight: bold;max-height:18px" role="row">
                                             
                                               <th>SN</th>
                                               <th>id</th>
                                               <th>Lat</th>
											   <th>Lon</th>
												<th>Time</th>
											   <th>Distance</th>
											   <th>Oddometer</th>
											   <th>Speed</th>
											   <th>Ignition</th>
                                                <th>Course</th>
                                                <th>Fuel</th>
                                                <th>Variation</th>
                                                <th>Command</th>
                                                 <th>Trip Counter</th>
										     </tr>
                                             </thead>
				<?php
				$sn=0;
				$Cdistance=0;
				$maxF=0;
				$minF=1000;
				 foreach($this->content AS $key=>$value){
					
					
				$obj = json_decode($value['attributes']); 
				$ignition=$obj->{'ignition'}; 	
				$distance = $obj->{'distance'}; 
				$tdistance = $obj->{'totalDistance'};	
				if($ignition==1){
					$bgcolor = "palegreen";
					}else {
						$bgcolor = "white";
						}
				if($distance>0 or $ignition==1 or  $value['speed']>0){	
				$Cdistance+=$distance;
				$sn++;	
						?>
                        
                      


             
                        
                        
                        
											 <tr bgcolor="<?php echo $bgcolor; ?>">
                                            
											   <td align="center"><?php echo $sn; ?></td>
											   <td align="center"><?php	echo $value['id'];?></td>
											   <td align="center"><?php	echo $value['latitude'];?></td>
											   <td align="center"><?php	echo $value['longitude'];?></td>
												<td align="center">
								<?php echo $value['servertime'];?>
												</td>
												<td align="center"><?php	$obj = json_decode($value['attributes']); echo intval($obj->{'distance'}); ?>
												</td>
												<td align="center"><?php	$obj = json_decode($value['attributes']); echo $obj->{'totalDistance'}; ?>					</td>
												<td align="center">
<?php echo $value['speed']; ?>
												</td>
												<td align="center"><?php	$obj = json_decode($value['attributes']); echo $obj->{'ignition'}; ?></td>
												<td align="center"><?php echo $value['course']; ?>						</td>
												<td align="center"><?php	$obj = json_decode($value['attributes']); $temp= $obj->{'command'}; 
						$res = split("=",$temp);
						$diffF=0;
						$curF= trim($res[1],' T')/10;
						echo $curF;
						
						
						
						if($prev!=0 and $curF!=0){
						$diffF = round(($prev-$curF),1);
						$dates = explode(' ', $value['servertime']);
						$str_time = preg_replace("/^([\d]{1,2})\:([\d]{2})$/", "00:$1:$2", $dates[1]);

sscanf($str_time, "%d:%d:%d", $hours, $minutes, $seconds);

$time_seconds = $hours * 3600 + $minutes * 60 + $seconds; 

						$graphdata[]=array($time_seconds*1000,$curF);
						$graphdistance[]=array($time_seconds*1000,round($tdistance/1000,1));
						}
						if($curF>0){
						if($curF>$maxF) $maxF= $curF;
						if($minF>$curF) $minF= $curF;	
						$prev= $curF;	
						}
						if($diffF>6.5){
					$bgcolorF = "red";
					$bigRise += ($diffF);
					} else {
						$bgcolorF = "white";
						}
						if($diffF<-6.5){
							$bigDrop += (-1*$diffF);
							$bgcolorF = "palegreen";
							}
						
												?></td><td bgcolor="<?php echo $bgcolorF; ?>"><?php echo $diffF; ?></td>
                                                <td><?php echo $temp; ?></td>
                                                <td></td>
											   </tr>
											
											
					<?php
					
					
				}
					 } 
					 
					 ?>
                      <tr>
											   <td align="center">&nbsp;</td>
											   <td align="center">&nbsp;</td>
											   <td align="center">&nbsp;</td>
											   <td align="center">&nbsp;</td>
											   <td align="center">&nbsp;</td>
											   <td align="center"><?php echo $Cdistance; ?></td>
											   <td align="center"><?php echo $bigRise; ?></td>
											   <td align="center"><?php echo $bigDrop; ?></td>
											   <td align="center"><?php echo ($maxF-$minF);
											  // echo "  ".($bigRise-$bigDrop);
											   
											   ?></td>
											   <td align="center">Stolen : <?php echo ($bigRise-$bigDrop); ?></td>
											   <td align="center">&nbsp;</td>
            </tr>
</table>
	
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

   var plot =$.plot($("#placeGraph"), [{ label: "<?php echo $vehicle; ?> Fuel",  data: dataset1 ,lines: { show: true, steps: true },
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
        