<?php
//define('URL', 'http://www.ktcodisha.com/erp/');	
//define('URL', 'http://localhost/erp/');
	
 ?>
 <!--
      <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Ropa+Sans:400,400i&amp;subset=latin-ext" rel="stylesheet">
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
<meta name="viewport" content="width=device-width" /> 
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="<?php// echo URL; ?>public/js/dataTables.fixedColumns.min.js"></script>
  <script src="<?php //echo URL; ?>public/js/fancywebsocket.js"></script>
   <script src="<?php echo URL; ?>public/js/jquery.mobile-1.4.5.min.js"></script>
-->
<link href="<?php echo URL; ?>public/css/style1.css" rel="stylesheet">
         <link rel="stylesheet" href="<?php echo URL; ?>public/css/jquery-ui.css" />
           <link href="<?php echo URL; ?>public/css/jquery.dataTables.min.css" rel="stylesheet">
          
    <link href="<?php echo URL; ?>public/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/theme.css">
     
		<!-- JS -->
		<script src="<?php echo URL; ?>public/js/jquery.min.js"></script>
       
        <script type="text/javascript" src="<?php echo URL; ?>public/js/jquery.ui.touch-punch.min.js"></script>
		<script src="<?php echo URL; ?>public/js/bootstrap.min.js"></script>
	  <script type="text/javascript" src="<?php echo URL; ?>public/js/jquery-ui.js"></script>
        
	  	
		 <!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDvoRDqzE5AutQBzNBrYna6c0e3FyJPJ1g&country=in"></script>-->
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&key=AIzaSyDrn2hTCjslT74wjVkd3FP20xTm-ekvDM4&country=IN"></script>
		<script src="<?php echo URL; ?>public/js/gmaps.js"></script>
        <script src="<?php echo URL; ?>public/js/markerwithlabel.js"></script>
		
         <script src="<?php echo URL; ?>public/js/markerclusterer.js"></script>
       <script src="<?php echo URL; ?>public/js/jquery.dataTables.min.js"></script>
      
       <script type="text/javascript" src="<?php echo URL; ?>public/js/bootstrap-notify.js"></script>
       <script src="<?php echo URL; ?>public/js/jquery.preventMacBackScroll.js"></script>
      
	<style type="text/css">
  .rotate90 {
-webkit-transform: rotate(-90deg);
-moz-transform: rotate(-90deg);
filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);
height:20px; 
}
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
        overflow-x: scroll;
            overflow-y: scroll;
            float: left;
            margin-right: 3px;
            pading-left: 2px;
			border: 1 px #F00;
            /*border-right: solid 1px #BDBDBD;*/
            width: 49%;
            -webkit-overflow-scrolling: touch;
			
        }
.touch {
    -webkit-overflow-scrolling: touch;
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
	/*white-space: nowrap; */
	overflow-x: hidden;
	-webkit-overflow-scrolling: touch;
}

table.tdesign {
    width: 100%;
    border-collapse: collapse;
    margin: 0 0 0 0;
	 -webkit-overflow-scrolling: touch;
}

    table.tdesign td {
        padding: 1px;
        border: 1px solid #000;
	background: transparent;
	height:15px;
	white-space: nowrap; 
    }

        table.tdesign td td {
            border: none;
        }

    table.tdesign th {
        background: whitesmoke;
        color: #000;
        padding: 1px;
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
    background-color: lightgrey !important;
}

table.tdesign tbody tr td{
	height:10px;
	padding:1px;
	}

table.tdesign tr.odd { background-color:  whitesmoke; height:10px;}
table.tdesign tr.even { background-color: white;  height:10px;}	

table.tdesign tr.selected {
    color: white;
    background-color: #eeeeee;
}

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
.navbar-custom .container,
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
	
}
/*.navbar-default .navbar-nav > li
{
	color: #FFF;
}*/
.navbar-default .navbar-nav > li:hover {
	background-color: rgb(39, 162, 189);
	color: rgb(255, 255, 255);
}
li.dropdown:hover > .dropdown-menu{
    display: block;
	background-color: rgb(39, 162, 189);
    color: rgb(255, 255, 255);
}
 /*.navbar-nav {
    width: 100%;
    text-align: center;
	 color: rgb(255, 255, 255);
 }*/
  .navbar-nav > li {
      float: none;
      display: inline-block;
	  
    }
/* ==================================== */

.account-box
{
    border-top: 2px solid #27A2BD;
    z-index: 3;
    font-size: 12px !important;
    font-family: "Helvetica Neue" ,Helvetica,Arial,sans-serif;
    background-color: #ffffff;
    padding: 20px;
	width:117%;
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
.totalCounter {
    margin-left:5px;
	margin-top:5px;
    font-size: 15px;
}
#new-search-area input {
    width:200px;
	margin-left:5px;
	margin-top:5px;
    font-size: 15px;
}
    </style>	
    <style>

 .dropdown-menu.notify-drop {
  min-width: 330px;
  background-color: #fff;
  min-height: 360px;
  max-height: 360px;
}
 .dropdown-menu.notify-drop .notify-drop-title {
  border-bottom: 1px solid #e2e2e2;
  padding: 5px 15px 10px 15px;
}
.dropdown-menu.notify-drop .drop-content {
  min-height: 280px;
  max-height: 280px;
  overflow-y: scroll;
}
.dropdown-menu.notify-drop .drop-content::-webkit-scrollbar-track
{
  background-color: #F5F5F5;
}

.dropdown-menu.notify-drop .drop-content::-webkit-scrollbar
{
  width: 8px;
  background-color: #F5F5F5;
}

 .dropdown-menu.notify-drop .drop-content::-webkit-scrollbar-thumb
{
  background-color: #ccc;
}
.dropdown-menu.notify-drop .drop-content > li {
  border-bottom: 1px solid #e2e2e2;
  padding: 10px 0px 5px 0px;
}
.dropdown-menu.notify-drop .drop-content > li:nth-child(2n+0) {
  background-color: #fafafa;
}
.dropdown-menu.notify-drop .drop-content > li:after {
  content: "";
  clear: both;
  display: block;
}
.dropdown-menu.notify-drop .drop-content > li:hover {
  background-color: #fcfcfc;
}
.dropdown-menu.notify-drop .drop-content > li:last-child {
  border-bottom: none;
}
.dropdown-menu.notify-drop .drop-content > li .notify-img {
  float: left;
  display: inline-block;
  width: 45px;
  height: 45px;
  margin: 0px 0px 8px 0px;
}
.dropdown-menu.notify-drop .allRead {
  margin-right: 7px;
}
.dropdown-menu.notify-drop .rIcon {
  float: right;
  color: #999;
}
.dropdown-menu.notify-drop .rIcon:hover {
  color: #333;
}
.dropdown-menu.notify-drop .drop-content > li a {
  font-size: 12px;
  font-weight: normal;
}
.dropdown-menu.notify-drop .drop-content > li {
  font-weight: bold;
  font-size: 11px;
}
.dropdown-menu.notify-drop .drop-content > li hr {
  margin: 5px 0;
  width: 70%;
  border-color: #e2e2e2;
}
.dropdown-menu.notify-drop .drop-content .pd-l0 {
  padding-left: 0;
}
.dropdown-menu.notify-drop .drop-content > li p {
  font-size: 11px;
  color: #666;
  font-weight: normal;
  margin: 3px 0;
}
.dropdown-menu.notify-drop .drop-content > li p.time {
  font-size: 10px;
  font-weight: 600;
  top: -6px;
  margin: 8px 0px 0px 0px;
  padding: 0px 3px;
  border: 1px solid #e2e2e2;
  position: relative;
  background-image: linear-gradient(#fff,#f2f2f2);
  display: inline-block;
  border-radius: 2px;
  color: #B97745;
}
.dropdown-menu.notify-drop .drop-content > li p.time:hover {
  background-image: linear-gradient(#fff,#fff);
}
.dropdown-menu.notify-drop .notify-drop-footer {
  border-top: 1px solid #e2e2e2;
  bottom: 0;
  position: relative;
  padding: 8px 15px;
}
.dropdown-menu.notify-drop .notify-drop-footer a {
  color: #777;
  text-decoration: none;
}
.dropdown-menu.notify-drop .notify-drop-footer a:hover {
  color: #333;
}
</style>

<script>
var MapLoaded = false;
var markerCluster,oTable,selectSearchTxt="";
var map,infowindow,currentInfo,gcFuel=[],gcDNotRpt=[],gcDon=[],gcDoff=[],TripsIn=[],TripsOut=[],allGeofences=[],LoadPolySites=[],LoadPolyRoutes=[],markers=[],cmarkers=[] ,marker=[],DtripsIn=[],DtripsOut=[],DtripsLoadingTime=[],Dname=[],Dcategory=[],DuniqueId=[],Dphone=[],Dstatus=[],DlastUpdate=[],DgroupId=[],groups=[],events=[],Etype=[],Paddress=[],Pspeed=[],positions=[],Platitude=[],Plongitude=[],myInfo=[],Pcourse=[],displayTable=[],nearestSite=[],nearestSiteLat=[],nearestSiteLng=[],nearestLocation=[],nearestRoute=[],DlastSpeed=[],distance=[],DmaxSpeed=[],DmaxSpeedC=[],Ptotaldistance=[],Pstartdistance=[],PProtocol=[],PFuel=[],SFuel=[],StolenFuelQty=[],FillFuelQty=[],FuelTheftFilled=[],MarkerStatus , markerCurrentState=[],DFitness=[],DInsurance=[],DPermit=[],DRoadtax=[],DPollution=[],Challan=[];
MarkerStatus="";
var callDevices = false;
var sitePolyLoc=[];
var monthNames = [
    "January", "February", "March",
    "April", "May", "June", "July",
    "August", "September", "October",
    "November", "December"
  ];
  
  
function GetNearestSite() {

    var R = 6371; // radius of earth in km
    
	//console.log(positions.length+"  "+LoadPolySites.length +"  "+ LoadPolySites +" "+Platitude+"  "+Plongitude+ "   "+positions);
     for( k=0;k<positions.length; k++ ) {

	var lat = Platitude[positions[k]];
    var lng = Plongitude[positions[k]];
	var distances = [];
    var closest = -1;
    var closestL = -1;
   // console.log("positions[k]="+positions[k]+"lat="+lat+" lng="+lng);
    for( i=0;i<LoadPolySites.length; i++ ) {
        if( LoadPolySites[i][4]=='P'){
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
        if( LoadPolySites[i][4]=='L'){
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
            if ( closestL == -1 || d < distances[closestL] ) {
                closestL = i;
            }
        }
    }
	//alert("closest "+closest);
	if(LoadPolySites[closest]){
	 nearestSite[positions[k]]= LoadPolySites[closest][0] +' '+ parseFloat(distances[closest]).toFixed(2)+' KM';
     nearestSiteLat[positions[k]]=LoadPolySites[closest][2];
     nearestSiteLng[positions[k]]=LoadPolySites[closest][3];
	 
	 nearestLocation[positions[k]] = LoadPolySites[closest][1];
	
	} else {
		 nearestSite[positions[k]]= "undefined";
		 nearestLocation[positions[k]] = "undefined";
		}

    if(LoadPolySites[closestL]){
	 nearestRoute[positions[k]]= LoadPolySites[closestL][0] +' '+ parseFloat(distances[closestL]).toFixed(2)+' KM';
     if(parseFloat(distances[closestL]).toFixed(2)>0.8){
        nearestRoute[positions[k]]="Deviation";
     }
	
	} else {
        nearestRoute[positions[k]]= "undefined";
		}    
		Paddress[positions[k]]= nearestLocation[positions[k]] ;
		//alert(nearestSite[positions[k]]+" "+markers[closest].title +' '+ parseFloat(distances[closest]).toFixed(2)+' KM');
	 }
}  

  
function initialize() 
{ 
    
  //SetWidth(700);
   
  var mapOptions = {
    center: new google.maps.LatLng('21.95', '83.92'),
    zoom: 12,
    scrollwheel: true,
    gestureHandling: 'greedy',
    disableDefaultUI: false,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
	 mapTypeControl: true,
          mapTypeControlOptions: {
              style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
              position: google.maps.ControlPosition.TOP_CENTER
          },
          zoomControl: true,
          zoomControlOptions: {
              position: google.maps.ControlPosition.LEFT_CENTER
          },
          scaleControl: true,
          streetViewControl: true,
          streetViewControlOptions: {
              position: google.maps.ControlPosition.LEFT_TOP
          },
          fullscreenControl: true
	
 };
 MapLoaded = true;
 

  map = new google.maps.Map(document.getElementById("map"),mapOptions);
  
//   markerCluster = new MarkerClusterer(map, marker, 
//             {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m',zoomOnClick: false});

/*
google.maps.event.addListener(markerCluster, "clusterclick", function (c) {
	
	
	var m = c.getMarkers();
//     var p = [];
     var titles = "";
   
	 
	
	 var info = new google.maps.MVCObject;
   info.set('position',c.getCenter());

    var m = c.getMarkers();
    var titles = "";
    for (var i = 0; i < m.length; i++ ){
       // titles += m[i].getTitle() + "\n";
	   var t = marker.indexOf(m[i]);
		titles += "Vehicle :<strong>" +Dname[t]+ "</strong></br>";
     // p.push(m[i].getPosition()+" "+m[i].getLabel());
    }
    var infowindow = new google.maps.InfoWindow();
    infowindow.close();
    infowindow.setContent(titles); //set infowindow content to titles
    infowindow.open(map, info);
		
	// infowindow.setContent(myInfos[i]);
	    map.setZoom(15);
		
       // infowindow.open(map, markerCluster[i]);
          map.setCenter(markerCluster[i].getPosition());
	 //markerCluster.addMarker(marker[i]);
	
});
google.maps.event.addDomListener(document.getElementById('chkCluster'), 'click', function() {
    var set;
        
    if (document.getElementById('chkCluster').checked) {
      set = map;
     // markerCluster.addMarker(marker);
      
         markerCluster.setMap(map);

       
    } else {
      set = null;

      markerCluster.setMap(set);
    }
 //   markerCluster.setMap(set);
   
  });

  */
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

  
 // bounds = new google.maps.LatLngBounds();
 infowindow = new google.maps.InfoWindow({maxWidth: 300}); 
 
getgroups();

 }
 
 var allTottxt,Dontxt,Dofftxt,DNotRpttxt;
function UpdateInfo(){
	//if(!callDevices){
	getDevices();
   // getTrips(283,225,18);
  //  getTrips(283,225,20);
  //  getTrips(319,100,1);
    if(selectSearchTxt!=""){
    var Target = groups.indexOf(selectSearchTxt);
    

       
        $('#DtripsInTxt').text(TripsIn[Target]);
       $('#DtripsOutTxt').text(TripsOut[Target]);

    }else{
        $('#DtripsInTxt').text(TripsIn[18]+TripsIn[1]);
       $('#DtripsOutTxt').text(TripsOut[18]+TripsOut[1]);
    }
    getchallans();
	createTable();
	//}
	//getCoords();
	//CreateMapCluster();
    } 
   
    function CreateMapCluster()
 {
     //alert(i);
     
	 if (document.getElementById('chkCluster').checked) {
			//myInfos[positions[i]] += "Vehicle :<strong>" +Dname[positions[i]]+ "</strong></br>";
            markerCluster = new MarkerClusterer(map,marker,{imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
	
google.maps.event.addListener(markerCluster, "clusterclick", function (c) {

	 var info = new google.maps.MVCObject;
   info.set('position',c.getCenter());

    var m = c.getMarkers();
    var titles = "";
    for (var i = 0; i < m.length; i++ ){
       // titles += m[i].getTitle() + "\n";
	   var t = marker.indexOf(m[i]);
		titles += "Vehicle :<strong>" +Dname[t]+ "</strong></br>";
     // p.push(m[i].getPosition()+" "+m[i].getLabel());
    }
    var infowindow = new google.maps.InfoWindow();
    infowindow.close();
    infowindow.setContent(titles); //set infowindow content to titles
    infowindow.open(map, info);
		
	// infowindow.setContent(myInfos[i]);
	    map.setZoom(15);
		
       // infowindow.open(map, markerCluster[i]);
          map.setCenter(markerCluster[i].getPosition());
	 //markerCluster.addMarker(marker[i]);
	
});
	 }
else
{
$("#chkCluster").click(markerCluster, "clusterclick", function(c){ return false});
$("#chkCluster").unbind("click");
$("#chkCluster").removeAttr("onClick");
}

 }
   
   
   

 

 function ShowPopUp(i){
	 currentInfo=i;
	 infowindow.setContent(myInfo[i]);
	    map.setZoom(15);
        infowindow.open(map, marker[i]);
          map.setCenter(marker[i].getPosition());
	 }

function placeSiteMarker(pLat,pLong)	{
	
		
    var  mySiteMarker = new google.maps.LatLng(pLat,pLong);
		
     map.panTo(mySiteMarker);
     google.maps.event.trigger(map, 'resize');
     map.setCenter(mySiteMarker);
		//alert(pLat+" "+pLong);
	 return false;	
		
 }    
//
// function addMarkerMap(i,data)
//  {
//	 // alert("ok");
//	 var localDevices=[],myLabelColor,myIcon;
//	 if(marker[i]==undefined ){
//		 homeLatLng = new google.maps.LatLng(data.latitude, data.longitude);
//		 //bounds.extend(homeLatLng);
//		 if(data.status=="online"){
//			 myLabelColor="labelsGreen";
//			 myIcon ='<?php echo URL; ?>public/images/maps/green/0.gif';
//			 } else {
//				 myIcon ='<?php echo URL; ?>public/images/maps/yellow/0.gif';
//				  myLabelColor="labelsYellow";
//				 }
//				 
//				 var image;
//				 image = new google.maps.MarkerImage(myIcon,
//                            new google.maps.Size(32, 32),
//                            new google.maps.Point(0, 0),
//                            new google.maps.Point(16, 14),
//                            new google.maps.Size(32, 32)
//                            );
//            var newLabel = data.name;
//            if(newLabel.length>6){
//            newLabel = newLabel.slice(-4);	 
//            }
//     marker[i] =  new MarkerWithLabel({
//					position: homeLatLng,
//					map: map,
//					flat: true,
//					labelContent: newLabel,
//					labelAnchor: new google.maps.Point(-7, 32),
//					labelClass: myLabelColor, 
//					labelStyle: {opacity: 0.70}
//            });
//			marker[i].setIcon(image);
//			marker[i].addListener('click', function() {
//			infowindow.setContent(myInfo[i]);
//			map.setZoom(15);
//        	infowindow.open(map, marker[i]);
//			
//			//GetNearestSite();
//			// nearestSite[i]= GetNearestSite(marker[i].position.lat(),marker[i].position.lng());
//  // alert(nearestSite[i]);
//         // map.setZoom(14);
//         
//        });
// 		//markerCluster.addMarker(marker[i]);
//        // markerCluster.addMarker(marker[i]);
//	
//	 }
//	 		//if(data.name != undefined)
//			
//			
//  }
    
    
    
    function addMarkerMap(i,data)
{
// alert("ok");
var localDevices=[],myLabelColor,myIcon;
if(marker[i]==undefined ){
homeLatLng = new google.maps.LatLng(data.latitude, data.longitude);
//bounds.extend(homeLatLng);
//alert(data.status);
if(data.status=="online"){
    myLabelColor="labelsGreen";
    myIcon ='<?php echo URL; ?>public/images/Truck_green.svg?id='+i+'';
    } else {
        myIcon ='<?php echo URL; ?>public/images/Truck_yellow.svg?id='+i+'';
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

});
//markerCluster.addMarker(marker[i]);
// markerCluster.addMarker(marker[i]);

}
    //if(data.name != undefined)
   
   
}

function getDateDifference(daten){

var date1 = new Date();
var date2 = new Date(daten);
if(daten!='0000-00-00' && daten!=''){
var timeDiff = (date2.getTime() - date1.getTime());
//alert(timeDiff);
var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24)); 
return diffDays+" days";
}else{
    return "N.A"; 
}
}

function getDateDifferenceColor(daten){

var date1 = new Date();
var date2 = new Date(daten);
var bgColor="palegreen";
if(daten!='0000-00-00' && daten!=''){
var timeDiff = (date2.getTime() - date1.getTime());
//alert(timeDiff);
var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24)); 
if(diffDays<=7){

bgColor="#FFE766";
}
if(diffDays<=2){

bgColor="#FFE0E0";
}

return bgColor;
}else{
    return ""; 
}
}

function getTrips(route,dir,group) {
	//callDevices = true;
$.ajax({
url: "<?php echo URL; ?>vts/ComputeTripsJson",
type: "GET",
data: {
route : route,
dir : dir
},
dataType: "json",
success: function(returnedData) {
   // $.each(returnedData, function(index, value) { 

   // console.log(returnedData[index]);
    TripsIn[group] = 0;
    TripsOut[group] = 0;
    // )};
   // obj = JSON.parse(returnedData);
   // returnedData.stringify
     // alert(returnedData.length);
	   for( i = 0; i < returnedData.length; i++ ) {
        // alert(returnedData[i]+" IN:"+returnedData[i].IN);
        DtripsIn[returnedData[i].deviceID]=returnedData[i].IN;
        if( typeof DtripsIn[returnedData[i].deviceID]!='undefined'){
        TripsIn[group]+=parseInt(returnedData[i].IN);
        }
        DtripsOut[returnedData[i].deviceID]=returnedData[i].OUT;
        if( typeof DtripsOut[returnedData[i].deviceID]!='undefined'){
        TripsOut[group]+=parseInt(returnedData[i].OUT);
        }
        DtripsLoadingTime[returnedData[i].deviceID]=returnedData[i].LoadingTime;
       }
      // if(selectSearchtxt=)
    
      
}
});
return false;
}

function getDevices() {
	callDevices = false;
$.ajax({
//url: "<?php echo URL; ?>vts/idleLogs",
url: "http://www.ktcodisha.com/erp/vts/idleLogs?traccarID=109",
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
       Dphone[returnedData[i].id] = returnedData[i].phone;
	   Dcategory[returnedData[i].id] = returnedData[i].category;
       DFitness[returnedData[i].id] = returnedData[i].FitnessExpiryDate;
       DInsurance[returnedData[i].id] = returnedData[i].InsuranceExpiryDate;
       DPermit[returnedData[i].id] = returnedData[i].PermitExpiry;
       DRoadtax[returnedData[i].id] = returnedData[i].RoadTaxExpiry;
       DPollution[returnedData[i].id] = returnedData[i].PollutionExpiry;
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
            PProtocol[returnedData[i].id] = returnedData[i].protocol;
            if(returnedData[i].Fuel >0){
			PFuel[returnedData[i].id] = returnedData[i].Fuel;
        }
			SFuel[returnedData[i].id] = returnedData[i].startFuel;
			StolenFuelQty[returnedData[i].id] = returnedData[i].sStolen;
			FillFuelQty[returnedData[i].id] = returnedData[i].sFilled;
           
			//if(data.groupId != undefined)
			DgroupId[returnedData[i].id] = returnedData[i].groupid;
	   
    if(positions.indexOf(returnedData[i].id) === -1){
       positions.push(returnedData[i].id);
     
	   // Paddress[returnedData[i].id]=returnedData[i].address;
	
	 if(MapLoaded){
      addMarkerMap(returnedData[i].id,returnedData[i]); 
     }
	  FuelTheftFilled[returnedData[i].id]="";
     // console.log("addMarkerMap"+"  "+returnedData[i].id);
     } else {
		 
		 if(MapLoaded){
		 moveMarkerMap(returnedData[i].id,returnedData[i].latitude,returnedData[i].longitude,returnedData[i].course,groups[DgroupId[returnedData[i].id]]);  
         }
		//nearestSite[returnedData[i].id]= GetNearestSite(Platitude[returnedData[i].id],Plongitude[returnedData[i].id]);
		//  console.log("moveMarkerMap"+returnedData[i].id+" "+returnedData[i].latitude+" "+returnedData[i].longitude+" "+returnedData[i].course);
		 }
   }
   
	   }
      // CreateMapCluster();
	   callDevices = false;
	
	//console.log("called createTable");
//createTable();
	  
}

});

}
function setBounds(){
	var bounds = new google.maps.LatLngBounds();
	////map.setCenter(marker[0].getPosition());
for (var i = 0; i < marker.length; i++) {
 bounds.extend(marker[i].getPosition());
}

map.fitBounds(bounds);
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
      // GroupCount[0][0]=0;

	   for( i = 0; i < returnedData.length; i++ ) {
	 // $("#txtPrint").append("name "+returnedData[i].name+" "+"id "+returnedData[i].id+"</ br>");
     TripsIn[returnedData[i].id]=0
     TripsOut[returnedData[i].id]=0
	   groups[returnedData[i].id]=returnedData[i].name;
       gcDon[returnedData[i].id]=0;
       gcDoff[returnedData[i].id]=0;
       gcDNotRpt[returnedData[i].id]=0;
       gcFuel[returnedData[i].id]=0;

    //   GroupCount[1][returnedData[i].name]=0;
    //   GroupCount[2][returnedData[i].name]=0;
   //    GroupCount[3][returnedData[i].name]=0;
    
	   }
	  
	
}


});

}

function getchallans() {

$.ajax({
url: "<?php echo URL; ?>vts/getChallanByDate",
type: "GET",
data: {
foo : "bar"
},
dataType: "json",
success: function(returnedData) {
      //alert(returnedData.length);
      // GroupCount[0][0]=0;

	   for( i = 0; i < returnedData.length; i++ ) {

       Challan[returnedData[i].deviceid]=returnedData[i];
    
	   }
	  
	
}


});

}



function GetColor(status,speed,currentStatus) {
	var Color ="";
        
    if (parseInt(speed)>0 && currentStatus=="Moving") {
        Color="palegreen";
    }
    else  {
        Color="#FFE766";
    }
   if (currentStatus == "Unreachable") {
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
	//console.log( datetime + " " + now + "  "+date_diff.getHours());
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
     if (Color !="#FFE0E0"){
	   Color ="palegreen";
	   }
	   }
   
    return Color;
    }

  var startLocationLat = [];
  var startLocationLng = [];
  var endLocationLat = [];
  var endLocationLng = [];
  var timerHandle = [];

function AnimateMarker(i){
    var deltaLat = (endLocationLat[i]- startLocationLat[i])/70;
    var deltaLng = (endLocationLng[i] - startLocationLng[i])/70;
    var position =[];
    position[0] = marker[i].getPosition().lat();
    position[1] = marker[i].getPosition().lng();
    position[0] += deltaLat;
    position[1] += deltaLng;
    var latlng = new google.maps.LatLng(position[0], position[1]);
    marker[i].setPosition(latlng);
    //|| (position[0]-endLocationLat[i])<=(-1*deltaLat)
    if(position[0]-endLocationLat[i]>deltaLat){
        setTimeout("AnimateMarker("+i+")",100);
    }else {
        startLocationLat[i] = marker[i].getPosition().lat();
       startLocationLng[i] = marker[i].getPosition().lng();
       // return false;
    }
}


//function moveMarkerMap(i,newCoords,newCoords1,newCourse,group) {
//var myIcon, myRotation;
//var newLatLang = new google.maps.LatLng(newCoords,newCoords1);
//startLocationLat[i] = marker[i].getPosition().lat();
//startLocationLng[i] = marker[i].getPosition().lng();
//endLocationLat[i] = newCoords;
//endLocationLng[i] = newCoords1;
//
////bounds.extend(newLatLang);
////console.log("move marker"+" "+i+" "+newCoords+" "+newCoords1+" "+newCourse);
////map.panTo(newLatLang);
//
//
//if(Pspeed[i]>500){
//    AnimateMarker(i);
//} else {
//    marker[i].setPosition(newLatLang);
//}
////
//
////alert(markerCurrentState[i]);
//if(MarkerStatus==""){
//    if(selectSearchTxt!=""){
//    var Target = groups.indexOf(selectSearchTxt);
//    
//    }
//	marker[i].setVisible(true);
//} else {
//	//alert(MarkerStatus+"  "+markerCurrentState[i]+ "i ="+i);
//if(markerCurrentState[i]==MarkerStatus){
//marker[i].setVisible(true);
//} else {
//marker[i].setVisible(false);	
//	}
//if(MarkerStatus=="truck"){
//	if(Dcategory[i]=="truck"){
//		marker[i].setVisible(true);
//		}else {
//		marker[i].setVisible(false);	
//			}
//	}	
//}
//if(selectSearchTxt!=""){
//        if(group!=selectSearchTxt){
//            marker[i].setVisible(false);
//        }
//}
//
////markerCluster.addMarker(marker[i]);
////markerCluster.addMarker(marker[i]);            
////bounds.extend(marker[i].position);
//
////myRotation = parseInt(parseInt(newCourse)/6)*6;
//var srtangle = parseInt(newCourse) * 1 + 11.25;
//myRotation = parseInt(srtangle / 22.5);
////if(parseInt(Pspeed[i])>0){
//	if(markerCurrentState[i]=="Moving"){
//			 myLabelColor="labelsGreen";
//			 myIcon ='<?php echo URL; ?>public/images/maps/green/'+myRotation+'.gif';
//	}
//	if(markerCurrentState[i]=="Idle"){
//				 myIcon ='<?php echo URL; ?>public/images/maps/yellow/'+myRotation+'.gif';
//				  myLabelColor="labelsYellow";
//				 }
//	if(markerCurrentState[i]=="Unreachable"){
//		 myIcon ='<?php echo URL; ?>public/images/maps/red/'+myRotation+'.gif';
//				  myLabelColor="labelsRed";
//		}		
//		image = new google.maps.MarkerImage(myIcon,
//                            new google.maps.Size(32, 32),
//                            new google.maps.Point(0, 0),
//                            new google.maps.Point(16, 14),
//                            new google.maps.Size(32, 32)
//                            );	 
//		
//
//			marker[i].setIcon(image);
//           
//          
//  //  markerCluster.setMap(set);
//
//if(currentInfo==i){
//	infowindow.setContent(myInfo[i]);
//    google.maps.event.trigger(map, 'resize');
//    map.setCenter(marker[i].getPosition());
//	}	
//
//  /* USEFUL CODE 	*/	
//     marker[i].addListener('click', function() {
//		 currentInfo=i;
//		 infowindow.setContent(myInfo[i]);
//          infowindow.open(map, marker[i]);
//        //  map.setZoom(12);
//        google.maps.event.trigger(map, 'resize');
//       //   map.setCenter(marker[i].getPosition());
//        });
//        google.maps.event.addListener(infowindow,'closeclick',function(){
//           currentInfo=0;
//   // then, remove the infowindows name from the array
//});
////USEFUL CODE 	
//
//}

    
    function moveMarkerMap(i,newCoords,newCoords1,newCourse,group) {
   // alert(newCoords);
var myIcon, myRotation;
var newLatLang = new google.maps.LatLng(newCoords,newCoords1);
startLocationLat[i] = marker[i].getPosition().lat();
startLocationLng[i] = marker[i].getPosition().lng();
endLocationLat[i] = newCoords;
endLocationLng[i] = newCoords1;

//bounds.extend(newLatLang);
//console.log("move marker"+" "+i+" "+newCoords+" "+newCoords1+" "+newCourse);
//map.panTo(newLatLang);


if(Pspeed[i]>500){
AnimateMarker(i);
} else {
marker[i].setPosition(newLatLang);
}
//

//alert(markerCurrentState[i]);
if(MarkerStatus==""){
if(selectSearchTxt!=""){
var Target = groups.indexOf(selectSearchTxt);

}
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
if(selectSearchTxt!=""){
if(group!=selectSearchTxt){
   marker[i].setVisible(false);
}
}

myRotation = newCourse;
var count = newCourse.length;

if(markerCurrentState[i]=="Moving"){
 
    myLabelColor="labelsGreen";
   
   myIcon ='<?php echo URL; ?>public/images/Truck_green.svg?id='+i+'';
   

   $('img[src="<?php echo URL; ?>public/images/Truck_green.svg?id='+i+'"]').css({ 'transform': 'rotate(' + newCourse + 'deg)' });
  //$('polygon').css({ 'fill': '#ffff00' });
}
if(markerCurrentState[i]=="Idle"){
  
        myIcon ='<?php echo URL; ?>public/images/Truck_yellow.svg?id='+i+'';
         myLabelColor="labelsYellow";
         
      
         $('img[src="<?php echo URL; ?>public/images/Truck_yellow.svg?id='+i+'"]').css({ 'transform': 'rotate(' + newCourse + 'deg)' });
	   //$('img[src="<?php echo URL; ?>public/images/TRUCK1.svg?id='+i+'" class="svg"]').path({fill:"#ffff00"});
		
				  //myLabelColor="labelsYellow";
				 }
     //   }
if(markerCurrentState[i]=="Unreachable"){
  //  alert('rotate(' + newCourse + 'deg)');
// myIcon ='http://www.liveratrack.com/login/public/images/maps/red/'+myRotation+'.gif';
myIcon ='<?php echo URL; ?>public/images/Truck_red.svg?id='+i+'';
         myLabelColor="labelsRed";
         
    $('img[src="<?php echo URL; ?>public/images/Truck_red.svg?id='+i+'"]').css({ 'transform': 'rotate(' + newCourse + 'deg)' });
}		
image = new google.maps.MarkerImage(myIcon,
                   new google.maps.Size(32, 32),
                   new google.maps.Point(0, 0),
                   new google.maps.Point(16, 14),
                   new google.maps.Size(32, 32)
                   );	
                   
   marker[i].setIcon(image);
//  markerCluster.setMap(set);

if(currentInfo==i){
infowindow.setContent(myInfo[i]);
google.maps.event.trigger(map, 'resize');
map.setCenter(marker[i].getPosition());
}	

/* USEFUL CODE 	*/	
marker[i].addListener('click', function() {
currentInfo=i;
infowindow.setContent(myInfo[i]);
 infowindow.open(map, marker[i]);
//  map.setZoom(12);
google.maps.event.trigger(map, 'resize');
 map.setCenter(marker[i].getPosition());
});
google.maps.event.addListener(infowindow,'closeclick',function(){
  currentInfo=0;
// then, remove the infowindows name from the array
});
//USEFUL CODE 	

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
                 <a class="logo" href="<?php echo URL; ?>vts"><img src="<?php echo URL; ?>public/images/ktc_erp.svg" alt=""></a>
            </div>
                     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                <?php if(Session::get('loggedIn')==true) { ?>
            
            <li><a href="<?php echo URL; ?>dashboard"><img src="<?php echo URL; ?>public/Icon-header/Home.png" style="float: left;font-size:18px;margin-left:-5px;">&nbsp;HOME  </a></li>
            
          <?php if(Roles::handleRole("master")>0){ ?>
           
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php echo URL; ?>public/Icon-header/Master.png" style="float: left;font-size:18px;margin-left:-5px;">&nbsp;MASTER  </a>
            <ul class="dropdown-menu">
            <?php if(Roles::handleRole("master/vehicle")>0){ ?>
             <li><a href="<?php echo URL; ?>master/vehiclemaster"><img src="<?php echo URL; ?>public/Icon-header/Vehicle.png" style="float: left;font-size:18px;margin-left:-5px;">&nbsp;VEHICLE</a></li>
             <?php } ?>
             <?php if(Roles::handleRole("master/driver")>0){ ?>
               <li><a href="<?php echo URL; ?>master/drivermaster"><img src="<?php echo URL; ?>public/Icon-header/Driver.png" style="float: left;font-size:18px;margin-left:-5px;">&nbsp;DRIVER</a></li>
               <?php } ?>
               <!-- <li><a href="<?php// echo URL; ?>master/customermaster">CUSTOMER</a></li>-->
                <li><a href="<?php echo URL; ?>vts/devices"><img src="<?php echo URL; ?>public/Icon-header/Device.png" style="float: left;font-size:18px;margin-left:-5px;">&nbsp;DEVICE</a></li>
                <?php if(Roles::handleRole("master/group")>1){ ?>
                <li><a href="<?php echo URL; ?>vts/groups"><img src="<?php echo URL; ?>public/Icon-header/Group.png" style="float: left;font-size:18px;margin-left:-5px;">&nbsp;GROUPS</a></li>
                <?php } ?>
                <?php if(Roles::handleRole("master/customer")>1){ ?>
                   <li><a href="<?php echo URL; ?>vts/customer"><img src="<?php echo URL; ?>public/Icon-header/Customer.png" style="float: left;font-size:18px;margin-left:-5px;">&nbsp;CUSTOMER</a></li>
                <?php } ?>
                <?php if(Roles::handleRole("master/user")>0){ ?>
                <li><a href="<?php echo URL; ?>vts/users"><img src="<?php echo URL; ?>public/Icon-header/User.png" style="float: left;font-size:18px;margin-left:-5px;">&nbsp;USER</a></li>
                <?php } ?>
                <?php if(Roles::handleRole("employee")>1 and (Session::get('admin_id')=="1" or Session::get('admin_id')=="55")){ ?>
                   <li><a href="<?php echo URL; ?>employee"><img src="<?php echo URL; ?>public/Icon-header/Customer.png" style="float: left;font-size:18px;margin-left:-5px;">&nbsp;EMPLOYEE</a></li>
                <?php } ?>
                <?php if(Roles::handleRole("master/geofence")>1){ ?>
                <li><a href="<?php echo URL; ?>vts/geofences"><img src="<?php echo URL; ?>public/Icon-header/Geofences.png" style="float: left;font-size:18px;margin-left:-5px;">&nbsp;GEOFENCES</a></li>
                <?php } ?>
                <?php if(Roles::handleRole("master/expense")>1){ ?>
                <li><a href="<?php echo URL; ?>master/expenselog"><img src="<?php echo URL; ?>public/Icon-header/Expense.png" style="float: left;font-size:18px;margin-left:-5px;">&nbsp;EXPENSE</a></li>
                <?php } ?>
              </ul>
            </li><?php }  ?>
            <?php
                            if(Session::get('isVedanta')=="1"){
                            if(Roles::handleRole("challan")>0){ ?>
           <li><a href="<?php echo URL; ?>challan"><img src="<?php echo URL; ?>public/Icon-header/Activity Log.png" style="float: left;font-size:18px;margin-left:-5px;">&nbsp;CHALLAN</a></li>
           <?php } } ?> 
             <?php if(Roles::handleRole("reports")>0){ ?>
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php echo URL; ?>public/Icon-header/Report.png" style="float: left;font-size:18px;margin-left:-5px;">&nbsp;REPORTS</a>
           <ul class="dropdown-menu">
           <?php if(Roles::handleRole("reports/historicPlayback")>0){ ?>
                <li><a href="<?php echo URL; ?>vts/historicplayback"><img src="<?php echo URL; ?>public/Icon-header/Historic Playback.png" style="float: left;font-size:18px;margin-left:-5px;">&nbsp;HISTORIC PLAYBACK</a></li>
                <?php } ?>
                <?php if(Roles::handleRole("master/fuel")>1){ ?>
                <li><a href="<?php echo URL; ?>vts/TRIPCOUNTER"><img src="<?php echo URL; ?>public/Icon-header/Trip.png" style="float: left;font-size:18px;margin-left:-5px;">&nbsp;TRIP COUNTER</a></li>
                <?php } ?>
                 <?php if(Roles::handleRole("reports/fuel")>1){ ?>
                <li><a href="<?php echo URL; ?>vts/fuelreport"><img src="<?php echo URL; ?>public/Icon-header/Fuel.png" style="float: left;font-size:18px;margin-left:-5px;">&nbsp;FUEL REPORT</a></li>
                <?php } ?>
                 <?php if(Roles::handleRole("reports/trip")>0){ ?>
                <li><a href="<?php echo URL; ?>vts/reportstrip"><img src="<?php echo URL; ?>public/Icon-header/Trip.png" style="float: left;font-size:18px;margin-left:-5px;">&nbsp;TRIP REPORT</a></li>
                <?php } ?>
                 <?php if(Roles::handleRole("reports/stop")>0){ ?>
                <li><a href="<?php echo URL; ?>vts/reportstops"><img src="<?php echo URL; ?>public/Icon-header/Stop.png" style="float: left;font-size:18px;margin-left:-5px;">&nbsp;STOP REPORT</a></li>
                <?php } ?>
                 <?php if(Roles::handleRole("reports/summary")>0){ ?>
                <li><a href="<?php echo URL; ?>vts/reportssummary"><img src="<?php echo URL; ?>public/Icon-header/Summery.png" style="float: left;font-size:18px;margin-left:-5px;">&nbsp;SUMMARY REPORT</a></li>
                <?php } ?>
                 <?php if(Roles::handleRole("reports/route")>1){ ?>
                <li><a href="<?php echo URL; ?>vts/reportsroutes"><img src="<?php echo URL; ?>public/Icon-header/Route.png" style="float: left;font-size:18px;margin-left:-5px;">&nbsp;ROUTE REPORT</a></li>
                <?php } ?>
                 <?php if(Roles::handleRole("reports/events")>0){ ?>
                <li><a href="<?php echo URL; ?>vts/reportsevents"><img src="<?php echo URL; ?>public/Icon-header/Event.png" style="float: left;font-size:18px;margin-left:-5px;">&nbsp;EVENT REPORT</a></li>
                <?php } ?>
                <?php if(Roles::handleRole("reports/expense")>1){ ?>
                <li><a href="<?php echo URL; ?>master/expensereport"><img src="<?php echo URL; ?>public/Icon-header/Expense.png" style="float: left;font-size:18px;margin-left:-5px;">&nbsp;EXPENSE REPORT</a></li>
                <?php } ?>
              </ul>
           </li>
           <?php }  ?>
           <?php if(Roles::handleRole("activity")>0){ ?>
           <li><a href="<?php echo URL; ?>vts/activitylog"><img src="<?php echo URL; ?>public/Icon-header/Activity Log.png" style="float: left;font-size:18px;margin-left:-5px;">&nbsp;ACTIVITY LOG</a></li>
           <?php }  ?>
           <li><a href="<?php echo URL; ?>vts/commercial"><img src="<?php echo URL; ?>public/Icon-header/Commertial.png" style="float: left;font-size:18px;margin-left:-5px;">&nbsp;COMMERCIAL </a></li>
            
           <!--<li><a href="<?php echo URL; ?>vts/settings"><i class="fa fa-cog" aria-hidden="true" style="font-size:20px;color:white"></i> </a></li>-->
           
          <li><a href="<?php echo URL; ?>vts/settings"><img src="<?php echo URL; ?>public/Icon-header/Setting.png" style="float: left;font-size:18px;margin-left:-5px;">&nbsp;</a></li>
           <li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="<?php echo URL; ?>public/Icon-header/Notification.png" style="float: left;font-size:18px;margin-left:-5px;"><span class="badge badge-error">5</span></a>
<ul class="dropdown-menu notify-drop">
<div class="notify-drop-title">
<div class="row">
    <div class="col-md-6 col-sm-6 col-xs-6">Mark All As Read </div>
    <div class="col-md-6 col-sm-6 col-xs-6 text-right"><a href="" class="rIcon allRead" data-tooltip="tooltip" data-placement="bottom" title="notification"><i class="fa fa-dot-circle-o"></i></a></div>
</div>
</div>
<!-- end notify title -->
<!-- notify content -->

<?php 
$sno = 0;
foreach($this->notes AS $key=>$value){
    $sno++;
        ?>


<div class="drop-content">
<!--<li><div class='notification-subject'><?php	//echo $sno."<br>"?></div></li>
<li><div class='notification-comment'><?php	//echo $value['deviceid']."<br>"?></div></li>
<li><div class='notification-comments'><?php //echo $value['event_type']."<br>"?></div></li>!-->

<!--<li>
    <div class="col-md-3 col-sm-3 col-xs-3"><div class="notify-img"><img src="http://placehold.it/45x45" alt=""></div></div>
    <div class="col-md-9 col-sm-9 col-xs-9 pd-l0"><a href=""></a> <a href="" class="rIcon"><i class="fa fa-dot-circle-o"></i></a>
    
    <hr>
    <p class="time">View</p>
    </div>
</li>!-->
<li>
    <div class="col-md-3 col-sm-3 col-xs-3"><div class="notify-img"><img src="http://placehold.it/45x45" alt=""></div></div>
    <div class="col-md-9 col-sm-9 col-xs-9 pd-l0"><a href=""></a> <a href="" class="rIcon"><i class="fa fa-dot-circle-o"></i></a>
    <?php echo $sno."<br>"?>
    
    <p class="time">View</p>
    </div>
</li>

<li>
    <div class="col-md-3 col-sm-3 col-xs-3"><div class="notify-img"><img src="http://placehold.it/45x45" alt=""></div></div>
    <div class="col-md-9 col-sm-9 col-xs-9 pd-l0"><a href=""></a> <a href="" class="rIcon"><i class="fa fa-dot-circle-o"></i></a>
    <?php echo $value['deviceid']."<br>"?>
    
    <p class="time">view</p>
    </div>
</li>
<li>
    <div class="col-md-3 col-sm-3 col-xs-3"><div class="notify-img"><img src="http://placehold.it/45x45" alt=""></div></div>
    <div class="col-md-9 col-sm-9 col-xs-9 pd-l0"><a href=""></a> <a href="" class="rIcon"><i class="fa fa-dot-circle-o"></i></a>
    <?php echo $value['event_type']."<br>"?>
    
    <p class="time">view</p>
    </div>
</li>
<!--<li>
    <div class="col-md-3 col-sm-3 col-xs-3"><div class="notify-img"><img src="http://placehold.it/45x45" alt=""></div></div>
    <div class="col-md-9 col-sm-9 col-xs-9 pd-l0"><a href=""></a> <a href="" class="rIcon"><i class="fa fa-dot-circle-o"></i></a>
    <p>2172 Overspeeding</p>
    <p class="time">view</p>
    </div>
</li>
<li>
    <div class="col-md-3 col-sm-3 col-xs-3"><div class="notify-img"><img src="http://placehold.it/45x45" alt=""></div></div>
    <div class="col-md-9 col-sm-9 col-xs-9 pd-l0"><a href=""></a> <a href="" class="rIcon"><i class="fa fa-dot-circle-o"></i></a>
    <p>2172 Geofence Enter</p>
    <p class="time">view</p>
    </div>
</li>
<li>
    <div class="col-md-3 col-sm-3 col-xs-3"><div class="notify-img"><img src="http://placehold.it/45x45" alt=""></div></div>
    <div class="col-md-9 col-sm-9 col-xs-9 pd-l0"><a href=""></a> <a href="" class="rIcon"><i class="fa fa-dot-circle-o"></i></a>
    <p>2172 Geofence Exit</p>
    <p class="time">view</p>
    </div>
</li>!-->
</div>

<?php }  ?>

<div class="notify-drop-footer text-center">
<a href=""><i class="fa fa-eye"></i> See All</a>
</div>

          </ul>
        </li>
         <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php echo URL; ?>public/Icon-header/User.png" style="float: left;font-size:18px;margin-left:-5px;">&nbsp;<?php echo Session::get('username'); ?></a>
                           <ul class="dropdown-menu">
                          
                                <li><a href="<?php echo URL; ?>login/logout">LOGOUT</a></li>
                               
                           </ul>
                           </li>
                           <!--<li><a href="<?php echo URL; ?>login/logout"><i class="fa fa-user-circle" aria-hidden="true" style="font-size:24px;color:white"></i>&nbsp;<?php echo Session::get('username'); ?>[LOGOUT]</a></li>-->
                         
							<?php  }  else { ?>  
                         		<li class="social pull-right"><a href="<?php echo URL; ?>login"><img src="<?php echo URL; ?>public/Icon-header/Home.png" style="float: left;font-size:18px;margin-left:-5px;">&nbsp;HOME  </a></li>
 							<?php } ?>
						</ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	</div>	
<script>

    // jQuery.fn.dataTableExt.oApi.fnMultiFilter = function( oSettings, oData ) {
    // for ( var key in oData )
    // {
    //     if ( oData.hasOwnProperty(key) )
    //     {
    //         for ( var i=0, iLen=oSettings.aoColumns.length ; i<iLen ; i++ )
    //         {
    //             if( oSettings.aoColumns[i].sName == key )
    //             {
    //                 /* Add single column filter */
    //                 oSettings.aoPreSearchCols[ i ].sSearch = oData[key];
    //                 break;
    //             }
    //         }
    //     }
    // }
//     this.oApi._fnReDraw( oSettings );
// };
$.extend( $.fn.dataTableExt.oSort, {
    "veh-pre": function ( a ) {
        var ukDatea = a.split(' ');
        //console.log(a);
        if (a == null || a == "") {
            return 0;
        }else{
        return parseInt(ukDatea[4]) * 1;
        }
    },
 
    "veh-asc": function ( a, b ) {
        return ((a < b) ? -1 : ((a > b) ? 1 : 0));
    },
 
    "veh-desc": function ( a, b ) {
        return ((a < b) ? 1 : ((a > b) ? -1 : 0));
    }
} );
$(document).ready(function(){
	oTable = $('#tblData').DataTable( {
            paging:   false,
           // ordering: true,
				 aaSorting: [[4,'asc']],
					columnDefs: [
            {
                targets: [ 0,1,2,3 ],
                visible: false,
				
            } ,
            { type: 'veh', targets: 4 }
        ],
		initComplete : function() {
         
       // $("#tblData_filter").detach().appendTo('#new-search-area');
        $("#tblData_filter").detach().show();
        $('#new-search-area input').on('input', function(){
            oTable.search(this.value).draw();   
          });   
        $('#selectSearch').on('change', function(){
            selectSearchTxt = this.value;
           // oTable.search(this.value).column(2).data().draw();  
	       // oTable.search(MarkerStatus).column(3).data().draw();
           oTable.columns().search('');
           if(selectSearchTxt!=""){
           var Target = groups.indexOf(selectSearchTxt);
                    gcDon[Target]=0;
                    gcDoff[Target]=0;
                    gcDNotRpt[Target]=0;
                    gcFuel[Target]=0;
        }
          if(MarkerStatus=='truck'){
            oTable
                .column(1).search(selectSearchTxt)
                .column(3).search(MarkerStatus)
                .draw();
            }else{
                oTable
                .column(1).search(selectSearchTxt)
                .column(2).search(MarkerStatus)
                .draw();

            }
          });  
    }
				} );

           var column = oTable.columns([12,13,14,15,16,17,18] );
 
 // Toggle the visibility
 column.visible(false);
 column = oTable.columns([19,20,21,22,23] );

//  // Toggle the visibility
column.visible(true);
               
				/*
scrollX: '100%',
            scrollCollapse: true,
 fixedHeader: false,
                scrollX:        true,
 fixedColumns:   {
                        leftColumns: 4,
                        rightColumns: 0
                     },

                  scrollCollapse: true,
                autoWidth: true,
              scrollX:        true,
                        scrollCollapse: true,
            { width: "20px", targets:[7,8,9,10,11] }
                sScrollX:        '100%',
        sScrollXInner: "100%",	
        scrollCollapse: true,
					scrollX:        true,	
					scrollCollapse: false,
				*/
				
	$('#tblData')
        .on( 'mouseenter', 'td', function () {
           // var colIdx = oTable.cell(this).index().column;
 
          //  $( oTable.cells().nodes() ).removeClass( 'highlight' );
           // $( oTable.column( colIdx ).nodes() ).addClass( 'highlight' );
        } );			
//window.setInterval(UpdateInfo, 4000);
var myInterval;
var interval_delay = 500;
var is_interval_running = false;
$(window).focus(function () {
        clearInterval(myInterval); // Clearing interval if for some reason it has not been cleared yet
        if  (!is_interval_running) //Optional
            myInterval = setInterval(function() { is_interval_running = true; UpdateInfo();  }, 4000);
    }).blur(function () {
        clearInterval(myInterval); // Clearing interval on window blur
        is_interval_running = false; //Optional
    });
myInterval = setInterval(function() { is_interval_running = true; UpdateInfo(); }, 4000);
//setInterval(function() { UpdateInfo(); }, 4000);
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
    oTable.columns().search('');
    if(MarkerStatus=='truck'){
    oTable
    .column(1).search(selectSearchTxt)
    .column(3).search(MarkerStatus)
    .draw();
    var column = oTable.columns([12,13,14,15,16,17,18] );
 
        // Toggle the visibility
        column.visible(true);
 column = oTable.columns([19,20,21,22,23] );

//  // Toggle the visibility
 column.visible(false);
    }else{
    oTable
    .column(1).search(selectSearchTxt)
    .column(2).search(MarkerStatus)
    .draw();
    var column = oTable.columns([12,13,14,15,16,17,18] );
 
        // Toggle the visibility
        column.visible(false);
        column = oTable.columns([19,20,21,22,23] );

//  // Toggle the visibility
 column.visible(true);
    }
	//oTable.search(txtSearch).column(3).data().draw();
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

<ul class="nav nav-tabs">
  <li><a href="#a" data-toggle="tab" onClick="javascript: showHideMap(0);" > Text </a></li>
  <li><a href="#a" data-toggle="tab" onClick="javascript: showHideMap(1);" > Map </a></li>
  <li><a href="#a" data-toggle="tab" onClick="javascript: showHideMap(-1);"> Text & Map</a></li>
  <li style="background-color:palegreen"><a href="#a" data-toggle="tab" style="color:#000" onClick="javascript: searchMap('Moving');"><span id="Dontxt">0</span> Moving</a></li>
   <li style="background-color:yellow"><a href="#a"  data-toggle="tab" style="color:#000" onClick="javascript: searchMap('Idle');"><span id="Dofftxt">0</span> Idle</a></li>
    <li style="background-color:#FFE0E0"><a href="#a"  data-toggle="tab" style="color:#000" onClick="javascript: searchMap('Unreachable');"><span id="DNotRpttxt">0</span> No Signal</a></li>
    <li style="background-color:lightblue"><a href="#a"  data-toggle="tab" style="color:#000" onClick="javascript: searchMap('truck');"><span id="DFueltxt">0</span> Fuel Sensor</a></li>
    <li><a href="#a"  data-toggle="tab" style="color:#000" onClick="javascript: searchMap('');"><span id="allTottxt">0</span> All Vehicles</a></li>
<li><div id="new-search-area"><select id="selectSearch">
<option value="">GROUP</option>
<?php foreach($this->groups AS $key=>$value){
						?>
 <option value="<?php echo $value['name']; ?>"><?php echo $value['name']; ?></option>
        <?php } ?>
</select> <input type="text" /></div> </li>

</ul> 
<br>                                 
<div id="pnlLeft" class="touch">
<div id ="myTable" class="ui-resizable" style="height:95%;">


<table id="tblData" class="table tablesorter tdesign dataTable no-footer row-border hover compact" style="border: solid #000 1px; width: 50%; border-collapse: collapse;" role="grid" cellspacing="0" cellpadding="1" bordercolor="lightgrey" border="1" width="50%">
  <thead>
    <tr role="row" style="height:15px;" class="info">
      <th class="sorting_asc" tabindex="0" aria-controls="tblData" rowspan="2" colspan="1" aria-label="SN: activate to sort column descending">SN</th>
      <th tfilter="true" class="sorting" tabindex="0" aria-controls="tblData" rowspan="2" colspan="1" aria-label=": activate to sort column ascending">Group</th>
      <th tfilter="true" class="sorting" tabindex="0" aria-controls="tblData" rowspan="2" colspan="1" aria-label=": activate to sort column ascending">STATUS</th>
      <th tfilter="true" class="sorting" tabindex="0" aria-controls="tblData" rowspan="2" colspan="1" aria-label=": activate to sort column ascending">FUEL SENSOR</th>
      <th tfilter="true" class="sorting" tabindex="0" aria-controls="tblData" rowspan="2" colspan="1"  aria-sort="ascending" aria-label=": activate to sort column ascending">VEH NUM</th>
      <th tfilter="true" class="sorting" tabindex="0" aria-controls="tblData" rowspan="2" colspan="1" aria-label="Last Seen: activate to sort column ascending">LAST UPDATE</th>
      <th tfilter="true" class="sorting" tabindex="0" aria-controls="tblData" rowspan="2" colspan="1" aria-label=": activate to sort column ascending">SITE NAME</th>
      <th tfilter="true" class="sorting" tabindex="0" aria-controls="tblData" rowspan="2" colspan="1" aria-label=": activate to sort column ascending">ROUTE NAME</th>
      
      <th tabindex="0" aria-controls="tblData" rowspan="1" colspan="5" aria-label="maxSpeed: activate to sort column ascending" style="text-align:center">VEHICLE DATA</th>
      <th tabindex="0" aria-controls="tblData" rowspan="1" colspan="6" aria-label="maxSpeed: activate to sort column ascending" style="text-align:center">FUEL DATA</th>
      <th tabindex="0" aria-controls="tblData" rowspan="1" colspan="5" aria-label="maxSpeed: activate to sort column ascending" style="text-align:center">VEHICLE COMPLAINCE</th>
      <th class="sorting" tabindex="0" aria-controls="tblData" rowspan="2" colspan="1" aria-label=": activate to sort column ascending">MAP LOCATION</th>
      <th class="sorting" tabindex="0" aria-controls="tblData" rowspan="2" colspan="1" aria-label=": activate to sort column ascending">TRIP STATUS</th>
     </tr>
    <tr role="row" style="height:15px;" class="info">
   
      

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
      <th class="sorting" tabindex="0" aria-controls="tblData" rowspan="1" colspan="1" aria-label="Speed (km/h): activate to sort column ascending">FITNESS</th>
      <th class="sorting" tabindex="0" aria-controls="tblData" rowspan="1" colspan="1" aria-label="Speed (km/h): activate to sort column ascending">INSURANCE</th>
      <th class="sorting" tabindex="0" aria-controls="tblData" rowspan="1" colspan="1" aria-label="Permit: activate to sort column ascending">PERMIT</th>
      <th class="sorting" tabindex="0" aria-controls="tblData" rowspan="1" colspan="1" aria-label="Distance: activate to sort column ascending">ROADTAX</th>
      <th class="sorting" tabindex="0" aria-controls="tblData" rowspan="1" colspan="1" aria-label="Distance: activate to sort column ascending">POLLUTION</th>
    </tr>
 </thead>
  <tbody>
  </tbody>
</table>
</div>

</div>


<div id="pnlRight">
 <div id="divMapCluster" style="position: absolute; top: 8px; right: 5px; z-index: 9;">
                                <input type="checkbox" id="chkCluster" />
                                Density Cluster
                            </div>
<div id="map" style="width:100%; height:82%; margin-bottom:5px;">&nbsp;
</div>
<div id="divMapSite" style='position: absolute; top: 8px; left: 50px; z-index: 9;'>
<!--
 <input type="button" id="viewVehicles" value="Centre" onClick="setBounds();" /> -->
                                <input type="button" id="btnMapSiteSearch" value="Show Sites" onClick="createSiteMarker();" />
                            </div>
<div id="divMapLatLngt">
                            </div>
</div>
</div>
</div>
<script>
showHideMap(0);
//

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
     if(allGeofences[j].area.substr(0,1)=="L"){
            // alert(tttemp+" "+allGeofences[j].name+" "+allGeofences[j].description+" "+j);
            LoadpolyCoords_Line(tttemp,allGeofences[j].name,allGeofences[j].description,j);
         }else{
	    LoadpolyCoords(tttemp,allGeofences[j].name,allGeofences[j].description,j);
         }
	  	}
		
	  	
	}	
	
	
});

}

loadpolygon();

function drawPolygons(){
	var tttemp;
    var RouteColors = ["red" ,"green" ,"blue","brown","purple"];
    var rcCounter=0;
	  for( j =0; j < allGeofences.length; j++ ) {
	     tttemp=ConvertCoords(allGeofences[j].area);
         if(allGeofences[j].area.substr(0,1)=="P"){
	     getpolyCoords(tttemp,allGeofences[j].name,j);
         }
         if(allGeofences[j].area.substr(0,1)=="L"){

         getpolyLine(tttemp,allGeofences[j].name,j,RouteColors[rcCounter]);
         rcCounter++;
         }
	  	}
	}

function ConvertCoords(resulot){
//alert(resulot);
if(resulot.substr(0,1)=="L"){
    resulot=resulot.substr(12);
}
if(resulot.substr(0,1)=="P"){
    resulot=resulot.substr(9);
}

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
function getpolyLine(myData,name,i,rcColor){
	var path = [];
	
		 var latlngset,
					counter = 0;
				$.each(myData, function(k, v) {
					if (typeof v != 'undefined') {
					//alert(v);
					//	paths.push(v);
					//	mapCenter[0] += v[0];
					//	mapCenter[1] += v[1];
						
						latlngset = new google.maps.LatLng(v[0], v[1]);
						path.push(latlngset);
						
						counter++;
                    
				
                var lineSymbol = {
          path: google.maps.SymbolPath.FORWARD_CLOSED_ARROW
        };
        var myRoute = new google.maps.Polyline({
          path: path,
        //   icons: [{
        //     icon: lineSymbol,
        //     offset: '100%'
        //   }],
          strokeColor: rcColor,
          strokeOpacity: 0.5,
          strokeWeight: 4
        });
		 
        myRoute.setMap(map); 
    }
				});
	
        // Construct the polygon.
       
			
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

    		   LoadPolySites.push([name,desc,mapCenter[0],mapCenter[1],"P"]);
}
function LoadpolyCoords_Line(myData,name,desc,i){
	//var path = [];
	
		 var mapCenter = new Array(0, 0),
					counter = 0;
				$.each(myData, function(k, v) {
					if (typeof v != 'undefined') {
					//alert(v);
					//	paths.push(v);
                    LoadPolySites.push([name,desc,v[0],v[1],"L"]);
					}
				});
    		  
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
	var notifyMe;
    if (distance != null) {
        notifyMe ="success";
		$.ajax({
url: "<?php echo URL; ?>vts/totaldistance",
type: "GET",
data: {
deviceid : id,
totalDistance : distance
},
dataType: "html",
success: function(myData) {
$.notify("Total Distance updated to "+distance+" KM", notifyMe);
		//alert("Total Distance updated to "+distance+" KM");
	  	
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
function substr_replace (str, replace, start, length) {

if (start < 0) { 
    start = start + str.length;
}
length = length !== undefined ? length : str.length;
if (length < 0) {
    length = length + str.length - start;
}
return str.slice(0, start) + replace.substr(0, length) + replace.slice(length) + str.slice(start + length);
}

 function createTable() {
	 GetNearestSite();
var txt  ='';
	
			var Don=0,Doff=0,DNotRpt=0,Dsum=0,DFuel=0,localSpeed,travelled_distance=0,oddometer=0,currentFuel=0,KMPL=0,FConsumed=0;
			var currentStatus = "";
	   for( i = 0; i < positions.length; i++ ) {
		   
		   KMPL=0;
		   var GetIdle;
		    if(DlastSpeed[positions[i]]==null){
					   DlastSpeed[positions[i]]=DlastUpdate[positions[i]];
					   }
		   
		 
				   //GetIdle = (get_time_diff(DlastSpeed[positions[i]]));
				var counterColor = IdleTimeColor(DlastUpdate[positions[i]],parseInt(Pspeed[positions[i]]));
				var OverSpeedCounterColor = "";
				 if(Pstartdistance[positions[i]]!=null){
				  travelled_distance = ((Ptotaldistance[positions[i]]-Pstartdistance[positions[i]])/1000).toFixed(1);
				   }else  {
					   travelled_distance =0;
					   }
				if(Dcategory[positions[i]]=='truck'){
					DFuel++;
                    gcFuel[DgroupId[positions[i]]]++;
					}
                    if(groups[DgroupId[positions[i]]]==null){
                        groups[DgroupId[positions[i]]]=0;
                     }
				if(counterColor=="palegreen"){
					if(travelled_distance!=0){
					 Don++;
                     gcDon[DgroupId[positions[i]]]++;
                    // GroupCount[1][groups[DgroupId[positions[i]]]]++;
					 currentStatus = "Moving";
					} else{
						Doff++;
                       gcDoff[DgroupId[positions[i]]]++;
                      //  GroupCount[2][groups[DgroupId[positions[i]]]]++;   
					  currentStatus = "Idle";
					
					  } 
					}
				if(counterColor=="orange"){
					  Doff++;
                      gcDoff[DgroupId[positions[i]]]++;
                   //   GroupCount[2][groups[DgroupId[positions[i]]]]++; 
					  currentStatus = "Idle";
					}
				if(counterColor=="#FFE766"){
					  Doff++;
                      gcDoff[DgroupId[positions[i]]]++;
                   //   GroupCount[2][groups[DgroupId[positions[i]]]]++; 
					  currentStatus = "Idle";
					}
				if(counterColor=="#FFE0E0"){
					  DNotRpt++;
                      gcDNotRpt[DgroupId[positions[i]]]++;
					  Dstatus[positions[i]] = "Unreachable";
                   //   GroupCount[3][groups[DgroupId[positions[i]]]]++; 
					  currentStatus = "Unreachable";
					}	
					
				  if (parseInt(Pspeed[positions[i]])>0 && currentStatus == "Moving"){
		   
			   GetIdle = "0d 00:00:00";

			   } else {
				   GetIdle = (get_time_diff(DlastSpeed[positions[i]]));
				   
				   }	
					
					markerCurrentState[positions[i]]=currentStatus;
								
				  
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
                
                if(PProtocol[positions[i]]!='wialon'){
				currentFuel = parseFloat((PFuel[positions[i]])/10).toFixed(1);
				initialFuel = parseFloat((SFuel[positions[i]])).toFixed(1);
                } else {
                currentFuel = parseFloat((PFuel[positions[i]])).toFixed(1);
				initialFuel = parseFloat((SFuel[positions[i]])).toFixed(1);

                }
				if(StolenFuelQty[positions[i]]==null){
						StolenFuelQty[positions[i]]=0;
						}
						
						if(FillFuelQty[positions[i]]==null){
						FillFuelQty[positions[i]]=0;
						}
				if(travelled_distance!=0 && initialFuel !=0 && currentFuel !=0){
                    FConsumed = parseFloat(initialFuel-currentFuel-parseFloat(StolenFuelQty[positions[i]]).toFixed(1)+parseFloat(FillFuelQty[positions[i]])).toFixed(1);
                    if (FConsumed<0){
                        FConsumed=0;
                        }
                        if(FConsumed>3){
					KMPL = parseFloat(travelled_distance/FConsumed).toFixed(1);
                        }else{
                            KMPL = 0; 
                        }
					}
					
					
					var Vehicle,tdSno = "",tdGroups = "",tdDeviceID = "",tdCurrentStatus = "",tdCategory = "",tdDname = "",tdLastUpdate = "",tdNearestSite = "",tdSpeed = "",tdMaxSpeed = "",tdIdleTime = "",tdOddometer = "",tdTravelledDistance = "",tdInitialFuel = "",tdFilled = "",tdConsumed = "",tdStolen = "",tdCurrentFuel = "",tdKMPL = "",tdAddress ="" , tdTxt = "black",tdFitness ="",tdInsurance="",tdPermit="",tdRoadtax="",tdPollution="",tdTripsIn="",tdTripsOut="",tdLoadingTime="",tdTripStatus="";
					
					tdDeviceID = '<tr style="height:20px;" role="row"><td>'+positions[i]+'</td>';
					tdGroups = '<td class="info">'+groups[DgroupId[positions[i]]]+'</td>';
					tdCurrentStatus = '<td>'+currentStatus+'</td>';
                    tdCategory = '<td>'+Dcategory[positions[i]]+'</td>';
                    
                    var Original_No= Dname[positions[i]];
                     Original_No = Original_No.replace(/\s/g,'');
                    // if(Original_No.length>5){
                     //  Vehicle = Original_No;
                     Vehicle = substr_replace(Original_No," ",5,0);
                    // }else{
                    //     Vehicle = Original_No;
                    // }

					tdDname = '<td style="background-color:'+GetColor(Dstatus[positions[i]],Pspeed[positions[i]],currentStatus)+'"><a href="#" style="text-align:center;color:#000;" onClick=ShowPopUp('+positions[i]+') ><strong>'+Vehicle+'</strong></a></td>';
                    tdFitness ='<td style="text-align:center;background-color:'+getDateDifferenceColor(DFitness[positions[i]]) +';">'+getDateDifference(DFitness[positions[i]])+'</td>';
                    tdInsurance ='<td style="text-align:center;background-color:'+getDateDifferenceColor(DInsurance[positions[i]]) +';">'+getDateDifference(DInsurance[positions[i]])+'</td>';
                    tdPermit ='<td style="text-align:center;background-color:'+getDateDifferenceColor(DPermit[positions[i]]) +';">'+getDateDifference(DPermit[positions[i]])+'</td>';
                    tdRoadtax ='<td style="text-align:center;background-color:'+getDateDifferenceColor(DRoadtax[positions[i]]) +';">'+getDateDifference(DRoadtax[positions[i]])+'</td>';
                    tdPollution ='<td style="text-align:center;background-color:'+getDateDifferenceColor(DPollution[positions[i]]) +';">'+getDateDifference(DPollution[positions[i]])+'</td>';
					tdLastUpdate = '<td style="text-align:center; background-color:'+IdleTime(DlastUpdate[positions[i]])+'">'+formatDate(DlastUpdate[positions[i]])+'</td>';
					tdNearestSite = '<td><a href="#" onClick=placeSiteMarker('+nearestSiteLat[positions[i]]+','+nearestSiteLng[positions[i]]+') >'+nearestSite[positions[i]].toUpperCase()+'</a></td>';
                   // nearestRoute 
                   tdnearestRoute = '<td>'+nearestRoute[positions[i]].toUpperCase()+'</td>';
               
					tdSpeed = '<td style="text-align:center;">'+parseInt(parseInt(Pspeed[positions[i]])*1.852)+'</td>';
					if (parseInt((DmaxSpeed[positions[i]])*1.852) >=60) {
						tdTxt = "red";
						}
					tdMaxSpeed = '<td style="text-align:center;background-color:'+OverSpeedCounterColor+';color:'+tdTxt+'">'+parseInt((DmaxSpeed[positions[i]])*1.852)+'</td>';
					tdIdleTime = '<td style="background-color:'+IdleTimeColor(DlastSpeed[positions[i]],parseInt(Pspeed[positions[i]]))+'; text-align:center;">'+GetIdle+'</td>';
					tdOddometer = '<td style="text-align:right;"><a href="#" onClick=myOddometer('+positions[i]+') >'+(oddometer)+'</a></td>';
					tdTravelledDistance = '<td style="text-align:right;">'+travelled_distance+'</td>';
                    //DtripsLoadingTime
                    if( typeof DtripsIn[positions[i]]=='undefined'){
                        DtripsIn[positions[i]]=""; 
                    }
                    /*
                    else{
                        TripsIn+=parseInt(DtripsIn[positions[i]]);
                    }
                    */
                    if( typeof DtripsOut[positions[i]]=='undefined'){
                        DtripsOut[positions[i]]=""; 
                    }
                    /*
                    else{
                        TripsOut+=parseInt(DtripsOut[positions[i]]);
                    }
                    */
                    if( typeof DtripsLoadingTime[positions[i]]=='undefined'){
                        DtripsLoadingTime[positions[i]]=""; 
                    }
                  
                  //  tdTripsIn= '<td style="text-align:center;">'+DtripsIn[positions[i]]+'</td>';
                 //   tdTripsOut= '<td style="text-align:center;">'+DtripsOut[positions[i]]+'</td>';
                    tdLoadingTime= '<td style="text-align:center;">'+DtripsLoadingTime[positions[i]]+'</td>';
					tdInitialFuel = '<td style="text-align:center;">'+initialFuel+'</</td>';
					tdFilled = '<td style="text-align:center;">'+parseFloat(FillFuelQty[positions[i]]).toFixed(1)+'</td>';
					tdConsumed = '<td style="text-align:center;">'+FConsumed+'</td>';
					tdStolen = '<td style="text-align:center;">'+parseFloat(StolenFuelQty[positions[i]]).toFixed(1)+'</td>';
					tdCurrentFuel = '<td style="text-align:center;"><a href="<?php echo URL; ?>vts/reports?date=<?php echo date("Y-m-d"); ?>&deviceid='+positions[i]+'" target="_blank" style="text-align:center;color:#000;">'+currentFuel+'</a></td>';
					tdKMPL = '<td style="text-align:center;">'+KMPL+'</td>';
					tdAddress  ='<td>'+Paddress[positions[i]].toUpperCase()+'</td>';
					var TripStatus;
                    if(Challan[positions[i]]){
                    TripStatus = Challan[positions[i]].status;
                   if(Challan[positions[i]].unloadingpoint!=null){
                    TripStatus = "UNLOADED";
                   }
                    
                    }else {
                        TripStatus ="";   
                    }    
                 tdTripStatus = '<td>'+TripStatus+'</td></tr>';
					txt = tdDeviceID+tdGroups+tdCurrentStatus+tdCategory+tdDname+tdLastUpdate+tdNearestSite+tdnearestRoute+tdTripsIn+tdTripsOut+tdSpeed+tdMaxSpeed+tdIdleTime+tdOddometer+tdTravelledDistance+tdInitialFuel+tdFilled+tdConsumed+tdStolen+tdCurrentFuel+tdKMPL+tdFitness+tdInsurance+tdPermit+tdRoadtax+tdPollution+tdAddress+tdTripStatus;
					
			//		}
	 // $("#txtPrint").append("name "+returnedData[i].name+" "+"id "+returnedData[i].id+"</ br>");
	  
	   //'+(IdleTimeColor(DlastUpdate[positions[i]]),parseInt(Pspeed[positions[i]]))+'  StolenFuelQty FillFuelQty currentStatus
	   		//	myInfo[positions[i]] = "Group :" +groups[DgroupId[positions[i]]] + "</br>";
               if(Challan[positions[i]]){
                    TripStatus = Challan[positions[i]].status;
                   if(Challan[positions[i]].unloadingpoint!=null){
                    TripStatus = "UNLOADED";
                   }
                myInfo[positions[i]] = "<h4>"+TripStatus+"</h4>";
                myInfo[positions[i]] += "Vehicle :<strong>" +Dname[positions[i]]+ "</strong></br>";
                myInfo[positions[i]] += "Unique ID :" +DuniqueId[positions[i]] + "</br>";
                myInfo[positions[i]] += "SIM :" +Dphone[positions[i]] + "</br>";
				myInfo[positions[i]] += "IAS :" +Challan[positions[i]].gatepass_no + "</br>";
				myInfo[positions[i]] += "CHALLAN:" +Challan[positions[i]].challanno + "</br>";
				myInfo[positions[i]] += "VendorCode" +Challan[positions[i]].vendorCode + "</br>";
                myInfo[positions[i]] += "Driver" +Challan[positions[i]].driver_name + "</br>";
                myInfo[positions[i]] += "Idle Since :" +(get_time_diff(DlastSpeed[positions[i]])) + "</br>";
				myInfo[positions[i]] += "Speed :" +parseInt(parseInt(Pspeed[positions[i]])*1.852) + " km/h</br>";
				myInfo[positions[i]] += "latitude :" +(Platitude[positions[i]]) + "</br>";
				myInfo[positions[i]] += "longitude :" +(Plongitude[positions[i]]) + "</br>";
                myInfo[positions[i]] += "Nearest Site :" +nearestSite[positions[i]].toUpperCase() + "</br>";
                myInfo[positions[i]] += "Nearest Route :" +nearestRoute[positions[i]].toUpperCase() + "</br>";
               }else{
                myInfo[positions[i]] = "<h4>"+currentStatus+"</h4>";
				myInfo[positions[i]] += "Vehicle :<strong>" +Dname[positions[i]]+ "</strong></br>";
                myInfo[positions[i]] += "Unique ID :" +DuniqueId[positions[i]] + "</br>";
                myInfo[positions[i]] += "SIM :" +Dphone[positions[i]] + "</br>";
				myInfo[positions[i]] += "Last Seen :" +formatDate(DlastUpdate[positions[i]]) + "</br>";
				myInfo[positions[i]] += "Idle Since :" +(get_time_diff(DlastSpeed[positions[i]])) + "</br>";
				myInfo[positions[i]] += "Speed :" +parseInt(parseInt(Pspeed[positions[i]])*1.852) + " km/h</br>";
				myInfo[positions[i]] += "latitude :" +(Platitude[positions[i]]) + "</br>";
				myInfo[positions[i]] += "longitude :" +(Plongitude[positions[i]]) + "</br>";
				myInfo[positions[i]] += "Direction :" +(Pcourse[positions[i]]) + "</br>";
				myInfo[positions[i]] += "Nearest Site :" +nearestSite[positions[i]].toUpperCase() + "</br>";
				myInfo[positions[i]] += "Nearest Location :" +Paddress[positions[i]].toUpperCase() + "</br>";

               }


				//myInfo[positions[i]] += "maxspeed :" +devicedaylog[maxspeed[positions[i]]]+ "</br>";
				//myInfo[positions[i]] += "Color :" +IdleTimeColor(DlastUpdate[positions[i]]),parseInt(Pspeed[positions[i]]) + "</br>";
				//myInfo[positions[i]] += "GetIdle :" +get_time_diff(formatDate(DlastUpdate[positions[i]])) + "</br>";
				
				

   //events[positions[i]]
        displayTable[i]= txt;
        
		
		//
	   }
	  
	   //
	   if(selectSearchTxt!=""){
            var Target = groups.indexOf(selectSearchTxt);
                    Don=  gcDon[Target];
                    Doff = gcDoff[Target];
                    DNotRpt = gcDNotRpt[Target];
                    DFuel = gcFuel[Target];
                    gcDon[Target]=0;
                    gcDoff[Target]=0;
                    gcDNotRpt[Target]=0;
                    gcFuel[Target]=0;
        }
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
        //scrollPosX = $("#tblData").offsetX();
        //scrollPosX = $("#tblData")scroll.offsetX();
		oTable.clear().draw();
		 for( i = 0; i < displayTable.length; i++ ) {
		 oTable.row.add($(displayTable[i]));
		 }
	   oTable.draw();
      // oTable.columns.adjust().draw();
       //oTable.fixedColumns().update();
	   $("#tblData").scrollTop(scrollPos);
      // $("#tblData").scrollX(scrollPosX);
		//console.log("create table pushed");
}
  			

</script>
