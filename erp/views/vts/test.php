
<link href="<?php echo URL; ?>public/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo URL; ?>public/css/animate.min.css" rel="stylesheet">
		<link href="<?php echo URL; ?>public/css/style1.css" rel="stylesheet">
		<link href="<?php echo URL; ?>public/css/jquery.dataTables.min.css" rel="stylesheet">
		<link href="<?php echo URL; ?>public/css/responsive.dataTables.min.css" rel="stylesheet">
 <link href="<?php echo URL; ?>public/css/rowReorder.dataTables.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>

		<!-- JS -->
		<script src="<?php echo URL; ?>public/js/jquery.min.js"></script>
		<script src="<?php echo URL; ?>public/js/bootstrap.min.js"></script>
		<script src="<?php echo URL; ?>public/js/jquery.dataTables.min.js"></script>
		<script src="<?php echo URL; ?>public/js/dataTables.responsive.min.js"></script>
      <script src="<?php echo URL; ?>public/js/dataTables.rowReorder.min.js"></script>
	  <script type="text/javascript" src="<?php echo URL; ?>public/js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="<?php echo URL; ?>public/js/jquery-ui.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&key=AIzaSyDvoRDqzE5AutQBzNBrYna6c0e3FyJPJ1g&country=IN"></script>
		<!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDvoRDqzE5AutQBzNBrYna6c0e3FyJPJ1g&country=in"></script>-->
		
		<script src="<?php echo URL; ?>public/js/gmaps.js"></script>
		<script src="<?php echo URL; ?>public/js/fancywebsocket.js"></script>
	<style type="text/css">table.imagetable {font-family: verdana,arial,sans-serif;font-size:11px;color:#333333;border-width: 1px;border-color: #999999;border-collapse: collapse;}table.imagetable th {background:#b5cfd2 ;border-width: 1px;padding: 8px;border-style: solid;border-color: #999999;}table.imagetable td {background:#dcddc0 ;border-width: 1px;padding: 8px;border-style: solid;border-color: #999999;}.online {background-color: #0f0;}.offline {background-color: #0c0;}.unknown {background-color: #060;}</style>	

<script>
		var Server;

		function log( text ) {
			$log = $('#log');
			//Add text to log
			$log.append(($log.val()?"\n":'')+text);
			//Autoscroll
			$log[0].scrollTop = $log[0].scrollHeight - $log[0].clientHeight;
		}

		function send( text ) {
			Server.send( 'message', text );
		}

		$(document).ready(function() {
			log('Connecting...');
			Server = new FancyWebSocket('ws://52.89.59.253:8082/api/socket');

			$('#message').keypress(function(e) {
				if ( e.keyCode == 13 && this.value ) {
					log( 'You: ' + this.value );
					send( this.value );

					$(this).val('');
				}
			});

			//Let the user know we're connected
			Server.bind('open', function() {
				log( "Connected." );
			});

			//OH NOES! Disconnection occurred.
			Server.bind('close', function( data ) {
				log( "Disconnected." );
			});

			function isDefined(x) {
				var undefined;
				return x !== undefined;
			}
			//Log any messages sent from server
			Server.bind('message', function( payload ) {
				
				 var obj = JSON.parse(payload);
				// log( obj["devices"][0].id);
				//if(obj["devices"].length >0){
					// log("devices >>>>>"+ payload );
					 
				// }
				 
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
					 log("events >>>>>"+ payload );
					  i=obj["events"][0].id;
					 data = obj["events"][0];
					 events[i]=data.type; 
				 }
				 
				 if(isDefined(obj["positions"])){
					// log("postions >>>>>"+ payload );
	   Paddress[obj["positions"][0].deviceId]=obj["positions"][0].address;
	   Pspeed[obj["positions"][0].deviceId]=obj["positions"][0].speed;
	   Platitude[obj["positions"][0].deviceId]=obj["positions"][0].latitude;
	   Plongitude[obj["positions"][0].deviceId]=obj["positions"][0].longitude;
				 }
				 
				 
				 /*
				 
				
				 
				 
				 if(obj["devices"].length >0){
					 log("devices >>>>>"+ payload );
					 
				 }
				 
				if(obj["positions"].length >0){
					 log("positions >>>>>"+ payload );
					 
				 }
				 */
				
				//addMarkerMap(obj.devices[0].id,obj.devices[0]); 
				//log( obj.events[0].type );
				//addEventMap(obj.events[0].id,obj.events[0]); 
				//alert(payload.devices[0].id);
				createTable();
			});

			Server.connect();
		});
	
var map, marker=[],Dname=[],DuniqueId=[],Dstatus=[],DlastUpdate=[],DgroupId=[],groups=[],events=[],Etype=[],Paddress=[],Pspeed=[],positions=[],Platitude=[],Plongitude=[];
var monthNames = [
    "January", "February", "March",
    "April", "May", "June", "July",
    "August", "September", "October",
    "November", "December"
  ];
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

 function addMarkerMap(i,data)
  {
	 // alert("ok");
	 var localDevices=[];
	 if(marker[i]==undefined ){
     marker[i] = new google.maps.Marker({
                position: new google.maps.LatLng('23.11', '71.00'),
                map: map,
				title: data.name,
				label: data.name,
            });
	 }
			Dname[i] = data.name;
			DuniqueId[i] = data.uniqueId;
			Dstatus[i] = data.status;
			DlastUpdate[i] = data.lastUpdate;
			DgroupId[i] = data.groupId;
		
			//localDevices.push(data.name);
			//localDevices.push(data.uniqueId);
			//devices[i].push(localDevices);
			//devices[i][1]=data.uniqueId;
//var latLng = marker.getPosition(); // returns LatLng object
//map.setCenter(latLng); 	
  }
  
  function getDevices() {

$.ajax({
url: "http://localhost/erp/vts/getCurrentDevices",
type: "GET",
data: {
foo : "bar"
},
dataType: "json",
success: function(returnedData) {
      //alert(returnedData.length);
	   for( i = 0; i < returnedData.length; i++ ) {
	 // $("#txtPrint").append("name "+returnedData[i].name+" "+"id "+returnedData[i].id+"</ br>");
	  
	   positions[i]=returnedData[i].id;
   addMarkerMap(returnedData[i].id,returnedData[i]); 
	   }
	  
	  
}
});

}
  function getgroups() {

$.ajax({
url: "http://localhost/erp/vts/getgroups",
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
	  
	 createTable(); 
}
});

}
  
  /*function getevents() {
//http://52.89.59.253:8082/api/reports/events?_dc=1499432031380&groupId=1&type=allEvents&from=2017-07-06T12:21:56.000Z&to=2017-07-08T12:51:56.000Z&page=1&start=0&limit=25
$.ajax({
url: "http://localhost/erp/vts/getevents",
type: "GET",
data: {
	foo : "bar"
/*_dc :"1499432031380",
groupId	: "1",
type	: "allEvents",
from : "2017-07-06T12:21:56.000Z",
to :	"2017-07-08T12:21:56.000Z"
},
dataType: "json",
success: function(returnedData) {
      //alert(returnedData.length);
	  log(returnedData);
	   for( i = 0; i < returnedData.length; i++ ) {
	 // $("#txtPrint").append("name "+returnedData[i].name+" "+"id "+returnedData[i].id+"</ br>");
	  
	   events[returnedData[i].deviceId]=returnedData[i].type;
   //addMarkerMap(returnedData[i].id,returnedData[i]); 
	   }
}
});

}
 */ 
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
  
   function getEvents() {
//getDevices();
$.ajax({
url: "http://localhost/erp/vts/getEvents",
type: "GET",
data: {
foo : "bar"
},
dataType: "json",
success: function(returnedData) {
      //alert(returnedData.length);
	   for( i = 0; i < returnedData.length; i++ ) {
	 // $("#txtPrint").append("name "+returnedData[i].name+" "+"id "+returnedData[i].id+"</ br>");
	 
	   events[returnedData[i].deviceId]=returnedData[i].type;
   //addMarkerMap(returnedData[i].id,returnedData[i]); 
	   }
	  
	  createTable();
}
});

}
   function createTable() {
	   

    var txt = '<div class="col-md-12"><div class="card"><div class="card-header" data-background-color="green"><h4 class="title">Vehicle Master</h4><p class="category">Here is a subtitle for this table</p></div><div class="card-content table-responsive"><table border="1" id="example" class="cell-border"><br><br><b>Select Group</b><select name="lstHomeGroups" id="lstHomeGroups" onchange="ChangeHomeGroup();"><option>All Group</option><option value="4">KTC</option><option value="7">Livera</option></select><br><br><b>Select vehicle status</b><select name="lstHomeGroups" id="lstHomeGroups" onchange="ChangeHomeGroup();"><option>Any</option><option value="4">moving</option><option value="7">stoppage</option><option value="4">overspeed</option></select><br><br><br><br><span style="background-color: palegreen; width: 10px; display: inline-block">&nbsp;</span> Moving &nbsp;&nbsp;<span style="background-color: yellow; width: 10px; display: inline-block">&nbsp;</span> Idle &nbsp;&nbsp;<span style="background-color: red; width: 10px; display: inline-block">&nbsp;</span> Unreachable &nbsp;&nbsp;<br><br><tr bgcolor="#A9A9A9"><th>name</th><th>uniqueId</th><th>status</th><th>lastUpdate</th><th>groupId</th><th>address</th><th>speed</th><th>Events</th></tr>';
					
            
	   for( i = 0; i < positions.length; i++ ) {
	 // $("#txtPrint").append("name "+returnedData[i].name+" "+"id "+returnedData[i].id+"</ br>");
	   txt += "<tr><td>"+Dname[positions[i]]+"</td><td>"+DuniqueId[positions[i]]+"</td><td style='background-color:"+GetColor(Dstatus[positions[i]])+"'>"+Dstatus[positions[i]]+"</td><td>"+formatDate(DlastUpdate[positions[i]])+"</td><td>"+groups[DgroupId[positions[i]]]+"</td><td>"+Paddress[positions[i]]+"</td><td>"+Pspeed[positions[i]]+"</td><td>"+events[positions[i]]+"</td></tr>";
	     moveMarkerMap(positions[i],Platitude[positions[i]],Plongitude[positions[i]]); 
   //addMarkerMap(returnedData[i].id,returnedData[i]); 
	   }
	  
	   txt += "</table></div></div></div></div></div>";
	  $('#txtPrint').html(txt);


}
  
  function getCoords() {
//getDevices();
$.ajax({
url: "http://localhost/erp/vts/getPostions",
type: "GET",
data: {
foo : "bar"
},
dataType: "json",
success: function(returnedData) {
      //alert(returnedData.length);
	  
        
	   for( i = 0; i < returnedData.length; i++ ) {
	  //$("#txtPrint").append("Lat "+returnedData[i].latitude+" "+"Long "+returnedData[i].longitude+"</ br>");>">
	  
	   
	  Paddress[returnedData[i].deviceId]=returnedData[i].address;
	   Pspeed[returnedData[i].deviceId]=returnedData[i].speed;
	   Platitude[returnedData[i].deviceId]=returnedData[i].latitude;
	   Plongitude[returnedData[i].deviceId]=returnedData[i].longitude;
	   	   
   moveMarkerMap(returnedData[i].deviceId,returnedData[i].latitude,returnedData[i].longitude); 
	   }
	  createTable();
}
});

}



function GetColor(status) {
	var Color ="";
        
    if (status == "online") {
        Color="green";
    }
    else if (status == "offline") {
        Color="red";
    }
    else if (status == "unknown") {
       Color="yellow";
    }
    return Color;
    }


function moveMarkerMap(i,newCoords,newCoords1) {

var newLatLang = new google.maps.LatLng(newCoords,newCoords1);
//map.panTo(newLatLang);
marker[i].setPosition(newLatLang);

}
function formatDate(mydate) {
	//date ="2017-07-05T07:24:35.114+0000";
	if(mydate.length >14) {
//var mydate = new date(date);	
  var hours = mydate.substr(11,2);
  var minutes = mydate.substr(14,2);
   var seconds = mydate.substr(17,2);
  var ampm = hours >= 12 ? 'pm' : 'am';
  hours = hours % 12;
  hours = hours ? hours : 12; 
  // the hour '0' should be '12'
  minutes = minutes < 10 ? '0'+minutes : minutes;
  var strTime = hours + ':' + minutes + ':' + seconds + ' ' + ampm;
  return mydate.substr(8,2) + "/" + mydate.substr(5,2) + "/" + mydate.substr(0,4) + "  " + strTime;
	} else {
		
		return "";
	}
}
getgroups();
getDevices();

getEvents();
getCoords();
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

 <BODY onload="initialize();">
<!--<input type="button" id="addMarker" value="addMarker" onclick="addMarker();"/>-->
<div id="txtPrint" class="col-md-8"></div>
<div id="map" class="col-md-4">&nbsp;</div>
<div id='body'>
<?php
//print_r($data);
?>
		<textarea id='log' name='log' readonly='readonly'></textarea><br/>
		<input type='text' id='message' name='message' />
	</div>

