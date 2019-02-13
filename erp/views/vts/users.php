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
            <span class="title_pra" style="font-size:18px;"><strong>users</strong></span>
            <input type="button" id="btnAdd_users"  class="btn btn-info pull-right" class="btn btn-info pull-right" style="width:10%; font-size:10px;" onclick="addusers()" value="Add New users"> 
         </div>
         <br>
         <center> <input type="text" id="searchTxt_users" placeholder="Search"></center>
         <br>
         <div class="table-responsive" id="table_users">
            
            <table id="example_users" class="cell-border tdesign" width="100%" cellspacing="0">
               <thead>
                  <tr>
                     
                     <th>username</th>
                     
                     <th>email</th>
                     
                     <th>password</th>
                     
                     <th></th>
                     <th></th>
                     <th></th>
                  </tr>
               </thead>
            </table>
         </div>
          
         <div id="regForm_users" hidden>
            <div class="col-md-12" style="margin-top: 50px;">
               <div class="col-md-offset-1 col-md-5">
            
            
                  <div style="display: flex;">
                     <div class="box">
                        <p class="input_title"><span style="color:red;">*</span> username :</p>
                     </div>
                     <div class="box box2"><input class="input_bar form-control" type="text" name=""username"" id="username" placeholder="Enter username"></div>
                  </div>
                  <span id="alertMsgTxt_username" style="color:red;"></span>
               
            
            
                  <div style="display: flex;">
                     <div class="box">
                        <p class="input_title"><span style="color:red;">*</span> email :</p>
                     </div>
                     <div class="box box2"><input class="input_bar form-control" type="text" name=""email"" id="email" placeholder="Enter email"></div>
                  </div>
                  <span id="alertMsgTxt_email" style="color:red;"></span>
               
            
            
                  <div style="display: flex;">
                     <div class="box">
                        <p class="input_title"><span style="color:red;">*</span> password :</p>
                     </div>
                     <div class="box box2"><input class="input_bar form-control" type="text" name=""password"" id="password" placeholder="Enter password"></div>
                  </div>
                  <span id="alertMsgTxt_password" style="color:red;"></span>
               
            </div></div><input type="hidden" class="form-control" name="userType" id="userType" placeholder="Enter userType" value="user">
            <div style="padding-left:70px">
               <input type="hidden" id="vid">
               <input type="submit" name="submit" id="submitbtn_users" style="background-color:rgb(31, 133, 187); color:white; width:200px;height:50px;" onclick="submitBtn()" value="Submit">
            </div>
         </div>
         
         <div id="view_users" hidden>
            <span style="font-size:14px;"><strong>View</strong></span>
            <div class="table-responsive">
               <div class="col-md-12">
                  <div class="panel-primary" >
                     <div class="panel-heading" align="center"></div>
                     <div class="panel-body">
                           
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="username_view">username</label>
                           <div class="col-xs-8" id="username_view">
                           </div>
                        </div>
                           
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="email_view">email</label>
                           <div class="col-xs-8" id="email_view">
                           </div>
                        </div>
                           
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="password_view">password</label>
                           <div class="col-xs-8" id="password_view">
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
            var  table_users = document.getElementById("table_users");
            var regForm_users = document.getElementById("regForm_users");
            var view_users = document.getElementById("view_users");
            var back_users = document.getElementById("btnAdd_users");
            var submit_users = document.getElementById("submitbtn_users"); 
            var otable_users, displayTable=[], txt;
            var fitness, insurance, permit, roadtax, pollution;function addusers(){
            if(back_users.value == "Add New users"){
            data="";
            updateEditinfo(data);
            
            table_users.style.display="none";
             regForm_users.style.display = "block";
             view_users.style.display = "none";
            back_users.value="Back";
            //header_users.value = "Add/Edit users"
            }
            else{
             table_users.style.display="block";
             regForm_users.style.display = "none";
             view_users.style.display = "none";
             back_users.value ="Add New users";
             //header_users.value = "users";
            }
            }
            
            document.getElementById("submitbtn_users").addEventListener("click", function(event){
            event.preventDefault()
            });
            function submitBtn(){  var username = $("#username").val(); var email = $("#email").val(); var password = $("#password").val();var button= $("#submitbtn_users").val();
            var vid=$("#vid").val();
            if( username!='' && email!='' && password!=''){
               if(button == "Submit"){
                 var xhr1 = new XMLHttpRequest(), 
                     method = "POST",
                     url = serverUrl+"vts/submit_users?username="+username+"&email="+email+"&password="+password+"";
                 xhr1.onreadystatechange = function () {
                   if (xhr1.readyState === XMLHttpRequest.DONE && xhr1.status === 200) {
                     createTable();
                     table_users.style.display = "block";
            regForm_users.style.display = "none";
            view_users.style.display = "none";
                     back_users.value="Add New users";
                     $.notify("users Added Successfully", "success");
                   }
                 };
                 xhr1.open(method, url, true);
                 xhr1.send();
               }
               else{
                 var xhr1 = new XMLHttpRequest(), 
                     method = "POST",
                     overrideMimeType = "application/json",
                     url =  serverUrl+"vts/update_users?admin_id="+vid+"&username="+username+"&email="+email+"&password="+password+"";
                 xhr1.onreadystatechange = function () {
                   if (xhr1.readyState === XMLHttpRequest.DONE && xhr1.status === 200) {
                     createTable();
                     regForm_users.style.display = "none";
            table_users.style.display = "block";
            view_users.style.display = "none";
                     back_users.value="Add New users";
                     $.notify("users Updated Successfully", "success");
                   }
                 };
                 xhr1.open(method, url, true);
            xhr1.send();$("#username").text("");$("#email").text("");$("#password").text("");
               }
             }
             else{
            
              if(username==""){
            $("#username_alertMsgTxt").text("Please Enter username");
               }
               else{
            $("#username_alertMsgTxt").text("");
            }
              if(email==""){
            $("#email_alertMsgTxt").text("Please Enter email");
               }
               else{
            $("#email_alertMsgTxt").text("");
            }
              if(password==""){
            $("#password_alertMsgTxt").text("Please Enter password");
               }
               else{
            $("#password_alertMsgTxt").text("");
            }
            return false;
             }
            } 
            $(document).ready(function(){
             otable_users  = $("#example_users").DataTable( {
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
                 $("#example_users_filter").detach().show();
                 $("#searchTxt_users").on("input", function(){
                   otable_users.search(this.value).draw();
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
                 url = ""+serverUrl+"vts/allusers";
             xhr.onreadystatechange = function () {
               if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                 if(xhr.responseText){
                   var data=JSON.parse(xhr.responseText);
             for(var i=0; i<data.length; i++){txt ='<tr style="height:20px;" role="row">';var username ='<td>'+data[i]["username"]+'</td>';var email ='<td>'+data[i]["email"]+'</td>';var password ='<td>'+data[i]["password"]+'</td>';txt = txt+username+email+password;
             txt =txt+'<td><button type="button" onclick="javascript: view('+data[i]['id']+',1)">VIEW</button></td><td><button type="button" onclick="javascript: view('+data[i]['id']+',2)">EDIT</button></td><td><button type="button" onclick="javascript:confirmDelete('+data[i]['id']+');" id="delete">DELETE</button></td></tr>';
                     displayTable[i]= txt;
                   }
                   scrollPos = $("#example_users").scrollTop();
                   otable_users.clear().draw();
                   for( i = 0; i < displayTable.length; i++ ) {
                     otable_users.row.add($(displayTable[i]));
                   }
                   otable_users.draw();
                 }
               }
             };
             xhr.open(method, url, true);
             xhr.send();
            }
            function view(id,data){
            if(data==1){
            updateinfo(id);
            table_users.style.display = "none";
            view_users.style.display = "block";
            regForm_users.style.display = "none";
            back_users.value = "Back"
            
            }else{
            table_users.style.display = "none";
            regForm_users.style.display = "block";
            view_users.style.display ="none"
            back_users.value = "Back";
            
            updateEditinfo(id);
            }
            
            
            }
            
            function updateEditinfo(mdata){ $("#username_alertMsgTxt").text(""); $("#email_alertMsgTxt").text(""); $("#password_alertMsgTxt").text("");
             if(mdata != ""){
               var xhr4 = new XMLHttpRequest(), 
                   method = "GET",
                   overrideMimeType = "application/json",
                   url =   serverUrl+"hsd/view_users?id="+mdata;
               xhr4.onreadystatechange = function () {
                 if (xhr4.readyState === XMLHttpRequest.DONE && xhr4.status === 200) {
                   var data=JSON.parse(xhr4.responseText);
             document.getElementById("vid").value = mdata;document.getElementById("username").value = data[0]["username"];document.getElementById("email").value = data[0]["email"];document.getElementById("password").value = data[0]["password"];submit_users.value="Update";
                 }
               };
               xhr4.open(method, url, true);
               xhr4.send();
             }
            else if(mdata == ""){document.getElementById("username").value = "";document.getElementById("email").value = "";document.getElementById("password").value = "";
               submit_users.value="Submit";
             }
            }
            
            function updateinfo(sdata){
               
            if(sdata != null){
            var xhr3 = new XMLHttpRequest(), 
            method = "GET",
            overrideMimeType = "application/json",
            url = serverUrl+"hsd/view_users?id="+sdata; 
            xhr3.onreadystatechange = function () {
            
            if (xhr3.readyState === XMLHttpRequest.DONE && xhr3.status === 200) {
            var data= JSON.parse(xhr3.responseText);
            document.getElementById("username_view").innerHTML= data[0]["username"];document.getElementById("email_view").innerHTML= data[0]["email"];document.getElementById("password_view").innerHTML= data[0]["password"];
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
                   url = serverUrl+"hsd/delete_users?id="+id;
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
         