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
            <span class="title_pra" style="font-size:18px;"><strong>Diesel Issue</strong></span>
               <input type="button" id="btnAdd"  class="btn btn-info pull-right" class="btn btn-info pull-right" style="width:10%; font-size:10px;" onclick="addDieselIssue()" value="Add Issue"> 
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
               <thead><tr>
                                 <th>Sr No</th>
                             
                                 <th>Date</th>
                                 <th>Vehicle Number</th>
                                 <th>Diesel Issue</th>
                                 <th>Diesel Rate</th>
                                 <th>Diesel Amount

                                  <th></th>
                                    <th></th>
                                
   
                               </tr></thead>
                     </table>	
                     </div>             

<br>
                        
              <div id="addIssue" hidden>
                   
        
<!--             <div id="addForm" hidden>-->
           
                              <form id="device" action="" data-toggle="validator" role="form">
                           
                         <div class="panel-primary" style="background:#f2f2f2">
                         <div class="panel-heading" align="center">Diesel Issue</div>
                                                 <div class="panel-body">  
                             
                             <input type="hidden" class="form-control" name="SrNo" id="SrNo" value="">
                                                     
                                                     
                             <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6 form-group">
                               <label class="control-label col-xs-12" for="DieselSource"><span style="color:red;">*</span> Diesel Source:</label>
                               <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
                                  <select class="form-control" name="DieselSource" id="DieselSource" onchange="getIssueDetails()" style="width:100%;"> 
                                      <option value="0">Select Diesel Source</option>
                                      
                                             </select>
                               
                               </div>
                                      <div id="alertMsgTxt" style="color:red;"></div>   
                             </div>
                                                     
                              <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6 form-group">
                               <label class="control-label col-xs-12" for="Vehicle Number"><span style="color:red;">*</span> Vehicle Number:</label>
                               <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
                                  <select class="form-control" name="VehicleNo" id="VehicleNo" onchange="getIssueDetails()" style="width:100%;">
                                      <option value="0">Select Vehicle Number</option>
                                      
                                             </select>
                               
                               </div>
                                   <div id="alertMsgTxt1" style="color:red;"></div>   
                             </div>
                             
                        
                            
                             <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6 form-group">
                               <label class="control-label col-xs-12" for="Issue Date"> Issue Date:</label>
                               <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
                               <input type="date" data-validation-error-msg="" class="form-control" name="DieselDates" id="DieselDates" placeholder="Enter Issue Date" value="">
                                 </div>
                                 
                             </div>
                             
                             <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6 form-group">
                               <label class="control-label col-xs-12" for="In Stock">In Stock:</label>
                               <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">          
                                 <input  type="text" class="form-control" name="instock" id="instock" placeholder="Stock" disabled>
                               </div>
                             </div>
                             
                             
                             <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6 form-group">
                               <label class="control-label col-xs-12" for="Issue Quantity"><span style="color:red;">*</span> Issue Quantity:</label>
                               <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">          
                                 <input type="text" class="form-control" name="DieselLtr" id="DieselLtr" placeholder="Issue Quantity" onBlur="dieselamountCalc()">
                               </div>
                                 <div id="alertMsgTxt3" style="color:red;"></div>   
                             </div>
                             
                             <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6 form-group">
                               <label class="control-label col-xs-12" for="Fuel Per Ltr"> Fuel Per Ltr.:</label>
                               <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">          
                                 <input type="text" class="form-control" name="DieselRate" id="DieselRate" placeholder="Enter Fuel Per Ltr." disabled>
                               </div>
<!--                                          <div id="alertMsgTxt4" style="color:red;"></div>   -->
                             </div>
                 
                             <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6 form-group">
                                 <label class="control-label col-xs-12" for="Diesel Amount">Diesel Amount:</label>
                                 <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">          
                                   <input type="text" class="form-control" name="DieselAmt" id="DieselAmt" placeholder="Enter Diesel Amount" disabled>
                                 </div>
                               </div>
                         
                          <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6 form-group">
                            <label class="control-label col-xs-12" for="LastReading"><span style="color:red;">*</span> Previous Km:</label>
                            <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
                              <input type="text" class="form-control" name="LastReading" id="LastReading" placeholder="Previous Km" disabled>
                                 </div>
                              <div id="alertMsgTxt6" style="color:red;"></div>
                             
                          </div>
<!--                                  <input type="hidden" class="form-control" name="LastReading" id="LastReading" placeholder="Previous Km" disabled>-->

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
                          
<!--
                      <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6 form-group">
                            <label class="control-label col-xs-12" for="OldHSDBalance">Old HSD Balance:</label>
                            <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
                              <input type="hidden" class="form-control" name="OldHSDBalance" id="OldHSDBalance" placeholder="Old HSD Balance" disabled>
                                 </div>
                             
                          </div>
-->
                                   <input type="hidden" class="form-control" name="OldHSDBalance" id="OldHSDBalance" placeholder="Old HSD Balance" disabled>
                                                  
<!--
                      <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6 form-group">
                            <label class="control-label col-xs-12" for="ClosedHSDBalance"><span style="color:red;">*</span>Close HSD Balance:</label>
                            <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
                              <input type="hidden" class="form-control" name="ClosedHSDBalance" id="ClosedHSDBalance" placeholder="Enter Close HSD Balance" onBlur="hsdCalculation()">
                              <div id="alertMsgTxt6" style="color:red;"></div>    
                            </div>
                            
                          </div>
-->
                                  <input type="hidden" class="form-control" name="ClosedHSDBalance" id="ClosedHSDBalance" placeholder="Enter Close HSD Balance" onBlur="hsdCalculation()">
<!--
                          <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6 form-group">
                            <label class="control-label col-xs-12" for="Previous Issue">Previous Issue:</label>
                            <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
                               <input type="text" class="form-control" name="ClosedHSDBalance" id="ClosedHSDBalance" placeholder="Enter Close HSD Balance" onBlur="hsdCalculation()"> 
                             
                              <div id="alertMsgTxt6" style="color:red;"></div>    
                            </div>
                            
                          </div>
-->
<!--                          <input type="hidden" name="issue" id="issue" value="100" hidden>-->
                           <input type="hidden" name="issue" class="form-control" id="issue" name="issue" placeholder="Previous issue" disabled>
                          <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6 form-group">
                            <label class="control-label col-xs-12" for="HSDConsumption"> HSD Consumption:</label>
                            <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
                              <input type="text" class="form-control" name="HSDConsumption" id="HSDConsumption" placeholder="HSD Consumption" onBlur="hsdCalculation()" disabled>
                                 </div>
                          </div>
                          
                          <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6 form-group">
                            <label class="control-label col-xs-12" for="AvgKm"> AvgKm:</label>
                            <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
                              <input type="text" class="form-control" name="AvgKm" id="AvgKm" placeholder="AvgKm km" disabled>
                                 </div>
                            
                          </div>
                                                   <input type="hidden" class="form-control" name="deviceid" id="deviceid" >
                                                   <input type="hidden" class="form-control" name="MonthYear" id="MonthYear" >
                                  
                      </div>
                      </div> 
                               <div id="login">
                                  <button style="background-color:rgb(31, 133, 187); color:white; width:200px;height:50px;" id="submitbtn" type="button" onclick="submitBtn()">Submit</button>
                                    <button style="background-color:rgb(31, 133, 187); color:white; width:200px;height:50px;" id="continuebtn" type="button" onclick="continueBtn()">Submit & Continue</button>
                                    <button style="background-color:rgb(31, 133, 187); color:white; width:200px;height:50px;" id="cancelbtn" type="button" onclick="cancelBtn()">Cancel</button>
                          </div> 
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
                                                                                              <div class="col-xs-8" id="SrNo1">
                                                                                               
                                                                                                  </div>
                                                                                            </div>
                                                                                            
                                                                                         
                                                                                           <div class="col-xs-6 form-group">
                                                                                              <label class="control-label col-xs-4" for="VehicleNo">VehicleNo:</label>
                                                                                              <div class="col-xs-8" id="VehicleNo1">
                                                                                               
                                                                                                  </div>
                                                                                            </div>
                                                                                        
                                                                                          <div class="col-xs-6 form-group">
                                                                                              <label class="control-label col-xs-4" for="DieselDates">Issue Date:</label>
                                                                                              <div class="col-xs-8" id="DieselDates1">
                                                                                              
                                                                                                  </div>
                                                                                            </div>
                                                                                          <div class="col-xs-6 form-group">
                                                                                              <label class="control-label col-xs-4" for="instock">in stock:</label>
                                                                                              <div class="col-xs-8" id="instock1">
                                                                                                
                                                                                                  </div>
                                                                                            </div>
                                                                                          
                                                                                          <div class="col-xs-6 form-group">
                                                                                              <label class="control-label col-xs-4" for="DieselLtr">Issue Quantity:</label>
                                                                                              <div class="col-xs-8" id="DieselLtr1">
                                                                                                
                                                                                              </div>
                                                                                            </div>
                                                                                          <div class="col-xs-6 form-group">
                                                                                              <label class="control-label col-xs-4" for="DieselRate">Fuel Per Ltr:</label>
                                                                                              <div class="col-xs-8" id="DieselRate1">
                                                                                               
                                                                                                  </div>
                                                                                            </div>
                                                                                          <div class="col-xs-6 form-group">
                                                                                              <label class="control-label col-xs-4" for="DieselAmt">DieselAmt:</label>
                                                                                              <div class="col-xs-8" id="DieselAmt1">
                                                                                                
                                                                                                  </div>
                                                                                            </div>
                                                                                          <div class="col-xs-6 form-group">
                                                                                              <label class="control-label col-xs-4" for="LastReading">Previous KM:</label>
                                                                                              <div class="col-xs-8" id="LastReading1">
                                                                                               
                                                                                                  </div>
                                                                                            </div>
                                                                                        
                                                                                            <div class="col-xs-6 form-group">
                                                                                              <label class="control-label col-xs-4" for="CurrentReading">Current KM:</label>
                                                                                              <div class="col-xs-8" id="CurrentReading1">
                                                                                               
                                                                                                  </div>
                                                                                            </div>
                                                                                            <div class="col-xs-6 form-group">
                                                                                              <label class="control-label col-xs-4" for="RunningKM">Running KM:</label>
                                                                                              <div class="col-xs-8" id="RunningKM1">
                                                                                               
                                                                                                  </div>
                                                                                            </div>
                                                                                            <div class="col-xs-6 form-group">
                                                                                              <label class="control-label col-xs-4" for="OldHSDBalance">OldHSDBalance:</label>
                                                                                              <div class="col-xs-8" id="OldHSDBalance1">
                                                                                               
                                                                                                  </div>
                                                                                            </div>
                                                                                            <div class="col-xs-6 form-group">
                                                                                              <label class="control-label col-xs-4" for="ClosedHSDBalance">ClosedHSDBalance:</label>
                                                                                              <div class="col-xs-8" id="ClosedHSDBalance1">
                                                                                               
                                                                                                  </div>
                                                                                            </div>
                                                                                            <div class="col-xs-6 form-group">
                                                                                              <label class="control-label col-xs-4" for="HSDConsumption">HSDConsumption:</label>
                                                                                              <div class="col-xs-8" id="HSDConsumption1">
                                                                                               
                                                                                                  </div>
                                                                                            </div>
                                                                                              </div>
                                                                                            <div class="col-xs-6 form-group">
                                                                                              <label class="control-label col-xs-4" for="AvgKm">Avg Km:</label>
                                                                                              <div class="col-xs-8" id="AvgKm1">
                                                                                               
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
             <script>
                
    //var userType = localStorage['userType'];
 //var admin_id = localStorage['admin_id'];
 //var traccarID =localStorage['traccarID'];
 //var traccar_email=localStorage['traccar_email'];
 //var pass= localStorage['pass'];
                 
 var button = document.getElementById("submitbtn");
var continuesubmit = document.getElementById("continuebtn");
var cancel = document.getElementById("cancelbtn");
                 
                  var issue = document.getElementById("issue");
            var serverUrl = "<?php echo URL; ?>";
    var issuedate="<?php echo date('Y-m-d'); ?>";         
var d= new Date();
var year1 = d.getFullYear();
var month1 = d.getMonth()+1;
if(month1.toString().length=1){
    month1="0"+month;
}else{
    month1= month1;
}
                 
var date= month1+"-"+year1;
document.getElementById("MonthYear").value= date;  
                 
 var t = new Date().toLocaleTimeString();
                   var   d = new Date();
                     var  year=d.getFullYear();  
                 var  month=d.getMonth()+1;  
                   if(month.toString().length == 1){  
                     month = "0"+month;  
                   }
                    // alert(month)    
                var  day=d.getDate();
                
                      if(day.toString().length == 1){  
                      day = "0"+day;                    
                      }
              //   alert(day)
var dat=day+"/"+month+"/"+year;
                   // var  date1=dat+" "+t;
//var issuedate=dat+" "+t;
document.getElementById("DieselDates").value= issuedate;                 
    
// var parent_id = localStorage['parent_id'];
  //var parent_traccarID=localStorage['parent_traccarID'];
                
               
                     var fuel,temp,dev, driverId,vehicle;
                     var t ,d,year,month,day,dat,date;
                     var interval;
var VehicleNo;
   var serverUrl = "<?php echo URL; ?>";
var xhr6 = new XMLHttpRequest(), 
method = 'GET',
overrideMimeType = 'application/json',
url =   ''+serverUrl+'master/vehiclemaster_details';

    // ADD THE URL OF THE FILE.
//alert(url);
                 var VehicleArr=[];
xhr6.onreadystatechange = function () {
//alert("request");
if (xhr6.readyState === XMLHttpRequest.DONE && xhr6.status === 200) {
//  alert(xhr2.responseText);   
var data = JSON.parse(xhr6.responseText);
VehicleNo = document.getElementById("VehicleNo");
for(var i=0; i<data.length; i++){
    VehicleNo.innerHTML = VehicleNo.innerHTML +
          '<option value="' + data[i]['SensorSerial'] + '">' + data[i]['VehicleNo'] + '</option>';
     DieselSource.innerHTML = DieselSource.innerHTML +
          '<option value="' + data[i]['SensorSerial'] + '">' + data[i]['VehicleNo'] + '</option>';
   VehicleArr[data[i]['SensorSerial']]=data[i]['VehicleNo'];
}
  UpdateInfo();
}
};

xhr6.open(method, url, true);
xhr6.send(); 

var back = document.getElementById("btnAdd");
var table = document.getElementById("table");
var addIssue = document.getElementById("addIssue");
var viewform = document.getElementById("viewform");
var issue = document.getElementById("issue");
         
                     

function addDieselIssue(){
  if(back.value == "Add Issue"){
    table.style.display = "none";
    addIssue.style.display ="block";
    viewform.style.display="none";
    back.value = "Back";
      document.getElementById("DieselSource").value = 0;
      getIssueDetails();
      
     
  }
  else if(back.value == "Back"){
    table.style.display = "block";
    addIssue.style.display ="none";
    viewform.style.display="none";
    back.value = "Add Issue";
  }
}
   function getIssueDetails(){
      
       var xhr9 = new XMLHttpRequest(),
                   method = 'GET',        
          overrideMimeType = 'application/json',  
         url =  serverUrl+'hsd/getLastissuesrno';  
                      // ADD THE URL OF THE FILE.    
           // alert(url);      
            xhr9.onreadystatechange = function () {    
                                       if (xhr9.readyState === XMLHttpRequest.DONE && xhr9.status === 200) {    
                // alert(xhr.responseText);    
               var data=JSON.parse(xhr9.responseText);
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
           //alert(srno)              
      document.getElementById("SrNo").value = srno;    
               }                    else{        
             document.getElementById("SrNo").value = "VDP-0017285";      
             }            
                           }                   },    
               xhr9.open(method, url, true);
                 xhr9.send();
       
       
        var VehicleNo = document.getElementById("VehicleNo").value; 
       var DieselSource = document.getElementById("DieselSource").value; 
     //  if(VehicleNo)
        //alert("sdfj")
       
       var deviceid=VehicleNo;
               //    alert(VehicleNo);
          if(DieselSource != 0){
          //  alert(VehicleNo);
        //document.getElementById("DieselDates").value = "";
          // alert("date");  
        document.getElementById("instock").value = "";
          //     alert("stock"); 
        document.getElementById("DieselRate").value = "";
          //  alert("rate"); 
        document.getElementById("DieselLtr").value = "";
             // alert("ltr");
        document.getElementById("DieselAmt").value = "";
            //  alert("gj")
           //   alert(deviceid);
       var xhr7 = new XMLHttpRequest(), 
method = 'GET',
overrideMimeType = 'application/json',
url =   ''+serverUrl+'hsd/getlastdieselissue?deviceid='+deviceid+'';
//alert(url);

  
xhr7.onreadystatechange = function () {
//alert("request");
if (xhr7.readyState === XMLHttpRequest.DONE && xhr7.status === 200) {
 
    var data = JSON.parse(xhr7.responseText);
    if(data != "" ){
        if(data[0]['CurrentReading'] != null && data[0]['CurrentReading'] != ""){
          document.getElementById("LastReading").value=data[0]['CurrentReading'];
        document.getElementById("LastReading").disabled = true;
        }
        else{
             document.getElementById("LastReading").value=0;
        document.getElementById("LastReading").disabled = false;
            
        }
    }
    else{

         document.getElementById("LastReading").value=0;
        document.getElementById("LastReading").disabled = false;
    }

}
};

xhr7.open(method, url, true);
xhr7.send(); 
              
              
  var xhr8 = new XMLHttpRequest(), 
method = 'GET',
overrideMimeType = 'application/json',
url1 =   ''+serverUrl+'hsd/getLastDieselpurchase?deviceid='+DieselSource+'';
//alert(url1);

  
xhr8.onreadystatechange = function () {
//alert("request");
if (xhr8.readyState === XMLHttpRequest.DONE && xhr8.status === 200) {
 
    var data = JSON.parse(xhr8.responseText);
    if(data != "" ){
        document.getElementById("DieselRate").value=data[0]['AvgRate'];
      
        if(data[0]['instock'] != null){
            document.getElementById("instock").value=data[0]['instock'];
        }else{
             document.getElementById("instock").value=0;
        }
        
    }
    else{
       document.getElementById("DieselRate").value=0;
        document.getElementById("instock").value=0;
         
    }

}
};

xhr8.open(method, url1, true);
xhr8.send(); 
       
       
          }else{
        document.getElementById("VehicleNo").value = 0;
        //document.getElementById("DieselDates").value = "";
        document.getElementById("instock").value = 0;
        document.getElementById("DieselRate").value = 0;
        document.getElementById("DieselLtr").value = 0;
        document.getElementById("DieselAmt").value = ""; 
              document.getElementById("CurrentReading").value = ""; 
              document.getElementById("RunningKM").value = 0; 
              document.getElementById("RunningKM").value = 0; 
              document.getElementById("LastReading").value = 0;
              document.getElementById("AvgKm").value=0;
              document.getElementById("HSDConsumption").value=0;

              
              
              
          }
        
    }
     
                function submitBtn(){
                var VehicleNo = document.getElementById("VehicleNo").value;
                     var DieselSource = document.getElementById("DieselSource").value;
         //alert(VehicleNo)
      var SrNo = document.getElementById("SrNo").value;
                     // alert(SrNo);
     var DieselDates = document.getElementById("DieselDates").value;
                // alert(DieselDates)    
      var instock = document.getElementById("instock").value;
                     var DieselLtr = document.getElementById("DieselLtr").value;
                   // alert(instock);
                     instock = instock - DieselLtr;
      //document.getElementById("instock").value = finalinstock;

      var MonthYear= document.getElementById("MonthYear").value;
                    
       var deviceid= document.getElementById("deviceid").value;
    
       
        
        var DieselAmt = document.getElementById("DieselAmt").value;
        //alert(DieselAmt)
        var DieselRate = document.getElementById("DieselRate").value;
     // alert(DieselRate)
var LastReading = document.getElementById("LastReading").value;
      // alert(LastReading)
  var CurrentReading = document.getElementById("CurrentReading").value;
   //alert(CurrentReading)
  var RunningKM = document.getElementById("RunningKM").value;
       // alert(RunningKM)
 var OldHSDBalance = document.getElementById("OldHSDBalance").value;
 //alert(OldHSDBalance)
 var ClosedHSDBalance = document.getElementById("ClosedHSDBalance").value;
// alert(ClosedHSDBalance)
 var HSDConsumption = document.getElementById("HSDConsumption").value;
//alert(HSDConsumption)
  var AvgKm = document.getElementById("AvgKm").value;
       // var ChallanNo = document.getElementById("ChallanNo").value;
        //alert(ChallanNo)
                 //   var button = $("#submitBtn").val;
        var deviceid= VehicleNo;
       //alert("tyfh");
//         var button= $("#submitbtn").val();
//          alert(button);
               if((DieselSource.trim() != "" || DieselSource.trim() != 0) && (VehicleNo.trim() != "" || VehicleNo.trim() != 0) && (DieselLtr.trim() != "" || DieselLtr.trim() != 0) && (LastReading.trim() != "" || LastReading.trim() != 0) && (CurrentReading.trim() != "" || CurrentReading.trim() != 0)){
               //  if(button == "Submit"){
                  var xhr1 = new XMLHttpRequest(), 
                  method = 'GET',
                  overrideMimeType = 'application/json',
//                  
//                  url =  ''+serverUrl+'hsd/add_dieselissue?VehicleNo='+VehicleNo+'&DieselDates='+issuedate+'&instock='+instock1+'&DieslLtr='+issuequantity+'&DieselRate='+fuelperltr+'&DieselAmt='+dieselamount+'&deviceid='+deviceid+'&LastReading='+previouskm+'&CurrentReading='+currentkm+'&RunningKM='+runningkm+'&&HSDConsumption='+hsdconsumption+'&AvgKm='+average+'';
                      url =   ''+serverUrl+'hsd/add_dieselissue?SrNo='+SrNo+'&VehicleNo='+VehicleArr[VehicleNo]+'&DieselSource='+DieselSource+'&DieselDates='+DieselDates+'&instock='+instock+'&DieselRate='+DieselRate+'&DieselLtr='+DieselLtr+'&DieselAmt='+DieselAmt+'&deviceid='+deviceid+'&LastReading='+LastReading+'&CurrentReading='+CurrentReading+'&RunningKM='+RunningKM+'&OldHSDBalance='+OldHSDBalance+'&ClosedHSDBalance='+ClosedHSDBalance+'&HSDConsumption='+HSDConsumption+'&AvgKm='+AvgKm+'';
                        // ADD THE URL OF THE FILE.
                //alert(url);
                  xhr1.onreadystatechange = function () {
                          
                  if (xhr1.readyState === XMLHttpRequest.DONE && xhr1.status === 200) {
                    // alert(xhr1.responseText);
                 //   data=JSON.parse(xhr1.responseText);
//                 $("#status").show();
//                      $("#status").html("Scan the Vehicle QR code");
//                      //$("#form").reset();
//                     $("#addForm").hide();
//                     // $("#lastform").hide();
//                     // $("#vehicle").hide();
//                     $("#addedstatus").show();
//                     $("#addedstatus").html("Fuel Issued to vehicle Successfully!")
//                      
//                    deviceId == null;
//                    document.getElementById("ajaxVehicle").value = "";
                   // ale
                      createTable();
                      table.style.display = "block";
                        addIssue.style.display ="none";
                        viewform.style.display="none";
                      back.value = "Add Issue";
              document.getElementById("VehicleNo").value = 0;
                document.getElementById("DieselSource").value = 0;
                  }
                  }
                  xhr1.open(method, url, true);
                   xhr1.send();
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
                   $("#alertMsgTxt").text("");
                   $("#alertMsgTxt1").text("");
                   //$("#alertMsgTxt2").text("");
                    $("#alertMsgTxt3").text("");
                   //$("#alertMsgTxt4").text("");
                    $("#alertMsgTxt5").text("");
                 $("#alertMsgTxt6").text("");
                // }
               }else{

                 if(DieselSource.trim() == "" || DieselSource.trim() == 0){
                  $("#alertMsgTxt").text("Please Enter Diesel Source");
                 }else{
                  $("#alertMsgTxt").text("");
                 }
                   if(VehicleNo.trim() == "" || VehicleNo.trim() == 0){
                  $("#alertMsgTxt1").text("Please Enter Vehicle No");
                 }else{
                  $("#alertMsgTxt1").text("");
                 }
//                 if(DieselDates.trim() == "" || DieselDates.trim() == 0){
//                  $("#alertMsgTxt2").text("Please Enter Diesel Date");
//                 }else{
//                  $("#alertMsgTxt2").text("");
//                 }
                   if(DieselLtr.trim() == "" || DieselLtr.trim() == 0){
                  $("#alertMsgTxt3").text("Please Enter Diesel Ltr");
                 }else{
                  $("#alertMsgTxt3").text("");
                 }
                 
                 if(CurrentReading.trim() == "" || CurrentReading.trim() == 0){
                  $("#alertMsgTxt5").text("Please Enter Current Reading");
                 }else{
                  $("#alertMsgTxt5").text("");
                 }
                 if(LastReading.trim() == "" || LastReading.trim() == 0){
                  $("#alertMsgTxt6").text("Please Enter Previous Reading");
                 }else{
                  $("#alertMsgTxt6").text("");
                 }  
              
                }
               
                      
                    }
                 
                 
                 
                 function continueBtn(){
                var VehicleNo = document.getElementById("VehicleNo").value;
                     var DieselSource = document.getElementById("DieselSource").value;
         //alert(VehicleNo)
      var SrNo = document.getElementById("SrNo").value;
                     // alert(SrNo);
     var DieselDates = document.getElementById("DieselDates").value;
                // alert(DieselDates)    
      var instock = document.getElementById("instock").value;
                     var DieselLtr = document.getElementById("DieselLtr").value;
                   // alert(instock);
                     instock = +instock - +DieselLtr;
      //document.getElementById("instock").value = finalinstock;

      var MonthYear= document.getElementById("MonthYear").value;
                    
       var deviceid= document.getElementById("deviceid").value;
    
       
        
        var DieselAmt = document.getElementById("DieselAmt").value;
        //alert(DieselAmt)
        var DieselRate = document.getElementById("DieselRate").value;
     // alert(DieselRate)
var LastReading = document.getElementById("LastReading").value;
      // alert(LastReading)
  var CurrentReading = document.getElementById("CurrentReading").value;
   //alert(CurrentReading)
  var RunningKM = document.getElementById("RunningKM").value;
       // alert(RunningKM)
 var OldHSDBalance = document.getElementById("OldHSDBalance").value;
 //alert(OldHSDBalance)
 var ClosedHSDBalance = document.getElementById("ClosedHSDBalance").value;
// alert(ClosedHSDBalance)
 var HSDConsumption = document.getElementById("HSDConsumption").value;
//alert(HSDConsumption)
  var AvgKm = document.getElementById("AvgKm").value;
       // var ChallanNo = document.getElementById("ChallanNo").value;
        //alert(ChallanNo)
                 //   var button = $("#submitBtn").val;
        var deviceid= VehicleNo;
       //alert("tyfh");
//         var button= $("#submitbtn").val();
//          alert(button);
               if((DieselSource.trim() != "" || DieselSource.trim() != 0) && (VehicleNo.trim() != "" || VehicleNo.trim() != 0)  && (DieselLtr.trim() != "" || DieselLtr.trim() != 0) && (LastReading.trim() != "" || LastReading.trim() != 0) && (CurrentReading.trim() != "" || CurrentReading.trim() != 0)){
               //  if(button == "Submit"){
                  var xhr1 = new XMLHttpRequest(), 
                  method = 'GET',
                  overrideMimeType = 'application/json',
//                  
//                  url =  ''+serverUrl+'hsd/add_dieselissue?VehicleNo='+VehicleNo+'&DieselDates='+issuedate+'&instock='+instock1+'&DieslLtr='+issuequantity+'&DieselRate='+fuelperltr+'&DieselAmt='+dieselamount+'&deviceid='+deviceid+'&LastReading='+previouskm+'&CurrentReading='+currentkm+'&RunningKM='+runningkm+'&&HSDConsumption='+hsdconsumption+'&AvgKm='+average+'';
                      url =   ''+serverUrl+'hsd/add_dieselissue?SrNo='+SrNo+'&VehicleNo='+VehicleNo+'&DieselSource='+DieselSource+'&DieselDates='+DieselDates+'&instock='+instock+'&DieselRate='+DieselRate+'&DieselLtr='+DieselLtr+'&DieselAmt='+DieselAmt+'&deviceid='+deviceid+'&LastReading='+LastReading+'&CurrentReading='+CurrentReading+'&RunningKM='+RunningKM+'&OldHSDBalance='+OldHSDBalance+'&ClosedHSDBalance='+ClosedHSDBalance+'&HSDConsumption='+HSDConsumption+'&AvgKm='+AvgKm+'';
                        // ADD THE URL OF THE FILE.
                //alert(url);
                  xhr1.onreadystatechange = function () {
                          
                  if (xhr1.readyState === XMLHttpRequest.DONE && xhr1.status === 200) {

                      createTable();
                      table.style.display = "none";
                        addIssue.style.display ="block";
                        viewform.style.display="none";
                      back.value = "Back";
              document.getElementById("CurrentReading").value = 0;
                document.getElementById("HSDConsumption").value = 0;
                document.getElementById("RunningKM").value = 0;
                      document.getElementById("AvgKm").value = 0;
                      getIssueDetails();
                  }
                  }
                  xhr1.open(method, url, true);
                   xhr1.send();
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
                   $("#alertMsgTxt").text("");
                   $("#alertMsgTxt1").text("");
                   //$("#alertMsgTxt2").text("");
                    $("#alertMsgTxt3").text("");
                   //$("#alertMsgTxt4").text("");
                    $("#alertMsgTxt5").text("");
                 $("#alertMsgTxt6").text("");
                // }
               }else{

                 if(DieselSource.trim() == "" || DieselSource.trim() == 0){
                  $("#alertMsgTxt").text("Please Enter Diesel Source");
                 }else{
                  $("#alertMsgTxt").text("");
                 }
                   if(VehicleNo.trim() == "" || VehicleNo.trim() == 0){
                  $("#alertMsgTxt1").text("Please Enter Vehicle No");
                 }else{
                  $("#alertMsgTxt1").text("");
                 }
//                 if(DieselDates.trim() == "" || DieselDates.trim() == 0){
//                  $("#alertMsgTxt2").text("Please Enter Diesel Date");
//                 }else{
//                  $("#alertMsgTxt2").text("");
//                 }
                   if(DieselLtr.trim() == "" || DieselLtr.trim() == 0){
                  $("#alertMsgTxt3").text("Please Enter Diesel Ltr");
                 }else{
                  $("#alertMsgTxt3").text("");
                 }
                 
                 if(CurrentReading.trim() == "" || CurrentReading.trim() == 0){
                  $("#alertMsgTxt5").text("Please Enter Current Reading");
                 }else{
                  $("#alertMsgTxt5").text("");
                 }
                   if(LastReading.trim() == "" || LastReading.trim() == 0){
                  $("#alertMsgTxt6").text("Please Enter Previous Reading");
                 }else{
                  $("#alertMsgTxt6").text("");
                 }
              
                }
               
                      
                    }
                   function cancelBtn(){
                       
                     createTable();
                      table.style.display = "block";
                        addIssue.style.display ="none";
                        viewform.style.display="none";
                      back.value = "Add Issue";  
                   }
                 
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
var otable;
$(document).ready(function() {
     $("#VehicleNo").select2({
				  //data: VehicleNo
				});
                    $("#DieselSource").select2({
				  //data: VehicleNo
				});
                                                      // alert("start")
                                                       otable  = $('#example').DataTable( {
                                                          

                                                          "paging":   false,
                                                          //"bFilter": false,
                                                           //otable.search($(this).val()).draw(),
                                                            //  "iDisplayLength": "All",
                                              "aLengthMenu": [
                                                //[5,10, 25, 50, -1],
                                               // [5,10, 25, 50, "all"]
                                              ],
                                             initComplete : function() {
                                                               $("#example_filter").detach().show();
                                                              $('#searchTxt').on('input', function(){
                                                                  otable.search(this.value).draw();   
                                                              });   
                                                          // alert("ends");
                                                          
                                                        },
                                                      } );
}); 
function UpdateInfo(){
  createTable();
}   
function createTable(){
 // alert("fhjdas")
  var tdDate = "", tdVehicleNo = "", tdDieselIsue = "", tdSrNo="", tdDieselAmnt="", tdDieselRate="";
var displayTable=[];
  var txt='';
  

  var xhr4 = new XMLHttpRequest(), 
      method = 'GET',
      overrideMimeType = 'application/json',
      url = ''+serverUrl+'hsd/getalldieselissue'; 
            // ADD THE URL OF THE FILE.

  xhr4.onreadystatechange = function () {
      if (xhr4.readyState === XMLHttpRequest.DONE && xhr4.status === 200) {
              
          // PARSE JSON DATA.
          if(xhr4.responseText){

          // alert(xhr.responseText);
             var data=JSON.parse(xhr4.responseText);
             for(var i=0; i<data.length; i++){
//;
//              
//           var srcId=data[i]['DieselSource'];
//           var srcInstock=data[i]['instock'];
//            var srcDieselLtr=data[i]['DieselLtr'];

tdSrNo= '<tr style="height:20px;" role="row"><td>'+data[i]['SrNo']+'</td>';
  tdDate = '<td>'+data[i]['DieselDates']+'</td>';
          tdVehicleNo = '<td>'+data[i]['VehicleNo']+'</td>';
          tdDieselIsue='<td>'+data[i]['DieselLtr']+'</td>';
          tdDieselRate = '<td>'+data[i]['DieselRate']+'</td>';
          tdDieselAmount = '<td>'+data[i]['DieselAmt']+'</td>';
       
        tdView='<td><a href="#a" onclick="javascript:view('+data[i]['id']+')"> VIEW</a>';
        tdDelete='<td id="deleteClick"><a href="#a" onclick="javascript:confirmDelete('+data[i]['id']+');" id="delete"> DELETE</a></td></tr>';
        txt =tdSrNo + tdDate + tdVehicleNo + tdDieselIsue + tdDieselRate +tdDieselAmount+tdView+tdDelete;
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
 
  xhr4.open(method, url, true);
  xhr4.send();        
}


function view(id){
  //alert(id);
 updateinfo(id);
    table.style.display = "none";
    addIssue.style.display ="none";
    viewform.style.display="block";
    back.value = "Back";
}
function updateinfo(id){
  if(id != ""){

    var xhr5 = new XMLHttpRequest(), 
      method = 'GET',
      overrideMimeType = 'application/json',
      url = ''+serverUrl+'hsd/view_dieselissue?id='+id+''; 
            // ADD THE URL OF THE FILE.

  xhr5.onreadystatechange = function () {
      if (xhr5.readyState === XMLHttpRequest.DONE && xhr5.status === 200) {
              
          // PARSE JSON DATA.
          if(xhr5.responseText){

          // alert(xhr.responseText);
             var data=JSON.parse(xhr5.responseText);
            // for(var i=0; i<data.length; i++){
               document.getElementById("SrNo1").innerHTML= data[0]["SrNo"];
        document.getElementById("VehicleNo1").innerHTML= data[0]["VehicleNo"];
        document.getElementById("DieselDates1").innerHTML= data[0]["DieselDates"];
        document.getElementById("instock1").innerHTML= data[0]["instock"];
        document.getElementById("DieselLtr1").innerHTML= data[0]["DieselLtr"];
        document.getElementById("DieselRate1").innerHTML= data[0]["DieselRate"];
        document.getElementById("DieselAmt1").innerHTML= data[0]["DieselAmt"];
        document.getElementById("LastReading1").innerHTML= data[0]["LastReading"];
        document.getElementById("CurrentReading1").innerHTML= data[0]["CurrentReading"];
        document.getElementById("RunningKM1").innerHTML= data[0]["RunningKM"];
        document.getElementById("OldHSDBalance1").innerHTML= data[0]["OldHSDBalance"];
        document.getElementById("ClosedHSDBalance1").innerHTML= data[0]["ClosedHSDBalance"];
        document.getElementById("HSDConsumption1").innerHTML= data[0]["HSDConsumption"];
        document.getElementById("AvgKm1").innerHTML= data[0]["AvgKm"];
              document.getElementById("instock1").innerHTML= data[0]["instock"];
        
          }
      }
  };
 
  xhr5.open(method, url, true);
  xhr5.send();  

  }
}
                 
                 function confirmDelete(id) {
            
                        if (confirm("Are you sure you want to delete")) {
                        var xhr2 = new XMLHttpRequest(), 
                        method = 'GET',
                        overrideMimeType = 'application/json',
                        url = ''+serverUrl+'hsd/delete_dieselissue?id='+id+''; 
        //alert(url)
              // ADD THE URL OF THE FILE.

    xhr2.onreadystatechange = function () {
      //alert("dsf");
        if (xhr2.readyState === XMLHttpRequest.DONE && xhr2.status === 200) {
            // alert(xhr2.responseText);
    createTable();

                                                    }
    },
    xhr2.open(method, url, true);
    xhr2.send();
                                                  }
                                                  }
               
        
             </script>

           
