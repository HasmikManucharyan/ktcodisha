<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&key=AIzaSyDvoRDqzE5AutQBzNBrYna6c0e3FyJPJ1g&country=IN"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css">
<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-1.12.4.js">
</script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js">
</script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js">
</script>
<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js">
</script>
<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js">
</script>
<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js">
</script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js">
</script><script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js">
  </script>
  <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/fixedcolumns/3.2.4/js/dataTables.fixedColumns.min.js">
	</script>
		<script src="<?php echo URL; ?>public/js/gmaps.js"></script>
        <script src="<?php echo URL; ?>public/js/markerwithlabel.js"></script>
		
         <script src="<?php echo URL; ?>public/js/markerclusterer.js"></script>
<script language="JavaScript" type="text/javascript">
    //<![CDATA[
        window.onbeforeunload = function(){
            return 'Are you sure you want to leave?';
        };
    //]]>
</script>
   <script>
$(document).ready(function() {
$("#today").click(function(){
//alert("success");
var from = "<?php echo date('Y-m-d'); ?>";
var to = "<?php echo date('Y-m-d'); ?>";
var divobj1 = document.getElementById('from');
divobj1.value = from;
var divobj2 = document.getElementById('to');
divobj2.value = to;
});
$("#yesterday").click(function(){
//alert("success");
var to = "<?php echo date('Y-m-d', strtotime('-1 day')); ?>";
var from = "<?php echo date('Y-m-d', strtotime('-1 day')); ?>";
var divobj1 = document.getElementById('from');
divobj1.value = from;
var divobj2 = document.getElementById('to');
divobj2.value = to;
});
$("#week").click(function(){
//alert("success");
var to = "<?php echo date('Y-m-d'); ?>";
var from = "<?php echo date('Y-m-d', strtotime('-7 day')); ?>";
var divobj1 = document.getElementById('from');
divobj1.value = from;
var divobj2 = document.getElementById('to');
divobj2.value = to;
});
$("#month").click(function(){
//alert("success");
var to = "<?php echo date('Y-m-d'); ?>";
var from = "<?php echo date('Y-m-d', strtotime('-30 day')); ?>";
var divobj1 = document.getElementById('from');
divobj1.value = from;
var divobj2 = document.getElementById('to');
divobj2.value = to;
});
$("#lifetime").click(function(){
//alert("success");
var to = "<?php echo date('Y-m-d'); ?>";
var from = "<?php echo date('Y-m-d', strtotime('-90 day')); ?>";
var divobj1 = document.getElementById('from');
divobj1.value = from;
var divobj2 = document.getElementById('to');
divobj2.value = to;
});
});
</script>
<style>
  div.dataTables_wrapper {
   min-width: 400px;
   margin: 0 auto;
}
   /* table.tdesign {border-collapse:collapse; table-layout:fixed;} */

  table.tdesign tr.odd { background-color:  whitesmoke; }
table.tdesign tr.even { background-color: white;  }	
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
    #pnlLeft {
        overflow-x: scroll;
            overflow-y: scroll;
            float: left;
            margin-right: 3px;
            pading-left: 2px;
		      	border: 1 px #F00;
            /*border-right: solid 1px #BDBDBD;*/
            width: 100%;
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
      width: 100%;
      display: block;
        }
  </style>
  <script>
  var party=[];
  </script>
  <?php
	 foreach($this->allPartyMaster AS $key=>$value){ 
         ?>
         <script>
                    party[<?php echo $value['id'];?>] = "<?php echo $value['PartyShortName']; ?>";
                    </script>
                    <?php
     }
  ?>
<div id="pnlLeft" class="touch">
		 
 <span style="font-size:18px;"><strong>Challan List</strong></span>
<div class="or-box">

 <center>
                       
                        <button type="button" class="btn btn-primary" name="today" id="today">Today</button>
                        <button type="button" class="btn btn-primary" name="yesterday" id="yesterday">Yesterday</button>
                        <button type="button" class="btn btn-primary" name="week" id="week">Week</button>
                        <button type="button" class="btn btn-primary" name="month" id="month">Month</button>
                        <button type="button" class="btn btn-primary" name="lifetime" id="lifetime">Life Time(3 Months)</button>
        </center>
  <form action="#" method="POST">
    
	<div class="form-group col-xs-6">
      <label class="control-label col-xs-6" for="date">From Date:</label>
      <div class="col-xs-6">          
       <input type="date" class="form-control" name="from" id="from" value="<?php echo $this->from; if($this->from==''){echo date('Y-m-d');}?>"/>
      </div>
    </div> 

	<div class="form-group col-xs-6">
      <label class="control-label col-xs-6" for="date">To Date:</label>
      <div class="col-xs-6">          
       <input type="date" class="form-control" name="to" id="to" value="<?php echo $this->to; if($this->to==''){echo date('Y-m-d');}?>"/>
      </div>
    </div> 
	
	<div class="col-xs-16 form-group">        
      <div class="col-sm-offset-2 col-xs-8">
      <button type="button" class="btn btn-primary" value="submit" name="submit" onClick="javascript:getChallans();" style="background-color:#008000">Submit</button>
      </div>
    </div>
	    <br clear="all"/>
   </form>
   </div>
	                            <div class="table">
                               
                              <table id="example" class="cell-border tdesign" width="100%" cellspacing="0">
        										<thead><tr>
                                              
                                               <th>Date</th>
                                               <th>Vehicle</th>
                                               <th>Party</th>
                                               <th>Challan</th>
                                               <th>GatePass</th>
                                               <th>Driver</th>
                                               <!-- <th>DL No</th>
                                               <th>DL Expiry</th>
                                               <th>Material</th> -->
                                              
                                               <th>Entry</th>
                                               <!-- <th>Entry Hold</th> -->
											                         <!-- <th>Tare Weight</th>
                                               <th>Tare Weight Time</th> -->
                                               
                                               <th>From</th>
                                               <th>To</th>
                                               <!-- <th>Load Time</th> -->
                                               <!-- <th>Loading Location</th>
                                               <th>Gross Weight</th>
                                               <th>Gross Weight Time</th>
                                               <th>Gross Hold</th> -->
                                               <th>Tare</th>
         <th>Gross</th>
                                               <th>Net </th>
                                               <th>Exit</th>
                                               <!-- <th>Exit Hold</th> -->
                                               <th>Trip Time</th>
                                               <th>Unloading Time</th>
                                               <th>Status</th>
                                               <th>Cancel Challan</th>
                                               <!-- <th>Unloading Location</th>
                                               <th>Unloading Time</th>
                                               <th>Sys Msg</th>
                                               <th></th>
                                               <th></th> -->
                                               </tr></thead>
         <tbody></tbody><tfoot><tr>
         
         <th>Date</th>
         <th>Vehicle</th>
         <th>Party</th>
         <th>Challan</th>
         <th>GatePass</th>
         <th>Driver</th>
         <!-- <th>DL No</th>
         <th>DL Expiry</th>
         <th>Material</th> -->
        
         <th>Entry</th>
         <!-- <th>Entry Hold</th> -->
         <!-- <th>Tare Weight</th>
         <th>Tare Weight Time</th> -->
         
         <th>From</th>
         <th>To</th>
         <!-- <th>Load Time</th> -->
         <!-- <th>Loading Location</th>
         <th>Gross Weight</th>
         <th>Gross Weight Time</th>
         <th>Gross Hold</th> -->
         <th>Tare</th>
         <th>Gross</th>
         <th>Net </th>
         <th>Exit</th>
         <!-- <th>Exit Hold</th> -->
         <th>Trip Time</th>
         <th>Unloading Time</th>
         <th>Status</th>
         <th>Cancel Challan</th>
         <!-- <th>Unloading Location</th>
         <th>Unloading Time</th>
         <th>Sys Msg</th>
         <th></th>
         <th></th> -->
          </tr></tfoot>
                    
</table>	
<a href="#" onClick="getChallans()">Refresh</a>
</div>
</div>


          <script>
function confirmDelete(delUrl) {
if (confirm("Are you sure you want to delete")) {
  document.location = delUrl;
}
}
</script>        
<script>
  jQuery.fn.dataTable.Api.register( 'sum()', function ( ) {
    return this.flatten().reduce( function ( a, b ) {
        if ( typeof a === 'string' ) {
            a = a.replace(/[^\d.-]/g, '') * 1;
        }
        if ( typeof b === 'string' ) {
            b = b.replace(/[^\d.-]/g, '') * 1;
        }
 
        return a + b;
    }, 0 );
} );
jQuery.extend( jQuery.fn.dataTableExt.oSort, {
    "date-uk-pre": function ( a ) {
        if (a == null || a == "") {
            return 0;
        }
        var ukDatea = a.split('/');
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
         scrollY:        "400px",
         scrollX:        true,
         scrollCollapse: true,
         paging:         false,
         fixedColumns:   {
                        leftColumns: 3,
                        rightColumns: 0,
                        heightMatch: 'none'
                     },
                     autoWidth: true,
         columnDefs: [
            {
                targets: [ 0,5,8,9,11],
                bSearchable: false
            },
            { type: 'date-uk', targets: 0 }
            ,
            { type: 'veh', targets: 1 }
          ],
        // responsive: false,
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
      } );

    //   $('#example tfoot th').each( function () {
    //     var title = $(this).text();
    //     $(this).html( '<input type="text" placeholder="'+title+'" size="6" />' );
    // } );
    // oTable.columns().every( function () {
    //     var that = this;
 
    //     $( 'input', this.footer() ).on( 'keyup change', function () {
    //         if ( that.search() !== this.value ) {
    //             that
    //                 .search( this.value )
    //                 .draw();
    //         }
    //     } );
    // } );
      $(window).resize( function () {
        table.api().columns.adjust();
} );
    } );
  </script>
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
var page = <?php echo $this->page; ?>;

function getChallans() {
  var txt="";
  var from=document.getElementById('from').value;
  var to=document.getElementById('to').value;
  
$.ajax({
url: "<?php echo URL; ?>challan/<?php echo $this->page; ?>",
type: "GET",
data: {
from : from,
to: to
},
dataType: "json",
success: function(returnedData) {
  alert("Loaded "+from+ " "+ to);
  displayTable=[];
     // alert(returnedData.length);
     // alert(returnedData[0].id);
    oTable.clear().draw();
	   for( i = 0; i < returnedData.length; i++ ) {
     // txt +="<tr><td>"+(i+1)+"</td>";
     var str = returnedData[i].vehicle_no;
     var Vehicle = "";
     var DriverName  = "";
     if(returnedData[i].driver_name!=""){
        DriverName = returnedData[i].driver_name.toUpperCase();
     }
     if(str!=""){
     str = str.replace(/\s/g,'');
      Vehicle = substr_replace(str," ",5,0);
     }
      txt +="<tr><td>"+formatDate(returnedData[i].challan_date)+"</td>";
      txt +="<td>"+Vehicle+"</td>";
      txt +="<td>"+party[returnedData[i].OwnerType]+"</td>";
      txt +="<td>"+returnedData[i].challanno+"</td>";
     
      txt +="<td>"+returnedData[i].gatepass_no+"</td>";
      
      txt +="<td>"+DriverName+"</td>";
      //txt +="<td>"+returnedData[i].dlno+"</td>";
    //  txt +="<td>"+returnedData[i].license_expiry+"</td>";
    //  txt +="<td>"+returnedData[i].material+"</td>";
      
      txt +="<td>"+formatDateTime(returnedData[i].datetime_in)+"</td>";
     // txt +='<td style="background-color:'+get_time_diffColor(returnedData[i].datetime_in,returnedData[i].datetime_in)+';">'+get_time_diff(returnedData[i].datetime_in,returnedData[i].datetime_in)+'</td>';

    //  txt +="<td>"+returnedData[i].tareweight+"</td>";
    //  txt +="<td>"+returnedData[i].tare_weight_time+"</td>";
      txt +="<td>"+returnedData[i].from+"</td>";
      txt +="<td>"+returnedData[i].to+"</td>";
    //  txt +='<td style="background-color:'+get_time_diffColor(returnedData[i].loading_timeIN,returnedData[i].loading_timeOUT)+';border:solid 1px #fab;">'+get_time_diff(returnedData[i].loading_timeIN,returnedData[i].loading_timeOUT)+'</td>';

    //  txt +="<td>"+returnedData[i].loading_positionid+"</td>";
    //  txt +="<td>"+returnedData[i].grossweight+"</td>";
   //   txt +="<td>"+returnedData[i].gross_weight_time+"</td>";
    //  txt +='<td style="background-color:'+get_time_diffColor(returnedData[i].loading_timeOUT,returnedData[i].gross_weight_time)+';">'+get_time_diff(returnedData[i].loading_timeOUT,returnedData[i].gross_weight_time)+'</td>';
    txt +="<td>"+returnedData[i].tareweight+"</td>";
    txt +="<td>"+returnedData[i].grossweight+"</td>";
      txt +="<td>"+returnedData[i].netweight+"</td>";
      txt +="<td>"+formatDateTime(returnedData[i].datetime_out)+"</td>";
    //  txt +='<td style="background-color:'+get_time_diffColor(returnedData[i].gross_weight_time,returnedData[i].datetime_out)+';">'+get_time_diff(returnedData[i].gross_weight_time,returnedData[i].datetime_out)+'</td>';

      txt +='<td style="background-color:'+get_time_diffColor(returnedData[i].datetime_in,returnedData[i].datetime_out)+';border:solid 1px #fab;">'+get_time_diff(returnedData[i].datetime_in,returnedData[i].datetime_out)+'</td>';

txt +='<td style="background-color:'+get_time_diffColor(returnedData[i].datetime_out,returnedData[i].unloadingtime)+';border:solid 1px #fab;">'+get_time_diff(returnedData[i].datetime_out,returnedData[i].unloadingtime)+'</td>';

      txt +="<td>"+returnedData[i].status+"</td>";
     // txt +="<td>"+returnedData[i].unloadingpoint+"</td>";
     // txt +="<td><a href='<?php echo URL; ?>challan/VL_ASH_Vehicle_Unloading?VEHICLE_NO="+returnedData[i].vehicle_no+"&CHALLAN_NO="+returnedData[i].challanno+"&LOADING_LOCATION="+returnedData[i].deviceid+"' >"+returnedData[i].unloadingtime+"</a></td>";
     // txt +="<td>"+returnedData[i].sysmsg+"</td>";
    //  txt +="<td>view</td>";
     // txt +="<td>edit</td></tr>";LOADING IN
     //if(returnedData[i].status=="submitted" || returnedData[i].status=="Submitted" || returnedData[i].status=="SUBMITTED" || returnedData[i].status=="LOADING IN" || returnedData[i].status=="LOADING OUT" ){
    // txt +="<td><a href='<?php echo URL; ?>challan/VL_ASH_PushVehicleChallanCancelation?VEHICLE_NO="+returnedData[i].vehicle_no+"&CHALLAN_NO="+returnedData[i].challanno+"' target='_blank'>CANCEL</a><a href='<?php echo URL; ?>challan/REGEN?ID="+returnedData[i].id+"&VEHICLE_NO="+returnedData[i].vehicle_no+"&CHALLAN_NO="+returnedData[i].challanno+"' target='_blank'>REGEN</a></td>";
    // }else{
      txt +="<td>N.A.</td>";
     
    // }
     txt +="</tr>";

    //www.liveratrack.com/login/challan/VL_ASH_Vehicle_Weight_Update?VEHICLE_NO=OD23G1672&CHALLAN_NO=3&TYPE=TARE&WEIGHT=20  
    //  alert(txt);

    displayTable[i]= txt;
     // oTable.row.add(txt);
      txt="";
//#####


  

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

function UpdateChallan(id,challan){
  $.ajax({
        url: "<?php echo URL; ?>challan/VL_ASH_PullVehicleDetailsNEW",
        type: "GET",
        data: {  
        id : id,
        challan : challan
        },
        dataType: "text/html",
        success: function(returnedData) {
       // alert("called");,
      //  async: false
        }
});
return false;
}
getChallans();
//window.setInterval(getChallans, 4000);

  function get_time_diffColor( datetime,now )
{
    var datetime = typeof datetime !== 'undefined' ? datetime : "2014-01-01 01:02:03.123456";
    var now = typeof now !== 'undefined' ? now : "2014-01-01 01:02:03.123456";

    var datetime = new Date( datetime ).getTime();
    var now = new Date(now).getTime();
    if( isNaN(datetime)|| datetime=='null' || datetime=='NULL'|| datetime=='0000-00-00 00:00:00')
    {
        return "#FFE0E0";
    }
    if(isNaN(now)|| now=='0000-00-00 00:00:00' || now=='null' || now=='NULL'){
  //now = new Date().getTime();
  return "#FFE766";
}

    
    return "palegreen";
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
function formatDate(dtstr) {
    var dt = dtstr.split(/[: T-]/).map(parseFloat);
    var result = new Date(dt[0], dt[1] - 1, dt[2], dt[3] || 0, dt[4] || 0, dt[5] || 0, 0);
	//result.setHours(result.getHours() + 5);
  //  result.setMinutes(result.getMinutes() + 30);
	//result = result.toString(result);
	 var locale = "en-gb";
	 var options = {year: 'numeric', month: 'long', day: 'numeric',time: 'long' };
	return result.toLocaleDateString('en-gb', { hour12: true });
	//return dtstr; toLocaleDateString
}

function formatDateTime(dtstr) {
  if(dtstr!=null && dtstr!='0000-00-00 00:00:00'){
    var dt = dtstr.split(/[: -]/).map(parseFloat);
    var result = new Date(dt[0], dt[1] - 1, dt[2], dt[3] || 0, dt[4] || 0, dt[5] || 0, 0);
	//result.setHours(result.getHours() + 5);
  //  result.setMinutes(result.getMinutes() + 30);
	//result = result.toString(result);
	 var locale = "en-gb";
	 var options = {year: 'numeric', month: 'long', day: 'numeric',time: 'long' };
	return result.toLocaleString('en-gb', { hour24: true });
  }else{
    return "";
  }
	//return dtstr; toLocaleDateString
}


                      </script>