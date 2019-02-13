<script src="<?php echo URL; ?>public/js/jquery.min.js"></script>
<script src="<?php echo URL; ?>public/js/datatables.min.js"></script>
<link href="<?php echo URL; ?>public/css/datatables.min.css" rel="stylesheet">
<link href="<?php echo URL; ?>public/css/select2.min.css" rel="stylesheet" />
<script src="<?php echo URL; ?>public/js/select2.min.js"></script>
<link href="<?php echo URL; ?>public/newheader/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo URL; ?>public/newheader/css/style.css" rel="stylesheet">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   <style>
  table.tdesign tr.odd { background-color:  whitesmoke; }
table.tdesign tr.even { background-color: white;  }	
 table.tdesign th {
        background: #d9edf7;
        color: #000;
        padding: 2px;
		border: 1px solid #ccc;
    }
       .ui-datepicker-calendar {
    display: none;
}

  </style>
<div class="container-fluid" style="padding: 0px; margin-bottom: 20px;">
  <div class="tab-content">
     <div id="home" class="tab-pane fade in active">
        <div class="white_div" style="">
           <div class="title_div">
             <span class="title_pra" style="font-size:18px;"><strong>Attendance</strong></span>
            
            </div>
            <br>
            <center>

                Select Month : <input type='text' id='txtDate' />
                
            <input type="button" class="btn btn-default sbmt_btn" name="submit" id="submitbtn" onclick="submitBtn()" value="Submit">
                </center>
              <div class="table-responsive" id="table">   
                    <table style="margin-left:10px; margin-right:10px" id="example" class="cell-border tdesign" cellspacing="0" >
                         <thead><tr>
                         <th>Employee Name</th>
                              <th></th>
                         <th style="width:50px;">Present Total</th>
                             <th style="width:50px;">Absent Total</th>
                       </tr>
            </thead>
      </table>
    </div>
</div>
</div>
</div>
</div>

<script>
var employeeArr=[];
var id=0, EM_NAME=0;
var t, d, year, month, day,dat,date;
var serverUrl = "<?php echo URL; ?>";                                  
var EmployeeLength = "";
var ALLEMPLOYEES={};  
    function createTable(){
       
         var txt=''; 
    var tdEmployeeName="", tdDate="", tdLocation="",tdPresentlist="",tdAbsentlist="";
   displayTable= [];
    var xhr = new XMLHttpRequest(), 
        method = 'GET',
        overrideMimeType = 'application/json',
        url = ''+serverUrl+'reports/getAllemployee'; 
              // ADD THE URL OF THE FILE.
   
    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                
            // PARSE JSON DATA.
            if(xhr.responseText){
                
           //    alert(xhr.responseText);
               var data=JSON.parse(xhr.responseText);
                ALLEMPLOYEES = data;
                 EmployeeLength = data.length;
               for(var i=0; i<data.length; i++){
                tdEmployeeName= '<tr style="height:20px;" role="row"><td>'+data[i]['name']+'</td>';
                   tdAttendance = '<td id ="attendancedays'+i+'"></td>';
                   tdPresentlist = '<td ><div id ="presentdays'+i+'"></div></td>';
                   tdAbsentlist = '<td ><div id ="absentdays'+i+'"></div></td></tr>'
   	         
          txt = tdEmployeeName+tdAttendance+tdPresentlist+tdAbsentlist;
          displayTable[i]= txt;
         
               }
             
          scrollPos = $("#example").scrollTop();
          otable.clear().draw();
          for(i = 0; i < displayTable.length; i++) {
          otable.row.add($(displayTable[i]));
            }
     otable.draw();
  
            }
        }
    };
   
    xhr.open(method, url, true);
    xhr.send();
    }


var otable;
$(document).ready(function() {
    createTable();
         otable  = $('#example').DataTable( {
           "paging":   false,
            "aLengthMenu": [
                           ],

dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
           } );
} );
    
    
function submitBtn(){
   // alert(ALLEMPLOYEES);
var datefrom = document.getElementById("txtDate").value;
   // alert(datefrom);
if(datefrom.trim() != ""){
var empDate = "";
    var monthdata = datefrom.substr(0,3);
    var yeardata = datefrom.split(" ");
    var month1 = "JanFebMarAprMayJunJulAugSepOctNovDec".indexOf(monthdata) / 3 + 1;
    if(month1.toString().length == 1){
        month1 = 0+""+month1;
    }else{
        month1 = month1;
    }
datefrom = yeardata[1]+"-"+month1;
  //  alert(datefrom);
var date = new Date(datefrom);
    //alert(date);
var month = date.getMonth() + 1;
  //  alert(month);
var year = date.getFullYear();
if (month == 2){
if ( (year%100!=0) && (year%4==0) || (year%400==0)){
FebNumberOfDays = 29;
}else{
FebNumberOfDays = 28;
}
}
var FebNumberOfDays;
var dayPerMonth = ["31", ""+FebNumberOfDays+"","31","30","31","30","31","31","30","31","30","31"]

var numOfDays = dayPerMonth[month-1];
var from = year+"-"+month+"-1";
var to = year+"-"+month+"-"+dayPerMonth[month];
   // alert(ALLEMPLOYEES.length);
for(var i=0; i<ALLEMPLOYEES.length; i++){
    
    $("#attendancedays"+i+"").empty();
    empDate = "";
    for(var k=1; k<=numOfDays; k++){

empDate += '<td id="'+ALLEMPLOYEES[i].id+'id'+k+'">A</td>';
    
       
        //alert(ALLEMPLOYEES[i]['id']);
}
        $("#attendancedays"+i+"").append(empDate);
     
}
$.ajax({

url:""+serverUrl+"reports/getattendance?from="+from+"&to="+to+"",
type: "GET",
data: { 

},
dataType: "json",
success: function(data) {
var CircleColor;
for (j=0;j<ALLEMPLOYEES.length;j++){
var CircleColor;
    var count = 0;
for(i=0;i<data.length;i++){

if(ALLEMPLOYEES[j]['id'] == data[i]['employeeID']){

var days= getDay(data[i]['datetime']);
var dateTime = data[i]['datetime'];
count++;
CircleColor= "palegreen";
document.getElementById(""+ALLEMPLOYEES[j].id+"id"+days+"").style.background = CircleColor;
document.getElementById(""+ALLEMPLOYEES[j].id+"id"+days+"").innerHTML="P";

                    }
                }
    $("#presentdays"+j+"").html(count);
     $("#absentdays"+j+"").html(numOfDays-count);
   
            }
        }
    });
  }
}

    
function onclickfunction(id,j,datetime){
//alert(datetime);
document.getElementById(id).onclick = function(){showTime(datetime,j)}
} 
function showTime(date,j){
// if(date != 0){
document.getElementById("datelist"+j+"").className = GetTimeEvolved(date,"null");
document.getElementById("datelist"+j+"").innerHTML = CovertTimeHere(date);

}
//-----------------------------------------------------------          
function getDay(daten){
var daten = daten.split(" ");
var date = new Date(daten[0]);
var day =   date.getDate();
return day;
}   
    
    
$('#txtDate').datepicker({
     changeMonth: true,
     changeYear: true,
     dateFormat: 'MM yy',
       
     onClose: function() {
        var iMonth = $("#ui-datepicker-div .ui-datepicker-month :selected").val();
        var iYear = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
        $(this).datepicker('setDate', new Date(iYear, iMonth, 1));
     },
       
     beforeShow: function() {
       if ((selDate = $(this).val()).length > 0) 
       {
          iYear = selDate.substring(selDate.length - 4, selDate.length);
          iMonth = jQuery.inArray(selDate.substring(0, selDate.length - 5), $(this).datepicker('option', 'monthNames'));
          $(this).datepicker('option', 'defaultDate', new Date(iYear, iMonth, 1));
           $(this).datepicker('setDate', new Date(iYear, iMonth, 1));
       }
    }
  });
</script>
