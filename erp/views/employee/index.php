

















                                                    
                                                                       <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
                                                                       <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
                                                                       <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js">
                                                                       </script>
                                                                       <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js">
                                                                       </script>
                                                                       <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js">
                                                                       </script>
                                                                       <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js">
                                                                       </script>
                                                                       <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/fixedcolumns/3.2.4/js/dataTables.fixedColumns.min.js">
                                                                       </script>
                                                                      

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
             <span class="title_pra" style="font-size:18px;"><strong>Employee</strong></span>
               <input type="button" id="btnAdd"  class="btn btn-info pull-right" style="width:110px; font-size:10px; margin-top:10px; margin-bottom:10px" onclick="addEmployeeMaster()" value="Add New Employee"> 
            </div>
            <br>
            <center> <input type="text" id="searchTxt" placeholder="Search"></center><br>
              <div class="table-responsive" id="table">   
                    <table style="margin-left:10px; margin-right:10px" id="example" class="cell-border tdesign" cellspacing="0" >
                                                    <thead>
                                                         <tr role="row" style="height:15px;" class="info">
      
                                                                    <th>Name</th>
                                                                    <th>QR</th>
                                                                    <th>Photo</th>
                                                                    <th>Designation</th>
                                                                    <th>Location</th>
                                                                   <th>Phone</th>
                                                                   <th>Pan</th>
                                                                   <th>Aadhaar</th>
                                                                   <th>BloodGroup</th>
                                                                   <th>DOB</th>
                                                                   <th>Date Of Joining</th>
                                                                   <th></th>
                                                                   <th></th>
                                                                   <th></th>
                                             </tr>
                                        </thead>
                                     </table>	
                                 </div>
                                                

                                                 
                            
	
	<div id="regForm" hidden>
        <span style="font-size:16px;"><strong>Add/Edit</strong></span>
       
	 <form id="vehicle" role="form">
        <div class="col-md-12" style="margin-top: 50px;">
          <div class="col-md-offset-1 col-md-5">
            <div style="display: flex;">
            <div class="box"><p class="input_title"><span style="color:red;">*</span> Name:</p></div>
            <div class="box box2"><input class="input_bar form-control" type="text" name="name" id="name" placeholder="Enter Name"></div>
            </div>
              <span id="alertMsgTxt" style="color:red;"></span>
            <div style="display: flex;">
            <div class="box"><p class="input_title"><span style="color:red;">*</span> Father Name:</p></div>
            <div class="box box2"><input class="input_bar form-control" type="text"  name="fathername" id="fathername" placeholder="Enter fathername"></div>
              </div>
              <span id="alertMsgTxt1" style="color:red;"></span>
            <div style="display: flex;">
            <div class="box"><p class="input_title"><span style="color:red;">*</span> Address:</p></div>
            <div class="box box2"><input class="input_bar form-control" type="text" name="address" id="address" placeholder="Enter Address"></div>
            </div>
              <span id="alertMsgTxt2" style="color:red;"></span>
            <div style="display: flex;">
            <div class="box"><p class="input_title"> City:</p></div>
            <div class="box box2"><input class="input_bar form-control" type="text" name="city" id="city" placeholder="Enter City"></div>
            </div>
            
            <div style="display: flex;">
            <div class="box"><p class="input_title">State:</p></div>
            <div class="box box2"><input class="input_bar form-control" type="text" name="state" id="state" placeholder="Enter State"></div>
            </div>

            <div style="display: flex;">
            <div class="box"><p class="input_title"><span style="color:red;">*</span> Phone No:</p></div>
            <div class="box box2"><input class="input_bar form-control" type="text" name="phoneno" id="phoneno" placeholder="Enter Phone No"></div>
            </div>
              <span id="alertMsgTxt3" style="color:red;"></span>
              
            <div style="display: flex;">
            <div class="box"><p class="input_title"> DOB:</p></div>
            <div class="box box2"><input class="input_bar form-control" type="date" name="dob" id="dob" placeholder="Enter DOB"></div>
            </div>
      
              
              <div style="display: flex;">
            <div class="box"><p class="input_title"><span style="color:red;">*</span> Date Of Joining:</p></div>
            <div class="box box2"><input class="input_bar form-control" type="date" name="dateofjoining" id="dateofjoining" placeholder="Enter Date Of Joining"></div>
            </div>
              <span id="alertMsgTxt4" style="color:red;"></span>
              
              <div style="display: flex;">
            <div class="box"><p class="input_title"> Designation:</p></div>
            <div class="box box2"><input class="input_bar form-control" type="text" name="designation" id="designation" placeholder="Enter designation"></div>
            </div>
              
              <div style="display: flex;">
            <div class="box"><p class="input_title"> Posting Location:</p></div>
            <div class="box box2"><input class="input_bar form-control" type="text" name="posting" id="posting" placeholder="Enter posting"></div>
            </div>
            
              
              <div style="display: flex;">
            <div class="box"><p class="input_title">Blood Group:</p></div>
            <div class="box box2"><input class="input_bar form-control" type="text" name="bloodgroup" id="bloodgroup" placeholder="Enter bloodgroup"></div>
            </div>
              
              <div style="display: flex;">
            <div class="box"><p class="input_title">Salary:</p></div>
            <div class="box box2"><input class="input_bar form-control" type="text" name="salary" id="salary" placeholder="Enter salary"></div>
            </div>
             
              
              <div style="display: flex;">
            <div class="box"><p class="input_title">PAN NO:</p></div>
            <div class="box box2"><input class="input_bar form-control" type="text" name="panno" id="panno" placeholder="Enter panno"></div>
            </div>
              
              <div style="display: flex;">
            <div class="box"><p class="input_title">Aadhaar No:</p></div>
            <div class="box box2"><input class="input_bar form-control" type="text"  name="aadhaarno" id="aadhaarno" placeholder="Enter aadhaarno"></div>
            </div>
              
              <div style="display: flex;">
            <div class="box"><p class="input_title">Photo:</p></div>
            <div class="box box2"><input class="input_bar form-control" type="file" name="photo" id="photo" value="Upload"></div>
            </div>
              
          
            <input type="hidden" id="vid" name="vid" value="">
           <div style="text-align: center;">
                <input type="button" class="btn btn-default sbmt_btn" id="submitbtn" onclick="submitBtn()" value="Submit">
            </div>
          </div>
        </div>
        </form>
            </div>
<div id="view" hidden>
<span style="font-size:14px;"><strong>View</strong></span>
                                                               
 <ul class="pager">
    <li><button type="button" id="prev">Previous</button></li>
    <li><a href="<?php echo URL; ?>master/view_vehiclemaster/?id=<?php echo $this->NextId; ?>">Next</a></li>
	
  </ul>
 <div class="table-responsive">  
<div class="col-md-12">

	                                                           <div class="panel-primary" >
                                                                                        <div class="panel-heading" align="center">RTO Details</div>
                                                                                                              <div class="panel-body">  
                                                                                          
                                                                                         
                                                                                           <div class="col-xs-6 form-group">
                                                                                              <label class="control-label col-xs-4" for="name">name:</label>
                                                                                              <div class="col-xs-8" id="name1">
                                                                                               
                                                                                                  </div>
                                                                                            </div>
                                                                                        
                                                                                          <div class="col-xs-6 form-group">
                                                                                              <label class="control-label col-xs-4" for="fathername">fathername:</label>
                                                                                              <div class="col-xs-8" id="fathername1">
                                                                                              
                                                                                                  </div>
                                                                                            </div>
                                                                                          <div class="col-xs-6 form-group">
                                                                                              <label class="control-label col-xs-4" for="address">address:</label>
                                                                                              <div class="col-xs-8" id="address1">
                                                                                                
                                                                                                  </div>
                                                                                            </div>
                                                                                          
                                                                                          <div class="col-xs-6 form-group">
                                                                                              <label class="control-label col-xs-4" for="city">city:</label>
                                                                                              <div class="col-xs-8" id="city1">
                                                                                                
                                                                                              </div>
                                                                                            </div>
                                                                                          <div class="col-xs-6 form-group">
                                                                                              <label class="control-label col-xs-4" for="state">state:</label>
                                                                                              <div class="col-xs-8" id="state1">
                                                                                               
                                                                                                  </div>
                                                                                            </div>
                                                                                          <div class="col-xs-6 form-group">
                                                                                              <label class="control-label col-xs-4" for="phoneno">phoneno:</label>
                                                                                              <div class="col-xs-8" id="phoneno1">
                                                                                                
                                                                                                  </div>
                                                                                            </div>
                                                                                          <div class="col-xs-6 form-group">
                                                                                              <label class="control-label col-xs-4" for="dob">dob:</label>
                                                                                              <div class="col-xs-8" id="dob1">
                                                                                               
                                                                                                  </div>
                                                                                            </div>
                                                                                          <div class="col-xs-6 form-group">
                                                                                              <label class="control-label col-xs-4" for="dateofjoining">dateofjoining:</label>
                                                                                              <div class="col-xs-8" id="dateofjoining1">
                                                                                                
                                                                                                  </div>
                                                                                            </div>

                                                                                          <div class="col-xs-6 form-group">
                                                                                              <label class="control-label col-xs-4" for="panno">panno:</label>
                                                                                              <div class="col-xs-8" id="panno1">
                                                                          
                                                                                                  </div>
                                                                                            </div>
                                                                                          <div class="col-xs-6 form-group">
                                                                                              <label class="control-label col-xs-4" for="designation">designation:</label>
                                                                                              <div class="col-xs-8" id="designation1">
                                                                                              
                                                                                                  </div>
                                                                                            </div>
                                                                                             <div class="col-xs-6 form-group">
                                                                                              <label class="control-label col-xs-4" for="posting">Posting:</label>
                                                                                              <div class="col-xs-8" id="posting1">
                                                                                              
                                                                                                  </div>
                                                                                            </div>
                                                                                          <div class="col-xs-6 form-group">
                                                                                              <label class="control-label col-xs-4" for="aadhaarno">aadhaarno:</label>
                                                                                              <div class="col-xs-8" id="aadhaarno1">
                                                                                              
                                                                                                  </div>
                                                                                            </div>
                                                                                            <div class="col-xs-6 form-group">
                                                                                              <label class="control-label col-xs-4" for="bloodgroup">bloodgroup:</label>
                                                                                              <div class="col-xs-8" id="bloodgroup1">
                                                                                              
                                                                                                  </div>
                                                                                            </div>
                                                                                            <div class="col-xs-6 form-group">
                                                                                              <label class="control-label col-xs-4" for="salary">salary:</label>
                                                                                              <div class="col-xs-8" id="salary1">
                                                                                              
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

   // alert("start")
   var serverUrl="<?php echo URL; ?>";
  // localStorage["id"]="";
   var data;
   var sensor;
   //alert(localStorage['id'])
   var  x = document.getElementById("table");
   var y = document.getElementById("regForm");
   var z =document.getElementById("view");
   var back= document.getElementById("btnAdd");
   var header = document.getElementById("heading");
  
   var submit= document.getElementById("submitbtn"); 
   var otable, displayTable=[], txt;
                                                      
function addEmployeeMaster(){
       
        if(back.value == "Add New Employee"){
               
            data="";
            updateEditinfo(data);
      
        x.style.display="none";
         
        
        //if (y.style.display === "none") {
        y.style.display = "block";
        z.style.display = "none";
        back.value="Back";
        header.value = "Add/Edit Employeemaster"
        }
        else{
           x.style.display="block";
           y.style.display = "none";
           z.style.display = "none";
           back.value ="Add New Employee";
            header.value = "Employee Master"
        }
  
    
}

document.getElementById("submitbtn").addEventListener("click", function(event){
    event.preventDefault()
});
    function submitBtn(){
     
  var name = $("#name").val(); 
    var fathername = $("#fathername").val();
    var address = $("#address").val();
    var city = $("#city").val();
    var state = $("#state").val();
    //var RCYN =$("input:radio[name=RCYN]:checked").val();
    var phoneno = $("#phoneno").val();
  var dob = $("#dob").val();
    var dateofjoining = $("#dateofjoining").val(); 
    var designation = $("#designation").val(); 
    var posting = $("#posting").val();
    var bloodgroup = $("#bloodgroup").val();  
    var salary = $("#salary").val(); 
    var panno = $("#panno").val();
    var aadhaarno = $("#aadhaarno").val();  
    var photo = $("#photo").val(); 
   
   var vid= $("#vid").val();
var button= $("#submitbtn").val();
if(name!="" && fathername !="" && address!="" && phoneno!="" && dateofjoining!=""){



if(button == "Submit"){

     var xhr1 = new XMLHttpRequest(), 
        method = 'POST',
       // var formData = new FormData(this);
        url = serverUrl+'employee/submit_employee?name='+name+'&fathername='+fathername+'&address='+address+'&city='+city+'&state='+state+'&phoneno='+phoneno+'&dob='+dob+'&dateofjoining='+dateofjoining+'&designation='+designation+'&posting='+posting+'&bloodgroup='+encodeURIComponent(bloodgroup)+'&salary='+salary+'&panno='+panno+'&aadhaarno='+aadhaarno+'&photo='+photo; 
    //alert(url);
              // ADD THE URL OF THE FILE.

    xhr1.onreadystatechange = function () {
      //alert("request");
        if (xhr1.readyState === XMLHttpRequest.DONE && xhr1.status === 200) {
             
            createTable();
             x.style.display = "block";
            y.style.display = "none";
             back.value="Add New Employee";
             $.notify("Employee Added Successfully", "success"); 
              
        }
    };
    var form = document.getElementById('vehicle');
   var formData = new FormData(form);
    xhr1.open(method, url, true);
    xhr1.send(formData);
}else{

  var xhr1 = new XMLHttpRequest(), 
        method = 'POST',
        overrideMimeType = 'application/json',
        url =  serverUrl+'employee/update_employee?id='+vid+'&name='+name+'&fathername='+fathername+'&address='+address+'&city='+city+'&state='+state+'&phoneno='+phoneno+'&dob='+dob+'&dateofjoining='+dateofjoining+'&designation='+designation+'&posting='+posting+'&bloodgroup='+encodeURIComponent(bloodgroup)+'&salary='+salary+'&panno='+panno+'&aadhaarno='+aadhaarno+'&photo='+photo+''; 
              // ADD THE URL OF THE FILE.
//alert(url);
    xhr1.onreadystatechange = function () {
      //alert("request");
        if (xhr1.readyState === XMLHttpRequest.DONE && xhr1.status === 200) {
        
               createTable();
             y.style.display = "none";
            x.style.display = "block";
             back.value="Add New Employee";
             $.notify("Employee Updated Successfully", "success"); 
        }
    };
    var form = document.getElementById('vehicle');
   var formData = new FormData(form);
    xhr1.open(method, url, true);
    xhr1.send(formData);
    $("#alertMsgTxt").text("");
     $("#alertMsgTxt1").text("");
     $("#alertMsgTxt2").text("");
     $("#alertMsgTxt3").text("");
     $("#alertMsgTxt4").text("");
}
}else{
if(name==""){
  $("#alertMsgTxt").text("Please Enter Employee Name");
}
    else{
         $("#alertMsgTxt").text("");
        
    }
    if(fathername==""){
     $("#alertMsgTxt1").text("Please Enter Father Name");
    }
    else{
        
         $("#alertMsgTxt1").text("");
    }
    if(address==""){
     $("#alertMsgTxt2").text("Please Enter Address");
    }
    else{
        
         $("#alertMsgTxt2").text("");
    }
    if(phoneno==""){
     $("#alertMsgTxt3").text("Please Enter Phone Number");
    }
    else{
        
         $("#alertMsgTxt3").text("");
    }
    if(dateofjoining==""){
     $("#alertMsgTxt4").text("Please Enter Date Of Joining");
  //alert("error");
}
    else{
        
         $("#alertMsgTxt4").text("");
    }
    //end validation
return false;
}
    }
function okbtn(){
        x.style.display="block";
        y.style.display = "none";
        z.style.display = "none";
}



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


$(document).ready(function(){
//alert("starts");
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
        
//        $('#selectSearch').on('change', function(){
//            selectSearchTxt = this.value;
//           // oTable.search(this.value).column(2).data().draw();  
//	       // oTable.search(MarkerStatus).column(3).data().draw();
//           oTable.columns().search('');
//           if(selectSearchTxt!=""){
//           var Target = groups.indexOf(selectSearchTxt);
//                    gcDon[Target]=0;
//                    gcDoff[Target]=0;
//                    gcDNotRpt[Target]=0;
//                    gcFuel[Target]=0;
//        }
//          if(MarkerStatus=='truck'){
//            oTable
//                .column(1).search(selectSearchTxt)
//                .column(3).search(MarkerStatus)
//                .draw();
//            }else{
//                oTable
//                .column(1).search(selectSearchTxt)
//                .column(2).search(MarkerStatus)
//                .draw();
//
//            }
//          });
});                                                      
//  
  function UpdateInfo(){

	//alert("end");
	createTable();
	}


  function getDateDifference(daten){

var date1 = new Date();
var date2 = new Date(daten);
if(daten!='0000-00-00' && daten!=''){
var timeDiff = (date2.getTime() - date1.getTime());
//alert(timeDiff);
var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24)); 
return diffDays+" days";
}else{
    return "N.A"; 
}
}
function getDateDifferenceColor(daten){

var date1 = new Date();
var date2 = new Date(daten);
var bgColor="palegreen";
if(daten!='0000-00-00' && daten!=''){
var timeDiff = (date2.getTime() - date1.getTime());
//alert(timeDiff);
var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24)); 
if(diffDays<=7){

bgColor="#FFE766";
}
if(diffDays<=2){

bgColor="#FFE0E0";
}

return bgColor;
}else{
    return ""; 
}
}


  function createTable(){
    var txt='';
    var tdName="", tdQR="", tdPhoto="",  tdDesgn="";
    var tdLocation="", tdPhone="", tdPanno="", tdAadhaar="", tdBloodgroup="", tdDob="", tdDoj="", tdView="", tdEdit="", tdDelete="";
  displayTable= [];
    var xhr = new XMLHttpRequest(), 
        method = 'GET',
        overrideMimeType = 'application/json',
        url = ''+serverUrl+'employee/getemployee'; 
              // ADD THE URL OF THE FILE.

    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                
            // PARSE JSON DATA.
            if(xhr.responseText){

              // alert(xhr.responseText);
               var data=JSON.parse(xhr.responseText);
               for(var i=0; i<data.length; i++){

          tdName= '<tr style="height:20px;" role="row"><td>'+data[i]['name']+'</td>';
          tdQR = '<td><a href="'+serverUrl+'employee/printIDCard?id='+data[i]['id']+'" target="_blank"><img src="'+serverUrl+'public/images/qrcode.png" width="15px"/></a></td>';
          tdPhoto='<td><a href="'+serverUrl+'public/images/employee/photo/'+data[i]['photo']+'" target="_blank"><img src="'+serverUrl+'public/images/employee/photo/'+data[i]['photo']+'" width="30px;" /></a></td>';
          tdDesgn='<td>'+data[i]['designation']+'</td>';
          tdLocation='<td>'+data[i]['location']+'</td>';
          tdPhone='<td>'+data[i]['phoneno']+'</td>';
          tdPanno='<td>'+data[i]['panno']+'</td>';
          tdAadhaar='<td>'+data[i]['aadhaarno']+'</td>';
          tdBloodgroup='<td>'+data[i]['bloodgroup']+'</td>';
          tdDob='<td>'+data[i]['dob']+'</td>';
          tdDoj='<td>'+data[i]['dateofjoining']+'</td>';
          tdView='<td><a href="#a" onclick="javascript: view('+data[i]['id']+',1)"> VIEW</a></td>';
          tdEdit='<td><a href="#a" onclick="javascript: view('+data[i]['id']+', 2)"> EDIT</button></td>';
          tdDelete='<td id="deleteClick"><a href="#a" onclick="javascript:confirmDelete('+data[i]['id']+');" id="delete"> DELETE</a></td></tr>';
          
          txt = tdName+tdQR+tdPhoto+tdDesgn+tdLocation+tdPhone+tdPanno+tdAadhaar+tdBloodgroup+tdDob+tdDoj+tdView+tdEdit+tdDelete;
          displayTable[i]= txt;
        
               }
             
          scrollPos = $("#example").scrollTop();
          otable.clear().draw();
         for( i = 0; i < displayTable.length; i++ ) {

		  otable.row.add($(displayTable[i]));
		 }
	    otable.draw();
            }
        }
    };
   
    xhr.open(method, url, true);
    xhr.send();
}
function view(id, data1){
  if(data1==1){
      updateinfo(id);
      
        z.style.display = "block";
        x.style.display = "none";
        
        y.style.display = "none";
        back.value = "Back"
  
  }else{
          x.style.display = "none";
          y.style.display = "block";
          z.style.display ="none"
          back.value = "Back";
    
    updateEditinfo(id);
  }
}
function updateEditinfo(mdata){
    $("#alertMsgTxt").text("");
     $("#alertMsgTxt1").text("");
     $("#alertMsgTxt2").text("");
     $("#alertMsgTxt3").text("");
     $("#alertMsgTxt4").text("");
      if(mdata != ""){ 
    var xhr4 = new XMLHttpRequest(), 
        method = 'GET',
        overrideMimeType = 'application/json',
        url =   ''+serverUrl+'employee/view_employee_details?id='+mdata+''; 
            
    xhr4.onreadystatechange = function () {
        if (xhr4.readyState === XMLHttpRequest.DONE && xhr4.status === 200) {

var data=JSON.parse(xhr4.responseText);
document.getElementById("vid").value = mdata;
    document.getElementById("name").value = data[0]['name'];
       document.getElementById("fathername").value = data[0]['fathername'];
         document.getElementById("address").value=data[0]['address'];
            document.getElementById("city").value=data[0]['city'];
            document.getElementById("state").value=data[0]['state'];
            //$("input[name=RCYN][value=" + data[0]['RCYN'] + "]").attr('checked', 'checked');
           document.getElementById("phoneno").value=data[0]['phoneno'];
            document.getElementById("dob").value=data[0]['dob'];
            document.getElementById("dateofjoining").value=data[0]['dateofjoining'];
            
            document.getElementById("designation").value=data[0]['designation'];
            document.getElementById("posting").value=data[0]['posting'];
             document.getElementById("bloodgroup").value=data[0]['bloodgroup'];
            document.getElementById("salary").value=data[0]['salary'];
            document.getElementById("aadhaarno").value=data[0]['aadhaarno'];
            document.getElementById("panno").value=data[0]['panno'];
            document.getElementById("photo").src=data[0]['photo'];
           
           
             submit.value="Update";
          
        }
    };
   
    xhr4.open(method, url, true);
    xhr4.send();
      }else if(mdata == ""){
        
         document.getElementById("name").value = "";
       document.getElementById("fathername").value = "";
         document.getElementById("address").value="";
            document.getElementById("city").value="";
            document.getElementById("state").value="";
           document.getElementById("phoneno").value="";
            document.getElementById("dob").value="";
            document.getElementById("dateofjoining").value="";
            document.getElementById("designation").value="";
            document.getElementById("posting").value="";
            document.getElementById("bloodgroup").value="";
            document.getElementById("salary").value="";
            document.getElementById("aadhaarno").value="";
            document.getElementById("panno").value="";
            document.getElementById("photo").value="";
             submit.value="Submit";
      }

}
                                                      
    
function updateinfo(sdata){
      if(sdata != null){
        var xhr3 = new XMLHttpRequest(), 
        method = 'GET',
        overrideMimeType = 'application/json',
        url = ''+serverUrl+'employee/view_employee_details?id='+sdata+''; 
        xhr3.onreadystatechange = function () {
    
        if (xhr3.readyState === XMLHttpRequest.DONE && xhr3.status === 200) {

            var data= JSON.parse(xhr3.responseText);

            document.getElementById("name1").innerHTML= data[0]['name'];
            document.getElementById("fathername1").innerHTML=data[0]['fathername'];
            document.getElementById("address1").innerHTML=data[0]['address'];
            document.getElementById("city1").innerHTML=data[0]['city'];
            document.getElementById("state1").innerHTML=data[0]['state'];
            document.getElementById("phoneno1").innerHTML=data[0]['phoneno'];
            document.getElementById("dob1").innerHTML=data[0]['dob'];
            document.getElementById("dateofjoining1").innerHTML=data[0]['dateofjoining'];
            document.getElementById("designation1").innerHTML=data[0]['designation'];
            document.getElementById("panno1").innerHTML=data[0]['panno'];
            document.getElementById("aadhaarno1").innerHTML=data[0]['aadhaarno'];
            document.getElementById("posting1").innerHTML=data[0]['posting'];
            document.getElementById("salary1").innerHTML=data[0]['salary'];
            document.getElementById("bloodgroup1").innerHTML=data[0]['bloodgroup'];
            document.getElementById("photo1").innerHTML=data[0]['photo'];
           
       }
    };
    xhr3.open(method, url, true);
    xhr3.send();
        }
 }
document.getElementById("delete").addEventListener("click", function(event){
    event.preventDefault()
});
                                                            
                                                  function confirmDelete(id) {
                                                   // var delUrl=""+serverUrl+"master/delete_vehiclemaster/?"+id+"";
                                                    
                                                   
                                                    if (confirm("Are you sure you want to delete")) {
                                                      var xhr2 = new XMLHttpRequest(), 
        method = 'GET',
        overrideMimeType = 'application/json',
        url = ''+serverUrl+'employee/delete_employee_details/'+id+''; 
    xhr2.onreadystatechange = function () {
     
        if (xhr2.readyState === XMLHttpRequest.DONE && xhr2.status === 200) {
         
              createTable();
         }
    },
    xhr2.open(method, url, true);
    xhr2.send();
   }
 }
        function openNav() {
        document.getElementById("mySidenav").style.width = "210px";
    }
    
    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";

    }  
    function masterDropdown() {
    document.getElementById("myDropdown").classList.toggle("show");
}
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
function reportDropdown() {
    document.getElementById("reportDropdown").classList.toggle("show");
}
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
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
                                                       </script>
                                                  


