<link rel="stylesheet" href="<?php echo URL; ?>public/css/jquery-ui.css" />
<link href="<?php echo URL; ?>public/css/jquery.dataTables.min.css" rel="stylesheet">
<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-1.12.4.js">
</script>
<script src="<?php echo URL; ?>public/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>public/js/jquery-ui.js"></script>
<script src="<?php echo URL; ?>public/js/jquery.min.js"></script>
<script src="<?php echo URL; ?>public/js/jquery.dataTables.min.js"></script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({
          google_ad_client: "ca-pub-5698411113997549",
          enable_page_level_ads: true
     });
</script>
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
    <ul class="accordion">
<li>
<a class="toggle hide" href="javascript:void(0);">Banjari Parking Area <span class='options'><?php echo $this->banjari[0]['Total']; ?></span></a>
    <ul class="inner" style="display: none;">
    <li><?php echo "<strong>Vehicle No.  &nbsp;- Driver Name</strong>"; ?><span class='optionsqty'>ENTRY TIME</span></li>
    <?php foreach($this->banjari_list AS $key=>$value){
        $allVehicleStatus[$value['deviceid']]="Banjari Parking Area";
        ?>
        <li>
            <ul class="innerbox"><li><span class="optionsVendor"><?php echo getVendor($value['vendorCode']); ?></span>
           <?php if($_REQUEST['action']=="admin" and $value['challan_entry_time']=='') {

           ?>
 <?php echo "<strong>".substr_replace(str_replace(" ","",$value['vehicle_no'])," ",5,0)."</strong> - ".ucwords(strtolower($value['driver_name'])); ?><span class='<?php echo GetTimeEvolved($value['challan_entry_time']); ?>'><a href="<?php echo URL; ?>challan/REGEN?ID=<?php echo $value['id']; ?>" target="_blank"><?php echo CovertTimeHere($value['challan_entry_time']); ?>R</a></span><br/>
       
           <?php  } else { ?>
        <?php echo "<strong>".substr_replace(str_replace(" ","",$value['vehicle_no'])," ",5,0)."</strong> - ".ucwords(strtolower($value['driver_name'])); ?><span class='<?php echo GetTimeEvolved($value['challan_entry_time']); ?>'><?php echo CovertTimeHere($value['challan_entry_time']); ?></span><br/>
           <?php } ?>
        <?php echo "CHNo: ".$value['challanno']." DL: ".$value['dlno'];  ?>&nbsp;
        <?php if($value['sysmsg']=="TARE WEIGHT REQUIRED FOR THIS TRIP"){echo "<font style='color:red;font-weight:bold;font-size:9px;'>TARE</font>";} ?>
    </li></ul>
        </li>
    <?php } ?>
    </ul>    
 </li> 
<li>
<a class="toggle hide" href="javascript:void(0);">Sepco Parking Area <span class='options'><?php echo $this->sepcoparking[0]['Total']; ?></span></a>
<ul class="inner" style="display: none;">
<li><?php echo "<strong>Vehicle No.  &nbsp;- Driver Name</strong>"; ?><span class='optionsqty'>ENTRY TIME</span></li>
    <?php foreach($this->sepcoparking_list AS $key=>$value){ 
        $allVehicleStatus[$value['deviceid']]="Sepco Parking Area";
        
        ?>
        <li>
        <ul class="innerbox"><li><span class="optionsVendor"><?php echo getVendor($value['vendorCode']); ?></span>        
        <?php echo "<strong>".substr_replace(str_replace(" ","",$value['vehicle_no'])," ",5,0)."</strong> - ".ucwords(strtolower($value['driver_name'])); ?><span class='<?php echo GetTimeEvolved($value['datetime_in']); ?>'><?php echo CovertTimeHere($value['datetime_in']); ?></span><br/>
        <?php echo "CHNo: ".$value['challanno']." IAS: ".$value['gatepass_no'];  ?>
        &nbsp;
        <?php if($value['sysmsg']=="TARE WEIGHT REQUIRED FOR THIS TRIP"){echo "<font style='color:red;font-weight:bold;font-size:9px;'>TARE</font>";} ?>
    </li></ul></li>
    <?php } ?>
    </ul>    
</li>
<li>
<a class="toggle hide" href="javascript:void(0);">IPP Loading Area<span class='options'><?php echo $this->ippparking[0]['Total']; ?></span></a>
<ul class="inner" style="display: none;">
<li><?php echo "<strong>Vehicle No.  &nbsp;- Driver Name</strong>"; ?><span class='optionsqty'>ENTRY TIME</span></li>
    <?php foreach($this->ippparking_list AS $key=>$value){ 
         $allVehicleStatus[$value['deviceid']]="IPP Loading Area";
        ?>
        <li>
        <ul class="innerbox"><li> <span class="optionsVendor"><?php echo getVendor($value['vendorCode']); ?></span>       
        <?php echo "<strong>".substr_replace(str_replace(" ","",$value['vehicle_no'])," ",5,0)."</strong> - ".ucwords(strtolower($value['driver_name'])); ?><span class='<?php echo GetTimeEvolved($value['loading_timeIN']); ?>'><?php echo CovertTimeHere($value['loading_timeIN']); ?></span><br/>
        <?php echo "CHNo: ".$value['challanno']." IAS: ".$value['gatepass_no'];  ?>
    </li></ul></li>
    <?php } ?>
    </ul>   
</li>
<li><a class="toggle hide" href="javascript:void(0);">Weigh Bridge Area<span class='options'><?php echo $this->weighbridge[0]['Total']; ?></span></a>
<ul class="inner" style="display: none;">
<li><?php echo "<strong>Vehicle No.  &nbsp;- Driver Name</strong>"; ?><span class='optionsqty'>ENTRY TIME</span></li>
    <?php foreach($this->weighbridge_list AS $key=>$value){ 
        $allVehicleStatus[$value['deviceid']]="Weigh Bridge Area";
        ?>
        <li>
        <ul class="innerbox"><li><span class="optionsVendor"><?php echo getVendor($value['vendorCode']); ?></span>        
        <?php echo "<strong>".substr_replace(str_replace(" ","",$value['vehicle_no'])," ",5,0)."</strong> - ".ucwords(strtolower($value['driver_name'])); ?><span class='<?php echo GetTimeEvolved($value['loading_timeOUT']); ?>'><?php echo CovertTimeHere($value['loading_timeOUT']); ?></span><br/>
        <?php echo "CHNo: ".$value['challanno']." IAS: ".$value['gatepass_no'];  ?>
    </li></ul></li>
    <?php } ?>
    </ul> 
</li>
<li>
<a class="toggle hide" href="javascript:void(0);">Waiting For Exit<span class='options'><?php echo $this->exiting[0]['Total']; ?></span></a> 
<ul class="inner" style="display: none;">
<li><?php echo "<strong>Vehicle No.  &nbsp;- Driver Name</strong>"; ?><span class='optionsqty'>ENTRY TIME</span></li>
    <?php foreach($this->exiting_list AS $key=>$value){ 
        $allVehicleStatus[$value['deviceid']]="Waiting For Exit";
        ?>
        <li>
        <ul class="innerbox"><li><span class="optionsVendor"><?php echo getVendor($value['vendorCode']); ?></span>        
        <?php echo "<strong>".substr_replace(str_replace(" ","",$value['vehicle_no'])," ",5,0)."</strong> - ".ucwords(strtolower($value['driver_name'])); ?><span class='<?php echo GetTimeEvolved($value['gross_weight_time']); ?>'><?php echo CovertTimeHere($value['gross_weight_time']); ?></span><br/>
        <?php echo "CHNo: ".$value['challanno']." IAS: ".$value['gatepass_no'];  ?>&nbsp;
        <?php echo "<font style='color:green;font-weight:bold;font-size:9px;'>".number_format((float)($value['netweight']/1000),2)."MT</font>"; ?>
    </li></ul></li>
    <?php } ?>
    </ul> 
</li>
<li>
<a class="toggle hide" href="javascript:void(0);">Today Entered<span class='options'><?php echo $this->enter[0]['Total']; ?></span></a>
</li>
<li>
<a class="toggle hide" href="javascript:void(0);">Today Exited &nbsp;&nbsp;&nbsp;<?php echo number_format((float)($this->net[0]['Total']/1000),2); ?>MT&nbsp;&nbsp;&nbsp;<?php echo number_format((float)($this->net[0]['Total']/(1000*$this->exit[0]['Total'])),2); ?>MT<span class='options'><?php echo $this->exit[0]['Total']; ?></span></a>
<ul class="inner" style="display: none;">
    <li><?php echo "<strong>Vehicle No.  [Trips]&nbsp;- Driver Name</strong>"; ?><span class='optionsqty'> EXIT TIME</span></li>
    <?php foreach($this->trips AS $key=>$value){
        $trips[$value['deviceid']]=$value['Trips'];
    }
        ?>
    <?php foreach($this->exit_list AS $key=>$value){ ?>
        <li>
        <ul class="innerbox"><li><span class="optionsVendor"><?php echo getVendor($value['vendorCode']); ?></span>    
        <?php echo "<strong>".substr_replace(str_replace(" ","",$value['vehicle_no'])," ",5,0)."</strong> [".$trips[$value['deviceid']]."]- ".ucwords(strtolower($value['driver_name'])); ?><span class='<?php echo GetTimeEvolved($value['datetime_out']); ?>'><?php echo CovertTimeHere($value['datetime_out']); ?></span><br/>
        <?php echo "CHNo: ".$value['challanno']." IAS: ".$value['gatepass_no'];  ?>&nbsp;
        <?php echo "<font style='color:green;font-weight:bold;font-size:9px;'>".number_format((float)($value['netweight']/1000),2)."MT</font>"; ?>
    </li></ul></li>
    <?php } ?>
    </ul>    
 </li>
 
 <?php
if($this->vendorCode=='206243'){
?>

<li>
<a class="toggle hide" href="javascript:void(0);">Today UnLoaded<span class='options'><?php echo sizeof($this->unloaded ); ?></span></a>
<ul class="inner" style="display: none;">
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
    <?php } ?>

 <li>
<a class="toggle hide" href="javascript:void(0);">Yesterday Entered <span class='options'><?php echo $this->entery[0]['Total']; ?></span></a>
</li>
<li>
<a class="toggle hide" href="javascript:void(0);">Yesterday Exited &nbsp;&nbsp;&nbsp;<?php echo number_format((float)($this->nety[0]['Total']/1000),2); ?>MT&nbsp;&nbsp;&nbsp;<?php echo number_format((float)($this->nety[0]['Total']/(1000*$this->exity[0]['Total'])),2); ?>MT <span class='options'><?php echo $this->exity[0]['Total']; ?></span></a>
<ul class="inner" style="display: none;">
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

<?php
if($this->vendorCode=='206243'){
?>

 <li>
<a class="toggle hide" href="javascript:void(0);">All Vehicles <span class='options'><?php echo sizeof($this->mtrips); ?></span></a>
<ul class="inner" style="display: none;">
    <li>
<table id="example" class="cell-border tdesign" width="100%" cellspacing="0">
<thead>
    <tr>
        <th>Vehicle No</th>
        <th>Trips</th>
        <th>TQty</th> 
        <th>Trip Time</th>
    </tr>
</thead>
<tbody>
    <?php foreach($this->ctrips AS $key=>$value){
        $ctrips[$value['deviceid']]=$value['Trips'];
        $TQty[$value['deviceid']]=$value['TQty'];
    }
    $slno=0;
    foreach($this->mtrips AS $key=>$value){ 
        $todaysTrips = $trips[$value['deviceid']];
        if($todaysTrips==""){
            $todaysTrips = 0;
        }
        if($value['LastOut']>$value['LastIn']){
            $bgColor="#FFE0E0";
        }else{
            $bgColor="palegreen";
        }
        $slno++;
        ?>
    <tr style="background-color:<?php echo $bgColor; ?>;">
  
        <td><?php echo "<strong>".substr_replace(str_replace(" ","",$value['vehicle_no'])," ",5,0)."</strong>"; ?></td>
        <td><?php echo $todaysTrips."/".$ctrips[$value['deviceid']]; ?></td>
        <td><?php echo $TQty[$value['deviceid']]; ?></td>
        <td><?php echo formatRentry($value['Rentry']); ?></td>
    </tr>
    <?php } ?>
    </tbody>
    </table>
    </li>
    </ul>    
 </li>
    <?php } else { ?>
 <li>
<a class="toggle hide" href="javascript:void(0);">All Vehicles <span class='options'><?php echo sizeof($this->allTrips); ?></span></a>
<ul class="inner" style="display: none;">
    <li><?php echo "<strong>Vehicle No.  &nbsp;&nbsp;&nbsp;-Last Trip</strong>"; ?><span class='optionsqty'> IDLE TIME</span></li>
    <?php foreach($this->allTrips AS $key=>$value){ ?>
        <li>
        <ul class="innerbox"><li><span class="optionsVendor"><?php echo getVendor($value['vendorCode']); ?></span>        
        <?php echo "<strong>".substr_replace(str_replace(" ","",$value['Vehicle'])," ",5,0)."</strong> - ".$value['LastTrip']; ?><span class='optionsqty'><?php echo $value['TDiff']; ?></span><br/>
        <?php echo $allVehicleStatus[$value['deviceid']]; ?>
    </li></ul></li>
    <?php } ?>
    </ul>    
 </li>
    <?php } ?>     
</ul>


<script>
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
        
      } );
    } );
</script>
