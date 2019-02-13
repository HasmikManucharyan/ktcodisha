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
            <span class="title_pra" style="font-size:18px;"><strong>dieselratemaster</strong></span>
            <input type="button" id="btnAdd_dieselratemaster"  class="btn btn-info pull-right" class="btn btn-info pull-right" style="width:10%; font-size:10px;" onclick="adddieselratemaster()" value="Add New dieselratemaster"> 
         </div>
         <br>
         <center> <input type="text" id="searchTxt_dieselratemaster" placeholder="Search"></center>
         <br>
         <div class="table-responsive" id="table_dieselratemaster">
            
            <table id="example_dieselratemaster" class="cell-border tdesign" width="100%" cellspacing="0">
               <thead>
                  <tr>
                     
                     <th>DRMNO</th>
                     
                     <th>ProductCode</th>
                     
                     <th>ProductName</th>
                     
                     <th>FuelParty</th>
                     
                     <th>FuelStation</th>
                     
                     <th>DieselRate</th>
                     
                     <th></th>
                     <th></th>
                     <th></th>
                  </tr>
               </thead>
            </table>
         </div>
          
         <div id="regForm_dieselratemaster" hidden>
            <div class="col-md-12" style="margin-top: 50px;">
               <div class="col-md-offset-1 col-md-5">
            
            
                  <div style="display: flex;">
                     <div class="box">
                        <p class="input_title"><span style="color:red;">*</span> DRMNO :</p>
                     </div>
                     <div class="box box2"><input class="input_bar form-control" type="text" name=""DRMNO"" id="DRMNO" placeholder="Enter DRMNO"></div>
                  </div>
                  <span id="alertMsgTxt_DRMNO" style="color:red;"></span>
               
            
            
                  <div style="display: flex;">
                     <div class="box">
                        <p class="input_title"><span style="color:red;">*</span> ProductCode :</p>
                     </div>
                     <div class="box box2"><input class="input_bar form-control" type="text" name=""ProductCode"" id="ProductCode" placeholder="Enter ProductCode"></div>
                  </div>
                  <span id="alertMsgTxt_ProductCode" style="color:red;"></span>
               
            
            
                  <div style="display: flex;">
                     <div class="box">
                        <p class="input_title"><span style="color:red;">*</span> ProductName :</p>
                     </div>
                     <div class="box box2"><input class="input_bar form-control" type="text" name=""ProductName"" id="ProductName" placeholder="Enter ProductName"></div>
                  </div>
                  <span id="alertMsgTxt_ProductName" style="color:red;"></span>
               
            
            
                  <div style="display: flex;">
                     <div class="box">
                        <p class="input_title"><span style="color:red;">*</span> FuelParty :</p>
                     </div>
                     <div class="box box2"><input class="input_bar form-control" type="text" name=""FuelParty"" id="FuelParty" placeholder="Enter FuelParty"></div>
                  </div>
                  <span id="alertMsgTxt_FuelParty" style="color:red;"></span>
               
            
            
                  <div style="display: flex;">
                     <div class="box">
                        <p class="input_title"><span style="color:red;">*</span> FuelStation :</p>
                     </div>
                     <div class="box box2"><input class="input_bar form-control" type="text" name=""FuelStation"" id="FuelStation" placeholder="Enter FuelStation"></div>
                  </div>
                  <span id="alertMsgTxt_FuelStation" style="color:red;"></span>
               
            
            
                  <div style="display: flex;">
                     <div class="box">
                        <p class="input_title"><span style="color:red;">*</span> DieselRate :</p>
                     </div>
                     <div class="box box2"><input class="input_bar form-control" type="text" name=""DieselRate"" id="DieselRate" placeholder="Enter DieselRate"></div>
                  </div>
                  <span id="alertMsgTxt_DieselRate" style="color:red;"></span>
               
            </div></div><input type="hidden" class="form-control" name="userType" id="userType" placeholder="Enter userType" value="customer">
            <div style="padding-left:70px">
               <input type="hidden" id="vid">
               <input type="submit" name="submit" id="submitbtn_dieselratemaster" style="background-color:rgb(31, 133, 187); color:white; width:200px;height:50px;" onclick="submitBtn()" value="Submit">
            </div>
         </div>
         
         <div id="view_dieselratemaster" hidden>
            <span style="font-size:14px;"><strong>View</strong></span>
            <div class="table-responsive">
               <div class="col-md-12">
                  <div class="panel-primary" >
                     <div class="panel-heading" align="center"></div>
                     <div class="panel-body">
                           
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="DRMNO_view">DRMNO</label>
                           <div class="col-xs-8" id="DRMNO_view">
                           </div>
                        </div>
                           
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="ProductCode_view">ProductCode</label>
                           <div class="col-xs-8" id="ProductCode_view">
                           </div>
                        </div>
                           
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="ProductName_view">ProductName</label>
                           <div class="col-xs-8" id="ProductName_view">
                           </div>
                        </div>
                           
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="FuelParty_view">FuelParty</label>
                           <div class="col-xs-8" id="FuelParty_view">
                           </div>
                        </div>
                           
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="FuelStation_view">FuelStation</label>
                           <div class="col-xs-8" id="FuelStation_view">
                           </div>
                        </div>
                           
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="DieselRate_view">DieselRate</label>
                           <div class="col-xs-8" id="DieselRate_view">
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
            var sensor;
            var  table_dieselratemaster = document.getElementById("table_dieselratemaster");
            var regForm_dieselratemaster = document.getElementById("regForm_dieselratemaster");
            var view_dieselratemaster = document.getElementById("view_dieselratemaster");
            var back_dieselratemaster = document.getElementById("btnAdd_dieselratemaster");
            var submit_dieselratemaster = document.getElementById("submitbtn_dieselratemaster"); 
            var otable_dieselratemaster, displayTable=[], txt;
            var fitness, insurance, permit, roadtax, pollution;function adddieselratemaster(){
            if(back_dieselratemaster.value == "Add New dieselratemaster"){
            data="";
            updateEditinfo(data);
            
            table_dieselratemaster.style.display="none";
             regForm_dieselratemaster.style.display = "block";
             view_dieselratemaster.style.display = "none";
            back_dieselratemaster.value="Back";
            header_dieselratemaster.value = "Add/Edit dieselratemaster"
            }
            else{
             table_dieselratemaster.style.display="block";
             regForm_dieselratemaster.style.display = "none";
             view_dieselratemaster.style.display = "none";
             back_dieselratemaster.value ="Add New dieselratemaster";
             header_dieselratemaster.value = "dieselratemaster";
            }
            }
            
            document.getElementById("submitbtn_dieselratemaster").addEventListener("click", function(event){
            event.preventDefault()
            });
            function submitBtn(){  var DRMNO = $("#DRMNO").val(); var ProductCode = $("#ProductCode").val(); var ProductName = $("#ProductName").val(); var FuelParty = $("#FuelParty").val(); var FuelStation = $("#FuelStation").val(); var DieselRate = $("#DieselRate").val();var button= $("#submitbtn_dieselratemaster").val();
            var vid=$("#vid").val();
            if( DRMNO!='' && ProductCode!='' && ProductName!='' && FuelParty!='' && FuelStation!='' && DieselRate!=''){
               if(button == "Submit"){
                 var xhr1 = new XMLHttpRequest(), 
                     method = "POST",
                     url = serverUrl+"master/add_dieselratemaster?DRMNO="+DRMNO+"&ProductCode="+ProductCode+"&ProductName="+ProductName+"&FuelParty="+FuelParty+"&FuelStation="+FuelStation+"&DieselRate="+DieselRate+"";
                 xhr1.onreadystatechange = function () {
                   if (xhr1.readyState === XMLHttpRequest.DONE && xhr1.status === 200) {
                     createTable();
                     table_dieselratemaster.style.display = "block";
            regForm_dieselratemaster.style.display = "none";
            view_dieselratemaster.style.display = "none";
                     back_dieselratemaster.value="Add New dieselratemaster";
                     $.notify("dieselratemaster Added Successfully", "success");
                   }
                 };
                 xhr1.open(method, url, true);
                 xhr1.send();
               }
               else{
                 var xhr1 = new XMLHttpRequest(), 
                     method = "POST",
                     overrideMimeType = "application/json",
                     url =  serverUrl+"master/edit_dieselratemaster?id="+vid+"&DRMNO="+DRMNO+"&ProductCode="+ProductCode+"&ProductName="+ProductName+"&FuelParty="+FuelParty+"&FuelStation="+FuelStation+"&DieselRate="+DieselRate+"";
                 xhr1.onreadystatechange = function () {
                   if (xhr1.readyState === XMLHttpRequest.DONE && xhr1.status === 200) {
                     createTable();
                     regForm_dieselratemaster.style.display = "none";
            table_dieselratemaster.style.display = "block";
            view_dieselratemaster.style.display = "none";
                     back_dieselratemaster.value="Add New dieselratemaster";
                     $.notify("dieselratemaster Updated Successfully", "success");
                   }
                 };
                 xhr1.open(method, url, true);
            xhr1.send();$("#DRMNO").text("");$("#ProductCode").text("");$("#ProductName").text("");$("#FuelParty").text("");$("#FuelStation").text("");$("#DieselRate").text("");
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
              if(ProductName==""){
            $("#ProductName_alertMsgTxt").text("Please Enter ProductName");
               }
               else{
            $("#ProductName_alertMsgTxt").text("");
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
             otable_dieselratemaster  = $("#example_dieselratemaster").DataTable( {
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
                 $("#example_dieselratemaster_filter").detach().show();
                 $("#searchTxt_dieselratemaster").on("input", function(){
                   otable_dieselratemaster.search(this.value).draw();
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
                 url = ""+serverUrl+"master/getalldieselratemaster";
             xhr.onreadystatechange = function () {
               if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                 if(xhr.responseText){
                   var data=JSON.parse(xhr.responseText);
             for(var i=0; i<data.length; i++){txt ='<tr style="height:20px;" role="row">';var DRMNO ='<td>'+data[i]["DRMNO"]+'</td>';var ProductCode ='<td>'+data[i]["ProductCode"]+'</td>';var ProductName ='<td>'+data[i]["ProductName"]+'</td>';var FuelParty ='<td>'+data[i]["FuelParty"]+'</td>';var FuelStation ='<td>'+data[i]["FuelStation"]+'</td>';var DieselRate ='<td>'+data[i]["DieselRate"]+'</td>';txt = txt+DRMNO+ProductCode+ProductName+FuelParty+FuelStation+DieselRate;
             txt =txt+'<td><button type="button" onclick="javascript: view('+data[i]['id']+',1)">VIEW</button></td><td><button type="button" onclick="javascript: view('+data[i]['id']+',2)">EDIT</button></td><td><button type="button" onclick="javascript:confirmDelete('+data[i]['id']+');" id="delete">DELETE</button></td></tr>';
                     displayTable[i]= txt;
                   }
                   scrollPos = $("#example_dieselratemaster").scrollTop();
                   otable_dieselratemaster.clear().draw();
                   for( i = 0; i < displayTable.length; i++ ) {
                     otable_dieselratemaster.row.add($(displayTable[i]));
                   }
                   otable_dieselratemaster.draw();
                 }
               }
             };
             xhr.open(method, url, true);
             xhr.send();
            }
            function view(id,data){
            if(data==1){
            updateinfo(id);
            table_dieselratemaster.style.display = "none";
            view_dieselratemaster.style.display = "block";
            regForm_dieselratemaster.style.display = "none";
            back_dieselratemaster.value = "Back"
            
            }else{
            table_dieselratemaster.style.display = "none";
            regForm_dieselratemaster.style.display = "block";
            view_dieselratemaster.style.display ="none"
            back_dieselratemaster.value = "Back";
            
            updateEditinfo(id);
            }
            
            
            }
            
            function updateEditinfo(mdata){ $("#DRMNO_alertMsgTxt").text(""); $("#ProductCode_alertMsgTxt").text(""); $("#ProductName_alertMsgTxt").text(""); $("#FuelParty_alertMsgTxt").text(""); $("#FuelStation_alertMsgTxt").text(""); $("#DieselRate_alertMsgTxt").text("");
             if(mdata != ""){
               var xhr4 = new XMLHttpRequest(), 
                   method = "GET",
                   overrideMimeType = "application/json",
                   url =   serverUrl+"master/view_dieselratemaster?id="+mdata;
               xhr4.onreadystatechange = function () {
                 if (xhr4.readyState === XMLHttpRequest.DONE && xhr4.status === 200) {
                   var data=JSON.parse(xhr4.responseText);
             document.getElementById("vid").value = mdata;document.getElementById("DRMNO").value = data[0]["DRMNO"];document.getElementById("ProductCode").value = data[0]["ProductCode"];document.getElementById("ProductName").value = data[0]["ProductName"];document.getElementById("FuelParty").value = data[0]["FuelParty"];document.getElementById("FuelStation").value = data[0]["FuelStation"];document.getElementById("DieselRate").value = data[0]["DieselRate"];submit_dieselratemaster.value="Update";
                 }
               };
               xhr4.open(method, url, true);
               xhr4.send();
             }
            else if(mdata == ""){document.getElementById("DRMNO").value = "";document.getElementById("ProductCode").value = "";document.getElementById("ProductName").value = "";document.getElementById("FuelParty").value = "";document.getElementById("FuelStation").value = "";document.getElementById("DieselRate").value = "";
               submit_dieselratemaster.value="Submit";
             }
            }
            
            function updateinfo(sdata){
               
            if(sdata != null){
            var xhr3 = new XMLHttpRequest(), 
            method = "GET",
            overrideMimeType = "application/json",
            url = serverUrl+"master/view_dieselratemaster?id="+sdata; 
            xhr3.onreadystatechange = function () {
            
            if (xhr3.readyState === XMLHttpRequest.DONE && xhr3.status === 200) {
            var data= JSON.parse(xhr3.responseText);
            document.getElementById("DRMNO_view").innerHTML= data[0]["DRMNO"];document.getElementById("ProductCode_view").innerHTML= data[0]["ProductCode"];document.getElementById("ProductName_view").innerHTML= data[0]["ProductName"];document.getElementById("FuelParty_view").innerHTML= data[0]["FuelParty"];document.getElementById("FuelStation_view").innerHTML= data[0]["FuelStation"];document.getElementById("DieselRate_view").innerHTML= data[0]["DieselRate"];
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
                   url = serverUrl+"master/delete_dieselratemaster?id="+id;
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
         