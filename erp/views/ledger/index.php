
                                                    
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
<link href="<?php echo URL; ?>public/css/select2.min.css" rel="stylesheet" />
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
                            
                                                  
                                                   
 <div class="container">
	            <div class="row">
                 <div class="col-md-12">
  <div class="account-box">
       <span style="font-size:18px;"><strong>Ledger</strong></span>
       <input type="button" id="btnAdd"  class="btn btn-info pull-right" style="width:110px; font-size:10px; margin-top:10px; margin-bottom:10px" onclick="addLedger()" value="Add New Ledger">
      <br clear="all" />
<div class="or-box">
    <center> <input type="text" id="searchTxt" placeholder="Search"></center></br>
 </div>
                                        <div class="table-responsive" id="table">   
                                                <table style="margin-left:10px; margin-right:10px" id="example" class="cell-border tdesign" cellspacing="0" >
                                                    <thead>
                                                         <tr>
                                                            <th>Sl. No</th>
                                                            <th>Ledger Title</th>
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
  
<div class="panel panel-primary" style="background:#f2f2f2">
<div class="panel-heading">Add Ledger</div>
	                    <div class="panel-body">  
	
	
	 <div id="response" class="col-xs-12 col-md-6 col-sm-6 col-lg-6 form-group">
      <label class="control-label col-xs-12" for="ledgertitle"><span style="color:red;">*</span> Ledger Title:</label>
      <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
        <input type="text" class="form-control" name="title" id="title" placeholder="Enter Ledger Title" autocomplete="title" required>
             
      </div>
          <span id="alertMsgTxt" style="color:red;"></span>
    </div>
	<div style="padding-left:70px">
         <input type="hidden" id="vid" name="vid" value="">
         <input type="submit" name="submit" id="submitbtn" style="background-color:rgb(31, 133, 187); color:white; width:200px;height:50px;" onclick="submitBtn()" value="Submit">
    </div>
   </div>
</div>
</form>
</div>
<div id="view" hidden>
     <span style="font-size:14px;"><strong>View</strong></span>
                                                               
 <div class="table-responsive">  
     <div class="col-md-12">
        <div class="panel-primary" >
            <div class="panel-heading" align="center">RTO Details</div>
                <div class="panel-body">  
                    <div class="col-xs-6 form-group">
                        <label class="control-label col-xs-4" for="VehicleNo">Ledger Id:</label>
                             <div class="col-xs-8" id="id_ledger1"></div>
                    </div>
                    <div class="col-xs-6 form-group">
                        <label class="control-label col-xs-4" for="title">Ledger Title:</label>
                              <div class="col-xs-8" id="title1"></div>
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
   
   var submit= document.getElementById("submitbtn"); 
   var otable, displayTable=[], txt;
  
function addLedger(){
        if(back.value == "Add New Ledger"){
            data="";
            updateEditinfo(data);
    
        x.style.display="none";
        y.style.display = "block";
        z.style.display = "none";
        back.value="Back";
       
        }
        else{
           x.style.display="block";
           y.style.display = "none";
           z.style.display = "none";
           back.value ="Add New Ledger";
          
        }
  
    
}

document.getElementById("submitbtn").addEventListener("click", function(event){
    event.preventDefault()
});
    function submitBtn(){
     
  var title = $("#title").val(); 
  var vid= $("#vid").val();
var button= $("#submitbtn").val();
if(title!=""){
    if(button == "Submit"){
        var xhr1 = new XMLHttpRequest(), 
        method = 'POST',
        url = serverUrl+'ledger/add_ledger?title='+title; 

              // ADD THE URL OF THE FILE.

    xhr1.onreadystatechange = function () {
      //alert("request");
        if (xhr1.readyState === XMLHttpRequest.DONE && xhr1.status === 200) {
              //alert(xhr1.responseText);
                //alert("submit");
            // PARSE JSON DATA.
          //  if(xhr1.responseText){
       // window.location.href= "vehiclemaster";
            createTable();
             x.style.display = "block";
            y.style.display = "none";
             back.value="Add New Ledger";
             $.notify("Ledger Added Successfully", "success"); 
              //  x.style.display = "block";
              //  y.style.display = "none";
              //  back.value="Add New Vehicle";
           // }
        }
    };
   
    xhr1.open(method, url, true);
    xhr1.send();
}else{

  var xhr1 = new XMLHttpRequest(), 
        method = 'POST',
        overrideMimeType = 'application/json',
        url =  serverUrl+'ledger/update_ledger?id_ledger='+vid+'&title='+title+''; 
        
    xhr1.onreadystatechange = function () {
      //alert("request");
        if (xhr1.readyState === XMLHttpRequest.DONE && xhr1.status === 200) {
         // alert("update"); 
            // PARSE JSON DATA.
          //  if(xhr1.responseText){

               // alert(xhr1.responseText);
               //window.location.href="vehiclemaster";
               createTable();
             y.style.display = "none";
            x.style.display = "block";
             back.value="Add New Ledger";
             $.notify("Ledger Updated Successfully", "success"); 
           
        }
    };
   
    xhr1.open(method, url, true);
    xhr1.send();
    $("#alertMsgTxt").text("");
    
}
}else{
if(title==""){
  $("#alertMsgTxt").text("Please Enter Ledger Title");
}
    else{
         $("#alertMsgTxt").text("");
        
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

function formatState (state) {
  if (!state.id) { return state.text; }
  var $state = $(
   '<span ><img sytle="display: inline-block;" src="http://192.168.1.2/liveratrack/public/images/maps/model/' + state.element.value + '-G.png" /> ' + state.text + '</span>'
  );
  return $state;
 }
$(document).ready(function(){
    
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
    var tdid="", tdTitle="", tdView="", tdEdit="", tdDelete="";
    
  displayTable= [];
    var xhr = new XMLHttpRequest(), 
        method = 'GET',
        overrideMimeType = 'application/json',
        url = ''+serverUrl+'ledger/getAllLedger'; 
              // ADD THE URL OF THE FILE.

    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                
            // PARSE JSON DATA.
            if(xhr.responseText){

              // alert(xhr.responseText);
               var data=JSON.parse(xhr.responseText);
               for(var i=0; i<data.length; i++){
                
          tdid= '<tr><td>'+data[i]['id_ledger']+'</td>';
          tdTitle = '<td>'+data[i]['title']+'</td>';
          tdView='<td><a href="#a" onclick="javascript: view('+data[i]['id_ledger']+',1)"> VIEW</a></td>';
          tdEdit='<td><a href="#a" onclick="javascript: view('+data[i]['id_ledger']+', 2)"> EDIT</button></td>';
          tdDelete='<td id="deleteClick"><a href="#a" onclick="javascript:confirmDelete('+data[i]['id_ledger']+');" id="delete"> DELETE</a></td></tr>';         
          txt = tdid+tdTitle+tdView+tdEdit+tdDelete;
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
   
    xhr.open(method, url, true);
    xhr.send();




		
}
function view(id, data1){
//alert(data1);
//localStorage["id"]=id;
 //data = localStorage["id"]
  if(data1==1){
       //   alert("safd")
        updateinfo(id);
      //Prevvehiclemaster(id);
        z.style.display = "block";
        x.style.display = "none";
        
        y.style.display = "none";
        back.value = "Back"
  
  //window.location.href= "view_vehiclemaster.html";
  }else{
          x.style.display = "none";
          y.style.display = "block";
          z.style.display ="none"
          back.value = "Back";
    //localStorage["id"]=id;
    updateEditinfo(id);
  }
}
function updateEditinfo(mdata){
    $("#alertMsgTxt").text("");
    
    
  //alert("enter");
  //alert("data+"+data);
      if(mdata != ""){ 
    var xhr4 = new XMLHttpRequest(), 
        method = 'GET',
        overrideMimeType = 'application/json',
        url =   ''+serverUrl+'ledger/getOneLedger?id_ledger='+mdata+''; 
              // ADD THE URL OF THE FILE.
//alert(url);
    xhr4.onreadystatechange = function () {
      //alert("request");
        if (xhr4.readyState === XMLHttpRequest.DONE && xhr4.status === 200) {

            // PARSE JSON DATA.
          //  if(xhr1.responseText){
              //  alert(xhr.responseText);
 
var data=JSON.parse(xhr4.responseText);
document.getElementById("vid").value = mdata;
    document.getElementById("title").value = data[0]['title'];
       
             submit.value="Update";
          
        }
    };
   
    xhr4.open(method, url, true);
    xhr4.send();
      }else if(mdata == ""){
        //alert("null");
        //  var str =  document.getElementById("VehicleNo").innerHTML;
        document.getElementById("title").value = "";
      
             submit.value="Submit";
      }

}
                                                      
    
function updateinfo(sdata){
       // alert(data);

        if(sdata != null){
        var xhr3 = new XMLHttpRequest(), 
        method = 'GET',
        overrideMimeType = 'application/json',
        url = ''+serverUrl+'ledger/getOneLedger?id_ledger='+sdata+''; 
            //alert(sdata)
        //alert(url)
              // ADD THE URL OF THE FILE.

    xhr3.onreadystatechange = function () {
      //alert("dsf");
        if (xhr3.readyState === XMLHttpRequest.DONE && xhr3.status === 200) {

         //alert(xhr3.responseText)
            var data= JSON.parse(xhr3.responseText);
           // alert(data);
           // for(var i=0; i<data.length)
           
            //alert(data[0]['id']);
           document.getElementById("id_ledger1").innerHTML= data[0]['id_ledger'];
            document.getElementById("title1").innerHTML= data[0]['title'];
         }
    };
    xhr3.open(method, url, true);
    xhr3.send();
        }
                          }




                                                    
                                                  
                                                  document.getElementById("delete").addEventListener("click", function(event){
    event.preventDefault()
});
                                                            
                                                  function confirmDelete(id_ledger) {
                                                    var delUrl=""+serverUrl+"ledger/delete_ledger/?"+id_ledger+"";
                                                    
                                                    //alert("delete");
                                                    if (confirm("Are you sure you want to delete")) {
                                                      var xhr2 = new XMLHttpRequest(), 
        method = 'GET',
        overrideMimeType = 'application/json',
        url = ''+serverUrl+'ledger/delete_ledger?id_ledger='+id_ledger+''; 
        //alert(url)
              // ADD THE URL OF THE FILE.

    xhr2.onreadystatechange = function () {
      //alert("dsf");
        if (xhr2.readyState === XMLHttpRequest.DONE && xhr2.status === 200) {
         // alert(xhr1.responseText);
          //window.location.href="vehiclemaster";
              createTable();
//             x.style.display = "block";
//            y.style.display = "none";
//             back.value="Add New Vehicle";
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
                                                  

