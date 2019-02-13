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
            <span class="title_pra" style="font-size:18px;"><strong>customer</strong></span>
            <input type="button" id="btnAdd_customer"  class="btn btn-info pull-right" style="width:10%; font-size:10px;" onclick="addcustomer()" value="Add New customer"> 
         </div>
         <br>
         <center> <input type="text" id="searchTxt_customer" placeholder="Search"></center>
         <br>
         <div class="table-responsive" id="table_customer">
            
            <table id="example_customer" class="cell-border tdesign" width="100%" cellspacing="0">
               <thead>
                  <tr>
                     
                     <th>fname</th>
                     <th>username</th>
                     <th>mobno</th>
                     <th>email</th>
                     
<!--
                     <th>password</th>
                     
                     <th>confirmpassword</th>
-->
                     
                     <th></th>
                     <th></th>
                     <th></th>
                  </tr>
               </thead>
            </table>
         </div>
          
         <div id="regForm_customer" hidden>
            
            <div class="col-md-12" style="margin-top: 50px;">
               <div class="col-md-offset-1 col-md-5">
                  <div style="display: flex;">
                     <div class="box">
                        <p class="input_title"><span style="color:red;">*</span> fname :</p>
                     </div>
                     <div class="box box2"><input class="input_bar form-control" type="text" name=""fname"" id="fname" placeholder="Enter fname"></div>
                  </div>
                  <span id="alertMsgTxt_fname" style="color:red;"></span>
               
                  <div style="display: flex;">
                     <div class="box">
                        <p class="input_title"><span style="color:red;">*</span> username :</p>
                     </div>
                     <div class="box box2"><input class="input_bar form-control" type="text" name=""username"" id="username" placeholder="Enter username"></div>
                  </div>
                  <span id="alertMsgTxt_username" style="color:red;"></span>
               
                  <div style="display: flex;">
                     <div class="box">
                        <p class="input_title"><span style="color:red;">*</span> mobno :</p>
                     </div>
                     <div class="box box2"><input class="input_bar form-control" type="text" name=""mobno"" id="mobno" placeholder="Enter mobno"></div>
                  </div>
                  <span id="alertMsgTxt_mobno" style="color:red;"></span>
              
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
               
                  <div style="display: flex;">
                     <div class="box">
                        <p class="input_title"><span style="color:red;">*</span> confirmpassword :</p>
                     </div>
                     <div class="box box2"><input class="input_bar form-control" type="text" name=""confirmpassword"" id="confirmpassword" placeholder="Enter confirmpassword"></div>
                  </div>
                  <span id="alertMsgTxt_confirmpassword" style="color:red;"></span>
               </div>
            </div>
            <input type="hidden" class="form-control" name="userType" id="userType" placeholder="Enter userType" value="customer">
            <div style="padding-left:70px">
               <input type="hidden" id="vid">
               <input type="submit" name="submit" id="submitbtn_customer" style="background-color:rgb(31, 133, 187); color:white; width:200px;height:50px;" onclick="submitBtn()" value="Submit">
            </div>
         </div>
         
         <div id="view_customer" hidden>
            <span style="font-size:14px;"><strong>View</strong></span>
            <div class="table-responsive">
               <div class="col-md-12">
                  <div class="panel-primary" >
                     <div class="panel-heading" align="center"></div>
                     <div class="panel-body">
                           
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="fname_view">fname</label>
                           <div class="col-xs-8" id="fname_view">
                           </div>
                        </div>
                           
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="username_view">username</label>
                           <div class="col-xs-8" id="username_view">
                           </div>
                        </div>
                           
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="mobno_view">mobno</label>
                           <div class="col-xs-8" id="mobno_view">
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
                           
                        <div class="col-xs-6 form-group">
                           <label class="control-label col-xs-4" for="confirmpassword_view">confirmpassword</label>
                           <div class="col-xs-8" id="confirmpassword_view">
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
            var  table_customer = document.getElementById("table_customer");
            var regForm_customer = document.getElementById("regForm_customer");
            var view_customer = document.getElementById("view_customer");
            var back_customer = document.getElementById("btnAdd_customer");
            var submit_customer = document.getElementById("submitbtn_customer"); 
            var otable_customer, displayTable=[], txt;
            var fitness, insurance, permit, roadtax, pollution;
             function addcustomer(){
               
            if(back_customer.value == "Add New customer"){
                  
            data="";
                 // alert("gfwdhf");
            updateEditinfo(data);
          
            table_customer.style.display="none";
             regForm_customer.style.display = "block";
             view_customer.style.display = "none";
            back_customer.value="Back";
            //header_customer.value = "Add/Edit customer"
            }
            else{
             table_customer.style.display="block";
             regForm_customer.style.display = "none";
             view_customer.style.display = "none";
             back_customer.value ="Add New customer";
            // header_customer.value = "customer";
            }
            }
            
            document.getElementById("submitbtn_customer").addEventListener("click", function(event){
            event.preventDefault()
            });
            function submitBtn(){  var fname = $("#fname").val(); var username = $("#username").val(); var mobno = $("#mobno").val(); var email = $("#email").val(); var password = $("#password").val(); var confirmpassword = $("#confirmpassword").val();var button= $("#submitbtn_customer").val();
            var vid=$("#vid").val();
            if( fname!='' && username!='' && mobno!='' && email!='' && password!='' && confirmpassword!=''){
               if(button == "Submit"){
                 var xhr1 = new XMLHttpRequest(), 
                     method = "POST",
                     url = serverUrl+"vts/add_customer?fname="+fname+"&username="+username+"&mobno="+mobno+"&email="+email+"&password="+password+"&confirmpassword="+confirmpassword+"";
                 xhr1.onreadystatechange = function () {
                   if (xhr1.readyState === XMLHttpRequest.DONE && xhr1.status === 200) {
                     createTable();
                     table_customer.style.display = "block";
            regForm_customer.style.display = "none";
            view_customer.style.display = "none";
                     back_customer.value="Add New customer";
                     $.notify("customer Added Successfully", "success");
                   }
                 };
                 xhr1.open(method, url, true);
                 xhr1.send();
               }
               else{
                 var xhr1 = new XMLHttpRequest(), 
                     method = "POST",
                     overrideMimeType = "application/json",
                     url =  serverUrl+"vts/edit_customer_details?admin_id="+vid+"&fname="+fname+"&username="+username+"&mobno="+mobno+"&email="+email+"&password="+password+"&confirmpassword="+confirmpassword+"";
                 xhr1.onreadystatechange = function () {
                   if (xhr1.readyState === XMLHttpRequest.DONE && xhr1.status === 200) {
                     createTable();
                     regForm_customer.style.display = "none";
            table_customer.style.display = "block";
            view_customer.style.display = "none";
                     back_customer.value="Add New customer";
                     $.notify("customer Updated Successfully", "success");
                   }
                 };
                 xhr1.open(method, url, true);
            xhr1.send();$("#fname").text("");$("#username").text("");$("#mobno").text("");$("#email").text("");$("#password").text("");$("#confirmpassword").text("");
               }
             }
             else{
            
              if(fname==""){
            $("#fname_alertMsgTxt").text("Please Enter fname");
               }
               else{
            $("#fname_alertMsgTxt").text("");
            }
              if(username==""){
            $("#username_alertMsgTxt").text("Please Enter username");
               }
               else{
            $("#username_alertMsgTxt").text("");
            }
              if(mobno==""){
            $("#mobno_alertMsgTxt").text("Please Enter mobno");
               }
               else{
            $("#mobno_alertMsgTxt").text("");
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
              if(confirmpassword==""){
            $("#confirmpassword_alertMsgTxt").text("Please Enter confirmpassword");
               }
               else{
            $("#confirmpassword_alertMsgTxt").text("");
            }
            return false;
             }
            } 
            $(document).ready(function(){
             otable_customer  = $("#example_customer").DataTable( {
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
                 $("#example_customer_filter").detach().show();
                 $("#searchTxt_customer").on("input", function(){
                   otable_customer.search(this.value).draw();
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
                 url = ""+serverUrl+"vts/Allcustomer";
             xhr.onreadystatechange = function () {
               if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                 if(xhr.responseText){
                   var data=JSON.parse(xhr.responseText);
             for(var i=0; i<data.length; i++){txt ='<tr style="height:20px;" role="row">';var fname ='<td>'+data[i]["fname"]+'</td>';var username ='<td>'+data[i]["username"]+'</td>';var mobno ='<td>'+data[i]["mobno"]+'</td>';var email ='<td>'+data[i]["email"]+'</td>';
                                              txt = txt+fname+username+mobno+email;
             txt =txt+'<td><button type="button" onclick="javascript: view('+data[i]['id']+',1)">VIEW</button></td><td><button type="button" onclick="javascript: view('+data[i]['id']+',2)">EDIT</button></td><td><button type="button" onclick="javascript:confirmDelete('+data[i]['id']+');" id="delete">DELETE</button></td></tr>';
                     displayTable[i]= txt;
                   }
                   scrollPos = $("#example_customer").scrollTop();
                   otable_customer.clear().draw();
                   for( i = 0; i < displayTable.length; i++ ) {
                     otable_customer.row.add($(displayTable[i]));
                   }
                   otable_customer.draw();
                 }
               }
             };
             xhr.open(method, url, true);
             xhr.send();
            }
            function view(id,data){
            if(data==1){
            updateinfo(id);
            table_customer.style.display = "none";
            view_customer.style.display = "block";
            regForm_customer.style.display = "none";
            back_customer.value = "Back"
            
            }else{
            table_customer.style.display = "none";
            regForm_customer.style.display = "block";
            view_customer.style.display ="none"
            back_customer.value = "Back";
            
            updateEditinfo(id);
            }
            
            
            }
            
            function updateEditinfo(mdata){
               $("#fname_alertMsgTxt").text(""); $("#username_alertMsgTxt").text(""); $("#mobno_alertMsgTxt").text(""); $("#email_alertMsgTxt").text(""); $("#password_alertMsgTxt").text(""); $("#confirmpassword_alertMsgTxt").text("");
             if(mdata != ""){
                 // alert("hghg");
               var xhr4 = new XMLHttpRequest(), 
                   method = "GET",
                   overrideMimeType = "application/json",
                   url =   serverUrl+"vts/view_customer?admin_id="+mdata;
               xhr4.onreadystatechange = function () {
                 if (xhr4.readyState === XMLHttpRequest.DONE && xhr4.status === 200) {
                   var data=JSON.parse(xhr4.responseText);
             document.getElementById("vid").value = mdata;document.getElementById("fname").value = data[0]["fname"];document.getElementById("username").value = data[0]["username"];document.getElementById("mobno").value = data[0]["mobno"];document.getElementById("email").value = data[0]["email"];document.getElementById("password").value = data[0]["password"];document.getElementById("confirmpassword").value = data[0]["confirmpassword"];submit_customer.value="Update";
                 }
               };
               xhr4.open(method, url, true);
               xhr4.send();
             }
            else if(mdata == ""){ document.getElementById("fname").value = "";document.getElementById("username").value = "";document.getElementById("mobno").value = "";document.getElementById("email").value = "";document.getElementById("password").value = "";document.getElementById("confirmpassword").value = "";
                                //  alert("customer");
               submit_customer.value="Submit";
                                
             }
            }
            
            function updateinfo(sdata){
               
            if(sdata != null){
            var xhr3 = new XMLHttpRequest(), 
            method = "GET",
            overrideMimeType = "application/json",
            url = serverUrl+"vts/view_customer?admin_id="+sdata; 
            xhr3.onreadystatechange = function () {
            
            if (xhr3.readyState === XMLHttpRequest.DONE && xhr3.status === 200) {
            var data= JSON.parse(xhr3.responseText);
            document.getElementById("fname_view").innerHTML= data[0]["fname"];document.getElementById("username_view").innerHTML= data[0]["username"];document.getElementById("mobno_view").innerHTML= data[0]["mobno"];document.getElementById("email_view").innerHTML= data[0]["email"];document.getElementById("password_view").innerHTML= data[0]["password"];document.getElementById("confirmpassword_view").innerHTML= data[0]["confirmpassword"];
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
                   url = serverUrl+"vts/delete_customer_details?admin_id="+id;
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
         