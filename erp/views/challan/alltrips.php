<link rel="stylesheet" href="<?php echo URL; ?>public/css/jquery-ui.css" />
<link href="<?php echo URL; ?>public/css/jquery.dataTables.min.css" rel="stylesheet">
<script type="text/javascript" src="<?php echo URL; ?>public/js/jquery-ui.js"></script>
<script src="<?php echo URL; ?>public/js/jquery.min.js"></script>
<script src="<?php echo URL; ?>public/js/jquery.dataTables.min.js"></script>
<script src="<?php echo URL; ?>public/js/dataTables.responsive.min.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>public/js/jquery.ui.touch-punch.min.js"></script>
<?php
//ENTRY_ON

//echo formatRentry("1d 2:17:06");
function GetTimeEvolved($datetime){
$now = date_create(date('Y-m-d H:m:s'));
 $pastDate =date_diff($now,date_create($datetime));
// $days= $pastDate->d;
 $hours= $pastDate->h;
 $minutes= $hours*60 + $pastDate->i;
// $seconds= $pastDate->s;


$to_time = strtotime(date('Y-m-d H:m:s'));
$from_time = strtotime($datetime);
//$minutes=round(abs($to_time - $from_time) / 60,2);

if($minutes<=60){
$color = "optionsqtyG";
}
if($minutes>60 and $minutes<=90){
    $color = "optionsqtyY";
    }
if($minutes>90){
    $color = "optionsqtyR";
    }    
return $color;
}

function GetTimeEvolved1($datetime){
    $now = date_create(date('Y-m-d H:m:s'));
     $pastDate =date_diff($now,date_create($datetime));
    // $days= $pastDate->d;
     $hours= $pastDate->h;
     $minutes= $hours*60 + $pastDate->i;
    // $seconds= $pastDate->s;
    
    
    $to_time = strtotime(date('Y-m-d H:m:s'));
    $from_time = strtotime($datetime);
    //$minutes=round(abs($to_time - $from_time) / 60,2);
    return $minutes;
    // if($minutes<=60){
    // $color = "optionsqtyG";
    // }
    // if($minutes>60 and $minutes<=90){
    //     $color = "optionsqtyY";
    //     }
    // if($minutes>90){
    //     $color = "optionsqtyR";
    //     }    
    // return $color;
    }

function CovertTimeHere($date){
    // $today= date("d/m/Y");
    // $now= date("d/m/Y",mktime(0,0,0,substr($date,5,2),substr($date,8,2),substr($date,0,4)));
    // if ($now!=$today){
    // return date("d M Y",mktime(0,0,0,substr($date,5,2),substr($date,8,2),substr($date,0,4)));
    // } else {
    return substr($date,11,5);
   // }
    }

?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
 div.dataTables_wrapper {
   min-width: 400px;
   margin: 0 auto;
}
   /* table.tdesign {border-collapse:collapse; table-layout:fixed;} */

  /* table.tdesign tr.odd { background-color:  whitesmoke; }
table.tdesign tr.even { background-color: white;  }	 */
 table.tdesign th {
        background: #d9edf7;
        color: #000;
        padding: 2px;
        border: 1px solid #ccc;
        font-size:13px;
    }
    table.tdesign td {
       /* height:auto; */
       /* width:100px; */
       /* word-wrap:break-word; */
       white-space: nowrap;
       border:solid 1px #fab;
       padding:0;
       font-size:13px;
    }  

    tr.group,
tr.group:hover {
    background-color: #ddd !important;
}
 
.header {
    background-color: #ffffff;
    color: #ffffff;
    padding: 10px;
}
@import url('https://fonts.googleapis.com/css?family=Pacifico|Open+Sans:300,400,600');

* {
    box-sizing: border-box;
    font-family: 'Open Sans',sans-serif;
    font-weight: 300;
}

a {
    text-decoration: none;
    color: inherit;
}

p {
    font-size:1.1em;
    margin: 1em 0;
}

.description {
  margin: 1em auto 2.25em;
}


h1 {
    font-family: 'Pacifico', cursive;
    font-weight: 400;
    font-size: 2.5em;
}
@import url('https://fonts.googleapis.com/css?family=Pacifico|Open+Sans:300,400,600');
* {
  box-sizing: border-box;
  font-family: 'Open Sans', sans-serif;
  font-weight: 300;
}
a {
  text-decoration: none;
  color: inherit;
}
p {
  font-size: 1.1em;
  margin: 1em 0;
}
.description {
  margin: 1em auto 2.25em;
}

h1 {
  font-family: 'Pacifico', cursive;
  font-weight: 400;
  font-size: 2.5em;
}
ul {
  list-style: none;
  padding: 0;
}
ul .inner {
  padding-left: 1em;
  overflow: hidden;
  display: none;
}

ul .innerbox {
  padding-left: 1em;
  overflow: hidden;
  display: block;
  border: 1px solid #000;
}
ul .inner.show {
  /*display: block;*/
}
ul li {
  margin: .5em 0;
}
ul li a.toggle {
  width: 100%;
  display: block;
  background: rgba(0, 0, 0, 0.78);
  color: #fefefe;
  padding: .75em;
  border-radius: 0.15em;
  transition: background .3s ease;
}
ul li a.toggle:hover {
  background: rgba(0, 0, 0, 0.9);
}

.footer {
    background-color: #0099cc;
    color: #ffffff;
    text-align: center;
    font-size: 12px;
    padding: 15px;
}

.options {
    width: 40px;
    font-weight: bold;
    color: #fff;
    position: absolute;
    right: 8px;
   
}

.optionsqty {
    width: 115px;
    padding-left:8px;
    position: absolute;
    right: 1px;
    color: #000;
    font-weight: bold;
    background-color:#fff;
}
.optionsqtyG {
    width: 50px;
    padding-left:5px;
    position: absolute;
    margin-top:-8px;
    right: 8px;
    color: #000;
    font-weight: bold;
    background-color:#23aa0a;
}
.optionsqtyR {
    width: 50px;
    padding-left:5px;
    position: absolute;
    margin-top:-8px;
    right: 8px;
    color: #000;
    font-weight: bold;
    background-color:#ff0847;
}
.optionsqtyY {
    width: 50px;
    padding-left:5px;
    position: absolute;
    margin-top:-8px;
    right: 8px;
    color: #000;
    font-weight: bold;
    background-color:#ffcb08;
}

.optionsVendor{
    width:15px;
    padding-left:5px;
    padding:2px;
    position: absolute;
    margin-top:-8px;
    left: 8px;
    color: #000;
    font-size: 10px;
    font-weight: bold;
    background-color:#ccc;
}
strong {
    font-weight: bold;
}
input[type=text], input[type=url], input[type=email], input[type=password], input[type=tel] {
  -webkit-appearance: none; -moz-appearance: none;
  display: block;
  margin: 0;
  width: 100%; height: 40px;
  line-height: 40px; font-size: 17px;
  border: 1px solid #bbb;
}

/* Clearable text inputs */
/* .clearable{
  position: relative;
  display: inline-block;
}
.clearable input[type=text]{
  padding-right: 24px;
  width: 100%;
  box-sizing: border-box;
}
.clearable__clear{
  display: none;
  position: absolute;
  right:0; top:0;
  padding: 0 8px;
  font-style: normal;
  font-size: 1.2em;
  user-select: none;
  cursor: pointer;
}
.clearable input::-ms-clear {  
  display: none;
} */
</style>

<div class="header">
  <div style="float:right;width:100%;"><img src="<?php echo URL; ?>public/logo_ktc.png" width="100%"></div>
</div>
<br style="clear:both;" />
<span class="clearable">
  <input type="text" name="" value="" placeholder="Search Vehicle/Challan">
  <!-- <i class="clearable__clear">&times;</i> -->
</span>
<a href="#" onclick="UpdateInfo();" >Refresh</a>
    <ul class="accordion">
    <script>
     var SUBROUTES=[],SUBROUTESTYPE=[];
     </script>
 <?php 
foreach($this->SUBROUTESTYPE AS $key=>$val){
    //  $SUBROUTESNAME[$key]=$val;  
 
      ?>
      <script>
      SUBROUTESTYPE[<?php echo $key; ?>]="<?php echo $val; ?>";
      </script>

<?php
}
 //print_r($this->SUBROUTESTYPE);
foreach($this->SUBROUTESNAME AS $key=>$val){
   //  $SUBROUTESNAME[$key]=$val;  
if($this->SUBROUTESTYPE[$key]=='load'){
     ?>
     <script>
     SUBROUTES.push(<?php echo $key; ?>);
     </script>
<li>
<a class="toggle hide" href="javascript:void(0);"><?php echo $val; ?> <span class='options' id="trip<?php echo $key; ?>"></span></a>
    <ul class="inner" style="display: none;" id="trip_list<?php echo $key; ?>">
    </ul>    
 </li> 
 <?php } } ?>
 <li>
<a class="toggle hide" href="javascript:void(0);">All Vehicles <span class='options' id="mobileappjsonmtrips"><?php echo sizeof($this->mtrips); ?></span></a>
<ul class="inner" style="display: none;">
    <li>
<table id="example" class="table tablesorter tdesign dataTable no-footer row-border hover compact" style="border: solid #000 1px; border-collapse: collapse; margin-left:-10px;" role="grid" cellspacing="0" cellpadding="1" bordercolor="lightgrey" border="1" width="95%">
<thead>
    <tr>
        <th>VehicleNo</th>
        <th>1st </th>
        <th>2nd </th> 
        <th>3rd </th>
        <th>Month</th>
        <th>Status</th> 
        
    </tr>
</thead>
<tbody>
    </tbody>
    </table>
    </li>
    </ul>    
 </li>
 <?php
 //print_r($this->SUBROUTESTYPE);
 foreach($this->SUBROUTESNAME AS $key=>$val){
   //  $SUBROUTESNAME[$key]=$val;  
if($this->SUBROUTESTYPE[$key]=='load'){
     ?>
     <script>
     SUBROUTES.push(<?php echo $key; ?>);
     </script>
<li>
<a class="toggle hide" href="javascript:void(0);">YESTERDAY <?php echo $val; ?> <span class='options' id="tripy<?php echo $key; ?>"></span></a>
    <ul class="inner" style="display: none;" id="trip_listy<?php echo $key; ?>">
    </ul>    
 </li> 
 <?php } } ?>  
</ul>


<script>

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


function GetTimeEvolved( datetime,now )
{
  if(datetime=='0000-00-00 00:00:00' || datetime=='null' || datetime=='NULL')
    {
        return "";
    }
    var datetime = typeof datetime !== 'undefined' ? datetime : "2014-01-01 01:02:03.123456";
    var now = typeof now !== 'undefined' ? now : "2014-01-01 01:02:03.123456";

    
    var datetime = new Date( datetime ).getTime();
    var now = new Date(now).getTime();
    var color;

    
    if(isNaN(now)|| now=='0000-00-00 00:00:00' || now=='null' || now=='NULL'){
  now = new Date().getTime();
    }

    //console.log( datetime + " " + now);

    if (datetime < now) {
        var milisec_diff = now - datetime;
    }else{
        var milisec_diff = datetime - now;
    }

  //   var days = Math.floor(milisec_diff / 1000 / 60 / (60 * 24));
   // var hours =  Math.floor(milisec_diff / 1000 / 60 / (60));
   var minutes =  Math.floor(milisec_diff / 1000 / 60);
   if(minutes<=60){
    color = "optionsqtyG";
    }
    if(minutes>60 && minutes<=90){
        color = "optionsqtyY";
        }
    if(minutes>90){
        color = "optionsqtyR";
        }    
    return color;
    
   //return days + " Days "+ date_diff.getHours() + " Hours " + date_diff.getMinutes() + " Minutes " + date_diff.getSeconds() + " Seconds "+rt;
}

function get_time_diff( datetime,now )
{
  if(datetime=='0000-00-00 00:00:00' || datetime=='null' || datetime=='NULL')
    {
        return "";
    }
    var datetime = typeof datetime !== 'undefined' ? datetime : "2014-01-01 01:02:03.123456";
    var now = typeof now !== 'undefined' ? now : "2014-01-01 01:02:03.123456";

    
    var datetime = new Date( datetime ).getTime();
    var now = new Date(now).getTime();


    
    if(isNaN(now)|| now=='0000-00-00 00:00:00' || now=='null' || now=='NULL'){
  now = new Date().getTime();
    }

    console.log( datetime + " " + now);

    if (datetime < now) {
        var milisec_diff = now - datetime;
    }else{
        var milisec_diff = datetime - now;
    }

    var days = Math.floor(milisec_diff / 1000 / 60 / (60 * 24));
   // var hours =  Math.floor(milisec_diff / 1000 / 60 / (60));
  //  var minutes =  Math.floor(milisec_diff / 1000 / 60);
    var rt = Math.floor(milisec_diff / 1000);
    var date_diff = new Date( milisec_diff );
    date_diff.setHours(date_diff.getHours() - 5);
    date_diff.setMinutes(date_diff.getMinutes() - 30);
    var minutes = (date_diff.getMinutes()<10?'0':'') + date_diff.getMinutes();
    var seconds = (date_diff.getSeconds()<10?'0':'') + date_diff.getSeconds();
    var hours = (date_diff.getHours()<10?'0':'') + date_diff.getHours();
   // var hours = date_diff.getHours();
   //return rt;
   if(days>17000){
    return "";
   }
   if(days>0){
   return  days + " Days "+hours + ":" + minutes + ":" + seconds;
   }else{
    return  hours + ":" + minutes + ":" + seconds;
   }

   //return days + " Days "+ date_diff.getHours() + " Hours " + date_diff.getMinutes() + " Minutes " + date_diff.getSeconds() + " Seconds "+rt;
}

function GetTimeTripColor (datetime,now )
{
  if(datetime=='0000-00-00 00:00:00' || datetime=='null' || datetime=='NULL')
    {
        return "";
    }
    var datetime = typeof datetime !== 'undefined' ? datetime : "2014-01-01 01:02:03.123456";
    var now = typeof now !== 'undefined' ? now : "2014-01-01 01:02:03.123456";

    
    var datetime = new Date( datetime ).getTime();
    var now = new Date(now).getTime();
    var color;

    
    if(isNaN(now)|| now=='0000-00-00 00:00:00' || now=='null' || now=='NULL'){
  now = new Date().getTime();
    }

    //console.log( datetime + " " + now);

    if (datetime < now) {
        var milisec_diff = now - datetime;
    }else{
        var milisec_diff = datetime - now;
    }

  //   var days = Math.floor(milisec_diff / 1000 / 60 / (60 * 24));
   // var hours =  Math.floor(milisec_diff / 1000 / 60 / (60));
   var minutes =  Math.floor(milisec_diff / 1000 / 60);
   if(minutes<=60){
    color = "optionsqtyG";
    }
    if(minutes>60 && minutes<=90){
        color = "optionsqtyY";
        }
    if(minutes>90){
        color = "optionsqtyR";
        }    
    return color;
    
   //return days + " Days "+ date_diff.getHours() + " Hours " + date_diff.getMinutes() + " Minutes " + date_diff.getSeconds() + " Seconds "+rt;
}


function CovertTimeHere(date){
    // $today= date("d/m/Y");
    // $now= date("d/m/Y",mktime(0,0,0,substr($date,5,2),substr($date,8,2),substr($date,0,4)));
    // if ($now!=$today){
    // return date("d M Y",mktime(0,0,0,substr($date,5,2),substr($date,8,2),substr($date,0,4)));
    // } else {
    return date.substr(11,5);
   // }
    }
var allVehicleStatus = [];
var ctrips = [];
var TQty = [];
UpdateInfo();
var myInterval;
var interval_delay = 500;
var is_interval_running = false;
$(window).focus(function () {
        clearInterval(myInterval); // Clearing interval if for some reason it has not been cleared yet
        if  (!is_interval_running) //Optional
            myInterval = setInterval(function() { is_interval_running = true; UpdateInfo();  }, 10000);
    }).blur(function () {
        clearInterval(myInterval); // Clearing interval on window blur
        is_interval_running = false; //Optional
    });
//myInterval = setInterval(function() { is_interval_running = true; UpdateInfo(); }, 10000);

function UpdateInfo(){
// <li><strong>Vehicle No.  &nbsp;- Driver Name</strong><span class='optionsqty'>ENTRY TIME</span></li>
$.ajax({
        url: "<?php echo URL; ?>challan/alltripsajax?date=today",
        type: "GET",
        data: { 
            date : "today",
        foo: "bar"
        },
        dataType: "json",
        success: function(returnedData) {

for (j=0;j<SUBROUTES.length;j++){
        var subr = returnedData[SUBROUTES[j]].length;
       // console.log(subr);
        $("#trip_list"+SUBROUTES[j]).empty();
        $("#trip"+SUBROUTES[j]).html(returnedData[SUBROUTES[j]].length);
            for( i = 0; i < returnedData[SUBROUTES[j]].length; i++ ) {
                var Vehicle = returnedData[SUBROUTES[j]][i].vehicle_no;
                var str = Vehicle;
                str = str.replace(/\s/g,'');
                Vehicle = substr_replace(str," ",5,0);
                var Driver = returnedData[SUBROUTES[j]][i].driver_name.toUpperCase();
                var dlno = "";
                var Challanno =  returnedData[SUBROUTES[j]][i].challanno;
                var GatepassNo =  returnedData[SUBROUTES[j]][i].gatepass_no;
                var Net =  returnedData[SUBROUTES[j]][i].netweight;
                var Status = SUBROUTESTYPE[SUBROUTES[j]];
                var Time = "";
                if(Status=="load"){

                    Time = returnedData[SUBROUTES[j]][i].datetime_in;
                }else{
                    Time = returnedData[SUBROUTES[j]][i].datetime_out;
                }
                $("#trip_list"+SUBROUTES[j]).append( "<li><ul class='innerbox'><li><strong>"+Vehicle+"</strong> - "+Driver+"<span class='"+GetTimeEvolved(Time,"null")+"'>"+CovertTimeHere(Time)+"</span><br />CHNo: "+Challanno+" Gatepass: "+GatepassNo+"&nbsp; Net: "+Net+"</li></ul></li>");
     
                  //  console.log(returnedData[SUBROUTES[j]][i].vehicle_no);
            }
          
        }
    }
});






 
function ValidateTrips(tripData){
if(tripData=="00:00:00"){
    return "";
}else {
    return tripData;
}
}

function ValidateTripsColor(tripData){
    if(tripData!="00:00:00"){
     // your input string
var a = tripData.split(':'); // split it at the colons

// minutes are worth 60 seconds. Hours are worth 60 minutes.
var seconds = (+a[0]) * 60 * 60 + (+a[1]) * 60 + (+a[2]);
        if (seconds>(3600*3)){
            return "palered";
        }else{
            return "palegreen";
        }
    } else {

        return "";
    }
}

var getChallan =[[]],getVehicleNo =[],txt="";

return false;
}

    $('.toggle').click(function(e) {
  	e.preventDefault();
  
    var $this = $(this);
  
    if ($this.next().hasClass('show')) {
        $this.next().removeClass('show');
        $this.next().slideUp(350);
    } else {
        $this.parent().parent().find('li .inner').removeClass('show');
        $this.parent().parent().find('li .inner').slideUp(350);
        $this.next().toggleClass('show');
        $this.next().slideToggle(350);
    }
});

$(function(){
    $.ajax({
        url: "<?php echo URL; ?>challan/alltripsajax?date=yesterday",
        type: "GET",
        data: { 
            date : "yesterday",
        foo: "bar"
        },
        dataType: "json",
        success: function(returnedData) {

for (j=0;j<SUBROUTES.length;j++){
        var subr = returnedData[SUBROUTES[j]].length;
       // console.log(subr);
        $("#trip_listy"+SUBROUTES[j]).empty();
        $("#tripy"+SUBROUTES[j]).html(returnedData[SUBROUTES[j]].length);
            for( i = 0; i < returnedData[SUBROUTES[j]].length; i++ ) {
                var Vehicle = returnedData[SUBROUTES[j]][i].vehicle_no;
                var str = Vehicle;
                str = str.replace(/\s/g,'');
                Vehicle = substr_replace(str," ",5,0);
                var Driver = returnedData[SUBROUTES[j]][i].driver_name.toUpperCase();
                var dlno = "";
                var Challanno =  returnedData[SUBROUTES[j]][i].challanno;
                var GatepassNo =  returnedData[SUBROUTES[j]][i].gatepass_no;
                var Net =  returnedData[SUBROUTES[j]][i].netweight;
                var Status = SUBROUTESTYPE[SUBROUTES[j]];
                var Time = "";
                if(Status=="load"){

                    Time = returnedData[SUBROUTES[j]][i].datetime_in;
                }else{
                    Time = returnedData[SUBROUTES[j]][i].datetime_out;
                }
                $("#trip_listy"+SUBROUTES[j]).append( "<li><ul class='innerbox'><li><strong>"+Vehicle+"</strong> - "+Driver+"<span class='"+GetTimeEvolved(Time,"null")+"'>"+CovertTimeHere(Time)+"</span><br />CHNo: "+Challanno+" Gatepass: "+GatepassNo+"&nbsp; Net: "+Net+"</li></ul></li>");
     
                  //  console.log(returnedData[SUBROUTES[j]][i].vehicle_no);
            }
        }
    }
});

    $('input[type="text"]').keyup(function(){
        
        var searchText = $(this).val();
        
        $('ul > li').each(function(){
            
            var currentLiText = $(this).text(),
                showCurrentLi = currentLiText.indexOf(searchText) !== -1;
            
            $(this).toggle(showCurrentLi);
            
        });     
    });

});
jQuery.extend( jQuery.fn.dataTableExt.oSort, {
    "date-uk-pre": function ( a ) {
        if (a == null || a == "") {
            return 0;
        }
        //var firstdate = a.split('d ');

        var ukDatea =a.split(':');
        return (ukDatea[2] + ukDatea[1] + ukDatea[0]) * 1;
    },
    "date-uk-asc": function ( a, b ) {
        return ((a < b) ? -1 : ((a > b) ? 1 : 0));
    },
    "date-uk-desc": function ( a, b ) {
        return ((a < b) ? 1 : ((a > b) ? -1 : 0));
    },
    "veh-pre": function ( a ) {
        if (a == null || a == "") {
            return 0;
        }
        var ukDatea = a.split(' ');
        return (ukDatea[1]) * 1;
    },
    "veh-asc": function ( a, b ) {
        return ((a < b) ? -1 : ((a > b) ? 1 : 0));
    },
 
    "veh-desc": function ( a, b ) {
        return ((a < b) ? 1 : ((a > b) ? -1 : 0));
    }
} );

var oTable,displayTable=[];
    $(document).ready(function() {
      oTable =  $('#example').DataTable( {
         paging:false,
         "responsive": true,
columnDefs: [
            { type: 'veh', targets: 0 }
        ]
      } );
     
    } );


</script>
