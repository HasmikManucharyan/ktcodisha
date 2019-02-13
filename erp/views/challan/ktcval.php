<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&key=AIzaSyDvoRDqzE5AutQBzNBrYna6c0e3FyJPJ1g&country=IN"></script>
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
                                               <th>GatePass No</th>
                                               <th>Driver</th>
                                               <th>DL No</th>
                                               <th>DL Expiry</th>
                                               <th>Material</th>
                                              
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
                                               <th>System MSG</th>
                                               <th></th>
                                               <th></th>
                                               </tr></thead>
         <?php foreach($this->complete_challan AS $key=>$value){ ?>
               <tr>
              
                     						    <td><?php 	echo $value['id'];?></td>
                                    <td><?php	echo $value['challan_date'];?></td>
											              <td><?php echo $value['challanno']?></td>
                                    <td><?php	echo $value['vehicle_no'];?></td>
                                    <td><?php	echo $value['gatepass_no'];?></td>
                                    <td><?php	echo $value['driver_name'];?></td>
                                    <td><?php	echo $value['dlno'];?></td>
                                    <td><?php	echo $value['expirydate'];?></td>
                                    <td><?php	echo $value['material'];?></td>
                                   
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
                                    <td><?php	echo $value['sysmsg'];?></td>
                                               
                                               <td><a href="#"><i class="fa fa-edit"></i> View</button></a></td>
                                               <td><a href="#"><i class="fa fa-edit"></i> Edit</button></a></td>
                                            
											  <!-- <td><a href="<?php//echo URL; ?>vts/view_devices/?id=<?php//echo $value['id']; ?>" class="btn btn-primary btn-sm" role="button">View</a></td>
											   <td><a href="<?php//echo URL; ?>vts/edit_devices/?id=<?php//echo $value['id']; ?>" class="btn btn-primary btn-sm" role="button">Edit</a></td>
											   <td><a href="javascript:confirmDelete('delete_devices/?id=<?php//echo $value['id'];?>&name=<?php//echo $value['name']; ?>&uniqueId=<?php//echo $value['uniqueId']; ?>')" class="btn btn-primary btn-sm" role="button">Delete</a></td>-->
										</tr>
											
					<?php } ?>
                  
                    
</table>	
<a href="#" onClick="getChallans()">Refresh</a>
</div>
</div>


       
<script>
var oTable,displayTable=[];
   // $(document).ready(function() {
      oTable =  $('#example').DataTable( {
        "paging":   false,
responsive: false,
"aaSorting": [[2,'desc']]
      } );
      $(window).resize( function () {
    table.api().columns.adjust();
} );
   // } );

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
      txt +="<td>"+returnedData[i].challanno+"</td>";
      txt +="<td>"+returnedData[i].vehicle_no+"</td>";
      txt +="<td>"+returnedData[i].gatepass_no+"</td>";
     
      txt +="<td>"+returnedData[i].driver_name+"</td>";
      txt +="<td>"+returnedData[i].dlno+"</td>";
      txt +="<td>"+returnedData[i].license_expiry+"</td>";
      txt +="<td>"+returnedData[i].material+"</td>";
      txt +="<td>"+returnedData[i].datetime_in+"</td>";
      txt +="<td>"+returnedData[i].tareweight+"</td>";
      txt +="<td>"+returnedData[i].tare_weight_time+"</td>";
      txt +="<td>"+returnedData[i].loading_timeIN+"</td>";
      txt +="<td>"+returnedData[i].loading_timeOUT+"</td>";
      txt +="<td>"+returnedData[i].loading_positionid+"</td>";
      txt +="<td>"+returnedData[i].grossweight+"</td>";
      txt +="<td>"+returnedData[i].gross_weight_time+"</td>";
      txt +="<td>"+returnedData[i].netweight+"</td>";
      txt +="<td>"+returnedData[i].datetime_out+"</td>";
      txt +="<td>"+returnedData[i].status+"</td>";
      txt +="<td>"+returnedData[i].unloadingpoint+"</td>";
      txt +="<td>"+returnedData[i].unloadingtime+"</td>";
      txt +="<td>"+returnedData[i].sysmsg+"</td>";
      txt +="<td>view</td>";
      txt +="<td>edit</td></tr>";
      

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

//window.setInterval(getChallans, 150000);



                      </script>