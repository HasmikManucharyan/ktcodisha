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
  </style>
<div class="container-fluid" style="padding: 0px; margin-bottom: 20px;">
  <div class="tab-content">
     <div id="home" class="tab-pane fade in active">
        <div class="white_div" style="">
           <div class="title_div">
             <span class="title_pra" style="font-size:18px;"><strong>Driver Master</strong></span>
             <input type="button" id="btnAdd_drivermaster"  class="btn btn-info pull-right" style="width:110px; font-size:10px; margin-top:10px; margin-bottom:10px" onclick="addDriverMaster()" value="Add New Driver"> 
            </div>
            <br>
            <center> <input type="text" id="searchTxt_drivermaster" placeholder="Search"></center><br>
              <div class="table-responsive" id="table_drivermaster">   
                    <table style="margin-left:10px; margin-right:10px" id="example_drivermaster" class="cell-border tdesign" cellspacing="0" >
                         <thead>
                             <tr>
                                <th>Name</th>
                                <th>QR</th>
                                <th>License No</th>
                                <th>Expiry</th>
                                <th>Blood Group</th>
                                <th>Phone No</th>
                                <th>Vehicle No</th>
                                <th></th>
                                <th></th>
                                <th></th>
                             </tr>
                        </thead>
                  </table>	
                </div>

                                                      
  <form style="padding-left:20px" id="addForm_drivermaster" hidden>
      <div class="col-md-12" style="margin-top: 50px;">
          <div class="col-md-offset-1 col-md-5">
            <div style="display: flex;">
            <div class="box"><p class="input_title"><span style="color:red;">*</span> Name:</p></div>
            <div class="box box2"><input class="input_bar form-control" type="text" name="name" id="name" placeholder="Enter Name"></div>
                   
            </div>
               <span id="alertMsgTxt" style="color:red;"></span>
            <input class="input_bar form-control" type="hidden" name="uniqueid" id="uniqueid" placeholder="Enter unique id">
            <div style="display: flex;">
            <div class="box"><p class="input_title">Father Name:</p></div>
            <div class="box box2"><input class="input_bar form-control" type="text" name="fathername" id="fathername" placeholder="Enter Father Name"></div>
            </div>

            <div style="display: flex;">
            <div class="box"><p class="input_title">City:</p></div>
            <div class="box box2"><input class="input_bar form-control" type="text" name="city" id="city" placeholder="Enter City Name"></div>
            </div>

            <div style="display: flex;">
            <div class="box"><p class="input_title">Phone no:</p></div>
            <div class="box box2"><input class="input_bar form-control" type="text" name="phoneno" id="phoneno" placeholder="Enter Phone no"></div>
            </div>

            <div style="display: flex;">
            <div class="box"><p class="input_title">Date of Joining:</p></div>
            <div class="box box2"><input class="input_bar form-control" type="date" name="dateofjoining" id="dateofjoining" placeholder="Enter Date of Joining"></div>
            </div>

            <div style="display: flex;">
            <div class="box"><p class="input_title">Lisence Type:</p></div>
            <div class="box box2"><input class="input_bar form-control" type="text" name="licensetype" id="licensetype" placeholder="Enter Liscence Type"></div>
            </div>

            <div style="display: flex;">
            <div class="box"><p class="input_title"><span style="color:red;">*</span> Expiry Date:</p></div>
            <div class="box box2"><input class="input_bar form-control" type="date" name="expirydate" id="expirydate" placeholder="Enter Expiry Date"></div>
            </div>
              <span id="alertMsgTxt3" style="color:red;"></span>
            <div style="display: flex;">
            <div class="box"><p class="input_title">Aadhaar no: </p></div>
            <div class="box box2"><input class="input_bar form-control" type="text" name="aadhaarno" id="aadhaarno" placeholder="Enter Asdhaar no"></div>
            </div>

            <div style="display: flex;">
            <div class="box"><p class="input_title">Vehicle no:</p></div>
            <div class="box box2"><input class="input_bar form-control" type="text" name="vehicleno" id="vehicleno" placeholder="Enter Vehicle no"></div>
            </div>
          </div>


          <div class="col-md-5">
           

            <div style="display: flex;">
            <div class="box"><p class="input_title">Address:</p></div>
            <div class="box box2"><input class="input_bar form-control" type="text" name="address" id="address" placeholder="Enter Address"></div>
            </div>

            <div style="display: flex;">
            <div class="box"><p class="input_title">State:</p></div>
            <div class="box box2"><input class="input_bar form-control" type="text" name="state" id="state" placeholder="Enter State"></div>
            </div>

            <div style="display: flex;">
            <div class="box"><p class="input_title">DOB:</p></div>
            <div class="box box2"><input class="input_bar form-control" type="date" name="dob" id="dob" placeholder="Enter DOB"></div>
            </div>

            <div style="display: flex;">
            <div class="box"><p class="input_title"><span style="color:red;">*</span> Lisence no:</p></div>
            <div class="box box2"><input class="input_bar form-control" type="text" name="licenseno" id="licenseno" placeholder="Enter Lisence no"></div>
                
            </div>
                <span id="alertMsgTxt2" style="color:red;"></span>

            <div style="display: flex;">
            <div class="box"><p class="input_title">Issue Date:</p></div>
            <div class="box box2"><input class="input_bar form-control" type="date" name="issuedate" id="issuedate" placeholder="Enter Issue Date"></div>
            </div>

            <div style="display: flex;">
            <div class="box"><p class="input_title">Authority:</p></div>
            <div class="box box2"><input class="input_bar form-control" type="text" name="authority" id="authority" placeholder="Enter Authority"></div>
            </div>

            <div style="display: flex;">
            <div class="box"><p class="input_title">Blood Group:</p></div>
            <div class="box box2"><input class="input_bar form-control" type="text" name="bloodgroup" id="bloodgroup" placeholder="Enter Blood Group"></div>
            </div>

            <div style="display: flex;">
            <div class="box"><p class="input_title">salary:</p></div>
            <div class="box box2"><input class="input_bar form-control" type="text" name="salary" id="salary" placeholder="Enter salary"></div>
            </div>
          </div>

        </div>

        <div style="text-align: center;">
        <input type="button" class="btn btn-default sbmt_btn" id="submitbtn_driver" onclick="submitBtn()" value="Submit">
        </div>
</form> 
                                                                     <div id="view_drivermaster" hidden>
                                                                            <div class="panel-primary" border="0px">
                                                                                    <div class="panel panel-heading"></div>
                                                                                                          <div class="panel-body">  
                                                                                      
                                                                                      <div class="col-xs-12 form-group">
                                                                                          <label class="control-label col-xs-6" for="name">Name:</label>
                                                                                          <div class="col-xs-6" id="name1">
                                                                                            
                                                                                          </div>
                                                                                        </div>
                                                                                       <div class="col-xs-12 form-group">
                                                                                          <label class="control-label col-xs-6" for="UniqueId">Unique Id:</label>
                                                                                          <div class="col-xs-6" id="uniqueid1">
                                                                                            
                                                                                              </div>
                                                                                        </div>
                                                                                    
                                                                                      <div class="col-xs-12 form-group">
                                                                                          <label class="control-label col-xs-6" for="FatherName">Father Name:</label>
                                                                                          <div class="col-xs-6" id="fathername1">
                                                                                          
                                                                                              </div>
                                                                                        </div>
                                                                                      <div class="col-xs-12 form-group">
                                                                                          <label class="control-label col-xs-6" for="ChesisNo">Address:</label>
                                                                                          <div class="col-xs-6" id="address1">
                                                                                            
                                                                                              </div>
                                                                                        </div>
                                                                                      
                                                                                      <div class="col-xs-12 form-group">
                                                                                          <label class="control-label col-xs-6" for="city">City:</label>
                                                                                          <div class="col-xs-6" id="city1">
                                                                                            
                                                                                          </div>
                                                                                        </div>
                                                                                      <div class="col-xs-12 form-group">
                                                                                          <label class="control-label col-xs-6" for="RCBookNo">state:</label>
                                                                                          <div class="col-xs-6" id="state1">
                                                                                           
                                                                                              </div>
                                                                                        </div>
                                                                                      <div class="col-xs-12 form-group">
                                                                                          <label class="control-label col-xs-6" for="RegDate">Phone Number:</label>
                                                                                          <div class="col-xs-6" id="phoneno1">
                                                                                            
                                                                                              </div>
                                                                                        </div>
                                                                                      <div class="col-xs-12 form-group">
                                                                                          <label class="control-label col-xs-6" for="dob">DOB:</label>
                                                                                          <div class="col-xs-6" id="dob1">
                                                                                           
                                                                                              </div>
                                                                                        </div>
                                                                                      <div class="col-xs-12 form-group">
                                                                                          <label class="control-label col-xs-6" for="dateofjoining">Date Of Joining:</label>
                                                                                          <div class="col-xs-6" id="dateofjoining1">
                                                                                            
                                                                                              </div>
                                                                                        </div>
                                                                                        <div class="col-xs-12 form-group">
                                                                                                <label class="control-label col-xs-6" for="licensenumber">License Number:</label>
                                                                                                <div class="col-xs-6" id="licenseno1">
                                                                                                  
                                                                                                    </div>
                                                                                              </div>
                                                                                      <div class="col-xs-12 form-group">
                                                                                          <label class="control-label col-xs-6" for="licensetype">License Type:</label>
                                                                                          <div class="col-xs-6" id="licensetype1">
                                                                                            
                                                                                              </div>
                                                                                        </div>
                                                                                        <div class="col-xs-12 form-group">
                                                                                                <label class="control-label col-xs-6" for="issuedate">Issue Date:</label>
                                                                                                <div class="col-xs-6" id="issuedate1">
                                                                                                  
                                                                                                    </div>
                                                                                              </div>
                                                                                    
                                                                                      <div class="col-xs-12 form-group">
                                                                                          <label class="control-label col-xs-6" for="authority">Authority:</label>
                                                                                          <div class="col-xs-6" id="authority1">
                                                                                            
                                                                                              </div>
                                                                                        </div>
                                                                                        <div class="col-xs-12 form-group">
                                                                                                <label class="control-label col-xs-6" for="expirydate">Expiry Date:</label>
                                                                                                <div class="col-xs-6" id="expirydate1">
                                                                                                  
                                                                                                    </div>
                                                                                              </div>
                                                                                      <div class="col-xs-12 form-group">
                                                                                          <label class="control-label col-xs-6" for="aadharnumber">Aadhar Number:</label>
                                                                                          <div class="col-xs-6" id="aadhaarno1">
                                                                      
                                                                                              </div>
                                                                                        </div>
                                                                                      <div class="col-xs-12 form-group">
                                                                                          <label class="control-label col-xs-6" for="bloodgroup">Blood Group:</label>
                                                                                          <div class="col-xs-6" id="bloodgroup1">
                                                                                          
                                                                                              </div>
                                                                                        </div>
                                                                                        <div class="col-xs-12 form-group">
                                                                                                <label class="control-label col-xs-6" for="vehiclenumber">Vehicle Number:</label>
                                                                                                <div class="col-xs-6" id="vehicleno1">
                                                                                                  
                                                                                                    </div>
                                                                                              </div>
                                                                                              <div class="col-xs-12 form-group">
                                                                                                    <label class="control-label col-xs-6" for="salary">Salary:</label>
                                                                                                    <div class="col-xs-6" id="salary1">
                                                                                                      
                                                                                                        </div>
                                                                                               </div>
                                                                                    </div>
                                                                            </div>
                                                                </div>
                                                      </div>
                                           </div>
                                                      
                                                   
                                                     
                                                                 <script>
                                                                   var data;
                                                               var table_drivermaster=document.getElementById("table_drivermaster");
                                                               var addForm_drivermaster=document.getElementById("addForm_drivermaster");
                                                               var view_drivermaster=document.getElementById("view_drivermaster");
                                                               //var back = document.getElementById();  
                                                               var back_drivermaster = document.getElementById("btnAdd_drivermaster"); 
                                                               var submit_drivermaster = document.getElementById("submitbtn_drivermaster");                                                              //  var serverUrl="http://192.168.0.2/";
                                                                   localStorage['id'] = "";
                                                                   var serverUrl="<?php echo URL; ?>";

       function addDriverMaster(){
                                                    
        if(back_drivermaster.value == "Add New Driver"){
             data="";
                //alert("dfs")
               //localStorage["id"] = "";
               //var data="";
               //alert(data);
              //  alert(data);
            updateEditinfo(data);
        
        
       // var y = document.getElementById("view")
        table_drivermaster.style.display="none";
         
        
        //if (y.style.display === "none") {
        addForm_drivermaster.style.display = "block";
        view_drivermaster.style.display = "none";
        back_drivermaster.value="Back";
        }
        else{
           table_drivermaster.style.display="block";
           addForm_drivermaster.style.display = "none";
           view_drivermaster.style.display = "none";
           back_drivermaster.value ="Add New Driver";
        }

               }
                                                                     
     document.getElementById("submitbtn_driver").addEventListener("click", function(event){
    event.preventDefault()
});

               function updateEditinfo(mdata){
                    $("#alertMsgTxt").text("");
     $("#alertMsgTxt1").text("");
  //alert("enter");
  //alert("data+"+data);
      if(mdata != ""){ 
    var xhr4 = new XMLHttpRequest(), 
        method = 'GET',
        overrideMimeType = 'application/json',
        url =   ''+serverUrl+'master/view_drivermaster?id='+mdata+'';
              // ADD THE URL OF THE FILE.
//alert(url);
    xhr4.onreadystatechange = function () {
      //alert("request");
        if (xhr4.readyState === XMLHttpRequest.DONE && xhr4.status === 200) {

          var data=JSON.parse(xhr4.responseText);
          var driverDetail=data[0]['attributes'];
                 var driver = JSON.parse(driverDetail);
           
          
                          // alert(name);
                          document.getElementById("name").value= data[0]['name'];
                          document.getElementById("uniqueid").value= data[0]['uniqueid'];
                          document.getElementById("fathername").value=driver.fathername;
                          document.getElementById("address").value=driver.address;
            //alert(driver.address);
                          document.getElementById("city").value=driver.city;
            //alert(driver.city)
            
                          document.getElementById("state").value=driver.state;
                          document.getElementById("phoneno").value=driver.phoneno;
                          document.getElementById("dob").value=driver.dob;
                          document.getElementById("dateofjoining").ivalue=driver.dateofjoining;
                          document.getElementById("licenseno").value=driver.licenseno;
                          document.getElementById("licensetype").value=driver.licensetype;
                          document.getElementById("issuedate").value=driver.issuedate;
                          document.getElementById("authority").value=driver.authority;
                          document.getElementById("expirydate").value=driver.expirydate;
                          document.getElementById("aadhaarno").value=driver.aadhaarno;
                          document.getElementById("bloodgroup").value=driver.bloodgroup;
                          document.getElementById("vehicleno").value=driver.vehicleno;
                          document.getElementById("salary").value=driver.salary;
           // alert("driver");
             back_drivermaster.value="Update";
        }
    };
   
    xhr4.open(method, url, true);
    xhr4.send();
      }
      else if(mdata == ""){
       //alert("null");
       document.getElementById("name").value= "";
         // alert(document.getElementById("name").value)
       document.getElementById("uniqueid").value= Math.floor(Math.random() * 10000000000);
          //alert(document.getElementById("uniqueid").value)
       document.getElementById("fathername").value="";
        //  alert("father")
       document.getElementById("address").value="";
         // alert("address")
           //$("#city").val()="";
      document.getElementById("city").value="";
          //alert("city")
       document.getElementById("state").value="";
        //  alert("state")
            //$("#phone").val()="";
      document.getElementById("phoneno").value="";
        //  alert("phone")
       document.getElementById("dob").value="";
          // alert("dob")
       document.getElementById("dateofjoining").value="";
          // alert("doj")
       document.getElementById("licenseno").value="";
       document.getElementById("licensetype").value="";
       document.getElementById("issuedate").value="";
       document.getElementById("authority").value="";
       document.getElementById("expirydate").value="";
       document.getElementById("aadhaarno").value="";
       document.getElementById("bloodgroup").value="";
       document.getElementById("vehicleno").value="";
       document.getElementById("salary").value="";

             back_drivermaster.value="Submit";
      }

}

function updateinfo(sdata){
       //alert(data);

        if(sdata != null){
        var xhr3 = new XMLHttpRequest(), 
        method = 'GET',
        overrideMimeType = 'application/json',
        url = ''+serverUrl+'master/view_drivermaster?id='+sdata+'';; 
        //alert(url)
              // ADD THE URL OF THE FILE.

    xhr3.onreadystatechange = function () {
      //alert("dsf");
        if (xhr3.readyState === XMLHttpRequest.DONE && xhr3.status === 200) {

        // alert(xhr.responseText)
        var data= JSON.parse(xhr3.responseText);
        
                    var driverDetail=data[0]['attributes'];
                    var driver = JSON.parse(driverDetail);
                    //alert(attributes);
                    //alert
                   // for(var i=0; i<data.length)
                   
                   // alert(data[0]['SensorSerial']);
                    document.getElementById("name1").innerHTML= data[0]['name'];
                    document.getElementById("uniqueid1").innerHTML= data[0]['uniqueid'];
                    document.getElementById("fathername1").innerHTML=driver.fathername;
                    document.getElementById("address1").innerHTML=driver.address;
                    document.getElementById("city1").innerHTML=driver.city;
                    document.getElementById("state1").innerHTML=driver.state;
                    document.getElementById("phoneno1").innerHTML=driver.phoneno;
                    document.getElementById("dob1").innerHTML=driver.dob;
                    document.getElementById("dateofjoining1").innerHTML=driver.dateofjoining;
                    document.getElementById("licenseno1").innerHTML=driver.licenseno;
                    document.getElementById("licensetype1").innerHTML=driver.licensetype;
                    document.getElementById("issuedate1").innerHTML=driver.issuedate;
                    document.getElementById("authority1").innerHTML=driver.authority;
                    document.getElementById("expirydate1").innerHTML=driver.expirydate;
                    document.getElementById("aadhaarno1").innerHTML=driver.aadhaarno;
                    document.getElementById("bloodgroup1").innerHTML=driver.bloodgroup;
                    document.getElementById("vehicleno1").innerHTML=driver.vehicleno;
                    document.getElementById("salary1").innerHTML=driver.salary;
            

        //  }

          
         // alert(xhr1.responseText);
         // window.location.href="vehiclemaster.html";
                                                    }
    };
    xhr3.open(method, url, true);
    xhr3.send();
        }
                          }             
                                                      function confirmDelete(data) {
                                                     //   var delUrl= "http://192.168.0.2/vts_sumeet3/master/delete_drivermaster?email=webrains@gmail.com&password=admin&id="+data+"";
                                                        if (confirm("Are you sure you want to delete")) {
         var xhr1 = new XMLHttpRequest(), 
            method = 'GET',
            overrideMimeType = 'application/json',
            url = ''+serverUrl+'master/delete_drivermaster?id='+data+''; 
                  // ADD THE URL OF THE FILE.
           //alert(url);
        xhr1.onreadystatechange = function () {
         // alert("fads")
           // if (xhr1.readyState === XMLHttpRequest.DONE && xhr1.status === 200) {
                   // alert("hh");
                // PARSE JSON DATA.
                
              //window.location.href= "drivermaster";
            createTable();
                
                                                         
                                                       // }
                                                      };
                                                      xhr1.open(method, url, true);
                                                      xhr1.send();
    
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
    var otable1, displayTable=[], txt
                                                      
                                                           $(document).ready(function() {
                                                            // alert("start")
                                                               
                                                                  otable1=    $('#example_drivermaster').DataTable( {
                                                                      "paging":   false,
                                                                         // "iDisplayLength": 5,
                                                          "aLengthMenu": [
                                                            //
                                                          ],
                                                         
                                                          initComplete : function() {
                                                              $("#example_drivermaster_filter").detach().show();
                                                                      $('#searchTxt_drivermaster').on('input', function(){
                                                                          otable1.search(this.value).draw();   
                                                                      });   
                                                            //alert("ends");
                                                            UpdateInfo();
                                                         },
                                                                      dom: 'Bfrtip',
     buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
              ],
                                                       }) ;
    });
    function view(id, data1){
     
    //alert(data);
      // if(data==1){
      localStorage["id"]=id;
      data = localStorage["id"];
      if(data1 == 1){
       updateinfo(data);
       view_drivermaster.style.display = "block";
        table_drivermaster.style.display = "none";
        
        addForm_drivermaster.style.display = "none";
        back_drivermaster.value = "Back";
  
  //window.location.href= "view_vehiclemaster.html";
  }else{
          table_drivermaster.style.display = "none";
          addForm_drivermaster.style.display = "block";
          view_drivermaster.style.display ="none"
          back_drivermaster.value = "Back";
         updateEditinfo(data);
        // localStorage["id"]=data;
      
      }
    //}
    
    }
    
    
    function UpdateInfo(){
      //alert("end")
    createTable();
    
    }
    function createTable(){
      var data, driver, detail;
        var txt='';
        var tdDriverName="", tdUniqueId="", tdQR="", tdFathersName="";
        var tdBloodGroup="", tdLicenseNo="", tdExpiry="", tdDob="", tdPhone="", tdAuthority="", tdVehicleNo="", tdView="", tdEdit="", tdDelete="";
      
        var xhr = new XMLHttpRequest(), 
            method = 'GET',
            overrideMimeType = 'application/json',
            url = serverUrl+'master/drivermaster_details'; 
                  // ADD THE URL OF THE FILE.
    
        xhr.onreadystatechange = function () {
            if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                    
                // PARSE JSON DATA.
                if(xhr.responseText){
    
                // alert(xhr.responseText);
                   var data=JSON.parse(xhr.responseText);
                   for(var i=0; i<data.length; i++){
    //alert(data.length)
    //alert(data[i]['id'])
    //alert(data[i]['attributes']);
                      detail= data[i]['attributes'];
                   //  alert(detail)
                      driver=JSON.parse(detail);
                    
                 
    
    
                       tdDriverName= '<tr style="height:20px;" role="row"><td>'+data[i]['name']+'</td>';
                       tdQR = '<td><a href="'+serverUrl+'master/printDRIDCard?id='+data[i]['id']+'" target="_blank"><img src="'+serverUrl+'public/images/qrcode.png" width="15px"/></a></td>';
                       tdLicenseNo='<td>'+driver.licenseno+'</td>';
                       tdExpiry='<td >'+driver.expirydate+'</td>';
                       tdBloodGroup='<td>'+driver.bloodgroup+'</td>';
                       tdPhone='<td>'+driver.phoneno+'</td>';
                       tdVehicleNo='<td>'+driver.vehicleno+'</td>';
                       tdView='<td><a href="#a" onclick="javascript:view('+data[i]['id']+',1)"> VIEW</a></td>';
                       tdEdit='<td><a href="#a" onclick="javascript:view('+data[i]['id']+',2)"> EDIT</a></td>';
                       tdDelete='<td><a href="#a" onclick="javascript:confirmDelete('+data[i]['id']+')"> DELETE</a></td></tr>';
             // tdFathersName='<td>'+driver.fathername+'</td>';
              
               //    tdUniqueId = '<td>'+data[i]['uniqueid']+'</td>';
//              
//              tdDob='<td>'+driver.dob+'</td>';
//              
//              tdAuthority='<td>'+driver.authority+'</td>';
              
              
             
             
              txt = tdDriverName+tdQR+tdLicenseNo+tdExpiry+tdBloodGroup+tdPhone+tdVehicleNo+tdView+tdEdit+tdDelete;
              displayTable[i]= txt;
             // alert(txt)
             // alert(displayTable[i]);
    
                   }
                   
                 
              scrollPos = $("#example_drivermaster").scrollTop();
            //scrollPosX = $("#tblData")scroll.offsetX();
        //	alert(otable.draw().value);
       // alert(displayTable.length);
       // alert(otable.innerHTML);
            otable1.clear().draw();
             for( i = 0; i < displayTable.length; i++ ) {
    //alert(displayTable[i])
              otable1.row.add($(displayTable[i]));
             }
            otable1.draw();
          //  $("#vehicletable").scrollTop(scrollPos);
                   
    
                }
            }
        };
       
        xhr.open(method, url, true);
        xhr.send();
    
    
    
    
            
    }

    function submitBtn(){
      var name=document.getElementById("name").value;
      
       var uniqueid=document.getElementById("uniqueid").value;
       //var uniqueid = Math.floor(Math.random() * 1000000);
       var fathername=document.getElementById("fathername").value;
   
       var address=document.getElementById("address").value;
      
       var city=document.getElementById("city").value;
        
       var state=document.getElementById("state").value;
   
       var phoneno=document.getElementById("phoneno").value;
       
       var dob=document.getElementById("dob").value;
      
       var dateofjoining=document.getElementById("dateofjoining").value;
    
       var licenseno=document.getElementById("licenseno").value;
  
       var licensetype=document.getElementById("licensetype").value;
 
       var issuedate=document.getElementById("issuedate").value;

       var expirydate=document.getElementById("expirydate").value;

       var authority=document.getElementById("authority").value;
   
       var aadhaarno=document.getElementById("aadhaarno").value;

       var bloodgroup=document.getElementById("bloodgroup").value;

       var vehicleno=document.getElementById("vehicleno").value;

       var salary=document.getElementById("salary").value;
      
      // var panno=document.getElementById("panno").value;
        // alert(panno);
       var button = document.getElementById("submitbtn").value;
//var button= $("#submitbtn").val();
//alert(button);
        if(name!="" && uniqueid !="" && licenseno !=""){
            
if(button == "Submit"){
//alert("inside if");
     var xhr2 = new XMLHttpRequest(), 
        method = 'GET',
        overrideMimeType = 'application/json',
        url = serverUrl+'master/edit_submit_drivermaster?name='+name+'&uniqueid='+uniqueid+'&fathername='+fathername+'&address='+address+'&city='+city+'&state='+state+'&phoneno='+phoneno+'&dob='+dob+'&dateofjoining='+dateofjoining+'&licenseno='+licenseno+'&licensetype='+licensetype+'&issuedate='+issuedate+'&expirydate='+expirydate+'&authority='+authority+'&aadhaarno='+aadhaarno+'&bloodgroup='+encodeURIComponent(bloodgroup)+'&vehicleno='+vehicleno+'&salary='+salary+''; 
              // ADD THE URL OF THE FILE.
//alert(url);
    xhr2.onreadystatechange = function () {
      //alert("request");
        if (xhr2.readyState === XMLHttpRequest.DONE && xhr2.status === 200) {
                //alert("submit");
            // PARSE JSON DATA.
          //  if(xhr1.responseText){
       // window.location.href= "drivermaster";
             createTable();
             table_drivermaster.style.display = "block";
            addForm_drivermaster.style.display = "none";
             back_drivermaster.value="Add New Driver";
             $.notify("Driver Added Successfully", "success"); 
               // alert(xhr1.responseText);
              //  x.style.display = "block";
              //  y.style.display = "none";
              //  back.value="Add New Vehicle";
           // }
        }
    };
   
    xhr2.open(method, url, true);
    xhr2.send();
}else{

  var xhr2 = new XMLHttpRequest(), 
        method = 'GET',
        overrideMimeType = 'application/json',
        url = serverUrl+'master/edit_update_drivermaster?id='+data+'&name='+name+'&uniqueid='+uniqueid+'&fathername='+fathername+'&address='+address+'&city='+city+'&state='+state+'&phoneno='+phoneno+'&dob='+dob+'&dateofjoining='+dateofjoining+'&licenseno='+licenseno+'&licensetype='+licensetype+'&issuedate='+issuedate+'&expirydate='+expirydate+'&authority='+authority+'&aadhaarno='+aadhaarno+'&bloodgroup='+encodeURIComponent(bloodgroup)+'&vehicleno='+vehicleno+'&salary='+salary+''; 
              // ADD THE URL OF THE FILE.
//alert(url);
    xhr2.onreadystatechange = function () {
      //alert("request");
        if (xhr2.readyState === XMLHttpRequest.DONE && xhr2.status === 200) {
         // alert("update"); 
            // PARSE JSON DATA.
          //  if(xhr1.responseText){

               // alert(xhr1.responseText);
               //window.location.href="drivermaster";
             createTable();
             table_drivermaster.style.display = "block";
            addForm_drivermaster.style.display = "none";
             back_drivermaster.value="Add New Driver";
             $.notify("Driver Updated Successfully", "success"); 
           // }
          //  x.style.display = "block";
          //      y.style.display = "none";
          //      back.value="Add New Vehicle";
        }
    };
   
    xhr2.open(method, url, true);
    xhr2.send();
     $("#alertMsgTxt").text("");
     $("#alertMsgTxt1").text("");
     $("#alertMsgTxt2").text("");

}
        }else{
if(name==""){
  $("#alertMsgTxt").text("Please Enter Driver Name");
}
    else{
         $("#alertMsgTxt").text("");
        
    }
    if(uniqueid==""){
     $("#alertMsgTxt1").text("Please Enter Uniqueid");
    }
    else{
        
         $("#alertMsgTxt1").text("");
    }
            if(licenseno==""){
     $("#alertMsgTxt2").text("Please Enter License Number");
    }
    else{
        
         $("#alertMsgTxt2").text("");
    }
    return false;
    }
        }
    
                                                                 //url="http://192.168.1.2/vts_sumeet3/master/drivermaster_details?traccarID=1"; 
                                                              </script>
                                                             
