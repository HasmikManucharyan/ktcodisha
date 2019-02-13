<link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
       <link href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css" rel="stylesheet">
       <link href="<?php echo URL; ?>public/css/select2.min.css" rel="stylesheet">
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
<script src="<?php echo URL; ?>public/js/select2.min.js"></script>
<style>
   table.tdesign tr.odd { background-color:  whitesmoke; }
   table.tdesign tr.even { background-color: white;  }	
   table.tdesign th {
   background: #d9edf7;
   color: #000;
   padding: 2px;
   border: 1px solid #ccc;
   }
   table.tdesign td {
   padding: 1px;
   border: 1px solid #000;
   background: transparent;
   height:15px;
   white-space: nowrap; 
   }
</style>
<div class="container-fluid" style="padding: 0px; margin-bottom: 20px;">
<div class="tab-content">
   <div id="home" class="tab-pane fade in active">
      <div class="white_div" style="">
         <div class="title_div">
            <span class="title_pra" style="font-size:18px;"><strong>vehicleperformance</strong></span>
           
         </div>
         <br>
         <center> <input type="text" id="searchTxt_vehicleperformance" placeholder="Search"></center>
         <br>
          <input type="text" name="date" id="date">
         <div class="table-responsive" id="table_vehicleperformance" hidden>
            
            <table id="example_vehicleperformance" class="cell-border tdesign" width="100%" cellspacing="0">
               <thead>
                  <tr>
                     
                     <th>SITE</th>
                     
                     <th>deviceid</th>
                     
                     <th>vehicle_no</th>
                     
                     <th>Trips</th>
                     
                     <th>TQTY</th>
                     
                     <th>Rate</th>
                     
                     <th>Income</th>
                     
                    
                  </tr>
               </thead>
            </table>
         </div>
          
       
         <script>
            var serverUrl="<?php echo URL; ?>";
            var data;
            var sensor;
            var  table_vehicleperformance = document.getElementById("table_vehicleperformance");
            var otable_vehicleperformance, displayTable=[], txt;
            var data = document.getElementById("date");
            
            $(document).ready(function(){
             otable_vehicleperformance  = $("#example_vehicleperformance").DataTable( {
               "paging":   false,
               "aLengthMenu": [
               ],
               dom: 'Bfrtip',
              buttons: [
                         'copyHtml5',
                         'excelHtml5',
                         'csvHtml5',
                         'pdfHtml5'
                       ],
               initComplete : function() {
                 $("#example_vehicleperformance_filter").detach().show();
                 $("#searchTxt_vehicleperformance").on("input", function(){
                   otable_vehicleperformance.search(this.value).draw();
                 });
                 UpdateInfo();
               },
               
             });
            });
            function UpdateInfo(){
             createTable();
            }
            
            function createTable(){
             var txt="";
             var tdName="", tdUserName="", tdEmail="", tdMobNo="";
             var tdView="", tdEdit="", tdDelete="";
             displayTable= [];
             var xhr = new XMLHttpRequest(), 
                 method = "GET",
                 overrideMimeType = "application/json",
                 url = ""+serverUrl+"master/vehiclePerfrormance?date="+date+";
             xhr.onreadystatechange = function () {
               if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                 if(xhr.responseText){
                   var data=JSON.parse(xhr.responseText);
             for(var i=0; i<data.length; i++){txt ='<tr style="height:20px;" role="row">';var SITE ='<td>'+data[i]["SITE"]+'</td>';var deviceid ='<td>'+data[i]["deviceid"]+'</td>';var vehicle_no ='<td>'+data[i]["vehicle_no"]+'</td>';var Trips ='<td>'+data[i]["Trips"]+'</td>';var TQTY ='<td>'+data[i]["TQTY"]+'</td>';var Rate ='<td>'+data[i]["Rate"]+'</td>';var Income ='<td>'+data[i]["Income"]+'</td>';txt = txt+SITE+deviceid+vehicle_no+Trips+TQTY+Rate+Income;
             txt =txt;
                     displayTable[i]= txt;
                   }
                   scrollPos = $("#example_vehicleperformance").scrollTop();
                   otable_vehicleperformance.clear().draw();
                   for( i = 0; i < displayTable.length; i++ ) {
                     otable_vehicleperformance.row.add($(displayTable[i]));
                   }
                   otable_vehicleperformance.draw();
                 }
               }
             };
             xhr.open(method, url, true);
             xhr.send();
            }
            
         </script>
         