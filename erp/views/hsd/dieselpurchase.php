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
//$("#lifetime").click(function(){
////alert("success");
//var to = "<?php echo date('Y-m-d'); ?>";
//var from = "<?php echo date('Y-m-d', strtotime('-90 day')); ?>";
//var divobj1 = document.getElementById('from');
//divobj1.value = from;
//var divobj2 = document.getElementById('to');
//divobj2.value = to;
//});
});
</script>
<div class="container-fluid" style="padding: 0px; margin-bottom: 20px;">
<div class="tab-content">
   <div id="home" class="tab-pane fade in active">
      <div class="white_div" style="">
         <div class="title_div">
            <span class="title_pra" style="font-size:18px;"><strong>Diesel Purchase</strong></span>
               <input type="button" id="btnPurchase"  class="btn btn-info pull-right" class="btn btn-info pull-right" style="width:10%; font-size:10px;" onclick="showPurchase()" value="Purchase"> 
                 </div>
         <br>
         <center> <input type="text" id="searchTxt" placeholder="Search"></center>
         <br>
          <center>
                       
       <button type="button" class="btn btn-primary" name="today" id="today">Today</button>
       <button type="button" class="btn btn-primary" name="yesterday" id="yesterday">Yesterday</button>
       <button type="button" class="btn btn-primary" name="week" id="week">Week</button>
       <button type="button" class="btn btn-primary" name="month" id="month">Month</button>
       
     
  </center>
         <div class="table-responsive" id="table">
            
            <table id="example" class="cell-border tdesign" width="100%" cellspacing="0">
               <thead>
   
                                                         <tr role="row" style="height:15px;" class="info">
                                                            <th>Sr No</th>
                                                             <th>Vehicle No</th>
                                                             <th>Purchase Date</th>
                                                             <th>Purchase Type</th>
                                                             <th>Pump Name</th>
                                                             <th>Diesel Ltr</th>
                                                             <th></th>
                                                             <th></th>
<!--
                                                             <th></th>
                                                             <th></th>
-->
                                                         </tr>
   
                                                                                              </thead>
                                                                                              
                                                                
                                                  </table>	
                                                  </div>
      
                 <div id="purchaseform" hidden>    
                <form>
                        
                      <div class="panel panel-primary" style="background:#f2f2f2">
                      <div class="panel-heading" align="center">Diesel Purchase</div>
                                              <div class="panel-body">  
                          
                          
                           <!-- --> <div id="response" class="col-xs-12 col-md-6 col-sm-6 col-lg-6 form-group">
                            <label class="control-label col-xs-12" for="SrNo"> Sr No :</label>
                            <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
                              <input type="text" class="form-control" name="SrNo" id="SrNo" placeholder="Enter Sr No" required readonly>
                                   
                            </div>
                              
                          </div>
                          
                          <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6 form-group">
                            <label class="control-label col-xs-12" for="DieselDates"><span style="color:red;">*</span> Select Purchase Date:</label>
                            <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
                              <input type="date" class="form-control" name="DieselDates" id="DieselDates" placeholder="Enter Purchase Date" value="" required>
                              
                            </div>
                               <div id="alertMsgTxt" style="color:red;"></div>    
                          
                          </div>
                                                   <input type="hidden" class="form-control" name="MonthYear" id="MonthYear" value="">
                          <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6 form-group">
                            <label class="control-label col-xs-12" for="PaymentType"> Select Purchase Type:</label>
                            <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
                            <label><input type="radio"  id="PaymentType" name="PaymentType"  value="Credit" /> Credit</label>
                            <label><input type="radio"  id="PaymentType" name="PaymentType"  value="Cash" /> Cash</label>
                                </div>
                           
                          </div>
                      
                          
                          <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6 form-group">
                            <label class="control-label col-xs-12" for="FuelPartyName"><span style="color:red;">*</span> Select Pump Name:</label>
                            <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6"> 
                       <select class="form-control" name="FuelPartyName" id="FuelPartyName" style="width:100%;">
                       <option value="0">Select Pump Name</option>
                       
                              </select>
                            </div>
                               <div id="alertMsgTxt1" style="color:red;"></div> 
                          </div>
                                  <!-- <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6 form-group">
                         

                          <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
                              <input id="ajaxVehicle" list="VehicleName" placeholder="Type Vehicle No">
                              <datalist id="VehicleName" data-theme="b" name="vehicles">
                                <option>Select Vehicle No </option> 
                              </datalist>
                            
                                  </div>
                        </div>                
-->
                        
                                                  <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6 form-group" style="display:block;">
                            <label class="control-label col-xs-12" for="VehicleNo"> Select Vehicle Number:</label>
                            <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6"><input type="checkbox" id="checkedVehicle" onclick="getvehicle()">
                       <select class="form-control" name="VehicleNo" id="VehicleNo" onchange="getDatas()" style="width:100%;">
                       <option value="0">Select Vehicle Number</option>
                       
                              </select>
                           
                            </div>
                          </div>
                                                  
                                                  
                          <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6 form-group">
                            <label class="control-label col-xs-12" for="ProductCode"><span style="color:red;">*</span> Select Item Name:</label>
                            <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6"> 
                       <select class="form-control" name="ProductCode" id="ProductCode" style="width:100%;">
                       <option value="0">Select Item Name</option>
                    
                              </select>
                            </div>
                               <div id="alertMsgTxt3" style="color:red;"></div> 
                          </div>
                      
                          
                          
                      </div>
                      </div>                   
                                           
                      <div class="panel panel-primary" style="background:#f2f2f2">
                      <div class="panel-heading" align="center">Diesel Purchase Details</div>
                                              <div class="panel-body">  
                          
                          
                           <div id="response" class="col-xs-12 col-md-6 col-sm-6 col-lg-6 form-group">
                            <label class="control-label col-xs-12" for="DieselLtr"><span style="color:red;">*</span> Diesel Ltr :</label>
                            <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
                              <input type="text" class="form-control" name="DieselLtr" id="DieselLtr" placeholder="Enter Diesel Ltr" onBlur="dieselamountCalc()">
                                
                            </div>
                              <div id="alertMsgTxt2" style="color:red;"></div>  
                          </div>
                          <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6 form-group">
                                <label class="control-label col-xs-12" for="fuelrate"> Set Fuel Rate:</label>
                                <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
                                  <input type="text" class="form-control" name="fuelrate" id="fuelrate" placeholder="Enter Fuel Rate" value="0" disabled>
                                  <!-- <div id="alertMsgTxt3" style="color:red;"></div>      -->
                                </div>
                               
                              </div>
                          
                          <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6 form-group">
                            <label class="control-label col-xs-12" for="DieselRate"><span style="color:red;">*</span> Diesel Rate:</label>
                            <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
                              <input type="text" class="form-control" name="DieselRate" id="DieselRate" placeholder="Enter Diesel Rate" onBlur="dieselamountCalc()">
                             
                            </div>
                           <div id="alertMsgTxt4" style="color:red;"></div>    
                          </div>
                          
                      
                                                  
                      <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6 form-group">
                            <label class="control-label col-xs-12" for="DieselAmt"> Diesel Amount:</label>
                            <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
                              <input class="form-control" name="DieselAmt" id="DieselAmt" placeholder="Diesel Amount" disabled>
                                 </div>
                            
                          </div>
                          
                           <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6 form-group">
                                <label class="control-label col-xs-12" for="ChallanNo">Challan Number:</label>
                                <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
                                  <input type="text" class="form-control" name="ChallanNo" id="ChallanNo" placeholder="Enter Challan No">
                                  <!-- <div id="alertMsgTxt3" style="color:red;"></div>      -->
                                </div>
                               
                              </div>
                            
                       
                      </div>
                      </div> 
                     <div class="panel panel-primary" style="background:#f2f2f2" id="readingDetails" hidden>
                      <div class="panel-heading" align="center">Diesel Purchase with Issue Details</div>
                                              <div class="panel-body"> 
                                                  
                                                   <input type="hidden" class="form-control" name="SrNo1" id="SrNo1" placeholder="Enter Sr No" >
           
                                                  <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6 form-group">
                            <label class="control-label col-xs-12" for="LastReading"><span style="color:red;">*</span> Previous Km:</label>
                            <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
                              <input type="text" class="form-control" name="LastReading" id="LastReading" placeholder="Previous Km" disabled>
                                 </div>
                              <div id="alertMsgTxt5" style="color:red;"></div>    
                          </div>
                                                  

                          <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6 form-group">
                                <label class="control-label col-xs-12" for="CurrentReading"><span style="color:red;">*</span> Current Km :</label>
                                <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
                                  <input type="text" class="form-control" name="CurrentReading" id="CurrentReading" placeholder="Enter Current Km" onBlur="kmCalculation()">     
                                 
                                </div>
                               <div id="alertMsgTxt5" style="color:red;"></div>
                              </div>

                          <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6 form-group">
                                <label class="control-label col-xs-12" for="RunningKM">Running Km :</label>
                                <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
                                  <input type="text" class="form-control" name="RunningKM" id="RunningKM" placeholder="Running Km"   disabled>
                                       
                                </div> 
                            </div>
                                                  <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6 form-group">
                            <label class="control-label col-xs-12" for="HSDConsumption"> HSD Consumption:</label>
                            <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
                              <input type="text" class="form-control" name="HSDConsumption" id="HSDConsumption" placeholder="HSD Consumption" onBlur="hsdCalculation()" disabled>
                                 </div>
                          </div>
                          
                          <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6 form-group">
                            <label class="control-label col-xs-12" for="AvgKm"> AvgKm:</label>
                            <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
                              <input type="text" class="form-control" name="AvgKm" id="AvgKm" placeholder="Avg km" disabled>
                                 </div>
                            
                          </div>
                         </div>
                    </div>
                             <input type="hidden" class="form-control" name="instock" id="instock">  
                            <input type="hidden" class="form-control" name="fuelrate1" id="fuelrate1"> 
                    <input type="hidden" class="form-control" name="DieselLtr1" id="DieselLtr1"> 
                    
                 
                            <input type="hidden" class="form-control" name="deviceid" id="deviceid">        
                      <div id="login">
                            <button style="background-color:rgb(31, 133, 187); color:white; width:200px;height:50px;" id="login" type="button" onclick="submitBtn()">Submit</button>
                           <button style="background-color:rgb(31, 133, 187); color:white; width:200px;height:50px;" id="continuebtn" type="button" onclick="continueBtn()">Submit & Continue</button>
                                    <button style="background-color:rgb(31, 133, 187); color:white; width:200px;height:50px;" id="cancelbtn" type="button" onclick="cancelBtn()">Cancel</button>
                    </div> 
                      <!-- <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6 form-group">
                            <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6" style="height:50px; width:100px">
                                      <button id="submit" style="background-color:rgb(13, 99, 179)" type="button" onclick="submit()">Submit</button>
                                      </div> 
                                    </div>                             -->
                                           
                            </form>    
      </div>
      
      
      
      <br>
     
<div id="viewform" hidden>
    <span style="font-size:14px;"><strong>View</strong></span>
                                                            
 <div class="table-responsive">  
<div class="col-md-12">

	                                                         <div class="panel-primary" >
                                                                                        <div class="panel-heading" align="center">Diesel Issue</div>
                                                                                                              <div class="panel-body">  
                                                                                          
                                                                                        <div class="col-xs-6 form-group">
                                                                                              <label class="control-label col-xs-4" for="SrNo">SrNo:</label>
                                                                                              <div class="col-xs-8" id="SrNo2">
                                                                                               
                                                                                                  </div>
                                                                                            </div>
                                                                                            
                                                                                          
                                                                                          <div class="col-xs-6 form-group">
                                                                                              <label class="control-label col-xs-4" for="DieselDates">Issue Date:</label>
                                                                                              <div class="col-xs-8" id="DieselDates1">
                                                                                              
                                                                                                  </div>
                                                                                            </div>
                                                                                          
                                                                                          <div class="col-xs-6 form-group">
                                                                                              <label class="control-label col-xs-4" for="PaymentType">Purchase Type:</label>
                                                                                              <div class="col-xs-8" id="PaymentType1">
                                                                                                
                                                                                                  </div>
                                                                                            </div>
                                                                                          
                                                                                          <div class="col-xs-6 form-group">
                                                                                              <label class="control-label col-xs-4" for="FuelPartyName">Fuel Party Name:</label>
                                                                                              <div class="col-xs-8" id="FuelPartyName1">
                                                                                                
                                                                                              </div>
                                                                                            </div>
                                                                                          <div class="col-xs-6 form-group">
                                                                                              <label class="control-label col-xs-4" for="ProductCode">Item Name:</label>
                                                                                              <div class="col-xs-8" id="ProductCode1">
                                                                                               
                                                                                                  </div>
                                                                                            </div>
                                                                                          <div class="col-xs-6 form-group">
                                                                                              <label class="control-label col-xs-4" for="VehicleNo">Vehicle No:</label>
                                                                                              <div class="col-xs-8" id="VehicleNo1">
                                                                                                
                                                                                                  </div>
                                                                                            </div>
                                                                                          <div class="col-xs-6 form-group">
                                                                                              <label class="control-label col-xs-4" for="DieselLtr">Diesel Ltr:</label>
                                                                                              <div class="col-xs-8" id="DieselLtr2">
                                                                                               
                                                                                                  </div>
                                                                                            </div>
                                                                                        
                                                                                            <div class="col-xs-6 form-group">
                                                                                              <label class="control-label col-xs-4" for="DieselRate">Diesel Rate:</label>
                                                                                              <div class="col-xs-8" id="DieselRate1">
                                                                                               
                                                                                                  </div>
                                                                                            </div>
                                                                                            <div class="col-xs-6 form-group">
                                                                                              <label class="control-label col-xs-4" for="DieselAmt">Diesel Amount:</label>
                                                                                              <div class="col-xs-8" id="DieselAmt1">
                                                                                               
                                                                                                  </div>
                                                                                            </div>
                                                                                            
                                                                                            <div class="col-xs-6 form-group">
                                                                                              <label class="control-label col-xs-4" for="ChallanNo">Challan No:</label>
                                                                                              <div class="col-xs-8" id="ChallanNo1">
                                                                                               
                                                                                                  </div>
                                                                                            </div>
                                                                                              </div>
                                                                                           
                                                                                              </div>
                                                                                    
                                                                                          
                                                                                        </div>
                                                                                        </div>
                                                                                            

                                                                  </div>     

      
      
      
      
                     </div>
                    </div>
    </div>
</div>
</body>

            <script>
               // alert("dffsa");
                 var purchaseform = document.getElementById("purchaseform");
                var back= document.getElementById("btnPurchase");
             var viewform = document.getElementById("viewform");
                var table =  document.getElementById("table");
                var VehicleNo, FuelPartyName, ProductCode, RunningKM;
                var HSDConsumption, AvgKm;
                 var otable, displayTable=[], txt;
            var VehicleArr=[];
          var issue = document.getElementById("issue");
            var serverUrl = "<?php echo URL; ?>";
var d= new Date();
var year = d.getFullYear();
var month = d.getMonth()+1;
if(month.toString.length=1){
    month="0"+month;
}else{
    month= month;
}
var date= month+"-"+year;
document.getElementById("MonthYear").value= date;               //alert(date);
 var purchasedate="<?php echo date('Y-m-d'); ?>";  
    document.getElementById("DieselDates").value= purchasedate;  
                
var xhr12 = new XMLHttpRequest(), 
method = 'GET',
overrideMimeType = 'application/json',
url =   ''+serverUrl+'master/vehiclemaster_details';

    // ADD THE URL OF THE FILE.
//alert(url);
xhr12.onreadystatechange = function () {
//alert("request");
if (xhr12.readyState === XMLHttpRequest.DONE && xhr12.status === 200) {
 //alert(xhr12.responseText);   
var data = JSON.parse(xhr12.responseText);
VehicleNo = document.getElementById("VehicleNo");
for(var i=0; i<data.length; i++){
    
    VehicleNo.innerHTML = VehicleNo.innerHTML +
         // '<option value="' + data[i]['SensorSerial'] + '">' + data[i]['VehicleNo'] + '</option>';
     '<option value="' + data[i]['SensorSerial'] + '" data-id="'+data[i]['SensorSerial']+'">' + data[i]['VehicleNo'] + '</option>';
   VehicleArr[data[i]['SensorSerial']]=data[i]['VehicleNo'];
//     vehicleno.innerHTML = vehicleno.innerHTML +
//          '<option value="' + data[i]['VehicleNo'] + '">' + data[i]['VehicleNo'] + '</option>';
}
 
}
};

xhr12.open(method, url, true);
xhr12.send(); 
                
 
function getDatas(){
    var deviceid=document.getElementById("VehicleNo").value;
    //alert(deviceid)
   var xhr9 = new XMLHttpRequest(), 
method = 'GET',
overrideMimeType = 'application/json',
url1 =   ''+serverUrl+'hsd/getLastDieselpurchase?deviceid='+deviceid+'';
   
   // add_dieselissue
   // alert(url1);

   
xhr9.onreadystatechange = function () {
//alert("request");
if (xhr9.readyState === XMLHttpRequest.DONE && xhr9.status === 200) {
    //alert(xhr9.responseText);
    var data = JSON.parse(xhr9.responseText);
   document.getElementById("instock").value=data[0]['instock'];
  //  alert(data[0]['AvgRate']);
    document.getElementById("fuelrate1").value = data[0]['AvgRate'];
        document.getElementById("DieselLtr1").value = data[0]['DieselLtr'];

 
}
};

xhr9.open(method, url1, true);
xhr9.send(); 
 var xhr3 = new XMLHttpRequest(), 
method = 'GET',
overrideMimeType = 'application/json',
url =   ''+serverUrl+'hsd/getlastdieselissue?deviceid='+deviceid+'';
xhr3.onreadystatechange = function () {
//alert("request");
if (xhr3.readyState === XMLHttpRequest.DONE && xhr3.status === 200) {
 document.getElementById("LastReading").disabled = true;
var data = JSON.parse(xhr3.responseText);
if(data != ""){
document.getElementById("LastReading").value =data[0]['CurrentReading'];
document.getElementById("issue").value = data[0]['issue'];
    document.getElementById("CurrentReading").value = "";
    document.getElementById("LastReading").disabled = true;

}else{
 // alert("gjh")
document.getElementById("LastReading").value = 0;
document.getElementById("CurrentReading").value = "";
     document.getElementById("LastReading").disabled = false;

}
}
};

xhr3.open(method, url, true);
xhr3.send();        
    
}
                
                
 function getvehicle() {  
    //alert(document.getElementById("checkedVehicle").checked);
    var che = document.getElementById("checkedVehicle").checked;
 if(che){              
var xhr1 = new XMLHttpRequest(), 
method = 'GET',
overrideMimeType = 'application/json',
url =   ''+serverUrl+'master/vehiclemaster_details';

    // ADD THE URL OF THE FILE.
//alert(url);
xhr1.onreadystatechange = function () {
//alert("request");
if (xhr1.readyState === XMLHttpRequest.DONE && xhr1.status === 200) {
//  alert(xhr2.responseText);   
var data = JSON.parse(xhr1.responseText);
VehicleNo = document.getElementById("VehicleNo");
for(var i=0; i<data.length; i++){
    VehicleNo.innerHTML = VehicleNo.innerHTML +
          '<option value="' + data[i]['SensorSerial'] + '">' + data[i]['VehicleNo'] + '</option>';
   VehicleArr[data[i]['SensorSerial']]=data[i]['VehicleNo'];
//     vehicleno.innerHTML = vehicleno.innerHTML +
//          '<option value="' + data[i]['VehicleNo'] + '">' + data[i]['VehicleNo'] + '</option>';
}
 
}
};

xhr1.open(method, url, true);
xhr1.send();  
document.getElementById("readingDetails").style.display="block";
     document.getElementById("VehicleNo").innerHTML = 0;
 }
    else {
        var xhr1 = new XMLHttpRequest(), 
method = 'GET',
overrideMimeType = 'application/json',
url =   ''+serverUrl+'hsd/gettanker';
        xhr1.onreadystatechange = function () {
//alert("request");
if (xhr1.readyState === XMLHttpRequest.DONE && xhr1.status === 200) {
//  alert(xhr2.responseText);   
var data = JSON.parse(xhr1.responseText);
VehicleNo = document.getElementById("VehicleNo");
for(var i=0; i<data.length; i++){
    VehicleNo.innerHTML = VehicleNo.innerHTML +
          '<option value="' + data[i]['SensorSerial'] + '">' + data[i]['VehicleNo'] + '</option>';
   //VehicleArr[data[i]['SensorSerial']]=data[i]['VehicleNo'];
//     vehicleno.innerHTML = vehicleno.innerHTML +
//          '<option value="' + data[i]['VehicleNo'] + '">' + data[i]['VehicleNo'] + '</option>';
}
 
}
};

xhr1.open(method, url, true);
xhr1.send(); 
        
        document.getElementById("VehicleNo").innerHTML = 0;
        //document.getElementById("VehicleNo").options.length = 1;
      document.getElementById("VehicleNo").value=0;
//        getDetails();
     document.getElementById("readingDetails").style.display="none";
        
       var xhr11 = new XMLHttpRequest(),
                   method = 'GET',        
          overrideMimeType = 'application/json',  
         url1 =  serverUrl+'hsd/getLastissuesrno';  
                      // ADD THE URL OF THE FILE.    
           // alert(url);      
            xhr11.onreadystatechange = function () {    
                                       if (xhr11.readyState === XMLHttpRequest.DONE && xhr11.status === 200) {    
                // alert(xhr.responseText);    
               var data=JSON.parse(xhr11.responseText);
                            if(data != ""){          
                     var temp = data[0]['SrNo'];
                     var data1=temp.split("-");
              var srno = +data1[1] + 1;    
                if(srno.toString().length < 7){  
                   var data = srno.toString().length;    
                 var zero = 7 - +data;      
               for(var i=0; i<zero; i++){      
                 srno ="0"+srno;        
             }          
                        }
           srno = data1[0]+"-"+srno;     
                              //  alert(srno);
      document.getElementById("SrNo1").value = srno;    
               }                    else{        
             document.getElementById("SrNo1").value = "VDP-0017285";      
             }            
                           }                   },    
               xhr11.open(method, url1, true);
                 xhr11.send();
          
 }

}               
                
                
  function showPurchase(){
      if(back.value=="Purchase"){
          table.style.display = "none";
           purchaseform.style.display = "block";
          viewform.style.display = "none";
          back.value = "Back";
          getDetails();
      }else{
          
         table.style.display = "block"; 
           purchaseform.style.display = "none";
          viewform.style.display = "none";
          back.value = "Purchase";
      }
    
    // issue.value = "Issue";
    var PaymentType= document.getElementsByName("PaymentType");
      
     for(var j=0; j<PaymentType.length; j++){
       PaymentType[j].checked = false;
       }
        document.getElementById("FuelPartyName").value = 0;
        document.getElementById("ProductCode").value = 0;
        document.getElementById("DieselLtr").value = "";
        document.getElementById("DieselAmt").value = "";
        document.getElementById("DieselRate").value = "";
        document.getElementById("LastReading").value ="";
        document.getElementById("CurrentReading").value = "";
        document.getElementById("RunningKM").value = "";
       document.getElementById("OldHSDBalance").value = "";
        document.getElementById("ClosedHSDBalance").value="";
       document.getElementById("HSDConsumption").value = "";
       document.getElementById("AvgKm").value = "";
       document.getElementById("ChallanNo").value = "";
  
}                
                
                
var xhr = new XMLHttpRequest(), 
method = 'GET',
overrideMimeType = 'application/json',
url =   ''+serverUrl+'hsd/dieselDetails';

    // ADD THE URL OF THE FILE.
//alert(url);
xhr.onreadystatechange = function () {
//alert("request");
if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
//  alert(xhr2.responseText);   
var data = JSON.parse(xhr.responseText);
FuelPartyName = document.getElementById("FuelPartyName");
//ProductCode = document.getElementById("ProductCode");
for(var i=0; i<data.length; i++){
FuelPartyName.innerHTML = FuelPartyName.innerHTML +
          '<option value="' + data[i]['FuelStation']  + '">' + data[i]['FuelStation'] + '</option>';

//          ProductCode.innerHTML = ProductCode.innerHTML +
//          '<option value="' + data[i]['ProductName'] + '">' + data[i]['ProductName'] + '</option>';          
   //GroupArr[data[i]['id']]=data[i]['name'];
}
 
}
};

xhr.open(method, url, true);
xhr.send();  

var xhr5 = new XMLHttpRequest(), 
method = 'GET',
overrideMimeType = 'application/json',
url =   ''+serverUrl+'hsd/itemDetails';

xhr5.onreadystatechange = function () {
//alert("request");
if (xhr5.readyState === XMLHttpRequest.DONE && xhr5.status === 200) {
//  alert(xhr2.responseText);   
var data = JSON.parse(xhr5.responseText);
ProductCode = document.getElementById("ProductCode");
for(var i=0; i<data.length; i++){
    ProductCode.innerHTML = ProductCode.innerHTML +
    '<option value="' + data[i]['ProductCode'] + '">' + data[i]['ProductName'] + '</option>';          
   
}
 
}
};

xhr5.open(method, url, true);
xhr5.send();  




       
           function dieselamountCalc(){
               var DieselLtr = document.getElementById("DieselLtr").value;
               var DieselRate = document.getElementById("DieselRate").value;
            document.getElementById("HSDConsumption").value=DieselLtr;
            if(DieselLtr.trim() != "" && DieselRate.trim() != ""){
                var DieselAmt = +DieselLtr * +DieselRate;
                DieselAmt=DieselAmt.toFixed(2);
                //alert(dieselamount);
                document.getElementById("DieselAmt").value = DieselAmt;
                
            }
           }  
         //  var runningkm;

          function kmCalculation(){
            var LastReading= document.getElementById("LastReading").value;
           var CurrentReading= document.getElementById("CurrentReading").value;
       var RunningKM = document.getElementById("RunningKM").value;
        var HSDConsumption = document.getElementById("HSDConsumption").value;
  //  = document.getElementById("runningkm").value;
   // alert(previouskm);
    //alert(currentkm);
   if(LastReading != "" && CurrentReading != ""){

       RunningKM = (+CurrentReading - +LastReading);
      // alert(runningkm);
       document.getElementById("RunningKM").value = RunningKM;
       AvgKm = +RunningKM / +HSDConsumption ; 
       AvgKm = AvgKm.toFixed(2);
            //alert(avgkm);
            document.getElementById("AvgKm").value=AvgKm;
       
     }
          } 
     function issueCalculation(){
      var DieselLtr = document.getElementById("DieselLtr").value;
      var RunningKM = document.getElementById("RunningKM").value;
      var DieselRate = document.getElementById("DieselRate").value;
      var instock = document.getElementById("instock").value;
      //var dieselamount = document.getElementById("dieselamount").value;
      
      if(DieselLtr != ""){
      document.getElementById("HSDConsumption").value = DieselLtr;
      var DieselAmt = +DieselRate * +DieselLtr;
          DieselAmt = DieselAmt.toFixed(2);
      document.getElementById("DieselAmt").value = DieselAmt;
      var finalinstock = +instock - +DieselLtr;
      //document.getElementById("instock").value = finalinstock;


    
      }

     } 
     function avgCalculation() {
       var AvgKm;
       var HSDConsumption = document.getElementById("HSDConsumption").value;
      // alert(Consumption)
       var RunningKM = document.getElementById("RunningKM").value;
   
       if(HSDConsumption != "" && RunningKM != ""){
            AvgKm = (+RunningKM / +HSDConsumption) ; 
           // alert(avgkm);
            document.getElementById("AvgKm").value=AvgKm;
       }
     } 

    function submitBtn(){
        var AvgRate;
        //alert("123");
        //var vehicleno = document.getElementById("VehicleNo").value;
       // alert(vehicleno)
        var SrNo = document.getElementById("SrNo").value;
       var SrNo1= document.getElementById("SrNo1").value;
        var DieselDates = document.getElementById("DieselDates").value;
        //alert(DieselDates)
        var MonthYear= document.getElementById("MonthYear").value;
      //  alert(MonthYear);
        var PaymentType =$("input:radio[name=PaymentType]:checked").val();
        //alert(PaymentType)
        var FuelPartyName = document.getElementById("FuelPartyName").value;
        //alert(FuelPartyName)
        var VehicleNo = document.getElementById("VehicleNo").value;
        //alert(VehicleNo)
        var ProductCode = document.getElementById("ProductCode").value;
        //alert(ProductCode)
        var DieselLtr = document.getElementById("DieselLtr").value;
        //alert(DieselLtr)
        var fuelrate = document.getElementById("fuelrate").value;
        
         var DieselRate = document.getElementById("DieselRate").value;
        var instock1= document.getElementById("instock").value;
        var DieselLtr1= document.getElementById("DieselLtr1").value;
        
        var fuelrate1= document.getElementById("fuelrate1").value;
      //  alert(fuelrate1);
        if(fuelrate1 != ""){
       var AvgRate1 = ((+DieselLtr1 * +fuelrate1));
          var AvgRate2 =  (+DieselLtr * +DieselRate );
             AvgRate = +AvgRate1 + +AvgRate2
         var total = +DieselLtr1 + +DieselLtr ; 
            AvgRate = +AvgRate / total;
            AvgRate = AvgRate.toFixed(2);
           // alert("dsaf"+AvgRate)
            ///(+instock1 + +DieselLtr)
        }else{
            AvgRate = DieselRate;
        }
       
        var DieselAmt = document.getElementById("DieselAmt").value;
        var LastReading = document.getElementById("LastReading").value;
      // alert(LastReading)
  var CurrentReading = document.getElementById("CurrentReading").value;
   //alert(CurrentReading)
  var RunningKM = document.getElementById("RunningKM").value;
       // alert(RunningKM)
 var HSDConsumption = document.getElementById("HSDConsumption").value;
//alert(HSDConsumption)
  var AvgKm = document.getElementById("AvgKm").value;
        //alert(DieselAmt)
       
      var deviceid = VehicleNo;
        document.getElementById("deviceid").value = deviceid;
      //  alert(deviceid);
        var ChallanNo = document.getElementById("ChallanNo").value;
        //alert(ChallanNo)
        var instock= document.getElementById("instock").value;
            //  alert(instock);
         instock = +instock1 + +DieselLtr;
        
        var issueinstock = +instock1 + +DieselLtr;
       // alert(ProductCode);
        var DieselSource = deviceid;
          var che = document.getElementById("checkedVehicle").checked;
  
       // alert(instock);
        if(DieselLtr.trim() != "" && DieselRate.trim() != "" && FuelPartyName != 0 && ProductCode != 0){
         var xhr2 = new XMLHttpRequest(), 
method = 'GET',
overrideMimeType = 'application/json',

             
url =   ''+serverUrl+'hsd/add_dieselpurchase?SrNo='+SrNo+'&VehicleNo='+VehicleArr[VehicleNo]+'&deviceid='+deviceid+'&DieselDates='+DieselDates+'&PaymentType='+PaymentType+'&FuelPartyName='+FuelPartyName+'&ProductCode='+ProductCode+'&DieselLtr='+DieselLtr+'&fuelrate='+fuelrate+'&DieselAmt='+DieselAmt+'&DieselRate='+DieselRate+'&MonthYear='+MonthYear+'&ChallanNo='+ChallanNo+'&instock='+instock+'&AvgRate='+AvgRate+'';   
        //console.log(VehicleArr.serialize);
//alert(url)

    // ADD THE URL OF THE FILE.
//alert(url);
xhr2.onreadystatechange = function () {
//alert("request");
if (xhr2.readyState === XMLHttpRequest.DONE && xhr2.status === 200) {
  //alert(xhr2.responseText);   
//var data = JSON.parse(xhr2.responseText);
//window.location.href = diesel_purchase.html
    
    
      //----------------------------------------
            
            if(che){
               var xhr10 = new XMLHttpRequest(), 
                  method = 'GET',
                  overrideMimeType = 'application/json',
//                  
//                  url =  ''+serverUrl+'hsd/add_dieselissue?VehicleNo='+VehicleNo+'&DieselDates='+issuedate+'&instock='+instock1+'&DieslLtr='+issuequantity+'&DieselRate='+fuelperltr+'&DieselAmt='+dieselamount+'&deviceid='+deviceid+'&LastReading='+previouskm+'&CurrentReading='+currentkm+'&RunningKM='+runningkm+'&&HSDConsumption='+hsdconsumption+'&AvgKm='+average+'';
                      url1 =   ''+serverUrl+'hsd/add_dieselissue?SrNo='+SrNo1+'&VehicleNo='+VehicleArr[VehicleNo]+'&DieselSource='+DieselSource+'&DieselDates='+DieselDates+'&instock='+issueinstock+'&DieselRate='+DieselRate+'&DieselLtr='+DieselLtr+'&DieselAmt='+DieselAmt+'&deviceid='+deviceid+'&LastReading='+LastReading+'&CurrentReading='+CurrentReading+'&RunningKM='+RunningKM+'&HSDConsumption='+HSDConsumption+'&AvgKm='+AvgKm+'';
                        // ADD THE URL OF THE FILE.
                //alert(url1);
                  xhr10.onreadystatechange = function () {
                          
                  if (xhr10.readyState === XMLHttpRequest.DONE && xhr10.status === 200) {
                    
                  }
                  },
                  xhr10.open(method, url1, true);
                   xhr10.send();
            }
          
            //----------------------------------------
    
    createTable();
    back.value="Purchase";
    
//document.getElementById("VehicleNo").value = 0;
//getDetails();
  table.style.display="block";
   purchaseform.style.display="none"; 
 document.getElementById("VehicleNo").value = 0;
}
};

xhr2.open(method, url, true);
xhr2.send(); 
if (CurrentReading != null) {
        notifyMe ="success";
		$.ajax({
url: "<?php echo URL; ?>vts/totaldistance",
type: "GET",
data: {
deviceid : deviceid,
totalDistance : CurrentReading
},
dataType: "html",
success: function(myData) {
$.notify("Total Distance updated to "+CurrentReading+" KM", notifyMe);
		//alert("Total Distance updated to "+distance+" KM");
	  	
	}	
	
	
});

		
    }
      
            
            
//$("#alertMsgTxt").text("");
$("#alertMsgTxt1").text("");
$("#alertMsgTxt2").text("");
$("#alertMsgTxt3").text("");
$("#alertMsgTxt4").text("");
$("#alertMsgTxt5").text("");

} else{
    
//  if(DieselDates.trim() == ""){
//   // alert("!")
//    $("#alertMsgTxt").text("Please Enter Prchase Date!");
//  }else{
//    $("#alertMsgTxt").text("");
//  }
  if(FuelPartyName == 0){
    $("#alertMsgTxt1").text("Please Enter Fuel Station Name!");
  }else{
    $("#alertMsgTxt1").text("");
  }
  if(DieselLtr.trim() == ""){
    $("#alertMsgTxt2").text("Please Enter Diesel Ltr!");
  }else{
    $("#alertMsgTxt2").text("");
  }
   if(ProductCode == 0){
     $("#alertMsgTxt3").text("Please Enter Item Name!");
   }else{
     $("#alertMsgTxt3").text("");
   }
  if(DieselRate.trim() == ""){
    $("#alertMsgTxt4").text("Please Enter Diesel Rate!");
  }else{
    $("#alertMsgTxt4").text("");
  }
 if(LastReading == 0){
    $("#alertMsgTxt5").text("Please Enter Previous Oddometer Reading!");
  }else{
    $("#alertMsgTxt5").text("");
  }
 
   //-----------------------------
}
        
    }
        function continueBtn(){
        var AvgRate;
        //alert("123");
        //var vehicleno = document.getElementById("VehicleNo").value;
       // alert(vehicleno)
        var SrNo = document.getElementById("SrNo").value;
       var SrNo1= document.getElementById("SrNo1").value;
        var DieselDates = document.getElementById("DieselDates").value;
        //alert(DieselDates)
        var MonthYear= document.getElementById("MonthYear").value;
      //  alert(MonthYear);
        var PaymentType =$("input:radio[name=PaymentType]:checked").val();
        //alert(PaymentType)
        var FuelPartyName = document.getElementById("FuelPartyName").value;
        //alert(FuelPartyName)
        var VehicleNo = document.getElementById("VehicleNo").value;
        //alert(VehicleNo)
        var ProductCode = document.getElementById("ProductCode").value;
        //alert(ProductCode)
        var DieselLtr = document.getElementById("DieselLtr").value;
        //alert(DieselLtr)
        var fuelrate = document.getElementById("fuelrate").value;
        
         var DieselRate = document.getElementById("DieselRate").value;
        var instock1= document.getElementById("instock").value;
        var DieselLtr1= document.getElementById("DieselLtr1").value;
        
        var fuelrate1= document.getElementById("fuelrate1").value;
      //  alert(fuelrate1);
        if(fuelrate1 != ""){
       var AvgRate1 = ((+DieselLtr1 * +fuelrate1));
          var AvgRate2 =  (+DieselLtr * +DieselRate );
             AvgRate = +AvgRate1 + +AvgRate2
         var total = +DieselLtr1 + +DieselLtr ; 
            AvgRate = +AvgRate / total;
            AvgRate = AvgRate.toFixed(2);
           // alert("dsaf"+AvgRate)
            ///(+instock1 + +DieselLtr)
        }else{
            AvgRate = DieselRate;
        }
       
        var DieselAmt = document.getElementById("DieselAmt").value;
        var LastReading = document.getElementById("LastReading").value;
      // alert(LastReading)
  var CurrentReading = document.getElementById("CurrentReading").value;
   //alert(CurrentReading)
  var RunningKM = document.getElementById("RunningKM").value;
       // alert(RunningKM)
 var HSDConsumption = document.getElementById("HSDConsumption").value;
//alert(HSDConsumption)
  var AvgKm = document.getElementById("AvgKm").value;
        //alert(DieselAmt)
       
      var deviceid = VehicleNo;
        document.getElementById("deviceid").value = deviceid;
      //  alert(deviceid);
        var ChallanNo = document.getElementById("ChallanNo").value;
        //alert(ChallanNo)
        var instock= document.getElementById("instock").value;
            //  alert(instock);
         instock = +instock1 + +DieselLtr;
        
        var issueinstock = +instock1 + +DieselLtr;
       // alert(ProductCode);
        var DieselSource = deviceid;
          var che = document.getElementById("checkedVehicle").checked;
  
       // alert(instock);
        if(DieselLtr.trim() != "" && DieselRate.trim() != "" && FuelPartyName != 0 && ProductCode != 0){
         var xhr2 = new XMLHttpRequest(), 
method = 'GET',
overrideMimeType = 'application/json',

             
url =   ''+serverUrl+'hsd/add_dieselpurchase?SrNo='+SrNo+'&VehicleNo='+VehicleNo+'&deviceid='+deviceid+'&DieselDates='+DieselDates+'&PaymentType='+PaymentType+'&FuelPartyName='+FuelPartyName+'&ProductCode='+ProductCode+'&DieselLtr='+DieselLtr+'&fuelrate='+fuelrate+'&DieselAmt='+DieselAmt+'&DieselRate='+DieselRate+'&ChallanNo='+ChallanNo+'&instock='+instock+'&AvgRate='+AvgRate+'';             
alert(url)

    // ADD THE URL OF THE FILE.
//alert(url);
xhr2.onreadystatechange = function () {
//alert("request");
if (xhr2.readyState === XMLHttpRequest.DONE && xhr2.status === 200) {
  //alert(xhr2.responseText);   
//var data = JSON.parse(xhr2.responseText);
//window.location.href = diesel_purchase.html
    
    
      //----------------------------------------
            
            if(che){
               var xhr10 = new XMLHttpRequest(), 
                  method = 'GET',
                  overrideMimeType = 'application/json',
//                  
//                  url =  ''+serverUrl+'hsd/add_dieselissue?VehicleNo='+VehicleNo+'&DieselDates='+issuedate+'&instock='+instock1+'&DieslLtr='+issuequantity+'&DieselRate='+fuelperltr+'&DieselAmt='+dieselamount+'&deviceid='+deviceid+'&LastReading='+previouskm+'&CurrentReading='+currentkm+'&RunningKM='+runningkm+'&&HSDConsumption='+hsdconsumption+'&AvgKm='+average+'';
                      url1 =   ''+serverUrl+'hsd/add_dieselissue?SrNo='+SrNo1+'&VehicleNo='+VehicleNo+'&DieselSource='+DieselSource+'&DieselDates='+DieselDates+'&instock='+issueinstock+'&DieselRate='+DieselRate+'&DieselLtr='+DieselLtr+'&DieselAmt='+DieselAmt+'&deviceid='+deviceid+'&LastReading='+LastReading+'&CurrentReading='+CurrentReading+'&RunningKM='+RunningKM+'&HSDConsumption='+HSDConsumption+'&AvgKm='+AvgKm+'&MonthYear='+MonthYear+'';
                        // ADD THE URL OF THE FILE.
                //alert(url1);
                  xhr10.onreadystatechange = function () {
                          
                  if (xhr10.readyState === XMLHttpRequest.DONE && xhr10.status === 200) {
                    
                  }
                  },
                  xhr10.open(method, url1, true);
                   xhr10.send();
            }
            
            //----------------------------------------
    
    createTable();
    back.value="Back";
    
//document.getElementById("VehicleNo").value = 0;
//submitBtn();
  table.style.display="none";
   purchaseform.style.display="block"; 
 document.getElementById("VehicleNo").value = 0;
}
};

xhr2.open(method, url, true);
xhr2.send(); 

          
  if (CurrentReading != null) {
        notifyMe ="success";
		$.ajax({
url: "<?php echo URL; ?>vts/totaldistance",
type: "GET",
data: {
deviceid : deviceid,
totalDistance : CurrentReading
},
dataType: "html",
success: function(myData) {
$.notify("Total Distance updated to "+CurrentReading+" KM", notifyMe);
		//alert("Total Distance updated to "+distance+" KM");
	  	
	}	
	
	
});

		
    }          
            
//$("#alertMsgTxt").text("");
$("#alertMsgTxt1").text("");
$("#alertMsgTxt2").text("");
$("#alertMsgTxt3").text("");
$("#alertMsgTxt4").text("");
$("#alertMsgTxt5").text("");

} else{
    
//  if(DieselDates.trim() == ""){
//   // alert("!")
//    $("#alertMsgTxt").text("Please Enter Prchase Date!");
//  }else{
//    $("#alertMsgTxt").text("");
//  }
  if(FuelPartyName == 0){
    $("#alertMsgTxt1").text("Please Enter Fuel Station Name!");
  }else{
    $("#alertMsgTxt1").text("");
  }
  if(DieselLtr.trim() == ""){
    $("#alertMsgTxt2").text("Please Enter Diesel Ltr!");
  }else{
    $("#alertMsgTxt2").text("");
  }
   if(ProductCode == 0){
     $("#alertMsgTxt3").text("Please Enter Item Name!");
   }else{
     $("#alertMsgTxt3").text("");
   }
  if(DieselRate.trim() == ""){
    $("#alertMsgTxt4").text("Please Enter Diesel Rate!");
  }else{
    $("#alertMsgTxt4").text("");
  }
 if(LastReading.trim() == 0){
    $("#alertMsgTxt5").text("Please Enter Previous Oddometer Reading!");
  }else{
    $("#alertMsgTxt5").text("");
  }
   //-----------------------------
}
        
    }
 function cancelBtn(){
                       
                     createTable();
                      table.style.display="block";
                        purchaseform.style.display="none"; 
                        viewform.style.display="none";
                      back.value = "Purchase";  
                   }
                 
    
    function getDetails(){
     var xhr6 = new XMLHttpRequest(),
                   method = 'GET',        
          overrideMimeType = 'application/json',  
         url =  serverUrl+'hsd/getLastpurchasesrno';  
                      // ADD THE URL OF THE FILE.    
           // alert(url);      
            xhr6.onreadystatechange = function () {    
                                       if (xhr6.readyState === XMLHttpRequest.DONE && xhr6.status === 200) {    
                // alert(xhr.responseText);    
               var data=JSON.parse(xhr6.responseText);
                            if(data != ""){          
            var temp = data[0]['SrNo'];
                     var data1=temp.split("-");
              var srno = +data1[1] + 1;    
                if(srno.toString().length < 7){  
                   var data = srno.toString().length;    
                 var zero = 7 - +data;      
               for(var i=0; i<zero; i++){      
                 srno ="0"+srno;        
             }          
                        }
           srno = data1[0]+"-"+srno;                  
      document.getElementById("SrNo").value = srno;    
               }                    else{        
             document.getElementById("SrNo").value = "VDP-0000001";      
             }            
                           }                   },    
               xhr6.open(method, url, true);
                 xhr6.send();
      var VehicleNo = document.getElementById("VehicleNo").value;
             
     // if(VehicleNo != 0){
  
 //alert(VehicleNo)
//        document.getElementById("DieselDates").value = "";
        var PaymentType= document.getElementsByName("PaymentType");
       // alert(PaymentType.length)
         
     for(var j=0; j<PaymentType.length; j++){
  //if(workingstatus[j].value == data[0]['WorkingStatusYN']){

       PaymentType[j].checked = false;
       }
        // alert("diaos")
      //  $("input:radio[name=PaymentType]:checked").val() = "";
           document.getElementById("SrNo").value = "";
           //document.getElementById("DieselDates").value = "";
        document.getElementById("FuelPartyName").value = 0;
         // alert("fj");
      document.getElementById("VehicleNo").value = 0;
        document.getElementById("ProductCode").value = 0;
        document.getElementById("DieselLtr").value = "";
      //  document.getElementById("fuelrate").value = "";
        document.getElementById("DieselAmt").value = "";
        document.getElementById("DieselRate").value = "";
          document.getElementById("ChallanNo").value = "";
        

      }
                
    function getIssueDetails(){
         
        //alert("sdfj")
        var vehicleno = document.getElementById("vehicleno").value; 
       // alert(vehicleno);
          if(VehicleNo != 0){
             // alert(vehicleno);
           //  document.getElementById("vehicleno").value = "";
        document.getElementById("issuedate").value = "";
             // alert("gj");
        document.getElementById("instock").value = "";
        document.getElementById("fuelperltr").value = "";
              // alert("gj");
        document.getElementById("issuequantity").value = "";
             // alert("gj");
        document.getElementById("dieselamount").value = "";
              //alert("gj")
       var xhr7 = new XMLHttpRequest(), 
method = 'GET',
overrideMimeType = 'application/json',

url =   ''+serverUrl+'hsd/getlastdieselpurchase?VehicleNo='+vehicleno+'';
//alert(url);

    // ADD THE URL OF THE FILE.
//alert(url);
xhr7.onreadystatechange = function () {
//alert("request");
if (xhr7.readyState === XMLHttpRequest.DONE && xhr7.status === 200) {
 //alert(xhr7.responseText);   
//var data = JSON.parse(xhr2.responseText);
//window.location.href = diesel_purchase.html
    var data = JSON.parse(xhr7.responseText);
    if(data != "" ){
        document.getElementById("fuelperltr").value=data[0]['DieselRate'];
        
        if(data[0]['instock'] != null){
            document.getElementById("instock").value=data[0]['instock'];
        }else{
             document.getElementById("instock").value=0;
        }
        
    }
    else{
       document.getElementById("fuelperltr").value=0;
       document.getElementById("instock").value=0;
    }

//ProductCode = document.getElementById("ProductCode");

}
};

xhr7.open(method, url, true);
xhr7.send(); 
       
          }else{
             document.getElementById("vehicleno").value = 0;
        document.getElementById("issuedate").value = 0;
        document.getElementById("instock").value = 0;
        document.getElementById("fuelperltr").value = 0;
        document.getElementById("issuequantity").value = 0;
        document.getElementById("issuedieselamount").value = 0; 
              
          }
        
    }
    

                
                
function createTable(){
    var txt='';
    var tdSrNo="", tdPurchaseDate="", tdPurchaseType="", tdPumpName="", tdDieselLtr="";
    //var tdChesisNo="", tdOwner="", tdFitness="", tdInsurance="", tdPermit="", tdRoadTax="", tdPollution="", tdView="", tdEdit="", tdDelete="";
  displayTable= [];
    var xhr8 = new XMLHttpRequest(), 
        method = 'GET',
        overrideMimeType = 'application/json',
        url = ''+serverUrl+'hsd/getalldieselpurchase'; 
              // ADD THE URL OF THE FILE.
//alert(url);
    xhr8.onreadystatechange = function () {
        if (xhr8.readyState === XMLHttpRequest.DONE && xhr8.status === 200) {
                
            // PARSE JSON DATA.
            if(xhr8.responseText){

              // alert(xhr.responseText);
               var data=JSON.parse(xhr8.responseText);
               // alert(data);
               for(var i=0; i<data.length; i++){
                
        
          tdSrNo= '<tr style="height:20px;" role="row"><td>'+data[i]['SrNo']+'</td>';
          tdVehicleNo = '<td>'+data[i]['VehicleNo']+'</td>';
          tdPurchaseDate = '<td>'+data[i]['DieselDates']+'</td>';
          tdPurchaseType='<td>'+data[i]['PaymentType']+'</td>';
          tdPumpName='<td>'+data[i]['FuelPartyName']+'</td>';
          tdDieselLtr='<td>'+data[i]['DieselLtr']+'</td>';
          
          tdView='<td><a href="#a" onclick="javascript: view('+data[i]['id']+',1)"> VIEW</a></td>';
//          tdEdit='<td><a href="#a" onclick="javascript: view('+data[i]['id']+', 2)"> EDIT</button></td>';
          tdDelete='<td id="deleteClick"><a href="#a" onclick="javascript:confirmDelete('+data[i]['id']+');" id="delete"> DELETE</a></td></tr>';
          // <a href="javascript:confirmDelete("192.168.1.2/vehiclemaster/?id='+data[i]['id']+'")">
         
          txt = tdSrNo+tdVehicleNo+tdPurchaseDate+tdPurchaseType+tdPumpName+tdDieselLtr+tdView+tdDelete;
          displayTable[i]= txt;
         }
             
          scrollPos = $("#example").scrollTop();
       
                otable.clear().draw();
                
		 for( i = 0; i < displayTable.length; i++ ) {
//alert(displayTable[i])
		  otable.row.add($(displayTable[i]));
		 }
	    otable.draw();
	  //  $("#vehicletable").scrollTop(scrollPos);
               

            }
        }
    };
   
    xhr8.open(method, url, true);
    xhr8.send();
		
}
                
function  UpdateInfo(){
    createTable();
}  
                
function view(id){
  //alert(id);
 updateinfo(id);
    table.style.display = "none";
           purchaseform.style.display = "none";
          viewform.style.display = "block";
          back.value = "Back";
}
function updateinfo(id){
  if(id != ""){

    var xhr5 = new XMLHttpRequest(), 
      method = 'GET',
      overrideMimeType = 'application/json',
      url = ''+serverUrl+'hsd/view_dieselpurchase?id='+id+''; 
            // ADD THE URL OF THE FILE.

  xhr5.onreadystatechange = function () {
      if (xhr5.readyState === XMLHttpRequest.DONE && xhr5.status === 200) {
              
          // PARSE JSON DATA.
          if(xhr5.responseText){

          // alert(xhr.responseText);
             var data=JSON.parse(xhr5.responseText);
            // for(var i=0; i<data.length; i++){
        document.getElementById("SrNo2").innerHTML= data[0]["SrNo"];
        document.getElementById("VehicleNo1").innerHTML= data[0]["VehicleNo"];
        document.getElementById("DieselDates1").innerHTML= data[0]["DieselDates"];
        document.getElementById("DieselLtr2").innerHTML= data[0]["DieselLtr"];
        document.getElementById("DieselRate1").innerHTML= data[0]["DieselRate"];
        document.getElementById("DieselAmt1").innerHTML= data[0]["DieselAmt"];
        document.getElementById("ChallanNo1").innerHTML= data[0]["ChallanNo"];
        document.getElementById("PaymentType1").innerHTML= data[0]["PaymentType"];
        document.getElementById("FuelPartyName1").innerHTML= data[0]["FuelPartyName"];
        document.getElementById("ProductCode1").innerHTML= data[0]["ProductCode"];
        
          }
      }
  };
 
  xhr5.open(method, url, true);
  xhr5.send();  

  }
}
                
                
                
                
    function confirmDelete(id) {
                        var delUrl=""+serverUrl+"hsd/delete_dieselpurchase?id="+id+"";
                        if (confirm("Are you sure you want to delete")) {
                        var xhr14 = new XMLHttpRequest(), 
                        method = 'GET',
                        overrideMimeType = 'application/json',
                        url = ''+serverUrl+'hsd/delete_dieselpurchase?id='+id+''; 
        //alert(url)
              // ADD THE URL OF THE FILE.

    xhr14.onreadystatechange = function () {
      //alert("dsf");
        if (xhr14.readyState === XMLHttpRequest.DONE && xhr14.status === 200) {
         // alert(xhr1.responseText);
          //window.location.href="vehiclemaster";
              createTable();
//             x.style.display = "block";
//            y.style.display = "none";
//             back.value="Add New Vehicle";
                                                    }
    },
    xhr14.open(method, url, true);
    xhr14.send();
                                                  }
                                                  }             
             
                
                
                $(document).ready(function(){
                    $("#VehicleNo").select2({
				  //data: VehicleNo
				});
                    $("#FuelPartyName").select2({
				  //data: VehicleNo
				});
                    $("#ProductCode").select2({
				  //data: VehicleNo
				});

                otable  = $('#example').DataTable( {
                                                                  

                                                                  "paging":   false,
                                                                  //"bFilter": false,
                                                                   //otable.search($(this).val()).draw(),
                                                                    //  "iDisplayLength": "All",
                                                      "aLengthMenu": [
                                                        //[5,10, 25, 50, -1],
                                                       // [5,10, 25, 50, "all"]
                                                      ],
                                                      columnDefs: [
                                                      { type: 'veh', targets: 0 }
                                                         ],
                                                     initComplete : function() {
                                                                       $("#example_filter").detach().show();
                                                                      $('#searchTxt').on('input', function(){
                                                                          otable.search(this.value).draw();   
                                                                      });   
                                                                   //alert("ends");
                                                                   UpdateInfo();
                                                                },
                                                              } );
                    });  
                </script>
         
