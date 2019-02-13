<script src="<?php echo URL; ?>public/js/jquery.min.js"></script>
<script src="<?php echo URL; ?>public/js/datatables.min.js"></script>
<link href="<?php echo URL; ?>public/css/datatables.min.css" rel="stylesheet">
<link href="<?php echo URL; ?>public/css/select2.min.css" rel="stylesheet" />
<script src="<?php echo URL; ?>public/js/select2.min.js"></script>
<link href="<?php echo URL; ?>public/newheader/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo URL; ?>public/newheader/css/style.css" rel="stylesheet">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
.right-inner-addon {
    position: relative;
}

.right-inner-addon input{
/*    padding-right: 30px;*/
}

.right-inner-addon i{
	
	position:absolute;
	/*text-indent: -15px;
	bottom: -8px;
	font-size: 1.3em;*/
    right: 0px;
    padding: 10px 12px;
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
    <div class="col-md-2">
    	<div class='right-inner-addon date datepicker'> 
            <i class="fa fa-calendar" id="icondate"></i>
    		<input name='name' id='txtDate' value="" type="text" class="form-control date-picker"/>
  			
   		</div>
    </div>
<!--                Select Month : <input type='text' id='txtDate' />-->
                
            <input type="button" class="btn btn-default sbmt_btn" name="submit" id="submitbtn" onclick="submitBtn()" value="Submit">
                </center>
              <div class="table-responsive" id="table">   
                    <table style="margin-left:10px; margin-right:10px" id="example" class="cell-border tdesign" cellspacing="0" >
                         <thead><tr>
                <th>Employee Name</th>
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
                <th>6</th>
                <th>7</th>
                <th>8</th>
                <th>9</th>
                <th>10</th>
                <th>11</th>
                <th>12</th>
                <th>13</th>
                <th>14</th>
                <th>15</th>
                <th>16</th>
                <th>17</th>
                <th>18</th>
                <th>19</th>
                <th>20</th>
                <th>21</th>
                <th>22</th>
                <th>23</th>
                <th>24</th>
                <th>25</th>
                <th>26</th>
                <th>27</th>
                <th>28</th>
                <th>29</th>
                <th>30</th>
                <th>31</th>
                <th>present</th>
                <th>Absent</th>   
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
//var ALLEMPLOYEES={}; 
            var EmpArr=[];
    var EmployeeId;
    var otable;
    var displayTable=[];
   ////////////////////////////////////////
    
         var xhr5 = new XMLHttpRequest(), 
        method = 'GET',
        overrideMimeType = 'application/json',
        url =   ''+serverUrl+'reports/getAllemployee';

              // ADD THE URL OF THE FILE.
//alert(url);
    xhr5.onreadystatechange = function () {
      //alert("request");
        if (xhr5.readyState === XMLHttpRequest.DONE && xhr5.status === 200) {
        //  alert(xhr2.responseText);   
            
        var data = JSON.parse(xhr5.responseText);
            ALLEMPLOYEES = data;
        for(var i=0; i<data.length; i++){
       
             EmpArr[data[i]['id']]=data[i]['name'];
        }
           
        }
    };
   
    xhr5.open(method, url, true);
    xhr5.send(); 
    
    
    
    
    
    
    
    
    
    
     var tdDays = "", tdEmployee="", tdPresent="", tdAbsent="";
    
    ///////////////////////////////////////////
    function createTable(){
       
        displayTable = [],txt="";
       // var column = oTable.columns([6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25] );
// column.visible(false);
// column = oTable.columns([Cid,Cid1,Cid2,Cid3,Cid4,Cid5,Cid6,Cid7,Cid8,Cid9]);
  
var datefrom = document.getElementById("txtDate").value;
//var dateto = document.getElementById("to").value;
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
    var date = new Date(datefrom);
var month = date.getMonth() + 1;
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
var to = year+"-"+month+"-"+dayPerMonth[month-1];

//alert(from);
    

//var days = getDateDifference(datefrom);
$.ajax({

//url:"http://192.168.1.2/liveratrack_web/login/master/getEmployeeAttendancedate?from="+from+"&to="+to+"",
url:""+serverUrl+"reports/getattendance?from="+from+"&to="+to+"",
type: "GET",
data: { 

},
dataType: "json",
success: function(returnedData) {
var CircleColor;
// alert(ALLEMPLOYEES);
//  $("#employeelist"+0+"".empty());
for (var j=0;j<ALLEMPLOYEES.length;j++){
var counter = 0;
var CircleColor;
tdDays = "";

tdEmployee = '<tr><td>'+ALLEMPLOYEES[j]['name']+'</td>';
   for(var k=1; k<=31; k++){
 // alert(ALLEMPLOYEES[j]['id']+"id"+k);
    tdDays += '<td><div id='+ALLEMPLOYEES[j]['id']+"id"+k+'>A</div></td>';
    
}
for(var i=0;i<returnedData.length;i++){
  

if(ALLEMPLOYEES[j]['id'] == returnedData[i]['employeeID']){

//  alert(returnedData[i]['employeeID'])
//alert(returnedData[i]['datetime']);
var days= getDay(returnedData[i]['datetime']);
var dateTime = returnedData[i]['datetime'];

counter++;
//alert("days:"+days);
//alert("cn:"+counter);

CircleColor= "palegreen";
//alert(j);
//  alert("green") ;
   // alert(ALLEMPLOYEES[j]['id']+"id"+days);
//alert(document.getElementById(""+ALLEMPLOYEES[j]['id']+"id"+days+"").innerHTML);
   // alert(ALLEMPLOYEES[j]['id']+"id"+days);
//document.getElementById(""+ALLEMPLOYEES[j]['id']+"id"+days+"").style.background = CircleColor;

}
}
var absent =numOfDays-counter;


//$("#employeelist"+j+"").append("<li><ul class='innerbox'><li>"+empDate+"</li></ul></li>");  
tdPresent = '<td>'+counter+'</td>';
tdAbsent = '<td>'+absent+'</td></tr>';

txt = tdEmployee+tdDays+tdPresent+tdAbsent;
//alert(txt);
displayTable[j] = txt;
}


 otable.clear().draw();
            //scrollPosX = $("#tblData").scroll.offsetX();
            //	alert(otable.draw().value);
            // alert(displayTable.length);
            // alert(otable.innerHTML);
            for (i = 0; i < displayTable.length; i++) {
           //   alert(displayTable[i])
              otable.row.add($(displayTable[i]));
            }
            otable.draw();
         //   oTable.columns.adjust().draw();
          //  otable.fixedColumns().update();
           columnShow(numOfDays);
    checkData(returnedData,numOfDays);
        }
});


}

  
    }
    
function columnShow(numOfDays)  {
    var columns = otable.columns([29,30,31]);
    columns.visible(true);
    
    if(31>numOfDays){
         var columns = otable.columns([31]);
        columns.visible(false);
    }
     if(30>numOfDays){
         var columns = otable.columns([30,31]);
        columns.visible(false);
    }
        if(29>numOfDays){
         var columns = otable.columns([29,30,31]);
        columns.visible(false);
    }
}  
        
        
        
    function checkData(returnedData,numOfDays){
       displayTable = [];
        for (var j=0;j<ALLEMPLOYEES.length;j++){
var counter = 0;
var CircleColor;
tdDays = "";
tdEmployee = '<tr><td>'+ALLEMPLOYEES[j]['name']+'</td>';
  for(var i=0;i<returnedData.length;i++){
  //alert("gfdgfd");

if(ALLEMPLOYEES[j]['id'] == returnedData[i]['employeeID']){
   // tdDays = ""

//  alert(returnedData[i]['employeeID'])
//alert(returnedData[i]['datetime']);
var days= getDay(returnedData[i]['datetime']);
var dateTime = returnedData[i]['datetime'];


//alert("days:"+days);
//alert("cn:"+counter);
counter++;
CircleColor= "palegreen";
//alert(tdDays[6]);

//alert(j);
//  alert("green") ;
// tdDays += '<td id='+ALLEMPLOYEES[j]['id']+"id"+k+'>P</td>';
document.getElementById(""+ALLEMPLOYEES[j]['id']+"id"+days+"").innerHTML = "P";
//document.getElementById(""+ALLEMPLOYEES[j]['id']+"id"+days+"").style.background = CircleColor;
  // alert(displayTable[j]);

}

    }
             for(var k=1; k<=31; k++){
 // alert(ALLEMPLOYEES[j]['id']+"id"+k);
              if(document.getElementById(""+ALLEMPLOYEES[j]['id']+"id"+k+"") != null){   
    var data1= document.getElementById(""+ALLEMPLOYEES[j]['id']+"id"+k+"").innerHTML;
                  if(data1 == "P"){
    tdDays += '<td style="background-color:palegreen;"><div id='+ALLEMPLOYEES[j]['id']+"id"+k+'>'+data1+'</div></td>';
                  }else{
                      tdDays += '<td><div id='+ALLEMPLOYEES[j]['id']+"id"+k+'>'+data1+'</div></td>';
                  }
              }else{
                 tdDays += '<td><div id='+ALLEMPLOYEES[j]['id']+"id"+k+'>A</div></td>'; 
              }
    
}
        var absent = numOfDays - counter;
 tdPresent = '<td>'+counter+'</td>';
tdAbsent = '<td>'+absent+'</td></tr>';
       
        txt = tdEmployee+tdDays+tdPresent+tdAbsent;
          //  alert(txt);
            displayTable[j] = txt;
//alert(txt);

}
    

 otable.clear().draw();
            
            for (i = 0; i < displayTable.length; i++) {
             //   alert(displayTable[i]);
        
              otable.row.add($(displayTable[i]));
            }
            otable.row().draw();
    }
       
        
        
        
        
        
        
        
        
        
        
        
       
//         var txt=''; 
//    var tdEmployeeName="", tdDate="", tdLocation="",tdPresentlist="",tdAbsentlist="";
//   displayTable= [];
//    var xhr = new XMLHttpRequest(), 
//        method = 'GET',
//        overrideMimeType = 'application/json',
//        url = ''+serverUrl+'reports/getAllemployee'; 
//              // ADD THE URL OF THE FILE.
//   
//    xhr.onreadystatechange = function () {
//        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
//                
//            // PARSE JSON DATA.
//            if(xhr.responseText){
//                
//           //    alert(xhr.responseText);
//               var data=JSON.parse(xhr.responseText);
//                ALLEMPLOYEES = data;
//                 EmployeeLength = data.length;
//               for(var i=0; i<data.length; i++){
//                tdEmployeeName= '<tr style="height:20px;" role="row"><td>'+data[i]['name']+'</td>';
//                   tdAttendance = '<td id ="attendancedays'+i+'"></td>';
//                   tdPresentlist = '<td ><div id ="presentdays'+i+'"></div></td>';
//                   tdAbsentlist = '<td ><div id ="absentdays'+i+'"></div></td></tr>'
//   	         
//          txt = tdEmployeeName+tdAttendance+tdPresentlist+tdAbsentlist;
//          displayTable[i]= txt;
//         
//               }
//             
//          scrollPos = $("#example").scrollTop();
//          otable.clear().draw();
//          for(i = 0; i < displayTable.length; i++) {
//          otable.row.add($(displayTable[i]));
//            }
//     otable.draw();
//  
//            }
//        }
//    };
//   
//    xhr.open(method, url, true);
//    xhr.send();
//    }



$(document).ready(function() {

         otable  = $('#example').DataTable( {
//              "columns": [
//                 {title: "Name" },
//
//       [ "Position" ],
//       [ "Office" ],
//        [ "Extn." ],
//       [ "Start date" ],
// 
//        [ "Salary" ]
//    ],
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
  
        createTable();
   // alert(ALLEMPLOYEES);

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
