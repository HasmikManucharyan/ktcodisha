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
            <span class="title_pra" style="font-size:18px;"><strong>tyresaxelmaster</strong></span>
            <input type="button" id="btnAdd_tyresaxelmaster"  class="btn btn-info pull-right" class="btn btn-info pull-right" style="width:10%; font-size:10px;" onclick="addtyresaxelmaster()" value="Add New tyresaxelmaster"> 
         </div>
         <br>
         <center> <input type="text" id="searchTxt_tyresaxelmaster" placeholder="Search"></center>
         <br>
         <div class="table-responsive" id="table_tyresaxelmaster">
            
            <table id="example_tyresaxelmaster" class="cell-border tdesign" width="100%" cellspacing="0">
               <thead>
                  <tr>
                     
                     <th>AxelCode</th>
                     
                     <th>AxelDescription</th>
                     
                     <th></th>
                     <th></th>
                     <th></th>
                  </tr>
               </thead>
            </table>
         </div>
          
         <div id="regForm_tyresaxelmaster" hidden>
            <div class="col-md-12" style="margin-top: 50px;">
               <div class="col-md-offset-1 col-md-5">
            
            
                  <div style="display: flex;">
                     <div class="box">
                        <p class="input_title"><span style="color:red;">*</span> AxelCode :</p>
                     </div>
                     <div class="box box2"><input class="input_bar form-control" type="text" name=""AxelCode"" id="AxelCode" placeholder="Enter AxelCode"></div>
                  </div>
                  <span id="alertMsgTxt_AxelCode" style="color:red;"></span>
               
            
            
                  <div style="display: flex;">
                     <div class="box">
                        <p class="input_title"><span style="color:red;">*</span> AxelDescription :</p>
                     </div>
                     <div class="box box2"><input class="input_bar form-control" type="text" name=""AxelDescription"" id="AxelDescription" placeholder="Enter AxelDescription"></div>
                  </div>
                  <span id="alertMsgTxt_AxelDescription" style="color:red;"></span>
               
            </div></div><input type="hidden" class="form-control" name="userType" id="userType" placeholder="Enter userType" value="customer">
            <div style="padding-left:70px">
               <input type="hidden" id="vid">
               <input type="submit" name="submit" id="submitbtn_tyresaxelmaster" style="background-color:rgb(31, 133, 187); color:white; width:200px;height:50px;" onclick="submitBtn()" value="Submit">
            </div>
         </div>
         
         <div id="view_tyresaxelmaster" hidden>
            <span style="font-size:14px;"><strong>View</strong></span>
            <div class="table-responsive">
               <div class="col-md-12">
                  <div class="panel-primary" >
                     <div class="panel-heading" align="center"></div>
                     <div class="panel-body">
                           
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="AxelCode_view">AxelCode</label>
                           <div class="col-xs-8" id="AxelCode_view">
                           </div>
                        </div>
                           
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="AxelDescription_view">AxelDescription</label>
                           <div class="col-xs-8" id="AxelDescription_view">
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
            var  table_tyresaxelmaster = document.getElementById("table_tyresaxelmaster");
            var regForm_tyresaxelmaster = document.getElementById("regForm_tyresaxelmaster");
            var view_tyresaxelmaster = document.getElementById("view_tyresaxelmaster");
            var back_tyresaxelmaster = document.getElementById("btnAdd_tyresaxelmaster");
            var submit_tyresaxelmaster = document.getElementById("submitbtn_tyresaxelmaster"); 
            var otable_tyresaxelmaster, displayTable=[], txt;
            var fitness, insurance, permit, roadtax, pollution;function addtyresaxelmaster(){
            if(back_tyresaxelmaster.value == "Add New tyresaxelmaster"){
            data="";
            updateEditinfo(data);
            
            table_tyresaxelmaster.style.display="none";
             regForm_tyresaxelmaster.style.display = "block";
             view_tyresaxelmaster.style.display = "none";
            back_tyresaxelmaster.value="Back";
            header_tyresaxelmaster.value = "Add/Edit tyresaxelmaster"
            }
            else{
             table_tyresaxelmaster.style.display="block";
             regForm_tyresaxelmaster.style.display = "none";
             view_tyresaxelmaster.style.display = "none";
             back_tyresaxelmaster.value ="Add New tyresaxelmaster";
             header_tyresaxelmaster.value = "tyresaxelmaster";
            }
            }
            
            document.getElementById("submitbtn_tyresaxelmaster").addEventListener("click", function(event){
            event.preventDefault()
            });
            function submitBtn(){  var AxelCode = $("#AxelCode").val(); var AxelDescription = $("#AxelDescription").val();var button= $("#submitbtn_tyresaxelmaster").val();
            var vid=$("#vid").val();
            if( AxelCode!='' && AxelDescription!=''){
               if(button == "Submit"){
                 var xhr1 = new XMLHttpRequest(), 
                     method = "POST",
                     url = serverUrl+"hsd/add_tyresaxelmaster?AxelCode="+AxelCode+"&AxelDescription="+AxelDescription+"";
                 xhr1.onreadystatechange = function () {
                   if (xhr1.readyState === XMLHttpRequest.DONE && xhr1.status === 200) {
                     createTable();
                     table_tyresaxelmaster.style.display = "block";
            regForm_tyresaxelmaster.style.display = "none";
            view_tyresaxelmaster.style.display = "none";
                     back_tyresaxelmaster.value="Add New tyresaxelmaster";
                     $.notify("tyresaxelmaster Added Successfully", "success");
                   }
                 };
                 xhr1.open(method, url, true);
                 xhr1.send();
               }
               else{
                 var xhr1 = new XMLHttpRequest(), 
                     method = "POST",
                     overrideMimeType = "application/json",
                     url =  serverUrl+"hsd/edit_tyresaxelmaster?id="+vid+"&AxelCode="+AxelCode+"&AxelDescription="+AxelDescription+"";
                 xhr1.onreadystatechange = function () {
                   if (xhr1.readyState === XMLHttpRequest.DONE && xhr1.status === 200) {
                     createTable();
                     regForm_tyresaxelmaster.style.display = "none";
            table_tyresaxelmaster.style.display = "block";
            view_tyresaxelmaster.style.display = "none";
                     back_tyresaxelmaster.value="Add New tyresaxelmaster";
                     $.notify("tyresaxelmaster Updated Successfully", "success");
                   }
                 };
                 xhr1.open(method, url, true);
            xhr1.send();$("#AxelCode").text("");$("#AxelDescription").text("");
               }
             }
             else{
            
              if(AxelCode==""){
            $("#AxelCode_alertMsgTxt").text("Please Enter AxelCode");
               }
               else{
            $("#AxelCode_alertMsgTxt").text("");
            }
              if(AxelDescription==""){
            $("#AxelDescription_alertMsgTxt").text("Please Enter AxelDescription");
               }
               else{
            $("#AxelDescription_alertMsgTxt").text("");
            }
            return false;
             }
            } 
            $(document).ready(function(){
             otable_tyresaxelmaster  = $("#example_tyresaxelmaster").DataTable( {
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
                 $("#example_tyresaxelmaster_filter").detach().show();
                 $("#searchTxt_tyresaxelmaster").on("input", function(){
                   otable_tyresaxelmaster.search(this.value).draw();
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
                 url = ""+serverUrl+"hsd/getalltyresaxelmaster";
             xhr.onreadystatechange = function () {
               if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                 if(xhr.responseText){
                   var data=JSON.parse(xhr.responseText);
             for(var i=0; i<data.length; i++){txt ='<tr style="height:20px;" role="row">';var AxelCode ='<td>'+data[i]["AxelCode"]+'</td>';var AxelDescription ='<td>'+data[i]["AxelDescription"]+'</td>';txt = txt+AxelCode+AxelDescription;
             txt =txt+'<td><button type="button" onclick="javascript: view('+data[i]['id']+',1)">VIEW</button></td><td><button type="button" onclick="javascript: view('+data[i]['id']+',2)">EDIT</button></td><td><button type="button" onclick="javascript:confirmDelete('+data[i]['id']+');" id="delete">DELETE</button></td></tr>';
                     displayTable[i]= txt;
                   }
                   scrollPos = $("#example_tyresaxelmaster").scrollTop();
                   otable_tyresaxelmaster.clear().draw();
                   for( i = 0; i < displayTable.length; i++ ) {
                     otable_tyresaxelmaster.row.add($(displayTable[i]));
                   }
                   otable_tyresaxelmaster.draw();
                 }
               }
             };
             xhr.open(method, url, true);
             xhr.send();
            }
            function view(id,data){
            if(data==1){
            updateinfo(id);
            table_tyresaxelmaster.style.display = "none";
            view_tyresaxelmaster.style.display = "block";
            regForm_tyresaxelmaster.style.display = "none";
            back_tyresaxelmaster.value = "Back"
            
            }else{
            table_tyresaxelmaster.style.display = "none";
            regForm_tyresaxelmaster.style.display = "block";
            view_tyresaxelmaster.style.display ="none"
            back_tyresaxelmaster.value = "Back";
            
            updateEditinfo(id);
            }
            
            
            }
            
            function updateEditinfo(mdata){ $("#AxelCode_alertMsgTxt").text(""); $("#AxelDescription_alertMsgTxt").text("");
             if(mdata != ""){
               var xhr4 = new XMLHttpRequest(), 
                   method = "GET",
                   overrideMimeType = "application/json",
                   url =   serverUrl+"hsd/view_tyresaxelmaster?id="+mdata;
               xhr4.onreadystatechange = function () {
                 if (xhr4.readyState === XMLHttpRequest.DONE && xhr4.status === 200) {
                   var data=JSON.parse(xhr4.responseText);
             document.getElementById("vid").value = mdata;document.getElementById("AxelCode").value = data[0]["AxelCode"];document.getElementById("AxelDescription").value = data[0]["AxelDescription"];submit_tyresaxelmaster.value="Update";
                 }
               };
               xhr4.open(method, url, true);
               xhr4.send();
             }
            else if(mdata == ""){document.getElementById("AxelCode").value = "";document.getElementById("AxelDescription").value = "";
               submit_tyresaxelmaster.value="Submit";
             }
            }
            
            function updateinfo(sdata){
               
            if(sdata != null){
            var xhr3 = new XMLHttpRequest(), 
            method = "GET",
            overrideMimeType = "application/json",
            url = serverUrl+"hsd/view_tyresaxelmaster?id="+sdata; 
            xhr3.onreadystatechange = function () {
            
            if (xhr3.readyState === XMLHttpRequest.DONE && xhr3.status === 200) {
            var data= JSON.parse(xhr3.responseText);
            document.getElementById("AxelCode_view").innerHTML= data[0]["AxelCode"];document.getElementById("AxelDescription_view").innerHTML= data[0]["AxelDescription"];
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
                   url = serverUrl+"hsd/delete_tyresaxelmaster?id="+id;
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
         