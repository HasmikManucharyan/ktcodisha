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
            <span class="title_pra" style="font-size:18px;"><strong>BankMaster</strong></span>
            <input type="button" id="btnAdd_BankMaster"  class="btn btn-info pull-right" class="btn btn-info pull-right" style="width:10%; font-size:10px;" onclick="addBankMaster()" value="Add New BankMaster"> 
         </div>
         <br>
         <center> <input type="text" id="searchTxt_BankMaster" placeholder="Search"></center>
         <br>
         <div class="table-responsive" id="table_BankMaster">
            
            <table id="example_BankMaster" class="cell-border tdesign" width="100%" cellspacing="0">
               <thead>
                  <tr>
                     
                     <th>BankCode</th>
                     
                     <th>BankName</th>
                     
                     <th>ShortName</th>
                     
                     <th>AccountNo</th>
                     
                     <th>AType</th>
                     
                     <th>OpBalance</th>
                     
                     <th>CurBalance</th>
                     
                     <th></th>
                     <th></th>
                     <th></th>
                  </tr>
               </thead>
            </table>
         </div>
          
         <div id="regForm_BankMaster" hidden>
            <div class="col-md-12" style="margin-top: 50px;">
               <div class="col-md-offset-1 col-md-5">
            
            
                  <div style="display: flex;">
                     <div class="box">
                        <p class="input_title"><span style="color:red;">*</span> BankCode :</p>
                     </div>
                     <div class="box box2"><input class="input_bar form-control" type="text" name=""BankCode"" id="BankCode" placeholder="Enter BankCode"></div>
                  </div>
                  <span id="alertMsgTxt_BankCode" style="color:red;"></span>
               
            
            
                  <div style="display: flex;">
                     <div class="box">
                        <p class="input_title"><span style="color:red;">*</span> BankName :</p>
                     </div>
                     <div class="box box2"><input class="input_bar form-control" type="text" name=""BankName"" id="BankName" placeholder="Enter BankName"></div>
                  </div>
                  <span id="alertMsgTxt_BankName" style="color:red;"></span>
               
            
            
                  <div style="display: flex;">
                     <div class="box">
                        <p class="input_title"><span style="color:red;">*</span> ShortName :</p>
                     </div>
                     <div class="box box2"><input class="input_bar form-control" type="text" name=""ShortName"" id="ShortName" placeholder="Enter ShortName"></div>
                  </div>
                  <span id="alertMsgTxt_ShortName" style="color:red;"></span>
               
            
            
                  <div style="display: flex;">
                     <div class="box">
                        <p class="input_title"><span style="color:red;">*</span> AccountNo :</p>
                     </div>
                     <div class="box box2"><input class="input_bar form-control" type="text" name=""AccountNo"" id="AccountNo" placeholder="Enter AccountNo"></div>
                  </div>
                  <span id="alertMsgTxt_AccountNo" style="color:red;"></span>
               
            
            
                  <div style="display: flex;">
                     <div class="box">
                        <p class="input_title"><span style="color:red;">*</span> AType :</p>
                     </div>
                     <div class="box box2"><input class="input_bar form-control" type="text" name=""AType"" id="AType" placeholder="Enter AType"></div>
                  </div>
                  <span id="alertMsgTxt_AType" style="color:red;"></span>
               
            
            
                  <div style="display: flex;">
                     <div class="box">
                        <p class="input_title"><span style="color:red;">*</span> OpBalance :</p>
                     </div>
                     <div class="box box2"><input class="input_bar form-control" type="text" name=""OpBalance"" id="OpBalance" placeholder="Enter OpBalance"></div>
                  </div>
                  <span id="alertMsgTxt_OpBalance" style="color:red;"></span>
               
            
            
                  <div style="display: flex;">
                     <div class="box">
                        <p class="input_title"><span style="color:red;">*</span> CurBalance :</p>
                     </div>
                     <div class="box box2"><input class="input_bar form-control" type="text" name=""CurBalance"" id="CurBalance" placeholder="Enter CurBalance"></div>
                  </div>
                  <span id="alertMsgTxt_CurBalance" style="color:red;"></span>
               
            </div></div><input type="hidden" class="form-control" name="userType" id="userType" placeholder="Enter userType" value="customer">
            <div style="padding-left:70px">
               <input type="hidden" id="vid">
               <input type="submit" name="submit" id="submitbtn_BankMaster" style="background-color:rgb(31, 133, 187); color:white; width:200px;height:50px;" onclick="submitBtn()" value="Submit">
            </div>
         </div>
         
         <div id="view_BankMaster" hidden>
            <span style="font-size:14px;"><strong>View</strong></span>
            <div class="table-responsive">
               <div class="col-md-12">
                  <div class="panel-primary" >
                     <div class="panel-heading" align="center"></div>
                     <div class="panel-body">
                           
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="BankCode_view">BankCode</label>
                           <div class="col-xs-8" id="BankCode_view">
                           </div>
                        </div>
                           
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="BankName_view">BankName</label>
                           <div class="col-xs-8" id="BankName_view">
                           </div>
                        </div>
                           
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="ShortName_view">ShortName</label>
                           <div class="col-xs-8" id="ShortName_view">
                           </div>
                        </div>
                           
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="AccountNo_view">AccountNo</label>
                           <div class="col-xs-8" id="AccountNo_view">
                           </div>
                        </div>
                           
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="AType_view">AType</label>
                           <div class="col-xs-8" id="AType_view">
                           </div>
                        </div>
                           
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="OpBalance_view">OpBalance</label>
                           <div class="col-xs-8" id="OpBalance_view">
                           </div>
                        </div>
                           
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="CurBalance_view">CurBalance</label>
                           <div class="col-xs-8" id="CurBalance_view">
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
            var  table_BankMaster = document.getElementById("table_BankMaster");
            var regForm_BankMaster = document.getElementById("regForm_BankMaster");
            var view_BankMaster = document.getElementById("view_BankMaster");
            var back_BankMaster = document.getElementById("btnAdd_BankMaster");
            var submit_BankMaster = document.getElementById("submitbtn_BankMaster"); 
            var otable_BankMaster, displayTable=[], txt;
            var fitness, insurance, permit, roadtax, pollution;function addBankMaster(){
            if(back_BankMaster.value == "Add New BankMaster"){
            data="";
            updateEditinfo(data);
            
            table_BankMaster.style.display="none";
             regForm_BankMaster.style.display = "block";
             view_BankMaster.style.display = "none";
            back_BankMaster.value="Back";
            header_BankMaster.value = "Add/Edit BankMaster"
            }
            else{
             table_BankMaster.style.display="block";
             regForm_BankMaster.style.display = "none";
             view_BankMaster.style.display = "none";
             back_BankMaster.value ="Add New BankMaster";
             header_BankMaster.value = "BankMaster";
            }
            }
            
            document.getElementById("submitbtn_BankMaster").addEventListener("click", function(event){
            event.preventDefault()
            });
            function submitBtn(){  var BankCode = $("#BankCode").val(); var BankName = $("#BankName").val(); var ShortName = $("#ShortName").val(); var AccountNo = $("#AccountNo").val(); var AType = $("#AType").val(); var OpBalance = $("#OpBalance").val(); var CurBalance = $("#CurBalance").val();var button= $("#submitbtn_BankMaster").val();
            var vid=$("#vid").val();
            if( BankCode!='' && BankName!='' && ShortName!='' && AccountNo!='' && AType!='' && OpBalance!='' && CurBalance!=''){
               if(button == "Submit"){
                 var xhr1 = new XMLHttpRequest(), 
                     method = "POST",
                     url = serverUrl+"master/add_BankMaster?BankCode="+BankCode+"&BankName="+BankName+"&ShortName="+ShortName+"&AccountNo="+AccountNo+"&AType="+AType+"&OpBalance="+OpBalance+"&CurBalance="+CurBalance+"";
                 xhr1.onreadystatechange = function () {
                   if (xhr1.readyState === XMLHttpRequest.DONE && xhr1.status === 200) {
                     createTable();
                     table_BankMaster.style.display = "block";
            regForm_BankMaster.style.display = "none";
            view_BankMaster.style.display = "none";
                     back_BankMaster.value="Add New BankMaster";
                     $.notify("BankMaster Added Successfully", "success");
                   }
                 };
                 xhr1.open(method, url, true);
                 xhr1.send();
               }
               else{
                 var xhr1 = new XMLHttpRequest(), 
                     method = "POST",
                     overrideMimeType = "application/json",
                     url =  serverUrl+"master/edit_BankMaster?id="+vid+"&BankCode="+BankCode+"&BankName="+BankName+"&ShortName="+ShortName+"&AccountNo="+AccountNo+"&AType="+AType+"&OpBalance="+OpBalance+"&CurBalance="+CurBalance+"";
                 xhr1.onreadystatechange = function () {
                   if (xhr1.readyState === XMLHttpRequest.DONE && xhr1.status === 200) {
                     createTable();
                     regForm_BankMaster.style.display = "none";
            table_BankMaster.style.display = "block";
            view_BankMaster.style.display = "none";
                     back_BankMaster.value="Add New BankMaster";
                     $.notify("BankMaster Updated Successfully", "success");
                   }
                 };
                 xhr1.open(method, url, true);
            xhr1.send();$("#BankCode").text("");$("#BankName").text("");$("#ShortName").text("");$("#AccountNo").text("");$("#AType").text("");$("#OpBalance").text("");$("#CurBalance").text("");
               }
             }
             else{
            
              if(BankCode==""){
            $("#BankCode_alertMsgTxt").text("Please Enter BankCode");
               }
               else{
            $("#BankCode_alertMsgTxt").text("");
            }
              if(BankName==""){
            $("#BankName_alertMsgTxt").text("Please Enter BankName");
               }
               else{
            $("#BankName_alertMsgTxt").text("");
            }
              if(ShortName==""){
            $("#ShortName_alertMsgTxt").text("Please Enter ShortName");
               }
               else{
            $("#ShortName_alertMsgTxt").text("");
            }
              if(AccountNo==""){
            $("#AccountNo_alertMsgTxt").text("Please Enter AccountNo");
               }
               else{
            $("#AccountNo_alertMsgTxt").text("");
            }
              if(AType==""){
            $("#AType_alertMsgTxt").text("Please Enter AType");
               }
               else{
            $("#AType_alertMsgTxt").text("");
            }
              if(OpBalance==""){
            $("#OpBalance_alertMsgTxt").text("Please Enter OpBalance");
               }
               else{
            $("#OpBalance_alertMsgTxt").text("");
            }
              if(CurBalance==""){
            $("#CurBalance_alertMsgTxt").text("Please Enter CurBalance");
               }
               else{
            $("#CurBalance_alertMsgTxt").text("");
            }
            return false;
             }
            } 
            $(document).ready(function(){
             otable_BankMaster  = $("#example_BankMaster").DataTable( {
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
                 $("#example_BankMaster_filter").detach().show();
                 $("#searchTxt_BankMaster").on("input", function(){
                   otable_BankMaster.search(this.value).draw();
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
                 url = ""+serverUrl+"master/getallBankMaster";
             xhr.onreadystatechange = function () {
               if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                 if(xhr.responseText){
                   var data=JSON.parse(xhr.responseText);
             for(var i=0; i<data.length; i++){txt ='<tr style="height:20px;" role="row">';var BankCode ='<td>'+data[i]["BankCode"]+'</td>';var BankName ='<td>'+data[i]["BankName"]+'</td>';var ShortName ='<td>'+data[i]["ShortName"]+'</td>';var AccountNo ='<td>'+data[i]["AccountNo"]+'</td>';var AType ='<td>'+data[i]["AType"]+'</td>';var OpBalance ='<td>'+data[i]["OpBalance"]+'</td>';var CurBalance ='<td>'+data[i]["CurBalance"]+'</td>';txt = txt+BankCode+BankName+ShortName+AccountNo+AType+OpBalance+CurBalance;
             txt =txt+'<td><button type="button" onclick="javascript: view('+data[i]['id']+',1)">VIEW</button></td><td><button type="button" onclick="javascript: view('+data[i]['id']+',2)">EDIT</button></td><td><button type="button" onclick="javascript:confirmDelete('+data[i]['id']+');" id="delete">DELETE</button></td></tr>';
                     displayTable[i]= txt;
                   }
                   scrollPos = $("#example_BankMaster").scrollTop();
                   otable_BankMaster.clear().draw();
                   for( i = 0; i < displayTable.length; i++ ) {
                     otable_BankMaster.row.add($(displayTable[i]));
                   }
                   otable_BankMaster.draw();
                 }
               }
             };
             xhr.open(method, url, true);
             xhr.send();
            }
            function view(id,data){
            if(data==1){
            updateinfo(id);
            table_BankMaster.style.display = "none";
            view_BankMaster.style.display = "block";
            regForm_BankMaster.style.display = "none";
            back_BankMaster.value = "Back"
            
            }else{
            table_BankMaster.style.display = "none";
            regForm_BankMaster.style.display = "block";
            view_BankMaster.style.display ="none"
            back_BankMaster.value = "Back";
            
            updateEditinfo(id);
            }
            
            
            }
            
            function updateEditinfo(mdata){ $("#BankCode_alertMsgTxt").text(""); $("#BankName_alertMsgTxt").text(""); $("#ShortName_alertMsgTxt").text(""); $("#AccountNo_alertMsgTxt").text(""); $("#AType_alertMsgTxt").text(""); $("#OpBalance_alertMsgTxt").text(""); $("#CurBalance_alertMsgTxt").text("");
             if(mdata != ""){
               var xhr4 = new XMLHttpRequest(), 
                   method = "GET",
                   overrideMimeType = "application/json",
                   url =   serverUrl+"master/view_BankMaster?id="+mdata;
               xhr4.onreadystatechange = function () {
                 if (xhr4.readyState === XMLHttpRequest.DONE && xhr4.status === 200) {
                   var data=JSON.parse(xhr4.responseText);
             document.getElementById("vid").value = mdata;document.getElementById("BankCode").value = data[0]["BankCode"];document.getElementById("BankName").value = data[0]["BankName"];document.getElementById("ShortName").value = data[0]["ShortName"];document.getElementById("AccountNo").value = data[0]["AccountNo"];document.getElementById("AType").value = data[0]["AType"];document.getElementById("OpBalance").value = data[0]["OpBalance"];document.getElementById("CurBalance").value = data[0]["CurBalance"];submit_BankMaster.value="Update";
                 }
               };
               xhr4.open(method, url, true);
               xhr4.send();
             }
            else if(mdata == ""){document.getElementById("BankCode").value = "";document.getElementById("BankName").value = "";document.getElementById("ShortName").value = "";document.getElementById("AccountNo").value = "";document.getElementById("AType").value = "";document.getElementById("OpBalance").value = "";document.getElementById("CurBalance").value = "";
               submit_BankMaster.value="Submit";
             }
            }
            
            function updateinfo(sdata){
               
            if(sdata != null){
            var xhr3 = new XMLHttpRequest(), 
            method = "GET",
            overrideMimeType = "application/json",
            url = serverUrl+"master/view_BankMaster?id="+sdata; 
            xhr3.onreadystatechange = function () {
            
            if (xhr3.readyState === XMLHttpRequest.DONE && xhr3.status === 200) {
            var data= JSON.parse(xhr3.responseText);
            document.getElementById("BankCode_view").innerHTML= data[0]["BankCode"];document.getElementById("BankName_view").innerHTML= data[0]["BankName"];document.getElementById("ShortName_view").innerHTML= data[0]["ShortName"];document.getElementById("AccountNo_view").innerHTML= data[0]["AccountNo"];document.getElementById("AType_view").innerHTML= data[0]["AType"];document.getElementById("OpBalance_view").innerHTML= data[0]["OpBalance"];document.getElementById("CurBalance_view").innerHTML= data[0]["CurBalance"];
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
                   url = serverUrl+"master/delete_BankMaster?id="+id;
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
         