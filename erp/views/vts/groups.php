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
            <span class="title_pra" style="font-size:18px;"><strong>groups</strong></span>
            <input type="button" id="btnAdd_groups"  class="btn btn-info pull-right" class="btn btn-info pull-right" style="width:10%; font-size:10px;" onclick="addgroups()" value="Add New groups"> 
         </div>
         <br>
         <center> <input type="text" id="searchTxt_groups" placeholder="Search"></center>
         <br>
         <div class="table-responsive" id="table_groups">
            
            <table id="example_groups" class="cell-border tdesign" width="100%" cellspacing="0">
               <thead>
                  <tr>
                     
                     <th>groupname</th>
                     
                     <th></th>
                     <th></th>
                     
                  </tr>
               </thead>
            </table>
         </div>
          
         <div id="regForm_groups" hidden>
            <div class="col-md-12" style="margin-top: 50px;">
               <div class="col-md-offset-1 col-md-5">
            
            
                  <div style="display: flex;">
                     <div class="box">
                        <p class="input_title"><span style="color:red;">*</span> groupname :</p>
                     </div>
                     <div class="box box2"><input class="input_bar form-control" type="text" name=""groupname"" id="groupname" placeholder="Enter groupname"></div>
                  </div>
                  <span id="alertMsgTxt_groupname" style="color:red;"></span>
               
            </div></div><input type="hidden" class="form-control" name="userType" id="userType" placeholder="Enter userType" value="customer">
            <div style="padding-left:70px">
               <input type="hidden" id="vid">
               <input type="submit" name="submit" id="submitbtn_groups" style="background-color:rgb(31, 133, 187); color:white; width:200px;height:50px;" onclick="submitBtn()" value="Submit">
            </div>
         </div>
         
         
         <script>
            var serverUrl="<?php echo URL; ?>";
            var data;
            var sensor;
            var  table_groups = document.getElementById("table_groups");
            var regForm_groups = document.getElementById("regForm_groups");
            
            var back_groups = document.getElementById("btnAdd_groups");
            var submit_groups = document.getElementById("submitbtn_groups"); 
            var otable_groups, displayTable=[], txt;
            var fitness, insurance, permit, roadtax, pollution;function addgroups(){
            if(back_groups.value == "Add New groups"){
            data="";
            updateEditinfo(data);
            
            table_groups.style.display="none";
             regForm_groups.style.display = "block";
            
            back_groups.value="Back";
            header_groups.value = "Add/Edit groups"
            }
            else{
             table_groups.style.display="block";
             regForm_groups.style.display = "none";
             
             back_groups.value ="Add New groups";
             header_groups.value = "groups";
            }
            }
            
            document.getElementById("submitbtn_groups").addEventListener("click", function(event){
            event.preventDefault()
            });
            function submitBtn(){  var groupname = $("#groupname").val();var button= $("#submitbtn_groups").val();
            var vid=$("#vid").val();
            if( groupname!=''){
               if(button == "Submit"){
                 var xhr1 = new XMLHttpRequest(), 
                     method = "POST",
                     url = serverUrl+"vts/add_groups?name="+groupname+"";
                 xhr1.onreadystatechange = function () {
                   if (xhr1.readyState === XMLHttpRequest.DONE && xhr1.status === 200) {
                     createTable();
                     table_groups.style.display = "block";
            regForm_groups.style.display = "none";
           
                     back_groups.value="Add New groups";
                     $.notify("groups Added Successfully", "success");
                   }
                 };
                 xhr1.open(method, url, true);
                 xhr1.send();
               }
               else{
                 var xhr1 = new XMLHttpRequest(), 
                     method = "POST",
                     overrideMimeType = "application/json",
                     url =  serverUrl+"vts/update_groups?id="+vid+"&name="+groupname+"";
                 xhr1.onreadystatechange = function () {
                   if (xhr1.readyState === XMLHttpRequest.DONE && xhr1.status === 200) {
                     createTable();
                     regForm_groups.style.display = "none";
            table_groups.style.display = "block";
           
                     back_groups.value="Add New groups";
                     $.notify("groups Updated Successfully", "success");
                   }
                 };
                 xhr1.open(method, url, true);
            xhr1.send();$("#groupname").text("");
               }
             }
             else{
            
              if(groupname==""){
            $("#groupname_alertMsgTxt").text("Please Enter groupname");
               }
               else{
            $("#groupname_alertMsgTxt").text("");
            }
            return false;
             }
            } 
            $(document).ready(function(){
             otable_groups  = $("#example_groups").DataTable( {
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
                 $("#example_groups_filter").detach().show();
                 $("#searchTxt_groups").on("input", function(){
                   otable_groups.search(this.value).draw();
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
                 url = ""+serverUrl+"master/groups";
             xhr.onreadystatechange = function () {
               if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                 if(xhr.responseText){
                   var data=JSON.parse(xhr.responseText);
             for(var i=0; i<data.length; i++){txt ='<tr style="height:20px;" role="row">';var groupname ='<td>'+data[i]["name"]+'</td>';txt = txt+groupname;
             txt =txt+'<td><button type="button" onclick="javascript: view('+data[i]['id']+',2)">EDIT</button></td><td><button type="button" onclick="javascript:confirmDelete('+data[i]['id']+');" id="delete">DELETE</button></td></tr>';
                     displayTable[i]= txt;
                   }
                   scrollPos = $("#example_groups").scrollTop();
                   otable_groups.clear().draw();
                   for( i = 0; i < displayTable.length; i++ ) {
                     otable_groups.row.add($(displayTable[i]));
                   }
                   otable_groups.draw();
                 }
               }
             };
             xhr.open(method, url, true);
             xhr.send();
            }
            function view(id){
          
            table_groups.style.display = "none";
            regForm_groups.style.display = "block";
            view_groups.style.display ="none"
            back_groups.value = "Back";
            
            updateEditinfo(id);
           
            
            
            }
            
            function updateEditinfo(mdata){ $("#groupname_alertMsgTxt").text("");
             if(mdata != ""){
               var xhr4 = new XMLHttpRequest(), 
                   method = "GET",
                   overrideMimeType = "application/json",
                   url =   serverUrl+"vts/edit_update_groups?id="+mdata;
               xhr4.onreadystatechange = function () {
                 if (xhr4.readyState === XMLHttpRequest.DONE && xhr4.status === 200) {
                   var data=JSON.parse(xhr4.responseText);
             document.getElementById("vid").value = mdata;document.getElementById("groupname").value = data[0]["name"];submit_groups.value="Update";
                 }
               };
               xhr4.open(method, url, true);
               xhr4.send();
             }
            else if(mdata == ""){document.getElementById("groupname").value = "";
               submit_groups.value="Submit";
             }
            }
            
//            function updateinfo(sdata){
//               
//            if(sdata != null){
//            var xhr3 = new XMLHttpRequest(), 
//            method = "GET",
//            overrideMimeType = "application/json",
//            url = serverUrl+"hsd/view_groups?id="+sdata; 
//            xhr3.onreadystatechange = function () {
//            
//            if (xhr3.readyState === XMLHttpRequest.DONE && xhr3.status === 200) {
//            var data= JSON.parse(xhr3.responseText);
//            document.getElementById("groupname_view").innerHTML= data[0]["groupname"];
//            }
//            };
//            xhr3.open(method, url, true);
//            xhr3.send();
//            }
//            		  }
//            document.getElementById("delete").addEventListener("click", function(event){
//             event.preventDefault()
//            }
//            );
            function confirmDelete(id) {
             if (confirm("Are you sure you want to delete?")) {
               var xhr2 = new XMLHttpRequest(), 
                   method = "GET",
                   overrideMimeType = "application/json",
                   url = serverUrl+"vts/delete_groups?id="+id;
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
         