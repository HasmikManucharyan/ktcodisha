<link href="<?php echo URL; ?>public/css/style1.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo URL; ?>public/css/jquery-ui.css" />
  <link href="<?php echo URL; ?>public/css/jquery.dataTables.min.css" rel="stylesheet">
 
<link href="<?php echo URL; ?>public/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo URL; ?>public/css/theme.css">
<link href="<?php echo URL; ?>public/css/jquery.dataTables.min.css" rel="stylesheet">

<!-- JS -->
<script src="<?php echo URL; ?>public/js/jquery.min.js"></script>


<script src="<?php echo URL; ?>public/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>public/js/jquery-ui.js"></script>

 
<!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDvoRDqzE5AutQBzNBrYna6c0e3FyJPJ1g&country=in"></script>-->
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&key=AIzaSyDvoRDqzE5AutQBzNBrYna6c0e3FyJPJ1g&country=IN"></script>
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
background-color: whitesmoke !important;
}

table.tdesign tbody tr td{
height:10px;
padding:1px;
}

table.tdesign tr.odd { background-color:  whitesmoke; height:10px;}
table.tdesign tr.even { background-color: white;  height:10px;}	

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
<style>
  div.dataTables_wrapper {
   min-width: 400px;
   margin: 0 auto;
}
  table.tdesign tr.odd { background-color:  whitesmoke; }
table.tdesign tr.even { background-color: white;  }	
 table.tdesign th {
        background: #d9edf7;
        color: #000;
        padding: 2px;
		border: 1px solid #ccc;
    }
    table.tdesign td {
       height:auto;
       white-space: nowrap;
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
            display: block;
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
      display: block;
        }
  </style>
<div id="pnlLeft" class="touch">

<span style="font-size:18px;"><strong>Challan List</strong></span>

 
<br clear="all" />
<div class="or-box">
</div>

                       <div class="table">
                      
                     <table id="example" class="cell-border tdesign" width="100%" cellspacing="0">
                                       <thead><tr>
                                      <th>Sl. No</th>
                                      <th>Challan Date</th>
                                      <th>Challan No</th>
                                      <th>vehicle no</th>
                                      <th>Driver</th>
                                      <th>DL No</th>
                                      <th>DL Expiry</th>
                                      <th>Material</th>
                                      <th>GatePass No</th>
                                      <th>Entry Time</th>
                                                            <th>Tare Weight</th>
                                      <th>Tare Weight Time</th>
                                      <th>Loading TimeIN</th>
                                      <th>Loading TimeOUT</th>
                                      <th>Loading Location</th>
                                      <th>Gross Weight</th>
                                      <th>Gross Weight Time</th>
                                      <th>Net Weight</th>
                                      <th>Exit Time</th>
                                                    <th>Status</th>
                                      <th>Unloading Location</th>
                                      <th>Unloading Time</th>
                                      <th></th>
                                      <th></th>
                                      </tr></thead>
<?php 
$sl_no=0;
foreach($this->complete_challan AS $key=>$value){ 
    $sl_no++;
    ?>

      <tr>
     
                                        <td><?php 	echo $sl_no;?></td>
                           <td><?php	echo $value['challan_date'];?></td>
                                                 <td><a href="<?php echo URL; ?>challan/VL_ASH_PullVehicleDetails?id=<?php echo  $value['deviceid']; ?>&challan=<?php	echo $value['challanno']?>" target="_blank"><?php	echo $value['challanno']?></a></td>
                           <td><?php	echo $value['vehicle_no'];?></td>
                           <td><?php	echo $value['driver_name'];?></td>
                           <td><?php	echo $value['dlno'];?></td>
                           <td><?php	echo $value['expirydate'];?></td>
                           <td><?php	echo $value['material'];?></td>
                           <td><?php	echo $value['gatepass_no'];?></td>
                           <td><?php	echo $value['datetime_in'];?></td>
                           <td><?php	echo $value['tareweight'];?></td>
                           <td><?php	echo $value['tare_weight_time'];?></td>
                           <td><?php	echo $value['loading_timeIN'];?></td>
                           <td><?php	echo $value['loading_timeOUT'];?></td>
                           <td><?php	echo $value['loading_positionid'];?></td>
                           <td><?php	echo $value['grossweight'];?></td>
                           <td><?php	echo $value['gross_weight_time'];?></td>
                           <td><?php	echo $value['netweight'];?></td>
                           <td><?php	echo $value['datetime_out'];?></td>
                           <td><?php	echo $value['status'];?></td>
                           <td><?php	echo $value['unloadingpoint'];?></td>
                           <td><?php	echo $value['unloadingtime'];?></td>
                                      
                                      <td><a href="<?php echo URL; ?>challan/view_challan/?id=<?php echo $value['id']; ?>"><button class="btn btn-sm btn-info" type="button"><i class="fa fa-edit"></i> View</button></a></td>
                                      <td><a href="<?php echo URL; ?>challan/edit_challan/?id=<?php echo $value['id']; ?>"><button class="btn btn-sm btn-info" type="button"><i class="fa fa-edit"></i> Edit</button></a></td>
                                   
                                     <!-- <td><a href="<?php//echo URL; ?>vts/view_devices/?id=<?php//echo $value['id']; ?>" class="btn btn-primary btn-sm" role="button">View</a></td>
                                      <td><a href="<?php//echo URL; ?>vts/edit_devices/?id=<?php//echo $value['id']; ?>" class="btn btn-primary btn-sm" role="button">Edit</a></td>
                                      <td><a href="javascript:confirmDelete('delete_devices/?id=<?php//echo $value['id'];?>&name=<?php//echo $value['name']; ?>&uniqueId=<?php//echo $value['uniqueId']; ?>')" class="btn btn-primary btn-sm" role="button">Delete</a></td>-->
                               </tr>
                                   
           <?php } ?>
         
           
</table>	
<a href="#" onClick="getChallans()">Refresh</a>
</div>
</div>
<div id="pnlRight">
<div id="map"></div>
</div>

 <script>
function confirmDelete(delUrl) {
if (confirm("Are you sure you want to delete")) {
document.location = delUrl;
}
}
</script>        
<script>
var oTable,displayTable=[];
// $(document).ready(function() {
oTable =  $('#example').DataTable( {
"paging":   false,
responsive: false
} );
$(window).resize( function () {
table.api().columns.adjust();
} );
// } );
</script>
<script>
//function myMap() {

var myMarker=[],allMarker=[],allPoly=[],marker=[],marker1,positions=[];

var path = [];
//var path = [];
//var marker;
var mapCanvas = document.getElementById('map');
var mapOptions = {
center: new google.maps.LatLng(21.8233, 84.007275), zoom: 8 ,gestureHandling: 'greedy'
};
var map = new google.maps.Map(mapCanvas, mapOptions);

//var j=0;
//var count = positionslat.length;
//for(j =0; j < count; j++ ) {
// //alert (routeslat[j]+' '+routeslon[j]);
// var myMarker = new google.maps.LatLng(positionslat[j],positionslon[j]);
// //var myMarker =  google.maps.LatLng(21.8233, 84.007275);
// if(j==0){

//  var myIcon ='<?php echo URL; ?>public/images/maps/green/0.gif';

//     var image;
//     image = new google.maps.MarkerImage(myIcon,
//                        new google.maps.Size(32, 32),
//                        new google.maps.Point(0, 0),
//                        new google.maps.Point(16, 14),
//                        new google.maps.Size(32, 32)
//                        );

//                     var   marker = new google.maps.Marker({
//                         position:  myMarker,
//                         map: map,
//                         title: 'Hello World!'
//                       });
//  marker.setIcon(image);
// }
// map.panTo(myMarker);
// path.push(myMarker);
// var lineSymbol = {
//         path: google.maps.SymbolPath.FORWARD_CLOSED_ARROW
//       };
//   marker1 = new google.maps.Polyline({
//         path: path,
//         icons: [{
//           icon: lineSymbol,
//           offset: '100%'
//         }],
//         strokeColor: '#FF0000',
//         strokeOpacity: 1.0,
//         strokeWeight: 2,
// });
// allPoly.push(marker1);
//   marker1.setMap(map);

//     }
//   map.fitBounds(bounds); 
//}
// function clearMyMap(){
//   var noOfCoordinates = allMarker.length;
//   for(var i = 0; i < noOfCoordinates; i++){

//  allMarker[i].setMap(null);

// }
//   var noOfPoly = allPoly.length;

//  for(var i = 0; i < noOfPoly; i++){

//  allPoly[i].setMap(null);

//   }
// }



//// AJAX CODE
///http://www.liveratrack.com/login/challan/VL_ASH_PullVehicleDetails?id=252&challan=1

function UpdateChallan(id,challan){
$.ajax({
url: "<?php echo URL; ?>challan/VL_ASH_PullVehicleDetails",
type: "GET",
data: {
id : id,
challan : challan
},
dataType: "text/html",
success: function(returnedData) {
// alert("called");
}
});
return false;
}


function getChallans() {
var txt="";
$.ajax({
url: "<?php echo URL; ?>challan/indexjson",
type: "GET",
data: {
site : 1
},
dataType: "json",
success: function(returnedData) {
displayTable=[];
// alert(returnedData.length);
// alert(returnedData[0].id);
oTable.clear().draw();
for( i = 0; i < returnedData.length; i++ ) {
txt +="<tr><td>"+(i+1)+"</td>";
txt +="<td>"+returnedData[i].challan_date+"</td>";
txt +="<td><a href='<?php echo URL; ?>challan/VL_ASH_PullVehicleDetails?id="+returnedData[i].deviceid+"&challan="+returnedData[i].challanno+"' target='_blank'>"+returnedData[i].challanno+"</a></td>";
txt +="<td>"+returnedData[i].vehicle_no+"</td>";
txt +="<td>"+returnedData[i].driver_name+"</td>";
txt +="<td>"+returnedData[i].dlno+"</td>";
txt +="<td>"+returnedData[i].license_expiry+"</td>";
txt +="<td>"+returnedData[i].material+"</td>";
txt +="<td>"+returnedData[i].gatepass_no+"</td>";
txt +="<td>"+returnedData[i].datetime_in+"</td>";
txt +="<td><a href='<?php echo URL; ?>challan/VL_ASH_Vehicle_Weight_Update?VEHICLE_NO="+returnedData[i].vehicle_no+"&CHALLAN_NO="+returnedData[i].challanno+"&TYPE=TARE&WEIGHT=20' target='_blank'>"+returnedData[i].tareweight+"</td>";
txt +="<td>"+returnedData[i].tare_weight_time+"</td>";
txt +="<td>"+returnedData[i].loading_timeIN+"</td>";
txt +="<td>"+returnedData[i].loading_timeOUT+"</td>";
txt +="<td>"+returnedData[i].loading_positionid+"</td>";
txt +="<td><a href='<?php echo URL; ?>challan/VL_ASH_Vehicle_Weight_Update?VEHICLE_NO="+returnedData[i].vehicle_no+"&CHALLAN_NO="+returnedData[i].challanno+"&TYPE=GROSS&WEIGHT=30' target='_blank'>"+returnedData[i].grossweight+"</td>";
txt +="<td>"+returnedData[i].gross_weight_time+"</td>";
txt +="<td>"+returnedData[i].netweight+"</td>";
txt +="<td>"+returnedData[i].datetime_out+"</td>";
txt +="<td>"+returnedData[i].status+"</td>";
txt +="<td>"+returnedData[i].unloadingpoint+"</td>";
txt +="<td>"+returnedData[i].unloadingtime+"</td>";
txt +="<td>view</td>";
txt +="<td>edit</td></tr>";


//www.liveratrack.com/login/challan/VL_ASH_Vehicle_Weight_Update?VEHICLE_NO=OD23G1672&CHALLAN_NO=3&TYPE=TARE&WEIGHT=20  
//  alert(txt);
displayTable[i]= txt;
// oTable.row.add(txt);
txt="";
//#####

if(positions.indexOf(returnedData[i].id) === -1){
positions.push(returnedData[i].id);
addMarkerMap(returnedData[i].id,returnedData[i].vehicle_no,returnedData[i].latitude,returnedData[i].longitude); 

} else {

moveMarkerMap(returnedData[i].id,returnedData[i].latitude,returnedData[i].longitude,returnedData[i].course);  
if(returnedData[i].datetime_out!=null && returnedData[i].datetime_out!='0000-00-00 00:00:00'){
hideMarkerMap(returnedData[i].id);
}
}

if(returnedData[i].status!="EXIT DONE" && returnedData[i].status!="UNLOADING DONE"){
//UpdateChallan(returnedData[i].deviceid,returnedData[i].challanno);
}

//######
}
oTable.clear().draw();
for( i = 0; i < displayTable.length; i++ ) {
oTable.row.add($(displayTable[i]));
}
oTable.draw();
}
});

//alert("called");
return false;
}

window.setInterval(getChallans, 4000);
function hideMarkerMap(i){
marker[i].setVisible(false);
}
function moveMarkerMap(i,newCoords,newCoords1,newCourse) {
var myIcon, myRotation;
var newLatLang = new google.maps.LatLng(newCoords,newCoords1);

marker[i].setPosition(newLatLang);


var srtangle = parseInt(newCourse) * 1 + 11.25;
myRotation = parseInt(srtangle / 22.5);
//if(parseInt(Pspeed[i])>0){
if(parseInt(newCourse)>0){
    myLabelColor="labelsGreen";
    myIcon ='<?php echo URL; ?>public/images/maps/green/'+myRotation+'.gif';
}else {
        myIcon ='<?php echo URL; ?>public/images/maps/yellow/'+myRotation+'.gif';
         myLabelColor="labelsYellow";
        }
image = new google.maps.MarkerImage(myIcon,
                   new google.maps.Size(32, 32),
                   new google.maps.Point(0, 0),
                   new google.maps.Point(16, 14),
                   new google.maps.Size(32, 32)
                   );	 


   marker[i].setIcon(image);

// if(currentInfo==i){
// 	infowindow.setContent(myInfo[i]);
//     google.maps.event.trigger(map, 'resize');
//     map.setCenter(marker[i].getPosition());
// 	}			
//      marker[i].addListener('click', function() {
// 		 currentInfo=i;
// 		 infowindow.setContent(myInfo[i]);
//           infowindow.open(map, marker[i]);
//         //  map.setZoom(12);
//         google.maps.event.trigger(map, 'resize');
//           map.setCenter(marker[i].getPosition());
//         });
//         google.maps.event.addListener(infowindow,'closeclick',function(){
//            currentInfo=0;
//    // then, remove the infowindows name from the array
// });

}

function addMarkerMap(i,vehicle,latitude,longitude)
{
// alert("ok"+i);
var localDevices=[],myLabelColor,myIcon;
if(marker[i]==undefined ){
homeLatLng = new google.maps.LatLng(latitude,longitude);
//bounds.extend(homeLatLng);

    myIcon ='<?php echo URL; ?>public/images/maps/green/0.gif';	 
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
           labelContent: vehicle,
           labelAnchor: new google.maps.Point(-7, 32),
           labelClass: myLabelColor, 
           labelStyle: {opacity: 0.70}
   });
   marker[i].setIcon(image);
// alert("ok"+i);
marker[i].addListener('click', function() {
//	infowindow.setContent(myInfo[i]);
   map.setZoom(10);
map.setCenter(homeLatLng);
   //infowindow.open(map, marker[i]);
   
   //GetNearestSite();
   // nearestSite[i]= GetNearestSite(marker[i].position.lat(),marker[i].position.lng());
// alert(nearestSite[i]);
// map.setZoom(14);

});
//markerCluster.addMarker(marker[i]);

}
    //if(data.name != undefined)
   
   
}


             </script>