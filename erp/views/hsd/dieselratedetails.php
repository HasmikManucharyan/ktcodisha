

<head>
   <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
   <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
   <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
   <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
   <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
   <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
   <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/fixedcolumns/3.2.4/js/dataTables.fixedColumns.min.js"></script>
</head>
<style>
   table.tdesign tr.odd { background-color:  whitesmoke; }
   table.tdesign tr.even { background-color: white;  }	
   table.tdesign th {
   background: #d9edf7;
   color: #000;
   padding: 2px;
   border: 1px solid #ccc;
   }
</style>
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="account-box">
<div>
   <span style="font-size:16px;">dieselratedetails</span> 
</div>
<br>
<div style="margin-left:5px">
   <input type="button" id="btnAdd"  class="btn btn-info pull-right" style="width:110px; font-size:10px; margin-top:0px; margin-bottom:10px" onclick="adddieselratedetails()" value="Add New dieselratedetails">
</div>
<br clear="all" />
<div class="or-box">
   <center> <input type="text" id="searchTxt" placeholder="Search"></center>
   <br>
</div>
<div class="table-responsive" id="table">
   <table id="example" class="cell-border tdesign" width="100%" cellspacing="0">
      <thead>
         <tr>
            <th>DRMNO</th>
            <th>ProductCode</th>
            <th>FuelParty</th>
            <th>FuelStation</th>
            <th>SrNo</th>
            <th>FromDates</th>
            <th>ExpiryDate</th>
            <th>DieselRate</th>
            <th></th>
            <th></th>
            <th></th>
         </tr>
      </thead>
   </table>
</div>
<div id="regForm" hidden>
    <div class="form-group col-xs-12 col-md-6 col-sm-6 col-lg-6">
      <label class="control-label col-xs-12" for="email">
      <span style="color:red;">*
      </span> SrNo:
      </label>
      <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">          
         <input class="form-control" type="text" name="SrNo" id="SrNo" placeholder="Enter SrNo" value="">
      </div>
      <span id="SrNo_alertMsgTxt" style="color:red;">
      </span>
   </div>
   <div class="form-group col-xs-12 col-md-6 col-sm-6 col-lg-6">
      <label class="control-label col-xs-12" for="email">
      <span style="color:red;">*
      </span> DRMNO:
      </label>
      <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">          
         <input class="form-control" type="text" name="DRMNO" id="DRMNO" placeholder="Enter DRMNO" value="">
      </div>
      <span id="DRMNO_alertMsgTxt" style="color:red;">
      </span>
   </div>
   <div class="form-group col-xs-12 col-md-6 col-sm-6 col-lg-6">
      <label class="control-label col-xs-12" for="email">
      <span style="color:red;">*
      </span> ProductCode:
      </label>
      <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">          
         <input class="form-control" type="text" name="ProductCode" id="ProductCode" placeholder="Enter ProductCode" value="">
      </div>
      <span id="ProductCode_alertMsgTxt" style="color:red;">
      </span>
   </div>
   <div class="form-group col-xs-12 col-md-6 col-sm-6 col-lg-6">
      <label class="control-label col-xs-12" for="email">
      <span style="color:red;">*
      </span> FuelParty:
      </label>
      <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">          
         <input class="form-control" type="text" name="FuelParty" id="FuelParty" placeholder="Enter FuelParty" value="">
      </div>
      <span id="FuelParty_alertMsgTxt" style="color:red;">
      </span>
   </div>
   <div class="form-group col-xs-12 col-md-6 col-sm-6 col-lg-6">
      <label class="control-label col-xs-12" for="email">
      <span style="color:red;">*
      </span> FuelStation:
      </label>
      <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">          
         <input class="form-control" type="text" name="FuelStation" id="FuelStation" placeholder="Enter FuelStation" value="">
      </div>
      <span id="FuelStation_alertMsgTxt" style="color:red;">
      </span>
   </div>
   
   <div class="form-group col-xs-12 col-md-6 col-sm-6 col-lg-6">
      <label class="control-label col-xs-12" for="email">
      <span style="color:red;">*
      </span> FromDates:
      </label>
      <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">          
         <input class="form-control" type="date" name="FromDates" id="FromDates" placeholder="Enter FromDates" value="">
      </div>
      <span id="FromDates_alertMsgTxt" style="color:red;">
      </span>
   </div>
   <div class="form-group col-xs-12 col-md-6 col-sm-6 col-lg-6">
      <label class="control-label col-xs-12" for="email">
      <span style="color:red;">*
      </span> ExpiryDate:
      </label>
      <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">          
         <input class="form-control" type="date" name="ExpiryDate" id="ExpiryDate" placeholder="Enter ExpiryDate" value="">
      </div>
      <span id="ExpiryDate_alertMsgTxt" style="color:red;">
      </span>
   </div>
   <div class="form-group col-xs-12 col-md-6 col-sm-6 col-lg-6">
      <label class="control-label col-xs-12" for="email">
      <span style="color:red;">*
      </span> DieselRate:
      </label>
      <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">          
         <input class="form-control" type="text" name="DieselRate" id="DieselRate" placeholder="Enter DieselRate" value="">
      </div>
      <span id="DieselRate_alertMsgTxt" style="color:red;">
      </span>
   </div>
   <input type="hidden" class="form-control" name="userType" id="userType" placeholder="Enter userType" value="customer">
   <div style="padding-left:70px">
      <input type="hidden" id="vid">
      <input type="submit" name="submit" id="submitbtn" style="background-color:rgb(31, 133, 187); color:white; width:200px;height:50px;" onclick="submitBtn()" value="Submit">
   </div>
</div>
    
    <div id="view" hidden>
    <span style="font-size:14px;"><strong>View</strong></span>
                                                            
 <div class="table-responsive">  
<div class="col-md-12">

	                                                         <div class="panel-primary" >
                                                                                        <div class="panel-heading" align="center">Diesel Rate Details</div>
                                                                                                              <div class="panel-body">  
                                                                                          
                                                                                        <div class="col-xs-6 form-group">
                                                                                              <label class="control-label col-xs-4" for="SrNo">SrNo:</label>
                                                                                              <div class="col-xs-8" id="SrNo1">
                                                                                               
                                                                                                  </div>
                                                                                            </div>
                                                                                         
                                                                                           <div class="col-xs-6 form-group">
                                                                                              <label class="control-label col-xs-4" for="DRMNO">DRMNO:</label>
                                                                                              <div class="col-xs-8" id="DRMNO1">
                                                                                               
                                                                                                  </div>
                                                                                            </div>
                                                                                        
                                                                                          <div class="col-xs-6 form-group">
                                                                                              <label class="control-label col-xs-4" for="ProductCode">ProductCode:</label>
                                                                                              <div class="col-xs-8" id="ProductCode1">
                                                                                              
                                                                                                  </div>
                                                                                            </div>
                                                                                          <div class="col-xs-6 form-group">
                                                                                              <label class="control-label col-xs-4" for="FuelParty">FuelParty:</label>
                                                                                              <div class="col-xs-8" id="FuelParty1">
                                                                                                
                                                                                                  </div>
                                                                                            </div>
                                                                                          
                                                                                          <div class="col-xs-6 form-group">
                                                                                              <label class="control-label col-xs-4" for="FuelStation">FuelStation:</label>
                                                                                              <div class="col-xs-8" id="FuelStation1">
                                                                                                
                                                                                              </div>
                                                                                            </div>
                                                                                          <div class="col-xs-6 form-group">
                                                                                              <label class="control-label col-xs-4" for="FromDates">FromDates:</label>
                                                                                              <div class="col-xs-8" id="FromDates1">
                                                                                               
                                                                                                  </div>
                                                                                            </div>
                                                                                          <div class="col-xs-6 form-group">
                                                                                              <label class="control-label col-xs-4" for="ExpiryDate">ExpiryDate:</label>
                                                                                              <div class="col-xs-8" id="ExpiryDate1">
                                                                                                
                                                                                                  </div>
                                                                                            </div>
                                                                                          <div class="col-xs-6 form-group">
                                                                                              <label class="control-label col-xs-4" for="DieselRate">DieselRate:</label>
                                                                                              <div class="col-xs-8" id="DieselRate1">
                                                                                               
                                                                                                  </div>
                                                                                            </div>
                                                                                          
                                                                                        </div>
                                                                                        </div>
                                                                                            

                                                                  </div>     
                                                  </div>
                              
</div>
<script>  
   var serverUrl="<?php echo URL; ?>";
   var data;
   var  x = document.getElementById("table");
   var y = document.getElementById("regForm");
   var back= document.getElementById("btnAdd");
   var z =document.getElementById("view");
   var header = document.getElementById("heading");
   var submit= document.getElementById("submitbtn"); 
   var otable, displayTable=[], txt;
       function adddieselratedetails(){
   	if(back.value == "Add New dieselratedetails"){
   		data="";
   		//updateEditinfo(data);
     
   	x.style.display="none";
   
   	y.style.display = "block";
    z.style.display = "none";    
   	back.value="Back";
   	header.value = "Add/Edit dieselratedetails"
   	}
   	else{
   	   x.style.display="block";
   	   y.style.display = "none";
        z.style.display = "none";
   	   back.value ="Add New dieselratedetails";
   		header.value = "Diesel Rate Details";
   	}
   }
   
   document.getElementById("submitbtn").addEventListener("click", function(event){
   event.preventDefault()
   });
   function submitBtn(){
       var DRMNO = $("#DRMNO").val();
       var ProductCode = $("#ProductCode").val();
       var FuelParty = $("#FuelParty").val();
       var FuelStation = $("#FuelStation").val();
       var SrNo = $("#SrNo").val();
       var FromDates = $("#FromDates").val(); 
       var ExpiryDate = $("#ExpiryDate").val(); 
       var DieselRate = $("#DieselRate").val();
       var button= $("#submitbtn").val();
       var vid=$("#vid").val();
   	if( DRMNO!='' && ProductCode!='' && FuelParty!='' && FuelStation!='' && SrNo!='' && FromDates!='' && ExpiryDate!='' && DieselRate!=''){
         if(button == "Submit"){
           var xhr1 = new XMLHttpRequest(), 
               method = "POST",
               url = serverUrl+"hsd/add_dieselratedetails?DRMNO="+DRMNO+"&ProductCode="+ProductCode+"&FuelParty="+FuelParty+"&FuelStation="+FuelStation+"&SrNo="+SrNo+"&FromDates="+FromDates+"&ExpiryDate="+ExpiryDate+"&DieselRate="+DieselRate+"";
           xhr1.onreadystatechange = function () {
             if (xhr1.readyState === XMLHttpRequest.DONE && xhr1.status === 200) {
               createTable();
               x.style.display = "block";
               y.style.display = "none";
                z.style.display = "none";
               back.value="Add New dieselratedetails";
               $.notify("dieselratedetails Added Successfully", "success");
             }
           };
           xhr1.open(method, url, true);
           xhr1.send();
         }
         else{
           var xhr1 = new XMLHttpRequest(), 
               method = "POST",
               overrideMimeType = "application/json",
               url =  serverUrl+"hsd/edit_dieselratedetails?id="+vid+"&DRMNO="+DRMNO+"&ProductCode="+ProductCode+"&FuelParty="+FuelParty+"&FuelStation="+FuelStation+"&SrNo="+SrNo+"&FromDates="+FromDates+"&ExpiryDate="+ExpiryDate+"&DieselRate="+DieselRate+"";
            // alert(url);
           xhr1.onreadystatechange = function () {
             if (xhr1.readyState === XMLHttpRequest.DONE && xhr1.status === 200) {
               createTable();
               y.style.display = "none";
               x.style.display = "block";
               z.style.display = "none";
               back.value="Add New dieselratedetails";
               $.notify("Diesel Rate Details Updated Successfully", "success");
             }
           };
           xhr1.open(method, url, true);
   		xhr1.send();
             $("#DRMNO").text("");
             $("#ProductCode").text("");
             $("#FuelParty").text("");
             $("#FuelStation").text("");
             $("#SrNo").text("");
             $("#FromDates").text("");
             $("#ExpiryDate").text("");
             $("#DieselRate").text("");
         }
       }
       else{
   
     if(DRMNO==""){
   		 $("#DRMNO_alertMsgTxt").text("Please Enter DRMNO");
         }
         else{
   	 $("#DRMNO_alertMsgTxt").text("");
   	  }
   	    if(ProductCode==""){
   		 $("#ProductCode_alertMsgTxt").text("Please Enter ProductCode");
         }
         else{
   	 $("#ProductCode_alertMsgTxt").text("");
   	  }
   	    if(FuelParty==""){
   		 $("#FuelParty_alertMsgTxt").text("Please Enter FuelParty");
         }
         else{
   	 $("#FuelParty_alertMsgTxt").text("");
   	  }
   	    if(FuelStation==""){
   		 $("#FuelStation_alertMsgTxt").text("Please Enter FuelStation");
         }
         else{
   	 $("#FuelStation_alertMsgTxt").text("");
   	  }
   	    if(SrNo==""){
   		 $("#SrNo_alertMsgTxt").text("Please Enter SrNo");
         }
         else{
   	 $("#SrNo_alertMsgTxt").text("");
   	  }
   	    if(FromDates==""){
   		 $("#FromDates_alertMsgTxt").text("Please Enter FromDates");
         }
         else{
   	 $("#FromDates_alertMsgTxt").text("");
   	  }
   	    if(ExpiryDate==""){
   		 $("#ExpiryDate_alertMsgTxt").text("Please Enter ExpiryDate");
         }
         else{
   	 $("#ExpiryDate_alertMsgTxt").text("");
   	  }
   	    if(DieselRate==""){
   		 $("#DieselRate_alertMsgTxt").text("Please Enter DieselRate");
         }
         else{
   	 $("#DieselRate_alertMsgTxt").text("");
   	  }
   	  return false;
       }
     } 
     $(document).ready(function(){
       otable  = $("#example").DataTable( {
         "paging":   false,
         "aLengthMenu": [
         ],
         initComplete : function() {
           $("#example_filter").detach().show();
           $("#searchTxt").on("input", function(){
             otable.search(this.value).draw();
           }
                             );
           UpdateInfo();
         }
         ,
       }
                                        );
     }
                      );
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
           url = ""+serverUrl+"hsd/getalldieselratedetails";
       xhr.onreadystatechange = function () {
         if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
           if(xhr.responseText){
             var data=JSON.parse(xhr.responseText);
   		  for(var i=0; i<data.length; i++){
              txt ='<tr style="height:20px;" role="row">';
              var DRMNO ='<td>'+data[i]["DRMNO"]+'</td>';
              var ProductCode ='<td>'+data[i]["ProductCode"]+'</td>';
              var FuelParty ='<td>'+data[i]["FuelParty"]+'</td>';
              var FuelStation ='<td>'+data[i]["FuelStation"]+'</td>';
              var SrNo ='<td>'+data[i]["SrNo"]+'</td>';
              var FromDates ='<td>'+data[i]["FromDates"]+'</td>';
              var ExpiryDate ='<td>'+data[i]["ExpiryDate"]+'</td>';
              var DieselRate ='<td>'+data[i]["DieselRate"]+'</td>';
              txt = txt+DRMNO+ProductCode+FuelParty+FuelStation+SrNo+FromDates+ExpiryDate+DieselRate;
              //alert(txt);
   			txt =txt+'<td><button type="button" onclick="javascript: view('+data[i]['id']+',1)">VIEW</button></td><td><button type="button" onclick="javascript: view('+data[i]['id']+', 2)">EDIT</button></td><td><button type="button" onclick="javascript:confirmDelete('+data[i]['id']+');" id="delete">DELETE</button></td></tr>';
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
     function view(id,data){
          if(data==1){
       //   alert("safd")
        updateinfo(id);
     // Prevvehiclemaster(id);
        //z.style.display = "block";
        x.style.display = "none";
        z.style.display = "block";
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
         $("#DRMNO_alertMsgTxt").text("");
         $("#ProductCode_alertMsgTxt").text("");
         $("#FuelParty_alertMsgTxt").text("");
         $("#FuelStation_alertMsgTxt").text("");
         $("#SrNo_alertMsgTxt").text("");
         $("#FromDates_alertMsgTxt").text("");
         $("#ExpiryDate_alertMsgTxt").text(""); 
         $("#DieselRate_alertMsgTxt").text("");
       if(mdata != ""){
         var xhr4 = new XMLHttpRequest(), 
             method = "GET",
             overrideMimeType = "application/json",
             url =   serverUrl+"hsd/view_dieselratedetails?id="+mdata;
           //alert(url);
         xhr4.onreadystatechange = function () {
           if (xhr4.readyState === XMLHttpRequest.DONE && xhr4.status === 200) {
               //alert(xhr4.responseText);
             var data=JSON.parse(xhr4.responseText);
               
   		  document.getElementById("vid").value = mdata;
               document.getElementById("DRMNO").value = data[0]["DRMNO"];
               document.getElementById("ProductCode").value = data[0]["ProductCode"];
               document.getElementById("FuelParty").value = data[0]["FuelParty"];
               document.getElementById("FuelStation").value = data[0]["FuelStation"];
               document.getElementById("SrNo").value = data[0]["SrNo"];
               document.getElementById("FromDates").value = data[0]["FromDates"];
               document.getElementById("ExpiryDate").value = data[0]["ExpiryDate"];
               document.getElementById("DieselRate").value = data[0]["DieselRate"];
              // alert("hiii");
               submit.value="Update";
           }
         };
         xhr4.open(method, url, true);
         xhr4.send();
       }
   	else if(mdata == ""){
        document.getElementById("DRMNO").value = "";
        document.getElementById("ProductCode").value = "";
        document.getElementById("FuelParty").value = "";
        document.getElementById("FuelStation").value = "";
        document.getElementById("SrNo").value = "";
        document.getElementById("FromDates").value = "";
        document.getElementById("ExpiryDate").value = "";
        document.getElementById("DieselRate").value = "";
         submit.value="Submit";
       }
     }
    
    
    
function updateinfo(sdata){
      
        if(sdata != null){
        var xhr3 = new XMLHttpRequest(), 
        method = 'GET',
        overrideMimeType = 'application/json',
        url = ''+serverUrl+'hsd/view_dieselratedetails?id='+sdata+''; 
       // alert(url);    
    xhr3.onreadystatechange = function () {
    
        if (xhr3.readyState === XMLHttpRequest.DONE && xhr3.status === 200) {
 //alert("hiii");
            var data= JSON.parse(xhr3.responseText);
          //alert(xhr3.responseText);
            document.getElementById("SrNo1").innerHTML= data[0]['SrNo'];
            document.getElementById("DRMNO1").innerHTML=data[0]['DRMNO'];
            document.getElementById("ProductCode1").innerHTML=data[0]['ProductCode'];
            document.getElementById("FuelParty1").innerHTML=data[0]['FuelParty'];
            document.getElementById("FuelStation1").innerHTML=data[0]['FuelStation'];
            document.getElementById("FromDates1").innerHTML=data[0]['FromDates'];
            document.getElementById("ExpiryDate1").innerHTML=data[0]['ExpiryDate'];
            document.getElementById("DieselRate1").innerHTML=data[0]['DieselRate'];
       }
    };
    xhr3.open(method, url, true);
    xhr3.send();
        }
                          }
     document.getElementById("delete").addEventListener("click", function(event){
       event.preventDefault()
     }
     );
     function confirmDelete(id) {
       if (confirm("Are you sure you want to delete?")) {
         var xhr2 = new XMLHttpRequest(), 
             method = "GET",
             overrideMimeType = "application/json",
              url = ''+serverUrl+'hsd/delete_dieselratedetails?id='+id+''; 
             //url = "serverUrl"+"hsd/delete_dieselratedetails/id="+id;
           //alert(url);
         xhr2.onreadystatechange = function () {
           if (xhr2.readyState === XMLHttpRequest.DONE && xhr2.status === 200) {
             createTable();
           }
         }
           ,
           xhr2.open(method, url, true);
         xhr2.send();
       }
     }
   
</script>

