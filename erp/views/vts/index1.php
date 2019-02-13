<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-108931566-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){
	  dataLayer.push(arguments);
  }
  gtag('js', new Date());

  gtag('config', 'UA-108931566-1');
</script>
<?php
//define('URL', 'http://www.ktcodisha.com/erp/');	
//define('URL', 'http://localhost/erp/');
	
 ?>
<link href="<?php echo URL; ?>public/css/style1.css" rel="stylesheet">
         <link rel="stylesheet" href="<?php echo URL; ?>public/css/jquery-ui.css" />
           <link href="<?php echo URL; ?>public/css/jquery.dataTables.min.css" rel="stylesheet">
           <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Ropa+Sans:400,400i&amp;subset=latin-ext" rel="stylesheet">
    <link href="<?php echo URL; ?>public/css/bootstrap.min.css" rel="stylesheet">
      <link href="<?php echo URL; ?>public/css/jquery.dataTables.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- JS -->
		<script src="<?php echo URL; ?>public/js/jquery.min.js"></script>

		<script src="<?php echo URL; ?>public/js/bootstrap.min.js"></script>
	  <script type="text/javascript" src="<?php echo URL; ?>public/js/jquery-ui.js"></script>
        
	  	
		 <!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDvoRDqzE5AutQBzNBrYna6c0e3FyJPJ1g&country=in"></script>-->
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&key=AIzaSyDvoRDqzE5AutQBzNBrYna6c0e3FyJPJ1g&country=IN"></script>
		<script src="<?php echo URL; ?>public/js/gmaps.js"></script>
        <script src="<?php echo URL; ?>public/js/markerwithlabel.js"></script>
		<script src="<?php echo URL; ?>public/js/fancywebsocket.js"></script>
         <script src="<?php echo URL; ?>public/js/markerclusterer.js"></script>
       <script src="<?php echo URL; ?>public/js/jquery.dataTables.min.js"></script>
       <script src="<?php echo URL; ?>public/js/dataTables.fixedColumns.min.js"></script>
		
	<style type="text/css">
	.labelsRed {
     color: black;
     background-color: white;
     font-family: "Arial";
     font-size: 12px;
	 font-weight:bold;
     text-align: center;
     white-space: nowrap;
	 border:solid 1px grey;
	
   }
   .labelsGreen {
     color: black;
     background-color: white;
     font-family: "Arial";
     font-size: 12px;
	 font-weight:bold;
     text-align: center;
     white-space: nowrap;
	 border:solid 1px grey;
   }
   
   .labelsYellow {
     color: black;
     background-color: white;
     font-family: "Arial";
     font-size: 12px;
	 font-weight:bold;
     text-align: center;
     white-space: nowrap;
	 border:solid 1px grey;
   }
	
	 #pnlLeft {
            overflow: auto;
            float: left;
            margin-right: 3px;
            pading-left: 2px;
			border: 1 px #F00;
            /*border-right: solid 1px #BDBDBD;*/
			width: 49%;
        }

        #pnlRight {
            overflow: auto;
            position: relative;
			float: right;
			border: 1 px #000;
			width: 50%;
        }
		/* =========== Table */
table.tdesign, table.tdesign td {
    font-size: 12px;
	white-space: nowrap; 
	overflow-x: hidden;
}

table.tdesign {
    width: 100%;
    border-collapse: collapse;
    margin: 0 0 0 0;
	
}

    table.tdesign td {
        padding: 2px;
        border: 1px solid #000;
	background: transparent;
	height:20px;
	white-space: nowrap; 
    }

        table.tdesign td td {
            border: none;
        }

    table.tdesign th {
        background: whitesmoke;
        color: #000;
        padding: 2px;
		border: 1px solid #000;
    }

        table.tdesign th a {
            color: #fff;
        }



	
	/* table.tdesign th:first-child {
		 top:auto;
    position:fixed;
     }*/

    table.tdesign .footer {
        background: lightgrey;
    }
	 #divMapLatLngt {
            bottom: 0px;
            position: absolute;
            margin-left: 80px;
            padding: 2px;
            z-index: 99;
            background-color: rgba(255,255,255, 0.8);
        }
		

td.highlight {
    background-color: whitesmoke !important;
}

table.tdesign tbody tr td{
	height:20px;
	padding:4px;
	}
	
table.tdesign tr.odd { background-color:  whitesmoke; }
table.tdesign tr.even { background-color: white;  }	

.rounded {
  border-radius: 10px;
}
 .span1 {border:1px solid #ccc; background-color:black; padding:2px; color:#FFF;}
 .span2 {border:1px solid #bbb; background-color:#ccc; padding:2px; color:black;}
body{
		background-color:#eee;
		}
		body, div, p, span, input, select, textarea, label, td, th, ul {
   		 font-family: Helvetica, sans-serif;
		}
	


.navbar-custom .logo img {
    padding: 15px;
    max-width: 100%;
    height: auto;
}

.navbar-custom .logo {
    float: left;
    padding-right: 40px;
    width: 100%;
}

/*.navbar-custom .navbar-toggle {
    position: absolute;
    right: 15px;
    top: 15px;
    border: 0px;
    width: 50px;
    margin: 0;
}

.navbar-custom .icon-bar {
    width: 100%;
    margin: 5px 0;
    height: 3px;
}
*/
@media (min-width:568px) { 
	.navbar-custom.navbar {
	    height: 110px
	}

	/*.navbar-custom .container {
	    position: relative;
	    overflow: visible;
	}*/

	.navbar-custom .navbar-nav {
	    padding: 65px 0 0;
	    text-align: center;
	    width: 100%;
	
	}

	/*.navbar-custom .navbar-nav > li {
	  
	    float: none;
		background-color: rgb(39, 162, 189);
	}*/

	.navbar-custom .navbar-nav > li > a:hover{
		background-color: rgb(39, 162, 189);
		height: 44px;
		display: inline-block;
    float: none;
	position: static;
	
	}

	.navbar-custom .logo {
	    position: absolute;
	    background: #fff;
	    left: 0;
	    right: 0;
	    z-index: 5000;
	    display: block;
	    float: none;
	    padding: 0;
	}

	.navbar-custom .logo:before,
	.navbar-custom .logo:after {
	    position: absolute;
	    background: #fff;
	    content: '';
	    left: -1000px;
	    width: 2000px;
	    bottom: 0;
	    /*display: block;
	    height: 100%;*/
	}

	.navbar-custom .logo:after {
	    left: auto;
	    right: -1000px;
	}
}
/*.navbar-custom .container,
	.navbar-default .collapse.navbar-collapse,
	.navbar-default .navbar-nav > li.dropdown:hover > a,
	{
    background-color: rgb(18, 188, 232);
    color: rgb(255, 255, 255);
}
.navbar-custom .navbar-nav > li.dropdown:hover > a:hover,
.navbar-custom .navbar-nav > li.dropdown:hover > a:focus.
 {
	background-color: rgb(39, 162, 189);
	color: rgb(255, 255, 255);
	
}*/
/*.navbar-default .navbar-nav > li
{
	color: #FFF;
}
.navbar-default .navbar-nav > li:hover {
	background-color: rgb(39, 162, 189);
	color: rgb(255, 255, 255);
}*/
li.dropdown:hover > .dropdown-menu{
    display: block;
	background-color: rgb(39, 162, 189);
    color: rgb(255, 255, 255);
}
 /*.navbar-nav {
    width: 100%;
    text-align: center;
	 color: rgb(255, 255, 255);
 }
  .navbar-nav > li {
      float: none;
      display: inline-block;
	  
    }*/
/* ==================================== */
.account-box
{
    border-top: 2px solid #27A2BD;
    z-index: 3;
    font-size: 12px !important;
    font-family: "Helvetica Neue" ,Helvetica,Arial,sans-serif;
    background-color: #ffffff;
    padding: 20px;
	width:140%;
}
.form-control{
  background-color : #D3D3D3;
}

.forgotLnk
{
    margin-top: 10px;
    display: block;
}

.purple-bg
{
    background-color: #27A2BD;
    color: #000;
}
.or-box
{
    position: relative;
    border-top: 1px solid #dfdfdf;
    padding-top: 20px;
    margin-top:20px;
}
.or
{
    color: #666666;
    background-color: #ffffff;
    position: absolute;
    text-align: center;
    top: -8px;
    width: 50px;
    left: 120px;
}
.account-box .btn:hover
{
    color: #fff;
}

#new-search-area {
    width: 100%;
}
#new-search-area input {
    width:200px;
	margin-left:5px;
	margin-top:5px;
    font-size: 15px;
}
    </style>	

<script>
/*
		var Server;

		function log( text ) {
			$log = $('#log');
	
		}

		function send( text ) {
			Server.send( 'message', text );
		}
		
		*/

		$(document).ready(function() {
		/*	
			//log('Connecting...');
			Server = new FancyWebSocket('ws://52.89.59.253:8082/api/socket');

			$('#message').keypress(function(e) {
				if ( e.keyCode == 13 && this.value ) {
					//log( 'You: ' + this.value );
					send( this.value );

					$(this).val('');
				}
			});

			//Let the user know we're connected
			Server.bind('open', function() {
				//log( "Connected." );
			});

			//OH NOES! Disconnection occurred.
			Server.bind('close', function( data ) {
				//log( "Disconnected." );
			});

			function isDefined(x) {
				var undefined;
				return x !== undefined;
			}
			//Log any messages sent from server
			Server.bind('message', function( payload ) {
				
				
				 var obj = JSON.parse(payload);
	
				 
				 if(isDefined(obj["devices"])){
					// log("devices >>>>>"+ payload );
					 i=obj["devices"][0].id;
					 data = obj["devices"][0];
			Dname[i] = data.name;
			DuniqueId[i] = data.uniqueId;
			Dstatus[i] = data.status;
			DlastUpdate[i] = data.lastUpdate;
			DgroupId[i] = data.groupId;
				 }
				 
				 if(isDefined(obj["events"])){
					// log("events >>>>>"+ payload );
					  i=obj["events"][0].id;
					 data = obj["events"][0];
					 events[i]=data.type; 
				 }
				 
				 
				 if(isDefined(obj["positions"])){
					// log("postions >>>>>"+ payload );
	  // Paddress[obj["positions"][0].deviceId]=obj["positions"][0].address;
	  i=obj["positions"][0].deviceId;
	  data=obj["positions"][0];
	   Pspeed[i]=data.speed;
	   Platitude[i]=data.latitude;
	   Plongitude[i]=data.longitude;
	   Pcourse[i]=data.course;
	  // Pdistance[i]=data.attributes;
	  // maxspeed[i]=data.speed;
	   if(marker[i]){
	   moveMarkerMap(i, Platitude[i],Plongitude[i],Pcourse[i]); 
	   } else {
		   
		   }
				 }
				 
	
			});

			Server.connect();
			
			*/
			
		});
		
	var markerCluster,oTable;
var map,bounds,infowindow,currentInfo,allGeofences=[],LoadPolySites=[],markers=[] ,marker=[],Dname=[],Dcategory=[],DuniqueId=[],Dstatus=[],DlastUpdate=[],DgroupId=[],groups=[],events=[],Etype=[],Paddress=[],Pspeed=[],positions=[],Platitude=[],Plongitude=[],myInfo=[],Pcourse=[],displayTable=[],nearestSite=[],nearestLocation=[],DlastSpeed=[],distance=[],DmaxSpeed=[],DmaxSpeedC=[],Ptotaldistance=[],Pstartdistance=[],PFuel=[],SFuel=[],StolenFuelQty=[],FillFuelQty=[],FuelTheftFilled=[],MarkerStatus , markerCurrentState=[];
MarkerStatus="";;
var callDevices = false;
var sitePolyLoc=[];
var monthNames = [
    "January", "February", "March",
    "April", "May", "June", "July",
    "August", "September", "October",
    "November", "December"
  ];
  

function GetNearestSite() {
   // var lat = event.latLng.lat();
  //  var lng = event.latLng.lng();
    var R = 6371; // radius of earth in km
    
	//console.log(positions.length+"  "+LoadPolySites.length +"  "+ LoadPolySites +" "+Platitude+"  "+Plongitude+ "   "+positions);
     for( k=0;k<positions.length; k++ ) {
		// Platitude[positions[k]]
	//var lat = marker[positions[k]].position.lat();
   // var lng = marker[positions[k]].position.lng();
	var lat = Platitude[positions[k]];
    var lng = Plongitude[positions[k]];
	var distances = [];
    var closest = -1;
   // console.log("positions[k]="+positions[k]+"lat="+lat+" lng="+lng);
    for( i=0;i<LoadPolySites.length; i++ ) {
        var mlat = LoadPolySites[i][2];
        var mlng = LoadPolySites[i][3];
		//console.log("lat="+lat+" lng="+lng+" mlat="+mlat+" mlng="+mlng);
        var dLat  = rad(mlat - lat);
        var dLong = rad(mlng - lng);
        var a = Math.sin(dLat/2) * Math.sin(dLat/2) +
            Math.cos(rad(lat)) * Math.cos(rad(lat)) * Math.sin(dLong/2) * Math.sin(dLong/2);
        var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a));
        var d = R * c;
        distances[i] = d;
        if ( closest == -1 || d < distances[closest] ) {
            closest = i;
        }
    }
	//alert("closest "+closest);
	if(LoadPolySites[closest]){
	 nearestSite[positions[k]]= LoadPolySites[closest][0] +' '+ parseFloat(distances[closest]).toFixed(2)+' KM';
	 
	nearestLocation[positions[k]] = LoadPolySites[closest][1];
	
	} else {
		 nearestSite[positions[k]]= "undefined";
		 nearestLocation[positions[k]] = "undefined";
		}
		Paddress[positions[k]]= nearestLocation[positions[k]] ;
		//alert(nearestSite[positions[k]]+" "+markers[closest].title +' '+ parseFloat(distances[closest]).toFixed(2)+' KM');
	 }
}  

  
function initialize() 
{ 
  //SetWidth(700);
  
    var mapOptions = {
    center: new google.maps.LatLng('21.70', '84.03'),
    zoom: 10,
    scrollwheel: true,
    disableDefaultUI: false,
    mapTypeId: google.maps.MapTypeId.ROADMAP
	
 };
 
  loadpolygon();

  map = new google.maps.Map(document.getElementById("map"),mapOptions);
  showHideMap(0);
    zoom = map.getZoom();
                google.maps.event.addListener(map, 'zoom_changed', function () {
                    var temp = map.getZoom();
                    if ((temp >= 17) && (zoom < 17)) {
                        //   map.setMapTypeId(google.maps.MapTypeId.HYBRID);
                    }
                    if ((temp <= 14) && (zoom > 14)) {
                        map.setMapTypeId(google.maps.MapTypeId.ROADMAP);
                    }
                    zoom = temp;
                });               

                
                google.maps.event.addListener(map,'mousemove',function(point)
                {                                        
                    $('#divMapLatLngt').html(point.latLng.lat().toFixed(6) + ', ' + point.latLng.lng().toFixed(6));
                });

  
  bounds = new google.maps.LatLngBounds();
 infowindow = new google.maps.InfoWindow({maxWidth: 300}); 
 
getgroups();

//devicedaylog();

//getEvents();
//createSiteMarker();
 }
 
 var allTottxt,Dontxt,Dofftxt,DNotRpttxt;
function UpdateInfo(){
	if(!callDevices){
	getDevices();
	createTable();
	}
	//getCoords();
	//CreateMapCluster();
	} 

 function ShowPopUp(i){
	 currentInfo=i;
	 infowindow.setContent(myInfo[i]);
	    map.setZoom(15);
        infowindow.open(map, marker[i]);
          map.setCenter(marker[i].getPosition());
	 }

 function addMarkerMap(i,data)
  {
	 // alert("ok");
	 var localDevices=[],myLabelColor,myIcon;
	 if(marker[i]==undefined ){
		 homeLatLng = new google.maps.LatLng('21.70', '84.03');
		 if(data.status=="online"){
			 myLabelColor="labelsGreen";
			 myIcon ='<?php echo URL; ?>public/images/maps/green/0.gif';
			 } else {
				 myIcon ='<?php echo URL; ?>public/images/maps/yellow/0.gif';
				  myLabelColor="labelsYellow";
				 }
				 
				 var image;
				 image = new google.maps.MarkerImage(myIcon,
                            new google.maps.Size(32, 32),
                            new google.maps.Point(0, 0),
                            new google.maps.Point(16, 14),
                            new google.maps.Size(32, 32)
                            );
				 
     marker[i] =  new MarkerWithLabel({
					position: homeLatLng,
					map: map,
					flat: true,
					labelContent: data.name,
					labelAnchor: new google.maps.Point(-7, 32),
					labelClass: myLabelColor, 
					labelStyle: {opacity: 0.70}
            });
			marker[i].setIcon(image);
			marker[i].addListener('click', function() {
			infowindow.setContent(myInfo[i]);
			map.setZoom(15);
        	infowindow.open(map, marker[i]);
			//GetNearestSite();
			// nearestSite[i]= GetNearestSite(marker[i].position.lat(),marker[i].position.lng());
  // alert(nearestSite[i]);
         // map.setZoom(14);
         // map.setCenter(marker[i].getPosition());
        });
 		//markerCluster.addMarker(marker[i]);
	
	 }
	 		//if(data.name != undefined)
			
			
  }
/*
function devicedaylog(i,date)
  {
	  $.ajax({
url: "<?php echo URL; ?>vts/devicedaylog",
type: "GET",
data: {
foo : "bar",
date :"2017-07-20"
},
dataType: "json",
success: function(returnedData) {
      //alert(returnedData.length);
	   for( i = 0; i < returnedData.length; i++ ) {
		   
		   //Pdistance[returnedData[i].deviceId]=parseInt(returnedData[i].attributes);
		  // maxspeed[returnedData[i].deviceId]=parseInt(returnedData[i].speed);
  }
}
  });

}*/
function getDevices() {
	callDevices = true;
$.ajax({
url: "<?php echo URL; ?>vts/idleLogs",
type: "GET",
data: {
foo : "bar"
},
dataType: "json",
success: function(returnedData) {
      //alert(returnedData.length);
	   for( i = 0; i < returnedData.length; i++ ) {
	
	if(returnedData[i].lastupdate!=null){ 
	   Pspeed[returnedData[i].id]=parseInt(returnedData[i].speed);
	   Platitude[returnedData[i].id]=returnedData[i].latitude;
	   Plongitude[returnedData[i].id]=returnedData[i].longitude;
	   Pcourse[returnedData[i].id]=returnedData[i].course;
	   Dname[returnedData[i].id] = returnedData[i].name;
	   Dcategory[returnedData[i].id] = returnedData[i].category;
			//if(data.uniqueId != undefined)
			DuniqueId[returnedData[i].id] = returnedData[i].uniqueid;
			//if(data.status != undefined)
			//Dstatus[i] = data.status;
			//if(data.lastUpdate != undefined)
			DlastUpdate[returnedData[i].id] = returnedData[i].lastupdate;
			DlastSpeed[returnedData[i].id] = returnedData[i].LastTime;
			
			DmaxSpeed[returnedData[i].id] = returnedData[i].maxSpeed;
			DmaxSpeedC[returnedData[i].id] = returnedData[i].maxSpeedC;
			Ptotaldistance[returnedData[i].id] = returnedData[i].totalDistance;
			Pstartdistance[returnedData[i].id] = returnedData[i].startDistance;
			PFuel[returnedData[i].id] = returnedData[i].Fuel;
			SFuel[returnedData[i].id] = returnedData[i].startFuel;
			StolenFuelQty[returnedData[i].id] = returnedData[i].sStolen;
			FillFuelQty[returnedData[i].id] = returnedData[i].sFilled;
		//	if(data.groupId != undefined)
			DgroupId[returnedData[i].id] = returnedData[i].groupid;
	   
    if(positions.indexOf(returnedData[i].id) === -1){
       positions.push(returnedData[i].id);
     
	   // Paddress[returnedData[i].id]=returnedData[i].address;
	
	 
      addMarkerMap(returnedData[i].id,returnedData[i]); 
	  FuelTheftFilled[returnedData[i].id]="";
     // console.log("addMarkerMap"+"  "+returnedData[i].id);
     } else {
		 
		 
		 moveMarkerMap(returnedData[i].id,returnedData[i].latitude,returnedData[i].longitude,returnedData[i].course);  
		  
		//nearestSite[returnedData[i].id]= GetNearestSite(Platitude[returnedData[i].id],Plongitude[returnedData[i].id]);
		//  console.log("moveMarkerMap"+returnedData[i].id+" "+returnedData[i].latitude+" "+returnedData[i].longitude+" "+returnedData[i].course);
		 }
   }
   
	   }
	   callDevices = false;
	
	//console.log("called createTable");
//createTable();
	  
}

});

}
  function getgroups() {

$.ajax({
url: "<?php echo URL; ?>vts/getgroups",
type: "GET",
data: {
foo : "bar"
},
dataType: "json",
success: function(returnedData) {
      //alert(returnedData.length);
	   for( i = 0; i < returnedData.length; i++ ) {
	 // $("#txtPrint").append("name "+returnedData[i].name+" "+"id "+returnedData[i].id+"</ br>");
	  
	   groups[returnedData[i].id]=returnedData[i].name;
   //addMarkerMap(returnedData[i].id,returnedData[i]); 
	   }
	  
	
}


});

}


 //var table = $('#tblData').DataTable();




function GetColor(status,speed) {
	var Color ="";
        
    if (parseInt(speed)>0) {
        Color="palegreen";
    }
    else  {
        Color="#FFE766";
    }
   if (status == "unknown") {
       Color="#FFE0E0";
    }
    return Color;
    }

function IdleTime(datetime) {
  var Color;	
  var arr = datetime.split(/[- :T]/), // from your example var date = "2012-11-14T06:57:36+0000";
    datetime = new Date(arr[0], arr[1]-1, arr[2], arr[3], arr[4], 00);
	//datetime.setHours(datetime.getHours() + 5);
	//datetime.setMinutes(datetime.getMinutes() + 30);
	datetime.getTime();
	//console.log( "a" + datetime);
    //var datetime = new Date( datetime ).getTime();
    var now = new Date().getTime();


    

    if (datetime < now) {
        var milisec_diff = now - datetime;
    }else{
        var milisec_diff = datetime - now;
    }

    var days = Math.floor(milisec_diff / 1000 / 60 / (60 * 24));

    var date_diff = new Date( milisec_diff );
	date_diff.setHours(date_diff.getHours() - 5);
    date_diff.setMinutes(date_diff.getMinutes() - 30);
	console.log( datetime + " " + now + "  "+date_diff.getHours());
        Color="palegreen";
   
   
	 if (date_diff.getHours()<1) {
		 
		 if(date_diff.getMinutes()<30){
			  Color="palegreen";
				 }
		
   			 }
 		 if (date_diff.getHours()>=1 || days >=1) {
       Color="#FFE0E0";
    }
   
    return Color;
    }




function IdleTimeColor(datetime,speed) {
  var arr = datetime.split(/[- :T]/), // from your example var date = "2012-11-14T06:57:36+0000";
    datetime = new Date(arr[0], arr[1]-1, arr[2], arr[3], arr[4], 00);
	//datetime.setHours(datetime.getHours() + 5);
	//datetime.setMinutes(datetime.getMinutes() + 30);
	datetime.getTime();
	//console.log( "a" + datetime);
    //var datetime = new Date( datetime ).getTime();
    var now = new Date().getTime();


    //console.log( datetime + " " + now);

    if (datetime < now) {
        var milisec_diff = now - datetime;
    }else{
        var milisec_diff = datetime - now;
    }

    var days = Math.floor(milisec_diff / 1000 / 60 / (60 * 24));

    var date_diff = new Date( milisec_diff );
	date_diff.setHours(date_diff.getHours() - 5);
    date_diff.setMinutes(date_diff.getMinutes() - 30);
	
	
	
	var Color ="white";
        
  
	 if (date_diff.getHours()<1) {
		 
		 if(date_diff.getMinutes()<10){
			  Color="#FFE766";
			 }
		 if(date_diff.getMinutes()>=10){
			  Color="#FFE766";
			 }
       
    }
   if (date_diff.getHours()>=1 || days >=1) {
        Color="#FFE0E0";
    }
  
   if(parseInt(speed) >0){
	   Color ="palegreen";
	   }
   
    return Color;
    }

/*
function IdleTimeColor(datetime,speed) {

var Color ="yellow";
   if(parseInt(speed) >0){
	   Color ="white";
	   }
   
    return Color;
    }

*/

function moveMarkerMap(i,newCoords,newCoords1,newCourse) {
var myIcon, myRotation;
var newLatLang = new google.maps.LatLng(newCoords,newCoords1);
//console.log("move marker"+" "+i+" "+newCoords+" "+newCoords1+" "+newCourse);
//map.panTo(newLatLang);
marker[i].setPosition(newLatLang);
//alert(markerCurrentState[i]);
if(MarkerStatus==""){
	marker[i].setVisible(true);
} else {
	//alert(MarkerStatus+"  "+markerCurrentState[i]+ "i ="+i);
if(markerCurrentState[i]==MarkerStatus){
marker[i].setVisible(true);
} else {
marker[i].setVisible(false);	
	}
if(MarkerStatus=="truck"){
	if(Dcategory[i]=="truck"){
		marker[i].setVisible(true);
		}else {
		marker[i].setVisible(false);	
			}
	}	
}

//myRotation = parseInt(parseInt(newCourse)/6)*6;
var srtangle = parseInt(newCourse) * 1 + 11.25;
myRotation = parseInt(srtangle / 22.5);
if(parseInt(Pspeed[i])>0){
			 myLabelColor="labelsGreen";
			 myIcon ='<?php echo URL; ?>public/images/maps/green/'+myRotation+'.gif';
			 } else {
				 myIcon ='<?php echo URL; ?>public/images/maps/yellow/'+myRotation+'.gif';
				  myLabelColor="labelsYellow";
				 }
	if(Dstatus[i]=='unknown'){
		 myIcon ='<?php echo URL; ?>public/images/maps/red/'+myRotation+'.gif';
				  myLabelColor="labelsRed";
		}		
		image = new google.maps.MarkerImage(myIcon,
                            new google.maps.Size(32, 32),
                            new google.maps.Point(0, 0),
                            new google.maps.Point(16, 14),
                            new google.maps.Size(32, 32)
                            );	 
		
	//marker[i].set("labelClass", myLabelColor);

	
	        //marker[i].rotation(parseFloat(newCourse));
			marker[i].setIcon(image);
//nearestSite[i]= GetNearestSite(marker[i].position.lat(),marker[i].position.lng());
if(currentInfo==i){
	infowindow.setContent(myInfo[i]);
	}			
     marker[i].addListener('click', function() {
		 currentInfo=i;
		 infowindow.setContent(myInfo[i]);
          infowindow.open(map, marker[i]);
        //  map.setZoom(12);
          map.setCenter(marker[i].getPosition());
        });
}

function formatDate(dtstr) {
    var dt = dtstr.split(/[: T-]/).map(parseFloat);
    var result = new Date(dt[0], dt[1] - 1, dt[2], dt[3] || 0, dt[4] || 0, dt[5] || 0, 0);
	//result.setHours(result.getHours() + 5);
  //  result.setMinutes(result.getMinutes() + 30);
	//result = result.toString(result);
	 var locale = "en-gb";
	 var options = {year: 'numeric', month: 'long', day: 'numeric',time: 'long' };
	return result.toLocaleString('en-gb', { hour12: true });
	//return dtstr;
}


function get_time_diff( datetime )
{
    //var datetime = typeof datetime !== 'undefined' ? datetime : "2014-01-01 01:02:03.123456";
//console.log( "b"+ datetime);
 var arr = datetime.split(/[- :T]/), // from your example var date = "2012-11-14T06:57:36+0000";
    datetime = new Date(arr[0], arr[1]-1, arr[2], arr[3], arr[4], 00);
	//datetime.setHours(datetime.getHours() + 5);
	//datetime.setMinutes(datetime.getMinutes() + 30);
	datetime.getTime();
	//console.log( "a" + datetime);
    //var datetime = new Date( datetime ).getTime();
    var now = new Date().getTime();


    //console.log( datetime + " " + now);

    if (datetime < now) {
        var milisec_diff = now - datetime;
    }else{
        var milisec_diff = datetime - now;
    }

    var days = Math.floor(milisec_diff / 1000 / 60 / (60 * 24));

    var date_diff = new Date( milisec_diff );
	date_diff.setHours(date_diff.getHours() - 5);
    date_diff.setMinutes(date_diff.getMinutes() - 30);
	
	var hrTXT,minTXT,secTXT;
	
	hrTXT=CorrectTime(date_diff.getHours());
	minTXT=CorrectTime(date_diff.getMinutes());
	secTXT=CorrectTime(date_diff.getSeconds());
	

    //return days + "d "+ date_diff.getHours() + ":" + date_diff.getMinutes() + ":" + date_diff.getSeconds();
	 return days + "d "+ hrTXT + ":" + minTXT + ":" + secTXT;
}

function CorrectTime(myTime){
	if (myTime<10)
	myTime = "0"+myTime;
	return myTime;
	}
</script>
 <BODY onLoad="initialize();">
<div class="top-bar">
			<nav class="navbar navbar-inverse navbar-static-top navbar-custom" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                 <a class="logo" href="#"><img src="<?php echo URL; ?>public/images/livera_trackweb.png" alt=""></a>
            </div>
                     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                <?php  if(Session::get('userType') == "dealer") { ?>
                 <li><a href="<?php echo URL; ?>vts">HOME  </a></li>
                            <li><a href="<?php echo URL; ?>vts">TRACKING  </a></li>
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">MASTER  </a>
                            <ul class="dropdown-menu">
                            <li><a href="<?php echo URL; ?>master/vehiclemaster">VEHICLE</a></li>
                               <li><a href="<?php echo URL; ?>master/drivermaster">DRIVER</a></li>
                               <!-- <li><a href="<?php// echo URL; ?>master/customermaster">CUSTOMER</a></li>-->
                                <li><a href="<?php echo URL; ?>vts/devices">DEVICE</a></li>
                                <li><a href="<?php echo URL; ?>vts/groups">GROUPS</a></li>
                           		<li><a href="<?php echo URL; ?>vts/customer">CUSTOMER</a></li>
                                <li><a href="<?php echo URL; ?>vts/users">USERS</a></li>
                                <li><a href="<?php echo URL; ?>vts/geofences">GEOFENCES</a></li>
                                <li><a href="<?php echo URL; ?>master/expenselog">EXPENSE</a></li>
                              </ul>
                            </li>
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">REPORTS</a>
                           <ul class="dropdown-menu">
                                <li><a href="<?php echo URL; ?>vts/historicplayback">HISTORIC PLAYBACK</a></li>
                                <li><a href="<?php echo URL; ?>vts/fuelreport">FUEL REPORT</a></li>
                                <li><a href="<?php echo URL; ?>vts/reportstrip">TRIP REPORT</a></li>
                                <li><a href="<?php echo URL; ?>vts/reportstops">STOP REPORT</a></li>
                                <li><a href="<?php echo URL; ?>vts/reportssummary">SUMMARY REPORT</a></li>
                                <li><a href="<?php echo URL; ?>vts/reportsroutes">ROUTE REPORT</a></li>
                                <li><a href="<?php echo URL; ?>vts/reportsevents">EVENTS REPORT</a></li>
                           </ul>
                           </li>
                           <li><a href="<?php echo URL; ?>vts/commercial">COMMERCIAL </a></li>
                           <li><a href="<?php echo URL; ?>vts/settings"><i class="fa fa-cog" aria-hidden="true"></i>&nbsp;SETTINGS </a></li>
                           <li><a><i class="fa fa-bell faa-ring animated" aria-hidden="true"></i>&nbsp;Notification<span class="badge badge-error">5</span></a></li>
                           <li><a href="<?php echo URL; ?>login/logout">LOGOUT</a></li>
                 
							<?php  }  else { ?>
                              <li><a href="<?php echo URL; ?>vts">HOME</a></li>
                                <li><a href="<?php echo URL; ?>vts">TRACKING</a></li>
                                <li><a href="<?php echo URL; ?>vts/users">USER</a></li>
                                 <!--<li><a href="<?php echo URL; ?>vts/geofences">GEOFENCES</a></li>
                               <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">MASTER</a>
                            		<ul class="dropdown-menu">
                                        <li><a href="<?php echo URL; ?>master/vehiclemaster">VEHICLE</a></li>
                                       	<li><a href="<?php echo URL; ?>master/drivermaster">DRIVER</a></li>
                                        <li><a href="<?php echo URL; ?>vts/devices">DEVICE</a></li>
                                        <li><a href="<?php echo URL; ?>vts/geofences">GEOFENCES</a></li>
                                        <li><a href="<?php echo URL; ?>vts/groups">GROUPS</a></li>
                                        <li><a href="<?php echo URL; ?>master/expenselog">EXPENSE</a></li>
                             	 	</ul>
                            	</li>-->
                       
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">REPORTS</a>
                           <ul class="dropdown-menu">
                                <li><a href="<?php echo URL; ?>vts/historicplayback">HISTORIC PLAYBACK</a></li>
                                <li><a href="<?php echo URL; ?>vts/fuelreport">FUEL REPORT</a></li>
                                <li><a href="<?php echo URL; ?>vts/reportstrip">TRIP REPORT</a></li>
                                <li><a href="<?php echo URL; ?>vts/reportstops">STOP REPORT</a></li>
                                <li><a href="<?php echo URL; ?>vts/reportssummary">SUMMARY REPORT</a></li>
                                <li><a href="<?php echo URL; ?>vts/reportsroutes">ROUTE REPORT</a></li>
                                <li><a href="<?php echo URL; ?>vts/reportsevents">EVENTS REPORT</a></li>
                              </ul></li>
                            
                            <!--<li><a href="<?php echo URL; ?>vts/commercial">COMMERCIAL</a></li>-->
                           <li><a href="<?php echo URL; ?>vts/settings"><i class="fa fa-cog" aria-hidden="true"></i>&nbsp;SETTINGS </a></li>
                           <li><a><i class="fa fa-bell" aria-hidden="true"></i>&nbsp;Notification<span class="badge badge-error">5</span></a></li>
							<li><a href="<?php echo URL; ?>login/logout">LOGOUT</a></li>
                            <?php } ?>
						</ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	</div>	
<!--<div style="max-height: 150px; margin: auto;"> -->
<script>
$(document).ready(function(){
	oTable = $('#tblData').DataTable( {
					  paging:   false,
                    ordering: true,
					 aaSorting: [[4,'asc']],
					fixedColumns:   {
						 leftColumns: 4,
						  heightMatch: 'none'
						},
					
					columnDefs: [
            {
                targets: [ 0,1,2,3 ],
                visible: false,
				
            }
        ],
		initComplete : function() {
        $("#tblData_filter").detach().appendTo('#new-search-area');
    }
				} );
				
				/*
						scrollX:        true,		
					scrollCollapse: false,
				
				*/
				
	$('#tblData')
        .on( 'mouseenter', 'td', function () {
            var colIdx = table.cell(this).index().column;
 
            $( table.cells().nodes() ).removeClass( 'highlight' );
            $( table.column( colIdx ).nodes() ).addClass( 'highlight' );
        } );			
//window.setInterval(UpdateInfo, 4000);

setInterval(function() { UpdateInfo(); }, 4000);
//window.setInterval(createTable, 2000);
	
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
	  
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})

function searchMap(txtSearch){
	MarkerStatus = txtSearch;
	oTable.search(txtSearch).column(3).data().draw();
	return false;
	}

function showHideMap(flg,flgBindData) {    
    document.getElementById("pnlLeft").style.display = (flg == 0 || flg == -1 ? "block" : "none");   
    $("#map").css("display", (flg == 1 || flg == -1 ? "block" : "none"));
   
   google.maps.event.trigger(map, 'resize');
    var showData=1;
    if(typeof flgBindData !== "undefined")
        showData = flgBindData;

    if (flg == 0) {
        $("#pnlLeft").width("99%");
        $("#pnlRight").width("100%");
        $("#myTable").width("100%");
		//searchMap('');
    }
    else if (flg == 1) {       
        $("#pnlLeft").width("100%");
        $("#pnlRight").width("100%");        
        $("#map").width("100%");
		// google.maps.event.trigger(map, 'resize');
		resize();
       // if(showData > 0)
           // ShowHomeData();
    }
    else {
		 $("#pnlLeft").width("50%");
        $("#pnlRight").width("49%");        
        $("#map").width("100%");
		$("#myTable").width("100%");
		document.getElementById("pnlLeft").style.display = "block";
		document.getElementById("map").style.display = "block";
       // SetWidth(700);
       // if(showData > 0)
            //ShowHomeData();
    }
    if (flg != 0)
        resize();
		
}

function ClearMap(){
	 if (typeof marker !== "undefined") {
                    for (var i = marker.length - 1; i >= 0 ; i--) {
                        if (typeof marker[i] !== "undefined")
                            marker[i].setMap(null);
                    }
					 }
	}
	//UpdateInfo();
	
</script>



 <!-- 
 <div id="wrapper">
<div>

<div style="margin-right: 10px;" align="right">
                                        <span id="divHome1">&nbsp;<img src="<?php echo URL; ?>public/images/maps/on.gif" alt="Moving" title="Moving">
                                            &nbsp;<img src="<?php echo URL; ?>public/images/maps/off.gif" alt="Idle">
                                            &nbsp;<img src="<?php echo URL; ?>public/images/maps/NotRpt.gif" alt="Not Reachable">
                                            &nbsp; = <span id="allTottxt">0</span>
                                        </span>
                                    </div>
                                    </div>
                                    <div class="clearfix"></div>
 <div>  
 
 <div style="margin-left: 10px; width:40%; float:left"; align="left"><span style="background-color: palegreen; width: 15px; display: inline-block">&nbsp;</span> Moving &nbsp;&nbsp;<span style="background-color: yellow; width: 15px; display: inline-block">&nbsp;</span> Idle &nbsp;&nbsp;<span style="background-color: red; width: 15px; display: inline-block">&nbsp;</span> Unreachable &nbsp;&nbsp;<br><br></div><img src="<?php echo URL; ?>public/images/maps/textView.png" alt="Text View" class="hoverPointer"title="Text View">
 <img src="<?php echo URL; ?>public/images/maps/mapView.png" alt="Text View" class="hoverPointer" title="Map View">
 
 <img src="<?php echo URL; ?>public/images/maps/bothView.png" alt="Text View" class="hoverPointer" title="Text &amp; Map View">
 
 var filtered = table.search("Software Engineer").column(4).data().filter(isOldEnough).draw();

  
 -->
<ul class="nav nav-tabs">
  <li><a href="#a" data-toggle="tab" onClick="javascript: showHideMap(0);" > Text </a></li>
  <li><a href="#a" data-toggle="tab" onClick="javascript: showHideMap(1);" > Map </a></li>
  <li><a href="#a" data-toggle="tab" onClick="javascript: showHideMap(-1);"> Text & Map</a></li>
  <li style="background-color:palegreen"><a href="#a" data-toggle="tab" style="color:#000" onClick="javascript: searchMap('Moving');"><span id="Dontxt">0</span> Moving</a></li>
   <li style="background-color:yellow"><a href="#a"  data-toggle="tab" style="color:#000" onClick="javascript: searchMap('Idle');"><span id="Dofftxt">0</span> Idle</a></li>
    <li style="background-color:#FFE0E0"><a href="#a"  data-toggle="tab" style="color:#000" onClick="javascript: searchMap('Unreachable');"><span id="DNotRpttxt">0</span> No Signal</a></li>
    <li style="background-color:lightblue"><a href="#a"  data-toggle="tab" style="color:#000" onClick="javascript: searchMap('truck');"><span id="DFueltxt">0</span> Fuel Sensor</a></li>
    <li><a href="#a"  data-toggle="tab" style="color:#000" onClick="javascript: searchMap('');"><span id="allTottxt">0</span> All Vehicles</a></li>
    
<li><div id="new-search-area"></div> </li></ul> <br>                                   
<div id="pnlLeft">
<div id ="myTable" class="ui-resizable" style="height:95%;">

<table id="tblData" class="table tablesorter tdesign dataTable no-footer row-border hover" style="border: solid #000 1px; width: 50%; border-collapse: collapse;" role="grid" cellspacing="0" cellpadding="1" bordercolor="lightgrey" border="1" width="50%">
  <thead>
    <tr role="row" style="height:20px;" class="info">
      <th class="sorting_asc" tabindex="0" aria-controls="tblData" rowspan="2" colspan="1" aria-label="SN: activate to sort column descending">SN</th>
      <th tfilter="true" class="sorting" tabindex="0" aria-controls="tblData" rowspan="2" colspan="1" aria-label=": activate to sort column ascending">Group</th>
      <th tfilter="true" class="sorting" tabindex="0" aria-controls="tblData" rowspan="2" colspan="1" aria-label=": activate to sort column ascending">STATUS</th>
      <th tfilter="true" class="sorting" tabindex="0" aria-controls="tblData" rowspan="2" colspan="1" aria-label=": activate to sort column ascending">FUEL SENSOR</th>
      <th tfilter="true" class="sorting" tabindex="0" aria-controls="tblData" rowspan="2" colspan="1"  aria-sort="ascending" aria-label=": activate to sort column ascending">VEH NUM</th>
      <th class="sorting" tabindex="0" aria-controls="tblData" rowspan="2" colspan="1" aria-label="Last Seen: activate to sort column ascending">LAST UPDATE</th>
      <th  tfilter="true" class="sorting" tabindex="0" aria-controls="tblData" rowspan="2" colspan="1" aria-label=": activate to sort column ascending">SITE NAME</th>
      <th tabindex="0" aria-controls="tblData" rowspan="1" colspan="5" aria-label="maxSpeed: activate to sort column ascending" style="text-align:center">VEHICLE DATA</th>
      <th tabindex="0" aria-controls="tblData" rowspan="1" colspan="6" aria-label="maxSpeed: activate to sort column ascending" style="text-align:center">FUEL DATA</th>
      <th tfilter="true" class="sorting" tabindex="0" aria-controls="tblData" rowspan="2" colspan="1" aria-label=": activate to sort column ascending">MAP LOCATION</th>
     </tr>
    <tr role="row" style="height:20px;" class="info">
    <th class="sorting" tabindex="0" aria-controls="tblData" rowspan="1" colspan="1" aria-label="Speed (km/h): activate to sort column ascending">SPEED</th>
    <th class="sorting" tabindex="0" aria-controls="tblData" rowspan="1" colspan="1" aria-label="Speed (km/h): activate to sort column ascending">MAX SPEED</th>
      <th class="sorting" tabindex="0" aria-controls="tblData" rowspan="1" colspan="1" aria-label="Idle Time(HH:MM:SS): activate to sort column ascending">IDLE TIME</th>
      <th class="sorting" tabindex="0" aria-controls="tblData" rowspan="1" colspan="1" aria-label="Distance: activate to sort column ascending">ODOMETER</th>
      <th class="sorting" tabindex="0" aria-controls="tblData" rowspan="1" colspan="1" aria-label="Distance: activate to sort column ascending">KM DRIVEN</th>
      <th class="sorting" tabindex="0" aria-controls="tblData" rowspan="1" colspan="1" aria-label="maxSpeed: activate to sort column ascending">INITIAL </th>
      <th class="sorting" tabindex="0" aria-controls="tblData" rowspan="1" colspan="1" aria-label="Distance: activate to sort column ascending">FILL</th>
      <th class="sorting" tabindex="0" aria-controls="tblData" rowspan="1" colspan="1" aria-label="maxSpeed: activate to sort column ascending"> CONSUMED </th>
      <th class="sorting" tabindex="0" aria-controls="tblData" rowspan="1" colspan="1" aria-label="maxSpeed: activate to sort column ascending">STOLEN  </th>
      <th class="sorting" tabindex="0" aria-controls="tblData" rowspan="1" colspan="1" aria-label="maxSpeed: activate to sort column ascending">BALANCE </th>
      <th class="sorting" tabindex="0" aria-controls="tblData" rowspan="1" colspan="1" aria-label="maxSpeed: activate to sort column ascending">KMPL</th>
    </tr>
 </thead>
  <tbody>
  </tbody>
</table>
</div>

</div>


<div id="pnlRight">
 <div id="divMapCluster" style="position: absolute; top: 8px; right: 5px; z-index: 9;">
                                <input type="checkbox" id="chkCluster" onClick="CreateMapCluster()" />
                                Density Cluster
                            </div>
<div id="map" style="width:100%; height:82%; margin-bottom:5px;">&nbsp;
</div>
<div id="divMapSite" style='position: absolute; top: 8px; left: 130px; z-index: 9;'>
                                <input type="button" id="btnMapSiteSearch" value="Show Sites" onClick="createSiteMarker();" />
                            </div>
<div id="divMapLatLngt">
                            </div>
</div>
</div>
</div>
<script>

function rad(x) {return x*Math.PI/180;}
function loadpolygon() {
//getDevices();
$.ajax({
url: "<?php echo URL; ?>vts/loadpolygonNew",
type: "GET",
data: {
foo : "bar"
},
dataType: "json",
success: function(myData) {

		 allGeofences = myData;
	  	//drawPolygons();
		
		var tttemp;
	
	  for( j =0; j < allGeofences.length; j++ ) {
	   tttemp=ConvertCoords(allGeofences[j].area);
	 // getpolyCoords(tttemp,allGeofences[j].name,j);
	    LoadpolyCoords(tttemp,allGeofences[j].name,allGeofences[j].description,j);
	  	}
		
	  	
	}	
	
	
});

}

function drawPolygons(){
	var tttemp;
	  for( j =0; j < allGeofences.length; j++ ) {
	     tttemp=ConvertCoords(allGeofences[j].area);
	     getpolyCoords(tttemp,allGeofences[j].name,j);
	  	}
	}

function ConvertCoords(resulot){
//alert(resulot);
 resulot=resulot.substr(9);
  //alert(resulot1);
 resulot = resulot.substr(0,resulot.length-2);
// alert(resulot2);
 var TempRes =[];
 TempRes = 	resulot.split(',');
	//$TempRes=split(',',$resulot);
	//print_r($TempRes);
	
 var num=TempRes.length;

var latlng = [];
for (i=0; i < num; i++) {
var finalRes =[];
finalRes=TempRes[i].split(' ');
//echo "<pre>";
//print_r($finalRes);	
//alert(finalRes.length);

var x,y;

 var mapCentre = [];
if(finalRes.length==2){
	  y = finalRes[0];
    x = finalRes[1];
	}else {
		y = finalRes[1];
    x = finalRes[2];
		}
		
	// alert (i+"  "+finalRes.length+ "   "+x+ " "+y);	

    mapCentre.push(parseFloat(y));
    mapCentre.push(parseFloat(x));
  // mapCentre[0]=y;
  // mapCentre[1]=x;
   //alert(mapCentre);
   latlng.push(mapCentre);
  
}
//alert(latlng);
return latlng;

}


function getpolyCoords(myData,name,i){
	var path = [];
	
		 var latlngset,
					mapCenter = new Array(0, 0),
					counter = 0;
				$.each(myData, function(k, v) {
					if (typeof v != 'undefined') {
					//alert(v);
					//	paths.push(v);
						mapCenter[0] += v[0];
						mapCenter[1] += v[1];
						
						latlngset = new google.maps.LatLng(v[0], v[1]);
						path.push(latlngset);
						
						counter++;
					}
				});

				mapCenter[0] = mapCenter[0] / counter;
				mapCenter[1] = mapCenter[1] / counter;

            mySite = '<?php echo URL; ?>public/images/maps/sitemarker.png';
            latlngset = new google.maps.LatLng(mapCenter[0], mapCenter[1]);
    			
    			 markers[i] =  new MarkerWithLabel({
					position: latlngset,
					map: map,
					flat: true,
					title: name,
					labelContent: name,
					labelAnchor: new google.maps.Point(0, 4),
					labelClass: "labelsSite", 
					labelStyle: {opacity: 0.70}
            });
			markers[i].setIcon(mySite);
            
             //   map.setCenter(marker.getPosition());
			map.setCenter(latlngset);
	
        // Construct the polygon.
        sitePolyLoc[i] = new google.maps.Polygon({
          paths: path,
          strokeColor: '#FF0000',
          strokeOpacity: 0.3,
          strokeWeight: 2,
          fillColor: '#FF0000',
          fillOpacity: 0.15
        });
		 
			 sitePolyLoc[i].setMap(map); 
			
}

function LoadpolyCoords(myData,name,desc,i){
	//var path = [];
	
		 var mapCenter = new Array(0, 0),
					counter = 0;
				$.each(myData, function(k, v) {
					if (typeof v != 'undefined') {
					//alert(v);
					//	paths.push(v);
						mapCenter[0] += v[0];
						mapCenter[1] += v[1];
						
						counter++;
					}
				});

				mapCenter[0] = mapCenter[0] / counter;
				mapCenter[1] = mapCenter[1] / counter;

    		   LoadPolySites[i] = [name,desc,mapCenter[0],mapCenter[1]];
}

function OddoText(number){
	var sNumber = number.toString();
	var numberAdd ="";
	if(sNumber.length <8){
		for( var j=1; j<=(8-sNumber.length);j++){
		numberAdd += "0";
		}
		sNumber = numberAdd+sNumber;
		}
	var Output ="";
    for (var i = 0, len = sNumber.length; i < len; i += 1) {
		if(sNumber.charAt(i)!='.' && i<sNumber.length-1){
    Output+='<span class="span1">'+sNumber.charAt(i)+'</span>';
		}
		if(i==sNumber.length-1){
		Output+='<span class="span2">'+sNumber.charAt(i)+'</span>';
		}
      }
	return Output;
	}

function createSiteMarker() {
               // var txtSite = $.trim($("#txtMapSiteSearch").val()).toLowerCase();                
                var flgHide = false;
                if ($("#btnMapSiteSearch").val().indexOf("Show") == -1) {         
               
                for (var i = 0; i < markers.length; i++) {
                        markers[i].setMap(null);
                    }
               
                    if (typeof sitePolyLoc !== "undefined" && sitePolyLoc != null) {
                        for (var i = sitePolyLoc.length - 1; i >= 0 ; i--) {
                            if (typeof sitePolyLoc[i] !== "undefined") {
                                sitePolyLoc[i].setMap(null);
                                sitePolyLoc[i] = null;
                            }
                        }
                    }
                    sitePolyLoc = [];
                    //--------------------------------------------------------------------------------------

                   
                }
                else {
                   
                    flgHide = true;  
                     drawPolygons();          

                }//End else
        
                if(flgHide == true)
                {            
                    $("#btnMapSiteSearch").val("Hide Sites");
                  //  $("#txtMapSiteSearch").hide();
                }
                else
                {
                    $("#btnMapSiteSearch").val("Show Sites");
                   // $("#txtMapSiteSearch").show();
                }                 
            }

function myOddometer(id,oddometer) {
    var distance = prompt("Please enter Starting KM reading", oddometer);
    if (distance != null) {
        
		$.ajax({
url: "<?php echo URL; ?>vts/totaldistance",
type: "GET",
data: {
deviceid : id,
totalDistance : distance
},
dataType: "html",
success: function(myData) {

		alert("Total Distance updated to "+distance+" KM");
	  	
	}	
	
	
});

		
    }
	
}

function getFuel(id) {
    $.ajax({
url: "<?php echo URL; ?>vts/getFuelsingle",
type: "GET",
data: {
deviceid : id,
date : '<?php echo date("Y-m-d"); ?>'
},
dataType: "json",
success: function(myData) {

		var tttemp;
		var fillCount=0;
		var fillQty=0.0;
		var stolenQty=0.0;
		var stolenCount=0;
	  for( j =0; j < myData.length; j++ ) {
	   //tttemp=myData[j][0]+" "+myData[j][1]+" "+myData[j][2];
	   if(myData[j][0]=="Fill"){
		   fillCount++;
		   fillQty +=parseFloat(myData[j][2]);
		   }
		if(myData[j][0]=="Stolen"){
		   stolenCount++;
		   stolenQty +=parseFloat(myData[j][2]);
		   } 
		   
	      
	  }
	//  stolenQty = parseFloat(stolenQty/10).toFixed(1);
	//  fillQty = parseFloat(fillQty/10).toFixed(1);
	  StolenFuelQty[id] = stolenQty;
	  FillFuelQty[id] = fillQty;
	   tttemp = "S:"+stolenQty+"("+ stolenCount+") <br />F:"+fillQty+"("+ fillCount+")";  
	   FuelTheftFilled[id]=tttemp;
	  	//alert(tttemp);
	}	
	
	
});

}


 function createTable() {
	 GetNearestSite();
var txt  ='';
	
			var Don=0,Doff=0,DNotRpt=0,Dsum=0,DFuel=0,localSpeed,travelled_distance=0,oddometer=0,currentFuel=0,KMPL=0;
			var currentStatus = "";
	   for( i = 0; i < positions.length; i++ ) {
		   
		   KMPL=0;
		   var GetIdle;
		    if(DlastSpeed[positions[i]]==null){
					   DlastSpeed[positions[i]]=DlastUpdate[positions[i]];
					   }
		   
		   if (parseInt(Pspeed[positions[i]])>0){
			   GetIdle = "0d 00:00:00";
			 //   if(Dstatus[positions[i]]!="unknown"){
			  // Don++;
			//	} else {
				//	 DNotRpt++;  
				//	}
			   } else {
				   GetIdle = (get_time_diff(DlastSpeed[positions[i]]));
				   
				   
				 //  if(Dstatus[positions[i]]!="unknown"){
				  // Doff++; 
				 //  } else {
					// DNotRpt++;  
					 
					//   }
				   }
				var counterColor = IdleTimeColor(DlastUpdate[positions[i]],parseInt(Pspeed[positions[i]]));
				var OverSpeedCounterColor = "";
				
				if(Dcategory[positions[i]]=='truck'){
					DFuel++;
					}
				
				if(counterColor=="palegreen"){
					 Don++;
					 currentStatus = "Moving";
					}
				if(counterColor=="orange"){
					  Doff++;
					  currentStatus = "Idle";
					}
				if(counterColor=="#FFE766"){
					  Doff++;
					  currentStatus = "Idle";
					}
				if(counterColor=="#FFE0E0"){
					  DNotRpt++;
					  Dstatus[positions[i]] = "Unreachable";
					  currentStatus = "Unreachable";
					}	
						markerCurrentState[positions[i]]=currentStatus;		
				   if(Pstartdistance[positions[i]]!=null){
				  travelled_distance = ((Ptotaldistance[positions[i]]-Pstartdistance[positions[i]])/1000).toFixed(1);
				   }else  {
					   travelled_distance =0;
					   }
				  oddometer = OddoText((Ptotaldistance[positions[i]]/1000).toFixed(1));
				  var tempOddometer = (Ptotaldistance[positions[i]]/1000).toFixed(1);
				  if(DmaxSpeed[positions[i]]==null){
					  DmaxSpeed[positions[i]]=0;
					  }
				   if(DmaxSpeedC[positions[i]]==null){
					  DmaxSpeedC[positions[i]]=0;
					  }	  
					  if(parseInt(DmaxSpeedC[positions[i]]) >0){
					  OverSpeedCounterColor = "#FFE0E0"; 
					  }
			//	if(isDefined(Pspeed[positions[i]])){
				currentFuel = parseFloat((PFuel[positions[i]])/10).toFixed(1);
				initialFuel = parseFloat((SFuel[positions[i]])/10).toFixed(1);
				
				if(travelled_distance!=0 && initialFuel !=0 && currentFuel !=0){
	
					KMPL = parseFloat(travelled_distance/(initialFuel-currentFuel)).toFixed(1);
					}
					if(StolenFuelQty[positions[i]]==null){
						StolenFuelQty[positions[i]]=0;
						}
						
						if(FillFuelQty[positions[i]]==null){
						FillFuelQty[positions[i]]=0;
						}
					
					var tdSno = "",tdGroups = "",tdDeviceID = "",tdCurrentStatus = "",tdCategory = "",tdDname = "",tdLastUpdate = "",tdNearestSite = "",tdSpeed = "",tdMaxSpeed = "",tdIdleTime = "",tdOddometer = "",tdTravelledDistance = "",tdInitialFuel = "",tdFilled = "",tdConsumed = "",tdStolen = "",tdCurrentFuel = "",tdKMPL = "",tdAddress ="" , tdTxt = "black";
					
					tdDeviceID = '<tr style="height:20px;" role="row" class="success"><td>'+positions[i]+'</td>';
					tdGroups = '<td>'+groups[DgroupId[positions[i]]]+'</td>';
					tdCurrentStatus = '<td>'+currentStatus+'</td>';
					tdCategory = '<td>'+Dcategory[positions[i]]+'</td>';
					tdDname = '<td style="background-color:'+GetColor(Dstatus[positions[i]],Pspeed[positions[i]])+'"><a href="#" style="text-align:center;color:#000;" onClick=ShowPopUp('+positions[i]+') ><strong><h4>'+Dname[positions[i]]+'</h4></strong></a></td>';
					tdLastUpdate = '<td style="text-align:center; background-color:'+IdleTime(DlastUpdate[positions[i]])+'">'+formatDate(DlastUpdate[positions[i]])+'</td>';
					tdNearestSite = '<td>'+nearestSite[positions[i]].toUpperCase()+'</td>';
					tdSpeed = '<td style="text-align:center;"><h5>'+parseInt(parseInt(Pspeed[positions[i]])*1.852)+'</h5></td>';
					if (parseInt((DmaxSpeed[positions[i]])*1.852) >=60) {
						tdTxt = "red";
						}
						//' - '+DmaxSpeedC[positions[i]]+
					tdMaxSpeed = '<td style="text-align:center;background-color:'+OverSpeedCounterColor+';color:'+tdTxt+'"><h5>'+parseInt((DmaxSpeed[positions[i]])*1.852)+'</h5></td>';
					tdIdleTime = '<td style="background-color:'+IdleTimeColor(DlastSpeed[positions[i]],parseInt(Pspeed[positions[i]]))+'; text-align:center;">'+GetIdle+'</td>';
					tdOddometer = '<td style="text-align:right;"><a href="#" onClick=myOddometer('+positions[i]+','+tempOddometer+')>'+(oddometer)+'</a></td>';
					tdTravelledDistance = '<td style="text-align:right;"><h5>'+travelled_distance+'</h5></td>';
					tdInitialFuel = '<td style="text-align:center;"><h5>'+initialFuel+'</<h5></td>';
					tdFilled = '<td style="text-align:center;"><h5>'+parseFloat(FillFuelQty[positions[i]]).toFixed(1)+'</h5></td>';
					tdConsumed = '<td style="text-align:center;"><h5></h5></td>';
					tdStolen = '<td style="text-align:center;"><h5>'+parseFloat(StolenFuelQty[positions[i]]).toFixed(1)+'</h5></td>';
					tdCurrentFuel = '<td style="text-align:center;"><a href="<?php echo URL; ?>vts/reports?date=<?php echo date("Y-m-d"); ?>&deviceid='+positions[i]+'" target="_blank" style="text-align:center;color:#000;"><h5>'+currentFuel+'</h5></a></td>';
					tdKMPL = '<td style="text-align:center;"><h5>'+KMPL+'</h5></td>';
					tdAddress  ='<td>'+Paddress[positions[i]].toUpperCase()+'</td></tr>';
					
					txt = tdDeviceID+tdGroups+tdCurrentStatus+tdCategory+tdDname+tdLastUpdate+tdNearestSite+tdSpeed+tdMaxSpeed+tdIdleTime+tdOddometer+tdTravelledDistance+tdInitialFuel+tdFilled+tdConsumed+tdStolen+tdCurrentFuel+tdKMPL+tdAddress;
					
			//		}
	 // $("#txtPrint").append("name "+returnedData[i].name+" "+"id "+returnedData[i].id+"</ br>");
	  
	   //'+(IdleTimeColor(DlastUpdate[positions[i]]),parseInt(Pspeed[positions[i]]))+'  StolenFuelQty FillFuelQty
	   			myInfo[positions[i]] = "Group :" +groups[DgroupId[positions[i]]] + "</br>";
				myInfo[positions[i]] += "Vehicle :<strong>" +Dname[positions[i]]+ "</strong></br>";
				myInfo[positions[i]] += "Unique ID :" +DuniqueId[positions[i]] + "</br>";
				myInfo[positions[i]] += "Last Seen :" +formatDate(DlastUpdate[positions[i]]) + "</br>";
				myInfo[positions[i]] += "Idle Since :" +(get_time_diff(DlastSpeed[positions[i]])) + "</br>";
				myInfo[positions[i]] += "Speed :" +parseInt(parseInt(Pspeed[positions[i]])*1.852) + " km/h</br>";
				myInfo[positions[i]] += "latitude :" +(Platitude[positions[i]]) + "</br>";
				myInfo[positions[i]] += "longitude :" +(Plongitude[positions[i]]) + "</br>";
				myInfo[positions[i]] += "Direction :" +(Pcourse[positions[i]]) + "</br>";
				myInfo[positions[i]] += "Nearest Site :" +nearestSite[positions[i]].toUpperCase() + "</br>";
				myInfo[positions[i]] += "Nearest Location :" +Paddress[positions[i]].toUpperCase() + "</br>";
				myInfo[positions[i]] += "Start Distance :" +Pstartdistance[positions[i]]+ "</br>";
				myInfo[positions[i]] += "Total Distance :" +Ptotaldistance[positions[i]]+ "</br>";
				//myInfo[positions[i]] += "maxspeed :" +devicedaylog[maxspeed[positions[i]]]+ "</br>";
				//myInfo[positions[i]] += "Color :" +IdleTimeColor(DlastUpdate[positions[i]]),parseInt(Pspeed[positions[i]]) + "</br>";
				//myInfo[positions[i]] += "GetIdle :" +get_time_diff(formatDate(DlastUpdate[positions[i]])) + "</br>";
				
				

   //events[positions[i]]
        displayTable[i]= txt;
        
		
		//
	   }
	  
	   //
	  
	   	Dsum = Don+Doff+DNotRpt;
		//Dsum = 42;
		allTottxt = Dsum;
		Dontxt = Don;
		Dofftxt = Doff;
		DNotRpttxt = DNotRpt;
		
		
	    $('#allTottxt').text(allTottxt);
	  	$('#Dontxt').text(Dontxt);
	   	$('#Dofftxt').text(Dofftxt);
	    $('#DNotRpttxt').text(DNotRpttxt);
		$('#DFueltxt').text(DFuel);
		//oTable.CommitChanges();
		
		scrollPos = $("#tblData").scrollTop();
		oTable.clear().draw();
		 for( i = 0; i < displayTable.length; i++ ) {
		 oTable.row.add($(displayTable[i]));
		 }
	   oTable.draw();
	   $("#tblData").scrollTop(scrollPos);
		//console.log("create table pushed");
}
  			

</script>