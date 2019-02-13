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
            <span class="title_pra" style="font-size:18px;"><strong>tyremodelmaster</strong></span>
            <input type="button" id="btnAdd_tyremodelmaster"  class="btn btn-info pull-right" class="btn btn-info pull-right" style="width:10%; font-size:10px;" onclick="addtyremodelmaster()" value="Add New tyremodelmaster"> 
         </div>
         <br>
         <center> <input type="text" id="searchTxt_tyremodelmaster" placeholder="Search"></center>
         <br>
         <div class="table-responsive" id="table_tyremodelmaster">
            
            <table id="example_tyremodelmaster" class="cell-border tdesign" width="100%" cellspacing="0">
               <thead>
                  <tr>
                     
                     <th>ModelCode</th>
                     
                     <th>TyreModel</th>
                     
                     <th></th>
                     <th></th>
                     <th></th>
                  </tr>
               </thead>
            </table>
         </div>
          
         <div id="regForm_tyremodelmaster" hidden>
            <div class="col-md-12" style="margin-top: 50px;">
               <div class="col-md-offset-1 col-md-5">
            
            
                  <div style="display: flex;">
                     <div class="box">
                        <p class="input_title"><span style="color:red;">*</span> ModelCode :</p>
                     </div>
                     <div class="box box2"><input class="input_bar form-control" type="text" name=""ModelCode"" id="ModelCode" placeholder="Enter ModelCode"></div>
                  </div>
                  <span id="alertMsgTxt_ModelCode" style="color:red;"></span>
               
            
            
                  <div style="display: flex;">
                     <div class="box">
                        <p class="input_title"><span style="color:red;">*</span> TyreModel :</p>
                     </div>
                     <div class="box box2"><input class="input_bar form-control" type="text" name=""TyreModel"" id="TyreModel" placeholder="Enter TyreModel"></div>
                  </div>
                  <span id="alertMsgTxt_TyreModel" style="color:red;"></span>
               
            </div></div><input type="hidden" class="form-control" name="userType" id="userType" placeholder="Enter userType" value="customer">
            <div style="padding-left:70px">
               <input type="hidden" id="vid">
               <input type="submit" name="submit" id="submitbtn_tyremodelmaster" style="background-color:rgb(31, 133, 187); color:white; width:200px;height:50px;" onclick="submitBtn()" value="Submit">
            </div>
         </div>
         
         <div id="view_tyremodelmaster" hidden>
            <span style="font-size:14px;"><strong>View</strong></span>
            <div class="table-responsive">
               <div class="col-md-12">
                  <div class="panel-primary" >
                     <div class="panel-heading" align="center"></div>
                     <div class="panel-body">
                           
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="ModelCode_view">ModelCode</label>
                           <div class="col-xs-8" id="ModelCode_view">
                           </div>
                        </div>
                           
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="TyreModel_view">TyreModel</label>
                           <div class="col-xs-8" id="TyreModel_view">
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
            var  table_tyremodelmaster = document.getElementById("table_tyremodelmaster");
            var regForm_tyremodelmaster = document.getElementById("regForm_tyremodelmaster");
            var view_tyremodelmaster = document.getElementById("view_tyremodelmaster");
            var back_tyremodelmaster = document.getElementById("btnAdd_tyremodelmaster");
            var submit_tyremodelmaster = document.getElementById("submitbtn_tyremodelmaster"); 
            var otable_tyremodelmaster, displayTable=[], txt;
            var fitness, insurance, permit, roadtax, pollution;function addtyremodelmaster(){
            if(back_tyremodelmaster.value == "Add New tyremodelmaster"){
            data="";
            updateEditinfo(data);
            
            table_tyremodelmaster.style.display="none";
             regForm_tyremodelmaster.style.display = "block";
             view_tyremodelmaster.style.display = "none";
            back_tyremodelmaster.value="Back";
            header_tyremodelmaster.value = "Add/Edit tyremodelmaster"
            }
            else{
             table_tyremodelmaster.style.display="block";
             regForm_tyremodelmaster.style.display = "none";
             view_tyremodelmaster.style.display = "none";
             back_tyremodelmaster.value ="Add New tyremodelmaster";
             header_tyremodelmaster.value = "tyremodelmaster";
            }
            }
            
            document.getElementById("submitbtn_tyremodelmaster").addEventListener("click", function(event){
            event.preventDefault()
            });
            function submitBtn(){  var ModelCode = $("#ModelCode").val(); var TyreModel = $("#TyreModel").val();var button= $("#submitbtn_tyremodelmaster").val();
            var vid=$("#vid").val();
            if( ModelCode!='' && TyreModel!=''){
               if(button == "Submit"){
                 var xhr1 = new XMLHttpRequest(), 
                     method = "POST",
                     url = serverUrl+"hsd/add_tyremodelmaster?ModelCode="+ModelCode+"&TyreModel="+TyreModel+"";
                 xhr1.onreadystatechange = function () {
                   if (xhr1.readyState === XMLHttpRequest.DONE && xhr1.status === 200) {
                     createTable();
                     table_tyremodelmaster.style.display = "block";
            regForm_tyremodelmaster.style.display = "none";
            view_tyremodelmaster.style.display = "none";
                     back_tyremodelmaster.value="Add New tyremodelmaster";
                     $.notify("tyremodelmaster Added Successfully", "success");
                   }
                 };
                 xhr1.open(method, url, true);
                 xhr1.send();
               }
               else{
                 var xhr1 = new XMLHttpRequest(), 
                     method = "POST",
                     overrideMimeType = "application/json",
                     url =  serverUrl+"hsd/edit_tyremodelmaster?id="+vid+"&ModelCode="+ModelCode+"&TyreModel="+TyreModel+"";
                 xhr1.onreadystatechange = function () {
                   if (xhr1.readyState === XMLHttpRequest.DONE && xhr1.status === 200) {
                     createTable();
                     regForm_tyremodelmaster.style.display = "none";
            table_tyremodelmaster.style.display = "block";
            view_tyremodelmaster.style.display = "none";
                     back_tyremodelmaster.value="Add New tyremodelmaster";
                     $.notify("tyremodelmaster Updated Successfully", "success");
                   }
                 };
                 xhr1.open(method, url, true);
            xhr1.send();$("#ModelCode").text("");$("#TyreModel").text("");
               }
             }
             else{
            
              if(ModelCode==""){
            $("#ModelCode_alertMsgTxt").text("Please Enter ModelCode");
               }
               else{
            $("#ModelCode_alertMsgTxt").text("");
            }
              if(TyreModel==""){
            $("#TyreModel_alertMsgTxt").text("Please Enter TyreModel");
               }
               else{
            $("#TyreModel_alertMsgTxt").text("");
            }
            return false;
             }
            } 
            $(document).ready(function(){
             otable_tyremodelmaster  = $("#example_tyremodelmaster").DataTable( {
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
                 $("#example_tyremodelmaster_filter").detach().show();
                 $("#searchTxt_tyremodelmaster").on("input", function(){
                   otable_tyremodelmaster.search(this.value).draw();
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
                 url = ""+serverUrl+"hsd/getalltyremodelmaster";
             xhr.onreadystatechange = function () {
               if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                 if(xhr.responseText){
                   var data=JSON.parse(xhr.responseText);
             for(var i=0; i<data.length; i++){txt ='<tr style="height:20px;" role="row">';var ModelCode ='<td>'+data[i]["ModelCode"]+'</td>';var TyreModel ='<td>'+data[i]["TyreModel"]+'</td>';txt = txt+ModelCode+TyreModel;
             txt =txt+'<td><button type="button" onclick="javascript: view('+data[i]['id']+',1)">VIEW</button></td><td><button type="button" onclick="javascript: view('+data[i]['id']+',2)">EDIT</button></td><td><button type="button" onclick="javascript:confirmDelete('+data[i]['id']+');" id="delete">DELETE</button></td></tr>';
                     displayTable[i]= txt;
                   }
                   scrollPos = $("#example_tyremodelmaster").scrollTop();
                   otable_tyremodelmaster.clear().draw();
                   for( i = 0; i < displayTable.length; i++ ) {
                     otable_tyremodelmaster.row.add($(displayTable[i]));
                   }
                   otable_tyremodelmaster.draw();
                 }
               }
             };
             xhr.open(method, url, true);
             xhr.send();
            }
            function view(id,data){
            if(data==1){
            updateinfo(id);
            table_tyremodelmaster.style.display = "none";
            view_tyremodelmaster.style.display = "block";
            regForm_tyremodelmaster.style.display = "none";
            back_tyremodelmaster.value = "Back"
            
            }else{
            table_tyremodelmaster.style.display = "none";
            regForm_tyremodelmaster.style.display = "block";
            view_tyremodelmaster.style.display ="none"
            back_tyremodelmaster.value = "Back";
            
            updateEditinfo(id);
            }
            
            
            }
            
            function updateEditinfo(mdata){ $("#ModelCode_alertMsgTxt").text(""); $("#TyreModel_alertMsgTxt").text("");
             if(mdata != ""){
               var xhr4 = new XMLHttpRequest(), 
                   method = "GET",
                   overrideMimeType = "application/json",
                   url =   serverUrl+"hsd/view_tyremodelmaster?id="+mdata;
               xhr4.onreadystatechange = function () {
                 if (xhr4.readyState === XMLHttpRequest.DONE && xhr4.status === 200) {
                   var data=JSON.parse(xhr4.responseText);
             document.getElementById("vid").value = mdata;document.getElementById("ModelCode").value = data[0]["ModelCode"];document.getElementById("TyreModel").value = data[0]["TyreModel"];submit_tyremodelmaster.value="Update";
                 }
               };
               xhr4.open(method, url, true);
               xhr4.send();
             }
            else if(mdata == ""){document.getElementById("ModelCode").value = "";document.getElementById("TyreModel").value = "";
               submit_tyremodelmaster.value="Submit";
             }
            }
            
            function updateinfo(sdata){
               
            if(sdata != null){
            var xhr3 = new XMLHttpRequest(), 
            method = "GET",
            overrideMimeType = "application/json",
            url = serverUrl+"hsd/view_tyremodelmaster?id="+sdata; 
            xhr3.onreadystatechange = function () {
            
            if (xhr3.readyState === XMLHttpRequest.DONE && xhr3.status === 200) {
            var data= JSON.parse(xhr3.responseText);
            document.getElementById("ModelCode_view").innerHTML= data[0]["ModelCode"];document.getElementById("TyreModel_view").innerHTML= data[0]["TyreModel"];
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
                   url = serverUrl+"hsd/delete_tyremodelmaster?id="+id;
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
         