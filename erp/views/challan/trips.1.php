<link rel="stylesheet" href="<?php echo URL; ?>public/css/jquery-ui.css" />
<link href="<?php echo URL; ?>public/css/jquery.dataTables.min.css" rel="stylesheet">
<script type="text/javascript" src="<?php echo URL; ?>public/js/jquery-ui.js"></script>
<script src="<?php echo URL; ?>public/js/jquery.min.js"></script>
<script src="<?php echo URL; ?>public/js/jquery.dataTables.min.js"></script>
<script src="<?php echo URL; ?>public/js/dataTables.responsive.min.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>public/js/jquery.ui.touch-punch.min.js"></script>
<?php
//ENTRY_ON

function getVendor($vendor){
    if($vendor=="206980") return "S T C";
    if($vendor=="206243") return "K T C";
    if($vendor=="202521") return "P R I M";
    if($vendor=="206871") return "S M R";
    if($vendor=="206977") return "D A S P";
}

function formatRentry($time){
    $r=split('[d :]', $time);
    if($r[2]<10){$r[2]= "0".$r[2]; }
    return $r[2].":".$r[3].":".$r[4];
}
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
    }
    table.tdesign td {
       /* height:auto; */
       /* width:100px; */
       /* word-wrap:break-word; */
       white-space: nowrap;
       border:solid 1px #fab;
       padding:0;
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
  <div style="float:right;height:85px;"><img src="<?php echo URL; ?>public/images/mobileapp/vallogo.jpg"></div>
</div>
<br style="clear:both;" />
<span class="clearable">
  <input type="text" name="" value="" placeholder="Search Vehicle/Challan">
  <!-- <i class="clearable__clear">&times;</i> -->
</span>
<a href="#" onclick="UpdateInfo();" >Refresh</a>
    <ul class="accordion">
<li>
<a class="toggle hide" href="javascript:void(0);">Banjari Parking Area <span class='options' id="mobileappjsonbanjari"></span></a>
    <ul class="inner" style="display: none;" id="mobileappjsonbanjari_list">
    </ul>    
 </li> 
<li>
<a class="toggle hide" href="javascript:void(0);">Sepco Parking Area <span class='options' id="mobileappjsonsepcoparking"></span></a>
<ul class="inner" style="display: none;" id="mobileappjsonsepcoparking_list">
    </ul>    
</li>
<li>
<a class="toggle hide" href="javascript:void(0);">IPP Loading Area<span class='options' id="mobileappjsonippparking"></span></a>
<ul class="inner" style="display: none;" id="mobileappjsonippparking_list">
    </ul>   
</li>
<li><a class="toggle hide" href="javascript:void(0);">Weigh Bridge Area<span class='options' id="mobileappjsonweighbridge"></span></a>
<ul class="inner" style="display: none;" id="mobileappjsonweighbridge_list">
    </ul> 
</li>
<li>
<a class="toggle hide" href="javascript:void(0);">Waiting For Exit<span class='options' id="mobileappjsonexiting"></span></a> 
<ul class="inner" style="display: none;" id="mobileappjsonexiting_list">
    </ul> 
</li>
<li>
<a class="toggle hide" href="javascript:void(0);">Today Entered<span class='options' id="mobileappjsonenter"></span></a>
</li>
<li>
<a class="toggle hide" href="javascript:void(0);">Today Exited &nbsp;&nbsp;&nbsp;<span id="mobileappjsonnet"></span>MT<span class='options' id="mobileappjsonexit"><?php echo $this->exit[0]['Total']; ?></span></a>
<ul class="inner" style="display: none;" id="mobileappjsonexit_list">
    </ul>    
 </li>
 


<li>
<a class="toggle hide" href="javascript:void(0);">Today UnLoaded<span class='options' id="mobileappjsonunloaded"><?php echo sizeof($this->unloaded ); ?></span></a>
<ul class="inner" style="display: none;" id="mobileappjsonunloaded_list">
    <li><?php echo "<strong>Vehicle No.  [Trips]&nbsp;- Driver Name</strong>"; ?><span class='optionsqty'> UNLOAD TIME</span></li>
    <?php foreach($this->trips AS $key=>$value){
        $trips[$value['deviceid']]=$value['Trips'];
    }
        ?>
    <?php foreach($this->unloaded AS $key=>$value){ ?>
        <li>
        <ul class="innerbox"><li><span class="optionsVendor"><?php echo getVendor($value['vendorCode']); ?></span>    
        <?php echo "<strong>".substr_replace(str_replace(" ","",$value['vehicle_no'])," ",5,0)."</strong> [".$trips[$value['deviceid']]."]- ".ucwords(strtolower($value['driver_name'])); ?><span class='<?php echo GetTimeEvolved($value['unloadingtime']); ?>'><?php echo CovertTimeHere($value['unloadingtime']); ?></span><br/>
        <?php echo "CHNo: ".$value['challanno']." IAS: ".$value['gatepass_no'];  ?>&nbsp;
        <?php echo "<font style='color:green;font-weight:bold;font-size:9px;'>".number_format((float)($value['netweight']/1000),2)."MT</font>"; ?>
    </li></ul></li>
    <?php } ?>
    </ul>    
 </li>
 

 <li>
<a class="toggle hide" href="javascript:void(0);">Yesterday Entered <span class='options' id="mobileappjsonentery"><?php echo $this->entery[0]['Total']; ?></span></a>
</li>
<li>
<a class="toggle hide" href="javascript:void(0);">Yesterday Exited &nbsp;&nbsp;&nbsp;<span id="mobileappjsonnety"></span>MT<span class='options' id="mobileappjsonexity"><?php echo $this->exity[0]['Total']; ?></span></a>
<ul class="inner" style="display: none;" id="mobileappjsonexit_listy">
    <li><?php echo "<strong>Vehicle No.  [Trips]&nbsp;- Driver Name</strong>"; ?><span class='optionsqty'> EXIT TIME</span></li>
    <?php foreach($this->tripsy AS $key=>$value){
        $tripsy[$value['deviceid']]=$value['Trips'];
    }
        ?>
    <?php foreach($this->exit_listy AS $key=>$value){ ?>
        <li>
        <ul class="innerbox"><li><span class="optionsVendor"><?php echo getVendor($value['vendorCode']); ?></span>    
        <?php echo "<strong>".substr_replace(str_replace(" ","",$value['vehicle_no'])," ",5,0)."</strong> [".$tripsy[$value['deviceid']]."]- ".ucwords(strtolower($value['driver_name'])); ?><span class='<?php echo GetTimeEvolved($value['datetime_out']); ?>'><?php echo CovertTimeHere($value['datetime_out']); ?></span><br/>
        <?php echo "CHNo: ".$value['challanno']." IAS: ".$value['gatepass_no'];  ?>&nbsp;
        <?php echo "<font style='color:green;font-weight:bold;font-size:9px;'>".number_format((float)($value['netweight']/1000),2)."MT</font>"; ?>
    </li></ul></li>
    <?php } ?>
    </ul>    
 </li>
 <li>
<a class="toggle hide" href="javascript:void(0);">All Vehicles <span class='options' id="mobileappjsonmtrips"><?php echo sizeof($this->mtrips); ?></span></a>
<ul class="inner" style="display: none;">
    <li>
<table id="example" class="table tablesorter tdesign dataTable no-footer row-border hover compact" style="border: solid #000 1px; width: 50%; border-collapse: collapse;" role="grid" cellspacing="0" cellpadding="1" bordercolor="lightgrey" border="1" width="50%">
<thead>
    <tr>
        <th>Vehicle No</th>
        <th>Unload Time</th>
        <th>Driver Name</th> 
        <th>ChallanNo</th>
        <th>In Time</th> 
        <th>Out Time</th>
        
    </tr>
</thead>
<tbody>
    </tbody>
    </table>
    </li>
    </ul>    
 </li>
   
</ul>


<script>
function getVendor(vendor){
    if(vendor=="206980") return "S T C";
    if(vendor=="206243") return "K T C";
    if(vendor=="202521") return "P R I M";
    if(vendor=="206871") return "S M R";
    if(vendor=="206977") return "D A S P";
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
myInterval = setInterval(function() { is_interval_running = true; UpdateInfo(); }, 10000);

function UpdateInfo(){
  $.ajax({
        url: "<?php echo URL; ?>challan/mobileappjsonbanjari",
        type: "GET",
        data: {  
        vendorCode: <?php echo $this->vendorCode; ?>
        },
        dataType: "json",
        success: function(returnedData) {
           //  console.log(returnedData[0].Total);
            $("#mobileappjsonbanjari").text(returnedData[0].Total);
        //alert(returnedData);,
      //  async: false
        }
});

// <li><strong>Vehicle No.  &nbsp;- Driver Name</strong><span class='optionsqty'>ENTRY TIME</span></li>
$.ajax({
        url: "<?php echo URL; ?>challan/mobileappjsonbanjari_list",
        type: "GET",
        data: {  
        vendorCode: <?php echo $this->vendorCode; ?>
        },
        dataType: "json",
        success: function(returnedData) {
            $("#mobileappjsonbanjari_list").empty();
           ////  console.log(returnedData[0].Total);
           
            $("#mobileappjsonbanjari_list").append("<li><strong>Vehicle No.  &nbsp;- Driver Name</strong><span class='optionsqty'>ENTRY TIME</span></li>");
            for( i = 0; i < returnedData.length; i++ ) {
                allVehicleStatus[returnedData[i].deviceid]="Banjari Parking Area";
                var str = returnedData[i].vehicle_no;
                 str = str.replace(/\s/g,'');
                 var Vehicle = substr_replace(str," ",5,0);
                 var Driver = returnedData[i].driver_name;
                 Driver = Driver.toLowerCase().replace(/\b[a-z]/g, function(letter) {
    return letter.toUpperCase();
});
var TareMsg="";
if(returnedData[i].sysmsg=="TARE WEIGHT REQUIRED FOR THIS TRIP"){
    TareMsg="<font style='color:red;font-weight:bold;font-size:9px;'>TARE</font>";
}
                $("#mobileappjsonbanjari_list").append( "<li><ul class='innerbox'><li><span class='optionsVendor'>"+getVendor(returnedData[i].vendorCode)+"</span><strong>"+Vehicle+"</strong> - "+Driver+"<span class='"+GetTimeEvolved(returnedData[i].challan_entry_time,"null")+"'>"+CovertTimeHere(returnedData[i].challan_entry_time)+"</span><br />CHNo: "+returnedData[i].challanno+" DL: "+returnedData[i].dlno+"&nbsp;"+TareMsg+"</li></ul></li>");
      
            }
       
        //alert(returnedData);,
      //  async: false
        }
});

 $.ajax({
        url: "<?php echo URL; ?>challan/mobileappjsonsepcoparking",
        type: "GET",
        data: {  
        vendorCode: <?php echo $this->vendorCode; ?>
        },
        dataType: "json",
        success: function(returnedData) {
           //  console.log(returnedData[0].Total);
            $("#mobileappjsonsepcoparking").text(returnedData[0].Total);
        //alert(returnedData);,
      //  async: false
        }
});

$.ajax({
        url: "<?php echo URL; ?>challan/mobileappjsonsepcoparking_list",
        type: "GET",
        data: {  
        vendorCode: <?php echo $this->vendorCode; ?>
        },
        dataType: "json",
        success: function(returnedData) {
            $("#mobileappjsonsepcoparking_list").empty();
           ////  console.log(returnedData[0].Total);
           
            $("#mobileappjsonsepcoparking_list").append("<li><strong>Vehicle No.  &nbsp;- Driver Name</strong><span class='optionsqty'>ENTRY TIME</span></li>");
            for( i = 0; i < returnedData.length; i++ ) {
                allVehicleStatus[returnedData[i].deviceid]="Sepco Parking Area";
                var str = returnedData[i].vehicle_no;
                 str = str.replace(/\s/g,'');
                 var Vehicle = substr_replace(str," ",5,0);
                 var Driver = returnedData[i].driver_name;
                 Driver = Driver.toLowerCase().replace(/\b[a-z]/g, function(letter) {
    return letter.toUpperCase();
});
var TareMsg="";
if(returnedData[i].sysmsg=="TARE WEIGHT REQUIRED FOR THIS TRIP"){
    TareMsg="<font style='color:red;font-weight:bold;font-size:9px;'>TARE</font>";
}
                $("#mobileappjsonsepcoparking_list").append( "<li><ul class='innerbox'><li><span class='optionsVendor'>"+getVendor(returnedData[i].vendorCode)+"</span><strong>"+Vehicle+"</strong> - "+Driver+"<span class='"+GetTimeEvolved(returnedData[i].datetime_in,"null")+"'>"+CovertTimeHere(returnedData[i].datetime_in)+"</span><br />CHNo: "+returnedData[i].challanno+" IAS: "+returnedData[i].gatepass_no+"&nbsp;"+TareMsg+"</li></ul></li>");
      
            }
       
        }
});

 $.ajax({
        url: "<?php echo URL; ?>challan/mobileappjsonippparking",
        type: "GET",
        data: {  
        vendorCode: <?php echo $this->vendorCode; ?>
        },
        dataType: "json",
        success: function(returnedData) {
           //  console.log(returnedData[0].Total);
            $("#mobileappjsonippparking").text(returnedData[0].Total);
        //alert(returnedData);,
      //  async: false
        }
});

$.ajax({
        url: "<?php echo URL; ?>challan/mobileappjsonippparking_list",
        type: "GET",
        data: {  
        vendorCode: <?php echo $this->vendorCode; ?>
        },
        dataType: "json",
        success: function(returnedData) {
            $("#mobileappjsonippparking_list").empty();
           ////  console.log(returnedData[0].Total);
           
            $("#mobileappjsonippparking_list").append("<li><strong>Vehicle No.  &nbsp;- Driver Name</strong><span class='optionsqty'>ENTRY TIME</span></li>");
            for( i = 0; i < returnedData.length; i++ ) {
                allVehicleStatus[returnedData[i].deviceid]="IPP Loading Area";
                var str = returnedData[i].vehicle_no;
                 str = str.replace(/\s/g,'');
                 var Vehicle = substr_replace(str," ",5,0);
                 var Driver = returnedData[i].driver_name;
                 Driver = Driver.toLowerCase().replace(/\b[a-z]/g, function(letter) {
    return letter.toUpperCase();
});

                $("#mobileappjsonippparking_list").append( "<li><ul class='innerbox'><li><span class='optionsVendor'>"+getVendor(returnedData[i].vendorCode)+"</span><strong>"+Vehicle+"</strong> - "+Driver+"<span class='"+GetTimeEvolved(returnedData[i].loading_timeIN,"null")+"'>"+CovertTimeHere(returnedData[i].loading_timeIN)+"</span><br />CHNo: "+returnedData[i].challanno+" IAS: "+returnedData[i].gatepass_no+"</li></ul></li>");
      
            }
       
        }
});

 $.ajax({
        url: "<?php echo URL; ?>challan/mobileappjsonweighbridge",
        type: "GET",
        data: {  
        vendorCode: <?php echo $this->vendorCode; ?>
        },
        dataType: "json",
        success: function(returnedData) {
           //  console.log(returnedData[0].Total);
            $("#mobileappjsonweighbridge").text(returnedData[0].Total);
        }
});

$.ajax({
        url: "<?php echo URL; ?>challan/mobileappjsonweighbridge_list",
        type: "GET",
        data: {  
        vendorCode: <?php echo $this->vendorCode; ?>
        },
        dataType: "json",
        success: function(returnedData) {
            $("#mobileappjsonweighbridge_list").empty();
           ////  console.log(returnedData[0].Total);
           
            $("#mobileappjsonweighbridge_list").append("<li><strong>Vehicle No.  &nbsp;- Driver Name</strong><span class='optionsqty'>ENTRY TIME</span></li>");
            for( i = 0; i < returnedData.length; i++ ) {
                allVehicleStatus[returnedData[i].deviceid]="Weigh Bridge Area";
                var str = returnedData[i].vehicle_no;
                 str = str.replace(/\s/g,'');
                 var Vehicle = substr_replace(str," ",5,0);
                 var Driver = returnedData[i].driver_name;
                 Driver = Driver.toLowerCase().replace(/\b[a-z]/g, function(letter) {
    return letter.toUpperCase();
});

                $("#mobileappjsonweighbridge_list").append( "<li><ul class='innerbox'><li><span class='optionsVendor'>"+getVendor(returnedData[i].vendorCode)+"</span><strong>"+Vehicle+"</strong> - "+Driver+"<span class='"+GetTimeEvolved(returnedData[i].loading_timeOUT,"null")+"'>"+CovertTimeHere(returnedData[i].loading_timeOUT)+"</span><br />CHNo: "+returnedData[i].challanno+" IAS: "+returnedData[i].gatepass_no+"</li></ul></li>");
      
            }
       
        }
});
$.ajax({
        url: "<?php echo URL; ?>challan/mobileappjsonexiting",
        type: "GET",
        data: {  
        vendorCode: <?php echo $this->vendorCode; ?>
        },
        dataType: "json",
        success: function(returnedData) {
           //  console.log(returnedData[0].Total);
            $("#mobileappjsonexiting").text(returnedData[0].Total);
        }
});

$.ajax({
        url: "<?php echo URL; ?>challan/mobileappjsonexiting_list",
        type: "GET",
        data: {  
        vendorCode: <?php echo $this->vendorCode; ?>
        },
        dataType: "json",
        success: function(returnedData) {
            $("#mobileappjsonexiting_list").empty();
           ////  console.log(returnedData[0].Total);
           
            $("#mobileappjsonexiting_list").append("<li><strong>Vehicle No.  &nbsp;- Driver Name</strong><span class='optionsqty'>ENTRY TIME</span></li>");
            for( i = 0; i < returnedData.length; i++ ) {
                allVehicleStatus[returnedData[i].deviceid]="Weigh Bridge Area";
                var str = returnedData[i].vehicle_no;
                 str = str.replace(/\s/g,'');
                 var Vehicle = substr_replace(str," ",5,0);
                 var Driver = returnedData[i].driver_name;
                 Driver = Driver.toLowerCase().replace(/\b[a-z]/g, function(letter) {
    return letter.toUpperCase();
});
var NetWeight = "<font style='color:green;font-weight:bold;font-size:9px;'>"+(returnedData[i].netweight/1000)+"MT</font>";

                $("#mobileappjsonexiting_list").append( "<li><ul class='innerbox'><li><span class='optionsVendor'>"+getVendor(returnedData[i].vendorCode)+"</span><strong>"+Vehicle+"</strong> - "+Driver+"<span class='"+GetTimeEvolved(returnedData[i].gross_weight_time,"null")+"'>"+CovertTimeHere(returnedData[i].gross_weight_time)+"</span><br />CHNo: "+returnedData[i].challanno+" IAS: "+returnedData[i].gatepass_no+"&nbsp;"+NetWeight+"</li></ul></li>");
      
            }
       
        }
});

$.ajax({
        url: "<?php echo URL; ?>challan/mobileappjsonenter",
        type: "GET",
        data: {  
        vendorCode: <?php echo $this->vendorCode; ?>
        },
        dataType: "json",
        success: function(returnedData) {
           //  console.log(returnedData[0].Total);
            $("#mobileappjsonenter").text(returnedData[0].Total);
        }
});

$.ajax({
        url: "<?php echo URL; ?>challan/mobileappjsonexit",
        type: "GET",
        data: {  
        vendorCode: <?php echo $this->vendorCode; ?>
        },
        dataType: "json",
        success: function(returnedData) {
           //  console.log(returnedData[0].Total);
            $("#mobileappjsonexit").text(returnedData[0].Total);
        }
});

//mobileappjsonnet
$.ajax({
        url: "<?php echo URL; ?>challan/mobileappjsonnet",
        type: "GET",
        data: {  
        vendorCode: <?php echo $this->vendorCode; ?>
        },
        dataType: "json",
        success: function(returnedData) {
           //  console.log(returnedData[0].Total);
            $("#mobileappjsonnet").text(returnedData[0].Total/1000+"MT      "+((returnedData[0].Total/1000)/$("#mobileappjsonexit").text()).toFixed(2));
        }
});

//mobileappjsonexit_list
$.ajax({
        url: "<?php echo URL; ?>challan/mobileappjsonexit_list",
        type: "GET",
        data: {  
        vendorCode: <?php echo $this->vendorCode; ?>
        },
        dataType: "json",
        success: function(returnedData) {
            $("#mobileappjsonexit_list").empty();
           ////  console.log(returnedData[0].Total);
           
            $("#mobileappjsonexit_list").append("<li><strong>Vehicle No.  &nbsp;- Driver Name</strong><span class='optionsqty'>EXIT TIME</span></li>");
            for( i = 0; i < returnedData.length; i++ ) {
                allVehicleStatus[returnedData[i].deviceid]="Weigh Bridge Area";
                var str = returnedData[i].vehicle_no;
                 str = str.replace(/\s/g,'');
                 var Vehicle = substr_replace(str," ",5,0);
                 var Driver = returnedData[i].driver_name;
                 Driver = Driver.toLowerCase().replace(/\b[a-z]/g, function(letter) {
    return letter.toUpperCase();
});
var NetWeight = "<font style='color:green;font-weight:bold;font-size:9px;'>"+(returnedData[i].netweight/1000)+"MT</font>";

                $("#mobileappjsonexit_list").append( "<li><ul class='innerbox'><li><span class='optionsVendor'>"+getVendor(returnedData[i].vendorCode)+"</span><strong>"+Vehicle+"</strong> - "+Driver+"<span class='"+GetTimeEvolved(returnedData[i].datetime_out,"null")+"'>"+CovertTimeHere(returnedData[i].datetime_out)+"</span><br />CHNo: "+returnedData[i].challanno+" IAS: "+returnedData[i].gatepass_no+"&nbsp;"+NetWeight+"</li></ul></li>");
      
            }
       
        }
});

//mobileappjsonunloaded
$.ajax({
        url: "<?php echo URL; ?>challan/mobileappjsonunloaded",
        type: "GET",
        data: {  
        vendorCode: <?php echo $this->vendorCode; ?>
        },
        dataType: "json",
        success: function(returnedData) {
            $("#mobileappjsonunloaded_list").empty();
           ////  console.log(returnedData[0].Total);
           
            $("#mobileappjsonunloaded_list").append("<li><strong>Vehicle No.  &nbsp;- Driver Name</strong><span class='optionsqty'>UNLOAD TIME</span></li>");
            $("#mobileappjsonunloaded").text(returnedData.length);
            for( i = 0; i < returnedData.length; i++ ) {
                allVehicleStatus[returnedData[i].deviceid]="Weigh Bridge Area";
                var str = returnedData[i].vehicle_no;
                 str = str.replace(/\s/g,'');
                 var Vehicle = substr_replace(str," ",5,0);
                 var Driver = returnedData[i].driver_name;
                 Driver = Driver.toLowerCase().replace(/\b[a-z]/g, function(letter) {
    return letter.toUpperCase();
});
var NetWeight = "<font style='color:green;font-weight:bold;font-size:9px;'>"+(returnedData[i].netweight/1000)+"MT</font>";

                $("#mobileappjsonunloaded_list").append( "<li><ul class='innerbox'><li><span class='optionsVendor'>"+getVendor(returnedData[i].vendorCode)+"</span><strong>"+Vehicle+"</strong> - "+Driver+"<span class='"+GetTimeEvolved(returnedData[i].unloadingtime,"null")+"'>"+CovertTimeHere(returnedData[i].unloadingtime)+"</span><br />CHNo: "+returnedData[i].challanno+" IAS: "+returnedData[i].gatepass_no+"&nbsp;"+NetWeight+"</li></ul></li>");
      
            }
       
        }
});
$.ajax({
        url: "<?php echo URL; ?>challan/mobileappjsonentery",
        type: "GET",
        data: {  
        vendorCode: <?php echo $this->vendorCode; ?>
        },
        dataType: "json",
        success: function(returnedData) {
           //  console.log(returnedData[0].Total);
            $("#mobileappjsonentery").text(returnedData[0].Total);
        }
});


//mobileappjsonexit_list
$.ajax({
        url: "<?php echo URL; ?>challan/mobileappjsonexit_listy",
        type: "GET",
        data: {  
        vendorCode: <?php echo $this->vendorCode; ?>
        },
        dataType: "json",
        success: function(returnedData) {
            $("#mobileappjsonexit_listy").empty();
           ////  console.log(returnedData[0].Total);
           $("#mobileappjsonexity").text(returnedData.length);
            $("#mobileappjsonexit_listy").append("<li><strong>Vehicle No.  &nbsp;- Driver Name</strong><span class='optionsqty'>EXIT TIME</span></li>");
            
            for( i = 0; i < returnedData.length; i++ ) {
                allVehicleStatus[returnedData[i].deviceid]="Weigh Bridge Area";
                var str = returnedData[i].vehicle_no;
                 str = str.replace(/\s/g,'');
                 var Vehicle = substr_replace(str," ",5,0);
                 var Driver = returnedData[i].driver_name;
                 Driver = Driver.toLowerCase().replace(/\b[a-z]/g, function(letter) {
    return letter.toUpperCase();
});
var NetWeight = "<font style='color:green;font-weight:bold;font-size:9px;'>"+(returnedData[i].netweight/1000)+"MT</font>";

                $("#mobileappjsonexit_listy").append( "<li><ul class='innerbox'><li><span class='optionsVendor'>"+getVendor(returnedData[i].vendorCode)+"</span><strong>"+Vehicle+"</strong> - "+Driver+"<span class='"+GetTimeEvolved(returnedData[i].datetime_out,"null")+"'>"+CovertTimeHere(returnedData[i].datetime_out)+"</span><br />CHNo: "+returnedData[i].challanno+" IAS: "+returnedData[i].gatepass_no+"&nbsp;"+NetWeight+"</li></ul></li>");
      
            }
       
        }
});
//mobileappjsonnety
$.ajax({
        url: "<?php echo URL; ?>challan/mobileappjsonnety",
        type: "GET",
        data: {  
        vendorCode: <?php echo $this->vendorCode; ?>
        },
        dataType: "json",
        success: function(returnedData) {
           //  console.log(returnedData[0].Total);
            $("#mobileappjsonnety").text(returnedData[0].Total/1000+"MT      "+((returnedData[0].Total/1000)/$("#mobileappjsonexity").text()).toFixed(2));
        }
});


$.ajax({
        url: "<?php echo URL; ?>challan/mobileappjsonmtrips",
        type: "GET",
        data: {  
        vendorCode: <?php echo $this->vendorCode; ?>
        },
        dataType: "json",
        success: function(returnedData) {
           //  console.log(returnedData[0].Total);
            $("#mobileappjsonmtrips").text(returnedData.length);
        //alert(returnedData);,
      //  async: false
        }
});


function createArray(length) {
    var arr = new Array(length || 0),
        i = length;

    if (arguments.length > 1) {
        var args = Array.prototype.slice.call(arguments, 1);
        while(i--) arr[length-1 - i] = createArray.apply(this, args);
    }

    return arr;
}

function Create2DArray(rows,columns) {
   var x = new Array(rows);
   for (var i = 0; i < rows; i++) {
       x[i] = new Array(columns);
   }
   return x;
}
var getChallan =[[]],getVehicleNo =[],txt="";
//mobileappjsonunloaded
$.ajax({
        url: "<?php echo URL; ?>challan/getAllTrips",
        type: "GET",
        data: {  
        vendorCode: <?php echo $this->vendorCode; ?>
        },
        dataType: "json",
        success: function(returnedData) {

           var yourArray = returnedData;

//var yourArray = $.map(returnedData, function(el) { return el });
           // json_decode($returnedData, true);
     //  $("#mobileappjsonunloaded").text(returnedData.length);
      var displayTable=[];

            for( i = 0; i < yourArray.length; i++ ) {
                var str = returnedData[i].vehicle_no;
                str = str.replace(/\s/g,'');
                    var Vehicle = substr_replace(str," ",5,0);
                txt+="<tr><td>"+Vehicle+"</td>";
                txt+="<td>"+returnedData[i].time+"</td>"; 
                txt+="<td>"+returnedData[i].driver_name+"</td>";
                txt+="<td>"+returnedData[i].challanno+"</td>";
                txt+="<td>"+returnedData[i].entry+"</td>"; 
                txt+="<td>"+returnedData[i].out+"</td></tr>"; 
               
                displayTable[i]= txt;
              
    //  // oTable.row.add(txt);
      txt="";
            } //end for


          
          var scrollPos = $("#example").scrollTop();
           oTable.clear().draw();
		 for( i = 0; i < displayTable.length; i++ ) {

		 oTable.row.add($(displayTable[i]));
		 }
	   oTable.draw();
       $("#example").scrollTop(scrollPos);
       
        } //end success
}); //end ajax




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
    {
                targets: [ 0 ],
                visible: false,
				
            } ,
            { type: 'veh', targets: 0 }
        ],
        "drawCallback": function ( settings ) {
            var api = this.api();
            var rows = api.rows( {page:'current'} ).nodes();
            var last=null;
            var Rowcount=1;
            api.column(0, {page:'current'} ).data().each( function ( group, i ) {
                if ( last !== group ) {

                    $(rows).eq( i ).before(
                        '<tr class="group"><td colspan="6">'+Rowcount+' '+group+'</td></tr>'
                    );
                    Rowcount++;
 
                    last = group;
                }
            } );
        }
      } );
      $('#example').on( 'click', 'tr.group', function () {
        var currentOrder = oTable.order()[0];
        if ( currentOrder[0] === 2 && currentOrder[1] === 'asc' ) {
            oTable.order( [ 0, 'desc' ] ).draw();
        }
        else {
            oTable.order( [ 0, 'asc' ] ).draw();
        }
    } );
    } );


</script>
