
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
 
 
<div class="container-fluid" style="padding: 0px; margin-bottom: 20px;">
  <div class="tab-content">
     <div id="home" class="tab-pane fade in active">
        <div class="white_div" style="">
           <div class="title_div">
             <span class="title_pra" style="font-size:18px;"><strong>Vendor Trip List</strong></span>
            </div>
            <br>
<!--
<div id="pnlLeft" class="touch">
		 
 <span style="font-size:18px;"><strong>Challan List</strong></span>
<div class="or-box">
-->

<!--
 <center>
                       
       <button type="button" class="btn btn-primary" name="today" id="today">Today</button>
       <button type="button" class="btn btn-primary" name="yesterday" id="yesterday">Yesterday</button>
       <button type="button" class="btn btn-primary" name="week" id="week">Week</button>
       <button type="button" class="btn btn-primary" name="month" id="month">Month</button>
       <button type="button" class="btn btn-primary" name="lifetime" id="lifetime">Life Time(3 Months)</button>
     
  </center>
-->
  <form action="#" method="POST">
         <div class="col-md-12" style="margin-top: 50px;">
                  <div class="col-md-offset-1 col-md-5">
                     <div style="display: flex;">
                        <div class="box">
                           <p class="input_title">Date:</p>
                        </div>
                        <div class="box box2"><input class="input_bar form-control" type="date" name="date" id="date" value="<?php echo $this->from; if($this->from==''){echo date('Y-m-d');}?>"></div>
                     </div>
                    </div>
                    <div class="col-md-5">
                      <div style="display: flex;">
                        <div class="box">
                           <p class="input_title">Vendor Code:</p>
                        </div>
                        <div class="box box2"><input class="input_bar form-control" type="text" name="vendorcode" id="vendorcode" ></div>
                     </div>
                    </div>
           </div>
       <div style="text-align: center;">
                  <input type="button" class="btn btn-default sbmt_btn" name="submit" id="submitbtn" onClick="javascript:getvendortrip();" value="submit">
               </div>
	
   </form>
  
                               
                              <table id="example" class="cell-border tdesign" width="100%" cellspacing="0">
                                 <thead>
                                     <tr>
                                         <th>Date</th>
                                         <th>Vehicle Number</th>
                                         <th>Status</th>
                                    </tr>
                                  </thead>
         
</table>	

</div>
</div>
          </div>
</div>





        
<script>
//  jQuery.fn.dataTable.Api.register( 'sum()', function ( ) {
//    return this.flatten().reduce( function ( a, b ) {
//        if ( typeof a === 'string' ) {
//            a = a.replace(/[^\d.-]/g, '') * 1;
//        }
//        if ( typeof b === 'string' ) {
//            b = b.replace(/[^\d.-]/g, '') * 1;
//        }
// 
//        return a + b;
//    }, 0 );
//} );
//jQuery.extend( jQuery.fn.dataTableExt.oSort, {
//    "date-uk-pre": function ( a ) {
//        if (a == null || a == "") {
//            return 0;
//        }
//        var ukDatea = a.split('/');
//        return (ukDatea[2] + ukDatea[1] + ukDatea[0]) * 1;
//    },
// 
//    "date-uk-asc": function ( a, b ) {
//        return ((a < b) ? -1 : ((a > b) ? 1 : 0));
//    },
// 
//    "date-uk-desc": function ( a, b ) {
//        return ((a < b) ? 1 : ((a > b) ? -1 : 0));
//    },
//    "veh-pre": function ( a ) {
//        if (a == null || a == "") {
//            return 0;
//        }
//        var ukDatea = a.split(' ');
//        return (ukDatea[1]) * 1;
//    },
// 
//    "veh-asc": function ( a, b ) {
//        return ((a < b) ? -1 : ((a > b) ? 1 : 0));
//    },
// 
//    "veh-desc": function ( a, b ) {
//        return ((a < b) ? 1 : ((a > b) ? -1 : 0));
//    }
//} );
var oTable,displayTable=[];
    $(document).ready(function() {
    
      oTable =  $('#example').DataTable( {
         scrollY:        "400px",
         scrollX:        true,
         scrollCollapse: true,
         paging:         false,
         fixedColumns:   {
                        leftColumns: 2,
                        rightColumns: 0,
                        heightMatch: 'none'
                     },
                     autoWidth: true,
         columnDefs: [
            {
                targets: [ 0,5,6,7,8,9,11],
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

   
      $(window).resize( function () {
        oTable.api().columns.adjust();
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
var page = "<?php echo $this->page; ?>";

function getvendortrip() {
  var txt="";
  var date=document.getElementById('date').value;
  var vendorcode=document.getElementById('vendorcode').value;
   var tdDate="", tdGatepass="", tdVehicleNo="",  tdStatus="";
$.ajax({
url: "<?php echo URL; ?>challan/vendortripEntry",
type: "GET",
data: {
date : date,
vendorcode: vendorcode
},
dataType: "json",
success: function(returnedData) {
 
  displayTable=[];
     // alert(returnedData.length);
     // alert(returnedData[0].id);
    oTable.clear().draw();
	   for( i = 0; i < returnedData.length; i++ ) {
      tdDate= '<tr style="height:20px;" role="row"><td>'+data[i]['datetime_in']+'</td>';
         
          tdVehicleNo='<td>'+data[i]['vehicle_no']+'</td>';
          tdStatus='<td>'+data[i]['status']+'</td>';
         
          
          txt = tdDate+tdVehicleNo+tdStatus;
    displayTable[i]= txt;
     // oTable.row.add(txt);
      txt="";

}
     oTable.clear().draw();
		 for( i = 0; i < displayTable.length; i++ ) {
		 oTable.row.add($(displayTable[i]));
		 }
	   oTable.draw();
     
}
});

return false;
}

getvendortrip();

</script>