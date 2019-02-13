
 <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&key=AIzaSyDvoRDqzE5AutQBzNBrYna6c0e3FyJPJ1g&country=IN"></script>
 <script src="<?php echo URL; ?>public/js/gmaps.js"></script>
<script>
var map, marker=[];
function initialize() 
{ 
    var mapOptions = {
    center: new google.maps.LatLng('23.11', '71.00'),
    zoom: 9,
    scrollwheel: true,
    disableDefaultUI: false,
    mapTypeId: google.maps.MapTypeId.ROADMAP
 };

  map = new google.maps.Map(document.getElementById("map"),mapOptions);
 }

 function addMarkerMap(i,name,id)
  {
	 // alert("ok");
     marker[i] = new google.maps.Marker({
                position: new google.maps.LatLng('23.11', '71.00'),
                map: map,
				title: name,
				label :name,
            });
//var latLng = marker.getPosition(); // returns LatLng object
//map.setCenter(latLng); 	
  }
  
    
  function getDevices() {

$.ajax({
url: "vts/getCurrentDevices",
type: "GET",
data: {
foo : "bar"
},
dataType: "json",
success: function(returnedData) {
      //alert(returnedData.length);
	   for( i = 0; i < returnedData.length; i++ ) {
	//  $("#txtPrint").append("name "+returnedData[i].name+" "+"id "+returnedData[i].id+"</ br>");
	  
	   
   addMarkerMap(returnedData[i].id,returnedData[i].name,returnedData[i].status); 
	   }
	  
}
});

}
  
  
  function addMarker()
  {
	 // alert("ok");
     marker = new google.maps.Marker({
                position: new google.maps.LatLng(23.72, 72.100),
                map: map,
            });
var latLng = marker.getPosition(); // returns LatLng object
map.setCenter(latLng); 	
  }
  function getCoords() {

$.ajax({
url: "vts/getPostions",
type: "GET",
data: {
foo : "bar"
},
dataType: "json",
success: function(returnedData) {
      //alert(returnedData.length);
	   for( i = 0; i < returnedData.length; i++ ) {
	//  $("#txtPrint").append("Lat "+returnedData[i].latitude+" "+"Long "+returnedData[i].longitude+"</ br>");
	  
	   
   moveMarkerMap(returnedData[i].deviceId,returnedData[i].latitude,returnedData[i].longitude); 
	   }
}
});

}

function moveMarkerMap(i,newCoords,newCoords1) {

var newLatLang = new google.maps.LatLng(newCoords,newCoords1);
//map.panTo(newLatLang);
marker[i].setPosition(newLatLang);
marker[i].setIcon('http://maps.google.com/mapfiles/ms/icons/green-dot.png');

}
getDevices();
getCoords();
//window.setInterval(getCoords, 2000);
</script>
 <!-- contact -->
<section class="contact" id="contact">
	<div class="container">
		    <div class="contact-heading" id="page1">
		   
		     <a href="<?php echo URL; ?>vts/devices"><button type="button" class="btn btn-primary">Devices</button></a>
			 <a href="<?php echo URL; ?>vts/events"><button type="button" class="btn btn-primary">Events</button></a>
			 <a href="<?php echo URL; ?>vts/geofences"><button type="button" class="btn btn-primary">Geofences</button></a>
			<a href="<?php echo URL; ?>vts/geofencetype"><button type="button" class="btn btn-primary">Geofence type</button></a>
			<div class="dropdown">
			<button type="button" class="btn btn-primary">Reports</button>
			<div class="dropdown-content">
				<a href="">Real Time Report</a>
				<a href="">summary</a>
				
			</div>
			</div> 
			
			 <a href="<?php echo URL; ?>vts/groups"><button type="button" class="btn btn-primary">Group</button></a>
		</div>
		<div class="contact-grids">
			<div class=" col-md-6 contact-form">
				
														
				
				
				<div class="col-lg-4 col-md-3 col-sm-3">
							<div class="card card-stats">
								<div class="card-header" data-background-color="blue">
								<a href="<?php echo URL; ?>"><img src="<?php echo URL; ?>public/images/icons/Workshop_Breakdown.png" class="Centered"  alt="Image"></a>
									
								</div>
								<div class="card-content">
									<p class="category"></p>
									<h3 class="title"></h3>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons"></i>
										<p> Idle at Workshop/ Breakdown
	</p>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-lg-4 col-md-3 col-sm-3">
							<div class="card card-stats">
								<div class="card-header" data-background-color="grey">
									<a href="<?php echo URL; ?>dayentry/index"><img src="<?php echo URL; ?>public/images/icons/Loading.png" class="Centered"  alt="Image"></a>
								</div>
								<div class="card-content">
									<p class="category"> </p>
									<h3 class="title"></h3>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons"></i> 
										<p>Idle at Loading Location
										</p>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-lg-4 col-md-3 col-sm-3">
							<div class="card card-stats">
								<div class="card-header" data-background-color="green">
							      <a href="<?php echo URL; ?>maintainance/index"><img src="<?php echo URL; ?>public/images/icons/Parking_Waiting.png" class="Centered"  alt="Image"></a>
								</div>
								<div class="card-content">
									<p class="category"></p>
									<h3 class="title"></h3>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons"></i> 
										<p>Idle at Parking/Waiting to go inside for Loading</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-3 col-sm-3">
							<div class="card card-stats">
								<div class="card-header" data-background-color="purple">
									<a href="<?php echo URL; ?>tyre/index"><img src="<?php echo URL; ?>public/images/icons/waiting-Despatch.png" class="Centered"  alt="Image"></a>
								</div>
								<div class="card-content">
									<p class="category"></p>
									<h3 class="title"></h3>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons"></i> 
										<p>Idle atafterLoading</p>
									</div>
									
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-3 col-sm-3">
							<div class="card card-stats">
								<div class="card-header" data-background-color="green">
								<a href="<?php echo URL; ?>inventry/index"><img src="<?php echo URL; ?>public/images/icons/Transit-unloading.png" class="Centered"  alt="Image"></a>
									
								</div>
								<div class="card-content">
									<p class="category"></p>
									<h3 class="title"></h3>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons"></i>
										<p>After Load In Transit for unloading</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-3 col-sm-3">
							<div class="card card-stats">
								<div class="card-header" data-background-color="blue">
									<a href="<?php echo URL; ?>payroll/index"><img src="<?php echo URL; ?>public/images/icons/Loading-Location.png" class="Centered"  alt="Image"></a>
								</div>
								<div class="card-content">
									<p class="category"></p>
									<h3 class="title"></h3>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons"></i> 
										<p>In Transit for Loading</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-3 col-sm-3">
							<div class="card card-stats">
								<div class="card-header" data-background-color="orange">
							      <a href="<?php echo URL; ?>inventry/finance"><img src="<?php echo URL; ?>public/images/icons/Unreachable.png" class="Centered"  alt="Image"></a>
								</div>
								<div class="card-content">
									<p class="category"></p>
									<h3 class="title"></h3>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons"></i> 
										<p>Unreachable/ No GPS Power</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-3 col-sm-3">
							<div class="card card-stats">
								<div class="card-header" data-background-color="red">
									<a href="<?php echo URL; ?>approval/index"><img src="<?php echo URL; ?>public/images/icons/Unloading-Location.png" class="Centered"  alt="Image"></a>
								</div>
								<div class="card-content">
									<p class="category"></p>
									<h3 class="title"></h3>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons"></i> 
										<p>Idle at Unloading Location</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-3 col-sm-3">
							<div class="card card-stats">
								<div class="card-header" data-background-color="red">
								<a href="<?php echo URL; ?>inventry/index"><img src="<?php echo URL; ?>public/images/icons/Trips-Completed.png" class="Centered"  alt="Image"></a>
									
								</div>
								<div class="card-content">
									<p class="category"></p>
									<h3 class="title"></h3>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons"></i>
										<p>Trips Completed in current Date</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-3 col-sm-3">
							<div class="card card-stats">
								<div class="card-header" data-background-color="purple">
									<a href="<?php echo URL; ?>payroll/index"><img src="<?php echo URL; ?>public/images/icons/transit-current-date.png" class="Centered"  alt="Image"></a>
								</div>
								<div class="card-content">
									<p class="category"></p>
									<h3 class="title"></h3>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons"></i> 
										<p>Trips in transit in current date</p>
									</div>
								</div>
							</div>
						</div>

	
						</div>
			<div id="map" class="col-md-6">&nbsp;</div>
			
		</div>
	</div>
</section>
<script>
initialize();
</script>
<!-- //contact -->

<!-- Material Dashboard javascript methods -->
	









